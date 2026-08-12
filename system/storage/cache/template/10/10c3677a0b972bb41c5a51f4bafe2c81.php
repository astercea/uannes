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

/* default/template/information/faq.twig */
class __TwigTemplate_a06a30966cbf9ac7a062ba18b5c3d46a extends Template
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
/* FAQ Sayfası Özel Tasarımı (İletişim Sayfası İle Aynı Standartlar) */
footer { margin-top: 0; }

#content {
  min-height: 0 !important;
}

#information-faq {
  margin-top: 15px;
  margin-bottom: 38px;
}

#information-faq,
#information-faq p {
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  color: #1a1a50;
}

/* Remove default white boxes */
#information-faq .faq-container {
  background: transparent !important;
  box-shadow: none !important;
  padding: 0 !important;
  border: none !important;
}

/* FAQ heading */
#information-faq .faq-title-container h1 {
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-weight: 400;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #1a1a50 !important;
  font-size: 20px !important;
  text-align: center;
  margin-bottom: 55px;
  margin-top: 0;
}

#information-faq .faq-content-container {
  max-width: 600px;
  margin: 0 auto;
}

#information-faq .faq-item {
  border-bottom: 1px solid rgba(26, 26, 80, 0.2) !important;
  padding: 22px 0 !important;
}
#information-faq .faq-item:first-child {
  border-top: none !important;
}

#information-faq .faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

#information-faq .faq-question h2 {
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 400 !important;
  font-size: 13px !important;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #1a1a50 !important;
  margin: 0 !important;
}

#information-faq .toggle-btn {
  background: none;
  border: none;
  color: #1a1a50;
  cursor: pointer;
  transition: transform 0.3s ease;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

#information-faq .faq-question.active .toggle-btn,
#information-faq .faq-question[aria-expanded=\"true\"] .toggle-btn {
  transform: rotate(90deg);
}

#information-faq .faq-answer-inner {
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  color: #1a1a50 !important;
  line-height: 1.8;
  padding-top: 15px;
}
</style>

<div id=\"information-faq\" class=\"container\">
  <div class=\"row\">";
        // line 102
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 103
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 104
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 105
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 106
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 107
            echo "    ";
        } else {
            // line 108
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 109
            echo "    ";
        }
        // line 110
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"faq-main-container\">
        <div class=\"faq-container faq-title-container mt-4\">
          <h1>";
        // line 113
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"faq-container faq-content-container mt-4\">
          ";
        // line 116
        if (($context["faqs"] ?? null)) {
            // line 117
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 118
                echo "            <div class=\"faq-item\" data-faq-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "faq_id", [], "any", false, false, false, 118);
                echo "\">
              <div class=\"faq-question\" role=\"button\" tabindex=\"0\" aria-expanded=\"false\">
                <h2>";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 120);
                echo "</h2>
                <button type=\"button\" class=\"toggle-btn\" aria-label=\"Toggle answer\">
                  <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1 1L5 5.5L1 10\" stroke=\"#1a1a50\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                  </svg>
                </button>
              </div>
              <div class=\"faq-answer\">
                <div class=\"faq-answer-inner\">";
                // line 128
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 128)));
                echo "</div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "          ";
        }
        // line 133
        echo "          
          <div class=\"faq-item\" data-faq-id=\"static-1\">
            <div class=\"faq-question\" role=\"button\" tabindex=\"0\" aria-expanded=\"false\">
              <h2>SİPARİŞİM NE ZAMAN KARGOYA VERİLİR?</h2>
              <button type=\"button\" class=\"toggle-btn\" aria-label=\"Toggle answer\">
                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M1 1L5 5.5L1 10\" stroke=\"#1a1a50\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
              </button>
            </div>
            <div class=\"faq-answer\">
              <div class=\"faq-answer-inner\">Siparişleriniz genellikle 1-3 iş günü içerisinde özenle hazırlanıp kargoya teslim edilmektedir. Kampanya dönemlerinde bu süre 5 iş gününe kadar uzayabilmektedir.</div>
            </div>
          </div>
          
          <div class=\"faq-item\" data-faq-id=\"static-2\">
            <div class=\"faq-question\" role=\"button\" tabindex=\"0\" aria-expanded=\"false\">
              <h2>KARGO ÜCRETİ NE KADAR?</h2>
              <button type=\"button\" class=\"toggle-btn\" aria-label=\"Toggle answer\">
                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M1 1L5 5.5L1 10\" stroke=\"#1a1a50\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
              </button>
            </div>
            <div class=\"faq-answer\">
              <div class=\"faq-answer-inner\">Standart kargo ücretimiz 49 TL'dir. 500 TL ve üzeri siparişlerinizde kargo ücretsizdir.</div>
            </div>
          </div>
          
          <div class=\"faq-item\" data-faq-id=\"static-3\">
            <div class=\"faq-question\" role=\"button\" tabindex=\"0\" aria-expanded=\"false\">
              <h2>İADE VE DEĞİŞİM POLİTİKANIZ NEDİR?</h2>
              <button type=\"button\" class=\"toggle-btn\" aria-label=\"Toggle answer\">
                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M1 1L5 5.5L1 10\" stroke=\"#1a1a50\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
              </button>
            </div>
            <div class=\"faq-answer\">
              <div class=\"faq-answer-inner\">Kullanılmamış ve ambalajı zarar görmemiş ürünleri teslim aldığınız tarihten itibaren 14 gün içerisinde iade edebilir veya değiştirebilirsiniz.</div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 177
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 178
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 180
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/information/faq.twig";
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
        return array (  272 => 180,  267 => 178,  263 => 177,  217 => 133,  214 => 132,  204 => 128,  193 => 120,  187 => 118,  182 => 117,  180 => 116,  174 => 113,  165 => 110,  162 => 109,  159 => 108,  156 => 107,  153 => 106,  150 => 105,  147 => 104,  145 => 103,  141 => 102,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/faq.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\faq.twig");
    }
}
