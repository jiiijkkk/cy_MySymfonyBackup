<?php

/* AcmeMsgbBundle:Guest:login.html.twig */
class __TwigTemplate_515aa3655a3e95deaa40344d1e26176b extends Twig_Template
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
\t    <font size=20>Login</font>
        <br>
        <br>
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_login"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " onsubmit=\"return validateForm();\" >
            ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
            <div>Account : ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "account"));
        echo "</div>
            <div>Password : ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "</div>
            <input type=\"submit\" value=\"Submit\" />
        </form>

\t    <!-- VALIDATE FORM -->
        <script>
            function validateForm(){
                var vilad_account=new RegExp(\"^[a-zA-Z0-9]{4,12}\$\");
                var vilad_password=new RegExp(\"^[a-zA-Z0-9]{4,12}\$\");
                var alert_msg=\"\";
                if(!vilad_account.test(document.getElementById('Msgb_admin_account').value))
                    alert_msg+=\"Account : Please insert 4~12 alphabets or numbers\\n\";
                if(!vilad_password.test(document.getElementById('Msgb_admin_password').value))
                    alert_msg+=\"Password : Please insert 4~12 alphabets or numbers\\n\";
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
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 37
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "\t    <!-- End of error -->
        <br>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeMsgbBundle_homepage"), "html", null, true);
        echo "\">&lt;--&nbsp;Homepage&nbsp;--&gt;</a>
    </center>
";
    }

    public function getTemplateName()
    {
        return "AcmeMsgbBundle:Guest:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  91 => 39,  82 => 37,  78 => 36,  49 => 10,  45 => 9,  41 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
