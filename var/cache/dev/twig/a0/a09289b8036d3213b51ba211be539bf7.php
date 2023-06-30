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

/* footer.html.twig */
class __TwigTemplate_11e2b2ce2d4892b914914c2a52c3af7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 2
        echo "
<footer id=\"footer\">
    <div class=\"footer-columns\">
        <div class=\"footer-column\">
            
            <p>&copy; ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Mon Site. Tous droits réservés.</p>
        </div>
        <div class=\"footer-column\" id=\"contact\">
            <h3>Contact</h3>
            <p>Formulaire de contact</p>
            ";
        // line 13
        echo "            ";
        $this->loadTemplate("contact_form.html.twig", "footer.html.twig", 13)->display($context);
        // line 14
        echo "        </div>
    </div>
</footer>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  58 => 13,  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/includes/footer.html.twig #}

<footer id=\"footer\">
    <div class=\"footer-columns\">
        <div class=\"footer-column\">
            
            <p>&copy; {{ \"now\"|date(\"Y\") }} Mon Site. Tous droits réservés.</p>
        </div>
        <div class=\"footer-column\" id=\"contact\">
            <h3>Contact</h3>
            <p>Formulaire de contact</p>
            {# Inclure ici le formulaire de contact #}
            {% include 'contact_form.html.twig' %}
        </div>
    </div>
</footer>

", "footer.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/footer.html.twig");
    }
}
