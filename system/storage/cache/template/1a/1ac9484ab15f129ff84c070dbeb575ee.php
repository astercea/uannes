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

/* catalog/product_form.twig */
class __TwigTemplate_071fc114620f5c8cdfca295e7f82ee32 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "name", [], "any", false, false, false, 53)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" class=\"form-control\"/>
                        ";
            // line 54
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 56
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "description", [], "any", false, false, false, 61)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null), "meta_title", [], "any", false, false, false, 67)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"form-control\"/>
                        ";
            // line 68
            if ((($__internal_compile_8 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) {
                // line 69
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_9 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 70
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_description", [], "any", false, false, false, 75)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 81)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-maintenance-info\">Bakım Bilgisi</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "][maintenance_info]\" id=\"input-maintenance-info\" class=\"form-control\">";
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "maintenance_info", [], "any", false, false, false, 87)) : (""));
            echo "</textarea>
                      </div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-story-info\">Arkasındaki Hikaye</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            echo "][story_info]\" id=\"input-story-info\" class=\"form-control\">";
            echo (((($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["product_description"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null), "story_info", [], "any", false, false, false, 94)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_18 = ($context["product_description"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["product_description"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null), "tag", [], "any", false, false, false, 100)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 108
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 110
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 111
        if (($context["error_model"] ?? null)) {
            // line 112
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 116
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 118
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 122
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 124
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 128
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 130
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 136
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 140
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 142
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 146
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 148
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 152
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 154
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 158
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 160
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 164
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 167
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 171
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 171) == ($context["tax_class_id"] ?? null))) {
                // line 172
                echo "

                        <option value=\"";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 174);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 174);
                echo "</option>


                      ";
            } else {
                // line 178
                echo "

                        <option value=\"";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 180);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 180);
                echo "</option>


                      ";
            }
            // line 184
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 191
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 193
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 197
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 199
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 203
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 208
        if (($context["subtract"] ?? null)) {
            // line 209
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 211
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 212
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 216
            echo "

                      <option value=\"1\">";
            // line 218
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 219
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 223
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 229
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 235
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 235) == ($context["stock_status_id"] ?? null))) {
                // line 236
                echo "

                        <option value=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 238);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 238);
                echo "</option>


                      ";
            } else {
                // line 242
                echo "

                        <option value=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 244);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 244);
                echo "</option>


                      ";
            }
            // line 248
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 255
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 257
        if (($context["shipping"] ?? null)) {
            // line 258
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 259
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 261
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 262
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 263
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 264
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 265
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 267
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 268
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 269
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 273
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 276
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 282
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 286
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 289
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 292
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 298
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 304
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 304) == ($context["length_class_id"] ?? null))) {
                // line 305
                echo "

                        <option value=\"";
                // line 307
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 307);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 307);
                echo "</option>


                      ";
            } else {
                // line 311
                echo "

                        <option value=\"";
                // line 313
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 313);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 313);
                echo "</option>


                      ";
            }
            // line 317
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 324
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 326
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 330
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 336
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 336) == ($context["weight_class_id"] ?? null))) {
                // line 337
                echo "

                        <option value=\"";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 339);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 339);
                echo "</option>


                      ";
            } else {
                // line 343
                echo "

                        <option value=\"";
                // line 345
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 345);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 345);
                echo "</option>


                      ";
            }
            // line 349
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 356
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 361
        if (($context["status"] ?? null)) {
            // line 362
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 364
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 365
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 369
            echo "

                      <option value=\"1\">";
            // line 371
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 372
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 376
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 382
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 384
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 390
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 392
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 396
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 398
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 400
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 400);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 400);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 401
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 401);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 407
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 409
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 411
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 411);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 411);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 412
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 412);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 418
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 421
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 422
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 422), ($context["product_store"] ?? null))) {
                // line 423
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 423);
                echo "\" checked=\"checked\"/>
                            ";
                // line 424
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 424);
                echo "
                          ";
            } else {
                // line 426
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 426);
                echo "\"/>
                            ";
                // line 427
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 427);
                echo "
                          ";
            }
            // line 428
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 434
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 436
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 438
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 438);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 438);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 439
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 439);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 445
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 447
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 449
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 449);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 449);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 450
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 450);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-color-variant\"><span data-toggle=\"tooltip\" title=\"";
        // line 456
        echo ($context["help_color_variant"] ?? null);
        echo "\">";
        echo ($context["entry_color_variant"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"color_variant\" value=\"\" placeholder=\"";
        // line 458
        echo ($context["entry_color_variant"] ?? null);
        echo "\" id=\"input-color-variant\" class=\"form-control\"/>
                  <div id=\"product-color-variant\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_color_variants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_color_variant"]) {
            // line 460
            echo "                      <div id=\"product-color-variant";
            echo twig_get_attribute($this->env, $this->source, $context["product_color_variant"], "product_id", [], "any", false, false, false, 460);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_color_variant"], "name", [], "any", false, false, false, 460);
            echo "
                        <input type=\"hidden\" name=\"product_color_variant[]\" value=\"";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["product_color_variant"], "product_id", [], "any", false, false, false, 461);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_color_variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 472
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 473
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 479
        $context["attribute_row"] = 0;
        // line 480
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 481
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 482
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 482);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" style=\"position:relative;\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 482);
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 484
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 484);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 484);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 484);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 484);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 484)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 484)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 484)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 484)] ?? null) : null), "text", [], "any", false, false, false, 484)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 487
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 489
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 490
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 496
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 506
        $context["option_row"] = 0;
        // line 507
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 508
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 508);
            echo "</a></li>
                      ";
            // line 509
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 510
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 512
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 517
        $context["option_row"] = 0;
        // line 518
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 519
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 520
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 521
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 521);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 521);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 521);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 521);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 523
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 525
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 528
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 528)) {
                // line 529
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 531
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 532
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 536
                echo "

                                <option value=\"1\">";
                // line 538
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 539
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 543
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 548
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 548) == "text")) {
                // line 549
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 550
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 552
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 552);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 556
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 556) == "textarea")) {
                // line 557
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 558
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 560
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 560);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 564
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 564) == "file")) {
                // line 565
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 566
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 568
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 568);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 572
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "date")) {
                // line 573
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 574
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 577
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 577);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 583
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 583) == "time")) {
                // line 584
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 585
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 588
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 588);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 594
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 594) == "datetime")) {
                // line 595
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 596
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 599
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 599);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 605
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 605) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 605) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 605) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 605) == "image"))) {
                // line 606
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 607
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 610
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 611
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 612
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 613
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 614
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 615
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 621
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 621));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 622
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 623
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 626
                    if ((($__internal_compile_22 = ($context["option_values"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 626)] ?? null) : null)) {
                        // line 627
                        echo "
                                          ";
                        // line 628
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = ($context["option_values"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 628)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 629
                            echo "
                                            ";
                            // line 630
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 630) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 630))) {
                                // line 631
                                echo "

                                              <option value=\"";
                                // line 633
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 633);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 633);
                                echo "</option>


                                            ";
                            } else {
                                // line 637
                                echo "

                                              <option value=\"";
                                // line 639
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 639);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 639);
                                echo "</option>


                                            ";
                            }
                            // line 643
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 644
                        echo "                                        ";
                    }
                    // line 645
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 647
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 647);
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 648
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 648);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 649
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 652
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 652)) {
                        // line 653
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 655
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 656
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 660
                        echo "

                                          <option value=\"1\">";
                        // line 662
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 663
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 667
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 670
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 673
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 673) == "+")) {
                        // line 674
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 680
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 686
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 686) == "-")) {
                        // line 687
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 693
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 699
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 701
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 701);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 702
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 705
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 705) == "+")) {
                        // line 706
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 712
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 718
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 718) == "-")) {
                        // line 719
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 725
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 731
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 733
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 733);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 734
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 737
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 737) == "+")) {
                        // line 738
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 744
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 750
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 750) == "-")) {
                        // line 751
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 757
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 763
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 765
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 765);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 766
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 768
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 769
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 770
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 775
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 780
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 783
                if ((($__internal_compile_24 = ($context["option_values"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 783)] ?? null) : null)) {
                    // line 784
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["option_values"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 784)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 785
                        echo "

                                <option value=\"";
                        // line 787
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 787);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 787);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 791
                    echo "                            ";
                }
                // line 792
                echo "

                          </select>
                        ";
            }
            // line 795
            echo " </div>
                      ";
            // line 796
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 797
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 806
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 807
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 813
        $context["recurring_row"] = 0;
        // line 814
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 815
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 816
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 819
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 820
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 820) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 820))) {
                    // line 821
                    echo "

                                <option value=\"";
                    // line 823
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 823);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 823);
                    echo "</option>


                              ";
                } else {
                    // line 827
                    echo "

                                <option value=\"";
                    // line 829
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 829);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 829);
                    echo "</option>


                              ";
                }
                // line 833
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 834
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 837
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 840
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 841
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 841) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 841))) {
                    // line 842
                    echo "

                                <option value=\"";
                    // line 844
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 844);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 844);
                    echo "</option>


                              ";
                } else {
                    // line 848
                    echo "

                                <option value=\"";
                    // line 850
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 850);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 850);
                    echo "</option>


                              ";
                }
                // line 854
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 855
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 858
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 860
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 861
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 862
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 867
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 878
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 879
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 880
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 881
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 882
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 883
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 889
        $context["discount_row"] = 0;
        // line 890
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 891
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 892
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 893
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 894
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 894) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 894))) {
                    // line 895
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 895);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 895);
                    echo "</option>
                              ";
                } else {
                    // line 897
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 897);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 897);
                    echo "</option>
                              ";
                }
                // line 899
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 900
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 901
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 901);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 902
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 902);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 903
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 903);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 906
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 906);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 912
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 912);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 916
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 918
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 919
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 920
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 925
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 936
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 937
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 938
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 939
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 940
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 946
        $context["special_row"] = 0;
        // line 947
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 948
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 949
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 952
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 953
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 953) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 953))) {
                    // line 954
                    echo "

                                <option value=\"";
                    // line 956
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 956);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 956);
                    echo "</option>


                              ";
                } else {
                    // line 960
                    echo "

                                <option value=\"";
                    // line 962
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 962);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 962);
                    echo "</option>


                              ";
                }
                // line 966
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 967
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 970
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 970);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 971
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 971);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 974
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 974);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 980
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 980);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 984
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 986
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 987
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 993
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1004
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1009
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1018
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1019
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1025
        $context["image_row"] = 0;
        // line 1026
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1027
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1028
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1028);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1028);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1029
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1029);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1030
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1032
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1033
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1034
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1039
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1047
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1049
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1056
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1057
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1063
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1064
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1064);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1065
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1065);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_26 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1065)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1065)] ?? null) : null), "points", [], "any", false, false, false, 1065)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1068
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1074
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1079
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1080
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1084
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1085
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1086
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1086);
            echo "</td>
                        <td class=\"text-left\">";
            // line 1087
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1088
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1088);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1088);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1088);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1088);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1088);
                echo "]\" value=\"";
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1088)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1088)] ?? null) : null)) {
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1088)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1088)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1090
                if ((($__internal_compile_32 = (($__internal_compile_33 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1090)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1090)] ?? null) : null)) {
                    // line 1091
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_compile_34 = (($__internal_compile_35 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1091)] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1091)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1093
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1096
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1106
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1107
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1112
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1113
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1113);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1114
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1114);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1119
                echo "                              ";
                if (((($__internal_compile_36 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1119)] ?? null) : null) && ((($__internal_compile_37 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1119)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1119)))) {
                    // line 1120
                    echo "

                                <option value=\"";
                    // line 1122
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1122);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1122);
                    echo "</option>


                              ";
                } else {
                    // line 1126
                    echo "

                                <option value=\"";
                    // line 1128
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1128);
                    echo "</option>


                              ";
                }
                // line 1132
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1133
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1138
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1161
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1166
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1188
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1217
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1246
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1275
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Color Variants
  \$('input[name=\\'color_variant\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1304
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'color_variant\\']').val('');

\t\t  \$('#product-color-variant' + item['value']).remove();

\t\t  \$('#product-color-variant').append('<div id=\"product-color-variant' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_color_variant[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-color-variant').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1330
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1334
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" style=\"position:relative;\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1337
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1337);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1337);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1337);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1337);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1339
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1340
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1354
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1379
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1384
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1407
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1409
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1410
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1416
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1417
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1423
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1424
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1430
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1431
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1437
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1438
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1444
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1445
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1451
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1452
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1461
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1462
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1463
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1464
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1465
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1466
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1475
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1503
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1508
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1513
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1523
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1530
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1532
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1533
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1539
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1544
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1549
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1550
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1561
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1567
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1567);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1567), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1569
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1570
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1571
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1572
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1573
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1574
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1575
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1589
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1594
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1595
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1595);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1595), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1597
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1598
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1599
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1600
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1601
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1602
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1608
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1617
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1621
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1622
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1623
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1633
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1640
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1640);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1640);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1642
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1646
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1647
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1647);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1647);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1649
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1652
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1664
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1669
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1674
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 1684
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/product_form.twig";
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
        return array (  3738 => 1684,  3725 => 1674,  3717 => 1669,  3709 => 1664,  3694 => 1652,  3689 => 1649,  3678 => 1647,  3674 => 1646,  3668 => 1642,  3657 => 1640,  3653 => 1639,  3644 => 1633,  3631 => 1623,  3627 => 1622,  3621 => 1621,  3614 => 1617,  3602 => 1608,  3593 => 1602,  3589 => 1601,  3585 => 1600,  3581 => 1599,  3577 => 1598,  3574 => 1597,  3563 => 1595,  3559 => 1594,  3551 => 1589,  3534 => 1575,  3530 => 1574,  3526 => 1573,  3522 => 1572,  3518 => 1571,  3514 => 1570,  3511 => 1569,  3500 => 1567,  3496 => 1566,  3488 => 1561,  3474 => 1550,  3470 => 1549,  3462 => 1544,  3454 => 1539,  3445 => 1533,  3441 => 1532,  3436 => 1530,  3426 => 1523,  3413 => 1513,  3405 => 1508,  3397 => 1503,  3366 => 1475,  3354 => 1466,  3350 => 1465,  3346 => 1464,  3342 => 1463,  3338 => 1462,  3334 => 1461,  3322 => 1452,  3318 => 1451,  3309 => 1445,  3305 => 1444,  3296 => 1438,  3292 => 1437,  3283 => 1431,  3279 => 1430,  3270 => 1424,  3266 => 1423,  3257 => 1417,  3253 => 1416,  3244 => 1410,  3240 => 1409,  3235 => 1407,  3209 => 1384,  3201 => 1379,  3173 => 1354,  3156 => 1340,  3153 => 1339,  3136 => 1337,  3132 => 1336,  3127 => 1334,  3120 => 1330,  3091 => 1304,  3059 => 1275,  3027 => 1246,  2995 => 1217,  2963 => 1188,  2938 => 1166,  2930 => 1161,  2905 => 1138,  2895 => 1133,  2889 => 1132,  2880 => 1128,  2876 => 1126,  2867 => 1122,  2863 => 1120,  2860 => 1119,  2856 => 1118,  2849 => 1114,  2845 => 1113,  2842 => 1112,  2838 => 1111,  2831 => 1107,  2827 => 1106,  2815 => 1096,  2802 => 1093,  2796 => 1091,  2794 => 1090,  2774 => 1088,  2770 => 1087,  2766 => 1086,  2763 => 1085,  2759 => 1084,  2752 => 1080,  2748 => 1079,  2740 => 1074,  2732 => 1068,  2721 => 1065,  2717 => 1064,  2714 => 1063,  2710 => 1062,  2702 => 1057,  2698 => 1056,  2686 => 1049,  2679 => 1047,  2668 => 1039,  2661 => 1034,  2655 => 1033,  2653 => 1032,  2646 => 1030,  2638 => 1029,  2624 => 1028,  2619 => 1027,  2614 => 1026,  2612 => 1025,  2603 => 1019,  2599 => 1018,  2583 => 1009,  2575 => 1004,  2561 => 993,  2554 => 988,  2548 => 987,  2546 => 986,  2539 => 984,  2528 => 980,  2515 => 974,  2505 => 971,  2497 => 970,  2492 => 967,  2486 => 966,  2477 => 962,  2473 => 960,  2464 => 956,  2460 => 954,  2457 => 953,  2453 => 952,  2447 => 949,  2442 => 948,  2437 => 947,  2435 => 946,  2426 => 940,  2422 => 939,  2418 => 938,  2414 => 937,  2410 => 936,  2396 => 925,  2389 => 920,  2383 => 919,  2381 => 918,  2374 => 916,  2363 => 912,  2350 => 906,  2340 => 903,  2332 => 902,  2324 => 901,  2321 => 900,  2315 => 899,  2307 => 897,  2299 => 895,  2296 => 894,  2292 => 893,  2288 => 892,  2283 => 891,  2278 => 890,  2276 => 889,  2267 => 883,  2263 => 882,  2259 => 881,  2255 => 880,  2251 => 879,  2247 => 878,  2233 => 867,  2226 => 862,  2220 => 861,  2218 => 860,  2211 => 858,  2206 => 855,  2200 => 854,  2191 => 850,  2187 => 848,  2178 => 844,  2174 => 842,  2171 => 841,  2167 => 840,  2161 => 837,  2156 => 834,  2150 => 833,  2141 => 829,  2137 => 827,  2128 => 823,  2124 => 821,  2121 => 820,  2117 => 819,  2111 => 816,  2106 => 815,  2101 => 814,  2099 => 813,  2090 => 807,  2086 => 806,  2070 => 797,  2068 => 796,  2065 => 795,  2059 => 792,  2056 => 791,  2044 => 787,  2040 => 785,  2035 => 784,  2033 => 783,  2027 => 780,  2017 => 775,  2010 => 770,  2004 => 769,  2002 => 768,  1995 => 766,  1985 => 765,  1981 => 763,  1973 => 757,  1965 => 751,  1962 => 750,  1954 => 744,  1946 => 738,  1944 => 737,  1936 => 734,  1926 => 733,  1922 => 731,  1914 => 725,  1906 => 719,  1903 => 718,  1895 => 712,  1887 => 706,  1885 => 705,  1877 => 702,  1867 => 701,  1863 => 699,  1855 => 693,  1847 => 687,  1844 => 686,  1836 => 680,  1828 => 674,  1826 => 673,  1818 => 670,  1813 => 667,  1806 => 663,  1802 => 662,  1798 => 660,  1791 => 656,  1787 => 655,  1783 => 653,  1781 => 652,  1773 => 649,  1763 => 648,  1755 => 647,  1751 => 645,  1748 => 644,  1742 => 643,  1733 => 639,  1729 => 637,  1720 => 633,  1716 => 631,  1714 => 630,  1711 => 629,  1707 => 628,  1704 => 627,  1702 => 626,  1694 => 623,  1689 => 622,  1685 => 621,  1676 => 615,  1672 => 614,  1668 => 613,  1664 => 612,  1660 => 611,  1656 => 610,  1650 => 607,  1647 => 606,  1644 => 605,  1629 => 599,  1621 => 596,  1618 => 595,  1615 => 594,  1600 => 588,  1592 => 585,  1589 => 584,  1586 => 583,  1571 => 577,  1563 => 574,  1560 => 573,  1557 => 572,  1544 => 568,  1537 => 566,  1534 => 565,  1531 => 564,  1518 => 560,  1511 => 558,  1508 => 557,  1505 => 556,  1492 => 552,  1485 => 550,  1482 => 549,  1480 => 548,  1473 => 543,  1466 => 539,  1462 => 538,  1458 => 536,  1451 => 532,  1447 => 531,  1443 => 529,  1441 => 528,  1433 => 525,  1426 => 523,  1407 => 521,  1402 => 520,  1397 => 519,  1394 => 518,  1392 => 517,  1384 => 512,  1381 => 511,  1375 => 510,  1373 => 509,  1362 => 508,  1357 => 507,  1355 => 506,  1342 => 496,  1335 => 491,  1329 => 490,  1327 => 489,  1320 => 487,  1317 => 486,  1295 => 484,  1291 => 483,  1279 => 482,  1274 => 481,  1269 => 480,  1267 => 479,  1258 => 473,  1254 => 472,  1243 => 463,  1234 => 461,  1227 => 460,  1223 => 459,  1219 => 458,  1212 => 456,  1206 => 452,  1197 => 450,  1190 => 449,  1186 => 448,  1182 => 447,  1175 => 445,  1169 => 441,  1160 => 439,  1153 => 438,  1149 => 437,  1145 => 436,  1138 => 434,  1132 => 430,  1124 => 428,  1119 => 427,  1114 => 426,  1109 => 424,  1104 => 423,  1102 => 422,  1099 => 421,  1095 => 420,  1090 => 418,  1084 => 414,  1075 => 412,  1068 => 411,  1064 => 410,  1060 => 409,  1053 => 407,  1047 => 403,  1038 => 401,  1031 => 400,  1027 => 399,  1023 => 398,  1016 => 396,  1005 => 392,  998 => 390,  987 => 384,  982 => 382,  974 => 376,  967 => 372,  963 => 371,  959 => 369,  952 => 365,  948 => 364,  944 => 362,  942 => 361,  934 => 356,  926 => 350,  920 => 349,  911 => 345,  907 => 343,  898 => 339,  894 => 337,  891 => 336,  887 => 335,  879 => 330,  870 => 326,  865 => 324,  857 => 318,  851 => 317,  842 => 313,  838 => 311,  829 => 307,  825 => 305,  822 => 304,  818 => 303,  810 => 298,  799 => 292,  791 => 289,  783 => 286,  776 => 282,  765 => 276,  759 => 273,  753 => 269,  748 => 268,  745 => 267,  740 => 265,  737 => 264,  734 => 263,  729 => 262,  726 => 261,  721 => 259,  718 => 258,  716 => 257,  711 => 255,  703 => 249,  697 => 248,  688 => 244,  684 => 242,  675 => 238,  671 => 236,  668 => 235,  664 => 234,  654 => 229,  646 => 223,  639 => 219,  635 => 218,  631 => 216,  624 => 212,  620 => 211,  616 => 209,  614 => 208,  606 => 203,  597 => 199,  590 => 197,  581 => 193,  576 => 191,  568 => 185,  562 => 184,  553 => 180,  549 => 178,  540 => 174,  536 => 172,  533 => 171,  529 => 170,  523 => 167,  517 => 164,  508 => 160,  503 => 158,  494 => 154,  489 => 152,  480 => 148,  473 => 146,  464 => 142,  457 => 140,  448 => 136,  441 => 134,  432 => 130,  425 => 128,  416 => 124,  409 => 122,  400 => 118,  393 => 116,  388 => 113,  382 => 112,  380 => 111,  374 => 110,  369 => 108,  363 => 104,  346 => 100,  337 => 98,  328 => 94,  316 => 87,  301 => 81,  294 => 79,  281 => 75,  274 => 73,  269 => 70,  263 => 69,  261 => 68,  251 => 67,  244 => 65,  229 => 61,  222 => 59,  217 => 56,  211 => 55,  209 => 54,  199 => 53,  192 => 51,  186 => 49,  182 => 48,  179 => 47,  162 => 45,  158 => 44,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\admin\\view\\template\\catalog\\product_form.twig");
    }
}
