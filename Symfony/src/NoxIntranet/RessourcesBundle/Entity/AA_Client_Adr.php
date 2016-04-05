<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AA_Client_Adr
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\AA_Client_AdrRepository")
 */
class AA_Client_Adr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="N_ClientAdr", type="integer", nullable=true)
     */
    private $nClientAdr;

    /**
     * @var integer
     *
     * @ORM\Column(name="N_Client", type="integer", nullable=true)
     */
    private $nClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Ville", type="string", length=255, nullable=true)
     */
    private $nomVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Pays", type="string", length=255, nullable=true)
     */
    private $nomPays;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Postal", type="integer", nullable=true)
     */
    private $codePostal;


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
     * Set nClient
     *
     * @param integer $nClient
     *
     * @return AA_Client_Adr
     */
    public function setNClient($nClient)
    {
        $this->nClient = $nClient;

        return $this;
    }

    /**
     * Get nClient
     *
     * @return integer
     */
    public function getNClient()
    {
        return $this->nClient;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return AA_Client_Adr
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return AA_Client_Adr
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AA_Client_Adr
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nomVille
     *
     * @param string $nomVille
     *
     * @return AA_Client_Adr
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set nomPays
     *
     * @param string $nomPays
     *
     * @return AA_Client_Adr
     */
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get nomPays
     *
     * @return string
     */
    public function getNomPays()
    {
        return $this->nomPays;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return AA_Client_Adr
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
}
