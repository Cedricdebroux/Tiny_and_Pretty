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
class __TwigTemplate_d5c5d8c8fe71a43e462610895afff21ff8613bdf8c27cad9865d4292fd2ea726 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>

    <nav class=\"navbar navbar-expand-md navbar-expand-lg navbar-light bg-light justify-content-between static-top\">
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
            <ul class=\"navbar-nav  ml-auto ms-auto  mt-2 mt-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link inactive dropdown px-3\" href=\"\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        LA MODE
                    </a>
                    <div class=\"dropdown-menu text-left\" aria-labelledby=\"navbarDropdown\" data-boundary=\"overflow\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode"), "html", null, true);
        echo "\"><h5 class=\"text-center mt-5 mb-5\">LA MODE</h5></a>
                        <div class=\"d-flex  flex-row p-2\">

                            <div class=\"p-2 bd-highlight ml-5\">

                                <h5 class=\"categories-nav \">VÊTEMENTS</h5>


                                <a class=\"dropdown-item\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=hauts"), "html", null, true);
        echo "\">Hauts</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=bas"), "html", null, true);
        echo "\">Bas</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=robe"), "html", null, true);
        echo "\">Robe</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=combinaison"), "html", null, true);
        echo "\">Combinaisons </a>
                                <a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=Bodies"), "html", null, true);
        echo "\">Bodies</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=pyjama"), "html", null, true);
        echo "\">Pyjamas</a>
                            </div>

                            <div class=\"p-2 bd-highlight ml-5\">
                                <h5 class=\"categories-nav\">ACCESSOIRES</h5>

                                <a class=\"dropdown-item\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=chapeaux"), "html", null, true);
        echo "\">Chapeaux</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=bonnets"), "html", null, true);
        echo "\">Bonnets</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/Mode?mode=bandeaux"), "html", null, true);
        echo "\">Bandeaux</a>
                            </div>



                            </div>
                    </div>
                </li>
                <li>

                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown px-3\" href=\"\" id=\"navbarDropdown\"
                               role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                             À LA MAISON
                            </a>
                            <div class=\"dropdown-menu text-left\" aria-labelledby=\"navbarDropdown\">
                                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison"), "html", null, true);
        echo "\"><h5 class=\"ml-3 mt-5 mb-5\">À LA MAISON</h5></a>
                                <div class=\"d-flex  flex-row p-2\">
                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3 \">À TABLE ! </h5>

                                        <a class=\"dropdown-item\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison?maison=bavoirs"), "html", null, true);
        echo "\">Bavoirs</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison?fille=vaisselle"), "html", null, true);
        echo "\">Vaisselle</a>

                                    </div>

                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3\">LA CHAMBRE</h5>
                                        <a class=\"dropdown-item\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison?maison=veilleuse"), "html", null, true);
        echo "\">Veilleuse</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison?maison=mobile"), "html", null, true);
        echo "\">Mobile musical</a>
                                    </div>
                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3\">LE BAIN</h5>
                                        <a class=\"dropdown-item\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath("/maison?maison=cape"), "html", null, true);
        echo "\">Cape de bain</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
";
        // line 97
        echo "
";
        // line 117
        echo "
";
        // line 136
        echo "

";
        // line 140
        echo "
";
        // line 154
        echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"\">LES JOUETS</a>
                                    </li>
                        ";
        // line 162
        echo "                                    <li>

                                        <ul class=\"navbar-nav mr-auto\">
                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown px-3\" href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept");
        echo "\"
                                                   id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">CONCEPT</a>
                                                <ul class=\"dropdown-menu little-drop\"
                                                    aria-labelledby=\"dropdownMenuLink\">
                                                    <li><a class=\"dropdown-item\" href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ateliers");
        echo "\">Nos
                                                            ateliers</a></li>
                                                    <li><a class=\"dropdown-item\"
                                                           href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaires");
        echo "\">Nos partenaires</a>
                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>
                                    </li>
";
        // line 187
        echo "
                                    ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188)) {
            // line 189
            echo "                                    <div class=\"nav-icones justify-content-end\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link px-4\" href=\"";
            // line 191
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">
                                                <img class=\"icones-nav\" src=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.svg"), "html", null, true);
            echo "\">
                                                <p class=\"float-right\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "firstname", [], "any", false, false, false, 193), "html", null, true);
            echo "</p>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"";
            // line 195
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\">
                                                <div class=\"bag-count\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bag.svg"), "html", null, true);
            echo "\">


                                                    <div class=\"cercle-bag float-right text-center align-items-center\">
                                                        <p class=\"content-bag\"></p>
                                                    </div>

                                                </div>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"\">
                                                <img class=\"icones-nav\" src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/heart.svg"), "html", null, true);
            echo "\">
                                            </a>

                                            <a class=\"nav-link px-4\" href=\"";
            // line 210
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                                <img class=\"icones-nav\" src=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logout.svg"), "html", null, true);
            echo "\">
                                            </a>
                                        </li>
                                        ";
        } else {
            // line 215
            echo "                                            <li class=\"nav-item\">
                                                <a class=\"nav-link px-4 pl-5\" href=\"";
            // line 216
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.svg"), "html", null, true);
            echo "\">
                                                </a>
                                                <a href=\"\" class=\"nav-link px-4 \">
                                                    <img class=\"icones-nav\" src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/heart.svg"), "html", null, true);
            echo "\">
                                                </a>


                                                <a href=\"";
            // line 224
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"nav-link px-4\">
                                                    <img class=\"icones-nav\" src=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bag.svg"), "html", null, true);
            echo "\">
                                                </a>
                                            </li>
                                        ";
        }
        // line 229
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  317 => 229,  310 => 225,  306 => 224,  299 => 220,  293 => 217,  289 => 216,  286 => 215,  279 => 211,  275 => 210,  269 => 207,  256 => 197,  251 => 195,  246 => 193,  242 => 192,  238 => 191,  234 => 189,  232 => 188,  229 => 187,  219 => 174,  213 => 171,  205 => 166,  199 => 162,  194 => 154,  191 => 140,  187 => 136,  184 => 117,  181 => 97,  171 => 76,  164 => 72,  160 => 71,  151 => 65,  147 => 64,  139 => 59,  119 => 42,  115 => 41,  111 => 40,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  71 => 21,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>

    <nav class=\"navbar navbar-expand-md navbar-expand-lg navbar-light bg-light justify-content-between static-top\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
            <img src=\"{{ asset('assets/img/Tiny x Pretty - OFFICIAL LOGO .webp') }}\" alt=\"Logo Tiny And Pretty\"
                 class=\"logo-img-header img-fluid\"/>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  ml-auto ms-auto  mt-2 mt-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link inactive dropdown px-3\" href=\"\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        LA MODE
                    </a>
                    <div class=\"dropdown-menu text-left\" aria-labelledby=\"navbarDropdown\" data-boundary=\"overflow\">
                        <a href=\"{{ relative_path('/Mode') }}\"><h5 class=\"text-center mt-5 mb-5\">LA MODE</h5></a>
                        <div class=\"d-flex  flex-row p-2\">

                            <div class=\"p-2 bd-highlight ml-5\">

                                <h5 class=\"categories-nav \">VÊTEMENTS</h5>


                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=hauts') }}\">Hauts</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=bas') }}\">Bas</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=robe') }}\">Robe</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=combinaison') }}\">Combinaisons </a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=Bodies') }}\">Bodies</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=pyjama') }}\">Pyjamas</a>
                            </div>

                            <div class=\"p-2 bd-highlight ml-5\">
                                <h5 class=\"categories-nav\">ACCESSOIRES</h5>

                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=chapeaux') }}\">Chapeaux</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=bonnets') }}\">Bonnets</a>
                                <a class=\"dropdown-item\" href=\"{{ relative_path('/Mode?mode=bandeaux') }}\">Bandeaux</a>
                            </div>



                            </div>
                    </div>
                </li>
                <li>

                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown px-3\" href=\"\" id=\"navbarDropdown\"
                               role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                             À LA MAISON
                            </a>
                            <div class=\"dropdown-menu text-left\" aria-labelledby=\"navbarDropdown\">
                                <a href=\"{{ relative_path('/maison') }}\"><h5 class=\"ml-3 mt-5 mb-5\">À LA MAISON</h5></a>
                                <div class=\"d-flex  flex-row p-2\">
                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3 \">À TABLE ! </h5>

                                        <a class=\"dropdown-item\" href=\"{{ relative_path('/maison?maison=bavoirs') }}\">Bavoirs</a>
                                        <a class=\"dropdown-item\" href=\"{{ relative_path('/maison?fille=vaisselle') }}\">Vaisselle</a>

                                    </div>

                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3\">LA CHAMBRE</h5>
                                        <a class=\"dropdown-item\" href=\"{{ relative_path('/maison?maison=veilleuse') }}\">Veilleuse</a>
                                        <a class=\"dropdown-item\" href=\"{{ relative_path('/maison?maison=mobile') }}\">Mobile musical</a>
                                    </div>
                                    <div class=\"p-2 bd-highlight\">
                                        <h5 class=\"categories-nav pl-3\">LE BAIN</h5>
                                        <a class=\"dropdown-item\" href=\"{{ relative_path('/maison?maison=cape') }}\">Cape de bain</a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
{#                            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">#}
{#                                <ul class=\"navbar-nav mr-auto\">#}
{#                                    <li class=\"nav-item dropdown\">#}
{#                                        <a class=\"nav-link dropdown px-3\" href=\"\"#}
{#                                           id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"#}
{#                                           aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                            GARÇON#}
{#                                        </a>#}
{#                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">#}
{#                                            <a href=\"{{ relative_path('/boy') }}\"><h3 class=\"ml-5 mt-5 mb-5\">GARÇON</h3>#}
{#                                            </a>#}
{#                                            <div class=\"d-flex  flex-row p-2\">#}
{#                                                <div class=\"p-2 bd-highlight\">#}
{#                                                    <h4 class=\"categories-nav\">VÊTEMENTS</h4>#}

{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=t-shirt') }}\">t-shirt x#}
{#                                                        polo</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=chemise') }}\">chemise</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=pull') }}\">pull x gilet </a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=pantalon') }}\">pantalon x#}
{#                                                        jeans</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=short') }}\">short</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=salopette') }}\">salopette x#}
{#                                                        combinaison</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=manteau') }}\">manteau x#}
{#                                                        veste</a>#}
{#                                                </div>#}

{#                                                <div class=\"p-2 bd-highlight\">#}
{#                                                    <h4 class=\"categories-nav\">ACCESSOIRES</h4>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=bonnet') }}\">bonnet x#}
{#                                                        chapeau</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=foulard') }}\">écharpe x#}
{#                                                        foulard</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=gants') }}\">gants x#}
{#                                                        moufles</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=accessoires') }}\">accessoires#}
{#                                                        de plage</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=cravate') }}\">cravate x noeud#}
{#                                                        papillon</a>#}
{#                                                </div>#}


{#                                                <div class=\"p-2 bd-highlight\">#}
{#                                                    <h4 class=\"categories-nav\">NUIT X SOUS-VÊTEMENTS</h4>#}

{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=sous-vêtements') }}\">sous-vêtements</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=pyjama') }}\">pyjama</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=surpyjama') }}\">surpyjama</a>#}
{#                                                    <a class=\"dropdown-item\"#}
{#                                                       href=\"{{ relative_path('/boy?garcon=cape') }}\">cape x#}
{#                                                        peignoir</a>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </li>#}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"\">LES JOUETS</a>
                                    </li>
                        {#
                                    <li class=\"nav-item \">
                                        <a class=\"nav-link px-3\" href=\"{{ path('deuxieme_vie') }}\">DEUXIÈME VIE</a>
                                    </li>
                        #}
                                    <li>

                                        <ul class=\"navbar-nav mr-auto\">
                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown px-3\" href=\"{{ path('concept') }}\"
                                                   id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">CONCEPT</a>
                                                <ul class=\"dropdown-menu little-drop\"
                                                    aria-labelledby=\"dropdownMenuLink\">
                                                    <li><a class=\"dropdown-item\" href=\"{{ path('ateliers') }}\">Nos
                                                            ateliers</a></li>
                                                    <li><a class=\"dropdown-item\"
                                                           href=\"{{ path('partenaires') }}\">Nos partenaires</a>
                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>
                                    </li>
{#
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"{{ path('tinyworld') }}\">TINY
                                            WORLD</a>
                                    </li>
#}

                                    {% if app.user %}
                                    <div class=\"nav-icones justify-content-end\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link px-4\" href=\"{{ path('account') }}\">
                                                <img class=\"icones-nav\" src=\"{{ asset('assets/img/user.svg') }}\">
                                                <p class=\"float-right\">{{ app.user.firstname }}</p>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"{{ path('cart') }}\">
                                                <div class=\"bag-count\">
                                                    <img class=\"icones-nav\" src=\"{{ asset('assets/img/bag.svg') }}\">


                                                    <div class=\"cercle-bag float-right text-center align-items-center\">
                                                        <p class=\"content-bag\"></p>
                                                    </div>

                                                </div>
                                            </a>
                                            <a class=\"nav-link px-4\" href=\"\">
                                                <img class=\"icones-nav\" src=\"{{ asset('assets/img/heart.svg') }}\">
                                            </a>

                                            <a class=\"nav-link px-4\" href=\"{{ path('app_logout') }}\">
                                                <img class=\"icones-nav\" src=\"{{ asset('assets/img/logout.svg') }}\">
                                            </a>
                                        </li>
                                        {% else %}
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link px-4 pl-5\" href=\"{{ path('app_login') }}\">
                                                    <img class=\"icones-nav\" src=\"{{ asset('assets/img/user.svg') }}\">
                                                </a>
                                                <a href=\"\" class=\"nav-link px-4 \">
                                                    <img class=\"icones-nav\" src=\"{{ asset('assets/img/heart.svg') }}\">
                                                </a>


                                                <a href=\"{{ path('cart') }}\" class=\"nav-link px-4\">
                                                    <img class=\"icones-nav\" src=\"{{ asset('assets/img/bag.svg') }}\">
                                                </a>
                                            </li>
                                        {% endif %}

                                    </div>


                            </div>
                        </li>
                    </ul>

                </li>

            </ul>
        </div>
    </nav>

</header>
", "header.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/header.html.twig");
    }
}
