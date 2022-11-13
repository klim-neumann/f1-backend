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

/* f1/template/common/search.twig */
class __TwigTemplate_d0f9bc754cea11a5afdf852a08534cf989509bce58e98341bce5f9b57d5b3219 extends \Twig\Template
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
        echo "<form class=\"search header__search\" action=\"index.php\" method=\"get\">
\t<input type=\"hidden\" name=\"route\" value=\"product/search\">
\t<input class=\"input input--tertiary search__input\" type=\"text\" inputmode=\"search\" name=\"search\" placeholder=\"Поиск по каталогу\" required aria-label=\"поиск по каталогу\">
\t<button class=\"search__button\" aria-label=\"найти\"></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "f1/template/common/search.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f1/template/common/search.twig", "");
    }
}
