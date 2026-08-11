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

/* default/template/information/contact.twig */
class __TwigTemplate_051d9178ca0a46f111b5fdafc858233a extends Template
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
form .form-control {
  border: 1px solid #dcdcdc;
  border-radius: 12px;
  padding: 12px 16px;
  background-color: #fdfdfd;
  transition: all 0.3s ease;
  box-shadow: none;
  height: 45px;

}

form .form-control:focus {
  border-color: #1a1a50; 
  box-shadow: 0 0 8px rgba(122, 90, 245, 0.3);
  background-color: #fff;
}

form textarea.form-control {
  resize: none;
  min-height: 140px;
}

form .mb-3 {
  margin-bottom: 22px;
}

</style>
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 33
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 33);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 33);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ul>
  <div class=\"row\">";
        // line 36
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 37
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 39
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 41
            echo "    ";
        } else {
            // line 42
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 43
            echo "    ";
        }
        // line 44
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"container contact-container shadow-sm\">
        <div class=\"text-center mb-4\">
          <h2>";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        </div>
        <div class=\"row g-4\">
          <div class=\"col-md-6\">
            <form action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              ";
        // line 53
        echo "              ";
        if (($context["error_warning"] ?? null)) {
            // line 54
            echo "              <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "              <div class=\"mb-3 required\">
                ";
        // line 58
        echo "                <input
                  type=\"text\"
                  name=\"name\"
                  value=\"";
        // line 61
        echo ($context["name"] ?? null);
        echo "\"
                  placeholder=\"";
        // line 62
        echo ($context["entry_name"] ?? null);
        echo "\"
                  id=\"input-name\"
                  class=\"form-control\"
                  required
                />
                ";
        // line 67
        if (($context["error_name"] ?? null)) {
            // line 68
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 70
        echo "              </div>
              <div class=\"mb-3 required\">
                ";
        // line 73
        echo "                <input
                  type=\"email\"
                  name=\"email\"
                  value=\"";
        // line 76
        echo ($context["email"] ?? null);
        echo "\"
                  placeholder=\"";
        // line 77
        echo ($context["entry_email"] ?? null);
        echo "\"
                  id=\"input-email\"
                  class=\"form-control\"
                  required
                />
                ";
        // line 82
        if (($context["error_email"] ?? null)) {
            // line 83
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 85
        echo "              </div>
              <div class=\"mb-3 required\">
                ";
        // line 88
        echo "                <textarea
                  name=\"enquiry\"
                  rows=\"5\"
                  placeholder=\"";
        // line 91
        echo ($context["entry_enquiry"] ?? null);
        echo "\" ";
        // line 92
        echo "                  id=\"input-enquiry\"
                  class=\"form-control\"
                  required
                >";
        // line 95
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 96
        if (($context["error_enquiry"] ?? null)) {
            // line 97
            echo "                <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 99
        echo "              </div>
              ";
        // line 101
        echo "              ";
        echo ($context["captcha"] ?? null);
        echo "
              <div class=\"col-md-5 mx-auto d-flex justify-content-center\" style=\"padding-bottom:25px;\">
                <button type=\"submit\" class=\"btn btn-custom btn-login btn-giris\">
                  ";
        // line 104
        echo ($context["button_submit"] ?? null);
        echo "
                </button>
              </div>
            </form>
          </div>
          <div class=\"col-md-6\">
            <div class=\"contact-info\">
              <h5>";
        // line 111
        echo ($context["text_location"] ?? null);
        echo "</h5> ";
        // line 112
        echo "              ";
        // line 113
        echo "              ";
        // line 114
        echo "              ";
        // line 115
        echo "              ";
        if (($context["address"] ?? null)) {
            // line 116
            echo "              <p><strong>Adres:</strong><br/> ";
            echo ($context["address"] ?? null);
            echo "</p>
              ";
        }
        // line 118
        echo "              ";
        // line 119
        echo "              ";
        if (($context["telephone"] ?? null)) {
            // line 120
            echo "              <p><strong>";
            echo ($context["text_telephone"] ?? null);
            echo "</strong> ";
            echo ($context["telephone"] ?? null);
            echo "</p>
              ";
        }
        // line 122
        echo "              ";
        // line 123
        echo "              ";
        if (($context["store_email"] ?? null)) {
            // line 124
            echo "              <p><strong>E-Posta:</strong> <a href=\"mailto:";
            echo ($context["store_email"] ?? null);
            echo "\">";
            echo ($context["store_email"] ?? null);
            echo "</a></p>
              ";
        }
        // line 126
        echo "              ";
        // line 127
        echo "              ";
        if (($context["open"] ?? null)) {
            // line 128
            echo "              <p>
                <strong>";
            // line 129
            echo ($context["text_open"] ?? null);
            echo ":</strong><br />";
            echo ($context["open"] ?? null);
            echo "
              </p>
              ";
        }
        // line 132
        echo "              ";
        // line 133
        echo "              ";
        // line 138
        echo "              ";
        // line 139
        echo "              ";
        if (($context["geocode"] ?? null)) {
            // line 140
            echo "              <div class=\"mt-3\">
                  <a href=\"http://maps.google.com/maps?q=";
            // line 141
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info btn-block\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              </div>
              ";
        }
        // line 144
        echo "              ";
        // line 145
        echo "              ";
        // line 148
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 153
        echo "      ";
        if (($context["locations"] ?? null)) {
            // line 154
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 157
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 159);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 159);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 161);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 164
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 165);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 165);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 165);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 167
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 167);
                echo "</strong><br/>
                  <address>
                  ";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 169);
                echo "
                  </address>
                  ";
                // line 171
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 171)) {
                    // line 172
                    echo "                  <a href=\"http://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 172));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 174
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 175
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 176);
                echo "<br/>
                  <br/>
                  ";
                // line 178
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 178)) {
                    // line 179
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 180);
                    echo "
                  ";
                }
                // line 182
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 184)) {
                    // line 185
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 186);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 189
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 191);
                    echo "
                  ";
                }
                // line 193
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "      </div>
      ";
        }
        // line 201
        echo "      ";
        // line 202
        echo "      ";
        // line 207
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 208
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 210
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
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
        return array (  488 => 210,  483 => 208,  478 => 207,  476 => 202,  474 => 201,  470 => 199,  459 => 193,  454 => 191,  449 => 190,  446 => 189,  440 => 186,  435 => 185,  433 => 184,  429 => 182,  424 => 180,  419 => 179,  417 => 178,  412 => 176,  408 => 175,  405 => 174,  395 => 172,  393 => 171,  388 => 169,  382 => 167,  372 => 165,  370 => 164,  364 => 161,  357 => 159,  353 => 157,  349 => 156,  343 => 154,  340 => 153,  334 => 148,  332 => 145,  330 => 144,  320 => 141,  317 => 140,  314 => 139,  312 => 138,  310 => 133,  308 => 132,  300 => 129,  297 => 128,  294 => 127,  292 => 126,  284 => 124,  281 => 123,  279 => 122,  271 => 120,  268 => 119,  266 => 118,  260 => 116,  257 => 115,  255 => 114,  253 => 113,  251 => 112,  248 => 111,  238 => 104,  231 => 101,  228 => 99,  222 => 97,  220 => 96,  216 => 95,  211 => 92,  208 => 91,  203 => 88,  199 => 85,  193 => 83,  191 => 82,  183 => 77,  179 => 76,  174 => 73,  170 => 70,  164 => 68,  162 => 67,  154 => 62,  150 => 61,  145 => 58,  142 => 56,  136 => 54,  133 => 53,  129 => 51,  122 => 47,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  95 => 38,  93 => 37,  89 => 36,  86 => 35,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\contact.twig");
    }
}
