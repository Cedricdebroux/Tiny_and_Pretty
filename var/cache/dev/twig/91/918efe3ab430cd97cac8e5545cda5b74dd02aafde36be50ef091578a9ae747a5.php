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

/* product/toy/productsToys.html.twig */
class __TwigTemplate_d09a9cfd323a960d3ed19e8981aa9629e0fbfba07500de73266e407f97d0361d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/toy/productsToys.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/toy/productsToys.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/toy/productsToys.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos produits!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 12
        $this->loadTemplate("product/toy/_filterToy.html.twig", "product/toy/productsToys.html.twig", 12)->display(twig_to_array(["form4" => (isset($context["form4"]) || array_key_exists("form4", $context) ? $context["form4"] : (function () { throw new RuntimeError('Variable "form4" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "            </div>


            <div class=\"col-9\">

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsToy"]) || array_key_exists("productsToy", $context) ? $context["productsToy"] : (function () { throw new RuntimeError('Variable "productsToy" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "                        ";
            $this->loadTemplate("/product/single_product.html.twig", "product/toy/productsToys.html.twig", 19)->display(twig_to_array(["product" => $context["product"]]));
            // line 20
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/toy/productsToys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  109 => 20,  106 => 19,  102 => 18,  95 => 13,  93 => 12,  88 => 9,  78 => 8,  59 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{# Affichage pour boys #}


{% block title %}Nos produits!{% endblock %}
{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                {% include 'product/toy/_filterToy.html.twig' with {form4: form4} only %}
            </div>


            <div class=\"col-9\">

                    {% for product in productsToy %}
                        {% include '/product/single_product.html.twig' with {product: product} only %}
                    {% endfor %}

            </div>
        </div>
    </div>
{% endblock %}

{# {% block content %}
    <div class=\"content-layout container-fluid pt-sm-4\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <h3>Filtrer</h3>
            {{ form(form)}}
        </div>
        <div class=\"col-md-9\">

            <h3> Nos produits </h3>
            <div class=\"row product-container\">
                {% for product in products  %}

                    <div class=\"col-md-3 col-sm-10 text-center\">
                        <div class=\"product-item \">

                            <a href=\"{{ path('product', {'slug':product.slug}) }}\">
                                <img src=\"/uploads/{{ product.illustration }}\" alt=\"{{ product.name }}\" class=\"img-fluid\" style=\"width:80%\">
                                <button type=\"button\" class=\"btn apercu text-white\">APERÇU</button>
                            </a>




                                <div class=\"descriptionBest\">
                                <p><span>{{ product.name }}</p></span>
                                    {% if product.soldout == false %}
                                <p><span class=\"product-subtitle\"> {{ product.subtitle }} </span></p>
                                <p><span class=\"product-price\"> {{ (product.price / 100)|number_format(2,',', '.') }} € </span></p>
                                    {% else %}
                                    <p><span class=\"product-subtitle\"> Victime de son succès </span></p>
                                    {% endif %}
                            </div>
                        </div>
                    <div class=\"col-md-4\">
                       {% include 'product/single_product.html.twig' %}
                {% endfor %}
            </div>
        </div>
    </div>
    </div>
{% endblock %} #}
", "product/toy/productsToys.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/toy/productsToys.html.twig");
    }
}
