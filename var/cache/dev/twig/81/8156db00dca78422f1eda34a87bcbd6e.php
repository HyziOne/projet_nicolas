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

/* header/header-home.html.twig */
class __TwigTemplate_acf4d5cda3634389ecaaa290272102fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header-home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header-home.html.twig"));

        // line 2
        echo "

<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">
        <div class=\"left header\">
          <a href=\"/\" class=\"logo me-auto\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
          <nav id=\"navbar\" class=\"navbar left\">
              <ul>
                  <li><a class=\"nav-link menu-top left\" href=\"#about\">À Propos</a></li>
                  <li><a class=\"nav-link menu-top left\" href=\"#services\">Services</a></li>
                  <li><a class=\"nav-link menu-top left\" href=\"#portfolio\">Portfolio</a></li>
              </ul>
              <i class=\"mobile-nav-toggle\"></i>
          </nav>
        </div>
        <div class=\"right header\">
          <nav id=\"navbar\" class=\"navbar right\">
              <ul>
                  <li><a class=\"nav-link menu-top right\" href=\"#contact\">Contact</a></li>
                  <li><a class=\"nav-link menu-top right\" href=\"/devis\">Devis</a></li>
              </ul>
              <i class=\"mobile-nav-toggle\"></i>
          </nav>
      </div>
    </div>
</header>
<script>
window.onscroll = function () {
    const header_navbar = document.querySelector(\".menu-top\");
    const sticky = header_navbar.offsetTop;
    const logo = document.querySelector(\".logo.me-auto\");

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add(\"sticky\");
      logo.src = \"assets/images/logo/logo-2.svg\";
    } else {
      header_navbar.classList.remove(\"sticky\");
      logo.src = \"assets/images/logo/logo.svg\";
    }

    // show or hide the back-top-top button
    const backToTop = document.querySelector(\".back-to-top\");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTop.style.display = \"flex\";
    } else {
      backToTop.style.display = \"none\";
    }
};
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header/header-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/header.html.twig #}


<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">
        <div class=\"left header\">
          <a href=\"/\" class=\"logo me-auto\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\"></a>
          <nav id=\"navbar\" class=\"navbar left\">
              <ul>
                  <li><a class=\"nav-link menu-top left\" href=\"#about\">À Propos</a></li>
                  <li><a class=\"nav-link menu-top left\" href=\"#services\">Services</a></li>
                  <li><a class=\"nav-link menu-top left\" href=\"#portfolio\">Portfolio</a></li>
              </ul>
              <i class=\"mobile-nav-toggle\"></i>
          </nav>
        </div>
        <div class=\"right header\">
          <nav id=\"navbar\" class=\"navbar right\">
              <ul>
                  <li><a class=\"nav-link menu-top right\" href=\"#contact\">Contact</a></li>
                  <li><a class=\"nav-link menu-top right\" href=\"/devis\">Devis</a></li>
              </ul>
              <i class=\"mobile-nav-toggle\"></i>
          </nav>
      </div>
    </div>
</header>
<script>
window.onscroll = function () {
    const header_navbar = document.querySelector(\".menu-top\");
    const sticky = header_navbar.offsetTop;
    const logo = document.querySelector(\".logo.me-auto\");

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add(\"sticky\");
      logo.src = \"assets/images/logo/logo-2.svg\";
    } else {
      header_navbar.classList.remove(\"sticky\");
      logo.src = \"assets/images/logo/logo.svg\";
    }

    // show or hide the back-top-top button
    const backToTop = document.querySelector(\".back-to-top\");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTop.style.display = \"flex\";
    } else {
      backToTop.style.display = \"none\";
    }
};
</script>", "header/header-home.html.twig", "/Users/sofiane/Documents/Nicolas/Workshop client réel/projet_nicolas/templates/header/header-home.html.twig");
    }
}
