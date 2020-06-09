<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_remind.html */
class __TwigTemplate_bf45ad0fda2b0496a630a909b13462d4876735ffb5c5a0a5fa25cdbb0e03b31e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_remind.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form action=\"";
        // line 3
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"remind\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<h2>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_PASSWORD");
        echo "</h2>

\t\t<fieldset>
\t\t\t";
        // line 12
        if (($context["USERNAME_REQUIRED"] ?? null)) {
            // line 13
            echo "\t\t\t\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_NOT_UNIQUE");
            echo "</p>
\t\t\t";
        }
        // line 15
        echo "\t\t<dl>
\t\t\t<dt><label for=\"email\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_REMIND");
        echo "</span></dt>
\t\t\t<dd><input class=\"inputbox narrow\" type=\"email\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 17
        echo ($context["EMAIL"] ?? null);
        echo "\" autofocus /></dd>
\t\t</dl>
\t\t";
        // line 19
        if (($context["USERNAME_REQUIRED"] ?? null)) {
            // line 20
            echo "\t\t<dl>
\t\t\t<dt><label for=\"username\">";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input class=\"inputbox narrow\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" /></dd>
\t\t</dl>
\t\t";
        }
        // line 25
        echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 27
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"button1\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" tabindex=\"2\" />&nbsp; <input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /></dd>
\t\t</dl>
\t\t";
        // line 29
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</fieldset>
\t</div>

\t</div>
</div>
</form>

";
        // line 37
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_remind.html", 37)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_remind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  109 => 29,  100 => 27,  96 => 25,  88 => 21,  85 => 20,  83 => 19,  78 => 17,  71 => 16,  68 => 15,  62 => 13,  60 => 12,  54 => 9,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_remind.html", "");
    }
}
