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
class __TwigTemplate_ce4cfcb45249e5d68d7599605ff97f0320cf56c14bdd714455f5b8ef896d7f77 extends \Twig\Template
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
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
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
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
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
            // line 12
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
            // line 13
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
            // line 14
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
            // line 15
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
            // line 16
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
            // line 17
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
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
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
        // line 48
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 49
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 52
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 53
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 55
        echo "
";
        // line 56
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 57
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 59
        echo "
";
        // line 60
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 61
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 63
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 65
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 68
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
        // line 69
        echo "
";
        // line 70
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", []);
        echo "

";
        // line 72
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 73
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 75
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 77
        // line 78
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t";
        // line 83
        // line 84
        echo "\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\" class=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 87
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
        echo "\"><span class=\"site_logo\"></span></a>
\t\t\t\t<h1>";
        // line 88
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t\t\t<p>";
        // line 89
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 90
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 93
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_searchbox_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 94
        echo "\t\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 95
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 96
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 98
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 99
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 100
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
            // line 102
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 103
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 105
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
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
\t\t";
        // line 115
        // line 116
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 116)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 117
        echo "\t</div>

\t";
        // line 119
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_rightheaderimage', '__main__'));
        $this->env->loadTemplate('@hifikabin_rightheaderimage/event/overall_header_page_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 120
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 123
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 124
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 126
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 130
        echo "
\t\t";
        // line 131
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
        return array (  454 => 131,  451 => 130,  441 => 126,  437 => 124,  435 => 123,  430 => 120,  425 => 119,  421 => 117,  408 => 116,  407 => 115,  404 => 114,  399 => 113,  395 => 111,  393 => 110,  385 => 105,  380 => 103,  374 => 102,  369 => 100,  365 => 99,  357 => 98,  352 => 96,  349 => 95,  346 => 94,  341 => 93,  335 => 90,  331 => 89,  327 => 88,  313 => 87,  308 => 84,  307 => 83,  300 => 78,  299 => 77,  290 => 75,  286 => 73,  281 => 72,  276 => 70,  273 => 69,  260 => 68,  252 => 65,  248 => 63,  240 => 61,  238 => 60,  235 => 59,  227 => 57,  225 => 56,  222 => 55,  214 => 53,  212 => 52,  207 => 50,  203 => 49,  198 => 48,  181 => 33,  179 => 32,  169 => 24,  163 => 22,  161 => 21,  158 => 20,  155 => 18,  142 => 17,  129 => 16,  118 => 15,  107 => 14,  96 => 13,  85 => 12,  74 => 11,  72 => 10,  47 => 8,  43 => 7,  33 => 2,  30 => 1,);
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
