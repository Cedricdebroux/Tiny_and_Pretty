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

/* product/show.html.twig */
class __TwigTemplate_96f665ad34a38df92cdf71da3a03445f1d7b07feb5586ca54554ba268b7bca5b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"container-fluid col-md-5\">
            <img src=\"/uploads/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "illustration", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-7 my-auto aside-description mt-sm-5 mx-sm-auto\">
            <p> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "subtitle", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <h3>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
            <span class=\"product-page-price\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 13) / 100), 2, ",", "."), "html", null, true);
        echo " € </span>
            <p>Taxes incluses</p>
            <p>
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "
                <hr class=\"mx-auto col-md-10 col-lg-10 col-xl-10 pl-0 ml-0\">
            </p>

            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "soldout", [], "any", false, false, false, 20) == false)) {
            // line 21
            echo "                <button
                        class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                        type=\"button\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" style=\"color:#000005;\">AJOUTER AU PANIER</a>
                </button>
            ";
        } else {
            // line 27
            echo "                <button class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\" style=\"background-color:#f0cabd;\">VICTIME DE SON SUCCÈS</button>
            ";
        }
        // line 29
        echo "            <div id=\"accordion\">
                            <button
                                    class=\"btn btn-outline-secondary col-md-10 col-lg-10 col-xl-10 col-sm-12 mt-3 ml-1 mr-1\"
                                    type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#collapseOne\"
                                    aria-expanded=\"false\"
                                    aria-controls=\"collapseOne\"
                                    style=\"color:#000005;\">
                                GUIDE DES TAILLES
                            </button>
                    <div id=\"collapseOne\" class=\"collapse\">
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">BÉBÉ</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Poids</th>
                            </tr>
                            </thead>
                            <tr>
                                <th scope=\"row\">3 MOIS</th>
                                <td>56-60 cm</td>
                                <td>4-5 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 MOIS</th>
                                <td>60-68 cm</td>
                                <td>5-6 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">9 MOIS</th>
                                <td>68-74 cm</td>
                                <td>7-8 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">12 MOIS</th>
                                <td>74 cm</td>
                                <td>9-10 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">18 MOIS</th>
                                <td>80 cm</td>
                                <td>10-11 kg</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">24 MOIS</th>
                                <td>86 cm</td>
                                <td>11-12 kg</td>
                            </tr>
                        </table>
                        <table class=\"table table-bordered table-hover col-md-10 col-lg-10 col-xl-10 col-sm-12 mx-3 my-3\">
                            <thead>
                            <tr>
                                <th scope=\"col\">ENFANT</th>
                                <th scope=\"col\">Taille</th>
                                <th scope=\"col\">Tour de poitrine</th>
                                <th scope=\"col\">Tour de taille</th>
                                <th scope=\"col\">Tour de hanche</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope=\"row\">3 ANS</th>
                                <td>98 cm</td>
                                <td>57 cm</td>
                                <td>53 cm</td>
                                <td>59 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">4 ANS</th>
                                <td>104 cm</td>
                                <td>58 cm</td>
                                <td>54 cm</td>
                                <td>61 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">5 ANS</th>
                                <td>110 cm</td>
                                <td>59 cm</td>
                                <td>54,5 cm</td>
                                <td>62,5 cm</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6 ANS</th>
                                <td>116 cm</td>
                                <td>60 cm</td>
                                <td>55 cm</td>
                                <td>64 cm</td>
                            </tr>
                            </tbody>
                        </table>

            </div>
         </div>
        </div>
    </div>

    <div class=\"container-fluid  bestsellers\">
        <h3 class=\"separator text-center\">BESTSELLERS</h3>
    </div>

    <div class=\"container-fluid col-sm-6 col-md-6 col-lg col-xl col-xxl bestproducts\">
        <div class=\"row\">
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 134
            echo "                <div class=\"col\">
                    ";
            // line 135
            $this->loadTemplate("product/single_product.html.twig", "product/show.html.twig", 135)->display($context);
            // line 136
            echo "                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 138,  236 => 136,  234 => 135,  231 => 134,  214 => 133,  108 => 29,  104 => 27,  98 => 24,  93 => 21,  91 => 20,  84 => 16,  78 => 13,  74 => 12,  70 => 11,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/show.html.twig");
    }
}
