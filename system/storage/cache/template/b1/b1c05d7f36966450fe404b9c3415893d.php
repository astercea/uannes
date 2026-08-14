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

/* default/template/checkout/confirm.twig */
class __TwigTemplate_81e7de79dbc18e4314122ef5ab5febbe extends Template
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
        if ( !($context["redirect"] ?? null)) {
            // line 2
            echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-center\" style=\"width: 80px;\">Ürün</td>
        <td class=\"text-left\">";
            // line 7
            echo ($context["column_name"] ?? null);
            echo "</td>
        <td class=\"text-left\">";
            // line 8
            echo ($context["column_model"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 9
            echo ($context["column_quantity"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 10
            echo ($context["column_price"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 11
            echo ($context["column_total"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "    <tr>
      <td class=\"text-center\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" class=\"img-thumbnail\" style=\"border:none; border-radius:0; padding:0; max-width:60px;\" />";
                }
                echo "</td>
      <td class=\"text-left\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
        &nbsp;<small> - ";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 21)) {
                    echo " <br/>
        <span class=\"label label-info\">";
                    // line 22
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22);
                    echo "</small> ";
                }
                echo "</td>
      <td class=\"text-left\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 23);
                echo "</td>
      <td class=\"text-right\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
                echo "</td>
      <td class=\"text-right\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                echo "</td>
      <td class=\"text-right\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 26);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "    <tr>
      <td class=\"text-center\"></td>
      <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 32);
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                echo "</td>
      <td class=\"text-right\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 36);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 44
                echo "    <tr>
      <td colspan=\"5\" class=\"text-right\"><strong>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 46);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 53
            echo ($context["payment"] ?? null);
            echo "
";
        } else {
            // line 54
            echo " 
<script type=\"text/javascript\"><!--
location = '";
            // line 56
            echo ($context["redirect"] ?? null);
            echo "';
//--></script> 
";
        }
        // line 58
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
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
        return array (  217 => 58,  211 => 56,  207 => 54,  202 => 53,  196 => 49,  187 => 46,  183 => 45,  180 => 44,  176 => 43,  170 => 39,  161 => 36,  157 => 35,  151 => 32,  147 => 30,  142 => 29,  133 => 26,  129 => 25,  125 => 24,  121 => 23,  113 => 22,  108 => 21,  99 => 20,  89 => 19,  77 => 18,  74 => 17,  70 => 16,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/confirm.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\confirm.twig");
    }
}
