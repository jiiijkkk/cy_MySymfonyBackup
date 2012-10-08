<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b1d4b769d844e9c2169587131a04ff32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  30 => 4,  27 => 3,  832 => 320,  828 => 316,  823 => 314,  818 => 311,  811 => 308,  808 => 307,  802 => 306,  795 => 304,  789 => 302,  786 => 301,  781 => 300,  774 => 297,  772 => 296,  767 => 293,  757 => 289,  751 => 286,  747 => 284,  744 => 283,  738 => 281,  734 => 279,  732 => 278,  729 => 277,  723 => 275,  720 => 274,  714 => 272,  710 => 270,  708 => 269,  705 => 268,  701 => 266,  695 => 264,  693 => 263,  690 => 262,  687 => 261,  681 => 259,  677 => 257,  675 => 256,  672 => 255,  668 => 253,  662 => 251,  660 => 250,  657 => 249,  653 => 247,  649 => 245,  645 => 243,  642 => 242,  636 => 240,  632 => 238,  630 => 237,  627 => 236,  623 => 234,  617 => 232,  615 => 231,  612 => 230,  610 => 229,  606 => 227,  601 => 225,  596 => 224,  593 => 223,  588 => 221,  584 => 220,  579 => 219,  571 => 216,  567 => 215,  562 => 214,  559 => 213,  557 => 212,  553 => 210,  549 => 209,  538 => 205,  534 => 204,  517 => 194,  513 => 193,  506 => 188,  496 => 184,  490 => 181,  486 => 179,  482 => 178,  461 => 159,  452 => 157,  446 => 156,  443 => 155,  440 => 154,  437 => 153,  432 => 152,  429 => 151,  425 => 149,  422 => 148,  418 => 147,  383 => 114,  374 => 112,  369 => 111,  365 => 109,  363 => 108,  353 => 103,  328 => 99,  325 => 98,  322 => 97,  319 => 96,  316 => 95,  313 => 94,  310 => 93,  307 => 92,  304 => 91,  301 => 90,  298 => 89,  295 => 88,  292 => 87,  289 => 86,  286 => 85,  283 => 84,  280 => 83,  277 => 82,  274 => 81,  271 => 80,  269 => 79,  250 => 62,  231 => 60,  227 => 59,  221 => 58,  215 => 55,  212 => 54,  208 => 53,  190 => 51,  186 => 50,  168 => 48,  164 => 47,  159 => 45,  151 => 42,  144 => 40,  137 => 38,  130 => 36,  123 => 34,  116 => 32,  109 => 30,  102 => 28,  95 => 26,  88 => 24,  81 => 20,  78 => 19,  74 => 18,  69 => 16,  64 => 14,  56 => 10,  54 => 9,  34 => 7,  29 => 3,  26 => 2,);
    }
}
