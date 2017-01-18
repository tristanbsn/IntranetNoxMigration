<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoxIntranetExtractRHHierarchie
 *
 * @author t.besson
 */

namespace NoxIntranet\PointageBundle\ExtractRHHierarchie;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use NoxIntranet\PointageBundle\Entity\UsersHierarchy;

class NoxIntranetExtractRHHierarchie extends Controller {

    // Initialise le container de service.
    public function __construct(Container $container) {
        $this->container = $container;
    }

    // Extrait les informations hiérachique de la RH en base de données.
    function extractRHHierarchieData() {

        // Récupère le chemin d'instalation de Symfony.
        $root = $this->container->getParameter('kernel.root_dir') . '\..';

        // Permet de lire les fichiers Excel.
        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        // Initialise le manager de base de données.
        $em = $this->getDoctrine()->getManager();

        // Chemin du fichier de management hiérarchique de la RH.
        $fichierRH = $root . '/web/uploads/FichierHierarchieRH/HierarchieRH.xlsx';
        //$fichierRH = "Y:/5_Partage/T.Besson/Validation Manager WF RF MAJ NR 300516.xlsx";
        // Initialise la lecture du fichier Excel.
        $objReaderAssistantes = new \PHPExcel_Reader_Excel2007();
        $objPHPExcelAssistantes = $objReaderAssistantes->load($fichierRH);
        $objWorksheet = $objPHPExcelAssistantes->getActiveSheet();

        $file = 'listUsername.txt';
        $filehandller = fopen($file, 'w+');

        $DBUsers = array();
        foreach ($em->getRepository('NoxIntranetUserBundle:User')->findAll() as $user) {
            $DBUsers[$user->getUsername()]['firstname'] = strtolower(str_replace('-', ' ', $this->wd_remove_accents($user->getFirstname())));
            $DBUsers[$user->getUsername()]['lastname'] = strtolower(str_replace('-', ' ', $this->wd_remove_accents($user->getLastname())));
            $DBUsers[$user->getUsername()]['entity'] = $user;
        }

        // Pour chaque cellule non vide du tableau...
        foreach ($objPHPExcelAssistantes->getActiveSheet()->getCellCollection() as $cell) {
            // ...Si la cellule est la première de la ligne et que la ligne est au moins la 5ème.
            if ($objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getColumn() === 'A' && $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow() > 1) {
                // On récupère le numéro de la ligne.
                $rowIndex = $objPHPExcelAssistantes->getActiveSheet()->getCell($cell)->getRow();

                // On récupére l'utilisateur associé dans la base de données utilisateur si il existe.
                //$userDB = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => ucfirst(strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue())), 'lastname' => $objWorksheet->getCell('D' . $rowIndex)->getValue()));
                $userDB = $this->findUserInDB($objWorksheet->getCell('E' . $rowIndex)->getValue(), $objWorksheet->getCell('D' . $rowIndex)->getValue(), $DBUsers);

                if (empty($userDB)) {
                    fwrite($filehandller, ucfirst(strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue())) . ' ' . $objWorksheet->getCell('D' . $rowIndex)->getValue() . "\n");
                    var_dump(strtolower($objWorksheet->getCell('E' . $rowIndex)->getValue()) . ' ' . $objWorksheet->getCell('D' . $rowIndex)->getValue());
                }

                // Si l'utilisateur existe dans la base de données utilisateurs.
                if (!empty($userDB)) {
                    // On crée une nouvelle entité à mettre en base de données.
                    $newUser = new UsersHierarchy();
                    $newUser->setNom($userDB->getLastname());
                    $newUser->setPrenom($userDB->getFirstname());
                    $newUser->setUsername($userDB->getUsername());

                    // On vérifie la nullité des cellules du personnel de la RH.
                    // Si la case d'Assistante agence n'est pas vide.
                    if (trim($objWorksheet->getCell('F' . $rowIndex)) !== "-" && trim($objWorksheet->getCell('F' . $rowIndex)) !== '') {
                        $newUser->setAA($objWorksheet->getCell('F' . $rowIndex)); // On attribut la valeur de la case d'assistante agence comme assistante d'agence.
                    }
                    // Sinon si la case de Directeur d'agence n'est pas nul.
                    elseif (trim($objWorksheet->getCell('G' . $rowIndex)) !== "-" && trim($objWorksheet->getCell('G' . $rowIndex)) !== '') {
                        $newUser->setAA($objWorksheet->getCell('G' . $rowIndex)); // On attribut la valeur de la case de directeur d'agence comme assistante d'agence.
                    }
                    // Sinon si la case d'Assistante RH n'est pas nul.
                    elseif (trim($objWorksheet->getCell('H' . $rowIndex)) !== "-" && trim($objWorksheet->getCell('H' . $rowIndex)) !== '') {
                        $newUser->setAA($objWorksheet->getCell('H' . $rowIndex)); // On attribut la valeur de la case d'assistante RH comme assistante d'agence.
                    }
                    // Sinon.
                    else {
                        $newUser->setAA($objWorksheet->getCell('I' . $rowIndex)); // On attribut la valeur de la case de N+2 comme assistante d'agence.
                    }

                    // Si la case de Directeur d'agence n'est pas nul.
                    if (trim($objWorksheet->getCell('G' . $rowIndex)) !== "-" && trim($objWorksheet->getCell('G' . $rowIndex)) !== '') {
                        $newUser->setDA($objWorksheet->getCell('G' . $rowIndex)); // On attribut la valeur de la case de directeur d'agence comme directeur d'agence.
                    }
                    // Sinon la case Assistante RH n'est pas nul.
                    else if (trim($objWorksheet->getCell('H' . $rowIndex)) !== "-" && trim($objWorksheet->getCell('H' . $rowIndex)) !== '') {
                        $newUser->setDA($objWorksheet->getCell('H' . $rowIndex)); // On attribut la valeur de la case de d'assistante RH comme directeur d'agence.
                    }
                    // Sinon.
                    else {
                        $newUser->setDA($objWorksheet->getCell('I' . $rowIndex)); // On attribut la valeur de la case de N+2 comme directeur d'agence.
                    }

                    // On attribut la valeur de la case d'assistante RH comme assistante RH.
                    $newUser->setRH($objWorksheet->getCell('H' . $rowIndex));

                    // On attribut la valeur de la case de N+2 comme N+2.
                    $newUser->setN2($objWorksheet->getCell('I' . $rowIndex));

                    $newUser->setEtablissement($objWorksheet->getCell('C' . $rowIndex)); // On attribut l'agence.
                    $em->persist($newUser);
                }
            }
        }

        fclose($filehandller);

        // On récupère les entités existantes pour les supprimer.
        $existingUsers = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
        foreach ($existingUsers as $user) {
            $em->remove($user);
        }

        // On supprime les entités existantes et on ajoute les nouvelles en base de données.
        $em->flush();
    }

    // Trouve l'entité utilisateur associé au Nom et au prénom passé en paramètres.
    function findUserInDB($firstname, $lastname, $DBUsers) {
        $cleanFirstname = strtolower(str_replace('-', ' ', $firstname));
        $cleanLastname = strtolower(str_replace('-', ' ', $lastname));

        foreach ($DBUsers as $user) {
            if ($user['firstname'] === $cleanFirstname && $user['lastname'] === $cleanLastname) {
                return $user['entity'];
            }
        }
    }

    // Supprime les accents d'une chaîne de caractère.
    function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
