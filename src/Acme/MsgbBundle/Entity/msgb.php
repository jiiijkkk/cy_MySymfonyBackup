<?php

namespace Acme\MsgbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MsgbBundle\Entity\msgb
 */
class msgb
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $account
     */
    private $account;

    /**
     * @var string $nickname
     */
    private $nickname;

    /**
     * @var string $mobile
     */
    private $mobile;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $contant
     */
    private $contant;

    /**
     * @var datetime $time
     */
    private $time;

    /**
     * @var string $ip
     */
    private $ip;

    /**
     * @var string $replyer
     */
    private $replyer;

    /**
     * @var string $reply_contant
     */
    private $reply_contant;

    /**
     * @var string $reply_time
     */
    private $reply_time;


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
     * Set account
     *
     * @param string $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set time
     *
     * @param datetime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * Get time
     *
     * @return datetime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
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
     * Set reply_contant
     *
     * @param string $reply_contant
     */
    public function setReply_contant($reply_contant)
    {
        $this->reply_contant = $reply_contant;
    }

    /**
     * Get reply_contant
     *
     * @return string 
     */
    public function getReply_contant()
    {
        return $this->reply_contant;
    }

    /**
     * Set reply_time
     *
     * @param datetime $reply_time
     */
    public function setReply_time($reply_time)
    {
        $this->reply_time = $reply_time;
    }

    /**
     * Get reply_time
     *
     * @return datetime
     */
    public function getReply_time()
    {
        return $this->reply_time;
    }
}
