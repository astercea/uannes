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

/* default/template/blog/article.twig */
class __TwigTemplate_4e4317092443bff27e53ac76285e9df2 extends Template
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
/* Lüks ve Minimal Blog Makale Tasarımı */
#blog-article.blog-page {
  background-color: #f8f6f2 !important;
  padding-bottom: 80px;
}

.article-hero {
  width: 100%;
  margin-bottom: 60px;
}

.article-hero__img {
  width: 100%;
  height: clamp(300px, 60vh, 700px);
  object-fit: cover;
  display: block;
}

.article-content {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

.article-header {
  text-align: center;
  margin-bottom: 50px;
}

.article-category {
  font-family: 'DM Sans', sans-serif;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #1a1a50;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 20px;
  border-bottom: 1px solid rgba(26,26,80,0.3);
  padding-bottom: 2px;
}

.article-category:hover {
  border-bottom-color: #1a1a50;
  text-decoration: none;
}

.article-title {
  font-family: 'Cormorant Garamond', Georgia, serif;
  font-size: clamp(26px, 4vw, 38px);
  font-weight: 400;
  color: #1a1a50;
  line-height: 1.2;
  margin: 0;
}

.article-date {
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  color: #1a1a50;
  opacity: 0.6;
  margin-top: 25px;
  letter-spacing: 0.05em;
}

.article-body, 
.article-body p,
.article-body div,
.article-body span,
.article-body li,
.article-body a,
.article-body b,
.article-body strong,
.article-body em,
.article-body i,
.article-body u,
.article-body font,
.article-body blockquote {
  font-family: 'DM Sans', sans-serif !important;
  font-size: 15px !important;
  font-weight: 400 !important;
  line-height: 1.8 !important;
  color: #1a1a50 !important;
}

.article-body p {
  margin-bottom: 25px !important;
}

.article-body img {
  max-width: 100%;
  height: auto;
  margin: 40px 0;
  display: block;
}

.article-body h2, .article-body h3, .article-body h4 {
  font-family: 'Cormorant Garamond', Georgia, serif !important;
  font-weight: 400 !important;
  color: #1a1a50 !important;
  margin-top: 50px !important;
  margin-bottom: 25px !important;
  line-height: 1.3 !important;
}

.article-body h2 { font-size: 30px !important; }
.article-body h3 { font-size: 26px !important; }
.article-body h4 { font-size: 22px !important; }

.article-body ul, .article-body ol {
  margin-bottom: 25px;
  padding-left: 20px;
}

.article-body li {
  margin-bottom: 10px;
}

.article-body a {
  color: #1a1a50;
  text-decoration: underline;
}

.article-body blockquote {
  border-left: 2px solid #1a1a50 !important;
  padding-left: 20px !important;
  margin: 40px 0 !important;
  font-style: italic !important;
}
</style>

<div id=\"blog-article\" class=\"blog-page\">
  ";
        // line 136
        if (($context["image"] ?? null)) {
            // line 137
            echo "    <div class=\"article-hero\">
      <img src=\"";
            // line 138
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"article-hero__img\" />
    </div>
  ";
        } else {
            // line 141
            echo "    <div style=\"height: 60px;\"></div>
  ";
        }
        // line 143
        echo "
  <div class=\"article-content\">
    <article>
      <header class=\"article-header\">
        ";
        // line 147
        if (($context["category_name"] ?? null)) {
            // line 148
            echo "          <a href=\"";
            echo ($context["category_href"] ?? null);
            echo "\" class=\"article-category\">";
            echo ($context["category_name"] ?? null);
            echo "</a>
        ";
        }
        // line 150
        echo "        <h1 class=\"article-title\">";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <p class=\"article-date\">";
        // line 151
        echo ($context["date_published"] ?? null);
        echo "</p>
      </header>
      
      <div class=\"article-body\">
        ";
        // line 155
        echo ($context["description"] ?? null);
        echo "
      </div>
    </article>

    ";
        // line 159
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
";
        // line 162
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/blog/article.twig";
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
        return array (  234 => 162,  227 => 159,  220 => 155,  213 => 151,  208 => 150,  200 => 148,  198 => 147,  192 => 143,  188 => 141,  180 => 138,  177 => 137,  175 => 136,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/article.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\blog\\article.twig");
    }
}
