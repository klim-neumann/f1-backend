<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* f1/template/account/register.twig */
class __TwigTemplate_a10cb8dd928b2ef206b2d5948794e083c3ec82445dffdccbcb93fe42105179f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<section class=\"auth\">
\t<div class=\"container\">
\t\t<div class=\"auth__body\">
\t\t\t<article class=\"heading-group heading-group--max-width-primary auth__heading-group\">
\t\t\t\t<h1 class=\"heading\">F1.comp лучшие товары для геймера</h1>
\t\t\t\t<p class=\"subheading\">F1.comp интернет магазин по продаже комплектущих для ПК, игровых компьютеров и переферии для настоящего геймера.</p>
\t\t\t</article>
\t\t\t<div class=\"auth__form-wrapper\">
\t\t\t\t<h2 class=\"heading heading--secondary heading--align-center\">Регистрация</h2>
\t\t\t\t<form class=\"form\" action=\"";
        // line 11
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
\t\t\t\t\t<input class=\"input\" type=\"text\" placeholder=\"Имя\" name=\"firstname\" required aria-label=\"имя\">
\t\t\t\t\t<input class=\"input\" type=\"text\" placeholder=\"Фамилия\" name=\"lastname\" required aria-label=\"фамилия\">
\t\t\t\t\t<input class=\"input\" type=\"text\" inputmode=\"email\" name=\"email\" placeholder=\"E-mail\" pattern=\"^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$\" required aria-label=\"электронная почта\">
\t\t\t\t\t<input class=\"input\" type=\"text\" inputmode=\"tel\" placeholder=\"Номер телефона\" name=\"telephone\" minlength=\"3\" required aria-label=\"номер телефона\">
\t\t\t\t\t<input class=\"input\" type=\"password\" placeholder=\"Пароль\" name=\"password\" minlength=\"4\" required aria-label=\"пароль\">
\t\t\t\t\t<input class=\"input\" type=\"password\" placeholder=\"Подтвердите пароль\" name=\"confirm\" minlength=\"4\" required aria-label=\"подтверждение пароля\">
\t\t\t\t\t<button class=\"button form__button\" aria-label=\"зарегистрироваться\">Зарегистрироваться</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 24
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/account/register.twig", "");
    }
}
