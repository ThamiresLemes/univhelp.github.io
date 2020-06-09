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

/* @dmzx_mchat/mchat_status.html */
class __TwigTemplate_0f211629aae966aecff71861fd811d7e482085c9516e887ac4962238b953d63a extends \Twig\Template
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
        if ((($context["MCHAT_PAGE"] ?? null) != "archive")) {
            // line 2
            echo "\t<span id=\"mchat-status\">
\t\t<span class=\"mchat-status mchat-status-ok\"><i class=\"icon fa fa-check\" title=\"";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OK");
            echo "\"></i></span>
\t\t<span class=\"mchat-status mchat-status-load hidden\"><i class=\"icon fa fa-refresh fa-spin\" title=\"";
            // line 4
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
            echo "\"></i></span>
\t\t<span class=\"mchat-status mchat-status-paused hidden\"><i class=\"icon fa fa-pause\" title=\"";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_PAUSE");
            echo "\"></i></span>
\t\t<span class=\"mchat-status mchat-status-error hidden\"><i class=\"icon fa fa-times\" title=\"";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
            echo "\"></i></span>
\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_status.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_status.html", "");
    }
}
