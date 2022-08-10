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

/* acp_styles.html */
class __TwigTemplate_764f1d3f036b964b7d8201775c6418708c881a575312d855a49f373682e73966 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_styles.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_STYLE_DETAILS"] ?? null)) {
            // line 6
            echo "\t<a href=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["S_CONFIRM_ACTION"] ?? null)) {
            // line 10
            echo "<form id=\"confirm\" method=\"post\" action=\"";
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\">

<fieldset>
\t<h1>";
            // line 13
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h1>
\t<p>";
            // line 14
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>
\t";
            // line 15
            if (($context["S_CONFIRM_DELETE"] ?? null)) {
                // line 16
                echo "\t<label><input type=\"checkbox\" class=\"checkbox\" name=\"confirm_delete_files\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_FROM_FS");
                echo "</label>
\t";
            }
            // line 18
            echo "
\t";
            // line 19
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</div>

</fieldset>

</form>
";
        } else {
            // line 30
            echo "
";
            // line 31
            if (($context["L_TITLE"] ?? null)) {
                echo "<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</h1>";
            }
            // line 32
            echo "
";
            // line 33
            if (($context["L_EXPLAIN"] ?? null)) {
                echo "<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
                echo "</p>";
            }
            // line 34
            echo "
<fieldset class=\"quick\">
\t<span class=\"small\"><a href=\"https://www.phpbb.com/go/customise/styles/3.2\" target=\"_blank\">";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BROWSE_STYLES_DATABASE");
            echo "</a></span>
</fieldset>

<form id=\"acp_styles\" method=\"post\" action=\"";
            // line 39
            echo ($context["U_ACTION"] ?? null);
            echo "\">
";
            // line 40
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
";
            // line 41
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "

";
            // line 43
            if (($context["S_STYLE_DETAILS"] ?? null)) {
                // line 44
                echo "\t<input type=\"hidden\" name=\"id\" value=\"";
                echo ($context["STYLE_ID"] ?? null);
                echo "\" />
\t<fieldset>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 47
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_NAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"name\" name=\"style_name\" value=\"";
                // line 48
                echo ($context["STYLE_NAME"] ?? null);
                echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 51
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_PATH");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 52
                echo ($context["STYLE_PATH"] ?? null);
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 55
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_VERSION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 56
                echo ($context["STYLE_VERSION"] ?? null);
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 59
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPYRIGHT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 60
                echo ($context["STYLE_COPYRIGHT"] ?? null);
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_parent\">";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INHERITING_FROM");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"style_parent\" name=\"style_parent\">
\t\t\t<option value=\"\"";
                // line 65
                if ((($context["STYLE_PARENT"] ?? null) == 0)) {
                    echo " selected=\"selected\"";
                }
                echo "> - </option>
\t\t\t";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "parent_styles", []));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_styles"]) {
                    // line 67
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["parent_styles"], "STYLE_ID", []);
                    echo "\"";
                    if (($this->getAttribute($context["parent_styles"], "STYLE_ID", []) == ($context["STYLE_PARENT"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["parent_styles"], "SPACER", []);
                    echo $this->getAttribute($context["parent_styles"], "STYLE_NAME", []);
                    echo "</option>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_styles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_active\">";
                // line 72
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_ACTIVE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"1\"";
                // line 73
                if (($context["S_STYLE_ACTIVE"] ?? null)) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"0\"";
                // line 74
                if ( !($context["S_STYLE_ACTIVE"] ?? null)) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "</label></dd>
\t</dl>
\t";
                // line 76
                if ( !($context["S_STYLE_DEFAULT"] ?? null)) {
                    // line 77
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"style_default\">";
                    // line 78
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_DEFAULT");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_default\" value=\"1\" /> ";
                    // line 79
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"style_default\" name=\"style_default\" value=\"0\" checked=\"checked\" /> ";
                    // line 80
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    echo "</label></dd>
\t\t</dl>
\t";
                }
                // line 83
                echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
                // line 86
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 87
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 88
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t";
                // line 89
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t</fieldset>
";
            }
            // line 92
            echo "
";
            // line 93
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "styles_list", []))) {
                // line 94
                echo "\t";
                // line 95
                echo "\t<table class=\"table1 styles\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 98
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_NAME");
                echo "</th>
\t\t<th width=\"10%\" style=\"white-space: nowrap; text-align: center;\">";
                // line 99
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_PHPBB_VERSION");
                echo "</th>
\t\t";
                // line 100
                if ( !($context["STYLES_LIST_HIDE_COUNT"] ?? null)) {
                    echo "<th width=\"10%\" style=\"white-space: nowrap; text-align: center;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_USED_BY");
                    echo "</th>";
                }
                // line 101
                echo "\t\t<th width=\"25%\" style=\"white-space: nowrap; text-align: center;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIONS");
                echo "</th>
\t\t";
                // line 102
                echo ($context["STYLES_LIST_EXTRA"] ?? null);
                echo "
\t\t<th>&nbsp;</th>
\t</tr>
\t</thead>
\t";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "styles_list", []));
                foreach ($context['_seq'] as $context["_key"] => $context["styles_list"]) {
                    // line 107
                    echo "\t<tbody id=\"styles-list-";
                    echo $this->getAttribute($context["styles_list"], "S_ROW_COUNT", []);
                    echo "\">
\t<tr class=\"row-highlight";
                    // line 108
                    if (($this->getAttribute($context["styles_list"], "STYLE_ID", []) &&  !$this->getAttribute($context["styles_list"], "STYLE_ACTIVE", []))) {
                        echo " row-inactive";
                    }
                    echo "\">
\t\t";
                    // line 109
                    if (($this->getAttribute($context["styles_list"], "LEVEL", []) % 2 == 1)) {
                        // line 110
                        echo "\t\t\t";
                        if (($this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []) == "row1a")) {
                            $value = "row1b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            $value = "row1a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 111
                        echo "\t\t";
                    } else {
                        // line 112
                        echo "\t\t\t";
                        if (($this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []) == "row2a")) {
                            $value = "row2b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            $value = "row2a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 113
                        echo "\t\t";
                    }
                    // line 114
                    echo "\t\t<td class=\"";
                    echo $this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []);
                    echo "\" style=\"padding-";
                    echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                    echo ": ";
                    echo $this->getAttribute($context["styles_list"], "PADDING", []);
                    echo "px;\">
\t\t\t";
                    // line 115
                    if ((($this->getAttribute($context["styles_list"], "STYLE_ID", []) && ($this->getAttribute($context["styles_list"], "COMMENT", []) == "")) && $this->getAttribute($context["styles_list"], "STYLE_ACTIVE", []))) {
                        // line 116
                        echo "\t\t\t\t<div class=\"default-style\" style=\"display: none; float: ";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo ";\">
\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"default\" value=\"";
                        // line 117
                        echo $this->getAttribute($context["styles_list"], "STYLE_ID", []);
                        echo "\"";
                        if ($this->getAttribute($context["styles_list"], "DEFAULT", [])) {
                            echo " checked=\"checked\"";
                        } else {
                            $value = 1;
                            $context['definition']->set('S_DEFAULT', $value);
                        }
                        echo " title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_DEFAULT");
                        echo "\" />
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 120
                    echo "\t\t\t";
                    if (($this->getAttribute($context["styles_list"], "DEFAULT", []) || $this->getAttribute($context["styles_list"], "SHOW_COPYRIGHT", []))) {
                        // line 121
                        echo "\t\t\t\t<strong>";
                        echo $this->getAttribute($context["styles_list"], "STYLE_NAME", []);
                        echo "</strong>
\t\t\t\t";
                        // line 122
                        if (($this->getAttribute($context["styles_list"], "SHOW_COPYRIGHT", []) && ($this->getAttribute($context["styles_list"], "COMMENT", []) == ""))) {
                            echo "<span><br />";
                            echo $this->getAttribute($context["styles_list"], "STYLE_COPYRIGHT", []);
                            echo "</span>";
                        }
                        // line 123
                        echo "\t\t\t";
                    } else {
                        // line 124
                        echo "\t\t\t\t<span>";
                        echo $this->getAttribute($context["styles_list"], "STYLE_NAME", []);
                        echo "</span>
\t\t\t";
                    }
                    // line 126
                    echo "\t\t\t";
                    if (($this->getAttribute($context["styles_list"], "COMMENT", []) != "")) {
                        // line 127
                        echo "\t\t\t\t<span class=\"error\"><br />";
                        echo $this->getAttribute($context["styles_list"], "COMMENT", []);
                        echo "</span>
\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t";
                    if (( !$this->getAttribute($context["styles_list"], "STYLE_ID", []) && ($this->getAttribute($context["styles_list"], "COMMENT", []) == ""))) {
                        // line 130
                        echo "\t\t\t\t<span class=\"style-path\"><br />";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STYLE_PATH");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["styles_list"], "STYLE_PATH_FULL", []);
                        echo "</span>
\t\t\t";
                    }
                    // line 132
                    echo "\t\t</td>
\t\t<td class=\"";
                    // line 133
                    echo $this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []);
                    echo " users\">";
                    echo $this->getAttribute($context["styles_list"], "STYLE_PHPBB_VERSION", []);
                    echo "</td>
\t\t";
                    // line 134
                    if ( !($context["STYLES_LIST_HIDE_COUNT"] ?? null)) {
                        // line 135
                        echo "\t\t\t<td class=\"";
                        echo $this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []);
                        echo " users\">";
                        echo $this->getAttribute($context["styles_list"], "USERS", []);
                        echo "</td>
\t\t";
                    }
                    // line 137
                    echo "\t\t<td class=\"";
                    echo $this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []);
                    echo " actions\">
\t\t\t";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["styles_list"], "actions", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                        // line 139
                        echo "\t\t\t\t";
                        if (($this->getAttribute($context["actions"], "S_ROW_COUNT", []) > 0)) {
                            echo " | ";
                        }
                        // line 140
                        echo "\t\t\t\t";
                        if ($this->getAttribute($context["actions"], "U_ACTION", [])) {
                            // line 141
                            echo "\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["actions"], "U_ACTION", []);
                            echo "\"";
                            echo $this->getAttribute($context["actions"], "U_ACTION_ATTR", []);
                            echo ">";
                            echo $this->getAttribute($context["actions"], "L_ACTION", []);
                            echo "</a>
\t\t\t\t";
                        }
                        // line 143
                        echo "\t\t\t\t";
                        echo $this->getAttribute($context["actions"], "HTML", []);
                        echo "
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "\t\t</td>
\t\t";
                    // line 146
                    echo $this->getAttribute($context["styles_list"], "EXTRA", []);
                    echo "
\t\t<td class=\"";
                    // line 147
                    echo $this->getAttribute(($context["definition"] ?? null), "ROW_CLASS", []);
                    echo " mark\" width=\"20\">
\t\t\t";
                    // line 148
                    if ($this->getAttribute($context["styles_list"], "STYLE_ID", [])) {
                        // line 149
                        echo "\t\t\t\t";
                        if (($this->getAttribute($context["styles_list"], "STYLE_NAME", []) !== "prosilver")) {
                            // line 150
                            echo "\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"ids[]\" value=\"";
                            echo $this->getAttribute($context["styles_list"], "STYLE_ID", []);
                            echo "\" />
\t\t\t\t";
                        }
                        // line 152
                        echo "\t\t\t";
                    } else {
                        // line 153
                        echo "\t\t\t\t";
                        if (($this->getAttribute($context["styles_list"], "COMMENT", []) != "")) {
                            // line 154
                            echo "\t\t\t\t\t&nbsp;
\t\t\t\t";
                        } else {
                            // line 156
                            echo "\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"dirs[]\" value=\"";
                            echo $this->getAttribute($context["styles_list"], "STYLE_PATH", []);
                            echo "\" />
\t\t\t\t";
                        }
                        // line 158
                        echo "\t\t\t";
                    }
                    // line 159
                    echo "\t\t</td>
\t</tr>
\t</tbody>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "\t</table>
";
            }
            // line 165
            echo "
";
            // line 166
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "extra_actions", []))) {
                // line 167
                echo "\t<fieldset class=\"quick\">
\t\t";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "extra_actions", []));
                foreach ($context['_seq'] as $context["_key"] => $context["extra_actions"]) {
                    // line 169
                    echo "\t\t\t<input type=\"submit\" name=\"";
                    echo $this->getAttribute($context["extra_actions"], "ACTION_NAME", []);
                    echo "\" class=\"button2\" value=\"";
                    echo $this->getAttribute($context["extra_actions"], "L_ACTION", []);
                    echo "\" />
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t</fieldset>
";
            }
            // line 173
            echo "
</form>

";
        }
        // line 177
        echo "
";
        // line 178
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_styles.html", 178)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_styles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 178,  602 => 177,  596 => 173,  592 => 171,  581 => 169,  577 => 168,  574 => 167,  572 => 166,  569 => 165,  565 => 163,  556 => 159,  553 => 158,  547 => 156,  543 => 154,  540 => 153,  537 => 152,  531 => 150,  528 => 149,  526 => 148,  522 => 147,  518 => 146,  515 => 145,  506 => 143,  496 => 141,  493 => 140,  488 => 139,  484 => 138,  479 => 137,  471 => 135,  469 => 134,  463 => 133,  460 => 132,  451 => 130,  448 => 129,  442 => 127,  439 => 126,  433 => 124,  430 => 123,  424 => 122,  419 => 121,  416 => 120,  401 => 117,  396 => 116,  394 => 115,  385 => 114,  382 => 113,  373 => 112,  370 => 111,  361 => 110,  359 => 109,  353 => 108,  348 => 107,  344 => 106,  337 => 102,  332 => 101,  326 => 100,  322 => 99,  318 => 98,  313 => 95,  311 => 94,  309 => 93,  306 => 92,  300 => 89,  296 => 88,  292 => 87,  288 => 86,  283 => 83,  277 => 80,  273 => 79,  268 => 78,  265 => 77,  263 => 76,  254 => 74,  246 => 73,  241 => 72,  236 => 69,  220 => 67,  216 => 66,  210 => 65,  204 => 63,  198 => 60,  193 => 59,  187 => 56,  182 => 55,  176 => 52,  171 => 51,  165 => 48,  160 => 47,  153 => 44,  151 => 43,  146 => 41,  142 => 40,  138 => 39,  132 => 36,  128 => 34,  122 => 33,  119 => 32,  113 => 31,  110 => 30,  100 => 23,  96 => 22,  90 => 19,  87 => 18,  81 => 16,  79 => 15,  75 => 14,  71 => 13,  64 => 10,  62 => 9,  59 => 8,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_styles.html", "");
    }
}
