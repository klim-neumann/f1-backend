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

/* f1/template/checkout/cart.twig */
class __TwigTemplate_7460fa97b50568c8d48f929ff6a08b99e67cca18f65fd8b81d8d21628b0dcd69 extends \Twig\Template
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
<section class=\"cart\">
\t<div class=\"container\">
\t\t<div class=\"cart__body\">
\t\t\t<ul class=\"cart__list\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "\t\t\t\t\t<li class=\"cart__item\">
\t\t\t\t\t\t<article class=\"product-card product-card--cart cart__product-card\">
\t\t\t\t\t\t\t<img class=\"product-card__img\" src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\">
\t\t\t\t\t\t\t<h3 class=\"heading heading--quaternary product-card__heading\">
\t\t\t\t\t\t\t\t<a class=\"product-card__link\" href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\" aria-label=\"\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"product-price product-price--cart cart__list-product-price\">
\t\t\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 15);
                echo "</strong>
\t\t\t\t\t\t\t\t\t<s class=\"product-price__old\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16);
                echo "</s>
\t\t\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<strong class=\"product-price__total\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18);
                echo "</strong>
\t\t\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"product-card__button-delete\" type=\"button\" onclick=\"removeFromCart(";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 21);
            echo ")\" aria-label=\"удалить из корзины\">Удалить</button>
\t\t\t\t\t\t</article>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</ul>
\t\t\t<div class=\"cart__total-wrapper\">
\t\t\t\t<h1 class=\"heading heading--secondary heading--align-center\">Общая сумма</h1>
\t\t\t\t<div class=\"product-price cart__product-price\">
\t\t\t\t\t";
        // line 29
        if (($context["special_price"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t<strong class=\"product-price__total\">";
            echo ($context["special_price"] ?? null);
            echo "</strong>
\t\t\t\t\t\t<s class=\"product-price__old\">";
            // line 31
            echo ($context["total_price"] ?? null);
            echo "</s>
\t\t\t\t\t\t<span class=\"product-discount product-price__discount\">-";
            // line 32
            echo ($context["total_discount"] ?? null);
            echo "%</span>
\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t<strong class=\"product-price__total\">";
            echo ($context["total_price"] ?? null);
            echo "</strong>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</div>
\t\t\t\t<button class=\"button cart__button\" type=\"button\" onclick=\"confirm()\">Заказать</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
\tasync function removeFromCart(cartId) {
\t\tawait fetch('index.php?route=checkout/cart/remove', {
\t\t\tmethod: 'POST',
\t\t\theaders: {
\t\t\t\t'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
\t\t\t},
\t\t\tbody: `key=\${cartId}`
\t\t});
\t\tlocation.reload();
\t}

\tasync function confirm() {
\t\tdocument.location = 'index.php?route=checkout/confirm';
\t}
</script>
";
        // line 58
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  127 => 36,  121 => 34,  116 => 32,  112 => 31,  107 => 30,  105 => 29,  99 => 25,  89 => 21,  86 => 20,  80 => 18,  75 => 16,  70 => 15,  68 => 14,  60 => 11,  53 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/checkout/cart.twig", "");
    }
}
