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

/* default/template/checkout/cart.twig */
class __TwigTemplate_aa4515f0ee3b66d76e347c137b57cfae extends Template
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
<main id=\"checkout-cart\" class=\"container cart-page\">
  ";
        // line 3
        if (($context["attention"] ?? null)) {
            // line 4
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 6
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 7
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 9
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 12
        echo "
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <header class=\"cart-page__heading\">
        <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      </header>

      <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-page__form\">
        <div class=\"table-responsive cart-page__table-wrap\">
          <table class=\"table cart-page__table\">
            <thead>
              <tr>
                <td class=\"text-left\" colspan=\"2\">Ürün</td>
                <td class=\"text-left\">";
        // line 33
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 34
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "                <tr>
                  <td class=\"text-center cart-page__image-cell\" data-label=\"Ürün\">
                    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "\" class=\"cart-page__product-image\" /></a>";
            }
            // line 42
            echo "                  </td>
                  <td class=\"text-left cart-page__product-cell\" data-label=\"";
            // line 43
            echo ($context["column_name"] ?? null);
            echo "\">
                    <a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\" class=\"cart-page__product-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 44)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 45
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 46
                echo "                      ";
                if (((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46)) == "beden") || (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46)) == "size"))) {
                    echo "<small class=\"cart-page__product-size\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 46);
                    echo "</small>";
                }
                // line 47
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48)) {
                echo "<small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48);
                echo "</small>";
            }
            // line 49
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49)) {
                echo "<small>";
                echo ($context["text_recurring_item"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49);
                echo "</small>";
            }
            // line 50
            echo "                  </td>
                  <td class=\"text-left cart-page__quantity-cell\" data-label=\"";
            // line 51
            echo ($context["column_quantity"] ?? null);
            echo "\">
                    <div class=\"cart-page__quantity-control\" data-cart-key=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 52);
            echo "\" data-qty=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52);
            echo "\">
                      <button type=\"button\" class=\"cart-page__qty-btn\" data-action=\"decrease\" aria-label=\"Azalt\">−</button>
                      <span class=\"cart-page__qty-value\">";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54);
            echo "</span>
                      <button type=\"button\" class=\"cart-page__qty-btn\" data-action=\"increase\" aria-label=\"Artır\">+</button>
                    </div>
                    <button type=\"button\" class=\"cart-page__remove\" onclick=\"cart.remove('";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 57);
            echo "');\">";
            echo ($context["button_remove"] ?? null);
            echo "</button>
                  </td>
                  <td class=\"text-right cart-page__total-cell\" data-label=\"";
            // line 59
            echo ($context["column_total"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 59);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 63
            echo "                <tr>
                  <td class=\"cart-page__image-cell\" data-label=\"Ürün\"></td>
                  <td class=\"text-left cart-page__product-cell\" data-label=\"";
            // line 65
            echo ($context["column_name"] ?? null);
            echo "\"><span class=\"cart-page__product-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 65);
            echo "</span></td>
                  <td class=\"text-left cart-page__quantity-cell\" data-label=\"";
            // line 66
            echo ($context["column_quantity"] ?? null);
            echo "\">
                    <div class=\"cart-page__quantity-control cart-page__quantity-control--static\"><span class=\"cart-page__qty-value\">1</span></div>
                    <button type=\"button\" class=\"cart-page__remove\" onclick=\"voucher.remove('";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 68);
            echo "');\">";
            echo ($context["button_remove"] ?? null);
            echo "</button>
                  </td>
                  <td class=\"text-right cart-page__total-cell\" data-label=\"";
            // line 70
            echo ($context["column_total"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 70);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
          </table>
        </div>
      </form>

      <div class=\"cart-page__bottom\">
        <aside class=\"cart-page__summary\" aria-label=\"Sipariş özeti\">
          <h2>Sipariş Özeti</h2>
          <table class=\"table\">
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 83
            echo "              <tr><td>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 83);
            echo "</td><td class=\"text-right\">";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 83);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "          </table>
        </aside>
      </div>

      <div class=\"buttons clearfix cart-page__actions\">
        <div class=\"pull-left\"><a href=\"";
        // line 90
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 91
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>

      ";
        // line 94
        if (($context["recently_viewed_products"] ?? null)) {
            // line 95
            echo "        <section class=\"cart-page__recent\" aria-labelledby=\"recently-viewed-title\">
          <header class=\"cart-page__recent-heading\">
            <h2 id=\"recently-viewed-title\">Son Ziyaret Edilenler</h2>
          </header>
          <div class=\"uannes-row-grid cart-page__recent-grid\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 101
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 101);
                echo "\" class=\"uannes-row-card cart-page__recent-card\">
                <div class=\"uannes-row-media\">
                  <img src=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 103);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                echo "\" class=\"uannes-row-img main-img\" />
                  ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 104)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 104);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                    echo "\" class=\"uannes-row-img hover-img\" />";
                }
                // line 105
                echo "                </div>
                <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "</span></div>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "          </div>
        </section>
      ";
        }
        // line 112
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 114
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</main>
<script>
document.addEventListener('click', function(event) {
  var button = event.target.closest('.cart-page__qty-btn');
  if (!button) return;

  var control = button.closest('.cart-page__quantity-control');
  if (!control || typeof cart === 'undefined') return;

  var quantity = parseInt(control.getAttribute('data-qty'), 10) || 1;
  quantity += button.getAttribute('data-action') === 'increase' ? 1 : -1;

  if (quantity < 1) {
    cart.remove(control.getAttribute('data-cart-key'));
    return;
  }

  cart.update(control.getAttribute('data-cart-key'), quantity);
});
</script>
";
        // line 136
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
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
        return array (  406 => 136,  381 => 114,  375 => 112,  370 => 109,  361 => 106,  358 => 105,  350 => 104,  344 => 103,  338 => 101,  334 => 100,  327 => 95,  325 => 94,  317 => 91,  311 => 90,  304 => 85,  293 => 83,  289 => 82,  278 => 73,  267 => 70,  260 => 68,  255 => 66,  249 => 65,  245 => 63,  240 => 62,  229 => 59,  222 => 57,  216 => 54,  209 => 52,  205 => 51,  202 => 50,  193 => 49,  186 => 48,  180 => 47,  171 => 46,  166 => 45,  158 => 44,  154 => 43,  151 => 42,  139 => 41,  135 => 39,  131 => 38,  124 => 34,  120 => 33,  111 => 27,  105 => 24,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  75 => 14,  71 => 13,  68 => 12,  62 => 10,  59 => 9,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\cart.twig");
    }
}
