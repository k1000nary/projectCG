<?php
// src/AppBundle/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Client", cascade={"persist", "remove"})
     */
    private $client;

//    public $firstName;
//
//    /**
//     * @return mixed
//     */
//    public function getFirstName()
//    {
//        return $this->firstName;
//    }
//
//    /**
//     * @param mixed $firstName
//     */
//    public function setFirstName($firstName): void
//    {
//        $this->firstName = $firstName;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getLastName()
//    {
//        return $this->lastName;
//    }
//
//    /**
//     * @param mixed $lastName
//     */
//    public function setLastName($lastName): void
//    {
//        $this->lastName = $lastName;
//    }
//
//    public $lastName;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}