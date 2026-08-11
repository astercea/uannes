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

/* default/template/account/address_list.twig */
class __TwigTemplate_449345feed0966b79fa01a57e2fe6459 extends Template
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
<div id=\"account-address\" class=\"container account-page\">
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 6
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 9
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 18
        echo ($context["text_address_book"] ?? null);
        echo "</h2>
      ";
        // line 19
        if (($context["addresses"] ?? null)) {
            // line 20
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 23
                echo "           <form  action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 23);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-address-";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address_id", [], "any", false, false, false, 23);
                echo "\">
          <tr>
            <td class=\"text-left\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 25);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 26);
                echo "\" class=\"btn btn-info\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> &nbsp; 
            <a href = \"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 27);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "')\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
          </tr>
          </form>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </table>
      </div>
      ";
        } else {
            // line 34
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 36
        echo "      
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 38
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 39
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 41
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/address_list.twig";
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
        return array (  176 => 44,  171 => 42,  167 => 41,  160 => 39,  154 => 38,  150 => 36,  144 => 34,  139 => 31,  123 => 27,  117 => 26,  113 => 25,  105 => 23,  101 => 22,  97 => 20,  95 => 19,  91 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  64 => 10,  59 => 9,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/address_list.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\address_list.twig");
    }
}
