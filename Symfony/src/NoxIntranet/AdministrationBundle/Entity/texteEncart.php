<?php

namespace NoxIntranet\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * texteEncart
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\AdministrationBundle\Entity\texteEncartRepository")
 */
class texteEncart
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
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;
    
    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string")
     */
    private $section;

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
     * Set text
     *
     * @param string $text
     *
     * @return texteEncart
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return texteEncart
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }
    
    public function __construct() {
        $this->text = '<p></p>';
    }
}
