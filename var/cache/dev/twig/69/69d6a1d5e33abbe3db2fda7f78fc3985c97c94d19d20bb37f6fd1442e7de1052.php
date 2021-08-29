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

/* account/order.html.twig */
class __TwigTemplate_2264bebcc6c017b44798aa99af8b74281b433df07f8eb56f0d351ddf4df7901c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Mes commandes";
        
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 text-center\">
            <div class=\"title_order\">
    <h1>MES COMMANDES</h1>
            </div>
            <div class=\"text_order\">
   <p>C'est dans cet espace que vous allez pouvoir gérer vos commandes</p>
            </div>
   <button type=\"submit\" class=\"btn connect mt-3 pt-5\"  ><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" style=\"color:#FFFFFF;\">Retour</a></button>
    <hr>
    ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "orders", [], "any", false, false, false, 17)) == 0)) {
            // line 18
            echo "        <p class=\"text-center\">Vous n'avez pas encore d'adresse.</p>
        <a href=\"\">Ajouter une commande</a>
    ";
        } else {
            // line 21
            echo "        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Produits</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "orders", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 34
                echo "            <tr><td> <span class=\"badge badge-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 34), "html", null, true);
                echo "</span></td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "State", [], "any", false, false, false, 37) == 1)) {
                    // line 38
                    echo "                        Paiement accepté
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["order"], "State", [], "any", false, false, false, 39) == 2)) {
                    // line 40
                    echo "                        Préparation en cours
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["order"], "State", [], "any", false, false, false, 41) == 3)) {
                    // line 42
                    echo "                        Livraison en cours
                    ";
                }
                // line 44
                echo "                </td>

                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 46)), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 47) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 47)) / 100), 2, ".", ","), "html", null, true);
                echo " € </td>
                <td class=\"text-right\"><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"> Voir ma commande</a></td>

            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>



    ";
        }
        // line 58
        echo "        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 58,  177 => 52,  167 => 48,  163 => 47,  159 => 46,  155 => 44,  151 => 42,  149 => 41,  146 => 40,  144 => 39,  141 => 38,  139 => 37,  134 => 35,  129 => 34,  125 => 33,  111 => 21,  106 => 18,  104 => 17,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes{% endblock %}

{% block content %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 text-center\">
            <div class=\"title_order\">
    <h1>MES COMMANDES</h1>
            </div>
            <div class=\"text_order\">
   <p>C'est dans cet espace que vous allez pouvoir gérer vos commandes</p>
            </div>
   <button type=\"submit\" class=\"btn connect mt-3 pt-5\"  ><a href=\"{{ path('account') }}\" style=\"color:#FFFFFF;\">Retour</a></button>
    <hr>
    {% if app.user.orders|length == 0 %}
        <p class=\"text-center\">Vous n'avez pas encore d'adresse.</p>
        <a href=\"\">Ajouter une commande</a>
    {% else %}
        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Produits</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
        {% for order in app.user.orders %}
            <tr><td> <span class=\"badge badge-info\">{{ order.reference }}</span></td>
                <td>{{ order.createdAt|date('d/m/Y') }}</td>
                <td>
                    {% if order.State == 1 %}
                        Paiement accepté
                    {% elseif order.State == 2 %}
                        Préparation en cours
                    {% elseif order.State == 3 %}
                        Livraison en cours
                    {% endif %}
                </td>

                <td>{{ order.orderDetails|length }}</td>
                <td>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, '.', ',') }} € </td>
                <td class=\"text-right\"><a href=\"{{ path('account_order_show', {'reference' : order.reference}) }}\"> Voir ma commande</a></td>

            </tr>
        {% endfor %}
            </tbody>
        </table>



    {% endif %}
        </div>
    </div>
</div>

{% endblock %}
", "account/order.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/account/order.html.twig");
    }
}
