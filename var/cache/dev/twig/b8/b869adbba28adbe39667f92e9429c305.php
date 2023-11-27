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

/* shared/_navbar.html.twig */
class __TwigTemplate_48b5304c16724a886f93b07c66c14d44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">Garage Parot</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor04\" aria-controls=\"navbarColor04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor04\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categoryRepository"]) || array_key_exists("categoryRepository", $context) ? $context["categoryRepository"] : (function () { throw new RuntimeError('Variable "categoryRepository" does not exist.', 9, $this->source); })()), "findAll", [], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_display");
        echo "\">
\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"btn btn-warning me-3\">Admin</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" class=\"btn btn-danger\">Logout</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-success\">Login</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 35,  105 => 32,  102 => 31,  96 => 28,  90 => 25,  87 => 24,  85 => 23,  76 => 17,  71 => 14,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">Garage Parot</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor04\" aria-controls=\"navbarColor04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor04\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t{% for c in categoryRepository.findAll() %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('product_category', {'slug': c.slug}) }}\">{{ c.name }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('product_display') }}\">
\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('admin') }}\" class=\"btn btn-warning me-3\">Admin</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('security_logout') }}\" class=\"btn btn-danger\">Logout</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('security_login') }}\" class=\"btn btn-success\">Login</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>", "shared/_navbar.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/shared/_navbar.html.twig");
    }
}
