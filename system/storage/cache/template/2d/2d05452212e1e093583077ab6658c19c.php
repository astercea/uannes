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

/* default/template/blog/category.twig */
class __TwigTemplate_403d6fbb57327a7e1ff19a277055b1ec extends Template
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
<div id=\"blog-category\" class=\"blog-page\">
  <div class=\"blog-image-container\">
    ";
        // line 4
        if (($context["hero_image"] ?? null)) {
            // line 5
            echo "      <img src=\"";
            echo ($context["hero_image"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"blog-image\" />
    ";
        } else {
            // line 7
            echo "      <img src=\"catalog/view/theme/default/image/blogbanner.webp\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"blog-image\" />
    ";
        }
        // line 9
        echo "  
  </div>

  <div class=\"container blog-page__content\">
    <ul class=\"breadcrumb blog-page-breadcrumb\">
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

    ";
        // line 19
        echo ($context["content_top"] ?? null);
        echo "

        ";
        // line 24
        echo "
        <div class=\"blog-category-filters mb-4 d-flex flex-wrap\">
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
            echo "\" class=\"btn btn-sm ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 27)) {
                echo "btn-warning";
            } else {
                echo "btn-inverse";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>

        ";
        // line 31
        if (($context["articles"] ?? null)) {
            // line 32
            echo "          <div class=\"row g-4 blog-cards-row\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 34
                echo "              <div class=\"col-12 col-md-6 col-lg-4 blog-cards-row__col\">
                <article class=\"blog-card\">
                  <a href=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 36);
                echo "\" class=\"blog-card__link text-decoration-none text-dark\">
                    <div class=\"blog-card__media\">
                      <img src=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 38);
                echo "\" class=\"blog-card__img\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 38);
                echo "\" />
                    </div>
                    <div class=\"blog-card__body\">
                      <p class=\"blog-card-meta text-muted small mb-1\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 41);
                echo "</p>
                      <h2 class=\"blog-card__title h5 fw-normal\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 42);
                echo "</h2>
                      <p class=\"blog-card-excerpt text-muted small mt-2\">";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 43)) {
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 43);
                } else {
                    echo "&nbsp;";
                }
                echo "</p>
                    </div>
                  </a>
                </article>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </div>
          <div class=\"blog-pagination\">
            <div class=\"blog-pagination__inner\">
              ";
            // line 52
            echo ($context["pagination"] ?? null);
            echo "
              <p class=\"blog-pagination__results text-muted small mb-0\">";
            // line 53
            echo ($context["results"] ?? null);
            echo "</p>
            </div>
          </div>
        ";
        } else {
            // line 57
            echo "          <p class=\"text-start py-5\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
";
        // line 63
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/blog/category.twig";
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
        return array (  200 => 63,  194 => 60,  191 => 59,  185 => 57,  178 => 53,  174 => 52,  169 => 49,  153 => 43,  149 => 42,  145 => 41,  137 => 38,  132 => 36,  128 => 34,  124 => 33,  121 => 32,  119 => 31,  115 => 29,  98 => 27,  94 => 26,  90 => 24,  85 => 19,  81 => 17,  70 => 15,  66 => 14,  59 => 9,  53 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/category.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\blog\\category.twig");
    }
}
