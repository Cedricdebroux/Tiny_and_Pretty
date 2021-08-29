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

/* conditions_generales/index.html.twig */
class __TwigTemplate_4fbbeee0f030f1791b4c67a31ad0d7a1349a264ce5dd2c49da6a308635c4255a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conditions_generales/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conditions_generales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conditions_generales/index.html.twig", 1);
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

        echo "Conditions Générales de Vente";
        
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
                <h1 class=\"title\">
                    CONDITIONS GÉNÉRALES DE VENTE
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <h5>ARTICLE 1. DESCRIPTION</h5>
                        <p>1.1 Les présentes Conditions Générales de Vente (ci-après les « CGV ») définissent
                            les droits et obligations des parties dans le cadre de la vente de produits (ci-après les «
                            produits »),
                            via le site internet www.tinyandpretty.com (ci-après dénommé le « site »). Les présentes CGV
                            régissent toute
                            vente de produits réalisée sur le site ainsi que les services en bureau et la prise de
                            contact sur les différents
                            canaux.
                        </p>

                        <p> 1.2 Les CGV sont conclues entre, d’une part, TINY AND PRETTY, filiale d'Infinity Marketing,
                            inscrite à la Banque Carrefour
                            des Entreprises de Belgique sous le numéro 0754.506.184 (TVA BE0754.506.184) dont le siège
                            social est situé au 9b rue de Wallonie,
                            4460 Grâce-Hollogne en Belgique, ci-après dénommée le « vendeur » et, d’autre part, la
                            personne souhaitant consulter le site et y
                            effectuer un achat, ci-après dénommée l’« acheteur ». L’acheteur et le vendeur sont ci-après
                            conjointement dénommés les « parties ».
                            Les parties conviennent que leurs relations seront régies exclusivement par les CG à
                            l’exclusion de toutes conditions préalablement
                            disponibles sur le site.
                        </p>

                        <p> 1.3 Toute commande d’un produit ou services proposé sur le site (ci-après la « commande »)
                            suppose la consultation
                            préalable et l’acceptation expresse des CG par l’acheteur sans toutefois que cette
                            acceptation soit conditionnée par une signature manuscrite
                            de la part de l’acheteur. Conformément aux dispositions de la loi du 9 juillet 2001 fixant
                            certaines règles relatives au cadre juridique pour
                            les signatures électroniques et les services de certification, il est rappelé que la
                            validation du bon de commande constitue une signature
                            électronique qui a, entre les parties, la même valeur qu’une signature manuscrite et vaut
                            preuve de l’intégralité de la commande et de
                            l’exigibilité des sommes dues en exécution de ladite commande.
                        </p>
                        <p>1.4 L’acheteur qui souhaite acheter un produit sur le site déclare avoir la pleine capacité
                            juridique. Toute personne frappée d’incapacité
                            au sens
                            de l’article 1123 et suivants du Code Civil, ne peut en aucune façon acheter sur le site, ou
                            doit le faire par l’intermédiaire, et sous

                            la responsabilité de son représentant légal. Ce représentant légal est tenu de respecter les
                            CGV.
                        </p>
                        <h5>ARTICLE 2. LES PRODUITS EN VENTE</h5>
                        <p>
                            2.1 Les produits proposés à la vente sont ceux qui figurent sur le site, avec une
                            description de leurs caractéristiques essentielles, au jour et au moment précis de la
                            consultation du site par l’acheteur, et dans la limite des stocks disponibles. Le vendeur
                            met tous les moyens raisonnables en œuvre pour afficher la disponibilité des produits en
                            temps réel sur le site mais ne pourrait être tenu responsable si un produit n’était plus
                            disponible pour honorer la commande effectuée par l’acheteur. En cas d’indisponibilité de
                            l’un des produits commandés, l’acheteur en sera informé, et aura la possibilité, soit de
                            modifier sa commande, soit de l’annuler, auquel cas il sera remboursé du montant de sa
                            commande s’il en a déjà effectué le paiement.
                        </p>
                        <p>

                            2.2 Les photographies, les textes et autres éléments descriptifs illustrant les produits
                            n’entrent pas dans le champ contractuel.
                            Si ces photographies et/ou textes présentaient un caractère erroné, la responsabilité du
                            vendeur ne pourrait pas être engagée de ce
                            chef. Celui-ci s’engage à fournir ses meilleurs efforts pour corriger le plus rapidement
                            possible les erreurs ou omissions après en
                            avoir été informé.</p>
                        <h5>ARTICLE 3. PRIX DE VENTE DES PRODUITS AFFICHES</h5>
                        <p>3.1 Le prix de chaque produit est affiché sur le site (ci-après le « prix d’achat ») en euros
                            et TVA comprise. Ce prix est valable dans les pays pour lesquels la livraison est possible
                            sur le site, et n’inclut pas les frais de préparation et de livraison, également à charge de
                            l’acheteur, ni la déduction de toute remise ou bon d’achat accordé à l’acheteur à titre
                            personnel. Le vendeur se réserve le droit de modifier ses prix à tout moment, mais les
                            produits seront facturés sur la base du prix d’achat en vigueur au moment de la validation
                            de sa commande, et sous réserve des disponibilités.</p>
                        <p>
                            3.2 Lors de la commande, les acheteurs s’engagent à payer, outre le prix d’achat des
                            produits commandés, les frais de préparation et de livraison (ci-après les « frais »). Ces
                            frais varient en fonction du type et de la quantité de produits commandés, et du mode de
                            livraison choisi, et s’entendent TVA comprise. L’acheteur peut consulter le montant de ces
                            frais sur le site en consultant son « Panier », où s’affiche un calcul du montant total
                            correspondant au prix d’achat des produits et aux frais. Le vendeur se réserve le droit de
                            modifier le montant des frais à tout moment, mais les frais seront facturés sur la base des
                            tarifs en vigueur au moment de la validation de la commande, et sous réserve des
                            disponibilités. Ces frais restent dus et ne seront pas remboursés si l’acheteur retourne la
                            totalité ou une partie de la commande en vertu de son droit de rétractation.
                        </p>
                        <p>
                            3.3 Les produits sont uniquement livrés dans les pays pour lesquels le site autorise la
                            livraison. Les acheteurs désirant se faire livrer dans un des pays autorisés mais sur une
                            île de ces pays se verront facturer un supplément de livraison. Toute adresse de livraison
                            erronée est de la responsabilité de l’acheteur et peut donner lieu à des frais
                            supplémentaires. Les délais de livraison indiqués ne sont pas contraignants mais sont donnés
                            à titre purement indicatif. Aucun retard dans la livraison ne pourra donner lieu à
                            résiliation de la commande ou au paiement de dommages au profit de l’acheteur. Le vendeur a
                            le droit d’effectuer des livraisons partielles. En cas de non livraison des biens, les
                            sommes éventuellement payées par l’acheteur seront remboursées sans intérêts ni autre forme
                            d’indemnisation.

                        </p>
                        <h5>
                            ARTICLE 4. COMMANDES
                        </h5>
                        <p>
                            4.1 Pour effectuer une commande, l’acheteur doit remplir le formulaire de commande mis à sa
                            disposition sur le site, sur lequel il fera notamment figurer les informations nécessaires à
                            son identification et notamment ses nom, prénom et adresse de livraison. Le vendeur ne peut
                            être tenu responsable des conséquences de la communication d’informations erronées. Après
                            avoir rempli le formulaire de commande, l’acheteur est invité à clôturer le processus de
                            commande, en cliquant sur « Valider ma commande », par lequel l’acheteur déclare accepter
                            pleinement et sans réserve l’intégralité des présentes CGV, valide définitivement sa
                            commande et s’engage à payer l’intégralité du montant total dû, soit le prix d’achat,
                            augmenté des frais, et diminué de bons d’achat éventuels.
                        </p>
                        <p>
                            4.2 Le vendeur confirmera chaque commande par l’envoi d’un e-mail à l’acheteur à l’adresse
                            e-mail indiquée par l’acheteur lors de son affiliation (ci-après la « confirmation de
                            commande »). Cette confirmation de commande mentionnera notamment la date de commande, le
                            produit commandé, son prix d’achat, augmenté des frais, et les modalités de livraison. Les
                            données enregistrées par le vendeur, ainsi que la confirmation de commande constituent la
                            preuve des relations contractuelles intervenues entre les parties.
                        </p>
                        <p>
                            4.3 Le vendeur se réserve le droit de refuser ou d’annuler toute commande ou toute livraison
                            en cas de litige existant avec l’acheteur, de non paiement total ou partiel d’une commande
                            précédente ou de refus d’autorisation de paiement par carte de crédit des organismes
                            bancaires. Dans ce cas, la responsabilité du vendeur ne pourrait, en aucun cas, être
                            engagée.
                        </p>
                        <h5>
                            ARTICLE 5. PAIEMENT
                        </h5>
                        <p>
                            5.1 Le paiement des achats s’effectue par carte de crédit de type Visa ou Mastercard, par
                            cartes bancaires de type “Maestro” et “Bancontact – Mistercash”, par le système de paiement
                            sécurisé Paypal ou encore par le système de paiement en trois fois, Klarna. Lors de la
                            validation de la commande, l’utilisateur indique le nom qui figure sur sa carte de crédit ou
                            de banque, le numéro de la carte, sa date d’expiration (et le numéro de contrôle dans le cas
                            d’une Visa et/ou Mastercard). Certains organismes bancaires émetteurs peuvent demander une
                            signature supplémentaire de type digipass. La validité du paiement est confirmée ou non
                            après vérification par l’organisme bancaire émetteur. Si le paiement est confirmé, le
                            prélèvement intervient, après la facturation de la commande, selon les modalités convenues
                            avec l’organisme bancaire émetteur de la carte.
                        </p>
                        <p>
                            5.2 Le(s) produit(s) commandé(s) demeure(nt) la propriété du vendeur jusqu’au complet
                            paiement du prix d’achat et des frais indiqués lors de la commande.
                        </p>
                        <h5>
                            ARTICLE 6. LIVRAISONS
                        </h5>
                        <p>
                            6.1 La livraison est effectuée partout en Europe.
                        </p>
                        <p>
                            6.2 La commande est livrée à domicile ou à l’adresse indiquée par l’utilisateur. Les
                            commandes sont prises en charge par l’entreprise de transport et livraison DHL.
                        </p>
                        <p>
                            6.3 Lors de la livraison, une facture de vente est remise à l’utilisateur.
                        </p>
                        <p>
                            6.4 Pour une livraison en Belgique, le vendeur mettra tout en œuvre pour que la commande
                            soit expédiée à l’adresse de livraison endéans les 5 jours ouvrables suivant la validation
                            de la commande et la réception du paiement. Le livreur se présentera à cette adresse entre
                            8h et 18h, les jours ouvrables, et remettra le ou les colis au destinataire ou à toute autre
                            personne présente à l’adresse indiquée. En cas d’absence, un avis sera laissé à l’adresse de
                            livraison. Il appartiendra alors à l’utilisateur de contacter le livreur pour convenir soit
                            d’une nouvelle date de livraison à la même adresse, soit d’une nouvelle date de livraison à
                            une nouvelle adresse, soit d’un enlèvement au bureau de Poste le plus proche. A défaut de se
                            faire dans un délai de 15 jours à dater de l’avis laissé par le livreur ou si l’utilisateur
                            est absent lors de la nouvelle livraison, la commande sera automatiquement retournée au
                            vendeur, qui prendra contact avec l’utilisateur pour programmer une nouvelle livraison de la
                            commande. Dans ce cas, des frais supplémentaires de livraison pourront être facturés à
                            l’utilisateur.
                        </p>
                        <p>
                            UPDATE COVID : DHL met tout en œuvre pour poursuivre ses prestations logistiques, un
                            allongement des délais de livraison reste possible.
                        </p>
                        <p>
                            6.5 Pour une livraison en dehors de la Belgique, le vendeur mettra tout en œuvre pour que la
                            commande soit livrée endéans les 15 jours suivants la validation de la commande et la
                            réception du paiement. Les modalités de livraison seront propres aux services postaux du
                            pays concerné.
                        </p>
                        <p>
                            6.6 Le délai de livraison indiqué ne l’est qu’à titre indicatif. Son irrespect ne créera
                            aucun droit à des dommages et intérêts dans le chef de l’utilisateur.
                        </p>
                        <p>
                            6.7 Le transfert des risques à l’utilisateur se fait au moment où les produits commandés
                            sont mis à la disposition du livreur. La preuve de cette mise à disposition sera
                            matérialisée par le système de contrôle utilisé par le livreur.
                        </p>
                        <p>
                            6.8 Il appartient à l’utilisateur de vérifier les expéditions à l’arrivée et de formuler
                            toutes réserves et réclamations qui apparaîtraient justifiées, voire même de refuser le
                            colis, si celui-ci est susceptible d’avoir été ouvert ou s’il porte des traces manifestes de
                            détérioration. Si il y a quelconque réclamations suite à la réception de la commande, il est
                            de rigueur d’envoyer un mail à l’adresse happy@tinyandpretty.be, sujet “Réclamation de
                            livraison”, avec 3 photos à l’appui, tout ceci endéans les 48h après réception de la
                            commande.
                        </p>
                        <h5>
                            ARTICLE 7. DROIT DE RÉTRACTATION ET MODALITÉS DE RETOUR
                        </h5>
                        <p>
                            7.1 Si le(s) produit(s) acheté(s) sur le site ne convien(nen)t pas à l’utilisateur, celui-ci
                            dispose d’un délai de quatorze (14) jours calendrier, à compter du lendemain du jour de la
                            livraison, pour renoncer à son achat sans pénalité et sans indication de motifs,
                            conformément au code de droit économique.
                            Dans ce délai, l’utilisateur doit notifier au vendeur son intention de faire usage de son
                            droit de rétractation, de la façon suivante :
                        <ul>
                            <li>
                                - Envoyer un mail à happy@tinyandpretty.be
                            </li>
                            <li>
                                - Notifier nom et prénom de l’acheteur
                            </li>
                            <li>
                                - Donner une description détaillée du ou des articles remis
                            </li>
                        </ul>
                        </p>
                        <p>
                            7.2 Le retour au vendeur s’effectuera à l’adresse suivante, sauf instruction contraire
                            communiquée à l’utilisateur, par tout moyen de transport au choix de l’utilisateur, qui doit
                            en conserver la preuve d’expédition.
                            Tiny and Pretty, 9b rue de la Wallonie 4460 Grâce-Hollogne, Belgique
                        </p>
                        <p>
                            7.3 Tous frais et risques liés à l’expédition du retour des articles sont à la charge de
                            l’utilisateur.
                        </p>
                        <p>
                            7.4 En cas d’utilisation de son droit de rétractation par l’utilisateur dans le délai
                            précité et du renvoi des produits au plus tard quatorze (14) jours suivant la communication
                            de sa décision de se rétracter selon les modalités convenues aux paragraphes précédents, le
                            vendeur s’engage à rembourser le prix d’achat à l’utilisateur, pour autant que celui-ci ait
                            déjà été payé, au plus tard à la réception du (des) produit(s) par le vendeur.
                        </p>
                        <p>
                            7.5 En cas de remboursement des produits retournés, le vendeur créditera la carte bancaire
                            ou la carte de crédit utilisée pour le paiement desdits produits d’un montant équivalent au
                            prix d’achat de ceux-ci, diminué du montant du (des) bon(s) d’achat ou remises intervenus
                            lors de la commande. Le remboursement de l’utilisateur s’effectuera selon les modalités
                            convenues avec l’organisme bancaire émetteur de la carte.
                        </p>
                        <p>
                            7.6 L’utilisateur ne pourra faire usage de son droit de rétractation et/ou d’échange si
                            le(s) produit(s) livré(s) a (ont) manifestement fait l’objet d’un usage durable, a (ont) été
                            endommagé(s), comporte(nt) des pièces manquantes.
                        </p>
                        <p>
                            7.7 Le(s) produit(s) doit(vent) impérativement être retourné(s) correctement protégé(s),
                            dans son(leur) emballage(s) d’origine, dans un parfait état de revente (non abîmés,
                            endommagés ou salis par le client) accompagné(s) de tous les accessoires éventuels, notice
                            d’emploi, étiquette(s) du (des) vêtement(s), etc. à l’adresse sous indiquée. A défaut, ils
                            ne pourront être repris ou échangés.
                        </p>
                        <p>
                            7.8 Ne pourront également être repris ou échangés, le(s) produit(s) pour lesquels aucun
                            élément joint ne permet d’identifier l’expéditeur (n° de retour, n° commande, nom, prénom,
                            adresse). Le(s) produit(s) renvoyés mais ne pouvant être acceptés en retour par le vendeur
                            sont tenus à la disposition de l’utilisateur chez le vendeur. L’utilisateur reste tenu d’en
                            payer le prix. En cas de retours anormaux ou abusifs, le vendeur se réserve le droit de
                            refuser une commande ultérieure.
                        </p>
                        <h5>
                            ARTICLE 8. PROTECTION DE LA VIE PRIVÉE À L’ÉGARD DES DONNÉES PERSONNELLES DES UTILISATEURS
                        </h5>
                        <p>
                            8.1. Le vendeur collecte des données à caractère personnel concernant les acheteurs,
                            lesquelles lui sont communiquées sur le site ou par e-mail. Il s’engage à ne pas divulguer
                            ces données à des tiers. Celles-ci sont confidentielles. Elles ne seront utilisées par ses
                            services internes que pour le traitement des commandes, dans le but de renforcer et de
                            personnaliser la communication, notamment par des lettres/emails d’information ainsi que
                            dans le cadre de la personnalisation du site en fonction des préférences constatées des
                            acheteurs, ou pour le suivi de la solvabilité.
                        </p>
                        <p>

                            8.2 Le vendeur ne vend pas, ne commercialise pas, et ne loue pas à des tiers les informations concernant les acheteurs. En cas de cession ou d’utilisation par des tiers de données à caractère personnel, le vendeur s’engage au préalable à informer l’acheteur afin de lui permettre d’exercer son droit d’opposition. Le vendeur peut également fournir des statistiques consolidées relatives à ses acheteurs, à ses ventes, à la structure des échanges et aux informations sur le site à des tiers de confiance, mais ces statistiques ne contiendront aucune donnée personnelle. Le présent article ne pourra toutefois empêcher la cession ni le transfert d’activités à un tiers.
                        </p>
                        <h5>
                            ARTICLE 9. RESPONSABILITÉ
                        </h5>
                        <p>
                            9.1 Le vendeur ne contracte que des obligations de moyen, pour toutes les étapes d’accès au site, de la commande à la livraison ou à des services postérieurs. La responsabilité du vendeur ne pourrait être engagée pour tous les inconvénients ou dommages inhérents à l’utilisation du réseau Internet, notamment une rupture du service, une intrusion extérieure ou la présence de virus informatiques, ou de tout fait pouvant être qualifié de force majeure. En toute hypothèse, la responsabilité du vendeur aux termes des présentes CGV ne pourra excéder une somme égale aux sommes payées ou payables lors de la transaction à l’origine de ladite responsabilité, quelle que soit la cause ou la forme de l’action concernée.
                        </p>
                        <p>
                            9.2 Le vendeur ne peut être tenu pour responsable des cas de force majeure tels un retard dans l’exécution ou pour la non exécution de ses engagements du fait d’événements échappant à son contrôle normal, en ce compris les interruptions de production, difficultés d’approvisionnement ou pénuries de matières premières, main d’œuvre, énergie ou transport, ou retards dans le transport, grèves, lock-out, interruptions de travail ou autres litiges de travail collectifs qui l’affectent ou affectent ses fournisseurs, et cela même si ces événements étaient prévisibles.
                        </p>
                        <h5>
                            ARTICLE 10. PROPRIÉTÉ INTELLECTUELLE
                        </h5>
                        <p>
                            Tous les éléments du site, qu’ils soient visuels ou sonores, y compris la technologie sous-jacente, sont protégés par le droit d’auteur, des marques ou des brevets et plus généralement par la propriété intellectuelle ainsi que par la loi relative aux bases de données. Ils sont la propriété exclusive du vendeur. L’acheteur qui dispose d’un site Internet à titre personnel et qui désire placer, pour un usage personnel, sur son propre site un lien simple renvoyant directement sur le site, doit obligatoirement en demander l’autorisation au vendeur. Il ne s’agira pas dans ce cas d’une convention implicite d’affiliation. En revanche, tout lien hypertexte renvoyant au site et utilisant la technique du framing ou du in-line ou deep linking est formellement interdit. Dans tous les cas, tout lien, même tacitement autorisé, devra être retiré sur simple demande du vendeur.
                        </p>
                        <h5>
                            ARTICLE 11. CONTACT AVEC LE VENDEUR
                        </h5>
                        <p>
                            En cas de questions sur son achat, l’acheteur a la possibilité de rentrer en contact avec le vendeur au moyen du formulaire de contact disponible dans la rubrique « Contact » du site du vendeur ou au moyen de l’adresse e-mail happy@tinyandpretty.be. Le vendeur s’engage à répondre à la demande de l’acheteur dans les plus brefs délais.
                        </p>
                        <h5>
                            ARTICLE 12. NULLITÉ ET INTÉGRALITÉ
                        </h5>
                        <p>
                            Si une ou plusieurs stipulations des CGV sont tenues pour non-valides ou déclarées comme telles en application d’une loi, d’un règlement ou à la suite d’une décision définitive d’une juridiction compétente, les autres stipulations garderont toute leur force et leur portée. Les CGV et le récapitulatif de commande transmis à l’acheteur forment un ensemble contractuel et constituent l’intégralité des relations contractuelles intervenues entre les parties. En cas de contradiction entre ces documents, les CGV prévaudront.

                        </p>
                        <h5>
                            ARTICLE 13. VALIDITÉ DES CGV CI-PRÉSENTES
                        </h5>
                        <p>
                            Les présentes conditions générales de ventes s’appliquent pendant toute la durée de mise en ligne des services offerts par le vendeur.
                        </p>
                        <h5>
                            ARTICLE 14. PREUVE
                        </h5>
                        <p>
                            Les registres informatisés, conservés dans les systèmes informatiques du vendeur et de ses partenaires dans des conditions raisonnables de sécurité, seront considérés comme les preuves des communications, des commandes et des paiements intervenus entre les parties. Les parties acceptent dans le cadre de leurs relations le principe de la preuve électronique (par exemple : e- mail, backups, etc).
                        </p>
                        <h5>
                            ARTICLE 15. MODIFICATIONS
                        </h5>
                        <p>
                            Le vendeur se réserve le droit de modifier les CGV et communiquera la nouvelle version aux acheteurs via le site.
                        </p>
                        <h5>
                            ARTICLE 16. DROIT APPLICABLE ET TRIBUNAUX COMPETENTS
                        </h5>
                        <p>
                            Les présentes CGV sont soumises à la loi belge. En cas de litige, une solution à l’amiable sera recherchée avant toute action judiciaire. A défaut de règlement à l’amiable, les tribunaux de l’arrondissement judiciaire de Liège seront seuls compétents.

                        </p>


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
        return "conditions_generales/index.html.twig";
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

{% block title %}Conditions Générales de Vente{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title\">
                    CONDITIONS GÉNÉRALES DE VENTE
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <h5>ARTICLE 1. DESCRIPTION</h5>
                        <p>1.1 Les présentes Conditions Générales de Vente (ci-après les « CGV ») définissent
                            les droits et obligations des parties dans le cadre de la vente de produits (ci-après les «
                            produits »),
                            via le site internet www.tinyandpretty.com (ci-après dénommé le « site »). Les présentes CGV
                            régissent toute
                            vente de produits réalisée sur le site ainsi que les services en bureau et la prise de
                            contact sur les différents
                            canaux.
                        </p>

                        <p> 1.2 Les CGV sont conclues entre, d’une part, TINY AND PRETTY, filiale d'Infinity Marketing,
                            inscrite à la Banque Carrefour
                            des Entreprises de Belgique sous le numéro 0754.506.184 (TVA BE0754.506.184) dont le siège
                            social est situé au 9b rue de Wallonie,
                            4460 Grâce-Hollogne en Belgique, ci-après dénommée le « vendeur » et, d’autre part, la
                            personne souhaitant consulter le site et y
                            effectuer un achat, ci-après dénommée l’« acheteur ». L’acheteur et le vendeur sont ci-après
                            conjointement dénommés les « parties ».
                            Les parties conviennent que leurs relations seront régies exclusivement par les CG à
                            l’exclusion de toutes conditions préalablement
                            disponibles sur le site.
                        </p>

                        <p> 1.3 Toute commande d’un produit ou services proposé sur le site (ci-après la « commande »)
                            suppose la consultation
                            préalable et l’acceptation expresse des CG par l’acheteur sans toutefois que cette
                            acceptation soit conditionnée par une signature manuscrite
                            de la part de l’acheteur. Conformément aux dispositions de la loi du 9 juillet 2001 fixant
                            certaines règles relatives au cadre juridique pour
                            les signatures électroniques et les services de certification, il est rappelé que la
                            validation du bon de commande constitue une signature
                            électronique qui a, entre les parties, la même valeur qu’une signature manuscrite et vaut
                            preuve de l’intégralité de la commande et de
                            l’exigibilité des sommes dues en exécution de ladite commande.
                        </p>
                        <p>1.4 L’acheteur qui souhaite acheter un produit sur le site déclare avoir la pleine capacité
                            juridique. Toute personne frappée d’incapacité
                            au sens
                            de l’article 1123 et suivants du Code Civil, ne peut en aucune façon acheter sur le site, ou
                            doit le faire par l’intermédiaire, et sous

                            la responsabilité de son représentant légal. Ce représentant légal est tenu de respecter les
                            CGV.
                        </p>
                        <h5>ARTICLE 2. LES PRODUITS EN VENTE</h5>
                        <p>
                            2.1 Les produits proposés à la vente sont ceux qui figurent sur le site, avec une
                            description de leurs caractéristiques essentielles, au jour et au moment précis de la
                            consultation du site par l’acheteur, et dans la limite des stocks disponibles. Le vendeur
                            met tous les moyens raisonnables en œuvre pour afficher la disponibilité des produits en
                            temps réel sur le site mais ne pourrait être tenu responsable si un produit n’était plus
                            disponible pour honorer la commande effectuée par l’acheteur. En cas d’indisponibilité de
                            l’un des produits commandés, l’acheteur en sera informé, et aura la possibilité, soit de
                            modifier sa commande, soit de l’annuler, auquel cas il sera remboursé du montant de sa
                            commande s’il en a déjà effectué le paiement.
                        </p>
                        <p>

                            2.2 Les photographies, les textes et autres éléments descriptifs illustrant les produits
                            n’entrent pas dans le champ contractuel.
                            Si ces photographies et/ou textes présentaient un caractère erroné, la responsabilité du
                            vendeur ne pourrait pas être engagée de ce
                            chef. Celui-ci s’engage à fournir ses meilleurs efforts pour corriger le plus rapidement
                            possible les erreurs ou omissions après en
                            avoir été informé.</p>
                        <h5>ARTICLE 3. PRIX DE VENTE DES PRODUITS AFFICHES</h5>
                        <p>3.1 Le prix de chaque produit est affiché sur le site (ci-après le « prix d’achat ») en euros
                            et TVA comprise. Ce prix est valable dans les pays pour lesquels la livraison est possible
                            sur le site, et n’inclut pas les frais de préparation et de livraison, également à charge de
                            l’acheteur, ni la déduction de toute remise ou bon d’achat accordé à l’acheteur à titre
                            personnel. Le vendeur se réserve le droit de modifier ses prix à tout moment, mais les
                            produits seront facturés sur la base du prix d’achat en vigueur au moment de la validation
                            de sa commande, et sous réserve des disponibilités.</p>
                        <p>
                            3.2 Lors de la commande, les acheteurs s’engagent à payer, outre le prix d’achat des
                            produits commandés, les frais de préparation et de livraison (ci-après les « frais »). Ces
                            frais varient en fonction du type et de la quantité de produits commandés, et du mode de
                            livraison choisi, et s’entendent TVA comprise. L’acheteur peut consulter le montant de ces
                            frais sur le site en consultant son « Panier », où s’affiche un calcul du montant total
                            correspondant au prix d’achat des produits et aux frais. Le vendeur se réserve le droit de
                            modifier le montant des frais à tout moment, mais les frais seront facturés sur la base des
                            tarifs en vigueur au moment de la validation de la commande, et sous réserve des
                            disponibilités. Ces frais restent dus et ne seront pas remboursés si l’acheteur retourne la
                            totalité ou une partie de la commande en vertu de son droit de rétractation.
                        </p>
                        <p>
                            3.3 Les produits sont uniquement livrés dans les pays pour lesquels le site autorise la
                            livraison. Les acheteurs désirant se faire livrer dans un des pays autorisés mais sur une
                            île de ces pays se verront facturer un supplément de livraison. Toute adresse de livraison
                            erronée est de la responsabilité de l’acheteur et peut donner lieu à des frais
                            supplémentaires. Les délais de livraison indiqués ne sont pas contraignants mais sont donnés
                            à titre purement indicatif. Aucun retard dans la livraison ne pourra donner lieu à
                            résiliation de la commande ou au paiement de dommages au profit de l’acheteur. Le vendeur a
                            le droit d’effectuer des livraisons partielles. En cas de non livraison des biens, les
                            sommes éventuellement payées par l’acheteur seront remboursées sans intérêts ni autre forme
                            d’indemnisation.

                        </p>
                        <h5>
                            ARTICLE 4. COMMANDES
                        </h5>
                        <p>
                            4.1 Pour effectuer une commande, l’acheteur doit remplir le formulaire de commande mis à sa
                            disposition sur le site, sur lequel il fera notamment figurer les informations nécessaires à
                            son identification et notamment ses nom, prénom et adresse de livraison. Le vendeur ne peut
                            être tenu responsable des conséquences de la communication d’informations erronées. Après
                            avoir rempli le formulaire de commande, l’acheteur est invité à clôturer le processus de
                            commande, en cliquant sur « Valider ma commande », par lequel l’acheteur déclare accepter
                            pleinement et sans réserve l’intégralité des présentes CGV, valide définitivement sa
                            commande et s’engage à payer l’intégralité du montant total dû, soit le prix d’achat,
                            augmenté des frais, et diminué de bons d’achat éventuels.
                        </p>
                        <p>
                            4.2 Le vendeur confirmera chaque commande par l’envoi d’un e-mail à l’acheteur à l’adresse
                            e-mail indiquée par l’acheteur lors de son affiliation (ci-après la « confirmation de
                            commande »). Cette confirmation de commande mentionnera notamment la date de commande, le
                            produit commandé, son prix d’achat, augmenté des frais, et les modalités de livraison. Les
                            données enregistrées par le vendeur, ainsi que la confirmation de commande constituent la
                            preuve des relations contractuelles intervenues entre les parties.
                        </p>
                        <p>
                            4.3 Le vendeur se réserve le droit de refuser ou d’annuler toute commande ou toute livraison
                            en cas de litige existant avec l’acheteur, de non paiement total ou partiel d’une commande
                            précédente ou de refus d’autorisation de paiement par carte de crédit des organismes
                            bancaires. Dans ce cas, la responsabilité du vendeur ne pourrait, en aucun cas, être
                            engagée.
                        </p>
                        <h5>
                            ARTICLE 5. PAIEMENT
                        </h5>
                        <p>
                            5.1 Le paiement des achats s’effectue par carte de crédit de type Visa ou Mastercard, par
                            cartes bancaires de type “Maestro” et “Bancontact – Mistercash”, par le système de paiement
                            sécurisé Paypal ou encore par le système de paiement en trois fois, Klarna. Lors de la
                            validation de la commande, l’utilisateur indique le nom qui figure sur sa carte de crédit ou
                            de banque, le numéro de la carte, sa date d’expiration (et le numéro de contrôle dans le cas
                            d’une Visa et/ou Mastercard). Certains organismes bancaires émetteurs peuvent demander une
                            signature supplémentaire de type digipass. La validité du paiement est confirmée ou non
                            après vérification par l’organisme bancaire émetteur. Si le paiement est confirmé, le
                            prélèvement intervient, après la facturation de la commande, selon les modalités convenues
                            avec l’organisme bancaire émetteur de la carte.
                        </p>
                        <p>
                            5.2 Le(s) produit(s) commandé(s) demeure(nt) la propriété du vendeur jusqu’au complet
                            paiement du prix d’achat et des frais indiqués lors de la commande.
                        </p>
                        <h5>
                            ARTICLE 6. LIVRAISONS
                        </h5>
                        <p>
                            6.1 La livraison est effectuée partout en Europe.
                        </p>
                        <p>
                            6.2 La commande est livrée à domicile ou à l’adresse indiquée par l’utilisateur. Les
                            commandes sont prises en charge par l’entreprise de transport et livraison DHL.
                        </p>
                        <p>
                            6.3 Lors de la livraison, une facture de vente est remise à l’utilisateur.
                        </p>
                        <p>
                            6.4 Pour une livraison en Belgique, le vendeur mettra tout en œuvre pour que la commande
                            soit expédiée à l’adresse de livraison endéans les 5 jours ouvrables suivant la validation
                            de la commande et la réception du paiement. Le livreur se présentera à cette adresse entre
                            8h et 18h, les jours ouvrables, et remettra le ou les colis au destinataire ou à toute autre
                            personne présente à l’adresse indiquée. En cas d’absence, un avis sera laissé à l’adresse de
                            livraison. Il appartiendra alors à l’utilisateur de contacter le livreur pour convenir soit
                            d’une nouvelle date de livraison à la même adresse, soit d’une nouvelle date de livraison à
                            une nouvelle adresse, soit d’un enlèvement au bureau de Poste le plus proche. A défaut de se
                            faire dans un délai de 15 jours à dater de l’avis laissé par le livreur ou si l’utilisateur
                            est absent lors de la nouvelle livraison, la commande sera automatiquement retournée au
                            vendeur, qui prendra contact avec l’utilisateur pour programmer une nouvelle livraison de la
                            commande. Dans ce cas, des frais supplémentaires de livraison pourront être facturés à
                            l’utilisateur.
                        </p>
                        <p>
                            UPDATE COVID : DHL met tout en œuvre pour poursuivre ses prestations logistiques, un
                            allongement des délais de livraison reste possible.
                        </p>
                        <p>
                            6.5 Pour une livraison en dehors de la Belgique, le vendeur mettra tout en œuvre pour que la
                            commande soit livrée endéans les 15 jours suivants la validation de la commande et la
                            réception du paiement. Les modalités de livraison seront propres aux services postaux du
                            pays concerné.
                        </p>
                        <p>
                            6.6 Le délai de livraison indiqué ne l’est qu’à titre indicatif. Son irrespect ne créera
                            aucun droit à des dommages et intérêts dans le chef de l’utilisateur.
                        </p>
                        <p>
                            6.7 Le transfert des risques à l’utilisateur se fait au moment où les produits commandés
                            sont mis à la disposition du livreur. La preuve de cette mise à disposition sera
                            matérialisée par le système de contrôle utilisé par le livreur.
                        </p>
                        <p>
                            6.8 Il appartient à l’utilisateur de vérifier les expéditions à l’arrivée et de formuler
                            toutes réserves et réclamations qui apparaîtraient justifiées, voire même de refuser le
                            colis, si celui-ci est susceptible d’avoir été ouvert ou s’il porte des traces manifestes de
                            détérioration. Si il y a quelconque réclamations suite à la réception de la commande, il est
                            de rigueur d’envoyer un mail à l’adresse happy@tinyandpretty.be, sujet “Réclamation de
                            livraison”, avec 3 photos à l’appui, tout ceci endéans les 48h après réception de la
                            commande.
                        </p>
                        <h5>
                            ARTICLE 7. DROIT DE RÉTRACTATION ET MODALITÉS DE RETOUR
                        </h5>
                        <p>
                            7.1 Si le(s) produit(s) acheté(s) sur le site ne convien(nen)t pas à l’utilisateur, celui-ci
                            dispose d’un délai de quatorze (14) jours calendrier, à compter du lendemain du jour de la
                            livraison, pour renoncer à son achat sans pénalité et sans indication de motifs,
                            conformément au code de droit économique.
                            Dans ce délai, l’utilisateur doit notifier au vendeur son intention de faire usage de son
                            droit de rétractation, de la façon suivante :
                        <ul>
                            <li>
                                - Envoyer un mail à happy@tinyandpretty.be
                            </li>
                            <li>
                                - Notifier nom et prénom de l’acheteur
                            </li>
                            <li>
                                - Donner une description détaillée du ou des articles remis
                            </li>
                        </ul>
                        </p>
                        <p>
                            7.2 Le retour au vendeur s’effectuera à l’adresse suivante, sauf instruction contraire
                            communiquée à l’utilisateur, par tout moyen de transport au choix de l’utilisateur, qui doit
                            en conserver la preuve d’expédition.
                            Tiny and Pretty, 9b rue de la Wallonie 4460 Grâce-Hollogne, Belgique
                        </p>
                        <p>
                            7.3 Tous frais et risques liés à l’expédition du retour des articles sont à la charge de
                            l’utilisateur.
                        </p>
                        <p>
                            7.4 En cas d’utilisation de son droit de rétractation par l’utilisateur dans le délai
                            précité et du renvoi des produits au plus tard quatorze (14) jours suivant la communication
                            de sa décision de se rétracter selon les modalités convenues aux paragraphes précédents, le
                            vendeur s’engage à rembourser le prix d’achat à l’utilisateur, pour autant que celui-ci ait
                            déjà été payé, au plus tard à la réception du (des) produit(s) par le vendeur.
                        </p>
                        <p>
                            7.5 En cas de remboursement des produits retournés, le vendeur créditera la carte bancaire
                            ou la carte de crédit utilisée pour le paiement desdits produits d’un montant équivalent au
                            prix d’achat de ceux-ci, diminué du montant du (des) bon(s) d’achat ou remises intervenus
                            lors de la commande. Le remboursement de l’utilisateur s’effectuera selon les modalités
                            convenues avec l’organisme bancaire émetteur de la carte.
                        </p>
                        <p>
                            7.6 L’utilisateur ne pourra faire usage de son droit de rétractation et/ou d’échange si
                            le(s) produit(s) livré(s) a (ont) manifestement fait l’objet d’un usage durable, a (ont) été
                            endommagé(s), comporte(nt) des pièces manquantes.
                        </p>
                        <p>
                            7.7 Le(s) produit(s) doit(vent) impérativement être retourné(s) correctement protégé(s),
                            dans son(leur) emballage(s) d’origine, dans un parfait état de revente (non abîmés,
                            endommagés ou salis par le client) accompagné(s) de tous les accessoires éventuels, notice
                            d’emploi, étiquette(s) du (des) vêtement(s), etc. à l’adresse sous indiquée. A défaut, ils
                            ne pourront être repris ou échangés.
                        </p>
                        <p>
                            7.8 Ne pourront également être repris ou échangés, le(s) produit(s) pour lesquels aucun
                            élément joint ne permet d’identifier l’expéditeur (n° de retour, n° commande, nom, prénom,
                            adresse). Le(s) produit(s) renvoyés mais ne pouvant être acceptés en retour par le vendeur
                            sont tenus à la disposition de l’utilisateur chez le vendeur. L’utilisateur reste tenu d’en
                            payer le prix. En cas de retours anormaux ou abusifs, le vendeur se réserve le droit de
                            refuser une commande ultérieure.
                        </p>
                        <h5>
                            ARTICLE 8. PROTECTION DE LA VIE PRIVÉE À L’ÉGARD DES DONNÉES PERSONNELLES DES UTILISATEURS
                        </h5>
                        <p>
                            8.1. Le vendeur collecte des données à caractère personnel concernant les acheteurs,
                            lesquelles lui sont communiquées sur le site ou par e-mail. Il s’engage à ne pas divulguer
                            ces données à des tiers. Celles-ci sont confidentielles. Elles ne seront utilisées par ses
                            services internes que pour le traitement des commandes, dans le but de renforcer et de
                            personnaliser la communication, notamment par des lettres/emails d’information ainsi que
                            dans le cadre de la personnalisation du site en fonction des préférences constatées des
                            acheteurs, ou pour le suivi de la solvabilité.
                        </p>
                        <p>

                            8.2 Le vendeur ne vend pas, ne commercialise pas, et ne loue pas à des tiers les informations concernant les acheteurs. En cas de cession ou d’utilisation par des tiers de données à caractère personnel, le vendeur s’engage au préalable à informer l’acheteur afin de lui permettre d’exercer son droit d’opposition. Le vendeur peut également fournir des statistiques consolidées relatives à ses acheteurs, à ses ventes, à la structure des échanges et aux informations sur le site à des tiers de confiance, mais ces statistiques ne contiendront aucune donnée personnelle. Le présent article ne pourra toutefois empêcher la cession ni le transfert d’activités à un tiers.
                        </p>
                        <h5>
                            ARTICLE 9. RESPONSABILITÉ
                        </h5>
                        <p>
                            9.1 Le vendeur ne contracte que des obligations de moyen, pour toutes les étapes d’accès au site, de la commande à la livraison ou à des services postérieurs. La responsabilité du vendeur ne pourrait être engagée pour tous les inconvénients ou dommages inhérents à l’utilisation du réseau Internet, notamment une rupture du service, une intrusion extérieure ou la présence de virus informatiques, ou de tout fait pouvant être qualifié de force majeure. En toute hypothèse, la responsabilité du vendeur aux termes des présentes CGV ne pourra excéder une somme égale aux sommes payées ou payables lors de la transaction à l’origine de ladite responsabilité, quelle que soit la cause ou la forme de l’action concernée.
                        </p>
                        <p>
                            9.2 Le vendeur ne peut être tenu pour responsable des cas de force majeure tels un retard dans l’exécution ou pour la non exécution de ses engagements du fait d’événements échappant à son contrôle normal, en ce compris les interruptions de production, difficultés d’approvisionnement ou pénuries de matières premières, main d’œuvre, énergie ou transport, ou retards dans le transport, grèves, lock-out, interruptions de travail ou autres litiges de travail collectifs qui l’affectent ou affectent ses fournisseurs, et cela même si ces événements étaient prévisibles.
                        </p>
                        <h5>
                            ARTICLE 10. PROPRIÉTÉ INTELLECTUELLE
                        </h5>
                        <p>
                            Tous les éléments du site, qu’ils soient visuels ou sonores, y compris la technologie sous-jacente, sont protégés par le droit d’auteur, des marques ou des brevets et plus généralement par la propriété intellectuelle ainsi que par la loi relative aux bases de données. Ils sont la propriété exclusive du vendeur. L’acheteur qui dispose d’un site Internet à titre personnel et qui désire placer, pour un usage personnel, sur son propre site un lien simple renvoyant directement sur le site, doit obligatoirement en demander l’autorisation au vendeur. Il ne s’agira pas dans ce cas d’une convention implicite d’affiliation. En revanche, tout lien hypertexte renvoyant au site et utilisant la technique du framing ou du in-line ou deep linking est formellement interdit. Dans tous les cas, tout lien, même tacitement autorisé, devra être retiré sur simple demande du vendeur.
                        </p>
                        <h5>
                            ARTICLE 11. CONTACT AVEC LE VENDEUR
                        </h5>
                        <p>
                            En cas de questions sur son achat, l’acheteur a la possibilité de rentrer en contact avec le vendeur au moyen du formulaire de contact disponible dans la rubrique « Contact » du site du vendeur ou au moyen de l’adresse e-mail happy@tinyandpretty.be. Le vendeur s’engage à répondre à la demande de l’acheteur dans les plus brefs délais.
                        </p>
                        <h5>
                            ARTICLE 12. NULLITÉ ET INTÉGRALITÉ
                        </h5>
                        <p>
                            Si une ou plusieurs stipulations des CGV sont tenues pour non-valides ou déclarées comme telles en application d’une loi, d’un règlement ou à la suite d’une décision définitive d’une juridiction compétente, les autres stipulations garderont toute leur force et leur portée. Les CGV et le récapitulatif de commande transmis à l’acheteur forment un ensemble contractuel et constituent l’intégralité des relations contractuelles intervenues entre les parties. En cas de contradiction entre ces documents, les CGV prévaudront.

                        </p>
                        <h5>
                            ARTICLE 13. VALIDITÉ DES CGV CI-PRÉSENTES
                        </h5>
                        <p>
                            Les présentes conditions générales de ventes s’appliquent pendant toute la durée de mise en ligne des services offerts par le vendeur.
                        </p>
                        <h5>
                            ARTICLE 14. PREUVE
                        </h5>
                        <p>
                            Les registres informatisés, conservés dans les systèmes informatiques du vendeur et de ses partenaires dans des conditions raisonnables de sécurité, seront considérés comme les preuves des communications, des commandes et des paiements intervenus entre les parties. Les parties acceptent dans le cadre de leurs relations le principe de la preuve électronique (par exemple : e- mail, backups, etc).
                        </p>
                        <h5>
                            ARTICLE 15. MODIFICATIONS
                        </h5>
                        <p>
                            Le vendeur se réserve le droit de modifier les CGV et communiquera la nouvelle version aux acheteurs via le site.
                        </p>
                        <h5>
                            ARTICLE 16. DROIT APPLICABLE ET TRIBUNAUX COMPETENTS
                        </h5>
                        <p>
                            Les présentes CGV sont soumises à la loi belge. En cas de litige, une solution à l’amiable sera recherchée avant toute action judiciaire. A défaut de règlement à l’amiable, les tribunaux de l’arrondissement judiciaire de Liège seront seuls compétents.

                        </p>


                    </div>

                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "conditions_generales/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/conditions_generales/index.html.twig");
    }
}
