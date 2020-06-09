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

/* @dmzx_mchat/event/overall_header_stylesheets_after.html */
class __TwigTemplate_1fa1df9480c2bd240b69270fd3ecf6c65d046cd7af4fba246358dc9d2ca4f7a7 extends \Twig\Template
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
        if ((($context["MCHAT_PAGE"] ?? null) && (($context["MCHAT_PAGE"] ?? null) != "archive"))) {
            // line 2
            echo "\t<style>
\t\t";
            // line 3
            if ((((($context["MCHAT_PAGE"] ?? null) == "custom") && ($context["MCHAT_CUSTOM_HEIGHT"] ?? null)) || ($context["MCHAT_INDEX_HEIGHT"] ?? null))) {
                // line 4
                echo "\t\t#mchat-messages {
\t\t\theight: ";
                // line 5
                echo (((($context["MCHAT_PAGE"] ?? null) == "custom")) ? (($context["MCHAT_CUSTOM_HEIGHT"] ?? null)) : (($context["MCHAT_INDEX_HEIGHT"] ?? null)));
                echo "px;
\t\t}
\t\t";
            }
            // line 8
            echo "\t\t";
            if (($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null)) {
                // line 9
                echo "\t\t#mchat-input {
\t\t\tmax-height: ";
                // line 10
                echo ($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null);
                echo "px;
\t\t}
\t\t";
            }
            // line 13
            echo "\t</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 10,  49 => 9,  46 => 8,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/event/overall_header_stylesheets_after.html", "");
    }
}
