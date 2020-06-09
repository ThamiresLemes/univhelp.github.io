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

/* acp_forums.html */
class __TwigTemplate_bbf9e5b1540196e40180452e05e320e06e2da2ea58c14e24fc98abe8a60537cb extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_EDIT_FORUM"] ?? null)) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Handle displaying/hiding several options based on the forum type
\t\t*/
\t\tfunction display_options(value)
\t\t{
\t\t\t";
            // line 14
            if (( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_POST"] ?? null))) {
                // line 15
                echo "\t\t\t\tif (value == ";
                echo ($context["FORUM_POST"] ?? null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', 1);
\t\t\t\t}
\t\t\t";
            }
            // line 24
            echo "
\t\t\t";
            // line 25
            if ((( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_CAT"] ?? null)) && ($context["S_HAS_SUBFORUMS"] ?? null))) {
                // line 26
                echo "\t\t\t\tif (value == ";
                echo ($context["FORUM_LINK"] ?? null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', 1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t}
\t\t\t";
            }
            // line 35
            echo "
\t\t\tif (value == ";
            // line 36
            echo ($context["FORUM_POST"] ?? null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 43
            echo ($context["FORUM_LINK"] ?? null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 50
            echo ($context["FORUM_CAT"] ?? null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', 1);
\t\t\t}
\t\t}

\t\t/**
\t\t* Init the wanted display functionality if javascript is enabled.
\t\t* If javascript is not available, the user is still able to properly administer.
\t\t*/
\t\tonload = function()
\t\t{
\t\t\t";
            // line 65
            if (( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_POST"] ?? null))) {
                // line 66
                echo "\t\t\t\t";
                if (($context["S_FORUM_POST"] ?? null)) {
                    // line 67
                    echo "\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t";
                }
                // line 69
                echo "\t\t\t";
            }
            // line 70
            echo "
\t\t\t";
            // line 71
            if ((( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_CAT"] ?? null)) && ($context["S_HAS_SUBFORUMS"] ?? null))) {
                // line 72
                echo "\t\t\t\t";
                if (($context["S_FORUM_CAT"] ?? null)) {
                    // line 73
                    echo "\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t";
            }
            // line 76
            echo "
\t\t\t";
            // line 77
            if ( !($context["S_FORUM_POST"] ?? null)) {
                // line 78
                echo "\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t";
            }
            // line 80
            echo "
\t\t\t";
            // line 81
            if ( !($context["S_FORUM_CAT"] ?? null)) {
                // line 82
                echo "\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t";
            }
            // line 84
            echo "
\t\t\t";
            // line 85
            if ( !($context["S_FORUM_LINK"] ?? null)) {
                // line 86
                echo "\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t";
            }
            // line 88
            echo "
\t\t\t";
            // line 89
            if (($context["S_FORUM_LINK"] ?? null)) {
                // line 90
                echo "\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t";
            }
            // line 92
            echo "\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 97
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 99
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo " ";
            if (($context["FORUM_NAME"] ?? null)) {
                echo ":: ";
                echo ($context["FORUM_NAME"] ?? null);
            }
            echo "</h1>

\t<p>";
            // line 101
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 103
            if (($context["S_ERROR"] ?? null)) {
                // line 104
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 105
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 106
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 109
            echo "
\t<form id=\"forumedit\" method=\"post\" action=\"";
            // line 110
            echo ($context["U_EDIT_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_SETTINGS");
            echo "</legend>
\t";
            // line 114
            // line 115
            echo "\t<dl>
\t\t<dt><label for=\"forum_type\">";
            // line 116
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_TYPE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_type\" name=\"forum_type\" onchange=\"display_options(this.options[this.selectedIndex].value);\">";
            // line 117
            echo ($context["S_FORUM_TYPE_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t";
            // line 119
            if (( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_POST"] ?? null))) {
                // line 120
                echo "\t<div id=\"type_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"type_action\">";
                // line 122
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DECIDE_MOVE_DELETE_CONTENT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" value=\"delete\"";
                // line 123
                if ( !($context["S_MOVE_FORUM_OPTIONS"] ?? null)) {
                    echo " checked=\"checked\" id=\"type_action\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 124
                if (($context["S_MOVE_FORUM_OPTIONS"] ?? null)) {
                    echo "<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" id=\"type_action\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"to_forum_id\">";
                    echo ($context["S_MOVE_FORUM_OPTIONS"] ?? null);
                    echo "</select></dd>";
                }
                // line 125
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 128
            echo "\t";
            if ((( !($context["S_ADD_ACTION"] ?? null) && ($context["S_FORUM_ORIG_CAT"] ?? null)) && ($context["S_HAS_SUBFORUMS"] ?? null))) {
                // line 129
                echo "\t<div id=\"cat_to_link_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"action_subforums\">";
                // line 131
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DECIDE_MOVE_DELETE_SUBFORUMS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t";
                // line 132
                if (($context["S_FORUMS_LIST"] ?? null)) {
                    // line 133
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo ($context["S_FORUMS_LIST"] ?? null);
                    echo "</select></dd>
\t\t\t";
                } else {
                    // line 135
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_SUBFORUMS");
                    echo "</label></dd>
\t\t\t";
                }
                // line 137
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 140
            echo "\t<dl>
\t\t<dt><label for=\"parent\">";
            // line 141
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PARENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"parent\" name=\"forum_parent_id\"><option value=\"0\"";
            // line 142
            if ( !($context["S_FORUM_PARENT_ID"] ?? null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PARENT");
            echo "</option>";
            echo ($context["S_PARENT_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t";
            // line 144
            if (($context["S_CAN_COPY_PERMISSIONS"] ?? null)) {
                // line 145
                echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_perm_from\">";
                // line 146
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"forum_perm_from\" name=\"forum_perm_from\"><option value=\"0\">";
                // line 147
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PERMISSIONS");
                echo "</option>";
                echo ($context["S_FORUM_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 150
            echo "\t<dl>
\t\t<dt><label for=\"forum_name\">";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_name\" name=\"forum_name\" value=\"";
            // line 152
            echo ($context["FORUM_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_desc\">";
            // line 155
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_DESC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"forum_desc\" name=\"forum_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 156
            echo ($context["FORUM_DESC"] ?? null);
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 157
            if (($context["S_DESC_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 158
            if (($context["S_DESC_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 159
            if (($context["S_DESC_URLS_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_image\">";
            // line 162
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_IMAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_IMAGE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_image\" name=\"forum_image\" value=\"";
            // line 163
            echo ($context["FORUM_IMAGE"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t";
            // line 164
            if (($context["FORUM_IMAGE_SRC"] ?? null)) {
                // line 165
                echo "\t\t\t<dd><img src=\"";
                echo ($context["FORUM_IMAGE_SRC"] ?? null);
                echo "\" alt=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_IMAGE");
                echo "\" /></dd>
\t\t";
            }
            // line 167
            echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password\">";
            // line 169
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password\" name=\"forum_password\" value=\"";
            // line 170
            if (($context["S_FORUM_PASSWORD_SET"] ?? null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password_confirm\">";
            // line 173
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD_CONFIRM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD_CONFIRM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password_confirm\" name=\"forum_password_confirm\" value=\"";
            // line 174
            if (($context["S_FORUM_PASSWORD_SET"] ?? null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t";
            // line 176
            if (($context["S_FORUM_PASSWORD_SET"] ?? null)) {
                // line 177
                echo "\t<dl>
\t\t<dt><label for=\"forum_password_unset\">";
                // line 178
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD_UNSET");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PASSWORD_UNSET_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input id=\"forum_password_unset\" name=\"forum_password_unset\" type=\"checkbox\" /></dd>
\t</dl>
\t";
            }
            // line 182
            echo "\t<dl>
\t\t<dt><label for=\"forum_style\">";
            // line 183
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_STYLE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_style\" name=\"forum_style\"><option value=\"0\">";
            // line 184
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_STYLE");
            echo "</option>";
            echo ($context["S_STYLES_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t";
            // line 186
            // line 187
            echo "\t</fieldset>

\t<div id=\"forum_cat_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 191
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"display_active\">";
            // line 193
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_ACTIVE_TOPICS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_ACTIVE_TOPICS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"1\"";
            // line 194
            if (($context["S_ENABLE_ACTIVE_TOPICS"] ?? null)) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"0\"";
            // line 195
            if ( !($context["S_ENABLE_ACTIVE_TOPICS"] ?? null)) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_post_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 202
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t";
            // line 203
            // line 204
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_status\">";
            // line 205
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_STATUS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select id=\"forum_status\" name=\"forum_status\">";
            // line 206
            echo ($context["S_STATUS_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_subforum_list\">";
            // line 209
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_SUBFORUMS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_SUBFORUMS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"1\"";
            // line 210
            if (($context["S_DISPLAY_SUBFORUM_LIST"] ?? null)) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"0\"";
            // line 211
            if ( !($context["S_DISPLAY_SUBFORUM_LIST"] ?? null)) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_on_index\">";
            // line 214
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"1\"";
            // line 215
            if (($context["S_DISPLAY_ON_INDEX"] ?? null)) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"0\"";
            // line 216
            if ( !($context["S_DISPLAY_ON_INDEX"] ?? null)) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_post_review\">";
            // line 219
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_POST_REVIEW");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_POST_REVIEW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"1\"";
            // line 220
            if (($context["S_ENABLE_POST_REVIEW"] ?? null)) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"0\"";
            // line 221
            if ( !($context["S_ENABLE_POST_REVIEW"] ?? null)) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_quick_reply\">";
            // line 224
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_QUICK_REPLY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_QUICK_REPLY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"1\"";
            // line 225
            if (($context["S_ENABLE_QUICK_REPLY"] ?? null)) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"0\"";
            // line 226
            if ( !($context["S_ENABLE_QUICK_REPLY"] ?? null)) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_indexing\">";
            // line 229
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_INDEXING");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_INDEXING_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"1\"";
            // line 230
            if (($context["S_ENABLE_INDEXING"] ?? null)) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"0\"";
            // line 231
            if ( !($context["S_ENABLE_INDEXING"] ?? null)) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_icons\">";
            // line 234
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_TOPIC_ICONS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"1\"";
            // line 235
            if (($context["S_TOPIC_ICONS"] ?? null)) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"0\"";
            // line 236
            if ( !($context["S_TOPIC_ICONS"] ?? null)) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_recent\">";
            // line 239
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_RECENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_RECENT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"1\"";
            // line 240
            if (($context["S_DISPLAY_ACTIVE_TOPICS"] ?? null)) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"0\"";
            // line 241
            if ( !($context["S_DISPLAY_ACTIVE_TOPICS"] ?? null)) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"topics_per_page\">";
            // line 244
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_TOPICS_PAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_TOPICS_PAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"topics_per_page\" name=\"topics_per_page\" value=\"";
            // line 245
            echo ($context["TOPICS_PER_PAGE"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /></dd>
\t\t</dl>
\t\t";
            // line 247
            // line 248
            echo "\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
            // line 251
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PRUNE_SETTINGS");
            echo "</legend>
\t\t";
            // line 252
            // line 253
            echo "\t\t<dl>
\t\t\t<dt><label for=\"enable_prune\">";
            // line 254
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_AUTO_PRUNE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_AUTO_PRUNE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"1\"";
            // line 255
            if (($context["S_PRUNE_ENABLE"] ?? null)) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"0\"";
            // line 256
            if ( !($context["S_PRUNE_ENABLE"] ?? null)) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_freq\">";
            // line 259
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_FREQ");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_freq\" name=\"prune_freq\" value=\"";
            // line 260
            echo ($context["PRUNE_FREQ"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_days\">";
            // line 263
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_DAYS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" value=\"";
            // line 264
            echo ($context["PRUNE_DAYS"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_viewed\">";
            // line 267
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_VIEWED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_VIEWED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_viewed\" name=\"prune_viewed\" value=\"";
            // line 268
            echo ($context["PRUNE_VIEWED"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_old_polls\">";
            // line 271
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\"";
            // line 272
            if (($context["S_PRUNE_OLD_POLLS"] ?? null)) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"0\"";
            // line 273
            if ( !($context["S_PRUNE_OLD_POLLS"] ?? null)) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_announce\">";
            // line 276
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\"";
            // line 277
            if (($context["S_PRUNE_ANNOUNCE"] ?? null)) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"0\"";
            // line 278
            if ( !($context["S_PRUNE_ANNOUNCE"] ?? null)) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_sticky\">";
            // line 281
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\"";
            // line 282
            if (($context["S_PRUNE_STICKY"] ?? null)) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"0\"";
            // line 283
            if ( !($context["S_PRUNE_STICKY"] ?? null)) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_shadow_prune\">";
            // line 286
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PRUNE_SHADOW");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PRUNE_SHADOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"1\"";
            // line 287
            if (($context["S_PRUNE_SHADOW_ENABLE"] ?? null)) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"0\"";
            // line 288
            if ( !($context["S_PRUNE_SHADOW_ENABLE"] ?? null)) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_freq\">";
            // line 291
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_SHADOW_FREQ");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_SHADOW_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_freq\" name=\"prune_shadow_freq\" value=\"";
            // line 292
            echo ($context["PRUNE_SHADOW_FREQ"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_days\">";
            // line 295
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_SHADOW_DAYS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTO_PRUNE_SHADOW_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_days\" name=\"prune_shadow_days\" value=\"";
            // line 296
            echo ($context["PRUNE_SHADOW_DAYS"] ?? null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t";
            // line 298
            // line 299
            echo "\t\t</fieldset>
\t</div>

\t<div id=\"forum_link_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 304
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"link_display_on_index\">";
            // line 306
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"1\"";
            // line 307
            if (($context["S_DISPLAY_ON_INDEX"] ?? null)) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"0\"";
            // line 308
            if ( !($context["S_DISPLAY_ON_INDEX"] ?? null)) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link\">";
            // line 311
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LINK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_link\" name=\"forum_link\" value=\"";
            // line 312
            echo ($context["FORUM_DATA_LINK"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link_track\">";
            // line 315
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LINK_TRACK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LINK_TRACK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"1\"";
            // line 316
            if (($context["S_FORUM_LINK_TRACK"] ?? null)) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"0\"";
            // line 317
            if ( !($context["S_FORUM_LINK_TRACK"] ?? null)) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_rules_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 324
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
            echo "</legend>
\t\t";
            // line 325
            // line 326
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules_link\">";
            // line 327
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES_LINK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_rules_link\" name=\"forum_rules_link\" value=\"";
            // line 328
            echo ($context["FORUM_RULES_LINK"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t";
            // line 330
            if (($context["FORUM_RULES_PREVIEW"] ?? null)) {
                // line 331
                echo "\t\t<dl>
\t\t\t<dt><label>";
                // line 332
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES_PREVIEW");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>";
                // line 333
                echo ($context["FORUM_RULES_PREVIEW"] ?? null);
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 336
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules\">";
            // line 337
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea id=\"forum_rules\" name=\"forum_rules\" rows=\"4\" cols=\"70\" data-bbcode=\"true\">";
            // line 338
            echo ($context["FORUM_RULES_PLAIN"] ?? null);
            echo "</textarea></dd>
\t\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_bbcode\"";
            // line 339
            if (($context["S_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_smilies\"";
            // line 340
            if (($context["S_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_urls\"";
            // line 341
            if (($context["S_URLS_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 343
            // line 344
            echo "\t\t</fieldset>
\t</div>
\t
\t";
            // line 347
            // line 348
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 350
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 351
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 352
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t";
            // line 353
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 357
($context["S_DELETE_FORUM"] ?? null)) {
            // line 358
            echo "
\t<a href=\"";
            // line 359
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 361
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_DELETE");
            echo "</h1>

\t<p>";
            // line 363
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_DELETE_EXPLAIN");
            echo "</p>

\t";
            // line 365
            if (($context["S_ERROR"] ?? null)) {
                // line 366
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 367
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 368
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 371
            echo "
\t<form id=\"acp_forum\" method=\"post\" action=\"";
            // line 372
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 375
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_DELETE");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 377
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 378
            echo ($context["FORUM_NAME"] ?? null);
            echo "</strong></dd>
\t</dl>
\t";
            // line 380
            if (($context["S_FORUM_POST"] ?? null)) {
                // line 381
                echo "\t\t<dl>
\t\t\t<dt><label for=\"delete_action\">";
                // line 382
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_posts\" value=\"delete\" checked=\"checked\" /> ";
                // line 383
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 384
                if (($context["S_MOVE_FORUM_OPTIONS"] ?? null)) {
                    // line 385
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_posts\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"posts_to_id\">";
                    echo ($context["S_MOVE_FORUM_OPTIONS"] ?? null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 387
                echo "\t\t</dl>
\t";
            }
            // line 389
            echo "\t";
            if (($context["S_HAS_SUBFORUMS"] ?? null)) {
                // line 390
                echo "\t\t<dl>
\t\t\t<dt><label for=\"sub_delete_action\">";
                // line 391
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"sub_delete_action\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                // line 392
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_SUBFORUMS");
                echo "</label></dd>
\t\t\t";
                // line 393
                if (($context["S_FORUMS_LIST"] ?? null)) {
                    // line 394
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_subforums\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo ($context["S_FORUMS_LIST"] ?? null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 396
                echo "\t\t</dl>
\t";
            }
            // line 398
            echo "
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 400
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 402
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 406
($context["S_CONTINUE_SYNC"] ?? null)) {
            // line 407
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar close_waitscreen = 0;
\t\t// no scrollbars...
\t\tpopup('";
            // line 412
            echo ($context["UA_PROGRESS_BAR"] ?? null);
            echo "', 400, 240, '_sync');
\t// ]]>
\t</script>

\t<h1>";
            // line 416
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 418
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t<p>";
            // line 420
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROGRESS_EXPLAIN");
            echo "</p>

";
        } else {
            // line 423
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar()
\t\t{
\t\t\tvar close_waitscreen = 0;
\t\t\t// no scrollbars...
\t\t\tpopup('";
            // line 433
            echo ($context["UA_PROGRESS_BAR"] ?? null);
            echo "', 400, 240, '_sync');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 438
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 440
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 442
            if (($context["ERROR_MSG"] ?? null)) {
                // line 443
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 444
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 445
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 448
            echo "
\t";
            // line 449
            if (($context["S_RESYNCED"] ?? null)) {
                // line 450
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tvar close_waitscreen = 1;
\t\t// ]]>
\t\t</script>

\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 457
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 458
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RESYNCED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 461
            echo "
\t<p><strong>";
            // line 462
            echo ($context["NAVIGATION"] ?? null);
            if (($context["S_NO_FORUMS"] ?? null)) {
                echo " [<a href=\"";
                echo ($context["U_EDIT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
                echo "</a> | <a href=\"";
                echo ($context["U_DELETE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "</a>";
                if ( !($context["S_LINK"] ?? null)) {
                    echo " | <a href=\"";
                    echo ($context["U_SYNC"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</strong></p>

\t";
            // line 464
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "forums", []))) {
                // line 465
                echo "\t\t<table class=\"table1 forums\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 468
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forums", []));
                foreach ($context['_seq'] as $context["_key"] => $context["forums"]) {
                    // line 469
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"folder\">";
                    // line 470
                    echo $this->getAttribute($context["forums"], "FOLDER_IMAGE", []);
                    echo "</td>
\t\t\t\t<td class=\"forum-desc\">
\t\t\t\t\t";
                    // line 472
                    if ($this->getAttribute($context["forums"], "FORUM_IMAGE", [])) {
                        echo "<div style=\"float: ";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo "; margin-right: 5px;\">";
                        echo $this->getAttribute($context["forums"], "FORUM_IMAGE", []);
                        echo "</div>";
                    }
                    // line 473
                    echo "\t\t\t\t\t<strong>";
                    if ($this->getAttribute($context["forums"], "S_FORUM_LINK", [])) {
                        echo $this->getAttribute($context["forums"], "FORUM_NAME", []);
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forums"], "U_FORUM", []);
                        echo "\">";
                        echo $this->getAttribute($context["forums"], "FORUM_NAME", []);
                        echo "</a>";
                    }
                    echo "</strong>
\t\t\t\t\t";
                    // line 474
                    if ($this->getAttribute($context["forums"], "FORUM_DESCRIPTION", [])) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["forums"], "FORUM_DESCRIPTION", []);
                        echo "</span>";
                    }
                    // line 475
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["forums"], "S_FORUM_POST", [])) {
                        echo "<br /><br /><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forums"], "FORUM_TOPICS", []);
                        echo "</strong> / ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forums"], "FORUM_POSTS", []);
                        echo "</strong></span>";
                    }
                    // line 476
                    echo "\t\t\t\t</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 478
                    echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 479
                    echo $this->getAttribute($context["forums"], "U_MOVE_UP", []);
                    echo "\" data-ajax=\"row_up\">";
                    echo ($context["ICON_MOVE_UP"] ?? null);
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 480
                    echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 481
                    echo $this->getAttribute($context["forums"], "U_MOVE_DOWN", []);
                    echo "\" data-ajax=\"row_down\">";
                    echo ($context["ICON_MOVE_DOWN"] ?? null);
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 482
                    echo $this->getAttribute($context["forums"], "U_EDIT", []);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>
\t\t\t\t\t";
                    // line 483
                    if ( !$this->getAttribute($context["forums"], "S_FORUM_LINK", [])) {
                        // line 484
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forums"], "U_SYNC", []);
                        echo "\" onclick=\"popup_progress_bar();\">";
                        echo ($context["ICON_SYNC"] ?? null);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 486
                        echo "\t\t\t\t\t\t";
                        echo ($context["ICON_SYNC_DISABLED"] ?? null);
                        echo "
\t\t\t\t\t";
                    }
                    // line 488
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forums"], "U_DELETE", []);
                    echo "\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 492
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 495
            echo "
\t<form id=\"fselect\" method=\"post\" action=\"";
            // line 496
            echo ($context["U_SEL_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 499
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            echo ($context["FORUM_BOX"] ?? null);
            echo "</select>

\t\t";
            // line 501
            echo "<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />";
            // line 502
            echo "\t\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"forums\" method=\"post\" action=\"";
            // line 506
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />

\t\t<input type=\"text\" name=\"forum_name\" value=\"\" maxlength=\"255\" />
\t\t<input class=\"button2\" name=\"addforum\" type=\"submit\" value=\"";
            // line 512
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_FORUM");
            echo "\" />
\t\t";
            // line 513
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 518
        echo "
";
        // line 519
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_forums.html", 519)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1589 => 519,  1586 => 518,  1578 => 513,  1574 => 512,  1565 => 506,  1557 => 502,  1553 => 501,  1545 => 499,  1539 => 496,  1536 => 495,  1531 => 492,  1518 => 488,  1512 => 486,  1504 => 484,  1502 => 483,  1496 => 482,  1490 => 481,  1486 => 480,  1480 => 479,  1476 => 478,  1472 => 476,  1457 => 475,  1451 => 474,  1438 => 473,  1430 => 472,  1425 => 470,  1422 => 469,  1418 => 468,  1413 => 465,  1411 => 464,  1387 => 462,  1384 => 461,  1378 => 458,  1374 => 457,  1365 => 450,  1363 => 449,  1360 => 448,  1354 => 445,  1350 => 444,  1347 => 443,  1345 => 442,  1340 => 440,  1335 => 438,  1327 => 433,  1315 => 423,  1309 => 420,  1304 => 418,  1299 => 416,  1292 => 412,  1285 => 407,  1283 => 406,  1276 => 402,  1271 => 400,  1267 => 398,  1263 => 396,  1255 => 394,  1253 => 393,  1249 => 392,  1244 => 391,  1241 => 390,  1238 => 389,  1234 => 387,  1226 => 385,  1224 => 384,  1220 => 383,  1215 => 382,  1212 => 381,  1210 => 380,  1205 => 378,  1200 => 377,  1195 => 375,  1189 => 372,  1186 => 371,  1180 => 368,  1176 => 367,  1173 => 366,  1171 => 365,  1166 => 363,  1161 => 361,  1152 => 359,  1149 => 358,  1147 => 357,  1140 => 353,  1136 => 352,  1132 => 351,  1128 => 350,  1124 => 348,  1123 => 347,  1118 => 344,  1117 => 343,  1108 => 341,  1100 => 340,  1092 => 339,  1088 => 338,  1081 => 337,  1078 => 336,  1072 => 333,  1067 => 332,  1064 => 331,  1062 => 330,  1057 => 328,  1050 => 327,  1047 => 326,  1046 => 325,  1042 => 324,  1028 => 317,  1020 => 316,  1013 => 315,  1007 => 312,  1000 => 311,  990 => 308,  982 => 307,  975 => 306,  970 => 304,  963 => 299,  962 => 298,  955 => 296,  948 => 295,  940 => 292,  933 => 291,  923 => 288,  915 => 287,  908 => 286,  898 => 283,  890 => 282,  885 => 281,  875 => 278,  867 => 277,  862 => 276,  852 => 273,  844 => 272,  837 => 271,  829 => 268,  822 => 267,  814 => 264,  807 => 263,  799 => 260,  792 => 259,  782 => 256,  774 => 255,  767 => 254,  764 => 253,  763 => 252,  759 => 251,  754 => 248,  753 => 247,  748 => 245,  741 => 244,  731 => 241,  723 => 240,  716 => 239,  706 => 236,  698 => 235,  693 => 234,  683 => 231,  675 => 230,  668 => 229,  658 => 226,  650 => 225,  643 => 224,  633 => 221,  625 => 220,  618 => 219,  608 => 216,  600 => 215,  593 => 214,  583 => 211,  575 => 210,  568 => 209,  562 => 206,  557 => 205,  554 => 204,  553 => 203,  549 => 202,  535 => 195,  527 => 194,  520 => 193,  515 => 191,  509 => 187,  508 => 186,  501 => 184,  496 => 183,  493 => 182,  483 => 178,  480 => 177,  478 => 176,  471 => 174,  464 => 173,  456 => 170,  449 => 169,  445 => 167,  437 => 165,  435 => 164,  431 => 163,  424 => 162,  414 => 159,  406 => 158,  398 => 157,  394 => 156,  387 => 155,  381 => 152,  376 => 151,  373 => 150,  365 => 147,  358 => 146,  355 => 145,  353 => 144,  342 => 142,  337 => 141,  334 => 140,  329 => 137,  323 => 135,  315 => 133,  313 => 132,  308 => 131,  304 => 129,  301 => 128,  296 => 125,  288 => 124,  280 => 123,  275 => 122,  271 => 120,  269 => 119,  264 => 117,  259 => 116,  256 => 115,  255 => 114,  251 => 113,  245 => 110,  242 => 109,  236 => 106,  232 => 105,  229 => 104,  227 => 103,  222 => 101,  212 => 99,  203 => 97,  196 => 92,  192 => 90,  190 => 89,  187 => 88,  183 => 86,  181 => 85,  178 => 84,  174 => 82,  172 => 81,  169 => 80,  165 => 78,  163 => 77,  160 => 76,  157 => 75,  153 => 73,  150 => 72,  148 => 71,  145 => 70,  142 => 69,  138 => 67,  135 => 66,  133 => 65,  115 => 50,  105 => 43,  95 => 36,  92 => 35,  79 => 26,  77 => 25,  74 => 24,  61 => 15,  59 => 14,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_forums.html", "");
    }
}
