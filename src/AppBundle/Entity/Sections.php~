<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sections
 *
 * @ORM\Table(name="sections")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionsRepository")
 */
class Sections
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
     * @ORM\Column(name="nomSection", type="string", length=255)
     */
    private $nomSection;

    /**
     * @var string
     *
     * @ORM\Column(name="nvNomSection", type="string", length=255,nullable=true)
     */
    private $nvNomSection;




    /**
  * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Champs", inversedBy="Sections")
* @ORM\JoinTable(name="sectionChampsRel")  
*/
   private $sectionChampsRel;
    
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
     * Set nomSection.
     *
     * @param string $nomSection
     *
     * @return Sections
     */
    public function setNomSection($nomSection)
    {
        $this->nomSection = $nomSection;

        return $this;
    }

    /**
     * Get nomSection.
     *
     * @return string
     */
    public function getNomSection()
    {
        return $this->nomSection;
    }

    /**
     * Set nvNomSection.
     *
     * @param string $nvNomSection
     *
     * @return Sections
     */
    public function setNvNomSection($nvNomSection)
    {
        $this->nvNomSection = $nvNomSection;

        return $this;
    }

    /**
     * Get nvNomSection.
     *
     * @return string
     */
    public function getNvNomSection()
    {
        return $this->nvNomSection;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sectionChampsRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Add sectionChampsRel.
     *
     * @param \AppBundle\Entity\Champs $sectionChampsRel
     *
     * @return Sections
     */
    public function addSectionChampsRel(\AppBundle\Entity\Champs $sectionChampsRel)
    {
        $this->sectionChampsRel[] = $sectionChampsRel;

        return $this;
    }

    /**
     * Remove sectionChampsRel.
     *
     * @param \AppBundle\Entity\Champs $sectionChampsRel
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSectionChampsRel(\AppBundle\Entity\Champs $sectionChampsRel)
    {
        return $this->sectionChampsRel->removeElement($sectionChampsRel);
    }

    /**
     * Get sectionChampsRel.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectionChampsRel()
    {
        return $this->sectionChampsRel;
    }
}
