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

/* default/template/information/information.twig */
class __TwigTemplate_512d5ef94b81afe4b53339265eecac09 extends Template
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
        echo "<style>
  /* ==========================================================================
   MADE TO ORDER PAGE DESIGN (Tam Ekran Hero Kart & Sitemizle Uyumlu LÃ¼ks TasarÄ±m)
   ========================================================================== */

  /* Arka plan krem */
  .content-landing-page--made_to_order,
  #information-landing.content-landing-page--made_to_order,
  body.route-information-information .content-landing-page--made_to_order {
    background-color: #f8f6f2;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin: 0;
  }

  #information-landing.content-landing-page--made_to_order #content,
  #information-landing.content-landing-page--made_to_order .row {
    margin: 0;
    padding: 0;
    width: 100%;
    max-width: 100%;
  }

  /* Made to Order Breadcrumb Gizleme */
  .content-landing-page--made_to_order .breadcrumb {
    display: none;
  }

  .mto-fullwidth-hero__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    border-radius: 0;
  }

  .mto-fullwidth-hero__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0.42) 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 3rem 1.5rem;
    border-radius: 0;
  }

  .mto-fullwidth-hero__title {
    font-family: \"Cormorant Garamond\", Georgia, serif;
    font-size: clamp(2.4rem, 4.5vw, 4.2rem);
    font-weight: 400;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #ffffff;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.45);
    margin: 0 0 1.25rem 0;
  }

  .mto-fullwidth-hero__desc {
    font-family: \"Cormorant Garamond\", Georgia, serif;
    font-size: clamp(1.15rem, 1.8vw, 1.55rem);
    font-weight: 400;
    font-style: italic;
    line-height: 1.7;
    color: #ffffff;
    max-width: 820px;
    text-shadow: 0 2px 14px rgba(0, 0, 0, 0.4);
    margin: 0 0 2rem 0;
  }

  /* Made to Order Alt BÃ¶lÃ¼mleri (Sections / Sitemizle Uyumlu TasarÄ±m) */
  .content-landing-page--made_to_order .content-landing-page__sections {
    max-width: 1200px;
    margin: 5rem auto 6rem auto;
    padding: 0 2rem;
    display: flex;
    flex-direction: column;
    gap: 5.5rem;
  }

  .content-landing-page--made_to_order .content-landing-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
  }

  @media (max-width: 991px) {
    .content-landing-page--made_to_order .content-landing-row {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
  }

  .content-landing-page--made_to_order .content-landing-row__title {
    font-family: \"Cormorant Garamond\", Georgia, serif;
    font-size: clamp(1.75rem, 2.6vw, 2.4rem);
    font-weight: 400;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #1a1a50;
    margin-bottom: 1.25rem;
    position: relative;
    padding-bottom: 0.75rem;
  }

  .content-landing-page--made_to_order .content-landing-row__title::after {
    content: \"\";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 1.5px;
    background: #b8925b;
  }

  .content-landing-page--made_to_order .content-landing-row__desc {
    font-family: \"Cormorant Garamond\", Georgia, serif;
    font-size: clamp(1.1rem, 1.6vw, 1.35rem);
    line-height: 1.8;
    color: #33334d;
  }

  .content-landing-page--made_to_order .content-landing-row__media {
    overflow: hidden;
    border-radius: 0;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
  }

  .content-landing-page--made_to_order .content-landing-row__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 0;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
  }

  .content-landing-page--made_to_order .content-landing-row__media:hover .content-landing-row__img {
    transform: scale(1.04);
  }


  /* ==========================================================================
     UANNES HAKKINDA / ABOUT PAGE (Gucci Style Minimalist Luxury Design)
     ========================================================================== */
  .vannes-about-page {
    background-color: #f8f6f2;
    min-height: calc(100vh - var(--header-height, 80px) - 200px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 110px 24px 150px;
    width: 100%;
  }

  .vannes-about-container {
    max-width: 860px;
    width: 100%;
    margin: 0 auto;
    text-align: center;
  }

  .vannes-about-title {
    font-family: 'DM Sans', sans-serif;
    font-size: clamp(26px, 3.5vw, 36px);
    font-weight: 400;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #1a1a50;
    margin: 0 0 45px 0;
    line-height: 1.25;
    text-align: center;
  }

  .vannes-about-content {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.95;
    color: #1a1a50;
    text-align: center;
  }

  .vannes-about-content p,
  .vannes-about-content div,
  .vannes-about-content span {
    font-family: 'DM Sans', sans-serif !important;
    font-size: 15px !important;
    font-weight: 400 !important;
    line-height: 1.95 !important;
    color: #1a1a50 !important;
    margin-bottom: 28px !important;
    text-align: center !important;
  }

  .vannes-about-content p:last-child {
    margin-bottom: 0 !important;
  }

  @media (max-width: 768px) {
    .vannes-about-page {
      padding: 60px 20px 90px;
      min-height: auto;
    }
    .vannes-about-title {
      margin-bottom: 30px;
      letter-spacing: 0.14em;
    }
    .vannes-about-content p,
    .vannes-about-content div,
    .vannes-about-content span {
      font-size: 14px !important;
      line-height: 1.85 !important;
      margin-bottom: 22px !important;
    }
  }
</style>
";
        // line 222
        echo ($context["header"] ?? null);
        echo "
";
        // line 223
        if ((($context["information_id"] ?? null) == 4)) {
            // line 224
            echo "<div id=\"information-about\" class=\"vannes-about-page\">
  <div class=\"vannes-about-container\">
    ";
            // line 226
            echo ($context["content_top"] ?? null);
            echo "
    <h1 class=\"vannes-about-title\">UANNES HAKKINDA</h1>
    <div class=\"vannes-about-content\">
      ";
            // line 229
            echo ($context["description"] ?? null);
            echo "
    </div>
    ";
            // line 231
            echo ($context["content_bottom"] ?? null);
            echo "
  </div>
</div>
";
        } elseif (twig_in_filter(        // line 234
($context["information_id"] ?? null), [8, 11, 12, 13])) {
            // line 235
            echo "<div id=\"information-information\" class=\"container\">
</div>
";
        } else {
            // line 238
            echo "<div id=\"information-information\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 241
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 241);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 241);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "  </ul>
  <div class=\"row\">";
            // line 244
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 245
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 246
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 247
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 248
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 249
                echo "    ";
            } else {
                // line 250
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 251
                echo "    ";
            }
            // line 252
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">";
            echo ($context["content_top"] ?? null);
            echo "
      <h1>";
            // line 253
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
            // line 254
            echo ($context["description"] ?? null);
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 255
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 258
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/information/information.twig";
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
        return array (  362 => 258,  356 => 255,  351 => 254,  347 => 253,  340 => 252,  337 => 251,  334 => 250,  331 => 249,  328 => 248,  325 => 247,  322 => 246,  320 => 245,  316 => 244,  313 => 243,  302 => 241,  298 => 240,  294 => 238,  289 => 235,  287 => 234,  281 => 231,  276 => 229,  270 => 226,  266 => 224,  264 => 223,  260 => 222,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\information.twig");
    }
}
