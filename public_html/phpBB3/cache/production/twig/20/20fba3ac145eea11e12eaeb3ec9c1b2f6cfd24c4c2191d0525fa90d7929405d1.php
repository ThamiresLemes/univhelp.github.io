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

/* @dmzx_mchat/mchat_messages.html */
class __TwigTemplate_6ea7c5efc31e96316a24cbcc9d206de437a5cd7c82c6517f09c1f717dc8b22f0 extends \Twig\Template
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
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mchatrow", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mchatrow"]) {
            // line 4
            echo "<li id=\"mchat-message-";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_MESSAGE_ID", []);
            echo "\" class=\"row mchat-message";
            if ($this->getAttribute($context["mchatrow"], "MCHAT_IS_NOTIFICATION", [])) {
                echo " mchat-notification-message";
            }
            echo "\" data-mchat-id=\"";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_MESSAGE_ID", []);
            echo "\" data-mchat-user-id=\"";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_USER_ID", []);
            echo "\" data-mchat-username=\"";
            echo strip_tags($this->getAttribute($context["mchatrow"], "MCHAT_USERNAME", []));
            echo "\"";
            if ($this->getAttribute($context["mchatrow"], "MCHAT_USERNAME_COLOR", [])) {
                echo " data-mchat-usercolor=\"";
                echo $this->getAttribute($context["mchatrow"], "MCHAT_USERNAME_COLOR", []);
                echo "\"";
            }
            echo " data-mchat-message=\"";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_MESSAGE_EDIT", []);
            echo "\" data-mchat-message-time=\"";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_MESSAGE_TIME", []);
            echo "\"";
            if (((($context["MCHAT_EDIT_DELETE_LIMIT"] ?? null) &&  !($context["MCHAT_EDIT_DELETE_IGNORE"] ?? null)) && ($this->getAttribute($context["mchatrow"], "MCHAT_ALLOW_EDIT", []) || $this->getAttribute($context["mchatrow"], "MCHAT_ALLOW_DEL", [])))) {
                echo " data-mchat-edit-delete-limit=\"1\"";
            }
            echo " ";
            echo ">
\t";
            // line 5
            if (($context["S_MCHAT_AVATARS"] ?? null)) {
                // line 6
                echo "\t<div class=\"mchat-avatar\">
\t\t";
                // line 7
                if ($this->getAttribute($context["mchatrow"], "U_VIEWPROFILE", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["mchatrow"], "U_VIEWPROFILE", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                    echo "\">";
                }
                // line 8
                echo "\t\t";
                if ($this->getAttribute($context["mchatrow"], "MCHAT_USER_AVATAR", [])) {
                    echo $this->getAttribute($context["mchatrow"], "MCHAT_USER_AVATAR", []);
                } else {
                    echo "<img src=\"";
                    echo ($context["STYLE_PATH"] ?? null);
                    echo "/theme/images/no_avatar.gif\" class=\"mchat-avatar\" alt=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                    echo "\">";
                }
                // line 9
                echo "\t\t";
                if ($this->getAttribute($context["mchatrow"], "U_VIEWPROFILE", [])) {
                    echo "</a>";
                }
                // line 10
                echo "\t</div>
\t";
            }
            // line 12
            echo "\t<div class=\"mchat-message-wrapper\">
\t\t";
            // line 13
            $location = "@dmzx_mchat/mchat_messages_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("@dmzx_mchat/mchat_messages_icons.html", "@dmzx_mchat/mchat_messages.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "\t\t<div class=\"mchat-message-header\">
\t\t\t";
            // line 15
            // line 16
            echo "\t\t\t";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_USERNAME_FULL", []);
            echo " &bull; <span class=\"mchat-time\" title=\"";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_DATETIME", []);
            echo "\"";
            if (($this->getAttribute($context["mchatrow"], "MCHAT_MINUTES_AGO", []) !=  -1)) {
                echo " data-mchat-minutes-ago=\"";
                echo $this->getAttribute($context["mchatrow"], "MCHAT_MINUTES_AGO", []);
                echo "\" data-mchat-relative-update=\"";
                echo $this->getAttribute($context["mchatrow"], "MCHAT_RELATIVE_UPDATE", []);
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_TIME", []);
            echo "</span>
\t\t\t";
            // line 17
            // line 18
            echo "\t\t</div>
\t\t<div class=\"mchat-text\">
\t\t\t";
            // line 20
            // line 21
            echo "\t\t\t";
            echo $this->getAttribute($context["mchatrow"], "MCHAT_MESSAGE", []);
            echo "
\t\t\t";
            // line 22
            // line 23
            echo "\t\t</div>
\t</div>
</li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mchatrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_messages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 28,  159 => 23,  158 => 22,  153 => 21,  152 => 20,  148 => 18,  147 => 17,  130 => 16,  129 => 15,  126 => 14,  114 => 13,  111 => 12,  107 => 10,  102 => 9,  91 => 8,  83 => 7,  80 => 6,  78 => 5,  48 => 4,  31 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_messages.html", "");
    }
}
