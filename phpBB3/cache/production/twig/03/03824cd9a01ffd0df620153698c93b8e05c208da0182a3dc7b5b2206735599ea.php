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

/* viewtopic_print.html */
class __TwigTemplate_bd6b960cdb5b31bdb2ea55104b4f6efbbf39e13d56da0a4e206b84b9a0dab8d4 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"robots\" content=\"noindex\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo " &bull; ";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

<link href=\"";
        // line 10
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/print.css\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/bidi.css\" rel=\"stylesheet\">
";
        // line 12
        // line 13
        echo "</head>
<body id=\"phpbb\" class=\"";
        // line 14
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\">
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

\t<div id=\"page-header\">
\t\t<h1>";
        // line 19
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t<p>";
        // line 20
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "<br /><a href=\"";
        echo ($context["U_FORUM"] ?? null);
        echo "\">";
        echo ($context["U_FORUM"] ?? null);
        echo "</a></p>

\t\t<h2>";
        // line 22
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</h2>
\t\t<p><a href=\"";
        // line 23
        echo ($context["U_TOPIC"] ?? null);
        echo "\">";
        echo ($context["U_TOPIC"] ?? null);
        echo "</a></p>
\t</div>

\t<div id=\"page-body\" class=\"page-body\">
\t\t<div class=\"page-number\">";
        // line 27
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", []));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 29
            echo "\t\t\t<div class=\"post\">
\t\t\t\t<h3>";
            // line 30
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", []);
            echo "</h3>
\t\t\t\t<div class=\"date\">";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", []);
            echo "</strong></div>
\t\t\t\t<div class=\"author\">";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR", []);
            echo "</strong></div>
\t\t\t\t<div class=\"content\">";
            // line 33
            echo $this->getAttribute($context["postrow"], "MESSAGE", []);
            echo "</div>
\t\t\t</div>
\t\t\t<hr />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>

\t<div id=\"page-footer\" class=\"page-footer\">
\t\t<div class=\"page-number\">";
        // line 40
        echo ($context["S_TIMEZONE"] ?? null);
        echo "<br />";
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>";
        // line 42
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 44
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 45
            echo "\t\t\t\t<p>";
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t</div>
\t</div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "viewtopic_print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  157 => 45,  155 => 44,  150 => 42,  143 => 40,  138 => 37,  128 => 33,  122 => 32,  115 => 31,  111 => 30,  108 => 29,  104 => 28,  100 => 27,  91 => 23,  87 => 22,  78 => 20,  74 => 19,  66 => 14,  63 => 13,  62 => 12,  58 => 11,  54 => 10,  47 => 8,  43 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_print.html", "");
    }
}
