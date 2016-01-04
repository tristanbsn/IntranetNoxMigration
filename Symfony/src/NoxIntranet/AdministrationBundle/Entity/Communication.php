<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Communication
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\CommunicationRepository")
 */
class Communication {

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
     * @ORM\Column(name="section", type="string", length=255)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModifiction", type="date")
     */
    private $dateModifiction;

    /**
     * @var string
     * @Assert\File( maxSize = "50000k", mimeTypesMessage = "Veuillez envoyer un fichier valide.")
     * @ORM\Column(name="script", type="string", length=245, nullable=false)
     */
    private $fichier;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Communication
     */
    public function setSection($section) {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection() {
        return $this->section;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Communication
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Communication
     */
    public function setObjet($objet) {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet() {
        return $this->objet;
    }

    /**
     * Set dateModifiction
     *
     * @param \DateTime $dateModifiction
     *
     * @return Communication
     */
    public function setDateModifiction($dateModifiction) {
        $this->dateModifiction = $dateModifiction;

        return $this;
    }

    /**
     * Get dateModifiction
     *
     * @return \DateTime
     */
    public function getDateModifiction() {
        return $this->dateModifiction;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     *
     * @return Communication
     */
    public function setFichier($fichier) {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier() {
        return $this->fichier;
    }

    public function __construct() {
        $this->dateModifiction = new \Datetime();
    }

}
