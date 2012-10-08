<?php

namespace Acme\MsgbBundle\Controller;

class fake_error
{
    private $message;
    public function setMessage($message)
    {
        $this->message=$message;
    }
    public function message()
    {
        return $this->message;
    }
}
