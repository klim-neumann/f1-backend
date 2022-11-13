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

/* f1/template/common/header.twig */
class __TwigTemplate_8389101b9a2f118f1b0962be44822b4330b95762b1ca6a286ea2f30b63bb109d extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html class=\"page\" dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 16
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 16);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 16);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 16);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 19
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 22
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 22);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 22);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 25
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</head>
\t<body class=\"page__body\">
\t\t<header class=\"header page__header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header__body\">
\t\t\t\t\t<a class=\"logo header__logo\" href=\"";
        // line 32
        echo ($context["home"] ?? null);
        echo "\" aria-label=\"домашняя страница\">
\t\t\t\t\t\t<img class=\"logo__img\" src=\"";
        // line 33
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"catalog-button header__catalog-button\" id=\"header__catalog-button\" type=\"button\" aria-expanded=\"false\" aria-controls=\"page__catalog\" aria-label=\"каталог\">
\t\t\t\t\t\t<svg class=\"catalog-button__img catalog-button__img--list\" viewbox=\"0 0 20 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M6.44444 2H18M6.44444 7.5H18M6.44444 13H18M2 2H2.00933M2 7.5H2.00933M2 13H2.00933\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"catalog-button__img catalog-button__img--cross\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M18 2L2 18\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M2 2L18 18\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"catalog-button__text\">Каталог</span>
\t\t\t\t\t</button>
\t\t\t\t\t";
        // line 45
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t<nav class=\"nav header__nav\">
\t\t\t\t\t\t<ul class=\"nav__list\">
\t\t\t\t\t\t\t<li class=\"nav__item\">
\t\t\t\t\t\t\t\t<a class=\"nav__link nav__link--cart\" href=\"";
        // line 49
        echo ($context["shopping_cart"] ?? null);
        echo "\" aria-label=\"корзина\">Корзина</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav__item\">
\t\t\t\t\t\t\t\t";
        // line 52
        if (($context["logged"] ?? null)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t<a class=\"nav__link nav__link--user\" href=\"index.php?route=account/logout\" aria-label=\"войти\">Выйти</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t<a class=\"nav__link nav__link--user\" href=\"";
            echo ($context["login"] ?? null);
            echo "\" aria-label=\"войти\">Войти</a>
\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t";
        // line 63
        echo ($context["menu"] ?? null);
        echo "
\t\t<main class=\"page__main\">
";
    }

    public function getTemplateName()
    {
        return "f1/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 63,  190 => 57,  184 => 55,  180 => 53,  178 => 52,  172 => 49,  165 => 45,  148 => 33,  144 => 32,  137 => 27,  128 => 25,  123 => 24,  112 => 22,  107 => 21,  98 => 19,  93 => 18,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/common/header.twig", "");
    }
}
