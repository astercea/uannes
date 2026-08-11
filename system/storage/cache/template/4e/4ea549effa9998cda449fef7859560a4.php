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
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 35
                        echo "              <span class=\"cart-sidebar-product-option\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                        echo "</span>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "            ";
                }
                // line 38
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "              <span class=\"cart-sidebar-product-option\">";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 39);
                    echo "</span>
            ";
                }
                // line 41
                echo "            <div class=\"cart-sidebar-product-meta\">
              <div class=\"cart-sidebar-qty-control\" data-cart-key=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 42);
                echo "\" data-qty=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                echo "\">
                <button type=\"button\" class=\"cart-sidebar-qty-btn\" data-action=\"decrease\" aria-label=\"Azalt\">
                  <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
                <span class=\"cart-sidebar-qty-value\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46);
                echo "</span>
                <button type=\"button\" class=\"cart-sidebar-qty-btn\" data-action=\"increase\" aria-label=\"Artır\">
                  <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
              </div>
              <span class=\"cart-sidebar-line-price\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 51);
                echo "</span>
            </div>
          </div>
          <button type=\"button\" onclick=\"cart.remove('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 54);
                echo "');\" class=\"cart-sidebar-remove\" aria-label=\"Kaldır\">
            Kaldır
          </button>
        </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 60
                echo "        <article class=\"cart-sidebar-product cart-sidebar-product--voucher\">
          <div class=\"cart-sidebar-product-body\">
            <span class=\"cart-sidebar-product-name\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 62);
                echo "</span>
            <div class=\"cart-sidebar-product-meta\">
              <span class=\"cart-sidebar-qty\">1 adet</span>
              <span class=\"cart-sidebar-line-price\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 65);
                echo "</span>
            </div>
          </div>
          <button type=\"button\" onclick=\"voucher.remove('";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 68);
                echo "');\" class=\"cart-sidebar-remove\" aria-label=\"Kaldır\">
            Kaldır
          </button>
        </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      </div>

      ";
        } else {
            // line 76
            echo "      <div class=\"cart-sidebar-empty\">
        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-bottom: 15px;\"><path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"></path><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><path d=\"M16 10a4 4 0 0 1-8 0\"></path></svg>
        <p style=\"font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 300;\">";
            // line 78
            echo ($context["text_empty"] ?? null);
            echo "</p>
      </div>
      ";
        }
        // line 81
        echo "    </div>
    ";
        // line 82
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 83
            echo "    <div class=\"cart-totals cart-sidebar-footer\">
      <div class=\"cart-sidebar-summary\">
        ";
            // line 85
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
                // line 86
                echo "        <div class=\"cart-sidebar-summary-row";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 86)) {
                    echo " cart-sidebar-summary-row--emphasis";
                }
                echo "\">
          <span class=\"cart-sidebar-summary-label\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 87);
                echo "</span>
          <span class=\"cart-sidebar-summary-value\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 88);
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
            // line 91
            echo "      </div>
      <div class=\"cart-sidebar-actions\">
        <a href=\"";
            // line 93
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn-cart-action btn-cart-outline\" style=\"background-color: #ffffff !important;\">
          Sepeti Görüntüle
        </a>
        <a href=\"";
            // line 96
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn-cart-action btn-cart-solid\">
          ";
            // line 97
            echo ($context["text_checkout"] ?? null);
            echo "
        </a>
      </div>
    </div>
    ";
        }
        // line 102
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
        return array (  306 => 102,  298 => 97,  294 => 96,  288 => 93,  284 => 91,  267 => 88,  263 => 87,  256 => 86,  239 => 85,  235 => 83,  233 => 82,  230 => 81,  224 => 78,  220 => 76,  215 => 73,  204 => 68,  198 => 65,  192 => 62,  188 => 60,  183 => 59,  172 => 54,  166 => 51,  158 => 46,  149 => 42,  146 => 41,  138 => 39,  135 => 38,  132 => 37,  121 => 35,  116 => 34,  114 => 33,  108 => 32,  105 => 31,  95 => 28,  90 => 27,  88 => 26,  85 => 25,  81 => 24,  78 => 23,  76 => 22,  59 => 9,  53 => 8,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\cart.twig");
    }
}
