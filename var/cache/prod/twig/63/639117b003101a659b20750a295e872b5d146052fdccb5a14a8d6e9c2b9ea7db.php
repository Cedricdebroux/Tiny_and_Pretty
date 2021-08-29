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
class __TwigTemplate_b923b6cd64b4282c7b699b3747fa3f425b1a51d2d459942ed761afba21674ae2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "deuxieme_vie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Deuxième vie";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "
        <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <h1 class=\"title\">
                DEUXIÈME VIE
            </h1>
            <div class=\"col-10 text-left pt-5\">
            <div class=\"presentation\">
                <p>Chez Tiny & Pretty, chaque petites choses, chaque petits gestes comptent. C’est pourquoi il est impératif pour nous d’aller jusqu’au bout de notre projet en donnant une seconde vie à ces objets que nous avons chéris le temps d’une saison, ou de grandir tout simplement.</p>

              <p> Que faites-vous de ces bonnets tricotés déjà trop petits avant même qu'ils n'aient eu le temps de le porter ? De ces dizaines (centaines ??) de body tellement craquants qu’il était impensable de s’en passer ?</p>

              <p> Afin de consommer plus responsable, Tiny & Pretty a tenu à développer son propre service de seconde main, mais pas n’importe lequel ! Un service qui vous permet de vendre et d’acheter nos produits et ceux de nos partenaires directement sur notre site à un prix concurrentiel tout en assurant la qualité des articles.</p>
            </div>
            </div>

        </div>
    </div>
</div>

";
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
        return array (  76 => 12,  66 => 8,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "deuxieme_vie/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/deuxieme_vie/index.html.twig");
    }
}
