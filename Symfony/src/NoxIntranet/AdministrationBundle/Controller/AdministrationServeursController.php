<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\RessourcesBundle\Entity\Serveur;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AdministrationServeursController
 *
 * @author t.besson
 */
class AdministrationServeursController extends Controller {

    public function clearFolder($folder) {
        // 1 ouvrir le dossier
        $dossier = opendir($folder);
        //2)Tant que le dossier est aps vide
        while ($fichier = readdir($dossier)) {
            //3) Sans compter . et ..
            if ($fichier != "." && $fichier != ".." && $fichier != ".gitignore") {
                //On selectionne le fichier et on le supprime
                $Vidage = $folder . $fichier;
                unlink($Vidage);
            }
        }
        //Fermer le dossier vide
        closedir($dossier);
    }

    public function creationBat() {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $this->clearFolder($root . '/web/scriptsServeurs/');

        $em = $this->getDoctrine()->getManager();

        $serveurs = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

        foreach ($serveurs as $serveur2) {
            $scriptBat = fopen($root . '/web/scriptsServeurs/' . $serveur2->getAgence() . '.bat', 'a+');

            fputs($scriptBat, 'net use /persistent:no');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net use y: /delete /y');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'timeout 5');
            fputs($scriptBat, "\n");
            fputs($scriptBat, 'net use y: ' . $serveur2->getLien());
            fputs($scriptBat, "\n");

            fclose($scriptBat);
        }

        $scriptSuppressionBat = fopen($root . '/web/scriptsServeurs/Deconnexion.bat', 'a+');

        fputs($scriptSuppressionBat, 'net use /persistent:no');
        fputs($scriptSuppressionBat, "\n");
        fputs($scriptSuppressionBat, 'net use y: /delete /y');
        fputs($scriptSuppressionBat, "\n");

        fclose($scriptSuppressionBat);
    }

    public function administrationServeurAction(Request $request) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $em = $this->getDoctrine()->getManager();

        $serveurs = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

        $serveur = new Serveur();

        $form = $this->get('form.factory')->createBuilder('form', $serveur)
                ->add('agence', 'text')
                ->add('lien', 'text')
                ->add('ajouter', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $serveurAgence = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findByAgence($form['agence']->getData());
            $serveurLien = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findByLien($form['lien']->getData());

            if ($serveurAgence != null || $serveurLien != null) {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Ce serverur existe déjà !');
                return $this->render('NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig', array('form' => $form->createView(), 'serveurs' => $serveurs));
            }

            $serveur->setChemin($root . '/web/scriptsServeurs/' . $form['agence']->getData() . '.bat');
            $em->persist($serveur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice'
                    , 'Serveur bien enregistrée.');

            $archives = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

            $this->creationBat();

            return $this->redirectToRoute('nox_intranet_administration_serveurs');
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig', array('form' => $form->createView(), 'serveurs' => $serveurs));
    }

    public function suppressionServeurAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $serveur = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->find($id);

        $em->remove($serveur);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Le serveur ' . $serveur->getAgence() . ' a été supprimée.');

        $this->creationBat();

        return $this->redirectToRoute('nox_intranet_administration_serveurs');
    }

}
