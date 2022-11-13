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

/* f1/template/product/product.twig */
class __TwigTemplate_cff0655f7dced2a9f9bf71124785f1f3b495d15d63748742f078d734eb4dbb77 extends \Twig\Template
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
<section class=\"product\">
\t<div class=\"container\">
\t\t<div class=\"product__body\">
\t\t\t<div class=\"product__info\">
\t\t\t\t<div class=\"product__first\">
\t\t\t\t\t<div class=\"glide\" style=\"margin-bottom: var(--heading-margin-bottom-primary);\">
\t\t\t\t\t\t<div class=\"glide__track\" data-glide-el=\"track\">
\t\t\t\t\t\t\t<ul class=\"glide__slides\">
\t\t\t\t\t\t\t\t";
        // line 10
        if (($context["thumb"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t\t\t\t<img class=\"product__img\" src=\"";
            // line 12
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"glide__slide\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"product__img\" src=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"glide__bullets\" data-glide-el=\"controls[nav]\">
\t\t\t\t\t\t\t";
        // line 25
        if (($context["thumb"] ?? null)) {
            // line 26
            echo "\t\t\t\t\t\t\t\t<button class=\"glide-bullet glide__bullet\" type=\"button\" data-glide-dir=\"=0\"></button>
\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["_"]) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<button class=\"glide-bullet glide__bullet\" type=\"button\" data-glide-dir=\"=";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30);
                echo "\"></button>
\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"heading heading--secondary\">";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"product__second\">
\t\t\t\t\t<div class=\"product-price product__product-price\">
\t\t\t\t\t\t";
        // line 39
        if (($context["discount"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
            echo ($context["special"] ?? null);
            echo "</strong>
\t\t\t\t\t\t\t<s class=\"product-price__old\">";
            // line 41
            echo ($context["price"] ?? null);
            echo "</s>
\t\t\t\t\t\t\t<span class=\"product-discount product-price__discount\">-";
            // line 42
            echo ($context["discount"] ?? null);
            echo "%</span>
\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
            echo ($context["price"] ?? null);
            echo "</strong>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"button product__button\" type=\"button\" onclick=\"addToCart(";
        // line 47
        echo ($context["product_id"] ?? null);
        echo ")\" aria-label=\"в корзину\">В корзину</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 50
        if (($context["attribute_groups"] ?? null)) {
            // line 51
            echo "\t\t\t\t<div class=\"product__description\">
\t\t\t\t\t<h2 class=\"heading heading--secondary product__heading product__heading--secondary\">Технические характеристики</h2>
\t\t\t\t\t<ul class=\"tables-list\">
\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 55
                echo "\t\t\t\t\t\t\t<li class=\"tables-list__item\">
\t\t\t\t\t\t\t\t<div class=\"tables-list__table-wrapper\">
\t\t\t\t\t\t\t\t\t<h3 class=\"heading heading--tertiary tables-list__heading\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 57);
                echo "</h3>
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tbody class=\"table__body\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table__row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"table__heading\">";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 62);
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"table__data\">";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 63);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 74
        echo "\t\t</div>
\t</div>
</section>
";
        // line 77
        echo ($context["featured"] ?? null);
        echo "
";
        // line 78
        echo ($context["bestseller"] ?? null);
        echo "
<script>
\tasync function addToCart(productId) {
await fetch('index.php?route=checkout/cart/add', {
method: 'POST',
headers: {
'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
},
body: `product_id=\${productId}`
});
}
</script>
";
        // line 90
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 90,  246 => 78,  242 => 77,  237 => 74,  232 => 71,  222 => 66,  213 => 63,  209 => 62,  206 => 61,  202 => 60,  196 => 57,  192 => 55,  188 => 54,  183 => 51,  181 => 50,  175 => 47,  172 => 46,  166 => 44,  161 => 42,  157 => 41,  152 => 40,  150 => 39,  143 => 35,  139 => 33,  136 => 32,  119 => 30,  101 => 29,  98 => 28,  94 => 26,  92 => 25,  87 => 22,  84 => 21,  73 => 18,  70 => 17,  65 => 16,  62 => 15,  54 => 12,  51 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/product/product.twig", "");
    }
}
