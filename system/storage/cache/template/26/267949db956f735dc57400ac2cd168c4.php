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
        ";
        // line 77
        echo "      </div>

      ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "      ";
            $context["giyim_products"] = [];
            // line 81
            echo "      ";
            $context["esarp_products"] = [];
            // line 82
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", true, true, false, 83) && twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", false, false, false, 83))) {
                    // line 84
                    echo "          ";
                    $context["esarp_products"] = twig_array_merge(($context["esarp_products"] ?? null), [$context["product"]]);
                    // line 85
                    echo "        ";
                } else {
                    // line 86
                    echo "          ";
                    $context["giyim_products"] = twig_array_merge(($context["giyim_products"] ?? null), [$context["product"]]);
                    // line 87
                    echo "        ";
                }
                // line 88
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
      ";
            // line 90
            $context["product_groups"] = [["items" =>             // line 91
($context["giyim_products"] ?? null), "type" => "giyim"], ["items" =>             // line 92
($context["esarp_products"] ?? null), "type" => "esarp"]];
            // line 94
            echo "
      ";
            // line 95
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
                // line 96
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "        <div class=\"uannes-row-grid\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 97)) {
                        echo " style=\"margin-top: 60px;\"";
                    }
                    echo ">
          ";
                    // line 98
                    $context["should_show_ad"] = ((($context["ad_card"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "status", [], "any", false, false, false, 98)) && ((($context["catalogue_key"] ?? null) == twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, false, 98)) || ((($context["catalogue_key"] ?? null) == "tum_urunler") && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 98))));
                    // line 99
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 99));
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
                        // line 100
                        echo "          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 100);
                        echo "\" class=\"uannes-row-card\">
            <div class=\"uannes-row-media";
                        // line 101
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", true, true, false, 101) && twig_get_attribute($this->env, $this->source, $context["product"], "is_esarp", [], "any", false, false, false, 101))) {
                            echo " uannes-row-media--square";
                        }
                        echo "\">
              ";
                        // line 102
                        $this->loadTemplate("common/product_badges.twig", "default/template/product/giyim.twig", 102)->display(twig_to_array(["badges" => ((twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", false, false, false, 102), [])) : ([]))]));
                        // line 103
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 103));
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
                            // line 104
                            echo "              <img src=\"";
                            echo $context["image"];
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                            echo "\" class=\"uannes-row-img uannes-row-card__image";
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 104)) {
                                echo " main-img is-active";
                            } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104) == 2)) {
                                echo " hover-img";
                            }
                            echo "\" data-card-image=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 104);
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
                        // line 106
                        echo "              ";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 106)) > 1)) {
                            // line 107
                            echo "              <div class=\"uannes-row-card__swatches\" aria-label=\"Görünüm seçenekleri\">
                <button type=\"button\" class=\"uannes-row-card__swatch is-active\" data-image-index=\"0\" aria-label=\"Birinci görünüm\"></button>
                <button type=\"button\" class=\"uannes-row-card__swatch\" data-image-index=\"1\" aria-label=\"İkinci görünüm\"></button>
              </div>
              <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--prev\" data-direction=\"prev\" aria-label=\"Önceki görsel\">‹</button>
              <button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--next\" data-direction=\"next\" aria-label=\"Sonraki görsel\">›</button>
              ";
                        }
                        // line 114
                        echo "            </div>
            <div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 115);
                        echo "</span></div>
          </a>
          ";
                        // line 117
                        if ((($context["should_show_ad"] ?? null) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117) == twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "position", [], "any", false, false, false, 117)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 117) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117) < twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "position", [], "any", false, false, false, 117)))))) {
                            // line 118
                            echo "          <article class=\"uannes-row-ad-card\" aria-label=\"";
                            echo ((twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", false, false, false, 118), "Uannes")) : ("Uannes"));
                            echo "\">
            ";
                            // line 119
                            if (twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "link", [], "any", false, false, false, 119)) {
                                echo "<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "link", [], "any", false, false, false, 119);
                                echo "\" class=\"uannes-row-ad-card__link\">";
                            }
                            // line 120
                            echo "            <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "image", [], "any", false, false, false, 120);
                            echo "\" alt=\"";
                            echo ((twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", false, false, false, 120), "Uannes")) : ("Uannes"));
                            echo "\" class=\"uannes-row-ad-card__image\" />
            <div class=\"uannes-row-ad-card__content\">
              ";
                            // line 122
                            if (twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "eyebrow", [], "any", false, false, false, 122)) {
                                echo "<span class=\"uannes-row-ad-card__eyebrow\">";
                                echo twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "eyebrow", [], "any", false, false, false, 122);
                                echo "</span>";
                            }
                            // line 123
                            echo "              ";
                            if (twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", false, false, false, 123)) {
                                echo "<h2>";
                                echo twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "title", [], "any", false, false, false, 123);
                                echo "</h2>";
                            }
                            // line 124
                            echo "              ";
                            if (twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "text", [], "any", false, false, false, 124)) {
                                echo "<p>";
                                echo twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "text", [], "any", false, false, false, 124);
                                echo "</p>";
                            }
                            // line 125
                            echo "            </div>
            ";
                            // line 126
                            if (twig_get_attribute($this->env, $this->source, ($context["ad_card"] ?? null), "link", [], "any", false, false, false, 126)) {
                                echo "</a>";
                            }
                            // line 127
                            echo "          </article>
          ";
                        }
                        // line 129
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
                    // line 130
                    echo "        </div>
        ";
                }
                // line 132
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
            // line 133
            echo "      ";
        } else {
            // line 134
            echo "      <p class=\"giyim-empty-state\">Seçtiğiniz ölçütlere uygun ürün bulunamadı.</p>
      ";
        }
        // line 136
        echo "    </div>
  </div>
</div>
";
        // line 139
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
        return array (  337 => 139,  332 => 136,  328 => 134,  325 => 133,  311 => 132,  307 => 130,  293 => 129,  289 => 127,  285 => 126,  282 => 125,  275 => 124,  268 => 123,  262 => 122,  254 => 120,  248 => 119,  243 => 118,  241 => 117,  236 => 115,  233 => 114,  224 => 107,  221 => 106,  192 => 104,  174 => 103,  172 => 102,  166 => 101,  161 => 100,  143 => 99,  141 => 98,  134 => 97,  131 => 96,  114 => 95,  111 => 94,  109 => 92,  108 => 91,  107 => 90,  104 => 89,  98 => 88,  95 => 87,  92 => 86,  89 => 85,  86 => 84,  83 => 83,  78 => 82,  75 => 81,  72 => 80,  70 => 79,  66 => 77,  63 => 12,  57 => 10,  51 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/giyim.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\giyim.twig");
    }
}
