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

/* home/index.html.twig */
class __TwigTemplate_f5852f069c081b340721f9afebed86d1d31eab8f8d150e0b0659131b50079e02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    <!-- banner -->
    <div class=\"container-fluid col-12\">
        <div class=\"row align-items-center\">
            <div class=\"bg-image-banner\">
                <div class=\"container-fluid align-items-center justify-content-center text-center\">
                    <div class=\"text-white\">
                        <h1 class=\"slogan\">HAPPY CLOTHING,<br> HAPPY CHILDHOOD</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories -->
    <div class=\"container-fluid text-center category\">
        <div class=\"row\">
            <div class=\" mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a>
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/VETEMENTS.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">VÊTEMENTS</h4>
                    </div>
                </div>
            </div>
            <div class=\"mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a>
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ACCESSOIRES.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">ACCESSOIRES</h4>
                    </div>
                </div>

            </div>
            <div class=\" mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a>
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/JOUETS.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">JOUETS</h4>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- BESTSELLERS -->
    <div class=\"container-fluid  bestsellers\">
        <h3 class=\"separator text-center\">BESTSELLERS</h3>
    </div>

    <div class=\"container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
        <div class=\"row\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "                <div class=\"col\">
                    ";
            // line 67
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 67)->display($context);
            // line 68
            echo "                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>
    </div>
    <!--deuxième vie -->


    <div class=\"bg-image-deuxieme\">
        <div class=\"container-fluid box\">
            <div class=\"boxtext\">
                <h6><span>SHOP, SELL & RECYCLE</span></h6>
                <h5><span>DEUXIÈME VIE</span></h5>
                <p><span>Achetez des articles d'occasion vendus à des parents comme vous. En rachetant ces articles, nous pouvons
                            vous garantir la qualité en termes de marques et de style que vous aurez l'habitude de trouver chez
                            Tiny&Pretty.
                        </span></p>
                <a><button type=\"button\" class=\" profite\">J'EN PROFITE</button></a>
            </div>

        </div>
    </div>


    <!-- Nouveautes -->
    <div class=\"container\">
        <h3 class=\"separator text-center\">NOUVEAUTÉS</h3>
    </div>

    <div class=\"container-fluid container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
    <div class=\"row\">
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productN"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 99
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "isNew", [], "any", false, false, false, 99) == true)) {
                // line 100
                echo "        <div class=\"col\">
            ";
                // line 101
                $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 101)->display($context);
                // line 102
                echo "        </div>
        ";
            }
            // line 104
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "    </div>
    </div>


  <!-- LE BLOG-->
    <hr class=\"blog-divider\">
    <div class=\"container blog\">
        <h3 class=\"separator text-center\">THE TINY & PRETTY BLOG</h3>
        <div class=\"button-blog text-center\">
            <a>
                <button type=\"button\" class=\"btn-blog\">TOUT VOIR</button>
            </a>
        </div>
    </div>
    <div class=\"container-fluid text-center imgblog\">
        <div class=\"row\">
            <div class=\"col-4\">
                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cremesolaire.webp"), "html", null, true);
        echo "\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Crème solaire : laquelle choisir ?</span></p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/coupdesoleil.webp"), "html", null, true);
        echo "\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Les 8 règles d’or pour exposer bébé au soleil.</span></p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/moustique.webp"), "html", null, true);
        echo "\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Protéger bébé des moustiques : tout ce qu’il faut savoir !</span></p>
                </div>
            </div>
        </div>
    </div>
    <!--#TINYANDPRETTY-->
    <hr class=\"share-divider\">
    <div class=\"container-fluid text-center share\">
    <div class=\"col-12\">
        <h3 class=\"separator text-center\">#TINYANDPRETTY</h3>
        <h5 class=\"text-share\">Partagez avec nous leurs styles uniques !</h5>
        <div class=\"reseau\">
      <a><i class=\"fab fa-facebook-square\"></i></a>
        <a><i class=\"fab fa-instagram\"></i></a>
            <a><i class=\"fab fa-twitter-square\"></i></a>
                <a><i class=\"fab fa-pinterest-square\"></i></a>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 140,  263 => 131,  251 => 122,  232 => 105,  218 => 104,  214 => 102,  212 => 101,  209 => 100,  206 => 99,  189 => 98,  159 => 70,  144 => 68,  142 => 67,  139 => 66,  122 => 65,  99 => 45,  85 => 34,  72 => 24,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/home/index.html.twig");
    }
}
