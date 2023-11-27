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

/* home/index.html.twig */
class __TwigTemplate_8f29e2d2e952bcea632ba880325d0bce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Nos véhicules du mois</h1>
\t<div class=\"row\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 9, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 10
            echo "\t\t\t<div class=\"col\">
\t\t\t\t";
            // line 11
            $this->loadTemplate("_partials/_product_card.html.twig", "home/index.html.twig", 11)->display($context);
            // line 12
            echo "\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</div>
\t<hr>
\t<h2>Un service irréprochable</h2>
\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum.</p>
\t<div class=\"row\">
\t\t";
        // line 19
        $this->loadTemplate("shared/_assurance.html.twig", "home/index.html.twig", 19)->display(twig_array_merge($context, ["color" => "primary", "icone" => "fas fa-truck", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum."]));
        // line 24
        echo "\t\t";
        $this->loadTemplate("shared/_assurance.html.twig", "home/index.html.twig", 24)->display(twig_array_merge($context, ["color" => "success", "icone" => "fas fa-check", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum."]));
        // line 29
        echo "\t\t";
        $this->loadTemplate("shared/_assurance.html.twig", "home/index.html.twig", 29)->display(twig_array_merge($context, ["color" => "warning", "icone" => "fas fa-lock", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum."]));
        // line 34
        echo "\t</div>
\t<div class=\"row mt-5\">
\t\t";
        // line 36
        $this->loadTemplate("shared/_testimonials.html.twig", "home/index.html.twig", 36)->display($context);
        // line 37
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  149 => 36,  145 => 34,  142 => 29,  139 => 24,  137 => 19,  130 => 14,  115 => 12,  113 => 11,  110 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<h1>Nos véhicules du mois</h1>
\t<div class=\"row\">
\t\t{% for p in products %}
\t\t\t<div class=\"col\">
\t\t\t\t{% include \"_partials/_product_card.html.twig\" %}
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<hr>
\t<h2>Un service irréprochable</h2>
\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum.</p>
\t<div class=\"row\">
\t\t{% include \"shared/_assurance.html.twig\" with {
            'color': 'primary',
            'icone': 'fas fa-truck',
            'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum.'
        } %}
\t\t{% include \"shared/_assurance.html.twig\" with {
            'color': 'success',
            'icone': 'fas fa-check',
            'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum.'
        } %}
\t\t{% include \"shared/_assurance.html.twig\" with {
            'color': 'warning',
            'icone': 'fas fa-lock',
            'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita doloremque in molestiae quasi laborum.'
        } %}
\t</div>
\t<div class=\"row mt-5\">
\t\t{% include \"shared/_testimonials.html.twig\" %}
\t</div>
{% endblock %}
", "home/index.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/home/index.html.twig");
    }
}
