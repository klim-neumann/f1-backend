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
class __TwigTemplate_ae290c9b2a7d33a9e321e1a6b3b82eddf5cccfd1b6813229767b1bd76468bb15 extends \Twig\Template
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
\t\t\t\t<button class=\"button cart__button\" type=\"button\">Заказать</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<div id=\"checkout-cart\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 47
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 48);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 48);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</ul>
\t";
        // line 52
        if (($context["attention"] ?? null)) {
            // line 53
            echo "\t\t<div class=\"alert alert-info\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 55
            echo ($context["attention"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 59
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 60
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t";
            // line 62
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 66
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 67
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 69
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 73
        echo "\t<div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 74
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 75
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 76
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 77
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 78
            echo "\t\t";
        } else {
            // line 79
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 80
            echo "\t\t";
        }
        // line 81
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 82
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t\t";
        // line 83
        if (($context["weight"] ?? null)) {
            // line 84
            echo "\t\t\t\t\t&nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
\t\t\t\t";
        }
        // line 86
        echo "\t\t\t</h1>
\t\t\t<form action=\"";
        // line 87
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 92
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 93
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 94
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 95
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 96
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 97
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 105)) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 111
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 111)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">***</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 114)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 117);
                    echo ":
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 118);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 121)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 123);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 125)) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                // line 127
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 128);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 131);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 134);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 134);
            echo "\" size=\"1\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 136
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 139
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 139);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 146);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 152);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group btn-block\" style=\"max-width: 200px;\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 158
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 158);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 164);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 165);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 173
        if (($context["modules"] ?? null)) {
            // line 174
            echo "\t\t\t\t<h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
\t\t\t\t<p>";
            // line 175
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 178
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 182
        echo "\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 187
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 189
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 189);
            echo ":</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 191
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 191);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t<a href=\"";
        // line 199
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
        // line 202
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 205
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 206
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
        // line 220
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
        return array (  570 => 220,  553 => 206,  549 => 205,  541 => 202,  533 => 199,  526 => 194,  517 => 191,  512 => 189,  508 => 187,  504 => 186,  498 => 182,  494 => 180,  485 => 178,  481 => 177,  476 => 175,  471 => 174,  469 => 173,  462 => 168,  453 => 165,  449 => 164,  438 => 158,  429 => 152,  425 => 150,  420 => 149,  411 => 146,  407 => 145,  396 => 139,  390 => 136,  383 => 134,  377 => 131,  374 => 130,  369 => 128,  365 => 127,  362 => 126,  359 => 125,  354 => 123,  351 => 122,  348 => 121,  345 => 120,  337 => 118,  333 => 117,  330 => 116,  325 => 115,  322 => 114,  318 => 112,  316 => 111,  310 => 110,  306 => 108,  294 => 106,  292 => 105,  288 => 103,  284 => 102,  276 => 97,  272 => 96,  268 => 95,  264 => 94,  260 => 93,  256 => 92,  248 => 87,  245 => 86,  239 => 84,  237 => 83,  233 => 82,  226 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  208 => 75,  206 => 74,  201 => 73,  194 => 69,  190 => 67,  187 => 66,  180 => 62,  176 => 60,  173 => 59,  166 => 55,  162 => 53,  160 => 52,  157 => 51,  146 => 48,  143 => 47,  139 => 46,  127 => 36,  121 => 34,  116 => 32,  112 => 31,  107 => 30,  105 => 29,  99 => 25,  89 => 21,  86 => 20,  80 => 18,  75 => 16,  70 => 15,  68 => 14,  60 => 11,  53 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/checkout/cart.twig", "");
    }
}
