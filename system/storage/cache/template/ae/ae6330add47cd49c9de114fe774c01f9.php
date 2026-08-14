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
<main id=\"product-product\" class=\"main-container product-page\">
\t<!-- Sol Taraf: Carousel + Content -->
\t<div
\t\tclass=\"left-content order-1 order-lg-1\">
\t\t<!-- Carousel -->
\t\t<div class=\"carousel-section position-relative\">
\t\t\t<div class=\"owl-carousel owl-theme carousel-image\">
\t\t\t\t";
        // line 16
        if (($context["thumb"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"";
            // line 18
            echo ($context["thumb"] ?? null);
            echo "\" class=\"img-fluid w-100\"/>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 23
                echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 24);
                echo "\" class=\"img-fluid w-100\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</div>

\t\t\t<!-- Küçük Resimler -->
\t\t\t<div class=\"thumbnails\">
\t\t\t\t";
        // line 32
        if (($context["thumb"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" class=\"active\"/>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 37
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 37);
                echo "\"/>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</div>
\t\t</div>

\t\t<!-- Alt İçerik -->
\t\t<div class=\"content-section order-3 order-lg-2\">
\t\t\t<div class=\"container py-5\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t<section class=\"product-page__summary\" aria-labelledby=\"product-title\">
\t\t\t\t\t\t\t<div class=\"product-detail-badges mb-2\">
\t\t\t\t\t\t\t\t";
        // line 51
        $this->loadTemplate("common/product_badges.twig", "default/template/product/product.twig", 51)->display(twig_to_array(["badges" => ($context["badges"] ?? null)]));
        // line 52
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 id=\"product-title\" class=\"product-page__title\">";
        // line 53
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t\t<div class=\"product-page__price\">
\t\t\t\t\t\t\t";
        // line 55
        if (($context["special"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t<span class=\"product-page__price-old\">";
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"product-page__price-current product-page__price-current--special\">";
            // line 57
            echo ($context["special"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t\t<span class=\"product-page__price-current\">";
            echo ($context["price"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 63
        if (($context["attribute_groups"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t\t\t\t<div class=\"product-attributes mb-3\">
\t\t\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["group_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 66));
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (!twig_in_filter(($context["group_name"] ?? null), ["renk", "color", "colour"])) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"attribute-group mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ps-3 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "attribute", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 71);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 71);
                        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"product-page__description\" aria-label=\"Ürün hakkında\">
\t\t\t\t\t\t\t<div class=\"product-page__intro\">
\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["story_info"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t";
            echo ($context["story_info"] ?? null);
            echo "
\t\t\t\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t\t\t\t\tUannes'in yalın ve zamansız estetiğini taşıyan bu parça, özenli kumaşı ve akıcı silüetiyle günün her anına eşlik eder.
\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>

\t\t\t\t\t</div>
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

\t\t\t\t<div class=\"d-flex justify-content-center mb-2 product-action\" style=\"transform: translateY(-40px); margin-bottom: -40px !important; position: relative; z-index: 10;\">
\t\t\t\t\t";
        // line 107
        if (($context["in_stock"] ?? null)) {
            // line 108
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn product-page__add-to-cart\">
\t\t\t\t\t\tSepete Ekle
\t\t\t\t\t</button>
\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t<button type=\"button\" class=\"btn product-page__add-to-cart product-page__add-to-cart--disabled\" disabled=\"disabled\">
\t\t\t\t\t\tSepete Ekle
\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 118
        $context["has_size_option"] = false;
        // line 119
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 120
            echo "\t\t\t\t\t";
            $context["option_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 120));
            // line 121
            echo "\t\t\t\t\t";
            if ((twig_in_filter("beden", ($context["option_name"] ?? null)) || twig_in_filter("size", ($context["option_name"] ?? null)))) {
                $context["has_size_option"] = true;
            }
            // line 122
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t";
        // line 124
        if ( !($context["has_size_option"] ?? null)) {
            // line 125
            echo "\t\t\t\t\t\t<fieldset class=\"product-option-set product-option-set--sizes product-option-set--standard\">
\t\t\t\t\t\t\t<div class=\"product-option-set__heading\">
\t\t\t\t\t\t\t\t<legend>Beden</legend>
\t\t\t\t\t\t\t\t";
            // line 128
            if (( !($context["in_stock"] ?? null) || ($context["has_sold_out_size"] ?? null))) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__side\">";
                $this->loadTemplate("product/stock_notify.twig", "default/template/product/product.twig", 129)->display($context);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-option-set__choices\">
\t\t\t\t\t\t\t\t<span class=\"product-option__size product-option__size--standard\">Standart</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), [])) : ([])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 138
            echo "\t\t\t\t\t\t\t";
            $context["option_name"] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138));
            // line 139
            echo "\t\t\t\t\t\t\t";
            $context["is_size_option"] = (twig_in_filter("beden", ($context["option_name"] ?? null)) || twig_in_filter("size", ($context["option_name"] ?? null)));
            // line 140
            echo "\t\t\t\t\t\t\t";
            $context["is_colour_option"] = ((twig_in_filter("renk", ($context["option_name"] ?? null)) || twig_in_filter("color", ($context["option_name"] ?? null))) || twig_in_filter("colour", ($context["option_name"] ?? null)));
            // line 141
            echo "\t\t\t\t\t\t\t";
            if (($context["is_size_option"] ?? null)) {
                // line 142
                echo "\t\t\t\t\t\t\t\t";
                $context["has_standard_size"] = false;
                // line 143
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 144)) == "standart")) {
                        $context["has_standard_size"] = true;
                    }
                    // line 145
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t\t\t\t\t\t<fieldset class=\"product-option-set product-option-set--sizes\">
\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__heading\">
\t\t\t\t\t\t\t\t\t\t<legend>Beden</legend>
\t\t\t\t\t\t\t\t\t\t";
                // line 149
                if ((( !($context["has_standard_size"] ?? null) ||  !($context["in_stock"] ?? null)) || ($context["has_sold_out_size"] ?? null))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__side\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    if ( !($context["has_standard_size"] ?? null)) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#product-description-title\" class=\"product-option-set__guide\">Beden Rehberi</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (( !($context["in_stock"] ?? null) || ($context["has_sold_out_size"] ?? null))) {
                        $this->loadTemplate("product/stock_notify.twig", "default/template/product/product.twig", 154)->display($context);
                    }
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__choices\">
\t\t\t\t\t\t\t\t\t\t";
                // line 159
                $context["has_available_size"] = false;
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["is_sold_out"] =  !twig_get_attribute($this->env, $this->source, $context["value"], "in_stock", [], "any", false, false, false, 161);
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["is_standard_size"] = (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 162)) == "standart");
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (( !($context["has_standard_size"] ?? null) || ($context["is_standard_size"] ?? null))) {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["select_this_size"] = ( !($context["is_sold_out"] ?? null) &&  !($context["has_available_size"] ?? null));
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["select_this_size"] ?? null)) {
                            $context["has_available_size"] = true;
                        }
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"product-option__input\" type=\"radio\" id=\"option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 166);
                        echo "\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 166);
                        echo "\"";
                        if (($context["select_this_size"] ?? null)) {
                            echo " checked";
                        }
                        if (($context["is_sold_out"] ?? null)) {
                            echo " disabled aria-disabled=\"true\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"product-option__size";
                        // line 167
                        if (($context["is_standard_size"] ?? null)) {
                            echo " product-option__size--standard";
                        }
                        if (($context["is_sold_out"] ?? null)) {
                            echo " is-sold-out";
                        }
                        echo "\" for=\"option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 167);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 167);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
            } elseif (            // line 172
($context["is_colour_option"] ?? null)) {
                // line 173
                echo "\t\t\t\t\t\t\t\t";
                $context["first_colour"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 173));
                // line 174
                echo "\t\t\t\t\t\t\t\t<fieldset class=\"product-option-set product-option-set--colours\">
\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__heading\">
\t\t\t\t\t\t\t\t\t\t<legend>Renk</legend>
\t\t\t\t\t\t\t\t\t\t<span class=\"product-option-set__selected-colour\" data-selected-colour>";
                // line 177
                echo twig_get_attribute($this->env, $this->source, ($context["first_colour"] ?? null), "name", [], "any", false, false, false, 177);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-option-set__choices\">
\t\t\t\t\t\t\t\t\t\t";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 180));
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"product-option__input\" type=\"radio\" id=\"option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 181);
                    echo "\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 181);
                    echo "\" data-option-label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 181);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 181)) {
                        echo " checked";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"product-option__colour\" for=\"option-";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 182);
                    echo "\" data-colour=\"";
                    echo twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 182));
                    echo "\"><span class=\"visually-hidden\">";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 182);
                    echo "</span></label>
\t\t\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 186
$context["option"], "type", [], "any", false, false, false, 186) == "select")) {
                // line 187
                echo "\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 product-option-row\">
\t\t\t\t\t\t\t\t\t<span>";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                echo "</span>
\t\t\t\t\t\t\t\t\t<select name=\"option[";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                echo "]\" class=\"form-control w-auto\">
\t\t\t\t\t\t\t\t\t\t";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 190));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "product_option_value_id", [], "any", false, false, false, 191);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 191);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 193
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- ALT KUTU -->
\t\t\t<div class=\"transparent-box bg-white bg-opacity-95 p-3 w-100\" style=\"--bs-bg-opacity: 0.7\">
\t\t\t\t<div
\t\t\t\t\tclass=\"accordion\" id=\"productAccordion\">
\t\t\t\t\t<div class=\"custom-accordion\" id=\"productDetailsSection\">
\t\t\t\t\t\t<div class=\"custom-accordion-header\">
\t\t\t\t\t\t\t<span>ÜRÜN DETAYLARI</span>
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-accordion-content product-details-content\">
\t\t\t\t\t\t\t";
        // line 211
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 214
        if (($context["maintenance_info"] ?? null)) {
            // line 215
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
            // line 264
            echo ($context["maintenance_info"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 268
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

\t";
        // line 286
        if (($context["products"] ?? null)) {
            // line 287
            echo "\t\t<section class=\"product-page__recommendations cart-page__recent\" aria-labelledby=\"recommendations-title\">
\t\t\t<header class=\"cart-page__recent-heading\">
\t\t\t\t<h2 id=\"recommendations-title\">İlginizi Çekebilecekler</h2>
\t\t\t</header>
\t\t\t<div class=\"uannes-row-grid cart-page__recent-grid\" role=\"list\">
\t\t\t\t";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 293
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 293);
                echo "\" class=\"uannes-row-card cart-page__recent-card\" role=\"listitem\">
\t\t\t\t\t\t<div class=\"uannes-row-media\" data-current-image=\"0\">
\t\t\t\t\t\t\t<img src=\"";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 295);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 295);
                echo "\" class=\"uannes-row-img uannes-row-card__image main-img is-active\" data-card-image=\"0\" />
\t\t\t\t\t\t\t";
                // line 296
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 296)) {
                    // line 297
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 297);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 297);
                    echo "\" class=\"uannes-row-img uannes-row-card__image hover-img\" data-card-image=\"1\" />
\t\t\t\t\t\t\t\t<div class=\"uannes-row-card__swatches\" aria-label=\"Renk seçenekleri\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"uannes-row-card__swatch is-active\" data-image-index=\"0\" aria-label=\"Birinci renk seçeneği\"></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"uannes-row-card__swatch\" data-image-index=\"1\" aria-label=\"İkinci renk seçeneği\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--prev\" data-direction=\"prev\" aria-label=\"Önceki görsel\">‹</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"uannes-row-card__arrow uannes-row-card__arrow--next\" data-direction=\"next\" aria-label=\"Sonraki görsel\">›</button>
\t\t\t\t\t\t\t";
                }
                // line 305
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uannes-row-info\"><span class=\"uannes-row-name\">";
                // line 306
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 306);
                echo "</span></div>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "\t\t\t</div>
\t\t</section>
\t";
        }
        // line 312
        echo "
</main>
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
    navText:['<span aria-hidden=\"true\">&#8249;</span>', '<span aria-hidden=\"true\">&#8250;</span>'],
    dots:false,
    autoplay:false,
    slideBy:1,
    responsive:{
      0:{items:1, slideBy:1},
      768:{items:2, slideBy:1}
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
<script>
document.addEventListener('change', function(event) {
\tif (!event.target.matches('.product-option-set--colours .product-option__input')) return;

\tvar optionSet = event.target.closest('.product-option-set--colours');
\tvar selectedLabel = optionSet ? optionSet.querySelector('[data-selected-colour]') : null;

\tif (selectedLabel) {
\t\tselectedLabel.textContent = event.target.getAttribute('data-option-label') || '';
\t}
});
</script>
<script>
document.addEventListener('click', function(event) {
\tvar trigger = event.target.closest('[data-stock-notify] .product-stock-notify__trigger');
\tif (trigger) {
\t\tvar wrapper = trigger.parentElement;
\t\tvar form = wrapper.querySelector('.product-stock-notify__form');
\t\tform.hidden = !form.hidden;
\t\twrapper.classList.toggle('is-open', !form.hidden);
\t\tif (!form.hidden) form.querySelector('input').focus();
\t\treturn;
\t}

\tvar submit = event.target.closest('[data-stock-notify] .product-stock-notify__submit');
\tif (!submit) return;

\tvar wrapper = submit.closest('[data-stock-notify]');
\tvar email = wrapper.querySelector('input');
\tvar status = wrapper.querySelector('.product-stock-notify__status');
\tif (!email.checkValidity()) {
\t\temail.reportValidity();
\t\treturn;
\t}

\tsubmit.disabled = true;
\tfetch('index.php?route=product/stock_notification/add', {
\t\tmethod: 'POST',
\t\theaders: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
\t\tbody: 'product_id=' + encodeURIComponent(wrapper.getAttribute('data-product-id')) + '&email=' + encodeURIComponent(email.value)
\t}).then(function(response) {
\t\treturn response.json();
\t}).then(function(result) {
\t\tstatus.textContent = result.success || result.error || 'İşleminiz tamamlanamadı.';
\t\tif (result.success) {
\t\t\temail.disabled = true;
\t\t\tsubmit.hidden = true;
\t\t}
\t}).catch(function() {
\t\tstatus.textContent = 'İşleminiz tamamlanamadı. Lütfen tekrar deneyin.';
\t}).finally(function() {
\t\tsubmit.disabled = false;
\t});
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
        // line 527
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 532
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 538
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
        // line 605
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 609
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
document.addEventListener('click', function(event) {
\tvar control = event.target.closest('#product-product .product-page__recommendations .uannes-row-card__swatch, #product-product .product-page__recommendations .uannes-row-card__arrow');
\tif (!control) return;

\tevent.preventDefault();
\tevent.stopPropagation();

\tvar media = control.closest('.uannes-row-media');
\tvar images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
\tif (images.length < 2) return;

\tvar current = parseInt(media.getAttribute('data-current-image'), 10);
\tif (isNaN(current)) current = 0;
\tcurrent = control.classList.contains('uannes-row-card__arrow')
\t\t? (control.getAttribute('data-direction') === 'next' ? (current + 1) % images.length : (current - 1 + images.length) % images.length)
\t\t: parseInt(control.getAttribute('data-image-index'), 10);

\tmedia.classList.add('is-manual-image');
\tmedia.setAttribute('data-current-image', String(current));
\timages.forEach(function(image) { image.classList.toggle('is-active', parseInt(image.getAttribute('data-card-image'), 10) === current); });
\tmedia.querySelectorAll('.uannes-row-card__swatch').forEach(function(swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === String(current)); });
});

document.addEventListener('mouseout', function(event) {
\tvar media = event.target.closest('#product-product .product-page__recommendations .uannes-row-media');
\tif (!media || media.contains(event.relatedTarget)) return;
\tvar images = Array.prototype.slice.call(media.querySelectorAll('[data-card-image]'));
\tmedia.classList.remove('is-manual-image');
\tmedia.setAttribute('data-current-image', '0');
\timages.forEach(function(image) { image.classList.toggle('is-active', image.getAttribute('data-card-image') === '0'); });
\tmedia.querySelectorAll('.uannes-row-card__swatch').forEach(function(swatch) { swatch.classList.toggle('is-active', swatch.getAttribute('data-image-index') === '0'); });
});
</script>
";
        // line 691
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
        return array (  1152 => 691,  1067 => 609,  1060 => 605,  990 => 538,  981 => 532,  973 => 527,  756 => 312,  751 => 309,  742 => 306,  739 => 305,  725 => 297,  723 => 296,  717 => 295,  711 => 293,  707 => 292,  700 => 287,  698 => 286,  678 => 268,  671 => 264,  620 => 215,  618 => 214,  612 => 211,  596 => 197,  582 => 196,  577 => 193,  566 => 191,  562 => 190,  558 => 189,  554 => 188,  551 => 187,  549 => 186,  545 => 184,  523 => 182,  506 => 181,  489 => 180,  483 => 177,  478 => 174,  475 => 173,  473 => 172,  469 => 170,  463 => 169,  447 => 167,  429 => 166,  424 => 165,  421 => 164,  418 => 163,  415 => 162,  412 => 161,  407 => 160,  405 => 159,  401 => 157,  397 => 155,  392 => 154,  388 => 152,  386 => 151,  383 => 150,  381 => 149,  376 => 146,  370 => 145,  365 => 144,  360 => 143,  357 => 142,  354 => 141,  351 => 140,  348 => 139,  345 => 138,  327 => 137,  319 => 131,  313 => 129,  311 => 128,  306 => 125,  304 => 124,  301 => 123,  295 => 122,  290 => 121,  287 => 120,  282 => 119,  280 => 118,  276 => 116,  270 => 112,  264 => 108,  262 => 107,  256 => 104,  252 => 103,  234 => 87,  230 => 85,  224 => 83,  222 => 82,  217 => 79,  213 => 77,  207 => 76,  202 => 73,  191 => 71,  187 => 70,  183 => 68,  180 => 67,  177 => 66,  173 => 65,  170 => 64,  168 => 63,  164 => 61,  158 => 59,  153 => 57,  148 => 56,  146 => 55,  141 => 53,  138 => 52,  136 => 51,  123 => 40,  120 => 39,  111 => 37,  106 => 36,  103 => 35,  97 => 33,  95 => 32,  89 => 28,  86 => 27,  77 => 24,  74 => 23,  69 => 22,  66 => 21,  60 => 18,  57 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\product.twig");
    }
}
