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

/* default/template/checkout/payment_address.twig */
class __TwigTemplate_5443f68c23f685d21215b75c8d0aaed5 extends Template
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
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if (($context["addresses"] ?? null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"payment-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if (((($__internal_compile_0 = $context["address"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["address_id"] ?? null) : null) == ($context["address_id"] ?? null))) {
                    // line 12
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    echo "</option>
      ";
                } else {
                    // line 14
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    echo "</option>
      ";
                }
                // line 16
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"new\" />
      ";
            // line 22
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 25
        echo "  <br />
  <div id=\"payment-new\" style=\"display: ";
        // line 26
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
      <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\" \" id=\"input-payment-firstname\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 29
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\" \" id=\"input-payment-lastname\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 33
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"company\" value=\"\" placeholder=\" \" id=\"input-payment-company\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-company\">";
        // line 37
        echo ($context["entry_company"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\" \" id=\"input-payment-address-1\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 41
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\" \" id=\"input-payment-address-2\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 45
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <input type=\"text\" name=\"city\" value=\"\" placeholder=\" \" id=\"input-payment-city\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-city\">";
        // line 49
        echo ($context["entry_city"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\" \" id=\"input-payment-postcode\" class=\"form-control\" />
      <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 53
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
        <option value=\"\">";
        // line 57
        echo ($context["text_select"] ?? null);
        echo "</option>
       ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 59
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 59) == ($context["country_id"] ?? null))) {
                // line 60
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 60);
                echo "</option>
        ";
            } else {
                // line 62
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 62);
                echo "</option>
        ";
            }
            // line 64
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </select>
      <label class=\"control-label\" for=\"input-payment-country\">";
        // line 66
        echo ($context["entry_country"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-group required\">
      <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
      </select>
      <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 71
        echo ($context["entry_zone"] ?? null);
        echo "</label>
    </div>
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 74
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 74) == "select")) {
                // line 75
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 75)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 75);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 78);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                echo "]\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 79
                echo ($context["text_select"] ?? null);
                echo "</option>
          ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 81
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 81);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 81);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 87
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 87) == "radio")) {
                // line 88
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 88)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 88);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 89);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-payment-custom-field";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                echo "\">
          ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 93
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 95);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 95);
                    echo "\" />
              ";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 96);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 103
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "checkbox")) {
                // line 104
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 104)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 104);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-payment-custom-field";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\">
          ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 109
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 111);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                    echo "\" />
              ";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 112);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 119
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "text")) {
                // line 120
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 120)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 120);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 127
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "textarea")) {
                // line 128
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 128);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                echo "\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131);
                echo "</textarea>
      </div>
    </div>
    ";
            }
            // line 135
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 135) == "file")) {
                // line 136
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 136)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 136);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-payment-custom-field";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 140);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "]\" value=\"\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 144
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 144) == "date")) {
                // line 145
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 145)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 145);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 156
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "time")) {
                // line 157
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 157)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 157);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 161);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 168
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "time")) {
                // line 169
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 169)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 169);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 173);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 173);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 180
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"\" class=\"btn btn-primary btn-continue-custom\">";
        // line 184
        echo ($context["button_continue"] ?? null);
        echo "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#payment-existing').hide();
\t\t\$('#payment-new').show();
\t} else {
\t\t\$('#payment-existing').show();
\t\t\$('#payment-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#collapse-payment-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 274
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 279
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 284
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 307
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 313
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 320
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/payment_address.twig";
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
        return array (  770 => 320,  760 => 313,  751 => 307,  725 => 284,  717 => 279,  709 => 274,  616 => 184,  611 => 181,  605 => 180,  587 => 173,  579 => 170,  570 => 169,  567 => 168,  549 => 161,  541 => 158,  532 => 157,  529 => 156,  511 => 149,  503 => 146,  494 => 145,  491 => 144,  480 => 140,  472 => 139,  467 => 137,  458 => 136,  455 => 135,  440 => 131,  433 => 129,  424 => 128,  421 => 127,  406 => 123,  399 => 121,  390 => 120,  387 => 119,  381 => 115,  372 => 112,  364 => 111,  360 => 109,  356 => 108,  352 => 107,  347 => 105,  338 => 104,  335 => 103,  329 => 99,  320 => 96,  312 => 95,  308 => 93,  304 => 92,  300 => 91,  295 => 89,  286 => 88,  283 => 87,  277 => 83,  266 => 81,  262 => 80,  258 => 79,  250 => 78,  243 => 76,  234 => 75,  231 => 74,  227 => 73,  222 => 71,  214 => 66,  211 => 65,  205 => 64,  197 => 62,  189 => 60,  186 => 59,  182 => 58,  178 => 57,  171 => 53,  164 => 49,  157 => 45,  150 => 41,  143 => 37,  136 => 33,  129 => 29,  119 => 26,  116 => 25,  110 => 22,  103 => 17,  97 => 16,  79 => 14,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/payment_address.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\payment_address.twig");
    }
}
