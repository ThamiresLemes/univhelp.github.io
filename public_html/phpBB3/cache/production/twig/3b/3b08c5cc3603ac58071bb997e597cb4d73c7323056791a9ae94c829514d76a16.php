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

/* acp_main.html */
class __TwigTemplate_617acfb3a98469e4a55e90512b25d9a451b2815c1b5fd4e61c2501351b5a70f9 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_main.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_RESTORE_PERMISSIONS"] ?? null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PERMISSIONS_TRANSFERRED");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PERMISSIONS_TRANSFERRED_EXPLAIN");
            echo "</p>

";
        } else {
            // line 12
            echo "
\t<h1>";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WELCOME_PHPBB");
            echo "</h1>

\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_INTRO");
            echo "</p>

\t";
            // line 17
            if (($context["S_UPDATE_INCOMPLETE"] ?? null)) {
                // line 18
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE_INCOMPLETE");
                echo " <a href=\"";
                echo ($context["U_VERSIONCHECK"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            } elseif (            // line 21
($context["S_VERSIONCHECK_FAIL"] ?? null)) {
                // line 22
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 23
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 24
                echo ($context["VERSIONCHECK_FAIL_REASON"] ?? null);
                echo "</p>
\t\t\t<p><a href=\"";
                // line 25
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                echo ($context["U_VERSIONCHECK"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            } elseif ( !            // line 27
($context["S_VERSION_UP_TO_DATE"] ?? null)) {
                // line 28
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 29
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION_NOT_UP_TO_DATE_TITLE");
                echo "</p>
\t\t\t<p><a href=\"";
                // line 30
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                echo ($context["U_VERSIONCHECK"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            }
            // line 33
            echo "\t";
            if (($context["S_VERSION_UPGRADEABLE"] ?? null)) {
                // line 34
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 35
                echo ($context["UPGRADE_INSTRUCTIONS"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 38
            echo "
\t";
            // line 39
            if (($context["S_SEARCH_INDEX_MISSING"] ?? null)) {
                // line 40
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 41
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 42
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_INDEX");
                echo "</p>
\t\t</div>
\t";
            }
            // line 45
            echo "
\t";
            // line 46
            if (($context["S_REMOVE_INSTALL"] ?? null)) {
                // line 47
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 48
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 49
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_INSTALL");
                echo "</p>
\t\t</div>
\t";
            }
            // line 52
            echo "
\t";
            // line 53
            if (($context["S_MBSTRING_LOADED"] ?? null)) {
                // line 54
                echo "\t\t";
                if (($context["S_MBSTRING_FUNC_OVERLOAD_FAIL"] ?? null)) {
                    // line 55
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 56
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_FUNC_OVERLOAD");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 57
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 60
                echo "
\t\t";
                // line 61
                if (($context["S_MBSTRING_ENCODING_TRANSLATION_FAIL"] ?? null)) {
                    // line 62
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 63
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 64
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 67
                echo "
\t\t";
                // line 68
                if (($context["S_MBSTRING_HTTP_INPUT_FAIL"] ?? null)) {
                    // line 69
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 70
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_HTTP_INPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 71
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_HTTP_INPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 74
                echo "
\t\t";
                // line 75
                if (($context["S_MBSTRING_HTTP_OUTPUT_FAIL"] ?? null)) {
                    // line 76
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 77
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_HTTP_OUTPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 78
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 81
                echo "\t";
            }
            // line 82
            echo "
\t";
            // line 83
            if (($context["S_WRITABLE_CONFIG"] ?? null)) {
                // line 84
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 85
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WRITABLE_CONFIG");
                echo "</p>
\t\t</div>
\t";
            }
            // line 88
            echo "
\t";
            // line 89
            if (($context["S_PHP_VERSION_OLD"] ?? null)) {
                // line 90
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 91
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHP_VERSION_OLD");
                echo "</p>
\t\t</div>
\t";
            }
            // line 94
            echo "
\t";
            // line 95
            // line 96
            echo "
\t<table class=\"table1 two-columns no-header\" data-no-responsive-header=\"true\">
\t\t<caption>";
            // line 98
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_STATS");
            echo "</caption>
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 102
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 103
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VALUE");
            echo "</th>
\t\t<th>";
            // line 104
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 105
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VALUE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
            // line 110
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_POSTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 111
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 112
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_PER_DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 113
            echo ($context["POSTS_PER_DAY"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 116
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_TOPICS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 117
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_PER_DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 119
            echo ($context["TOPICS_PER_DAY"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_USERS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 123
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERS_PER_DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 125
            echo ($context["USERS_PER_DAY"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 128
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 129
            echo ($context["TOTAL_FILES"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 130
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILES_PER_DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 131
            echo ($context["FILES_PER_DAY"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 134
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_STARTED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 135
            echo ($context["START_DATE"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 136
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_DIR_SIZE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 137
            echo ($context["AVATAR_DIR_SIZE"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 140
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DATABASE_SIZE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 141
            echo ($context["DBSIZE"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 142
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_DIR_SIZE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 143
            echo ($context["UPLOAD_DIR_SIZE"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 146
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DATABASE_SERVER_INFO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 147
            echo ($context["DATABASE_INFO"] ?? null);
            echo "</strong></td>
\t\t<td>";
            // line 148
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GZIP_COMPRESSION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 149
            echo ($context["GZIP_COMPRESSION"] ?? null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 152
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHP_VERSION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 153
            echo ($context["PHP_VERSION_INFO"] ?? null);
            echo "</strong></td>
\t";
            // line 154
            if (($context["S_TOTAL_ORPHAN"] ?? null)) {
                // line 155
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_ORPHAN");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " </td>
\t\t<td>
\t\t";
                // line 157
                if ((($context["TOTAL_ORPHAN"] ?? null) > 0)) {
                    // line 158
                    echo "\t\t\t<a href=\"";
                    echo ($context["U_ATTACH_ORPHAN"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
                    echo "\"><strong>";
                    echo ($context["TOTAL_ORPHAN"] ?? null);
                    echo "</strong></a>
\t\t";
                } else {
                    // line 160
                    echo "\t\t\t<strong>";
                    echo ($context["TOTAL_ORPHAN"] ?? null);
                    echo "</strong>
\t\t";
                }
                // line 162
                echo "\t\t</td>
\t\t";
            } else {
                // line 164
                echo "\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t";
            }
            // line 167
            echo "\t</tr>
\t";
            // line 168
            if (($context["S_VERSIONCHECK"] ?? null)) {
                // line 169
                echo "\t<tr>
\t\t<td>";
                // line 170
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_VERSION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " </td>
\t\t<td>
\t\t\t<strong><a href=\"";
                // line 172
                echo ($context["U_VERSIONCHECK"] ?? null);
                echo "\" ";
                if (($context["S_VERSION_UP_TO_DATE"] ?? null)) {
                    echo "style=\"color: #228822;\" ";
                } elseif ( !($context["S_VERSIONCHECK_FAIL"] ?? null)) {
                    echo "style=\"color: #BC2A4D;\" ";
                }
                echo "title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
                echo "\">";
                echo ($context["BOARD_VERSION"] ?? null);
                echo "</a></strong> [&nbsp;<a href=\"";
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a>&nbsp;]
\t\t</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t";
            }
            // line 178
            echo "\t</tbody>
\t</table>

\t";
            // line 181
            if (($context["S_ACTION_OPTIONS"] ?? null)) {
                // line 182
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTIC_RESYNC_OPTIONS");
                echo "</legend>

\t\t\t<form id=\"action_online_form\" method=\"post\" action=\"";
                // line 185
                echo ($context["U_ACTION"] ?? null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_online\">";
                // line 187
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET_ONLINE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"online\" /><input class=\"button2\" type=\"submit\" id=\"action_online\" name=\"action_online\" value=\"";
                // line 188
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_date_form\" method=\"post\" action=\"";
                // line 192
                echo ($context["U_ACTION"] ?? null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_date\">";
                // line 194
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET_DATE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"date\" /><input class=\"button2\" type=\"submit\" id=\"action_date\" name=\"action_date\" value=\"";
                // line 195
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 199
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_stats\">";
                // line 201
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 202
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_user_form\" method=\"post\" action=\"";
                // line 206
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_user\">";
                // line 208
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_POSTCOUNTS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_POSTCOUNTS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"user\" /><input class=\"button2\" type=\"submit\" id=\"action_user\" name=\"action_user\" value=\"";
                // line 209
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_db_track_form\" method=\"post\" action=\"";
                // line 213
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_db_track\">";
                // line 215
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_POST_MARKING");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_POST_MARKING_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"db_track\" /><input class=\"button2\" type=\"submit\" id=\"action_db_track\" name=\"action_db_track\" value=\"";
                // line 216
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 220
                if (($context["S_FOUNDER"] ?? null)) {
                    // line 221
                    echo "\t\t\t<form id=\"action_purge_sessions_form\" method=\"post\" action=\"";
                    echo ($context["U_ACTION"] ?? null);
                    echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_sessions\">";
                    // line 223
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PURGE_SESSIONS");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PURGE_SESSIONS_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_sessions\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_sessions\" name=\"action_purge_sessions\" value=\"";
                    // line 224
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>
\t\t\t";
                }
                // line 228
                echo "
\t\t\t<form id=\"action_purge_cache_form\" method=\"post\" action=\"";
                // line 229
                echo ($context["U_ACTION"] ?? null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_cache\">";
                // line 231
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PURGE_CACHE");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PURGE_CACHE_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_cache\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_cache\" name=\"action_purge_cache\" value=\"";
                // line 232
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 236
                // line 237
                echo "  \t\t</fieldset>
\t";
            }
            // line 239
            echo "
\t";
            // line 240
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "log", []))) {
                // line 241
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_LOG");
                echo "</h2>

\t\t<p>";
                // line 243
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_LOG_INDEX_EXPLAIN");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 245
                echo ($context["U_ADMIN_LOG"] ?? null);
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_ADMIN_LOG");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 250
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 251
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP");
                echo "</th>
\t\t\t<th>";
                // line 252
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIME");
                echo "</th>
\t\t\t<th>";
                // line 253
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "log", []));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 258
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 259
                    echo $this->getAttribute($context["log"], "USERNAME", []);
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 260
                    echo $this->getAttribute($context["log"], "IP", []);
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 261
                    echo $this->getAttribute($context["log"], "DATE", []);
                    echo "</td>
\t\t\t\t<td>";
                    // line 262
                    echo $this->getAttribute($context["log"], "ACTION", []);
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 268
            echo "
\t";
            // line 269
            if (($context["S_INACTIVE_USERS"] ?? null)) {
                // line 270
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE_USERS");
                echo "</h2>

\t\t<p>";
                // line 272
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE_USERS_EXPLAIN_INDEX");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 274
                echo ($context["U_INACTIVE_USERS"] ?? null);
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_INACTIVE_USERS");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 279
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 280
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo "</th>
\t\t\t<th>";
                // line 281
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE_DATE");
                echo "</th>
\t\t\t<th>";
                // line 282
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_VISIT");
                echo "</th>
\t\t\t<th>";
                // line 283
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE_REASON");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "inactive", []));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["inactive"]) {
                    // line 288
                    echo "\t\t\t<tr>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 290
                    echo $this->getAttribute($context["inactive"], "USERNAME_FULL", []);
                    echo "
\t\t\t\t\t";
                    // line 291
                    if ($this->getAttribute($context["inactive"], "POSTS", [])) {
                        echo "<br />";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["inactive"], "POSTS", []);
                        echo "</strong> [<a href=\"";
                        echo $this->getAttribute($context["inactive"], "U_SEARCH_USER", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                        echo "</a>]";
                    }
                    // line 292
                    echo "\t\t\t\t</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 293
                    echo $this->getAttribute($context["inactive"], "JOINED", []);
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 294
                    echo $this->getAttribute($context["inactive"], "INACTIVE_DATE", []);
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 295
                    echo $this->getAttribute($context["inactive"], "LAST_VISIT", []);
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 297
                    echo $this->getAttribute($context["inactive"], "REASON", []);
                    echo "
\t\t\t\t\t";
                    // line 298
                    if ($this->getAttribute($context["inactive"], "REMINDED", [])) {
                        echo "<br />";
                        echo $this->getAttribute($context["inactive"], "REMINDED_EXPLAIN", []);
                    }
                    // line 299
                    echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 302
                    echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                    // line 303
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_INACTIVE_USERS");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inactive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 306
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 309
            echo "
";
        }
        // line 311
        echo "
";
        // line 312
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_main.html", 312)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 312,  900 => 311,  896 => 309,  891 => 306,  882 => 303,  879 => 302,  872 => 299,  867 => 298,  863 => 297,  858 => 295,  854 => 294,  850 => 293,  847 => 292,  834 => 291,  830 => 290,  826 => 288,  821 => 287,  814 => 283,  810 => 282,  806 => 281,  802 => 280,  798 => 279,  788 => 274,  783 => 272,  777 => 270,  775 => 269,  772 => 268,  767 => 265,  758 => 262,  754 => 261,  750 => 260,  746 => 259,  743 => 258,  739 => 257,  732 => 253,  728 => 252,  724 => 251,  720 => 250,  710 => 245,  705 => 243,  699 => 241,  697 => 240,  694 => 239,  690 => 237,  689 => 236,  682 => 232,  676 => 231,  671 => 229,  668 => 228,  661 => 224,  655 => 223,  649 => 221,  647 => 220,  640 => 216,  634 => 215,  629 => 213,  622 => 209,  616 => 208,  611 => 206,  604 => 202,  598 => 201,  593 => 199,  586 => 195,  582 => 194,  577 => 192,  570 => 188,  566 => 187,  561 => 185,  556 => 183,  553 => 182,  551 => 181,  546 => 178,  523 => 172,  517 => 170,  514 => 169,  512 => 168,  509 => 167,  504 => 164,  500 => 162,  494 => 160,  484 => 158,  482 => 157,  475 => 155,  473 => 154,  469 => 153,  464 => 152,  458 => 149,  453 => 148,  449 => 147,  444 => 146,  438 => 143,  433 => 142,  429 => 141,  424 => 140,  418 => 137,  413 => 136,  409 => 135,  404 => 134,  398 => 131,  393 => 130,  389 => 129,  384 => 128,  378 => 125,  373 => 124,  369 => 123,  364 => 122,  358 => 119,  353 => 118,  349 => 117,  344 => 116,  338 => 113,  333 => 112,  329 => 111,  324 => 110,  316 => 105,  312 => 104,  308 => 103,  304 => 102,  297 => 98,  293 => 96,  292 => 95,  289 => 94,  283 => 91,  280 => 90,  278 => 89,  275 => 88,  269 => 85,  266 => 84,  264 => 83,  261 => 82,  258 => 81,  252 => 78,  248 => 77,  245 => 76,  243 => 75,  240 => 74,  234 => 71,  230 => 70,  227 => 69,  225 => 68,  222 => 67,  216 => 64,  212 => 63,  209 => 62,  207 => 61,  204 => 60,  198 => 57,  194 => 56,  191 => 55,  188 => 54,  186 => 53,  183 => 52,  177 => 49,  173 => 48,  170 => 47,  168 => 46,  165 => 45,  159 => 42,  155 => 41,  152 => 40,  150 => 39,  147 => 38,  141 => 35,  138 => 34,  135 => 33,  123 => 30,  119 => 29,  116 => 28,  114 => 27,  103 => 25,  99 => 24,  95 => 23,  92 => 22,  90 => 21,  81 => 19,  78 => 18,  76 => 17,  71 => 15,  66 => 13,  63 => 12,  57 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_main.html", "");
    }
}
