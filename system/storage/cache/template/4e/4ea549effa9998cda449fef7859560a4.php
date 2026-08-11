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

/* default/template/common/cart.twig */
class __TwigTemplate_a2d49f0d0fef64c845c468f2d1ae1b64 extends Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" id=\"cart-toggle\" class=\"header-nav-link cart-text-btn\" aria-label=\"Sepet\">
    <span>Sepet</span>
    <span id=\"cart-total\" class=\"cart-count-inline\">
      ";
        // line 5
        $context["total_qty"] = 0;
        // line 6
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "        ";
            $context["total_qty"] = (($context["total_qty"] ?? null) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 7));
            // line 8
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "      ";
        echo ($context["total_qty"] ?? null);
        echo "
    </span>
  </button>

  <div id=\"cartSidebar\" class=\"cart-sidebar\">
    <div class=\"cart-sidebar-header\">
      <h2 class=\"cart-sidebar-title\">SEPETİM</h2>
      <button type=\"button\" class=\"close-cart\" aria-label=\"Kapat\">
        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
      </button>
    </div>

    <div class=\"cart-sidebar-content\">
      ";
        // line 22
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 23
            echo "      <div class=\"cart-items cart-sidebar-scroll\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                echo "        <article class=\"cart-sidebar-product\">
          ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                    echo "\" class=\"cart-sidebar-product-thumb\">
            <img src=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                    echo "\" />
          </a>
          ";
                }
                // line 31
                echo "          <div class=\"cart-sidebar-product-body\">
            <a href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                echo "\" class=\"cart-sidebar-product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                echo "</a>
            ";
                // line 33
                $context["sidebar_size"] = "";
                // line 34
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34), [])) : ([])));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 35
                    echo "              ";
                    $context["option_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35));
                    // line 36
                    echo "              ";
                    if ((twig_in_filter("beden", ($context["option_name"] ?? null)) || twig_in_filter("size", ($context["option_name"] ?? null)))) {
                        $context["sidebar_size"] = twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36);
                    }
                    // line 37
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            <span class=\"cart-sidebar-product-option cart-sidebar-product-option--size\">Beden: ";
                echo ((($context["sidebar_size"] ?? null)) ? (($context["sidebar_size"] ?? null)) : ("Standart"));
                echo "</span>
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 39), [])) : ([])));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 40
                    echo "              ";
                    $context["option_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40));
                    // line 41
                    echo "              ";
                    if ((!twig_in_filter("beden", ($context["option_name"] ?? null)) && !twig_in_filter("size", ($context["option_name"] ?? null)))) {
                        // line 42
                        echo "                <span class=\"cart-sidebar-product-option\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 42);
                        echo "</span>
              ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "              <span class=\"cart-sidebar-product-option\">";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 46);
                    echo "</span>
            ";
                }
                // line 48
                echo "            <div class=\"cart-sidebar-product-meta\">
              <div class=\"cart-sidebar-qty-control\" data-cart-key=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 49);
                echo "\" data-qty=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49);
                echo "\">
                <button type=\"button\" class=\"cart-sidebar-qty-btn\" data-action=\"decrease\" aria-label=\"Azalt\">
                  <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
                <span class=\"cart-sidebar-qty-value\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53);
                echo "</span>
                <button type=\"button\" class=\"cart-sidebar-qty-btn\" data-action=\"increase\" aria-label=\"Artır\">
                  <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
              </div>
            </div>
          </div>
          <span class=\"cart-sidebar-line-price\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 60);
                echo "</span>
          <button type=\"button\" onclick=\"cart.remove('";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 61);
                echo "');\" class=\"cart-sidebar-remove\" aria-label=\"Kaldır\">
            Kaldır
          </button>
        </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 67
                echo "        <article class=\"cart-sidebar-product cart-sidebar-product--voucher\">
          <div class=\"cart-sidebar-product-body\">
            <span class=\"cart-sidebar-product-name\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 69);
                echo "</span>
            <div class=\"cart-sidebar-product-meta\">
              <span class=\"cart-sidebar-qty\">1 adet</span>
            </div>
          </div>
          <span class=\"cart-sidebar-line-price\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 74);
                echo "</span>
          <button type=\"button\" onclick=\"voucher.remove('";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 75);
                echo "');\" class=\"cart-sidebar-remove\" aria-label=\"Kaldır\">
            Kaldır
          </button>
        </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "      </div>

      ";
        } else {
            // line 83
            echo "      <div class=\"cart-sidebar-empty\">
        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-bottom: 15px;\"><path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"></path><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><path d=\"M16 10a4 4 0 0 1-8 0\"></path></svg>
        <p style=\"font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 300;\">";
            // line 85
            echo ($context["text_empty"] ?? null);
            echo "</p>
      </div>
      ";
        }
        // line 88
        echo "    </div>
    ";
        // line 89
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 90
            echo "    <div class=\"cart-totals cart-sidebar-footer\">
      <div class=\"cart-sidebar-summary\">
        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 93
                echo "        <div class=\"cart-sidebar-summary-row";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 93)) {
                    echo " cart-sidebar-summary-row--emphasis";
                }
                echo "\">
          <span class=\"cart-sidebar-summary-label\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 94);
                echo "</span>
          <span class=\"cart-sidebar-summary-value\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 95);
                echo "</span>
        </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "      </div>
      <div class=\"cart-sidebar-actions\">
        <a href=\"";
            // line 100
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn-cart-action btn-cart-outline\" style=\"background-color: #ffffff !important;\">
          Sepeti Görüntüle
        </a>
        <a href=\"";
            // line 103
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn-cart-action btn-cart-solid\">
          ";
            // line 104
            echo ($context["text_checkout"] ?? null);
            echo "
        </a>
      </div>
    </div>
    ";
        }
        // line 109
        echo "  </div>
</div>

<div id=\"cartOverlay\" class=\"cart-overlay\"></div>

<script>
(function () {
  function syncUannesCartMobileLayout() {
    var viewportWidth = window.visualViewport ? window.visualViewport.width : window.innerWidth;
    var screenWidth = window.screen && window.screen.width ? window.screen.width : viewportWidth;
    var hasTouchInput = (navigator.maxTouchPoints || 0) > 0 || window.matchMedia('(pointer: coarse)').matches;
    var isMobileDeviceProfile = /Android|iPhone|iPad|iPod|Mobile|Tablet|Silk|Kindle|PlayBook/i.test(navigator.userAgent);
    var isCompactDevice = viewportWidth <= 900 || (hasTouchInput && isMobileDeviceProfile && screenWidth <= 1366);
    var sidebar = document.getElementById('cartSidebar');

    document.documentElement.classList.toggle('uannes-cart-mobile', isCompactDevice);

    if (!sidebar) {
      return;
    }

    var header = sidebar.querySelector('.cart-sidebar-header');
    var footer = sidebar.querySelector('.cart-sidebar-footer');
    sidebar.style.setProperty('--uannes-cart-header-height', (header ? header.offsetHeight : 86) + 'px');
    sidebar.style.setProperty('--uannes-cart-footer-height', (footer ? footer.offsetHeight : 220) + 'px');
  }

  window.uannesSyncCartMobileLayout = syncUannesCartMobileLayout;
  syncUannesCartMobileLayout();
  window.addEventListener('resize', syncUannesCartMobileLayout);
  window.addEventListener('orientationchange', syncUannesCartMobileLayout);

  if (window.visualViewport) {
    window.visualViewport.addEventListener('resize', syncUannesCartMobileLayout);
  }
}());

document.addEventListener('DOMContentLoaded', function() {
  const cartToggle = document.getElementById('cart-toggle');
  const cartSidebar = document.getElementById('cartSidebar');
  const cartOverlay = document.getElementById('cartOverlay');

  function updateCartBadgeFromHtml(tempRoot) {
    const newBadge = tempRoot.querySelector('#cart #cart-total') || tempRoot.querySelector('#cart-total');
    const liveBadge = document.querySelector('#cart #cart-total');
    if (newBadge && liveBadge) {
      liveBadge.textContent = newBadge.textContent.trim();
    }
  }

  function updateCartSidebar() {
    fetch('index.php?route=common/cart/info')
      .then(res => res.text())
      .then(html => {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = html;

        const content = tempDiv.querySelector('.cart-sidebar-content');
        if (content && cartSidebar) {
          const liveContent = cartSidebar.querySelector('.cart-sidebar-content');
          if (liveContent) {
            liveContent.innerHTML = content.innerHTML;
          }

          const freshFooter = tempDiv.querySelector('.cart-sidebar-footer');
          const liveFooter = cartSidebar.querySelector('.cart-sidebar-footer');
          if (freshFooter && liveFooter) {
            liveFooter.outerHTML = freshFooter.outerHTML;
          } else if (freshFooter) {
            cartSidebar.insertAdjacentHTML('beforeend', freshFooter.outerHTML);
          } else if (liveFooter) {
            liveFooter.remove();
          }
        }

        updateCartBadgeFromHtml(tempDiv);
        if (window.uannesSyncCartMobileLayout) {
          window.uannesSyncCartMobileLayout();
        }
      });
  }

  if (cartToggle && cartSidebar && cartOverlay) {
  cartToggle.addEventListener('click', () => {
    updateCartSidebar();
    cartSidebar.classList.add('open');
    cartOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
  }

  function shouldReleaseBodyScroll() {
    const searchOverlay = document.getElementById('header-search-overlay');
    const searchOpen = searchOverlay && searchOverlay.classList.contains('is-open');
    const megaMenu = document.getElementById('mega-menu');
    const menuOpen = megaMenu && megaMenu.classList.contains('is-open');
    return !searchOpen && !menuOpen;
  }

  document.addEventListener('click', function(e) {
    if (e.target.closest('.close-cart') || e.target === cartOverlay) {
      cartSidebar.classList.remove('open');
      cartOverlay.classList.remove('active');
      if (shouldReleaseBodyScroll()) {
        document.body.style.overflow = '';
      }
    }
  });

  if(typeof cart !== 'undefined') {
    const originalAdd = cart.add;
    cart.add = function(product_id, quantity) {
      quantity = quantity || 1;
      originalAdd(product_id, quantity);
      setTimeout(updateCartSidebar, 500);
    };

    const originalRemove = cart.remove;
    cart.remove = function(key) {
      originalRemove(key);
      setTimeout(updateCartSidebar, 500);
    };

    const originalUpdate = cart.update;
    cart.update = function(key, quantity) {
      originalUpdate(key, quantity);
      setTimeout(updateCartSidebar, 500);
    };
  }

  document.addEventListener('click', function(e) {
    const btn = e.target.closest('.cart-sidebar-qty-btn');
    if (!btn) return;

    const control = btn.closest('.cart-sidebar-qty-control');
    if (!control) return;

    e.preventDefault();
    const key = control.getAttribute('data-cart-key');
    let qty = parseInt(control.getAttribute('data-qty'), 10) || 1;
    const action = btn.getAttribute('data-action');

    if (action === 'increase') {
      qty += 1;
    } else if (action === 'decrease') {
      qty -= 1;
    }

    if (qty < 1) {
      if (typeof cart !== 'undefined' && cart.remove) {
        cart.remove(key);
      }
      return;
    }

    control.setAttribute('data-qty', qty);
    const valueEl = control.querySelector('.cart-sidebar-qty-value');
    if (valueEl) valueEl.textContent = qty;

    if (typeof cart !== 'undefined' && cart.update) {
      cart.update(key, qty);
    }
  });

  \$(document).on('uannes:cartUpdated', updateCartSidebar);
});


</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
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
        return array (  335 => 109,  327 => 104,  323 => 103,  317 => 100,  313 => 98,  296 => 95,  292 => 94,  285 => 93,  268 => 92,  264 => 90,  262 => 89,  259 => 88,  253 => 85,  249 => 83,  244 => 80,  233 => 75,  229 => 74,  221 => 69,  217 => 67,  212 => 66,  201 => 61,  197 => 60,  187 => 53,  178 => 49,  175 => 48,  167 => 46,  164 => 45,  158 => 44,  150 => 42,  147 => 41,  144 => 40,  140 => 39,  135 => 38,  129 => 37,  124 => 36,  121 => 35,  116 => 34,  114 => 33,  108 => 32,  105 => 31,  95 => 28,  90 => 27,  88 => 26,  85 => 25,  81 => 24,  78 => 23,  76 => 22,  59 => 9,  53 => 8,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\cart.twig");
    }
}
