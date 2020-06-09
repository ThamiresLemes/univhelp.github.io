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

/* ucp_agreement.html */
class __TwigTemplate_13c45d221cc945663c465fab953957d437357d4e967950d217923e1672ba3726 extends \Twig\Template
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
        $value = "register";
        $context['definition']->set('NAV_SECTION', $value);
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 4
            echo "
";
            // line 5
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 6
                echo "<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 12
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}
</script>

\t<form method=\"post\" action=\"";
                // line 18
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t";
                // line 21
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 28
            echo "
\t<form method=\"post\" action=\"";
            // line 29
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 34
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
            // line 35
            // line 36
            echo "\t\t\t<p>";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 37
            // line 38
            echo "\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 45
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 46
                echo "\t\t\t<strong><a href=\"";
                echo ($context["U_COPPA_NO"] ?? null);
                echo "\" class=\"button1\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_NO");
                echo "</a></strong>&nbsp; <a href=\"";
                echo ($context["U_COPPA_YES"] ?? null);
                echo "\" class=\"button2\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 48
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGREE");
                echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 49
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 51
            echo "\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 52
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        } elseif (        // line 58
($context["S_AGREEMENT"] ?? null)) {
            // line 59
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 63
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h2>
\t\t\t<p>";
            // line 64
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t\t\t<hr class=\"dashed\" />
\t\t\t<p><a href=\"";
            // line 66
            echo ($context["U_BACK"] ?? null);
            echo "\" class=\"button2\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a></p>
\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 72
        echo "
";
        // line 73
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 73)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 73,  202 => 72,  191 => 66,  186 => 64,  180 => 63,  174 => 59,  172 => 58,  163 => 52,  158 => 51,  153 => 49,  148 => 48,  136 => 46,  134 => 45,  125 => 38,  124 => 37,  115 => 36,  114 => 35,  108 => 34,  100 => 29,  97 => 28,  87 => 21,  78 => 20,  73 => 18,  62 => 12,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
