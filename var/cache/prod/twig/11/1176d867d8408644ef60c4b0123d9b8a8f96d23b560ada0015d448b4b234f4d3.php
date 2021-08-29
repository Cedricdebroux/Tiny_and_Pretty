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
class __TwigTemplate_d10d1606d2959cc8ed91d164c93a1734a262b819e63543e19ea747e124241aa4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ateliers/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos ateliers";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"col-12 text-center pt-5\">
        <h1 class=\"title\">
            NOS ATELIERS
        </h1>
        <div class=\"col-10 text-left pt-5 pb-5\">
            <div class=\"presentation\">
                Tiny and Pretty ce n’est pas seulement de petites âmes sympathiques qui agitent leurs méninges pour vous
                dégoter
                de belles choses. C’est aussi et surtout une grande famille unie, qui place l’humain au centre de ses
                choix. Il nous
                tient donc à cœur de partager avec vous ce pretty world qui nous entoure ainsi que celles et ceux qui y
                contribuent
            </div>
        </div>
    </div>
    <div class=\"container-fluid text-center pb-5 ml-5\">
        <div class=\"row\">
            <div class=\"col-6\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("atelier_debora");
        echo "\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/debora.webp"), "html", null, true);
        echo "\"  class=\"img_atelier\"
                         alt=\"atelier couture enfant debora partenaire\"/>
                    <div class=\"title_atelier text-center mt-5\">
                        <h3>L’ATELIER DE DÉBORA</h3>
                    </div>
                    <div class=\"description_atelier text-left mt-5 ml-5 mr-5\">
                        <p>Débora n’a pas rejoint la famille Tiny & Pretty par hasard. Ses grandes qualités de couturière
                        ainsi que sa personne, engagée, pétillante et énergique on fait d’elle l’élément indispensable à
                            la création de notre toute première collection.</p>

                    </div>
                </a>
            </div>
            <div class=\"col-6\">
                <div class=\"coming_soon_box\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/calcetines.webp"), "html", null, true);
        echo "\"  class=\"img_atelier\"
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
        return array (  147 => 81,  127 => 64,  99 => 39,  81 => 24,  77 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ateliers/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/ateliers/index.html.twig");
    }
}
