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

/* display_options.html */
class __TwigTemplate_85ec9413b593f49f441cb575fcd0545af53ee07af9203c58a5e62a5f7b384a16 extends \Twig\Template
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
        echo "<div class=\"dropdown-container dropdown-container-left dropdown-button-control sort-tools\">
\t<span title=\"";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_OPTIONS");
        echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t<i class=\"icon fa-sort-amount-asc fa-fw\" aria-hidden=\"true\"></i>
\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t</span>
\t<div class=\"dropdown hidden\">
\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t<div class=\"dropdown-contents\">
\t\t\t<fieldset class=\"display-options\">
\t\t\t";
        // line 10
        if (($context["S_SORT_OPTIONS"] ?? null)) {
            // line 11
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_SORT_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DIRECTION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT");
            echo "\" />
\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo ($context["S_SELECT_SORT_DAYS"] ?? null);
            echo "</label>
\t\t\t\t";
            // line 17
            if (($context["S_SELECT_SORT_KEY"] ?? null)) {
                // line 18
                echo "\t\t\t\t<label>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t\t\t<label>";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DIRECTION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"sort\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t\t\t";
        }
        // line 24
        echo "\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 22,  93 => 21,  85 => 19,  77 => 18,  75 => 17,  67 => 16,  62 => 14,  54 => 12,  46 => 11,  44 => 10,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display_options.html", "");
    }
}
