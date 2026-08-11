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

/* default/template/account/newsletter.twig */
class __TwigTemplate_2fd1920772b009089ee57cbbc2e50ad6 extends Template
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
<main id=\"account-newsletter\" class=\"container account-page\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    <div id=\"content\" class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
      ";
        }
        // line 16
        echo "
      <header class=\"account-page__heading\">
        <span>BİLDİRİMLER</span>
        <p>Yeni ürünleri, özel fırsatları ve UANNES haberlerini e-posta adresine almak için tercihini düzenle.</p>
      </header>

      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"newsletter-form account-page__form\">
        <fieldset class=\"newsletter-toggle\">
          <h1 class=\"newsletter-toggle__title\">";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <div class=\"newsletter-toggle__control\">
            <div>
              <strong>E-posta bildirimleri</strong>
              <p>Tercihini dilediğin zaman değiştirebilirsin.</p>
            </div>
            <div class=\"toggle-wrapper\">
              <input type=\"hidden\" name=\"newsletter\" value=\"0\" />
              <label class=\"toggle-switch\" for=\"input-newsletter\">
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" ";
        // line 33
        if (($context["newsletter"] ?? null)) {
            echo "checked";
        }
        echo ">
                <span class=\"slider\"></span>
                <span class=\"sr-only\">";
        // line 35
        echo ($context["entry_newsletter"] ?? null);
        echo "</span>
              </label>
              <span class=\"toggle-status-text\" id=\"toggle-status-text\">";
        // line 37
        if (($context["newsletter"] ?? null)) {
            echo "Aktif";
        } else {
            echo "Kapalı";
        }
        echo "</span>
            </div>
          </div>
        </fieldset>

        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 43
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\"><input type=\"submit\" value=\"";
        // line 44
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" /></div>
        </div>
      </form>
      ";
        // line 47
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 49
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const checkbox = document.getElementById('input-newsletter');
  const statusText = document.getElementById('toggle-status-text');
  if (checkbox && statusText) {
    checkbox.addEventListener('change', function() {
      statusText.textContent = this.checked ? 'Aktif' : 'Kapalı';
    });
  }
});
</script>
";
        // line 64
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/newsletter.twig";
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
        return array (  168 => 64,  150 => 49,  145 => 47,  139 => 44,  133 => 43,  120 => 37,  115 => 35,  108 => 33,  96 => 24,  91 => 22,  83 => 16,  77 => 14,  75 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/newsletter.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\newsletter.twig");
    }
}
