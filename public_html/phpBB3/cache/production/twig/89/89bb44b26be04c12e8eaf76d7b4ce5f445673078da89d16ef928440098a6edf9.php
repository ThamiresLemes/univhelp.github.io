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

/* search_results.html */
class __TwigTemplate_c48a95d33aeeabb3281499dfaf992b5906e39e1a7433e19ed2d3916b44ca2ae8 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 7
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</strong></p>";
        }
        // line 8
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 11
            echo "\t<p class=\"return-link\">
\t\t<a class=\"arrow-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 13
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
";
        } else {
            // line 17
            echo "\t<p class=\"advanced-search-link\">
\t\t<a class=\"arrow-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 19
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
";
        }
        // line 23
        echo "
";
        // line 24
        // line 25
        echo "
";
        // line 26
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 27
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 29
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 30
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 31
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 33
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 34
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 38
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 44
            echo "
\t\t";
            // line 45
            // line 46
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 49
            echo "\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t";
            // line 50
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 51
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 51)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 52
                echo "\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 60
            echo "
\t";
            // line 61
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", []))) {
                // line 62
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 68
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 69
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 70
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 71
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", []));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 78
                    echo "\t\t\t";
                    // line 79
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", []) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"row-item ";
                    // line 80
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", []);
                    echo "\">
\t\t\t\t\t<dt";
                    // line 81
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", [])) {
                        echo " style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", []);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 82
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", []);
                        echo "\" class=\"row-item-link\"></a>";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t";
                    // line 84
                    // line 85
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", []);
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 87
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_POST");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", []);
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", []);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 91
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", []))) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 93
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", [])) {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 98
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", [])) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 103
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
                    // line 107
                    // line 108
                    echo "
\t\t\t\t\t\t\t";
                    // line 109
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t";
                        // line 111
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", []);
                        echo " &laquo; <a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", []);
                        echo "</a>
\t\t\t\t\t\t\t\t\t<br />";
                        // line 112
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", []);
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", []);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 114
                        if ($this->getAttribute($context["searchresults"], "TOPIC_REPLIES", [])) {
                            echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", []);
                            echo "</strong></span>";
                        }
                        // line 115
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "
\t\t\t\t\t\t\t<div class=\"responsive-hide left-box\">
\t\t\t\t\t\t\t\t";
                    // line 118
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", [])) {
                        echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 119
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", [])) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", []);
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", []);
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", []);
                    echo "</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                    // line 123
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", []))) {
                        // line 124
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 127
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                                // line 129
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 130
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 131
$context["pagination"], "S_IS_NEXT", [])) {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a class=\"button\" href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 134
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "
\t\t\t\t\t\t\t";
                    // line 139
                    // line 140
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 142
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 143
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
                    // line 145
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", []);
                    // line 146
                    echo "\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 148
                        echo ($context["VIEW_LATEST_POST"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 151
                    echo "\t\t\t\t\t\t\t<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", []);
                    echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 156
                    // line 157
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 163
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 165
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 169
            echo "
";
        } else {
            // line 171
            echo "
\t";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 173
                echo "\t\t";
                // line 174
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", [])) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 177
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", [])) {
                    // line 178
                    echo "\t\t<div class=\"postbody\"><div class=\"postbody-inner\">
\t\t\t";
                    // line 179
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", []);
                    echo "
\t\t</div></div>
\t";
                } else {
                    // line 182
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 183
                    // line 184
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", []);
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 185
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", []);
                    echo "</dd>
\t\t\t<dd>";
                    // line 186
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", []);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 187
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", []);
                    echo "</a></dd>
\t\t\t";
                    // line 188
                    // line 189
                    echo "\t\t\t<dd>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", []);
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 190
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", []);
                    echo "</strong></dd>
\t\t\t";
                    // line 191
                    // line 192
                    echo "\t\t</dl>

\t\t<div class=\"postbody\"><div class=\"postbody-inner\">
\t\t\t<h3><a href=\"";
                    // line 195
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", []);
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 196
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", []);
                    echo "</div>
\t\t\t";
                    // line 197
                    // line 198
                    echo "\t\t</div></div>
\t";
                }
                // line 200
                echo "
\t";
                // line 201
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", [])) {
                    // line 202
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li>
\t\t\t\t<a href=\"";
                    // line 204
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", []);
                    echo "\" class=\"arrow-";
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo "\">
\t\t\t\t\t<i class=\"icon fa-angle-";
                    // line 205
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_POST");
                    echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t";
                }
                // line 210
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 213
                // line 214
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 215
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 217
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 222
        echo "
<div class=\"action-bar bottom\">
\t";
        // line 224
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", [])) && (($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null)))) {
            // line 225
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 226
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 226)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 227
            echo "\t</form>
\t\t";
        }
        // line 229
        echo "
\t<div class=\"pagination\">
\t\t";
        // line 231
        echo ($context["SEARCH_MATCHES"] ?? null);
        echo "
\t\t";
        // line 232
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
            // line 233
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 233)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 234
            echo "\t\t";
        } else {
            // line 235
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 237
        echo "\t</div>
</div>

";
        // line 240
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 240)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 241
        echo "
";
        // line 242
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 242)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  825 => 242,  822 => 241,  810 => 240,  805 => 237,  799 => 235,  796 => 234,  783 => 233,  781 => 232,  777 => 231,  773 => 229,  769 => 227,  757 => 226,  752 => 225,  750 => 224,  746 => 222,  735 => 217,  731 => 215,  726 => 214,  725 => 213,  720 => 210,  710 => 205,  704 => 204,  700 => 202,  698 => 201,  695 => 200,  691 => 198,  690 => 197,  686 => 196,  680 => 195,  675 => 192,  674 => 191,  667 => 190,  659 => 189,  658 => 188,  649 => 187,  640 => 186,  636 => 185,  629 => 184,  628 => 183,  625 => 182,  619 => 179,  616 => 178,  614 => 177,  600 => 174,  598 => 173,  593 => 172,  590 => 171,  586 => 169,  579 => 165,  575 => 163,  568 => 158,  562 => 157,  561 => 156,  552 => 151,  546 => 148,  539 => 147,  536 => 146,  530 => 145,  523 => 143,  517 => 142,  513 => 140,  512 => 139,  509 => 138,  504 => 135,  498 => 134,  488 => 132,  486 => 131,  480 => 130,  473 => 129,  470 => 128,  466 => 127,  461 => 124,  459 => 123,  442 => 120,  437 => 119,  433 => 118,  429 => 116,  426 => 115,  417 => 114,  406 => 112,  392 => 111,  389 => 110,  387 => 109,  384 => 108,  383 => 107,  380 => 106,  374 => 103,  367 => 102,  364 => 101,  358 => 98,  351 => 97,  348 => 96,  342 => 93,  335 => 92,  333 => 91,  326 => 90,  320 => 87,  315 => 86,  312 => 85,  311 => 84,  308 => 83,  302 => 82,  291 => 81,  287 => 80,  278 => 79,  276 => 78,  272 => 77,  263 => 71,  259 => 70,  255 => 69,  251 => 68,  243 => 62,  241 => 61,  238 => 60,  236 => 59,  233 => 58,  228 => 55,  222 => 53,  219 => 52,  206 => 51,  204 => 50,  199 => 49,  191 => 48,  187 => 46,  186 => 45,  183 => 44,  174 => 38,  168 => 37,  163 => 35,  159 => 34,  155 => 33,  150 => 31,  147 => 30,  145 => 29,  141 => 27,  139 => 26,  136 => 25,  135 => 24,  132 => 23,  123 => 19,  115 => 18,  112 => 17,  103 => 13,  97 => 12,  94 => 11,  92 => 10,  89 => 9,  83 => 8,  74 => 7,  65 => 6,  49 => 5,  46 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
