<?php

namespace NoxIntranet\SupportSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\SupportSIBundle\Entity\CompteurDemande;
use NoxIntranet\SupportSIBundle\Entity\DemandeMateriel;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SupportSIController extends Controller {

    public function accueilAction(Request $request) {

        return $this->render('NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig');
    }

    public function licensesAction() {
        return $this->render('NoxIntranetSupportSIBundle:Support:licenses.html.twig');
    }

    public function ticketingAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/index.php');
    }

    public function baseDeConnaissancesAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/kb/index.php');
    }

    public function wikiAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];

        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/WikiNox/index.php');
    }

    /**
     * 
     * Affiche un formulaire demande de matériel/logiciel et transmet la demande à la DSI.
     * 
     * @param Request Requête contenant les données de la demande de matériel.
     * @return View
     */
    public function demandeAction(Request $request) {

        // Récupère l'entitée du collaborateur actuel.
        $usr = $this->get('security.context')->getToken()->getUser();

        // On récupère l'entitée de hiérarchie du collaborateur.
        $em = $this->getDoctrine()->getManager();
        $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($usr->getUsername());
        
        // Si la hiérachie n'est pas définie ou que l'entitée du DA n'est pas trouvée...
        if (empty($userHierarchy) || $this->get('noxintranet.hierarchy_helper')->getUserEntityFromCanonicalName($userHierarchy->getDA()) === null) {
            // On redirige vers l'accueil et on affiche un message d'erreur.
            $request->getSession()->getFlashBag()->add('noticeErreur', "Erreur d'acquisition de la hiérarchie, veuillez contacter le support.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        // On récupére l'entitée du DA.
        $DAEntity = $this->get('noxintranet.hierarchy_helper')->getUserEntityFromCanonicalName($userHierarchy->getDA());

        // Récupère le nom d'utilisateur et l'agence du collaborateur actuel.
        $name = $usr->getUsername();
        $agence = $userHierarchy->getEtablissement();
        $completName = $usr->getFirstname() . ' ' . $usr->getLastname();

        // Génére le formulaire de demande de matériel
        $formBuilder = $this->get('form.factory')->createBuilder('form');
        $formBuilder
                ->add('agence', TextType::class, array(
                    'data' => $agence,
                    'attr' => array(
                        'readonly' => true
                    )
                ))
                ->add('demandeur', TextType::class, array(
                    'data' => $completName,
                    'attr' => array(
                        'readonly' => true
                    )
                ))
                ->add('materielCheckbox', CheckboxType::class, array(
                    'label' => 'Matériel',
                    'required' => false
                ))
                ->add('logicielCheckbox', CheckboxType::class, array(
                    'label' => 'Logiciel',
                    'required' => false
                ))
                ->add('materielList', ChoiceType::class, array(
                    'choices' => array(
                        'Portable' => 'Portable',
                        'Ultra portable' => 'Ultra portable',
                        'Poste fixe' => 'Poste fixe',
                        'Poste CAO' => 'Poste CAO'
                    ),
                    'placeholder' => 'Séléctionnez un matériel',
                    'required' => false,
                ))
                ->add('logicielName', TextareaType::class, array(
                    'required' => false,
                    'attr' => array(
                        'style' => 'vertical-align: top; width: 90%; max-width: 90%;'
                    )
                ))
                ->add('raison', TextareaType::class, array(
                    'attr' => array(
                        'style' => 'width: 80%; max-width: 80%;'
                    )
                ))
                ->add('date', DateType::class, array(
                    'widget' => 'choice',
                    'years' => range(date('Y'), date('Y', strtotime('+4 year'))),
                ))
                ->add('mailSuperieur', EmailType::class, array(
                    'attr' => array(
                        'readonly' => true,
                        'style' => 'background-color: #E6E6E6;'
                    ),
                    'data' => $DAEntity->getUsername() . '@groupe-nox.com' // On génére le mail du DA en fonction de son username.
                ))
                ->add('Valider', SubmitType::class)
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            // Génére la date du jour.
            date_default_timezone_set('Europe/Paris');
            $date = new \DateTime();

            // Génére l'email du collaborateur en fonction de son nom d'utilisateur.
            $emailDemandeur = preg_replace('/-.*/', '', $name) . "@groupe-nox.com";

            // Génére un compteur de demande ou met la date et la valeur à jour si il existe déjà.
            $compteur = $em->getRepository('NoxIntranetSupportSIBundle:CompteurDemande')->find(6);
            if ($compteur === null) {
                $compteur = new CompteurDemande();
                $compteur->setId(6);
                $compteur->setCompteur(1);
                $compteur->setDate($date);

                $em->persist($compteur);
                $em->flush();
            } else {
                var_dump($compteur->getDate());
                var_dump($date);
                if ($compteur->getDate()->format('d/m/Y') !== $date->format('d/m/Y')) {
                    $compteur->setCompteur(1);
                    $compteur->setDate($date);
                    $em->persist($compteur);
                    $em->flush();
                }
            }

            // Génére un numéro pour la demande.
            $numRequette = $date->format('d/m/Y') . "-" . $compteur->getCompteur();

            // Génére une clé aléatoire pour identifier la demande.
            $cle = md5(uniqid(rand(), true));
            while (!(empty($em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneByCleDemande($cle)))) {
                $cle = md5(uniqid(rand(), true));
            }

            // Récupère l'adresse du helpdesk.
            $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

            // Génére l'email de demande pour la DSI et l'envoie.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande de matériel/logiciel ' . $completName)
                    ->setFrom('intranet@groupe-nox.com')
                    ->setTo($adresseHelpdesk)
                    ->setBody(
                    $this->renderView(
                            'Emails/DemandeMateriel/demandeMaterielDSI.html.twig', array('materielCheckbox' => $form->get('materielList')->getData(), 'materiel' => $form->get('materielList')->getData(), 'logicielCheckbox' => $form->get('logicielCheckbox')->getData(), 'demandeur' => $name, 'agence' => $agence,
                        'numOrdre' => $numRequette, 'logiciel' => $form->get('logicielName')->getData(), 'date' => $form->get('date')->getData(), 'cle' => $cle, 'raison' => $form->get('raison')->getData()
                            )
                    ), 'text/html'
            );
            $this->get('mailer')->send($message);

            // Incrémente le compteur de demande du jour.
            $compteur->setCompteur($compteur->getCompteur() + 1);
            $em->persist($compteur);

            // Stock les données de la demande.
            $donneesMessage = array('materielCheckbox' => $form->get('materielList')->getData(), 'materiel' => $form->get('materielList')->getData(), 'logicielCheckbox' => $form->get('logicielCheckbox')->getData(), 'demandeur' => $name, 'agence' => $agence,
                'numOrdre' => $numRequette, 'logiciel' => $form->get('logicielName')->getData(), 'emailSuperieur' => $form->get('mailSuperieur')->getData(), 'raison' => $form->get('raison')->getData(),
                'date' => $form->get('date')->getData(), 'cle' => $cle, 'emailDemandeur' => $emailDemandeur
            );

            // Stock la demande en base de donnée en attente de traitement.
            $newDemandeMateriel = new DemandeMateriel();
            $newDemandeMateriel->setMailSuperieur($form->get('mailSuperieur')->getData());
            $newDemandeMateriel->setMessage($donneesMessage);
            $newDemandeMateriel->setCleDemande($cle);
            $newDemandeMateriel->setStatus('DSI');
            $em->persist($newDemandeMateriel);
            $em->flush();

            // On retourne un message de confirmation et on redirige vers le formulaire de demande de matériel.
            $request->getSession()->getFlashBag()->add('notice', "Votre demande a été transmise à la DSI et est en attente de validation.");
            return $this->redirectToRoute('nox_intranet_demande_materiel');
        }

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('formDemandeMateriel' => $form->createView()));
    }

    /**
     * 
     * Affiche la demande de matériel d'un collaborateur et permet de la valider pour l'envoyer au N+1 ou de la refuser.
     * 
     * @param Request Requête contenant la décision de validation ou de refus et optionnelement l'estimation du prix de la demande.
     * @param String Clé correspondant à la demande de matériel.
     * @return View
     */
    public function demandeConfirmationDSIAction(Request $request, $cleDemande) {

        // Récupère la demande de matériel/logiciel
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneBy(array('cleDemande' => $cleDemande, 'status' => 'DSI'));

        // Si la demande est présente en base de données...
        if (!empty($demande)) {
            $donneesMessage = $demande->getMessage();
            $mailSuperieur = $demande->getMailSuperieur();
            $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $donneesMessage['demandeur']));
            $nomCompletDemandeur = $demandeur->getFirstname() . ' ' . $demandeur->getLastname();

            // Génére le formulaire de validation/refus de la demande avec posibilité de renseigner une estimation du prix.
            $formBuilder = $this->get('form.factory')->createBuilder('form');
            $formBuilder
                    ->add('agence', TextType::class, array(
                        'attr' => array(
                            'readonly' => true
                        ),
                        'data' => $donneesMessage['agence'],
                        'required' => false
                    ))
                    ->add('demandeur', TextType::class, array(
                        'attr' => array(
                            'readonly' => true
                        ),
                        'data' => $nomCompletDemandeur,
                        'required' => false
                    ))
                    ->add('materiel', TextType::class, array(
                        'attr' => array(
                            'readonly' => true
                        ),
                        'data' => $donneesMessage['materiel'],
                        'required' => false
                    ))
                    ->add('logiciel', TextareaType::class, array(
                        'attr' => array(
                            'readonly' => true,
                            'style' => 'vertical-align: top; width: 90%; max-width: 90%; background-color: #E6E6E6;'
                        ),
                        'data' => $donneesMessage['logiciel'],
                        'required' => false
                    ))
                    ->add('raison', TextareaType::class, array(
                        'attr' => array(
                            'readonly' => true,
                            'style' => 'width: 80%; max-width: 80%; background-color: #E6E6E6;'
                        ),
                        'data' => $donneesMessage['raison'],
                        'required' => false
                    ))
                    ->add('date', TextType::class, array(
                        'attr' => array(
                            'readonly' => true
                        ),
                        'data' => $donneesMessage['date']->format('d/m/Y'),
                        'required' => false
                    ))
                    ->add('emailSuperieur', TextType::class, array(
                        'attr' => array(
                            'readonly' => true
                        ),
                        'data' => $donneesMessage['emailSuperieur'],
                        'required' => false
                    ))
                    ->add('prix', TextType::class, array(
                        'required' => false
                    ))
                    ->add('Valider', SubmitType::class)
                    ->add('Refuser', SubmitType::class)
            ;
            $form = $formBuilder->getForm();
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Si la demande est validée par la DSI...
                if ($form->get('Valider')->isClicked()) {
                    // On envoi un email au supérieur hiérachique pour demander la confirmation d'achat.
                    $messageHelpdesk = \Swift_Message::newInstance()
                            ->setSubject('Demande de matériel/logiciel ' . $donneesMessage['demandeur'])
                            ->setFrom('intranet@groupe-nox.com')
                            ->setTo($mailSuperieur)
                            ->setBody(
                            $this->renderView(
                                    'Emails/DemandeMateriel/demandeMateriel.html.twig', array('donneesMessage' => $donneesMessage, 'prixEstime' => $form->get('prix')->getData(), 'cle' => $demande->getCleDemande())
                            ), 'text/html'
                    );
                    $this->get('mailer')->send($messageHelpdesk);

                    // On sauvegarde la valeur du prix estimé et on met à jour la date d'intervention.
                    $donneesMessage['prixEstime'] = $form->get('prix')->getData();
                    $demande->setMessage($donneesMessage);
                    $demande->setDate(new \DateTime());

                    // On modifie le status de la demande pour que la DSI n'y ai plus accés.
                    $demande->setStatus('SupérieurHiérarchique');
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été validée.");
                    return $this->redirectToRoute('nox_intranet_accueil');
                }
                // ...Si la demande est refusée par la DSI.
                else {
                    // On envoi un email au collaborateur pour lui indiquer le refus.
                    $messageDemandeur = $messageDemandeur = \Swift_Message::newInstance()
                            ->setSubject('Rejet de votre demande de matériel')
                            ->setFrom('intranet@groupe-nox.com')
                            ->setCc(array("helpdesk@groupe-nox.com" => "Helpdesk"))
                            ->setTo($donneesMessage['emailDemandeur'])
                            ->setBody(
                            $this->renderView(
                                    'Emails/DemandeMateriel/demandeMaterielRefusDSI.html.twig', array('donneesMessage' => $donneesMessage)
                            ), 'text/html'
                    );
                    $this->get('mailer')->send($messageDemandeur);

                    // On supprime la demande.
                    $em->remove($demande);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été rejetée.");
                    return $this->redirectToRoute('nox_intranet_accueil');
                }
            }
        }
        // ...Si la demande n'existe plus en base de données.
        else {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Cette demande de matériel a déjà été traitée.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeConfirmationDSI.html.twig', array('form' => $form->createView(), 'numOrdre' => $donneesMessage['numOrdre']));
    }

    /**
     * 
     * Permet de valider ou refuser une demande de matériel en fonction de la réponse séléctionnée.
     * 
     * @param Request
     * @param String Clé de la demande de matériel.
     * @param String Reponse à la demande de matériel.
     * @return View
     */
    public function demandeConfirmationSuperieurHierarchiqueAction(Request $request, $cleDemande, $reponse) {

        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneBy(array('cleDemande' => $cleDemande, 'status' => 'SupérieurHiérarchique'));

        // Si la demande est présente en base de données...
        if (!empty($demande)) {
            $donneesMessage = $demande->getMessage();

            // Si la réponse du supérieur hiérarchique est positive.
            if ($reponse === 'validation') {
                // On envoi un email au collaborateur pour lui indiquer la validation.
                $messageHelpdesk = \Swift_Message::newInstance()
                        ->setSubject('Validation de votre demande de matériel')
                        ->setFrom('intranet@groupe-nox.com')
                        ->setTo($donneesMessage['emailDemandeur'])
                        ->setBody(
                        $this->renderView(
                                'Emails/DemandeMateriel/demandeMaterielValidationSuperieur.html.twig', array('demandeur' => $donneesMessage['demandeur'])
                        ), 'text/html'
                );
                $this->get('mailer')->send($messageHelpdesk);

                // Récupère l'adresse du helpdesk.
                $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

                // On récupére le nom et le prénom du valideur (supérieur hiérarchique).
                $superieur = $this->get('security.context')->getToken()->getUser()->getFirstname() . ' ' . $this->get('security.context')->getToken()->getUser()->getLastname();

                // On envoi un email à la DSI pour lui indiquer la validation.
                $messageHelpdeskDSI = \Swift_Message::newInstance()
                        ->setSubject('Demande de matériel/logiciel ' . $donneesMessage['demandeur'] . ' valide')
                        ->setFrom('intranet@groupe-nox.com')
                        ->setTo($adresseHelpdesk)
                        ->setBody(
                        $this->renderView(
                                'Emails/DemandeMateriel/demandeMaterielValide.html.twig', array('donneesMessage' => $donneesMessage, 'superieur' => $superieur)
                        ), 'text/html'
                );
                $this->get('mailer')->send($messageHelpdeskDSI);

                // On affiche un message de confirmation de la validation de la demande.
                $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été validée.");
                $em->remove($demande); // On supprime la demande.
            }
            // Si la réponse du supérieur hiérarchique est négative.
            else {
                // On envoi un email au collaborateur pour lui indiquer le refus.
                $messageHelpdesk = \Swift_Message::newInstance()
                        ->setSubject('Rejet de votre demande de matériel')
                        ->setFrom('intranet@groupe-nox.com')
                        ->setTo($donneesMessage['emailDemandeur'])
                        ->setBody($this->renderView(
                                'Emails/DemandeMateriel/demandeMaterielRefusSuperieur.html.twig', array('demandeur' => $donneesMessage['demandeur'])
                        ), 'text/html'
                );
                $this->get('mailer')->send($messageHelpdesk);

                // On affiche un message de confirmation du refus de la demande.
                $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été refusée.");
                $em->remove($demande); // On supprime la demande.
            }

            $em->flush();
            return $this->redirectToRoute('nox_intranet_accueil');
        }
        // ...Si la demande n'existe plus en base de données.
        else {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Cette demande de matériel a déjà été traitée.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

}
