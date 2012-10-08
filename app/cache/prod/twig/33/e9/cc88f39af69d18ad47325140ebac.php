<?php

/* AcmeMsgbBundle:Default:admin_edit_classes.html.twig */
class __TwigTemplate_33e9cc88f39af69d18ad47325140ebac extends Twig_Template
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
        echo "    <script language=\"JavaScript\">
        function build_select(str, value){
            var max;
            if(str == \"h\")
                max = 24;
            else if(str == \"s\")
                max = 60;
            var i=0;
            for(;i<max;i++){
                document.write(\"<option value=\"+i+\" \");
                if(i == value)document.write(\"selected\");
                document.write(\">\"+i+\"</option>\");
            }
        }
    </script>
    <p style=\"text-align:right;\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_analyze"), "html", null, true);
        echo "\">[Analyze]</a></p>
    <center>
    <font size=20 >Edit Classes</font><br>
    <div class=\"mid\" id=\"add_0\" style=\"display: block;\"><a onclick=\"javascript:ShwHid(0)\" href=\"javascript:;\">[Add class]</a></div>

    <table>
        <tr>
            <th>Name</th>
            <th>Start</th>
            <th>End</th>
            <th>Section</th>
            <th colspan=3>Edit</th>
        </tr>
        <tr id=\"edit_0\" style=\"display: none;\">
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_edit_classes"), "html", null, true);
        echo "\" name=\"edit_0\" method=\"post\" >
                <input type=\"hidden\" name=\"id\" value=0 />
                <td>
                    <input name=\"name\" value=\"new class\" type=\"text\" />
                </td>
                <td>
                    <select name=\"start_h\">
                        <script>
                            build_select(\"h\",9);
                        </script>
                    </select>
                    :
                    <select name=\"start_s\">
                        <script>
                            build_select(\"s\",30);
                        </script>
                    </select>
                </td>
                <td>
                    <select name=\"end_h\">
                        <script>
                            build_select(\"h\",18);
                        </script>
                    </select>
                    :
                    <select name=\"end_s\">
                        <script>
                            build_select(\"s\",30);
                        </script>
                    </select>
                </td>
                <td>
                    <textarea name=\"section\"></textarea>
                </td>
                <td colspan=2 >
                    <input type=\"submit\" value=\"Add\" name=\"action\" />
                </td>
                <td>
                    <a onclick=\"javascript:ShwHid(0)\" href=\"javascript:;\">
                        [Cancel]</a>
                </td>
            </form>
        </tr>
 
        ";
        // line 76
        if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_classes_);
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 77
            echo "            <tr id=\"edit_";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "id"), "html", null, true);
            echo "\" style=\"display:;\">
                <td>";
            // line 78
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "start"), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "end"), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "section"), "html", null, true);
            echo "</td>
                <td colspan=3 ><a onclick=\"javascript:ShwHid(";
            // line 82
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "id"), "html", null, true);
            echo ")\" href=\"javascript:;\" >[Edit]</a></td>
            </tr>
            <tr id=\"add_";
            // line 84
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "id"), "html", null, true);
            echo "\" style=\"display:none;\">
                <form action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_admin_edit_classes"), "html", null, true);
            echo "\" name=\"edit_0\" method=\"post\" >
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 86
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "id"), "html", null, true);
            echo "\" />
                    <td><input type=\"text\" name=\"name\" value=\"";
            // line 87
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "name"), "html", null, true);
            echo "\" /></td>
                    <td>
                        <select name=\"start_h\">
                            <script>
                                build_select(\"h\", ";
            // line 91
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "start"), "H"), "html", null, true);
            echo ");
                            </script>
                        </select>
                        :
                        <select name=\"start_s\">
                            <script>
                                build_select(\"s\", ";
            // line 97
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "start"), "i"), "html", null, true);
            echo ");
                            </script>
                        </select>
                    </td>
                    <td>
                        <select name=\"end_h\">
                            <script>
                                build_select(\"h\", ";
            // line 104
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "end"), "H"), "html", null, true);
            echo ");
                            </script>
                        </select>
                        :
                        <select name=\"end_s\">
                            <script>
                                build_select(\"s\", ";
            // line 110
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_class_, "end"), "i"), "html", null, true);
            echo ");
                            </script>
                        </select>
                    </td>
                    <td>
                        <textarea name=\"section\">";
            // line 115
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "section"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td>
                        <input type=\"submit\" value=\"Edit\" name=\"action\" />
                    </td>
                    <td>
                        <input type=\"submit\" value=\"Delete\" name=\"action\" />
                    </td>
                    <td>
                        <a onclick=\"javascript:ShwHid(";
            // line 124
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_class_, "id"), "html", null, true);
            echo ")\" href=\"javascript:\">
                            [Cancel]</a>
                    </td>
                </form>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 130
        echo "    </table>
    <br>
    <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;-- homepage -- &gt;</a>
    </center>
    <script language=\"JavaScript\">
        function ShwHid(divId){
            if(document.getElementById(\"add_\"+divId).style.display == 'none'){
                document.getElementById(\"add_\"+divId).style.display='';
                document.getElementById(\"edit_\"+divId).style.display='none';
            }
            else{
                document.getElementById(\"add_\"+divId).style.display='none';
                document.getElementById(\"edit_\"+divId).style.display='';
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Default:admin_edit_classes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 132,  235 => 130,  222 => 124,  209 => 115,  200 => 110,  190 => 104,  179 => 97,  169 => 91,  161 => 87,  156 => 86,  152 => 85,  147 => 84,  141 => 82,  136 => 81,  131 => 80,  126 => 79,  121 => 78,  115 => 77,  110 => 76,  63 => 32,  46 => 18,  29 => 3,  26 => 2,);
    }
}
