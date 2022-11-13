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

/* f1/template/error/not_found.twig */
class __TwigTemplate_af8329f4f6a5ff382819f32fd41f57a2fed7d6d816746125dad16a58a6366e78 extends \Twig\Template
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
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<section class=\"message\">
\t<div class=\"container\">
\t\t<div class=\"message__body\">
\t\t\t<article class=\"heading-group\">
\t\t\t\t<h1 class=\"heading\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"subheading\">";
        // line 8
        echo ($context["text_error"] ?? null);
        echo "</p>
\t\t\t</article>
\t\t</div>
\t</div>
</section>
";
        // line 13
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "f1/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/error/not_found.twig", "");
    }
}
