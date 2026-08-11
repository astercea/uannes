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
<div id=\"blog-blog\" class=\"blog-page\">
  <div class=\"blog-image-container\">
    <img src=\"catalog/view/theme/default/image/blogbanner.webp\" alt=\"";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "\" class=\"blog-image\" />
  
  </div>

  <div class=\"container blog-page__content\">
    <ul class=\"breadcrumb blog-page-breadcrumb\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>

    ";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "

        <div class=\"blog-category-filters mb-4 d-flex flex-wrap\">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
            echo "\" class=\"btn btn-sm ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 19)) {
                echo "btn-warning";
            } else {
                echo "btn-inverse";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>

        ";
        // line 23
        if (($context["articles"] ?? null)) {
            // line 24
            echo "          <div class=\"row g-4 blog-cards-row\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 26
                echo "              <div class=\"col-12 col-md-6 col-lg-4 blog-cards-row__col\">
                <article class=\"blog-card\">
                  <a href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 28);
                echo "\" class=\"blog-card__link text-decoration-none text-dark\">
                    <div class=\"blog-card__media\">
                      <img src=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 30);
                echo "\" class=\"blog-card__img\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 30);
                echo "\" />
                    </div>
                    <div class=\"blog-card__body\">
                      <p class=\"blog-card-meta text-muted small mb-1\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 33);
                if (twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 33)) {
                    echo " · ";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 33);
                }
                echo "</p>
                      <h2 class=\"blog-card__title h5 fw-normal\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 34);
                echo "</h2>
                      <p class=\"blog-card-excerpt text-muted small mt-2\">";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 35)) {
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 35);
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
            // line 41
            echo "          </div>
          <div class=\"blog-pagination\">
            <div class=\"blog-pagination__inner\">
              ";
            // line 44
            echo ($context["pagination"] ?? null);
            echo "
              <p class=\"blog-pagination__results text-muted small mb-0\">";
            // line 45
            echo ($context["results"] ?? null);
            echo "</p>
            </div>
          </div>
        ";
        } else {
            // line 49
            echo "          <p class=\"text-start py-5\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 51
        echo "
        ";
        // line 52
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
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
        return array (  187 => 55,  181 => 52,  178 => 51,  172 => 49,  165 => 45,  161 => 44,  156 => 41,  140 => 35,  136 => 34,  128 => 33,  120 => 30,  115 => 28,  111 => 26,  107 => 25,  104 => 24,  102 => 23,  98 => 21,  81 => 19,  77 => 18,  71 => 15,  67 => 13,  56 => 11,  52 => 10,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/blog.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\blog\\blog.twig");
    }
}
