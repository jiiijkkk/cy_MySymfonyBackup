<?php

/* AcmeMsgbBundle:Default:admin_menu.html.twig */
class __TwigTemplate_81e583114b9c3e17f5b31d9ac371b285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMsgbBundle:Base:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeMsgbBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <center>
        <font size=20>Welcome, ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "account"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "nickname"), "html", null, true);
        echo ")!</font><br>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">Message List</a><br>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_ctrl"), "html", null, true);
        echo "\">Admin Controller</a><br>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_log"), "html", null, true);
        echo "\">Log</a><br>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\">Analyze</a><br>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_logout"), "html", null, true);
        echo "\">Logout</a><br>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
