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

/* f1/template/common/home.twig */
class __TwigTemplate_3aa05f62730ef2063448a14d25f377d7669469d551f181c3044ea34fedcd9dde extends \Twig\Template
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
<section class=\"welcome\">
\t<div class=\"container\">
\t\t<div class=\"welcome__body\">
\t\t\t<article class=\"heading-group heading-group--max-width-primary\">
\t\t\t\t<h1 class=\"heading\">F1.comp лучшие товары для геймера</h1>
\t\t\t\t<p class=\"subheading\">F1.comp интернет магазин по продаже комплектущих для ПК, игровых
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tкомпьютеров и переферии для настоящего геймера.</p>
\t\t\t</article>
\t\t</div>
\t</div>
</section>
<section class=\"partners\">
\t<div class=\"container\">
\t\t<div class=\"partners__body\">
\t\t\t<h2 class=\"heading heading--secondary heading--align-center partners__heading\">Мы официальные дистрибьюторы</h2>
\t\t\t<ul class=\"partners__list\">
\t\t\t\t<li class=\"partners__item\">
\t\t\t\t\t<img class=\"partners__img\" src=\"catalog/view/theme/f1/img/dark-flash.aeff6080ecfed8a9e997.png\" alt=\"darkFlash\">
\t\t\t\t</li>
\t\t\t\t<li class=\"partners__item\">
\t\t\t\t\t<img class=\"partners__img\" src=\"catalog/view/theme/f1/img/victorage.3186cbfa02d26316d5a0.png\" alt=\"Victorage\">
\t\t\t\t</li>
\t\t\t\t<li class=\"partners__item\">
\t\t\t\t\t<img class=\"partners__img\" src=\"catalog/view/theme/f1/img/fuhlen.f3f15581f37aa5f123fb.png\" alt=\"Fuhlen\">
\t\t\t\t</li>
\t\t\t\t<li class=\"partners__item\">
\t\t\t\t\t<img class=\"partners__img\" src=\"catalog/view/theme/f1/img/xiberia.ef2ecde85bbeb2eeb99d.png\" alt=\"Xiberia\">
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</section>
";
        // line 34
        echo ($context["latest"] ?? null);
        echo "
";
        // line 35
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  73 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/common/home.twig", "");
    }
}
