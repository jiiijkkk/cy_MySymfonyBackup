<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_58981d6c0a8ac6f697635088e7bab060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => $this->getContext($context, "token"), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 9
        echo "        ";
        if ($this->getContext($context, "profile")) {
            // line 10
            echo "            <div id=\"resume\">
                <p>
                    <strong><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "</a></strong>
                    <span class=\"date\">
                        <strong>by ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "ip"), "html", null, true);
            echo "</strong> at <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "time"), "r"), "html", null, true);
            echo "</strong>
                    </span>
                </p>
            </div>
        ";
        }
        // line 19
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 25
        $this->displayBlock('panel', $context, $blocks);
        // line 26
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 29
        if (array_key_exists("templates", $context)) {
            // line 30
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 32
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 33
                echo "                                ";
                if (($this->getContext($context, "menu") != "")) {
                    // line 34
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    if (($this->getContext($context, "name") == $this->getContext($context, "panel"))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
                    echo "\">";
                    echo $this->getContext($context, "menu");
                    echo "</a>
                                    </li>
                                ";
                }
                // line 38
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "                        </ul>
                    ";
        }
        // line 41
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 42
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 43
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 25
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  123 => 41,  113 => 38,  105 => 35,  97 => 34,  94 => 33,  85 => 31,  82 => 30,  75 => 26,  73 => 25,  48 => 12,  44 => 10,  39 => 8,  33 => 5,  30 => 4,  27 => 3,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  200 => 87,  185 => 75,  178 => 71,  171 => 67,  164 => 63,  154 => 55,  151 => 54,  143 => 49,  140 => 48,  137 => 25,  132 => 44,  129 => 43,  125 => 41,  119 => 39,  111 => 37,  109 => 36,  106 => 35,  100 => 32,  95 => 30,  89 => 32,  86 => 27,  83 => 26,  80 => 29,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 19,  60 => 16,  55 => 14,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
