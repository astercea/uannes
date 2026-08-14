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

/* default/template/account/return_success.twig */
class __TwigTemplate_415ce19ba887e29f57807de6515b216f extends Template
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
/* UANNES Luxury Return Success Page */
#return-success-page {
  padding: 60px 15px 90px;
  background-color: transparent;
  font-family: 'DM Sans', sans-serif;
}

.uannes-return-success-card {
  max-width: 640px;
  margin: 0 auto;
  background: #ffffff;
  border: 1px solid rgba(26, 26, 80, 0.08);
  border-radius: 12px;
  padding: 50px 35px 45px;
  text-align: center;
  box-shadow: 0 10px 35px rgba(26, 26, 80, 0.04);
}

.uannes-success-badge-wrap {
  width: 76px;
  height: 76px;
  margin: 0 auto 26px;
  background-color: #fbf9f4;
  border: 1.5px solid #c5a059;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  box-shadow: 0 4px 16px rgba(197, 160, 89, 0.15);
}

.uannes-success-badge-wrap svg {
  width: 32px;
  height: 32px;
  color: #1a1a50;
}

.uannes-return-success-title {
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-weight: 500;
  font-size: clamp(26px, 3.2vw, 34px);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #1a1a50;
  margin: 0 0 14px;
  line-height: 1.25;
}

.uannes-return-success-desc {
  font-family: 'DM Sans', sans-serif;
  font-size: 14.5px;
  font-weight: 400;
  color: rgba(26, 26, 80, 0.78);
  line-height: 1.75;
  margin: 0 auto 28px;
  max-width: 480px;
}

.uannes-return-steps {
  display: flex;
  justify-content: space-between;
  background: #f8f6f2;
  border-radius: 8px;
  padding: 16px 20px;
  margin: 0 auto 34px;
  max-width: 520px;
  border: 1px solid rgba(26, 26, 80, 0.06);
}

.uannes-step-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
  flex: 1;
  position: relative;
}

.uannes-step-item:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 12px;
  right: -50%;
  width: 100%;
  height: 1px;
  background: rgba(26, 26, 80, 0.15);
  z-index: 1;
}

.uannes-step-dot {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #1a1a50;
  color: #ffffff;
  font-size: 11px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  position: relative;
  z-index: 2;
}

.uannes-step-dot.active {
  background: #c5a059;
}

.uannes-step-label {
  font-size: 11.5px;
  color: #1a1a50;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin-top: 4px;
}

.uannes-return-actions {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;
}

.uannes-btn-continue {
  display: inline-block;
  background-color: #1a1a50;
  color: #ffffff !important;
  font-family: 'DM Sans', sans-serif;
  font-size: 12.5px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 14px 42px;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  border: 1px solid #1a1a50;
  box-shadow: 0 4px 14px rgba(26, 26, 80, 0.12);
}

.uannes-btn-continue:hover {
  background-color: #c5a059;
  border-color: #c5a059;
  color: #ffffff !important;
  transform: translateY(-1px);
  box-shadow: 0 6px 18px rgba(197, 160, 89, 0.25);
  text-decoration: none;
}

.uannes-secondary-link {
  color: #1a1a50;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  text-decoration: underline;
  transition: color 0.2s ease;
}

.uannes-secondary-link:hover {
  color: #c5a059;
}

@media (max-width: 576px) {
  .uannes-return-success-card {
    padding: 35px 20px 30px;
  }
  .uannes-return-steps {
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
  }
  .uannes-step-item {
    flex-direction: row;
    width: 100%;
  }
  .uannes-step-item:not(:last-child)::after {
    display: none;
  }
}
</style>

<div id=\"return-success-page\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"uannes-return-success-card\">
        
        <!-- Elegant Luxury Success Icon -->
        <div class=\"uannes-success-badge-wrap\">
          <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M5 13L9 17L19 7\" stroke=\"#1a1a50\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </div>

        <!-- Heading -->
        <h1 class=\"uannes-return-success-title\">İade Talebiniz Alındı</h1>

        <!-- Description -->
        <p class=\"uannes-return-success-desc\">
          İade ve değişim talebiniz başarıyla müşteri hizmetlerimize iletildi. Talebiniz en kısa sürede uzman ekibimiz tarafından incelenecek ve süreç hakkında kayıtlı e-posta adresinize bilgilendirme yapılacaktır.
        </p>

        <!-- Process Steps -->
        <div class=\"uannes-return-steps\">
          <div class=\"uannes-step-item\">
            <div class=\"uannes-step-dot active\"><i class=\"fa fa-check\"></i></div>
            <span class=\"uannes-step-label\">Talep Alındı</span>
          </div>
          <div class=\"uannes-step-item\">
            <div class=\"uannes-step-dot\">2</div>
            <span class=\"uannes-step-label\">İnceleme</span>
          </div>
          <div class=\"uannes-step-item\">
            <div class=\"uannes-step-dot\">3</div>
            <span class=\"uannes-step-label\">Kargo &amp; Onay</span>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class=\"uannes-return-actions\">
          <a href=\"";
        // line 225
        echo ($context["continue"] ?? null);
        echo "\" class=\"uannes-btn-continue\">
            Alışverişe Devam Et
          </a>
          ";
        // line 229
        echo "        </div>

      </div>
    </div>
  </div>
</div>

";
        // line 236
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/return_success.twig";
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
        return array (  279 => 236,  270 => 229,  264 => 225,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_success.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\return_success.twig");
    }
}
