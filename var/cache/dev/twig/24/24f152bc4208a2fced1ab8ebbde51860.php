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

/* home/index.html.twig */
class __TwigTemplate_2d5b54f8ad994a7f295a1a7d669a2f03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <div id=\"particles-js\">
    <div class=\"full-home\" id=\"home\">
    </div>
        <script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
    <script src=\"http://threejs.org/examples/js/libs/stats.min.js\"></script>
    ";
        // line 16
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js\" integrity=\"sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script>

    ";
        // line 21
        echo "    </script>
    <div class=\"home-page\">
            <div class=\"top-title\">
                <h1>Nicolas Gurak : </h1>
                <div class=\"NG-def\">
                    <h2 id=\"textAnimation\"></h2>
                    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/writeTxt.js"), "html", null, true);
        echo "\"></script>
                </div>
            </div>

            <div class=\"profil-ncgrk\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Profil-ng.webp"), "html", null, true);
        echo "\"/>
            </div>

        ";
        // line 36
        echo "        <section id=\"about\">
            <h3>A propos de moi</h3>
            </br>
            <p>En tant que développeur web freelance, je transforme vos idées en solutions numériques innovantes. <br>Mon expertise en développement web s'étend sur plusieurs années, durant lesquelles j'ai acquis la capacité de créer des sites web qui allient fonctionnalité, esthétique et facilité d'utilisation.</p>
            <p>Que vous cherchiez à lancer un nouveau site web pour votre entreprise, à améliorer un site web existant, ou à créer une application web unique, je suis là pour vous aider à atteindre vos objectifs.</p>
            <p>En tant que développeur web freelance, je vous offre une attention personnalisée et une flexibilité que les grandes agences ne peuvent pas toujours fournir. Chaque projet est une priorité pour moi et je m'engage à fournir des solutions de haute qualité adaptées à vos besoins spécifiques.</p>
        </section>

        ";
        // line 45
        echo "        <section id=\"services\">
            <h3>Services</h3>
            </br>
            <p>En tant que développeur web freelance, je propose une gamme variée de services pour répondre à vos besoins en matière de présence en ligne. Chaque service est conçu pour vous aider à atteindre vos objectifs spécifiques et à maximiser votre impact numérique.</p>
            <ul>
                <li>Développement de sites web : Qu'il s'agisse d'un site vitrine, d'un blog, d'une boutique en ligne ou d'une plateforme sur mesure, je crée des sites web qui sont à la fois esthétiquement agréables et fonctionnels.  </li>
                <li>Refonte de site web : Si vous possédez déjà un site web mais qu'il a besoin d'être actualisé ou amélioré, je propose des services de refonte pour moderniser son design, améliorer son expérience utilisateur et optimiser ses performances.  </li>
                <li>Développement d'applications web : J'ai l'expérience nécessaire pour créer des applications web complexes et robustes, qu'il s'agisse d'une application de gestion, d'une plateforme de e-learning ou d'une application spécifique à votre domaine d'activité.  </li>
                <li>Maintenance et support : Je propose également des services de maintenance et de support pour assurer que votre site web reste à jour et fonctionne correctement. </li>
            </ul>
        </section>
        
        
        ";
        // line 59
        echo "        <h3>Portfolio</h3>
        </br>
        <p>Un aperçu de mon voyage dans le monde du développement web</p>
       <div id=\"portfolio-buttons\">
            <button data-filter=\"*\">Afficher tout</button>
            <button data-filter=\".site-vitrine\">Sites vitrine</button>
            <button data-filter=\".site-e-commerce\">Sites e-commerce</button>
            <button data-filter=\".autre\">Autres</button>
        </div>


        <section id=\"portfolio\">
            <!-- Contenu du bloc Portfolio -->
            <div class=\"full-item\">
                <div class=\"item site-vitrine\">
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portfolio/PetitNuageEquiCoaching.png"), "html", null, true);
        echo "\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Petit Nuage Equi Coaching</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://petitnuageequicoaching.fr\" target=\"_blank\">+</a>
                        </div>
                    </div>
                </div>
               <div class=\"item site-vitrine\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portfolio/LaLicorne.png"), "html", null, true);
        echo "\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>La licorne</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://www.hotel-la-licorne.com/\" target=\"_blank\">+</a>
                        </div>
                    </div>
                </div>
                <div class=\"item site-vitrine\">
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portfolio/Van.png"), "html", null, true);
        echo "\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Van</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"#\">+</a>
                        </div>
                    </div>                        
                </div>
                <div class=\"item site-e-commerce\">
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portfolio/Carpeto.png"), "html", null, true);
        echo "\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Carpeto</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://play-carpeto.fr/\" target=\"_blank\">+</a>
                        </div>
                    </div>   
                </div>
                <div class=\"item autre\">
                    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/portfolio/Simeon.png"), "html", null, true);
        echo "\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Simeon</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://simeonmds.netlify.app\" target=\"_blank\">+</a>
                        </div>
                    </div>                        
                </div>
            </div>
        </section>

    </div>

    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope-filtred.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 133,  225 => 118,  211 => 107,  197 => 96,  183 => 85,  169 => 74,  152 => 59,  137 => 45,  127 => 36,  121 => 32,  113 => 27,  105 => 21,  99 => 17,  96 => 16,  88 => 9,  78 => 8,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/home/index.html.twig #}

{% extends 'base.html.twig' %}

{% block body_class %}accueil{% endblock %}


{% block body %}

    <div id=\"particles-js\">
    <div class=\"full-home\" id=\"home\">
    </div>
        <script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script>
    <script src=\"http://threejs.org/examples/js/libs/stats.min.js\"></script>
    {# <script src=\"{{ asset('js/jquery.min.js') }}\"></script> #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js\" integrity=\"sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('js/isotope.pkgd.min.js') }}\"></script>
    <script>

    {# particlesJS(\"particles-js\", {\"particles\":{\"number\":{\"value\":5,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#06b2b2\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":2,\"color\":\"#06b2b2\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":52.110891978129494,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":0,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":5,\"direction\":\"top\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"bubble\"},\"onclick\":{\"enable\":false,\"mode\":\"bubble\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update); #}
    </script>
    <div class=\"home-page\">
            <div class=\"top-title\">
                <h1>Nicolas Gurak : </h1>
                <div class=\"NG-def\">
                    <h2 id=\"textAnimation\"></h2>
                    <script src=\"{{ asset('js/writeTxt.js') }}\"></script>
                </div>
            </div>

            <div class=\"profil-ncgrk\">
                <img src=\"{{ asset('images/Profil-ng.webp') }}\"/>
            </div>

        {# Bloc A propos de moi #}
        <section id=\"about\">
            <h3>A propos de moi</h3>
            </br>
            <p>En tant que développeur web freelance, je transforme vos idées en solutions numériques innovantes. <br>Mon expertise en développement web s'étend sur plusieurs années, durant lesquelles j'ai acquis la capacité de créer des sites web qui allient fonctionnalité, esthétique et facilité d'utilisation.</p>
            <p>Que vous cherchiez à lancer un nouveau site web pour votre entreprise, à améliorer un site web existant, ou à créer une application web unique, je suis là pour vous aider à atteindre vos objectifs.</p>
            <p>En tant que développeur web freelance, je vous offre une attention personnalisée et une flexibilité que les grandes agences ne peuvent pas toujours fournir. Chaque projet est une priorité pour moi et je m'engage à fournir des solutions de haute qualité adaptées à vos besoins spécifiques.</p>
        </section>

        {# Bloc Services #}
        <section id=\"services\">
            <h3>Services</h3>
            </br>
            <p>En tant que développeur web freelance, je propose une gamme variée de services pour répondre à vos besoins en matière de présence en ligne. Chaque service est conçu pour vous aider à atteindre vos objectifs spécifiques et à maximiser votre impact numérique.</p>
            <ul>
                <li>Développement de sites web : Qu'il s'agisse d'un site vitrine, d'un blog, d'une boutique en ligne ou d'une plateforme sur mesure, je crée des sites web qui sont à la fois esthétiquement agréables et fonctionnels.  </li>
                <li>Refonte de site web : Si vous possédez déjà un site web mais qu'il a besoin d'être actualisé ou amélioré, je propose des services de refonte pour moderniser son design, améliorer son expérience utilisateur et optimiser ses performances.  </li>
                <li>Développement d'applications web : J'ai l'expérience nécessaire pour créer des applications web complexes et robustes, qu'il s'agisse d'une application de gestion, d'une plateforme de e-learning ou d'une application spécifique à votre domaine d'activité.  </li>
                <li>Maintenance et support : Je propose également des services de maintenance et de support pour assurer que votre site web reste à jour et fonctionne correctement. </li>
            </ul>
        </section>
        
        
        {# Bloc Portfolio #}
        <h3>Portfolio</h3>
        </br>
        <p>Un aperçu de mon voyage dans le monde du développement web</p>
       <div id=\"portfolio-buttons\">
            <button data-filter=\"*\">Afficher tout</button>
            <button data-filter=\".site-vitrine\">Sites vitrine</button>
            <button data-filter=\".site-e-commerce\">Sites e-commerce</button>
            <button data-filter=\".autre\">Autres</button>
        </div>


        <section id=\"portfolio\">
            <!-- Contenu du bloc Portfolio -->
            <div class=\"full-item\">
                <div class=\"item site-vitrine\">
                    <img src=\"{{ asset('images/portfolio/PetitNuageEquiCoaching.png') }}\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Petit Nuage Equi Coaching</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://petitnuageequicoaching.fr\" target=\"_blank\">+</a>
                        </div>
                    </div>
                </div>
               <div class=\"item site-vitrine\">
                    <img src=\"{{ asset('images/portfolio/LaLicorne.png') }}\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>La licorne</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://www.hotel-la-licorne.com/\" target=\"_blank\">+</a>
                        </div>
                    </div>
                </div>
                <div class=\"item site-vitrine\">
                    <img src=\"{{ asset('images/portfolio/Van.png') }}\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Van</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"#\">+</a>
                        </div>
                    </div>                        
                </div>
                <div class=\"item site-e-commerce\">
                    <img src=\"{{ asset('images/portfolio/Carpeto.png') }}\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Carpeto</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://play-carpeto.fr/\" target=\"_blank\">+</a>
                        </div>
                    </div>   
                </div>
                <div class=\"item autre\">
                    <img src=\"{{ asset('images/portfolio/Simeon.png') }}\"/>
                    <div class=\"large-redirect\">
                        <div class=\"left-redirect\">
                            <p>Simeon</p>
                        </div>
                        <div class=\"right-redirect\">
                            <a href=\"https://simeonmds.netlify.app\" target=\"_blank\">+</a>
                        </div>
                    </div>                        
                </div>
            </div>
        </section>

    </div>

    <script src=\"{{ asset('js/isotope-filtred.js') }}\"></script>


{% endblock %}

", "home/index.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/home/index.html.twig");
    }
}
