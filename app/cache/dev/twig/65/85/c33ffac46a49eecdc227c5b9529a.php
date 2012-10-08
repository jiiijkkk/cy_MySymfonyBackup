<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_6585c33ffac46a49eecdc227c5b9529a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "trace"), "type") . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace"), "file")) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "trace"), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("display") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  55 => 14,  53 => 13,  42 => 10,  23 => 4,  104 => 24,  97 => 22,  82 => 19,  75 => 16,  71 => 14,  67 => 12,  49 => 12,  40 => 7,  38 => 6,  31 => 5,  25 => 4,  22 => 3,  20 => 2,  224 => 96,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  135 => 50,  131 => 48,  129 => 47,  126 => 46,  120 => 45,  117 => 44,  113 => 43,  103 => 36,  99 => 34,  94 => 31,  70 => 26,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  77 => 28,  57 => 9,  46 => 14,  37 => 8,  33 => 7,  24 => 6,  19 => 2,  44 => 11,  41 => 7,  30 => 4,  27 => 3,  832 => 320,  828 => 316,  823 => 314,  818 => 311,  811 => 308,  808 => 307,  802 => 306,  795 => 304,  789 => 302,  786 => 301,  781 => 300,  774 => 297,  772 => 296,  767 => 293,  757 => 289,  751 => 286,  747 => 284,  744 => 283,  738 => 281,  734 => 279,  732 => 278,  729 => 277,  723 => 275,  720 => 274,  714 => 272,  710 => 270,  708 => 269,  705 => 268,  701 => 266,  695 => 264,  693 => 263,  690 => 262,  687 => 261,  681 => 259,  677 => 257,  675 => 256,  672 => 255,  668 => 253,  662 => 251,  660 => 250,  657 => 249,  653 => 247,  649 => 245,  645 => 243,  642 => 242,  636 => 240,  632 => 238,  630 => 237,  627 => 236,  623 => 234,  617 => 232,  615 => 231,  612 => 230,  610 => 229,  606 => 227,  601 => 225,  596 => 224,  593 => 223,  588 => 221,  584 => 220,  579 => 219,  571 => 216,  567 => 215,  562 => 214,  559 => 213,  557 => 212,  553 => 210,  549 => 209,  538 => 205,  534 => 204,  517 => 194,  513 => 193,  506 => 188,  496 => 184,  490 => 181,  486 => 179,  482 => 178,  461 => 159,  452 => 157,  446 => 156,  443 => 155,  440 => 154,  437 => 153,  432 => 152,  429 => 151,  425 => 149,  422 => 148,  418 => 147,  383 => 114,  374 => 112,  369 => 111,  365 => 109,  363 => 108,  353 => 103,  328 => 99,  325 => 98,  322 => 97,  319 => 96,  316 => 95,  313 => 94,  310 => 93,  307 => 92,  304 => 91,  301 => 90,  298 => 89,  295 => 88,  292 => 87,  289 => 86,  286 => 85,  283 => 84,  280 => 83,  277 => 82,  274 => 81,  271 => 80,  269 => 79,  250 => 62,  231 => 60,  227 => 59,  221 => 58,  215 => 90,  212 => 54,  208 => 53,  190 => 78,  186 => 50,  168 => 48,  164 => 47,  159 => 45,  151 => 42,  144 => 40,  137 => 51,  130 => 36,  123 => 34,  116 => 32,  109 => 30,  102 => 28,  95 => 21,  88 => 19,  81 => 20,  78 => 17,  74 => 27,  69 => 16,  64 => 15,  56 => 10,  54 => 9,  34 => 7,  29 => 5,  26 => 2,);
    }
}
