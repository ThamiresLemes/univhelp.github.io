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

/* viewtopic_body.html */
class __TwigTemplate_3c268a51f458073fc2961a0f3d30be26aa621c8b311719acafa3c26e579f0abd extends \Twig\Template
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
        ob_start();
        // line 2
        if (( !($context["S_IS_BOT"] ?? null) && ((((((($context["U_VIEW_UNREAD_POST"] ?? null) || ($context["U_WATCH_TOPIC"] ?? null)) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null)))) {
            // line 3
            echo "\t";
            if (($context["U_VIEW_UNREAD_POST"] ?? null)) {
                // line 4
                echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a></li>
\t";
            }
            // line 6
            echo "\t";
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 7
                echo "\t\t<li class=\"small-icon\">
\t\t\t<a href=\"";
                // line 8
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
\t\t\t\t<i class=\"icon ";
                // line 9
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 13
            $value = 1;
            $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
        }
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 16
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 16)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 17
        echo "
";
        // line 18
        // line 19
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 20
        // line 21
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 22
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 23
        echo "
";
        // line 24
        if (($context["MODERATORS"] ?? null)) {
            // line 25
            echo "<p>
\t<strong>";
            // line 26
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 29
        echo "
";
        // line 30
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 31
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 34
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 35
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 37
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 38
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 40
            echo "
\t\t</div>
\t</div>
";
        }
        // line 44
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 46
        // line 47
        echo "
\t";
        // line 48
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 49
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 50
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 51
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 55
            echo "\t\t</a>
\t";
        }
        // line 57
        echo "
\t";
        // line 58
        // line 59
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 60
        echo "\t";
        // line 61
        echo "
\t";
        // line 62
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 63
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 64
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 70
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 73
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 78
        echo "
\t";
        // line 79
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 80
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 81
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 82
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 83
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 83)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 84
                echo "\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 87
            echo "\t\t</div>
\t";
        }
        // line 89
        echo "\t";
        // line 90
        echo "</div>

";
        // line 92
        // line 93
        echo "
";
        // line 94
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 95
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 101
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 102
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", []));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 106
                echo "\t\t\t\t";
                // line 107
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", [])) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                echo "\">
\t\t\t\t\t<dt>";
                // line 108
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", []);
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", []);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 109
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 110
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", []);
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", []);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 111
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", []) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", []);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 113
                // line 114
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 116
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 121
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 122
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 124
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 127
            echo "
\t\t\t";
            // line 128
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 129
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 131
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 134
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 139
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 140
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
";
        }
        // line 145
        echo "
";
        // line 146
        // line 147
        echo "
";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", []));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 149
            echo "\t";
            // line 150
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", [])) {
                // line 151
                echo "\t\t<a id=\"unread\" class=\"top-anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", []);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 153
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", [])) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", [])) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", [])) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", []) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", []))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", [])) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 156
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 157
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) || $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", [])) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 159
            // line 160
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", [])) {
                // line 161
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", []);
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", []);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", []);
                    echo "</span>";
                }
                // line 162
                echo "\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t";
            // line 164
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 165
            // line 166
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", [])) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", []);
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", []);
            }
            // line 167
            echo "\t\t\t\t";
            // line 168
            echo "\t\t\t</dt>

\t\t\t";
            // line 170
            // line 171
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) || $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", []);
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) && $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", []);
                echo "</dd>";
            }
            // line 172
            echo "\t\t\t";
            // line 173
            echo "
\t\t";
            // line 174
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", []) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", []) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", []);
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", []);
                if (($this->getAttribute($context["postrow"], "U_SEARCH", []) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 175
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", [])) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", []);
                echo "</dd>";
            }
            // line 176
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", [])) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", []);
                echo "</dd>";
            }
            // line 177
            echo "
\t\t";
            // line 178
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", [])) {
                // line 179
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 180
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", []);
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", []);
                echo "</dd>
\t\t";
            }
            // line 182
            echo "
\t\t";
            // line 183
            // line 184
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 185
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", [])) {
                    // line 186
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", []);
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", []);
                    echo "</dd>
\t\t\t";
                }
                // line 188
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "\t\t";
            // line 190
            echo "
\t\t";
            // line 191
            // line 192
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", [])))) {
                // line 193
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 194
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-";
                // line 195
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " dropdown-down\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 196
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", []);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 197
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", []);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", []));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 203
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", []) % 4);
                    // line 204
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", []) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", []) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 205
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 206
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", [])) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", []);
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", []);
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", []);
                    echo "\"";
                    if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", [])) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", []) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 209
                    echo $this->getAttribute($context["contact"], "ID", []);
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", []);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 211
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", []))) {
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 220
            echo "\t\t";
            // line 221
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 225
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                // line 226
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", [])) {
                    // line 227
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 228
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", []);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 229
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", []);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 231
$context["postrow"], "S_IGNORE_POST", [])) {
                    // line 232
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 233
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", []);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 234
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", []);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 237
                echo "\t\t\t";
            }
            // line 238
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 240
            // line 241
            echo "\t\t\t<h3 ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", [])) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", [])) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", []);
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", []);
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", []);
                echo "\" alt=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", []);
                echo "\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", []);
            echo "</a></h3>

\t\t";
            // line 243
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", []) || $this->getAttribute($context["postrow"], "U_DELETE", [])) || $this->getAttribute($context["postrow"], "U_REPORT", [])) || $this->getAttribute($context["postrow"], "U_WARN", [])) || $this->getAttribute($context["postrow"], "U_INFO", [])) || $this->getAttribute($context["postrow"], "U_QUOTE", []));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 244
            echo "\t\t";
            // line 245
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 246
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", [])) {
                    // line 247
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 248
                    // line 249
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", [])) {
                        // line 250
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 251
                        echo $this->getAttribute($context["postrow"], "U_EDIT", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 252
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 256
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", [])) {
                        // line 257
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 258
                        echo $this->getAttribute($context["postrow"], "U_DELETE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 259
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 263
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", [])) {
                        // line 264
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 265
                        echo $this->getAttribute($context["postrow"], "U_REPORT", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 266
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 270
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", [])) {
                        // line 271
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 272
                        echo $this->getAttribute($context["postrow"], "U_WARN", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 273
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 277
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", [])) {
                        // line 278
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 279
                        echo $this->getAttribute($context["postrow"], "U_INFO", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 280
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 284
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", [])) {
                        // line 285
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 286
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 287
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 291
                    echo "\t\t\t\t\t";
                    // line 292
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 294
                echo "\t\t";
            }
            // line 295
            echo "\t\t";
            // line 296
            echo "
\t\t\t";
            // line 297
            // line 298
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 299
            if (($context["S_IS_BOT"] ?? null)) {
                // line 300
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", [])) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", []);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 302
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "MINI_POST", []);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 303
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", [])) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", []);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", []);
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", []);
            echo "
\t\t\t</p>
\t\t\t";
            // line 308
            // line 309
            echo "
\t\t\t";
            // line 310
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", [])) {
                // line 311
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", []);
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 313
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 314
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 315
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 316
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" />
\t\t\t\t\t";
                // line 317
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 320
$context["postrow"], "S_POST_DELETED", [])) {
                // line 321
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", []);
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 323
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 324
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", [])) {
                    // line 325
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 328
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" />
\t\t\t\t\t";
                // line 329
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 333
            echo "
\t\t\t";
            // line 334
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", [])) {
                // line 335
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 336
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", []);
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 339
            echo "
\t\t\t<div class=\"content\">";
            // line 340
            echo $this->getAttribute($context["postrow"], "MESSAGE", []);
            echo "</div>

\t\t\t";
            // line 342
            // line 343
            echo "
\t\t\t";
            // line 344
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", [])) {
                // line 345
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 347
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 349
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", []));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 350
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", []);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 352
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 354
            echo "
\t\t\t";
            // line 355
            // line 356
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", [])) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 357
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", []) || $this->getAttribute($context["postrow"], "DELETE_REASON", []))) {
                // line 358
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 359
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", []);
                echo "
\t\t\t\t\t";
                // line 360
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", [])) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", []);
                    echo "</em>";
                }
                // line 361
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 362
$context["postrow"], "EDITED_MESSAGE", []) || $this->getAttribute($context["postrow"], "EDIT_REASON", []))) {
                // line 363
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 364
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", []);
                echo "
\t\t\t\t\t";
                // line 365
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", [])) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", []);
                    echo "</em>";
                }
                // line 366
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 368
            echo "
\t\t\t";
            // line 369
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", [])) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", []);
                echo "</div>";
            }
            // line 370
            echo "\t\t\t";
            // line 371
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", [])) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", []);
                echo "</div>";
            }
            // line 372
            echo "
\t\t\t";
            // line 373
            // line 374
            echo "\t\t\t</div>

\t\t</div>

\t\t</div>
\t\t";
            // line 379
            // line 380
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 381
            // line 382
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 384
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 386
            // line 387
            echo "\t\t</div>
\t\t";
            // line 388
            // line 389
            echo "\t</div>

\t";
            // line 391
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "
";
        // line 394
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 395
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 395)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 397
        echo "
";
        // line 398
        // line 399
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 400
        // line 401
        echo "
\t";
        // line 402
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 403
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 404
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 405
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 407
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 409
            echo "\t\t</a>
\t";
        }
        // line 411
        echo "\t";
        // line 412
        echo "
\t";
        // line 413
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 413)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 414
        echo "
\t";
        // line 415
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 416
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 417
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 417)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 418
            echo "\t\t</form>
\t";
        }
        // line 420
        echo "
\t";
        // line 421
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", []))) {
            // line 422
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 423
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 424
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 430
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", []));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 431
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", []), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 432
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", []);
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", [])) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", []);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 438
        echo "
\t";
        // line 439
        // line 440
        echo "
\t";
        // line 441
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 442
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 443
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 444
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 445
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 445)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 446
                echo "\t\t\t";
            } else {
                // line 447
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 449
            echo "\t\t</div>
\t";
        }
        // line 451
        echo "</div>

";
        // line 453
        // line 454
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 454)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 455
        echo "
";
        // line 456
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 457
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 458
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 459
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 462
        echo "
";
        // line 463
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 463)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1618 => 463,  1615 => 462,  1609 => 459,  1603 => 458,  1600 => 457,  1598 => 456,  1595 => 455,  1583 => 454,  1582 => 453,  1578 => 451,  1574 => 449,  1568 => 447,  1565 => 446,  1552 => 445,  1550 => 444,  1546 => 443,  1543 => 442,  1541 => 441,  1538 => 440,  1537 => 439,  1534 => 438,  1528 => 434,  1513 => 432,  1509 => 431,  1505 => 430,  1496 => 424,  1492 => 423,  1487 => 422,  1485 => 421,  1482 => 420,  1478 => 418,  1466 => 417,  1461 => 416,  1459 => 415,  1456 => 414,  1444 => 413,  1441 => 412,  1439 => 411,  1435 => 409,  1429 => 407,  1423 => 405,  1421 => 404,  1410 => 403,  1408 => 402,  1405 => 401,  1404 => 400,  1401 => 399,  1400 => 398,  1397 => 397,  1383 => 395,  1381 => 394,  1378 => 393,  1373 => 391,  1369 => 389,  1368 => 388,  1365 => 387,  1364 => 386,  1359 => 384,  1353 => 382,  1352 => 381,  1349 => 380,  1348 => 379,  1341 => 374,  1340 => 373,  1337 => 372,  1328 => 371,  1326 => 370,  1320 => 369,  1317 => 368,  1313 => 366,  1304 => 365,  1300 => 364,  1297 => 363,  1295 => 362,  1292 => 361,  1283 => 360,  1279 => 359,  1276 => 358,  1273 => 357,  1266 => 356,  1265 => 355,  1262 => 354,  1258 => 352,  1249 => 350,  1245 => 349,  1240 => 347,  1236 => 345,  1234 => 344,  1231 => 343,  1230 => 342,  1225 => 340,  1222 => 339,  1214 => 336,  1211 => 335,  1209 => 334,  1206 => 333,  1199 => 329,  1195 => 328,  1190 => 327,  1184 => 325,  1182 => 324,  1178 => 323,  1172 => 321,  1170 => 320,  1164 => 317,  1160 => 316,  1156 => 315,  1152 => 314,  1148 => 313,  1142 => 311,  1140 => 310,  1137 => 309,  1136 => 308,  1126 => 306,  1114 => 303,  1107 => 302,  1095 => 300,  1093 => 299,  1090 => 298,  1089 => 297,  1086 => 296,  1084 => 295,  1081 => 294,  1077 => 292,  1075 => 291,  1068 => 287,  1062 => 286,  1059 => 285,  1056 => 284,  1049 => 280,  1043 => 279,  1040 => 278,  1037 => 277,  1030 => 273,  1024 => 272,  1021 => 271,  1018 => 270,  1011 => 266,  1005 => 265,  1002 => 264,  999 => 263,  992 => 259,  986 => 258,  983 => 257,  980 => 256,  973 => 252,  967 => 251,  964 => 250,  961 => 249,  960 => 248,  957 => 247,  954 => 246,  951 => 245,  949 => 244,  946 => 243,  919 => 241,  918 => 240,  908 => 238,  905 => 237,  899 => 234,  895 => 233,  890 => 232,  888 => 231,  883 => 229,  879 => 228,  874 => 227,  871 => 226,  869 => 225,  863 => 221,  861 => 220,  854 => 215,  848 => 214,  844 => 212,  842 => 211,  835 => 209,  817 => 208,  813 => 206,  810 => 205,  806 => 204,  803 => 203,  799 => 202,  791 => 197,  787 => 196,  783 => 195,  778 => 194,  775 => 193,  772 => 192,  771 => 191,  768 => 190,  766 => 189,  760 => 188,  749 => 186,  746 => 185,  741 => 184,  740 => 183,  737 => 182,  729 => 180,  726 => 179,  724 => 178,  721 => 177,  711 => 176,  701 => 175,  684 => 174,  681 => 173,  679 => 172,  668 => 171,  667 => 170,  663 => 168,  661 => 167,  652 => 166,  651 => 165,  648 => 164,  646 => 163,  643 => 162,  630 => 161,  627 => 160,  626 => 159,  611 => 157,  603 => 156,  575 => 153,  565 => 151,  562 => 150,  560 => 149,  556 => 148,  553 => 147,  552 => 146,  549 => 145,  541 => 140,  537 => 139,  530 => 135,  527 => 134,  519 => 131,  515 => 129,  513 => 128,  510 => 127,  504 => 124,  500 => 122,  498 => 121,  489 => 118,  482 => 116,  479 => 115,  473 => 114,  472 => 113,  459 => 111,  436 => 110,  410 => 109,  398 => 108,  378 => 107,  376 => 106,  372 => 105,  358 => 102,  354 => 101,  344 => 95,  342 => 94,  339 => 93,  338 => 92,  334 => 90,  332 => 89,  328 => 87,  322 => 85,  319 => 84,  306 => 83,  304 => 82,  293 => 81,  290 => 80,  288 => 79,  285 => 78,  277 => 73,  272 => 71,  266 => 70,  261 => 68,  257 => 67,  253 => 66,  248 => 64,  245 => 63,  243 => 62,  240 => 61,  238 => 60,  225 => 59,  224 => 58,  221 => 57,  217 => 55,  211 => 53,  205 => 51,  203 => 50,  192 => 49,  190 => 48,  187 => 47,  186 => 46,  182 => 44,  176 => 40,  171 => 38,  166 => 37,  158 => 35,  156 => 34,  147 => 31,  145 => 30,  142 => 29,  129 => 26,  126 => 25,  124 => 24,  121 => 23,  115 => 22,  112 => 21,  111 => 20,  102 => 19,  101 => 18,  98 => 17,  86 => 16,  80 => 13,  67 => 9,  51 => 8,  48 => 7,  45 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
