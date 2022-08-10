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

/* @dmzx_mchat/event/overall_footer_copyright_append.html */
class __TwigTemplate_92b56f86fbe436b95656ab6d9f4d05ba0408fd67a1a20991d888108d3b797e37 extends \Twig\Template
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
        if (($context["MCHAT_PAGE"] ?? null)) {
            // line 2
            echo "\t<p class=\"footer-row mchat-copyright\">
\t\t<span>";
            // line 3
            echo ($context["MCHAT_DISPLAY_NAME"] ?? null);
            echo " &copy; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["MCHAT_AUTHOR_HOMEPAGES"] ?? null);
            echo "</span>
\t</p>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/event/overall_footer_copyright_append.html";
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
        return new Source("", "@dmzx_mchat/event/overall_footer_copyright_append.html", "");
    }
}
