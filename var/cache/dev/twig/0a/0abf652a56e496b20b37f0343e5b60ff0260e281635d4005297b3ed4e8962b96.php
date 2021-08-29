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
class __TwigTemplate_0f29c23e94888450787eeef520537f291256f0f6792e73b28a6ab0cdfdb911b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/VETEMENTS.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">A LA MODE</h4>
                    </div>
                </div>
            </div>
            <div class=\"mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ACCESSOIRES.webp"), "html", null, true);
        echo "\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">A LA MAISON</h4>
                    </div>
                </div>

            </div>
            <div class=\" mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/toy"), "html", null, true);
        echo "\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 65, $this->source); })()));
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
    <!--deuxième vie-->


    <div class=\"bg-image-deuxieme\">
        <div class=\"container-fluid <!--box-->\">
            <!--
            <div class=\"boxtext\">
                <h6><span>SHOP, SELL & RECYCLE</span></h6>
                <h5><span>DEUXIÈME VIE</span></h5>
                <p><span>Achetez des articles d'occasion vendus à des parents comme vous. En rachetant ces articles, nous pouvons
                            vous garantir la qualité en termes de marques et de style que vous aurez l'habitude de trouver chez
                            Tiny&Pretty.
                        </span></p>
                <a><button type=\"button\" class=\" profite\">J'EN PROFITE</button></a>
            </div>
            -->

        </div>

    </div>



    <!-- Nouveautes -->
    <div class=\"container\">
        <h3 class=\"separator text-center\">NOUVEAUTÉS</h3>
    </div>

    <div class=\"container-fluid container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
    <div class=\"row\">
        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productN"]) || array_key_exists("productN", $context) ? $context["productN"] : (function () { throw new RuntimeError('Variable "productN" does not exist.', 102, $this->source); })()));
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
            // line 103
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "isNew", [], "any", false, false, false, 103) == true)) {
                // line 104
                echo "        <div class=\"col\">
            ";
                // line 105
                $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 105)->display($context);
                // line 106
                echo "        </div>
        ";
            }
            // line 108
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
        // line 109
        echo "    </div>
    </div>


  <!-- LE BLOG
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
        // line 126
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
        // line 135
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
        // line 144
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
    -->
    <!--#TINYANDPRETTY-->
    <hr class=\"share-divider\">
    <div class=\"container-fluid text-center share\">
    <div class=\"col-12\">
        <h3 class=\"separator text-center\">#TINYANDPRETTY</h3>
        <h5 class=\"text-share\">Partagez avec nous leurs styles uniques !</h5>
        <div class=\"reseau justify-between\">
            <a class=\"logoreseau\" href=\"https://www.facebook.com/TinyandPretty.be\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
            <a class=\"logoreseau\" href=\"https://www.instagram.com/tinyandpretty.be\" target=\"_blank\"> <i class=\"fab fa-instagram\"></i></a>
                <a class=\"logoreseau\"><i class=\"fab fa-pinterest-square\"></i></a>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  306 => 144,  294 => 135,  282 => 126,  263 => 109,  249 => 108,  245 => 106,  243 => 105,  240 => 104,  237 => 103,  220 => 102,  186 => 70,  171 => 68,  169 => 67,  166 => 66,  149 => 65,  126 => 45,  122 => 44,  109 => 34,  105 => 33,  93 => 24,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}


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
                <a href=\"{{ relative_path('/Mode') }}\">
                    <img src=\"{{ asset('assets/img/VETEMENTS.webp') }}\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">A LA MODE</h4>
                    </div>
                </div>
            </div>
            <div class=\"mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a href=\"{{ relative_path('/maison') }}\">
                    <img src=\"{{ asset('assets/img/ACCESSOIRES.webp') }}\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
                </a>
                <div class=\"text-white\">
                    <div class=\"filter\">
                        <h4 class=\"description\">A LA MAISON</h4>
                    </div>
                </div>

            </div>
            <div class=\" mt-5 col-xl-4 col-lg-4 col-sm-12 col-md-6\">
                <a href=\"{{ relative_path('/toy') }}\">
                    <img src=\"{{ asset('assets/img/JOUETS.webp') }}\" style=\"width:80%\" class=\"Pict\" alt=\"\"/>
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
            {% for product in products %}
                <div class=\"col\">
                    {% include 'product/single_product.html.twig' %}
                </div>
            {% endfor %}
        </div>
    </div>
    <!--deuxième vie-->


    <div class=\"bg-image-deuxieme\">
        <div class=\"container-fluid <!--box-->\">
            <!--
            <div class=\"boxtext\">
                <h6><span>SHOP, SELL & RECYCLE</span></h6>
                <h5><span>DEUXIÈME VIE</span></h5>
                <p><span>Achetez des articles d'occasion vendus à des parents comme vous. En rachetant ces articles, nous pouvons
                            vous garantir la qualité en termes de marques et de style que vous aurez l'habitude de trouver chez
                            Tiny&Pretty.
                        </span></p>
                <a><button type=\"button\" class=\" profite\">J'EN PROFITE</button></a>
            </div>
            -->

        </div>

    </div>



    <!-- Nouveautes -->
    <div class=\"container\">
        <h3 class=\"separator text-center\">NOUVEAUTÉS</h3>
    </div>

    <div class=\"container-fluid container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
    <div class=\"row\">
        {% for product in productN %}
        {% if product.isNew == true %}
        <div class=\"col\">
            {% include 'product/single_product.html.twig' %}
        </div>
        {% endif %}
        {% endfor %}
    </div>
    </div>


  <!-- LE BLOG
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
                <img src=\"{{ asset('assets/img/cremesolaire.webp') }}\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Crème solaire : laquelle choisir ?</span></p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"{{ asset('assets/img/coupdesoleil.webp') }}\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Les 8 règles d’or pour exposer bébé au soleil.</span></p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"{{ asset('assets/img/moustique.webp') }}\" style=\"width:90%\" class=\"\" alt=\"\"/>
                <div class=\"category-blog\">
                    <p><span>Lifestyle · Santé ·</span></p>
                </div>
                <div class=\"title-blog\">
                    <p><span>Protéger bébé des moustiques : tout ce qu’il faut savoir !</span></p>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--#TINYANDPRETTY-->
    <hr class=\"share-divider\">
    <div class=\"container-fluid text-center share\">
    <div class=\"col-12\">
        <h3 class=\"separator text-center\">#TINYANDPRETTY</h3>
        <h5 class=\"text-share\">Partagez avec nous leurs styles uniques !</h5>
        <div class=\"reseau justify-between\">
            <a class=\"logoreseau\" href=\"https://www.facebook.com/TinyandPretty.be\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
            <a class=\"logoreseau\" href=\"https://www.instagram.com/tinyandpretty.be\" target=\"_blank\"> <i class=\"fab fa-instagram\"></i></a>
                <a class=\"logoreseau\"><i class=\"fab fa-pinterest-square\"></i></a>
        </div>
    </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/home/index.html.twig");
    }
}
