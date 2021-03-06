<?php

namespace NoxIntranet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeveloppementProfessionnel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\UserBundle\Entity\DeveloppementProfessionnelRepository")
 */
class DeveloppementProfessionnel {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="Formulaire", type="array")
     */
    private $formulaire;

    /**
     * @ORM\ManyToOne(targetEntity="NoxIntranet\UserBundle\Entity\User", inversedBy="developpementsProfessionnels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $collaborateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string")
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreObjectifs", type="integer")
     */
    private $nombreObjectifs;

    /**
     * @var array
     *
     * @ORM\Column(name="objectifs", type="array")
     */
    private $objectifs;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set formulaire
     *
     * @param array $formulaire
     *
     * @return DeveloppementProfessionnel
     */
    public function setFormulaire($formulaire) {
        $this->formulaire = $formulaire;

        return $this;
    }

    /**
     * Get formulaire
     *
     * @return array
     */
    public function getFormulaire() {
        return $this->formulaire;
    }

    /**
     * Set collaborateur
     *
     * @param \NoxIntranet\UserBundle\Entity\User $collaborateur
     *
     * @return DeveloppementProfessionnel
     */
    public function setCollaborateur(\NoxIntranet\UserBundle\Entity\User $collaborateur) {
        $this->collaborateur = $collaborateur;

        $collaborateur->addDeveloppementsProfessionnel($this);

        return $this;
    }

    /**
     * Get collaborateur
     *
     * @return \NoxIntranet\UserBundle\Entity\User
     */
    public function getCollaborateur() {
        return $this->collaborateur;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return DeveloppementProfessionnel
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return DeveloppementProfessionnel
     */
    public function setAnnee($annee) {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee() {
        return $this->annee;
    }

    public function __construct() {
        $this->statut = 'N2';
    }

    /**
     * Set nombreObjectifs
     *
     * @param integer $nombreObjectifs
     *
     * @return DeveloppementProfessionnel
     */
    public function setNombreObjectifs($nombreObjectifs) {
        $this->nombreObjectifs = $nombreObjectifs;

        return $this;
    }

    /**
     * Get nombreObjectifs
     *
     * @return integer
     */
    public function getNombreObjectifs() {
        return $this->nombreObjectifs;
    }

    /**
     * Set objectifs
     *
     * @param array $objectifs
     *
     * @return DeveloppementProfessionnel
     */
    public function setObjectifs($objectifs) {
        $this->objectifs = json_decode($objectifs, true);

        return $this;
    }

    /**
     * Get objectifs
     *
     * @return array
     */
    public function getObjectifs() {
        return json_encode($this->objectifs);
    }

}
