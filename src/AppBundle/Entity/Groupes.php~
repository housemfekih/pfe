<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupesRepository")
 */
class Groupes
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
     * @ORM\Column(name="nomGroupe", type="string", length=255)
     */
    private $nomGroupe;

        
  
    

    /**
        * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Sections", cascade={"persist"})
        * @ORM\JoinTable(name="sectionsGroupeRel")  
        */
	private $sectionsGroupeRel;


    //  /**
    //  * Constructor
    //  */
    // public function __construct()
    // {
    //     $this->Sections = new \Doctrine\Common\Collections\ArrayCollection();
    // }
    // public function __toString(){
    //     return $this->nomGroupe;
    // }
    // /**
    //  * Get id.
    //  *
    //  * @return int
    //  */
    // public function getId()
    // {
    //     return $this->id;
    // }

    // /**
    //  * Set nomGroupe.
    //  *
    //  * @param string $nomGroupe
    //  *
    //  * @return Groupes
    //  */
    // public function setNomGroupe($nomGroupe)
    // {
    //     $this->nomGroupe = $nomGroupe;

    //     return $this;
    // }

    // /**
    //  * Get nomGroupe.
    //  *
    //  * @return string
    //  */
    // public function getNomGroupe()
    // {
    //     return $this->nomGroupe;
    // }


    // /**
    //  * Add section.
    //  *
    //  * @param \AppBundle\Entity\Sections $section
    //  *
    //  * @return Groupes
    //  */
    // public function addSection(\AppBundle\Entity\Sections $section)
    // {
    //     $this->Sections[] = $section;

    //     return $this;
    // }

    // /**
    //  * Remove section.
    //  *
    //  * @param \AppBundle\Entity\Sections $section
    //  *
    //  * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
    //  */
    // public function removeSection(\AppBundle\Entity\Sections $section)
    // {
    //     return $this->Sections->removeElement($section);
    // }

    // /**
    //  * Get sections.
    //  *
    //  * @return \Doctrine\Common\Collections\Collection
    //  */
    // public function getSections()
    // {
    //     return $this->Sections;
    // }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nomGroupe
     *
     * @return  string
     */ 
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set the value of nomGroupe
     *
     * @param  string  $nomGroupe
     *
     * @return  self
     */ 
    public function setNomGroupe(string $nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sectionsGroupeRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sectionsGroupeRel.
     *
     * @param \AppBundle\Entity\Groupes $sectionsGroupeRel
     *
     * @return Groupes
     */
    public function addSectionsGroupeRel(\AppBundle\Entity\Groupes $sectionsGroupeRel)
    {
        $this->sectionsGroupeRel[] = $sectionsGroupeRel;

        return $this;
    }

    /**
     * Remove sectionsGroupeRel.
     *
     * @param \AppBundle\Entity\Groupes $sectionsGroupeRel
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSectionsGroupeRel(\AppBundle\Entity\Groupes $sectionsGroupeRel)
    {
        return $this->sectionsGroupeRel->removeElement($sectionsGroupeRel);
    }

    /**
     * Get sectionsGroupeRel.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectionsGroupeRel()
    {
        return $this->sectionsGroupeRel;
    }
}
