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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_a406412b753848f6e16d3cea04b5ceac extends Template
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
.home-banner-stack__item--slideshow .home-banner-stack__overlay {
  right: max(8%, calc((100vw - 1320px) / 2 + 15px));
  left: auto;
  width: 44%;
  max-width: 540px;
  align-items: flex-end;
  text-align: right;
}
.home-banner-stack__item--slideshow .home-banner-stack__title,
.home-banner-stack__item--slideshow .home-banner-stack__desc {
  text-align: right;
  max-width: 36rem;
}
.home-banner-stack__item--slideshow .home-banner-stack__btn {
  align-self: flex-end;
}
@media (max-width: 767px) {
  .home-banner-stack__item--slideshow .home-banner-stack__overlay {
    width: 85%;
    max-width: 100%;
    right: 7.5%;
    left: auto;
  }
}
</style>
<div class=\"home-banner-stack\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29) < 3)) {
                // line 30
                echo "    <div class=\"home-banner-stack__item home-banner-stack__item--slideshow\">
      <div class=\"home-banner-stack__media\">
        <img src=\"";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    echo "image/catalog/marka_hikayesi_card1.png";
                } else {
                    echo "image/catalog/esarp_banner_v3.jpg";
                }
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
        return "default/template/extension/module/slideshow.twig";
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
        return array (  156 => 50,  142 => 49,  137 => 46,  133 => 44,  125 => 42,  122 => 41,  116 => 39,  113 => 38,  107 => 36,  105 => 35,  102 => 34,  100 => 33,  90 => 32,  86 => 30,  83 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\extension\\module\\slideshow.twig");
    }
}
