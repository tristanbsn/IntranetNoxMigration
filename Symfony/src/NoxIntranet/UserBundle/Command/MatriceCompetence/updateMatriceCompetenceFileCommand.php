<?php

namespace NoxIntranet\UserBundle\Command\MatriceCompetence;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;

class updateMatriceCompetenceFileCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('noxintranet:updatematricecompetencefile')
                ->addArgument('userId', InputArgument::REQUIRED, "L'Id du collaborateur dont les informations de la matrice de compétence doivent êtres mise à jour.")
                ->setDescription('Met à jour le fichier de matrice de compétence.')
                ->setHelp('Met a jour le fichier de matrice de compétence avec les informations du collaborateur passé en paramètre.');
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln("Mise à jour en cours...");

        // On récupére l'Id du collaborateur.
        $userId = $input->getArgument('userId');

        // On appel la fonction de mise à jour du fichier de matrice de compétence.
        $matrice_competence_controller = $this->getContainer()->get('noxintranet_userbundle.updatematricecompetencefile');
        $matrice_competence_controller->getMatriceCompetenceData($userId);

        $output->writeln("Mise à jour terminé.");
    }

}
