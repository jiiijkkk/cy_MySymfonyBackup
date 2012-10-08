<?php

/* AcmeMsgbBundle:Guest:signup.html.twig */
class __TwigTemplate_942e2d808c67e9f63a778daa0d5217a0 extends Twig_Template
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
\t    <font size=20>Signup</font>
        <br>
        <br>
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_signup"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " onsubmit=\"return validateForm();\" >
            ";
        // line 8
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "_token"));
        echo "
            Account : ";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "account"));
        echo "<br>
            Password : ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "password"));
        echo "<br>
            Nickname : ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "nickname"));
        echo "<br>
            <input type=\"submit\" value=\"Submit\" />
        </form>

\t    <!-- VALIDATE FORM -->
        <script>
            function validateForm(){
                var vilad_account=new RegExp(\"^[a-zA-Z0-9]{4,12}\$\");
                var vilad_password=new RegExp(\"^[a-zA-Z0-9]{4,12}\$\");
                var vilad_nickname=new RegExp(\"^.{2,12}\$\");
                var alert_msg=\"\";
                if(!vilad_account.test(document.getElementById('Msgb_admin_account').value))
                    alert_msg+=\"Account : Please insert 4~12 alphabets or numbers\\n\";
                if(!vilad_password.test(document.getElementById('Msgb_admin_password').value))
                    alert_msg+=\"Password : Please insert 4~12 alphabets or numbers\\n\";
                if(!vilad_nickname.test(document.getElementById('Msgb_admin_nickname').value))
                    alert_msg+=\"Nickname : Please insert 2~12 characters\\n\";
                if(alert_msg!=\"\"){
                    alert(alert_msg);
                    return false;
                }
                else
                    return true;
            }
        </script>
\t    <!-- END OF VALIDATE FORM -->

        <br>
\t    <!-- error -->
            ";
        // line 40
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 41
            echo "                ";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "\t    <!-- End of error -->
        <br>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;--&nbsp;Homepage&nbsp;--&gt;</a>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Guest:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  105 => 43,  95 => 41,  90 => 40,  57 => 11,  52 => 10,  47 => 9,  42 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
