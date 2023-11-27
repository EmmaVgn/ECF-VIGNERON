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

/* product/display.html.twig */
class __TwigTemplate_1aac5743329525da7b2658f415052908 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/display.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tTous nos véhicules d'occasion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h1>Tous nos véhicules d'occasion :</h1>
\t<div class=\"js-filter\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("_partials/_filter.html.twig", "product/display.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-9 mt-5 mt-md-0\">
\t\t\t\t";
        // line 16
        echo "\t\t\t\t<div class=\"d-flex w-100 mb-2\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fw-bold fs-4 text-primary\" id=\"totalItems\">
\t\t\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\tRésultats
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex w-100 mb-2 justify-content-end me-2 js-filter-sorting\">
\t\t\t\t\t\t";
        // line 24
        $this->loadTemplate("product/_sorting.html.twig", "product/display.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 28
        echo "\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"d-flex flex-wrap js-filter-content\">
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("product/_products.html.twig", "product/display.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t<div class=\"col-md-12 px-1 js-filter-pagination\">
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("product/_pagination.html.twig", "product/display.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  133 => 35,  127 => 31,  125 => 30,  121 => 28,  117 => 25,  115 => 24,  107 => 19,  102 => 16,  98 => 13,  96 => 12,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tTous nos véhicules d'occasion
{% endblock %}

{% block body %}
\t<h1>Tous nos véhicules d'occasion :</h1>
\t<div class=\"js-filter\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t{% include \"_partials/_filter.html.twig\" %}
\t\t\t</div>
\t\t\t<div class=\"col-md-9 mt-5 mt-md-0\">
\t\t\t\t{# Display number of items from search criteria #}
\t\t\t\t<div class=\"d-flex w-100 mb-2\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fw-bold fs-4 text-primary\" id=\"totalItems\">
\t\t\t\t\t\t\t{{ totalItems }}
\t\t\t\t\t\t\tRésultats
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex w-100 mb-2 justify-content-end me-2 js-filter-sorting\">
\t\t\t\t\t\t{% include \"product/_sorting.html.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# end of display #}
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"d-flex flex-wrap js-filter-content\">
\t\t\t\t\t\t{% include \"product/_products.html.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t<div class=\"col-md-12 px-1 js-filter-pagination\">
\t\t\t\t\t\t{% include \"product/_pagination.html.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "product/display.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/product/display.html.twig");
    }
}
