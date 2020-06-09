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

/* pagination.html */
class __TwigTemplate_fa3a2aee9e77d581049f0960e5889213f8a785d0510a888b371155634f8e5f62 extends \Twig\Template
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
 \t<a href=\"#\" onclick=\"jumpto(); return false;\" title=\"";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE_CLICK");
        echo "\">";
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</a> &bull; 
\t<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pagination", []));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 5
            echo "\t\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                echo "<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                echo "</a></li>
\t\t";
            } elseif ($this->getAttribute(            // line 6
$context["pagination"], "S_IS_CURRENT", [])) {
                echo "<li class=\"active\"><span>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                echo "</span></li>
\t\t";
            } elseif ($this->getAttribute(            // line 7
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                echo "<li class=\"ellipsis\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                echo "</span></li>
\t\t";
            } elseif ($this->getAttribute(            // line 8
$context["pagination"], "S_IS_NEXT", [])) {
                echo "<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                echo "</a></li>
\t\t";
            } else {
                // line 9
                echo "<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                echo "\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                echo "</a></li>
\t\t";
            }
            // line 11
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  82 => 11,  74 => 9,  65 => 8,  59 => 7,  53 => 6,  44 => 5,  40 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pagination.html", "");
    }
}
