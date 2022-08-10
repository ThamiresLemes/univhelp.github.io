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

/* @blitze_sitemaker/layouts/blog/header_layout.twig */
class __TwigTemplate_49823e210c0e2cabd7eec117aa2dc53a5b4678a4beb6831b86f5eafafee598ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["layout_row"] = _twig_default_filter(        $this->renderBlock("layout_row", $context, $blocks), "grid");
        // line 1
        $this->parent = $this->loadTemplate("layout_base.twig", "@blitze_sitemaker/layouts/blog/header_layout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_layout($context, array $blocks = [])
    {
        // line 5
        echo "\t<div class=\"sitemaker\">
\t\t";
        // line 6
        if (($this->getAttribute(($context["positions"] ?? null), "panel", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 7
            echo "\t\t<div class=\"grid\">
\t\t\t<div id=\"pos-panel\" class=\"grid__col grid__col--5-of-5 lastUnit block-position\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "panel", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 10
                echo "\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block\">
\t\t\t\t\t";
                // line 11
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/header_layout.twig", 11)->display($context);
                // line 12
                echo "\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 18
        echo "
\t\t<div class=\"";
        // line 19
        echo ($context["layout_row"] ?? null);
        echo "\">
\t\t\t<div class=\"";
        // line 20
        if ((($context["layout_row"] ?? null) === "grid")) {
            echo "grid__col grid__col--";
            echo ((($this->getAttribute(($context["positions"] ?? null), "sidebar", []) || ($context["S_EDIT_MODE"] ?? null))) ? (4) : (5));
            echo "-of-5";
            if ( !$this->getAttribute(($context["positions"] ?? null), "sidebar", [])) {
                echo " lastUnit";
            }
        }
        echo " sm-responsive-full-width middle\">
\t\t\t\t";
        // line 21
        if (($this->getAttribute(($context["positions"] ?? null), "top_hor", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 22
            echo "\t\t\t\t\t";
            $context["divisor"] = 0;
            // line 23
            echo "\t\t\t\t\t";
            $context["columns_per_row"] = 3;
            // line 24
            echo "\t\t\t\t\t";
            $context["num_blocks"] = twig_length_filter($this->env, $this->getAttribute(($context["positions"] ?? null), "top_hor", []));
            // line 25
            echo "\t\t\t\t\t<div id=\"pos-top_hor\" class=\"block-position horizontal grid\">
\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "top_hor", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 27
                echo "\t\t\t\t\t\t";
                if ((($context["divisor"] ?? null) == 0)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    if (((0 == $this->getAttribute($context["loop"], "revindex", []) % 3) || ($this->getAttribute($context["loop"], "revindex", []) > 2))) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 3;
                        // line 30
                        echo "\t\t\t\t\t\t\t";
                    } elseif ((0 == $this->getAttribute($context["loop"], "revindex", []) % 2)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 3;
                        // line 32
                        echo "\t\t\t\t\t\t\t\t";
                        $context["columns_per_row"] = 2;
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 1;
                        // line 35
                        echo "\t\t\t\t\t\t\t\t";
                        $context["columns_per_row"] = 1;
                        // line 36
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block grid__col ";
                if ((($context["columns_per_row"] ?? null) > 1)) {
                    echo "grid__col--1-of-";
                    echo ($context["columns_per_row"] ?? null);
                    echo " grid__col--m-1-of-";
                    echo ($context["columns_per_row"] ?? null);
                } else {
                    echo "grid__col--3-of-3";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 39
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/header_layout.twig", 39)->display($context);
                // line 40
                echo "\t\t\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 42
                if (((0 == $this->getAttribute($context["loop"], "index", []) % ($context["divisor"] ?? null)) &&  !$this->getAttribute($context["loop"], "last", []))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    $context["divisor"] = 0;
                    // line 44
                    echo "\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t\t<div class=\"";
        // line 49
        echo ($context["layout_row"] ?? null);
        echo "\">
\t\t\t\t\t<div class=\"";
        // line 50
        if ((($context["layout_row"] ?? null) === "grid")) {
            echo "grid__col ";
            echo (((($context["S_EDIT_MODE"] ?? null) || $this->getAttribute(($context["positions"] ?? null), "subcontent", []))) ? ("grid__col--3-of-4") : ("grid__col--4-of-4"));
            if ( !$this->getAttribute(($context["positions"] ?? null), "subcontent", [])) {
                echo " lastUnit";
            }
        }
        echo " sm-responsive-full-width middle\">
\t\t\t\t\t\t";
        // line 51
        if (($this->getAttribute(($context["positions"] ?? null), "top", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 52
            echo "\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t<div id=\"pos-top\" class=\"grid__col grid__col--5-of-5 lastUnit block-position\">
\t\t\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "top", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 55
                echo "\t\t\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block\">
\t\t\t\t\t\t\t\t\t";
                // line 56
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/header_layout.twig", 56)->display($context);
                // line 57
                echo "\t\t\t\t\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 63
        echo "
\t\t\t\t\t\t<div class=\"sm-block-spacing\">
";
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/layouts/blog/header_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 63,  296 => 60,  278 => 57,  276 => 56,  271 => 55,  254 => 54,  250 => 52,  248 => 51,  238 => 50,  234 => 49,  231 => 48,  227 => 46,  213 => 45,  210 => 44,  207 => 43,  205 => 42,  199 => 40,  197 => 39,  183 => 38,  180 => 37,  177 => 36,  174 => 35,  171 => 34,  168 => 33,  165 => 32,  162 => 31,  159 => 30,  156 => 29,  153 => 28,  150 => 27,  133 => 26,  130 => 25,  127 => 24,  124 => 23,  121 => 22,  119 => 21,  108 => 20,  104 => 19,  101 => 18,  96 => 15,  78 => 12,  76 => 11,  71 => 10,  54 => 9,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/layouts/blog/header_layout.twig", "");
    }
}
