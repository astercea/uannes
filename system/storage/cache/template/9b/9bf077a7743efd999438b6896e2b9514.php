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

/* default/template/information/hikaye.twig */
class __TwigTemplate_2b239252ff321a5b704a8fce6fdbe7bc extends Template
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
<div id=\"information-hikaye\" class=\"container uannes-hikaye-page\">

  <!-- Hero Banner Section (No Dark Overlay) -->
  <section class=\"hikaye-hero\">
    <div class=\"hikaye-hero__bg\">
      <img src=\"image/catalog/hikaye_hero.png\" alt=\"Uannes'in Hikayesi\" class=\"hikaye-hero__img\">
    </div>
    <div class=\"hikaye-hero__content\">
      <span class=\"hikaye-hero__eyebrow\">MARKA MİRASIMIZ</span>
      <h1 class=\"hikaye-hero__title\">Uannes'in Hikayesi</h1>
      <p class=\"hikaye-hero__subtitle\">Saf dokular, zanaatkar dokunuşlar ve nesilden nesile aktarılan zamansız bir zarafet serüveni.</p>
    </div>
  </section>

  <!-- Story Chapter 1: The Origin -->
  <section class=\"hikaye-chapter\">
    <div class=\"hikaye-chapter__grid\">
      <div class=\"hikaye-chapter__text-col\">
        <span class=\"hikaye-section-tag\">KÖKLERİMİZ</span>
        <h2 class=\"hikaye-chapter__heading\">ZAMANIN ÖTESİNDE BİR DÜŞÜN DOĞUŞU</h2>
        <p class=\"hikaye-chapter__lead\">
          <span class=\"hikaye-dropcap\">U</span>annes, Akdeniz’in cömert ışığı ve İpek Yolu’nun asırlık zanaat mirasından ilham alarak doğdu. Hızlı tüketim çağında; nesnelerin ruhunu, emeğin kıymetini ve doğal liflerin eşsiz dokusunu yeniden hatırlatmak amacıyla yola çıktık.
        </p>
        <p class=\"hikaye-chapter__p\">
          Her bir koleksiyonumuzda; sadece bir gardırop parçası değil, geçmişin ustalığını geleceğin estetiğiyle buluşturan giyilebilir birer sanat eseri sunuyoruz. İpeğin teninizle temas ettiği ilk andaki serinlik ve doğal döküm, bizim zarafet anlayışımızın en yalın ifadesidir. Ustalarımızın incelikle işlediği her dikişte, zamana meydan okuyan bir tutku saklıdır.
        </p>
      </div>
      <div class=\"hikaye-chapter__media-col\">
        <div class=\"hikaye-media-frame\">
          <img src=\"image/catalog/hikaye_atelier.png\" alt=\"Atölyede İpek İşçiliği\" class=\"hikaye-media-img\" loading=\"lazy\">
        </div>
      </div>
    </div>
  </section>

  <!-- Motto / Quote Section (Identical to Homepage Motto) -->
  <section class=\"uannes-motto-section\" style=\"margin-bottom: 70px;\">
    <div class=\"uannes-motto-container\">
      <div class=\"uannes-motto-title-wrap\" style=\"margin-top: 32px;\">
        <span class=\"uannes-motto-line\"></span>
        <h3 class=\"uannes-motto-title\">Zarafetin ve Zanaatın Özü</h3>
        <span class=\"uannes-motto-line\"></span>
      </div>
      <p class=\"uannes-motto-quote\" style=\"margin-top: 12px; margin-bottom: 28px;\">
        “Doğadan ve geçmişin asırlık zanaat mirasından süzülen saf dokuları, zamansız çizgiler ve lüks detaylarla geleceğin mirasına dönüştürüyoruz.”
      </p>
    </div>
  </section>

  <!-- Pillars Section -->
  <section class=\"hikaye-pillars-section\">
    <div class=\"hikaye-section-header\">
      <span class=\"hikaye-section-tag\">TEMEL İLKELERİMİZ</span>
      <h2 class=\"hikaye-section-title\">Mirasımızı Şekillendiren Değerler</h2>
    </div>

    <div class=\"hikaye-pillars-grid\">
      <article class=\"hikaye-pillar-card\">
        <div class=\"hikaye-pillar-card__num\">01</div>
        <h3 class=\"hikaye-pillar-card__title\">Zanaatkar İşçilik</h3>
        <p class=\"hikaye-pillar-card__text\">Eşarplarımızın kenar kenarları usta eller tarafından tek tek elde yuvarlanarak dikilir. Makine dikişinin veremediği o tok ve organik hacim, ustalığa duyduğumuz saygının simgesidir.</p>
      </article>

      <article class=\"hikaye-pillar-card\">
        <div class=\"hikaye-pillar-card__num\">02</div>
        <h3 class=\"hikaye-pillar-card__title\">%100 Doğal Saf Dokular</h3>
        <p class=\"hikaye-pillar-card__text\">Koleksiyonlarımızda sentetik liflere yer vermeyiz. Sadece en kaliteli ipek twill, ipek saten, bambu ve organik keten dokumaları kullanarak cildinize nefes aldıran bir lüks sunarız.</p>
      </article>

      <article class=\"hikaye-pillar-card\">
        <div class=\"hikaye-pillar-card__num\">03</div>
        <h3 class=\"hikaye-pillar-card__title\">Zamansız Tasarım</h3>
        <p class=\"hikaye-pillar-card__text\">Geçici trendlerin ötesinde, yıllar geçse de gardırobunuzun en değerli parçası olarak kalacak desen ve renk paletleri kurgularız. Uannes, nesiller boyu saklanan bir mirastır.</p>
      </article>
    </div>
  </section>

  <!-- Bottom CTA Banner -->
  <section class=\"hikaye-hero hikaye-hero--cta\">
    <div class=\"hikaye-hero__bg\">
      <img src=\"image/catalog/hikaye_cta_banner.png\" alt=\"Uannes Eşarp & Giyim Koleksiyonu\" class=\"hikaye-hero__img\">
    </div>
    <div class=\"hikaye-hero__content\">
      <span class=\"hikaye-hero__eyebrow\">UANNES KOLEKSİYONLARI</span>
      <h2 class=\"hikaye-hero__title\">Eşarp & Giyim Koleksiyonlarımızla Zarafeti Yaşayın</h2>
      <p class=\"hikaye-hero__subtitle\" style=\"margin-bottom: 24px;\">Doğal ipek eşarplarımızdan özel tasarım giyim parçalarımıza kadar Uannes dünyasını inceleyin.</p>
      <a href=\"index.php?route=product/tum_urunler\" class=\"hikaye-cta__btn\">Tüm Ürünleri İncele</a>
    </div>
  </section>
</div>
";
        // line 92
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/information/hikaye.twig";
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
        return array (  131 => 92,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/hikaye.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\information\\hikaye.twig");
    }
}
