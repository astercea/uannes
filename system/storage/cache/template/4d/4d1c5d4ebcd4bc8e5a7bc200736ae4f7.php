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

/* default/template/product/category.twig */
class __TwigTemplate_c1188005141f99c3ebe09b9e394f78fb extends Template
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
footer {
  background-color: #1a1a50;
  margin-top: 0;
}
  @media (max-width: 767px) {
      .grid-buttons {
          display: none;
      }
  }
\t/*
\t#filterSidebar {
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: -300px;
\t\twidth: 300px;
\t\theight: 100%;
\t\tbackground: rgba(26, 26, 80, 0.75);
\t\toverflow-y: auto;
\t\tz-index: 1050;
\t\tpadding: 15px;
\t\tbox-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
\t\ttransition: left 0.3s ease;
\t\tcolor: #fff;
\t}
\t#filterSidebar.show {
\t\tleft: 0;
\t}
\t#filterOverlay {
\t\tdisplay: none;
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: 0;
\t\twidth: 100%;
\t\theight: 100%;
\t\tbackground: rgba(0, 0, 0, 0.5);
\t\tz-index: 1040;
\t}
\t#filterOverlay.show {
\t\tdisplay: block;
\t}
\t#filterSidebar .panel-default {
\t\tbackground-color: transparent;
\t\tborder: none;
\t\tbox-shadow: none;
\t}
\t#filterSidebar .panel-heading {
\t\tbackground-color: transparent;
\t\tcolor: #fff;
\t\tborder-bottom: 1px solid rgba(255, 255, 255, 0.2);
\t\tpadding-left: 0;
\t\tpadding-right: 0;
\t}
\t#filterSidebar .list-group-item {
\t\tbackground-color: transparent;
\t\tcolor: #fff;
\t\tborder: none;
\t}
\t#filterSidebar .checkbox label {
\t\tcolor: #fff;
\t}

\t#filterSidebar .panel-footer {
\t\tbackground: transparent;
\t\tborder-top: 1px solid rgba(255, 255, 255, 0.2);
\t}
\t*/
\tlabel {
\t\tfont-size: 15px;
\t\tfont-weight: normal;
\t}
\t.list-group {
\t\tpadding-top: 30px;
\t}
\t.category-list-toolbar {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\talign-items: center;
\t\tjustify-content: space-between;
\t\tgap: 0.75rem;
\t\tmargin-bottom: 1.25rem;
\t}
\t.category-list-toolbar__actions {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\talign-items: center;
\t\tjustify-content: flex-end;
\t\tgap: 0.65rem;
\t\tmargin-left: auto;
\t}
\t.category-tool-btn {
\t\tdisplay: inline-flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tgap: 0.5rem;
\t\tpadding: 0.65rem 1.15rem;
\t\tfont-size: 0.875rem;
\t\tfont-weight: 600;
\t\tline-height: 1.2;
\t\tcolor: #fff;
\t\tbackground: #1a1a50;
\t\tborder: 1px solid transparent;
\t\tborder-radius: 10px;
\t\tbox-shadow: 0 2px 8px rgba(26, 26, 80, 0.18);
\t\ttransition: background 0.2s ease, box-shadow 0.2s ease, transform 0.15s ease;
\t}
\t.category-tool-btn:hover,
\t.category-tool-btn:focus {
\t\tcolor: #fff;
\t\tbackground: #22226a;
\t\tbox-shadow: 0 4px 14px rgba(26, 26, 80, 0.28);
\t\toutline: none;
\t}
\t.category-tool-btn:active {
\t\ttransform: scale(0.98);
\t}
\t.category-view-toggle {
\t\tdisplay: inline-flex;
\t\talign-items: stretch;
\t\tpadding: 3px;
\t\tbackground: #f0f1f8;
\t\tborder: 1px solid #e2e4ef;
\t\tborder-radius: 10px;
\t\tgap: 2px;
\t}
\t.category-view-btn {
\t\tdisplay: inline-flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tmin-width: 2.5rem;
\t\theight: 2.35rem;
\t\tpadding: 0 0.65rem;
\t\tfont-size: 1rem;
\t\tcolor: #1a1a50;
\t\tbackground: transparent;
\t\tborder: none;
\t\tborder-radius: 7px;
\t\ttransition: background 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
\t}
\t.category-view-btn:hover,
\t.category-view-btn:focus {
\t\tcolor: #1a1a50;
\t\tbackground: rgba(26, 26, 80, 0.08);
\t\toutline: none;
\t}
\t.category-view-btn.active {
\t\tcolor: #fff;
\t\tbackground: #1a1a50;
\t\tbox-shadow: 0 2px 6px rgba(26, 26, 80, 0.25);
\t}
\t/*
\t#product-category .category-sort .dropdown-toggle {
\t\tbackground: #1a1a50;
\t\tcolor: #fff;
\t\tborder: 1px solid transparent;
\t\tborder-radius: 10px;
\t\tpadding: 0.65rem 1rem;
\t\tfont-size: 0.875rem;
\t\tfont-weight: 600;
\t\tbox-shadow: 0 2px 8px rgba(26, 26, 80, 0.18);
\t\tdisplay: inline-flex;
\t\talign-items: center;
\t\tgap: 0.45rem;
\t}
\t#product-category .category-sort .dropdown-toggle:hover,
\t#product-category .category-sort .dropdown-toggle:focus {
\t\tbackground: #22226a;
\t\tcolor: #fff;
\t\toutline: none;
\t}
\t#product-category .category-sort .dropdown-menu {
\t\tmargin-top: 0.35rem;
\t\tpadding: 0.35rem 0;
\t\tbackground-color: #fff;
\t\tbackground-clip: padding-box;
\t\tborder: 1px solid #e8eaf3;
\t\tborder-radius: 10px;
\t\tbox-shadow: 0 8px 24px rgba(26, 26, 80, 0.12);
\t\tmin-width: 100%;
\t}
\t#product-category .category-sort .dropdown-menu > li > a {
\t\tpadding: 0.55rem 1rem;
\t\tfont-size: 0.875rem;
\t\tcolor: #1a1a50;
\t}
\t#product-category .category-sort .dropdown-menu > li > a:hover,
\t#product-category .category-sort .dropdown-menu > li.active > a,
\t#product-category .category-sort .dropdown-menu > li.active > a:hover {
\t\tbackground: rgba(26, 26, 80, 0.08);
\t\tcolor: #1a1a50;
\t}
\t#product-category .category-sort .caret {
\t\tmargin-left: 0.15rem;
\t\tborder-top-color: #fff;
\t\topacity: 0.9;
\t}
\t*/
  .pagination > .active > span,
  .pagination > .active > a,
  .pagination > .active > span:hover,
  .pagination > .active > a:hover,
  .pagination > .active > span:focus,
  .pagination > .active > a:focus {
      background-color: #1a1a50;
      border-color: #1a1a50;
      color: #fff;
  }
  .pagination>li>a, .pagination>li>span{
    color:#1a1a50;
    padding: 8px 15px;
  }
  .pagination{
    padding:20px 20px 20px 5px;
  }
</style>

<div id=\"product-category\" class=\"container\">


\t<div class=\"row\">";
        // line 221
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 222
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 223
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 224
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 225
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 226
            echo "\t\t";
        } else {
            // line 227
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 228
            echo "\t\t";
        }
        // line 229
        echo "
\t\t<div id=\"content\" class=\"";
        // line 230
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "

\t\t\t";
        // line 232
        if (($context["is_collection_hub"] ?? null)) {
            // line 233
            echo "\t\t\t<div class=\"collection-hub\">
\t\t\t\t<header class=\"collection-hub__header\">
\t\t\t\t\t";
            // line 235
            if (($context["collection_parent_name"] ?? null)) {
                // line 236
                echo "\t\t\t\t\t<p class=\"collection-hub__eyebrow\">";
                echo ($context["collection_parent_name"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 238
            echo "\t\t\t\t\t<h1 class=\"collection-hub__title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
\t\t\t\t</header>
\t\t\t\t<div class=\"collection-grid\">
\t\t\t\t\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 242
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 242);
                echo "\" class=\"collection-grid__card\">
\t\t\t\t\t\t<span class=\"collection-grid__media\">
\t\t\t\t\t\t\t<img src=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 244);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 244);
                echo "\" class=\"collection-grid__img\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"collection-grid__name\">";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 246);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"giyim-filter-bar\">
\t\t\t\t<div class=\"giyim-breadcrumb\">
\t\t\t\t\t<span>Tüm Ürünler</span> &middot; <span>";
            // line 253
            echo ($context["heading_title"] ?? null);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"giyim-filter-link\">Filtrele +</div>
\t\t\t</div>

\t\t\t";
            // line 258
            if (($context["products"] ?? null)) {
                // line 259
                echo "\t\t\t\t<div class=\"uannes-row-grid\">
\t\t\t\t\t";
                // line 260
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 261
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 261);
                    echo "\" class=\"uannes-row-card\">
\t\t\t\t\t\t<div class=\"uannes-row-media\">
\t\t\t\t\t\t\t";
                    // line 263
                    $this->loadTemplate("common/product_badges.twig", "default/template/product/category.twig", 263)->display(twig_to_array(["badges" => ((twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "badges", [], "any", false, false, false, 263), [])) : ([]))]));
                    // line 264
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 264);
                    echo "\" class=\"uannes-row-img main-img\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 264);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 264);
                    echo "\"/>
\t\t\t\t\t\t\t";
                    // line 265
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 265)) {
                        // line 266
                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 266);
                        echo "\" class=\"uannes-row-img hover-img\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 266);
                        echo " Hover\"/>
\t\t\t\t\t\t\t";
                    }
                    // line 268
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uannes-row-info\">
\t\t\t\t\t\t\t<span class=\"uannes-row-name\">";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 270);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 271
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 271)) {
                        // line 272
                        echo "\t\t\t\t\t\t\t\t<div class=\"uannes-row-price-box\">
\t\t\t\t\t\t\t\t\t<span class=\"uannes-row-currency\">TRY</span>
\t\t\t\t\t\t\t\t\t<span class=\"uannes-row-price\">";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 274);
                        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 277
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "\t\t\t\t</div>

\t\t\t\t<div class=\"row\" style=\"margin-top: 40px;\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
                // line 283
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 286
            echo "
\t\t\t";
            // line 287
            if ( !($context["products"] ?? null)) {
                // line 288
                echo "\t\t\t\t<p>";
                echo ($context["text_empty"] ?? null);
                echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a href=\"";
                // line 291
                echo ($context["continue"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 295
            echo "\t\t\t";
        }
        // line 296
        echo "
\t\t\t";
        // line 297
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 299
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 309
        echo "
";
        // line 310
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(){
  ";
        // line 324
        echo "
  \$('#grid-view-4').click(function() {
    \$('#product-list .product-layout').attr('class', 'product-layout col-lg-3 col-md-4 col-sm-6 col-xs-6');
    \$('#grid-view-4').addClass('active');
    \$('#grid-view-6').removeClass('active');
    localStorage.setItem('display', 'grid-4');
  });

  \$('#grid-view-6').click(function() {
    \$('#product-list .product-layout').attr('class', 'product-layout col-lg-2 col-md-3 col-sm-4 col-xs-6');
    \$('#grid-view-6').addClass('active');
    \$('#grid-view-4').removeClass('active');
    localStorage.setItem('display', 'grid-6');
  });

  var display = localStorage.getItem('display');
  if (display == 'grid-6') {
    \$('#grid-view-6').trigger('click');
  } else {
    \$('#grid-view-4').addClass('active');
  }
});

\$(document).on('mouseleave', '.giyim-product-media', function() {
  var \$media = \$(this);
  \$media.removeClass('show-2');
  \$media.find('.giyim-swatch').removeClass('active').eq(0).addClass('active');
});

function toggleGiyimProductImg(el, target) {
  var \$media = \$(el).closest('.giyim-product-media');
  var \$swatches = \$media.find('.giyim-swatch');
  
  var isShowingSecond = \$media.hasClass('show-2');

  if (target === 'next' || target === 'prev') {
    if (isShowingSecond) {
      \$media.removeClass('show-2');
      \$swatches.removeClass('active').eq(0).addClass('active');
    } else {
      \$media.addClass('show-2');
      \$swatches.removeClass('active').eq(1).addClass('active');
    }
  } else if (target === 0) {
    \$media.removeClass('show-2');
    \$swatches.removeClass('active').eq(0).addClass('active');
  } else if (target === 1) {
    \$media.addClass('show-2');
    \$swatches.removeClass('active').eq(1).addClass('active');
  }
}
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/product/category.twig";
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
        return array (  478 => 324,  471 => 310,  468 => 309,  462 => 299,  457 => 297,  454 => 296,  451 => 295,  442 => 291,  435 => 288,  433 => 287,  430 => 286,  424 => 283,  419 => 280,  411 => 277,  405 => 274,  401 => 272,  399 => 271,  395 => 270,  391 => 268,  383 => 266,  381 => 265,  372 => 264,  370 => 263,  364 => 261,  360 => 260,  357 => 259,  355 => 258,  347 => 253,  341 => 249,  332 => 246,  325 => 244,  319 => 242,  315 => 241,  308 => 238,  302 => 236,  300 => 235,  296 => 233,  294 => 232,  287 => 230,  284 => 229,  281 => 228,  278 => 227,  275 => 226,  272 => 225,  269 => 224,  266 => 223,  264 => 222,  260 => 221,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\product\\category.twig");
    }
}
