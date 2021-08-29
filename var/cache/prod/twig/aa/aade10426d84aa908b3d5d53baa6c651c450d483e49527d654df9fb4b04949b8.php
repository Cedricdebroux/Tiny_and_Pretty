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
class __TwigTemplate_64247767c487bfbf485485c93291be0b3130a224ac53706334966a9bf1787c06 extends Template
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
                        <li class=\"list-footer\"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui sommes-nous ?</a></li>
                        <li class=\"list-footer\"><a href=\"\">The Tiny & Pretty blog</a></li>
                        <li class=\"list-footer\"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditions_generales");
        echo "\">CGV</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-4\">
                    <ul>
                        <li class=\"list-footer\"><h6>Commandes</h6></li>
                        <li class=\"list-footer\"><a href=\"\">Suivi de commande</a></li>
                        <li class=\"list-footer\"><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisons_et_retours");
        echo "\">Livraisons & retours</a></li>
                        <li class=\"list-footer\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_securise");
        echo "\">Paiement sécurisé</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Services</h6></li>
                        <li class=\"list-footer\"><a href=\"\">Devenir partenaire</a></li>
                        <li class=\"list-footer\"><a href=\"\">Cartes cadeaux</a></li>
                        <li class=\"list-footer\"><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cookie");
        echo "\">Cookies</a></li>
                    </ul>
                </div>
                <div class=\"col-md  col-sm-3 ml-3\">
                    <ul>
                        <li class=\"list-footer\"><h6>Besoin d'aide ?</h6></li>
                        <li class=\"list-footer\"><a href=\"\">Guide des tailles</a></li>
                        <li class=\"list-footer\"><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">Foire aux questions</a></li>
                        <li class=\"list-footer\"><a href=\"\">Contactez-nous</a></li>
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
            <p>© 2021 Copyright:  <a class=\"text-reset\" href=\"#\">Infinity</a></p>

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
    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tiny & Pretty";
    }

    // line 41
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    ";
    }

    // line 129
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  284 => 129,  280 => 51,  276 => 50,  272 => 42,  268 => 41,  261 => 32,  255 => 131,  253 => 129,  247 => 126,  243 => 125,  239 => 124,  220 => 108,  216 => 107,  212 => 106,  208 => 105,  204 => 104,  200 => 103,  188 => 94,  178 => 87,  167 => 79,  163 => 78,  153 => 71,  148 => 69,  138 => 62,  126 => 52,  124 => 50,  119 => 47,  117 => 46,  112 => 43,  110 => 41,  103 => 37,  99 => 36,  95 => 35,  89 => 32,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/base.html.twig");
    }
}
