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

/* @blitze_sitemaker/event/overall_footer_content_after.html */
class __TwigTemplate_4fda6aed9e6e76117468027be837752732c225d31b4e488a1687d1cff7d08c21 extends \Twig\Template
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
            echo "\t";
            $this->loadTemplate((("layouts/" . ($context["S_LAYOUT"] ?? null)) . "/footer_layout.twig"), "@blitze_sitemaker/event/overall_footer_content_after.html", 2)->display($context);
            // line 3
            echo "
\t";
            // line 4
            if ((($context["U_EDIT_MODE"] ?? null) &&  !($context["S_EDIT_MODE"] ?? null))) {
                // line 5
                echo "\t<a class=\"edit-mode-btn bg3\" href=\"";
                echo ($context["U_EDIT_MODE"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if (($context["S_EDIT_MODE"] ?? null)) {
                // line 9
                echo "\t\t";
                $this->loadTemplate("admin_bar.html", "@blitze_sitemaker/event/overall_footer_content_after.html", 9)->display($context);
                // line 10
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 9,  49 => 8,  46 => 7,  40 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/event/overall_footer_content_after.html", "");
    }
}
