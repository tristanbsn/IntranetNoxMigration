<?php

namespace NoxIntranet\RessourcesBundle\Controller\AssistantAffaire;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use NoxIntranet\RessourcesBundle\Entity\DonneesSuivi;

class SuiviEnCoursController extends Controller {

    // Affiche la liste des suivis en cours en fonction de l'agence passé en paramêtre et permet de consulter ou supprimer un suivi.
    public function consulterSuiviAction(Request $request, $agence) {

        // On récupére les suivis en cours.
        $em = $this->getDoctrine()->getManager();
        $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'En cours'), array('nom' => 'ASC'));

        // On initialise un tableau de nom des agences avec la valeur 'Toutes'.
        $agences['Toutes'] = 'Toutes';

        // On récupére les agences en fonction des suivis.
        foreach ($suivis as $suivi) {
            if (!in_array($suivi->getAgence(), $agences)) {
                $agences[$suivi->getAgence()] = $suivi->getAgence();
            }
        }

        // Génération du formulaire de choix de l'agence.
        $formAgence = $this->get('form.factory')->createNamedBuilder('formSelectionAgence', 'form', $agences)
                ->add('Agences', ChoiceType::class, array(
                    'choices' => $agences,
                    'data' => $agence
                ))
                ->getForm();

        // Si une agence spécifique est séléctionnée.
        if ($agence !== "Toutes") {
            // On compte le nombre de suivi associé à cette agence.
            $nbSuivi = count($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'En cours', 'agence' => $agence)));

            // Si il n'existe aucun suivi pour cette agence.
            if ($nbSuivi === 0) {
                // On génére un selecteur vide dont les boutons sont désactivés.
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) use ($agence) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.agence = '" . $agence . "' AND u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'disabled' => true,
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', SubmitType::class, array(
                            'disabled' => true
                        ))
                        ->add('Supprimer', SubmitType::class, array(
                            'disabled' => true
                        ))
                        ->getForm();
            }
            // Si il existe des suivis associées à l'agence.
            else {
                // On génére un sélécteur avec les suivis associés à l'agence.
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) use ($agence) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.agence = '" . $agence . "' AND u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', SubmitType::class)
                        ->add('Supprimer', SubmitType::class)
                        ->getForm();
            }
        }
        // Si aucune agence spécifique n'est séléctionnée
        else {
            // On compte le nombre de suivi associé à cette agence.
            $nbSuivi = count($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByStatut('En cours'));

            // Si il n'existe aucun suivi.
            if ($nbSuivi === 0) {
                // On génére un selecteur vide dont les boutons sont désactivés.
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'disabled' => true,
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit', array(
                            'disabled' => true
                        ))
                        ->add('Supprimer', 'submit', array(
                            'disabled' => true
                        ))
                        ->getForm();
            }
            // Si il existe des suivis.
            else {
                // On génére un sélécteur avec les suivis.
                $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                        ->add('Suivi', EntityType::class, array(
                            'class' => 'NoxIntranetRessourcesBundle:Suivis',
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.statut = 'En cours'")
                                        ->orderBy('u.nom', 'ASC');
                            },
                            'choice_label' => 'Nom',
                        ))
                        ->add('Editer', 'submit')
                        ->add('Supprimer', 'submit')
                        ->getForm();
            }
        }

        // Traitement du formulaire de séléction de suivi.
        if ($request->request->has('formSelectionSuivi')) {
            $formSelectionSuivi->handleRequest($request);
            if ($formSelectionSuivi->isValid()) {
                // Si on clique sur le bouton 'Supprimer'
                if ($formSelectionSuivi->get('Supprimer')->isClicked()) {

                    // Récupére et supprime toutes les données associées au suivi.
                    $donneesAssocies = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findByIdSuivi($formSelectionSuivi['Suivi']->getData()->getId());
                    foreach ($donneesAssocies as $donne) {
                        $em->remove($donne);
                    }

                    // On supprime le suivi de la base de données.
                    $em->remove($formSelectionSuivi['Suivi']->getData());
                    $em->flush();

                    // On affiche un message de confirmation de suppression et on redirige vers la page de séléction de suivi en cours.
                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $formSelectionSuivi['Suivi']->getData()->getNom() . ' a été supprimé.');

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_en_cours');
                }

                // Si on clique sur le bouton 'Editer'.
                if ($formSelectionSuivi->get('Editer')->isClicked()) {

                    // On récupére l'ID du suivi et le suivi.
                    $IdSuivi = $formSelectionSuivi['Suivi']->getData()->getId();
                    $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

                    // Si aucun modèle n'est associé au suivi...
                    if ($suivi->getIdModele() === null) {
                        // ...On redirige vers la séléction du modèle.
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_modele', array('IdSuivi' => $IdSuivi));
                    }
                    // Sinon si aucun client n'est associé au suivi...
                    elseif ($suivi->getNoClient() === null) {
                        // ...On redirige vers la séléction du client.
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client', array('IdSuivi' => $IdSuivi));
                    }
                    // Sinon si aucun interlocuteur n'est associé au suivi...
                    elseif ($suivi->getNoInterlocuteur() === null) {
                        // ...On redirige vers la séléction de l'interlocuteur.
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur', array('IdSuivi' => $IdSuivi));
                    }
                    // Sinon on redirige vers le remplissage du suivi.
                    else {
                        return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                    }
                }
            }
        }

        // Traitement du formulaire de séléction de l'agence.
        if ($request->request->has('formSelectionAgence')) {
            $formAgence->handleRequest($request);
            if ($formAgence->isValid()) {
                // On redirige vers la séléction du suivi en cours en fonction de l'agence passé en paramêtre.
                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_en_cours', array('agence' => $formAgence['Agences']->getData()));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\SuiviEnCours:assistantaffaireedition.html.twig', array('formSelectionSuivi' => $formSelectionSuivi->createView(), 'formAgence' => $formAgence->createView()));
    }

    // Affiche les informations du suivis en cours, permet de le remplir, de modifier les informations, de le sauvegarder et de le cloturer.
    public function editionSuiviEnCoursAction(Request $request, $IdSuivi, $version) {

        // On récupére la racine du serveur.
        $root = $this->get('kernel')->getRootDir() . '\..';

        // Génération de deux entityManagers distinct
        $em = $this->getDoctrine()->getManager();
        $emChampDonnees = $this->getDoctrine()->getManager();

        // On récupére le suivi en cours et le client.
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);
        $client = $em->getRepository('NoxIntranetRessourcesBundle:AA_Client')->findOneByN_Client($suivi->getNoClient());

        // Récupére la/les adresse(s) du client et génére le code html de la pop-up des adresses client. 
        $clientAdr = $em->getRepository('NoxIntranetRessourcesBundle:AA_Client_Adr')->findByN_Client($suivi->getNoClient());
        $clientAdrHtml = "<html style='overflow: auto;'>";
        $clientAdrHtml .= "<head>";
        $clientAdrHtml .= "<title>Adresse(s) du client</title>";
        $clientAdrHtml .= "<style>";
        $clientAdrHtml .= "label { display: block; width: 30%; float: left; text-align: right; margin-bottom: 1%; margin-right: 1%; }";
        $clientAdrHtml .= "input { width: 40%; margin-bottom: 1%; }";
        $clientAdrHtml .= "</style>";
        $clientAdrHtml .= "</head>";
        $clientAdrHtml .= "<body style='overflow: auto; height: 100%; width: 100%; margin: 0;'>";
        // Si il existe des adresses associées au client.
        if (!empty($clientAdr)) {
            // Pour chaques adresses on récupére et on affiche les données.
            foreach ($clientAdr as $key => $adr) {
                $clientAdrHtml .= "<fieldset style='border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6); width: 80%; margin: auto; margin-top: 1%; margin-bottom: 1%;'>";
                $clientAdrHtml .= addslashes("<legend>" . str_replace(array("\r\n", "\r", "\n"), "", $client->getNomClient()) . " - Adresse " . strval($key + 1) . "</legend>");
                $clientAdrHtml .= addslashes("<label for='tel'>Téléphone: </label><input type='text' name='tel' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getTel())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='fax'>Fax: </label><input type='text' name='fax' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getFax())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='email'>Email: </label><input type='text' name='email' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getEmail())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='nomville'>Ville: </label><input type='text' name='nomville' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getNomVille())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='nompays'>Pays: </label><input type='text' name='nompays' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getNomPays())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse'>Adresse: </label><input type='text' name='adresse' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse1())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse2'></label><input type='text' name='adresse2' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse2())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse3'></label><input type='text' name='adresse3' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse3())) . "\">");
                $clientAdrHtml .= "</fieldset>";
            }
        }
        // Si il n'existe pas d'adresses associées au client.
        else {
            $clientAdrHtml .= "<fieldset style='border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6); width: 80%; margin: auto; margin-top: 1%; margin-bottom: 1%;'>";
            $clientAdrHtml .= "<p style='text-align: center;'>Il n'y a aucune données d'adresse pour ce client.";
            $clientAdrHtml .= "</fieldset>";
        }
        $clientAdrHtml .= "</body>";
        $clientAdrHtml .= "</html>";

        // On récupere les interlocuteurs associés au client et l'interlocuteur actuel.
        $interlocuteurs = $em->getRepository('NoxIntranetRessourcesBundle:AA_Contact')->findByNClient($suivi->getNoClient());
        $interlocuteurActuel = $em->getRepository('NoxIntranetRessourcesBundle:AA_Contact')->findOneByN_Contact($suivi->getNoInterlocuteur());

        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($suivi->getIdModele());
        $liaisons = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($modele->getId());

        $champsViews = array();

        // Génération du formulaire de séléction de la version du suivi
        if ($version !== '') {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));
        } else {
            $IdDonneesSuivi = null;
        }
        $formSelectionVersionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionVersionSuivi', 'form')
                ->add('version', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:DonneesSuivi',
                    'query_builder' => function (EntityRepository $er) use ($IdSuivi) {
                        return $er->createQueryBuilder('u')
                                ->where("u.idSuivi = '" . $IdSuivi . "'")
                                ->orderBy('u.version', 'DESC');
                    },
                    'choice_label' => function($value) {
                        return "v" . $value->getVersion();
                    },
                    'placeholder' => 'Nouvelle version',
                    'data' => $IdDonneesSuivi
                ))
                ->add('Supprimer', SubmitType::class)
                ->getForm();

        // Génération du formulaire de complétion du suivi
        $formBuilder = $this->get('form.factory')->createNamedBuilder('formDonneesSuivi', 'form');
        foreach ($liaisons as $liaison) {
            $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());

            if ($champ->getType() === 'Texte') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), TextType::class, array(
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi'
                    )
                ));
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), NumberType::class, array(
                    'invalid_message' => 'Veuillez renseigner une valeur de type %type% pour le champ %nom%.',
                    'invalid_message_parameters' => array('%type%' => $champ->getType(), '%nom%' => $champ->getNom()),
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi',
                        'pattern' => '^[-+]?[0-9]*\.?[0-9]+$'
                    )
                ));
            } else if ($champ->getType() === 'Données') {
                if ($champ->getAjoutDonnees() === true) {
                    $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                    $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                    $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                    $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                        'query_builder' => function (EntityRepository $er) use ($champ) {
                            return $er->createQueryBuilder('u')
                                            ->where("u.idFormulaire = '" . $champ->getId() . "'")
                                            ->orderBy('u.donnee', 'ASC');
                        },
                        'placeholder' => 'Autre',
                        'choice_label' => 'Donnee',
                        'empty_data' => null,
                        'required' => false,
                        'attr' => array(
                            'class' => 'champFormulaireRemplissageSuivi'
                        )
                    ));

                    $champsViews[$champ->getNom() . 'newData']['Nom'] = 'Autre ' . $champ->getNom();
                    $champsViews[$champ->getNom() . 'newData']['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())) . 'newData';
                    $champsViews[$champ->getNom() . 'newData']['Type'] = 'Texte';
                    $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())) . 'newData', TextType::class, array(
                        'required' => false,
                        'attr' => array(
                            'class' => 'newData champFormulaireRemplissageSuivi'
                        ),
                    ));
                } else {
                    $donneesChamp = $em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findByIdFormulaire($champ->getId());

                    if (!empty($donneesChamp)) {
                        $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                        $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                        $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                        $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), EntityType::class, array(
                            'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                            'query_builder' => function (EntityRepository $er) use ($champ) {
                                return $er->createQueryBuilder('u')
                                                ->where("u.idFormulaire = '" . $champ->getId() . "'")
                                                ->orderBy('u.donnee', 'ASC');
                            },
                            'choice_label' => 'Donnee',
                            'empty_data' => null,
                            'required' => false,
                            'attr' => array(
                                'class' => 'champFormulaireRemplissageSuivi'
                            )
                        ));
                    }
                }
            }
        }
        if ($version !== '') {
            $formBuilder->add('Generate', SubmitType::class);
        } else {
            $formBuilder->add('Generate', SubmitType::class, array(
                'disabled' => true
            ));
        }
        $formBuilder->add('Save', SubmitType::class);
        $formSuivi = $formBuilder->getForm();

        // Si une version du suivi est séléctionnée on récupére ses données de suivi.
        if ($version != null) {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));

            $donneesVersion = $donneeSuivi->getDonnees();

            foreach ($donneesVersion as $key => $value) {
                if ($donneesVersion[$key]['Type'] === 'entity') {
                    $emChampDonnees->persist($value['Data']);
                    $formSuivi->get($key)->setData($value['Data']);
                    $emChampDonnees->remove($value['Data']);
                } else {
                    $formSuivi->get($key)->setData($value['Data']);
                }
            }
        }

        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération du formulaire de cloturation du suivi
        $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
        if (!empty($donnees_suivi)) {
            $formCloturationSuivi = $this->get('form.factory')->createNamedBuilder('formCloturationSuivi', 'form')
                    ->add('Cloturer', SubmitType::class)
                    ->getForm();
        } else {
            $formCloturationSuivi = $this->get('form.factory')->createNamedBuilder('formCloturationSuivi', 'form')
                    ->add('Cloturer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersionSuivi')) {
            $formSelectionVersionSuivi->handleRequest($request);

            if ($formSelectionVersionSuivi->isValid()) {

                if ($formSelectionVersionSuivi->get('Supprimer')->isClicked()) {
                    $em->remove($formSelectionVersionSuivi['version']->getData());
                    $em->flush();

                    $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
                    if ($donnees_suivi !== null) {
                        $version = $donnees_suivi->getVersion();
                    } else {
                        $version = '';
                    }

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $version));
                }

                if ($formSelectionVersionSuivi['version']->getData() !== null) {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $formSelectionVersionSuivi['version']->getData()->getVersion()));
                } else {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
                }
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de complétion du suivi
        if ($request->request->has('formDonneesSuivi')) {

            try {
                $formSuivi->handleRequest($request);
            } catch (Exception $ex) {
                echo 'test';
            }


            if ($formSuivi->isValid()) {

                if ($formSuivi->get('Save')->isClicked()) {

                    $donnees_suivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
                    if ($donnees_suivi !== null) {
                        $version = $donnees_suivi->getVersion() + 0.1;
                    } else {
                        $version = 1.0;
                    }

                    $i = 0;

                    $vide = false;

                    foreach ($formSuivi->getData() as $key => $data) {

                        if ($vide) {
                            $newData = new DonneesFormulaire();

                            if (!empty($em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findOneBy(array('idFormulaire' => $liaisons[$i]->getIdChamp(), 'donnee' => $data)))) {
                                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le choix ' . $data . ' existe déjà !');

                                return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig', array(
                                            'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi->getNom(),
                                            'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(), 'formCloturationSuivi' => $formCloturationSuivi->createView()
                                ));
                            }
                            $newData->setIdFormulaire($liaisons[$i]->getIdChamp());
                            $newData->setDonnee($data);

                            $em->persist($newData);
                            $em->flush();

                            $donnees[$previousKey]['Data'] = $newData;
                            $donnees[$previousKey]['Type'] = 'entity';
                            $donnees[$previousKey]['Position'] = $liaisons[$i]->getCoordonneesDonnees();
                            $vide = false;
                            $i++;
                        } else {
                            if ($data === null) {
                                if ($formSuivi[$key]->getConfig()->getType()->getName() === 'entity') {
                                    $vide = true;
                                    $previousKey = $key;
                                }
                            } else {
                                $donnees[$key]['Data'] = $data;
                                $donnees[$key]['Type'] = $formSuivi[$key]->getConfig()->getType()->getName();
                                $donnees[$key]['Position'] = $liaisons[$i]->getCoordonneesDonnees();
                                $i++;
                            }
                        }
                    }

                    $NewDonneesSuivi = new DonneesSuivi();
                    $NewDonneesSuivi->setIdSuivi($IdSuivi);
                    $NewDonneesSuivi->setNom($suivi->getNom() . "_v" . $version);
                    $NewDonneesSuivi->setDonnees($donnees);
                    $NewDonneesSuivi->setVersion($version);

                    $em->persist($NewDonneesSuivi);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $suivi->getNom() . ' a été sauvegardé sous le nom ' . $suivi->getNom() . "_v" . $version . '.');

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi, 'version' => $version));
                }


                if ($formSuivi->get('Generate')->isClicked()) {

                    include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

                    $objReader = new \PHPExcel_Reader_Excel2007();
                    $objPHPExcel = $objReader->load($modele->getChemin() . "/" . pathinfo($modele->getChemin(), PATHINFO_FILENAME) . '.xlsx');
                    $sheet = $objPHPExcel->getSheet(0);

                    $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($IdSuivi)->getDonnees();

                    foreach ($donneesSuivi as $donne) {
                        if ($donne['Type'] === 'entity') {
                            $sheet->setCellValue($donne['Position'], $donne['Data']->getDonnee());
                        } else {
                            $sheet->setCellValue($donne['Position'], $donne['Data']);
                        }
                    }

                    $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

                    $fichierVersion = $suivi->getNom() . "_v" . $version;

                    $fichier = $fichierVersion . ".xlsx";

                    $chemin = $root . '\web\ExcelGenerate\\';

                    $writer->save($chemin . $fichier);

                    $response = new Response();
                    $response->setContent(file_get_contents($chemin . $fichier));
                    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                    $response->headers->set('Content-disposition', 'filename=' . $fichier);

                    unlink($chemin . $fichier);

                    return $response;
                }
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de cloturation de suivi
        if ($request->request->has('formCloturationSuivi')) {
            $formCloturationSuivi->handleRequest($request);

            if ($formCloturationSuivi->isValid()) {

                $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);
                $suivi->setStatut('Cloturé');

                $em->persist($suivi);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le suivi a été cloturé.');

                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_termine');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\SuiviEnCours:assistantaffaireremplissageformulaire.html.twig', array(
                    'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi, 'client' => $client, 'clientAdr' => $clientAdrHtml,
                    'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(), 'formCloturationSuivi' => $formCloturationSuivi->createView(),
                    'interlocuteurActuel' => $interlocuteurActuel, 'interlocuteurs' => $interlocuteurs
        ));
    }

    // Ajoute un nouveau numéro de commande au suivi passé en paramètres.
    public function ajaxAddNoCommandeAction(Request $request) {

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $IDSuivi = $request->get('IDSuivi');
            $noCommandes = $request->get('noCommandes');

            // On récupéres les numéros de commandes existants.
            $suivi = $em->getRepository("NoxIntranetRessourcesBundle:Suivis")->find($IDSuivi);
            $suiviNoCommandes = $suivi->getNoCommande();

            // Si le numéro de commande n'existe pas déjà...
            if (!in_array($noCommandes, $suiviNoCommandes)) {
                // On l'ajoute au tableau et on trie le tableau.
                $suiviNoCommandes[] = $noCommandes;
                sort($suiviNoCommandes);

                // On sauvegarde le tableau en base de données.
                $suivi->setNoCommande($suiviNoCommandes);
                $em->persist($suivi);
                $em->flush();

                // On renvoie une réponse positive.
                $response = 'true';
            }
            // Si le numéro de commande existe déjà...
            else {
                // On renvoie une réponse négative.
                $response = 'false';
            }
        }

        return new Response($response);
    }

    // Supprime un numéro de commande au suivi passé en paramètre.
    public function ajaxDeleteNoCommandeAction(Request $request) {

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $IDSuivi = $request->get('IDSuivi');
            $noCommandes = $request->get('noCommandes');

            // On récupéres les numéros de commandes existants.
            $suivi = $em->getRepository("NoxIntranetRessourcesBundle:Suivis")->find($IDSuivi);
            $suiviNoCommandes = $suivi->getNoCommande();

            // On recherche le numéro de commande dans le tableau et on le supprime.
            unset($suiviNoCommandes[array_search($noCommandes, $suiviNoCommandes)]);
            // On sauvegarde le tableau en base de données.
            $suivi->setNoCommande($suiviNoCommandes);
            $em->persist($suivi);
            $em->flush();
        }

        return new Response('N° de commande supprimé.');
    }

    // Sauvegarde les modifications d'info en base de données.
    public function ajaxSaveNewInfosAction(Request $request) {

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $IDSuivi = $request->get('IDSuivi');
            $row = $request->get('row');
            $newInfo = $request->get('newInfo');

            // On récupéres le suivi.
            $suivi = $em->getRepository("NoxIntranetRessourcesBundle:Suivis")->find($IDSuivi);

            // On enregistre la nouvelle valeur en fonction du champ.
            switch ($row) {
                case 'agence':
                    if ($suivi->getAgence() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setAgence($newInfo);
                    break;
                case 'numGX':
                    if ($suivi->getNumeroGX() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setNumeroGX($newInfo);
                    break;
                case 'commune':
                    if ($suivi->getCommune() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setCommune($newInfo);
                    break;
                case 'marche':
                    if ($suivi->getMarche() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setMarche($newInfo);
                    break;
                case 'objet':
                    if ($suivi->getObjet() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setObjet($newInfo);
                    break;
                case 'ningediabep';
                    if ($suivi->getNoINGEDIABEP() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setNoINGEDIABEP($newInfo);
                    break;
                case 'estimatif';
                    if ($suivi->getEstimatif() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setEstimatif($newInfo);
                    break;
                case 'interlocuteur':
                    if ($suivi->getNoInterlocuteur() === $newInfo) {
                        return new Response('No change');
                    }
                    $suivi->setNoInterlocuteur($newInfo);
                    break;
            }

            // On sauvegarde le suivi en base de données.
            $em->persist($suivi);
            $em->flush();

            return new Response('Saved');
        }
    }

    public function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
