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

/* default/template/common/success.twig */
class __TwigTemplate_71af115ec7f7919c35f240debb2094a1 extends Template
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
<div id=\"common-success\" class=\"container\">
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

  <div class=\"row\">
    ";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    
    <div id=\"content\" class=\"";
        // line 19
        echo ($context["class"] ?? null);
        echo " text-center\">
      ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"success-icon mb-4\">
        <i style=\"font-size:110px;\" class=\"fa fa-check-circle\"></i>
      </div>

      <h1 class=\"fw-bold mb-3\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p class=\"lead text-muted mb-4\">";
        // line 27
        echo ($context["text_message"] ?? null);
        echo "</p>

      <div class=\"buttons mt-4\">
        <a href=\"";
        // line 30
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary px-5 py-2 rounded-pill fw-semibold\">
          ";
        // line 31
        echo ($context["button_continue"] ?? null);
        echo "
        </a>
      </div>

      ";
        // line 35
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 37
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 40
        echo ($context["footer"] ?? null);
        echo "

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/success.twig";
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
        return array (  135 => 40,  129 => 37,  124 => 35,  117 => 31,  113 => 30,  107 => 27,  103 => 26,  94 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/success.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\success.twig");
    }
}
