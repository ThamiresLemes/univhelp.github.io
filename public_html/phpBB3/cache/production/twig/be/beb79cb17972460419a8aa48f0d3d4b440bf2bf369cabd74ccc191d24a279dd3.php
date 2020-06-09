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

/* @blitze_sitemaker/layouts/blog/footer_layout.twig */
class __TwigTemplate_e19307efea93309dc4f5bce7cb3ef9094e284cdd89bc705459cb2a18779834df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
            'subcontent_class' => [$this, 'block_subcontent_class'],
            'sidebar_class' => [$this, 'block_sidebar_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout_base.twig", "@blitze_sitemaker/layouts/blog/footer_layout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout($context, array $blocks = [])
    {
        // line 4
        echo "\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 6
        if (($this->getAttribute(($context["positions"] ?? null), "boxes", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 7
            echo "\t\t\t\t\t\t\t";
            $context["num_blocks"] = twig_length_filter($this->env, $this->getAttribute(($context["positions"] ?? null), "boxes", []));
            // line 8
            echo "\t\t\t\t\t\t\t";
            if ((0 == ($context["num_blocks"] ?? null) % 3)) {
                // line 9
                echo "\t\t\t\t\t\t\t\t";
                $context["divisor"] = 3;
                // line 10
                echo "\t\t\t\t\t\t\t";
            } elseif ((0 == ($context["num_blocks"] ?? null) % 2)) {
                // line 11
                echo "\t\t\t\t\t\t\t\t";
                $context["divisor"] = 2;
                // line 12
                echo "\t\t\t\t\t\t\t";
            } elseif ((($context["num_blocks"] ?? null) > 3)) {
                // line 13
                echo "\t\t\t\t\t\t\t\t";
                $context["divisor"] = 3;
                // line 14
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t\t\t";
                $context["divisor"] = 1;
                // line 16
                echo "\t\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t<div id=\"pos-boxes\" class=\"block-position horizontal equal grid\">
\t\t\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "boxes", []));
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
                // line 19
                echo "\t\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block grid__col ";
                echo (((($context["divisor"] ?? null) > 1)) ? (((("grid__col--1-of-" . ($context["divisor"] ?? null)) . " grid__col--m-1-of-") . ($context["divisor"] ?? null))) : ("grid__col--5-of-5"));
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 20
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 20)->display($context);
                // line 21
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
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
            // line 24
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t\t\t";
        // line 27
        if (($this->getAttribute(($context["positions"] ?? null), "bottom", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 28
            echo "\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t<div id=\"pos-bottom\" class=\"grid__col grid__col--4-of-4 block-position\">
\t\t\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "bottom", []));
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
                // line 31
                echo "\t\t\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block\">
\t\t\t\t\t\t\t\t\t";
                // line 32
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 32)->display($context);
                // line 33
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
            // line 36
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 40
        if (($this->getAttribute(($context["positions"] ?? null), "subcontent", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 41
            echo "\t\t\t\t\t<div id=\"pos-subcontent\" class=\"block-position grid__col grid__col--1-of-4 sidebar";
            $this->displayBlock('subcontent_class', $context, $blocks);
            echo "\">
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "subcontent", []));
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
                // line 43
                echo "\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block\">
\t\t\t\t\t\t\t";
                // line 44
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 44)->display($context);
                // line 45
                echo "\t\t\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
            // line 48
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"grid\">
\t\t\t\t";
        // line 52
        if (($this->getAttribute(($context["positions"] ?? null), "bottom_hor", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 53
            echo "\t\t\t\t\t";
            $context["divisor"] = 0;
            // line 54
            echo "\t\t\t\t\t";
            $context["columns_per_row"] = 3;
            // line 55
            echo "\t\t\t\t\t";
            $context["num_blocks"] = twig_length_filter($this->env, $this->getAttribute(($context["positions"] ?? null), "bottom_hor", []));
            // line 56
            echo "\t\t\t\t\t<div id=\"pos-bottom_hor\" class=\"block-position horizontal grid__col--ab\">
\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "bottom_hor", []));
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
                // line 58
                echo "\t\t\t\t\t\t";
                if ((($context["divisor"] ?? null) == 0)) {
                    // line 59
                    echo "\t\t\t\t\t\t\t";
                    if (((0 == $this->getAttribute($context["loop"], "revindex", []) % 3) || ($this->getAttribute($context["loop"], "revindex", []) > 2))) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 3;
                        // line 61
                        echo "\t\t\t\t\t\t\t";
                    } elseif ((0 == $this->getAttribute($context["loop"], "revindex", []) % 2)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 3;
                        // line 63
                        echo "\t\t\t\t\t\t\t\t";
                        $context["columns_per_row"] = 2;
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t";
                        $context["divisor"] = 1;
                        // line 66
                        echo "\t\t\t\t\t\t\t\t";
                        $context["columns_per_row"] = 1;
                        // line 67
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 68
                    echo "\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block grid__col ";
                echo (((($context["columns_per_row"] ?? null) > 1)) ? (((("grid__col--1-of-" . ($context["columns_per_row"] ?? null)) . " grid__col--m-1-of-") . ($context["columns_per_row"] ?? null))) : ("grid__col--3-of-3"));
                echo "\">
\t\t\t\t\t\t\t";
                // line 70
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 70)->display($context);
                // line 71
                echo "\t\t\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 73
                if (((0 == $this->getAttribute($context["loop"], "index", []) % ($context["divisor"] ?? null)) &&  !$this->getAttribute($context["loop"], "last", []))) {
                    // line 74
                    echo "\t\t\t\t\t\t\t";
                    $context["divisor"] = 0;
                    // line 75
                    echo "\t\t\t\t\t\t";
                }
                // line 76
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
            // line 77
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 81
        if (($this->getAttribute(($context["positions"] ?? null), "sidebar", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 82
            echo "\t\t\t<div id=\"pos-sidebar\" class=\"block-position grid__col grid__col--1-of-5 sidebar";
            $this->displayBlock('sidebar_class', $context, $blocks);
            echo "\">
\t\t\t\t";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "sidebar", []));
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
                // line 84
                echo "\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block\">
\t\t\t\t\t";
                // line 85
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 85)->display($context);
                // line 86
                echo "\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t</div>
\t\t\t\t";
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
            // line 89
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "\t\t</div>

\t\t";
        // line 93
        if (($this->getAttribute(($context["positions"] ?? null), "footer", []) || ($context["S_EDIT_MODE"] ?? null))) {
            // line 94
            echo "\t\t<div class=\"footer\">
\t\t\t<div id=\"pos-footer\" class=\"panel bg3 block-position horizontal equal grid\">
\t\t\t\t";
            // line 96
            $context["num_blocks"] = twig_length_filter($this->env, $this->getAttribute(($context["positions"] ?? null), "footer", []));
            // line 97
            echo "\t\t\t\t";
            if ((0 == ($context["num_blocks"] ?? null) % 3)) {
                // line 98
                echo "\t\t\t\t\t";
                $context["divisor"] = 3;
                // line 99
                echo "\t\t\t\t";
            } elseif ((0 == ($context["num_blocks"] ?? null) % 2)) {
                // line 100
                echo "\t\t\t\t\t";
                $context["divisor"] = 2;
                // line 101
                echo "\t\t\t\t";
            } elseif ((($context["num_blocks"] ?? null) > 3)) {
                // line 102
                echo "\t\t\t\t\t";
                $context["divisor"] = 3;
                // line 103
                echo "\t\t\t\t";
            } else {
                // line 104
                echo "\t\t\t\t\t";
                $context["divisor"] = 1;
                // line 105
                echo "\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["positions"] ?? null), "footer", []));
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
                // line 108
                echo "\t\t\t\t<div id=\"block-";
                echo $this->getAttribute($context["block"], "bid", []);
                echo "\" class=\"block grid__col ";
                echo (((($context["divisor"] ?? null) > 1)) ? (((("grid__col--1-of-" . ($context["divisor"] ?? null)) . " grid__col--m-1-of-") . ($context["divisor"] ?? null))) : ("grid__col--5-of-5"));
                echo "\">
\t\t\t\t\t";
                // line 109
                $this->loadTemplate((("views/" . (($this->getAttribute($context["block"], "view", [])) ? ($this->getAttribute($context["block"], "view", [])) : ("simple"))) . "_view.twig"), "@blitze_sitemaker/layouts/blog/footer_layout.twig", 109)->display($context);
                // line 110
                echo "\t\t\t\t\t";
                echo ($context["block_controls"] ?? null);
                echo "
\t\t\t\t</div>
\t\t\t\t";
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
            // line 113
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 116
        echo "\t</div>
";
    }

    // line 41
    public function block_subcontent_class($context, array $blocks = [])
    {
        echo " right";
    }

    // line 82
    public function block_sidebar_class($context, array $blocks = [])
    {
        echo " left";
    }

    public function getTemplateName()
    {
        return "@blitze_sitemaker/layouts/blog/footer_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 82,  505 => 41,  500 => 116,  495 => 113,  477 => 110,  475 => 109,  468 => 108,  451 => 107,  448 => 106,  445 => 105,  442 => 104,  439 => 103,  436 => 102,  433 => 101,  430 => 100,  427 => 99,  424 => 98,  421 => 97,  419 => 96,  415 => 94,  413 => 93,  409 => 91,  405 => 89,  387 => 86,  385 => 85,  380 => 84,  363 => 83,  358 => 82,  356 => 81,  352 => 79,  348 => 77,  334 => 76,  331 => 75,  328 => 74,  326 => 73,  320 => 71,  318 => 70,  311 => 69,  308 => 68,  305 => 67,  302 => 66,  299 => 65,  296 => 64,  293 => 63,  290 => 62,  287 => 61,  284 => 60,  281 => 59,  278 => 58,  261 => 57,  258 => 56,  255 => 55,  252 => 54,  249 => 53,  247 => 52,  243 => 50,  239 => 48,  221 => 45,  219 => 44,  214 => 43,  197 => 42,  192 => 41,  190 => 40,  187 => 39,  182 => 36,  164 => 33,  162 => 32,  157 => 31,  140 => 30,  136 => 28,  134 => 27,  131 => 26,  127 => 24,  109 => 21,  107 => 20,  100 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@blitze_sitemaker/layouts/blog/footer_layout.twig", "");
    }
}
