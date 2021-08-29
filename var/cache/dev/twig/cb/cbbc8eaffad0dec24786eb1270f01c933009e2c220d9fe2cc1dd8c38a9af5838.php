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

/* order/add.html.twig */
class __TwigTemplate_e6c9888f6c59f5cb159688ed769a9ae5a2d1be2c335aeb36fa8e76e571cb05c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "<script src=\"https://js.stripe.com/v3/\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "      <div class=\"container-fluid\">
         <div class=\"row\">
              <div class=\"col-md-6\">
                 <div class=\"title_order\">
 <h1>RÉCAPITULATIF</h1>
                </div>
            <div class=\"text_order\">
    <p>Vérifiez vos infos</p>
    <hr>
            </div>


            <strong>Mon adresse</strong>   <br/>

            <div class=\"form-check mt-4\">
                ";
        // line 26
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 26, $this->source); })());
        echo "
            </div>


            <hr>
           <strong>Mon transporteur</strong>   <br/>
            <div class=\"form-check\">
                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "
                ";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 2, ",", "."), "html", null, true);
        echo "  €
            </div>
        </div>

        <div class=\"col-md-6\">

            <div class=\" recap mb-5\">
                <b>Récapitulatif de ma commande</b>
            </div>


            <div class=\"order-summary\">
                ";
        // line 47
        $context["total"] = null;
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 49
            echo "                    <div class=\"row ";
            if (($context["key"] > 0)) {
                echo " mt-2 ";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "illustration", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "\" height=\"75px\"><br/>

                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo " <br/>
                            <small>
                                ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "subtitle", [], "any", false, false, false, 57), "html", null, true);
            echo " <br/>
                                x ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                             ";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 61)) / 100), 2, ",", "."), "html", null, true);
            echo " €

                        </div>
                    </div>
                    ";
            // line 65
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 65), "price", [], "any", false, false, false, 65) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65)));
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
            <hr>
             <div class=\" recap mb-5\">
        <p> <span> <strong> Sous-total:</strong> ";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €</span></p>
         <p> <span><strong> Livraison:</strong>";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 71, $this->source); })()), "price", [], "any", false, false, false, 71), 2, ",", "."), "html", null, true);
        echo " €</span></p>
           <p><span><strong> Total:</strong> ";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 72, $this->source); })()), "price", [], "any", false, false, false, 72)), 2, ",", "."), "html", null, true);
        echo " €</span></p>
            </div>

            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | ";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 75, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 75, $this->source); })()), "price", [], "any", false, false, false, 75)), 2, ",", "."), "html", null, true);
        echo " € </a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 82
        echo "    <script type=\"text/javascript\">

        let stripe = Stripe(\"pk_test_51J1QeFBed74eFDWvv6bGMmlv7EmLWNvL6FCTLwQJ0umzJ8LPm5thA9h6gLJ99FbSEnglWHZDnpVTtQ9QhpqrnkRR002H79SPgk\");

        let checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function () {

            fetch(\"/commandes/create-session/";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\", {

                method: \"POST\",

            })

                .then(function (response) {

                    return response.json();

                })

                .then(function (session) {
                    if (session.error === 'order') {
                        window.location.replace('";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
                    } else {
                        return stripe.redirectToCheckout({sessionId: session.id});
                    }
                })

                .then(function (result) {

                    // If redirectToCheckout fails due to a browser or network

                    // error, you should display the localized error message to your

                    // customer using error.message.

                    if (result.error) {

                        alert(result.error.message);

                    }

                })

                .catch(function (error) {

                    console.error(\"Error:\", error);

                });

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 104,  270 => 90,  260 => 82,  250 => 81,  235 => 75,  229 => 72,  225 => 71,  221 => 70,  216 => 67,  210 => 66,  208 => 65,  201 => 61,  195 => 58,  191 => 57,  186 => 55,  177 => 51,  169 => 49,  164 => 48,  162 => 47,  147 => 35,  143 => 34,  139 => 33,  129 => 26,  112 => 11,  102 => 10,  83 => 8,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
<script src=\"https://js.stripe.com/v3/\"></script>

{% endblock %}

{% block title %}Paiement{% endblock %}

{% block content %}
      <div class=\"container-fluid\">
         <div class=\"row\">
              <div class=\"col-md-6\">
                 <div class=\"title_order\">
 <h1>RÉCAPITULATIF</h1>
                </div>
            <div class=\"text_order\">
    <p>Vérifiez vos infos</p>
    <hr>
            </div>


            <strong>Mon adresse</strong>   <br/>

            <div class=\"form-check mt-4\">
                {{ delivery | raw }}
            </div>


            <hr>
           <strong>Mon transporteur</strong>   <br/>
            <div class=\"form-check\">
                {{ carrier.name }}
                {{ carrier.description }}
                {{ (carrier.price) | number_format(2,',','.')  }}  €
            </div>
        </div>

        <div class=\"col-md-6\">

            <div class=\" recap mb-5\">
                <b>Récapitulatif de ma commande</b>
            </div>


            <div class=\"order-summary\">
                {% set total = null %}
                {% for key,product in cart %}
                    <div class=\"row {% if key > 0 %} mt-2 {% endif %}\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\"><br/>

                        </div>
                        <div class=\"col-8 my-auto\">
                            {{ product.product.name }} <br/>
                            <small>
                                {{ product.product.subtitle }} <br/>
                                x {{ product.quantity }}</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                             {{ ((product.product.price * product.quantity / 100)|number_format(2,',', '.')) }} €

                        </div>
                    </div>
                    {% set total = total +(product.product.price * product.quantity) %}
                {% endfor %}
            </div>
            <hr>
             <div class=\" recap mb-5\">
        <p> <span> <strong> Sous-total:</strong> {{ ((total / 100)|number_format(2,',', '.')) }} €</span></p>
         <p> <span><strong> Livraison:</strong>{{ (carrier.price)|number_format(2,',', '.') }} €</span></p>
           <p><span><strong> Total:</strong> {{ ((total / 100) +  carrier.price)|number_format(2,',', '.') }} €</span></p>
            </div>

            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | {{ ((total / 100) + carrier.price)|number_format(2,',', '.') }} € </a>
        </div>
    </div>

{% endblock %}

{% block script %}
    <script type=\"text/javascript\">

        let stripe = Stripe(\"pk_test_51J1QeFBed74eFDWvv6bGMmlv7EmLWNvL6FCTLwQJ0umzJ8LPm5thA9h6gLJ99FbSEnglWHZDnpVTtQ9QhpqrnkRR002H79SPgk\");

        let checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function () {

            fetch(\"/commandes/create-session/{{ reference }}\", {

                method: \"POST\",

            })

                .then(function (response) {

                    return response.json();

                })

                .then(function (session) {
                    if (session.error === 'order') {
                        window.location.replace('{{ path('order') }}');
                    } else {
                        return stripe.redirectToCheckout({sessionId: session.id});
                    }
                })

                .then(function (result) {

                    // If redirectToCheckout fails due to a browser or network

                    // error, you should display the localized error message to your

                    // customer using error.message.

                    if (result.error) {

                        alert(result.error.message);

                    }

                })

                .catch(function (error) {

                    console.error(\"Error:\", error);

                });

        });

    </script>
{% endblock %}", "order/add.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/order/add.html.twig");
    }
}
