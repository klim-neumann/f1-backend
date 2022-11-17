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

/* f1/template/account/login.twig */
class __TwigTemplate_8dc76445820015e3846dbc40e339b982fea89f086084242432f222142895d0d3 extends \Twig\Template
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

<div class=\"product__global-alert alert alert--success\" id=\"product__alert\">
\t\t\t\t\t\t<p class=\"alert__text\">Товар добавлен в корзину</p>
\t\t\t\t\t</div>
";
        // line 6
        echo ($context["error_warning"] ?? null);
        echo "
<section class=\"auth\">
\t<div class=\"container\">
\t\t<div class=\"auth__body\">
\t\t\t<article class=\"heading-group heading-group--max-width-primary auth__heading-group\">
\t\t\t\t<h1 class=\"heading\">F1.comp лучшие товары для геймера</h1>
\t\t\t\t<p class=\"subheading\">F1.comp интернет магазин по продаже комплектущих для ПК, игровых
\t\t\t\t\t\t\t\t\t\t\t\tкомпьютеров и переферии для настоящего геймера.</p>
\t\t\t</article>
\t\t\t<div class=\"auth__form-wrapper\">
\t\t\t\t<h2 class=\"heading heading--secondary heading--align-center\">Вход</h2>
\t\t\t\t<form class=\"form\" action=\"";
        // line 17
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"email\" inputmode=\"email\" value=\"";
        // line 18
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"E-mail\" pattern=\"^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$\" required aria-label=\"электронная почта\">
\t\t\t\t\t<input class=\"input\" type=\"password\" name=\"password\" value=\"";
        // line 19
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"Пароль\" required aria-label=\"пароль\">
\t\t\t\t\t<button class=\"button form__button\" aria-label=\"войти\">Войти</button>
\t\t\t\t</form>
\t\t\t\t<a class=\"auth__link\" href=\"";
        // line 22
        echo ($context["register"] ?? null);
        echo "\">Нет аккаунта? Зарегистрируйтесь!</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 27
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  73 => 22,  67 => 19,  63 => 18,  59 => 17,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/account/login.twig", "");
    }
}
