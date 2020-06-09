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

/* notification_dropdown.html */
class __TwigTemplate_92f1c79546621ed69c935462f30c5736966c1345cf856dcc422879108e2a3d85 extends \Twig\Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\">
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["U_NOTIFICATION_SETTINGS"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 8
        if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo ($context["U_MARK_ALL_NOTIFICATIONS"] ?? null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t</span>
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 15
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", []))) {
            // line 16
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notifications", []));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 21
            echo "\t\t\t\t<li class=\"dropdown-notification ";
            if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                echo " bg3";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", [])) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", []);
            }
            if ( !$this->getAttribute($context["notifications"], "URL", [])) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 22
            if ($this->getAttribute($context["notifications"], "URL", [])) {
                // line 23
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", []);
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", []);
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", []);
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", [])) {
                echo $this->getAttribute($context["notifications"], "AVATAR", []);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.png\" alt=\"\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 27
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", []);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute($context["notifications"], "REFERENCE", [])) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", []);
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", [])) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", []);
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", [])) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", []);
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute($context["notifications"], "TIME", []);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($context["notifications"], "URL", [])) {
                echo "</a>";
            }
            // line 34
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "UNREAD", [])) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", []);
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "\">
\t\t\t\t\t\t\t <span class=\"sr-only\">";
                // line 36
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 44
        echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 44,  176 => 41,  169 => 39,  163 => 36,  156 => 35,  153 => 34,  149 => 33,  143 => 31,  136 => 30,  129 => 29,  123 => 28,  119 => 27,  116 => 26,  107 => 25,  95 => 23,  93 => 22,  79 => 21,  74 => 20,  68 => 17,  65 => 16,  63 => 15,  57 => 11,  49 => 9,  47 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "notification_dropdown.html", "");
    }
}
