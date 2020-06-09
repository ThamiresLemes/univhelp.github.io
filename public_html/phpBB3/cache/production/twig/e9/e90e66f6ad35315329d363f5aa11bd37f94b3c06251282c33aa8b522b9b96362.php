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

/* @dmzx_mchat/mchat_messages_icons.html */
class __TwigTemplate_635b2847ef5ebfa71325ab1e0a3ac5390a0bd8e5dfbf0b36806e8462f66a90c4 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 4
            echo "\t";
            $value = ((($context["MCHAT_ALLOW_USE"] ?? null) &&  !$this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_IS_POSTER", [])) && (($context["MCHAT_PAGE"] ?? null) != "archive"));
            $context['definition']->set('MCHAT_ALLOW_MENTION', $value);
            // line 5
            echo "\t";
            $value = (((($context["MCHAT_ALLOW_USE"] ?? null) && ($context["S_BBCODE_ALLOWED"] ?? null)) && ($context["MCHAT_ALLOW_QUOTE"] ?? null)) && (($context["MCHAT_PAGE"] ?? null) != "archive"));
            $context['definition']->set('MCHAT_ALLOW_QUOTE', $value);
            // line 6
            echo "\t";
            $value = ((((($context["MCHAT_ALLOW_USE"] ?? null) && ($context["S_BBCODE_ALLOWED"] ?? null)) && ($context["MCHAT_ALLOW_LIKE"] ?? null)) && (($context["MCHAT_PAGE"] ?? null) != "archive")) &&  !$this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_IS_POSTER", []));
            $context['definition']->set('MCHAT_ALLOW_LIKE', $value);
            // line 7
            echo "\t";
            $value = ((($context["MCHAT_ALLOW_PM"] ?? null) && $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_PM", [])) && $this->getAttribute(($context["mchatrow"] ?? null), "U_VIEWPROFILE", []));
            $context['definition']->set('MCHAT_ALLOW_PM', $value);
            // line 8
            echo "\t";
            $value = (($context["MCHAT_ALLOW_IP"] ?? null) && true);
            $context['definition']->set('MCHAT_ALLOW_IP', $value);
            // line 9
            echo "\t";
            $value = (($context["MCHAT_ALLOW_PERMISSIONS"] ?? null) && true);
            $context['definition']->set('MCHAT_ALLOW_PERMISSIONS', $value);
            // line 10
            echo "\t";
            $value = ($this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_ALLOW_EDIT", []) &&  !$this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_IS_NOTIFICATION", []));
            $context['definition']->set('MCHAT_ALLOW_EDIT', $value);
            // line 11
            echo "\t";
            $value = $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_ALLOW_DEL", []);
            $context['definition']->set('MCHAT_ALLOW_DEL', $value);
            // line 12
            echo "\t";
            if ((((((((($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_MENTION", []) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_QUOTE", [])) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_LIKE", [])) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_PM", [])) || ($context["MCHAT_ALLOW_IP"] ?? null)) || ($context["MCHAT_ALLOW_PERMISSIONS"] ?? null)) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_EDIT", [])) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_DEL", [])) || $this->getAttribute(($context["definition"] ?? null), "MCHAT_ADD_CUSTOM_BUTTON", []))) {
                // line 13
                echo "\t\t<ul class=\"mchat-buttons\">
\t\t\t";
                // line 14
                // line 15
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_MENTION", [])) {
                    echo "<li><a href=\"#\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_RESPOND");
                    echo "\" data-mchat-action=\"mention\"><i class=\"fa fa-at\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_RESPOND");
                    echo "</span></i></a></li>";
                }
                // line 16
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_QUOTE", [])) {
                    echo "<li><a href=\"#\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                    echo "\" data-mchat-action=\"quote\"><i class=\"fa fa-quote-left\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                    echo "</span></i></a></li>";
                }
                // line 17
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_LIKE", [])) {
                    echo "<li><a href=\"#\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LIKE");
                    echo "\" data-mchat-action=\"like\"><i class=\"fa fa-thumbs-o-up\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LIKE");
                    echo "</span></i></a></li>";
                }
                // line 18
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_PM", [])) {
                    echo "<li><a href=\"";
                    echo $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_PM", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SEND_PM");
                    echo "\"><i class=\"fa fa-envelope-o\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SEND_PM");
                    echo "</span></i></a></li>";
                }
                // line 19
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_IP", [])) {
                    echo "<li><a href=\"";
                    echo $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_U_IP", []);
                    echo "\" title=\"";
                    echo $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_WHOIS_USER", []);
                    echo "\" data-mchat-action=\"ip\"><i class=\"fa fa-wifi\"><span>";
                    echo $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_WHOIS_USER", []);
                    echo "</span></i></a></li>";
                }
                // line 20
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_PERMISSIONS", [])) {
                    echo "<li><a href=\"";
                    echo $this->getAttribute(($context["mchatrow"] ?? null), "MCHAT_U_PERMISSIONS", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PERMISSIONS");
                    echo "\"><i class=\"fa fa-exclamation-triangle\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PERMISSIONS");
                    echo "</span></i></a></li>";
                }
                // line 21
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_EDIT", [])) {
                    echo "<li><a href=\"#\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_EDIT");
                    echo "\" data-mchat-action=\"edit\"><i class=\"fa fa-pencil\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_EDIT");
                    echo "</span></i></a></li>";
                }
                // line 22
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_ALLOW_DEL", [])) {
                    echo "<li><a href=\"#\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" data-mchat-action=\"del\"><i class=\"fa fa-trash-o\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "</span></i></a></li>";
                }
                // line 23
                echo "\t\t\t";
                // line 24
                echo "\t\t</ul>
\t";
            }
        }
        // line 27
        echo "
";
        // line 28
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_messages_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  160 => 27,  155 => 24,  153 => 23,  144 => 22,  135 => 21,  124 => 20,  113 => 19,  102 => 18,  93 => 17,  84 => 16,  75 => 15,  74 => 14,  71 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  34 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_messages_icons.html", "");
    }
}
