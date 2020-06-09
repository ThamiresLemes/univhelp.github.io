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

/* @blitze_sitemaker/layouts/portal/header_layout.twig */
class __TwigTemplate_e1f7d2c21408155ff3f1c8a341ddefc1856f96be91d9bfb5daec7a1e85bf65f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/blog/header_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layouts/blog/header_layout.twig", "@blitze_sitemaker/layouts/portal/header_layout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/layouts/portal/header_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/layouts/portal/header_layout.twig", "");
    }
}
