<?php

namespace Acme\MsgBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MsgBundle\Entity\msg
 */
class msg
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $mail
     */
    private $mail;

    /**
     * @var string $contant
     */
    private $contant;

    /**
     * @var string $reply
     */
    private $reply;

    /**
     * @var string $replyer
     */
    private $replyer;

    /**
     * @var datetime $timestamp
     */
    private $timestamp;


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
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set contant
     *
     * @param string $contant
     */
    public function setContant($contant)
    {
        $this->contant = $contant;
    }

    /**
     * Get contant
     *
     * @return string 
     */
    public function getContant()
    {
        return $this->contant;
    }

    /**
     * Set reply
     *
     * @param string $reply
     */
    public function setReply($reply)
    {
        $this->reply = $reply;
    }

    /**
     * Get reply
     *
     * @return string 
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set replyer
     *
     * @param string $replyer
     */
    public function setReplyer($replyer)
    {
        $this->replyer = $replyer;
    }

    /**
     * Get replyer
     *
     * @return string 
     */
    public function getReplyer()
    {
        return $this->replyer;
    }

    /**
     * Set timestamp
     *
     * @param datetime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Get timestamp
     *
     * @return datetime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}