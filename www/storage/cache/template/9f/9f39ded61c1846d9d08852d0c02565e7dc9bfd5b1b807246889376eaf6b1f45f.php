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
class __TwigTemplate_15d145110cfc6353afb50f4e96518bd8c96148d45804c80e6ddd164123c89568 extends \Twig\Template
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
\t\t\t\t\t<strong class=\"product-price__total\">
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 31
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 31) == "Сумма")) {
                // line 32
                echo "\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 32);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</strong>
\t\t\t\t\t<s class=\"product-price__old\">27 000 ₸</s>
\t\t\t\t\t<span class=\"product-discount product-price__discount\">-20%</span>
\t\t\t\t</div>
\t\t\t\t<button class=\"button cart__button\" type=\"button\">Заказать</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<div id=\"checkout-cart\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 49
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 50);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</ul>
\t";
        // line 54
        if (($context["attention"] ?? null)) {
            // line 55
            echo "\t\t<div class=\"alert alert-info\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 57
            echo ($context["attention"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 61
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 62
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t";
            // line 64
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 68
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 69
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 71
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 75
        echo "\t<div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 76
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 77
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 78
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 79
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 80
            echo "\t\t";
        } else {
            // line 81
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 82
            echo "\t\t";
        }
        // line 83
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 84
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t\t";
        // line 85
        if (($context["weight"] ?? null)) {
            // line 86
            echo "\t\t\t\t\t&nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
\t\t\t\t";
        }
        // line 88
        echo "\t\t\t</h1>
\t\t\t<form action=\"";
        // line 89
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 94
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 95
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 96
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 97
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 98
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 99
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 105
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 107)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 108);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 108);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 113
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 113)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">***</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 116)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 117));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 119);
                    echo ":
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 120);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 123)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 125);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 127)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 129
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 130);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 133);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 136);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136);
            echo "\" size=\"1\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 138
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 141
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 141);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 148);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 152
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 154);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 160
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 160);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 166
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 166);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 167);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 175
        if (($context["modules"] ?? null)) {
            // line 176
            echo "\t\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t\t<p>";
            // line 177
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 180
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 184
        echo "\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 189
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 191
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 191);
            echo ":</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 193);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t<a href=\"";
        // line 201
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
        // line 204
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 207
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 208
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>
\tasync function removeFromCart(cartId) {
\t\tawait fetch('index.php?route=checkout/cart/remove', {
\t\t\tmethod: 'POST',
\t\t\theaders: {
\t\t\t\t'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
\t\t\t},
\t\t\tbody: `key=\${cartId}`
\t\t});
\t}
</script>
";
        // line 221
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
        return array (  570 => 221,  554 => 208,  550 => 207,  542 => 204,  534 => 201,  527 => 196,  518 => 193,  513 => 191,  509 => 189,  505 => 188,  499 => 184,  495 => 182,  486 => 180,  482 => 179,  477 => 177,  472 => 176,  470 => 175,  463 => 170,  454 => 167,  450 => 166,  439 => 160,  430 => 154,  426 => 152,  421 => 151,  412 => 148,  408 => 147,  397 => 141,  391 => 138,  384 => 136,  378 => 133,  375 => 132,  370 => 130,  366 => 129,  363 => 128,  360 => 127,  355 => 125,  352 => 124,  349 => 123,  346 => 122,  338 => 120,  334 => 119,  331 => 118,  326 => 117,  323 => 116,  319 => 114,  317 => 113,  311 => 112,  307 => 110,  295 => 108,  293 => 107,  289 => 105,  285 => 104,  277 => 99,  273 => 98,  269 => 97,  265 => 96,  261 => 95,  257 => 94,  249 => 89,  246 => 88,  240 => 86,  238 => 85,  234 => 84,  227 => 83,  224 => 82,  221 => 81,  218 => 80,  215 => 79,  212 => 78,  209 => 77,  207 => 76,  202 => 75,  195 => 71,  191 => 69,  188 => 68,  181 => 64,  177 => 62,  174 => 61,  167 => 57,  163 => 55,  161 => 54,  158 => 53,  147 => 50,  144 => 49,  140 => 48,  125 => 35,  119 => 34,  113 => 32,  110 => 31,  106 => 30,  99 => 25,  89 => 21,  86 => 20,  80 => 18,  75 => 16,  70 => 15,  68 => 14,  60 => 11,  53 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/checkout/cart.twig", "");
    }
}
