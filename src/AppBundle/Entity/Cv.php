<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CvRepository")
 */
class Cv
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
     * @var string
     *
     * @ORM\Column(name="nomCv", type="string", length=255)
     */
    private $nomCv;

     /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Templates",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="cvFichier", type="text")
     */
    private $cvFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

   /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;


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
     * Set nomCv.
     *
     * @param string $nomCv
     *
     * @return Cv
     */
    public function setNomCv($nomCv)
    {
        $this->nomCv = $nomCv;

        return $this;
    }

    /**
     * Get nomCv.
     *
     * @return string
     */
    public function getNomCv()
    {
        return $this->nomCv;
    }

    /**
     * Set templateId.
     *
     * @param int $templateId
     *
     * @return Cv
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get templateId.
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set cvFichier.
     *
     * @param string $cvFichier
     *
     * @return Cv
     */
    public function setCvFichier($cvFichier)
    {
        $this->cvFichier = $cvFichier;

        return $this;
    }

    /**
     * Get cvFichier.
     *
     * @return string
     */
    public function getCvFichier()
    {
        return $this->cvFichier;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Cv
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Cv
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
