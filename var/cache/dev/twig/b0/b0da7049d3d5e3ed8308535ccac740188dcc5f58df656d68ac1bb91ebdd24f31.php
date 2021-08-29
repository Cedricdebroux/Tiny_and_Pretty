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

/* product/show.html.twig */
class __TwigTemplate_90c28ef1c5e5e8ccd9ae26df82410f9876135038888258bfbaef0e71fa8fa9a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"row\">
        <div class=\"container-fluid col-md-4 ml-5 mb-5 ml-sm-0\">
            <img src=\"/uploads/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"img-fluid zoomimg mt-5 ml-5\">
        </div>
        <div class=\"col-md-7 my-auto aside-description mt-sm-5 mx-sm-auto\">
            <p> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "subtitle", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <h3>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
            <span class=\"product-page-price\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13) / 100), 2, ",", "."), "html", null, true);
        echo " € </span>
            <p class=\"'taxes\">Taxes incluses</p>
            <p>
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "
            </p>
            <hr class=\"mx-auto col-md-10 col-lg-10 col-xl-10 pl-0 ml-0\">



            ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "soldout", [], "any", false, false, false, 22) == false)) {
            // line 23
            echo "                <button
                        class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                        type=\"button\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" style=\"color:#000005;\">AJOUTER AU PANIER</a>
                </button>
            ";
        } else {
            // line 29
            echo "                <button class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\" style=\"background-color:#f0cabd;\">VICTIME DE SON SUCCÈS</button>
            ";
        }
        // line 31
        echo "            <div id=\"accordion\">
                            <button
                                    class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                                    type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#collapseOne\"
                                    aria-expanded=\"false\"
                                    aria-controls=\"collapseOne\"
                                    style=\"color:#000005;\">
                                GUIDE DES TAILLES
                            </button>
                    <div id=\"collapseOne\" class=\"collapse\">
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">BÉBÉ</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Poids</th>
                            </tr>
                            </thead>
                            <tr>
                                <th scope=\"row\">3 MOIS</th>
                                <td>56-60 cm</td>
                                <td>4-5 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 MOIS</th>
                                <td>60-68 cm</td>
                                <td>5-6 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">9 MOIS</th>
                                <td>68-74 cm</td>
                                <td>7-8 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">12 MOIS</th>
                                <td>74 cm</td>
                                <td>9-10 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">18 MOIS</th>
                                <td>80 cm</td>
                                <td>10-11 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">24 MOIS</th>
                                <td>86 cm</td>
                                <td>11-12 kg</td>
                            </tr>
                        </table>
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">ENFANT</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Tour de poitrine</th>
                                <th scope=\"col\">Tour de taille</th>
                                <th scope=\"col\">Tour de hanche</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope=\"row\">3 ANS</th>
                                <td>98 cm</td>
                                <td>57 cm</td>
                                <td>53 cm</td>
                                <td>59 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">4 ANS</th>
                                <td>104 cm</td>
                                <td>58 cm</td>
                                <td>54 cm</td>
                                <td>61 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">5 ANS</th>
                                <td>110 cm</td>
                                <td>59 cm</td>
                                <td>54,5 cm</td>
                                <td>62,5 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 ANS</th>
                                <td>116 cm</td>
                                <td>60 cm</td>
                                <td>55 cm</td>
                                <td>64 cm</td>
                            </tr>
                            </tbody>
                        </table>

            </div>
         </div>
        </div>
    </div>

    <div class=\"container-fluid  bestsellers\">
        <h3 class=\"separator text-center\">BESTSELLERS</h3>
    </div>

    <div class=\"container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
        <div class=\"row\">
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 135, $this->source); })()));
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
            // line 136
            echo "                <div class=\"col\">
                    ";
            // line 137
            $this->loadTemplate("product/single_product.html.twig", "product/show.html.twig", 137)->display($context);
            // line 138
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
        // line 140
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 140,  268 => 138,  266 => 137,  263 => 136,  246 => 135,  140 => 31,  136 => 29,  130 => 26,  125 => 23,  123 => 22,  114 => 16,  108 => 13,  104 => 12,  100 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }}{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"container-fluid col-md-4 ml-5 mb-5 ml-sm-0\">
            <img src=\"/uploads/{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-fluid zoomimg mt-5 ml-5\">
        </div>
        <div class=\"col-md-7 my-auto aside-description mt-sm-5 mx-sm-auto\">
            <p> {{ product.subtitle }}</p>
            <h3>{{  product.name }}</h3>
            <span class=\"product-page-price\"> {{ (product.price / 100)|number_format(2,',', '.') }} € </span>
            <p class=\"'taxes\">Taxes incluses</p>
            <p>
                {{ product.description }}
            </p>
            <hr class=\"mx-auto col-md-10 col-lg-10 col-xl-10 pl-0 ml-0\">



            {% if product.soldout == false %}
                <button
                        class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                        type=\"button\">
                    <a href=\"{{ path('add_to_cart', {'id': product.id}) }}\" style=\"color:#000005;\">AJOUTER AU PANIER</a>
                </button>
            {% else %}
                <button class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\" style=\"background-color:#f0cabd;\">VICTIME DE SON SUCCÈS</button>
            {% endif %}
            <div id=\"accordion\">
                            <button
                                    class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                                    type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#collapseOne\"
                                    aria-expanded=\"false\"
                                    aria-controls=\"collapseOne\"
                                    style=\"color:#000005;\">
                                GUIDE DES TAILLES
                            </button>
                    <div id=\"collapseOne\" class=\"collapse\">
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">BÉBÉ</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Poids</th>
                            </tr>
                            </thead>
                            <tr>
                                <th scope=\"row\">3 MOIS</th>
                                <td>56-60 cm</td>
                                <td>4-5 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 MOIS</th>
                                <td>60-68 cm</td>
                                <td>5-6 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">9 MOIS</th>
                                <td>68-74 cm</td>
                                <td>7-8 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">12 MOIS</th>
                                <td>74 cm</td>
                                <td>9-10 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">18 MOIS</th>
                                <td>80 cm</td>
                                <td>10-11 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">24 MOIS</th>
                                <td>86 cm</td>
                                <td>11-12 kg</td>
                            </tr>
                        </table>
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">ENFANT</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Tour de poitrine</th>
                                <th scope=\"col\">Tour de taille</th>
                                <th scope=\"col\">Tour de hanche</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope=\"row\">3 ANS</th>
                                <td>98 cm</td>
                                <td>57 cm</td>
                                <td>53 cm</td>
                                <td>59 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">4 ANS</th>
                                <td>104 cm</td>
                                <td>58 cm</td>
                                <td>54 cm</td>
                                <td>61 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">5 ANS</th>
                                <td>110 cm</td>
                                <td>59 cm</td>
                                <td>54,5 cm</td>
                                <td>62,5 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 ANS</th>
                                <td>116 cm</td>
                                <td>60 cm</td>
                                <td>55 cm</td>
                                <td>64 cm</td>
                            </tr>
                            </tbody>
                        </table>

            </div>
         </div>
        </div>
    </div>

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

{% endblock %}
", "product/show.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/show.html.twig");
    }
}
