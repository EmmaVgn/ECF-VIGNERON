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

/* shared/_assurance.html.twig */
class __TwigTemplate_d3f82ea10b9850d5dd0dfd0eaceeac55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_assurance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_assurance.html.twig"));

        // line 1
        echo "<div class=\"col\">
\t<div class=\"card bg-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " text-white text-center\">
\t\t<div class=\"card-body\">
\t\t\t<i class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["icone"]) || array_key_exists("icone", $context) ? $context["icone"] : (function () { throw new RuntimeError('Variable "icone" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " fa-2x mb-3\"></i>
\t\t\t<p class=\"card-text\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_assurance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col\">
\t<div class=\"card bg-{{ color }} text-white text-center\">
\t\t<div class=\"card-body\">
\t\t\t<i class=\"{{ icone }} fa-2x mb-3\"></i>
\t\t\t<p class=\"card-text\">{{ text }}</p>
\t\t</div>
\t</div>
</div>
", "shared/_assurance.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/shared/_assurance.html.twig");
    }
}
