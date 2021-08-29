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

/* atelier_debora/index.html.twig */
class __TwigTemplate_8374d42840b879ba5b83aa27f0f528ca88faff2d02efc12c786ceca86a9ff1c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier_debora/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier_debora/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier_debora/index.html.twig", 1);
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

        echo "L'atelier de Débora";
        
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
    <div class=\"container-fluid col-12\">
        <div class=\"row align-items-center\">
            <div class=\"banner-debora\">
                <div class=\"container-fluid align-items-center justify-content-center text-center\">
                    <div class=\"text-white\">
                        <h1 class=\"slogan-debora\">L'ATELIER DE DÉBORA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class=\"container-fluid\">
    <div class=\"row justify-content-between ml-2 my-5\">
    <aside class=\"col-lg-3 col-sm-12 col-md-3 \">
        <div class=\"video\">
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ssnrzl4PHUE?loop=1&playlist=Ssnrzl4PHUE\" title=\"YouTube video player\"
                    frameborder=\"0\"
                    allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                    allowfullscreen>

            </iframe>


        </div>
    </aside>
    <section class=\"col-lg-6 col-sm-12 col-md-9\">
        <div class=\"debora-story\">
            <p>C’est au fil de plusieurs recherches
                que T&P a su trouver les mains de fée
                qui l’aideront à grandir. Un projet
                devenu commun, comme si d’une
                rencontre professionnelle, nous
                devenions une famille, passionnée et
                convaincue par ce projet.</p>

            <p>
                Débora n’a pas rejoint la famille Tiny & Pretty par hasard. Ses grandes qualités de
                couturière ainsi que sa personne, engagée, pétillante et énergique on fait d’elle l’élément
                indispensable à la création de notre toute première collection.
            </p>
            <p>
                Piquée par la couture à l’âge de 6 ans, Débora a grandi aux côtés de sa grand-mère,
                tailleuse de profession. Les années passent, les mètres de tissues défilent et la passion de
                Débora devient alors une véritable vocation. Elle décide alors de réaliser ses études au
                Saint-Sépulcre où elle obtient les louanges de ses professeurs.


            </p>
            <p>
                A 27 ans, elle ouvre son premier commerce à Bomal. Elle y rencontre d’ailleurs l’amour de sa
                vie, son partenaire et associé Lupercio, avec qui elle vend ses vêtements pour enfants sur
                les marchés. En 2018, Ils décident de s’installer au Brésil, pays natal de Lupercio. Débora,
                inspirée par les courbes et couleurs des paysages brésiliens, ne cesse de créer. Peu après,
                en raison de la pandémie, ils reviennent en Belgique et s’installent au milieu de la
                verdure, dans les Ardennes belges. Ils y ouvrent une boutique de tissus provenant
                principalement des pays limitrophes et dont la plupart sont labélisés BIO et OEKO-TEX.
            </p>
            <p>
                L’histoire se créée et, des étoiles pleins les yeux, nous travaillons à offrir mieux à nos
                enfants, à être de véritables exemples et à leur transmettre ces valeurs essentielles à leur
                développement et à celui du monde qui les entoure.
            </p>

        </div>

    </section>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "atelier_debora/index.html.twig";
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

{% block title %}L'atelier de Débora{% endblock %}

{% block content %}

    <div class=\"container-fluid col-12\">
        <div class=\"row align-items-center\">
            <div class=\"banner-debora\">
                <div class=\"container-fluid align-items-center justify-content-center text-center\">
                    <div class=\"text-white\">
                        <h1 class=\"slogan-debora\">L'ATELIER DE DÉBORA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class=\"container-fluid\">
    <div class=\"row justify-content-between ml-2 my-5\">
    <aside class=\"col-lg-3 col-sm-12 col-md-3 \">
        <div class=\"video\">
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ssnrzl4PHUE?loop=1&playlist=Ssnrzl4PHUE\" title=\"YouTube video player\"
                    frameborder=\"0\"
                    allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                    allowfullscreen>

            </iframe>


        </div>
    </aside>
    <section class=\"col-lg-6 col-sm-12 col-md-9\">
        <div class=\"debora-story\">
            <p>C’est au fil de plusieurs recherches
                que T&P a su trouver les mains de fée
                qui l’aideront à grandir. Un projet
                devenu commun, comme si d’une
                rencontre professionnelle, nous
                devenions une famille, passionnée et
                convaincue par ce projet.</p>

            <p>
                Débora n’a pas rejoint la famille Tiny & Pretty par hasard. Ses grandes qualités de
                couturière ainsi que sa personne, engagée, pétillante et énergique on fait d’elle l’élément
                indispensable à la création de notre toute première collection.
            </p>
            <p>
                Piquée par la couture à l’âge de 6 ans, Débora a grandi aux côtés de sa grand-mère,
                tailleuse de profession. Les années passent, les mètres de tissues défilent et la passion de
                Débora devient alors une véritable vocation. Elle décide alors de réaliser ses études au
                Saint-Sépulcre où elle obtient les louanges de ses professeurs.


            </p>
            <p>
                A 27 ans, elle ouvre son premier commerce à Bomal. Elle y rencontre d’ailleurs l’amour de sa
                vie, son partenaire et associé Lupercio, avec qui elle vend ses vêtements pour enfants sur
                les marchés. En 2018, Ils décident de s’installer au Brésil, pays natal de Lupercio. Débora,
                inspirée par les courbes et couleurs des paysages brésiliens, ne cesse de créer. Peu après,
                en raison de la pandémie, ils reviennent en Belgique et s’installent au milieu de la
                verdure, dans les Ardennes belges. Ils y ouvrent une boutique de tissus provenant
                principalement des pays limitrophes et dont la plupart sont labélisés BIO et OEKO-TEX.
            </p>
            <p>
                L’histoire se créée et, des étoiles pleins les yeux, nous travaillons à offrir mieux à nos
                enfants, à être de véritables exemples et à leur transmettre ces valeurs essentielles à leur
                développement et à celui du monde qui les entoure.
            </p>

        </div>

    </section>
    </div>
</div>

{% endblock %}
", "atelier_debora/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/atelier_debora/index.html.twig");
    }
}
