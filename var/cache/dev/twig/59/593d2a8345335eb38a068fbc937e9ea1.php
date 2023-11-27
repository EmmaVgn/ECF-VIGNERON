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

/* shared/_footer.html.twig */
class __TwigTemplate_8d298163bdde7640193dc198a6c097cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        // line 1
        echo "<!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class=\"text-white text-center text-lg-start bg-dark\">
    <!-- Grid container -->
    <div class=\"container p-4\">
      <!--Grid row-->
      <div class=\"row mt-4\">
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-12 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase mb-4\">Garage Parot</h5>
  
          <p>
              Un garage qui garantie une qualité de service unique et personnalisé. Un vrai atelier de confiance
              Venez nous rencontrer à l'une de nos concessions
          </p>
  
          <div class=\"mt-4\">
            <!-- Facebook -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-facebook-f\"></i></a>
            <!-- Dribbble -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-dribbble\"></i></a>
            <!-- Twitter -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-twitter\"></i></a>
            <!-- Google + -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-google-plus-g\"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
  
          <ul class=\"fa-ul\" style=\"margin-left: 1.65em;\">
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-home\"></i></span><span class=\"ms-2\">Avenue des etats-unis 31500 Toulouse</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-envelope\"></i></span><span class=\"ms-2\"><a href=\"mailto:emma.vigneron@outlook.fr\">contact@garageparrot.com</a></span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-phone\"></i></span><span class=\"ms-2\"><a href=\"tel:0635429311\">01 41 48 97 88</a></span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase mb-4\">Ouverture du garage</h5>
  
          <table class=\"table text-center text-white\">
            <tbody class=\"font-weight-normal\">
              <tr>
                <td>Lun - Jeudi</td>
                <td>8h - 19h</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8h- 13h</td>
              </tr>
              <tr>
                <td>Dimanche</td>
                <td>Fermé</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
      © 2023 Copyright
    </div>
    <!-- Copyright -->
  </footer>
  

<!-- End of .container -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class=\"text-white text-center text-lg-start bg-dark\">
    <!-- Grid container -->
    <div class=\"container p-4\">
      <!--Grid row-->
      <div class=\"row mt-4\">
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-12 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase mb-4\">Garage Parot</h5>
  
          <p>
              Un garage qui garantie une qualité de service unique et personnalisé. Un vrai atelier de confiance
              Venez nous rencontrer à l'une de nos concessions
          </p>
  
          <div class=\"mt-4\">
            <!-- Facebook -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-facebook-f\"></i></a>
            <!-- Dribbble -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-dribbble\"></i></a>
            <!-- Twitter -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-twitter\"></i></a>
            <!-- Google + -->
            <a type=\"button\" class=\"btn btn-floating btn-primary btn-lg\"><i class=\"fab fa-google-plus-g\"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
  
          <ul class=\"fa-ul\" style=\"margin-left: 1.65em;\">
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-home\"></i></span><span class=\"ms-2\">Avenue des etats-unis 31500 Toulouse</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-envelope\"></i></span><span class=\"ms-2\"><a href=\"mailto:emma.vigneron@outlook.fr\">contact@garageparrot.com</a></span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fa-li\"><i class=\"fas fa-phone\"></i></span><span class=\"ms-2\"><a href=\"tel:0635429311\">01 41 48 97 88</a></span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase mb-4\">Ouverture du garage</h5>
  
          <table class=\"table text-center text-white\">
            <tbody class=\"font-weight-normal\">
              <tr>
                <td>Lun - Jeudi</td>
                <td>8h - 19h</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8h- 13h</td>
              </tr>
              <tr>
                <td>Dimanche</td>
                <td>Fermé</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
      © 2023 Copyright
    </div>
    <!-- Copyright -->
  </footer>
  

<!-- End of .container -->", "shared/_footer.html.twig", "/Users/emma/ecf-garage-vigneron-emma/templates/shared/_footer.html.twig");
    }
}
