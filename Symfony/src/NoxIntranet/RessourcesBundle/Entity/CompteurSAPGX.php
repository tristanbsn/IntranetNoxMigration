<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteurSAPGX
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CompteurSAPGX
{
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
     * @ORM\Column(name="entite", type="string", length=255)
     */
    private $entite;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=255)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="abreger", type="string", length=255)
     */
    private $abreger;

    /**
     * @var string
     *
     * @ORM\Column(name="increment", type="string", length=255)
     */
    private $increment;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255)
     */
    private $mois;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entite
     *
     * @param string $entite
     *
     * @return CompteurSAPGX
     */
    public function setEntite($entite)
    {
        $this->entite = $entite;

        return $this;
    }

    /**
     * Get entite
     *
     * @return string
     */
    public function getEntite()
    {
        return $this->entite;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return CompteurSAPGX
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set abreger
     *
     * @param string $abreger
     *
     * @return CompteurSAPGX
     */
    public function setAbreger($abreger)
    {
        $this->abreger = $abreger;

        return $this;
    }

    /**
     * Get abreger
     *
     * @return string
     */
    public function getAbreger()
    {
        return $this->abreger;
    }

    /**
     * Set increment
     *
     * @param string $increment
     *
     * @return CompteurSAPGX
     */
    public function setIncrement($increment)
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * Get increment
     *
     * @return string
     */
    public function getIncrement()
    {
        return $this->increment;
    }
    
    /**
     * Set mois
     *
     * @param string $mois
     *
     * @return CompteurSAPGX
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }
    
}
