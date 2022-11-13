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

/* f1/template/common/footer.twig */
class __TwigTemplate_f98111c232f8fe6845b903e19386e07eee0798c6f95233aee117502453fd8751 extends \Twig\Template
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
        echo "</main>
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"footer__body\">
\t\t\t<div>
\t\t\t\t<h2 class=\"heading heading--tertiary footer__heading\">Будьте в курсе новостей</h2>
\t\t\t\t<form class=\"form form--secondary\" action=\"#\" method=\"post\">
\t\t\t\t\t<input class=\"input input--secondary\" type=\"text\" inputmode=\"email\" placeholder=\"Введите e-mail\" pattern=\"^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$\" required aria-label=\"электронная почта\">
\t\t\t\t\t<button class=\"button button--secondary\" aria-label=\"подписаться\">Подписаться</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"socials\">
\t\t\t\t<h2 class=\"heading heading--tertiary footer__heading\">Мы в соцсетях</h2>
\t\t\t\t<ul class=\"socials__list\">
\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a class=\"socials__link\" href=\"#\" aria-label=\"\">
\t\t\t\t\t\t\t<svg class=\"socials__img\" data-src=\"catalog/view/theme/f1/img/instagram.5c7ca2317378bc7ab998.svg\"></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a class=\"socials__link\" href=\"#\" aria-label=\"\">
\t\t\t\t\t\t\t<svg class=\"socials__img\" data-src=\"catalog/view/theme/f1/img/whatsapp.6bff021d71bd75665373.svg\"></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a class=\"socials__link\" href=\"#\" aria-label=\"\">
\t\t\t\t\t\t\t<svg class=\"socials__img\" data-src=\"catalog/view/theme/f1/img/telegram.1374154c20a8bf139f06.svg\"></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<small class=\"footer__text\">ТОО “F1.comp” 2022 год</small>
\t\t</div>
\t</div>
</footer>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 37);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 37);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 37);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 40
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "f1/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  95 => 40,  91 => 39,  78 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/common/footer.twig", "");
    }
}
