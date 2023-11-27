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

/* shared/_testimonials.html.twig */
class __TwigTemplate_9be623d1799ea89c087f0c0b899b3f9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_testimonials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_testimonials.html.twig"));

        // line 1
        echo "<section class=\"testimonial sections\" id=\"testimonial\">
\t<h2 class=\"header-titles\">Les avis</h2>

\t<p class=\"header-description text-center\">
\t\tGarage V. Parrot est un lieu de confiance pour tous ses clients. Vous pouvez compter sur nous comme plusieurs des nous fidèles clients.
\t</p>

\t<div>
\t\t<h4 class=\"alert-heading text-center\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\tNote globale donnée par nos clients
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 15
        $this->loadTemplate("shared/_rating.html.twig", "shared/_testimonials.html.twig", 15)->display(twig_array_merge($context, ["rating" => (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 15, $this->source); })())]));
        // line 16
        echo "\t\t\t\t\t<br>
\t\t\t\t\t<small>(Calculée sur ";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 17, $this->source); })())), "html", null, true);
        echo " avis)</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</h4>
\t</div>

\t";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            echo "\t\t<div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 26, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 27
                echo "\t\t\t\t\t<div class=\"carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t<div class=\"stars text-center mb-3\">
\t\t\t\t\t\t\t";
                // line 29
                $this->loadTemplate("shared/_rating.html.twig", "shared/_testimonials.html.twig", 29)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 29)]));
                // line 30
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<blockquote class=\"fst-italic\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 31), "html", null, true);
                echo "</blockquote>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t\t\t<strong>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "fullname", [], "any", false, false, false, 34), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t</button>
\t\t</div>
\t";
        } else {
            // line 50
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\tAucun avis pour le moment.
\t\t</div>
\t";
        }
        // line 54
        echo "

\t<div class=\"add-review\">
\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_notice");
        echo "\" class=\"btn-fill text-center text-decoration-none fs-3\">Donnez votre avis</a>
\t</div>

</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 57,  153 => 54,  147 => 50,  134 => 39,  115 => 34,  109 => 31,  106 => 30,  104 => 29,  96 => 27,  79 => 26,  75 => 24,  73 => 23,  64 => 17,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"testimonial sections\" id=\"testimonial\">
\t<h2 class=\"header-titles\">Les avis</h2>

\t<p class=\"header-description text-center\">
\t\tGarage V. Parrot est un lieu de confiance pour tous ses clients. Vous pouvez compter sur nous comme plusieurs des nous fidèles clients.
\t</p>

\t<div>
\t\t<h4 class=\"alert-heading text-center\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\tNote globale donnée par nos clients
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{% include \"shared/_rating.html.twig\" with {'rating': averageRating } %}
\t\t\t\t\t<br>
\t\t\t\t\t<small>(Calculée sur {{ comments|length }} avis)</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</h4>
\t</div>

\t{% if comments|length > 0 %}
\t\t<div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t{% for comment in comments %}
\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t<div class=\"stars text-center mb-3\">
\t\t\t\t\t\t\t{% include \"shared/_rating.html.twig\" with {'rating': comment.rating } %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<blockquote class=\"fst-italic\">{{ comment.content }}</blockquote>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t\t\t<strong>{{ comment.fullname}}</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t</button>
\t\t</div>
\t{% else %}
\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\tAucun avis pour le moment.
\t\t</div>
\t{% endif %}


\t<div class=\"add-review\">
\t\t<a href=\"{{ path('home_notice') }}\" class=\"btn-fill text-center text-decoration-none fs-3\">Donnez votre avis</a>
\t</div>

</section>
", "shared/_testimonials.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/shared/_testimonials.html.twig");
    }
}
