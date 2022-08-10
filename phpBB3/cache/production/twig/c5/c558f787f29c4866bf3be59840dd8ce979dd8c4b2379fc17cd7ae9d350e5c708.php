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

/* @blitze_sitemaker/admin_bar.html */
class __TwigTemplate_46edf3f9d00de60edc4469936ac7c995e0f43bb54962b0308bfceaf8f460da46 extends \Twig\Template
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
        echo "<div id=\"admin-bar\" class=\"admin-bar-container\">
\t<div id=\"admin-options\" class=\"admin-bar-inner\" style=\"display: none;\">
\t\t<ul class=\"hmenu\">
\t\t\t<li class=\"hmenu-item\">
\t\t\t\t<a class=\"menu-item has-dropdown\" href=\"#\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BLOCKS");
        echo "</a>
\t\t\t\t<div id=\"add-block-panel\" class=\"dropdown\">
\t\t\t\t\t<div class=\"ui-state-default align-center\"><strong>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_BLOCK_EXPLAIN");
        echo "</strong></div>

\t\t\t\t\t<div id=\"blocks-list\" class=\"blocks-gallery\">
\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "block", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 12
            echo "\t\t\t\t\t\t\t<div data-block=\"";
            echo $this->getAttribute($context["block"], "SERVICE", []);
            echo "\" class=\"grid__col grid__col--1-of-3 sitemaker-block\">
\t\t\t\t\t\t\t\t<div class=\"inner\"><i class=\"fa fa-arrows-alt\"></i>";
            // line 13
            echo $this->getAttribute($context["block"], "NAME", []);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"ui-state-default align-center\">&nbsp;</div>
\t\t\t    </div>
\t\t\t</li>
\t\t\t<li class=\"hmenu-item\">
\t\t\t\t<a class=\"menu-item has-dropdown\" href=\"#\">";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAYOUT");
        echo "</a>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<h3>";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</h3>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<div class=\"grid__col grid__col--1-of-2\">
\t\t\t\t\t\t\t";
        // line 28
        if (($context["CONTROLLER_NAME"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t\t<p";
            if (($context["S_IS_STARTPAGE"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo "><a href=\"#\" class=\"sm-startpage\" id=\"set-startpage\" data-controller=\"";
            echo ($context["CONTROLLER_NAME"] ?? null);
            echo "\" data-method=\"";
            echo ($context["CONTROLLER_METHOD"] ?? null);
            echo "\" data-params=\"";
            echo ($context["CONTROLLER_PARAMS"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SET_STARTPAGE");
            echo "</a></p>
\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t<p";
        if ( !($context["S_STARTPAGE"] ?? null)) {
            echo " style=\"display: none;\"";
        }
        echo "><a href=\"#\" class=\"sm-startpage\" id=\"remove-startpage\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_STARTPAGE");
        echo "</a></p>

\t\t\t\t\t\t\t<p";
        // line 33
        if (($context["S_IS_DEFAULT"] ?? null)) {
            echo " style=\"display: none;\"";
        }
        echo "><a href=\"#\" class=\"default-layout\" data-set=\"true\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_LAYOUT_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_DEFAULT_LAYOUT");
        echo "</a></p>
\t\t\t\t\t\t\t<p";
        // line 34
        if (( !($context["U_VIEW_DEFAULT"] ?? null) || ($context["S_IS_DEFAULT"] ?? null))) {
            echo " style=\"display: none;\"";
        }
        echo "><a href=\"";
        echo ($context["U_VIEW_DEFAULT"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DEFAULT_LAYOUT");
        echo "</a></p>
\t\t\t\t\t\t\t<p";
        // line 35
        if ( !($context["S_IS_DEFAULT"] ?? null)) {
            echo " style=\"display: none;\"";
        }
        echo "><a href=\"#\" class=\"default-layout\" data-set=\"false\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_DEFAULT_LAYOUT");
        echo "</a></p>
\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<form id=\"copy-form\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<select name=\"from_route\">";
        // line 39
        echo ($context["S_ROUTE_OPS"] ?? null);
        echo "</select>
\t\t\t\t\t\t\t\t\t<select name=\"from_style\">";
        // line 40
        echo ($context["S_STYLE_OPTIONS"] ?? null);
        echo "</select>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"layout-action\" data-action=\"view\"><i class=\"fa fa-eye\"></i> ";
        // line 43
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VISIT_PAGE");
        echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"layout-action\" data-action=\"copy\"><i class=\"fa fa-copy\"></i> ";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BLOCKS_COPY_FROM");
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid__col grid__col--1-of-2\">
\t\t\t\t\t\t\t<p";
        // line 49
        if (( !($context["S_HAS_BLOCKS"] ?? null) || ($context["S_IS_DEFAULT"] ?? null))) {
            echo " style=\"display: none;\"";
        }
        echo "><a href=\"#\" id=\"delete-blocks\" data-set=\"false\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL_BLOCKS");
        echo "</a></p>
\t\t\t\t\t\t\t<form id=\"route-settings\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"hide_blocks\" name=\"hide_blocks\"";
        // line 51
        if (($context["S_HIDE_BLOCKS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ALL_BLOCKS");
        echo "<br /><br />
\t\t\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t\t\t<div class=\"grid__col grid__col--1-of-2\">";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_BLOCK_POSITIONS");
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"grid__col grid__col--1-of-2\">
\t\t\t\t\t\t\t\t\t\t<select id=\"ex_positions\" name=\"ex_positions[]\" multiple=\"multiple\" size=\"5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo ($context["S_POSITION_OPS"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t<p class=\"align-center\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button2\" value=\"";
        // line 62
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_SETTINGS");
        echo "\" />
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        // line 69
        // line 70
        echo "\t\t\t<li class=\"hmenu-item right\"><div class=\"spacing\">&nbsp;</div></li>
\t\t\t<li class=\"hmenu-item right\"><a id=\"toggle-edit\" class=\"btn\" href=\"";
        // line 71
        echo ($context["U_EDIT_MODE"] ?? null);
        echo "\"><i class=\"fa fa-check fa-lg\"></i><span class=\"responsive-hide\"> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXIT_EDIT_MODE");
        echo "</span></a></li>
\t\t\t<li class=\"hmenu-item right\"><a id=\"save-changes\" class=\"btn\" href=\"#\"><i class=\"fa fa-save fa-lg\"></i><span class=\"responsive-hide\"> ";
        // line 72
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_CHANGES");
        echo "</span></a></li>
\t\t\t<li class=\"hmenu-item right\"><div class=\"spacing\">&nbsp;</div></li>
\t\t\t<li class=\"hmenu-item right responsive-hide\">
\t\t\t\t<select id=\"style-options\" style=\"display: none\" onchange=\"if(this.options[this.selectedIndex].value != -1){ location.href='";
        // line 75
        echo ($context["PAGE_URL"] ?? null);
        echo "&amp;style='+this.options[this.selectedIndex].value;}\">
\t\t\t\t\t";
        // line 76
        echo ($context["S_STYLE_OPTIONS"] ?? null);
        echo "
\t\t\t\t</select>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<a id=\"admin-control\" class=\"admin-bar-control\" href=\"#\"><i class=\"fa fa-exchange\"></i></a>

\t<div class=\"message-container\">
\t\t<div id=\"ajax-message\" class=\"flash-message\"></div>
\t</div>
</div>

<div id=\"dialog-edit\" class=\"dialog\" title=\"";
        // line 88
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_BLOCK");
        echo "\" style=\"display: none;\"></div>

<div id=\"dialog-confirm\" class=\"dialog\" title=\"";
        // line 90
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_BLOCK");
        echo "\" style=\"display: none;\">
\t<p><i class=\"fa fa-warning fa-4x pull-left fa-border\" style=\"color: red\"></i> ";
        // line 91
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_BLOCK_CONFIRM");
        echo "</p>
</div>

<div id=\"dialog-copy\" class=\"dialog\" title=\"";
        // line 94
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_BLOCKS");
        echo "\" style=\"display: none;\">
\t<p><i class=\"fa fa-warning fa-4x pull-left fa-border\" style=\"color: red\"></i> ";
        // line 95
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_BLOCKS_CONFIRM");
        echo "</p>
</div>

<div id=\"dialog-delete-all\" class=\"dialog\" title=\"";
        // line 98
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL_BLOCKS");
        echo "\" style=\"display: none;\">
\t<p><i class=\"fa fa-warning fa-4x pull-left fa-border\" style=\"color: red\"></i> ";
        // line 99
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL_BLOCKS_CONFIRM");
        echo "</p>
</div>

";
        // line 102
        echo ($context["ICON_PICKER"] ?? null);
        echo "

<script id=\"block-template-container\" type=\"text/x-jquery-tmpl\">
\t";
        // line 105
        echo "{% if block.view == 'basic' %}";
        echo "
\t\t";
        // line 106
        echo twig_source($this->env, "@blitze_sitemaker/views/basic_view.twig");
        echo "
\t";
        // line 107
        echo "{% elseif block.view == 'boxed' %}";
        echo "
\t\t";
        // line 108
        echo twig_source($this->env, "@blitze_sitemaker/views/boxed_view.twig");
        echo "
\t";
        // line 109
        echo "{% else %}";
        echo "
\t\t";
        // line 110
        echo twig_source($this->env, "@blitze_sitemaker/views/simple_view.twig");
        echo "
\t";
        // line 111
        echo "{% endif %}";
        echo "
\t<div class=\"block-controls\">
\t\t<a href=\"#\" class=\"item-action delete-block\" title=\"";
        // line 113
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
        echo "\"><span class=\"ui-icon ui-icon-closethick\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
        echo "</span></a>
\t\t<a href=\"#\" class=\"item-action edit-block\" title=\"";
        // line 114
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
        echo "\"><span class=\"ui-icon ui-icon-gear\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
        echo "</span></a>
\t</div>
</script>

";
        // line 118
        // line 119
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\tvar editMode = ";
        // line 122
        echo twig_escape_filter($this->env, ($context["S_EDIT_MODE"] ?? null), "js");
        echo ";
\tvar config = {
\t\tboardUrl: '";
        // line 124
        echo ($context["UA_BOARD_URL"] ?? null);
        echo "',
\t\tmodReWrite: ";
        // line 125
        echo ($context["UA_MODREWRITE"] ?? null);
        echo ",
\t\tscriptPath: '";
        // line 126
        echo ($context["UA_SCRIPT_PATH"] ?? null);
        echo "',
\t\text: '";
        // line 127
        echo ($context["UA_EXTENSION"] ?? null);
        echo "',
\t\troute: '";
        // line 128
        echo ($context["UA_ROUTE"] ?? null);
        echo "',
\t\tstyle: '";
        // line 129
        echo ($context["UA_STYLE_ID"] ?? null);
        echo "',
";
        // line 130
        if (($context["FILEMANAGER"] ?? null)) {
            // line 131
            echo "\t\tfilemanager: true,
\t\tRFAccessKey: '";
            // line 132
            echo twig_escape_filter($this->env, ($context["FILEMANAGER_AKEY"] ?? null), "js");
            echo "',
";
        }
        // line 134
        echo "\t\tuploadUrl: '";
        echo ($context["UA_UPLOAD_URL"] ?? null);
        echo "',
\t\twebRootPath: '";
        // line 135
        echo ($context["UA_WEB_ROOT_PATH"] ?? null);
        echo "',
\t};
\tvar actions = ";
        // line 137
        echo twig_jsonencode_filter(twig_escape_filter($this->env, ($context["BLOCK_ACTIONS"] ?? null), "js"), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
\tvar lang = {
\t\tedit:   '";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT"), "js");
        echo "',
\t\tcopy: '";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY"), "js");
        echo "',
\t\tremove: '";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE"), "js");
        echo "',
\t\tcancel: '";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL"), "js");
        echo "',
\t\tdeleteAll: '";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL"), "js");
        echo "',
\t\thidingBlocks: '";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ROUTE_HIDDEN_BLOCKS"), "js");
        echo "',
\t\thidingPos: '";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ROUTE_HIDDEN_POSITIONS"), "js");
        echo "',
\t\tajaxError: '";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR"), "js");
        echo "',
\t\tajaxLoading: '";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_LOADING"), "js");
        echo "',
\t\tleaveConfirm: '";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("LEAVE_CONFIRM"), "js");
        echo "',
\t\tupdateSimilar: '";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE_SIMILAR"), "js");
        echo "',
\t\tfileManager: '";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FILE_MANAGER"), "js");
        echo "',
\t\tplaceholder: '";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_ME"), "js");
        echo "'
\t};
// ]]>
</script>";
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/admin_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 151,  434 => 150,  430 => 149,  426 => 148,  422 => 147,  418 => 146,  414 => 145,  410 => 144,  406 => 143,  402 => 142,  398 => 141,  394 => 140,  390 => 139,  385 => 137,  380 => 135,  375 => 134,  370 => 132,  367 => 131,  365 => 130,  361 => 129,  357 => 128,  353 => 127,  349 => 126,  345 => 125,  341 => 124,  336 => 122,  331 => 119,  330 => 118,  321 => 114,  315 => 113,  310 => 111,  306 => 110,  302 => 109,  298 => 108,  294 => 107,  290 => 106,  286 => 105,  280 => 102,  274 => 99,  270 => 98,  264 => 95,  260 => 94,  254 => 91,  250 => 90,  245 => 88,  230 => 76,  226 => 75,  220 => 72,  214 => 71,  211 => 70,  210 => 69,  200 => 62,  191 => 56,  185 => 53,  176 => 51,  167 => 49,  159 => 44,  155 => 43,  149 => 40,  145 => 39,  134 => 35,  124 => 34,  114 => 33,  104 => 31,  88 => 29,  86 => 28,  80 => 25,  75 => 23,  66 => 16,  57 => 13,  52 => 12,  48 => 11,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/admin_bar.html", "");
    }
}
