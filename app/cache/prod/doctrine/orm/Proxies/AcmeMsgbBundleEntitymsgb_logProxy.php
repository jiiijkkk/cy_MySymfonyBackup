<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AcmeMsgbBundleEntitymsgb_logProxy extends \Acme\MsgbBundle\Entity\msgb_log implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setAdminId($adminId)
    {
        $this->__load();
        return parent::setAdminId($adminId);
    }

    public function getAdminId()
    {
        $this->__load();
        return parent::getAdminId();
    }

    public function setAccount($account)
    {
        $this->__load();
        return parent::setAccount($account);
    }

    public function getAccount()
    {
        $this->__load();
        return parent::getAccount();
    }

    public function setNickname($nickname)
    {
        $this->__load();
        return parent::setNickname($nickname);
    }

    public function getNickname()
    {
        $this->__load();
        return parent::getNickname();
    }

    public function setAction($action)
    {
        $this->__load();
        return parent::setAction($action);
    }

    public function getAction()
    {
        $this->__load();
        return parent::getAction();
    }

    public function setTargetId($targetId)
    {
        $this->__load();
        return parent::setTargetId($targetId);
    }

    public function getTargetId()
    {
        $this->__load();
        return parent::getTargetId();
    }

    public function setIp($ip)
    {
        $this->__load();
        return parent::setIp($ip);
    }

    public function getIp()
    {
        $this->__load();
        return parent::getIp();
    }

    public function setTime($time)
    {
        $this->__load();
        return parent::setTime($time);
    }

    public function getTime()
    {
        $this->__load();
        return parent::getTime();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'admin_id', 'account', 'nickname', 'action', 'target_id', 'ip', 'time');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}