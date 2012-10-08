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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6_0") : $this->env->getExtension('assets')->getAssetUrl("js/862f2a6_datetimepicker_1.js");
            // line 7
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "' type='text/javascript'></script>
    ";
            // asset "862f2a6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6_1") : $this->env->getExtension('assets')->getAssetUrl("js/862f2a6_jquery.min_2.js");
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        } else {
            // asset "862f2a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_862f2a6") : $this->env->getExtension('assets')->getAssetUrl("js/862f2a6.js");
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
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
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $_user_, "html", null, true);
        echo "\" >
        <input name=\"set_user\" type=\"submit\" value=\"Query\" />
        ";
        // line 18
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($_user_ != null)) {
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
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "All")) {
            echo " selected=\"selected\"";
        }
        echo ">All</option>
            <option value=\"message\"
                ";
        // line 26
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "message")) {
            echo " selected=\"selected\"";
        }
        echo ">Message</option>
            <option value=\"signup\"
                ";
        // line 28
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "signup")) {
            echo " selected=\"selected\"";
        }
        echo ">Signup</option>
            <option value=\"login\"
                ";
        // line 30
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "login")) {
            echo " selected=\"selected\"";
        }
        echo ">Login</option>
            <option value=\"logout\"
                ";
        // line 32
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "logout")) {
            echo " selected=\"selected\"";
        }
        echo ">Logout</option>
            <option value=\"login&logout\"
                ";
        // line 34
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "login&logout")) {
            echo " selected=\"selected\"";
        }
        echo ">Login & Logout</option>
            <option value=\"reply\"
                ";
        // line 36
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "reply")) {
            echo " selected=\"selected\"";
        }
        echo ">Reply</option>
            <option value=\"remove_reply\"
                ";
        // line 38
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "remove_reply")) {
            echo " selected=\"selected\"";
        }
        echo ">Remove Reply</option>
            <option value=\"remove_message\"
                ";
        // line 40
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "remove_message")) {
            echo " selected=\"selected\"";
        }
        echo ">Remove Message</option>
            <option value=\"disaccount\"
                ";
        // line 42
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "disaccount")) {
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
        if (isset($context["start_datetime"])) { $_start_datetime_ = $context["start_datetime"]; } else { $_start_datetime_ = null; }
        echo twig_escape_filter($this->env, $_start_datetime_, "html", null, true);
        echo "\" readonly=\"readonly\" />
        <a href=\"javascript:NewCal('start_datetime','ddmmyyyy',true,24)\">";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1728085_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085_0") : $this->env->getExtension('assets')->getAssetUrl("images/1728085_cal_1.gif");
            echo "<img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        } else {
            // asset "1728085"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085") : $this->env->getExtension('assets')->getAssetUrl("images/1728085.gif");
            echo "<img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        }
        unset($context["asset_url"]);
        echo "</a>
        to
        <input name=\"end_datetime\" id=\"end_datetime\" type=\"text\" size=\"25\" value=\"";
        // line 50
        if (isset($context["end_datetime"])) { $_end_datetime_ = $context["end_datetime"]; } else { $_end_datetime_ = null; }
        echo twig_escape_filter($this->env, $_end_datetime_, "html", null, true);
        echo "\" readonly=\"readonly\" />
        <a href=\"javascript:NewCal('end_datetime','ddmmyyyy',true,24)\">";
        // line 51
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1728085_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085_0") : $this->env->getExtension('assets')->getAssetUrl("images/1728085_cal_1.gif");
            echo "<img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        } else {
            // asset "1728085"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1728085") : $this->env->getExtension('assets')->getAssetUrl("images/1728085.gif");
            echo "<img src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" width=\"16\" height=\"16\" border=\"0\" alt=\"Pick a date\" />";
        }
        unset($context["asset_url"]);
        echo "</a>
        <input type=\"submit\" name=\"set_date\" value=\"Set\" onclick=\"if(!check_cal()){window.alert('the Start Date is later than the End Date');return false;}\" />
        ";
        // line 53
        if (isset($context["start_flag"])) { $_start_flag_ = $context["start_flag"]; } else { $_start_flag_ = null; }
        if (isset($context["end_flag"])) { $_end_flag_ = $context["end_flag"]; } else { $_end_flag_ = null; }
        if (($_start_flag_ || $_end_flag_)) {
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
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if (($_class_ == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">24hrs</option>
            ";
        // line 109
        if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_classes_);
        foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
            // line 110
            echo "                <option value=";
            if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cls_, "id"), "html", null, true);
            echo " ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
            if (($_class_ == $this->getAttribute($_cls_, "id"))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cls_, "name"), "html", null, true);
            echo " (";
            if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_cls_, "start"), "H:i"), "html", null, true);
            echo " ~ ";
            if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_cls_, "end"), "H:i"), "html", null, true);
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
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "message")) {
            // line 131
            echo "                                    ";
            $context["action_str"] = "Message";
            // line 132
            echo "                                ";
        } elseif (($_action_ == "signup")) {
            // line 133
            echo "                                    ";
            $context["action_str"] = "Signup";
            // line 134
            echo "                                ";
        } elseif (($_action_ == "login")) {
            // line 135
            echo "                                    ";
            $context["action_str"] = "Login";
            // line 136
            echo "                                ";
        } elseif (($_action_ == "logout")) {
            // line 137
            echo "                                    ";
            $context["action_str"] = "Logout";
            // line 138
            echo "                                ";
        } elseif (($_action_ == "login&logout")) {
            // line 139
            echo "                                    ";
            $context["action_str"] = "Login and Logout";
            // line 140
            echo "                                ";
        } elseif (($_action_ == "reply")) {
            // line 141
            echo "                                    ";
            $context["action_str"] = "Reply";
            // line 142
            echo "                                ";
        } elseif (($_action_ == "remove_reply")) {
            // line 143
            echo "                                    ";
            $context["action_str"] = "Remove Reply";
            // line 144
            echo "                                ";
        } elseif (($_action_ == "remove_message")) {
            // line 145
            echo "                                    ";
            $context["action_str"] = "Remove Message";
            // line 146
            echo "                                ";
        } elseif (($_action_ == "dissaccount")) {
            // line 147
            echo "                                    ";
            $context["action_str"] = "Disaccount";
            // line 148
            echo "                                ";
        }
        // line 149
        echo "                                '";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($_user_) {
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $_user_, "html", null, true);
            echo " ";
        }
        if (isset($context["action_str"])) { $_action_str_ = $context["action_str"]; } else { $_action_str_ = null; }
        echo twig_escape_filter($this->env, $_action_str_, "html", null, true);
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if ($_class_) {
            echo " in ";
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classes_);
            foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if (($this->getAttribute($_cls_, "id") == $_class_)) {
                    if (isset($context["cls"])) { $_cls_ = $context["cls"]; } else { $_cls_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_cls_, "name"), "html", null, true);
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
        if (isset($context["start_datetime"])) { $_start_datetime_ = $context["start_datetime"]; } else { $_start_datetime_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_start_datetime_, "Y-m-d H:i:s"), "html", null, true);
        echo " To ";
        if (isset($context["end_datetime"])) { $_end_datetime_ = $context["end_datetime"]; } else { $_end_datetime_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_end_datetime_, "Y-m-d H:i:s"), "html", null, true);
        echo "\",
                            x: -20
                        },
                        xAxis: {
                            categories: [
                                ";
        // line 158
        if (isset($context["count_logs_date_array"])) { $_count_logs_date_array_ = $context["count_logs_date_array"]; } else { $_count_logs_date_array_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_count_logs_date_array_);
        foreach ($context['_seq'] as $context["key"] => $context["date"]) {
            // line 159
            echo "                                    ";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (($_key_ != 0)) {
                // line 160
                echo "                                        ,
                                    ";
            }
            // line 162
            echo "                                    \"";
            if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_date_, "m-d"), "html", null, true);
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
        if (isset($context["count_logs_date_array"])) { $_count_logs_date_array_ = $context["count_logs_date_array"]; } else { $_count_logs_date_array_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_count_logs_date_array_);
        foreach ($context['_seq'] as $context["key"] => $context["date"]) {
            // line 198
            echo "                                    ";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (($_key_ != 0)) {
                // line 199
                echo "                                        ,
                                    ";
            }
            // line 201
            echo "                                    ";
            $context["tmp"] = 0;
            // line 202
            echo "                                    ";
            if (isset($context["count_logs"])) { $_count_logs_ = $context["count_logs"]; } else { $_count_logs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_count_logs_);
            foreach ($context['_seq'] as $context["_key"] => $context["count_log"]) {
                // line 203
                echo "                                        ";
                if (isset($context["count_log"])) { $_count_log_ = $context["count_log"]; } else { $_count_log_ = null; }
                if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
                if ((twig_date_format_filter($this->env, $this->getAttribute($_count_log_, "date"), "Y-m-d") == twig_date_format_filter($this->env, $_date_, "Y-m-d"))) {
                    // line 204
                    echo "                                            ";
                    if (isset($context["count_log"])) { $_count_log_ = $context["count_log"]; } else { $_count_log_ = null; }
                    $context["tmp"] = $this->getAttribute($_count_log_, "num");
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
            if (isset($context["tmp"])) { $_tmp_ = $context["tmp"]; } else { $_tmp_ = null; }
            echo twig_escape_filter($this->env, $_tmp_, "html", null, true);
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
        if (isset($context["count_logs"])) { $_count_logs_ = $context["count_logs"]; } else { $_count_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_count_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["count_log"]) {
            // line 229
            echo "                <tr>
                    <td>
                        ";
            // line 231
            if (isset($context["count_log"])) { $_count_log_ = $context["count_log"]; } else { $_count_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_log_, "date"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 234
            if (isset($context["count_log"])) { $_count_log_ = $context["count_log"]; } else { $_count_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_log_, "num"), "html", null, true);
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
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">
                        <input name=\"sort_account\" type=\"submit\" value=\"Account";
        // line 244
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "account_DESC")) {
            echo " ˅";
        } elseif (($_sort_ == "account_ASC")) {
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
        if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $_page_size_, "page" => $_page_)), "html", null, true);
        echo "\">
                        <input name=\"sort_time\" type=\"submit\" value=\"Time";
        // line 255
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "time_DESC")) {
            echo " ˅";
        } elseif (($_sort_ == "time_ASC")) {
            echo " ^";
        }
        echo "\" />
                    </form>
                </th>
            </tr>
            ";
        // line 259
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 260
            echo "                <tr>
                    <td>
                        ";
            // line 262
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "action") != "message")) {
                // line 263
                echo "                            ";
                if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_admins_, $this->getAttribute($_log_, "adminId"), array(), "array", true, true)) {
                    // line 264
                    echo "                                <form method=\"POST\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
                    echo "\" >
                                    <input type=\"hidden\" name=\"user\" value=\"";
                    // line 265
                    if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_admins_, $this->getAttribute($_log_, "adminId"), array(), "array"), "nickname"), "html", null, true);
                    echo "\" >
                                    <input type=\"submit\" name=\"set_user\" value=\"";
                    // line 266
                    if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_admins_, $this->getAttribute($_log_, "adminId"), array(), "array"), "account"), "html", null, true);
                    echo " (";
                    if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_admins_, $this->getAttribute($_log_, "adminId"), array(), "array"), "nickname"), "html", null, true);
                    echo ")\" >
                                </form>
                            ";
                } else {
                    // line 269
                    echo "                                <i>";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "account"), "html", null, true);
                    echo "
                                (";
                    // line 270
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "nickname"), "html", null, true);
                    echo ")
                                (id:";
                    // line 271
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "adminId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 273
                echo "                        ";
            } else {
                // line 274
                echo "                            ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "account"), "html", null, true);
                echo "
                            (";
                // line 275
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "nickname"), "html", null, true);
                echo ")
                        ";
            }
            // line 277
            echo "                    </td>
                    <td>
                        ";
            // line 279
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "action") == "message")) {
                // line 280
                echo "                            leaved a
                            ";
                // line 281
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 282
                    echo "                                <a href=\"";
                    if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("id" => $this->getAttribute($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array"), "id"))), "html", null, true);
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
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 288
                    echo "                                </a>
                            ";
                } else {
                    // line 290
                    echo "                                (id:";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 292
                echo "                        ";
            } elseif (($this->getAttribute($_log_, "action") == "signup")) {
                // line 293
                echo "                            signup
                        ";
            } elseif (($this->getAttribute($_log_, "action") == "login")) {
                // line 295
                echo "                            login
                        ";
            } elseif (($this->getAttribute($_log_, "action") == "logout")) {
                // line 297
                echo "                            logout
                        ";
            } elseif (($this->getAttribute($_log_, "action") == "reply")) {
                // line 299
                echo "                            replied a
                            ";
                // line 300
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 301
                    echo "                                <a href=\"";
                    if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array"), "id"))), "html", null, true);
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
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 307
                    echo "                                </a>
                            ";
                } else {
                    // line 309
                    echo "                                (id:";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "targetId"), "html", null, true);
                    echo ")</i>
                            ";
                }
                // line 311
                echo "                        ";
            } elseif (($this->getAttribute($_log_, "action") == "remove_reply")) {
                // line 312
                echo "                            remove a
                                ";
                // line 313
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 314
                    echo "                                    <a href=\"";
                    if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_single", array("page_size" => $_page_size_, "page" => $_page_, "id" => $this->getAttribute($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array"), "id"))), "html", null, true);
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
                if (isset($context["msgs"])) { $_msgs_ = $context["msgs"]; } else { $_msgs_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_msgs_, $this->getAttribute($_log_, "targetId"), array(), "array", true, true)) {
                    // line 320
                    echo "                                    </a>
                                ";
                } else {
                    // line 322
                    echo "                                    (id:";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "targetId"), "html", null, true);
                    echo ")></i>
                                ";
                }
                // line 324
                echo "                        ";
            } elseif (($this->getAttribute($_log_, "action") == "remove_message")) {
                // line 325
                echo "                            removed a <i>message (id:";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "targetId"), "html", null, true);
                echo ")</i>
                        ";
            } elseif (($this->getAttribute($_log_, "action") == "disaccount")) {
                // line 327
                echo "                            disaccounted
                            ";
                // line 328
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "adminId") == $this->getAttribute($_log_, "targetId"))) {
                    // line 329
                    echo "                                itself
                            ";
                } else {
                    // line 331
                    echo "                                an account (id:";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "targetId"), "html", null, true);
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
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "ip"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 339
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_log_, "time"), "Y/m/d H:i:s"), "html", null, true);
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ != 1)) {
            // line 347
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $_page_size_, "page" => ($_page_ - 1))), "html", null, true);
            echo "\">
                &lt;-Previous</a>
\t    ";
        }
        // line 350
        echo "\t    ";
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $_page_num_));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 351
            echo "            ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
                // line 352
                echo "\t\t        <a href=\"";
                if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $_page_size_, "page" => $_i_)), "html", null, true);
                echo "\">
            ";
            }
            // line 354
            echo "                ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($_page_ != $_i_)) {
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["page_num"])) { $_page_num_ = $context["page_num"]; } else { $_page_num_ = null; }
        if (($_page_ != $_page_num_)) {
            // line 358
            echo "\t\t    <a href=\"";
            if (isset($context["page_size"])) { $_page_size_ = $context["page_size"]; } else { $_page_size_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze", array("page_size" => $_page_size_, "page" => ($_page_ + 1))), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b_0") : $this->env->getExtension('assets')->getAssetUrl("js/9aed30b_highcharts_1.js");
            // line 370
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "' type='text/javascript'></script>
    ";
            // asset "9aed30b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b_1") : $this->env->getExtension('assets')->getAssetUrl("js/9aed30b_exporting_2.js");
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "' type='text/javascript'></script>
    ";
        } else {
            // asset "9aed30b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9aed30b") : $this->env->getExtension('assets')->getAssetUrl("js/9aed30b.js");
            echo "        <script src='";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
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
        return array (  1004 => 370,  1000 => 366,  995 => 364,  990 => 361,  981 => 358,  976 => 357,  970 => 356,  960 => 354,  952 => 352,  947 => 351,  941 => 350,  932 => 347,  929 => 346,  924 => 343,  913 => 339,  906 => 336,  902 => 334,  899 => 333,  892 => 331,  888 => 329,  885 => 328,  882 => 327,  875 => 325,  872 => 324,  865 => 322,  861 => 320,  857 => 319,  854 => 318,  850 => 316,  840 => 314,  836 => 313,  833 => 312,  830 => 311,  823 => 309,  819 => 307,  815 => 306,  812 => 305,  808 => 303,  798 => 301,  794 => 300,  791 => 299,  787 => 297,  783 => 295,  779 => 293,  776 => 292,  769 => 290,  765 => 288,  761 => 287,  758 => 286,  754 => 284,  746 => 282,  742 => 281,  739 => 280,  736 => 279,  732 => 277,  726 => 275,  720 => 274,  717 => 273,  711 => 271,  706 => 270,  700 => 269,  688 => 266,  682 => 265,  677 => 264,  672 => 263,  669 => 262,  665 => 260,  660 => 259,  648 => 255,  642 => 254,  624 => 244,  618 => 243,  611 => 238,  600 => 234,  593 => 231,  589 => 229,  584 => 228,  563 => 209,  553 => 207,  547 => 206,  544 => 205,  540 => 204,  535 => 203,  529 => 202,  526 => 201,  522 => 199,  518 => 198,  513 => 197,  478 => 164,  468 => 162,  464 => 160,  460 => 159,  455 => 158,  443 => 153,  410 => 149,  407 => 148,  404 => 147,  401 => 146,  398 => 145,  395 => 144,  392 => 143,  389 => 142,  386 => 141,  383 => 140,  380 => 139,  377 => 138,  374 => 137,  371 => 136,  368 => 135,  365 => 134,  362 => 133,  359 => 132,  356 => 131,  352 => 130,  350 => 129,  331 => 112,  306 => 110,  301 => 109,  294 => 108,  288 => 105,  235 => 54,  229 => 53,  209 => 51,  204 => 50,  184 => 48,  179 => 47,  174 => 45,  165 => 42,  157 => 40,  149 => 38,  141 => 36,  133 => 34,  125 => 32,  117 => 30,  109 => 28,  101 => 26,  93 => 24,  86 => 20,  83 => 19,  78 => 18,  72 => 16,  67 => 14,  59 => 10,  57 => 9,  34 => 7,  29 => 3,  26 => 2,);
    }
}
