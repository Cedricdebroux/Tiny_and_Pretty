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

/* base.html.twig */
class __TwigTemplate_33281430fdc1f160d08e9b046fb0b09c536f56688737dcdad7d5e427d66761dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\" Boutique de vêtements enfants et bébés en ligne\">
    <meta name=\"author\" content=\"Infinity\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/android-chrome-192x192.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/android-chrome-512x512.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '562460884952867');
        fbq('track', 'PageView');
    </script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
                   src=\"https://www.facebook.com/tr?id=562460884952867&ev=PageView&noscript=1\"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <!-- <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutique.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\">

    ";
        // line 41
        $this->displayBlock('javascript', $context, $blocks);
        // line 43
        echo "
</head>
<body>
";
        // line 46
        $this->loadTemplate("header.html.twig", "base.html.twig", 46)->display($context);
        // line 47
        echo "
<main role=\"main\">

    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "

    <!-- FOOTER -->
    <hr>
    <footer class=\"footer-custom mt-3\">


        <div class=\"container-fluid \">
            <div class=\"row justify-content-between\">
                <div class=\"logo-img  col-md  col-sm-12 col-xs-12 my-auto\">
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Tiny x Pretty - OFFICIAL LOGO .webp"), "html", null, true);
        echo "\" alt=\"Logo Tiny And Pretty\"
                         class=\"img-fluid\"/>
                </div>
                <div class=\"col-md col-sm-3 ml-3\">

                    <ul>
                        <li class=\"list-footer\"><h6>Tiny&Pretty</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui sommes-nous ?</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comingsoon");
        echo "\">The Tiny & Pretty blog</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditions_generales");
        echo "\">CGV</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-4\">
                    <ul>
                        <li class=\"list-footer\"><h6>Commandes</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Suivi de commande</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisons_et_retours");
        echo "\">Livraisons & retours</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_securise");
        echo "\">Paiement sécurisé</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Services</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Devenir partenaire</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Cartes cadeaux</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cookie");
        echo "\">Cookies</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Besoin d'aide ?</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Guide des tailles</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">Foire aux questions</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_user");
        echo "\">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-12 d-flex justify-content-center mx-auto cards-icon\">


            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bancontact.webp"), "html", null, true);
        echo "\" alt=\"Bancontact\" class=\"cards-icon\">
            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/maestro.webp"), "html", null, true);
        echo "\" alt=\"Maestro\" class=\"cards-icon\">
            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mastercard.webp"), "html", null, true);
        echo "\" alt=\"Mastercard\" class=\"cards-icon\">
            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paypal.webp"), "html", null, true);
        echo "\" alt=\"Paypal\" class=\"cards-icon\">
            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/visa.webp"), "html", null, true);
        echo "\" alt=\"Visa\" class=\"cards-icon\">
            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/applepay.webp"), "html", null, true);
        echo "\" alt=\" Apple Pay\" class=\"cards-icon\">

        </div>
        <!-- Copyright -->
        <div class=\"text-center p-4\" >
            <p>© 2021 Copyright:  <a class=\"text-reset \" href=\"#\">Infinity</a></p>

        </div>
        <!-- Copyright -->

        <!-- FOOTER -->

    </footer>

</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/all.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
</body>

";
        // line 129
        $this->displayBlock('script', $context, $blocks);
        // line 131
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tiny & Pretty";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 42
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 129,  328 => 51,  318 => 50,  308 => 42,  298 => 41,  279 => 32,  267 => 131,  265 => 129,  259 => 126,  255 => 125,  251 => 124,  232 => 108,  228 => 107,  224 => 106,  220 => 105,  216 => 104,  212 => 103,  201 => 95,  197 => 94,  187 => 87,  176 => 79,  172 => 78,  162 => 71,  158 => 70,  154 => 69,  144 => 62,  132 => 52,  130 => 50,  125 => 47,  123 => 46,  118 => 43,  116 => 41,  109 => 37,  105 => 36,  101 => 35,  95 => 32,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\" Boutique de vêtements enfants et bébés en ligne\">
    <meta name=\"author\" content=\"Infinity\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('assets/favicon/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('assets/favicon/android-chrome-192x192.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/favicon/favicon-16x16.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/favicon/android-chrome-512x512.png') }}\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/favicon/apple-touch-icon.png') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '562460884952867');
        fbq('track', 'PageView');
    </script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
                   src=\"https://www.facebook.com/tr?id=562460884952867&ev=PageView&noscript=1\"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <title>{% block title %}Tiny & Pretty{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
 <!-- <link href=\"{{ asset('assets/css/all.css') }}\" rel=\"stylesheet\">-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/boutique.css') }}\">

    <link rel=\"stylesheet\" href=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\">

    {% block javascript %}
    {% endblock %}

</head>
<body>
{% include 'header.html.twig' %}

<main role=\"main\">

    {% block content %}
    {% endblock %}


    <!-- FOOTER -->
    <hr>
    <footer class=\"footer-custom mt-3\">


        <div class=\"container-fluid \">
            <div class=\"row justify-content-between\">
                <div class=\"logo-img  col-md  col-sm-12 col-xs-12 my-auto\">
                    <img src=\"{{ asset('assets/img/Tiny x Pretty - OFFICIAL LOGO .webp') }}\" alt=\"Logo Tiny And Pretty\"
                         class=\"img-fluid\"/>
                </div>
                <div class=\"col-md col-sm-3 ml-3\">

                    <ul>
                        <li class=\"list-footer\"><h6>Tiny&Pretty</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\" href=\"{{ path('qui_sommes_nous') }}\">Qui sommes-nous ?</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('comingsoon') }}\">The Tiny & Pretty blog</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('conditions_generales') }}\">CGV</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-4\">
                    <ul>
                        <li class=\"list-footer\"><h6>Commandes</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Suivi de commande</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('livraisons_et_retours') }}\">Livraisons & retours</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('paiement_securise') }}\">Paiement sécurisé</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Services</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Devenir partenaire</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Cartes cadeaux</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('cookie') }}\">Cookies</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Besoin d'aide ?</h6></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"\">Guide des tailles</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('faq') }}\">Foire aux questions</a></li>
                        <li class=\"list-footer\"><a class=\"link_footer\"href=\"{{ path('contact_user') }}\">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-12 d-flex justify-content-center mx-auto cards-icon\">


            <img src=\"{{ asset('assets/img/bancontact.webp') }}\" alt=\"Bancontact\" class=\"cards-icon\">
            <img src=\"{{ asset('assets/img/maestro.webp') }}\" alt=\"Maestro\" class=\"cards-icon\">
            <img src=\"{{ asset('assets/img/mastercard.webp') }}\" alt=\"Mastercard\" class=\"cards-icon\">
            <img src=\"{{ asset('assets/img/paypal.webp') }}\" alt=\"Paypal\" class=\"cards-icon\">
            <img src=\"{{ asset('assets/img/visa.webp') }}\" alt=\"Visa\" class=\"cards-icon\">
            <img src=\"{{ asset('assets/img/applepay.webp') }}\" alt=\" Apple Pay\" class=\"cards-icon\">

        </div>
        <!-- Copyright -->
        <div class=\"text-center p-4\" >
            <p>© 2021 Copyright:  <a class=\"text-reset \" href=\"#\">Infinity</a></p>

        </div>
        <!-- Copyright -->

        <!-- FOOTER -->

    </footer>

</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{ asset ('assets/js/bootstrap.bundle.js') }}\"></script>
<script src=\"{{ asset ('assets/js/all.js') }}\"></script>
<script src=\"{{ asset ('assets/js/script.js') }}\"></script>
</body>

{% block script %}
{% endblock %}

</html>
", "base.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/base.html.twig");
    }
}
