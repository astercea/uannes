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

/* default/template/product/product.twig */
class __TwigTemplate_f5be49a25c2e32579585a2334e7621b9 extends Template
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
<!-- Owl Carousel CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"/>
<link
rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\"/>

<!-- Owl Carousel (jQuery header'da zaten yüklü; ikinci jQuery eklentileri sıfırlar) -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
<div
\tclass=\"main-container\">
\t<!-- Sol Taraf: Carousel + Content -->
\t<div
\t\tclass=\"left-content order-1 order-lg-1\">
\t\t<!-- Carousel -->
\t\t<div class=\"carousel-section position-relative\">
\t\t\t";
        // line 16
        $this->loadTemplate("common/product_badges.twig", "default/template/product/product.twig", 16)->display(twig_to_array(["badges" => ($context["badges"] ?? null)]));
        // line 17
        echo "\t\t\t<div class=\"owl-carousel owl-theme carousel-image\">
\t\t\t\t";
        // line 18
        if (($context["thumb"] ?? null)) {
            // line 19
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"";
            // line 20
            echo ($context["thumb"] ?? null);
            echo "\" class=\"img-fluid w-100\"/>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 26);
                echo "\" class=\"img-fluid w-100\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</div>

\t\t\t<!-- Küçük Resimler -->
\t\t\t<div class=\"thumbnails\">
\t\t\t\t";
        // line 34
        if (($context["thumb"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" class=\"active\"/>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 39
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 39);
                echo "\"/>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t";
        }
        // line 42
        echo "\t\t\t</div>
\t\t</div>

\t\t<!-- Alt İçerik -->
\t\t<div class=\"content-section order-3 order-lg-2\">
\t\t\t<div class=\"container py-5\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t<!-- ÜST KUTU -->
\t\t\t\t\t\t";
        // line 52
        if (($context["story_info"] ?? null)) {
            // line 53
            echo "\t\t\t\t\t\t\t<div class=\"information product-story content w-100\">
\t\t\t\t\t\t\t\t<div class=\"product-story__card\">
\t\t\t\t\t\t\t\t\t<span class=\"product-story__label\">Arkasındaki hikaye</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-story__text information-text\">";
            // line 56
            echo ($context["story_info"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 60
        echo "
\t\t\t\t\t\t<!-- ALT BAŞLIK + ÜRÜNLER -->
\t\t\t\t\t\t";
        // line 62
        if (($context["products"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-4 section-header\" style=\"padding-bottom:30px;\">
\t\t\t\t\t\t\t\t\t<h3 class=\"fw-normal m-0\">";
            // line 65
            echo ($context["text_related"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card text-center";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "in_stock", [], "any", true, true, false, 70) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "in_stock", [], "any", false, false, false, 70))) {
                    echo " product-card--out-of-stock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 72
                $this->loadTemplate("common/product_badges.twig", "default/template/product/product.twig", 72)->display(twig_to_array(["badges" => twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", false, false, false, 72)]));
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 74);
                echo "\" class=\"product-image main-img img-fluid\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 76);
                    echo "\" class=\"product-image hover-img img-fluid\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    echo " hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                    echo "\" class=\"product-image hover-img img-fluid\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal\" style=\"font-size:18px;\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Sağ Taraf: Sticky Product Details -->
\t<div class=\"right-sidebar order-2 order-lg-3\">
\t\t<div
\t\t\tclass=\"product-details-sticky\">
\t\t\t<!-- ÜST KUTU -->
\t\t\t<div class=\"transparent-box content w-100\">
\t\t\t\t<form id=\"product\">
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 103
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 104
        echo ($context["minimum"] ?? null);
        echo "\" />
\t\t\t\t<h2 class=\"fs-5 mb-2\">";
        // line 105
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t<div class=\"product-detail-badges mb-2\">
\t\t\t\t\t";
        // line 107
        $this->loadTemplate("common/product_badges.twig", "default/template/product/product.twig", 107)->display(twig_to_array(["badges" => ($context["badges"] ?? null)]));
        // line 108
        echo "\t\t\t\t</div>
\t\t\t<p class=\"fs-5 mb-2\" style=\"font-size:2.25rem;\">
\t\t\t";
        // line 110
        if (($context["special"] ?? null)) {
            // line 111
            echo "\t\t\t\t<span class=\"text-muted\" style=\"text-decoration: line-through; font-size:1.25rem; opacity:0.7; color:#ff3131\">
\t\t\t\t";
            // line 112
            echo ($context["price"] ?? null);
            echo "
\t\t\t\t</span><br>
\t\t\t\t<span class=\"fw-bold text-dark\" style=\"font-size:2.25rem;\">
\t\t\t\t";
            // line 115
            echo ($context["special"] ?? null);
            echo "
\t\t\t\t</span>
\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t<span class=\"fw-bold text-dark\">
\t\t\t\t";
            // line 119
            echo ($context["price"] ?? null);
            echo "
\t\t\t\t</span>
\t\t\t";
        }
        // line 122
        echo "\t\t\t</p>

\t\t\t\t";
        // line 124
        if (($context["attribute_groups"] ?? null)) {
            // line 125
            echo "\t\t\t\t<div class=\"product-attributes mb-3\">
\t\t\t\t\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 127
                echo "\t\t\t\t\t<div class=\"attribute-group mb-2\">
\t\t\t\t\t\t<ul class=\" ps-3 mb-0\">
\t\t\t\t\t\t";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "attribute", [], "any", false, false, false, 129));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 130
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 130);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 130);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 137
        echo "
\t\t\t\t";
        // line 138
        if (($context["options"] ?? null)) {
            // line 139
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 140
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 140) == "select")) {
                    // line 141
                    echo "\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 product-option-row\">
\t\t\t\t\t\t\t\t<span>";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 142);
                    echo "</span>
\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "]\" class=\"form-control w-auto\">
\t\t\t\t\t\t\t\t\t";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 144));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 145);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 145);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 150
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t\t\t";
        }
        // line 152
        echo "
\t\t\t\t<p class=\"small mb-2\">";
        // line 153
        echo ($context["description"] ?? null);
        echo "</p>

\t\t\t\t";
        // line 155
        if ( !($context["in_stock"] ?? null)) {
            // line 156
            echo "\t\t\t\t<p class=\"product-stock-status mb-2\"><strong>";
            echo ($context["text_stock"] ?? null);
            echo "</strong> ";
            echo ($context["stock"] ?? null);
            echo "</p>
\t\t\t\t";
        }
        // line 158
        echo "
\t\t\t\t<div class=\"d-flex justify-content-center mb-2 product-action\">
\t\t\t\t\t";
        // line 160
        if (($context["in_stock"] ?? null)) {
            // line 161
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn btn-warning text-white\">
\t\t\t\t\t\tSepete Ekle
\t\t\t\t\t</button>
\t\t\t\t\t";
        } else {
            // line 165
            echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary text-white\" disabled=\"disabled\">
\t\t\t\t\t\tSepete Ekle
\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- ALT KUTU -->
\t\t\t<div class=\"transparent-box bg-white bg-opacity-95 p-3 w-100\" style=\"--bs-bg-opacity: 0.7\">
\t\t\t\t<div
\t\t\t\t\tclass=\"accordion\" id=\"productAccordion\">
\t\t\t\t\t";
        // line 177
        if (($context["maintenance_info"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t<style>
\t\t\t\t\t\t
\t\t\t\t\t\t\t.custom-accordion {
\t\t\t\t\t\t\t\tborder-radius: 8px;
\t\t\t\t\t\t\t\tmargin-bottom: 15px;
\t\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.custom-accordion-header {
\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t\tpadding: 12px 15px;
\t\t\t\t\t\t\t\tfont-weight: 600;
\t\t\t\t\t\t\t\tcolor: #1a1a50;
\t\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\t\talign-items: center;
\t\t\t\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t\t\t\ttransition: background 0.2s;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t.custom-accordion-header i {
\t\t\t\t\t\t\t\ttransition: transform 0.3s ease;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.custom-accordion-header.active i {
\t\t\t\t\t\t\t\ttransform: rotate(180deg);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.custom-accordion-content {
\t\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t\t\tpadding: 15px;
\t\t\t\t\t\t\t\tborder-top: 1px solid #e2e2e2;
\t\t\t\t\t\t\t\tcolor: #555;
\t\t\t\t\t\t\t\tbackground-color: #fff;
\t\t\t\t\t\t\t\tanimation: fadeIn 0.3s ease-in-out;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@keyframes fadeIn {
\t\t\t\t\t\t\t\tfrom {
\t\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t\t\ttransform: translateY(-5px);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tto {
\t\t\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\t\t\ttransform: translateY(0);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t</style>
\t\t\t\t\t\t<div class=\"custom-accordion\" id=\"careSection\">
\t\t\t\t\t\t\t<div class=\"custom-accordion-header\">
\t\t\t\t\t\t\t\t<span>BAKIM</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-accordion-content\">
\t\t\t\t\t\t\t\t";
            // line 227
            echo ($context["maintenance_info"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t<!-- TESLİMAT VE İADELER -->
\t\t\t\t\t<div class=\"custom-accordion\" id=\"deliveryReturnsSection\">
\t\t\t\t\t\t<div class=\"custom-accordion-header\">
\t\t\t\t\t\t\t<span>TESLİMAT VE İADELER</span>
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-accordion-content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSiparişiniz 2-3 iş günü içinde kargoya verilir.<br>
\t\t\t\t\t\t\t\tÜrün iadeleri 14 gün içinde kabul edilir.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>
<style>
\t.carousel-section .owl-carousel .item img {
\t\twidth: 100%;
\t\tdisplay: block;
\t}

\t.owl-carousel.carousel-image .owl-stage {
\t\tdisplay: flex;
\t}
\t.transparent-box {
\t\tbackground: rgba(255, 255, 255, 0.85);
\t\tpadding: 15px;
\t\tborder-radius: 15px;
\t\tmargin: 0 0 5px;
\t\tbox-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
\t\tborder: 1px solid #e0e0e0;
\t}
\t.product-details-sticky .transparent-box + .transparent-box {
\t\tmargin-top: 0;
\t}
\t@media (max-width: 992px) {
\t\t.main-container {
\t\t\tflex-direction: column;
\t\t}

\t\t.product-details-sticky {
\t\t\tposition: relative;
\t\t\ttop: auto;
\t\t\tmargin-top: 20px;
\t\t}

\t\t.right-sidebar {
\t\t\twidth: 100%;
\t\t}

\t\t.left-content,
\t\t.content-section {
\t\t\twidth: 100%;
\t\t}
\t}

</style>
<script>
\$(document).ready(function(){
  \$(\".owl-carousel.carousel-image\").owlCarousel({
    items:2,
    loop:true,
    margin:0,
    nav:true,
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
      0:{items:1},
      600:{items:2},
      1000:{items:2}
    }
  });

  // Thumbnail tıklayınca slider değişimi
  \$('.thumbnails img').click(function(){
    var index = \$(this).index();
    \$(\".owl-carousel.carousel-image\").trigger('to.owl.carousel',[index,300]);
    \$('.thumbnails img').removeClass('active');
    \$(this).addClass('active');
  });
});

</script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.length) {
\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tvar optSelect = \$('select[name=\"option[' + i + ']\"]');
\t\t\t\t\t\t\tif (optSelect.length) {
\t\t\t\t\t\t\t\toptSelect.closest('.d-flex').after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\twindow.uannesShowCartResponse(json);
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\twindow.uannesShowCartResponse(json);

\t\t\t\tvar qtyMatch = json['total'] && String(json['total']).match(/(\\d+)/);
\t\t\t\tvar cartBadge = document.querySelector('#cart #cart-total');
\t\t\t\tif (cartBadge && qtyMatch) {
\t\t\t\t\tcartBadge.textContent = qtyMatch[1];
\t\t\t\t}

\t\t\t\t\$(document).trigger('uannes:cartUpdated');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 408
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 413
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 419
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 486
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 490
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
<script>
\t\$(document).ready(function(){
\t\$('.custom-accordion-header').on('click', function(){
\t\tvar \$content = \$(this).next('.custom-accordion-content');
\t\t\$(this).toggleClass('active');
\t\t\$content.slideToggle(250);
\t\t\$(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
\t});
\t});
</script>
<script>
\$(document).ready(function(){
  if (\$(window).width() <= 992) {
    var productDetails = \$('.right-sidebar');

    \$('.carousel-section').after(productDetails);
  }
});
</script>
";
        // line 547
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/product/product.twig";
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
        return array (  831 => 547,  771 => 490,  764 => 486,  694 => 419,  685 => 413,  677 => 408,  498 => 231,  491 => 227,  440 => 178,  438 => 177,  428 => 169,  422 => 165,  416 => 161,  414 => 160,  410 => 158,  402 => 156,  400 => 155,  395 => 153,  392 => 152,  389 => 151,  383 => 150,  378 => 147,  367 => 145,  363 => 144,  359 => 143,  355 => 142,  352 => 141,  349 => 140,  344 => 139,  342 => 138,  339 => 137,  335 => 135,  327 => 132,  316 => 130,  312 => 129,  308 => 127,  304 => 126,  301 => 125,  299 => 124,  295 => 122,  289 => 119,  286 => 118,  280 => 115,  274 => 112,  271 => 111,  269 => 110,  265 => 108,  263 => 107,  258 => 105,  254 => 104,  250 => 103,  235 => 90,  230 => 87,  220 => 83,  215 => 80,  207 => 78,  199 => 76,  197 => 75,  191 => 74,  186 => 73,  184 => 72,  177 => 70,  174 => 69,  170 => 68,  164 => 65,  160 => 63,  158 => 62,  154 => 60,  147 => 56,  142 => 53,  140 => 52,  128 => 42,  125 => 41,  116 => 39,  111 => 38,  108 => 37,  102 => 35,  100 => 34,  94 => 30,  91 => 29,  82 => 26,  79 => 25,  74 => 24,  71 => 23,  65 => 20,  62 => 19,  60 => 18,  57 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\product.twig");
    }
}
