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

/* default/template/checkout/cart_empty.twig */
class __TwigTemplate_b3a46f6d53e1852b740b8e74328425df extends Template
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
<main id=\"checkout-cart-empty\" class=\"container cart-empty-page\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    <div id=\"content\" class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <section class=\"cart-empty-page__message\">
        <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <p>";
        // line 15
        echo ($context["text_error"] ?? null);
        echo "</p>
        <a href=\"";
        // line 16
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn cart-empty-page__action\">Alışverişe Başla</a>
      </section>

      ";
        // line 19
        if (($context["recently_viewed_products"] ?? null)) {
            // line 20
            echo "        <section class=\"cart-page__recent cart-empty-page__recent\" aria-labelledby=\"empty-recently-viewed-title\">
          <header class=\"cart-page__recent-heading\">
            <h2 id=\"empty-recently-viewed-title\">Son Ziyaret Edilenler</h2>
          </header>
          <div class=\"uannes-row-grid cart-page__recent-grid\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\" class=\"uannes-row-card cart-page__recent-card\">
                <div class=\"uannes-row-media\">
                  <img src=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" class=\"uannes-row-img main-img\" />
                  ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 29)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 29);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                    echo "\" class=\"uannes-row-img hover-img\" />";
                }
                // line 30
                echo "                </div>
                <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</span></div>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          </div>
        </section>
      ";
        }
        // line 37
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 39
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</main>
";
        // line 42
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/cart_empty.twig";
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
        return array (  152 => 42,  146 => 39,  140 => 37,  135 => 34,  126 => 31,  123 => 30,  115 => 29,  109 => 28,  103 => 26,  99 => 25,  92 => 20,  90 => 19,  84 => 16,  80 => 15,  76 => 14,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart_empty.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\cart_empty.twig");
    }
}
