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

/* viewforum_body.html */
class __TwigTemplate_c2c1e12d19bbe5ebf597c7d2accff0ba4c9f5a3ed201e7431d98e377dee412f3 extends \Twig\Template
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
        echo "\t";
        if ((($context["S_HAS_SUBFORUM"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
            // line 3
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
            echo "</a></li>
\t";
        }
        // line 5
        echo "\t";
        if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
            // line 6
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            echo ($context["U_MARK_TOPICS"] ?? null);
            echo "\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
            echo "</a></li>
\t";
        }
        // line 8
        $value = 1;
        $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 10
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        // line 12
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 13
        // line 14
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 15
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 17
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 18
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 23
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 26
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 27
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 29
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 30
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 32
            echo "
\t\t</div>
\t</div>
";
        }
        // line 36
        echo "
";
        // line 37
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 38
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 38)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 40
        echo "
";
        // line 41
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 42
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 44
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 45
                echo "\t\t\t";
                // line 46
                echo "
\t\t<a href=\"";
                // line 47
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 48
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 49
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 53
                echo "\t\t</a>
\t\t\t";
                // line 54
                // line 55
                echo "
\t";
            }
            // line 57
            echo "
\t";
            // line 58
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 59
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 60
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 64
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 66
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 69
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 74
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 76
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 77
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 78
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 79
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 79)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 80
                echo "\t\t";
            } else {
                // line 81
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 83
            echo "\t</div>

\t</div>
";
        }
        // line 87
        echo "
";
        // line 88
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 89
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 92
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 96
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 97
                echo "
\t\t<form action=\"";
                // line 98
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 104
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 108
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 109
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 112
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 114
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 115
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 119
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 121
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t";
                // line 122
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 132
            echo "
";
        }
        // line 134
        echo "
";
        // line 135
        // line 136
        echo "
";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 138
            echo "
\t";
            // line 139
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", []))) {
                // line 140
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 144
            echo "
\t";
            // line 145
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", []) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []))) {
                // line 146
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 151
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 152
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 153
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 154
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 160
            echo "
\t\t";
            // line 161
            // line 162
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", []) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", [])) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", [])) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 163
            // line 164
            echo "\t\t\t<dl class=\"row-item ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", []);
            echo "\">
\t\t\t\t<dt";
            // line 165
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []);
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", []);
            echo "\">
\t\t\t\t\t";
            // line 166
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 167
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 168
            // line 169
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 170
                echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 171
                echo ($context["NEW_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", []);
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                echo "</a>";
            } else {
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
            }
            // line 175
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", []))) {
                // line 176
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\" title=\"";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", [])) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 177
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", [])) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", [])) {
                // line 181
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 182
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                // line 186
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 187
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 190
            echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 191
            // line 192
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", [])) {
                echo "<i class=\"topic-status sticky fa fa-thumb-tack\"></i>";
            }
            // line 193
            echo "
\t\t\t\t\t\t";
            // line 194
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 195
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 196
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 197
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                    echo "</a>";
                }
                // line 198
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 199
                if ($this->getAttribute($context["topicrow"], "REPLIES", [])) {
                    // line 200
                    echo "\t\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", []);
                    echo "</strong></span>
\t\t\t\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t\t\t";
            }
            // line 203
            echo "
\t\t\t\t\t\t<div class=\"topic-poster responsive-hide left-box\">
\t\t\t\t\t\t\t";
            // line 205
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", [])) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 206
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 207
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", []);
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", []);
            echo "
\t\t\t\t\t\t\t";
            // line 208
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                echo "</a>";
            }
            // line 209
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 210
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", []))) {
                // line 211
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 217
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 218
$context["pagination"], "S_IS_NEXT", [])) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</a></li>\t\t\t\t\t\t\t\t";
                    }
                    // line 220
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 224
            echo "
\t\t\t\t\t\t";
            // line 225
            // line 226
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 228
            echo $this->getAttribute($context["topicrow"], "REPLIES", []);
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 229
            echo $this->getAttribute($context["topicrow"], "VIEWS", []);
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t<span><dfn>";
            // line 231
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
            // line 232
            echo "\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && $this->getAttribute($context["topicrow"], "U_LAST_POST", []))) {
                // line 233
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 234
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 241
            // line 242
            echo "\t\t</li>
\t\t";
            // line 243
            // line 244
            echo "
\t";
            // line 245
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", [])) {
                // line 246
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 250
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 252
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 253
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 255
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            } elseif ( !            // line 258
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 259
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 261
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "
";
        // line 267
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 268
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 269
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 270
                echo "\t\t\t";
                // line 271
                echo "\t\t\t<a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 272
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 273
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 275
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 277
                echo "\t\t\t</a>

\t\t\t";
                // line 279
                // line 280
                echo "\t\t";
            }
            // line 281
            echo "
\t\t";
            // line 282
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 283
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 284
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 284)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 285
                echo "\t\t\t</form>
\t\t";
            }
            // line 287
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 289
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 290
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 291
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 292
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 292)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 293
                echo "\t\t\t";
            } else {
                // line 294
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 296
            echo "\t\t</div>
\t</div>
";
        }
        // line 299
        echo "
";
        // line 300
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 300)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 301
        echo "
";
        // line 302
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 303
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 304
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 305
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 308
        echo "
";
        // line 309
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 310
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 311
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", []));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", []);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 315
        echo "
";
        // line 316
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 316)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1047 => 316,  1044 => 315,  1030 => 312,  1026 => 311,  1023 => 310,  1021 => 309,  1018 => 308,  1012 => 305,  1006 => 304,  1003 => 303,  1001 => 302,  998 => 301,  986 => 300,  983 => 299,  978 => 296,  972 => 294,  969 => 293,  956 => 292,  954 => 291,  949 => 290,  941 => 289,  937 => 287,  933 => 285,  921 => 284,  916 => 283,  914 => 282,  911 => 281,  908 => 280,  907 => 279,  903 => 277,  897 => 275,  891 => 273,  889 => 272,  878 => 271,  876 => 270,  874 => 269,  871 => 268,  869 => 267,  866 => 266,  855 => 261,  851 => 259,  849 => 258,  843 => 255,  839 => 253,  836 => 252,  830 => 250,  824 => 246,  822 => 245,  819 => 244,  818 => 243,  815 => 242,  814 => 241,  806 => 237,  800 => 234,  793 => 233,  790 => 232,  784 => 231,  777 => 229,  771 => 228,  767 => 226,  766 => 225,  763 => 224,  758 => 221,  752 => 220,  743 => 219,  741 => 218,  735 => 217,  728 => 216,  725 => 215,  721 => 214,  716 => 211,  714 => 210,  711 => 209,  701 => 208,  692 => 207,  687 => 206,  683 => 205,  679 => 203,  676 => 202,  667 => 200,  665 => 199,  662 => 198,  650 => 197,  636 => 196,  633 => 195,  631 => 194,  628 => 193,  623 => 192,  622 => 191,  619 => 190,  613 => 187,  606 => 186,  603 => 185,  597 => 182,  590 => 181,  587 => 180,  577 => 177,  566 => 176,  563 => 175,  552 => 174,  546 => 171,  541 => 170,  538 => 169,  537 => 168,  534 => 167,  528 => 166,  517 => 165,  512 => 164,  511 => 163,  490 => 162,  489 => 161,  486 => 160,  477 => 154,  473 => 153,  469 => 152,  455 => 151,  444 => 146,  442 => 145,  439 => 144,  433 => 140,  431 => 139,  428 => 138,  423 => 137,  420 => 136,  419 => 135,  416 => 134,  412 => 132,  399 => 122,  395 => 121,  390 => 119,  382 => 115,  376 => 114,  370 => 112,  364 => 109,  359 => 108,  342 => 104,  333 => 98,  330 => 97,  328 => 96,  321 => 92,  316 => 89,  314 => 88,  311 => 87,  305 => 83,  299 => 81,  296 => 80,  283 => 79,  281 => 78,  276 => 77,  268 => 76,  264 => 74,  256 => 69,  251 => 67,  245 => 66,  240 => 64,  236 => 63,  232 => 62,  227 => 60,  224 => 59,  222 => 58,  219 => 57,  215 => 55,  214 => 54,  211 => 53,  205 => 51,  199 => 49,  197 => 48,  187 => 47,  184 => 46,  182 => 45,  180 => 44,  176 => 42,  174 => 41,  171 => 40,  157 => 38,  155 => 37,  152 => 36,  146 => 32,  141 => 30,  136 => 29,  128 => 27,  126 => 26,  117 => 23,  115 => 22,  112 => 21,  108 => 19,  94 => 18,  88 => 17,  84 => 15,  82 => 14,  81 => 13,  72 => 12,  71 => 11,  59 => 10,  54 => 8,  46 => 6,  43 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
