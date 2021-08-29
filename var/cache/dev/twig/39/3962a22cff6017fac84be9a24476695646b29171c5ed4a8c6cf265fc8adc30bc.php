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

/* livraisons_et_retours/index.html.twig */
class __TwigTemplate_dbec3550e887898f3afeb14d9c8f8f32de488310850b33355abc919d8d9f934d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraisons_et_retours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraisons_et_retours/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livraisons_et_retours/index.html.twig", 1);
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

        echo "HLivraisons Et Retours";
        
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
                    RETOURS
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p>1. Si le(s) produit(s) acheté(s) sur le site ne convien(nen)t pas à l’utilisateur, celui-ci
                            dispose d’un délai de quatorze (14) jours calendrier, à compter du lendemain du jour de la
                            livraison, pour renoncer à son achat sans pénalité et sans indication de motifs,
                            conformément au code de droit économique.
                            Dans ce délai, l’utilisateur doit notifier au vendeur son intention de faire usage de son
                            droit de rétractation, de la façon suivante :
                        <ul>
                            <li>Envoyer un mail à happy@tinyandpretty.be</li>
                            <li> Notifier nom et prénom de l’acheteur</li>
                            <li>Donner une description détaillée du ou des articles remis</li>
                        </ul>
                        </p>

                        <p>2. Le retour au vendeur s’effectuera à l’adresse suivante, sauf instructions contraires
                            communiquées à l’utilisateur, par tout moyen de transport au choix de l’utilisateur, qui
                            doit en conserver la preuve d’expédition.
                            Tiny and Pretty, 9b rue de Wallonie 4460 Grâce-Hollogne, Belgique </p>

                        <p>3. Tous frais et risques liés à l’expédition du retour des articles sont à la charge de
                            l’utilisateur.</p>
                        <p>4. En cas d’utilisation de son droit de rétractation par l’utilisateur dans le délai précité
                            et du renvoi des produits au plus tard quatorze (14) jours suivant la communication de sa
                            décision de se rétracter selon les modalités convenues aux paragraphes précédents, le
                            vendeur s’engage à rembourser le prix d’achat à l’utilisateur, pour autant que celui-ci ait
                            déjà été payé, au plus tard à la réception du (des) produit(s) par le vendeur.</p>
                        <p>5. En cas de remboursement des produits retournés, le vendeur créditera la carte bancaire ou
                            la carte de crédit utilisée pour le paiement desdits produits d’un montant équivalent au
                            prix d’achat de ceux-ci, diminué du montant du (des) bon(s) d’achat ou remises intervenus
                            lors de la commande. Le remboursement de l’utilisateur s’effectuera selon les modalités
                            convenues avec l’organisme bancaire émetteur de la carte.</p>
                        <p>6. L’utilisateur ne pourra faire usage de son droit de rétractation et/ou d’échange si le(s)
                            produit(s) livré(s) a (ont) manifestement fait l’objet d’un usage durable, a (ont) été
                            endommagé(s), comporte(nt) des pièces manquantes.
                        </p>
                        <p>7. Le(s) produit(s) doit(vent) impérativement être retourné(s) correctement protégé(s), dans
                            son(leur) emballage(s) d’origine, dans un parfait état de revente (non abîmés, endommagés ou
                            salis par le client) accompagné(s) de tous les accessoires éventuels, notice d’emploi,
                            étiquette(s) du (des) vêtement(s), etc. à l’adresse sous indiquée. A défaut, ils ne pourront
                            être repris ou échangés.
                        </p>
                        <p>8. Ne pourront également être repris ou échangés, le(s) produit(s) pour lesquels aucun
                            élément joint ne permet d’identifier l’expéditeur (n° de retour, n° commande, nom, prénom,
                            adresse). Le(s) produit(s) renvoyés mais ne pouvant être acceptés en retour par le vendeur
                            sont tenus à la disposition de l’utilisateur chez le vendeur. L’utilisateur reste tenu d’en
                            payer le prix. En cas de retours anormaux ou abusifs, le vendeur se réserve le droit de
                            refuser une commande ultérieure.</p>
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
        return "livraisons_et_retours/index.html.twig";
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

{% block title %}HLivraisons Et Retours{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    RETOURS
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <p>1. Si le(s) produit(s) acheté(s) sur le site ne convien(nen)t pas à l’utilisateur, celui-ci
                            dispose d’un délai de quatorze (14) jours calendrier, à compter du lendemain du jour de la
                            livraison, pour renoncer à son achat sans pénalité et sans indication de motifs,
                            conformément au code de droit économique.
                            Dans ce délai, l’utilisateur doit notifier au vendeur son intention de faire usage de son
                            droit de rétractation, de la façon suivante :
                        <ul>
                            <li>Envoyer un mail à happy@tinyandpretty.be</li>
                            <li> Notifier nom et prénom de l’acheteur</li>
                            <li>Donner une description détaillée du ou des articles remis</li>
                        </ul>
                        </p>

                        <p>2. Le retour au vendeur s’effectuera à l’adresse suivante, sauf instructions contraires
                            communiquées à l’utilisateur, par tout moyen de transport au choix de l’utilisateur, qui
                            doit en conserver la preuve d’expédition.
                            Tiny and Pretty, 9b rue de Wallonie 4460 Grâce-Hollogne, Belgique </p>

                        <p>3. Tous frais et risques liés à l’expédition du retour des articles sont à la charge de
                            l’utilisateur.</p>
                        <p>4. En cas d’utilisation de son droit de rétractation par l’utilisateur dans le délai précité
                            et du renvoi des produits au plus tard quatorze (14) jours suivant la communication de sa
                            décision de se rétracter selon les modalités convenues aux paragraphes précédents, le
                            vendeur s’engage à rembourser le prix d’achat à l’utilisateur, pour autant que celui-ci ait
                            déjà été payé, au plus tard à la réception du (des) produit(s) par le vendeur.</p>
                        <p>5. En cas de remboursement des produits retournés, le vendeur créditera la carte bancaire ou
                            la carte de crédit utilisée pour le paiement desdits produits d’un montant équivalent au
                            prix d’achat de ceux-ci, diminué du montant du (des) bon(s) d’achat ou remises intervenus
                            lors de la commande. Le remboursement de l’utilisateur s’effectuera selon les modalités
                            convenues avec l’organisme bancaire émetteur de la carte.</p>
                        <p>6. L’utilisateur ne pourra faire usage de son droit de rétractation et/ou d’échange si le(s)
                            produit(s) livré(s) a (ont) manifestement fait l’objet d’un usage durable, a (ont) été
                            endommagé(s), comporte(nt) des pièces manquantes.
                        </p>
                        <p>7. Le(s) produit(s) doit(vent) impérativement être retourné(s) correctement protégé(s), dans
                            son(leur) emballage(s) d’origine, dans un parfait état de revente (non abîmés, endommagés ou
                            salis par le client) accompagné(s) de tous les accessoires éventuels, notice d’emploi,
                            étiquette(s) du (des) vêtement(s), etc. à l’adresse sous indiquée. A défaut, ils ne pourront
                            être repris ou échangés.
                        </p>
                        <p>8. Ne pourront également être repris ou échangés, le(s) produit(s) pour lesquels aucun
                            élément joint ne permet d’identifier l’expéditeur (n° de retour, n° commande, nom, prénom,
                            adresse). Le(s) produit(s) renvoyés mais ne pouvant être acceptés en retour par le vendeur
                            sont tenus à la disposition de l’utilisateur chez le vendeur. L’utilisateur reste tenu d’en
                            payer le prix. En cas de retours anormaux ou abusifs, le vendeur se réserve le droit de
                            refuser une commande ultérieure.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "livraisons_et_retours/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/livraisons_et_retours/index.html.twig");
    }
}
