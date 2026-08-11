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
<div id=\"blog-article\" class=\"blog-page\">
  <div class=\"container blog-article-wrap\">
    <ul class=\"breadcrumb blog-page-breadcrumb blog-article-breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>

    <article class=\"blog-article\">
      <header class=\"blog-article-header\">
        ";
        // line 12
        if (($context["category_name"] ?? null)) {
            // line 13
            echo "          <a href=\"";
            echo ($context["category_href"] ?? null);
            echo "\" class=\"blog-article-category\">";
            echo ($context["category_name"] ?? null);
            echo "</a>
        ";
        }
        // line 15
        echo "        <h1 class=\"blog-article-title\">";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <p class=\"blog-article-meta\">
          <time datetime=\"";
        // line 17
        echo ($context["date_published"] ?? null);
        echo "\">";
        echo ($context["text_date"] ?? null);
        echo ": ";
        echo ($context["date_published"] ?? null);
        echo "</time>
        </p>
      </header>
    </article>

    ";
        // line 22
        if (($context["image"] ?? null)) {
            // line 23
            echo "      <figure class=\"blog-article-cover\">
        <img src=\"";
            // line 24
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"blog-article-cover__img\" />
      </figure>
    ";
        }
        // line 27
        echo "
    <div class=\"blog-article-body\">
      ";
        // line 29
        echo ($context["description"] ?? null);
        echo "
    </div>

    ";
        // line 32
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
";
        // line 35
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
        return array (  123 => 35,  116 => 32,  110 => 29,  106 => 27,  98 => 24,  95 => 23,  93 => 22,  81 => 17,  75 => 15,  67 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/article.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\blog\\article.twig");
    }
}
