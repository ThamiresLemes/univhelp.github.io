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

/* overall_header.html */
class __TwigTemplate_c57ea568ac3ef4b76b9ff371b8329cd1d9f5fb0aecda5fccf51656d5e7a7f98f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        $location = "_style_config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("_style_config.html", "overall_header.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "
";
        // line 12
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 18
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 19
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 20
            echo "\t";
        }
        // line 22
        echo "
";
        // line 23
        if (($context["U_CANONICAL"] ?? null)) {
            // line 24
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 28
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 43
        echo "
<link href=\"";
        // line 44
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 45
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 47
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 48
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 50
        echo "
";
        // line 51
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 52
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 54
        echo "
";
        // line 55
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 56
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 58
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 60
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 63
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 64
        echo "
";
        // line 65
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", []);
        echo "

";
        // line 67
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 68
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 70
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\" data-online-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
        echo "\">

";
        // line 72
        // line 73
        echo "
";
        // line 74
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_HEADER", []) == 1)) {
            // line 75
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 77
        echo "\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\" class=\"page-width\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t";
        // line 80
        // line 81
        echo "\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\" class=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 84
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\"><img src=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/logo.png\" data-src-hd=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/logo_hd.png\" alt=\"";
        echo ($context["SITENAME"] ?? null);
        echo "\"/></a>
\t\t\t\t<p class=\"sitename\">";
        // line 85
        echo ($context["SITENAME"] ?? null);
        echo "</p>
\t\t\t\t<p>";
        // line 86
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 87
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 90
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_searchbox_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 91
        echo "\t\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 92
            echo "\t\t\t";
            ob_start();
            // line 93
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 94
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 96
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 97
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 98
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
            // line 100
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 101
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 103
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('SEARCH_BOX', $value);
            // line 108
            echo "\t\t\t";
            if (($this->getAttribute(($context["definition"] ?? null), "SEARCH_IN_NAVBAR", []) == 0)) {
                echo $this->getAttribute(($context["definition"] ?? null), "SEARCH_BOX", []);
            }
            // line 109
            echo "\t\t\t";
        }
        // line 110
        echo "\t\t\t";
        // line 111
        echo "
\t\t\t</div>
\t\t\t";
        // line 113
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_header_headerbar_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 114
        echo "\t\t</div>

";
        // line 116
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_HEADER", []) == 2)) {
            // line 117
            echo "</div>
<div id=\"wrap\" class=\"page-width\">
<div>
";
        }
        // line 121
        echo "
\t\t";
        // line 122
        // line 123
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 123)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 124
        echo "\t</div>

";
        // line 126
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_HEADER", []) == 0)) {
            // line 127
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 129
        echo "
\t";
        // line 130
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_page_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 131
        echo "
\t<a id=\"start_here\" class=\"top-anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 134
        echo $this->getAttribute(($context["definition"] ?? null), "BREADCRUMBS", []);
        echo "
\t\t";
        // line 135
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 136
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 138
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 142
        echo "
\t\t";
        // line 143
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 143,  509 => 142,  499 => 138,  495 => 136,  493 => 135,  489 => 134,  484 => 131,  479 => 130,  476 => 129,  472 => 127,  470 => 126,  466 => 124,  453 => 123,  452 => 122,  449 => 121,  443 => 117,  441 => 116,  437 => 114,  432 => 113,  428 => 111,  426 => 110,  423 => 109,  418 => 108,  409 => 103,  404 => 101,  398 => 100,  393 => 98,  389 => 97,  381 => 96,  376 => 94,  373 => 93,  370 => 92,  367 => 91,  362 => 90,  356 => 87,  352 => 86,  348 => 85,  328 => 84,  323 => 81,  322 => 80,  317 => 77,  313 => 75,  311 => 74,  308 => 73,  307 => 72,  296 => 70,  292 => 68,  287 => 67,  282 => 65,  279 => 64,  266 => 63,  258 => 60,  254 => 58,  246 => 56,  244 => 55,  241 => 54,  233 => 52,  231 => 51,  228 => 50,  220 => 48,  218 => 47,  213 => 45,  209 => 44,  206 => 43,  189 => 28,  187 => 27,  184 => 26,  178 => 24,  176 => 23,  173 => 22,  170 => 20,  157 => 19,  144 => 18,  133 => 17,  122 => 16,  111 => 15,  100 => 14,  89 => 13,  87 => 12,  84 => 11,  72 => 10,  47 => 8,  43 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
