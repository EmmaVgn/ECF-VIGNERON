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

/* _partials/_filter.html.twig */
class __TwigTemplate_d0e034c93830530626f3f5c22f6ba6d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_filter.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "filter js-filter-form"]]);
        echo "
<div class=\"spinner-border js-loading\" role=\"status\" aria-hidden=\"true\" style=\"display: none\">
\t<span class=\"visually-hidden\">Loading...</span>
</div>
<div class=\"box border-top border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center justify-content-between\">
\t\tFiltres
\t\t<button type=\"submit\" class=\"btn btn-link btn-sm\" id=\"resetBtn\">Tout effacer</button>
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center pt-3\">
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "q", [], "any", false, false, false, 13), 'row');
        echo "
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tCatégories
\t\t<button class=\"btn ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" href=\"#collapseCategories\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</button>
\t</div>
\t<div class=\"collapse show mt-2 ps-2\" id=\"collapseCategories\">
\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "categories", [], "any", false, false, false, 24), 'row');
        echo "
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tMarques
\t\t<button class=\"btn ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" href=\"#collapseModels\" aria-expanded=\"false\" aria-controls=\"collapseModels\">
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</button>
\t</div>
\t<div class=\"collapse mt-2 ps-2\" id=\"collapseModels\">
\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "model", [], "any", false, false, false, 35), 'row');
        echo "
\t</div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tPrix
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "minPrice", [], "any", false, false, false, 45), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "minPrice", [], "any", false, false, false, 48), 'widget');
        echo "
\t\t\t\t<span>€</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "maxPrice", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t\t<span>€</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"price-slider\" data-min=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, (isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\"></div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tKilomètres
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "minKms", [], "any", false, false, false, 68), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "minKms", [], "any", false, false, false, 71), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "maxKms", [], "any", false, false, false, 76), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"kms-slider\" data-min=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["minKms"]) || array_key_exists("minKms", $context) ? $context["minKms"] : (function () { throw new RuntimeError('Variable "minKms" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, (isset($context["maxKms"]) || array_key_exists("maxKms", $context) ? $context["maxKms"] : (function () { throw new RuntimeError('Variable "maxKms" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\"></div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tAnnées
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "minCirculationAt", [], "any", false, false, false, 89), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "minCirculationAt", [], "any", false, false, false, 92), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "maxCirculationAt", [], "any", false, false, false, 97), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"date-slider\" data-min=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["minDate"]) || array_key_exists("minDate", $context) ? $context["minDate"] : (function () { throw new RuntimeError('Variable "minDate" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, (isset($context["maxDate"]) || array_key_exists("maxDate", $context) ? $context["maxDate"] : (function () { throw new RuntimeError('Variable "maxDate" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\"></div>
</div>

<button class=\"btn btn-outline-success w-100 mt-3\">Filtrer</button>
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 105,  192 => 101,  185 => 97,  177 => 92,  171 => 89,  157 => 80,  150 => 76,  142 => 71,  136 => 68,  122 => 59,  114 => 54,  105 => 48,  99 => 45,  86 => 35,  72 => 24,  58 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'filter js-filter-form'}}) }}
<div class=\"spinner-border js-loading\" role=\"status\" aria-hidden=\"true\" style=\"display: none\">
\t<span class=\"visually-hidden\">Loading...</span>
</div>
<div class=\"box border-top border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center justify-content-between\">
\t\tFiltres
\t\t<button type=\"submit\" class=\"btn btn-link btn-sm\" id=\"resetBtn\">Tout effacer</button>
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center pt-3\">
\t\t{{ form_row(form.q) }}
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tCatégories
\t\t<button class=\"btn ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" href=\"#collapseCategories\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</button>
\t</div>
\t<div class=\"collapse show mt-2 ps-2\" id=\"collapseCategories\">
\t\t{{ form_row(form.categories) }}
\t</div>
</div>
<div class=\"box border-bottom ps-1\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tMarques
\t\t<button class=\"btn ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" href=\"#collapseModels\" aria-expanded=\"false\" aria-controls=\"collapseModels\">
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</button>
\t</div>
\t<div class=\"collapse mt-2 ps-2\" id=\"collapseModels\">
\t\t{{ form_row(form.model) }}
\t</div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tPrix
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.minPrice) }}
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.minPrice) }}
\t\t\t\t<span>€</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.maxPrice) }}
\t\t\t\t<span>€</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"price-slider\" data-min=\"{{ minPrice }}\" data-max=\"{{ maxPrice }}\"></div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tKilomètres
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.minKms) }}
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.minKms) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.maxKms) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"kms-slider\" data-min=\"{{ minKms }}\" data-max=\"{{ maxKms }}\"></div>
</div>
<div class=\"box border-bottom ps-1 pb-3\">
\t<div class=\"box-label text-uppercase d-flex align-items-center\">
\t\tAnnées
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.minCirculationAt) }}
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.minCirculationAt) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t{{ form_widget(form.maxCirculationAt) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"date-slider\" data-min=\"{{ minDate }}\" data-max=\"{{ maxDate }}\"></div>
</div>

<button class=\"btn btn-outline-success w-100 mt-3\">Filtrer</button>
{{ form_end(form) }}
", "_partials/_filter.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/_partials/_filter.html.twig");
    }
}
