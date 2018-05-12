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
     * @var string
     *
     * @ORM\Column(name="typeChamps", type="string", length=255)
     */
    private $typeChamps; /**
     * @var string
     *
     * @ORM\Column(name="longeurChamps", type="string", length=255)
     */
    private $longeurChamps;





    /**
     * @return string
     */
    public function getTypeChamps()
    {
        return $this->typeChamps;
    }

    /**
     * @param string $typeChamps
     */
    public function setTypeChamps($typeChamps)
    {
        $this->typeChamps = $typeChamps;
    }

    /**
     * @return string
     */
    public function getLongeurChamps()
    {
        return $this->longeurChamps;
    }

    /**
     * @param string $longeurChamps
     */
    public function setLongeurChamps($longeurChamps)
    {
        $this->longeurChamps = $longeurChamps;
    }
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
