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

/* f1/template/extension/module/latest.twig */
class __TwigTemplate_4e6625a90f42c2480062f468141a7dca51c509806de3ecbd1f69e0dfc108207c extends \Twig\Template
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
        echo "<section class=\"offers\">
\t<div class=\"container\">
\t\t<div class=\"offers__body\">
\t\t\t<h2 class=\"heading heading--tertiary offers__heading\">Новинки</h2>
\t\t\t<ul class=\"products-list\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "\t\t\t\t\t<li class=\"products-list__item\">
\t\t\t\t\t\t<article class=\"product-card products-list__product-card\">
\t\t\t\t\t\t\t";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 9)) {
                // line 10
                echo "\t\t\t\t\t\t\t\t<span class=\"product-discount product-card__discount\">-";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 10);
                echo "%</span>
\t\t\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t\t\t<img class=\"product-card__img\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
            echo "\">
\t\t\t\t\t\t\t<h3 class=\"heading heading--quaternary product-card__heading\">
\t\t\t\t\t\t\t\t<a class=\"product-card__link\" href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\" aria-label=\"товар\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"product-card__price-wrapper\">
\t\t\t\t\t\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<strong class=\"product-price\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 18);
                echo "</strong>
\t\t\t\t\t\t\t\t\t<s class=\"product-price--old\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19);
                echo "</s>
\t\t\t\t\t\t\t\t";
            } else {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<strong class=\"product-price\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                echo "</strong>
\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "f1/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  94 => 23,  88 => 21,  83 => 19,  78 => 18,  76 => 17,  68 => 14,  60 => 12,  54 => 10,  52 => 9,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/extension/module/latest.twig", "");
    }
}
