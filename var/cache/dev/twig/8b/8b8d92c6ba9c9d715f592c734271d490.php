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

/* product/_detailed_car.html.twig */
class __TwigTemplate_2541929fbdd64b4ef67d8143e6c44be5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_detailed_car.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_detailed_car.html.twig"));

        // line 1
        echo "<div class=\"container-detailed\">
\t<div class=\"show-detailed-car\">
\t\t<div class=\"grid-header text-start\">
\t\t\t<header>
\t\t\t\t<h5 class=\"mb-0\">Détail du véhicule</h5>
\t\t\t\t<p class=\"small fst-italic mb-0\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
\t\t\t</header>
\t\t</div>
\t\t<div class=\"mw-0\">
\t\t\t<div class=\"detailed-items-car\">
\t\t\t\t<div class=\"refunded-content\">
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Marque :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "model", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Couleur :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "color", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Modèle :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Kilométrage :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "kilometers", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t\t\t\t\t\tKms</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Boîte de vitesse :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "gearbox", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Année :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "circulationAt", [], "any", false, false, false, 35), "Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mw-0\">
\t\t\t<div class=\"detailed-items-car\">
\t\t\t\t<div class=\"refunded-content\">
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Prix TTC :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45)), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Certificat CRIT'AIR :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "critair", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Type de véhicule :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Puissance Réelle :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "fiscalhorsepower", [], "any", false, false, false, 57), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Carburant :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "energy", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Mise en circulation :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "circulationAt", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/_detailed_car.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  138 => 61,  131 => 57,  124 => 53,  117 => 49,  110 => 45,  97 => 35,  90 => 31,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-detailed\">
\t<div class=\"show-detailed-car\">
\t\t<div class=\"grid-header text-start\">
\t\t\t<header>
\t\t\t\t<h5 class=\"mb-0\">Détail du véhicule</h5>
\t\t\t\t<p class=\"small fst-italic mb-0\">{{ product.name }}</p>
\t\t\t</header>
\t\t</div>
\t\t<div class=\"mw-0\">
\t\t\t<div class=\"detailed-items-car\">
\t\t\t\t<div class=\"refunded-content\">
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Marque :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">{{ product.model.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Couleur :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.color.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Modèle :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">{{ product.type.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Kilométrage :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.kilometers }}
\t\t\t\t\t\t\tKms</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Boîte de vitesse :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.gearbox }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Année :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.circulationAt | date('Y') }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mw-0\">
\t\t\t<div class=\"detailed-items-car\">
\t\t\t\t<div class=\"refunded-content\">
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Prix TTC :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.price | amount }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Certificat CRIT'AIR :</span>
\t\t\t\t\t\t<span class=\"fw-bold text-uppercase\">{{ product.critair.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Type de véhicule :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.category.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Puissance Réelle :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.fiscalhorsepower }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Carburant :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.energy.name }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t<span class=\"label\">Mise en circulation :</span>
\t\t\t\t\t\t<span class=\"fw-bold\">{{ product.circulationAt | date('d/m/Y') }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "product/_detailed_car.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/product/_detailed_car.html.twig");
    }
}
