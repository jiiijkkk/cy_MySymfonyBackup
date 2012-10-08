<?php

namespace Acme\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\TestBundle\Entity\Product
 */
class Product
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $newF
     */
    private $newF;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $type
     */
    private $type;


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
     * Set newF
     *
     * @param string $newF
     */
    public function setNewF($newF)
    {
        $this->newF = $newF;
    }

    /**
     * Get newF
     *
     * @return string 
     */
    public function getNewF()
    {
        return $this->newF;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}