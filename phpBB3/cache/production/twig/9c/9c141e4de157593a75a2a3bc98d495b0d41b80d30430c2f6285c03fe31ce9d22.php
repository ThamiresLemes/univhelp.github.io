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

/* @dmzx_mchat/mchat_panel.html */
class __TwigTemplate_6247481aec6365474492c94416762f63b42c2235db944ac8eb3a76ca80d7539a extends \Twig\Template
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
        $context["MCHAT_DISPLAY_INDEX_WHOIS"] = (((($context["MCHAT_PAGE"] ?? null) == "index") && ($context["MCHAT_WHOIS_REFRESH"] ?? null)) && ($context["MCHAT_WHOIS_INDEX"] ?? null));
        // line 2
        echo "<div id=\"mchat-panel\" class=\"panel cp-mini";
        if ((($context["MCHAT_PAGE"] ?? null) == "archive")) {
            echo " hidden";
        }
        if ((($context["MCHAT_ALLOW_USE"] ?? null) || ($context["MCHAT_DISPLAY_INDEX_WHOIS"] ?? null))) {
            echo " mchat-panel-content";
        }
        echo "\">
\t<form id=\"mchat-form\" name=\"postform\" action=\"";
        // line 3
        echo ($context["U_MCHAT_CUSTOM_PAGE"] ?? null);
        echo "\" method=\"POST\">
\t\t";
        // line 4
        echo ($context["S_FORM_TOKEN_DMZX_MCHAT"] ?? null);
        echo "
\t\t";
        // line 5
        if ((($context["MCHAT_ALLOW_USE"] ?? null) && (($context["MCHAT_PAGE"] ?? null) != "archive"))) {
            // line 6
            echo "\t\t\t<noscript><div class=\"error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NOJAVASCRIPT");
            echo "</div></noscript>
\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t<div class=\"mchat-controls\">
\t\t\t\t<div class=\"mchat-input-container inputbox\">
\t\t\t\t\t<textarea id=\"mchat-input\" name=\"message\" class=\"no-auto-resize ";
            // line 10
            echo ((($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null)) ? ("mchat-multi-line") : ("mchat-single-line"));
            echo "\" rows=\"1\" autocomplete=\"on\" spellcheck=\"true\"></textarea>
\t\t\t\t\t<div class=\"mchat-input-control\">
\t\t\t\t\t\t<button type=\"button\" class=\"mchat-button-add\" id=\"mchat-add\" data-mchat-action=\"add\" title=\"";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ADD");
            echo "\">
\t\t\t\t\t\t\t<i class=\"icon icon-lightgray fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ADD");
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
            // line 15
            if (($context["MCHAT_MAX_MESSAGE_LENGTH"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<span id=\"mchat-exceed-character-count\" class=\"hidden\"></span>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 20
            // line 21
            echo "\t\t\t\t";
            if ((((($context["MCHAT_ALLOW_SMILES"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", []))) || ($context["S_BBCODE_ALLOWED"] ?? null)) || ($context["S_MCHAT_ADD_CUSTOM_BUTTON"] ?? null))) {
                // line 22
                echo "\t\t\t\t\t<div class=\"mchat-panel-buttons\">
\t\t\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t\t\t";
                if ((($context["MCHAT_ALLOW_SMILES"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", [])))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"button mchat-button-smilies mchat-button-down\" data-mchat-action=\"toggle\" data-mchat-element=\"smilies\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SMILES");
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa fa-smile-o\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 26
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_SMILES");
                    echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                // line 30
                echo "\t\t\t\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"button mchat-button-bbcodes mchat-button-down\" data-mchat-action=\"toggle\" data-mchat-element=\"bbcodes\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_BBCODES");
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa fa-code fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 32
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_BBCODES");
                    echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t";
                // line 36
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t";
            // line 39
            echo "\t\t\t</div>
\t\t\t";
            // line 40
            // line 41
            echo "\t\t\t";
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 42
                echo "\t\t\t\t<div id=\"mchat-bbcodes\">
\t\t\t\t\t";
                // line 43
                $location = "posting_buttons.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("posting_buttons.html", "@dmzx_mchat/mchat_panel.html", 43)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 44
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 46
            echo "\t\t\t";
            if ((($context["MCHAT_ALLOW_SMILES"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", [])))) {
                // line 47
                echo "\t\t\t\t<div id=\"mchat-smilies\" class=\"hidden\">
\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "smiley", []));
                foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                    // line 49
                    echo "\t\t\t\t\t\t<a href=\"#\" data-smiley-code=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_CODE", []);
                    echo "\" data-mchat-action=\"smiley\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 50
                    echo $this->getAttribute($context["smiley"], "SMILEY_IMG", []);
                    echo "\" width=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", []);
                    echo "\" height=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_CODE", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_DESC", []);
                    echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t";
                if (($context["S_SHOW_SMILEY_LINK"] ?? null)) {
                    // line 54
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo ($context["U_MORE_SMILIES"] ?? null);
                    echo "\" data-mchat-action=\"smileyPopup\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_SMILIES");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 58
            echo "\t\t\t";
            // line 59
            echo "\t\t";
        }
        // line 60
        echo "\t</form>
\t";
        // line 61
        if (($context["MCHAT_DISPLAY_INDEX_WHOIS"] ?? null)) {
            // line 62
            echo "\t\t";
            $location = "@dmzx_mchat/mchat_whois.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("@dmzx_mchat/mchat_whois.html", "@dmzx_mchat/mchat_panel.html", 62)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 63
            echo "\t";
        }
        // line 64
        echo "\t";
        // line 65
        echo "\t";
        if (((($context["MCHAT_ALLOW_USE"] ?? null) && ($context["MCHAT_CHARACTER_COUNT"] ?? null)) && (($context["MCHAT_PAGE"] ?? null) != "archive"))) {
            // line 66
            echo "\t\t<div id=\"mchat-character-count\" class=\"invisible\">";
            echo ($context["MCHAT_CHARACTER_COUNT"] ?? null);
            echo "</div>
\t";
        }
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 68,  236 => 66,  233 => 65,  231 => 64,  228 => 63,  215 => 62,  213 => 61,  210 => 60,  207 => 59,  205 => 58,  201 => 56,  193 => 54,  190 => 53,  173 => 50,  168 => 49,  164 => 48,  161 => 47,  158 => 46,  154 => 44,  142 => 43,  139 => 42,  136 => 41,  135 => 40,  132 => 39,  130 => 38,  126 => 36,  124 => 35,  118 => 32,  113 => 31,  110 => 30,  108 => 29,  102 => 26,  97 => 25,  94 => 24,  93 => 23,  90 => 22,  87 => 21,  86 => 20,  82 => 18,  78 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  58 => 8,  57 => 7,  52 => 6,  50 => 5,  46 => 4,  42 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_panel.html", "");
    }
}
