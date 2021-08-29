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

/* paiement_securise/index.html.twig */
class __TwigTemplate_1219897a142bbb20cde4d3137bf3625b398d97e2d4fc26144e78ef28cd58d36f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement_securise/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement_securise/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement_securise/index.html.twig", 1);
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

        echo "Paiement sécurisé";
        
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    PAIEMENT SÉCURISÉ
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p>Commandez les yeux fermés sur le site de Tiny and Pretty ! Toutes les données bancaires que
                            vous nous fournissez sont protégées par cryptage SSL (Secure Socket Layer) et ne sont jamais
                            stockées dans notre système informatique. Vos paiements en ligne sont donc entièrement
                            sécurisés.</p>

                        <p>1. Le paiement des achats s’effectue par carte de crédit de type Visa ou Mastercard, par
                            cartes bancaires de type “Maestro” et “Bancontact – Mistercash”, par le système de paiement
                            sécurisé Paypal ou encore par le système de paiement en trois fois, Klarna. Lors de la
                            validation de la commande, l’utilisateur indique le nom qui figure sur sa carte de crédit ou
                            de banque, le numéro de la carte, sa date d’expiration (et le numéro de contrôle dans le cas
                            d’une Visa et/ou Mastercard). Certains organismes bancaires émetteurs peuvent demander une
                            signature supplémentaire de type digipass. La validité du paiement est confirmée ou non
                            après vérification par l’organisme bancaire émetteur. Si le paiement est confirmé, le
                            prélèvement intervient, après la facturation de la commande, selon les modalités convenues
                            avec l’organisme bancaire émetteur de la carte.</p>

                        <p>2. Le(s) produit(s) commandé(s) demeure(nt) la propriété du vendeur jusqu’au complet paiement
                            du prix d’achat et des frais indiqués lors de la commande.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paiement_securise/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement sécurisé{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    PAIEMENT SÉCURISÉ
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p>Commandez les yeux fermés sur le site de Tiny and Pretty ! Toutes les données bancaires que
                            vous nous fournissez sont protégées par cryptage SSL (Secure Socket Layer) et ne sont jamais
                            stockées dans notre système informatique. Vos paiements en ligne sont donc entièrement
                            sécurisés.</p>

                        <p>1. Le paiement des achats s’effectue par carte de crédit de type Visa ou Mastercard, par
                            cartes bancaires de type “Maestro” et “Bancontact – Mistercash”, par le système de paiement
                            sécurisé Paypal ou encore par le système de paiement en trois fois, Klarna. Lors de la
                            validation de la commande, l’utilisateur indique le nom qui figure sur sa carte de crédit ou
                            de banque, le numéro de la carte, sa date d’expiration (et le numéro de contrôle dans le cas
                            d’une Visa et/ou Mastercard). Certains organismes bancaires émetteurs peuvent demander une
                            signature supplémentaire de type digipass. La validité du paiement est confirmée ou non
                            après vérification par l’organisme bancaire émetteur. Si le paiement est confirmé, le
                            prélèvement intervient, après la facturation de la commande, selon les modalités convenues
                            avec l’organisme bancaire émetteur de la carte.</p>

                        <p>2. Le(s) produit(s) commandé(s) demeure(nt) la propriété du vendeur jusqu’au complet paiement
                            du prix d’achat et des frais indiqués lors de la commande.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "paiement_securise/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/paiement_securise/index.html.twig");
    }
}
