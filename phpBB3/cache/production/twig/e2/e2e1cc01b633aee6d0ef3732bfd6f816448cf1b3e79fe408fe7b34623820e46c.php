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

/* blocks/login.html */
class __TwigTemplate_3a40f7da7e0d6366fcc5d0cde4eb3327f5d8b87ec3142e31953a6642bebc36bf extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\">

    <div class=\"align-center\">
\t    <p>
\t    \t<span class=\"genmed\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo ":</span><br /><input type=\"text\" name=\"username\" class=\"inputbox\" tabindex=\"1\" /><br />
\t\t\t<span class=\"genmed\">";
        // line 6
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo ":</span><br /><input type=\"password\" name=\"password\" class=\"inputbox\" tabindex=\"2\" />
\t\t</p>
\t\t<p><a href=\"";
        // line 8
        echo ($context["U_SEND_PASSWORD"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
        echo "</a></p>
\t\t<p>
\t\t";
        // line 10
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 11
            echo "\t\t    <input type=\"checkbox\" class=\"radio\" name=\"autologin\" tabindex=\"3\" /> <span class=\"gensmall\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
            echo "</span><br />
\t\t";
        }
        // line 13
        echo "\t\t";
        if (($context["S_SHOW_HIDE_ME"] ?? null)) {
            // line 14
            echo "\t\t\t<input type=\"checkbox\" class=\"radio\" name=\"viewonline\" tabindex=\"4\" /> <span class=\"gensmall\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SESSION_HIDE_ME");
            echo "</span><br />
\t\t";
        }
        // line 16
        echo "\t\t</p>

\t    <fieldset class=\"submit-buttons\">
\t        <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 19
        echo ($context["U_REDIRECT"] ?? null);
        echo "\" />
\t        <input type=\"submit\" name=\"login\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"button1\" tabindex=\"5\" />
\t    </fieldset>
    </div>
</form>

<a class=\"right-box\" href=\"";
        // line 25
        echo ($context["U_REGISTER"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "blocks/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  80 => 20,  76 => 19,  71 => 16,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  47 => 8,  42 => 6,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "blocks/login.html", "");
    }
}
