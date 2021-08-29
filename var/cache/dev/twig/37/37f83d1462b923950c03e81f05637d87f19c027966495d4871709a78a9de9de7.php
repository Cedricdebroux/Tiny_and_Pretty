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

/* partenaires/index.html.twig */
class __TwigTemplate_63580df069671f99c6d0420c9b944e559120a962276a77c9912e1774a44051c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaires/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaires/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaires/index.html.twig", 1);
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

        echo "Nos partenaires";
        
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
                    LES PARTENAIRES
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation mb-5\">
                        <p>Pour vous offrir toujours plus de choix tout en respectant notre vision, nous sommes allés à
                            la rencontre d’artisans et de personnalités inspirantes qui œuvrent pour un monde plus
                            durable et respectueux. Ils ont été sélectionnés avec soin pour la qualité de leurs
                            produits, leur engagement social ou leur dimension écologique. Nous souhaitons ici mettre en
                            avant leurs univers ainsi que leur savoir-faire. </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
<div class=\"container-fluid text-center pb-5 ml-5\">
    <div class=\"row\">
        <div class=\"col-6\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/olifant-partenaire.webp"), "html", null, true);
        echo "\" class=\"img_atelier\"
                     alt=\"partenaire-olifant partenaire tiny_and_pretty\"/>
                <div class=\"title_atelier text-center mt-5\">
                    <h3>L’OLIFANT</h3>
                </div>
        </div>
        <div class=\"col-6\">
            <div class=\"coming_soon_box\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/calcetines.webp"), "html", null, true);
        echo "\" class=\"img_atelier\"
                     alt=\"atelier couture enfant  partenaire \"/>
                <div class=\"coming_soon_text\">
                    <div class=\"text_soon\">
                        <h4>WE NEED YOU</h4>
                        <h6>COMING SOON</h6>

                    </div>
                </div>
            </div>


            <div class=\"title_atelier text-center mt-5\">
                <h3>DEVENIR PARTENAIRE</h3>
            </div>
            <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                <p>Envie de collaborer avec nous et de faire partie de l'aventure Tiny & Pretty ?<br>
                    Vous aimeriez devenir partenaire ?
                </p>
                <button class=\"btn-blog join mx-auto\"><span>Rejoignez-nous !</span></button>

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
        return "partenaires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos partenaires{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    LES PARTENAIRES
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation mb-5\">
                        <p>Pour vous offrir toujours plus de choix tout en respectant notre vision, nous sommes allés à
                            la rencontre d’artisans et de personnalités inspirantes qui œuvrent pour un monde plus
                            durable et respectueux. Ils ont été sélectionnés avec soin pour la qualité de leurs
                            produits, leur engagement social ou leur dimension écologique. Nous souhaitons ici mettre en
                            avant leurs univers ainsi que leur savoir-faire. </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
<div class=\"container-fluid text-center pb-5 ml-5\">
    <div class=\"row\">
        <div class=\"col-6\">
                <img src=\"{{ asset('assets/img/olifant-partenaire.webp') }}\" class=\"img_atelier\"
                     alt=\"partenaire-olifant partenaire tiny_and_pretty\"/>
                <div class=\"title_atelier text-center mt-5\">
                    <h3>L’OLIFANT</h3>
                </div>
        </div>
        <div class=\"col-6\">
            <div class=\"coming_soon_box\">
                <img src=\"{{ asset('assets/img/calcetines.webp') }}\" class=\"img_atelier\"
                     alt=\"atelier couture enfant  partenaire \"/>
                <div class=\"coming_soon_text\">
                    <div class=\"text_soon\">
                        <h4>WE NEED YOU</h4>
                        <h6>COMING SOON</h6>

                    </div>
                </div>
            </div>


            <div class=\"title_atelier text-center mt-5\">
                <h3>DEVENIR PARTENAIRE</h3>
            </div>
            <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                <p>Envie de collaborer avec nous et de faire partie de l'aventure Tiny & Pretty ?<br>
                    Vous aimeriez devenir partenaire ?
                </p>
                <button class=\"btn-blog join mx-auto\"><span>Rejoignez-nous !</span></button>

            </div>
        </div>
    </div>
</div>
{% endblock %}
", "partenaires/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/partenaires/index.html.twig");
    }
}
