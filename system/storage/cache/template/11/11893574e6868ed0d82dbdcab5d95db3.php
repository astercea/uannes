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
      <section class=\"return-hero\">
        <div class=\"return-hero__content\">
          <span class=\"return-eyebrow\">Uannes Care</span>
          <h1>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <p>";
        // line 27
        echo ($context["text_description"] ?? null);
        echo "</p>
        </div>
        <div class=\"return-hero__steps\" aria-label=\"İade süreci\">
          <div class=\"return-step\">
            <span>01</span>
            <strong>Talep</strong>
          </div>
          <div class=\"return-step\">
            <span>02</span>
            <strong>İnceleme</strong>
          </div>
          <div class=\"return-step\">
            <span>03</span>
            <strong>Sonuç</strong>
          </div>
        </div>
      </section>

      <form action=\"";
        // line 45
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"return-form\">
        <section class=\"return-panel\">
          <div class=\"return-panel__head\">
            <span class=\"return-panel__icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <div>
              <h2>";
        // line 50
        echo ($context["text_order"] ?? null);
        echo "</h2>
              <p>Sipariş ve iletişim bilgilerinizi eksiksiz girin.</p>
            </div>
          </div>

          <div class=\"return-grid\">
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 57
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-firstname\" class=\"form-control\" />
              <label for=\"input-firstname\">";
        // line 58
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              ";
        // line 59
        if (($context["error_firstname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>";
        }
        // line 60
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 62
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-lastname\" class=\"form-control\" />
              <label for=\"input-lastname\">";
        // line 63
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              ";
        // line 64
        if (($context["error_lastname"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>";
        }
        // line 65
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 67
        echo ($context["email"] ?? null);
        echo "\" placeholder=\" \" id=\"input-email\" class=\"form-control\" />
              <label for=\"input-email\">";
        // line 68
        echo ($context["entry_email"] ?? null);
        echo "</label>
              ";
        // line 69
        if (($context["error_email"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>";
        }
        // line 70
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 72
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\" \" id=\"input-telephone\" class=\"form-control\" />
              <label for=\"input-telephone\">";
        // line 73
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
              ";
        // line 74
        if (($context["error_telephone"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>";
        }
        // line 75
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 77
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\" \" id=\"input-order-id\" class=\"form-control\" />
              <label for=\"input-order-id\">";
        // line 78
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              ";
        // line 79
        if (($context["error_order_id"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>";
        }
        // line 80
        echo "            </div>
            <div class=\"return-field return-float\">
              <div class=\"input-group date return-date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 83
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\" \" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <label for=\"input-date-ordered\">";
        // line 84
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\" aria-label=\"";
        // line 86
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
        // line 97
        echo ($context["text_product"] ?? null);
        echo "</h2>
              <p>Ürünü, iade nedenini ve ek detayları belirtin.</p>
            </div>
          </div>

          <div class=\"return-grid\">
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 104
        echo ($context["product"] ?? null);
        echo "\" placeholder=\" \" id=\"input-product\" class=\"form-control\" />
              <label for=\"input-product\">";
        // line 105
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 106
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 107
        if (($context["error_product"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>";
        }
        // line 108
        echo "            </div>
            <div class=\"return-field return-float required\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 110
        echo ($context["model"] ?? null);
        echo "\" placeholder=\" \" id=\"input-model\" class=\"form-control\" />
              <label for=\"input-model\">";
        // line 111
        echo ($context["entry_model"] ?? null);
        echo "</label>
              ";
        // line 112
        if (($context["error_model"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>";
        }
        // line 113
        echo "            </div>
            <div class=\"return-field return-float\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 115
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\" \" id=\"input-quantity\" class=\"form-control\" />
              <label for=\"input-quantity\">";
        // line 116
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            </div>
            <div class=\"return-field required return-field--wide\">
              <label>";
        // line 119
        echo ($context["entry_reason"] ?? null);
        echo "</label>
              <div class=\"return-choice-grid\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 122
            echo "                ";
            $context["reason_name"] = twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 122);
            // line 123
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 123) == "Dead On Arrival")) {
                // line 124
                echo "                ";
                $context["reason_name"] = "Ürün çalışmıyor";
                // line 125
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 125) == "Faulty, please supply details")) {
                // line 126
                echo "                ";
                $context["reason_name"] = "Arızalı, lütfen detay belirtin";
                // line 127
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 127) == "Order Error")) {
                // line 128
                echo "                ";
                $context["reason_name"] = "Sipariş hatası";
                // line 129
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 129) == "Other, please supply details")) {
                // line 130
                echo "                ";
                $context["reason_name"] = "Diğer, lütfen detay belirtin";
                // line 131
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 131) == "Received Wrong Item")) {
                // line 132
                echo "                ";
                $context["reason_name"] = "Yanlış ürün gönderildi";
                // line 133
                echo "                ";
            }
            // line 134
            echo "                <label class=\"return-choice\">
                  ";
            // line 135
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 135) == ($context["return_reason_id"] ?? null))) {
                // line 136
                echo "                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 136);
                echo "\" checked=\"checked\" />
                  ";
            } else {
                // line 138
                echo "                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 138);
                echo "\" />
                  ";
            }
            // line 140
            echo "                  <span>";
            echo ($context["reason_name"] ?? null);
            echo "</span>
                </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "              </div>
              ";
        // line 144
        if (($context["error_reason"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>";
        }
        // line 145
        echo "            </div>
            <div class=\"return-field required return-field--wide\">
              <label>";
        // line 147
        echo ($context["entry_opened"] ?? null);
        echo "</label>
              <div class=\"return-inline-choice\">
                <label class=\"return-choice return-choice--inline\">
                  ";
        // line 150
        if (($context["opened"] ?? null)) {
            // line 151
            echo "                  <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                  ";
        } else {
            // line 153
            echo "                  <input type=\"radio\" name=\"opened\" value=\"1\" />
                  ";
        }
        // line 155
        echo "                  <span>";
        echo ($context["text_yes"] ?? null);
        echo "</span>
                </label>
                <label class=\"return-choice return-choice--inline\">
                  ";
        // line 158
        if ( !($context["opened"] ?? null)) {
            // line 159
            echo "                  <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                  ";
        } else {
            // line 161
            echo "                  <input type=\"radio\" name=\"opened\" value=\"0\" />
                  ";
        }
        // line 163
        echo "                  <span>";
        echo ($context["text_no"] ?? null);
        echo "</span>
                </label>
              </div>
            </div>
            <div class=\"return-field return-float return-field--wide\">
              <textarea name=\"comment\" rows=\"7\" placeholder=\" \" id=\"input-comment\" class=\"form-control\">";
        // line 168
        echo ($context["comment"] ?? null);
        echo "</textarea>
              <label for=\"input-comment\">";
        // line 169
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            </div>
            <div class=\"return-field return-field--wide\">
              ";
        // line 172
        echo ($context["captcha"] ?? null);
        echo "
            </div>
          </div>
        </section>

        <div class=\"return-actions\">
          <a href=\"";
        // line 178
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default return-back-btn\"><i class=\"fa fa-angle-left\"></i><span>";
        echo ($context["button_back"] ?? null);
        echo "</span></a>
          <div class=\"return-actions__submit\">
            ";
        // line 180
        if (($context["text_agree"] ?? null)) {
            // line 181
            echo "            <label class=\"return-agree\">
              ";
            // line 182
            if (($context["agree"] ?? null)) {
                // line 183
                echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
              ";
            } else {
                // line 185
                echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\" />
              ";
            }
            // line 187
            echo "              <span>";
            echo ($context["text_agree"] ?? null);
            echo "</span>
            </label>
            ";
        }
        // line 190
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_submit"] ?? null);
        echo " <i class=\"fa fa-angle-right\"></i></button>
          </div>
        </div>
      </form>
      ";
        // line 194
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 195
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 199
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
";
        // line 203
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
        return array (  527 => 203,  520 => 199,  513 => 195,  509 => 194,  501 => 190,  494 => 187,  490 => 185,  486 => 183,  484 => 182,  481 => 181,  479 => 180,  472 => 178,  463 => 172,  457 => 169,  453 => 168,  444 => 163,  440 => 161,  436 => 159,  434 => 158,  427 => 155,  423 => 153,  419 => 151,  417 => 150,  411 => 147,  407 => 145,  401 => 144,  398 => 143,  388 => 140,  382 => 138,  376 => 136,  374 => 135,  371 => 134,  368 => 133,  365 => 132,  362 => 131,  359 => 130,  356 => 129,  353 => 128,  350 => 127,  347 => 126,  344 => 125,  341 => 124,  338 => 123,  335 => 122,  331 => 121,  326 => 119,  320 => 116,  316 => 115,  312 => 113,  306 => 112,  302 => 111,  298 => 110,  294 => 108,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  266 => 97,  252 => 86,  247 => 84,  243 => 83,  238 => 80,  232 => 79,  228 => 78,  224 => 77,  220 => 75,  214 => 74,  210 => 73,  206 => 72,  202 => 70,  196 => 69,  192 => 68,  188 => 67,  184 => 65,  178 => 64,  174 => 63,  170 => 62,  166 => 60,  160 => 59,  156 => 58,  152 => 57,  142 => 50,  134 => 45,  113 => 27,  109 => 26,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  77 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_form.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\return_form.twig");
    }
}
