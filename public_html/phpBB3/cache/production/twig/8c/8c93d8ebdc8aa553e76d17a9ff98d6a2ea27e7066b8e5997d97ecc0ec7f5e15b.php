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

/* mcp_approve.html */
class __TwigTemplate_13cd294459b81ce64824535942711c4ccd0d8c50d2debcc753b899f5e783b6c6 extends \Twig\Template
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
            echo "
\t<h3>";
            // line 3
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h3>
\t<p>";
            // line 4
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t";
            // line 6
            if (($context["S_NOTIFY_POSTER"] ?? null)) {
                // line 7
                echo "\t\t<label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                if (($context["S_APPROVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if ((( !($context["S_APPROVE"] ?? null) &&  !($context["S_RESTORE"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "reason", [])))) {
                // line 11
                echo "\t\t<label><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t<select name=\"reason_id\">
\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "reason", []));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo $this->getAttribute($context["reason"], "ID", []);
                    echo "\"";
                    if ($this->getAttribute($context["reason"], "S_SELECTED", [])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["reason"], "DESCRIPTION", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</select></label>

\t\t<label><strong>";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CAN_LEAVE_BLANK");
                echo "</span>
\t\t\t<textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 17
                echo ($context["REASON"] ?? null);
                echo "</textarea>
\t\t</label>
\t";
            }
            // line 20
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 22
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

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
            $this->loadTemplate("overall_header.html", "mcp_approve.html", 28)->display($context);
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
\t";
            // line 32
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t<div class=\"inner\">

\t<div class=\"content\">

\t\t<h2 class=\"message-title\">";
            // line 37
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>
\t\t";
            // line 38
            if (($context["ADDITIONAL_MSG"] ?? null)) {
                echo "<p class=\"error\">";
                echo ($context["ADDITIONAL_MSG"] ?? null);
                echo "</p>";
            }
            // line 39
            echo "
\t\t<fieldset>
\t\t";
            // line 41
            if (($context["S_NOTIFY_POSTER"] ?? null)) {
                // line 42
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_poster\" checked=\"checked\" /> ";
                // line 44
                if (($context["S_APPROVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_POSTER_APPROVAL");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_POSTER_DISAPPROVAL");
                }
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 47
            echo "
\t\t";
            // line 48
            if ((( !($context["S_APPROVE"] ?? null) &&  !($context["S_RESTORE"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "reason", [])))) {
                // line 49
                echo "\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label>";
                // line 50
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"reason_id\">
\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "reason", []));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    echo "<option value=\"";
                    echo $this->getAttribute($context["reason"], "ID", []);
                    echo "\"";
                    if ($this->getAttribute($context["reason"], "S_SELECTED", [])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["reason"], "DESCRIPTION", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"fields2 nobg\">
\t\t\t\t<dt><label for=\"reason\">";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFO");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CAN_LEAVE_BLANK");
                echo "</span></dt>
\t\t\t\t<dd><textarea class=\"inputbox\" name=\"reason\" id=\"reason\" rows=\"4\" cols=\"40\">";
                // line 58
                echo ($context["REASON"] ?? null);
                echo "</textarea></dd>
\t\t\t</dl>
\t\t";
            }
            // line 61
            echo "
\t\t<dl class=\"fields2 nobg\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><strong>";
            // line 64
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</strong></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 69
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"submit\" name=\"confirm\" value=\"";
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t</div>

\t</div>
</div>

</form>

";
            // line 80
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "mcp_approve.html", 80)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "mcp_approve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 80,  247 => 70,  241 => 69,  233 => 64,  228 => 61,  222 => 58,  215 => 57,  209 => 53,  192 => 52,  186 => 50,  183 => 49,  181 => 48,  178 => 47,  168 => 44,  164 => 42,  162 => 41,  158 => 39,  152 => 38,  148 => 37,  140 => 32,  135 => 30,  132 => 29,  120 => 28,  117 => 27,  110 => 23,  106 => 22,  102 => 20,  96 => 17,  89 => 16,  85 => 14,  68 => 13,  61 => 11,  59 => 10,  56 => 9,  46 => 7,  44 => 6,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_approve.html", "");
    }
}
