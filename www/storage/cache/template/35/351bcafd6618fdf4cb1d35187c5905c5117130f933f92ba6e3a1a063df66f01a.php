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

/* f1/template/account/register.twig */
class __TwigTemplate_f914d5d86806f21a22c81d9326188e6388dfb0d77bb70252ac2ad63d1c71fa7a extends \Twig\Template
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
<section class=\"auth\">
\t<div class=\"container\">
\t\t<div class=\"auth__body\">
\t\t\t<article class=\"heading-group heading-group--max-width-primary auth__heading-group\">
\t\t\t\t<h1 class=\"heading\">F1.comp лучшие товары для геймера</h1>
\t\t\t\t<p class=\"subheading\">F1.comp интернет магазин по продаже комплектущих для ПК, игровых компьютеров и переферии для настоящего геймера.</p>
\t\t\t</article>
\t\t\t<div class=\"auth__form-wrapper\">
\t\t\t\t<h2 class=\"heading heading--secondary heading--align-center\">Регистрация</h2>
\t\t\t\t<form class=\"form\" action=\"";
        // line 11
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
\t\t\t\t\t<input class=\"input\" type=\"text\" placeholder=\"Имя\" name=\"firstname\" required aria-label=\"имя\">
\t\t\t\t\t<input class=\"input\" type=\"text\" placeholder=\"Фамилия\" name=\"lastname\" required aria-label=\"фамилия\">
\t\t\t\t\t<input class=\"input\" type=\"text\" inputmode=\"email\" name=\"email\" placeholder=\"E-mail\" pattern=\"^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$\" required aria-label=\"электронная почта\">
\t\t\t\t\t<input class=\"input\" type=\"text\" inputmode=\"tel\" placeholder=\"Номер телефона\" name=\"telephone\" minlength=\"3\" required aria-label=\"номер телефона\">
\t\t\t\t\t<input class=\"input\" type=\"password\" placeholder=\"Пароль\" name=\"password\" minlength=\"4\" required aria-label=\"пароль\">
\t\t\t\t\t<input class=\"input\" type=\"password\" placeholder=\"Подтвердите пароль\" name=\"confirm\" minlength=\"4\" required aria-label=\"подтверждение пароля\">
\t\t\t\t\t<button class=\"button form__button\" aria-label=\"зарегистрироваться\">Зарегистрироваться</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<div id=\"account-register\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</ul>
\t";
        // line 33
        if (($context["error_warning"] ?? null)) {
            // line 34
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 36
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 38
        echo "\t<div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 39
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 40
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 41
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 42
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 43
            echo "\t\t";
        } else {
            // line 44
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 45
            echo "\t\t";
        }
        // line 46
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<p>";
        // line 48
        echo ($context["text_account_already"] ?? null);
        echo "</p>
\t\t\t<form action=\"";
        // line 49
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t<legend>";
        // line 51
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"form-group required\" style=\"display: ";
        // line 52
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 53
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56) == ($context["customer_group_id"] ?? null))) {
                // line 57
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 59);
                echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 60);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 66);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 73
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 75
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 76
        if (($context["error_firstname"] ?? null)) {
            // line 77
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 82
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 84
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 85
        if (($context["error_lastname"] ?? null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 91
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 93
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 94
        if (($context["error_email"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 100
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 102
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 103
        if (($context["error_telephone"] ?? null)) {
            // line 104
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 109
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "select")) {
                // line 110
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 110);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 114
                echo ($context["text_select"] ?? null);
                echo "</option>


\t\t\t\t\t\t\t\t\t\t";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 117));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 118)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 118) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118)] ?? null) : null)))) {
                        // line 119
                        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 121);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 121);
                        echo "</option>


\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 125
                        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 127);
                        echo "</option>


\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
                // line 135
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "radio")) {
                // line 142
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 142);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 150);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150);
                        echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 154);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 154);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 155
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 160
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160)] ?? null) : null)) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 166) == "checkbox")) {
                // line 167
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 167);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 171));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 173), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)))) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 175);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 175);
                        echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 176);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 179);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 179);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 180);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 182
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 185
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null)) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 191) == "text")) {
                // line 192
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 192);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 193);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 195);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "]\" value=\"";
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t";
                // line 196
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "textarea")) {
                // line 203
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 203);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                // line 207
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 212
                echo "\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t";
                // line 213
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 216
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 219) == "file")) {
                // line 220
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 220);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 221);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-custom-field";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 225
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 226);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "]\" value=\"";
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    echo " ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
\t\t\t\t\t\t\t\t\t";
                // line 227
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 230
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 233) == "date")) {
                // line 234
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 234);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 235);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 238);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "]\" value=\"";
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 238);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 238);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 245
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 248
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "time")) {
                // line 252
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 252);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 256);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "]\" value=\"";
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 256);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 263
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263)] ?? null) : null)) {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 269) == "datetime")) {
                // line 270
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 270);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 274
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 274);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                echo "]\" value=\"";
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 274);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 274);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 281
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281)] ?? null) : null)) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 284
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 287
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 290
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 292
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 294
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 295
        if (($context["error_password"] ?? null)) {
            // line 296
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 298
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 301
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 303
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 304
        if (($context["error_confirm"] ?? null)) {
            // line 305
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 307
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 311
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 313
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 315
        if (($context["newsletter"] ?? null)) {
            // line 316
            echo "\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t";
            // line 318
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t";
            // line 321
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 323
            echo "\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t";
            // line 325
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 330
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t";
        // line 333
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t";
        // line 334
        if (($context["text_agree"] ?? null)) {
            // line 335
            echo "\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">";
            // line 336
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 337
            if (($context["agree"] ?? null)) {
                // line 338
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t";
            } else {
                // line 340
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t\t\t\t";
            }
            // line 342
            echo "\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 343
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 347
            echo "\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 349
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 353
        echo "\t\t\t</form>
\t\t\t";
        // line 354
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 355
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\">
\t<!--
\t// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function () {
if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
}

if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\$('#account .form-group:last').after(this);
}

if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\$('#account .form-group:last').after(this);
}

if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\$('#account .form-group:first').before(this);
}
});

\$('input[name=\\'customer_group_id\\']').on('change', function () {
\$.ajax({
url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
dataType: 'json',
success: function (json) {
\$('.custom-field').hide();
\$('.custom-field').removeClass('required');

for (i = 0; i < json.length; i ++) {
custom_field = json[i];

\$('#custom-field' + custom_field['custom_field_id']).show();

if (custom_field['required']) {
\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
}
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//
\t-->
</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('button[id^=\\'button-custom-field\\']').on('click', function () {
var element = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(element).button('loading');
},
complete: function () {
\$(element).button('reset');
},
success: function (json) {
\$(element).parent().find('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(element).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//-->
\t</script>
\t<script
\ttype=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({language: '";
        // line 465
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.time').datetimepicker({language: '";
        // line 467
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('.datetime').datetimepicker({language: '";
        // line 469
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
//-->
</script>
";
        // line 472
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1160 => 472,  1154 => 469,  1149 => 467,  1144 => 465,  1031 => 355,  1027 => 354,  1024 => 353,  1017 => 349,  1013 => 347,  1006 => 343,  1003 => 342,  999 => 340,  995 => 338,  993 => 337,  989 => 336,  986 => 335,  984 => 334,  980 => 333,  975 => 330,  970 => 328,  964 => 325,  960 => 323,  955 => 321,  949 => 318,  945 => 316,  943 => 315,  938 => 313,  933 => 311,  927 => 307,  921 => 305,  919 => 304,  913 => 303,  908 => 301,  903 => 298,  897 => 296,  895 => 295,  889 => 294,  884 => 292,  879 => 290,  875 => 288,  869 => 287,  864 => 284,  858 => 282,  856 => 281,  834 => 274,  826 => 271,  819 => 270,  816 => 269,  811 => 266,  805 => 264,  803 => 263,  781 => 256,  773 => 253,  766 => 252,  763 => 251,  758 => 248,  752 => 246,  750 => 245,  728 => 238,  720 => 235,  713 => 234,  710 => 233,  705 => 230,  699 => 228,  697 => 227,  685 => 226,  681 => 225,  674 => 223,  669 => 221,  662 => 220,  659 => 219,  654 => 216,  648 => 214,  646 => 213,  643 => 212,  637 => 210,  631 => 208,  629 => 207,  619 => 206,  612 => 204,  605 => 203,  602 => 202,  597 => 199,  591 => 197,  589 => 196,  573 => 195,  566 => 193,  559 => 192,  556 => 191,  551 => 188,  545 => 186,  543 => 185,  540 => 184,  533 => 182,  528 => 180,  520 => 179,  517 => 178,  512 => 176,  504 => 175,  501 => 174,  499 => 173,  496 => 172,  492 => 171,  486 => 168,  479 => 167,  476 => 166,  471 => 163,  465 => 161,  463 => 160,  460 => 159,  453 => 157,  448 => 155,  440 => 154,  437 => 153,  432 => 151,  424 => 150,  421 => 149,  419 => 148,  416 => 147,  412 => 146,  406 => 143,  399 => 142,  396 => 141,  391 => 138,  385 => 136,  383 => 135,  378 => 132,  372 => 131,  363 => 127,  359 => 125,  350 => 121,  346 => 119,  343 => 118,  339 => 117,  333 => 114,  325 => 113,  318 => 111,  311 => 110,  308 => 109,  304 => 108,  300 => 106,  294 => 104,  292 => 103,  286 => 102,  281 => 100,  276 => 97,  270 => 95,  268 => 94,  262 => 93,  257 => 91,  252 => 88,  246 => 86,  244 => 85,  238 => 84,  233 => 82,  228 => 79,  222 => 77,  220 => 76,  214 => 75,  209 => 73,  204 => 70,  198 => 69,  192 => 66,  188 => 65,  184 => 63,  178 => 60,  174 => 59,  170 => 57,  167 => 56,  163 => 55,  158 => 53,  150 => 52,  146 => 51,  141 => 49,  137 => 48,  133 => 47,  126 => 46,  123 => 45,  120 => 44,  117 => 43,  114 => 42,  111 => 41,  108 => 40,  106 => 39,  101 => 38,  96 => 36,  92 => 34,  90 => 33,  87 => 32,  76 => 29,  73 => 28,  69 => 27,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/account/register.twig", "");
    }
}
