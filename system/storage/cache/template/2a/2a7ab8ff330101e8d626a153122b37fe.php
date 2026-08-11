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

/* default/template/account/order_list.twig */
class __TwigTemplate_7334cecf5a1a3c6fcc9b2ce3bbdb86be extends Template
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
<div id=\"account-order\" class=\"container account-page\">

  <style>
    .status-badge {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 600;
      line-height: 1.2;
      min-width: 100px;
      text-align: center;
    }
    .status-pending   { background:#fff4cc; color:#7a5b00; border:1px solid #e6c200; }
    .status-processing{ background:#fff1e6; color:#a65a00; border:1px solid #ffb347; }
    .status-shipped   { background:#dff4ff; color:#004d61; border:1px solid #66c2e3; }
    .status-complete  { background:#e8ffe8; color:#1e7a1e; border:1px solid #51c451; }
    .status-canceled  { background:#ffe5e5; color:#8a0000; border:1px solid #ff5c5c; }
    .status-refunded  { background:#f2e6ff; color:#4b0082; border:1px solid #b980ff; }
    .status-hold      { background:#e0e0e0; color:#333; border:1px solid #ccc; }
    .status-default   { background:#eee; color:#555; border:1px solid #bbb; }
  </style>

  <div class=\"row\">";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 26
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 28
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    <div id=\"content\" class=\"";
        // line 34
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      ";
        // line 37
        if (($context["orders"] ?? null)) {
            // line 38
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 42
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">Görsel</td>
              <td class=\"text-left\">";
            // line 44
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 45
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 46
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 47
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 48
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td>Detay</td>
            </tr>
          </thead>
          <tbody>
          ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 54
                echo "            ";
                $context["status_tr"] = twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 54);
                // line 55
                echo "            ";
                $context["status_class"] = "status-default";
                // line 56
                echo "
            ";
                // line 57
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 57), ["Pending", "Beklemede", "On Hold", "Bekliyor", "Pending Payment", "Pending Verification"])) {
                    // line 58
                    echo "              ";
                    $context["status_tr"] = "Beklemede";
                    // line 59
                    echo "              ";
                    $context["status_class"] = "status-pending";
                    // line 60
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 60), ["Processing", "Processed", "Processing Payment", "İşleniyor", "Hazırlanıyor"])) {
                    // line 61
                    echo "              ";
                    $context["status_tr"] = "İşleniyor";
                    // line 62
                    echo "              ";
                    $context["status_class"] = "status-processing";
                    // line 63
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 63), ["Shipped", "Kargoda", "Gönderildi", "Kargoya Verildi"])) {
                    // line 64
                    echo "              ";
                    $context["status_tr"] = "Kargoya Verildi";
                    // line 65
                    echo "              ";
                    $context["status_class"] = "status-shipped";
                    // line 66
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 66), ["Delivered", "Teslim Edildi"])) {
                    // line 67
                    echo "              ";
                    $context["status_tr"] = "Teslim Edildi";
                    // line 68
                    echo "              ";
                    $context["status_class"] = "status-shipped";
                    // line 69
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 69), ["Completed", "Complete", "Tamamlandı", "Bitti"])) {
                    // line 70
                    echo "              ";
                    $context["status_tr"] = "Tamamlandı";
                    // line 71
                    echo "              ";
                    $context["status_class"] = "status-complete";
                    // line 72
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 72), ["Canceled", "Cancelled", "İptal Edildi", "İptal"])) {
                    // line 73
                    echo "              ";
                    $context["status_tr"] = "İptal Edildi";
                    // line 74
                    echo "              ";
                    $context["status_class"] = "status-canceled";
                    // line 75
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 75), ["Refunded", "İade Edildi", "Returned"])) {
                    // line 76
                    echo "              ";
                    $context["status_tr"] = "İade Edildi";
                    // line 77
                    echo "              ";
                    $context["status_class"] = "status-refunded";
                    // line 78
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 78), ["On Hold", "Hold", "Bekletiliyor"])) {
                    // line 79
                    echo "              ";
                    $context["status_tr"] = "Bekletiliyor";
                    // line 80
                    echo "              ";
                    $context["status_class"] = "status-hold";
                    // line 81
                    echo "            ";
                }
                // line 82
                echo "
            <tr>
              <td class=\"text-left\">#";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 84);
                echo "</td>

              <td class=\"text-center\">
                ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["order"], "thumb", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "thumb", [], "any", false, false, false, 88);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 88);
                    echo "\" class=\"img-thumbnail\" style=\"width:60px; height:60px; object-fit:cover;\">
                ";
                }
                // line 90
                echo "              </td>

              <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 92);
                echo "</td>
              <td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 93);
                echo "</td>

              <td class=\"text-left\">
                <span class=\"status-badge ";
                // line 96
                echo ($context["status_class"] ?? null);
                echo "\">";
                echo ($context["status_tr"] ?? null);
                echo "</span>
              </td>

              <td class=\"text-left\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 99);
                echo "</td>
              <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 100);
                echo "</td>
              <td class=\"text-center\">
                <a href=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 102);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\">
                  <i class=\"fa fa-eye\"></i>
                </a>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "          </tbody>
        </table>
      </div>

      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 113
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 114
            echo ($context["results"] ?? null);
            echo "</div>
      </div>

      ";
        } else {
            // line 118
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>

    ";
        // line 124
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 127
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
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
        return array (  330 => 127,  324 => 124,  318 => 121,  315 => 120,  309 => 118,  302 => 114,  298 => 113,  291 => 108,  277 => 102,  272 => 100,  268 => 99,  260 => 96,  254 => 93,  250 => 92,  246 => 90,  238 => 88,  236 => 87,  230 => 84,  226 => 82,  223 => 81,  220 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  205 => 75,  202 => 74,  199 => 73,  196 => 72,  193 => 71,  190 => 70,  187 => 69,  184 => 68,  181 => 67,  178 => 66,  175 => 65,  172 => 64,  169 => 63,  166 => 62,  163 => 61,  160 => 60,  157 => 59,  154 => 58,  152 => 57,  149 => 56,  146 => 55,  143 => 54,  139 => 53,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  110 => 42,  104 => 38,  102 => 37,  97 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  68 => 26,  64 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_list.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\order_list.twig");
    }
}
