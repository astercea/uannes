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

/* marketplace/extension.twig */
class __TwigTemplate_bd008f61a67fa6d40844bfc4ac65ee20 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 17
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <fieldset>
          <legend>";
        // line 21
        echo ($context["text_type"] ?? null);
        echo "</legend>
          <div class=\"well\">
            <div class=\"input-group\">
              <select name=\"type\" class=\"form-control\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                ";
            if ((($context["type"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 26))) {
                // line 27
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 27);
                echo "</option>
                ";
            } else {
                // line 29
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 29);
                echo "</option>
                ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </select>
              <span class=\"input-group-addon\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</span>
            </div>
          </div>
        </fieldset>
        <div id=\"extension\"></div>
      </div>
    </div>
  </div>
  ";
        // line 41
        if (($context["categories"] ?? null)) {
            // line 42
            echo "  <script type=\"text/javascript\"><!--
\$('select[name=\"type\"]').on('change', function() {
\t\$.ajax({
\t\turl: \$('select[name=\"type\"]').val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('.fa-filter').addClass('fa-circle-o-notch fa-spin');
\t\t\t\$('.fa-filter').removeClass('fa-filter');
\t\t\t\$('select[name=\\'type\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-circle-o-notch').addClass('fa-filter');
\t\t\t\$('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');
\t\t\t\$('select[name=\\'type\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\"type\"]').trigger('change');

\$('#extension').on('click', '.btn-success', function(e) {
\te.preventDefault();
\t
\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#extension').on('click', '.btn-danger, .btn-warning', function(e) {
\te.preventDefault();
\t
\tif (confirm('";
            // line 94
            echo ($context["text_confirm"] ?? null);
            echo "')) {
\t\tvar element = this;
\t
\t\t\$.ajax({
\t\t\turl: \$(element).attr('href'),
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).button('reset');
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\t// refresh menu and extension list
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=marketplace/extension/refreshMenu&user_token=";
            // line 109
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\tif (html) {
\t\t\t\t\t\t\t\$('#column-left').replaceWith(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('select[name=\"type\"]').trigger('change');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
  ";
        }
        // line 132
        echo "</div>
";
        // line 133
        echo ($context["footer"] ?? null);
        echo " 
<style>
.text-center a[href*=\"opencart.com\"] {
    display: none !important;
}
</style>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "marketplace/extension.twig";
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
        return array (  234 => 133,  231 => 132,  205 => 109,  187 => 94,  133 => 42,  131 => 41,  120 => 33,  117 => 32,  111 => 31,  103 => 29,  95 => 27,  92 => 26,  88 => 25,  81 => 21,  74 => 17,  66 => 11,  55 => 9,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/extension.twig", "C:\\xampp\\htdocs\\uannes.dijicrea.net\\admin\\view\\template\\marketplace\\extension.twig");
    }
}
