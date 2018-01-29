<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * datatypes
 *
 * @ORM\Table(name="datatypes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\datatypesRepository")
 */
class datatypes
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
     * @var bool
     *
     * @ORM\Column(name="boolean", type="boolean")
     */
    private $boolean;

    /**
     * @var array
     *
     * @ORM\Column(name="arrays", type="array")
     */
    private $arrays;

    /**
     * @var array
     *
     * @ORM\Column(name="simpleArray", type="simple_array")
     */
    private $simpleArray;

    /**
     * @var string
     *
     * @ORM\Column(name="jsonArray", type="string", length=255)
     */
    private $jsonArray;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="objects", type="object")
     */
    private $objects;

    /**
     * @var string
     *
     * @ORM\Column(name="dateTimeZ", type="string", length=255)
     */
    private $dateTimeZ;


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
     * Set boolean
     *
     * @param boolean $boolean
     * @return datatypes
     */
    public function setBoolean($boolean)
    {
        $this->boolean = $boolean;

        return $this;
    }

    /**
     * Get boolean
     *
     * @return boolean 
     */
    public function getBoolean()
    {
        return $this->boolean;
    }

    /**
     * Set arrays
     *
     * @param array $arrays
     * @return datatypes
     */
    public function setArrays($arrays)
    {
        $this->arrays = $arrays;

        return $this;
    }

    /**
     * Get arrays
     *
     * @return array 
     */
    public function getArrays()
    {
        return $this->arrays;
    }

    /**
     * Set simpleArray
     *
     * @param array $simpleArray
     * @return datatypes
     */
    public function setSimpleArray($simpleArray)
    {
        $this->simpleArray = $simpleArray;

        return $this;
    }

    /**
     * Get simpleArray
     *
     * @return array 
     */
    public function getSimpleArray()
    {
        return $this->simpleArray;
    }

    /**
     * Set jsonArray
     *
     * @param string $jsonArray
     * @return datatypes
     */
    public function setJsonArray($jsonArray)
    {
        $this->jsonArray = $jsonArray;

        return $this;
    }

    /**
     * Get jsonArray
     *
     * @return string 
     */
    public function getJsonArray()
    {
        return $this->jsonArray;
    }

    /**
     * Set objects
     *
     * @param \stdClass $objects
     * @return datatypes
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;

        return $this;
    }

    /**
     * Get objects
     *
     * @return \stdClass 
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Set dateTimeZ
     *
     * @param string $dateTimeZ
     * @return datatypes
     */
    public function setDateTimeZ($dateTimeZ)
    {
        $this->dateTimeZ = $dateTimeZ;

        return $this;
    }

    /**
     * Get dateTimeZ
     *
     * @return string 
     */
    public function getDateTimeZ()
    {
        return $this->dateTimeZ;
    }
}
