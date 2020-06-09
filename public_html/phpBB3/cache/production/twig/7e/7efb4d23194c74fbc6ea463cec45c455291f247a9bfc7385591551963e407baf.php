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

/* @dmzx_mchat/mchat_navlink.html */
class __TwigTemplate_56fe92414c19f86f14761489d92faf0d0861ac9a594e285afa1e31ff16805a37 extends \Twig\Template
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
        $value = ((((($context["U_MCHAT_CUSTOM_PAGE"] ?? null) || ($context["U_MCHAT_ARCHIVE"] ?? null)) || ($context["U_MCHAT_RULES"] ?? null)) || ($context["MCHAT_SOUND_ENABLED"] ?? null)) || (($context["MCHAT_ALLOW_USE"] ?? null) && ($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null)));
        $context['definition']->set('MCHAT_NAVLINK_DISPLAY', $value);
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["definition"] ?? null), "MCHAT_NAVLINK_DISPLAY", [])) {
            // line 6
            echo "<li class=\"mchat-nav\" data-skip-responsive=\"true\" data-select-match=\"mchat\">
\t<div class=\"mchat-nav-container dropdown-container\">
\t\t<a href=\"";
            // line 8
            echo ((($context["U_MCHAT_CUSTOM_PAGE"] ?? null)) ? (($context["U_MCHAT_CUSTOM_PAGE"] ?? null)) : ("#"));
            echo "\" title=\"";
            echo ($context["MCHAT_TITLE_HINT"] ?? null);
            echo "\" class=\"mchat-nav-link-title dropdown-trigger\" role=\"menuitem\">
\t\t\t<i class=\"icon fa fa-weixin fa-fw\" aria-hidden=\"true\"></i><span class=\"mchat-nav-link\">";
            // line 9
            echo ($context["MCHAT_TITLE"] ?? null);
            echo "</span><i class=\"icon fa fa-caret-down mchat-nav-caret\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"mchat-nav-menu dropdown-contents\" role=\"menu\">
\t\t\t\t";
            // line 14
            // line 15
            echo "\t\t\t\t";
            if (($context["U_MCHAT_CUSTOM_PAGE"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t<li class=\"mchat-nav-custom-page\">
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo ($context["U_MCHAT_CUSTOM_PAGE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_CUSTOM_PAGE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa fa-weixin fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 18
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_CUSTOM_PAGE");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
            // line 23
            echo "\t\t\t\t";
            if (($context["U_MCHAT_ARCHIVE"] ?? null)) {
                // line 24
                echo "\t\t\t\t\t<li class=\"mchat-nav-archive\">
\t\t\t\t\t\t<a href=\"";
                // line 25
                echo ($context["U_MCHAT_ARCHIVE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_ARCHIVE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa fa-history fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 26
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_ARCHIVE");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t";
            // line 31
            echo "\t\t\t\t";
            if (($context["U_MCHAT_RULES"] ?? null)) {
                // line 32
                echo "\t\t\t\t\t<li class=\"mchat-nav-rules\">
\t\t\t\t\t\t<a href=\"";
                // line 33
                echo ($context["U_MCHAT_RULES"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_RULES");
                echo "\" role=\"menuitem\" data-mchat-action=\"rules\">
\t\t\t\t\t\t\t<i class=\"icon fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 34
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_RULES");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t";
            // line 39
            echo "\t\t\t\t";
            if (($context["MCHAT_PAGE"] ?? null)) {
                // line 40
                echo "\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t";
                // line 41
                // line 42
                echo "\t\t\t\t\t";
                if (($context["MCHAT_SOUND_ENABLED"] ?? null)) {
                    // line 43
                    echo "\t\t\t\t\t\t<li id=\"mchat-sound\" class=\"mchat-nav-item-enabled\" data-mchat-action=\"toggle_sound\">
\t\t\t\t\t\t\t<a href=\"#\" title=\"";
                    // line 44
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_USESOUND");
                    echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<span class=\"mchat-nav-item-enabled\"><i class=\"icon fa fa-volume-up fa-fw\" aria-hidden=\"true\"></i>";
                    // line 45
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SOUND_ON");
                    echo "</span>
\t\t\t\t\t\t\t\t<span class=\"mchat-nav-item-disabled\"><i class=\"icon fa fa-volume-off fa-fw\" aria-hidden=\"true\"></i>";
                    // line 46
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SOUND_OFF");
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t";
                // line 51
                echo "\t\t\t\t\t";
                if ((($context["MCHAT_ALLOW_USE"] ?? null) && ($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null))) {
                    // line 52
                    echo "\t\t\t\t\t\t<li id=\"mchat-enter\" class=\"mchat-nav-item-enabled\" data-mchat-action=\"toggle_enter\">
\t\t\t\t\t\t\t<a href=\"#\" title=\"";
                    // line 53
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ENTER");
                    echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<span class=\"mchat-nav-item-enabled\"><i class=\"icon fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i>";
                    // line 54
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ENTER_SUBMIT");
                    echo "</span>
\t\t\t\t\t\t\t\t<span class=\"mchat-nav-item-disabled\"><i class=\"icon fa fa-chevron-down fa-fw\" aria-hidden=\"true\"></i>";
                    // line 55
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ENTER_LINEBREAK");
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t";
                // line 60
                echo "\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t";
            // line 62
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
</li>
";
        }
        // line 67
        echo "
";
        // line 68
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_navlink.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 68,  189 => 67,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  168 => 55,  164 => 54,  160 => 53,  157 => 52,  154 => 51,  152 => 50,  145 => 46,  141 => 45,  137 => 44,  134 => 43,  131 => 42,  130 => 41,  127 => 40,  124 => 39,  122 => 38,  115 => 34,  109 => 33,  106 => 32,  103 => 31,  101 => 30,  94 => 26,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  73 => 18,  67 => 17,  64 => 16,  61 => 15,  60 => 14,  52 => 9,  46 => 8,  42 => 6,  40 => 5,  37 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_navlink.html", "");
    }
}
