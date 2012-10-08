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
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "account"), "html", null, true);
        echo "
        (";
        // line 5
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "nickname"), "html", null, true);
        echo ")
        [<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_menu"), "html", null, true);
        echo "\">Admin Menu</a>]
        [<a href=\"";
        // line 7
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_logout", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">Logout</a>/<a href=\"";
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_disaccount", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " onsubmit=\"return validateForm();\"  >


            <font size=5>A</font>ccount&nbsp;:&nbsp;";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "account"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>N</font>ickname&nbsp;:&nbsp;";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "nickname"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>M</font>obile&nbsp;:&nbsp;";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "mobile"));
        echo "
            <br>
            <font size=5>T</font>itle&nbsp;:&nbsp;";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "title"));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;
            <font size=5>C</font>ontant&nbsp;:&nbsp;";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "contant"));
        echo " 
            ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "

            <input type=\"hidden\" name=\"keep_page_size\" value= \"";
        // line 24
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
        // line 57
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 58
            echo "                ";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
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
        if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_msgs_);
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 64
            echo "            <table>
                <tr>
                    <th width=500>
                        ";
            // line 67
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "title"), "html", null, true);
            echo "
                        ...
                        From
                        ";
            // line 70
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "ip"), "html", null, true);
            echo "
                        @
                        ";
            // line 72
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_msg_, "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </th>
                    <th>
                        <a href=\"";
            // line 75
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($_msg_, "id"))), "html", null, true);
            echo "\">[Single View]</a>
                    </th>
                    <th>                        
                        <a href=\"";
            // line 78
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill", array("page_size" => $_page_size_, "id" => $this->getAttribute($_msg_, "id"))), "html", null, true);
            echo "\">[Delete]</a>
                    </th>
                </tr>
                <tr>
                    <td colspan=3>
                        ";
            // line 83
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "account"), "html", null, true);
            echo "
                        (";
            // line 84
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "nickname"), "html", null, true);
            echo ")
\t\t\t            ";
            // line 85
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d293c98_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d293c98_0") : $this->env->getExtension('assets')->getAssetUrl("images/d293c98_mobile_1.png");
                // line 86
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
            // line 88
            echo "\t\t\t            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "b9e9ba7_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7_0") : $this->env->getExtension('assets')->getAssetUrl("images/b9e9ba7_ip_1.gif");
                // line 89
                echo "\t\t\t\t            <img src=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "ip"), "html", null, true);
                echo "\" />
\t\t\t            ";
            } else {
                // asset "b9e9ba7"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9e9ba7") : $this->env->getExtension('assets')->getAssetUrl("images/b9e9ba7.gif");
                echo "\t\t\t\t            <img src=\"";
                if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
                echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "ip"), "html", null, true);
                echo "\" />
\t\t\t            ";
            }
            unset($context["asset_url"]);
            // line 91
            echo "                        says:<br>
                        ";
            // line 92
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "contant"), "html", null, true);
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=3>
                        <div class=\"mid\" id=\"show_reply_";
            // line 97
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "id"), "html", null, true);
            echo "\" style=\"display: block;\">
                            ";
            // line 98
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            if (($this->getAttribute($_msg_, "replyer") != "")) {
                // line 99
                echo "                                ";
                if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                if ((!$this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array", true, true))) {
                    // line 100
                    echo "                                    (Deleted Admin)
                                ";
                } else {
                    // line 102
                    echo "                                    ";
                    if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array"), "account"), "html", null, true);
                    echo "
                                    (";
                    // line 103
                    if (isset($context["replyers_in_this_page"])) { $_replyers_in_this_page_ = $context["replyers_in_this_page"]; } else { $_replyers_in_this_page_ = null; }
                    if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_replyers_in_this_page_, $this->getAttribute($_msg_, "id"), array(), "array"), "nickname"), "html", null, true);
                    echo ")
                                ";
                }
                // line 105
                echo "                                reply
                                @
                                ";
                // line 107
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_msg_, "reply_time"), "Y/m/d H:i:s"), "html", null, true);
                echo "
                                :<br>
                                ";
                // line 109
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "reply_contant"), "html", null, true);
                echo "
                                <a onclick=\"javascript:ShwHid('";
                // line 110
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "id"), "html", null, true);
                echo "')\" href=\"javascript:\">[Edit]</a>
                                <a href=\"";
                // line 111
                if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_kill_reply", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($_msg_, "id"), "action" => "homepage")), "html", null, true);
                echo "\" method=\"post\">[Delete]</a>
                            ";
            } else {
                // line 113
                echo "                                <a onclick=\"javascript:ShwHid('";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "id"), "html", null, true);
                echo "')\" href=\"javascript:\">
                                    [Reply]
                                </a>
                            ";
            }
            // line 117
            echo "                        </div>
                        <div class=\"mid\" id=\"reply_";
            // line 118
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "id"), "html", null, true);
            echo "\" style=\"display: none;\">
                            <form action=\"";
            // line 119
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_quick_reply", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($_msg_, "id"))), "html", null, true);
            echo "\" method=\"POST\">
                                <table>
                                    <tr>
                                        <td rowspan=2>
                                            <textarea name=\"contant\">";
            // line 123
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "reply_contant"), "html", null, true);
            echo "</textarea>
                                        </td>
                                        <td>
                                            <a onclick=\"javascript:ShwHid('";
            // line 126
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msg_, "id"), "html", null, true);
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ != 1)) {
            // line 160
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => ($_page_ - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 163
        echo "\t    ";
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $_page_num_));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 164
            echo "            ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
                // line 165
                echo "\t\t        <a href=\"";
                if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => $_i_)), "html", null, true);
                echo "\">
            ";
            }
            // line 167
            echo "                ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        if (($_page_ != $_page_num_)) {
            // line 171
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => ($_page_ + 1))), "html", null, true);
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
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        echo twig_escape_filter($this->env, $_page_size_, "html", null, true);
        echo "><input type=\"submit\" value=\"Requery\" /></form>
\t                <!-- End of Change page size -->
                </td>
                <td>
                    <!-- Changing Theme -->
                    <form method=\"POST\" name=\"stylesheet_form\" action=\"";
        // line 184
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">
                        ChangeTheme :
                        <select name=\"stylesheet\" onchange=\"document.stylesheet_form.submit()\">
                            <option ";
        // line 187
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "Default")) {
            echo " SELECTED ";
        }
        echo " value=\"Default\">Default</option>
                            <option ";
        // line 188
        if (isset($context["stylesheet"])) { $_stylesheet_ = $context["stylesheet"]; } else { $_stylesheet_ = null; }
        if (($_stylesheet_ == "Black_in_White")) {
            echo " SELECTED ";
        }
        echo " value=\"Black_in_White\">Black in White</option>
                            <option ";
        // line 189
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
        return "AcmeMsgbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 189,  512 => 188,  505 => 187,  497 => 184,  486 => 179,  479 => 174,  470 => 171,  465 => 170,  459 => 169,  449 => 167,  441 => 165,  436 => 164,  430 => 163,  421 => 160,  418 => 159,  401 => 144,  376 => 126,  369 => 123,  359 => 119,  354 => 118,  351 => 117,  342 => 113,  334 => 111,  329 => 110,  324 => 109,  318 => 107,  314 => 105,  307 => 103,  300 => 102,  296 => 100,  291 => 99,  288 => 98,  283 => 97,  274 => 92,  271 => 91,  249 => 89,  244 => 88,  222 => 86,  218 => 85,  213 => 84,  208 => 83,  198 => 78,  189 => 75,  182 => 72,  176 => 70,  169 => 67,  164 => 64,  159 => 63,  154 => 60,  144 => 58,  139 => 57,  102 => 24,  96 => 22,  91 => 21,  86 => 20,  80 => 18,  75 => 17,  70 => 16,  61 => 13,  46 => 7,  42 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
