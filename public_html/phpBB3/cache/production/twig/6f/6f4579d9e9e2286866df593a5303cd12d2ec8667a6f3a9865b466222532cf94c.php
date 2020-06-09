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

/* @blitze_sitemaker/layout_base.twig */
class __TwigTemplate_50bfe3c495f586a017a63535befd0617d7f6d358b2e3e887d67b7d028a1acf24 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["S_EDIT_MODE"] ?? null)) {
            // line 2
            echo "\t";
            $context["editable"] = " editable";
            // line 3
            echo "\t";
            ob_start(function () { return ''; });
            // line 4
            echo "\t\t<div class=\"block-controls\">
\t\t\t<a href=\"#\" class=\"item-action delete-block\" title=\"";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
            echo "\"><span class=\"ui-icon ui-icon-closethick\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
            echo "</span></a>
\t\t\t<a href=\"#\" class=\"item-action edit-block\" title=\"";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
            echo "\"><span class=\"ui-icon ui-icon-gear\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
            echo "</span></a>
\t\t</div>
\t";
            $context["block_controls"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/layout_base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  57 => 10,  48 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/layout_base.twig", "");
    }
}
