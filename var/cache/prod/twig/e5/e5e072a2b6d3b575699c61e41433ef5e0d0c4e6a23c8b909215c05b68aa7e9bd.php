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

/* header.html.twig */
class __TwigTemplate_79f404abff0e453eabd1050150a48903af3c0f624e80b72e01ffcab526ff97fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header>

    <nav class=\"navbar navbar-expand-md navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Tiny x Pretty - OFFICIAL LOGO .webp"), "html", null, true);
        echo "\" alt=\"Logo Tiny And Pretty\"
                 class=\"logo-img-header img-fluid\"/>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown px-3\" href=\"\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        BÉBÉ
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" data-boundary=\"overflow\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby"), "html", null, true);
        echo "\"><h3 class=\"ml-5 mt-5 mb-5\">BÉBÉ</h3></a>
                        <div class=\"d-flex  flex-row p-2\">

                            <div class=\"p-2 bd-highlight\">

                                <h4 class=\"categories-nav\">VÊTEMENTS</h4>


                                <a class=\"dropdown-item\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=t-shirt"), "html", null, true);
        echo "\">t-shirt x
                                    sous-pull</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=manteau"), "html", null, true);
        echo "\">manteau x
                                    veste</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=blouse"), "html", null, true);
        echo "\">blouse x
                                    chemise</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=pull"), "html", null, true);
        echo "\">pull x gilet </a>
                                <a class=\"dropdown-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=robe"), "html", null, true);
        echo "\">robe x jupe</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=pantalon"), "html", null, true);
        echo "\">pantalon x
                                    short</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=salopette"), "html", null, true);
        echo "\">salopette x
                                    combinaison</a>
                            </div>

                            <div class=\"p-2 bd-highlight\">
                                <h4 class=\"categories-nav\">ACCESSOIRES</h4>

                                <a class=\"dropdown-item\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=bonnet"), "html", null, true);
        echo "\">bonnet x
                                    écharpe</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=gants"), "html", null, true);
        echo "\">gants x
                                    moufles</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=maillot"), "html", null, true);
        echo "\">maillot de
                                    bain</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=cape"), "html", null, true);
        echo "\">cape de bain</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=bavoir"), "html", null, true);
        echo "\">bavoir</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=accessoires"), "html", null, true);
        echo "\">accessoires
                                    cheveux</a>
                            </div>


                            <div class=\"p-2 bd-highlight\">
                                <h4 class=\"categories-nav\">NUIT X SOUS-VÊTEMENTS</h4>


                                <a class=\"dropdown-item\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=peluche"), "html", null, true);
        echo "\">peluche x
                                    doudou</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=body"), "html", null, true);
        echo "\">body</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=pyjama"), "html", null, true);
        echo "\">pyjama</a>
                                <a class=\"dropdown-item\"
                                   href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=gigoteuse"), "html", null, true);
        echo "\">gigoteuse</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/baby?bebe=nid"), "html", null, true);
        echo "\">nid d'ange</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>

                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown px-3\" href=\"\" id=\"navbarDropdown\"
                               role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                FILLE
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl"), "html", null, true);
        echo "\"><h3 class=\"ml-5 mt-5 mb-5\">FILLE</h3></a>
                                <div class=\"d-flex  flex-row p-2\">
                                    <div class=\"p-2 bd-highlight\">
                                        <h4 class=\"categories-nav\">VÊTEMENTS</h4>

                                        <a class=\"dropdown-item\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=top"), "html", null, true);
        echo "\">top x
                                            t-shirt</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=chemise"), "html", null, true);
        echo "\">chemise
                                            x blouse</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=pull"), "html", null, true);
        echo "\">pull x
                                            gilet</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=robe"), "html", null, true);
        echo "\">robe x
                                            jupe</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=pantalon"), "html", null, true);
        echo "\">pantalon
                                            x jeans</a>
                                        <a class=\"dropdown-item\"
                                           href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=short"), "html", null, true);
        echo "\">short</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=salopette"), "html", null, true);
        echo "\">salopette
                                            x combinaison</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=manteau"), "html", null, true);
        echo "\">manteau
                                            x veste</a>
                                    </div>

                                    <div class=\"p-2 bd-highlight\">
                                        <h4 class=\"categories-nav\">ACCESSOIRES</h4>
                                        <a class=\"dropdown-item\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=bonnet"), "html", null, true);
        echo "\">bonnet
                                            x chapeau</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=foulard"), "html", null, true);
        echo "\">écharpe
                                            x foulard</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=gants"), "html", null, true);
        echo "\">gants x
                                            moufles</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=maillot"), "html", null, true);
        echo "\">maillot
                                            de bain</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=accessoires"), "html", null, true);
        echo "\">accessoires
                                            de plage</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=cheveux"), "html", null, true);
        echo "\">accessoires
                                            cheveux</a>
                                    </div>


                                    <div class=\"p-2 bd-highlight\">
                                        <h4 class=\"categories-nav\">NUIT X SOUS-VÊTEMENTS</h4>

                                        <a class=\"dropdown-item\"
                                           href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=sous-vêtements"), "html", null, true);
        echo "\">sous-vêtements</a>
                                        <a class=\"dropdown-item\"
                                           href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=pyjama"), "html", null, true);
        echo "\">pyjama</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=surpyjama"), "html", null, true);
        echo "\">surpyjama</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/girl?fille=cape"), "html", null, true);
        echo "\">cape x
                                            peignoir</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav mr-auto\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown px-3\" href=\"\"
                                           id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                                           aria-haspopup=\"true\" aria-expanded=\"false\">
                                            GARÇON
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy"), "html", null, true);
        echo "\"><h3 class=\"ml-5 mt-5 mb-5\">GARÇON</h3>
                                            </a>
                                            <div class=\"d-flex  flex-row p-2\">
                                                <div class=\"p-2 bd-highlight\">
                                                    <h4 class=\"categories-nav\">VÊTEMENTS</h4>

                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=t-shirt"), "html", null, true);
        echo "\">t-shirt x
                                                        polo</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=chemise"), "html", null, true);
        echo "\">chemise</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=pull"), "html", null, true);
        echo "\">pull x gilet </a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=pantalon"), "html", null, true);
        echo "\">pantalon x
                                                        jeans</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=short"), "html", null, true);
        echo "\">short</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=salopette"), "html", null, true);
        echo "\">salopette x
                                                        combinaison</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=manteau"), "html", null, true);
        echo "\">manteau x
                                                        veste</a>
                                                </div>

                                                <div class=\"p-2 bd-highlight\">
                                                    <h4 class=\"categories-nav\">ACCESSOIRES</h4>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=bonnet"), "html", null, true);
        echo "\">bonnet x
                                                        chapeau</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=foulard"), "html", null, true);
        echo "\">écharpe x
                                                        foulard</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=gants"), "html", null, true);
        echo "\">gants x
                                                        moufles</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=accessoires"), "html", null, true);
        echo "\">accessoires
                                                        de plage</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=cravate"), "html", null, true);
        echo "\">cravate x noeud
                                                        papillon</a>
                                                </div>


                                                <div class=\"p-2 bd-highlight\">
                                                    <h4 class=\"categories-nav\">NUIT X SOUS-VÊTEMENTS</h4>

                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=sous-vêtements"), "html", null, true);
        echo "\">sous-vêtements</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=pyjama"), "html", null, true);
        echo "\">pyjama</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=surpyjama"), "html", null, true);
        echo "\">surpyjama</a>
                                                    <a class=\"dropdown-item\"
                                                       href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/boy?garcon=cape"), "html", null, true);
        echo "\">cape x
                                                        peignoir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"\">JOUET</a>
                                    </li>
                                    <li class=\"nav-item \">
                                        <a class=\"nav-link px-3\" href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deuxieme_vie");
        echo "\">DEUXIÈME VIE</a>
                                    </li>
                                    <li>

                                        <ul class=\"navbar-nav mr-auto\">
                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown px-3\" href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept");
        echo "\"
                                                   id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">CONCEPT</a>
                                                <ul class=\"dropdown-menu little-drop\"
                                                    aria-labelledby=\"dropdownMenuLink\">
                                                    <li><a class=\"dropdown-item\" href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ateliers");
        echo "\">Nos
                                                            ateliers</a></li>
                                                    <li><a class=\"dropdown-item\"
                                                           href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaires");
        echo "\">Nos partenaires</a>
                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>
                                    </li>

                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tinyworld");
        echo "\">TINY
                                            WORLD</a>
                                    </li>


                                    ";
        // line 241
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 241)) {
            // line 242
            echo "                                    <div class=\"nav-icones justify-content-end\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link px-4\" href=\"";
            // line 244
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">
                                                <img class=\"icones-nav\" src=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.svg"), "html", null, true);
            echo "\">
                                                <p class=\"float-right\">";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246), "firstname", [], "any", false, false, false, 246), "html", null, true);
            echo "</p>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"";
            // line 248
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\">
                                                <div class=\"bag-count\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bag.svg"), "html", null, true);
            echo "\">


                                                    <div class=\"cercle-bag float-right text-center align-items-center\">
                                                        <p class=\"content-bag\"></p>
                                                    </div>

                                                </div>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"\">
                                                <img class=\"icones-nav\" src=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/heart.svg"), "html", null, true);
            echo "\">
                                            </a>

                                            <a class=\"nav-link px-4\" href=\"";
            // line 263
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                                <img class=\"icones-nav\" src=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logout.svg"), "html", null, true);
            echo "\">
                                            </a>
                                        </li>
                                        ";
        } else {
            // line 268
            echo "                                            <li class=\"nav-item\">
                                                <a class=\"nav-link px-4 pl-5\" href=\"";
            // line 269
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.svg"), "html", null, true);
            echo "\">
                                                </a>
                                                <a href=\"\" class=\"nav-link px-4 \">
                                                    <img class=\"icones-nav\" src=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/heart.svg"), "html", null, true);
            echo "\">
                                                </a>


                                                <a href=\"";
            // line 277
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"nav-link px-4\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bag.svg"), "html", null, true);
            echo "\">
                                                </a>
                                            </li>
                                        ";
        }
        // line 282
        echo "
                                    </div>


                            </div>
                        </li>
                    </ul>

                </li>

            </ul>
        </div>
    </nav>

</header>
";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 282,  543 => 278,  539 => 277,  532 => 273,  526 => 270,  522 => 269,  519 => 268,  512 => 264,  508 => 263,  502 => 260,  489 => 250,  484 => 248,  479 => 246,  475 => 245,  471 => 244,  467 => 242,  465 => 241,  457 => 236,  445 => 227,  439 => 224,  431 => 219,  422 => 213,  409 => 203,  404 => 201,  399 => 199,  394 => 197,  382 => 188,  376 => 185,  370 => 182,  364 => 179,  358 => 176,  348 => 169,  342 => 166,  337 => 164,  331 => 161,  326 => 159,  321 => 157,  315 => 154,  305 => 147,  286 => 131,  282 => 130,  278 => 129,  273 => 127,  261 => 118,  256 => 116,  251 => 114,  246 => 112,  241 => 110,  236 => 108,  227 => 102,  222 => 100,  218 => 99,  212 => 96,  207 => 94,  202 => 92,  197 => 90,  192 => 88,  184 => 83,  167 => 69,  163 => 68,  158 => 66,  154 => 65,  149 => 63,  137 => 54,  133 => 53,  129 => 52,  124 => 50,  119 => 48,  114 => 46,  104 => 39,  99 => 37,  95 => 36,  91 => 35,  86 => 33,  81 => 31,  76 => 29,  65 => 21,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/header.html.twig");
    }
}
