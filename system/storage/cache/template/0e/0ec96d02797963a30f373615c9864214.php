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

/* common/product_badges.twig */
class __TwigTemplate_93f5cd3ccc6d84337d73bdff12fa0028 extends Template
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
        if (($context["badges"] ?? null)) {
            // line 2
            echo "<div class=\"product-badges\">
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 4
                echo "\t";
                if (((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 4)) != "stokta var") && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 4)) != "in stock"))) {
                    // line 5
                    echo "\t<span class=\"product-badge product-badge--";
                    echo twig_get_attribute($this->env, $this->source, $context["badge"], "type", [], "any", false, false, false, 5);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 5);
                    echo "</span>
\t";
                }
                // line 7
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/product_badges.twig";
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
        return array (  63 => 8,  57 => 7,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/product_badges.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\product_badges.twig");
    }
}
