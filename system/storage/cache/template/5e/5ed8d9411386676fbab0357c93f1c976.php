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

/* default/template/checkout/checkout.twig */
class __TwigTemplate_33d636f5d39b7fdd6acb523edf17da1d extends Template
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
/* WIZARD LOGIC FOR CHECKOUT */
body.checkout-mode { background-color: #f8f6f2; }
.uannes-checkout-page { padding-top: 40px; padding-bottom: 60px; min-height: 100vh; }
.uannes-checkout-page > h1 { text-align: center; font-family: 'Cormorant Garamond', Georgia, serif; font-size: 32px; font-weight: 400; color: #1a1a50; text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 50px; }
.uannes-checkout-page .panel-group { margin-bottom: 0; max-width: 750px; margin: 0 auto; }

/* Sadece aktif paneli göster */
.uannes-checkout-page .panel-default { border: none !important; box-shadow: none !important; background-color: transparent !important; border-radius: 0; margin-top: 0; display: none !important; }
.uannes-checkout-page .panel-default.active-step { display: block !important; }

.uannes-checkout-page .panel-heading { background-color: transparent !important; border: none !important; padding: 0 0 25px 0 !important; border-radius: 0; }
.uannes-checkout-page .panel-title { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 20px; font-weight: 400; color: #1a1a50; text-transform: uppercase; letter-spacing: 0.12em; text-align: left; border-bottom: 1px solid rgba(26,26,80,0.2); padding-bottom: 15px; margin-bottom: 25px; margin-top: 40px; }
.uannes-checkout-page h2 { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 18px; font-weight: 400; color: #1a1a50; text-transform: uppercase; letter-spacing: 0.1em; text-align: left; margin-bottom: 20px; margin-top: 35px; }
.uannes-checkout-page .panel-title a { color: #1a1a50 !important; text-decoration: none; display: block; pointer-events: none; }
.uannes-checkout-page .panel-title a i { display: none !important; }

.uannes-checkout-page .panel-body { border-top: none !important; padding: 0 0 30px 0 !important; font-family: 'DM Sans', sans-serif; font-size: 13.5px; font-weight: 400; color: #1a1a50; }

/* Floating Label Form Fields Matching Admin Login */
.uannes-checkout-page .form-group,
.uannes-checkout-page .login-field {
  position: relative;
  margin-bottom: 24px;
  background: transparent;
}

.uannes-checkout-page .form-control,
.uannes-checkout-page .login-field__input {
  width: 100%;
  height: 46px;
  border: none !important;
  border-bottom: 1px solid #c8c8c8 !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  background: transparent !important;
  background-color: transparent !important;
  padding: 22px 8px 4px 8px !important;
  font-family: 'Open Sans', 'DM Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  color: #1a1a50;
  outline: none !important;
  box-sizing: border-box;
  -webkit-appearance: none;
  line-height: 1.4;
  transition: border-color 0.3s ease;
}

.uannes-checkout-page .form-control:focus,
.uannes-checkout-page .login-field__input:focus {
  border-bottom-color: #1a1a50 !important;
  background: transparent !important;
  background-color: transparent !important;
  outline: none !important;
}

.uannes-checkout-page .form-control:-webkit-autofill,
.uannes-checkout-page .form-control:-webkit-autofill:hover,
.uannes-checkout-page .form-control:-webkit-autofill:focus,
.uannes-checkout-page .form-control:-webkit-autofill:active,
.uannes-checkout-page .login-field__input:-webkit-autofill,
.uannes-checkout-page .login-field__input:-webkit-autofill:hover,
.uannes-checkout-page .login-field__input:-webkit-autofill:focus,
.uannes-checkout-page .login-field__input:-webkit-autofill:active {
  -webkit-box-shadow: 0 0 0px 1000px #f8f6f2 inset !important;
  box-shadow: 0 0 0px 1000px #f8f6f2 inset !important;
  -webkit-text-fill-color: #1a1a50 !important;
  background-color: transparent !important;
  transition: background-color 5000s ease-in-out 0s !important;
}

.uannes-checkout-page .control-label,
.uannes-checkout-page .login-field__label {
  position: absolute;
  left: 8px;
  top: 50%;
  transform: translateY(-50%);
  font-family: 'Open Sans', 'DM Sans', sans-serif;
  font-size: 12px;
  font-weight: 400;
  color: #999;
  pointer-events: none;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  transition: top 0.25s cubic-bezier(0.25, 0.8, 0.25, 1),
    font-size 0.25s cubic-bezier(0.25, 0.8, 0.25, 1),
    color 0.25s cubic-bezier(0.25, 0.8, 0.25, 1),
    transform 0.25s cubic-bezier(0.25, 0.8, 0.25, 1);
  transform-origin: left top;
}

.uannes-checkout-page .form-group.required .control-label::after,
.uannes-checkout-page .login-field.required .login-field__label::after {
  content: ' *';
  color: #c53030;
}

.uannes-checkout-page .form-control:focus + .control-label,
.uannes-checkout-page .form-control:not(:placeholder-shown) + .control-label,
.uannes-checkout-page select.form-control:focus + .control-label,
.uannes-checkout-page select.form-control:not([value=\"\"]) + .control-label,
.uannes-checkout-page .login-field__input:focus + .login-field__label,
.uannes-checkout-page .login-field__input:not(:placeholder-shown) + .login-field__label {
  top: 0px;
  transform: translateY(0);
  font-size: 9.5px;
  color: #999;
  letter-spacing: 0.04em;
}

/* Horizontal Form Reset */
.uannes-checkout-page .form-horizontal .form-group {
  margin-left: 0;
  margin-right: 0;
}
.uannes-checkout-page .form-horizontal .col-sm-10,
.uannes-checkout-page .form-horizontal .col-sm-2 {
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  float: none;
}

/* Butonlar */
.uannes-checkout-page .buttons { display: flex !important; align-items: center; margin-top: 30px; flex-direction: row; }
.uannes-checkout-page .buttons .pull-right { margin-left: auto; }
.uannes-checkout-page .btn-primary, .uannes-checkout-page #button-confirm, .uannes-checkout-page input[type=\"button\"].btn-primary, .uannes-checkout-page input[type=\"submit\"].btn-primary, .uannes-checkout-page button.btn-primary { background-color: #1a1a50 !important; color: #ffffff !important; border: 1px solid #1a1a50 !important; border-radius: 0 !important; padding: 12px 40px !important; font-family: 'DM Sans', sans-serif !important; font-size: 13.5px !important; font-weight: 400 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; transition: all 0.3s ease; min-width: 150px; }
.uannes-checkout-page .btn-primary:hover, .uannes-checkout-page #button-confirm:hover, .uannes-checkout-page input[type=\"button\"].btn-primary:hover, .uannes-checkout-page input[type=\"submit\"].btn-primary:hover, .uannes-checkout-page button.btn-primary:hover { background-color: #ffffff !important; color: #1a1a50 !important; }

/* Geri Butonu */
.uannes-checkout-page .btn-back { background-color: #ffffff !important; color: #1a1a50 !important; border: 1px solid #1a1a50 !important; border-radius: 0 !important; padding: 12px 40px !important; font-family: 'DM Sans', sans-serif; font-size: 13.5px; font-weight: 400; text-transform: uppercase; letter-spacing: 0.1em; transition: all 0.3s ease; position: relative; min-width: 150px; }
.uannes-checkout-page .btn-back::after { content: ''; position: absolute; bottom: 8px; left: 50%; width: 0; height: 1px; background-color: #1a1a50; transition: all 0.3s ease; transform: translateX(-50%); }
.uannes-checkout-page .btn-back:hover::after { width: 50%; }

/* Radio & Checkbox Ozel Tasarimi (Gri Kutu Kaldirildi) */
.uannes-checkout-page input[type=\"radio\"], .uannes-checkout-page input[type=\"checkbox\"] { appearance: none; -webkit-appearance: none; -moz-appearance: none; width: 14px; height: 14px; border: 1px solid #1a1a50; border-radius: 50%; outline: none !important; box-shadow: none !important; background-color: transparent !important; margin-right: 8px; position: relative; top: 2px; }
.uannes-checkout-page input[type=\"checkbox\"] { border-radius: 0; }
.uannes-checkout-page input[type=\"radio\"]:checked, .uannes-checkout-page input[type=\"checkbox\"]:checked { background-color: #1a1a50 !important; }
.uannes-checkout-page input[type=\"checkbox\"]:checked { background-image: url(\"data:image/svg+xml;utf8,<svg fill='%23ffffff' height='10' viewBox='0 0 24 24' width='10' xmlns='http://www.w3.org/2000/svg'><path d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/></svg>\") !important; background-position: center !important; background-repeat: no-repeat !important; }
.uannes-checkout-page input[type=\"radio\"]:checked { box-shadow: inset 0 0 0 3px #f8f6f2 !important; }

/* Select Box Ozel Tasarimi Matching Input Fields */
.uannes-checkout-page select.form-control {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent url(\"data:image/svg+xml;utf8,<svg fill='%23999999' height='20' viewBox='0 0 24 24' width='20' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>\") no-repeat right 8px center !important;
  background-size: 18px !important;
  padding: 22px 30px 4px 8px !important;
  font-family: 'Open Sans', 'DM Sans', sans-serif !important;
  font-size: 13px !important;
  font-weight: 400 !important;
  color: #999 !important;
  height: 46px !important;
  cursor: pointer;
  transition: color 0.25s ease, border-color 0.3s ease;
}
.uannes-checkout-page select.form-control.has-value {
  color: #1a1a50 !important;
  background-image: url(\"data:image/svg+xml;utf8,<svg fill='%231a1a50' height='20' viewBox='0 0 24 24' width='20' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>\") !important;
}
.uannes-checkout-page select.form-control:hover,
.uannes-checkout-page select.form-control:focus {
  background-color: transparent !important;
  outline: none !important;
  box-shadow: none !important;
  border-bottom-color: #1a1a50 !important;
}
.uannes-checkout-page select.form-control option {
  background-color: #ffffff;
  color: #1a1a50;
  font-family: 'Open Sans', 'DM Sans', sans-serif;
  font-size: 13px;
  font-weight: 400;
  padding: 8px 10px;
}
.uannes-checkout-page select.form-control option[value=\"\"],
.uannes-checkout-page select.form-control option:first-child {
  color: #999 !important;
}
.uannes-checkout-page select.form-control option:checked,
.uannes-checkout-page select.form-control option:hover,
.uannes-checkout-page select.form-control option:focus {
  background-color: #1a1a50 !important;
  color: #ffffff !important;
  box-shadow: 0 0 10px 100px #1a1a50 inset !important;
}

/* Sipariş Onayla Tablosu */
.uannes-checkout-page #collapse-checkout-confirm .table { border: 1px solid rgba(26,26,80,0.2) !important; margin-bottom: 0; }
.uannes-checkout-page #collapse-checkout-confirm .table > thead > tr > td { background-color: #ece8df !important; color: #1a1a50 !important; font-family: 'DM Sans', sans-serif; font-size: 11px; font-weight: 500; letter-spacing: 0.07em; text-transform: uppercase; border-bottom: 1px solid rgba(26,26,80,0.2) !important; border-top: none !important; border-left: none !important; border-right: none !important; }
.uannes-checkout-page #collapse-checkout-confirm .table > tbody > tr > td { border-color: rgba(26,26,80,0.2) !important; vertical-align: middle; }
.uannes-checkout-page #collapse-checkout-confirm .table > tfoot > tr > td { border: none !important; padding: 5px 8px !important; }
.uannes-checkout-page #collapse-checkout-confirm .table > tfoot > tr:first-child > td { padding-top: 15px !important; }

.uannes-checkout-page .radio label, .uannes-checkout-page .checkbox label { font-family: 'DM Sans', sans-serif; font-size: 13.5px; color: #1a1a50; }

/* Misafir Alışverişi Alt Başlıkları */
.uannes-checkout-page .vannes-legend {
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-size: 16px;
  font-weight: 400;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #1a1a50;
  border-bottom: 1px solid rgba(26,26,80,0.1);
  padding-bottom: 10px;
  margin-bottom: 20px;
  width: 100%;
}

/* Devam Butonu Ozel Tasarimi */
.uannes-checkout-page .btn-continue-custom {
  background-color: #ffffff !important;
  color: #1a1a50 !important;
  border: none !important;
  box-shadow: none !important;
  position: relative;
  display: inline-block;
  padding: 5px 2px;
  border-radius: 0 !important;
  font-family: 'DM Sans', sans-serif;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 500;
}

.uannes-checkout-page .btn-continue-custom:hover {
  background-color: #ffffff !important;
  color: #1a1a50 !important;
  border: none !important;
}

.uannes-checkout-page .btn-continue-custom::after {
  content: '';
  position: absolute;
  bottom: 4px;
  left: 50%;
  width: 100%;
  height: 1px;
  background-color: #1a1a50;
  transform: translateX(-50%) scaleX(0);
  transform-origin: center;
  transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}

.uannes-checkout-page .btn-continue-custom:hover::after {
  transform: translateX(-50%) scaleX(1);
}
</style>
<div id=\"checkout-checkout\" class=\"container uannes-checkout-page\">
  ";
        // line 256
        if (($context["error_warning"] ?? null)) {
            // line 257
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 261
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 262
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 263
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 264
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 265
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 266
            echo "    ";
        } else {
            // line 267
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 268
            echo "    ";
        }
        // line 269
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 273
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 279
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 280
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 282
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        } else {
            // line 289
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 291
            echo ($context["text_checkout_payment_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 298
        echo "        ";
        if (($context["shipping_required"] ?? null)) {
            // line 299
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 301
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 309
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 316
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 318
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 326
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      ";
        // line 333
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 334
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 340
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 342
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 346
        echo ($context["text_checkout_account"] ?? null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 348
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
\t\t}
\t}
});

";
        // line 353
        if ( !($context["logged"] ?? null)) {
            // line 354
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 361
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 371
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 378
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 388
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    var account_val = \$('input[name=\\'account\\']:checked').val();
    if (account_val == 'register') {
        window.location.href = 'index.php?route=account/register';
        return;
    }

    \$.ajax({
        url: 'index.php?route=checkout/' + account_val,
        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').prop('disabled', true);
\t\t},
        complete: function() {
\t\t\t\$('#button-account').prop('disabled', false);
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 413
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 415
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').prop('disabled', true);
\t\t},
        complete: function() {
            \$('#button-login').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-register').prop('disabled', true);
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').prop('disabled', false);

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 495
        if (($context["shipping_required"] ?? null)) {
            // line 496
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 510
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 519
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 523
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 524
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 525
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 538
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 542
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 543
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 544
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 552
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 558
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 562
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 569
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 579
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').prop('disabled', true);
\t\t},
        complete: function() {
\t\t\t\$('#button-payment-address').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                ";
        // line 630
        if (($context["shipping_required"] ?? null)) {
            // line 631
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 637
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 641
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 642
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 643
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
                ";
        } else {
            // line 661
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 667
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 671
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});
                ";
        }
        // line 689
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').prop('disabled', true);
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').prop('disabled', false);

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 742
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 746
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 747
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').prop('disabled', true);
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').prop('disabled', false);

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 819
        if (($context["shipping_required"] ?? null)) {
            // line 820
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').prop('disabled', false);
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 837
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 846
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 850
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 851
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').prop('disabled', false);
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 867
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 871
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 872
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 873
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 881
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 890
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 894
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 901
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').prop('disabled', true);
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').prop('disabled', false);

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 954
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 958
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 959
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').prop('disabled', true);
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').prop('disabled', false);

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1003
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1007
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').prop('disabled', true);
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').prop('disabled', false);
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1051
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

/* WIZARD LOGIC FOR UANNES CHECKOUT */
\$(document).ready(function() {
    // 1. Listen for panel opens to set active-step and history hash
    \$('#accordion').on('show.bs.collapse', function (e) {
        var panelId = e.target.id;
        if (window.location.hash !== '#' + panelId) {
            var newUrl = window.location.pathname + window.location.search + '#' + panelId;
            history.pushState(null, null, newUrl);
        }

        \$('.panel-default').removeClass('active-step');
        \$(e.target).closest('.panel-default').addClass('active-step');
        
        // Scroll to top of checkout container for better wizard experience
        \$('html, body').animate({
            scrollTop: \$('#checkout-checkout').offset().top - 100
        }, 300);
    });

    // Handle Browser Back Button (popstate)
    \$(window).on('popstate', function() {
        var hash = window.location.hash;
        if (hash) {
            var \$panelToOpen = \$(hash);
            if (\$panelToOpen.length && !\$panelToOpen.hasClass('in')) {
                var \$toggle = \$panelToOpen.closest('.panel-default').find('.accordion-toggle');
                if (\$toggle.length) {
                    \$toggle.trigger('click');
                } else if (\$panelToOpen.closest('.panel-default').find('.panel-heading .panel-title').length) {
                    // Force open if no toggle but we have panel
                    \$panelToOpen.collapse('show');
                }
            }
        }
    });

    // 2. Initialize first active step
    setTimeout(function() {
        \$('.panel-collapse.in').closest('.panel-default').addClass('active-step');
    }, 500);

    // 3. Inject \"Geri\" button dynamically when new steps are loaded via AJAX
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes.length) {
                \$('.uannes-checkout-page .panel-body .buttons').each(function() {
                    var \$buttons = \$(this);
                    if (\$buttons.find('.btn-back').length === 0) {
                        var \$panel = \$buttons.closest('.panel-default');
                        // Sadece aktif ve geçerli bir önceki panel varsa Geri butonunu ekle
                        var hasPrevStep = \$panel.prevAll('.panel-default').filter(function() {
                            return \$(this).find('.accordion-toggle').length > 0;
                        }).length > 0;
                        
                        if (hasPrevStep) {
                            \$buttons.prepend('<button type=\"button\" class=\"btn btn-back\">Geri</button>');
                        }
                    }
                });
            }
        });
    });

    var accordionElement = document.getElementById('accordion');
    if (accordionElement) {
        observer.observe(accordionElement, { childList: true, subtree: true });
    }

    // 4. Handle \"Geri\" button click
    \$(document).on('click', '.btn-back', function() {
        var \$currentPanel = \$(this).closest('.panel-default');
        
        // Find the previous panel that has a valid accordion toggle link
        var \$prevPanel = \$currentPanel.prevAll('.panel-default').filter(function() {
            return \$(this).find('.accordion-toggle').length > 0;
        }).first();
        
        if (\$prevPanel.length) {
            \$prevPanel.find('.accordion-toggle').trigger('click');
        }
    });

    // 5. Shorten confirm button text on mobile
    if (window.innerWidth <= 767) {
        var confirmObserver = new MutationObserver(function() {
            var \$btn = \$('#button-confirm');
            if (\$btn.length && \$btn.val() !== 'Onaylıyorum') {
                \$btn.val('Onaylıyorum');
            }
        });
        if (accordionElement) {
            confirmObserver.observe(accordionElement, { childList: true, subtree: true });
        }
    }

    // 6. Synchronize Select Box Colors with Input Placeholder Color
    function updateSelectColors() {
        \$('.uannes-checkout-page select.form-control').each(function() {
            var val = \$(this).val();
            if (val && val !== '0' && val !== '') {
                \$(this).addClass('has-value');
            } else {
                \$(this).removeClass('has-value');
            }
        });
    }

    \$(document).on('change', '.uannes-checkout-page select.form-control', function() {
        updateSelectColors();
    });

    \$(document).ajaxComplete(function() {
        setTimeout(updateSelectColors, 50);
    });

    updateSelectColors();
});
//--></script>
";
        // line 1185
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
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
        return array (  1453 => 1185,  1316 => 1051,  1269 => 1007,  1262 => 1003,  1215 => 959,  1211 => 958,  1204 => 954,  1149 => 901,  1139 => 894,  1132 => 890,  1121 => 881,  1110 => 873,  1106 => 872,  1102 => 871,  1095 => 867,  1076 => 851,  1072 => 850,  1065 => 846,  1053 => 837,  1034 => 820,  1032 => 819,  957 => 747,  953 => 746,  946 => 742,  891 => 689,  870 => 671,  863 => 667,  855 => 661,  834 => 643,  830 => 642,  826 => 641,  819 => 637,  811 => 631,  809 => 630,  755 => 579,  743 => 569,  733 => 562,  726 => 558,  718 => 552,  707 => 544,  703 => 543,  699 => 542,  692 => 538,  676 => 525,  672 => 524,  668 => 523,  661 => 519,  649 => 510,  633 => 496,  631 => 495,  548 => 415,  543 => 413,  516 => 388,  503 => 378,  494 => 371,  481 => 361,  472 => 354,  470 => 353,  462 => 348,  457 => 346,  450 => 342,  445 => 340,  436 => 334,  432 => 333,  422 => 326,  411 => 318,  407 => 316,  397 => 309,  386 => 301,  382 => 299,  379 => 298,  369 => 291,  365 => 289,  355 => 282,  351 => 280,  349 => 279,  340 => 273,  330 => 269,  327 => 268,  324 => 267,  321 => 266,  318 => 265,  315 => 264,  312 => 263,  310 => 262,  305 => 261,  297 => 257,  295 => 256,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\checkout\\checkout.twig");
    }
}
