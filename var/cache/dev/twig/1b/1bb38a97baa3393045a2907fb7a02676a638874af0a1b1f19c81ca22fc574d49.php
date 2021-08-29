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

/* cookie/index.html.twig */
class __TwigTemplate_c17ecfe0f950697e290a2498c19b492863223de1f71ea4565f25f6c7fb1223de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cookie/index.html.twig", 1);
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

        echo "Cookie";
        
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
                    COOKIES
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <h2 class=\"title pt-3\">QU’EST CE QU’UN COOKIE ? </h2>
                        <p>Un « cookie » est un fichier installé sur votre terminal, permettant de stocker des
                            informations relatives à votre navigation sur notre site internet (paramètres de langue,
                            temps de connexion, pages visitées, ...). Nous pouvons consulter ces données lors de vos
                            prochaines visites, notamment pour faciliter votre navigation. Les paragraphes ci-dessous
                            ont pour objectif, dans un souci de transparence, de vous donner un recensement exhaustif
                            des cookies utilisés par Tiny & Pretty et de vous proposer une solution pour adapter votre
                            choix.</p>

                        <p>Nous attirons votre attention sur le fait que le partage de l’utilisation de votre terminal
                            avec d’autres personnes est susceptible de modifier le caractère personnalisé de l’action
                            des cookies. </p>
                        <h2 class=\"title pt-3\">COMMENT EXERCER VOTRE CHOIX CONCERNANT LES COOKIES ?</h2>
                        <h5 class=\"subtitle pt-3\">PARAMÈTRES DU NAVIGATEUR ET CONSÉQUENCES DE VOS CHOIX </h5>

                        <p>Plusieurs possibilités vous sont offertes pour gérer les cookies. A tout moment, vous pouvez
                            exprimer et modifier vos souhaits en matière de cookies via la section \"Aide\" de la barre
                            d'outils de votre navigateur. Celle-ci vous indique comment refuser les nouveaux « cookies
                            », comment obtenir un message qui vous signale leur réception ou encore comment désactiver
                            les « cookies » de manière systématique ou selon leur émetteur. Vous pouvez également
                            effacer les cookies manuellement. </p>
                        <p>Vous pouvez également choisir de désactiver ou de supprimer des données similaires utilisées
                            par des logiciels accessoires à votre navigateur, tels que les Flash cookies, en modifiant
                            les paramètres de ces logiciels ou en visitant le site Internet de l'éditeur de ces
                            logiciels. Attention, il est possible que cette configuration de votre navigateur vous
                            empêche d’accéder à certains contenus ou perturbe significativement votre navigation et les
                            services que vous attendez de la part de notre site. Le cas échéant, nous déclinons toute
                            responsabilité pour les effets résultant de l'impossibilité d’utiliser les cookies
                            nécessaires au fonctionnement du site. </p>

                        <h5 class=\"subtitle pt-3\">VOTRE CHOIX SELON VOTRE NAVIGATEUR INTERNET : </h5>

                        <p>Pour la gestion des cookies, chaque navigateur propose un processus de configuration pour
                            sélectionner vos options. Il est décrit dans le menu d'aide de votre navigateur :
                        <ul>
                            <li>
                                Internet Explorer™ : ouvrez le menu « Outils » et sélectionnez « Options internet » ;
                                cliquez sur l'onglet « Confidentialité » puis l’onglet « Avancé » choisissez le niveau
                                souhaité ou suivez ce <a
                                        href=\"https://support.microsoft.com/fr-fr/windows/supprimer-et-g%C3%A9rer-les-cookies-168dab11-0753-043d-7c16-ede5947fc64d\">lien.</a>
                            </li>
                            <li>
                                Firefox™ : ouvrez le menu « Outils » et sélectionnez « Options » ; cliquez sur l'onglet
                                « Vie privée » puis choisissez les options souhaitées ou suivez ce <a
                                        href=\"https://support.mozilla.org/fr/kb/protection-renforcee-contre-pistage-firefox-ordinateur?redirectslug=Activer+et+d%C3%A9sactiver+les+cookies&redirectlocale=fr\">
                                    lien.</a>
                            </li>
                            <li>
                                Chrome™ : ouvrez le menu de configuration et sélectionnez « Options » ; cliquez sur «
                                Options avancées » puis dans la section « Confidentialité », cliquez sur « Paramètres de
                                contenu », et choisissez les options souhaitées ou suivez ce<a
                                        href=\"https://support.google.com/chrome/answer/95647?hl=fr&hlrm=en\"> lien.</a>
                            </li>
                            <li>Safari™ : choisissez « Safari > Préférences » et cliquez sur « Sécurité » ; Dans la
                                section « Accepter les cookies » choisissez les options souhaitées ou suivez ce<a
                                        href=\"https://support.apple.com/fr-be/guide/safari/sfri11471/mac\"> lien.</a>
                            </li>
                            <li>
                                Opera™ : ouvrez le menu « Outils » ou « Réglages » et sélectionnez « Supprimer les
                                données privées »; cliquez sur l'onglet « Options détaillées », puis choisissez les
                                options souhaitées ou suivez ce <a href=\"https://help.opera.com/en/latest/web-preferences/#cookies\">lien.</a>
                            </li>
                        </ul>

                        </p>
                        <h5 class=\"subtitle pt-3\">VOTRE CHOIX SUR MOBILE  :</h5>
                        <ul>
                            <li>
                                Pour spécifier si Safari™ accepte ou non des cookies, allez dans l’écran principal et choisissez « Réglages > Safari ». Ensuite, touchez « Accepter les cookies » et choisissez « Jamais », « Des sites visités » ou « Toujours ».
                            </li>
                            <li>
                                Pour effacer tous les cookies dans Safari, allez dans l’écran principal puis choisissez « Réglages > Safari » et touchez « Effacer les cookies ».
                            </li>
                            <li>
                                Pour supprimer les cookies sur Androïd, allez dans « Menu » puis sur « Paramètres » et cliquez sur « Effacer tous les cookies ».
                            </li>
                        </ul>


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
        return "cookie/index.html.twig";
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

{% block title %}Cookie{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"title pt-5\">
                    COOKIES
                </h1>
                <div class=\"col-10 text-left pt-5\">
                    <div class=\"presentation\">
                        <h2 class=\"title pt-3\">QU’EST CE QU’UN COOKIE ? </h2>
                        <p>Un « cookie » est un fichier installé sur votre terminal, permettant de stocker des
                            informations relatives à votre navigation sur notre site internet (paramètres de langue,
                            temps de connexion, pages visitées, ...). Nous pouvons consulter ces données lors de vos
                            prochaines visites, notamment pour faciliter votre navigation. Les paragraphes ci-dessous
                            ont pour objectif, dans un souci de transparence, de vous donner un recensement exhaustif
                            des cookies utilisés par Tiny & Pretty et de vous proposer une solution pour adapter votre
                            choix.</p>

                        <p>Nous attirons votre attention sur le fait que le partage de l’utilisation de votre terminal
                            avec d’autres personnes est susceptible de modifier le caractère personnalisé de l’action
                            des cookies. </p>
                        <h2 class=\"title pt-3\">COMMENT EXERCER VOTRE CHOIX CONCERNANT LES COOKIES ?</h2>
                        <h5 class=\"subtitle pt-3\">PARAMÈTRES DU NAVIGATEUR ET CONSÉQUENCES DE VOS CHOIX </h5>

                        <p>Plusieurs possibilités vous sont offertes pour gérer les cookies. A tout moment, vous pouvez
                            exprimer et modifier vos souhaits en matière de cookies via la section \"Aide\" de la barre
                            d'outils de votre navigateur. Celle-ci vous indique comment refuser les nouveaux « cookies
                            », comment obtenir un message qui vous signale leur réception ou encore comment désactiver
                            les « cookies » de manière systématique ou selon leur émetteur. Vous pouvez également
                            effacer les cookies manuellement. </p>
                        <p>Vous pouvez également choisir de désactiver ou de supprimer des données similaires utilisées
                            par des logiciels accessoires à votre navigateur, tels que les Flash cookies, en modifiant
                            les paramètres de ces logiciels ou en visitant le site Internet de l'éditeur de ces
                            logiciels. Attention, il est possible que cette configuration de votre navigateur vous
                            empêche d’accéder à certains contenus ou perturbe significativement votre navigation et les
                            services que vous attendez de la part de notre site. Le cas échéant, nous déclinons toute
                            responsabilité pour les effets résultant de l'impossibilité d’utiliser les cookies
                            nécessaires au fonctionnement du site. </p>

                        <h5 class=\"subtitle pt-3\">VOTRE CHOIX SELON VOTRE NAVIGATEUR INTERNET : </h5>

                        <p>Pour la gestion des cookies, chaque navigateur propose un processus de configuration pour
                            sélectionner vos options. Il est décrit dans le menu d'aide de votre navigateur :
                        <ul>
                            <li>
                                Internet Explorer™ : ouvrez le menu « Outils » et sélectionnez « Options internet » ;
                                cliquez sur l'onglet « Confidentialité » puis l’onglet « Avancé » choisissez le niveau
                                souhaité ou suivez ce <a
                                        href=\"https://support.microsoft.com/fr-fr/windows/supprimer-et-g%C3%A9rer-les-cookies-168dab11-0753-043d-7c16-ede5947fc64d\">lien.</a>
                            </li>
                            <li>
                                Firefox™ : ouvrez le menu « Outils » et sélectionnez « Options » ; cliquez sur l'onglet
                                « Vie privée » puis choisissez les options souhaitées ou suivez ce <a
                                        href=\"https://support.mozilla.org/fr/kb/protection-renforcee-contre-pistage-firefox-ordinateur?redirectslug=Activer+et+d%C3%A9sactiver+les+cookies&redirectlocale=fr\">
                                    lien.</a>
                            </li>
                            <li>
                                Chrome™ : ouvrez le menu de configuration et sélectionnez « Options » ; cliquez sur «
                                Options avancées » puis dans la section « Confidentialité », cliquez sur « Paramètres de
                                contenu », et choisissez les options souhaitées ou suivez ce<a
                                        href=\"https://support.google.com/chrome/answer/95647?hl=fr&hlrm=en\"> lien.</a>
                            </li>
                            <li>Safari™ : choisissez « Safari > Préférences » et cliquez sur « Sécurité » ; Dans la
                                section « Accepter les cookies » choisissez les options souhaitées ou suivez ce<a
                                        href=\"https://support.apple.com/fr-be/guide/safari/sfri11471/mac\"> lien.</a>
                            </li>
                            <li>
                                Opera™ : ouvrez le menu « Outils » ou « Réglages » et sélectionnez « Supprimer les
                                données privées »; cliquez sur l'onglet « Options détaillées », puis choisissez les
                                options souhaitées ou suivez ce <a href=\"https://help.opera.com/en/latest/web-preferences/#cookies\">lien.</a>
                            </li>
                        </ul>

                        </p>
                        <h5 class=\"subtitle pt-3\">VOTRE CHOIX SUR MOBILE  :</h5>
                        <ul>
                            <li>
                                Pour spécifier si Safari™ accepte ou non des cookies, allez dans l’écran principal et choisissez « Réglages > Safari ». Ensuite, touchez « Accepter les cookies » et choisissez « Jamais », « Des sites visités » ou « Toujours ».
                            </li>
                            <li>
                                Pour effacer tous les cookies dans Safari, allez dans l’écran principal puis choisissez « Réglages > Safari » et touchez « Effacer les cookies ».
                            </li>
                            <li>
                                Pour supprimer les cookies sur Androïd, allez dans « Menu » puis sur « Paramètres » et cliquez sur « Effacer tous les cookies ».
                            </li>
                        </ul>


                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "cookie/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/cookie/index.html.twig");
    }
}
