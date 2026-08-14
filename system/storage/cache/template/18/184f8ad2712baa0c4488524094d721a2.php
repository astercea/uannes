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

/* default/template/common/search.twig */
class __TwigTemplate_c3292ef578aa3d0b5085cd819d46c2db extends Template
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
        echo "<div id=\"search\" class=\"mega-search-wrapper\">
  <div class=\"mega-search-form\">
    <div class=\"search-icon\">
       <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>
    </div>
    <input type=\"text\" name=\"search\" value=\"";
        // line 6
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"Search\" class=\"mega-search-input\" autocomplete=\"off\" />
    <button type=\"button\" class=\"search-close-inline\" id=\"search-close-inline\" aria-label=\"Kapat\">
       <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
    </button>
  </div>
  
  <div class=\"suggested-searches-title\">SUGGESTED SEARCHES</div>
  <div class=\"mega-search-links\">
    <a href=\"index.php?route=product/search&search=Yenidoğan\">Yenidoğan Bebek</a>
    <a href=\"index.php?route=product/search&search=Kız+Bebek\">Kız Bebek Koleksiyonu</a>
    <a href=\"index.php?route=product/search&search=Erkek+Bebek\">Erkek Bebek Koleksiyonu</a>
    <a href=\"index.php?route=product/search&search=Aksesuarlar\">Aksesuarlar</a>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\search.twig");
    }
}
