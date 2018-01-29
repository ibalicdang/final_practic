<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * myEntities
 *
 * @ORM\Table(name="my_entities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\myEntitiesRepository")
 */
class myEntities
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
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middleName", type="string", length=255)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="birthDate", type="string", length=255)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="telNumber", type="string", length=255)
     */
    private $telNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEmployed", type="string", length=255)
     */
    private $dateEmployed;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="integer", length=255)
     */
    private $salary;


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
     * Set lastName
     *
     * @param string $lastName
     * @return myEntities
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return myEntities
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return myEntities
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    

    /**
     * Set birthDate
     *
     * @param string $birthDate
     * @return myEntities
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return string 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return myEntities
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telNumber
     *
     * @param string $telNumber
     * @return myEntities
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    /**
     * Get telNumber
     *
     * @return string 
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return myEntities
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dateEmployed
     *
     * @param string $dateEmployed
     * @return myEntities
     */
    public function setDateEmployed($dateEmployed)
    {
        $this->dateEmployed = $dateEmployed;

        return $this;
    }

    /**
     * Get dateEmployed
     *
     * @return string 
     */
    public function getDateEmployed()
    {
        return $this->dateEmployed;
    }

    /**
     * Set integer
     *
     * @param int $salary
     * @return myEntities
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer 
     */
    public function getSalary()
    {
        return $this->salary;
    }
}
