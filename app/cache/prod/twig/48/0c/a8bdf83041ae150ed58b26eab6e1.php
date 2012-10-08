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
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "Default")) {
            // line 6
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "0c193ec_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c193ec_0") : $this->env->getExtension('assets')->getAssetUrl("css/0c193ec_Default_1.css");
                // line 7
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "0c193ec"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c193ec") : $this->env->getExtension('assets')->getAssetUrl("css/0c193ec.css");
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 9
            echo "        ";
        } elseif (($_stylesheet_ == "Black_in_White")) {
            // line 10
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "4d2908e_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d2908e_0") : $this->env->getExtension('assets')->getAssetUrl("css/4d2908e_Black_in_White_1.css");
                // line 11
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "4d2908e"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d2908e") : $this->env->getExtension('assets')->getAssetUrl("css/4d2908e.css");
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 13
            echo "        ";
        } elseif (($_stylesheet_ == "White_in_Black")) {
            // line 14
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7d12c70_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d12c70_0") : $this->env->getExtension('assets')->getAssetUrl("css/7d12c70_White_in_Black_1.css");
                // line 15
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            } else {
                // asset "7d12c70"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d12c70") : $this->env->getExtension('assets')->getAssetUrl("css/7d12c70.css");
                echo "                <link href=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
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
        return array (  120 => 21,  115 => 20,  106 => 21,  104 => 20,  100 => 18,  97 => 17,  81 => 15,  76 => 14,  73 => 13,  52 => 10,  49 => 9,  33 => 7,  28 => 6,  25 => 5,  19 => 1,  1004 => 370,  1000 => 366,  995 => 364,  990 => 361,  981 => 358,  976 => 357,  970 => 356,  960 => 354,  952 => 352,  947 => 351,  941 => 350,  932 => 347,  929 => 346,  924 => 343,  913 => 339,  906 => 336,  902 => 334,  899 => 333,  892 => 331,  888 => 329,  885 => 328,  882 => 327,  875 => 325,  872 => 324,  865 => 322,  861 => 320,  857 => 319,  854 => 318,  850 => 316,  840 => 314,  836 => 313,  833 => 312,  830 => 311,  823 => 309,  819 => 307,  815 => 306,  812 => 305,  808 => 303,  798 => 301,  794 => 300,  791 => 299,  787 => 297,  783 => 295,  779 => 293,  776 => 292,  769 => 290,  765 => 288,  761 => 287,  758 => 286,  754 => 284,  746 => 282,  742 => 281,  739 => 280,  736 => 279,  732 => 277,  726 => 275,  720 => 274,  717 => 273,  711 => 271,  706 => 270,  700 => 269,  688 => 266,  682 => 265,  677 => 264,  672 => 263,  669 => 262,  665 => 260,  660 => 259,  648 => 255,  642 => 254,  624 => 244,  618 => 243,  611 => 238,  600 => 234,  593 => 231,  589 => 229,  584 => 228,  563 => 209,  553 => 207,  547 => 206,  544 => 205,  540 => 204,  535 => 203,  529 => 202,  526 => 201,  522 => 199,  518 => 198,  513 => 197,  478 => 164,  468 => 162,  464 => 160,  460 => 159,  455 => 158,  443 => 153,  410 => 149,  407 => 148,  404 => 147,  401 => 146,  398 => 145,  395 => 144,  392 => 143,  389 => 142,  386 => 141,  383 => 140,  380 => 139,  377 => 138,  374 => 137,  371 => 136,  368 => 135,  365 => 134,  362 => 133,  359 => 132,  356 => 131,  352 => 130,  350 => 129,  331 => 112,  306 => 110,  301 => 109,  294 => 108,  288 => 105,  235 => 54,  229 => 53,  209 => 51,  204 => 50,  184 => 48,  179 => 47,  174 => 45,  165 => 42,  157 => 40,  149 => 38,  141 => 36,  133 => 34,  125 => 32,  117 => 30,  109 => 22,  101 => 26,  93 => 24,  86 => 20,  83 => 19,  78 => 18,  72 => 16,  67 => 14,  59 => 10,  57 => 11,  34 => 7,  29 => 3,  26 => 2,);
    }
}
