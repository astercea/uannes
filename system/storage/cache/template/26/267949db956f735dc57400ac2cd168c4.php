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

/* default/template/product/giyim.twig */
class __TwigTemplate_45fbdf82972d66b4be839352f33ad0ed extends Template
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
<div id=\"product-giyim\" class=\"container uannes-giyim-page\">
  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">
      <div class=\"giyim-filter-bar\">
        <div class=\"giyim-breadcrumb\"><span>Tüm Ürünler</span> &middot; <span>Giyim</span></div>
        <div class=\"giyim-filter\" data-giyim-filter>
          <button type=\"button\" class=\"giyim-filter-link\" aria-expanded=\"false\" aria-controls=\"giyim-filter-menu\">
            Filtrele <span aria-hidden=\"true\">";
        // line 9
        echo ((($context["active_filter_count"] ?? null)) ? ((("(" . ($context["active_filter_count"] ?? null)) . ")")) : ("+"));
        echo "</span>
          </button>
          <div class=\"giyim-filter-backdrop\" data-giyim-filter-close hidden></div>
          <aside id=\"giyim-filter-menu\" class=\"giyim-filter-menu\" aria-hidden=\"true\" aria-label=\"Ürün filtreleri\">
            <form method=\"get\" action=\"";
        // line 13
        echo ($context["filter_action"] ?? null);
        echo "\">
              <div class=\"giyim-filter-menu__header\">
                <p class=\"giyim-filter-menu__title\">Filtrele</p>
                <button type=\"button\" class=\"giyim-filter-menu__close\" data-giyim-filter-close aria-label=\"Filtre panelini kapat\">×</button>
              </div>

              ";
        // line 19
        if (($context["filter_colors"] ?? null)) {
            // line 20
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "color", [], "any", false, false, false, 20)) {
                echo " open";
            }
            echo ">
                <summary>Renk <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_colors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 24
                echo "                  <label><input type=\"radio\" name=\"renk\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 24);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "color", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 24))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 24);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </div>
              </details>
              ";
        }
        // line 29
        echo "
              ";
        // line 30
        if (($context["filter_sizes"] ?? null)) {
            // line 31
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "size", [], "any", false, false, false, 31)) {
                echo " open";
            }
            echo ">
                <summary>Beden <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_sizes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                // line 35
                echo "                  <label><input type=\"radio\" name=\"beden\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["size"], "id", [], "any", false, false, false, 35);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "size", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["size"], "id", [], "any", false, false, false, 35))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["size"], "name", [], "any", false, false, false, 35);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </div>
              </details>
              ";
        }
        // line 40
        echo "
              ";
        // line 41
        if (($context["filter_categories"] ?? null)) {
            // line 42
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "category", [], "any", false, false, false, 42)) {
                echo " open";
            }
            echo ">
                <summary>Alt kategori <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 46
                echo "                  <label><input type=\"radio\" name=\"kategori\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 46);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "category", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 46))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </div>
              </details>
              ";
        }
        // line 51
        echo "
              <details class=\"giyim-filter-menu__section\"";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 52) != "all")) {
            echo " open";
        }
        echo ">
                <summary>Stok durumu <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  <label><input type=\"radio\" name=\"stok\" value=\"all\"";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 55) == "all")) {
            echo " checked";
        }
        echo "> <span>Tüm ürünler</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"in-stock\"";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 56) == "in-stock")) {
            echo " checked";
        }
        echo "> <span>Stokta olanlar</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"low-stock\"";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 57) == "low-stock")) {
            echo " checked";
        }
        echo "> <span>Son ürünler</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"out-of-stock\"";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 58) == "out-of-stock")) {
            echo " checked";
        }
        echo "> <span>Stokta olmayanlar</span></label>
                </div>
              </details>

              <div class=\"giyim-filter-menu__actions\">
                <a href=\"";
        // line 63
        echo ($context["filter_action"] ?? null);
        echo "\">Tümünü temizle</a>
                <button type=\"submit\">Uygula</button>
              </div>
            </form>
          </aside>
        </div>
      </div>

      ";
        // line 71
        if (($context["products"] ?? null)) {
            // line 72
            echo "      <div class=\"uannes-row-grid\">
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\" class=\"uannes-row-card\">
          <div class=\"uannes-row-media\">
            ";
                // line 76
                $this->loadTemplate("common/product_badges.twig", "default/template/product/giyim.twig", 76)->display(twig_to_array(["badges" => ((twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", false, false, false, 76), [])) : ([]))]));
                // line 77
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 77));
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
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 78
                    echo "            <img src=\"";
                    echo $context["image"];
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" class=\"uannes-row-img uannes-row-card__image";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 78)) {
                        echo " main-img is-active";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78) == 2)) {
                        echo " hover-img";
                    }
                    echo "\" data-card-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78);
                    echo "\" />
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "            ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 80)) > 1)) {
                    // line 81
                    echo "            <div class=\"uannes-row-card__swatches\" aria-label=\"Görünüm seçenekleri\">
              <button type=\"button\" class=\"uannes-row-card__swatch is-active\" data-image-index=\"0\" aria-label=\"Birinci görünüm\"></button>
              <button type=\"button\" class=\"uannes-row-card__swatch\" data-image-index=\"1\" aria-label=\"İkinci görünüm\"></button>
            </div>
            <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--prev\" data-direction=\"prev\" aria-label=\"Önceki görsel\">‹</button>
            <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--next\" data-direction=\"next\" aria-label=\"Sonraki görsel\">›</button>
            ";
                }
                // line 88
                echo "          </div>
          <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
                echo "</span></div>
        </a>
        ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91) == 6)) {
                    // line 92
                    echo "        <article class=\"uannes-row-ad-card\" aria-label=\"Yeni sezon duyurusu\">
          <img src=\"image/catalog/uannes-banner-new-season.webp\" alt=\"Uannes yeni sezon seçkisi\" class=\"uannes-row-ad-card__image\" />
          <div class=\"uannes-row-ad-card__content\">
            <span class=\"uannes-row-ad-card__eyebrow\">UANNES</span>
            <h2>YENİ SEZON</h2>
            <p>Zamansız silüetler, özenle seçilmiş dokular.</p>
          </div>
        </article>
        ";
                }
                // line 101
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "      </div>
      ";
        } else {
            // line 104
            echo "      <p class=\"giyim-empty-state\">Seçtiğiniz ölçütlere uygun ürün bulunamadı.</p>
      ";
        }
        // line 106
        echo "    </div>
  </div>
</div>
";
        // line 109
        echo ($context["footer"] ?? null);
        echo "
<script>
document.addEventListener('click', function (event) {
  var control = event.target.closest('.uannes-row-card__swatch, .uannes-row-card__arrow');
  if (!control) return;
  event.preventDefault();
  event.stopPropagation();
  var media = control.closest('.uannes-row-media');
  var images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
  var current = parseInt(media.getAttribute('data-current-image'), 10);
  if (isNaN(current)) current = media.closest('.uannes-row-card').matches(':hover') && images.length > 1 ? 1 : 0;
  current = control.classList.contains('uannes-row-card__arrow') ? (control.getAttribute('data-direction') === 'next' ? (current + 1) % images.length : (current - 1 + images.length) % images.length) : parseInt(control.getAttribute('data-image-index'), 10);
  media.classList.add('is-manual-image');
  media.setAttribute('data-current-image', String(current));
  images.forEach(function (image) { image.classList.toggle('is-active', parseInt(image.getAttribute('data-card-image'), 10) === current); });
  media.querySelectorAll('.uannes-row-card__swatch').forEach(function (swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === String(current)); });
});

(function () {
  var filter = document.querySelector('[data-giyim-filter]');
  if (!filter) return;
  var trigger = filter.querySelector('.giyim-filter-link');
  var panel = filter.querySelector('.giyim-filter-menu');
  var backdrop = filter.querySelector('.giyim-filter-backdrop');
  var closeControls = filter.querySelectorAll('[data-giyim-filter-close]');
  var lastFocused;
  function closePanel() {
    filter.classList.remove('is-open');
    trigger.setAttribute('aria-expanded', 'false');
    panel.setAttribute('aria-hidden', 'true');
    backdrop.hidden = true;
    if (lastFocused) lastFocused.focus();
  }
  function openPanel() {
    lastFocused = document.activeElement;
    filter.classList.add('is-open');
    trigger.setAttribute('aria-expanded', 'true');
    panel.setAttribute('aria-hidden', 'false');
    backdrop.hidden = false;
    panel.querySelector('.giyim-filter-menu__close').focus();
  }
  trigger.addEventListener('click', function () { filter.classList.contains('is-open') ? closePanel() : openPanel(); });
  closeControls.forEach(function (control) { control.addEventListener('click', closePanel); });
  document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && filter.classList.contains('is-open')) closePanel(); });
}());
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/product/giyim.twig";
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
        return array (  362 => 109,  357 => 106,  353 => 104,  349 => 102,  335 => 101,  324 => 92,  322 => 91,  317 => 89,  314 => 88,  305 => 81,  302 => 80,  273 => 78,  255 => 77,  253 => 76,  247 => 74,  230 => 73,  227 => 72,  225 => 71,  214 => 63,  204 => 58,  198 => 57,  192 => 56,  186 => 55,  178 => 52,  175 => 51,  170 => 48,  155 => 46,  151 => 45,  142 => 42,  140 => 41,  137 => 40,  132 => 37,  117 => 35,  113 => 34,  104 => 31,  102 => 30,  99 => 29,  94 => 26,  79 => 24,  75 => 23,  66 => 20,  64 => 19,  55 => 13,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/giyim.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\giyim.twig");
    }
}
