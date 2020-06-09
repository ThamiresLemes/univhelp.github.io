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
class __TwigTemplate_f2a03ce63d7923d7689fed2b730de5c30b951ec56546d7f162d4eb9d1a24e6bb extends \Twig\Template
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
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
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
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 12
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t";
        // line 14
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 15
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 16
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 19
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_mchat', '__main__'));
        $this->env->loadTemplate('@dmzx_mchat/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 20
        echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 21
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 25
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 29
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 30
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 31
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 34
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 35
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 36
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 39
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 41
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
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 63
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 64
        echo "</div>

<script src=\"";
        // line 66
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 67
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 68
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 69
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 70
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 71
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 72
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 77
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 84
        echo "
";
        // line 85
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 86
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 104
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 111
        echo "
";
        // line 112
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 113
        echo "
";
        // line 114
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 114)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 115
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", []);
        echo "

";
        // line 117
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('blitze_sitemaker', '__main__'));
        $this->env->loadTemplate('@blitze_sitemaker/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 118
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
        return array (  342 => 118,  337 => 117,  332 => 115,  318 => 114,  315 => 113,  310 => 112,  307 => 111,  297 => 104,  293 => 103,  289 => 102,  285 => 101,  264 => 86,  262 => 85,  259 => 84,  249 => 77,  242 => 72,  240 => 71,  226 => 70,  212 => 69,  205 => 68,  197 => 67,  193 => 66,  189 => 64,  185 => 63,  162 => 45,  147 => 41,  143 => 39,  135 => 36,  132 => 35,  129 => 34,  123 => 31,  120 => 30,  118 => 29,  112 => 26,  106 => 25,  100 => 22,  94 => 21,  91 => 20,  81 => 19,  75 => 16,  72 => 15,  70 => 14,  65 => 12,  62 => 11,  61 => 10,  57 => 8,  45 => 7,  41 => 5,  40 => 4,  36 => 2,  30 => 1,);
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
