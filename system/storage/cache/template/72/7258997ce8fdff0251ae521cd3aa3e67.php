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


</style>
";
        // line 148
        echo ($context["header"] ?? null);
        echo "
";
        // line 149
        if (twig_in_filter(($context["information_id"] ?? null), [8, 11, 12, 13])) {
            // line 150
            echo "<div id=\"information-information\" class=\"container\">
</div>
";
        } else {
            // line 153
            echo "<div id=\"information-information\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 156
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 156);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 156);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "  </ul>
  <div class=\"row\">";
            // line 159
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 160
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 161
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 162
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 163
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 164
                echo "    ";
            } else {
                // line 165
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 166
                echo "    ";
            }
            // line 167
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">";
            echo ($context["content_top"] ?? null);
            echo "
      <h1>";
            // line 168
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
            // line 169
            echo ($context["description"] ?? null);
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 170
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 173
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
        return array (  265 => 173,  259 => 170,  254 => 169,  250 => 168,  243 => 167,  240 => 166,  237 => 165,  234 => 164,  231 => 163,  228 => 162,  225 => 161,  223 => 160,  219 => 159,  216 => 158,  205 => 156,  201 => 155,  197 => 153,  192 => 150,  190 => 149,  186 => 148,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\information.twig");
    }
}
