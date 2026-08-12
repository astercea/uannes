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

/* default/template/account/return_form.twig */
class __TwigTemplate_1c72d975094d27491748f432603e43ef extends Template
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
<div id=\"account-return\" class=\"container return-page return-page--form\">
  <ul class=\"breadcrumb return-breadcrumb\">
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

  ";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "  <div class=\"alert alert-danger alert-dismissible return-alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 12
        echo "
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <section class=\"return-hero return-hero--title-only\">
        <h1>İADE TALEBİ OLUŞTURUN</h1>
      </section>

      <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"return-form\">
        <section class=\"return-panel\">
          <div class=\"return-panel__head\">
            <span class=\"return-panel__icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <div>
              <h2>";
        // line 32
        echo ($context["text_order"] ?? null);
        echo "</h2>
              <p>Sipariş ve iletişim bilgilerinizi eksiksiz girin.</p>
            </div>
          </div>

          <div class=\"return-grid\">
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 39
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-firstname\" class=\"form-control\" />
              <label for=\"input-firstname\">";
        // line 40
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              ";
        // line 41
        if (($context["error_firstname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>";
        }
        // line 42
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 44
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-lastname\" class=\"form-control\" />
              <label for=\"input-lastname\">";
        // line 45
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              ";
        // line 46
        if (($context["error_lastname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>";
        }
        // line 47
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 49
        echo ($context["email"] ?? null);
        echo "\" placeholder=\" \" id=\"input-email\" class=\"form-control\" />
              <label for=\"input-email\">";
        // line 50
        echo ($context["entry_email"] ?? null);
        echo "</label>
              ";
        // line 51
        if (($context["error_email"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>";
        }
        // line 52
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 54
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\" \" id=\"input-telephone\" class=\"form-control\" />
              <label for=\"input-telephone\">";
        // line 55
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
              ";
        // line 56
        if (($context["error_telephone"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>";
        }
        // line 57
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 59
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\" \" id=\"input-order-id\" class=\"form-control\" />
              <label for=\"input-order-id\">";
        // line 60
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              ";
        // line 61
        if (($context["error_order_id"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>";
        }
        // line 62
        echo "            </div>
            <div class=\"return-field return-float\">
              <div class=\"input-group date return-date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 65
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\" \" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <label for=\"input-date-ordered\">";
        // line 66
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\" aria-label=\"";
        // line 68
        echo ($context["entry_date_ordered"] ?? null);
        echo "\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
          </div>
        </section>

        <section class=\"return-panel\">
          <div class=\"return-panel__head\">
            <span class=\"return-panel__icon\"><i class=\"fa fa-tag\"></i></span>
            <div>
              <h2>";
        // line 79
        echo ($context["text_product"] ?? null);
        echo "</h2>
              <p>Ürünü, iade nedenini ve ek detayları belirtin.</p>
            </div>
          </div>

          <div class=\"return-grid\">
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 86
        echo ($context["product"] ?? null);
        echo "\" placeholder=\" \" id=\"input-product\" class=\"form-control\" />
              <label for=\"input-product\">";
        // line 87
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 88
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 89
        if (($context["error_product"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>";
        }
        // line 90
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 92
        echo ($context["model"] ?? null);
        echo "\" placeholder=\" \" id=\"input-model\" class=\"form-control\" />
              <label for=\"input-model\">";
        // line 93
        echo ($context["entry_model"] ?? null);
        echo "</label>
              ";
        // line 94
        if (($context["error_model"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>";
        }
        // line 95
        echo "            </div>
            <div class=\"return-field return-float\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 97
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\" \" id=\"input-quantity\" class=\"form-control\" />
              <label for=\"input-quantity\">";
        // line 98
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            </div>
            <div class=\"return-field required return-field--wide\">
              <label>";
        // line 101
        echo ($context["entry_reason"] ?? null);
        echo "</label>
              <div class=\"return-choice-grid\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 104
            echo "                ";
            $context["reason_name"] = twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 104);
            // line 105
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 105) == "Dead On Arrival")) {
                // line 106
                echo "                ";
                $context["reason_name"] = "Ürün çalışmıyor";
                // line 107
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 107) == "Faulty, please supply details")) {
                // line 108
                echo "                ";
                $context["reason_name"] = "Arızalı, lütfen detay belirtin";
                // line 109
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 109) == "Order Error")) {
                // line 110
                echo "                ";
                $context["reason_name"] = "Sipariş hatası";
                // line 111
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 111) == "Other, please supply details")) {
                // line 112
                echo "                ";
                $context["reason_name"] = "Diğer, lütfen detay belirtin";
                // line 113
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 113) == "Received Wrong Item")) {
                // line 114
                echo "                ";
                $context["reason_name"] = "Yanlış ürün gönderildi";
                // line 115
                echo "                ";
            }
            // line 116
            echo "                <label class=\"return-choice\">
                  ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 117) == ($context["return_reason_id"] ?? null))) {
                // line 118
                echo "                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 118);
                echo "\" checked=\"checked\" />
                  ";
            } else {
                // line 120
                echo "                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 120);
                echo "\" />
                  ";
            }
            // line 122
            echo "                  <span>";
            echo ($context["reason_name"] ?? null);
            echo "</span>
                </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "              </div>
              ";
        // line 126
        if (($context["error_reason"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>";
        }
        // line 127
        echo "            </div>
            <div class=\"return-field required return-field--wide\">
              <label>";
        // line 129
        echo ($context["entry_opened"] ?? null);
        echo "</label>
              <div class=\"return-inline-choice\">
                <label class=\"return-choice return-choice--inline\">
                  ";
        // line 132
        if (($context["opened"] ?? null)) {
            // line 133
            echo "                  <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                  ";
        } else {
            // line 135
            echo "                  <input type=\"radio\" name=\"opened\" value=\"1\" />
                  ";
        }
        // line 137
        echo "                  <span>";
        echo ($context["text_yes"] ?? null);
        echo "</span>
                </label>
                <label class=\"return-choice return-choice--inline\">
                  ";
        // line 140
        if ( !($context["opened"] ?? null)) {
            // line 141
            echo "                  <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                  ";
        } else {
            // line 143
            echo "                  <input type=\"radio\" name=\"opened\" value=\"0\" />
                  ";
        }
        // line 145
        echo "                  <span>";
        echo ($context["text_no"] ?? null);
        echo "</span>
                </label>
              </div>
            </div>
            <div class=\"return-field return-float return-field--wide\">
              <textarea name=\"comment\" rows=\"7\" placeholder=\" \" id=\"input-comment\" class=\"form-control\">";
        // line 150
        echo ($context["comment"] ?? null);
        echo "</textarea>
              <label for=\"input-comment\">";
        // line 151
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            </div>
            <div class=\"return-field return-field--wide\">
              ";
        // line 154
        echo ($context["captcha"] ?? null);
        echo "
            </div>
          </div>
        </section>

        <div class=\"return-actions\">
          <a href=\"";
        // line 160
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default return-back-btn\"><i class=\"fa fa-angle-left\"></i><span>";
        echo ($context["button_back"] ?? null);
        echo "</span></a>
          <div class=\"return-actions__submit\">
            ";
        // line 162
        if (($context["text_agree"] ?? null)) {
            // line 163
            echo "            <label class=\"return-agree\">
              ";
            // line 164
            if (($context["agree"] ?? null)) {
                // line 165
                echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
              ";
            } else {
                // line 167
                echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\" />
              ";
            }
            // line 169
            echo "              <span>";
            echo ($context["text_agree"] ?? null);
            echo "</span>
            </label>
            ";
        }
        // line 172
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 176
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 177
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 181
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
";
        // line 185
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/return_form.twig";
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
        return array (  503 => 185,  496 => 181,  489 => 177,  485 => 176,  477 => 172,  470 => 169,  466 => 167,  462 => 165,  460 => 164,  457 => 163,  455 => 162,  448 => 160,  439 => 154,  433 => 151,  429 => 150,  420 => 145,  416 => 143,  412 => 141,  410 => 140,  403 => 137,  399 => 135,  395 => 133,  393 => 132,  387 => 129,  383 => 127,  377 => 126,  374 => 125,  364 => 122,  358 => 120,  352 => 118,  350 => 117,  347 => 116,  344 => 115,  341 => 114,  338 => 113,  335 => 112,  332 => 111,  329 => 110,  326 => 109,  323 => 108,  320 => 107,  317 => 106,  314 => 105,  311 => 104,  307 => 103,  302 => 101,  296 => 98,  292 => 97,  288 => 95,  282 => 94,  278 => 93,  274 => 92,  270 => 90,  264 => 89,  260 => 88,  256 => 87,  252 => 86,  242 => 79,  228 => 68,  223 => 66,  219 => 65,  214 => 62,  208 => 61,  204 => 60,  200 => 59,  196 => 57,  190 => 56,  186 => 55,  182 => 54,  178 => 52,  172 => 51,  168 => 50,  164 => 49,  160 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 42,  136 => 41,  132 => 40,  128 => 39,  118 => 32,  110 => 27,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  77 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_form.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\return_form.twig");
    }
}
