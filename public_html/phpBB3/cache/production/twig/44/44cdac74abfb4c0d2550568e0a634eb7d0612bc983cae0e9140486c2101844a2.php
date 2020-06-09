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

/* viewtopic_topic_tools.html */
class __TwigTemplate_7b6f503a66cdcbf51053347eca6513eee1af8fe78b6da80c8cbd6ba454e732e4 extends \Twig\Template
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
        if (( !($context["S_IS_BOT"] ?? null) && (((((($context["U_WATCH_TOPIC"] ?? null) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_TOOLS");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 10
            // line 11
            echo "\t\t\t\t";
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 12
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 13
                echo ($context["U_WATCH_TOPIC"] ?? null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                if (($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\" data-toggle-text=\"";
                echo ($context["S_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t\t<i class=\"icon ";
                // line 14
                if (($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo ($context["S_BOOKMARK_TOGGLE"] ?? null);
                echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t\t<i class=\"icon fa-bookmark-o fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 21
                echo ($context["S_BOOKMARK_TOPIC"] ?? null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            if (($context["U_BUMP_TOPIC"] ?? null)) {
                // line 26
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 27
                echo ($context["U_BUMP_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">
\t\t\t\t\t\t<i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 28
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t";
            if (($context["U_EMAIL_TOPIC"] ?? null)) {
                // line 33
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 34
                echo ($context["U_EMAIL_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-envelope-o fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
            if (($context["U_PRINT_TOPIC"] ?? null)) {
                // line 40
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 41
                echo ($context["U_PRINT_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">
\t\t\t\t\t\t<i class=\"icon fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 42
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t";
            // line 47
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  159 => 46,  152 => 42,  146 => 41,  143 => 40,  140 => 39,  133 => 35,  127 => 34,  124 => 33,  121 => 32,  114 => 28,  108 => 27,  105 => 26,  102 => 25,  95 => 21,  87 => 20,  84 => 19,  81 => 18,  68 => 14,  52 => 13,  49 => 12,  46 => 11,  45 => 10,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_topic_tools.html", "");
    }
}
