<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplateChamps
 *
 * @ORM\Table(name="template_champs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemplateChampsRepository")
 */
class TemplateChamps
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cv",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cvId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Champs",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $champId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set champId.
     *
     * @param int $champId
     *
     * @return TemplateChamps
     */
    public function setChampId($champId)
    {
        $this->champId = $champId;

        return $this;
    }

    /**
     * Get champId.
     *
     * @return int
     */
    public function getChampId()
    {
        return $this->champId;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return TemplateChamps
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set cvId.
     *
     * @param \AppBundle\Entity\Cv $cvId
     *
     * @return TemplateChamps
     */
    public function setCvId(\AppBundle\Entity\Cv $cvId)
    {
        $this->cvId = $cvId;

        return $this;
    }

    /**
     * Get cvId.
     *
     * @return \AppBundle\Entity\Cv
     */
    public function getCvId()
    {
        return $this->cvId;
    }
}
