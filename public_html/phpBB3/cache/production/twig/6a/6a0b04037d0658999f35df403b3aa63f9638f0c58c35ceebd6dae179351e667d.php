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
class __TwigTemplate_1e6ae1890afea6615cd26c08f0944fc48a48c91f68583c361753a51e44e6da70 extends \Twig\Template
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
                echo "\t\t<div class=\"forabg\">
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
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 28
            echo "\t";
            // line 29
            echo "
\t";
            // line 30
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                // line 31
                echo "\t\t";
                // line 32
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 33
                // line 34
                echo "\t\t\t<dl class=\"row-item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", []);
                echo "\">
\t\t\t\t<dt title=\"";
                // line 35
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", []);
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", []))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 40
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 41
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", [])) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    // line 47
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", []);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 48
                    // line 49
                    echo "\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 51
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", []);
                }
                // line 52
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", [])) {
                    // line 53
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", []);
                    echo "
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", [])) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", []))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
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
                        // line 60
                        if ($this->getAttribute($context["subforum"], "IS_LINK", [])) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", []);
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", [])) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                    // line 63
                    echo "\t\t\t\t\t\t";
                }
                // line 64
                echo "
\t\t\t\t\t\t";
                // line 65
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 66
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 67
                    if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 69
$context["forumrow"], "S_IS_LINK", []) && $this->getAttribute($context["forumrow"], "TOPICS", []))) {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 76
                if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                    // line 77
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 78
$context["forumrow"], "S_IS_LINK", [])) {
                    // line 79
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 80
                    echo $this->getAttribute($context["forumrow"], "POSTS", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 83
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 85
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 87
$context["forumrow"], "U_UNAPPROVED_POSTS", [])) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 89
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 94
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", [])) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", []);
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", []);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", []);
                        // line 99
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 101
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 106
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                            // line 107
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED_FORUM", $this->getAttribute($context["forumrow"], "TOPICS", []));
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 109
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 111
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 117
                echo "\t\t\t</dl>
\t\t\t";
                // line 118
                // line 119
                echo "\t\t</li>
\t\t";
                // line 120
                // line 121
                echo "\t";
            }
            // line 122
            echo "
\t";
            // line 123
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", [])) {
                // line 124
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 128
                // line 129
                echo "\t";
            }
            // line 130
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 134
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
        return array (  457 => 134,  453 => 132,  447 => 130,  444 => 129,  443 => 128,  437 => 124,  435 => 123,  432 => 122,  429 => 121,  428 => 120,  425 => 119,  424 => 118,  421 => 117,  417 => 115,  412 => 112,  409 => 111,  403 => 109,  397 => 107,  394 => 106,  388 => 104,  382 => 101,  375 => 100,  372 => 99,  367 => 98,  357 => 96,  355 => 95,  353 => 94,  348 => 93,  345 => 92,  339 => 89,  332 => 88,  330 => 87,  325 => 85,  318 => 84,  316 => 83,  308 => 80,  301 => 79,  299 => 78,  291 => 77,  289 => 76,  285 => 74,  281 => 72,  272 => 70,  270 => 69,  262 => 68,  260 => 67,  257 => 66,  255 => 65,  252 => 64,  249 => 63,  247 => 62,  241 => 61,  223 => 60,  205 => 59,  201 => 58,  195 => 57,  193 => 56,  190 => 55,  181 => 53,  178 => 52,  173 => 51,  166 => 50,  163 => 49,  162 => 48,  157 => 47,  155 => 46,  152 => 45,  143 => 41,  133 => 40,  130 => 39,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  110 => 34,  109 => 33,  106 => 32,  104 => 31,  102 => 30,  99 => 29,  97 => 28,  91 => 24,  90 => 23,  85 => 21,  81 => 20,  77 => 19,  65 => 18,  62 => 17,  61 => 16,  55 => 12,  52 => 11,  51 => 10,  48 => 9,  41 => 4,  38 => 3,  33 => 2,  30 => 1,);
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
