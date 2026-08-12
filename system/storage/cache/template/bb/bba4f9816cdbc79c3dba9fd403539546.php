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

/* default/template/blog/blog.twig */
class __TwigTemplate_1c19e7e0d12711349240a7acd2015df5 extends Template
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
/* Blog Sayfası Özel Tasarımı */
footer { margin-top: 0; }

#content {
  min-height: 0 !important;
}

#blog-blog .blog-page__content {
  margin-top: 40px;
  margin-bottom: 60px;
  padding: 0;
}
#blog-blog .blog-page__content > .row {
  margin-left: 0;
  margin-right: 0;
}

.blog-filter-wrapper {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 35px;
}

/* Blog Cards */
.blog-card a, .blog-card a:hover {
  text-decoration: none !important;
}
.blog-card, .blog-card__img, .blog-card__title {
  transform: none !important;
  transition: none !important;
}
.blog-pagination {
  border-top: none !important;
}

.blog-card {
  background: transparent !important;
  border: none !important;
  box-shadow: none !important;
  border-radius: 0 !important;
}
.blog-card__media {
  border-radius: 0 !important;
  overflow: hidden;
  margin-bottom: 15px;
}
.blog-card__img {
  display: block;
  width: 100%;
  height: 100%;
  aspect-ratio: 1/1;
  object-fit: cover;
}
.blog-card__title {
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;
  letter-spacing: 0.02em;
  text-transform: none;
  text-align: left;
  text-decoration: none !important;
  color: #1a1a50;
  margin-bottom: 12px;
  line-height: 1.4;
}
</style>

<div id=\"blog-blog\" class=\"blog-page\">
  <div class=\"blog-image-container\">
    <img src=\"catalog/view/theme/default/image/blogbanner.webp\" alt=\"";
        // line 72
        echo ($context["heading_title"] ?? null);
        echo "\" class=\"blog-image\" />
  </div>

  <div class=\"container-fluid blog-page__content\" style=\"max-width: 1400px; width: 100%; padding-left: 0; padding-right: 0;\">
    ";
        // line 76
        echo ($context["content_top"] ?? null);
        echo "

    <div class=\"blog-filter-wrapper\">
      <div class=\"giyim-filter\" data-giyim-filter>
        <button class=\"giyim-filter-link\" type=\"button\" id=\"blogFilterMenu\" aria-expanded=\"false\" aria-controls=\"giyim-filter-menu\">
          Filtrele +
        </button>
        <div class=\"giyim-filter-backdrop\" data-giyim-filter-close hidden></div>
        <aside id=\"giyim-filter-menu\" class=\"giyim-filter-menu\" aria-hidden=\"true\" aria-label=\"Blog filtreleri\">
          <div class=\"giyim-filter-menu__header\">
            <p class=\"giyim-filter-menu__title\">Filtrele</p>
            <button type=\"button\" class=\"giyim-filter-menu__close\" data-giyim-filter-close aria-label=\"Filtre panelini kapat\">×</button>
          </div>
          <div id=\"blog-filter-form\">
            <details class=\"giyim-filter-menu__section\">
              <summary>Konular <span aria-hidden=\"true\">›</span></summary>
              <div class=\"giyim-filter-menu__options\">
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 94
            echo "                  <label><input type=\"radio\" name=\"blog_category_id\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 94);
            echo "\" data-href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 94);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 94) == ($context["selected_category"] ?? null))) {
                echo " checked";
            }
            echo "> <span>";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 94);
            echo "</span></label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "              </div>
            </details>
            <details class=\"giyim-filter-menu__section\">
              <summary>Tarih <span aria-hidden=\"true\">›</span></summary>
              <div class=\"giyim-filter-menu__options\">
                <label><input type=\"radio\" name=\"order\" value=\"DESC\" ";
        // line 101
        if ((($context["selected_order"] ?? null) == "DESC")) {
            echo " checked";
        }
        echo "> <span>En Yeni</span></label>
                <label><input type=\"radio\" name=\"order\" value=\"ASC\" ";
        // line 102
        if ((($context["selected_order"] ?? null) == "ASC")) {
            echo " checked";
        }
        echo "> <span>En Eski</span></label>
              </div>
            </details>
            <div class=\"giyim-filter-menu__actions\">
              <a href=\"";
        // line 106
        echo ($context["blog_url"] ?? null);
        echo "\">Tümünü temizle</a>
              <button type=\"button\" id=\"applyBlogFilter\" class=\"btn btn-primary\" style=\"background:#1a1a50; color:#fff; border-radius:0; min-width:120px;\">Uygula</button>
            </div>
          </div>
        </aside>
      </div>
    </div>

    ";
        // line 114
        if (($context["articles"] ?? null)) {
            // line 115
            echo "      <div class=\"row g-4 blog-cards-row\">
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 117
                echo "          <div class=\"col-12 col-md-6 col-lg-4 blog-cards-row__col\">
            <article class=\"blog-card\">
              <a href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 119);
                echo "\" class=\"text-decoration-none\">
                <div class=\"blog-card__media\">
                  <img src=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 121);
                echo "\" class=\"blog-card__img\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 121);
                echo "\" />
                </div>
                <div class=\"blog-card__body\">
                  <h2 class=\"blog-card__title\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 124);
                echo "</h2>
                </div>
              </a>
            </article>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "      </div>
      <div class=\"blog-pagination mt-5\">
        <div class=\"blog-pagination__inner d-flex justify-content-center align-items-center\">
          ";
            // line 133
            echo ($context["pagination"] ?? null);
            echo "
        </div>
      </div>
    ";
        } else {
            // line 137
            echo "      <p class=\"text-center py-5\" style=\"font-family: 'DM Sans', sans-serif; color: #1a1a50;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 139
        echo "
    ";
        // line 140
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
";
        // line 143
        echo ($context["footer"] ?? null);
        echo "

<script>
document.addEventListener('DOMContentLoaded', function() {
  (function () {
    var filter = document.querySelector('[data-giyim-filter]');
    if (!filter) return;
    var trigger = filter.querySelector('.giyim-filter-link');
    var panel = filter.querySelector('.giyim-filter-menu');
    var backdrop = filter.querySelector('.giyim-filter-backdrop');
    var closeControls = filter.querySelectorAll('[data-giyim-filter-close]');
    var lastFocused;
    function closePanel() {
      filter.classList.remove('is-open');
      trigger.setAttribute('aria-expanded', 'false');
      panel.setAttribute('aria-hidden', 'true');
      backdrop.hidden = true;
      if (lastFocused) lastFocused.focus();
    }
    function openPanel() {
      lastFocused = document.activeElement;
      filter.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
      panel.setAttribute('aria-hidden', 'false');
      backdrop.hidden = false;
      panel.querySelector('.giyim-filter-menu__close').focus();
    }
    trigger.addEventListener('click', function () { filter.classList.contains('is-open') ? closePanel() : openPanel(); });
    closeControls.forEach(function (control) { control.addEventListener('click', closePanel); });
    document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && filter.classList.contains('is-open')) closePanel(); });
  }());

  var applyBtn = document.getElementById('applyBlogFilter');
  if (applyBtn) {
    applyBtn.addEventListener('click', function() {
      var selectedCat = document.querySelector('input[name=\"blog_category_id\"]:checked');
      var selectedOrder = document.querySelector('input[name=\"order\"]:checked');
      
      var url = selectedCat ? selectedCat.getAttribute('data-href') : '";
        // line 181
        echo ($context["blog_url"] ?? null);
        echo "';
      var order = selectedOrder ? selectedOrder.value : 'DESC';
      
      if (url.indexOf('?') !== -1) {
        url += '&order=' + order;
      } else {
        url += '?order=' + order;
      }
      
      window.location.href = url;
    });
  }
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/blog/blog.twig";
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
        return array (  298 => 181,  257 => 143,  251 => 140,  248 => 139,  242 => 137,  235 => 133,  230 => 130,  218 => 124,  210 => 121,  205 => 119,  201 => 117,  197 => 116,  194 => 115,  192 => 114,  181 => 106,  172 => 102,  166 => 101,  159 => 96,  142 => 94,  138 => 93,  118 => 76,  111 => 72,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/blog.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\blog\\blog.twig");
    }
}
