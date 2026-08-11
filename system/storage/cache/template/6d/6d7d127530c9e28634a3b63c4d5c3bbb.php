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

/* default/template/account/register.twig */
class __TwigTemplate_5a2d3ab0479c081c79911f165dfab6bd extends Template
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
<style>
  body { background-color: #f8f6f2; }
  footer { margin-top: 0; }
</style>

<div id=\"account-register\" class=\"login-page\">
  <div class=\"container\">
    <div class=\"login-page__container\">

      ";
        // line 11
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "      <div class=\"login-alert login-alert--error\">
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"7.5\" stroke=\"currentColor\"/><path d=\"M8 5v4M8 11h.01\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\"/></svg>
        <span>";
            // line 14
            echo ($context["error_warning"] ?? null);
            echo "</span>
      </div>
      ";
        }
        // line 17
        echo "
      <h1 class=\"login-page__title\" style=\"margin-bottom: 2.5rem;\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <form action=\"";
        // line 20
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"login-page__form\" autocomplete=\"off\">
        <fieldset id=\"account\" style=\"border:none; padding:0; margin:0;\">
          
          <div class=\"login-field\" style=\"display: ";
        // line 23
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"login-field__label\" style=\"position:static; transform:none; margin-bottom:8px; display:block;\">";
        // line 24
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div>
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 27
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 27) == ($context["customer_group_id"] ?? null))) {
                // line 28
                echo "              <label style=\"margin-right: 15px; font-size:13.5px; color:#1a1a50; cursor:pointer;\">
                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 29);
                echo "\" checked=\"checked\" />
                ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 30);
                echo "
              </label>
              ";
            } else {
                // line 33
                echo "              <label style=\"margin-right: 15px; font-size:13.5px; color:#1a1a50; cursor:pointer;\">
                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 34);
                echo "\" />
                ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 35);
                echo "
              </label>
              ";
            }
            // line 38
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
          </div>

          <div class=\"login-field required\">
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 43
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-firstname\" class=\"login-field__input\" />
            <label for=\"input-firstname\" class=\"login-field__label\">";
        // line 44
        echo ($context["entry_firstname"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
            ";
        }
        // line 49
        echo "          </div>

          <div class=\"login-field required\">
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 52
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\" \" id=\"input-lastname\" class=\"login-field__input\" />
            <label for=\"input-lastname\" class=\"login-field__label\">";
        // line 53
        echo ($context["entry_lastname"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 55
        if (($context["error_lastname"] ?? null)) {
            // line 56
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
            ";
        }
        // line 58
        echo "          </div>

          <div class=\"login-field required\">
            <input type=\"email\" name=\"email\" value=\"";
        // line 61
        echo ($context["email"] ?? null);
        echo "\" placeholder=\" \" id=\"input-email\" class=\"login-field__input\" />
            <label for=\"input-email\" class=\"login-field__label\">";
        // line 62
        echo ($context["entry_email"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 64
        if (($context["error_email"] ?? null)) {
            // line 65
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
            ";
        }
        // line 67
        echo "          </div>

          <div class=\"login-field required\">
            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 70
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\" \" id=\"input-telephone\" class=\"login-field__input\" />
            <label for=\"input-telephone\" class=\"login-field__label\">";
        // line 71
        echo ($context["entry_telephone"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 73
        if (($context["error_telephone"] ?? null)) {
            // line 74
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
            ";
        }
        // line 76
        echo "          </div>

          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 79
            echo "          <!-- Custom fields logic kept identical but styled slightly for the new form layout -->
          ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "select")) {
                // line 81
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 81);
                echo "\">
            <label class=\"login-field__label\" style=\"position:static; transform:none; margin-bottom:8px; display:block;\" for=\"input-custom-field";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 82);
                echo "</label>
            <select name=\"custom_field[";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 83);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "\" class=\"login-field__input\" style=\"padding: 10px 0;\">
              <option value=\"\">";
                // line 84
                echo ($context["text_select"] ?? null);
                echo "</option>
              ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 86
                    echo "              ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 86)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86) == (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null)))) {
                        // line 87
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 87);
                        echo "</option>
              ";
                    } else {
                        // line 89
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 89);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 89);
                        echo "</option>
              ";
                    }
                    // line 91
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "            </select>
            <span class=\"login-field__line\"></span>
            ";
                // line 94
                if ((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)) {
                    // line 95
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 97
                echo "          </div>
          ";
            }
            // line 99
            echo "          
          ";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 100) == "radio")) {
                // line 101
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 101);
                echo "\">
            <label class=\"login-field__label\" style=\"position:static; transform:none; margin-bottom:8px; display:block;\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                echo "</label>
            <div>
              ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "              <label style=\"margin-right: 15px; font-size:13.5px; color:#1a1a50; cursor:pointer;\">
                ";
                    // line 106
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106) == (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null)))) {
                        // line 107
                        echo "                <input type=\"radio\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 107);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107);
                        echo "\" checked=\"checked\" />
                ";
                    } else {
                        // line 109
                        echo "                <input type=\"radio\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                        echo "\" />
                ";
                    }
                    // line 111
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 111);
                    echo "
              </label>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "            </div>
            ";
                // line 115
                if ((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null)) {
                    // line 116
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 118
                echo "          </div>
          ";
            }
            // line 120
            echo "          
          ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                // line 122
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 122);
                echo "\">
            <label class=\"login-field__label\" style=\"position:static; transform:none; margin-bottom:8px; display:block;\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "</label>
            <div>
              ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 126
                    echo "              <label style=\"margin-right: 15px; font-size:13.5px; color:#1a1a50; cursor:pointer; display:block; margin-bottom:4px;\">
                ";
                    // line 127
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)))) {
                        // line 128
                        echo "                <input type=\"checkbox\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 128);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 128);
                        echo "\" checked=\"checked\" />
                ";
                    } else {
                        // line 130
                        echo "                <input type=\"checkbox\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                        echo "\" />
                ";
                    }
                    // line 132
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 132);
                    echo "
              </label>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "            </div>
            ";
                // line 136
                if ((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) {
                    // line 137
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 139
                echo "          </div>
          ";
            }
            // line 141
            echo "          
          ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "text")) {
                // line 143
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 143);
                echo "\">
            <input type=\"text\" name=\"custom_field[";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 144);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 144);
                }
                echo "\" placeholder=\" \" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"login-field__input\" />
            <label class=\"login-field__label\" for=\"input-custom-field";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                echo "</label>
            <span class=\"login-field__line\"></span>
            ";
                // line 147
                if ((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null)) {
                    // line 148
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 150
                echo "          </div>
          ";
            }
            // line 152
            echo "          
          ";
            // line 153
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "textarea")) {
                // line 154
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                echo "\">
            <textarea name=\"custom_field[";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 155);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "]\" rows=\"2\" placeholder=\" \" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "\" class=\"login-field__input\" style=\"padding-top:14px; resize:vertical;\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 155);
                }
                echo "</textarea>
            <label class=\"login-field__label\" style=\"top:14px; transform:none;\" for=\"input-custom-field";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                echo "</label>
            <span class=\"login-field__line\"></span>
            ";
                // line 158
                if ((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)) {
                    // line 159
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 161
                echo "          </div>
          ";
            }
            // line 163
            echo "          
          ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 164) == "file")) {
                // line 165
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\" class=\"login-field custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 165);
                echo "\">
            <label class=\"login-field__label\" style=\"position:static; transform:none; margin-bottom:8px; display:block;\">";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                echo "</label>
            <button type=\"button\" id=\"button-custom-field";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"login-page__submit\" style=\"padding:10px 15px; font-size:12px; display:inline-block; width:auto; border-radius:0;\">";
                echo ($context["button_upload"] ?? null);
                echo "</button>
            <input type=\"hidden\" name=\"custom_field[";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
            ";
                // line 169
                if ((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null)) {
                    // line 170
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 172
                echo "          </div>
          ";
            }
            // line 174
            echo "          
          ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "date")) {
                // line 176
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"login-field custom-field date\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 176);
                echo "\">
            <input type=\"text\" name=\"custom_field[";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 177);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177);
                }
                echo "\" placeholder=\" \" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\" class=\"login-field__input\" />
            <label class=\"login-field__label\" for=\"input-custom-field";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                echo "</label>
            <span class=\"login-field__line\"></span>
            ";
                // line 180
                if ((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    // line 181
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 183
                echo "          </div>
          ";
            }
            // line 185
            echo "          
          ";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "time")) {
                // line 187
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                echo "\" class=\"login-field custom-field time\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                echo "\">
            <input type=\"text\" name=\"custom_field[";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 188);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 188);
                }
                echo "\" placeholder=\" \" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                echo "\" class=\"login-field__input\" />
            <label class=\"login-field__label\" for=\"input-custom-field";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                echo "</label>
            <span class=\"login-field__line\"></span>
            ";
                // line 191
                if ((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null)) {
                    // line 192
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 194
                echo "          </div>
          ";
            }
            // line 196
            echo "          
          ";
            // line 197
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 197) == "datetime")) {
                // line 198
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\" class=\"login-field custom-field datetime\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 198);
                echo "\">
            <input type=\"text\" name=\"custom_field[";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 199);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 199);
                }
                echo "\" placeholder=\" \" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                echo "\" class=\"login-field__input\" />
            <label class=\"login-field__label\" for=\"input-custom-field";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                echo "</label>
            <span class=\"login-field__line\"></span>
            ";
                // line 202
                if ((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                    // line 203
                    echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                    echo "</div>
            ";
                }
                // line 205
                echo "          </div>
          ";
            }
            // line 207
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
        </fieldset>

        <fieldset style=\"border:none; padding:0; margin:0;\">
          <div class=\"login-field required\">
            <input type=\"password\" name=\"password\" value=\"";
        // line 213
        echo ($context["password"] ?? null);
        echo "\" placeholder=\" \" id=\"input-password\" class=\"login-field__input\" />
            <label for=\"input-password\" class=\"login-field__label\">";
        // line 214
        echo ($context["entry_password"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 216
        if (($context["error_password"] ?? null)) {
            // line 217
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
            ";
        }
        // line 219
        echo "          </div>

          <div class=\"login-field required\">
            <input type=\"password\" name=\"confirm\" value=\"";
        // line 222
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\" \" id=\"input-confirm\" class=\"login-field__input\" />
            <label for=\"input-confirm\" class=\"login-field__label\">";
        // line 223
        echo ($context["entry_confirm"] ?? null);
        echo " *</label>
            <span class=\"login-field__line\"></span>
            ";
        // line 225
        if (($context["error_confirm"] ?? null)) {
            // line 226
            echo "            <div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
            ";
        }
        // line 228
        echo "          </div>
        </fieldset>

        <!-- Newsletter gizlendi, varsayılan 0 olarak gönderiliyor -->
        <input type=\"hidden\" name=\"newsletter\" value=\"0\" />

        ";
        // line 234
        echo ($context["captcha"] ?? null);
        echo "
        
        ";
        // line 236
        if (($context["text_agree"] ?? null)) {
            // line 237
            echo "        <div style=\"margin-top: 1rem; margin-bottom: 3.5rem; margin-left: 6px; display:flex; align-items:flex-start; gap:8px;\">
          ";
            // line 238
            if (($context["agree"] ?? null)) {
                // line 239
                echo "          <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" id=\"agree-checkbox\" style=\"accent-color: #1a1a50; margin: 0; margin-top: 3px; position: relative;\" />
          ";
            } else {
                // line 241
                echo "          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agree-checkbox\" style=\"accent-color: #1a1a50; margin: 0; margin-top: 3px; position: relative;\" />
          ";
            }
            // line 243
            echo "          <label for=\"agree-checkbox\" style=\"font-size:13px; color:#555; cursor:pointer; margin:0;\">
            ";
            // line 244
            echo ($context["text_agree"] ?? null);
            echo "
          </label>
        </div>
        ";
        }
        // line 248
        echo "
        <button type=\"submit\" class=\"login-page__submit\">
          <span>Devam Et</span>
        </button>

      </form>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .login-field[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .login-field').length) {
\t\t\$('#account .login-field').eq(\$(this).attr('data-sort')).before(this);
\t}
\tif (\$(this).attr('data-sort') > \$('#account .login-field').length) {
\t\t\$('#account .login-field:last').after(this);
\t}
\tif (\$(this).attr('data-sort') == \$('#account .login-field').length) {
\t\t\$('#account .login-field:last').after(this);
\t}
\tif (\$(this).attr('data-sort') < -\$('#account .login-field').length) {
\t\t\$('#account .login-field:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
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
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\" style=\"font-size:11px; color:#d9534f; margin-top:4px;\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
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
        // line 356
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 361
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 366
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 371
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/register.twig";
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
        return array (  939 => 371,  931 => 366,  923 => 361,  915 => 356,  805 => 248,  798 => 244,  795 => 243,  791 => 241,  787 => 239,  785 => 238,  782 => 237,  780 => 236,  775 => 234,  767 => 228,  761 => 226,  759 => 225,  754 => 223,  750 => 222,  745 => 219,  739 => 217,  737 => 216,  732 => 214,  728 => 213,  721 => 208,  715 => 207,  711 => 205,  705 => 203,  703 => 202,  696 => 200,  682 => 199,  675 => 198,  673 => 197,  670 => 196,  666 => 194,  660 => 192,  658 => 191,  651 => 189,  637 => 188,  630 => 187,  628 => 186,  625 => 185,  621 => 183,  615 => 181,  613 => 180,  606 => 178,  592 => 177,  585 => 176,  583 => 175,  580 => 174,  576 => 172,  570 => 170,  568 => 169,  556 => 168,  548 => 167,  544 => 166,  537 => 165,  535 => 164,  532 => 163,  528 => 161,  522 => 159,  520 => 158,  513 => 156,  499 => 155,  492 => 154,  490 => 153,  487 => 152,  483 => 150,  477 => 148,  475 => 147,  468 => 145,  454 => 144,  447 => 143,  445 => 142,  442 => 141,  438 => 139,  432 => 137,  430 => 136,  427 => 135,  417 => 132,  407 => 130,  397 => 128,  395 => 127,  392 => 126,  388 => 125,  383 => 123,  376 => 122,  374 => 121,  371 => 120,  367 => 118,  361 => 116,  359 => 115,  356 => 114,  346 => 111,  336 => 109,  326 => 107,  324 => 106,  321 => 105,  317 => 104,  312 => 102,  305 => 101,  303 => 100,  300 => 99,  296 => 97,  290 => 95,  288 => 94,  284 => 92,  278 => 91,  270 => 89,  262 => 87,  259 => 86,  255 => 85,  251 => 84,  243 => 83,  237 => 82,  230 => 81,  228 => 80,  225 => 79,  221 => 78,  217 => 76,  211 => 74,  209 => 73,  204 => 71,  200 => 70,  195 => 67,  189 => 65,  187 => 64,  182 => 62,  178 => 61,  173 => 58,  167 => 56,  165 => 55,  160 => 53,  156 => 52,  151 => 49,  145 => 47,  143 => 46,  138 => 44,  134 => 43,  128 => 39,  122 => 38,  116 => 35,  112 => 34,  109 => 33,  103 => 30,  99 => 29,  96 => 28,  93 => 27,  89 => 26,  84 => 24,  76 => 23,  70 => 20,  65 => 18,  62 => 17,  56 => 14,  52 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\register.twig");
    }
}
