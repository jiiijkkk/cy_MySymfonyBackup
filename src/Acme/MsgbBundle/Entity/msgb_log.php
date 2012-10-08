<?php

namespace Acme\MsgbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MsgbBundle\Entity\msgb_log
 */
class msgb_log
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $admin_id
     */
    private $admin_id;

    /**
     * @var string $account
     */
    private $account;

    /**
     * @var string $nickname
     */
    private $nickname;

    /**
     * @var string $action
     */
    private $action;

    /**
     * @var integer $target_id
     */
    private $target_id;

    /**
     * @var string $ip
     */
    private $ip;

    /**
     * @var datetime $time
     */
    private $time;


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
     * Set admin_id
     *
     * @param integer $adminId
     */
    public function setAdminId($adminId)
    {
        $this->admin_id = $adminId;
    }

    /**
     * Get admin_id
     *
     * @return integer 
     */
    public function getAdminId()
    {
        return $this->admin_id;
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
     * Set action
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set target_id
     *
     * @param integer $targetId
     */
    public function setTargetId($targetId)
    {
        $this->target_id = $targetId;
    }

    /**
     * Get target_id
     *
     * @return integer 
     */
    public function getTargetId()
    {
        return $this->target_id;
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
}
