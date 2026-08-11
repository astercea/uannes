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

/* default/template/account/login.twig */
class __TwigTemplate_81ea089999d1183b5d0177347149202b extends Template
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
<div id=\"account-login\" class=\"login-page\">
  <div class=\"container\">
    <div class=\"login-page__container\">

    ";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "    <div class=\"login-alert login-alert--success\">
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"7.5\" stroke=\"currentColor\"/><path d=\"M5 8l2 2 4-4\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      <span>";
            // line 13
            echo ($context["success"] ?? null);
            echo "</span>
    </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"login-alert login-alert--error\">
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"7.5\" stroke=\"currentColor\"/><path d=\"M8 5v4M8 11h.01\" stroke=\"currentColor\" stroke-width=\"1.2\" stroke-linecap=\"round\"/></svg>
      <span>";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "</span>
    </div>
    ";
        }
        // line 23
        echo "
    <h1 class=\"login-page__title\">Hesap</h1>
    <p class=\"login-page__subtitle\">Hesabınıza erişmek veya yeni bir hesap<br>oluşturmak için lütfen e-posta adresinizi girin.</p>

    <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"login-page__form\" autocomplete=\"off\">
      <div class=\"login-field\">
        <input type=\"email\" name=\"email\" value=\"";
        // line 29
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"login-field__input\" placeholder=\" \" required autocomplete=\"email\" />
        <label for=\"input-email\" class=\"login-field__label\">E-posta *</label>
        <span class=\"login-field__line\"></span>
      </div>

      <div class=\"login-field\">
        <input type=\"password\" name=\"password\" value=\"";
        // line 35
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"login-field__input\" placeholder=\" \" required autocomplete=\"current-password\" />
        <label for=\"input-password\" class=\"login-field__label\">Şifre *</label>
        <span class=\"login-field__line\"></span>
      </div>

      <div class=\"login-page__forgot\">
        <a href=\"";
        // line 41
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"login-page__forgot-link\">Şifremi unuttum</a>
      </div>

      <button type=\"submit\" class=\"login-page__submit\">
        <span>Devam Et</span>
      </button>

      ";
        // line 48
        if (($context["redirect"] ?? null)) {
            // line 49
            echo "      <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
      ";
        }
        // line 51
        echo "    </form>

    <div class=\"login-page__divider\">
      <span class=\"login-page__divider-line\"></span>
      <span class=\"login-page__divider-text\">veya</span>
      <span class=\"login-page__divider-line\"></span>
    </div>

    <a href=\"";
        // line 59
        echo ($context["register"] ?? null);
        echo "\" class=\"login-page__register-link\">
      <span>Yeni Hesap Oluştur</span>
    </a>

    </div>
  </div>
</div>

";
        // line 67
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/login.twig";
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
        return array (  144 => 67,  133 => 59,  123 => 51,  117 => 49,  115 => 48,  105 => 41,  96 => 35,  87 => 29,  82 => 27,  76 => 23,  70 => 20,  66 => 18,  64 => 17,  61 => 16,  55 => 13,  51 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\login.twig");
    }
}
