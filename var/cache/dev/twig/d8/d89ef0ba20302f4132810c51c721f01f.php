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

/* product/show.html.twig */
class __TwigTemplate_d53ef7372a9e095ba4d6d3e8e2f764fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        echo "\tPage de :
\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<ol class=\"breadcrumb\">
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item active\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</li>
\t</ol>

\t<h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "
\t\t(";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20)), "html", null, true);
        echo ")</h1>
\t<div class=\"row\">
\t\t<div class=\"col-lg-8 mb-md-3 mb-sm-3\">
\t\t\t<div id=\"carouselSingleVehiculeIndicators\" class=\"carousel slide carousel-fade\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "images", [], "any", false, false, false, 25));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 26
            echo "\t\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["image"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"img-fluid\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselSingleVehiculeIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselSingleVehiculeIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"w-100\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body pt-3\" id=\"borderedTabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-tabs-bordered\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#features\">Caractéristiques</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#funding\">Financement</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content pt-2\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade show active features\" id=\"features\">
\t\t\t\t\t\t\t\t";
        // line 53
        $this->loadTemplate("product/_detailed_car.html.twig", "product/show.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">A propos de ce véhicule</h5>
\t\t\t\t\t\t\t\t\t<p>";
        // line 56
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "shortDescription", [], "any", false, false, false, 56));
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade funding\" id=\"funding\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Louez ou financez votre voiture d'occasion en toute sérénité</h5>
\t\t\t\t\t\t\t\t<p>Plusieurs possibilités s'offrent à vous pour financer votre nouvelle voiture ! Vous pouvez soit opter pour la location avec le service LOA (Location avec Option d'Achat), soit financer en crédit. Dans tous les cas, simulez ci-dessous votre financement puis renseignez notre formulaire de financement pour obtenir une réponse de principe directement en ligne !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h3 class=\"text-center\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "html", null, true);
        echo "</h3>
\t\t\t\t\t<div class=\"features mt-2 d-flex\">
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-gas-pump\"></i>
\t\t\t\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "energy", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-road\"></i>
\t\t\t\t\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "kilometers", [], "any", false, false, false, 79), "html", null, true);
        echo "
\t\t\t\t\t\t\tKms
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-regular fa-calendar-days\"></i>
\t\t\t\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "circulationAt", [], "any", false, false, false, 84), "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-gauge\"></i>
\t\t\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "gearbox", [], "any", false, false, false, 88), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex mt-4 fs-2 border-top fw-bold\">
\t\t\t\t\t\t";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "price", [], "any", false, false, false, 92)), "html", null, true);
        echo "
\t\t\t\t\t</div>
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
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 92,  250 => 88,  243 => 84,  235 => 79,  228 => 75,  221 => 71,  203 => 56,  199 => 54,  197 => 53,  172 => 30,  153 => 27,  146 => 26,  129 => 25,  121 => 20,  117 => 19,  111 => 16,  104 => 14,  98 => 11,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tPage de :
\t{{ product.name }}
{% endblock %}

{% block body %}
\t<ol class=\"breadcrumb\">
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"{{ path('homepage') }}\">Accueil</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"{{ path('product_category', {'slug':product.category.slug})}}\">{{ product.category.name }}</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item active\">{{ product.name }}</li>
\t</ol>

\t<h1>{{ product.name }}
\t\t({{ product.price | amount }})</h1>
\t<div class=\"row\">
\t\t<div class=\"col-lg-8 mb-md-3 mb-sm-3\">
\t\t\t<div id=\"carouselSingleVehiculeIndicators\" class=\"carousel slide carousel-fade\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for image in product.images %}
\t\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(image, 'imageFile') }}\" alt=\"{{ product.name }}\" class=\"img-fluid\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselSingleVehiculeIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselSingleVehiculeIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"w-100\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body pt-3\" id=\"borderedTabs\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-tabs-bordered\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#features\">Caractéristiques</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#funding\">Financement</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content pt-2\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade show active features\" id=\"features\">
\t\t\t\t\t\t\t\t{% include \"product/_detailed_car.html.twig\" %}
\t\t\t\t\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">A propos de ce véhicule</h5>
\t\t\t\t\t\t\t\t\t<p>{{ product.shortDescription | raw | nl2br  }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade funding\" id=\"funding\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Louez ou financez votre voiture d'occasion en toute sérénité</h5>
\t\t\t\t\t\t\t\t<p>Plusieurs possibilités s'offrent à vous pour financer votre nouvelle voiture ! Vous pouvez soit opter pour la location avec le service LOA (Location avec Option d'Achat), soit financer en crédit. Dans tous les cas, simulez ci-dessous votre financement puis renseignez notre formulaire de financement pour obtenir une réponse de principe directement en ligne !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h3 class=\"text-center\">{{ product.name }}</h3>
\t\t\t\t\t<div class=\"features mt-2 d-flex\">
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-gas-pump\"></i>
\t\t\t\t\t\t\t{{ product.energy.name }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-road\"></i>
\t\t\t\t\t\t\t{{ product.kilometers }}
\t\t\t\t\t\t\tKms
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-regular fa-calendar-days\"></i>
\t\t\t\t\t\t\t{{ product.circulationAt | date('Y') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center me-2\">
\t\t\t\t\t\t\t<i class=\"fs-3 fa-solid fa-gauge\"></i>
\t\t\t\t\t\t\t{{ product.gearbox }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex mt-4 fs-2 border-top fw-bold\">
\t\t\t\t\t\t{{ product.price | amount }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "product/show.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/product/show.html.twig");
    }
}
