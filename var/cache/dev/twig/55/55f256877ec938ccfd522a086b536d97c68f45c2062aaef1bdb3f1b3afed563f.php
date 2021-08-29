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

/* ateliers/index.html.twig */
class __TwigTemplate_056106b2892a53aaa55172eeb48b9255c25fb38e136454d2f3bd667ecb469631 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ateliers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ateliers/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ateliers/index.html.twig", 1);
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

        echo "Nos ateliers";
        
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
        echo "    <div class=\"col-12 text-center pt-5\">
        <h1 class=\"title\">
            NOS ATELIERS
        </h1>
        <div class=\"col-10 text-left pt-5 pb-5\">
            <div class=\"presentation\">
                Tiny & Pretty c’est avant tout une grande famille, qui place l’humain au centre de ses choix. Chaque
                jour, nous nous remuons les méninges pour vous proposer de jolies pièces fabriquées artisanalement et
                signées Tiny & Pretty. Il nous tient donc à cœur de partager avec vous les histoires de celles et ceux
                qui, avec leurs doigts de fées, confectionnent nos produits.
            </div>
        </div>
    </div>
    <div class=\"container-fluid text-center pb-5 ml-5\">
        <div class=\"row\">
            <div class=\"col-6\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("atelier_debora");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/debora.webp"), "html", null, true);
        echo "\" class=\"img_atelier\"
                         alt=\"atelier couture enfant debora partenaire\"/>
                    <div class=\"title_atelier text-center mt-5\">
                        <h3>L’ATELIER DE DÉBORA</h3>
                    </div>
                    <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                        <p>C’est au fil de plusieurs recherches que T&P a su trouver les mains de fée qui l’aideront à
                            grandir. Notre projet est devenu commun, comme si d’une rencontre professionnelle, nous
                            devenions une famille, passionnée et animée par la même volonté de mieux faire.

                        </p>

                    </div>
                </a>
            </div>
            <div class=\"col-6\">
                <div class=\"coming_soon_box\">
                    <img src=\"";
        // line 39
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
                    <h3>VOTRE ATELIER</h3>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    <p>Envie de collaborer avec nous et de faire partie de l'aventure Tiny & Pretty.<br>
                        Vous avez un atelier ? Vous aimeriez devenir partenaire ?
                    </p>
                    <button class=\"btn-blog join mx-auto\"><span>Rejoignez-nous !</span></button>

                </div>
            </div>
            <!--
            <div class=\"col-4\">
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lisa.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"\"
                     alt=\"atelier couture enfant lisa partenaire \"/>
                <div class=\"title_atelier text-center mt-5\">
                    <h4>LISA ET LES PELOTES DE LAINE</h4>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    Il est conçu et fabriqué à Barcelone, et est
                    réputé pour sa qualité et le savoir-faire de nombreux
                    années d'expérience. Cóndor est authentique, responsable et
                    fiable. Des designs exclusifs, des lignes simples, avec
                    personnage présenté dans un kaléidoscope de couleurs.
                    Tailles disponibles pour les nouveau-nés jusqu'à 14 ans.

                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"coming_soon_box\">
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/calcetines.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"\"
                         alt=\"atelier couture enfant calcetines partenaire \"/>
                    <div class=\"coming_soon_text\">
                        <div class=\"text_soon\">
                            <h2>COMING SOON</h2>

                        </div>
                    </div>
                </div>


                <div class=\"title_atelier text-center mt-5\">
                    <h4>LOS CALCETINES</h4>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    It is designed and manufactured in Barcelona, and is
                    renowned for its quality and know-how from many
                    years’ experience. Cóndor is genuine, responsible and
                    trustworthy. Exclusive designs, simple lines, with
                    character presented in a kaleidoscope of colours.
                    Available sizes for newborns up to 14-year-olds
                </div>
            </div>
            -->
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ateliers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 81,  157 => 64,  129 => 39,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos ateliers{% endblock %}

{% block content %}
    <div class=\"col-12 text-center pt-5\">
        <h1 class=\"title\">
            NOS ATELIERS
        </h1>
        <div class=\"col-10 text-left pt-5 pb-5\">
            <div class=\"presentation\">
                Tiny & Pretty c’est avant tout une grande famille, qui place l’humain au centre de ses choix. Chaque
                jour, nous nous remuons les méninges pour vous proposer de jolies pièces fabriquées artisanalement et
                signées Tiny & Pretty. Il nous tient donc à cœur de partager avec vous les histoires de celles et ceux
                qui, avec leurs doigts de fées, confectionnent nos produits.
            </div>
        </div>
    </div>
    <div class=\"container-fluid text-center pb-5 ml-5\">
        <div class=\"row\">
            <div class=\"col-6\"><a href=\"{{ path('atelier_debora') }}\">
                    <img src=\"{{ asset('assets/img/debora.webp') }}\" class=\"img_atelier\"
                         alt=\"atelier couture enfant debora partenaire\"/>
                    <div class=\"title_atelier text-center mt-5\">
                        <h3>L’ATELIER DE DÉBORA</h3>
                    </div>
                    <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                        <p>C’est au fil de plusieurs recherches que T&P a su trouver les mains de fée qui l’aideront à
                            grandir. Notre projet est devenu commun, comme si d’une rencontre professionnelle, nous
                            devenions une famille, passionnée et animée par la même volonté de mieux faire.

                        </p>

                    </div>
                </a>
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
                    <h3>VOTRE ATELIER</h3>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    <p>Envie de collaborer avec nous et de faire partie de l'aventure Tiny & Pretty.<br>
                        Vous avez un atelier ? Vous aimeriez devenir partenaire ?
                    </p>
                    <button class=\"btn-blog join mx-auto\"><span>Rejoignez-nous !</span></button>

                </div>
            </div>
            <!--
            <div class=\"col-4\">
                <img src=\"{{ asset('assets/img/lisa.webp') }}\" style=\"width:80%\" class=\"\"
                     alt=\"atelier couture enfant lisa partenaire \"/>
                <div class=\"title_atelier text-center mt-5\">
                    <h4>LISA ET LES PELOTES DE LAINE</h4>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    Il est conçu et fabriqué à Barcelone, et est
                    réputé pour sa qualité et le savoir-faire de nombreux
                    années d'expérience. Cóndor est authentique, responsable et
                    fiable. Des designs exclusifs, des lignes simples, avec
                    personnage présenté dans un kaléidoscope de couleurs.
                    Tailles disponibles pour les nouveau-nés jusqu'à 14 ans.

                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"coming_soon_box\">
                    <img src=\"{{ asset('assets/img/calcetines.webp') }}\" style=\"width:80%\" class=\"\"
                         alt=\"atelier couture enfant calcetines partenaire \"/>
                    <div class=\"coming_soon_text\">
                        <div class=\"text_soon\">
                            <h2>COMING SOON</h2>

                        </div>
                    </div>
                </div>


                <div class=\"title_atelier text-center mt-5\">
                    <h4>LOS CALCETINES</h4>
                </div>
                <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                    It is designed and manufactured in Barcelona, and is
                    renowned for its quality and know-how from many
                    years’ experience. Cóndor is genuine, responsible and
                    trustworthy. Exclusive designs, simple lines, with
                    character presented in a kaleidoscope of colours.
                    Available sizes for newborns up to 14-year-olds
                </div>
            </div>
            -->
        </div>
    </div>



{% endblock %}
", "ateliers/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/ateliers/index.html.twig");
    }
}
