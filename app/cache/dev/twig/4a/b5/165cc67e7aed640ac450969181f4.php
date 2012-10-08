<?php

/* AcmeMsgbBundle:Default:admin_analyze.html.twig */
class __TwigTemplate_4ab5165cc67e7aed640ac450969181f4 extends Twig_Template
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
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "862f2a6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/862f2a6_datetimepicker_1.js");
            // line 7
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
            // asset "862f2a6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/862f2a6_jquery.min_2.js");
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        } else {
            // asset "862f2a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/862f2a6.js");
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    ";
        // line 10
        echo "    <p style=\"text-align:right;\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_edit_classes"), "html", null, true);
        echo "\">[Edit Classes]</a></p>
    <center>
        <font size=20 >Analyze</font><br>
    </center>    
    <form method='POST' action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\" >
        User :
        <input name=\"user\" type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
        echo "\" >
        <input name=\"set_user\" type=\"submit\" value=\"Query\" />
        ";
        // line 18
        if (($this->getContext($context, "user") != null)) {
            echo "<input name=\"clear_user\" type=\"submit\" value=\"Clear\" />";
        }
        // line 19
        echo "    </form>
    <form method='POST' action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\" >
        Action :
        <select name=\"action\" onchange=\"this.form.submit()\" method='POST'>
            <option value=\"All\"
                ";
        // line 24
        if (($this->getContext($context, "action") == "All")) {
            echo " selected=\"selected\"";
        }
        echo ">All</option>
            <option value=\"message\"
                ";
        // line 26
        if (($this->getContext($context, "action") == "message")) {
            echo " selected=\"selected\"";
        }
        echo ">Message</option>
            <option value=\"signup\"
                ";
        // line 28
        if (($this->getContext($context, "action") == "signup")) {
            echo " selected=\"selected\"";
        }
        echo ">Signup</option>
            <option value=\"login\"
                ";
        // line 30
        if (($this->getContext($context, "action") == "login")) {
            echo " selected=\"selected\"";
        }
        echo ">Login</option>
            <option value=\"logout\"
                ";
        // line 32
        if (($this->getContext($context, "action") == "logout")) {
            echo " selected=\"selected\"";
        }
        echo ">Logout</option>
            <option value=\"login&logout\"
                ";
        // line 34
        if (($this->getContext($context, "action") == "login&logout")) {
            echo " selected=\"selected\"";
        }
        echo ">Login & Logout</option>
            <option value=\"reply\"
                ";
        // line 36
        if (($this->getContext($context, "action") == "reply")) {
            echo " selected=\"selected\"";
        }
        echo ">Reply</option>
            <option value=\"remove_reply\"
                ";
        // line 38
        if (($this->getContext($context, "action") == "remove_reply")) {
            echo " selected=\"selected\"";
        }
        echo ">Remove Reply</option>
            <option value=\"remove_message\"
                ";
        // line 40
        if (($this->getContext($context, "action") == "remove_message")) {
            echo " selected=\"selected\"";
        }
        echo ">Remove Message</option>
            <option value=\"disaccount\"
                ";
        // line 42
        if (($this->getContext($context, "action") == "disaccount")) {
            echo " selected=\"selected\"";
        }
        echo ">Disaccount</option>
        </select>
    </form>  
    <form method='POST' action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\">
        from
        <input name=\"start_datetime\" id=\"start_datetime\" type=\"text\" size=\"25\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "start_datetime"), "html", null, true);
        echo "\" readonly=\"readonly\" />
        <a href=\"javascript:NewCal('start_datetime','ddmmyyyy',true,24)\">";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1728085_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1728085_cal_1.gif");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        } else {
            // asset "1728085"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1728085.gif");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        }
        unset($context["asset_url"]);
        echo "</a>
        to
        <input name=\"end_datetime\" id=\"end_datetime\" type=\"text\" size=\"25\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "end_datetime"), "html", null, true);
        echo "\" readonly=\"readonly\" />
        <a href=\"javascript:NewCal('end_datetime','ddmmyyyy',true,24)\">";
        // line 51
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1728085_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1728085_cal_1.gif");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        } else {
            // asset "1728085"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1728085.gif");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        }
        unset($context["asset_url"]);
        echo "</a>
        <input type=\"submit\" name=\"set_date\" value=\"Set\" onclick=\"if(!check_cal()){window.alert('the Start Date is later than the End Date');return false;}\" />
        ";
        // line 53
        if (($this->getContext($context, "start_flag") || $this->getContext($context, "end_flag"))) {
            echo "<input type=\"submit\" name=\"clear_date\" value=\"Clear\" />";
        }
        // line 54
        echo "    </form>
    <script>
        function check_cal(){
            var str=this.start_datetime.value;
            var patt=/[0-9]+/;
            var start_d = patt.exec(str);
            str = str.substring(start_d.toString().length);
            var start_m = patt.exec(str);
            str = str.substring(start_m.toString().length+1);
            var start_y = patt.exec(str);
            str = str.substring(start_y.toString().length+1);
            var start_h = patt.exec(str);
            str = str.substring(start_h.toString().length+1);
            var start_i = patt.exec(str);
            str = str.substring(start_i.toString().length+1);
            var start_s = patt.exec(str);
            
            str=this.end_datetime.value;
            var end_d = patt.exec(str);
            str = str.substring(end_d.toString().length);
            var end_m = patt.exec(str);
            str = str.substring(end_m.toString().length+1);
            var end_y = patt.exec(str);
            str = str.substring(end_y.toString().length+1);
            var end_h = patt.exec(str);
            str = str.substring(end_h.toString().length+1);
            var end_i = patt.exec(str);
            str = str.substring(end_i.toString().length+1);
            var end_s = patt.exec(str);
            
            var start = new Date(   start_y ,
                                    start_m-1 ,
                                    start_d ,
                                    start_h ,
                                    start_i ,
                                    start_s
                                );
                                
            var end = new Date( end_y ,
                                end_m-1 ,
                                end_d ,
                                end_h ,
                                end_i ,
                                end_s
                            );
            
            if(start.valueOf() >= end.valueOf())return false;
            else return true;
            
        }
    </script>
    <form method='POST' action=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\" >
        Class :
        <select name=\"class\" onchange=\"this.form.submit()\" method='POST'>
            <option value=0 ";
        // line 108
        if (($this->getContext($context, "class") == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">24hrs</option>
            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "classes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
            // line 110
            echo "                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cls"), "id"), "html", null, true);
            echo " ";
            if (($this->getContext($context, "class") == $this->getAttribute($this->getContext($context, "cls"), "id"))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cls"), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "cls"), "start"), "H:i"), "html", null, true);
            echo " ~ ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "cls"), "end"), "H:i"), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 112
        echo "        </select>
    </form>
    <br>
    <center>
\t\t<script type=\"text/javascript\">
            \$(function () {
                var chart;
                \$(document).ready(function() {
                    chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'container',
                            type: 'line',
                            marginRight: 130,
                            marginBottom: 25
                        },
                        title: {
                            text: 
                                ";
        // line 129
        $context["action_str"] = "All";
        // line 130
        echo "                                ";
        if (($this->getContext($context, "action") == "message")) {
            // line 131
            echo "                                    ";
            $context["action_str"] = "Message";
            // line 132
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "signup")) {
            // line 133
            echo "                                    ";
            $context["action_str"] = "Signup";
            // line 134
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "login")) {
            // line 135
            echo "                                    ";
            $context["action_str"] = "Login";
            // line 136
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "logout")) {
            // line 137
            echo "                                    ";
            $context["action_str"] = "Logout";
            // line 138
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "login&logout")) {
            // line 139
            echo "                                    ";
            $context["action_str"] = "Login and Logout";
            // line 140
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "reply")) {
            // line 141
            echo "                                    ";
            $context["action_str"] = "Reply";
            // line 142
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "remove_reply")) {
            // line 143
            echo "                                    ";
            $context["action_str"] = "Remove Reply";
            // line 144
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "remove_message")) {
            // line 145
            echo "                                    ";
            $context["action_str"] = "Remove Message";
            // line 146
            echo "                                ";
        } elseif (($this->getContext($context, "action") == "dissaccount")) {
            // line 147
            echo "                                    ";
            $context["action_str"] = "Disaccount";
            // line 148
            echo "                                ";
        }
        // line 149
        echo "                                '";
        if ($this->getContext($context, "user")) {
            echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
            echo " ";
        }
        echo twig_escape_filter($this->env, $this->getContext($context, "action_str"), "html", null, true);
        if ($this->getContext($context, "class")) {
            echo " in ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "classes"));
            foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                if (($this->getAttribute($this->getContext($context, "cls"), "id") == $this->getContext($context, "class"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cls"), "name"), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        echo "',
                            x: -20 //center
                        },
                        subtitle: {
                            text: \"From ";
        // line 153
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "start_datetime"), "Y-m-d H:i:s"), "html", null, true);
        echo " To ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "end_datetime"), "Y-m-d H:i:s"), "html", null, true);
        echo "\",
                            x: -20
                        },
                        xAxis: {
                            categories: [
                                ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "count_logs_date_array"));
        foreach ($context['_seq'] as $context["key"] => $context["date"]) {
            // line 159
            echo "                                    ";
            if (($this->getContext($context, "key") != 0)) {
                // line 160
                echo "                                        ,
                                    ";
            }
            // line 162
            echo "                                    \"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "date"), "m-d"), "html", null, true);
            echo "\"
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 164
        echo "                            ]
                        },
                        yAxis: {
                            title: {
                                text: 'Time(s)'
                            },
                            plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                        },
                        tooltip: {
                            formatter: function() {
                                var str;
                                if(this.y<2)str = 'time';
                                else str = 'times';
                                return '<b>'+ this.series.name +'</b><br/>'+
                                    this.x + '<br/>'+
                                    this.y + \" \" +str;
                            }
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
                        },
                        series: [{
                            name: 'Count' ,
                            data: [
                                ";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "count_logs_date_array"));
        foreach ($context['_seq'] as $context["key"] => $context["date"]) {
            // line 198
            echo "                                    ";
            if (($this->getContext($context, "key") != 0)) {
                // line 199
                echo "                                        ,
                                    ";
            }
            // line 201
            echo "                                    ";
            $context["tmp"] = 0;
            // line 202
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "count_logs"));
            foreach ($context['_seq'] as $context["_key"] => $context["count_log"]) {
                // line 203
                echo "                                        ";
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "count_log"), "date"), "Y-m-d") == twig_date_format_filter($this->env, $this->getContext($context, "date"), "Y-m-d"))) {
                    // line 204
                    echo "                                            ";
                    $context["tmp"] = $this->getAttribute($this->getContext($context, "count_log"), "num");
                    // line 205
                    echo "                                        ";
                }
                // line 206
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count_log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 207
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getContext($context, "tmp"), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 209
        echo "                            ]
                        }]
                    });
                });
                
            });
\t\t</script>
        <br>
        <div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
        <br>
        <table>
            <tr>
                <th>
                    Date
                </th>
                <th>
                    Count
                </th>
            <tr>
            ";
        // line 228
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "count_logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["count_log"]) {
            // line 229
            echo "                <tr>
                    <td>
                        ";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "count_log"), "date"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "count_log"), "num"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count_log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 238
        echo "        </table>
        <br>
\t    <table border=1>
            <tr>
                <th>
                    <form method=\"POST\" action=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">
                        <input name=\"sort_account\" type=\"submit\" value=\"Account";
        // line 244
        if (($this->getContext($context, "sort") == "account_DESC")) {
            echo " ˅";
        } elseif (($this->getContext($context, "sort") == "account_ASC")) {
            echo " ^";
        }
        echo "\" />
                    </form>
                </th>
                <th>
                    Action
                </th>
                <th>
                    IP
                </th>
                <th>
                    <form method=\"POST\" action=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"))), "html", null, true);
        echo "\">
                        <input name=\"sort_time\" type=\"submit\" value=\"Time";
        // line 255
        if (($this->getContext($context, "sort") == "time_DESC")) {
            echo " ˅";
        } elseif (($this->getContext($context, "sort") == "time_ASC")) {
            echo " ^";
        }
        echo "\" />
                    </form>
                </th>
            </tr>
            ";
        // line 259
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 260
            echo "                <tr>
                    <td>
                        ";
            // line 262
            if (($this->getAttribute($this->getContext($context, "log"), "action") != "message")) {
                // line 263
                echo "                            ";
                if ($this->getAttribute($this->getContext($context, "admins", true), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array", true, true)) {
                    // line 264
                    echo "                                <form method=\"POST\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
                    echo "\" >
                                    <input type=\"hidden\" name=\"user\" value=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admins"), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array"), "nickname"), "html", null, true);
                    echo "\" >
                                    <input type=\"submit\" name=\"set_user\" value=\"";
                    // line 266
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admins"), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array"), "account"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admins"), $this->getAttribute($this->getContext($context, "log"), "adminId"), array(), "array"), "nickname"), "html", null, true);
                    echo ")\" >
                                </form>
                            ";
                } else {
                    // line 269
                    echo "                                <i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "account"), "html", null, true);
                    echo "
                                (";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "nickname"), "html", null, true);
                    echo ")
                                (id:";
                    // line 271
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "adminId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 273
                echo "                        ";
            } else {
                // line 274
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "account"), "html", null, true);
                echo "
                            (";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "nickname"), "html", null, true);
                echo ")
                        ";
            }
            // line 277
            echo "                    </td>
                    <td>
                        ";
            // line 279
            if (($this->getAttribute($this->getContext($context, "log"), "action") == "message")) {
                // line 280
                echo "                            leaved a
                            ";
                // line 281
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 282
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                            ";
                } else {
                    // line 284
                    echo "                                <i>
                            ";
                }
                // line 286
                echo "                                message
                            ";
                // line 287
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 288
                    echo "                                </a>
                            ";
                } else {
                    // line 290
                    echo "                                (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 292
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "signup")) {
                // line 293
                echo "                            signup
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "login")) {
                // line 295
                echo "                            login
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "logout")) {
                // line 297
                echo "                            logout
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "reply")) {
                // line 299
                echo "                            replied a
                            ";
                // line 300
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 301
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                            ";
                } else {
                    // line 303
                    echo "                                <i>
                            ";
                }
                // line 305
                echo "                                message
                            ";
                // line 306
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 307
                    echo "                                </a>
                            ";
                } else {
                    // line 309
                    echo "                                (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 311
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "remove_reply")) {
                // line 312
                echo "                            remove a
                                ";
                // line 313
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 314
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "page"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "msgs"), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" >
                                ";
                } else {
                    // line 316
                    echo "                                    <i>
                                ";
                }
                // line 318
                echo "                                    reply
                                ";
                // line 319
                if ($this->getAttribute($this->getContext($context, "msgs", true), $this->getAttribute($this->getContext($context, "log"), "targetId"), array(), "array", true, true)) {
                    // line 320
                    echo "                                    </a>
                                ";
                } else {
                    // line 322
                    echo "                                    (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")></i>
                                ";
                }
                // line 324
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "remove_message")) {
                // line 325
                echo "                            removed a <i>message (id:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                echo ")</i>
                        ";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "action") == "disaccount")) {
                // line 327
                echo "                            disaccounted
                            ";
                // line 328
                if (($this->getAttribute($this->getContext($context, "log"), "adminId") == $this->getAttribute($this->getContext($context, "log"), "targetId"))) {
                    // line 329
                    echo "                                itself
                            ";
                } else {
                    // line 331
                    echo "                                an account (id:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "targetId"), "html", null, true);
                    echo ")
                            ";
                }
                // line 333
                echo "                        ";
            }
            // line 334
            echo "                    </td>
                    <td>
                        ";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "ip"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 339
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "time"), "Y/m/d H:i:s"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 343
        echo "        </table>

\t    <!-- PAGE SELECT -->
\t    ";
        // line 346
        if (($this->getContext($context, "page") != 1)) {
            // line 347
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 350
        echo "\t    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "page_num")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 351
            echo "            ";
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                // line 352
                echo "\t\t        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $this->getContext($context, "page_size"), "page" => $this->getContext($context, "i"))), "html", null, true);
                echo "\">
            ";
            }
            // line 354
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            if (($this->getContext($context, "page") != $this->getContext($context, "i"))) {
                echo "</a>
            ";
            }
            // line 356
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 357
        echo "\t    ";
        if (($this->getContext($context, "page") != $this->getContext($context, "page_num"))) {
            // line 358
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $this->getContext($context, "page_size"), "page" => ($this->getContext($context, "page") + 1))), "html", null, true);
            echo "\">
                Next-&gt;</a>
\t    ";
        }
        // line 361
        echo "\t    <!-- END OF PAGE SELECT -->
    
    <br>
    <a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;-- homepage -- &gt;</a>
    </center>
    ";
        // line 366
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9aed30b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9aed30b_highcharts_1.js");
            // line 370
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
            // asset "9aed30b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9aed30b_exporting_2.js");
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        } else {
            // asset "9aed30b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9aed30b.js");
            echo "        <script src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:admin_analyze.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  882 => 370,  878 => 366,  873 => 364,  868 => 361,  861 => 358,  858 => 357,  852 => 356,  845 => 354,  839 => 352,  836 => 351,  831 => 350,  824 => 347,  822 => 346,  817 => 343,  807 => 339,  801 => 336,  797 => 334,  794 => 333,  788 => 331,  784 => 329,  782 => 328,  779 => 327,  773 => 325,  770 => 324,  764 => 322,  760 => 320,  758 => 319,  755 => 318,  751 => 316,  745 => 314,  743 => 313,  740 => 312,  737 => 311,  731 => 309,  727 => 307,  725 => 306,  722 => 305,  718 => 303,  712 => 301,  710 => 300,  707 => 299,  703 => 297,  699 => 295,  695 => 293,  692 => 292,  686 => 290,  682 => 288,  680 => 287,  677 => 286,  673 => 284,  667 => 282,  665 => 281,  662 => 280,  660 => 279,  656 => 277,  651 => 275,  646 => 274,  643 => 273,  638 => 271,  634 => 270,  629 => 269,  621 => 266,  617 => 265,  612 => 264,  609 => 263,  607 => 262,  603 => 260,  599 => 259,  588 => 255,  584 => 254,  567 => 244,  563 => 243,  556 => 238,  546 => 234,  540 => 231,  536 => 229,  532 => 228,  511 => 209,  502 => 207,  496 => 206,  493 => 205,  490 => 204,  487 => 203,  482 => 202,  479 => 201,  475 => 199,  472 => 198,  468 => 197,  433 => 164,  424 => 162,  420 => 160,  417 => 159,  413 => 158,  403 => 153,  378 => 149,  375 => 148,  372 => 147,  369 => 146,  366 => 145,  363 => 144,  360 => 143,  357 => 142,  354 => 141,  351 => 140,  348 => 139,  345 => 138,  342 => 137,  339 => 136,  336 => 135,  333 => 134,  330 => 133,  327 => 132,  324 => 131,  321 => 130,  319 => 129,  300 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 105,  212 => 54,  208 => 53,  190 => 51,  186 => 50,  168 => 48,  164 => 47,  159 => 45,  151 => 42,  144 => 40,  137 => 38,  130 => 36,  123 => 34,  116 => 32,  109 => 30,  102 => 28,  95 => 26,  88 => 24,  81 => 20,  78 => 19,  74 => 18,  69 => 16,  64 => 14,  56 => 10,  54 => 9,  34 => 7,  29 => 3,  26 => 2,);
    }
}
