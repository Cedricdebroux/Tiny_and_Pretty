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

/* qui_sommes_nous/index.html.twig */
class __TwigTemplate_f7f371572a575d125d2d20ac9c4d9447dac925c526fd4fc97915e39c1c3a2eb6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qui_sommes_nous/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qui_sommes_nous/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "qui_sommes_nous/index.html.twig", 1);
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

        echo "Qui Sommes-nous ?";
        
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
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    QUI SOMMES-NOUS ?
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p><i>Tiny and Pretty</i> est née d’une initiative de son fondateur, récemment devenu papa.
                            Initialement actif dans le secteur du commerce international, il a eu à cœur de créer une
                            marque responsable qui soutient l’économie locale et qui contribue à un système de
                            consommation durable. </p>

                        <p>L’idée du projet vient de l’envie de répondre aux problématiques de surconsommation et de
                            migration des industries textiles hors Europe. En plus de cela, la crise sanitaire a
                            particulièrement touché les petits commerçants et artisans qui n’avaient pas ou peu de
                            potentiel de vente en ligne. </p>

                        <p>Chez <i>Tiny & Pretty</i>, nous avons à cœur de mettre en avant le savoir-faire belge en
                            choisissant
                            de faire appel à des passionnés des métiers du textile afin qu’ensemble, nous puissions
                            proposer des alternatives plus responsables tout en soutenant une économie locale.

                            En allant de la conception à la sélection des matières premières et jusqu’à la confection,
                            nos collections de vêtements sont entièrement fabriquées en Belgique. Nous mettons un point
                            d’honneur à travailler en circuit court, à choisir des tissus de qualité et respectueux de
                            l’environnement, ainsi qu’à mettre en avant le savoir-faire de nos couturier-e-s. </p>


                        <p>Enfin, pour permettre à nos clients de centraliser leurs achats mais aussi pour offrir plus
                            de visibilité à de talentueux créateurs, nous avons pensé le site comme un espace
                            collaboratif où vous trouverez des accessoires minutieusement sélectionnés pour entrer dans
                            notre <i>Pretty World.</i> </p>
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
        return "qui_sommes_nous/index.html.twig";
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

{% block title %}Qui Sommes-nous ?{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    QUI SOMMES-NOUS ?
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p><i>Tiny and Pretty</i> est née d’une initiative de son fondateur, récemment devenu papa.
                            Initialement actif dans le secteur du commerce international, il a eu à cœur de créer une
                            marque responsable qui soutient l’économie locale et qui contribue à un système de
                            consommation durable. </p>

                        <p>L’idée du projet vient de l’envie de répondre aux problématiques de surconsommation et de
                            migration des industries textiles hors Europe. En plus de cela, la crise sanitaire a
                            particulièrement touché les petits commerçants et artisans qui n’avaient pas ou peu de
                            potentiel de vente en ligne. </p>

                        <p>Chez <i>Tiny & Pretty</i>, nous avons à cœur de mettre en avant le savoir-faire belge en
                            choisissant
                            de faire appel à des passionnés des métiers du textile afin qu’ensemble, nous puissions
                            proposer des alternatives plus responsables tout en soutenant une économie locale.

                            En allant de la conception à la sélection des matières premières et jusqu’à la confection,
                            nos collections de vêtements sont entièrement fabriquées en Belgique. Nous mettons un point
                            d’honneur à travailler en circuit court, à choisir des tissus de qualité et respectueux de
                            l’environnement, ainsi qu’à mettre en avant le savoir-faire de nos couturier-e-s. </p>


                        <p>Enfin, pour permettre à nos clients de centraliser leurs achats mais aussi pour offrir plus
                            de visibilité à de talentueux créateurs, nous avons pensé le site comme un espace
                            collaboratif où vous trouverez des accessoires minutieusement sélectionnés pour entrer dans
                            notre <i>Pretty World.</i> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "qui_sommes_nous/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/qui_sommes_nous/index.html.twig");
    }
}
