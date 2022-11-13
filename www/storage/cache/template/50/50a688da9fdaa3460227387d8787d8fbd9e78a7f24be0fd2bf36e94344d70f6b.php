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
class __TwigTemplate_695a94031248ccf64b811fef27323393fcab8f3a6bfdf93d5cb0b17f83ad7940 extends \Twig\Template
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
\t\t\t\t\t<strong class=\"product-price__total\">";
        // line 29
        echo ($context["special_price"] ?? null);
        echo "</strong>
\t\t\t\t\t<s class=\"product-price__old\">";
        // line 30
        echo ($context["total_price"] ?? null);
        echo "</s>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 43
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 44);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</ul>
\t";
        // line 48
        if (($context["attention"] ?? null)) {
            // line 49
            echo "\t\t<div class=\"alert alert-info\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 51
            echo ($context["attention"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 55
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 56
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t";
            // line 58
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 62
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 63
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 65
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 69
        echo "\t<div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 70
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 71
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 72
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 73
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 74
            echo "\t\t";
        } else {
            // line 75
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 76
            echo "\t\t";
        }
        // line 77
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 78
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t\t";
        // line 79
        if (($context["weight"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t&nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t</h1>
\t\t\t<form action=\"";
        // line 83
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 88
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 89
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 90
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 91
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 92
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 93
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 99
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 101)) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 102);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 102);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 107)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">***</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 110)) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 113);
                    echo ":
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 114);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 117)) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 119);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 121)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 123
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 124);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 127);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 130);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 130);
            echo "\" size=\"1\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 132
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 135
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 135);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 142);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 146
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 148);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 154
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 154);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 160);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 161);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 169
        if (($context["modules"] ?? null)) {
            // line 170
            echo "\t\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t\t<p>";
            // line 171
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 174
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 178
        echo "\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 183
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 185
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 185);
            echo ":</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 187);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t<a href=\"";
        // line 195
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
        // line 198
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 201
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 202
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
\t\tlocation.reload();
\t}
</script>
";
        // line 216
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
        return array (  555 => 216,  538 => 202,  534 => 201,  526 => 198,  518 => 195,  511 => 190,  502 => 187,  497 => 185,  493 => 183,  489 => 182,  483 => 178,  479 => 176,  470 => 174,  466 => 173,  461 => 171,  456 => 170,  454 => 169,  447 => 164,  438 => 161,  434 => 160,  423 => 154,  414 => 148,  410 => 146,  405 => 145,  396 => 142,  392 => 141,  381 => 135,  375 => 132,  368 => 130,  362 => 127,  359 => 126,  354 => 124,  350 => 123,  347 => 122,  344 => 121,  339 => 119,  336 => 118,  333 => 117,  330 => 116,  322 => 114,  318 => 113,  315 => 112,  310 => 111,  307 => 110,  303 => 108,  301 => 107,  295 => 106,  291 => 104,  279 => 102,  277 => 101,  273 => 99,  269 => 98,  261 => 93,  257 => 92,  253 => 91,  249 => 90,  245 => 89,  241 => 88,  233 => 83,  230 => 82,  224 => 80,  222 => 79,  218 => 78,  211 => 77,  208 => 76,  205 => 75,  202 => 74,  199 => 73,  196 => 72,  193 => 71,  191 => 70,  186 => 69,  179 => 65,  175 => 63,  172 => 62,  165 => 58,  161 => 56,  158 => 55,  151 => 51,  147 => 49,  145 => 48,  142 => 47,  131 => 44,  128 => 43,  124 => 42,  109 => 30,  105 => 29,  99 => 25,  89 => 21,  86 => 20,  80 => 18,  75 => 16,  70 => 15,  68 => 14,  60 => 11,  53 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/checkout/cart.twig", "");
    }
}
