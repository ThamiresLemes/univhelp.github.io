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

/* @blitze_sitemaker/event/overall_header_content_before.html */
class __TwigTemplate_fdb247cd1ac39113abb07685de4d29d842939fd129d3bb45d67555d165bc8dab extends \Twig\Template
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
        if (($context["S_SITEMAKER"] ?? null)) {
            // line 2
            echo "\t<div class=\"sm-block-spacing\"></div>

\t";
            // line 4
            $this->loadTemplate((("layouts/" . ($context["S_LAYOUT"] ?? null)) . "/header_layout.twig"), "@blitze_sitemaker/event/overall_header_content_before.html", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/event/overall_header_content_before.html", "");
    }
}
