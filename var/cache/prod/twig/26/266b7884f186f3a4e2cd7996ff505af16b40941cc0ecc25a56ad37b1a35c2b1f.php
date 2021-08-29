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
class __TwigTemplate_53c119109ac0d160e10a3cb72711d659e0f5a69f36b342ae1ec81bab3e10d1b9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "atelier_debora/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "L'atelier de Débora";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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

                <p>Debora n’a pas rejoint la famille Tiny
                & Pretty non pas par hasard. Ses
                grandes qualités de couturière ainsi
                que sa personne, engagée, pétillante
                et énergique, on fait d’elle un élément
                indispensable à la création de notre
                toute première collection.


            </p>
        </div>

    </section>
    </div>
</div>

";
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
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "atelier_debora/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/atelier_debora/index.html.twig");
    }
}
