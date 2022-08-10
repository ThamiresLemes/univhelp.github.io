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

/* memberlist_email.html */
class __TwigTemplate_fe96eabc461744fc3a3ef13bf6edcd80081a716ce60e31bc29382d91df368876 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        if (($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 6
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_ADMIN");
            echo "</h2>
";
        } elseif (        // line 7
($context["S_SEND_USER"] ?? null)) {
            // line 8
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL_USER");
            echo "</h2>
";
        } else {
            // line 10
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
            echo "</h2>
";
        }
        // line 12
        echo "
<form method=\"post\" action=\"";
        // line 13
        echo ($context["S_POST_ACTION"] ?? null);
        echo "\" id=\"post\">

\t";
        // line 15
        if (($context["CONTACT_INFO"] ?? null)) {
            // line 16
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 20
            echo ($context["CONTACT_INFO"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<br class=\"clear\" />
\t";
        }
        // line 27
        echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t<div class=\"content\">

\t\t";
        // line 32
        if (($context["ERROR_MESSAGE"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR_MESSAGE"] ?? null);
            echo "</p>";
        }
        // line 33
        echo "\t\t<fieldset class=\"fields2\">
\t\t";
        // line 34
        if (($context["S_SEND_USER"] ?? null)) {
            // line 35
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 37
            echo ($context["USERNAME_FULL"] ?? null);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 41
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } elseif (        // line 43
($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 44
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 45
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 48
            if ( !($context["S_IS_REGISTERED"] ?? null)) {
                // line 49
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
                // line 50
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 51
                echo ($context["EMAIL"] ?? null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
                // line 54
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 55
                echo ($context["NAME"] ?? null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 58
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 60
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } else {
            // line 63
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 65
            echo ($context["EMAIL"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 69
            echo ($context["NAME"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"lang\">";
            // line 74
            echo ($context["S_LANG_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t</dl>
\t\t";
        }
        // line 77
        echo "\t\t<dl>
\t\t\t<dt><label for=\"message\">";
        // line 78
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 79
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea class=\"inputbox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 80
        echo ($context["MESSAGE"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 82
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 83
            echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CC_SENDER");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 88
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 98
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
\t</div>
\t</div>
";
        // line 102
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</div>

</form>

";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 107,  282 => 102,  275 => 98,  263 => 88,  257 => 85,  253 => 83,  251 => 82,  246 => 80,  242 => 79,  237 => 78,  234 => 77,  228 => 74,  224 => 73,  219 => 72,  213 => 69,  208 => 68,  202 => 65,  197 => 64,  194 => 63,  188 => 60,  183 => 59,  180 => 58,  174 => 55,  169 => 54,  163 => 51,  158 => 50,  155 => 49,  153 => 48,  148 => 46,  143 => 45,  140 => 44,  138 => 43,  133 => 41,  128 => 40,  122 => 37,  117 => 36,  114 => 35,  112 => 34,  109 => 33,  103 => 32,  96 => 27,  86 => 20,  80 => 16,  78 => 15,  73 => 13,  70 => 12,  64 => 10,  58 => 8,  56 => 7,  51 => 6,  49 => 5,  46 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_email.html", "");
    }
}
