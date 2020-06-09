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

/* confirm_delete_body.html */
class __TwigTemplate_094e98949c4c11b7016f774731dfe2f4d3400108ebf471121c4842c65f6c828c extends \Twig\Template
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
        if (($context["S_AJAX_REQUEST"] ?? null)) {
            // line 2
            echo "\t<form action=\"";
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t\t";
            // line 5
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 6
                echo "\t\t";
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 7
                    echo "\t\t\t<label>
\t\t\t\t<strong>";
                    // line 8
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 9
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t";
                    // line 10
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 11
                    echo "\t\t\t</label>
\t\t";
                }
                // line 13
                echo "
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 15
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON_EXPLAIN");
                echo "</span><br />
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t";
            }
            // line 19
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<h2 class=\"message-title\">";
            // line 34
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>

\t<p>";
            // line 36
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t";
            // line 38
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 39
                echo "\t<fieldset class=\"fields1\">
\t\t";
                // line 40
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 41
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 42
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 45
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t\t\t";
                    // line 46
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 47
                    echo "\t\t\t\t\t</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
                }
                // line 51
                echo "
\t\t";
                // line 52
                // line 53
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"delete_reason\">";
                // line 55
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
            }
            // line 60
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 62
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

\t</div>
</div>
</form>

";
            // line 71
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 71)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 71,  198 => 64,  194 => 63,  190 => 62,  186 => 60,  175 => 55,  171 => 53,  170 => 52,  167 => 51,  161 => 47,  155 => 46,  151 => 45,  144 => 42,  141 => 41,  139 => 40,  136 => 39,  134 => 38,  129 => 36,  124 => 34,  117 => 30,  114 => 29,  102 => 28,  99 => 27,  91 => 22,  87 => 21,  83 => 19,  73 => 15,  69 => 13,  65 => 11,  59 => 10,  55 => 9,  50 => 8,  47 => 7,  44 => 6,  42 => 5,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "confirm_delete_body.html", "");
    }
}
