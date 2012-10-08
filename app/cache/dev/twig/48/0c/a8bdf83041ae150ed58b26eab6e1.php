<?php

/* AcmeMsgbBundle:Base:base.html.twig */
class __TwigTemplate_480ca8bdf83041ae150ed58b26eab6e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Simple Message Board</title>
        ";
        // line 5
        if (($this->getContext($context, "stylesheet") == "Default")) {
            // line 6
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "0c193ec_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c193ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0c193ec_Default_1.css");
                // line 7
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "0c193ec"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c193ec") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0c193ec.css");
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 9
            echo "        ";
        } elseif (($this->getContext($context, "stylesheet") == "Black_in_White")) {
            // line 10
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "4d2908e_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d2908e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4d2908e_Black_in_White_1.css");
                // line 11
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "4d2908e"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d2908e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4d2908e.css");
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 13
            echo "        ";
        } elseif (($this->getContext($context, "stylesheet") == "White_in_Black")) {
            // line 14
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7d12c70_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d12c70_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7d12c70_White_in_Black_1.css");
                // line 15
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "7d12c70"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d12c70") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7d12c70.css");
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  108 => 20,  102 => 22,  99 => 21,  97 => 20,  93 => 18,  90 => 17,  76 => 15,  71 => 14,  68 => 13,  49 => 10,  27 => 6,  25 => 5,  19 => 1,  54 => 11,  50 => 8,  46 => 9,  42 => 6,  38 => 5,  32 => 7,  29 => 3,  26 => 2,);
    }
}
