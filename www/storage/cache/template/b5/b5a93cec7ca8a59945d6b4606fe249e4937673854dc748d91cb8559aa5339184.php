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

/* f1/template/product/category.twig */
class __TwigTemplate_26bdef4afec0fb62c0103654277a98aa509b34237776e67a97cd1a8afe55a7ec extends \Twig\Template
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
<section class=\"category\">
\t<div class=\"container\">
\t\t<div class=\"category__body\">
\t\t\t<article class=\"heading-group category__heading-group\">
\t\t\t\t<h1 class=\"heading heading--secondary\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t";
        // line 7
        if ( !($context["products"] ?? null)) {
            // line 8
            echo "\t\t\t\t\t<p class=\"subheading\">К сожалению, в категории нет товара :(</p>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</article>
\t\t\t";
        // line 11
        if (($context["products"] ?? null)) {
            // line 12
            echo "\t\t\t\t<ul class=\"selects-list category__selects-list\">
\t\t\t\t\t<li class=\"selects-list__item\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<label for=\"select__list-0\" class=\"select__label\">";
            // line 15
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select class=\"select__list\" id=\"select__list-0\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 18) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 19);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 19);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 21);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
        }
        // line 29
        echo "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 30
            echo "\t\t\t\t<ul class=\"products-list\">
\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                echo "\t\t\t\t\t\t<li class=\"products-list__item\">
\t\t\t\t\t\t\t<article class=\"product-card products-list__product-card\">
\t\t\t\t\t\t\t\t";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"product-discount product-card__discount\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 35);
                    echo "%</span>
\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t\t\t<img class=\"product-card__img\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 37);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"heading heading--quaternary product-card__heading\">
\t\t\t\t\t\t\t\t\t<a class=\"product-card__link\" href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                echo "\" aria-label=\"товар\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 43);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t<s class=\"product-price__old\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
                    echo "</s>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 54
        echo "\t\t</div>
\t</div>
</section>
";
        // line 57
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  175 => 54,  171 => 52,  162 => 48,  156 => 46,  151 => 44,  146 => 43,  144 => 42,  136 => 39,  128 => 37,  122 => 35,  120 => 34,  116 => 32,  112 => 31,  109 => 30,  106 => 29,  99 => 24,  93 => 23,  85 => 21,  77 => 19,  74 => 18,  70 => 17,  65 => 15,  60 => 12,  58 => 11,  55 => 10,  51 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/product/category.twig", "");
    }
}
