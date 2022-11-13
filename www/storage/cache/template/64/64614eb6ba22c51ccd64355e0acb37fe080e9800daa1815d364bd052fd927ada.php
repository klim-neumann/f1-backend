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
class __TwigTemplate_f6d22a9b48e0624c18eb7239a833ab5ca4da0c93d1cd3c770e9bbef5064dff7d extends \Twig\Template
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
<section class=\"message\">
\t<div class=\"container\">
\t\t<div class=\"message__body\">
\t\t\t<article class=\"heading-group\">
\t\t\t\t<h1 class=\"heading\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"subheading\">";
        // line 7
        echo ($context["text_error"] ?? null);
        echo "</p>
\t\t\t</article>
\t\t</div>
\t</div>
</section>
";
        // line 12
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
        return array (  57 => 12,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/error/not_found.twig", "");
    }
}
