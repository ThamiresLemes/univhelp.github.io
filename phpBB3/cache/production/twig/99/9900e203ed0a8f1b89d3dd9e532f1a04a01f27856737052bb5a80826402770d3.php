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

/* acp_ext_enable.html */
class __TwigTemplate_f4b63fbaf52581bd9f94e1d3eba04d73661ad7c7279f6c0b8b9e7f82bf40f13c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_ext_enable.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
\t<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>
\t<p>";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_ENABLE_EXPLAIN");
        echo "</p>

\t";
        // line 10
        if (($context["MIGRATOR_ERROR"] ?? null)) {
            // line 11
            echo "\t<div class=\"errorbox\">
\t\t<p><strong>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MIGRATION_EXCEPTION_ERROR");
            echo "</strong></p>
\t\t<p>";
            // line 13
            echo ($context["MIGRATOR_ERROR"] ?? null);
            echo "</p>
\t\t<p><a href=\"";
            // line 14
            echo ($context["U_RETURN"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t</div>
\t";
        } elseif (        // line 16
($context["PRE"] ?? null)) {
            // line 17
            echo "\t<fieldset>
\t\t<h2>";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
            echo "</h2>
\t\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_MESSAGE");
            echo "</p>
\t</fieldset>

\t<form id=\"acp_extensions\" method=\"post\" action=\"";
            // line 22
            echo ($context["U_ENABLE"] ?? null);
            echo "\">
\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"enable\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_ENABLE");
            echo "\" />
\t\t<input class=\"button2\" type=\"submit\" name=\"cancel\" value=\"";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
            echo "\" />
\t</fieldset>
\t</form>
\t";
        } elseif (        // line 28
($context["S_NEXT_STEP"] ?? null)) {
            // line 29
            echo "\t\t<div class=\"successbox notice\">
\t\t\t<p>";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_ENABLE_IN_PROGRESS");
            echo "</p>
\t\t</div>
\t";
        } else {
            // line 33
            echo "\t\t<div class=\"successbox\">
\t\t\t<p>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_ENABLE_SUCCESS");
            echo "</p>
\t\t\t<br />
\t\t\t<p><a href=\"";
            // line 36
            echo ($context["U_RETURN"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t\t</div>
\t";
        }
        // line 39
        echo "
";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_enable.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_enable.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  138 => 39,  130 => 36,  125 => 34,  122 => 33,  116 => 30,  113 => 29,  111 => 28,  105 => 25,  101 => 24,  96 => 22,  90 => 19,  86 => 18,  83 => 17,  81 => 16,  74 => 14,  70 => 13,  66 => 12,  63 => 11,  61 => 10,  56 => 8,  52 => 7,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ext_enable.html", "");
    }
}
