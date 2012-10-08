<?php

namespace Acme\MsgbBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Formbuilder;

class MsgbType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('account','text');
        $builder->add('nickname','text');
        $builder->add('mobile','text');
        $builder->add('title','text');
        $builder->add('contant','textarea');
    }
    public function getName()
    {
        return 'comment';
    }
    public function getAccount()
    {
        return 'account';
    }
    public function getNickname()
    {
        return 'nickname';
    }
    public function getMobile()
    {
        return 'mobile';
    }
    public function getTitle()
    {
        return 'title';
    }
    public function getContant()
    {
        return 'contant';
    }
}
