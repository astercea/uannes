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

/* default/template/extension/module/collection.twig */
class __TwigTemplate_350668302a5e4e7f110b35cd561e7348 extends Template
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
        echo "<style>
.home-banner-stack__item--collection .home-banner-stack__overlay {
  left: max(8%, calc((100vw - 1320px) / 2 + 15px));
  right: auto;
  width: 44%;
  max-width: 540px;
  align-items: flex-start;
  text-align: left;
}
.home-banner-stack__item--collection .home-banner-stack__title,
.home-banner-stack__item--collection .home-banner-stack__desc {
  text-align: left;
  max-width: 36rem;
}
.home-banner-stack__item--collection .home-banner-stack__btn {
  align-self: flex-start;
}
@media (max-width: 767px) {
  .home-banner-stack__item--collection .home-banner-stack__overlay {
    width: 85%;
    max-width: 100%;
    left: 7.5%;
    right: auto;
  }
}
</style>
<div class=\"home-banner-stack home-banner-stack--home-categories\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection_categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 29
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29) < 3) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 29)) != "giyim"))) {
                // line 30
                echo "    <div class=\"home-banner-stack__item home-banner-stack__item--collection\">
      <div class=\"home-banner-stack__media\">
        <img src=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 32);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 32);
                echo "\" class=\"img-responsive home-banner-stack__img\">
        ";
                // line 33
                if (((twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 33) || twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 33)) || (twig_get_attribute($this->env, $this->source, $context["banner"], "button_text", [], "any", false, false, false, 33) && twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 33)))) {
                    // line 34
                    echo "          <div class=\"home-banner-stack__overlay\">
            ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "              <h2 class=\"home-banner-stack__title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 36);
                        echo "</h2>
            ";
                    }
                    // line 38
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 38)) {
                        // line 39
                        echo "              <p class=\"home-banner-stack__desc\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 39);
                        echo "</p>
            ";
                    }
                    // line 41
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["banner"], "button_text", [], "any", false, false, false, 41) && twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 41))) {
                        // line 42
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 42);
                        echo "\" class=\"home-banner-stack__btn\"><span class=\"home-banner-stack__btn-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_text", [], "any", false, false, false, 42);
                        echo "</span></a>
            ";
                    }
                    // line 44
                    echo "          </div>
        ";
                }
                // line 46
                echo "      </div>
    </div>
    ";
            }
            // line 49
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/collection.twig";
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
        return array (  152 => 50,  138 => 49,  133 => 46,  129 => 44,  121 => 42,  118 => 41,  112 => 39,  109 => 38,  103 => 36,  101 => 35,  98 => 34,  96 => 33,  90 => 32,  86 => 30,  83 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/collection.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\extension\\module\\collection.twig");
    }
}
