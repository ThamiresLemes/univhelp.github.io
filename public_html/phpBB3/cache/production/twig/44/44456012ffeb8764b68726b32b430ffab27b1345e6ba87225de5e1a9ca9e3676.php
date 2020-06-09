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

/* @dmzx_mchat/mchat_script_data.html */
class __TwigTemplate_06e79d0c2f32deeb889266737f90d72b4c9d89ccc9536915195bec29fe1f813d extends \Twig\Template
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
        if (((($context["MCHAT_PAGE"] ?? null) == "archive") ||  !(($context["MCHAT_ALLOW_USE"] ?? null) && ($context["S_BBCODE_ALLOWED"] ?? null)))) {
            // line 2
            echo "\t";
            $asset_file = (($context["T_ASSETS_PATH"] ?? null) . "/javascript/editor.js");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('5');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
        // line 4
        if (($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null)) {
            // line 5
            echo "\t";
            $asset_file = "@dmzx_mchat/javascript/autosize.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('5');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
        // line 7
        $asset_file = "@dmzx_mchat/javascript/jquery.titlealert.min.js";
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 8
        $asset_file = "@dmzx_mchat/javascript/mchat.js";
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 9
        echo "
<script>
\tvar form_name = 'postform';
\tvar text_name = 'message';
\tvar mChat = {
\t\t// General settings
\t\tactionUrls\t\t: {
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mchaturl", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["mchaturl"]) {
            // line 17
            echo "\t\t\t\t";
            echo $this->getAttribute($context["mchaturl"], "ACTION", []);
            echo ": '";
            echo $this->getAttribute($context["mchaturl"], "URL", []);
            echo "'";
            echo (( !$this->getAttribute($context["loop"], "last", [])) ? (",") : (""));
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mchaturl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t},
\t\tpage\t\t\t: '";
        // line 20
        echo twig_escape_filter($this->env, ($context["MCHAT_PAGE"] ?? null), "js");
        echo "',
\t\tcurrentUrl\t\t: '";
        // line 21
        echo twig_escape_filter($this->env, ($context["MCHAT_CURRENT_URL"] ?? null), "js");
        echo "',
\t\tcookie\t\t\t: '";
        // line 22
        echo twig_escape_filter($this->env, ($context["COOKIE_NAME"] ?? null), "js");
        echo "',
\t\tplaySound\t\t: ";
        // line 23
        echo ((($context["MCHAT_SOUND"] ?? null)) ? ("true") : ("false"));
        echo ",
\t\tmessageTop\t\t: ";
        // line 24
        echo ((($context["MCHAT_MESSAGE_TOP"] ?? null)) ? ("true") : ("false"));
        echo ",
\t\tallowBBCodes\t: ";
        // line 25
        echo ((($context["S_BBCODE_ALLOWED"] ?? null)) ? ("true") : ("false"));
        echo ",
\t\trelativeTime\t: ";
        // line 26
        echo ((($context["MCHAT_RELATIVE_TIME"] ?? null)) ? ("true") : ("false"));
        echo ",
\t\tshowCharCount\t: ";
        // line 27
        echo ((($context["MCHAT_CHARACTER_COUNT"] ?? null)) ? ("true") : ("false"));
        echo ",
\t\tjumpTo\t\t\t: ";
        // line 28
        echo ($context["MCHAT_JUMP_TO"] ?? null);
        echo ",

\t\t// Limits & timeouts
\t\trefreshTime\t\t: ";
        // line 31
        echo ($context["MCHAT_REFRESH_JS"] ?? null);
        echo ",
\t\twhoisRefresh\t: ";
        // line 32
        echo ($context["MCHAT_WHOIS_REFRESH"] ?? null);
        echo ",
\t\ttimeout\t\t\t: ";
        // line 33
        echo ($context["MCHAT_TIMEOUT"] ?? null);
        echo ",
\t\tmssgLngth\t\t: ";
        // line 34
        echo ($context["MCHAT_MAX_MESSAGE_LENGTH"] ?? null);
        echo ",
\t\tmaxInputHeight\t: ";
        // line 35
        echo ($context["MCHAT_MAX_INPUT_HEIGHT"] ?? null);
        echo ",
\t\teditDeleteLimit\t: ";
        // line 36
        echo ($context["MCHAT_EDIT_DELETE_LIMIT"] ?? null);
        echo ",
\t\tlogId\t\t\t: ";
        // line 37
        echo ($context["MCHAT_LOG_ID"] ?? null);
        echo ",
\t\tremoveBBCodes\t: '";
        // line 38
        echo twig_escape_filter($this->env, ($context["MCHAT_DISALLOWED_BBCODES"] ?? null), "js");
        echo "',

\t\t// Language
\t\tlang: {
\t\t\tminutesAgo\t\t: {
\t\t\t\t";
        // line 43
        if (($context["MCHAT_RELATIVE_TIME"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["MCHAT_MINUTES_AGO_LIMIT"] ?? null) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["minute"]) {
                // line 45
                echo "\t\t\t\t\t\t";
                echo $context["minute"];
                echo ": '";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MINUTES_AGO", $context["minute"]), "js");
                echo "'";
                echo (( !$this->getAttribute($context["loop"], "last", [])) ? (",") : (""));
                echo "
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t";
        }
        // line 48
        echo "\t\t\t},
\t\t\terr\t\t\t\t: '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR"), "js");
        echo "',
\t\t\tparserErr\t\t: '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR"), "js");
        echo "',
\t\t\tnewMessageAlert\t: '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_NEW_CHAT"), "js");
        echo "',
\t\t\teditInfo\t\t: '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_EDITINFO"), "js");
        echo "',
\t\t\tdelConfirm\t\t: '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_DELCONFIRM"), "js");
        echo "',
\t\t\tmention\t\t\t: '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MENTION"), "js");
        echo "',
\t\t\tcharCount\t\t: '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(((($context["MCHAT_MAX_MESSAGE_LENGTH"] ?? null)) ? ("MCHAT_CHARACTER_COUNT_LIMIT") : ("MCHAT_CHARACTER_COUNT"))), "js");
        echo "',
\t\t\tmssgLngthLong\t: '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_MESS_LONG", ($context["MCHAT_MAX_MESSAGE_LENGTH"] ?? null)), "js");
        echo "',
\t\t\tlikes\t\t\t: '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MCHAT_LIKES"), "js");
        echo "'
\t\t}
\t};
</script>
";
    }

    public function getTemplateName()
    {
        return "@dmzx_mchat/mchat_script_data.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 57,  293 => 56,  289 => 55,  285 => 54,  281 => 53,  277 => 52,  273 => 51,  269 => 50,  265 => 49,  262 => 48,  259 => 47,  238 => 45,  220 => 44,  218 => 43,  210 => 38,  206 => 37,  202 => 36,  198 => 35,  194 => 34,  190 => 33,  186 => 32,  182 => 31,  176 => 28,  172 => 27,  168 => 26,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  144 => 20,  141 => 19,  120 => 17,  103 => 16,  94 => 9,  80 => 8,  66 => 7,  50 => 5,  48 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_mchat/mchat_script_data.html", "");
    }
}
