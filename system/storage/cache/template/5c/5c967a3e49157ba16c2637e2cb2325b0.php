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
<style>
/* Cart Page Minimalist Aesthetics */
#checkout-cart.cart-page {
  background: transparent;
}

#checkout-cart .cart-page__table {
  background: transparent;
}

#checkout-cart .cart-page__price-wrap {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: center;
  gap: 4px;
}

#checkout-cart .cart-page__price-amount {
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 500;
  color: #1a1a50;
  line-height: 1.3;
  text-align: right;
}

#checkout-cart .cart-page__remove {
  font-family: 'DM Sans', sans-serif;
  font-size: 11.5px;
  color: #888;
  text-decoration: underline;
  background: transparent;
  border: none;
  padding: 0;
  cursor: pointer;
  line-height: 1.2;
  text-align: right;
}

#checkout-cart .cart-page__remove:hover {
  color: #c53030;
}

/* Remove stacked borders above subtotal across all viewports */
#checkout-cart .cart-page__summary .table > tbody > tr > td {
  border-top: 0 !important;
}

#checkout-cart .cart-page__summary .table > tbody > tr:first-child > td {
  border-top: 0 !important;
}

#checkout-cart .cart-page__summary .table > tbody > tr:last-child > td {
  border-top: 1.5px solid #1a1a50 !important;
}

@media (max-width: 767px) {
  #checkout-cart.cart-page {
    padding-top: 24px;
    padding-bottom: 60px;
    background: transparent;
  }

  /* Alışveriş sepetim başlığı mobilde ortada */
  #checkout-cart .cart-page__heading {
    margin-bottom: 16px;
    text-align: center !important;
  }

  #checkout-cart .cart-page__heading h1 {
    font-size: 22px;
    font-family: 'Cormorant Garamond', Georgia, serif;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #1a1a50;
    margin: 0;
    text-align: center !important;
  }

  #checkout-cart .cart-page__table-wrap {
    overflow: visible !important;
    border: 0 !important;
    margin: 0 !important;
    background: transparent !important;
  }

  #checkout-cart .cart-page__table {
    display: block !important;
    width: 100% !important;
    border: 0 !important;
    background: transparent !important;
    margin-bottom: 0 !important;
  }

  #checkout-cart .cart-page__table > thead {
    display: none !important;
  }

  #checkout-cart .cart-page__table > tbody {
    display: flex !important;
    flex-direction: column !important;
    gap: 16px !important;
    width: 100% !important;
    background: transparent !important;
  }

  #checkout-cart .cart-page__table > tbody > tr {
    display: grid !important;
    grid-template-columns: 88px minmax(0, 1fr) auto !important;
    grid-template-rows: auto auto !important;
    grid-template-areas:
      \"image product product\"
      \"image quantity total\" !important;
    column-gap: 14px !important;
    row-gap: 10px !important;
    padding: 0 0 16px 0 !important;
    background: transparent !important;
    border: 0 !important;
    border-bottom: 1px solid rgba(26, 26, 80, 0.14) !important;
    position: relative !important;
    box-sizing: border-box !important;
    width: 100% !important;
    margin: 0 !important;
  }

  #checkout-cart .cart-page__table > tbody > tr:last-child {
    border-bottom: 0 !important;
  }

  #checkout-cart .cart-page__table > tbody > tr > td {
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
    min-height: 0 !important;
    display: block !important;
    width: auto !important;
  }

  #checkout-cart .cart-page__table > tbody > tr > td::before {
    display: none !important;
  }

  /* 1. Image Cell */
  #checkout-cart .cart-page__image-cell {
    grid-area: image !important;
    width: 88px !important;
    background: transparent !important;
  }

  #checkout-cart .cart-page__product-image {
    width: 88px !important;
    height: 114px !important;
    object-fit: cover !important;
    border-radius: 0 !important;
    display: block !important;
    background: transparent !important;
  }

  /* 2. Product Name & Size Cell */
  #checkout-cart .cart-page__product-cell {
    grid-area: product !important;
    align-self: start !important;
    padding-right: 0 !important;
    background: transparent !important;
  }

  #checkout-cart .cart-page__product-name {
    font-size: 13.5px !important;
    font-weight: 500 !important;
    color: #1a1a50 !important;
    line-height: 1.4 !important;
    margin-bottom: 3px !important;
    display: -webkit-box !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
    text-decoration: none !important;
  }

  #checkout-cart .cart-page__product-size {
    font-size: 11.5px !important;
    color: #777 !important;
    margin-top: 2px !important;
    display: block !important;
  }

  /* 3. Quantity Cell (Sol Alt - Dikeyde Ortalanmış) */
  #checkout-cart .cart-page__quantity-cell {
    grid-area: quantity !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-start !important;
    align-self: center !important;
    padding: 0 !important;
    background: transparent !important;
    margin: auto 0 !important;
  }

  #checkout-cart .cart-page__quantity-control {
    display: inline-flex !important;
    align-items: center !important;
    gap: 0 !important;
    border: 1px solid rgba(26, 26, 80, 0.25) !important;
    background: transparent !important;
    height: 30px !important;
    border-radius: 0 !important;
    margin: 0 !important;
  }

  #checkout-cart .cart-page__qty-btn {
    width: 28px !important;
    height: 28px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border: none !important;
    background: transparent !important;
    color: #1a1a50 !important;
    font-size: 15px !important;
    cursor: pointer !important;
    padding: 0 !important;
    line-height: 1 !important;
  }

  #checkout-cart .cart-page__qty-btn[data-action=\"increase\"] {
    background: transparent !important;
    color: #1a1a50 !important;
  }

  #checkout-cart .cart-page__qty-value {
    min-width: 26px !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #1a1a50 !important;
    text-align: center !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
  }

  /* 4. Total Price & Remove Cell (Sağ Alt - Dikeyde Ortalanmış, Alt Alta ve Sağa Yaslı) */
  #checkout-cart .cart-page__total-cell {
    grid-area: total !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-end !important;
    align-self: center !important;
    text-align: right !important;
    padding: 0 !important;
    background: transparent !important;
    margin: auto 0 !important;
  }

  #checkout-cart .cart-page__price-wrap {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-end !important;
    justify-content: center !important;
    text-align: right !important;
    gap: 3px !important;
  }

  #checkout-cart .cart-page__price-amount {
    font-size: 14.5px !important;
    font-weight: 600 !important;
    color: #1a1a50 !important;
    line-height: 1.2 !important;
    text-align: right !important;
    display: block !important;
  }

  #checkout-cart .cart-page__remove {
    font-size: 11.5px !important;
    color: #888 !important;
    text-decoration: underline !important;
    background: transparent !important;
    border: none !important;
    padding: 0 !important;
    margin: 0 !important;
    cursor: pointer !important;
    line-height: 1.2 !important;
    text-align: right !important;
    display: inline-block !important;
  }

  #checkout-cart .cart-page__remove:hover,
  #checkout-cart .cart-page__remove:active {
    color: #c53030 !important;
  }

  /* Order Summary (Ara toplamın üzerindeki çizgiler kaldırıldı) */
  #checkout-cart .cart-page__bottom {
    display: block !important;
    margin-top: 24px !important;
    border: 0 !important;
    border-top: 0 !important;
  }

  #checkout-cart .cart-page__summary {
    padding: 8px 0 !important;
    background: transparent !important;
    border: 0 !important;
    border-top: 0 !important;
    border-bottom: 0 !important;
    border-radius: 0 !important;
  }

  #checkout-cart .cart-page__summary h2 {
    font-size: 14px !important;
    font-weight: 600 !important;
    color: #1a1a50 !important;
    margin-bottom: 12px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
  }

  #checkout-cart .cart-page__summary .table {
    margin-bottom: 0 !important;
    background: transparent !important;
    border: 0 !important;
    border-top: 0 !important;
  }

  #checkout-cart .cart-page__summary .table > tbody > tr > td {
    padding: 8px 0 !important;
    font-size: 13px !important;
    color: #444 !important;
    border: 0 !important;
    border-top: 0 !important;
    background: transparent !important;
  }

  #checkout-cart .cart-page__summary .table > tbody > tr:first-child > td {
    border: 0 !important;
    border-top: 0 !important;
  }

  #checkout-cart .cart-page__summary .table > tbody > tr:last-child > td {
    padding-top: 12px !important;
    font-size: 15px !important;
    font-weight: 700 !important;
    color: #1a1a50 !important;
    border-top: 1.5px solid #1a1a50 !important;
  }

  /* Action Buttons (No white background) */
  #checkout-cart .cart-page__actions {
    display: flex !important;
    flex-direction: column-reverse !important;
    gap: 10px !important;
    margin-top: 20px !important;
    padding-top: 0 !important;
    border-top: 0 !important;
  }

  #checkout-cart .cart-page__actions .pull-left,
  #checkout-cart .cart-page__actions .pull-right {
    float: none !important;
    width: 100% !important;
    margin: 0 !important;
  }

  #checkout-cart .cart-page__actions .btn-primary {
    width: 100% !important;
    min-height: 44px !important;
    padding: 12px 18px !important;
    background-color: #1a1a50 !important;
    border: 1.5px solid #1a1a50 !important;
    color: #ffffff !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    letter-spacing: 0.1em !important;
    text-transform: uppercase !important;
    border-radius: 0 !important;
    text-align: center !important;
    display: block !important;
    box-sizing: border-box !important;
  }

  #checkout-cart .cart-page__actions .btn-default {
    width: 100% !important;
    min-height: 42px !important;
    padding: 11px 18px !important;
    background: transparent !important;
    background-color: transparent !important;
    border: 1.5px solid #1a1a50 !important;
    color: #1a1a50 !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    letter-spacing: 0.1em !important;
    text-transform: uppercase !important;
    border-radius: 0 !important;
    text-align: center !important;
    display: block !important;
    box-sizing: border-box !important;
  }

  /* Recently Viewed */
  #checkout-cart .cart-page__recent {
    margin-top: 36px !important;
    padding-top: 20px !important;
    border-top: 1px solid rgba(26, 26, 80, 0.1) !important;
    width: 100% !important;
  }

  #checkout-cart .cart-page__recent-heading h2 {
    font-size: 16px !important;
    text-align: left !important;
    margin-bottom: 14px !important;
  }

  #checkout-cart .cart-page__recent-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 12px !important;
  }
}
</style>
<main id=\"checkout-cart\" class=\"container cart-page\">
  ";
        // line 421
        if (($context["attention"] ?? null)) {
            // line 422
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 424
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 425
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 427
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 428
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 430
        echo "
  <div class=\"row\">";
        // line 431
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 432
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 433
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 434
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 435
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 436
            echo "    ";
        } else {
            // line 437
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 438
            echo "    ";
        }
        // line 439
        echo "
    <div id=\"content\" class=\"";
        // line 440
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <header class=\"cart-page__heading\">
        <h1>";
        // line 442
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      </header>

      <form action=\"";
        // line 445
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-page__form\">
        <div class=\"table-responsive cart-page__table-wrap\">
          <table class=\"table cart-page__table\">
            <thead>
              <tr>
                <td class=\"text-left\" colspan=\"2\">Ürün</td>
                <td class=\"text-center cart-page__quantity-heading\">";
        // line 451
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 452
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 457
            echo "                <tr>
                  <td class=\"text-center cart-page__image-cell\" data-label=\"Ürün\">
                    ";
            // line 459
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 459)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 459);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 459);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 459);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 459);
                echo "\" class=\"cart-page__product-image\" /></a>";
            }
            // line 460
            echo "                  </td>
                  <td class=\"text-left cart-page__product-cell\" data-label=\"";
            // line 461
            echo ($context["column_name"] ?? null);
            echo "\">
                    <a href=\"";
            // line 462
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 462);
            echo "\" class=\"cart-page__product-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 462);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 462)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 463
            echo "                    ";
            $context["product_size"] = "";
            // line 464
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 464));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 465
                echo "                      ";
                $context["option_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 465));
                // line 466
                echo "                      ";
                if ((twig_in_filter("beden", ($context["option_name"] ?? null)) || twig_in_filter("size", ($context["option_name"] ?? null)))) {
                    $context["product_size"] = twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 466);
                }
                // line 467
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            echo "                    <small class=\"cart-page__product-size\">Beden: ";
            echo ((($context["product_size"] ?? null)) ? (($context["product_size"] ?? null)) : ("Standart"));
            echo "</small>
                    ";
            // line 469
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 469)) {
                echo "<small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 469);
                echo "</small>";
            }
            // line 470
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 470)) {
                echo "<small>";
                echo ($context["text_recurring_item"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 470);
                echo "</small>";
            }
            // line 471
            echo "                  </td>
                  <td class=\"text-center cart-page__quantity-cell\" data-label=\"";
            // line 472
            echo ($context["column_quantity"] ?? null);
            echo "\">
                    <div class=\"cart-page__quantity-control\" data-cart-key=\"";
            // line 473
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 473);
            echo "\" data-qty=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 473);
            echo "\">
                      <button type=\"button\" class=\"cart-page__qty-btn\" data-action=\"decrease\" aria-label=\"Azalt\">−</button>
                      <span class=\"cart-page__qty-value\">";
            // line 475
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 475);
            echo "</span>
                      <button type=\"button\" class=\"cart-page__qty-btn\" data-action=\"increase\" aria-label=\"Artır\">+</button>
                    </div>
                  </td>
                  <td class=\"text-right cart-page__total-cell\" data-label=\"";
            // line 479
            echo ($context["column_total"] ?? null);
            echo "\">
                    <div class=\"cart-page__price-wrap\">
                      <span class=\"cart-page__price-amount\">";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 481);
            echo "</span>
                      <button type=\"button\" class=\"cart-page__remove\" onclick=\"cart.remove('";
            // line 482
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 482);
            echo "');\">";
            echo ($context["button_remove"] ?? null);
            echo "</button>
                    </div>
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 488
            echo "                <tr>
                  <td class=\"cart-page__image-cell\" data-label=\"Ürün\"></td>
                  <td class=\"text-left cart-page__product-cell\" data-label=\"";
            // line 490
            echo ($context["column_name"] ?? null);
            echo "\"><span class=\"cart-page__product-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 490);
            echo "</span></td>
                  <td class=\"text-center cart-page__quantity-cell\" data-label=\"";
            // line 491
            echo ($context["column_quantity"] ?? null);
            echo "\">
                    <div class=\"cart-page__quantity-control cart-page__quantity-control--static\"><span class=\"cart-page__qty-value\">1</span></div>
                  </td>
                  <td class=\"text-right cart-page__total-cell\" data-label=\"";
            // line 494
            echo ($context["column_total"] ?? null);
            echo "\">
                    <div class=\"cart-page__price-wrap\">
                      <span class=\"cart-page__price-amount\">";
            // line 496
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 496);
            echo "</span>
                      <button type=\"button\" class=\"cart-page__remove\" onclick=\"voucher.remove('";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 497);
            echo "');\">";
            echo ($context["button_remove"] ?? null);
            echo "</button>
                    </div>
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        echo "            </tbody>
          </table>
        </div>
      </form>

      <div class=\"cart-page__bottom\">
        <aside class=\"cart-page__summary\" aria-label=\"Sipariş özeti\">
          <h2>Sipariş Özeti</h2>
          <table class=\"table\">
            ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 512
            echo "              <tr><td>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 512);
            echo "</td><td class=\"text-right\">";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 512);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "          </table>
        </aside>
      </div>

      <div class=\"buttons clearfix cart-page__actions\">
        <div class=\"pull-left\"><a href=\"";
        // line 519
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 520
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>

      ";
        // line 523
        if (($context["recently_viewed_products"] ?? null)) {
            // line 524
            echo "        <section class=\"cart-page__recent\" aria-labelledby=\"recently-viewed-title\">
          <header class=\"cart-page__recent-heading\">
            <h2 id=\"recently-viewed-title\">Son Ziyaret Edilenler</h2>
          </header>
          <div class=\"uannes-row-grid cart-page__recent-grid\">
            ";
            // line 529
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 530
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 530);
                echo "\" class=\"uannes-row-card cart-page__recent-card\">
                <div class=\"uannes-row-media\" data-current-image=\"0\">
                  <img src=\"";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 532);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 532);
                echo "\" class=\"uannes-row-img uannes-row-card__image main-img is-active\" data-card-image=\"0\" />
                  ";
                // line 533
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 533)) {
                    // line 534
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 534);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 534);
                    echo "\" class=\"uannes-row-img uannes-row-card__image hover-img\" data-card-image=\"1\" />
                    <div class=\"uannes-row-card__swatches\" aria-label=\"Renk seçenekleri\">
                      <button type=\"button\" class=\"uannes-row-card__swatch is-active\" data-image-index=\"0\" aria-label=\"Birinci renk seçeneği\"></button>
                      <button type=\"button\" class=\"uannes-row-card__swatch\" data-image-index=\"1\" aria-label=\"İkinci renk seçeneği\"></button>
                    </div>
                    <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--prev\" data-direction=\"prev\" aria-label=\"Önceki görsel\">‹</button>
                    <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--next\" data-direction=\"next\" aria-label=\"Sonraki görsel\">›</button>
                  ";
                }
                // line 542
                echo "                </div>
                <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                // line 543
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 543);
                echo "</span></div>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 546
            echo "          </div>
        </section>
      ";
        }
        // line 549
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 551
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

document.addEventListener('click', function(event) {
  var control = event.target.closest('#checkout-cart .cart-page__recent .uannes-row-card__swatch, #checkout-cart .cart-page__recent .uannes-row-card__arrow, #checkout-cart-empty .cart-page__recent .uannes-row-card__swatch, #checkout-cart-empty .cart-page__recent .uannes-row-card__arrow');
  if (!control) return;

  event.preventDefault();
  event.stopPropagation();

  var media = control.closest('.uannes-row-media');
  var images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
  if (images.length < 2) return;

  var current = parseInt(media.getAttribute('data-current-image'), 10);
  if (isNaN(current)) current = 0;
  current = control.classList.contains('uannes-row-card__arrow')
    ? (control.getAttribute('data-direction') === 'next' ? (current + 1) % images.length : (current - 1 + images.length) % images.length)
    : parseInt(control.getAttribute('data-image-index'), 10);

  media.classList.add('is-manual-image');
  media.setAttribute('data-current-image', String(current));
  images.forEach(function(image) { image.classList.toggle('is-active', parseInt(image.getAttribute('data-card-image'), 10) === current); });
  media.querySelectorAll('.uannes-row-card__swatch').forEach(function(swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === String(current)); });
});

document.addEventListener('mouseout', function(event) {
  var media = event.target.closest('#checkout-cart .cart-page__recent .uannes-row-media, #checkout-cart-empty .cart-page__recent .uannes-row-media');
  if (!media || media.contains(event.relatedTarget)) return;
  var images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
  media.classList.remove('is-manual-image');
  media.setAttribute('data-current-image', '0');
  images.forEach(function(image) { image.classList.toggle('is-active', image.getAttribute('data-card-image'), 10 === 0); });
  media.querySelectorAll('.uannes-row-card__swatch').forEach(function(swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === '0'); });
});
</script>
";
        // line 606
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
        return array (  881 => 606,  823 => 551,  817 => 549,  812 => 546,  803 => 543,  800 => 542,  786 => 534,  784 => 533,  778 => 532,  772 => 530,  768 => 529,  761 => 524,  759 => 523,  751 => 520,  745 => 519,  738 => 514,  727 => 512,  723 => 511,  712 => 502,  699 => 497,  695 => 496,  690 => 494,  684 => 491,  678 => 490,  674 => 488,  669 => 487,  656 => 482,  652 => 481,  647 => 479,  640 => 475,  633 => 473,  629 => 472,  626 => 471,  617 => 470,  611 => 469,  606 => 468,  600 => 467,  595 => 466,  592 => 465,  587 => 464,  584 => 463,  576 => 462,  572 => 461,  569 => 460,  557 => 459,  553 => 457,  549 => 456,  542 => 452,  538 => 451,  529 => 445,  523 => 442,  516 => 440,  513 => 439,  510 => 438,  507 => 437,  504 => 436,  501 => 435,  498 => 434,  495 => 433,  493 => 432,  489 => 431,  486 => 430,  480 => 428,  477 => 427,  471 => 425,  468 => 424,  462 => 422,  460 => 421,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\cart.twig");
    }
}
