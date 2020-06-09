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

/* @phpbb_viglink/event/overall_footer_after.html */
class __TwigTemplate_fb6687a473caf24ddba00d9a1b5cae1488b1e2bbb70984adf29c16b11db134b9 extends \Twig\Template
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
        if (($context["VIGLINK_ENABLED"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
\tvar vglnk = {
\t\tkey: '";
            // line 4
            echo twig_escape_filter($this->env, ($context["VIGLINK_API_KEY"] ?? null), "js");
            echo "',
\t\tsub_id: '";
            // line 5
            echo twig_escape_filter($this->env, ($context["VIGLINK_SUB_ID"] ?? null), "js");
            echo "'
\t};

\t(function(d, t) {
\t\tvar s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
\t\ts.src = '//cdn.viglink.com/api/vglnk.js';
\t\tvar r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
\t}(document, 'script'));
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_viglink/event/overall_footer_after.html", "");
    }
}
