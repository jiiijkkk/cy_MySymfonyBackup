<?php

namespace Acme\MsgbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MsgbBundle\Entity\msgb_admin
 */
class msgb_admin
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
     * @var string $password
     */
    private $password;

    /**
     * @var string $nickname
     */
    private $nickname;

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
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
}
