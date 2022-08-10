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

/* @blitze_sitemaker/layouts/portal/footer_layout.twig */
class __TwigTemplate_2a94d6b90b1c265096a9ba382ae998f9b0dfdbc082e4fa63b18eed005042f0f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'sidebar_class' => [$this, 'block_sidebar_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/blog/footer_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layouts/blog/footer_layout.twig", "@blitze_sitemaker/layouts/portal/footer_layout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar_class($context, array $blocks = [])
    {
        echo " grid__col--d-first left";
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/layouts/portal/footer_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/layouts/portal/footer_layout.twig", "");
    }
}
