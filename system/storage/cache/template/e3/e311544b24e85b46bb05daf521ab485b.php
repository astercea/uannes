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

/* default/template/extension/module/imaj.twig */
class __TwigTemplate_b68a1a390c2df219418493893a491dbf extends Template
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
        echo "<!-- Uannes Motto Alanı -->
<div class=\"uannes-motto-section\">
  <div class=\"uannes-motto-container\">
    <div class=\"uannes-motto-title-wrap\">
      <span class=\"uannes-motto-line\"></span>
      <h3 class=\"uannes-motto-title\">Zamansız Zarafetin İzinde</h3>
      <span class=\"uannes-motto-line\"></span>
    </div>
    <p class=\"uannes-motto-quote\">
      “Hayalimiz, doğaya ve insan emeğine saygı duyan saf dokularla zamansız bir zarafet yaratmaktır. Her detayda geleceğe ilham veren mirasa yakışır dokunuşlar sunuyoruz.”
    </p>
  </div>
</div>

";
        // line 15
        if (($context["banners"] ?? null)) {
            // line 16
            echo "<div class=\"uannes-slider-section\" style=\"margin-bottom: 1.5rem; padding-bottom: 0px; height: auto;\">
  <div class=\"uannes-slider-container\" style=\"padding: 10px 0; margin: 0; height: auto;\">
    <div class=\"swiper-container uannes-swiper\" style=\"margin-bottom: 0px; height: auto;\">
      <div class=\"swiper-wrapper\" style=\"height: auto;\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 21
                echo "        <div class=\"swiper-slide\" style=\"height: auto;\">
          <div class=\"uannes-card\">
            ";
                // line 23
                $context["card_img"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 23)) ? ("image/catalog/marka_hikayesi_card1.png") : (twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23)));
                // line 24
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 25);
                    echo "\"><img src=\"";
                    echo ($context["card_img"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
                    echo "\" class=\"uannes-card-img\" /></a>
            ";
                } else {
                    // line 27
                    echo "            <img src=\"";
                    echo ($context["card_img"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 27);
                    echo "\" class=\"uannes-card-img\" />
            ";
                }
                // line 29
                echo "            <button type=\"button\" class=\"uannes-card-arrow uannes-card-arrow-left\" aria-label=\"Önceki\">
              <svg width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M7 1L1 7L7 13\"/></svg>
            </button>
            <button type=\"button\" class=\"uannes-card-arrow uannes-card-arrow-right\" aria-label=\"Sonraki\">
              <svg width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M1 1L7 7L1 13\"/></svg>
            </button>
          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </div>
    </div>
  </div>
</div>
";
        }
        // line 43
        echo "
<!-- Uannes'i Keşfet Bölümü (Hermès Stilinde 3'lü Kare Grid) -->
<div class=\"uannes-discover-section\">
  <div class=\"uannes-discover-container\">
    <div class=\"uannes-discover-header\">
      <h2 class=\"uannes-discover-title\">Uannes'i Keşfet</h2>
    </div>
    
    <div class=\"uannes-discover-grid\">
      <div class=\"uannes-discover-card\">
        <a href=\"javascript:void(0);\" class=\"uannes-discover-link\" style=\"cursor: default;\">
          <div class=\"uannes-discover-media\">
            <img src=\"image/catalog/282A9418.jpg\" alt=\"Uannes'in Hikayesi\" class=\"uannes-discover-img\" />
          </div>
          <div class=\"uannes-discover-label-wrap\">
            <span class=\"uannes-discover-label\">Uannes'in Hikayesi</span>
          </div>
        </a>
      </div>

      <div class=\"uannes-discover-card\">
        <a href=\"javascript:void(0);\" class=\"uannes-discover-link\" style=\"cursor: default;\">
          <div class=\"uannes-discover-media\">
            <img src=\"image/catalog/282A9426.jpg\" alt=\"Özel Üretim\" class=\"uannes-discover-img\" />
          </div>
          <div class=\"uannes-discover-label-wrap\">
            <span class=\"uannes-discover-label\">Özel Üretim</span>
          </div>
        </a>
      </div>

      <div class=\"uannes-discover-card\">
        <a href=\"index.php?route=product/category&path=67\" class=\"uannes-discover-link\">
          <div class=\"uannes-discover-media\">
            <img src=\"image/catalog/282A9443.jpg\" alt=\"Giyim\" class=\"uannes-discover-img\" />
          </div>
          <div class=\"uannes-discover-label-wrap\">
            <span class=\"uannes-discover-label\">Giyim</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
  if (!\$('.uannes-swiper').length) return;

  var uannesSwiper = new Swiper('.uannes-swiper', {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 24,
    loop: true,
    autoHeight: true,
    autoplay: 4000,
    autoplayDisableOnInteraction: false,
    breakpoints: {
      767: {
        slidesPerView: 1.5,
        spaceBetween: 12
      }
    }
  });

  \$(document).on('click', '.uannes-card-arrow-left', function(e) {
    e.preventDefault();
    e.stopPropagation();
    uannesSwiper.slidePrev();
  });

  \$(document).on('click', '.uannes-card-arrow-right', function(e) {
    e.preventDefault();
    e.stopPropagation();
    uannesSwiper.slideNext();
  });
});
--></script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/imaj.twig";
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
        return array (  134 => 43,  127 => 38,  105 => 29,  97 => 27,  87 => 25,  84 => 24,  82 => 23,  78 => 21,  61 => 20,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/imaj.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\extension\\module\\imaj.twig");
    }
}
