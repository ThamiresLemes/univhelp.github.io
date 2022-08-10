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

/* posting_poll_body.html */
class __TwigTemplate_0e068df9b3cbc277055e0e0da4ebb5d09f06e7a79db957aa2b4591b42fdf6394 extends \Twig\Template
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
        echo "<div class=\"panel bg3\" id=\"poll-panel\">
\t<div class=\"inner\">

\t";
        // line 4
        if (($context["S_SHOW_POLL_BOX"] ?? null)) {
            // line 5
            echo "\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL_EXPLAIN");
            echo "</p>
\t";
        }
        // line 7
        echo "
\t<fieldset class=\"fields2\">
\t";
        // line 9
        if (($context["S_POLL_DELETE"] ?? null)) {
            // line 10
            echo "\t\t<dl>
\t\t\t<dt><label for=\"poll_delete\">";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_DELETE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label for=\"poll_delete\"><input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
            // line 12
            if (($context["S_POLL_DELETE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> </label></dd>
\t\t</dl>
\t";
        }
        // line 15
        echo "
\t";
        // line 16
        if (($context["S_SHOW_POLL_BOX"] ?? null)) {
            // line 17
            echo "\t\t<dl>
\t\t\t<dt><label for=\"poll_title\">";
            // line 18
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_QUESTION") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"poll_title\" id=\"poll_title\" maxlength=\"100\" value=\"";
            // line 19
            echo ($context["POLL_TITLE"] ?? null);
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"poll_option_text\">";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_OPTIONS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_OPTIONS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea name=\"poll_option_text\" id=\"poll_option_text\" rows=\"5\" cols=\"35\" class=\"inputbox\">";
            // line 23
            echo ($context["POLL_OPTIONS"] ?? null);
            echo "</textarea></dd>
\t\t</dl>

\t\t<hr class=\"dashed\" />

\t\t<dl>
\t\t\t<dt><label for=\"poll_max_options\">";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_MAX_OPTIONS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_max_options\" id=\"poll_max_options\" value=\"";
            // line 30
            echo ($context["POLL_MAX_OPTIONS"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t<dd>";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_MAX_OPTIONS_EXPLAIN");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"poll_length\">";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_FOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label for=\"poll_length\"><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_length\" id=\"poll_length\" value=\"";
            // line 35
            echo ($context["POLL_LENGTH"] ?? null);
            echo "\" class=\"inputbox autowidth\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</label></dd>
\t\t\t<dd>";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_FOR_EXPLAIN");
            echo "</dd>
\t\t</dl>

\t\t";
            // line 39
            if (($context["S_POLL_VOTE_CHANGE"] ?? null)) {
                // line 40
                echo "\t\t\t<hr class=\"dashed\" />

\t\t\t<dl>
\t\t\t\t<dt><label for=\"poll_vote_change\">";
                // line 43
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTE_CHANGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><label for=\"poll_vote_change\"><input type=\"checkbox\" id=\"poll_vote_change\" name=\"poll_vote_change\"";
                // line 44
                echo ($context["VOTE_CHANGE_CHECKED"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTE_CHANGE_EXPLAIN");
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 47
            echo "\t";
        }
        // line 48
        echo "
\t";
        // line 49
        // line 50
        echo "\t</fieldset>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_poll_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  157 => 49,  154 => 48,  151 => 47,  143 => 44,  138 => 43,  133 => 40,  131 => 39,  125 => 36,  119 => 35,  114 => 34,  108 => 31,  104 => 30,  99 => 29,  90 => 23,  83 => 22,  77 => 19,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  57 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "posting_poll_body.html", "");
    }
}
