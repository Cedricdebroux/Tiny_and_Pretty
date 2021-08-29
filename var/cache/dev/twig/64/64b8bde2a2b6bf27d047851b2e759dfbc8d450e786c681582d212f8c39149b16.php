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

/* product/Mode/productsBabies.html.twig */
class __TwigTemplate_4cc93e939da248dc22d965cbd39a10bcabd9b330cadec001931f9ddfc048c9c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Mode/productsBabies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Mode/productsBabies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Mode/productsBabies.html.twig", 1);
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

        echo "A la mode";
        
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <!--Accordion wrapper-->
            <div class=\"accordion md-accordion col-md-3 mt-5 \"
                 id=\"accordionEx\" role=\"tablist\"
                 aria-multiselectable=\"true\">

                <!-- Accordion card -->
                <div class=\"card\">

                    <!-- Card header -->
                    <div class=\"card-header bg-white\"
                         role=\"tab\" id=\"headingOne1\">
                        <a data-toggle=\"collapse\"
                           data-parent=\"#accordionEx\"
                           href=\"#collapseOne1\"
                           aria-expanded=\"false\"
                           aria-controls=\"collapseOne1\">
                            <h5 class=\"mb-0 text-black-50\">
                                FILTRE <i class=\"fas fa-angle-down rotate-icon float-right\"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id=\"collapseOne1\"
                         class=\"collapse hide\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                         data-parent=\"#accordionEx\">
                        <div class=\"card-body\">
                            <aside class=\"\">
                                ";
        // line 39
        $this->loadTemplate("/product/Mode/_filterBaby.html.twig", "product/Mode/productsBabies.html.twig", 39)->display(twig_to_array(["form3" => (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 39, $this->source); })())]));
        // line 40
        echo "                            </aside>
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->
            </div>



            <div class=\"col-md-9 d-flex flex-wrap\">

                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsBabies"]) || array_key_exists("productsBabies", $context) ? $context["productsBabies"] : (function () { throw new RuntimeError('Variable "productsBabies" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "                    <div class=\"col-md-3 \">
                        ";
            // line 54
            $this->loadTemplate("product/single_product.html.twig", "product/Mode/productsBabies.html.twig", 54)->display(twig_to_array(["product" => $context["product"]]));
            // line 55
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div>


        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/Mode/productsBabies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  145 => 55,  143 => 54,  140 => 53,  136 => 52,  122 => 40,  120 => 39,  88 => 9,  78 => 8,  59 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{# Affichage pour MODE anciennement baby #}


{% block title %}A la mode{% endblock %}
{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!--Accordion wrapper-->
            <div class=\"accordion md-accordion col-md-3 mt-5 \"
                 id=\"accordionEx\" role=\"tablist\"
                 aria-multiselectable=\"true\">

                <!-- Accordion card -->
                <div class=\"card\">

                    <!-- Card header -->
                    <div class=\"card-header bg-white\"
                         role=\"tab\" id=\"headingOne1\">
                        <a data-toggle=\"collapse\"
                           data-parent=\"#accordionEx\"
                           href=\"#collapseOne1\"
                           aria-expanded=\"false\"
                           aria-controls=\"collapseOne1\">
                            <h5 class=\"mb-0 text-black-50\">
                                FILTRE <i class=\"fas fa-angle-down rotate-icon float-right\"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id=\"collapseOne1\"
                         class=\"collapse hide\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                         data-parent=\"#accordionEx\">
                        <div class=\"card-body\">
                            <aside class=\"\">
                                {% include '/product/Mode/_filterBaby.html.twig' with {form3: form3} only %}
                            </aside>
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->
            </div>



            <div class=\"col-md-9 d-flex flex-wrap\">

                {% for product in productsBabies %}
                    <div class=\"col-md-3 \">
                        {% include 'product/single_product.html.twig' with {product: product} only %}
                    </div>
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
", "product/Mode/productsBabies.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/Mode/productsBabies.html.twig");
    }
}
