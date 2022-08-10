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

/* @hifikabin_rightheaderimage/event/overall_header_breadcrumbs_after.html */
class __TwigTemplate_56d580e20082624c70f67dbae0fd239bed23a66cf263c3a138cf08b7f400fd2c extends \Twig\Template
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
        if ((((($context["S_DISPLAY_SEARCH"] ?? null) && ($context["RIGHTHEADERIMAGE_ENABLE"] ?? null)) && ($context["RIGHTHEADERIMAGE_SEARCH"] ?? null)) &&  !($context["S_GOOGLESEARCH_POSITION3"] ?? null))) {
            // line 2
            echo "<li id=\"search-box\" class=\"search-box rightside responsive-hide\">
\t";
            // line 3
            $location = "navbarsearch.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("navbarsearch.html", "@hifikabin_rightheaderimage/event/overall_header_breadcrumbs_after.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@hifikabin_rightheaderimage/event/overall_header_breadcrumbs_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@hifikabin_rightheaderimage/event/overall_header_breadcrumbs_after.html", "");
    }
}
