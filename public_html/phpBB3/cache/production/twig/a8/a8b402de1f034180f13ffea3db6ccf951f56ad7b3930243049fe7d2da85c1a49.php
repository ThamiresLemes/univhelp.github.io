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

/* plupload.html */
class __TwigTemplate_f3cd61d5cf2000c5b00d4453dca5e660baa04e93e45eee70ee18c4bc04cf6d09 extends \Twig\Template
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
        echo "<script>
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BYTES_SHORT"), "js");
        echo "',
\t\t'kb': '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("KB"), "js");
        echo "',
\t\t'mb': '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MB"), "js");
        echo "',
\t\t'gb': '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("GB"), "js");
        echo "',
\t\t'tb': '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("TB"), "js");
        echo "',
\t\t'Add Files': '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES"), "js");
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"), "js");
        echo "',
\t\t'Close': '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_CLOSE"), "js");
        echo "',
\t\t'Drag files here.': '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DRAG"), "js");
        echo "',
\t\t'Duplicate file error.': '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DUPLICATE_ERROR"), "js");
        echo "',
\t\t'File: %s': '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILE"), "js");
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILE_DETAILS"), "js");
        echo "',
\t\t'File count error.': '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_COUNT"), "js");
        echo "',
\t\t'File extension error.': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_EXTENSION_ERROR"), "js");
        echo "',
\t\t'File size error.': '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SIZE_ERROR"), "js");
        echo "',
\t\t'File too large:': '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"), "js");
        echo "',
\t\t'Filename': '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILENAME"), "js");
        echo "',
\t\t'Generic error.': '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_GENERIC_ERROR"), "js");
        echo "',
\t\t'HTTP Error.': '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_HTTP_ERROR"), "js");
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_IMAGE_FORMAT"), "js");
        echo "',
\t\t'Init error.': '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_INIT_ERROR"), "js");
        echo "',
\t\t'IO error.': '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_IO_ERROR"), "js");
        echo "',
\t\t'Invalid file extension:': '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"), "js");
        echo "',
\t\t'N/A': '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_NOT_APPLICABLE"), "js");
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"), "js");
        echo "',
\t\t'Security error.': '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SECURITY_ERROR"), "js");
        echo "',
\t\t'Select files': '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SELECT_FILES"), "js");
        echo "',
\t\t'Size': '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SIZE"), "js");
        echo "',
\t\t'Start Upload': '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_START_UPLOAD"), "js");
        echo "',
\t\t'Start uploading queue': '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_START_CURRENT_UPLOAD"), "js");
        echo "',
\t\t'Status': '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STATUS"), "js");
        echo "',
\t\t'Stop Upload': '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STOP_UPLOAD"), "js");
        echo "',
\t\t'Stop current upload': '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"), "js");
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_UPLOAD_URL"), "js");
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_UPLOADED"), "js");
        echo "',
\t\t'%d files queued': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILES_QUEUED"), "js");
        echo "',
\t\t'%s already present in the queue.': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ALREADY_QUEUED"), "js");
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 44
        echo ($context["S_PLUPLOAD_URL"] ?? null);
        echo "',
\t\tmax_file_size: '";
        // line 45
        echo ($context["FILESIZE"] ?? null);
        echo "b',
\t\tchunk_size: '";
        // line 46
        echo ($context["CHUNK_SIZE"] ?? null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 48
        echo ($context["FILTERS"] ?? null);
        echo "],
\t\t";
        // line 49
        echo ($context["S_RESIZE"] ?? null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FILE"), "js");
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR"), "js");
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("TOO_MANY_ATTACHMENTS"), "js");
        echo "',
\t\tFORM_INVALID: '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_INVALID"), "js");
        echo "',
\t},
\torder: '";
        // line 62
        echo ($context["ATTACH_ORDER"] ?? null);
        echo "',
\tmaxFiles: ";
        // line 63
        echo ($context["MAX_ATTACHMENTS"] ?? null);
        echo ",
\tdata: ";
        // line 64
        echo ($context["S_ATTACH_DATA"] ?? null);
        echo ",
}
</script>
";
        // line 67
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/plupload/plupload.full.min.js");
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 68
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/javascript/plupload.js");
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 68,  245 => 67,  239 => 64,  235 => 63,  231 => 62,  226 => 60,  222 => 59,  218 => 58,  209 => 52,  203 => 49,  199 => 48,  194 => 46,  190 => 45,  186 => 44,  179 => 40,  175 => 39,  171 => 38,  167 => 37,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "plupload.html", "");
    }
}
