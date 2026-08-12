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
    /* ==========================================================================
       SIPARISLERIM / MY ORDERS TABLE REDESIGN
       ========================================================================== */
    #account-order #content {
      max-width: 1320px !important;
      width: 100% !important;
    }

    .account-orders-table-wrap {
      border: 1px solid rgba(26, 26, 80, 0.12);
      background: #ffffff;
      margin-bottom: 28px;
      overflow-x: visible;
      border-radius: 0;
      width: 100%;
    }

    @media (max-width: 991px) {
      .account-orders-table-wrap {
        overflow-x: auto;
      }
    }

    .account-orders-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 0;
      font-family: 'DM Sans', sans-serif;
      color: #1a1a50;
      background: transparent;
      table-layout: fixed;
    }

    .account-orders-table thead tr {
      background-color: #f5f2eb !important;
      border-bottom: 1px solid rgba(26, 26, 80, 0.12) !important;
    }

    .account-orders-table thead th,
    .account-orders-table thead td {
      width: 12.5% !important;
      padding: 14px 12px !important;
      font-family: 'DM Sans', sans-serif !important;
      font-size: 11px !important;
      font-weight: 500 !important;
      letter-spacing: 0.08em !important;
      text-transform: uppercase !important;
      color: #1a1a50 !important;
      background: transparent !important;
      border: none !important;
      border-right: 1px solid rgba(26, 26, 80, 0.08) !important;
      white-space: nowrap;
      vertical-align: middle !important;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .account-orders-table thead th:last-child,
    .account-orders-table thead td:last-child {
      border-right: none !important;
    }

    .account-orders-table tbody tr {
      border-bottom: 1px solid rgba(26, 26, 80, 0.08) !important;
      transition: background-color 0.2s ease;
    }

    .account-orders-table tbody tr:last-child {
      border-bottom: none !important;
    }

    .account-orders-table tbody tr:hover {
      background-color: transparent !important;
    }

    .account-orders-table tbody td {
      width: 12.5% !important;
      padding: 16px 12px !important;
      font-family: 'DM Sans', sans-serif !important;
      font-size: 13.5px !important;
      color: #1a1a50 !important;
      background: transparent !important;
      border: none !important;
      border-right: 1px solid rgba(26, 26, 80, 0.05) !important;
      vertical-align: middle !important;
      overflow: hidden;
      word-wrap: break-word;
    }

    .account-orders-table tbody td:last-child {
      border-right: none !important;
    }

    .account-order-id {
      font-weight: 500;
      color: #1a1a50;
    }

    .account-order-thumb {
      width: 60px;
      height: 60px;
      object-fit: cover;
      display: inline-block;
      vertical-align: middle;
      background: #f8f8f8;
      border: 1px solid rgba(26, 26, 80, 0.08);
      border-radius: 0;
    }

    /* Plain Text Status (No Box / No Orange Background) */
    .status-badge {
      display: inline-block;
      background: transparent !important;
      border: none !important;
      padding: 0 !important;
      font-family: 'DM Sans', sans-serif !important;
      font-size: 13.5px !important;
      font-weight: 400 !important;
      color: #1a1a50 !important;
      line-height: inherit;
    }

    /* İncele Link with center-expanding thin underline animation */
    .order-action-link {
      position: relative;
      display: inline-block;
      color: #1a1a50 !important;
      text-decoration: none !important;
      font-family: 'DM Sans', sans-serif;
      font-size: 13.5px;
      font-weight: 500;
      letter-spacing: 0.02em;
      text-transform: none;
      padding: 3px 2px;
      line-height: 1.4;
      transition: color 0.25s ease;
    }

    .order-action-link::after {
      content: '';
      position: absolute;
      bottom: 1px;
      left: 50%;
      width: 100%;
      height: 1px;
      background-color: #1a1a50;
      transform: translateX(-50%) scaleX(0);
      transform-origin: center;
      transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .order-action-link:hover::after {
      transform: translateX(-50%) scaleX(1);
    }

    .order-action-link:hover,
    .order-action-link:focus {
      color: #1a1a50 !important;
      text-decoration: none !important;
    }
  </style>

  <div class=\"row\">";
        // line 167
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 168
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 169
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 170
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 171
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 172
            echo "    ";
        } else {
            // line 173
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 174
            echo "    ";
        }
        // line 175
        echo "
    <div id=\"content\" class=\"";
        // line 176
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 177
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      ";
        // line 179
        if (($context["orders"] ?? null)) {
            // line 180
            echo "      <div class=\"table-responsive account-orders-table-wrap\">
        <table class=\"table account-orders-table\">
          <thead>
            <tr>
              <th class=\"text-left col-order-id\">";
            // line 184
            echo ($context["column_order_id"] ?? null);
            echo "</th>
              <th class=\"text-center col-thumb\">ÜRÜN</th>
              <th class=\"text-left col-customer\">";
            // line 186
            echo ($context["column_customer"] ?? null);
            echo "</th>
              <th class=\"text-center col-products\">";
            // line 187
            echo ($context["column_product"] ?? null);
            echo "</th>
              <th class=\"text-left col-status\">";
            // line 188
            echo ($context["column_status"] ?? null);
            echo "</th>
              <th class=\"text-left col-total\">";
            // line 189
            echo ($context["column_total"] ?? null);
            echo "</th>
              <th class=\"text-left col-date\">";
            // line 190
            echo ($context["column_date_added"] ?? null);
            echo "</th>
              <th class=\"text-center col-action\">DETAY</th>
            </tr>
          </thead>
          <tbody>
          ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 196
                echo "            ";
                $context["status_tr"] = twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 196);
                // line 197
                echo "            ";
                $context["status_class"] = "status-default";
                // line 198
                echo "
            ";
                // line 199
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 199), ["Pending", "Beklemede", "On Hold", "Bekliyor", "Pending Payment", "Pending Verification"])) {
                    // line 200
                    echo "              ";
                    $context["status_tr"] = "Beklemede";
                    // line 201
                    echo "              ";
                    $context["status_class"] = "status-pending";
                    // line 202
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 202), ["Processing", "Processed", "Processing Payment", "İşleniyor", "Hazırlanıyor"])) {
                    // line 203
                    echo "              ";
                    $context["status_tr"] = "İşleniyor";
                    // line 204
                    echo "              ";
                    $context["status_class"] = "status-processing";
                    // line 205
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 205), ["Shipped", "Kargoda", "Gönderildi", "Kargoya Verildi"])) {
                    // line 206
                    echo "              ";
                    $context["status_tr"] = "Kargoya Verildi";
                    // line 207
                    echo "              ";
                    $context["status_class"] = "status-shipped";
                    // line 208
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 208), ["Delivered", "Teslim Edildi"])) {
                    // line 209
                    echo "              ";
                    $context["status_tr"] = "Teslim Edildi";
                    // line 210
                    echo "              ";
                    $context["status_class"] = "status-shipped";
                    // line 211
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 211), ["Completed", "Complete", "Tamamlandı", "Bitti"])) {
                    // line 212
                    echo "              ";
                    $context["status_tr"] = "Tamamlandı";
                    // line 213
                    echo "              ";
                    $context["status_class"] = "status-complete";
                    // line 214
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 214), ["Canceled", "Cancelled", "İptal Edildi", "İptal"])) {
                    // line 215
                    echo "              ";
                    $context["status_tr"] = "İptal Edildi";
                    // line 216
                    echo "              ";
                    $context["status_class"] = "status-canceled";
                    // line 217
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 217), ["Refunded", "İade Edildi", "Returned"])) {
                    // line 218
                    echo "              ";
                    $context["status_tr"] = "İade Edildi";
                    // line 219
                    echo "              ";
                    $context["status_class"] = "status-refunded";
                    // line 220
                    echo "            ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 220), ["On Hold", "Hold", "Bekletiliyor"])) {
                    // line 221
                    echo "              ";
                    $context["status_tr"] = "Bekletiliyor";
                    // line 222
                    echo "              ";
                    $context["status_class"] = "status-hold";
                    // line 223
                    echo "            ";
                }
                // line 224
                echo "
            <tr>
              <td class=\"text-left col-order-id account-order-id\">#";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 226);
                echo "</td>

              <td class=\"text-center col-thumb\">
                ";
                // line 229
                if (twig_get_attribute($this->env, $this->source, $context["order"], "thumb", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "thumb", [], "any", false, false, false, 230);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 230);
                    echo "\" class=\"account-order-thumb\">
                ";
                }
                // line 232
                echo "              </td>

              <td class=\"text-left col-customer\">";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 234);
                echo "</td>
              <td class=\"text-center col-products\">";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 235);
                echo "</td>

              <td class=\"text-left col-status\">
                <span class=\"status-badge ";
                // line 238
                echo ($context["status_class"] ?? null);
                echo "\">";
                echo ($context["status_tr"] ?? null);
                echo "</span>
              </td>

              <td class=\"text-left col-total\">";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 241);
                echo "</td>
              <td class=\"text-left col-date\">";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 242);
                echo "</td>
              <td class=\"text-center col-action\">
                <a href=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 244);
                echo "\" class=\"order-action-link\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\">
                  İncele
                </a>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "          </tbody>
        </table>
      </div>

      <div class=\"row\" style=\"margin-top: 15px;\">
        <div class=\"col-sm-12 text-center\">";
            // line 255
            echo ($context["pagination"] ?? null);
            echo "</div>
      </div>

      ";
        } else {
            // line 259
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 261
        echo "
      ";
        // line 262
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>

    ";
        // line 265
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 268
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
        return array (  468 => 268,  462 => 265,  456 => 262,  453 => 261,  447 => 259,  440 => 255,  433 => 250,  419 => 244,  414 => 242,  410 => 241,  402 => 238,  396 => 235,  392 => 234,  388 => 232,  380 => 230,  378 => 229,  372 => 226,  368 => 224,  365 => 223,  362 => 222,  359 => 221,  356 => 220,  353 => 219,  350 => 218,  347 => 217,  344 => 216,  341 => 215,  338 => 214,  335 => 213,  332 => 212,  329 => 211,  326 => 210,  323 => 209,  320 => 208,  317 => 207,  314 => 206,  311 => 205,  308 => 204,  305 => 203,  302 => 202,  299 => 201,  296 => 200,  294 => 199,  291 => 198,  288 => 197,  285 => 196,  281 => 195,  273 => 190,  269 => 189,  265 => 188,  261 => 187,  257 => 186,  252 => 184,  246 => 180,  244 => 179,  239 => 177,  233 => 176,  230 => 175,  227 => 174,  224 => 173,  221 => 172,  218 => 171,  215 => 170,  212 => 169,  210 => 168,  206 => 167,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_list.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\order_list.twig");
    }
}
