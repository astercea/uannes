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

/* default/template/extension/module/filter.twig */
class __TwigTemplate_c575e5779c8a69781b5ed6f6ac5baadc extends Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"list-group\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 4
            echo "      <a href=\"javascript:void(0);\" class=\"list-group-item filter-toggle\">
        ";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 5);
            echo "
        <span class=\"dropdown-arrow\">&#9662;</span>
      </a>
      <div class=\"list-group-item filter-content\" style=\"display:block;\">
        <div id=\"filter-group";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 9);
            echo "\">
          ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 11
                echo "            <div class=\"checkbox\">
              <label>
                ";
                // line 13
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 13), ($context["filter_category"] ?? null))) {
                    // line 14
                    echo "                  <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 14);
                    echo "\" checked=\"checked\" />
                  ";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 15);
                    echo "
                ";
                } else {
                    // line 17
                    echo "                  <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 17);
                    echo "\" />
                  ";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 18);
                    echo "
                ";
                }
                // line 20
                echo "              </label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
  <div class=\"panel-footer text-center\">
    <button type=\"button\" id=\"button-filter\">";
        // line 28
        echo ($context["button_filter"] ?? null);
        echo "</button>
    <button type=\"button\" id=\"button-clear\">Temizle</button>
  </div>
</div>

<style>
.filter-toggle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.dropdown-arrow {
    transition: transform 0.3s;
    font-size: 22px;
}

.dropdown-arrow.open {
    transform: rotate(180deg);
}
#button-filter {
    background-color: #28a745 ;
    border: none ;
    color: #fff ;
    font-size: 18px ;
    padding: 12px 25px ;
    border-radius: 10px ;
    cursor: pointer ;
    margin: 5px;
}
#button-filter:hover {
    background-color: #218838 ;
}
#button-clear {
    background-color: #e74c3c ;
    border: none ;
    color: #fff ;
    font-size: 18px ;
    padding: 12px 25px ;
    border-radius: 10px ;
    cursor: pointer ;
    margin: 5px;
}
#button-clear:hover {
    background-color: #c0392b ;
}
</style>
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('.filter-toggle').on('click', function() {
        \$(this).next('.filter-content').slideToggle();
        \$(this).find('.dropdown-arrow').toggleClass('open');
    });

    \$('#button-filter').on('click', function() {
        var filter = [];
        \$('input[name^=\"filter\"]:checked').each(function() {
            filter.push(this.value);
        });
        location = '";
        // line 88
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "js");
        echo "&filter=' + filter.join(',');
    });

    \$('#button-clear').on('click', function() {
        \$('input[name^=\"filter\"]').prop('checked', false);
        location = '";
        // line 93
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "js");
        echo "';
    });
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
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
        return array (  180 => 93,  172 => 88,  109 => 28,  105 => 26,  97 => 23,  89 => 20,  84 => 18,  79 => 17,  74 => 15,  69 => 14,  67 => 13,  63 => 11,  59 => 10,  55 => 9,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\catalog\\view\\theme\\default\\template\\extension\\module\\filter.twig");
    }
}
