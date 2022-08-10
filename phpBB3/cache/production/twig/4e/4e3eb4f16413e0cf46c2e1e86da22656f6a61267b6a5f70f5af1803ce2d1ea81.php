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

/* search_body.html */
class __TwigTemplate_9e027f2eb0ed6edf74a2012c6fff868d39f56ae14fdab9b32dc0bb9fdd21b86c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "</h2>

";
        // line 5
        // line 6
        echo "<form method=\"get\" action=\"";
        echo ($context["S_SEARCH_ACTION"] ?? null);
        echo "\" data-focus=\"keywords\">

<div class=\"panel\">
\t<div class=\"inner\">
\t<h3>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_QUERY");
        echo "</h3>

\t";
        // line 12
        // line 13
        echo "\t<fieldset>
\t";
        // line 14
        // line 15
        echo "\t<dl>
\t\t<dt><label for=\"keywords\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo "\" /></dd>
\t\t<dd><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 18
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ALL_TERMS");
        echo "</label></dd>
\t\t<dd><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ANY_TERMS");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"author\">";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo "\" /></dd>
\t</dl>
\t";
        // line 25
        // line 26
        echo "\t</fieldset>
\t";
        // line 27
        // line 28
        echo "
\t</div>
</div>

<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<h3>";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_OPTIONS");
        echo "</h3>

\t";
        // line 37
        // line 38
        echo "\t<fieldset>
\t";
        // line 39
        // line 40
        echo "\t<dl>
\t\t<dt><label for=\"search_forum\">";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo "\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_child1\">";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"search_child1\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 47
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t<label for=\"search_child2\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sf1\">";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_MSG");
        echo "</label></dd>
\t\t<dd><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MSG_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 55
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FIRST_POST");
        echo "</label></dd>
\t</dl>
\t";
        // line 58
        // line 59
        echo "
\t<hr class=\"dashed\" />

\t";
        // line 62
        // line 63
        echo "\t<dl>
\t\t<dt><label for=\"show_results1\">";
        // line 64
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"show_results1\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 66
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo "</label>
\t\t\t<label for=\"show_results2\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sd\">";
        // line 71
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 72
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "&nbsp;
\t\t\t<label for=\"sa\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 73
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t<label for=\"sd\"><input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\" /> ";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DESCENDING");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 78
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 79
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 82
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"ch\" title=\"";
        // line 83
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo "\">";
        echo ($context["S_CHARACTER_OPTIONS"] ?? null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_CHARACTERS");
        echo "</dd>
\t</dl>
\t";
        // line 85
        // line 86
        echo "\t</fieldset>
\t";
        // line 87
        // line 88
        echo "
\t</div>
</div>

<div class=\"panel bg1\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 96
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 97
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t</fieldset>

\t</div>
</div>

</form>
";
        // line 104
        // line 105
        echo "
";
        // line 106
        // line 107
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "recentsearch", []))) {
            // line 108
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 114
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "recentsearch", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 119
                echo "\t\t<tr class=\"";
                if (($this->getAttribute($context["recentsearch"], "S_ROW_COUNT", []) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td><a href=\"";
                // line 120
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", []);
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", []);
                echo "</a></td>
\t\t\t<td class=\"active\">";
                // line 121
                echo $this->getAttribute($context["recentsearch"], "TIME", []);
                echo "</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 124
                echo "\t\t<tr class=\"bg1\">
\t\t\t<td colspan=\"2\">";
                // line 125
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t</tbody>
\t</table>

\t</div>
</div>
";
        }
        // line 134
        // line 135
        echo "
";
        // line 136
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 136)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 136,  360 => 135,  359 => 134,  351 => 128,  342 => 125,  339 => 124,  331 => 121,  325 => 120,  316 => 119,  311 => 118,  304 => 114,  296 => 108,  294 => 107,  293 => 106,  290 => 105,  289 => 104,  279 => 97,  273 => 96,  263 => 88,  262 => 87,  259 => 86,  258 => 85,  249 => 83,  244 => 82,  238 => 79,  233 => 78,  226 => 74,  222 => 73,  218 => 72,  213 => 71,  206 => 67,  202 => 66,  196 => 64,  193 => 63,  192 => 62,  187 => 59,  186 => 58,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  164 => 52,  157 => 48,  153 => 47,  147 => 45,  139 => 42,  132 => 41,  129 => 40,  128 => 39,  125 => 38,  124 => 37,  119 => 35,  110 => 28,  109 => 27,  106 => 26,  105 => 25,  100 => 23,  93 => 22,  87 => 19,  83 => 18,  79 => 17,  72 => 16,  69 => 15,  68 => 14,  65 => 13,  64 => 12,  59 => 10,  51 => 6,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "search_body.html", "");
    }
}
