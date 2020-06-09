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

/* acp_mchat_globalsettings.html */
class __TwigTemplate_8060531e86b771604007ee9523fb106c5874f92d01ece9e88d84111079c9f9a6 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_mchat_globalsettings.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<style>
\tdd label span {
\t\twhite-space: normal;
\t}
</style>

<h1>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TITLE");
        echo "</h1>

";
        // line 11
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_VERSION") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo " <em>";
        echo ($context["MCHAT_VERSION"] ?? null);
        echo "</em>

";
        // line 13
        if (($context["MCHAT_ERROR"] ?? null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo ($context["MCHAT_ERROR"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
<form id=\"acp_mchat\" method=\"post\" action=\"";
        // line 20
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_INDEX");
        echo "</legend>

\t\t";
        // line 24
        // line 25
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_index_height\">";
        // line 27
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_INDEX_HEIGHT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_INDEX_HEIGHT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_index_height\" id=\"mchat_index_height\" size=\"10\" maxlength=\"4\" value=\"";
        // line 29
        echo ($context["MCHAT_INDEX_HEIGHT"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_message_num_index\">";
        // line 32
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_INDEX") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_INDEX_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_message_num_index\" id=\"mchat_message_num_index\" size=\"10\" maxlength=\"4\" value=\"";
        // line 34
        echo ($context["MCHAT_MESSAGE_NUM_INDEX"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_MESSAGES");
        echo "</span></dd>
\t\t</dl>

\t\t";
        // line 37
        // line 38
        echo "
\t</fieldset>

\t";
        // line 41
        // line 42
        echo "
\t<fieldset>
\t\t<legend>";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_CUSTOM");
        echo "</legend>

\t\t";
        // line 46
        // line 47
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_custom_page\">";
        // line 49
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_CUSTOM_PAGE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_custom_page\" value=\"1\"";
        // line 50
        if (($context["MCHAT_CUSTOM_PAGE"] ?? null)) {
            echo " id=\"mchat_custom_page\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_custom_page\" value=\"0\"";
        // line 51
        if ( !($context["MCHAT_CUSTOM_PAGE"] ?? null)) {
            echo " id=\"mchat_custom_page\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_custom_height\">";
        // line 54
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_CUSTOM_HEIGHT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 55
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_CUSTOM_HEIGHT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_custom_height\" id=\"mchat_custom_height\" size=\"10\" maxlength=\"4\" value=\"";
        // line 56
        echo ($context["MCHAT_CUSTOM_HEIGHT"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_message_num_custom\">";
        // line 59
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_CUSTOM") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_message_num_custom\" id=\"mchat_message_num_custom\" size=\"10\" value=\"";
        // line 61
        echo ($context["MCHAT_MESSAGE_NUM_CUSTOM"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_MESSAGES");
        echo "</span></dd>
\t\t</dl>

\t\t";
        // line 64
        // line 65
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 68
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_ARCHIVE");
        echo "</legend>

\t\t";
        // line 70
        // line 71
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_message_num_archive\">";
        // line 73
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_ARCHIVE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_message_num_archive\" id=\"mchat_message_num_archive\" size=\"10\" value=\"";
        // line 75
        echo ($context["MCHAT_MESSAGE_NUM_ARCHIVE"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_MESSAGES");
        echo "</span></dd>
\t\t</dl>

\t\t";
        // line 78
        // line 79
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_archive_sort\">";
        // line 81
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_SORT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_archive_sort\" value=\"0\"";
        // line 83
        if ((($context["MCHAT_ARCHIVE_SORT"] ?? null) == 0)) {
            echo " id=\"mchat_archive_sort\" checked=\"checked\"";
        }
        echo "> <span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_SORT_TOP_BOTTOM");
        echo "</span></label><br>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_archive_sort\" value=\"1\"";
        // line 84
        if ((($context["MCHAT_ARCHIVE_SORT"] ?? null) == 1)) {
            echo " id=\"mchat_archive_sort\" checked=\"checked\"";
        }
        echo "> <span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_SORT_BOTTOM_TOP");
        echo "</span></label><br>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_archive_sort\" value=\"2\"";
        // line 85
        if ((($context["MCHAT_ARCHIVE_SORT"] ?? null) == 2)) {
            echo " id=\"mchat_archive_sort\" checked=\"checked\"";
        }
        echo "> <span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_SORT_USER");
        echo "</span></label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 90
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_MESSAGES");
        echo "</legend>

\t\t";
        // line 92
        // line 93
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_timeout\">";
        // line 95
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TIMEOUT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 96
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_TIMEOUT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_timeout\" id=\"mchat_timeout\" size=\"10\" maxlength=\"4\" value=\"";
        // line 97
        echo ($context["MCHAT_TIMEOUT"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_refresh\">";
        // line 100
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_REFRESH") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 101
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_REFRESH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_refresh\" id=\"mchat_refresh\" size=\"10\" value=\"";
        // line 102
        echo ($context["MCHAT_REFRESH"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_edit_delete_limit\">";
        // line 105
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_EDIT_DELETE_LIMIT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 106
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_EDIT_DELETE_LIMIT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_edit_delete_limit\" id=\"mchat_edit_delete_limit\" size=\"10\" value=\"";
        // line 107
        echo ($context["MCHAT_EDIT_DELETE_LIMIT"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_live_updates\">";
        // line 110
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LIVE_UPDATES") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 111
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LIVE_UPDATES_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_live_updates\" value=\"1\"";
        // line 112
        if (($context["MCHAT_LIVE_UPDATES"] ?? null)) {
            echo " id=\"mchat_live_updates\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_live_updates\" value=\"0\"";
        // line 113
        if ( !($context["MCHAT_LIVE_UPDATES"] ?? null)) {
            echo " id=\"mchat_live_updates\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_flood_time\">";
        // line 116
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_FLOOD_TIME") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 117
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_FLOOD_TIME_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_flood_time\" id=\"mchat_flood_time\" size=\"10\" value=\"";
        // line 118
        echo ($context["MCHAT_FLOOD_TIME"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_flood_messages\">";
        // line 121
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_FLOOD_MESSAGES") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 122
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_FLOOD_MESSAGES_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_flood_messages\" id=\"mchat_flood_messages\" size=\"10\" value=\"";
        // line 123
        echo ($context["MCHAT_FLOOD_MESSAGES"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_MESSAGES");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_max_message_lngth\">";
        // line 126
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MAX_MESSAGE_LENGTH") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 127
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_max_message_lngth\" id=\"mchat_max_message_lngth\" size=\"10\" value=\"";
        // line 128
        echo ($context["MCHAT_MAX_MESSAGE_LNGTH"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_CHARACTERS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_max_input_height\">";
        // line 131
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MAX_INPUT_HEIGHT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 132
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MAX_INPUT_HEIGHT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_max_input_height\" id=\"mchat_max_input_height\" size=\"10\" value=\"";
        // line 133
        echo ($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_override_min_post_chars\">";
        // line 136
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OVERRIDE_MIN_POST_CHARS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 137
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_override_min_post_chars\" value=\"1\"";
        // line 138
        if (($context["MCHAT_OVERRIDE_MIN_POST_CHARS"] ?? null)) {
            echo " id=\"mchat_override_min_post_chars\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_override_min_post_chars\" value=\"0\"";
        // line 139
        if ( !($context["MCHAT_OVERRIDE_MIN_POST_CHARS"] ?? null)) {
            echo " id=\"mchat_override_min_post_chars\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_override_smilie_limit\">";
        // line 142
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OVERRIDE_SMILIE_LIMIT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 143
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_override_smilie_limit\" value=\"1\"";
        // line 144
        if (($context["MCHAT_OVERRIDE_SMILIE_LIMIT"] ?? null)) {
            echo " id=\"mchat_override_smilie_limit\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_override_smilie_limit\" value=\"0\"";
        // line 145
        if ( !($context["MCHAT_OVERRIDE_SMILIE_LIMIT"] ?? null)) {
            echo " id=\"mchat_override_smilie_limit\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_bbcode_disallowed\">";
        // line 148
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_BBCODES_DISALLOWED") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 149
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_BBCODES_DISALLOWED_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"mchat_bbcode_disallowed\" id=\"mchat_bbcode_disallowed\" rows=\"3\" cols=\"40\">";
        // line 150
        echo ($context["MCHAT_BBCODE_DISALLOWED"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_rules\">";
        // line 153
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_RULES") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 154
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_RULES_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"mchat_rules\" id=\"mchat_rules\" rows=\"5\" cols=\"40\">";
        // line 155
        echo ($context["MCHAT_RULES"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_static_message\">";
        // line 158
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_STATIC_MESSAGE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 159
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_STATIC_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"mchat_static_message\" id=\"mchat_static_message\" rows=\"5\" cols=\"40\">";
        // line 160
        echo ($context["MCHAT_STATIC_MESSAGE"] ?? null);
        echo "</textarea></dd>
\t\t</dl>

\t\t";
        // line 163
        // line 164
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 167
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_POSTS");
        echo "</legend>

\t\t";
        // line 169
        // line 170
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_topic\">";
        // line 172
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_TOPIC") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_topic\" value=\"1\"";
        // line 174
        if (($context["MCHAT_POSTS_TOPIC"] ?? null)) {
            echo " id=\"mchat_posts_topic\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_topic\" value=\"0\"";
        // line 175
        if ( !($context["MCHAT_POSTS_TOPIC"] ?? null)) {
            echo " id=\"mchat_posts_topic\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_reply\">";
        // line 179
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_REPLY") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_reply\" value=\"1\"";
        // line 181
        if (($context["MCHAT_POSTS_REPLY"] ?? null)) {
            echo " id=\"mchat_posts_reply\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_reply\" value=\"0\"";
        // line 182
        if ( !($context["MCHAT_POSTS_REPLY"] ?? null)) {
            echo " id=\"mchat_posts_reply\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_edit\">";
        // line 186
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_EDIT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_edit\" value=\"1\"";
        // line 188
        if (($context["MCHAT_POSTS_EDIT"] ?? null)) {
            echo " id=\"mchat_posts_edit\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_edit\" value=\"0\"";
        // line 189
        if ( !($context["MCHAT_POSTS_EDIT"] ?? null)) {
            echo " id=\"mchat_posts_edit\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_quote\">";
        // line 193
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_QUOTE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_quote\" value=\"1\"";
        // line 195
        if (($context["MCHAT_POSTS_QUOTE"] ?? null)) {
            echo " id=\"mchat_posts_quote\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_quote\" value=\"0\"";
        // line 196
        if ( !($context["MCHAT_POSTS_QUOTE"] ?? null)) {
            echo " id=\"mchat_posts_quote\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_login\">";
        // line 200
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_LOGIN") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_login\" value=\"1\"";
        // line 202
        if (($context["MCHAT_POSTS_LOGIN"] ?? null)) {
            echo " id=\"mchat_posts_login\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_login\" value=\"0\"";
        // line 203
        if ( !($context["MCHAT_POSTS_LOGIN"] ?? null)) {
            echo " id=\"mchat_posts_login\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_posts_auth_check\">";
        // line 207
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_AUTH_CHECK") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 208
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_POSTS_AUTH_CHECK_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_auth_check\" value=\"1\"";
        // line 210
        if (($context["MCHAT_POSTS_AUTH_CHECK"] ?? null)) {
            echo " id=\"mchat_posts_auth_check\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_posts_auth_check\" value=\"0\"";
        // line 211
        if ( !($context["MCHAT_POSTS_AUTH_CHECK"] ?? null)) {
            echo " id=\"mchat_posts_auth_check\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t";
        // line 215
        // line 216
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 219
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_STATS");
        echo "</legend>

\t\t";
        // line 221
        // line 222
        echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_whois_refresh\">";
        // line 224
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_WHOIS_REFRESH") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br>
\t\t\t\t<span>";
        // line 225
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_WHOIS_REFRESH_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_whois_refresh\" id=\"mchat_whois_refresh\" size=\"10\" value=\"";
        // line 226
        echo ($context["MCHAT_WHOIS_REFRESH"] ?? null);
        echo "\">&nbsp;<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
        echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_navbar_link_count\">";
        // line 229
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NAVBAR_LINK_COUNT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_navbar_link_count\" value=\"1\"";
        // line 230
        if (($context["MCHAT_NAVBAR_LINK_COUNT"] ?? null)) {
            echo " id=\"mchat_navbar_link_count\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_navbar_link_count\" value=\"0\"";
        // line 231
        if ( !($context["MCHAT_NAVBAR_LINK_COUNT"] ?? null)) {
            echo " id=\"mchat_navbar_link_count\" checked=\"checked\"";
        }
        echo "> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>

\t\t";
        // line 234
        // line 235
        echo "
\t</fieldset>
\t";
        // line 237
        if (($context["MCHAT_FOUNDER"] ?? null)) {
            // line 238
            echo "\t<fieldset>
\t\t<legend>";
            // line 239
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_PRUNE");
            echo "</legend>

\t\t";
            // line 241
            // line 242
            echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_prune\">";
            // line 244
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_prune\" value=\"1\"";
            // line 245
            if (($context["MCHAT_PRUNE"] ?? null)) {
                echo " id=\"mchat_prune\" checked=\"checked\"";
            }
            echo "> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_prune\" value=\"0\"";
            // line 246
            if ( !($context["MCHAT_PRUNE"] ?? null)) {
                echo " id=\"mchat_prune\" checked=\"checked\"";
            }
            echo "> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_prune_gc\">";
            // line 249
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_GC") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br>
\t\t\t\t<span>";
            // line 250
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_GC_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"mchat_prune_gc\" id=\"mchat_prune_gc\" size=\"10\" value=\"";
            // line 251
            echo ($context["MCHAT_PRUNE_GC"] ?? null);
            echo "\">&nbsp;<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ACP_SECONDS");
            echo "</span></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_prune_num\">";
            // line 254
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NUM") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br>
\t\t\t\t<span>";
            // line 255
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NUM_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input type=\"text\" name=\"mchat_prune_num\" size=\"10\" id=\"mchat_prune_num\" value=\"";
            // line 257
            echo ($context["MCHAT_PRUNE_NUM"] ?? null);
            echo "\">
\t\t\t\t<select name=\"mchat_prune_mode\" id=\"mchat_prune_mode\" title=\"";
            // line 258
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NUM");
            echo "\">
\t\t\t\t\t";
            // line 259
            echo ($context["S_MCHAT_PRUNE_MODE_OPTIONS"] ?? null);
            echo "
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_prune_now\">";
            // line 264
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NOW") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"mchat_prune_now\" name=\"mchat_prune_now\" value=\"";
            // line 266
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NOW");
            echo "\">
\t\t\t\t<label>";
            // line 267
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PRUNE_NOW_CONFIRM") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_prune_now_confirm\" value=\"1\"> ";
            // line 268
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_prune_now_confirm\" value=\"0\" id=\"mchat_prune_now_confirm\" checked=\"checked\"> ";
            // line 269
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"mchat_purge\">";
            // line 273
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PURGE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"mchat_purge\" name=\"mchat_purge\" value=\"";
            // line 275
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PURGE");
            echo "\">
\t\t\t\t<label>";
            // line 276
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PURGE_CONFIRM") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_purge_confirm\" value=\"1\"> ";
            // line 277
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"mchat_purge_confirm\" value=\"0\" id=\"mchat_purge_confirm\" checked=\"checked\"> ";
            // line 278
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t";
            // line 282
            // line 283
            echo "
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 287
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SETTINGS_LOG");
            echo "</legend>

\t\t";
            // line 289
            // line 290
            echo "
\t\t<dl>
\t\t\t<dt><label for=\"mchat_log_enabled\">";
            // line 292
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LOG_ENABLED") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br>
\t\t\t\t<span>";
            // line 293
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LOG_ENABLED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"mchat_log_enabled\" value=\"1\"";
            // line 294
            if (($context["MCHAT_LOG_ENABLED"] ?? null)) {
                echo " id=\"mchat_log_enabled\" checked=\"checked\"";
            }
            echo "> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"mchat_log_enabled\" value=\"0\"";
            // line 295
            if ( !($context["MCHAT_LOG_ENABLED"] ?? null)) {
                echo " id=\"mchat_log_enabled\" checked=\"checked\"";
            }
            echo "> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>

\t\t";
            // line 298
            // line 299
            echo "
\t</fieldset>
\t";
        }
        // line 302
        echo "
\t";
        // line 303
        // line 304
        echo "
\t<fieldset>
\t\t<legend>";
        // line 306
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 308
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\">&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 309
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\">
\t\t</p>
\t\t";
        // line 311
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 315
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_mchat_globalsettings.html", 315)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_mchat_globalsettings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 315,  935 => 311,  930 => 309,  926 => 308,  921 => 306,  917 => 304,  916 => 303,  913 => 302,  908 => 299,  907 => 298,  897 => 295,  889 => 294,  885 => 293,  881 => 292,  877 => 290,  876 => 289,  871 => 287,  865 => 283,  864 => 282,  857 => 278,  853 => 277,  849 => 276,  845 => 275,  840 => 273,  833 => 269,  829 => 268,  825 => 267,  821 => 266,  816 => 264,  808 => 259,  804 => 258,  800 => 257,  795 => 255,  791 => 254,  783 => 251,  779 => 250,  775 => 249,  765 => 246,  757 => 245,  753 => 244,  749 => 242,  748 => 241,  743 => 239,  740 => 238,  738 => 237,  734 => 235,  733 => 234,  723 => 231,  715 => 230,  711 => 229,  703 => 226,  699 => 225,  695 => 224,  691 => 222,  690 => 221,  685 => 219,  680 => 216,  679 => 215,  668 => 211,  660 => 210,  655 => 208,  651 => 207,  640 => 203,  632 => 202,  627 => 200,  616 => 196,  608 => 195,  603 => 193,  592 => 189,  584 => 188,  579 => 186,  568 => 182,  560 => 181,  555 => 179,  544 => 175,  536 => 174,  531 => 172,  527 => 170,  526 => 169,  521 => 167,  516 => 164,  515 => 163,  509 => 160,  505 => 159,  501 => 158,  495 => 155,  491 => 154,  487 => 153,  481 => 150,  477 => 149,  473 => 148,  463 => 145,  455 => 144,  451 => 143,  447 => 142,  437 => 139,  429 => 138,  425 => 137,  421 => 136,  413 => 133,  409 => 132,  405 => 131,  397 => 128,  393 => 127,  389 => 126,  381 => 123,  377 => 122,  373 => 121,  365 => 118,  361 => 117,  357 => 116,  347 => 113,  339 => 112,  335 => 111,  331 => 110,  323 => 107,  319 => 106,  315 => 105,  307 => 102,  303 => 101,  299 => 100,  291 => 97,  287 => 96,  283 => 95,  279 => 93,  278 => 92,  273 => 90,  261 => 85,  253 => 84,  245 => 83,  240 => 81,  236 => 79,  235 => 78,  227 => 75,  223 => 74,  219 => 73,  215 => 71,  214 => 70,  209 => 68,  204 => 65,  203 => 64,  195 => 61,  191 => 60,  187 => 59,  179 => 56,  175 => 55,  171 => 54,  161 => 51,  153 => 50,  149 => 49,  145 => 47,  144 => 46,  139 => 44,  135 => 42,  134 => 41,  129 => 38,  128 => 37,  120 => 34,  116 => 33,  112 => 32,  104 => 29,  100 => 28,  96 => 27,  92 => 25,  91 => 24,  86 => 22,  81 => 20,  78 => 19,  72 => 16,  68 => 15,  65 => 14,  63 => 13,  56 => 11,  51 => 9,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_mchat_globalsettings.html", "");
    }
}
