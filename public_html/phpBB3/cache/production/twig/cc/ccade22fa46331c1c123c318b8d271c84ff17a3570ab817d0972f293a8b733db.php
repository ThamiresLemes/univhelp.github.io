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

/* mchat_whois.html */
class __TwigTemplate_67cde5b23e2833d7501388be322f0610a9ef2ec63971a8924094ee357420c830 extends \Twig\Template
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
        echo "<div id=\"mchat-whois\">
\t<span title=\"";
        // line 2
        echo ($context["MCHAT_ONLINE_EXPLAIN"] ?? null);
        echo "\">
\t\t";
        // line 3
        if (($context["MCHAT_USERS_LIST"] ?? null)) {
            // line 4
            echo "\t\t\t<a href=\"#\" data-mchat-action=\"toggle\" data-mchat-element=\"userlist\">";
            echo ($context["MCHAT_USERS_TOTAL"] ?? null);
            echo "</a>
\t\t";
        } else {
            // line 6
            echo "\t\t\t";
            echo ($context["MCHAT_USERS_TOTAL"] ?? null);
            echo "
\t\t";
        }
        // line 8
        echo "\t</span>
\t<div id=\"mchat-userlist\" class=\"hidden\">";
        // line 9
        echo ($context["MCHAT_USERS_LIST"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mchat_whois.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  51 => 8,  45 => 6,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mchat_whois.html", "");
    }
}
