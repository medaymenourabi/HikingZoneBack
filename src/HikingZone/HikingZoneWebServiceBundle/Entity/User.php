<?php

namespace HikingZone\HikingZoneWebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="HikingZone\HikingZoneWebServiceBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255,nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255,nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, unique=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255,nullable=true)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date",nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="profilepic", type="string", length=255, nullable=true)
     */
    private $profilepic;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255,nullable=true)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="phonenumber", type="integer",nullable=true)
     */
    private $phonenumber;
    /**
     * @ORM\Column(name="enabled",type="integer",nullable=true)
     */
    private $enabled;
    /**
     * @ORM\Column(name="passwordToken",type="string",nullable=true)
     */
    private $passwordToken;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return User
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set profilepic
     *
     * @param string $profilepic
     *
     * @return User
     */
    public function setProfilepic($profilepic)
    {
        $this->profilepic = $profilepic;

        return $this;
    }

    /**
     * Get profilepic
     *
     * @return string
     */
    public function getProfilepic()
    {
        return $this->profilepic;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set phonenumber
     *
     * @param integer $phonenumber
     *
     * @return User
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return int
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return mixed
     */
    public function getPasswordToken()
    {
        return $this->passwordToken;
    }

    /**
     * @param mixed $passwordToken
     */
    public function setPasswordToken($passwordToken)
    {
        $this->passwordToken = $passwordToken;
    }

}

