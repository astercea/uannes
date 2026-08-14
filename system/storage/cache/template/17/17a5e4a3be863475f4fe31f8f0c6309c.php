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

/* default/template/common/home.twig */
class __TwigTemplate_54b4df4315d30c62478b6fbc7ac82119 extends Template
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
/* Hide 3rd slideshow banner on homepage because it's replaced by Tri-Grid */
.is-homepage .home-banner-stack__item--3 {
  display: none;
}



</style>
";
        // line 10
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\">
  <div class=\"home-fullwidth-top\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "</div>
  <div class=\"container\">
    <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
      ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "      ";
        }
        // line 22
        echo "      <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 24
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 27
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/home.twig";
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
        return array (  97 => 27,  91 => 24,  87 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  62 => 15,  58 => 14,  53 => 12,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\common\\home.twig");
    }
}
