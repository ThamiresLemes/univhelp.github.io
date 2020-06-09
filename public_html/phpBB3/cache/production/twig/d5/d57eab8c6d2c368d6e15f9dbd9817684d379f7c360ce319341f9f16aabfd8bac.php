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

/* overall_footer.html */
class __TwigTemplate_fcc417265b14bebbb7db9c7c4a63b831521e11fbc4d05c4c6f1f7732be6afc17 extends \Twig\Template
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
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_footer_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_FOOTER", []) == 0)) {
            // line 7
            echo "\t";
            $location = "navbar_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "</div>
";
        }
        // line 10
        echo "
<div id=\"page-footer\" class=\"page-width\" role=\"contentinfo\">
\t";
        // line 12
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_FOOTER", []) == 1)) {
            // line 13
            echo "\t\t";
            $location = "navbar_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("navbar_footer.html", "overall_footer.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "\t";
        }
        // line 15
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 17
        // line 18
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 19
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">Style ";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
        echo " <a href=\"http://www.artodia.com/\">Arty</a> - ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE");
        echo " phpBB 3.2 ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
        echo " MrGaby</span>
\t\t</p>\t\t";
        // line 23
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 24
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 25
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 28
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 29
        echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 30
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 34
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 38
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 39
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 40
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 43
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 44
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 45
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 48
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

";
        // line 66
        if (($this->getAttribute(($context["definition"] ?? null), "WRAP_FOOTER", []) == 1)) {
            // line 67
            echo "</div>
";
        }
        // line 69
        echo "
<div>
\t<a id=\"bottom\" class=\"top-anchor\" accesskey=\"z\"></a>
\t";
        // line 72
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 73
        echo "</div>

<script src=\"";
        // line 75
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 76
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 77
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 78
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('5');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 79
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('5');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 80
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 81
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 86
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 93
        echo "
";
        // line 94
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 95
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\tif (typeof window.cookieconsent === \"object\") {
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\"link\": \"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
                    \"href\": \"";
            // line 113
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
                }
            });
        });
    }
\t</script>
";
        }
        // line 120
        echo "
";
        // line 121
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 122
        echo "
";
        // line 123
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 123)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 124
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", []);
        echo "

";
        // line 126
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 127
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 127,  383 => 126,  378 => 124,  364 => 123,  361 => 122,  352 => 121,  349 => 120,  339 => 113,  335 => 112,  331 => 111,  327 => 110,  306 => 95,  304 => 94,  301 => 93,  291 => 86,  284 => 81,  282 => 80,  268 => 79,  254 => 78,  247 => 77,  239 => 76,  235 => 75,  231 => 73,  227 => 72,  222 => 69,  218 => 67,  216 => 66,  199 => 54,  184 => 50,  180 => 48,  172 => 45,  169 => 44,  166 => 43,  160 => 40,  157 => 39,  155 => 38,  149 => 35,  143 => 34,  137 => 31,  131 => 30,  128 => 29,  118 => 28,  112 => 25,  109 => 24,  107 => 23,  99 => 22,  93 => 19,  90 => 18,  89 => 17,  85 => 15,  82 => 14,  69 => 13,  67 => 12,  63 => 10,  59 => 8,  46 => 7,  44 => 6,  41 => 5,  40 => 4,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
