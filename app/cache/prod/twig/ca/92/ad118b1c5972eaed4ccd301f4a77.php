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
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_login", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">Login</a>/<a href=\"";
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_signup", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " onsubmit=\"return validateForm();\" >


            <font size=5>A</font>ccount&nbsp;:&nbsp;";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "account"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>N</font>ickname&nbsp;:&nbsp;";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "nickname"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>M</font>obile&nbsp;:&nbsp;";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "mobile"));
        echo "
            <br>
            <font size=5>T</font>itle&nbsp;:&nbsp;";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "title"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>C</font>ontant&nbsp;:&nbsp;";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "contant"));
        echo " 
            ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "

            <input type=\"hidden\" name=\"keep_page_size\" value= \"";
        // line 20
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        echo twig_escape_filter($this->env, $_page_size_, "html", null, true);
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
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 54
            echo "                ";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
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
        if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_msgs_);
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 60
            echo "            <table>
                <tr>
                    <th width=500>
                        ";
            // line 63
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "title"), "html", null, true);
            echo "
                        ...
                        From
                        ";
            // line 66
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "ip"), "html", null, true);
            echo "
                        @
                        ";
            // line 68
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_msg_, "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </th>
                    <th>
                        <a href=\"";
            // line 71
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($_msg_, "id"))), "html", null, true);
            echo "\">[Single View]</a>
                    </th>
                </tr>
                <tr>
                    <td colspan=2>
                        ";
            // line 76
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "account"), "html", null, true);
            echo "
                        (";
            // line 77
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "nickname"), "html", null, true);
            echo ")
\t\t\t            ";
            // line 78
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d293c98_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98_0") : $this->env->getExtension('assets')->getAssetUrl("images/d293c98_mobile_1.png");
                // line 79
                echo "\t\t\t\t            <img src=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "mobile"), "html", null, true);
                echo "\" />
\t\t\t            ";
            } else {
                // asset "d293c98"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98") : $this->env->getExtension('assets')->getAssetUrl("images/d293c98.png");
                echo "\t\t\t\t            <img src=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "mobile"), "html", null, true);
                echo "\" />
\t\t\t            ";
            }
            unset($context["asset_url"]);
            // line 81
            echo "                        says:<br>
                        ";
            // line 82
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "contant"), "html", null, true);
            echo "
                    </td>
                </tr>
                <tr>
                    ";
            // line 86
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            if (($this->getAttribute($_msg_, "replyer") != "")) {
                // line 87
                echo "                        <td colspan=2>
                            ";
                // line 88
                if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                if ((!$this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array", true, true))) {
                    // line 89
                    echo "                                (Deleted Admin)
                            ";
                } else {
                    // line 91
                    echo "                                ";
                    if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array"), "account"), "html", null, true);
                    echo "
                                (";
                    // line 92
                    if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array"), "nickname"), "html", null, true);
                    echo ")
                            ";
                }
                // line 94
                echo "                            reply:
                            @
                            ";
                // line 96
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_msg_, "reply_time"), "Y/m/d H:i:s"), "html", null, true);
                echo "<br>
                            ";
                // line 97
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "reply_contant"), "html", null, true);
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ != 1)) {
            // line 108
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => ($_page_ - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 111
        echo "\t    ";
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $_page_num_));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "            ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
                // line 113
                echo "\t\t        <a href=\"";
                if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => $_i_)), "html", null, true);
                echo "\">
            ";
            }
            // line 115
            echo "                ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        if (($_page_ != $_page_num_)) {
            // line 119
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => ($_page_ + 1))), "html", null, true);
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
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        echo twig_escape_filter($this->env, $_page_size_, "html", null, true);
        echo "><input type=\"submit\" value=\"Requery\" /></form>
\t                <!-- End of Change page size -->
                </td>
                <td>
                    <!-- Changing Theme -->
                    <form method=\"POST\" name=\"stylesheet_form\" action=\"";
        // line 132
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">
                        ChangeTheme :
                        <select name=\"stylesheet\" onchange=\"document.stylesheet_form.submit()\">
                            <option ";
        // line 135
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "Default")) {
            echo " SELECTED ";
        }
        echo " value=\"Default\">Default</option>
                            <option ";
        // line 136
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "Black_in_White")) {
            echo " SELECTED ";
        }
        echo " value=\"Black_in_White\">Black in White</option>
                            <option ";
        // line 137
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "White_in_Black")) {
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
        return array (  390 => 137,  383 => 136,  376 => 135,  368 => 132,  357 => 127,  350 => 122,  341 => 119,  336 => 118,  330 => 117,  320 => 115,  312 => 113,  307 => 112,  301 => 111,  292 => 108,  289 => 107,  284 => 104,  275 => 100,  268 => 97,  263 => 96,  259 => 94,  252 => 92,  245 => 91,  241 => 89,  237 => 88,  234 => 87,  231 => 86,  223 => 82,  220 => 81,  198 => 79,  194 => 78,  189 => 77,  184 => 76,  173 => 71,  166 => 68,  160 => 66,  153 => 63,  148 => 60,  143 => 59,  138 => 56,  128 => 54,  123 => 53,  86 => 20,  80 => 18,  75 => 17,  70 => 16,  64 => 14,  59 => 13,  54 => 12,  45 => 9,  29 => 3,  26 => 2,);
    }
}
