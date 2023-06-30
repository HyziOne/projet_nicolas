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

/* contact_form.html.twig */
class __TwigTemplate_622e48c4cb0dafedd391d606fca9231b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("handle_contact_form");
        echo "\" method=\"POST\">
    <div class=\"input-field\">
        <label for=\"name\">Nom :</label>
        <input type=\"text\" id=\"name\" name=\"name\" required>
    </div>
    <div class=\"input-field\">
        <label for=\"email\">E-mail :</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
    </div>
    <div class=\"input-field\">
        <label for=\"message\">Message :</label>
        <textarea id=\"message\" name=\"message\" required></textarea>
    </div>
    <button type=\"submit\">Envoyer</button>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/contact_form.html.twig #}

<form action=\"{{ path('handle_contact_form') }}\" method=\"POST\">
    <div class=\"input-field\">
        <label for=\"name\">Nom :</label>
        <input type=\"text\" id=\"name\" name=\"name\" required>
    </div>
    <div class=\"input-field\">
        <label for=\"email\">E-mail :</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
    </div>
    <div class=\"input-field\">
        <label for=\"message\">Message :</label>
        <textarea id=\"message\" name=\"message\" required></textarea>
    </div>
    <button type=\"submit\">Envoyer</button>
</form>
", "contact_form.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/contact_form.html.twig");
    }
}
