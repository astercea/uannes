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

/* default/template/common/header.twig */
class __TwigTemplate_0b58743317210b5427240baa93dd9c9a extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "
<script src=\"catalog/view/javascript/jquery/jquery-3.7.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 30);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 30);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<link href=\"catalog/view/theme/default/stylesheet/style_v2.css?v=194\" rel=\"stylesheet\">
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<script src=\"catalog/view/javascript/common.js?v=20260810-cart-notice\" type=\"text/javascript\"></script>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 38);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script>
document.addEventListener('click', function(e) {
  var modal = document.querySelector('.modal.in, .modal.show');
  if (!modal) return;
  var content = modal.querySelector('.modal-content');
  if (content && !content.contains(e.target)) {
    \$(modal).modal('hide');
  }
});
</script>
<style>
/* === MOVED FROM HEADER.TWIG === */

  .modal { z-index: 10600; top: 80px; bottom: 0; height: auto; padding-top: 0; }
  .modal.in, .modal.show { display: flex; align-items: center; justify-content: center; }
  .modal-dialog { margin: 0 auto; max-width: 800px; width: 90%; min-height: auto; transform: translateY(0); }
  .modal-content { max-height: 75vh; overflow-y: auto; }

  /* Modal Ãst BaÅlÄ±k (Modal Header Title) */
  .modal-title,
  #modal-agree .modal-title,
  #modal-agree .modal-header h4 {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 24px;
    font-weight: 400;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #1a1a50;
  }

  /* Modal GÃ¶vdesindeki Ä°lk BaÅlÄ±ÄÄ± ve Breadcrumb'Ä± Gizle */
  .modal-body .breadcrumb,
  .modal-body > h1:first-child,
  .modal-body #content > h1:first-child,
  .modal-body h1:first-of-type,
  .kvkk-cookies-container h1 {
    display: none;
  }

  /* Metin Ä°Ã§indeki Kalan BaÅlÄ±klar (BÃ¼yÃ¼tÃ¼lmÃ¼Å ve Tam Boyut Rakamlar) */
  .modal-body h2,
  .modal-body h3,
  .modal-body h4,
  .modal-body h5,
  .modal-body h6,
  #modal-agree .modal-body h2,
  #modal-agree .modal-body h3,
  #modal-agree .modal-body h4,
  #modal-agree .modal-body h5,
  #modal-agree .modal-body h6,
  .kvkk-cookies-container h2,
  .kvkk-cookies-container h3,
  .kvkk-cookies-container h4 {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #1a1a50;
    margin-top: 1.6rem;
    margin-bottom: 0.6rem;
    text-align: left;
    font-variant-numeric: lining-nums;
    font-feature-settings: \"lnum\" 1, \"tnum\" 1;
  }

  /* Metin Ä°Ã§indeki BaÅlÄ±k Olmayan DÃ¼z YazÄ±lar (DM Sans, 13.5px, #1a1a50) */
  .modal-body,
  .modal-body p,
  .modal-body div:not(.row):not([class*=\"col-\"]),
  .modal-body span,
  .modal-body td,
  .modal-body th,
  .kvkk-cookies-container p,
  .kvkk-cookies-container div {
    font-family: 'DM Sans', sans-serif;
    font-size: 13.5px;
    font-weight: 400;
    color: #1a1a50;
    text-transform: none;
    letter-spacing: normal;
    line-height: 1.65;
    text-align: left;
  }

  /* DÃ¼zen & SÃ¼tun SÄ±fÄ±rlama (Maddelerin saÄa kaymasÄ±nÄ± Ã¶nleme) */
  .modal-body .row,
  .modal-body [class*=\"col-\"] {
    display: block;
    width: 100%;
    float: none;
    margin: 0;
    padding: 0;
  }

  /* Alt Alta SÄ±ralanan Maddeler (Listeler) - Sol tarafa hizalÄ± */
  .modal-body ul,
  .modal-body ol {
    display: block;
    width: 100%;
    float: none;
    clear: both;
    margin: 12px 0 16px 0;
    padding-left: 20px;
    text-align: left;
    list-style: disc outside;
  }

  .modal-body li {
    display: list-item;
    width: 100%;
    float: none;
    clear: both;
    text-align: left;
    margin-bottom: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13.5px;
    font-weight: 400;
    color: #1a1a50;
    text-transform: none;
    letter-spacing: normal;
    line-height: 1.6;
  }
/* Kesin Header Sabitleme (Scroll sorunu iin) - Sticky ile doYal akY */
html, body {
  overflow-x: clip;
}
#header-area {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10500;
  background-color: #f8f6f2;
  box-shadow: none;
  border: none;
  border-bottom: none;
  transition: background-color 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

#header-area::before,
#header-area::after,
#header-area * {
  box-shadow: none;
}

/* Diğer Tüm Sayfalarda Header sayfanın en üstünde başlar (Krem #f8f6f2), scroll edildikçe ekranla birlikte gelir (sticky) */
body:not(.is-homepage):not(.is-product-page) #header-area,
body:not(.is-homepage):not(.is-product-page) #header-area.is-scrolled {
  position: sticky;
  top: 0;
  z-index: 10500;
  background-color: #f8f6f2;
  box-shadow: none;
  border: none;
  transition: none;
}

body {
  background-color: #f8f6f2;
}

/* Ana Sayfada (body.is-homepage) Header sabit süzülen katmandır (fixed) */
body.is-homepage #header-area {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10500;
  background-color: rgba(248, 246, 242, 0);
  box-shadow: none;
  border: none;
  transition: background-color 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

body.is-homepage #header-area.is-scrolled {
  background-color: #f8f6f2;
  box-shadow: none;
  border: none;
  transition: background-color 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

body.header-search-open #header-area,
body.mega-menu-open #header-area {
  background-color: #f8f6f2;
  box-shadow: none;
  border: none;
  border-bottom: none;
}

/* Arama Paneli Zorunlu YÃ¼kseklik (Uzatma) */
.header-search-overlay {
  height: 35vh;
  min-height: 280px;
  padding-top: 5vh;
  justify-content: center;
  z-index: 10400;
  top: var(--header-height, 85px);
  background-color: #f8f6f2;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none; /* default, JS ile aÃ§Ä±lÄ±nca block olacak */
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px; 
  text-align: left;
  background-color: rgba(26, 26, 80, 0.75); 
  border: 1px solid rgba(255, 255, 255, 0.2); 
  border-radius: 4px;
  box-shadow: 0 6px 12px rgba(0,0,0,0.175);
  background-clip: padding-box;
}

.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}

.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: rgba(255,255,255,0.2);
}

.dropdown-menu > li > a {
  display: block;
  padding: 5px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143; 
  color: #fff;
  white-space: nowrap;
  text-decoration: none;
}

.dropdown-menu > li > a:hover {
  background-color: rgba(255,255,255,0.1); 
  color: #fff;
}

button.btn.p-0.border-0.bg-transparent.dropdown-toggle {
    background: none;
    border: none;
    box-shadow: none;
}

/* Ürün sayfasında galeri ilk ekranda header'ın arkasından görünür. */
body.is-product-page #header-area {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10500;
  background-color: rgba(248, 246, 242, 0);
  box-shadow: none;
  border: none;
  transition: background-color 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

body.is-product-page #header-area.is-scrolled {
  background-color: #f8f6f2;
  box-shadow: none;
  border: none;
}

</style>
</head>
";
        // line 319
        $context["body_classes"] = ($context["class"] ?? null);
        // line 320
        if (((($context["route"] ?? null) == "common/home") || (($context["route"] ?? null) == ""))) {
            // line 321
            echo "  ";
            $context["body_classes"] = (($context["body_classes"] ?? null) . " is-homepage");
        } else {
            // line 323
            echo "  ";
            $context["body_classes"] = (($context["body_classes"] ?? null) . " not-homepage");
        }
        // line 325
        if ((($context["route"] ?? null) == "product/product")) {
            // line 326
            echo "  ";
            $context["body_classes"] = (($context["body_classes"] ?? null) . " is-product-page");
        }
        // line 328
        if ((array_key_exists("landing_code", $context) && (($context["landing_code"] ?? null) == "made_to_order"))) {
            // line 329
            echo "  ";
            $context["body_classes"] = (($context["body_classes"] ?? null) . " is-made-to-order-page");
        }
        // line 331
        echo "<body class=\"";
        echo ($context["body_classes"] ?? null);
        if (($context["is_checkout"] ?? null)) {
            echo " checkout-mode";
        }
        echo "\">
<header id=\"header-area\">
  <div class=\"container\">
    <div class=\"header-inner\">
      
      <!-- Sol: Menü Bağlantıları (Eşarp, Giyim, Tüm Ürünler) -->
      <div class=\"header-left\">
        <button type=\"button\" id=\"mobile-menu-toggle\" class=\"mobile-menu-toggle\" aria-label=\"Menüyü aç\" aria-expanded=\"false\" aria-controls=\"mobile-navigation\">
          <span></span><span></span><span></span>
        </button>
        <a href=\"index.php?route=product/esarp\" class=\"header-nav-link\">
          <span>Eşarp</span>
        </a>
        <a href=\"index.php?route=product/giyim\" class=\"header-nav-link\">
          <span>Giyim</span>
        </a>
        <a href=\"index.php?route=product/tum_urunler\" class=\"header-nav-link\">
          <span>Tüm Ürünler</span>
        </a>
      </div>

      <!-- Orta: Logo + arama paneli -->
      <div id=\"logo\" class=\"header-center\">
        ";
        // line 354
        if (($context["logo"] ?? null)) {
            // line 355
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"header-logo-link\">
            <img src=\"";
            // line 356
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid header-logo-img\">
          </a>
        ";
        } else {
            // line 359
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 361
        echo "      </div>

      <!-- Sağ: Arama, Giriş Yap, Sepet -->
      <div class=\"header-right\">
        <button type=\"button\" id=\"search-toggle\" class=\"header-nav-link\" aria-label=\"Ara\">
          <span>Ara</span>
        </button>

        ";
        // line 369
        if (($context["logged"] ?? null)) {
            // line 370
            echo "          <div class=\"header-account-menu\">
            <button type=\"button\" class=\"header-nav-link header-account-toggle\" aria-expanded=\"false\" aria-haspopup=\"true\" aria-controls=\"account-dropdown\">
              <span>Hesabım</span>
            </button>
            <div id=\"account-dropdown\" class=\"account-dropdown\" aria-hidden=\"true\" hidden>
              <div class=\"account-dropdown__intro\">
                Merhaba";
            // line 376
            if (($context["customer_name"] ?? null)) {
                echo ", ";
                echo ($context["customer_name"] ?? null);
            }
            // line 377
            echo "              </div>
              <div class=\"account-dropdown__links\">
                <a href=\"";
            // line 379
            echo ($context["account_edit"] ?? null);
            echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>Bilgilerim</a>
                <a href=\"";
            // line 380
            echo ($context["account_password"] ?? null);
            echo "\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>Şifre</a>
                <a href=\"";
            // line 381
            echo ($context["account_address"] ?? null);
            echo "\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Adreslerim</a>
                <a href=\"";
            // line 382
            echo ($context["order"] ?? null);
            echo "\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>Siparişlerim</a>
                <a href=\"";
            // line 383
            echo ($context["account_newsletter"] ?? null);
            echo "\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>Bülten aboneliği</a>
              </div>
              <div class=\"account-dropdown__footer\">
                <a href=\"";
            // line 386
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Oturumu kapat</a>
              </div>
            </div>
          </div>
        ";
        } else {
            // line 391
            echo "          <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"header-nav-link\">
            <span>Giriş Yap</span>
          </a>
        ";
        }
        // line 395
        echo "
        <div class=\"header-cart\">";
        // line 396
        echo ($context["cart"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</header>

<style>
/* Account navigation */
#header-area .header-account-menu {
  position: relative;
}

#header-area .header-account-toggle {
  gap: 6px;
}

#header-area .account-dropdown {
  position: absolute;
  top: calc(100% + 12px);
  right: 0;
  z-index: 10600;
  width: 282px;
  padding: 8px;
  background: #fdfbf7;
  border: 1px solid rgba(26, 26, 80, 0.22);
  border-radius: 0;
  box-shadow: 0 12px 24px rgba(26, 26, 80, 0.12);
  opacity: 0;
  visibility: hidden;
  transform: translateY(-6px);
  transform-origin: top right;
  transition: opacity 0.18s ease, transform 0.18s ease, visibility 0.18s ease;
}

#header-area .account-dropdown[hidden] {
  display: none !important;
}

#header-area .header-account-menu.is-open .account-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

#header-area .account-dropdown__links {
  padding: 7px 0;
}

#header-area .account-dropdown__intro {
  padding: 12px;
  border-bottom: 1px solid rgba(26, 26, 80, 0.18);
  color: #1a1a50;
  font-family: 'DM Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 400;
}

#header-area .account-dropdown__links a,
#header-area .account-dropdown__footer a {
  display: flex;
  align-items: center;
  gap: 11px;
  padding: 10px 12px;
  border-radius: 0;
  color: #1a1a50;
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  text-decoration: none;
  transition: background-color 0.18s ease, color 0.18s ease;
}

#header-area .account-dropdown__links a:hover,
#header-area .account-dropdown__links a:focus {
  background: #ece8df;
  color: #1a1a50;
}

#header-area .account-dropdown__links i,
#header-area .account-dropdown__footer i {
  width: 14px;
  color: #1a1a50;
  text-align: center;
}

#header-area .account-dropdown__footer {
  padding-top: 7px;
  border-top: 1px solid rgba(26, 26, 80, 0.18);
}

#header-area .account-dropdown__footer a,
#header-area .account-dropdown__footer i {
  color: #b13a3a;
}

#header-area .account-dropdown__footer a:hover,
#header-area .account-dropdown__footer a:focus {
  background: #f1e5df;
}

/* Kept next to the header so cached theme styles cannot move the mobile logo. */
@media (max-width: 768px) {
  #header-area {
    height: 68px !important;
    min-height: 68px !important;
    padding: 8px 0 !important;
  }

  #header-area > .container {
    display: flex !important;
    align-items: center !important;
    height: 52px !important;
    padding-right: 12px !important;
    padding-left: 12px !important;
  }

  #header-area .header-inner {
    position: relative !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    width: 100% !important;
    height: 52px !important;
    min-height: 52px !important;
  }

  #header-area .header-center {
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    z-index: 0 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: max-content !important;
    max-width: 38vw !important;
    margin: 0 !important;
    transform: translate(-50%, -50%) !important;
  }

  #header-area .header-left,
  #header-area .header-right {
    position: relative !important;
    z-index: 1 !important;
    align-items: center !important;
    height: 52px !important;
  }

  #header-area .header-right { margin-left: auto !important; }
  #header-area .header-right {
    display: flex !important;
    flex: 0 0 auto !important;
    gap: 0 !important;
  }
  #header-area .header-right .header-nav-link,
  #header-area .header-cart #cart > .header-nav-link.cart-text-btn {
    width: 34px !important;
    min-width: 34px !important;
    height: 36px !important;
    min-height: 36px !important;
  }
  #header-area #search-toggle::before,
  #header-area .header-account-toggle::before,
  #header-area .header-cart #cart-toggle::before {
    font-size: 15px !important;
  }
  #header-area .header-logo-link { display: inline-flex !important; align-items: center !important; justify-content: center !important; }
  #header-area .header-logo-img { display: block !important; width: auto !important; max-width: min(30vw, 118px) !important; max-height: 40px !important; }

  #header-area .account-dropdown {
    position: fixed;
    top: 62px;
    right: 12px;
    width: min(300px, calc(100vw - 24px));
  }

  #header-area .header-account-toggle::before {
    content: '\\f2bd';
    font-family: 'FontAwesome';
    font-size: 16px;
    line-height: 1;
  }

  #mobile-navigation .mobile-navigation__panel > a {
    padding: 20px 0 !important;
    font-size: 18px !important;
    line-height: 1.35 !important;
  }

  #mobile-navigation .mobile-navigation__header {
    font-size: 17px !important;
  }

  #mobile-navigation .mobile-navigation__close {
    font-size: 30px !important;
  }
}

@media (max-width: 380px) {
  #header-area .header-logo-img { max-width: 29vw !important; }
}
</style>

<aside id=\"mobile-navigation\" class=\"mobile-navigation\" aria-hidden=\"true\">
  <div class=\"mobile-navigation__backdrop\" data-mobile-menu-close></div>
  <nav class=\"mobile-navigation__panel\" aria-label=\"Mobil menü\">
    <div class=\"mobile-navigation__header\" style=\"font-size: 17px !important;\">
      <span>Menü</span>
      <button type=\"button\" class=\"mobile-navigation__close\" style=\"font-size: 30px !important;\" aria-label=\"Menüyü kapat\" data-mobile-menu-close>&times;</button>
    </div>
    <a href=\"index.php?route=product/esarp\" style=\"font-size: 18px !important;\">Eşarp</a>
    <a href=\"index.php?route=product/category&path=67\" style=\"font-size: 18px !important;\">Giyim</a>
    <a href=\"index.php?route=product/tum_urunler\" style=\"font-size: 18px !important;\">Tüm Ürünler</a>
  </nav>
</aside>

<div id=\"header-search-overlay\" class=\"header-search-overlay\" aria-hidden=\"true\">
  <button type=\"button\" id=\"search-close\" class=\"header-search-close\" aria-label=\"Kapat\">
    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
  </button>
  
  <div id=\"search\" class=\"mega-search-wrapper\" style=\"width: 100%; max-width: 400px; text-align: left; padding: 0 20px;\">
    <div class=\"mega-search-form\" style=\"display: flex; align-items: center; border-bottom: 1px solid #1a1a50; margin-bottom: 25px; width: 100%;\">
      <button type=\"button\" class=\"search-icon-btn\" style=\"margin-right: 12px; color: #1a1a50; background: transparent; border: none; cursor: pointer; padding: 5px 0; display: flex; align-items: center;\">
         <svg width=\"22\" height=\"22\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>
      </button>
      <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search...\" class=\"mega-search-input\" autocomplete=\"off\" style=\"flex: 1; border: none; background: transparent; padding: 8px 0; font-family: 'Cormorant Garamond', 'Georgia', serif; font-size: 18px; font-weight: 400; letter-spacing: 0.05em; color: #1a1a50; outline: none; box-shadow: none;\" />
    </div>
    
    <div class=\"mega-search-links\" style=\"display: flex; flex-direction: column; gap: 10px; padding-left: 0;\">
      <a href=\"index.php?route=product/search&search=Yenidoğan\" style=\"font-family: 'DM Sans', sans-serif; font-size: 13px; color: #555; text-decoration: none;\">Yenidoğan Bebek</a>
      <a href=\"index.php?route=product/search&search=Kız+Bebek\" style=\"font-family: 'DM Sans', sans-serif; font-size: 13px; color: #555; text-decoration: none;\">Kız Bebek Koleksiyonu</a>
      <a href=\"index.php?route=product/search&search=Erkek+Bebek\" style=\"font-family: 'DM Sans', sans-serif; font-size: 13px; color: #555; text-decoration: none;\">Erkek Bebek Koleksiyonu</a>
      <a href=\"index.php?route=product/search&search=Aksesuarlar\" style=\"font-family: 'DM Sans', sans-serif; font-size: 13px; color: #555; text-decoration: none;\">Aksesuarlar</a>
    </div>
  </div>
</div>
<div id=\"header-search-backdrop\" class=\"header-search-backdrop\" aria-hidden=\"true\"></div>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const headerArea = document.getElementById('header-area');
  const megaMenu = document.getElementById('mega-menu');
  const openBtn = document.getElementById('menu-toggle');
  const closeBtn = megaMenu ? megaMenu.querySelector('.mega-menu__close') : null;
  const overlay = document.getElementById('menuOverlay');
  const searchBtn = document.getElementById('search-toggle');
  const searchOverlay = document.getElementById('header-search-overlay');
  const searchBackdrop = document.getElementById('header-search-backdrop');
  const searchClose = document.getElementById('search-close');
  const searchInput = searchOverlay ? searchOverlay.querySelector('input[name=\"search\"]') : null;
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const mobileNavigation = document.getElementById('mobile-navigation');
  const accountMenu = document.querySelector('.header-account-menu');
  const accountToggle = document.querySelector('.header-account-toggle');
  const accountDropdown = document.getElementById('account-dropdown');

  function closeAccountMenu() {
    if (!accountMenu || !accountToggle || !accountDropdown) return;
    accountMenu.classList.remove('is-open');
    accountToggle.setAttribute('aria-expanded', 'false');
    accountDropdown.setAttribute('aria-hidden', 'true');
    accountDropdown.hidden = true;
  }

  function openAccountMenu() {
    if (!accountMenu || !accountToggle || !accountDropdown) return;
    accountDropdown.hidden = false;
    accountMenu.classList.add('is-open');
    accountToggle.setAttribute('aria-expanded', 'true');
    accountDropdown.setAttribute('aria-hidden', 'false');
  }

  if (accountMenu && accountToggle && accountDropdown) {
    accountToggle.addEventListener('click', function(event) {
      event.preventDefault();
      event.stopPropagation();

      if (accountMenu.classList.contains('is-open')) {
        closeAccountMenu();
      } else {
        openAccountMenu();
      }
    });

    document.addEventListener('click', function(event) {
      if (!accountMenu.contains(event.target)) closeAccountMenu();
    });

    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        closeAccountMenu();
        accountToggle.focus();
      }
    });

  }

  document.querySelectorAll('.account-page .form-group').forEach(function(group) {
    const control = group.querySelector('.form-control');
    if (!control || control.type === 'hidden') return;

    group.classList.add('form-group--floating');
    control.setAttribute('data-original-placeholder', control.getAttribute('placeholder') || '');
    control.setAttribute('placeholder', '');

    function syncFloatingLabel() {
      const value = typeof control.value === 'string' ? control.value.trim() : '';
      group.classList.toggle('is-filled', value !== '' && value !== '0');
    }

    control.addEventListener('input', syncFloatingLabel);
    control.addEventListener('change', syncFloatingLabel);
    syncFloatingLabel();
    window.setTimeout(syncFloatingLabel, 600);
  });
  
  if (searchInput) {
    searchInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        doMegaSearch();
      }
    });
  }

  const searchIconBtn = document.querySelector('.search-icon-btn');
  if (searchIconBtn) {
    searchIconBtn.addEventListener('click', function(e) {
      e.preventDefault();
      doMegaSearch();
    });
  }





  // Banner Kartları Ekranda İlk Göründüğünde Animasyonun Tetiklenmesi (.is-in-view)
  if ('IntersectionObserver' in window) {
    const bannerObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in-view');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    document.querySelectorAll('.home-banner-stack__item, .tri-grid-item').forEach(item => {
      bannerObserver.observe(item);
    });
  } else {
    document.querySelectorAll('.home-banner-stack__item, .tri-grid-item').forEach(item => {
      item.classList.add('is-in-view');
    });
  }


  // 1. ve 2. Banner Kartlarındaki Butonların Anlık Sticky Scroll Hareketi (Alt sınırdan 20px önce durur)
  function handleBannerButtonScroll() {
    const items = document.querySelectorAll('.home-banner-stack__item');
    items.forEach((item, index) => {
      if (index > 1) return;
      const btn = item.querySelector('.home-banner-stack__btn');
      const media = item.querySelector('.home-banner-stack__media');
      if (!btn || !media) return;

      const mediaRect = media.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // Kart ekranda göründüğü sürece
      if (mediaRect.top < windowHeight && mediaRect.bottom > 0) {
        const mediaHeight = media.offsetHeight;
        const btnTopInitial = btn.offsetTop;
        const btnHeight = btn.offsetHeight;

        // Kartın en altına 20px kala duracağı maksimum offset
        const maxTranslate = Math.max(0, mediaHeight - btnTopInitial - btnHeight - 20);

        // Ekranın üstünden 140px aşağıda sabit süzülme hedefi
        const targetViewportTop = 140;
        const currentBtnViewportTop = mediaRect.top + btnTopInitial;
        
        let translateY = targetViewportTop - currentBtnViewportTop;

        if (translateY < 0) {
          translateY = 0;
        }
        if (translateY > maxTranslate) {
          translateY = maxTranslate;
        }

        btn.style.transform = `translateY(\${translateY}px)`;
        btn.style.transition = 'none';
      } else {
        btn.style.transform = 'translateY(0px)';
      }
    });
  }

  window.addEventListener('scroll', handleBannerButtonScroll, { passive: true });
  window.addEventListener('resize', handleBannerButtonScroll, { passive: true });
  handleBannerButtonScroll();

  function doMegaSearch() {
    var baseElem = document.querySelector('base');
    var url = (baseElem ? baseElem.href : '') + 'index.php?route=product/search';
    if (searchInput && searchInput.value) {
      url += '&search=' + encodeURIComponent(searchInput.value);
    }
    window.location = url;
  }

  function syncHeaderHeight() {
    if (!headerArea) return;
    document.documentElement.style.setProperty('--header-height', headerArea.offsetHeight + 'px');
  }

  syncHeaderHeight();
  window.addEventListener('resize', syncHeaderHeight);
  window.addEventListener('scroll', syncHeaderHeight);


  /* Scroll — header arka plan geçişi */
  function onScroll() {
    if (!headerArea) return;
    if (window.scrollY > 0) {
      headerArea.classList.add('is-scrolled');
    } else {
      headerArea.classList.remove('is-scrolled');
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  function isMenuOpen() {
    return megaMenu && megaMenu.classList.contains('is-open');
  }

  function isAnotherScrollLockActive() {
    const cartSidebar = document.getElementById('cartSidebar');
    const cartOpen = cartSidebar && cartSidebar.classList.contains('open');
    const searchOpen = searchOverlay && searchOverlay.classList.contains('is-open');
    return cartOpen || isMenuOpen() || searchOpen;
  }

  function openMenu() {
    if (!megaMenu || !overlay || !openBtn) return;
    closeSearch();
    syncHeaderHeight();
    megaMenu.classList.add('is-open');
    megaMenu.setAttribute('aria-hidden', 'false');
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    openBtn.classList.add('is-active');
    openBtn.setAttribute('aria-expanded', 'true');
    document.body.classList.add('mega-menu-open');
    // document.body.style.overflow = 'hidden'; // Header'in sticky ozelligi bozulmasin diye iptal
  }

  function closeMenu() {
    if (!megaMenu || !overlay || !openBtn) return;
    megaMenu.classList.remove('is-open');
    megaMenu.setAttribute('aria-hidden', 'true');
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    openBtn.classList.remove('is-active');
    openBtn.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('mega-menu-open');
    if (!isAnotherScrollLockActive()) {
      document.body.style.overflow = '';
    }
  }

  function openSearch() {
    if (!searchOverlay) return;
    closeMenu();
    document.body.classList.add('header-search-open');
    // document.body.style.overflow = 'hidden'; // Header'in sticky ozelligi bozulmasin diye iptal
    if (searchBackdrop) {
      searchBackdrop.classList.add('is-open');
      searchBackdrop.setAttribute('aria-hidden', 'false');
    }
    requestAnimationFrame(function() {
      searchOverlay.classList.add('is-open');
      searchOverlay.setAttribute('aria-hidden', 'false');
    });
    if (searchInput) {
      setTimeout(function() { searchInput.focus(); }, 380);
    }
  }

  function closeSearch() {
    if (!searchOverlay) return;
    searchOverlay.classList.remove('is-open');
    searchOverlay.setAttribute('aria-hidden', 'true');
    if (searchBackdrop) {
      searchBackdrop.classList.remove('is-open');
      searchBackdrop.setAttribute('aria-hidden', 'true');
    }
    document.body.classList.remove('header-search-open');
    if (!isAnotherScrollLockActive()) {
      document.body.style.overflow = '';
    }
  }

  function setMobileMenu(open) {
    if (!mobileNavigation || !mobileMenuToggle) return;
    mobileNavigation.classList.toggle('is-open', open);
    mobileNavigation.setAttribute('aria-hidden', String(!open));
    mobileMenuToggle.classList.toggle('is-active', open);
    mobileMenuToggle.setAttribute('aria-expanded', String(open));
    document.body.classList.toggle('mobile-menu-open', open);
  }

  if (mobileMenuToggle && mobileNavigation) {
    mobileMenuToggle.addEventListener('click', function() {
      const willOpen = !mobileNavigation.classList.contains('is-open');
      if (willOpen) closeSearch();
      setMobileMenu(willOpen);
    });

    mobileNavigation.querySelectorAll('[data-mobile-menu-close], a').forEach(function(element) {
      element.addEventListener('click', function() { setMobileMenu(false); });
    });
  }

  if (openBtn && megaMenu) {
    openBtn.setAttribute('aria-expanded', 'false');
    openBtn.setAttribute('aria-controls', 'mega-menu');
    openBtn.addEventListener('click', function() {
      if (isMenuOpen()) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', closeMenu);
  }

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  if (searchBtn && searchOverlay) {
    searchBtn.addEventListener('click', function() {
      if (searchOverlay.classList.contains('is-open')) {
        closeSearch();
      } else {
        openSearch();
      }
    });
  }

  if (searchClose) {
    searchClose.addEventListener('click', closeSearch);
  }

  if (searchBackdrop) {
    searchBackdrop.addEventListener('click', closeSearch);
  }

  document.addEventListener('keydown', function(e) {
    if (e.key !== 'Escape') return;
    if (isMenuOpen()) {
      closeMenu();
    } else if (mobileNavigation && mobileNavigation.classList.contains('is-open')) {
      setMobileMenu(false);
    } else if (searchOverlay && searchOverlay.classList.contains('is-open')) {
      closeSearch();
    }
  });
});
</script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/header.twig";
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
        return array (  590 => 396,  587 => 395,  579 => 391,  571 => 386,  565 => 383,  561 => 382,  557 => 381,  553 => 380,  549 => 379,  545 => 377,  540 => 376,  532 => 370,  530 => 369,  520 => 361,  512 => 359,  502 => 356,  497 => 355,  495 => 354,  465 => 331,  461 => 329,  459 => 328,  455 => 326,  453 => 325,  449 => 323,  445 => 321,  443 => 320,  441 => 319,  163 => 43,  155 => 41,  151 => 40,  140 => 38,  136 => 37,  133 => 36,  124 => 34,  120 => 33,  117 => 32,  104 => 30,  100 => 29,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\header.twig");
    }
}
