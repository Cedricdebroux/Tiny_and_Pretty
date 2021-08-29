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

/* account/order_show.html.twig */
class __TwigTemplate_3efe1cd76a8b75a48ef1bf2ddd261c20c04e198de685884ffce9bef184b14696 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo "Ma commande";
        
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
        echo "    <h1>Ma commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo " </h1>

    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Retour</a>
    <hr>

    <div class=\"container d-flex justify-content-evenly w-100\">
        <div class=\"col-6\">

            <strong> Statut de la commande : </strong>

                ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "state", [], "any", false, false, false, 16) == 1)) {
            // line 17
            echo "                    Paiement accepté
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "state", [], "any", false, false, false, 18) == 2)) {
            // line 19
            echo "                    Préparation en cours
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "state", [], "any", false, false, false, 20) == 3)) {
            // line 21
            echo "                    Livraison en cours
                    ";
        } else {
            // line 23
            echo "                    Non payée
                ";
        }
        // line 25
        echo "            <br/>

            <strong>Commande passée le : </strong>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "createdAt", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
        echo "<br/>
            <strong>Référence de ma commande:</strong> <small>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "reference", [], "any", false, false, false, 28), "html", null, true);
        echo "</small><br/>
            <strong>Transporteur choisi :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "carrierName", [], "any", false, false, false, 29), "html", null, true);
        echo "
        </div>
        <div class=\"col-6\">
            <a class=\"col-6\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("return", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "reference", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"> Retourner un produit </a>
        </div>
    </div>
    <hr>

    <strong>Details: </strong> <br/>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "orderDetails", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "        <tr>

            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            <td> x ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54) / 100), 2, ".", ","), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 55) / 100), 2, ".", ","), "html", null, true);
            echo "</td>
            <td><div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                </div>
            </td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total:</strong>";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "getTotal", [], "any", false, false, false, 68) / 100), 2, ".", ","), "html", null, true);
        echo "<br/>
        <strong>Livraison:</strong> ";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "carrierPrice", [], "any", false, false, false, 69) / 100), 2, ".", ","), "html", null, true);
        echo "<br/>
        <strong>Total:</strong>";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "carrierPrice", [], "any", false, false, false, 70) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "getTotal", [], "any", false, false, false, 70)) / 100), 2, ".", ","), "html", null, true);
        echo " €
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 70,  208 => 69,  204 => 68,  197 => 63,  183 => 55,  179 => 54,  175 => 53,  171 => 52,  167 => 50,  163 => 49,  143 => 32,  137 => 29,  133 => 28,  129 => 27,  125 => 25,  121 => 23,  117 => 21,  115 => 20,  112 => 19,  110 => 18,  107 => 17,  105 => 16,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande{% endblock %}

{% block content %}
    <h1>Ma commande {{ order.reference }} </h1>

    <a href=\"{{ path('account_order') }}\">Retour</a>
    <hr>

    <div class=\"container d-flex justify-content-evenly w-100\">
        <div class=\"col-6\">

            <strong> Statut de la commande : </strong>

                {% if order.state == 1 %}
                    Paiement accepté
                {% elseif order.state == 2 %}
                    Préparation en cours
                {% elseif order.state == 3 %}
                    Livraison en cours
                    {% else %}
                    Non payée
                {% endif %}
            <br/>

            <strong>Commande passée le : </strong>{{ order.createdAt|date('d/m/Y') }}<br/>
            <strong>Référence de ma commande:</strong> <small>{{ order.reference }}</small><br/>
            <strong>Transporteur choisi :</strong> {{ order.carrierName }}
        </div>
        <div class=\"col-6\">
            <a class=\"col-6\" href=\"{{ path('return', {'reference' : order.reference}) }}\"> Retourner un produit </a>
        </div>
    </div>
    <hr>

    <strong>Details: </strong> <br/>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        {% for product in order.orderDetails %}
        <tr>

            <td>{{ product.product }}</td>
            <td> x {{ product.quantity }}</td>
            <td>{{ (product.price / 100)|number_format(2, '.', ',')  }}</td>
            <td>{{ (product.total / 100)|number_format(2, '.', ',')  }}</td>
            <td><div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                </div>
            </td>

        </tr>
        {% endfor %}

        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total:</strong>{{ (order.getTotal / 100)|number_format(2, '.', ',')  }}<br/>
        <strong>Livraison:</strong> {{ (order.carrierPrice /100)|number_format(2, '.', ',')  }}<br/>
        <strong>Total:</strong>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, '.', ',') }} €
    </div>



{% endblock %}
", "account/order_show.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/account/order_show.html.twig");
    }
}
