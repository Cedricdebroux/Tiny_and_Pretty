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

/* concept/index.html.twig */
class __TwigTemplate_5e4f5f4fc51b647a994335e2d82e80d1aa3105b0a2c91d57cf554ef5724b0a1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concept/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concept/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "concept/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Notre concept";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center col-sm-12 mx-sm-auto\">
                <h1 class=\"title\">
                    QUI SOMMES-NOUS ?
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p><i>Tiny and Pretty</i> est née d’une initiative de son fondateur récemment devenu papa. Initialement actif dans le secteur du commerce international, il a eu à cœur de
                            créer une marque responsable qui soutient l’économie locale et de contribuer à un système de consommation durable pour l’avenir de nos enfants.</p>

                        <p>L’idée du projet est survenue suite à la problématique de la surconsommation et à la migration des industries textiles hors
                            Europe. En outre, la crise sanitaire a particulièrement touché les petits commerçants et artisans qui n’avaient
                            pas ou peu de potentiel de vente en ligne. Grâce à notre projet, nous souhaitons solutionner ces deux problématiques. </p>

                        <p> Chez Tiny and Pretty, nous avons à cœur de mettre en avant notre savoir-faire belge en choisissant de faire appel à ces
                            passionnés des métiers du textile afin qu’ensemble, nous puissions vous proposer une alternative plus responsable tout en
                            soutenant notre économie locale.</p>
                        <p>Allant de la création à la sélection des matières premières jusqu’à la confection, nos collections de vêtements sont réalisées
                            dans nos ateliers belges. Nous mettons un point d’honneur à travailler en circuit court, à choisir des tissus de qualité et
                            respectueux de l’environnement, ainsi qu’à mettre en avant le savoir-faire de nos couturier(e)s.

                        </p>
                        <p>Enfin, pour permettre à nos clients de centraliser leurs achats mais aussi pour offrir plus de visibilité à de talentueux
                            créateurs, nous avons pensé le site comme un espace collaboratif où vous trouverez des accessoires sélectionnés par nos soins
                            en adéquation avec les valeurs de notre <i>pretty world.</i>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>













";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concept/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre concept{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center col-sm-12 mx-sm-auto\">
                <h1 class=\"title\">
                    QUI SOMMES-NOUS ?
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p><i>Tiny and Pretty</i> est née d’une initiative de son fondateur récemment devenu papa. Initialement actif dans le secteur du commerce international, il a eu à cœur de
                            créer une marque responsable qui soutient l’économie locale et de contribuer à un système de consommation durable pour l’avenir de nos enfants.</p>

                        <p>L’idée du projet est survenue suite à la problématique de la surconsommation et à la migration des industries textiles hors
                            Europe. En outre, la crise sanitaire a particulièrement touché les petits commerçants et artisans qui n’avaient
                            pas ou peu de potentiel de vente en ligne. Grâce à notre projet, nous souhaitons solutionner ces deux problématiques. </p>

                        <p> Chez Tiny and Pretty, nous avons à cœur de mettre en avant notre savoir-faire belge en choisissant de faire appel à ces
                            passionnés des métiers du textile afin qu’ensemble, nous puissions vous proposer une alternative plus responsable tout en
                            soutenant notre économie locale.</p>
                        <p>Allant de la création à la sélection des matières premières jusqu’à la confection, nos collections de vêtements sont réalisées
                            dans nos ateliers belges. Nous mettons un point d’honneur à travailler en circuit court, à choisir des tissus de qualité et
                            respectueux de l’environnement, ainsi qu’à mettre en avant le savoir-faire de nos couturier(e)s.

                        </p>
                        <p>Enfin, pour permettre à nos clients de centraliser leurs achats mais aussi pour offrir plus de visibilité à de talentueux
                            créateurs, nous avons pensé le site comme un espace collaboratif où vous trouverez des accessoires sélectionnés par nos soins
                            en adéquation avec les valeurs de notre <i>pretty world.</i>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>













{% endblock %}
", "concept/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/concept/index.html.twig");
    }
}
