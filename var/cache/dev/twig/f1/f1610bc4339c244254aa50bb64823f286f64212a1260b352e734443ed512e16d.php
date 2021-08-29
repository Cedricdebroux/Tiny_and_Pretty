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

/* faq/index.html.twig */
class __TwigTemplate_6120af292709edd373374289fc045eb14a0bcff86aec6dd96b5da0624ca9b647 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "faq/index.html.twig", 1);
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

        echo "FAQ";
        
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
        echo "
    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion col-12 col-sm-8 col-md-8 mx-auto mt-5 mb-5\" id=\"accordionEx1\"
         role=\"tablist\"
         aria-multiselectable=\"true\">

        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingTwo1\">
                <a class=\"collapsed  question\" style=\"text-decoration: none;\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\"
                   href=\"#collapseTwo1\"
                   aria-expanded=\"false\" aria-controls=\"collapseTwo1\">
                    <h6 class=\"mb-0\">
                        Comment retourner un article ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>

            </div>

            <!-- Card body -->
            <div id=\"collapseTwo1\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo1\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>Vous avez jusqu'à 60 jours à compter de la réception de votre commande pour échanger votre
                        article pour une autre taille ou demander son retour.</p>
                    <p>Vous pouvez effectuer votre retour par courrier à l'adresse suivante :</p>
                    <p><span>Tiny and Pretty</span></p>
                    <p><span>Rue de Wallonie, 9b</span></p>
                    <p><span>B-4460 Grâce-Hollogne</span></p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingTwo2\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseTwo21\"
                   aria-expanded=\"false\" aria-controls=\"collapseTwo21\">
                    <h6 class=\"mb-0\">
                        Puis-je annuler ou modifier ma commande ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseTwo21\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo21\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>Actuellement, il n'est pas possible d'annuler ou de modifier votre commande puisque nous
                        préparons celle-ci dès que vous nous confirmez la commande sur le site web.</p>
                    <p>Si vous changez d'idée, vous pouvez retourner les vêtements lorsque vous aurez reçu votre achat.
                        Veuillez consulter notre rubrique <a
                                href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisons_et_retours");
        echo "\"><b>retours</b></a> pour
                        avoir davantage de renseignements.</p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree31\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree31\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree31\">
                    <h6 class=\"mb-0\">
                        J'ai un(e) code promotionnel/réduction, comment l'appliquer ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree31\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree31\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Quand vous arrivez au résumé de votre achat, cliquez sur 'Appliquer code promotionnel'.
                        Introduisez ensuite votre code promotionnel pour bénéficier de la promotion ou de la réduction.
                    </p>
                </div>
            </div>
        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree34\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree34\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree34\">
                    <h6 class=\"mb-0\">
                        Je n'ai pas reçu tous les articles de mon achat. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree34\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree34\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Examinez bien votre messagerie pour vérifier si nous vous avons envoyé un courrier électronique
                        notifiant qu'un des articles inclus dans votre commande n'était plus disponible. Dans ce cas,
                        nous vous remboursons le montant correspondant à l'article en question ainsi que les frais
                        d'envoi de votre commande en utilisant le même mode de paiement que vous aviez utilisé lors de
                        l'achat.
                    </p>
                    <p>
                        Si vous n'avez reçu aucun e-mail, nous vous prions de vous mettre en contact avec le <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_user");
        echo "\">Service
                            Clientèle</a> et nous vous répondrons dans les plus brefs délais.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree35\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree35\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree35\">
                    <h6 class=\"mb-0\">
                        Comment puis-je régler mes achats ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree35\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree35\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty dispose d’un terminal de paiement bancontact pour régler vos achats plus
                        facilement. Nous disposons également d’un moyen de paiement par carte visa & mastercard et via
                        paypal. Si vous désirez ajouter un moyen de paiement que nous n’avons pas, notre <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_user");
        echo "\">service
                            clientèle</a> prendra en compte votre demande et vous répondra dans les plus brefs délais.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree36\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree36\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree36\">
                    <h6 class=\"mb-0\">
                        Les articles reçus ne sont pas corrects. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree36\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree36\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Vous pouvez retourner les vêtements que vous avez achetés dès la réception. Pour cela, veuillez
                        consulter notre rubrique retours pour avoir davantage de renseignements.
                    </p>
                    <p>
                        Après avoir retourné vos articles, vous recevrez un bon d’achat ou un remboursement.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree37\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree37\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree37\">
                    <h6 class=\"mb-0\">
                        Un des articles reçus présente un défaut. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree37\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree37\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                  <p>
                      Tiny and Pretty protège le consommateur quant à ses achats en ligne. Si un article reçu est
                      défectueux, vous avez la possibilité de nous le renvoyer et de vous faire rembourser. Pour cela,
                      suivez notre politique de <a href=\"#\"><b>retours.</b></a>
                  </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree39\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree39\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree39\">
                    <h6 class=\"mb-0\">
                        Quels sont les types d'envoi ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree39\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree39\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty propose un envoi de vos commandes via des livraisons avec notre transporteur.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree40\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree40\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree40\">
                    <h6 class=\"mb-0\">
                        Quels sont les délais de livraison de ma commande ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree40\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree40\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">

                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree41\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree41\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree41\">
                    <h6 class=\"mb-0\">
                        Comment choisir la bonne taille ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree41\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree41\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Rendez- vous sur une fiche produit, et cliquez sur la rubrique \"Guide des tailles\". Vous pourrez
                        trouver en un clin d'oeil la taille qui convient à votre enfant.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree42\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree42\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree42\">
                    <h6 class=\"mb-0\">
                        Comment puis-je être informé des nouveautés ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree42\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree42\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty propose un système mensuel de newsletter. Vous pouvez vous inscrire dans le bas
                        de la page d’accueil.
                    </p>
                    <p>
                        Cette newsletter vous fournira les actualités de l’entreprise, les nouveaux produits ou encore
                        des codes promotionnels à insérer lors de votre passage à la caisse.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree43\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree43\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree43\">
                    <h6 class=\"mb-0\">
                        Le paiement est-il vraiment sécurisé ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree43\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree43\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Nous avons mis en place un système garantissant un paiement sécurisé. Le système de sécurisation
                        par cryptage SSL protège les données liées aux moyens de paiement. Afin de renforcer la
                        sécurisation de vos données, nous avons mis en place le 3DSecure qui vous permet de recevoir un
                        code par sms à saisir au moment du règlement pour validation de votre commande. Ce code est
                        envoyé par l’établissement bancaire. Si vous avez changé récemment de numéro de téléphone,
                        n’oubliez pas d’en avertir votre banque.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree44\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree44\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree44\">
                    <h6 class=\"mb-0\">
                        Comment obtenir un remboursement ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree44\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree44\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Après réception de votre retour, Tiny and pretty assure un délai de remboursement de 14 jours
                        maximum conformément aux normes européennes.
                    </p>
                    <p>
                        Vous pouvez exiger votre remboursement de la même manière que vous avez effectué votre paiement.


                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


    </div>
    <!-- Accordion wrapper -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 171,  225 => 138,  155 => 71,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FAQ{% endblock %}

{% block content %}

    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion col-12 col-sm-8 col-md-8 mx-auto mt-5 mb-5\" id=\"accordionEx1\"
         role=\"tablist\"
         aria-multiselectable=\"true\">

        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingTwo1\">
                <a class=\"collapsed  question\" style=\"text-decoration: none;\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\"
                   href=\"#collapseTwo1\"
                   aria-expanded=\"false\" aria-controls=\"collapseTwo1\">
                    <h6 class=\"mb-0\">
                        Comment retourner un article ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>

            </div>

            <!-- Card body -->
            <div id=\"collapseTwo1\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo1\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>Vous avez jusqu'à 60 jours à compter de la réception de votre commande pour échanger votre
                        article pour une autre taille ou demander son retour.</p>
                    <p>Vous pouvez effectuer votre retour par courrier à l'adresse suivante :</p>
                    <p><span>Tiny and Pretty</span></p>
                    <p><span>Rue de Wallonie, 9b</span></p>
                    <p><span>B-4460 Grâce-Hollogne</span></p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingTwo2\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseTwo21\"
                   aria-expanded=\"false\" aria-controls=\"collapseTwo21\">
                    <h6 class=\"mb-0\">
                        Puis-je annuler ou modifier ma commande ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseTwo21\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo21\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>Actuellement, il n'est pas possible d'annuler ou de modifier votre commande puisque nous
                        préparons celle-ci dès que vous nous confirmez la commande sur le site web.</p>
                    <p>Si vous changez d'idée, vous pouvez retourner les vêtements lorsque vous aurez reçu votre achat.
                        Veuillez consulter notre rubrique <a
                                href=\"{{ path('livraisons_et_retours') }}\"><b>retours</b></a> pour
                        avoir davantage de renseignements.</p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree31\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree31\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree31\">
                    <h6 class=\"mb-0\">
                        J'ai un(e) code promotionnel/réduction, comment l'appliquer ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree31\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree31\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Quand vous arrivez au résumé de votre achat, cliquez sur 'Appliquer code promotionnel'.
                        Introduisez ensuite votre code promotionnel pour bénéficier de la promotion ou de la réduction.
                    </p>
                </div>
            </div>
        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree34\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree34\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree34\">
                    <h6 class=\"mb-0\">
                        Je n'ai pas reçu tous les articles de mon achat. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree34\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree34\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Examinez bien votre messagerie pour vérifier si nous vous avons envoyé un courrier électronique
                        notifiant qu'un des articles inclus dans votre commande n'était plus disponible. Dans ce cas,
                        nous vous remboursons le montant correspondant à l'article en question ainsi que les frais
                        d'envoi de votre commande en utilisant le même mode de paiement que vous aviez utilisé lors de
                        l'achat.
                    </p>
                    <p>
                        Si vous n'avez reçu aucun e-mail, nous vous prions de vous mettre en contact avec le <a href=\"{{ path('contact_user') }}\">Service
                            Clientèle</a> et nous vous répondrons dans les plus brefs délais.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree35\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree35\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree35\">
                    <h6 class=\"mb-0\">
                        Comment puis-je régler mes achats ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree35\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree35\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty dispose d’un terminal de paiement bancontact pour régler vos achats plus
                        facilement. Nous disposons également d’un moyen de paiement par carte visa & mastercard et via
                        paypal. Si vous désirez ajouter un moyen de paiement que nous n’avons pas, notre <a href=\"{{ path('contact_user') }}\">service
                            clientèle</a> prendra en compte votre demande et vous répondra dans les plus brefs délais.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree36\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree36\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree36\">
                    <h6 class=\"mb-0\">
                        Les articles reçus ne sont pas corrects. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree36\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree36\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Vous pouvez retourner les vêtements que vous avez achetés dès la réception. Pour cela, veuillez
                        consulter notre rubrique retours pour avoir davantage de renseignements.
                    </p>
                    <p>
                        Après avoir retourné vos articles, vous recevrez un bon d’achat ou un remboursement.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree37\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree37\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree37\">
                    <h6 class=\"mb-0\">
                        Un des articles reçus présente un défaut. Que dois-je faire ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree37\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree37\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                  <p>
                      Tiny and Pretty protège le consommateur quant à ses achats en ligne. Si un article reçu est
                      défectueux, vous avez la possibilité de nous le renvoyer et de vous faire rembourser. Pour cela,
                      suivez notre politique de <a href=\"#\"><b>retours.</b></a>
                  </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree39\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree39\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree39\">
                    <h6 class=\"mb-0\">
                        Quels sont les types d'envoi ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree39\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree39\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty propose un envoi de vos commandes via des livraisons avec notre transporteur.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree40\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree40\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree40\">
                    <h6 class=\"mb-0\">
                        Quels sont les délais de livraison de ma commande ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree40\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree40\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">

                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree41\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree41\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree41\">
                    <h6 class=\"mb-0\">
                        Comment choisir la bonne taille ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree41\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree41\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Rendez- vous sur une fiche produit, et cliquez sur la rubrique \"Guide des tailles\". Vous pourrez
                        trouver en un clin d'oeil la taille qui convient à votre enfant.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree42\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree42\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree42\">
                    <h6 class=\"mb-0\">
                        Comment puis-je être informé des nouveautés ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree42\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree42\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Tiny and Pretty propose un système mensuel de newsletter. Vous pouvez vous inscrire dans le bas
                        de la page d’accueil.
                    </p>
                    <p>
                        Cette newsletter vous fournira les actualités de l’entreprise, les nouveaux produits ou encore
                        des codes promotionnels à insérer lors de votre passage à la caisse.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree43\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree43\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree43\">
                    <h6 class=\"mb-0\">
                        Le paiement est-il vraiment sécurisé ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree43\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree43\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Nous avons mis en place un système garantissant un paiement sécurisé. Le système de sécurisation
                        par cryptage SSL protège les données liées aux moyens de paiement. Afin de renforcer la
                        sécurisation de vos données, nous avons mis en place le 3DSecure qui vous permet de recevoir un
                        code par sms à saisir au moment du règlement pour validation de votre commande. Ce code est
                        envoyé par l’établissement bancaire. Si vous avez changé récemment de numéro de téléphone,
                        n’oubliez pas d’en avertir votre banque.
                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->
        <!-- Accordion card -->
        <div class=\"card\">

            <!-- Card header -->
            <div class=\"card-header question\" role=\"tab\" id=\"headingThree44\">
                <a class=\"collapsed  question\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseThree44\"
                   aria-expanded=\"false\" aria-controls=\"collapseThree44\">
                    <h6 class=\"mb-0\">
                        Comment obtenir un remboursement ?
                    </h6>
                    <div class=\"float-right\">
                        <i class=\"fas fa-angle-down rotate-icon ml-5\"></i>
                    </div>
                </a>
            </div>

            <!-- Card body -->
            <div id=\"collapseThree44\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree44\"
                 data-parent=\"#accordionEx1\">
                <div class=\"card-body answer\">
                    <p>
                        Après réception de votre retour, Tiny and pretty assure un délai de remboursement de 14 jours
                        maximum conformément aux normes européennes.
                    </p>
                    <p>
                        Vous pouvez exiger votre remboursement de la même manière que vous avez effectué votre paiement.


                    </p>
                </div>
            </div>

        </div>
        <!-- Accordion card -->


    </div>
    <!-- Accordion wrapper -->

{% endblock %}
", "faq/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/faq/index.html.twig");
    }
}
