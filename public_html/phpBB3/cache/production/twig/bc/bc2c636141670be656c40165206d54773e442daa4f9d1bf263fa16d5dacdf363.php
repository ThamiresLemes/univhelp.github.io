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

/* _style_config.html */
class __TwigTemplate_568361bb7ce9da653cb3b8813d8bb3f4954422272482126e0c20558f140c2780 extends \Twig\Template
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
        if ($this->getAttribute(($context["definition"] ?? null), "FALSE", [])) {
            // line 2
            echo "\tVariables below change style behavior.

\tList of variables and values (do not edit!):
\t\tForums list layout:
\t\t\t\$STANDARD_FORUMS_LAYOUT = 0\t-> Layout with topics and posts below forum title
\t\t\t\$STANDARD_FORUMS_LAYOUT = 1\t-> Default layout with separate columns for topics and posts

\t\tHide forum description:
\t\t\t\$HIDE_FORUM_DESCRIPTION = 0 -> Always show it
\t\t\t\$HIDE_FORUM_DESCRIPTION = 1 -> Show it only when hovering forum title

\t\tWrap header / navigation:
\t\t\t\$WRAP_HEADER = 0 -> Header and navigation will not be included in global wrapper
\t\t\t\$WRAP_HEADER = 1 -> Both header and navigation will be included in global wrapper
\t\t\t\$WRAP_HEADER = 2 -> Header will not be included in global wrapper, navigation will be included

\t\tWrap footer:
\t\t\t\$WRAP_FOOTER = 0 -> Footer will be outside of content wrapper
\t\t\t\$WRAP_FOOTER = 1 -> Footer will be inside content wrapper

\t\tQuick search position:
\t\t\t\$SEARCH_IN_NAVBAR = 0 -> Search bar will be displayed in header
\t\t\t\$SEARCH_IN_NAVBAR = 1 -> Search bar will be displayed in secondary navigation

\tEdit variables below:
";
        }
        // line 28
        echo "
";
        // line 29
        $value = 0;
        $context['definition']->set('STANDARD_FORUMS_LAYOUT', $value);
        // line 30
        $value = 1;
        $context['definition']->set('HIDE_FORUM_DESCRIPTION', $value);
        // line 31
        $value = 2;
        $context['definition']->set('WRAP_HEADER', $value);
        // line 32
        $value = 0;
        $context['definition']->set('WRAP_FOOTER', $value);
        // line 33
        $value = 0;
        $context['definition']->set('SEARCH_IN_NAVBAR', $value);
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute(($context["definition"] ?? null), "FALSE", [])) {
            // line 36
            echo "\tDo not edit code below!
";
        }
    }

    public function getTemplateName()
    {
        return "_style_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  81 => 35,  78 => 34,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  63 => 29,  60 => 28,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "_style_config.html", "");
    }
}
