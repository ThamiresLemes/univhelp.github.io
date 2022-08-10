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

/* @dmzx_mchat/mchat_title.html */
class __TwigTemplate_9c8f1b3b51677d9d332aec6c0b9b86e182423f04ff916f3a1a30469a22acb879 extends \Twig\Template
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
        echo "<span class=\"mchat-title\">
\t";
        // line 2
        if ((($context["MCHAT_PAGE"] ?? null) == "archive")) {
            // line 3
            echo "\t\t<a href=\"";
            echo ($context["U_MCHAT_ARCHIVE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_PAGE");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_PAGE");
            echo "</a>
\t";
        } elseif (        // line 4
($context["U_MCHAT_CUSTOM_PAGE"] ?? null)) {
            // line 5
            echo "\t\t<a href=\"";
            echo ($context["U_MCHAT_CUSTOM_PAGE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TITLE");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TITLE");
            echo "</a>
\t";
        } else {
            // line 7
            echo "\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TITLE");
            echo "
\t";
        }
        // line 9
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_title.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  56 => 7,  46 => 5,  44 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_title.html", "");
    }
}
