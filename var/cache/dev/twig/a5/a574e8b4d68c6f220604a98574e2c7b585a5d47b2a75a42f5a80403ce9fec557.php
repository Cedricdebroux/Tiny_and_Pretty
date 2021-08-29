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

/* cart/index.html.twig */
class __TwigTemplate_571f23fd0a340aa898e9f228c87c531d1e3d9693f90fd3216d8f552b0222579c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier ";
        
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
        echo "        <div class=\"container-fluid text-center\">
    <div class=\"title_cart\">
    <h1>PANIER</h1>
    <p >Contenu de mon panier.</p>
    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "        </div>


    <table class=\"table col-md-8 mt-3 ml-5 col-sm-12\">
        <thead>
        <tr>

            <th scope=\"col\">Produit</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 27
            $context["total"] = null;
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "        <tr>
            <th>
                <img src=\"/uploads/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "\" height=\"5%\"><br/>

            </th>
            <td>
                ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " <br/>
               <small> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "subtitle", [], "any", false, false, false, 36), "html", null, true);
                echo "</small>
            </td>
            <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer mon produit\">
                </a>
                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41), "html", null, true);
                echo "
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
                <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/add.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter mon produit\">
                </a>
            </td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
            <td>
                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
                </a>
            </td>
        </tr>
            ";
                // line 54
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
    </table>
        <hr>
    <div class=\" validation text-center d-flex flex-column mb-5 pb-5\">
      <div class=\"p-2\" ><b>nombre de produits</b> ";
            // line 60
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 60, $this->source); })())), "html", null, true);
            echo " <br/></div>
        <div class=\"p-2\" > <b>total de mon panier</b> ";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €</div>
        <div class=\"p-2\" > <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Valider mon panier</a></div>
        <div class=\"p-2\" > <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Continuer mes achats</a></div>
    </div>
    ";
        } else {
            // line 66
            echo "    <hr>
    <p class=\"empty\">Votre panier est vide</p>
    ";
        }
        // line 69
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 69,  218 => 66,  212 => 63,  208 => 62,  204 => 61,  200 => 60,  194 => 56,  188 => 55,  186 => 54,  179 => 50,  175 => 49,  170 => 47,  166 => 46,  160 => 43,  156 => 42,  152 => 41,  147 => 39,  143 => 38,  138 => 36,  134 => 35,  125 => 31,  121 => 29,  116 => 28,  114 => 27,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier {% endblock %}

{% block content %}
        <div class=\"container-fluid text-center\">
    <div class=\"title_cart\">
    <h1>PANIER</h1>
    <p >Contenu de mon panier.</p>
    {% if cart|length > 0 %}
        </div>


    <table class=\"table col-md-8 mt-3 ml-5 col-sm-12\">
        <thead>
        <tr>

            <th scope=\"col\">Produit</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        {% set total = null %}
        {% for product in cart %}
        <tr>
            <th>
                <img src=\"/uploads/{{ product.product.image }}\" alt=\"{{ product.product.name }}\" height=\"5%\"><br/>

            </th>
            <td>
                {{ product.product.name }} <br/>
               <small> {{ product.product.subtitle }}</small>
            </td>
            <td><a href=\"{{ path('decrease_to_cart', {id: product.product.id}) }}\">
                <img src=\"{{ asset('assets/img/minus.png') }}\" height=\"12px\" alt=\"Retirer mon produit\">
                </a>
                {{ product.quantity }}
                <a href=\"{{ path('add_to_cart', {id : product.product.id}) }}\">
                <img src=\"{{ asset('assets/img/add.png') }}\" height=\"12px\" alt=\"Ajouter mon produit\">
                </a>
            </td>
            <td>{{ (product.product.price / 100)|number_format(2,',', '.') }} €</td>
            <td>{{ ((product.product.price * product.quantity / 100)|number_format(2,',', '.')) }} €</td>
            <td>
                <a href=\"{{ path('delete_to_cart', { 'id' : product.product.id}) }}\">
                    <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\" alt=\"Supprimer mon produit\">
                </a>
            </td>
        </tr>
            {% set total = total +(product.product.price * product.quantity) %}
        {% endfor %}
        </tbody>
    </table>
        <hr>
    <div class=\" validation text-center d-flex flex-column mb-5 pb-5\">
      <div class=\"p-2\" ><b>nombre de produits</b> {{ cart|length }} <br/></div>
        <div class=\"p-2\" > <b>total de mon panier</b> {{ ((total / 100)|number_format(2,',', '.')) }} €</div>
        <div class=\"p-2\" > <a href=\"{{ path('order') }}\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Valider mon panier</a></div>
        <div class=\"p-2\" > <a href=\"{{ path('home') }}\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Continuer mes achats</a></div>
    </div>
    {% else %}
    <hr>
    <p class=\"empty\">Votre panier est vide</p>
    {% endif %}
        </div>
{% endblock %}
", "cart/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/cart/index.html.twig");
    }
}
