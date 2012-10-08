<?php

/* AcmeMsgbBundle:Default:admin_log.html.twig */
class __TwigTemplate_673b5fe25a28278b96009ed4fb1f335e extends Twig_Template
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
\t    <table border=1>
            <tr>
                <th colspan=3 >
                    Log
                </th>
            </tr>
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 11
            echo "                <tr>
                    <td>
                        ";
            // line 13
            if (($this->getAttribute($this->getContext($context, "log"), "action") != "message")) {
                // line 14
                echo "                            ";
                if ($this->getAttribute($this->getContext($context, "admins", true), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array", true, true)) {
                    // line 15
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_log", array("page_size" => $this->getContext($context, "page_size"), "page" => 1, "account" => $this->getAttribute($this->getContext($context, "log"), "adminId"))), "html", null, true);
                    echo "\" >
                                ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admins"), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array"), "account"), "html", null, true);
                    echo "
                                (";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admins"), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array"), "nickname"), "html", null, true);
                    echo ")</a>
                            ";
                } else {
                    // line 19
                    echo "                                <i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "account"), "html", null, true);
                    echo "
                                (";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "nickname"), "html", null, true);
                    echo ")
                                (id:";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "adminId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 23
                echo "                        ";
            } else {
                // line 24
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "account"), "html", null, true);
                echo "
                            (";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "nickname"), "html", null, true);
                echo ")
                        ";
            }
            // line 27
            echo "                        ";
            if (($this->getAttribute($this->getContext($context, "log"), "action") == "message")) {
                // line 28
                echo "                            leaved a
                            ";
                // line 29
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 30
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                            ";
                } else {
                    // line 32
                    echo "                                <i>
                            ";
                }
                // line 34
                echo "                                message
                            ";
                // line 35
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 36
                    echo "                                </a>
                            ";
                } else {
                    // line 38
                    echo "                                (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 40
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "signup")) {
                // line 41
                echo "                            signup
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "login")) {
                // line 43
                echo "                            login
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "logout")) {
                // line 45
                echo "                            logout
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "reply")) {
                // line 47
                echo "                            replied a
                            ";
                // line 48
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 49
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                            ";
                } else {
                    // line 51
                    echo "                                <i>
                            ";
                }
                // line 53
                echo "                                message
                            ";
                // line 54
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 55
                    echo "                                </a>
                            ";
                } else {
                    // line 57
                    echo "                                (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 59
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "remove_reply")) {
                // line 60
                echo "                            remove a
                                ";
                // line 61
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 62
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                                ";
                } else {
                    // line 64
                    echo "                                    <i>
                                ";
                }
                // line 66
                echo "                                    reply
                                ";
                // line 67
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 68
                    echo "                                    </a>
                                ";
                } else {
                    // line 70
                    echo "                                    (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")></i>
                                ";
                }
                // line 72
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "remove_message")) {
                // line 73
                echo "                            removed a <i>message (id:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                echo ")</i>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "disaccount")) {
                // line 75
                echo "                            disaccounted
                            ";
                // line 76
                if (($this->getAttribute($this->getContext($context, "log"), "adminId") == $this->getAttribute($this->getContext($context, "log"), "targetId"))) {
                    // line 77
                    echo "                                itself
                            ";
                } else {
                    // line 79
                    echo "                                an account (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")
                            ";
                }
                // line 81
                echo "                        ";
            }
            // line 82
            echo "                    </td>
                    <td>
                        from
                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "ip"), "html", null, true);
            echo "
                    </td>
                    <td>
                        @
                        ";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 93
        echo "        </table>

\t    <!-- PAGE SELECT -->
\t    ";
        // line 96
        if (($this->getContext($context, "page") != 1)) {
            // line 97
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_log", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 100
        echo "\t    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "page_num")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "            ";
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                // line 102
                echo "\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_log", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "i"))), "html", null, true);
                echo "\">
            ";
            }
            // line 104
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                echo "</a>
            ";
            }
            // line 106
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 107
        echo "\t    ";
        if (($this->getContext($context, "page") != $this->getContext($context, "page_num"))) {
            // line 108
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_log", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
            echo "\">
                Next-&gt;</a>
\t    ";
        }
        // line 111
        echo "\t    <!-- END OF PAGE SELECT -->
        <br>
        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;--&nbsp;Homepage&nbsp;--&gt;</a>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:admin_log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 113,  303 => 111,  296 => 108,  293 => 107,  287 => 106,  280 => 104,  274 => 102,  271 => 101,  266 => 100,  259 => 97,  257 => 96,  252 => 93,  242 => 89,  235 => 85,  230 => 82,  227 => 81,  221 => 79,  217 => 77,  215 => 76,  212 => 75,  206 => 73,  203 => 72,  197 => 70,  193 => 68,  191 => 67,  188 => 66,  184 => 64,  178 => 62,  176 => 61,  173 => 60,  170 => 59,  164 => 57,  160 => 55,  158 => 54,  155 => 53,  151 => 51,  145 => 49,  143 => 48,  140 => 47,  136 => 45,  132 => 43,  128 => 41,  125 => 40,  119 => 38,  115 => 36,  113 => 35,  110 => 34,  106 => 32,  100 => 30,  98 => 29,  95 => 28,  92 => 27,  87 => 25,  82 => 24,  79 => 23,  74 => 21,  70 => 20,  65 => 19,  60 => 17,  56 => 16,  51 => 15,  48 => 14,  46 => 13,  42 => 11,  38 => 10,  29 => 3,  26 => 2,);
    }
}
