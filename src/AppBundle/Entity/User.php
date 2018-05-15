<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @Notifiable(name="fos_user")
 */
class User extends BaseUser implements NotifiableInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


     /**
         * @ORM\Column(type="string", nullable=true)
         */
        protected $first_name;

         /**
         * @ORM\Column(type="string", nullable=true)
         */
        protected $last_name;
        
     /**
     * @ORM\Column(type="string", nullable=true))
     *
     * @Assert\File(mimeTypes={ "image/jpg","image/png"  })
     */
          protected $image;


    public function __construct()
    {
        parent::__construct();
     $this->roles = array('ROLE_USER');
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

   

        

          /**
           * Get the value of image
           */ 
          public function getImage()
          {
                    return $this->image;
          }

          /**
           * Set the value of image
           *
           * @return  self
           */ 
          public function setImage($image)
          {
                    $this->image = $image;

                    return $this;
          }

}
