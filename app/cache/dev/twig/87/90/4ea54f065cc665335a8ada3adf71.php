<?php

/* AcmeMsgbBundle:Default:admin_ctrl.html.twig */
class __TwigTemplate_87904ea54f065cc665335a8ada3adf71 extends Twig_Template
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
        <font size=20>Admin Controller</font>
        <table>
            <tr>
                <th>
                    Account
                </th>
                <th>
                    Nickname
                </th>
                <th>
                    Action
                </th>
            </tr>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "admins"));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 18
            echo "                <tr>
                    <td>
                        ";
            // line 20
            if ((!$this->getAttribute($this->getContext($context, "online_ids", true), $this->getAttribute($this->getContext($context, "admin"), "id"), array(), "array", true, true))) {
                // line 21
                echo "                            <i><small>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "admin"), "id") == $this->getContext($context, "admin_user"))) {
                // line 23
                echo "                            <b><big>
                        ";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "account"), "html", null, true);
            echo "
                        ";
            // line 26
            if ((!$this->getAttribute($this->getContext($context, "online_ids", true), $this->getAttribute($this->getContext($context, "admin"), "id"), array(), "array", true, true))) {
                // line 27
                echo "                            </small></i>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "admin"), "id") == $this->getContext($context, "admin_user"))) {
                // line 29
                echo "                            </big></b>
                        ";
            }
            // line 31
            echo "                    </td>
                    <td>
                        ";
            // line 33
            if ((!$this->getAttribute($this->getContext($context, "online_ids", true), $this->getAttribute($this->getContext($context, "admin"), "id"), array(), "array", true, true))) {
                // line 34
                echo "                            <i><small>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "admin"), "id") == $this->getContext($context, "admin_user"))) {
                // line 36
                echo "                            <b><big>
                        ";
            }
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "nickname"), "html", null, true);
            echo "
                        ";
            // line 39
            if ((!$this->getAttribute($this->getContext($context, "online_ids", true), $this->getAttribute($this->getContext($context, "admin"), "id"), array(), "array", true, true))) {
                // line 40
                echo "                            </small></i>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "admin"), "id") == $this->getContext($context, "admin_user"))) {
                // line 42
                echo "                            </big></b>
                        ";
            }
            // line 44
            echo "                    </td>
                    <td>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_edit", array("id" => $this->getAttribute($this->getContext($context, "admin"), "id"))), "html", null, true);
            echo "\" >[Edit]</a>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_delete", array("id" => $this->getAttribute($this->getContext($context, "admin"), "id"))), "html", null, true);
            echo "\">[Delete]</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "            
        </table>
        <br>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;--&nbsp;Homepage&nbsp;--&gt;</a>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:admin_ctrl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 50,  115 => 47,  111 => 46,  107 => 44,  103 => 42,  99 => 40,  97 => 39,  92 => 38,  88 => 36,  84 => 34,  82 => 33,  78 => 31,  74 => 29,  70 => 27,  68 => 26,  63 => 25,  59 => 23,  55 => 21,  53 => 20,  49 => 18,  45 => 17,  29 => 3,  26 => 2,);
    }
}
