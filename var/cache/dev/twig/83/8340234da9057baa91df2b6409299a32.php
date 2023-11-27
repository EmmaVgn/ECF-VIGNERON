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

/* _partials/_product_card.html.twig */
class __TwigTemplate_2090482b0d182bc73ae7487aae5008ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_product_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_product_card.html.twig"));

        // line 1
        echo "<div
\tclass=\"card mb-3 me-2\">
\t";
        // line 4
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 4, $this->source); })()), "images", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "imageFile"), "html", null, true);
        echo "\" alt=\"Product Image\" class=\"img-fluid\">
\t<div class=\"card-body\">
\t\t<h4 class=\"card-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\UpperCaseExtension']->uppercase(twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        echo "
\t\t<br>
\t\t\t<span class=\"text-primary fw-bold\">
\t\t\t\t(";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 9, $this->source); })()), "price", [], "any", false, false, false, 9)), "html", null, true);
        echo ")</h4>
\t\t</span>
\t\t<span class=\"d-flex flex-row align-items-center align-self-center flex-wrap\">
\t\t\t<span class=\"badge bg-info me-1\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 12, $this->source); })()), "category", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
\t\t\t<span class=\"me-1\">/
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 14, $this->source); })()), "energy", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
\t\t\t<span class=\"me-1\">/
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 16, $this->source); })()), "kilometers", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\tkms</span>
\t\t\t<span>/
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 19, $this->source); })()), "circulationAt", [], "any", false, false, false, 19), "Y"), "html", null, true);
        echo "</span>
\t\t</span>
\t\t<hr>
\t\t<p class=\"card-text\">
\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 23, $this->source); })()), "shortDescription", [], "any", false, false, false, 23)))), "truncate", [150, "..."], "method", false, false, false, 23), "html", null, true);
        echo "
\t\t</p>
\t\t<hr>
\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["category_slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), "slug", [], "any", false, false, false, 26), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 26, $this->source); })()), "slug", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">En savoir plus</a>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_product_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  88 => 23,  81 => 19,  75 => 16,  70 => 14,  65 => 12,  59 => 9,  53 => 6,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
\tclass=\"card mb-3 me-2\">
\t{# Render only the first image #}
\t<img src=\"{{ vich_uploader_asset(p.images.first, 'imageFile') }}\" alt=\"Product Image\" class=\"img-fluid\">
\t<div class=\"card-body\">
\t\t<h4 class=\"card-title\">{{ p.name | uppercase }}
\t\t<br>
\t\t\t<span class=\"text-primary fw-bold\">
\t\t\t\t({{ p.price | amount }})</h4>
\t\t</span>
\t\t<span class=\"d-flex flex-row align-items-center align-self-center flex-wrap\">
\t\t\t<span class=\"badge bg-info me-1\">{{ p.category.name }}</span>
\t\t\t<span class=\"me-1\">/
\t\t\t\t{{ p.energy.name }}</span>
\t\t\t<span class=\"me-1\">/
\t\t\t\t{{ p.kilometers }}
\t\t\t\tkms</span>
\t\t\t<span>/
\t\t\t\t{{ p.circulationAt | date(\"Y\") }}</span>
\t\t</span>
\t\t<hr>
\t\t<p class=\"card-text\">
\t\t\t{{ p.shortDescription|raw|nl2br|striptags|u.truncate(150, '...') }}
\t\t</p>
\t\t<hr>
\t\t<a href=\"{{ path('product_show', {'category_slug': p.category.slug, 'slug': p.slug}) }}\" class=\"btn btn-primary btn-sm\">En savoir plus</a>
\t</div>
</div>
", "_partials/_product_card.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/_partials/_product_card.html.twig");
    }
}
