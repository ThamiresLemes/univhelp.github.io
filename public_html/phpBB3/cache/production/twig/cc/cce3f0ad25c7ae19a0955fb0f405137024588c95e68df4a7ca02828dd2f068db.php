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

/* @dmzx_mchat/mchat_body.html */
class __TwigTemplate_7cc9fc498328bf26e035ce36ee5297957b69fbcd7bef7f88b299d97fb9f8f273 extends \Twig\Template
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
        if (twig_in_filter(($context["MCHAT_PAGE"] ?? null), [0 => "custom", 1 => "archive"])) {
            // line 2
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "@dmzx_mchat/mchat_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 4
        echo "
";
        // line 5
        // line 6
        echo "
";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((($context["MCHAT_PAGE"] ?? null) == "custom")) {
            // line 10
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_CUSTOM_PAGE");
            echo "</h2>
";
        } elseif ((        // line 11
($context["MCHAT_PAGE"] ?? null) == "archive")) {
            // line 12
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_ARCHIVE_PAGE");
            echo "</h2>
";
        }
        // line 14
        echo "
";
        // line 15
        // line 16
        echo "
";
        // line 17
        $location = "@dmzx_mchat/mchat_script_data.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("@dmzx_mchat/mchat_script_data.html", "@dmzx_mchat/mchat_body.html", 17)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 18
        echo "
";
        // line 19
        if (((($context["MCHAT_PAGE"] ?? null) == "archive") && (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["MCHAT_TOTAL_MESSAGES"] ?? null)))) {
            // line 20
            echo "<div class=\"action-bar bar-top\">
\t";
            // line 21
            // line 22
            echo "\t<div class=\"pagination\">
\t\t";
            // line 23
            echo ($context["MCHAT_TOTAL_MESSAGES"] ?? null);
            echo "
\t\t";
            // line 24
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 25
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "@dmzx_mchat/mchat_body.html", 25)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 26
                echo "\t\t";
            } else {
                // line 27
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 29
            echo "\t</div>
\t";
            // line 30
            // line 31
            echo "</div>
";
        }
        // line 33
        echo "
";
        // line 34
        // line 35
        echo "
";
        // line 36
        if (($context["MCHAT_IS_COLLAPSIBLE"] ?? null)) {
            // line 37
            echo "\t<a class=\"category";
            if (($context["S_MCHAT_HIDDEN"] ?? null)) {
                echo " hidden-category";
            }
            echo " mchat-category\"></a>
";
        }
        // line 39
        echo "
<div class=\"forabg mchat-wrapper";
        // line 40
        if (($context["S_MCHAT_AVATARS"] ?? null)) {
            echo " mchat-avatars";
        }
        echo "\">
\t<a id=\"mChat\"></a>
\t<div class=\"inner\">
\t\t<ul class=\"topiclist mchat-header\">
\t\t\t<li class=\"header\">
\t\t\t\t";
        // line 45
        $location = "@dmzx_mchat/mchat_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("@dmzx_mchat/mchat_header.html", "@dmzx_mchat/mchat_body.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 46
        echo "\t\t\t\t";
        if (($context["MCHAT_IS_COLLAPSIBLE"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["U_MCHAT_COLLAPSE_URL"] ?? null);
            echo "\"
\t\t\t\t\t\tclass=\"collapse-btn collapse-";
            // line 48
            echo ((($context["S_MCHAT_HIDDEN"] ?? null)) ? ("show") : ("hide"));
            echo " mchat-collapse\"
\t\t\t\t\t\tdata-hidden=\"";
            // line 49
            echo ($context["S_MCHAT_HIDDEN"] ?? null);
            echo "\"
\t\t\t\t\t\tdata-ajax=\"phpbb_collapse\"
\t\t\t\t\t\tdata-overlay=\"true\"
\t\t\t\t\t\ttitle=\"";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_COLLAPSE_TITLE");
            echo "\"></a>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t</li>
\t\t</ul>

\t\t";
        // line 57
        // line 58
        echo "
\t\t<div id=\"mchat-body\"";
        // line 59
        if (($context["MCHAT_IS_COLLAPSIBLE"] ?? null)) {
            echo " class=\"collapsible\"";
        }
        echo ">
\t\t\t";
        // line 60
        if (($context["MCHAT_SOUND_ENABLED"] ?? null)) {
            // line 61
            echo "\t\t\t\t<audio id=\"mchat-sound-add\" class=\"hidden\" src=\"";
            echo ($context["EXT_URL"] ?? null);
            echo "sounds/add.mp3\" preload=\"auto\"></audio>
\t\t\t\t<audio id=\"mchat-sound-edit\" class=\"hidden\" src=\"";
            // line 62
            echo ($context["EXT_URL"] ?? null);
            echo "sounds/edit.mp3\" preload=\"auto\"></audio>
\t\t\t\t<audio id=\"mchat-sound-del\" class=\"hidden\" src=\"";
            // line 63
            echo ($context["EXT_URL"] ?? null);
            echo "sounds/del.mp3\" preload=\"auto\"></audio>
\t\t\t\t<audio id=\"mchat-sound-error\" class=\"hidden\" src=\"";
            // line 64
            echo ($context["EXT_URL"] ?? null);
            echo "sounds/error.mp3\" preload=\"auto\"></audio>
\t\t\t";
        }
        // line 66
        echo "
\t\t\t<div id=\"mchat-confirm\" class=\"hidden\">
\t\t\t\t<h3>";
        // line 68
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
        echo "</h3>
\t\t\t\t<div class=\"mchat-confirm-fields\">
\t\t\t\t\t<p></p>
\t\t\t\t\t<textarea></textarea>
\t\t\t\t</div>
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_OK");
        echo "\" class=\"button2\">&nbsp;
\t\t\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
        // line 75
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
        echo "\" class=\"button2\">
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t";
        // line 79
        if ((($context["MCHAT_STATIC_MESS"] ?? null) && (($context["MCHAT_PAGE"] ?? null) != "archive"))) {
            // line 80
            echo "\t\t\t\t";
            // line 81
            echo "\t\t\t\t<ul class=\"topiclist forums mchat-static-container\">
\t\t\t\t\t<li class=\"row mchat-static\">";
            // line 82
            echo ($context["MCHAT_STATIC_MESS"] ?? null);
            echo "</li>
\t\t\t\t</ul>
\t\t\t\t";
            // line 84
            // line 85
            echo "\t\t\t";
        }
        // line 86
        echo "
\t\t\t<div id=\"mchat-main\"";
        // line 87
        if (($context["MCHAT_MESSAGE_TOP"] ?? null)) {
            echo " class=\"mchat-messages-top\"";
        }
        echo ">
\t\t\t\t";
        // line 88
        // line 89
        echo "
\t\t\t\t<ul id=\"mchat-messages\" class=\"topiclist forums\">
\t\t\t\t\t";
        // line 91
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "mchatrow", []))) {
            // line 92
            echo "\t\t\t\t\t\t";
            $location = "@dmzx_mchat/mchat_messages.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("@dmzx_mchat/mchat_messages.html", "@dmzx_mchat/mchat_body.html", 92)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 93
            echo "\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t<li class=\"row mchat-static mchat-no-messages\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NOMESSAGE");
            echo "</li>
\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t</ul>

\t\t\t\t";
        // line 98
        // line 99
        echo "\t\t\t</div>

\t\t\t";
        // line 101
        $location = "@dmzx_mchat/mchat_panel.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("@dmzx_mchat/mchat_panel.html", "@dmzx_mchat/mchat_body.html", 101)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 102
        echo "\t\t</div>

\t\t";
        // line 104
        // line 105
        echo "\t</div>
</div>

";
        // line 108
        // line 109
        echo "
";
        // line 110
        if (((($context["MCHAT_PAGE"] ?? null) == "archive") && (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["MCHAT_TOTAL_MESSAGES"] ?? null)))) {
            // line 111
            echo "<div class=\"action-bar bottom\">
\t";
            // line 112
            // line 113
            echo "\t<div class=\"pagination\">
\t\t";
            // line 114
            echo ($context["MCHAT_TOTAL_MESSAGES"] ?? null);
            echo "
\t\t";
            // line 115
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 116
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "@dmzx_mchat/mchat_body.html", 116)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 117
                echo "\t\t";
            } else {
                // line 118
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 120
            echo "\t</div>
\t";
            // line 121
            // line 122
            echo "</div>
";
        }
        // line 124
        echo "
";
        // line 125
        if (((($context["MCHAT_PAGE"] ?? null) == "custom") && ($context["MCHAT_WHOIS_INDEX"] ?? null))) {
            // line 126
            echo "\t<h3>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_WHO_IS_CHATTING");
            echo "</h3>
\t";
            // line 127
            $location = "@dmzx_mchat/mchat_whois.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("@dmzx_mchat/mchat_whois.html", "@dmzx_mchat/mchat_body.html", 127)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 128
            echo "\t<div id=\"mchat-refresh\">
\t\t<span id=\"mchat-refresh-explain\">";
            // line 129
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_WHO_IS_REFRESH_EXPLAIN", (($context["MCHAT_WHOIS_REFRESH"] ?? null) / 1000));
            echo "</span>
\t\t<span id=\"mchat-refresh-pending\" class=\"hidden\">";
            // line 130
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_REFRESHING");
            echo "</span>
\t</div>
";
        }
        // line 133
        echo "
";
        // line 134
        if ((twig_in_filter(($context["MCHAT_PAGE"] ?? null), [0 => "custom", 1 => "archive"]) && ($context["LEGEND"] ?? null))) {
            // line 135
            echo "\t<div id=\"mchat-legend\">
\t\t<em>";
            // line 136
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo " ";
            echo ($context["LEGEND"] ?? null);
            echo "</em>
\t</div>
";
        }
        // line 139
        echo "
";
        // line 140
        // line 141
        echo "
";
        // line 142
        if (twig_in_filter(($context["MCHAT_PAGE"] ?? null), [0 => "custom", 1 => "archive"])) {
            // line 143
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "@dmzx_mchat/mchat_body.html", 143)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 143,  455 => 142,  452 => 141,  451 => 140,  448 => 139,  440 => 136,  437 => 135,  435 => 134,  432 => 133,  426 => 130,  422 => 129,  419 => 128,  407 => 127,  402 => 126,  400 => 125,  397 => 124,  393 => 122,  392 => 121,  389 => 120,  383 => 118,  380 => 117,  367 => 116,  365 => 115,  361 => 114,  358 => 113,  357 => 112,  354 => 111,  352 => 110,  349 => 109,  348 => 108,  343 => 105,  342 => 104,  338 => 102,  326 => 101,  322 => 99,  321 => 98,  317 => 96,  311 => 94,  308 => 93,  295 => 92,  293 => 91,  289 => 89,  288 => 88,  282 => 87,  279 => 86,  276 => 85,  275 => 84,  270 => 82,  267 => 81,  265 => 80,  263 => 79,  256 => 75,  252 => 74,  243 => 68,  239 => 66,  234 => 64,  230 => 63,  226 => 62,  221 => 61,  219 => 60,  213 => 59,  210 => 58,  209 => 57,  204 => 54,  199 => 52,  193 => 49,  189 => 48,  184 => 47,  181 => 46,  169 => 45,  159 => 40,  156 => 39,  148 => 37,  146 => 36,  143 => 35,  142 => 34,  139 => 33,  135 => 31,  134 => 30,  131 => 29,  125 => 27,  122 => 26,  109 => 25,  107 => 24,  103 => 23,  100 => 22,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  79 => 17,  76 => 16,  75 => 15,  72 => 14,  66 => 12,  64 => 11,  59 => 10,  57 => 9,  54 => 8,  53 => 7,  50 => 6,  49 => 5,  46 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_body.html", "");
    }
}
