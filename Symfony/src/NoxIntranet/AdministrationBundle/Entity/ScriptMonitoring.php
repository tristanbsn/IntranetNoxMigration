<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * ScriptMonitoring
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\ScriptMonitoringRepository")
 */
class ScriptMonitoring {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=255, unique=true)
     */
    private $scriptName;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set scriptName
     *
     * @param string $scriptName
     *
     * @return ScriptMonitoring
     */
    public function setScriptName($scriptName) {
        $this->scriptName = $scriptName;

        return $this;
    }

    /**
     * Get scriptName
     *
     * @return string
     */
    public function getScriptName() {
        return $this->scriptName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ScriptMonitoring
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    // Retourne un tableau contenant les informations de la dernière éxecution du script.
    public function getStatut($server_root) {
        // On récupére le nom du script et son temps d'itération.
        $scriptName = $this->scriptName;

        // On exécute le script de récupération de la dernière date d'éxecution du script et on place le résultat dans la variable $result.
        $result = array();
        exec('cscript //Nologo ' . $server_root . '/../scripts/getScheduledTasks.vbs ' . $scriptName, $result);
        
        // On récupére la dernière date d'execution dans le résultat sous forme de chaîne.
        $lastIterationTime = DateTime::createFromFormat("d/m/Y H:i:s", $result[0]);

        // On récupére la dernière date d'execution dans le résultat sous forme de chaîne.
        $nextIterationTime = DateTime::createFromFormat("d/m/Y H:i:s", $result[1]);

        // On calcure la fréquence d'itération en heure.
        $frequencyTimeHour = $lastIterationTime->diff($nextIterationTime)->format("%H") + ($lastIterationTime->diff($nextIterationTime)->format("%D") * 24);

        // On récupére le résultat de la dernière éxecution.
        $lastTaskResult = $result[2];

        // Si le code de retour est égale à '267009'...
        if ($lastTaskResult === '267009') {
            $statut['Statut'] = 'En cours';
        }
        // Si le code de retour est différent de 0...
        else if ($lastTaskResult !== '0') {
            $statut['Statut'] = 'Erreur';
        } else {
            $statut['Statut'] = 'OK';
        }

        // On ajoute la dernière date d'éxecution et le dernier code de retour au tableau.
        $statut['lastIteration'] = $lastIterationTime;
        $statut['lastTaskResult'] = $lastTaskResult;
        $statut['frequencyHour'] = $frequencyTimeHour;

        // On retourne le tableau de statut.
        return $statut;
    }

}
