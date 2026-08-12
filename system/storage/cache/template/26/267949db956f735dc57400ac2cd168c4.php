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
<div id=\"product-giyim\" class=\"container uannes-giyim-page uannes-giyim-page--";
        // line 2
        echo ($context["catalogue_key"] ?? null);
        echo "\">
  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">
      <div class=\"giyim-filter-bar\">
        <div class=\"giyim-breadcrumb\">
          ";
        // line 7
        if (($context["is_all_products"] ?? null)) {
            // line 8
            echo "            <span>";
            echo ($context["catalogue_name"] ?? null);
            echo "</span>
          ";
        } else {
            // line 10
            echo "            <span>Tüm Ürünler</span> &middot; <span>";
            echo ($context["catalogue_name"] ?? null);
            echo "</span>
          ";
        }
        // line 12
        echo "        </div>
        <div class=\"giyim-filter\" data-giyim-filter>
          <button type=\"button\" class=\"giyim-filter-link\" aria-expanded=\"false\" aria-controls=\"giyim-filter-menu\">
            Filtrele <span aria-hidden=\"true\">";
        // line 15
        echo ((($context["active_filter_count"] ?? null)) ? ((("(" . ($context["active_filter_count"] ?? null)) . ")")) : ("+"));
        echo "</span>
          </button>
          <div class=\"giyim-filter-backdrop\" data-giyim-filter-close hidden></div>
          <aside id=\"giyim-filter-menu\" class=\"giyim-filter-menu\" aria-hidden=\"true\" aria-label=\"Ürün filtreleri\">
            <form method=\"get\" action=\"";
        // line 19
        echo ($context["filter_action"] ?? null);
        echo "\">
              <div class=\"giyim-filter-menu__header\">
                <p class=\"giyim-filter-menu__title\">Filtrele</p>
                <button type=\"button\" class=\"giyim-filter-menu__close\" data-giyim-filter-close aria-label=\"Filtre panelini kapat\">×</button>
              </div>

              ";
        // line 25
        if (($context["filter_colors"] ?? null)) {
            // line 26
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "color", [], "any", false, false, false, 26)) {
                echo " open";
            }
            echo ">
                <summary>Renk <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_colors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 30
                echo "                  <label><input type=\"radio\" name=\"renk\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 30);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "color", [], "any", false, false, false, 30) == twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 30))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 30);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </div>
              </details>
              ";
        }
        // line 35
        echo "
              ";
        // line 36
        if (($context["filter_sizes"] ?? null)) {
            // line 37
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "size", [], "any", false, false, false, 37)) {
                echo " open";
            }
            echo ">
                <summary>Beden <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_sizes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                // line 41
                echo "                  <label><input type=\"radio\" name=\"beden\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["size"], "id", [], "any", false, false, false, 41);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "size", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, $context["size"], "id", [], "any", false, false, false, 41))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["size"], "name", [], "any", false, false, false, 41);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </div>
              </details>
              ";
        }
        // line 46
        echo "
              ";
        // line 47
        if (($context["filter_categories"] ?? null)) {
            // line 48
            echo "              <details class=\"giyim-filter-menu__section\"";
            if (twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "category", [], "any", false, false, false, 48)) {
                echo " open";
            }
            echo ">
                <summary>Alt kategori <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                echo "                  <label><input type=\"radio\" name=\"kategori\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "category", [], "any", false, false, false, 52) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52))) {
                    echo " checked";
                }
                echo "> <span>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52);
                echo "</span></label>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </div>
              </details>
              ";
        }
        // line 57
        echo "
              <details class=\"giyim-filter-menu__section\"";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 58) != "all")) {
            echo " open";
        }
        echo ">
                <summary>Stok durumu <span aria-hidden=\"true\">›</span></summary>
                <div class=\"giyim-filter-menu__options\">
                  <label><input type=\"radio\" name=\"stok\" value=\"all\"";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 61) == "all")) {
            echo " checked";
        }
        echo "> <span>Tüm ürünler</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"in-stock\"";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 62) == "in-stock")) {
            echo " checked";
        }
        echo "> <span>Stokta olanlar</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"low-stock\"";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 63) == "low-stock")) {
            echo " checked";
        }
        echo "> <span>Son ürünler</span></label>
                  <label><input type=\"radio\" name=\"stok\" value=\"out-of-stock\"";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["selected_filters"] ?? null), "stock", [], "any", false, false, false, 64) == "out-of-stock")) {
            echo " checked";
        }
        echo "> <span>Stokta olmayanlar</span></label>
                </div>
              </details>

              <div class=\"giyim-filter-menu__actions\">
                <a href=\"";
        // line 69
        echo ($context["filter_action"] ?? null);
        echo "\">Tümünü temizle</a>
                <button type=\"submit\">Uygula</button>
              </div>
            </form>
          </aside>
        </div>
      </div>

      ";
        // line 77
        if (($context["products"] ?? null)) {
            // line 78
            echo "      ";
            $context["giyim_products"] = [];
            // line 79
            echo "      ";
            $context["esarp_products"] = [];
            // line 80
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", true, true, false, 81) && twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "          ";
                    $context["esarp_products"] = twig_array_merge(($context["esarp_products"] ?? null), [$context["product"]]);
                    // line 83
                    echo "        ";
                } else {
                    // line 84
                    echo "          ";
                    $context["giyim_products"] = twig_array_merge(($context["giyim_products"] ?? null), [$context["product"]]);
                    // line 85
                    echo "        ";
                }
                // line 86
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
      ";
            // line 88
            $context["product_groups"] = [["items" =>             // line 89
($context["giyim_products"] ?? null), "show_ad" => true], ["items" =>             // line 90
($context["esarp_products"] ?? null), "show_ad" => false]];
            // line 92
            echo "
      ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_groups"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 94
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "        <div class=\"uannes-row-grid\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 95)) {
                        echo " style=\"margin-top: 60px;\"";
                    }
                    echo ">
          ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 96));
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
                        // line 97
                        echo "          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 97);
                        echo "\" class=\"uannes-row-card\">
            <div class=\"uannes-row-media";
                        // line 98
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", true, true, false, 98) && twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", false, false, false, 98))) {
                            echo " uannes-row-media--square";
                        }
                        echo "\">
              ";
                        // line 99
                        $this->loadTemplate("common/product_badges.twig", "default/template/product/giyim.twig", 99)->display(twig_to_array(["badges" => ((twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", false, false, false, 99), [])) : ([]))]));
                        // line 100
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 100));
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
                            // line 101
                            echo "              <img src=\"";
                            echo $context["image"];
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
                            echo "\" class=\"uannes-row-img uannes-row-card__image";
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 101)) {
                                echo " main-img is-active";
                            } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 101) == 2)) {
                                echo " hover-img";
                            }
                            echo "\" data-card-image=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101);
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
                        // line 103
                        echo "              ";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 103)) > 1)) {
                            // line 104
                            echo "              <div class=\"uannes-row-card__swatches\" aria-label=\"Görünüm seçenekleri\">
                <button type=\"button\" class=\"uannes-row-card__swatch is-active\" data-image-index=\"0\" aria-label=\"Birinci görünüm\"></button>
                <button type=\"button\" class=\"uannes-row-card__swatch\" data-image-index=\"1\" aria-label=\"İkinci görünüm\"></button>
              </div>
              <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--prev\" data-direction=\"prev\" aria-label=\"Önceki görsel\">‹</button>
              <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--next\" data-direction=\"next\" aria-label=\"Sonraki görsel\">›</button>
              ";
                        }
                        // line 111
                        echo "            </div>
            <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                        echo "</span></div>
          </a>
          ";
                        // line 114
                        if ((twig_get_attribute($this->env, $this->source, $context["group"], "show_ad", [], "any", false, false, false, 114) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 114) == 6))) {
                            // line 115
                            echo "          <article class=\"uannes-row-ad-card\" aria-label=\"Yeni sezon duyurusu\">
            <img src=\"image/catalog/uannes-banner-new-season.webp\" alt=\"Uannes yeni sezon seçkisi\" class=\"uannes-row-ad-card__image\" />
            <div class=\"uannes-row-ad-card__content\">
              <span class=\"uannes-row-ad-card__eyebrow\">UANNES</span>
              <h2>YENİ SEZON</h2>
              <p>Zamansız silüetler, özenle seçilmiş dokular.</p>
            </div>
          </article>
          ";
                        }
                        // line 124
                        echo "          ";
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
                    // line 125
                    echo "        </div>
        ";
                }
                // line 127
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      ";
        } else {
            // line 129
            echo "      <p class=\"giyim-empty-state\">Seçtiğiniz ölçütlere uygun ürün bulunamadı.</p>
      ";
        }
        // line 131
        echo "    </div>
  </div>
</div>
";
        // line 134
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
  if (isNaN(current)) current = media.matches(':hover') && images.length > 1 ? 1 : 0;
  current = control.classList.contains('uannes-row-card__arrow') ? (control.getAttribute('data-direction') === 'next' ? (current + 1) % images.length : (current - 1 + images.length) % images.length) : parseInt(control.getAttribute('data-image-index'), 10);
  media.classList.add('is-manual-image');
  media.setAttribute('data-current-image', String(current));
  images.forEach(function (image) { image.classList.toggle('is-active', parseInt(image.getAttribute('data-card-image'), 10) === current); });
  media.querySelectorAll('.uannes-row-card__swatch').forEach(function (swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === String(current)); });
});

document.addEventListener('mouseout', function (event) {
  var media = event.target.closest('.uannes-row-media');
  if (!media || media.contains(event.relatedTarget)) return;
  var images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
  if (!images.length) return;
  media.classList.remove('is-manual-image');
  media.setAttribute('data-current-image', '0');
  images.forEach(function (image) { image.classList.toggle('is-active', image.getAttribute('data-card-image') === '0'); });
  media.querySelectorAll('.uannes-row-card__swatch').forEach(function (swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === '0'); });
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
        return array (  470 => 134,  465 => 131,  461 => 129,  458 => 128,  444 => 127,  440 => 125,  426 => 124,  415 => 115,  413 => 114,  408 => 112,  405 => 111,  396 => 104,  393 => 103,  364 => 101,  346 => 100,  344 => 99,  338 => 98,  333 => 97,  316 => 96,  309 => 95,  306 => 94,  289 => 93,  286 => 92,  284 => 90,  283 => 89,  282 => 88,  279 => 87,  273 => 86,  270 => 85,  267 => 84,  264 => 83,  261 => 82,  258 => 81,  253 => 80,  250 => 79,  247 => 78,  245 => 77,  234 => 69,  224 => 64,  218 => 63,  212 => 62,  206 => 61,  198 => 58,  195 => 57,  190 => 54,  175 => 52,  171 => 51,  162 => 48,  160 => 47,  157 => 46,  152 => 43,  137 => 41,  133 => 40,  124 => 37,  122 => 36,  119 => 35,  114 => 32,  99 => 30,  95 => 29,  86 => 26,  84 => 25,  75 => 19,  68 => 15,  63 => 12,  57 => 10,  51 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/giyim.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\giyim.twig");
    }
}
