<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champs
 *
 * @ORM\Table(name="champs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChampsRepository")
 */
class Champs
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
     * @ORM\Column(name="nomChamps", type="string", length=255)
     */
    private $nomChamps;


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
     * Set nomChamps.
     *
     * @param string $nomChamps
     *
     * @return Champs
     */
    public function setNomChamps($nomChamps)
    {
        $this->nomChamps = $nomChamps;

        return $this;
    }

    /**
     * Get nomChamps.
     *
     * @return string
     */
    public function getNomChamps()
    {
        return $this->nomChamps;
    }
}
