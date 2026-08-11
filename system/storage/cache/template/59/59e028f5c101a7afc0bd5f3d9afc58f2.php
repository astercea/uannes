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

/* product/stock_notify.twig */
class __TwigTemplate_1bfe52b6adb5216aa2d29cab60ef5133 extends Template
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
        echo "<div class=\"product-stock-notify\" data-stock-notify data-product-id=\"";
        echo ($context["product_id"] ?? null);
        echo "\">
  <button type=\"button\" class=\"product-stock-notify__trigger\">Gelince Haber Ver</button>
  <div class=\"product-stock-notify__form\" hidden>
    <div class=\"product-stock-notify__controls\">
      <input id=\"stock-notify-email-";
        // line 5
        echo ($context["product_id"] ?? null);
        echo "\" type=\"email\" autocomplete=\"email\" aria-label=\"E-posta adresiniz\" placeholder=\"E-posta adresiniz\" required>
      <button type=\"button\" class=\"product-stock-notify__submit\" aria-label=\"Kaydet\">›</button>
    </div>
    <p class=\"product-stock-notify__status\" aria-live=\"polite\"></p>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/stock_notify.twig";
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
        return array (  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/stock_notify.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\stock_notify.twig");
    }
}
