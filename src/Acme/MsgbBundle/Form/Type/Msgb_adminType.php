<?php

namespace Acme\MsgbBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Formbuilder;

class Msgb_adminType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add(
            'account','text'
        );
        $builder->add(
            'password','password'
        );
        $builder->add(
            'nickname','text'
        );
    }
    public function getName()
    {
        return 'Msgb_admin';
    }
    public function getAccount()
    {
        return 'account';
    }
    public function getMobile()
    {
        return 'password';
    }
    public function getNickname()
    {
        return 'nickname';
    }
}
