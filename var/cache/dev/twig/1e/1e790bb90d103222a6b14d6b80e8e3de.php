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

/* emails/comment.html.twig */
class __TwigTemplate_2b39dd2bbe7ee9f81ca0e79d76e9eb07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/comment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/comment.html.twig"));

        // line 1
        echo "<h1>Commentaire laissé</h1>
<p>Bonjour,</p>
<p>Vous venez de recevoir un commentaire.</p>
";
        // line 6
        echo "<p>Merci de valider le commentaire en cliquant sur le lien ci-dessous</p>
<p><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin")), "html", null, true);
        echo "\">Back office</a></p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  48 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Commentaire laissé</h1>
<p>Bonjour,</p>
<p>Vous venez de recevoir un commentaire.</p>
{# <p>Prénom et nom du demandeur : {{ comment.fullname }}</p>
<p>Contenu de la demande : {{ comment.content }}</p> #}
<p>Merci de valider le commentaire en cliquant sur le lien ci-dessous</p>
<p><a href=\"{{ absolute_url(path('admin')) }}\">Back office</a></p>", "emails/comment.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/emails/comment.html.twig");
    }
}
