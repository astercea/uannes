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

/* default/template/account/account.twig */
class __TwigTemplate_c389f0e1ecd2f4a84fe1722c5a41b886 extends Template
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

<main id=\"account-account\" class=\"account-overview\">
  <div class=\"container\">
    <ul class=\"breadcrumb account-overview__breadcrumb\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>

    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 14
        echo "
    <section class=\"account-overview__hero\" aria-labelledby=\"account-overview-title\">
      <div class=\"account-overview__eyebrow\">UANNES / HESABIM</div>
      <div class=\"account-overview__hero-grid\">
        <div>
          <h1 id=\"account-overview-title\">Merhaba";
        // line 19
        if (($context["customer_name"] ?? null)) {
            echo ", ";
            echo ($context["customer_name"] ?? null);
        }
        echo ".</h1>
          <p>Hesabın, siparişlerin ve tercihlerin artık tek bir yerde ve her zaman kolayca ulaşılabilir.</p>
        </div>
        <div class=\"account-overview__avatar\" aria-hidden=\"true\">
          <i class=\"fa fa-user\"></i>
        </div>
      </div>
    </section>

    <section class=\"account-overview__guide\" aria-labelledby=\"account-guide-title\">
      <div class=\"account-overview__guide-icon\" aria-hidden=\"true\"><i class=\"fa fa-compass\"></i></div>
      <div>
        <h2 id=\"account-guide-title\">Hesabını kolayca yönet</h2>
        <p>Üst menüdeki <strong>Hesabım</strong> alanına tıklayarak bilgilerini güncelleyebilir, adreslerini düzenleyebilir, siparişlerini takip edebilir ve bülten tercihini değiştirebilirsin.</p>
      </div>
    </section>

    <section class=\"account-overview__details\" aria-label=\"Hesap merkezi bilgileri\">
      <article class=\"account-overview__detail\">
        <span class=\"account-overview__detail-number\">01</span>
        <div>
          <h2>Tek menü, tüm işlemler</h2>
          <p>Hesap ayarların üst menüde düzenli biçimde bir arada.</p>
        </div>
      </article>
      <article class=\"account-overview__detail\">
        <span class=\"account-overview__detail-number\">02</span>
        <div>
          <h2>Her cihazda erişim</h2>
          <p>Hesap menüsü masaüstü ve mobil görünümde aynı şekilde çalışır.</p>
        </div>
      </article>
    </section>
  </div>
</main>

<style>
#account-account.account-overview {
  --account-navy: #1a1a50;
  --account-ink: #20202a;
  --account-muted: #6a6974;
  --account-surface: #f8f6f2;
  padding: 28px 0 88px;
  background: var(--account-surface);
}

#account-account .account-overview__breadcrumb {
  margin: 0 0 34px;
  padding: 0;
  background: transparent;
}

#account-account .account-overview__breadcrumb a,
#account-account .account-overview__breadcrumb li {
  color: #777580;
  font-size: 12px;
}

#account-account .account-overview__hero {
  padding: clamp(32px, 5vw, 68px);
  border-radius: 20px;
  color: #fff;
  background: var(--account-navy);
  background-image: radial-gradient(circle at 90% 10%, rgba(255, 255, 255, 0.12), transparent 30%), linear-gradient(130deg, #171748, #282875);
  box-shadow: 0 18px 40px rgba(26, 26, 80, 0.18);
}

#account-account .account-overview__eyebrow {
  margin-bottom: 20px;
  color: rgba(255, 255, 255, 0.68);
  font-family: 'DM Sans', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.16em;
}

#account-account .account-overview__hero-grid {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 30px;
}

#account-account .account-overview__hero h1 {
  margin: 0 0 12px;
  color: #fff;
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-size: clamp(38px, 5vw, 64px);
  font-weight: 500;
  line-height: 0.95;
}

#account-account .account-overview__hero p {
  max-width: 560px;
  margin: 0;
  color: rgba(255, 255, 255, 0.8);
  font-family: 'DM Sans', sans-serif;
  font-size: 15px;
  line-height: 1.7;
}

#account-account .account-overview__avatar {
  display: inline-flex;
  flex: 0 0 auto;
  align-items: center;
  justify-content: center;
  width: 72px;
  height: 72px;
  border: 1px solid rgba(255, 255, 255, 0.28);
  border-radius: 50%;
  color: #fff;
  font-size: 25px;
}

#account-account .account-overview__guide {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  max-width: 930px;
  margin: 34px auto;
  padding: 28px 32px;
  border: 1px solid #e4e1da;
  border-radius: 16px;
  background: #fff;
}

#account-account .account-overview__guide-icon {
  display: inline-flex;
  flex: 0 0 auto;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  border-radius: 50%;
  color: var(--account-navy);
  background: #efeff9;
}

#account-account .account-overview__guide h2,
#account-account .account-overview__detail h2 {
  margin: 0 0 7px;
  color: var(--account-ink);
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-size: 25px;
  font-weight: 600;
}

#account-account .account-overview__guide p,
#account-account .account-overview__detail p {
  margin: 0;
  color: var(--account-muted);
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  line-height: 1.7;
}

#account-account .account-overview__guide strong {
  color: var(--account-navy);
}

#account-account .account-overview__details {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 24px;
  max-width: 930px;
  margin: 0 auto;
}

#account-account .account-overview__detail {
  display: flex;
  gap: 17px;
  padding-top: 21px;
  border-top: 1px solid #dcd9d1;
}

#account-account .account-overview__detail-number {
  color: var(--account-navy);
  font-family: 'DM Sans', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.08em;
}

#account-account .account-overview__detail h2 {
  font-size: 21px;
}

@media (max-width: 767px) {
  #account-account.account-overview {
    padding: 18px 0 54px;
  }

  #account-account .account-overview__breadcrumb {
    margin-bottom: 20px;
  }

  #account-account .account-overview__hero-grid {
    align-items: flex-start;
  }

  #account-account .account-overview__avatar {
    width: 50px;
    height: 50px;
    font-size: 18px;
  }

  #account-account .account-overview__guide {
    gap: 14px;
    margin: 22px 0;
    padding: 21px;
  }

  #account-account .account-overview__details {
    grid-template-columns: 1fr;
    gap: 18px;
  }
}
</style>

";
        // line 238
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/account/account.twig";
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
        return array (  304 => 238,  79 => 19,  72 => 14,  66 => 12,  64 => 11,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/account.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\account\\account.twig");
    }
}
