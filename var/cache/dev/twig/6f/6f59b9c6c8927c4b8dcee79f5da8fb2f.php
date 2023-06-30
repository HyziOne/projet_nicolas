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

/* devis/index.html.twig */
class __TwigTemplate_90592a59c585e093f9ae9e3834ecea13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "devis/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1 class=\"mb-4\">Demande de devis</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
        <div class=\"mb-3\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vousEtes", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vous êtes"]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vousEtes", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
        </div>

        <div class=\"mb-3\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "natureDuProjet", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nature du projet"]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "natureDuProjet", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
        </div>

        <div class=\"mb-3\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "typeDeSite", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type de site"]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "typeDeSite", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
        </div>

        <div class=\"mb-3\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "graphismeARealiser", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Graphisme à réaliser"]);
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "graphismeARealiser", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
        </div>

        <div class=\"mb-3\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "urlDuSite", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Si vous avez déjà un site, indiquez son URL"]);
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "urlDuSite", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "save", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "

    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "devis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  131 => 33,  125 => 30,  121 => 29,  114 => 25,  110 => 24,  103 => 20,  99 => 19,  92 => 15,  88 => 14,  81 => 10,  77 => 9,  72 => 7,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/devis/index.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"mb-4\">Demande de devis</h1>

    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        <div class=\"mb-3\">
            {{ form_label(form.vousEtes, 'Vous êtes', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.vousEtes, {'attr': {'class': 'form-select'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.natureDuProjet, 'Nature du projet', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.natureDuProjet, {'attr': {'class': 'form-select'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.typeDeSite, 'Type de site', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.typeDeSite, {'attr': {'class': 'form-select'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.graphismeARealiser, 'Graphisme à réaliser', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.graphismeARealiser, {'attr': {'class': 'form-select'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.urlDuSite, 'Si vous avez déjà un site, indiquez son URL', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.urlDuSite, {'attr': {'class': 'form-control'}}) }}
        </div>

        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

    {{ form_end(form) }}
{% endblock %}
", "devis/index.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/devis/index.html.twig");
    }
}
