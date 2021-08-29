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

/* deuxieme_vie/index.html.twig */
class __TwigTemplate_4808c11d6825bd78c0368559027636923b93dd7285e50b51ea0b89dd35f0098c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deuxieme_vie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deuxieme_vie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "deuxieme_vie/index.html.twig", 1);
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

        echo "Deuxième vie";
        
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
        echo "

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title\">
                    DEUXIÈME VIE
                </h1>
                <div class=\"col-10 text-left pt-5 pb-5\">
                    <div class=\"presentation\">
                        <p>Chez Tiny & Pretty, chaque petites choses, chaque petits gestes comptent. C’est pourquoi il
                            est impératif pour nous d’aller jusqu’au bout de notre projet en donnant une seconde vie à
                            ces objets que nous avons chéris le temps d’une saison, ou de grandir tout simplement.</p>

                        <p> Que faites-vous de ces bonnets tricotés déjà trop petits avant même qu'ils n'aient eu le
                            temps de le porter ? De ces dizaines (centaines ??) de body tellement craquants qu’il était
                            impensable de s’en passer ?</p>

                        <p> Afin de consommer plus responsable, Tiny & Pretty a tenu à développer son propre service de
                            seconde main, mais pas n’importe lequel ! Un service qui vous permet de vendre et d’acheter
                            nos produits et ceux de nos partenaires directement sur notre site à un prix concurrentiel
                            tout en assurant la qualité des articles.</p>
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
        return "deuxieme_vie/index.html.twig";
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

{% block title %}Deuxième vie{% endblock %}

{% block content %}


    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title\">
                    DEUXIÈME VIE
                </h1>
                <div class=\"col-10 text-left pt-5 pb-5\">
                    <div class=\"presentation\">
                        <p>Chez Tiny & Pretty, chaque petites choses, chaque petits gestes comptent. C’est pourquoi il
                            est impératif pour nous d’aller jusqu’au bout de notre projet en donnant une seconde vie à
                            ces objets que nous avons chéris le temps d’une saison, ou de grandir tout simplement.</p>

                        <p> Que faites-vous de ces bonnets tricotés déjà trop petits avant même qu'ils n'aient eu le
                            temps de le porter ? De ces dizaines (centaines ??) de body tellement craquants qu’il était
                            impensable de s’en passer ?</p>

                        <p> Afin de consommer plus responsable, Tiny & Pretty a tenu à développer son propre service de
                            seconde main, mais pas n’importe lequel ! Un service qui vous permet de vendre et d’acheter
                            nos produits et ceux de nos partenaires directement sur notre site à un prix concurrentiel
                            tout en assurant la qualité des articles.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


{% endblock %}
", "deuxieme_vie/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/deuxieme_vie/index.html.twig");
    }
}
