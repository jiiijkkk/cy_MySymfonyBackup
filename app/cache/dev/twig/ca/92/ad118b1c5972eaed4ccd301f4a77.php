<?php

/* AcmeMsgbBundle:Guest:guest.html.twig */
class __TwigTemplate_ca92ad118b1c5972eaed4ccd301f4a77 extends Twig_Template
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
        echo "    <p align=\"right\">[<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_login", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">Login</a>/<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_signup", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">Signup</a>]</p>
    <center>
        <font size=20>Simple Message Board</font>
        <br>
        <br>
\t    <!-- leave message -->
        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " onsubmit=\"return validateForm();\" >


            <font size=5>A</font>ccount&nbsp;:&nbsp;";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "account"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>N</font>ickname&nbsp;:&nbsp;";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nickname"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>M</font>obile&nbsp;:&nbsp;";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "mobile"));
        echo "
            <br>
            <font size=5>T</font>itle&nbsp;:&nbsp;";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>C</font>ontant&nbsp;:&nbsp;";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "contant"));
        echo " 
            ";
        // line 18
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

            <input type=\"hidden\" name=\"keep_page_size\" value= \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "page_size"), "html", null, true);
        echo "\" />
            <input type=\"submit\" value=\"Comment\"/>
        </form>
\t    <!-- End of leave message -->

\t    <!-- VALIDATE FORM -->
        <script>
            function validateForm(){
                var vilad_account=new RegExp(\"^[a-zA-Z0-9]{4,12}\$\");
                var vilad_nickname=new RegExp(\"^.{2,12}\$\");
                var vilad_mobile=new RegExp(\"^[0-9]{9,12}\$\");
                var vilad_title=new RegExp(\"^.{1,30}\$\");
                var alert_msg=\"\";
                if(!vilad_account.test(document.getElementById('comment_account').value))
                    alert_msg+=\"Account : Please insert 4~12 alphabets or numbers\\n\";
                if(!vilad_nickname.test(document.getElementById('comment_nickname').value))
                    alert_msg+=\"Nickname : Please insert 2~12 characters\\n\";
                if(!vilad_mobile.test(document.getElementById('comment_mobile').value))
                    alert_msg+=\"Mobile : Please insert 9~12 numbers\\n\";
                if(!vilad_title.test(document.getElementById('comment_title').value))
                    alert_msg+=\"Title : Please insert 1~30 characters\\n\";
                if(alert_msg!=\"\"){
                    alert(alert_msg);
                    return false;
                }
                else
                    return true;
            }
        </script>
\t    <!-- END OF VALIDATE FORM -->

\t    <br>
\t    <!-- leave message error -->
            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t    <!-- End of leave message error -->
\t    <br>
\t    <!-- List -->
\t    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "msgs"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 60
            echo "            <table>
                <tr>
                    <th width=500>
                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "title"), "html", null, true);
            echo "
                        ...
                        From
                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
            echo "
                        @
                        ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </th>
                    <th>
                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
            echo "\">[Single View]</a>
                    </th>
                </tr>
                <tr>
                    <td colspan=2>
                        ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "account"), "html", null, true);
            echo "
                        (";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "nickname"), "html", null, true);
            echo ")
\t\t\t            ";
            // line 78
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d293c98_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d293c98_mobile_1.png");
                // line 79
                echo "\t\t\t\t            <img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "mobile"), "html", null, true);
                echo "\" />
\t\t\t            ";
            } else {
                // asset "d293c98"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d293c98.png");
                echo "\t\t\t\t            <img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "mobile"), "html", null, true);
                echo "\" />
\t\t\t            ";
            }
            unset($context["asset_url"]);
            // line 81
            echo "                        says:<br>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "contant"), "html", null, true);
            echo "
                    </td>
                </tr>
                <tr>
                    ";
            // line 86
            if (($this->getAttribute($this->getContext($context, "msg"), "replyer") != "")) {
                // line 87
                echo "                        <td colspan=2>
                            ";
                // line 88
                if ((!$this->getAttribute($this->getContext($context, "replyers_in_this_page", true), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array", true, true))) {
                    // line 89
                    echo "                                (Deleted Admin)
                            ";
                } else {
                    // line 91
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyers_in_this_page"), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array"), "account"), "html", null, true);
                    echo "
                                (";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyers_in_this_page"), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array"), "nickname"), "html", null, true);
                    echo ")
                            ";
                }
                // line 94
                echo "                            reply:
                            @
                            ";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_time"), "Y/m/d H:i:s"), "html", null, true);
                echo "<br>
                            ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_contant"), "html", null, true);
                echo "
                        </td>
                    ";
            }
            // line 100
            echo "                </tr>
            </table>
            </br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "\t    <!-- End of list -->
\t    <br>
\t    <!-- Page Select -->
\t    ";
        // line 107
        if (($this->getContext($context, "page") != 1)) {
            // line 108
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 111
        echo "\t    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "page_num")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "            ";
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                // line 113
                echo "\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "i"))), "html", null, true);
                echo "\">
            ";
            }
            // line 115
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                echo "</a>
            ";
            }
            // line 117
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 118
        echo "\t    ";
        if (($this->getContext($context, "page") != $this->getContext($context, "page_num"))) {
            // line 119
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
            echo "\">
                Next-&gt;</a>
\t    ";
        }
        // line 122
        echo "\t    <!-- End of Page Select -->
        <table border=1>
            <tr>
                <td>
\t                <!-- Change page size -->
\t                <form method=\"POST\" action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">PageSize :<input size=1 name=\"change_page_size\" type=\"text\" value=";
        echo twig_escape_filter($this->env, $this->getContext($context, "page_size"), "html", null, true);
        echo "><input type=\"submit\" value=\"Requery\" /></form>
\t                <!-- End of Change page size -->
                </td>
                <td>
                    <!-- Changing Theme -->
                    <form method=\"POST\" name=\"stylesheet_form\" action=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">
                        ChangeTheme :
                        <select name=\"stylesheet\" onchange=\"document.stylesheet_form.submit()\">
                            <option ";
        // line 135
        if (($this->getContext($context, "stylesheet") == "Default")) {
            echo " SELECTED ";
        }
        echo " value=\"Default\">Default</option>
                            <option ";
        // line 136
        if (($this->getContext($context, "stylesheet") == "Black_in_White")) {
            echo " SELECTED ";
        }
        echo " value=\"Black_in_White\">Black in White</option>
                            <option ";
        // line 137
        if (($this->getContext($context, "stylesheet") == "White_in_Black")) {
            echo " SELECTED ";
        }
        echo " value=\"White_in_Black\">White in Black</option>
                        </select>
                    </form>
                    <!-- End of Changing Theme -->
                </td>
            </tr>
        </table>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Guest:guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 137,  327 => 136,  321 => 135,  315 => 132,  305 => 127,  298 => 122,  291 => 119,  288 => 118,  282 => 117,  275 => 115,  269 => 113,  266 => 112,  261 => 111,  254 => 108,  252 => 107,  247 => 104,  238 => 100,  232 => 97,  228 => 96,  224 => 94,  219 => 92,  214 => 91,  210 => 89,  208 => 88,  205 => 87,  203 => 86,  196 => 82,  193 => 81,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  155 => 71,  149 => 68,  144 => 66,  138 => 63,  133 => 60,  129 => 59,  124 => 56,  115 => 54,  111 => 53,  75 => 20,  70 => 18,  66 => 17,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  41 => 9,  29 => 3,  26 => 2,);
    }
}
