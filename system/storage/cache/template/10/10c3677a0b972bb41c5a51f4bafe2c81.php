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
<div id=\"information-faq\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"faq-main-container\">
        <div class=\"faq-container faq-title-container\">
          <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"faq-container faq-content-container\">
          ";
        // line 22
        if (($context["faqs"] ?? null)) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 24
                echo "            <div class=\"faq-item\" data-faq-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "faq_id", [], "any", false, false, false, 24);
                echo "\">
              <div class=\"faq-question\" role=\"button\" tabindex=\"0\" aria-expanded=\"false\">
                <h2>";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 26);
                echo "</h2>
                <button type=\"button\" class=\"toggle-btn\" aria-label=\"Toggle answer\">+</button>
              </div>
              <div class=\"faq-answer\">
                <div class=\"faq-answer-inner\">";
                // line 30
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 30)));
                echo "</div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
        } else {
            // line 35
            echo "            <p class=\"faq-empty\">";
            echo ((array_key_exists("text_empty", $context)) ? (_twig_default_filter(($context["text_empty"] ?? null), "Henüz soru eklenmemiş.")) : ("Henüz soru eklenmemiş."));
            echo "</p>
          ";
        }
        // line 37
        echo "        </div>
      </div>
      ";
        // line 39
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 40
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 42
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
        return array (  152 => 42,  147 => 40,  143 => 39,  139 => 37,  133 => 35,  130 => 34,  120 => 30,  113 => 26,  107 => 24,  102 => 23,  100 => 22,  94 => 19,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/faq.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\faq.twig");
    }
}
