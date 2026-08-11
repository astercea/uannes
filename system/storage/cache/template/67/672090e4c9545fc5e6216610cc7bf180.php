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

/* default/template/account/forgotten.twig */
class __TwigTemplate_76fed4b6092d281c99555dff3be913ba extends Template
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
<div id=\"account-forgotten\" class=\"login-page\">
  <div class=\"container\">
    <div class=\"login-page__container\">
    
    ";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "    <div class=\"login-alert login-alert--error\">
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"7.5\" stroke=\"currentColor\"/><path d=\"M8 5v4M8 11h.01\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\"/></svg>
      <span>";
            // line 13
            echo ($context["error_warning"] ?? null);
            echo "</span>
    </div>
    ";
        }
        // line 16
        echo "
    <h1 class=\"login-page__title\">Şifreni mi unuttun?</h1>
    <p class=\"login-page__subtitle\" style=\"margin: 0 auto 2.5rem; max-width: 95%;\">Sıfırlama bağlantısı için kayıtlı e-posta adresinizi giriniz.</p>

    <form action=\"";
        // line 20
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"login-page__form\" autocomplete=\"off\">
      <div class=\"login-field\">
        <input type=\"email\" name=\"email\" value=\"";
        // line 22
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"login-field__input\" placeholder=\" \" required autocomplete=\"email\" />
        <label for=\"input-email\" class=\"login-field__label\">E-posta Adresi *</label>
        <span class=\"login-field__line\"></span>
      </div>

      <button type=\"submit\" class=\"login-page__submit\" style=\"margin-top: 1rem;\">
        <span>Gönder</span>
      </button>

      <div style=\"text-align: center; margin-top: 2rem;\">
        <a href=\"";
        // line 32
        echo ($context["back"] ?? null);
        echo "\" class=\"login-page__forgot-link\" style=\"font-size: 13.5px; border-bottom: none; letter-spacing: 0.05em;\">Giriş Sayfasına Dön</a>
      </div>
    </form>

    </div>
  </div>
</div>
";
        // line 39
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/forgotten.twig";
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
        return array (  95 => 39,  85 => 32,  72 => 22,  67 => 20,  61 => 16,  55 => 13,  51 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/forgotten.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\forgotten.twig");
    }
}
