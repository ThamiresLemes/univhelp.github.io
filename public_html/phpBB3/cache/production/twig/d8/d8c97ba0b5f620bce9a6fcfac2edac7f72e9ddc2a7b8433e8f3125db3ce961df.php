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

/* @hifikabin_rightheaderimage/event/overall_header_searchbox_before.html */
class __TwigTemplate_763b974639542dc65498c06b341c20739242e8e0498d2ae4a337926a4dab2eaa extends \Twig\Template
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
        if (($context["RIGHTHEADERIMAGE_ENABLE"] ?? null)) {
            // line 2
            echo "<div id=\"header-image\" class=\"search-box rightside responsive-hide\">
\t<a href=\"";
            // line 3
            echo ($context["RIGHTHEADERIMAGE_IMAGE_LINK"] ?? null);
            echo "\"><img style=\"border:none; max-width:";
            echo ($context["RIGHTHEADERIMAGE_RESIZE"] ?? null);
            echo "px\" src=\"";
            echo ($context["RIGHTHEADERIMAGE_IMAGE_URL"] ?? null);
            echo "\" class=\"header_image\" alt=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMAGE");
            echo "\"></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@hifikabin_rightheaderimage/event/overall_header_searchbox_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@hifikabin_rightheaderimage/event/overall_header_searchbox_before.html", "");
    }
}
