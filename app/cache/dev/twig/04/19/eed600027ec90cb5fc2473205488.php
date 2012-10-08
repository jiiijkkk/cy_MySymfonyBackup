<?php

/* AcmeMsgbBundle:Default:single.html.twig */
class __TwigTemplate_0419eed600027ec90cb5fc2473205488 extends Twig_Template
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
\t\t    <tr>
                <th width=500 align=\"left\">
                    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "title"), "html", null, true);
        echo "
                    ...
                    From
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
        echo "
                    @
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "time"), "Y/m/d H:i:s"), "html", null, true);
        echo "
                </th>
                <th>                        
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill", array("page_size" => $this->getContext($context, "page_size"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
        echo "\">[Delete]</a>
                </th>
            </tr> 
            <tr>
                <td colspan=2>
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "account"), "html", null, true);
        echo "
                    (";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "nickname"), "html", null, true);
        echo ")
\t\t            ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d293c98_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d293c98_mobile_1.png");
            // line 23
            echo "\t\t\t            <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "mobile"), "html", null, true);
            echo "\" />
\t\t            ";
        } else {
            // asset "d293c98"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d293c98.png");
            echo "\t\t\t            <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "mobile"), "html", null, true);
            echo "\" />
\t\t            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "\t\t            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b9e9ba7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b9e9ba7_ip_1.gif");
            // line 26
            echo "\t\t\t            <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
            echo "\" />
\t\t            ";
        } else {
            // asset "b9e9ba7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b9e9ba7.gif");
            echo "\t\t\t            <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
            echo "\" />
\t\t            ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "                    says:<br>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "contant"), "html", null, true);
        echo "
                </td>
            </tr>
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_reply", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
        echo "\" method=\"post\" >
                <tr>
                    <td colspan=2>
                        <div class=\"mid\" id=\"show_reply_";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
        echo "\" style=\"display: block;\">
                            ";
        // line 36
        if (($this->getAttribute($this->getContext($context, "msg"), "replyer") != "")) {
            // line 37
            echo "                                ";
            if ($this->getAttribute($this->getContext($context, "replyer", true), 0, array(), "array", true, true)) {
                // line 38
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyer"), 0, array(), "array"), "account"), "html", null, true);
                echo "
                                    (";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyer"), 0, array(), "array"), "nickname"), "html", null, true);
                echo ")
                                ";
            } else {
                // line 41
                echo "                                    (Deleted Admin)
                                ";
            }
            // line 43
            echo "                                reply
                                @
                                ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                                :<br>
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_contant"), "html", null, true);
            echo "
                                <a onclick=\"javascript:ShwHid('";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
            echo "')\" href=\"javascript:\">[Edit]</a>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill_reply", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"), "action" => "single")), "html", null, true);
            echo "\" method=\"post\">[Delete]</a>
                            ";
        } else {
            // line 51
            echo "                                <a onclick=\"javascript:ShwHid('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
            echo "')\" href=\"javascript:\">
                                    [Reply]
                                </a>
                            ";
        }
        // line 55
        echo "                        </div>
                        <div class=\"mid\" id=\"reply_";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
        echo "\" style=\"display: none;\">
                            <form action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_quick_reply", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
        echo "\" method=\"POST\">
                                <table>
                                    <tr>
                                        <td rowspan=2>
                                            <textarea name=\"contant\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_contant"), "html", null, true);
        echo "</textarea>
                                        </td>
                                        <td>
                                            <a onclick=\"javascript:ShwHid('";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
        echo "')\" href=\"javascript:\">
                                                Cancel[x]
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type=\"submit\" value=\"Reply\" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\" >&lt;--&nbsp;Back</a>
                    </td>
                </tr>
            </form>
\t    </table>\t
    </center>
    <script language=\"JavaScript\">
        function ShwHid(divId){
            if(document.getElementById(\"reply_\"+divId).style.display == 'none'){
                document.getElementById(\"reply_\"+divId).style.display='block';
                document.getElementById(\"show_reply_\"+divId).style.display='none';
            }
            else{
                document.getElementById(\"reply_\"+divId).style.display='none';
                document.getElementById(\"show_reply_\"+divId).style.display='block';
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 81,  201 => 64,  195 => 61,  188 => 57,  184 => 56,  181 => 55,  173 => 51,  168 => 49,  164 => 48,  160 => 47,  155 => 45,  151 => 43,  147 => 41,  142 => 39,  137 => 38,  134 => 37,  132 => 36,  128 => 35,  122 => 32,  116 => 29,  113 => 28,  95 => 26,  90 => 25,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  52 => 15,  46 => 12,  41 => 10,  35 => 7,  29 => 3,  26 => 2,);
    }
}
