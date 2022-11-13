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

/* f1/template/product/search.twig */
class __TwigTemplate_4fc2af99b8a798937bbe522efd768eaa33af7bb341819730abb4199bfb0419d7 extends \Twig\Template
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
<section class=\"search-result\">
\t<div class=\"container\">
\t\t<div class=\"search-result__body\">
\t\t\t<article class=\"heading-group search-result__heading-group\">
\t\t\t\t<h1 class=\"heading heading--secondary\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t";
        // line 7
        if ( !($context["products"] ?? null)) {
            // line 8
            echo "\t\t\t\t\t<p class=\"subheading\">Ничего не найдено :(</p>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</article>
\t\t\t";
        // line 11
        if (($context["products"] ?? null)) {
            // line 12
            echo "\t\t\t\t<ul class=\"selects-list search-result__selects-list\">
\t\t\t\t\t<li class=\"selects-list__item\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<label for=\"select__list-0\" class=\"select__label\">Категория</label>
\t\t\t\t\t\t\t<select class=\"select__list\" id=\"select__list-0\" onchange=\"sortByCategory(this.value)\">
\t\t\t\t\t\t\t\t";
            // line 17
            if ((($context["category_id"] ?? null) == 0)) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
                echo ($context["text_category"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo ($context["text_category"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 24);
                    echo "\" selected>";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"selects-list__item\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<label for=\"select__list-1\" class=\"select__label\">";
            // line 34
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select class=\"select__list\" id=\"select__list-1\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 37) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 38);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 38);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 40);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 40);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"products-list\">
\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                echo "\t\t\t\t\t\t<li class=\"products-list__item\">
\t\t\t\t\t\t\t<article class=\"product-card products-list__product-card\">
\t\t\t\t\t\t\t\t";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"product-discount product-card__discount\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 52);
                    echo "%</span>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t<img class=\"product-card__img\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"heading heading--quaternary product-card__heading\">
\t\t\t\t\t\t\t\t\t<a class=\"product-card__link\" href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
                echo "\" aria-label=\"товар\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t<s class=\"product-price__old\">";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                    echo "</s>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 71
        echo "\t\t</div>
\t</div>
</section>
<script>

\tfunction sortByCategory(categoryId) {
const url = new URL(location);
const params = new URLSearchParams(url.search);
params.set('category_id', categoryId);
document.location = `\${
url.pathname
}?\${
params.toString()
}`;
}
</script>
";
        // line 87
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 87,  222 => 71,  218 => 69,  209 => 65,  203 => 63,  198 => 61,  193 => 60,  191 => 59,  183 => 56,  175 => 54,  169 => 52,  167 => 51,  163 => 49,  159 => 48,  152 => 43,  146 => 42,  138 => 40,  130 => 38,  127 => 37,  123 => 36,  118 => 34,  111 => 29,  105 => 28,  97 => 26,  89 => 24,  86 => 23,  81 => 22,  75 => 20,  69 => 18,  67 => 17,  60 => 12,  58 => 11,  55 => 10,  51 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/product/search.twig", "");
    }
}
