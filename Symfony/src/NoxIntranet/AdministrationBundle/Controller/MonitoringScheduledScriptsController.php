<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\AdministrationBundle\Entity\ScriptMonitoring;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of MonitoringScheduledScripts
 *
 * @author t.besson
 */
class MonitoringScheduledScriptsController extends Controller {

    public function scheduledScriptsMonitoringPanelAction(Request $request) {
        // On récupère tous les monitorings existants.
        $em = $this->getDoctrine()->getManager();
        $monitoredScripts = $em->getRepository('NoxIntranetAdministrationBundle:ScriptMonitoring')->findAll();

        // Initialisation d'un nouveau monitoring.
        $newScriptMonitoring = new ScriptMonitoring();

        // Génération du formulaire d'ajout de monitoring.
        $formAddScriptBuilder = $this->get('form.factory')->createNamedBuilder('addScript', 'form', $newScriptMonitoring);
        $formAddScriptBuilder
                ->add('scriptName', TextType::class, array(
                    'label' => "Nom du script"
                ))
                ->add('iterationTime', IntegerType::class, array(
                    'attr' => array(
                        'min' => 1,
                        'max' => 48
                    ),
                    'label' => "Durée d'itération"
                ))
                ->add('add', SubmitType::class, array(
                    'label' => 'Ajouter'
        ));
        $formAddScript = $formAddScriptBuilder->getForm();

        $formAddScript->handleRequest($request);
        if ($formAddScript->isValid()) {
            $em->persist($newScriptMonitoring);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La surveillance du script ' . $newScriptMonitoring->getScriptName() . ' a été paramétré.');
            return $this->redirectToRoute('nox_intranet_monitoring_scheduled_scripts');
        }



        return $this->render('NoxIntranetAdministrationBundle:ScriptMonitoring:scriptMonitoring.html.twig', array('formAddScript' => $formAddScript->createView(), 'monitoredScripts' => $monitoredScripts));
    }

}
