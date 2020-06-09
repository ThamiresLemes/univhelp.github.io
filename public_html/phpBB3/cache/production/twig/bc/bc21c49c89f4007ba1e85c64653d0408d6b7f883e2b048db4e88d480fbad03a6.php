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

/* forumlist_body.html */
class __TwigTemplate_6518cc1f767469dfaa7d281868b0f9c0ebbbbd0e417c9c1cafcc8a1d72ef22e8 extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 12
                echo "\t\t<div class=\"forabg category-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", []) == 0)) {
                    echo " elegant";
                }
                echo "\" data-hide-description=\"";
                echo $this->getAttribute(($context["definition"] ?? null), "HIDE_FORUM_DESCRIPTION", []);
                echo "\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t";
                // line 19
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", []) != 0)) {
                    // line 20
                    echo "\t\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 21
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dd>
\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 30
            echo "\t";
            // line 31
            echo "
\t";
            // line 32
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                // line 33
                echo "\t\t";
                // line 34
                echo "\t\t<li class=\"row forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                echo "\">
\t\t\t";
                // line 35
                // line 36
                echo "\t\t\t";
                ob_start();
                // line 37
                echo "\t\t\t";
                if (((($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", []) == 0) &&  !$this->getAttribute($context["forumrow"], "CLICKS", [])) &&  !$this->getAttribute($context["forumrow"], "S_IS_LINK", []))) {
                    // line 38
                    echo "\t\t\t\t<div class=\"forum-statistics\">
\t\t\t\t\t<span class=\"dfn\">";
                    // line 39
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                    echo "</span><span class=\"comma\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                    echo "</span>
\t\t\t\t\t<span class=\"dfn\">";
                    // line 40
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "POSTS", []);
                    echo "</span>
\t\t\t\t</div>
\t\t\t";
                }
                // line 43
                echo "\t\t\t";
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('EXTRA_DESC', $value);
                // line 44
                echo "\t\t\t<dl class=\"row-item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", []);
                if (twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", []))) {
                    echo " elegant-row";
                }
                echo "\">
\t\t\t\t<dt title=\"";
                // line 45
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", []);
                echo "\">
\t\t\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 47
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 48
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", []))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 50
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 51
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", [])) {
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", []);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 58
                    // line 59
                    echo "\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"forumtitle\" data-id=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 61
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", [])) {
                    echo "<div class=\"forum-description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", []);
                    echo "</div>";
                }
                // line 62
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", []);
                echo "
\t\t\t\t\t\t";
                // line 63
                if ($this->getAttribute($context["forumrow"], "MODERATORS", [])) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<div class=\"forum-moderators\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", []);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", [])) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", []))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div class=\"subforums-list\">
\t\t\t\t\t\t\t";
                    // line 68
                    // line 69
                    echo "\t\t\t\t\t\t\t<strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                        // line 73
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", []);
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 74
                        if ($this->getAttribute($context["subforum"], "IS_LINK", [])) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " icon-red";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", []);
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", [])) {
                            echo "<span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                            echo "</span>";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                    // line 78
                    // line 79
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 81
                echo "
\t\t\t\t\t\t";
                // line 82
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 83
                    echo "\t\t\t\t\t\t";
                    if ((twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", [])) == "")) {
                        // line 84
                        echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 85
                        if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                            // line 86
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                            echo "</strong>
\t\t\t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 87
$context["forumrow"], "S_IS_LINK", []) && $this->getAttribute($context["forumrow"], "TOPICS", []))) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                            echo "</strong>
\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                    if (( !$this->getAttribute($context["forumrow"], "S_IS_LINK", []) && $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []))) {
                        // line 93
                        echo "\t\t\t\t\t\t\t<div class=\"forum-lastpost\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<span><strong>";
                        // line 94
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong> <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", []);
                        echo "\" class=\"lastsubject\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", []);
                        echo "</a></span>
\t\t\t\t\t\t\t\t<span>";
                        // line 95
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", []);
                        echo ", ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 101
                if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                    // line 102
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 103
$context["forumrow"], "S_IS_LINK", [])) {
                    // line 104
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", []) != 0)) {
                        // line 105
                        echo "\t\t\t\t\t<dd class=\"topics\">";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                        // line 106
                        echo $this->getAttribute($context["forumrow"], "POSTS", []);
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</dfn></dd>
\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 110
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 112
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 114
$context["forumrow"], "U_UNAPPROVED_POSTS", [])) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 116
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 120
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 122
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", [])) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", []);
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", []);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", []);
                        // line 127
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 129
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                            // line 135
                            echo "\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED_FORUM", $this->getAttribute($context["forumrow"], "TOPICS", []));
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 139
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 143
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 145
                echo "\t\t\t</dl>
\t\t\t";
                // line 146
                // line 147
                echo "\t\t</li>
\t\t";
                // line 148
                // line 149
                echo "\t";
            }
            // line 150
            echo "
\t";
            // line 151
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", [])) {
                // line 152
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 156
                // line 157
                echo "\t";
            }
            // line 158
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 160
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 162
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 162,  563 => 160,  557 => 158,  554 => 157,  553 => 156,  547 => 152,  545 => 151,  542 => 150,  539 => 149,  538 => 148,  535 => 147,  534 => 146,  531 => 145,  527 => 143,  522 => 140,  519 => 139,  513 => 137,  507 => 135,  504 => 134,  498 => 132,  492 => 129,  485 => 128,  482 => 127,  477 => 126,  467 => 124,  465 => 123,  463 => 122,  458 => 121,  456 => 120,  452 => 118,  446 => 116,  439 => 115,  437 => 114,  432 => 112,  425 => 111,  423 => 110,  419 => 108,  412 => 106,  405 => 105,  402 => 104,  400 => 103,  392 => 102,  390 => 101,  386 => 99,  383 => 98,  373 => 95,  362 => 94,  359 => 93,  356 => 92,  352 => 90,  343 => 88,  341 => 87,  333 => 86,  331 => 85,  328 => 84,  325 => 83,  323 => 82,  320 => 81,  316 => 79,  315 => 78,  312 => 77,  305 => 75,  287 => 74,  270 => 73,  267 => 72,  263 => 71,  256 => 69,  255 => 68,  252 => 67,  249 => 66,  240 => 64,  238 => 63,  233 => 62,  227 => 61,  218 => 60,  215 => 59,  214 => 58,  209 => 57,  207 => 56,  204 => 55,  195 => 51,  185 => 50,  182 => 49,  180 => 48,  177 => 47,  171 => 46,  167 => 45,  159 => 44,  155 => 43,  145 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  125 => 35,  120 => 34,  118 => 33,  116 => 32,  113 => 31,  111 => 30,  105 => 26,  104 => 25,  98 => 23,  93 => 21,  88 => 20,  86 => 19,  72 => 18,  69 => 17,  68 => 16,  55 => 12,  52 => 11,  51 => 10,  48 => 9,  41 => 4,  38 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
