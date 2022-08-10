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

/* @blitze_sitemaker/event/overall_header_navigation_prepend.html */
class __TwigTemplate_6a23206a8d97eb0d943eff425b81e64bbe125d7240fb3fcee26b0cde89b7ec5c extends \Twig\Template
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
        if (($context["SM_SHOW_FORUM_NAV"] ?? null)) {
            // line 2
            echo "\t<li class=\"no-bulletin\" data-last-responsive=\"true\">
\t\t<a href=\"";
            // line 3
            echo ($context["U_SM_VIEWFORUM"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo "\" role=\"menuitem\"><i class=\"";
            echo ($context["SM_FORUM_ICON"] ?? null);
            echo " fa-lg\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo "</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/event/overall_header_navigation_prepend.html", "");
    }
}
