<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\AdministrationBundle\Entity\Fichier_Suivi;
use NoxIntranet\AdministrationBundle\Entity\Formulaires;
use NoxIntranet\AdministrationBundle\Entity\LiaisonSuiviChamp;
use NoxIntranet\AdministrationBundle\Entity\DonneesFormulaire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Response;

class AdministrationAffairesController extends Controller {

    // Récupére le contenu d'un dossier et de ses sous-dossiers.
    function getDirContents($dir, &$results = array()) {
        $results = glob($dir);

        return $results;
    }

    // Supprime le contenu d'un dossier.
    function delete_directory($dir) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {

                    if (is_dir($dir . $file)) {
                        if (!@rmdir($dir . $file)) { // Empty directory? Remove it
                            delete_directory($dir . $file . '/'); // Not empty? Delete the files inside it
                        }
                    } else {
                        @unlink($dir . $file);
                    }
                }
            }
            closedir($handle);

            rmdir($dir);
        }
    }

    public function administrationAffairesAccueilAction(Request $request, $section) {

        $em = $this->getDoctrine()->getManager();

        // Traitement du formulaire d'ajout de fichier
        if ($request->request->has('formNewModele')) {
            return $this->assistantAffaireProcessNewModeleForm($this->assistantAffairesGetNewModeleForm(), $request);
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire d'ajout de champ
        if ($request->request->has('formNewChamp')) {
            return $this->assistantAffaireProcessNewChampFormAction($this->assistantAffaireGetNewChampForm(), $request);
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de suppression de champ
        if ($request->request->has('formSuppressionChamp')) {

            $formSuppressionChamp->handleRequest($request);

            if ($formSuppressionChamp->isValid()) {

                $liaisonsAssocies = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdChamp($formSuppressionChamp['Nom']->getData()->getId());

                if (!empty($liaisonsAssocies)) {
                    foreach ($liaisonsAssocies as $liaison) {

                        $fichierSuiviAssocies = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findById($liaison->getIdSuivi());

                        if (!empty($fichierSuiviAssocies)) {
                            foreach ($fichierSuiviAssocies as $fichierSuivi) {

                                $suiviAssocies = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByIdModele($fichierSuivi->getId());

                                if (!empty($suiviAssocies)) {
                                    foreach ($suiviAssocies as $suivi) {

                                        $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($suivi->getId());

                                        if (!empty($donneesSuivi)) {
                                            $em->remove($donneesSuivi);
                                        }
                                        $em->remove($suivi);
                                    }
                                }
                                foreach (glob($fichierSuivi->getChemin() . "/*.*") as $filename) {
                                    if (is_file($filename)) {
                                        unlink($filename);
                                    }
                                }
                                rmdir($fichierSuivi->getChemin());
                                $em->remove($fichierSuivi);
                            }
                        }
                        $em->remove($liaison);
                    }
                }
            }

            $em->remove($formSuppressionChamp['Nom']->getData());
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formSuppressionChamp['Nom']->getData()->getNom() . ' à été supprimé.');

            return $this->redirectToRoute('nox_intranet_administration_affaires');
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////     
        // Traitement du formulaire de séléction du champ
        if ($request->request->has('formSelectionChamp')) {
            $formSelectionChamp->handleRequest($request);

            if ($formSelectionChamp->isValid()) {
                return $this->redirectToRoute('nox_intranet_administration_affaires_edition_champ', array('IdChamp' => $formSelectionChamp['Champs']->getData()->getId()));
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération de l'affichage
        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array(
                    'formProfils' => $this->assistantAffairesGetProfilsForm()->createView(),
                    'formNewModele' => $this->assistantAffairesGetNewModeleForm()['formulaire']->createView(), 'champs' => $this->assistantAffairesGetChamps(),
                    'formNewChamp' => $this->assistantAffaireGetNewChampForm()['formulaire']->createView(), 'section' => $section,
                    'modeles' => $this->assistantAffairesGetModeles()
        ));
        ////////////////////////////////////////////////////////////////////////////////////////////////
    }

    // Retourne un formulaire contenant les profils en base de données.
    public function assistantAffairesGetProfilsForm() {
        $formAjoutProfil = $this->get('form.factory')->createNamedBuilder('formAjoutProfil', 'form')
                ->add('Profils', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'choice_label' => 'Nom'
                ))
                ->getForm();

        return $formAjoutProfil;
    }

    // Retourne les champs en base de données.
    public function assistantAffairesGetChamps() {
        // On récupére tous les champs en base de données.
        $em = $this->getDoctrine()->getManager();
        $champs = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findAll();

        // On retourne les champs.
        return $champs;
    }

    // Retourne un formulaire de création de nouveau champ.
    public function assistantAffaireGetNewChampForm() {
        // On crée un nouveau champ.
        $newChamp = new Formulaires;

        // On crée un formulaire d'ajout de champ.
        $formNewChamp = $this->get('form.factory')->createNamedBuilder('formNewChamp', 'form', $newChamp)
                ->add('Nom', TextType::class, array(
                    'attr' => array(
                        'placeholder' => 'Nom du champ',
                        'style' => 'text-align: center; box-sizing: border-box; width: 100%;'
                    )
                ))
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'choice_label' => 'Nom',
                    'placeholder' => 'Choisir un profil',
                    'attr' => array(
                        'style' => 'text-align: center; width: 100%'
                    )
                ))
                ->add('Type', ChoiceType::class, array(
                    'choices' => array('Texte' => 'Texte', 'Nombre' => 'Nombre', 'Données' => 'Données'),
                    'placeholder' => 'Choisir un type',
                    'attr' => array(
                        'style' => 'text-align: center; width: 100%;'
                    )
                ))
                ->add('AjoutDonnees', CheckboxType::class, array(
                    'label' => 'Permettre l\'édition des données.',
                    'required' => false,
                    'label_attr' => array(
                        'style' => 'font-size: 0.8vw; display: inline-block;'
                    )
                ))
                ->add('Ajouter', SubmitType::class, array(
                    'attr' => array(
                        'style' => 'padding: 10%;'
                    )
                ))
                ->getForm();

        // Retourne le formulaire de création de champ.
        return array('formulaire' => $formNewChamp, 'champ' => $newChamp);
    }

    // Traite le formulaire d'ajout de champ quand il a été validé.
    public function assistantAffaireProcessNewChampFormAction($formNewChamp, $request) {

        $em = $this->getDoctrine()->getManager();

        // Si le formulaire est valide.
        $formNewChamp['formulaire']->handleRequest($request);
        if ($formNewChamp['formulaire']->isValid()) {
            // Si un champ portant le même nom que celui passé en paramêtre n'existe pas déjà.
            if (empty($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findByNom($formNewChamp['formulaire']['Nom']->getData()))) {

                // On attribut le nom du profil plutôt que son ID.
                $formNewChamp['champ']->setProfil($formNewChamp['formulaire']['Profil']->getData()->getNom());

                // On sauvegarde le nouveau champ en base de données.
                $em->persist($formNewChamp['champ']);
                $em->flush();

                // On affiche un message de confirmation de création.
                $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formNewChamp['formulaire']['Nom']->getData() . ' à été ajouté.');
            }
            // Si un champ portant le même nom que celui passé en paramêtre existe déjà.
            else {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Un champ portant le même nom existe déjà !');
            }

            // On redirige vers la page d'administration d'affaire avec 'champs' comme section.
            return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'champs'));
        }
    }

    // Retournes les modèles en base de donnéees.
    public function assistantAffairesGetModeles() {
        // On récupére tous les champs en base de données.
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findAll();

        $modelesArray = array();
        foreach ($modeles as $modele) {
            $modelesArray[] = array('filename' => pathinfo($modele->getChemin(), PATHINFO_FILENAME), 'modele' => $modele);
        }

        // On retourne les champs.
        return $modelesArray;
    }

    // Retourne un formulaire de création de nouveau modèle.
    public function assistantAffairesGetNewModeleForm() {
        // On crée un nouveau champ.
        $newModele = new Fichier_Suivi();

        // On crée un formulaire d'ajout de champ.
        $formNewModele = $this->get('form.factory')->createNamedBuilder('formNewModele', 'form', $newModele)
                ->add('Chemin', FileType::class, array(
                    'attr' => array(
                    )
                ))
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'choice_label' => 'Nom',
                    'placeholder' => 'Choisir un profil',
                    'attr' => array(
                        'style' => 'text-align: center; width: 100%;'
                    )
                ))
                ->add('Ajouter', SubmitType::class, array(
                    'attr' => array(
                        'style' => 'padding: 5%; margin: 5%;',
                        'class' => 'boutonFormulaire'
                    )
                ))
                ->getForm();

        // Retourne le formulaire de création de champ.
        return array('formulaire' => $formNewModele, 'modele' => $newModele);
    }

    // Traite le formulaire d'ajout de modèle quand il a été validé.
    public function assistantAffaireProcessNewModeleForm($formNewModele, $request) {

        $em = $this->getDoctrine()->getManager();

        // Si le formulaire est valide.
        $formNewModele['formulaire']->handleRequest($request);
        if ($formNewModele['formulaire']->isValid()) {

            // On récupére le fichier passé en paramètre.
            $file = $formNewModele['formulaire']['Chemin']->getData();

            // On récupére l'extension du fichier.
            $extension = $file->guessExtension();

            // Si le fichier n'est pas un fichier Excel on affiche un message d'erreur et on redirige.
            if ($extension !== 'xlsx' && $extension !== 'xls') {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le fichier doit avoir pour format 'xlsx' ou 'xls'.");
                // On redirige vers la page d'administration d'affaire avec 'modeles' comme section.
                return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'modeles'));
            }

            // On récupére la racine du serveur.
            $root = realpath($this->get('kernel')->getRootDir() . '\..');
            // On récupére le chemin du repertoire contenant les fichiers modèles.
            $dir = $root . "\web\uploads\AssistantAffaires\FeuillesSuivis\\";

            // Si un modèle ayant le même chemin que celui passé en paramêtre n'existe pas déjà.
            if (empty($em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin($dir . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)))) {
                // On upload le fichier dans un dossier à son nom dans la dossier d'upload de l'assistant d'affaires.
                $file->move($dir . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), pathinfo($file->getClientOriginalName(), PATHINFO_BASENAME));

                // On attribut le chemin du fichier de modèle au nouveau modèle.
                $formNewModele['modele']->setChemin($dir . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
                // On attribut le nom du profil au nouveau modèle.
                $formNewModele['modele']->setProfil($file = $formNewModele['formulaire']['Profil']->getData()->getNom());
                // On sauvegarde le nouveau modèle en base de donnée.
                $em->persist($formNewModele['modele']);
                $em->flush();

                // On affiche un message de confirmation.
                $request->getSession()->getFlashBag()->add('notice', 'Le modèle ' . pathinfo($formNewModele['modele']->getChemin(), PATHINFO_FILENAME) . 'a été créé.');
            } else {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Un modèle basé sur le même fichier existe déjà !');
            }

            // On redirige vers la page d'administration d'affaire avec 'modeles' comme section.
            return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'modeles'));
        }
    }

    public function administrationAffaireSauvegardeModificationAction(Request $request, $filename) {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $cookies = $request->cookies;

        if ($cookies->get('editionCellules') == true) {

            $cellules = json_decode($cookies->get('cellules'));

            $workbook = new \PHPExcel;

            $sheet = $workbook->getActiveSheet();
//
//            $response = new Response();
//            $response->setStatusCode(Response::HTTP_OK);
//            $response->headers->set('Content-Type', 'text/html');

            foreach ($cellules as $cellule) {
                if (array_key_exists(0, $cellule) && array_key_exists(1, $cellule) && array_key_exists(2, $cellule)) {
                    $sheet->setCellValue($cellule[1] . $cellule[0], $cellule[2]);
//                    $response->setContent($response->getContent() . " Coordonnes: " . $cellule[1] . $cellule[0] . " Valeur: " . $cellule[2]);
                }
            }

            $writer = new \PHPExcel_Writer_Excel2007($workbook);

            $version = null;

            if (preg_match('/([_][v][0-9]+)/', pathinfo($filename, PATHINFO_BASENAME), $version)) {

                $versionNombre = null;
                preg_match('/([0-9]+)/', $version[0], $versionNombre);
                $versionSauvegarde = '_v' . ($versionNombre[0] + 1);

                $path = pathinfo($filename);
                $fichier = preg_replace('/([_][v][0-9]+)/', $versionSauvegarde . ".xlsx", $path['filename']);
            } else {
                $path = pathinfo($filename);
                $fichier = $path['filename'] . "_v1.xlsx";
            }

            $writer->save(pathinfo($filename, PATHINFO_DIRNAME) . "/" . $fichier);

            $cookies->remove('editionCellules');
            $cookies->remove('cellules');

            $request->getSession()->getFlashBag()->add('notice', 'Le fichier à été sauvegardé sous le nom ' . $fichier);

            return $this->redirectToRoute('nox_intranet_administration_affaires');

//            return new Response(var_dump($version) . ',' . var_dump($versionNombre) . ',' . var_dump($versionSauvegarde));
//            return $response->send();
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Erreur lors de la sauvegarde !');

            return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('filename' => $filename));
        }
    }

}
