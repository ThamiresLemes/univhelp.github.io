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

/* navbar_header.html */
class __TwigTemplate_feb3546f6686db77860edac82a11d16abd37465d6385ff82b7da27897d73562a extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "\t";
        // line 3
        echo "
\t";
        // line 4
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 5
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 6
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 7
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 8
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 9
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 13
            echo "\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 14
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 15
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 20
            echo "\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 23
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>\t
\t";
        }
        $context["quick_links_first_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
";
        // line 46
        ob_start(function () { return ''; });
        // line 47
        echo "\t";
        $context["quick_links_last_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
";
        // line 50
        ob_start(function () { return ''; });
        echo twig_trim_filter(($context["quick_links_first_block"] ?? null));
        echo twig_trim_filter(($context["quick_links_last_block"] ?? null));
        $context["quick_links_all"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
<div class=\"navbar tabbed not-static\" role=\"navigation\">
\t<div class=\"inner page-width\">
\t\t<div class=\"nav-tabs\" data-current-page=\"";
        // line 54
        if ($this->getAttribute(($context["definition"] ?? null), "NAV_SECTION", [])) {
            echo $this->getAttribute(($context["definition"] ?? null), "NAV_SECTION", []);
        } else {
            echo ($context["SCRIPT_NAME"] ?? null);
        }
        echo "\">
\t\t\t<ul class=\"leftside\">
\t\t\t\t<li id=\"quick-links\" class=\"quick-links tab responsive-menu dropdown-container";
        // line 56
        if ((($context["quick_links_all"] ?? null) == "")) {
            echo " empty";
        }
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-trigger\">";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 61
        echo ($context["quick_links_first_block"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 62
        if (twig_trim_filter(($context["quick_links_last_block"] ?? null))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 64
            echo ($context["quick_links_last_block"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 69
        // line 70
        echo "\t\t\t\t";
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 72
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t<li class=\"tab forums selected\" data-responsive-class=\"small-icon icon-forums\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 76
        echo ($context["U_INDEX"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMS");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 78
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 79
            echo "\t\t\t\t\t<li class=\"tab members dropdown-container\" data-select-match=\"member\" data-responsive-class=\"small-icon icon-members\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-trigger\" href=\"";
            // line 80
            echo ($context["U_MEMBERLIST"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 84
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 86
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 87
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 93
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 94
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t";
        // line 103
        echo "\t\t\t</ul>
\t\t\t<ul class=\"rightside\" role=\"menu\">
\t\t\t\t";
        // line 105
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_header_navigation_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 106
        echo "\t\t\t\t<li class=\"tab faq\" data-select-match=\"faq\" data-responsive-class=\"small-icon icon-faq\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 107
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 108
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 111
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 112
        echo "\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t<li class=\"tab acp\" data-last-responsive=\"true\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 114
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 120
            echo "\t\t\t\t\t<li class=\"tab mcp\" data-last-responsive=\"true\" data-select-match=\"mcp\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 121
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 127
            echo "\t\t\t\t\t";
            // line 128
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"tab account dropdown-container\" data-skip-responsive=\"true\" data-select-match=\"ucp\">
\t\t\t\t\t\t";
            // line 129
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"nav-link dropdown-trigger\">";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 133
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 135
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 136
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "
\t\t\t\t\t\t\t\t";
            // line 141
            // line 142
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 144
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 148
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 149
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 150
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 151
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 155
            echo "
\t\t\t\t\t\t\t\t";
            // line 156
            // line 157
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 160
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 161
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 167
            // line 168
            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 169
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 170
                echo "\t\t\t\t\t\t<li class=\"tab pm";
                if ((($context["PRIVATE_MESSAGE_COUNT"] ?? null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"pm\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 171
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 172
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 175
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 181
                echo "\t\t\t\t\t\t<li class=\"tab notifications dropdown-container";
                if ((($context["NOTIFICATIONS_COUNT"] ?? null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"notifications\">
\t\t\t\t\t\t\t<a href=\"";
                // line 182
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"nav-link dropdown-trigger\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 186
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t";
                // line 189
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 189)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 190
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 192
            echo "\t\t\t\t\t";
            // line 193
            echo "\t\t\t\t";
        }
        // line 194
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 195
            echo "\t\t\t\t\t<li class=\"tab logout\"  data-skip-responsive=\"true\"><a class=\"nav-link\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 197
            echo "\t\t\t\t\t<li class=\"tab login\"  data-skip-responsive=\"true\" data-select-match=\"login\"><a class=\"nav-link\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 198
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                // line 199
                echo "\t\t\t\t\t\t<li class=\"tab register\" data-skip-responsive=\"true\" data-select-match=\"register\"><a class=\"nav-link\" href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t";
            // line 202
            echo "\t\t\t\t";
        }
        // line 203
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"navbar secondary";
        // line 208
        if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", []) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []))) {
            echo " with-search";
        }
        echo "\">
\t<ul role=\"menubar\">
\t\t";
        // line 210
        ob_start(function () { return ''; });
        // line 211
        echo "\t\t";
        // line 212
        echo "\t\t";
        if (twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "NAVLINKS", []))) {
            // line 213
            echo "\t\t\t";
            echo $this->getAttribute(($context["definition"] ?? null), "NAVLINKS", []);
            echo "
\t\t";
        }
        // line 215
        echo "\t\t";
        if (( !twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "NAVLINKS", [])) || ($this->getAttribute(($context["definition"] ?? null), "NAVLINKS_SHOW_DEFAULT", []) == 1))) {
            // line 216
            echo "\t\t\t";
            if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 217
                echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 218
                echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                echo "\" title=\"";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\" data-toggle-text=\"";
                echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\">
\t\t\t\t\t<i class=\"icon ";
                // line 219
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            }
            // line 223
            echo "\t\t";
        }
        // line 224
        echo "\t\t";
        // line 225
        echo "\t\t";
        $context["secondary_links"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 226
        echo "\t\t";
        if (twig_trim_filter(($context["secondary_links"] ?? null))) {
            // line 227
            echo "\t\t\t";
            echo ($context["secondary_links"] ?? null);
            echo "
\t\t\t";
            // line 228
            if (($this->getAttribute(($context["definition"] ?? null), "NAVLINKS_SHOW_DEFAULT", []) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                // line 229
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", []) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo ($context["U_SEARCH"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 230
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 231
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 233
                echo "\t\t\t";
            }
            // line 234
            echo "\t\t";
        } else {
            // line 235
            echo "\t\t\t";
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 236
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", []) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo ($context["U_SEARCH"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 237
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 238
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 240
                echo "\t\t\t";
            }
            // line 241
            echo "\t\t\t";
            if ( !($context["S_REGISTERED_USER"] ?? null)) {
                // line 242
                echo "\t\t\t\t<li class=\"small-icon icon-login\"><a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a></li>
\t\t\t\t";
                // line 243
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    // line 244
                    echo "\t\t\t\t\t<li class=\"small-icon icon-register\"><a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 246
                echo "\t\t\t";
            } elseif ( !($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 247
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\" class=\"small-icon icon-profile\">";
                echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
                echo "</a></li>
\t\t\t";
            }
            // line 249
            echo "\t\t";
        }
        // line 250
        echo "
\t\t";
        // line 251
        if ((($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", []) == 1) && $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []))) {
            // line 252
            echo "\t\t\t<li class=\"search-box not-responsive\">";
            echo $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []);
            echo "</li>
\t\t";
        }
        // line 254
        echo "\t</ul>
</div>

";
        // line 257
        ob_start();
        // line 258
        echo "<div class=\"navbar\">
\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 260
        $value = " itemtype=\"http://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 261
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 262
        echo "\t\t";
        // line 263
        echo "\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t";
        // line 264
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 265
            echo "\t\t\t\t<span class=\"crumb\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo " data-navbar-reference=\"home\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 267
        echo "\t\t\t";
        // line 268
        echo "\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>
\t\t\t";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 270
            echo "\t\t\t\t";
            // line 271
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\"><span itemprop=\"name\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 272
            // line 273
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t";
        // line 275
        echo "\t\t</li>
\t\t";
        // line 276
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_breadcrumbs_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 277
        echo "
\t\t";
        // line 278
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 279
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 280
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 281
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 285
        echo "\t\t<li class=\"rightside dropdown-container icon-only\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger time\" title=\"";
        // line 286
        echo ($context["CURRENT_TIME"] ?? null);
        echo "\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t<li>";
        // line 290
        echo ($context["CURRENT_TIME"] ?? null);
        echo "</li>
\t\t\t\t\t<li>";
        // line 291
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
";
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('BREADCRUMBS', $value);
        // line 298
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_HEADER", []) != 0)) {
            // line 299
            echo "\t";
            echo $this->getAttribute(($context["definition"] ?? null), "BREADCRUMBS", []);
            echo "
\t";
            // line 300
            $value = "";
            $context['definition']->set('BREADCRUMBS', $value);
        }
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  881 => 300,  876 => 299,  874 => 298,  863 => 291,  859 => 290,  852 => 286,  849 => 285,  842 => 281,  836 => 280,  833 => 279,  831 => 278,  828 => 277,  823 => 276,  820 => 275,  818 => 274,  812 => 273,  811 => 272,  795 => 271,  793 => 270,  789 => 269,  773 => 268,  771 => 267,  758 => 265,  756 => 264,  753 => 263,  751 => 262,  748 => 261,  745 => 260,  741 => 258,  739 => 257,  734 => 254,  728 => 252,  726 => 251,  723 => 250,  720 => 249,  712 => 247,  709 => 246,  701 => 244,  699 => 243,  690 => 242,  687 => 241,  684 => 240,  676 => 238,  674 => 237,  663 => 236,  660 => 235,  657 => 234,  654 => 233,  646 => 231,  644 => 230,  633 => 229,  631 => 228,  626 => 227,  623 => 226,  620 => 225,  618 => 224,  615 => 223,  602 => 219,  586 => 218,  583 => 217,  580 => 216,  577 => 215,  571 => 213,  568 => 212,  566 => 211,  564 => 210,  557 => 208,  550 => 203,  547 => 202,  545 => 201,  537 => 199,  535 => 198,  526 => 197,  516 => 195,  513 => 194,  510 => 193,  508 => 192,  504 => 190,  492 => 189,  486 => 186,  480 => 183,  476 => 182,  469 => 181,  466 => 180,  458 => 175,  452 => 172,  448 => 171,  441 => 170,  439 => 169,  436 => 168,  435 => 167,  426 => 161,  420 => 160,  415 => 157,  414 => 156,  411 => 155,  404 => 151,  398 => 150,  395 => 149,  393 => 148,  387 => 145,  381 => 144,  377 => 142,  376 => 141,  373 => 140,  366 => 136,  362 => 135,  359 => 134,  357 => 133,  347 => 129,  344 => 128,  342 => 127,  339 => 126,  332 => 122,  326 => 121,  323 => 120,  320 => 119,  313 => 115,  307 => 114,  304 => 113,  301 => 112,  296 => 111,  290 => 108,  284 => 107,  281 => 106,  276 => 105,  272 => 103,  270 => 102,  264 => 98,  257 => 94,  253 => 93,  250 => 92,  247 => 91,  240 => 87,  236 => 86,  233 => 85,  231 => 84,  222 => 80,  219 => 79,  217 => 78,  210 => 76,  207 => 75,  199 => 72,  196 => 71,  193 => 70,  192 => 69,  187 => 66,  182 => 64,  179 => 63,  177 => 62,  173 => 61,  166 => 57,  160 => 56,  151 => 54,  146 => 51,  141 => 50,  138 => 49,  135 => 47,  133 => 46,  130 => 45,  122 => 40,  118 => 39,  110 => 34,  106 => 33,  99 => 29,  95 => 28,  92 => 27,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  68 => 16,  64 => 15,  61 => 14,  58 => 13,  51 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
