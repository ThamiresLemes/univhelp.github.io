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

/* user_activate_passwd.txt */
class __TwigTemplate_96068caad51f32ce52189ce133b790764267f9350708034fe90e7951b9dfe608 extends \Twig\Template
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
        echo "Subject: Ativação de nova senha

Olá ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo "

Você está recebendo este e-mail devido você (ou alguém se passando por você) ter solicitado que uma nova senha relativa à sua conta em \"";
        // line 5
        echo ($context["SITENAME"] ?? null);
        echo "\" fosse enviada. Se você não solicitou este e-mail, por favor, ignore-o. Caso continue a recebê-lo, por favor, contate o administrador do fórum.

Para utilizar a sua nova senha, é necessário que a ative. Para o fazer, clique no endereço abaixo:
";
        // line 8
        echo ($context["U_ACTIVATE"] ?? null);
        echo "

Seu nome de usuário e a nova senha são:
Usuário: ";
        // line 11
        echo ($context["USERNAME"] ?? null);
        echo "
Senha (em maiúsculas): ";
        // line 12
        echo ($context["PASSWORD"] ?? null);
        echo "

Você poderá alterar esta senha quando desejar, através de seu perfil. Caso tenha alguma dificuldade, contate o administrador do fórum.

";
        // line 16
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  55 => 12,  51 => 11,  45 => 8,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "user_activate_passwd.txt", "");
    }
}
