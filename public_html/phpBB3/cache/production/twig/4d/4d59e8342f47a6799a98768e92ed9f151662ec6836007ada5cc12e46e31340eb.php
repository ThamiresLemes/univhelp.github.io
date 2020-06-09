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

/* @blitze_sitemaker/views/simple_view.twig */
class __TwigTemplate_6d176effd03333ca2940830e01be7f6a23eca8c28ce597eff5d95d9615750c9c extends \Twig\Template
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
        echo "<div class=\"panel post sm-block-container";
        echo $this->getAttribute(($context["block"] ?? null), "class", []);
        echo " sm-block-spacing\"";
        echo $this->getAttribute(($context["block"] ?? null), "css_style", []);
        echo ">
\t<div class=\"inner\">
\t\t";
        // line 3
        if (($this->getAttribute(($context["block"] ?? null), "title", []) &&  !$this->getAttribute(($context["block"] ?? null), "hide_title", []))) {
            // line 4
            echo "\t\t<h2>
\t\t\t<span class=\"block-icon\"><i class=\"";
            // line 5
            echo $this->getAttribute(($context["block"] ?? null), "icon", []);
            echo "\" aria-hidden=\"true\"></i></span>
\t\t\t<span class=\"block-title";
            // line 6
            echo ($context["editable"] ?? null);
            echo "\">";
            echo $this->getAttribute(($context["block"] ?? null), "title", []);
            echo "</span>
\t\t</h2>
\t\t";
        }
        // line 9
        echo "\t\t<div class=\"sm-block-content\">
\t\t\t";
        // line 10
        echo $this->getAttribute(($context["block"] ?? null), "content", []);
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/views/simple_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  55 => 9,  47 => 6,  43 => 5,  40 => 4,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/views/simple_view.twig", "");
    }
}
