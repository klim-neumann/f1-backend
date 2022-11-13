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

/* f1/template/common/menu.twig */
class __TwigTemplate_222ef9053de5a2e984b03f4977db2e171ebb47642200892ea874117a597d47aa extends \Twig\Template
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
        echo "<aside class=\"catalog page__catalog\" id=\"page__catalog\">
\t<div class=\"container\">
\t\t<div class=\"catalog__body\">
\t\t\t<ul class=\"catalog__list\">
\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t<button class=\"catalog__button\" type=\"button\" aria-expanded=\"false\" aria-controls=\"catalog__nav-";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8);
                echo "\" aria-label=\"категория\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</button>
\t\t\t\t\t\t\t<nav class=\"catalog__nav\" id=\"catalog__nav-";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9);
                echo "\">
\t\t\t\t\t\t\t\t<ul class=\"catalog__list catalog__list--nested\">
\t\t\t\t\t\t\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"catalog__item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"catalog__link\" href=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 13);
                    echo "\" aria-label=\"\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 13);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</aside>
";
    }

    public function getTemplateName()
    {
        return "f1/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  101 => 20,  95 => 16,  84 => 13,  81 => 12,  77 => 11,  72 => 9,  66 => 8,  63 => 7,  60 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/common/menu.twig", "");
    }
}
