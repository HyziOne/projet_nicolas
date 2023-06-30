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

/* footer/footer.html.twig */
class __TwigTemplate_b58ffb8e91c23cf4eec9c8d72fd1b9c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/footer.html.twig"));

        // line 21
        echo "<div class=\"wave-container\">
  <svg class=\"wave\" viewBox=\"0 0 1440 320\">
    ";
        // line 24
        echo "    <path fill=\"#00567D\" fill-opacity=\"1\" d=\"M0,224L48,234.7C96,245,192,267,288,256C384,245,480,203,576,202.7C672,203,768,245,864,266.7C960,288,1056,288,1152,277.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path>

  </svg>
</div>

<div id=\"footer\">
    <div class=\"footer-columns\">
        <div class=\"footer-column\">
            ";
        // line 33
        echo "            <div class=\"logo me-auto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
            <p>Nicolas Gurak</p>
            <p>Developpeur Web Freelance</p>
            <p>Création de site internet / Refonte de site web / Création d’application web</p>
            <p>Maintenance et support à Rennes</p>      
        </div>
         <div class=\"footer-column\">
            <h3>Contact</h3>
            <p>Mail: nicolasgurak@gmail.com</p>
            <p>Téléphone: 0786103059</p>
            <p>Basé à Rennes 35000, France</p>

        </div>
        <div class=\"footer-column\" id=\"contact\">
            <h3>Formulaire de contact</h3>
            ";
        // line 49
        echo "            ";
        $this->loadTemplate("contact_form.html.twig", "footer/footer.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
        <div class=\"bottom-footer\">
            <p>&copy; ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Mon Site. Tous droits réservés.</p>
            <a href=\"/mentions-legales\">Mentions légales</a>
            <a href=\"/politique-de-confidentialite\">Politique de confidentialité</a>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 52,  79 => 50,  76 => 49,  57 => 33,  47 => 24,  43 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/includes/footer.html.twig #}
{# <div class=\"test\">

  <svg class=\"wave\" viewBox=\"0 0 1440 320\">
    <path fill=\"#00567D\" fill-opacity=\"1\" d=\"M0,224L40,202.7C80,181,160,139,240,144C320,149,400,203,480,240C560,277,640,299,720,288C800,277,880,235,960,186.7C1040,139,1120,85,1200,64C1280,43,1360,53,1400,58.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z\"></path>
  </svg>
</div>

<style>
  .test {
    position: relative;
    width: 100%;
    height: 300px;
  }
  .wave {
    position: absolute;
    bottom: 0;
    left: 0;
  }
</style> #}
<div class=\"wave-container\">
  <svg class=\"wave\" viewBox=\"0 0 1440 320\">
    {# <path fill=\"#00567D\" fill-opacity=\"1\" d=\"M0,256L48,234.7C96,213,192,171,288,160C384,149,480,171,576,149.3C672,128,768,64,864,64C960,64,1056,128,1152,149.3C1248,171,1344,149,1392,138.7L1440,117.3L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path> #}
    <path fill=\"#00567D\" fill-opacity=\"1\" d=\"M0,224L48,234.7C96,245,192,267,288,256C384,245,480,203,576,202.7C672,203,768,245,864,266.7C960,288,1056,288,1152,277.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path>

  </svg>
</div>

<div id=\"footer\">
    <div class=\"footer-columns\">
        <div class=\"footer-column\">
            {# Logo #}
            <div class=\"logo me-auto\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\"></div>
            <p>Nicolas Gurak</p>
            <p>Developpeur Web Freelance</p>
            <p>Création de site internet / Refonte de site web / Création d’application web</p>
            <p>Maintenance et support à Rennes</p>      
        </div>
         <div class=\"footer-column\">
            <h3>Contact</h3>
            <p>Mail: nicolasgurak@gmail.com</p>
            <p>Téléphone: 0786103059</p>
            <p>Basé à Rennes 35000, France</p>

        </div>
        <div class=\"footer-column\" id=\"contact\">
            <h3>Formulaire de contact</h3>
            {# Inclure ici le formulaire de contact #}
            {% include 'contact_form.html.twig' %}
        </div>
        <div class=\"bottom-footer\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} Mon Site. Tous droits réservés.</p>
            <a href=\"/mentions-legales\">Mentions légales</a>
            <a href=\"/politique-de-confidentialite\">Politique de confidentialité</a>
        </div>
    </div>
</div>

", "footer/footer.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/footer/footer.html.twig");
    }
}
