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
/* İletişim Sayfası Özel Tasarımı */
footer { margin-top: 0; }

#content {
  min-height: 0 !important;
}

#information-contact {
  margin-top: 15px;
  margin-bottom: 60px;
}

#information-contact,
#information-contact p,
#information-contact .contact-details {
  font-family: 'DM Sans', sans-serif;
  font-size: 13.5px;
  font-weight: 400;
  color: #1a1a50;
}

/* Form heading */
#information-contact .contact-heading-main {
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-weight: 400;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #1a1a50;
  font-size: 22px;
  text-align: center;
  margin-bottom: 35px;
}

/* Contact Info text */
#information-contact .contact-details p {
  margin-bottom: 15px;
  line-height: 1.8;
}
#information-contact .contact-details a {
  color: #1a1a50;
  text-decoration: none;
}
#information-contact .contact-details a:not(.btn-white):hover {
  text-decoration: underline;
}

/* Floating label input styling fix for contact page */
#information-contact .login-field {
  position: relative;
  margin-top: 16px;
  margin-bottom: 28px;
}

#information-contact .login-field__input {
  display: block !important;
  width: 100% !important;
  height: 48px !important;
  border: none !important;
  border-bottom: 1px solid rgba(26, 26, 80, 0.25) !important;
  border-radius: 0 !important;
  background: transparent !important;
  padding: 14px 10px 6px 10px !important;
  font-family: 'DM Sans', sans-serif !important;
  font-size: 14.5px !important;
  font-weight: 400 !important;
  color: #1a1a50 !important;
  outline: none !important;
  box-shadow: none !important;
  box-sizing: border-box !important;
  line-height: 1.4 !important;
}

#information-contact textarea.login-field__input {
  height: auto !important;
  min-height: 120px !important;
  resize: vertical !important;
  padding: 12px 10px 10px 10px !important;
}

#information-contact .login-field__label {
  position: absolute !important;
  left: 10px !important;
  top: 24px !important;
  transform: translateY(-50%) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-size: 14px !important;
  color: rgba(26, 26, 80, 0.6) !important;
  pointer-events: none !important;
  transition: all 0.2s ease !important;
}

#information-contact textarea.login-field__input + .login-field__label {
  top: 20px !important;
  transform: translateY(0) !important;
}

#information-contact .login-field__input:focus + .login-field__label,
#information-contact .login-field__input:not(:placeholder-shown) + .login-field__label {
  top: -16px !important;
  transform: translateY(0) !important;
  font-size: 11px !important;
  color: rgba(26, 26, 80, 0.8) !important;
  font-weight: 600 !important;
  letter-spacing: 0.05em !important;
}

/* Flexbox Layout for perfect centering */
#information-contact .contact-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  gap: 50px;
  max-width: 900px;
  margin: 0 auto;
}

#information-contact .contact-form-side,
#information-contact .contact-info-side {
  flex: 1;
  min-width: 320px;
  max-width: 400px;
}

/* Mavi Buton (Gönder) */
#information-contact .btn-blue {
  display: block;
  width: 100%;
  padding: 14px 24px;
  background-color: #1a1a50;
  color: #fff !important;
  border: 1.5px solid #1a1a50;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.35s ease;
  border-radius: 0;
  text-align: center;
}
#information-contact .btn-blue:hover {
  background-color: #fff;
  color: #1a1a50 !important;
}

/* Beyaz Buton (Haritayı Göster) */
#information-contact .btn-white {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  padding: 13px 0; /* Remove side padding to align exactly with text */
  background: transparent;
  color: #1a1a50 !important;
  border: none;
  font-family: 'DM Sans', sans-serif;
  font-size: 12.5px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  text-decoration: none !important;
  cursor: pointer;
  transition: color 0.35s ease;
  border-radius: 0;
}
#information-contact .btn-white span {
  position: relative;
  padding-bottom: 4px;
  background-image: linear-gradient(#1a1a50, #1a1a50);
  background-size: 0% 1px;
  background-repeat: no-repeat;
  background-position: center bottom;
  transition: background-size 0.3s ease;
}

#information-contact .btn-white:hover span {
  background-size: 100% 1px;
}

#information-contact .btn-white:hover {
  text-decoration: none !important;
}
</style>
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">";
        // line 190
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 191
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 192
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 193
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 194
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 195
            echo "    ";
        } else {
            // line 196
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 197
            echo "    ";
        }
        // line 198
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      
      <div class=\"row mt-5\">
        <div class=\"col-12\">
          <h2 class=\"contact-heading-main\">";
        // line 202
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        </div>
      </div>
      
      <div class=\"contact-wrapper mt-3\">
        
        <div class=\"contact-form-side\">
          <form action=\"";
        // line 209
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            
            ";
        // line 211
        if (($context["error_warning"] ?? null)) {
            // line 212
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 214
        echo "
            <div class=\"login-field\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 216
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"login-field__input\" placeholder=\" \" required />
              <label for=\"input-name\" class=\"login-field__label\">";
        // line 217
        echo ($context["entry_name"] ?? null);
        echo " *</label>
              <span class=\"login-field__line\"></span>
              ";
        // line 219
        if (($context["error_name"] ?? null)) {
            echo "<div class=\"text-danger mt-1\">";
            echo ($context["error_name"] ?? null);
            echo "</div>";
        }
        // line 220
        echo "            </div>
            
            <div class=\"login-field\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 223
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"login-field__input\" placeholder=\" \" required />
              <label for=\"input-email\" class=\"login-field__label\">";
        // line 224
        echo ($context["entry_email"] ?? null);
        echo " *</label>
              <span class=\"login-field__line\"></span>
              ";
        // line 226
        if (($context["error_email"] ?? null)) {
            echo "<div class=\"text-danger mt-1\">";
            echo ($context["error_email"] ?? null);
            echo "</div>";
        }
        // line 227
        echo "            </div>
            
            <div class=\"login-field\">
              <textarea name=\"enquiry\" rows=\"5\" id=\"input-enquiry\" class=\"login-field__input\" placeholder=\" \" required>";
        // line 230
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              <label for=\"input-enquiry\" class=\"login-field__label\">";
        // line 231
        echo ($context["entry_enquiry"] ?? null);
        echo " *</label>
              <span class=\"login-field__line\"></span>
              ";
        // line 233
        if (($context["error_enquiry"] ?? null)) {
            echo "<div class=\"text-danger mt-1\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>";
        }
        // line 234
        echo "            </div>
            
            ";
        // line 236
        echo ($context["captcha"] ?? null);
        echo "
            
            <div class=\"mt-4\">
              <button type=\"submit\" class=\"btn-blue\">
                <span>";
        // line 240
        echo ($context["button_submit"] ?? null);
        echo "</span>
              </button>
            </div>
          </form>
        </div>
        
        <div class=\"contact-info-side pt-2\">
          <div class=\"contact-details\">
            ";
        // line 248
        if (($context["address"] ?? null)) {
            // line 249
            echo "            <p><strong>Adres:</strong><br/> ";
            echo ($context["address"] ?? null);
            echo "</p>
            ";
        }
        // line 251
        echo "            ";
        if (($context["telephone"] ?? null)) {
            // line 252
            echo "            <p><strong>";
            echo ($context["text_telephone"] ?? null);
            echo "</strong> ";
            echo ($context["telephone"] ?? null);
            echo "</p>
            ";
        }
        // line 254
        echo "            ";
        if (($context["store_email"] ?? null)) {
            // line 255
            echo "            <p><strong>E-Posta:</strong> <a href=\"mailto:";
            echo ($context["store_email"] ?? null);
            echo "\">";
            echo ($context["store_email"] ?? null);
            echo "</a></p>
            ";
        }
        // line 257
        echo "            ";
        if (($context["open"] ?? null)) {
            // line 258
            echo "            <p><strong>";
            echo ($context["text_open"] ?? null);
            echo ":</strong><br />";
            echo ($context["open"] ?? null);
            echo "</p>
            ";
        }
        // line 260
        echo "            ";
        if (($context["geocode"] ?? null)) {
            // line 261
            echo "            <div class=\"mt-3\">
              <a href=\"http://maps.google.com/maps?q=";
            // line 262
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn-white\">
                <span><i class=\"fa fa-map-marker\"></i> ";
            // line 263
            echo ($context["button_map"] ?? null);
            echo "</span>
              </a>
            </div>
            ";
        }
        // line 267
        echo "          </div>
        </div>
        
      </div>
      ";
        // line 272
        echo "      ";
        if (($context["locations"] ?? null)) {
            // line 273
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 276
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 278);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 278);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 280);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 283
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 283)) {
                    // line 284
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 284);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 284);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 284);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 286
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 286);
                echo "</strong><br/>
                  <address>
                  ";
                // line 288
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 288);
                echo "
                  </address>
                  ";
                // line 290
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 290)) {
                    // line 291
                    echo "                  <a href=\"http://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 291));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 293
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 294
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 295);
                echo "<br/>
                  <br/>
                  ";
                // line 297
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 297)) {
                    // line 298
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 299);
                    echo "
                  ";
                }
                // line 301
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 303
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 303)) {
                    // line 304
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 305);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 308
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 308)) {
                    // line 309
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 310);
                    echo "
                  ";
                }
                // line 312
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
            // line 318
            echo "      </div>
      ";
        }
        // line 320
        echo "      ";
        // line 321
        echo "      ";
        // line 326
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 327
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 329
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
        return array (  581 => 329,  576 => 327,  571 => 326,  569 => 321,  567 => 320,  563 => 318,  552 => 312,  547 => 310,  542 => 309,  539 => 308,  533 => 305,  528 => 304,  526 => 303,  522 => 301,  517 => 299,  512 => 298,  510 => 297,  505 => 295,  501 => 294,  498 => 293,  488 => 291,  486 => 290,  481 => 288,  475 => 286,  465 => 284,  463 => 283,  457 => 280,  450 => 278,  446 => 276,  442 => 275,  436 => 273,  433 => 272,  427 => 267,  420 => 263,  414 => 262,  411 => 261,  408 => 260,  400 => 258,  397 => 257,  389 => 255,  386 => 254,  378 => 252,  375 => 251,  369 => 249,  367 => 248,  356 => 240,  349 => 236,  345 => 234,  339 => 233,  334 => 231,  330 => 230,  325 => 227,  319 => 226,  314 => 224,  310 => 223,  305 => 220,  299 => 219,  294 => 217,  290 => 216,  286 => 214,  280 => 212,  278 => 211,  273 => 209,  263 => 202,  253 => 198,  250 => 197,  247 => 196,  244 => 195,  241 => 194,  238 => 193,  235 => 192,  233 => 191,  229 => 190,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\contact.twig");
    }
}
