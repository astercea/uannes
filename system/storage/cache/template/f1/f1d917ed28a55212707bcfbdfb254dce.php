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

/* default/template/account/order_info.twig */
class __TwigTemplate_c780832a892b7ff596573c4a6377235f extends Template
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
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 8
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
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
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 26
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 31
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br/>
              ";
        }
        // line 32
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br/>
              <b>";
        // line 33
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 34
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br/>
              ";
        }
        // line 36
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 43
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 44
        if (($context["shipping_address"] ?? null)) {
            // line 45
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 46
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 50
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 51
        if (($context["shipping_address"] ?? null)) {
            // line 52
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 53
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 60
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 61
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 62
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 63
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 64
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 65
        if (($context["products"] ?? null)) {
            // line 66
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 67
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "          <tr>
            <td class=\"text-left\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
            echo "
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br/>
              &nbsp;<small> - ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 75);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 75);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 76);
            echo "</td>
            <td class=\"text-right\">";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77);
            echo "</td>
            <td class=\"text-right\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
            echo "</td>
            <td class=\"text-right\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 79);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 80)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 80);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 80);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 84
            echo "          <tr>
            <td class=\"text-left\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 85);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 88);
            echo "</td>
            <td class=\"text-right\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 89);
            echo "</td>
            ";
            // line 90
            if (($context["products"] ?? null)) {
                // line 91
                echo "            <td></td>
            ";
            }
            // line 92
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 99
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 101);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 102);
            echo "</td>
            ";
            // line 103
            if (($context["products"] ?? null)) {
                // line 104
                echo "            <td></td>
            ";
            }
            // line 105
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 111
        if (($context["comment"] ?? null)) {
            // line 112
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 115
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 120
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 125
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 126
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 130
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 131
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 132
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 137
            if (($context["histories"] ?? null)) {
                // line 138
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 139
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 140);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 141);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 142);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "        ";
            } else {
                // line 146
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 147
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 150
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 154
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 155
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 157
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 158
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 160
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/order_info.twig";
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
        return array (  482 => 160,  477 => 158,  473 => 157,  466 => 155,  463 => 154,  457 => 150,  451 => 147,  448 => 146,  445 => 145,  436 => 142,  432 => 141,  428 => 140,  425 => 139,  420 => 138,  418 => 137,  410 => 132,  406 => 131,  402 => 130,  394 => 126,  391 => 125,  383 => 120,  375 => 115,  370 => 112,  368 => 111,  362 => 107,  355 => 105,  351 => 104,  349 => 103,  345 => 102,  341 => 101,  337 => 99,  333 => 98,  327 => 94,  320 => 92,  316 => 91,  314 => 90,  310 => 89,  306 => 88,  300 => 85,  297 => 84,  292 => 83,  273 => 80,  269 => 79,  265 => 78,  261 => 77,  257 => 76,  246 => 75,  240 => 74,  236 => 73,  233 => 72,  229 => 71,  223 => 67,  219 => 66,  217 => 65,  213 => 64,  209 => 63,  205 => 62,  201 => 61,  197 => 60,  188 => 53,  182 => 52,  180 => 51,  176 => 50,  170 => 46,  164 => 45,  162 => 44,  158 => 43,  141 => 36,  132 => 34,  126 => 33,  119 => 32,  110 => 31,  102 => 26,  95 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  68 => 14,  63 => 13,  55 => 9,  52 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_info.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\order_info.twig");
    }
}
