<?php

/* AcmeMsgbBundle:Default:index.html.twig */
class __TwigTemplate_3fba357b7237b4848c56e03272dc849a extends Twig_Template
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
        echo "    <p align=\"right\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "account"), "html", null, true);
        echo "
        (";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "nickname"), "html", null, true);
        echo ")
        [<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_menu"), "html", null, true);
        echo "\">Admin Menu</a>]
        [<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_logout", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">Logout</a>/<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_disaccount", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">Disaccount</a>]</p>
    <center>
        <font size=20>Simple Message Board</font>
        <br>
        <br>
\t    <!-- leave message -->
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " onsubmit=\"return validateForm();\"  >


            <font size=5>A</font>ccount&nbsp;:&nbsp;";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "account"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>N</font>ickname&nbsp;:&nbsp;";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nickname"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>M</font>obile&nbsp;:&nbsp;";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "mobile"));
        echo "
            <br>
            <font size=5>T</font>itle&nbsp;:&nbsp;";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "title"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>C</font>ontant&nbsp;:&nbsp;";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "contant"));
        echo " 
            ";
        // line 22
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

            <input type=\"hidden\" name=\"keep_page_size\" value= \"";
        // line 24
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
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "\t    <!-- End of leave message error -->
\t    <br>
\t    <!-- List -->
\t    ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "msgs"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 64
            echo "            <table>
                <tr>
                    <th width=500>
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "title"), "html", null, true);
            echo "
                        ...
                        From
                        ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
            echo "
                        @
                        ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </th>
                    <th>
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
            echo "\">[Single View]</a>
                    </th>
                    <th>                        
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill", array("page_size" => $this->getContext($context, "page_size"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
            echo "\">[Delete]</a>
                    </th>
                </tr>
                <tr>
                    <td colspan=3>
                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "account"), "html", null, true);
            echo "
                        (";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "nickname"), "html", null, true);
            echo ")
\t\t\t            ";
            // line 85
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d293c98_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d293c98_mobile_1.png");
                // line 86
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
            // line 88
            echo "\t\t\t            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "b9e9ba7_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b9e9ba7_ip_1.gif");
                // line 89
                echo "\t\t\t\t            <img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
                echo "\" />
\t\t\t            ";
            } else {
                // asset "b9e9ba7"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b9e9ba7.gif");
                echo "\t\t\t\t            <img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "ip"), "html", null, true);
                echo "\" />
\t\t\t            ";
            }
            unset($context["asset_url"]);
            // line 91
            echo "                        says:<br>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "contant"), "html", null, true);
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=3>
                        <div class=\"mid\" id=\"show_reply_";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
            echo "\" style=\"display: block;\">
                            ";
            // line 98
            if (($this->getAttribute($this->getContext($context, "msg"), "replyer") != "")) {
                // line 99
                echo "                                ";
                if ((!$this->getAttribute($this->getContext($context, "replyers_in_this_page", true), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array", true, true))) {
                    // line 100
                    echo "                                    (Deleted Admin)
                                ";
                } else {
                    // line 102
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyers_in_this_page"), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array"), "account"), "html", null, true);
                    echo "
                                    (";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "replyers_in_this_page"), $this->getAttribute($this->getContext($context, "msg"), "id"), array(), "array"), "nickname"), "html", null, true);
                    echo ")
                                ";
                }
                // line 105
                echo "                                reply
                                @
                                ";
                // line 107
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_time"), "Y/m/d H:i:s"), "html", null, true);
                echo "
                                :<br>
                                ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_contant"), "html", null, true);
                echo "
                                <a onclick=\"javascript:ShwHid('";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
                echo "')\" href=\"javascript:\">[Edit]</a>
                                <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill_reply", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"), "action" => "homepage")), "html", null, true);
                echo "\" method=\"post\">[Delete]</a>
                            ";
            } else {
                // line 113
                echo "                                <a onclick=\"javascript:ShwHid('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
                echo "')\" href=\"javascript:\">
                                    [Reply]
                                </a>
                            ";
            }
            // line 117
            echo "                        </div>
                        <div class=\"mid\" id=\"reply_";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "id"), "html", null, true);
            echo "\" style=\"display: none;\">
                            <form action=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_quick_reply", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getContext($context, "msg"), "id"))), "html", null, true);
            echo "\" method=\"POST\">
                                <table>
                                    <tr>
                                        <td rowspan=2>
                                            <textarea name=\"contant\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "msg"), "reply_contant"), "html", null, true);
            echo "</textarea>
                                        </td>
                                        <td>
                                            <a onclick=\"javascript:ShwHid('";
            // line 126
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
            </table>
            </br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 144
        echo "        <script language=\"JavaScript\">
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
\t    <!-- End of list -->
\t    <br>
\t    <!-- Page Select -->
\t    ";
        // line 159
        if (($this->getContext($context, "page") != 1)) {
            // line 160
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 163
        echo "\t    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "page_num")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 164
            echo "            ";
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                // line 165
                echo "\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "i"))), "html", null, true);
                echo "\">
            ";
            }
            // line 167
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                echo "</a>
            ";
            }
            // line 169
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 170
        echo "\t    ";
        if (($this->getContext($context, "page") != $this->getContext($context, "page_num"))) {
            // line 171
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
            echo "\">
                Next-&gt;</a>
\t    ";
        }
        // line 174
        echo "\t    <!-- End of Page Select -->
        <table border=1>
            <tr>
                <td>
\t                <!-- Change page size -->
\t                <form method=\"POST\" action=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">PageSize :<input size=1 name=\"change_page_size\" type=\"text\" value=";
        echo twig_escape_filter($this->env, $this->getContext($context, "page_size"), "html", null, true);
        echo "><input type=\"submit\" value=\"Requery\" /></form>
\t                <!-- End of Change page size -->
                </td>
                <td>
                    <!-- Changing Theme -->
                    <form method=\"POST\" name=\"stylesheet_form\" action=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">
                        ChangeTheme :
                        <select name=\"stylesheet\" onchange=\"document.stylesheet_form.submit()\">
                            <option ";
        // line 187
        if (($this->getContext($context, "stylesheet") == "Default")) {
            echo " SELECTED ";
        }
        echo " value=\"Default\">Default</option>
                            <option ";
        // line 188
        if (($this->getContext($context, "stylesheet") == "Black_in_White")) {
            echo " SELECTED ";
        }
        echo " value=\"Black_in_White\">Black in White</option>
                            <option ";
        // line 189
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
        return "AcmeMsgbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 189,  436 => 188,  430 => 187,  424 => 184,  414 => 179,  407 => 174,  400 => 171,  397 => 170,  391 => 169,  384 => 167,  378 => 165,  375 => 164,  370 => 163,  363 => 160,  361 => 159,  344 => 144,  320 => 126,  314 => 123,  307 => 119,  303 => 118,  300 => 117,  292 => 113,  287 => 111,  283 => 110,  279 => 109,  274 => 107,  270 => 105,  265 => 103,  260 => 102,  256 => 100,  253 => 99,  251 => 98,  247 => 97,  239 => 92,  236 => 91,  218 => 89,  213 => 88,  195 => 86,  191 => 85,  187 => 84,  183 => 83,  175 => 78,  169 => 75,  163 => 72,  158 => 70,  152 => 67,  147 => 64,  143 => 63,  138 => 60,  129 => 58,  125 => 57,  89 => 24,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  67 => 17,  63 => 16,  55 => 13,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
