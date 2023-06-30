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

/* conformite/mentions-legales.html.twig */
class __TwigTemplate_be09d8a935f069c01caa466f56800ac7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conformite/mentions-legales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conformite/mentions-legales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conformite/mentions-legales.html.twig", 2);
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
        echo "<h2>1 - Édition du site</h2>
    <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet https://nicolas-gurak.fr l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:</p>
    <ul>
        <li>Propriétaire du site : Nicolas Gurak - Contact : nicolasgurak@gmail.com 0786103059 - Adresse : .</li>
        <li>Identification de l'entreprise : Auto-entrepreneur Nicolas Gurak au capital social de 0€ - SIREN : - RCS ou RM : - Adresse postale : -</li>
        <li>Directeur de la publication : Nicolas Gurak - Contact : .</li>
        <li>Hébergeur : OVH SAS - 2 rue Kellermann - BP 80157 - 59053 Roubaix Cedex 1 - Téléphone : 1007</li>
        <li>Délégué à la protection des données : Nicolas Gurak -</li>
        <li>Autres contributeurs : Développement du site : BEN MASSAOUD Sofiane</li>
    </ul>

    <h2>2 - Propriété intellectuelle et contrefaçons</h2>
    <p>Nicolas Gurak est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.</p>
    <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Nicolas Gurak.</p>
    <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

    <h2>3 - Limitations de responsabilité</h2>
    <p>Nicolas Gurak ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://nicolas-gurak.fr.</p>
    <p>Nicolas Gurak décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://nicolas-gurak.fr.</p>
    <p>Nicolas Gurak s’engage à sécuriser au mieux le site https://nicolas-gurak.fr, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.</p>
    <p>Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. Nicolas Gurak se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.</p>
    <p>Le cas échéant, Nicolas Gurak se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

    <h2>4 - CNIL et gestion des données personnelles</h2>
    <p>Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://nicolas-gurak.fr dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : Nicolas Gurak - .</p>
    <p>Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre <a href=\"https://nicolas-gurak/politique-de-confidentialité\">politique de confidentialité</a>.</p>

    <h2>5 - Liens hypertextes et cookies</h2>
    <p>Le site https://nicolas-gurak.fr contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://nicolas-gurak.fr.</p>
    <p>La navigation sur le site https://nicolas-gurak.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.</p>
    <p>Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.</p>
    <p>Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.</p>
    <p>Les cookies sont enregistrés pour une durée maximale de 12 mois.</p>
    <p>Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre <a href=\"https://nicolas-gurak/politique-de-confidentialité\">politique de confidentialité</a>.</p>

    <h2>6 - Droit applicable et attribution de juridiction</h2>
    <p>Tout litige en relation avec l’utilisation du site https://nicolas-gurak.fr est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Rennes.</p>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conformite/mentions-legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/conformite/mentions-legales.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
<h2>1 - Édition du site</h2>
    <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet https://nicolas-gurak.fr l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:</p>
    <ul>
        <li>Propriétaire du site : Nicolas Gurak - Contact : nicolasgurak@gmail.com 0786103059 - Adresse : .</li>
        <li>Identification de l'entreprise : Auto-entrepreneur Nicolas Gurak au capital social de 0€ - SIREN : - RCS ou RM : - Adresse postale : -</li>
        <li>Directeur de la publication : Nicolas Gurak - Contact : .</li>
        <li>Hébergeur : OVH SAS - 2 rue Kellermann - BP 80157 - 59053 Roubaix Cedex 1 - Téléphone : 1007</li>
        <li>Délégué à la protection des données : Nicolas Gurak -</li>
        <li>Autres contributeurs : Développement du site : BEN MASSAOUD Sofiane</li>
    </ul>

    <h2>2 - Propriété intellectuelle et contrefaçons</h2>
    <p>Nicolas Gurak est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.</p>
    <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Nicolas Gurak.</p>
    <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

    <h2>3 - Limitations de responsabilité</h2>
    <p>Nicolas Gurak ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://nicolas-gurak.fr.</p>
    <p>Nicolas Gurak décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://nicolas-gurak.fr.</p>
    <p>Nicolas Gurak s’engage à sécuriser au mieux le site https://nicolas-gurak.fr, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.</p>
    <p>Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. Nicolas Gurak se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.</p>
    <p>Le cas échéant, Nicolas Gurak se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

    <h2>4 - CNIL et gestion des données personnelles</h2>
    <p>Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://nicolas-gurak.fr dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : Nicolas Gurak - .</p>
    <p>Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre <a href=\"https://nicolas-gurak/politique-de-confidentialité\">politique de confidentialité</a>.</p>

    <h2>5 - Liens hypertextes et cookies</h2>
    <p>Le site https://nicolas-gurak.fr contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://nicolas-gurak.fr.</p>
    <p>La navigation sur le site https://nicolas-gurak.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.</p>
    <p>Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.</p>
    <p>Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.</p>
    <p>Les cookies sont enregistrés pour une durée maximale de 12 mois.</p>
    <p>Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre <a href=\"https://nicolas-gurak/politique-de-confidentialité\">politique de confidentialité</a>.</p>

    <h2>6 - Droit applicable et attribution de juridiction</h2>
    <p>Tout litige en relation avec l’utilisation du site https://nicolas-gurak.fr est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Rennes.</p>



{% endblock %}", "conformite/mentions-legales.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/conformite/mentions-legales.html.twig");
    }
}
