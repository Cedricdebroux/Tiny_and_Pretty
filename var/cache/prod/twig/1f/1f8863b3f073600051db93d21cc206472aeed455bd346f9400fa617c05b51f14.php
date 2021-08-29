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

/* cart/index.html.twig */
class __TwigTemplate_cc6aee60e5311f32035698180582435469351508dfaebb9f0e3b4466db695163 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <div class=\"container-fluid text-center\">
    <div class=\"title_cart\">
    <h1>PANIER</h1>
    <p >Contenu de mon panier.</p>
    ";
        // line 10
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
            // line 11
            echo "        </div>


    <table class=\"table col-md-8 mt-3 ml-5 col-sm-12\">
        <thead>
        <tr>

            <th scope=\"col\">Produit</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 27
            $context["total"] = null;
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "        <tr>
            <th>
                <img src=\"/uploads/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "illustration", [], "any", false, false, false, 31), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "\" height=\"5%\"><br/>

            </th>
            <td>
                ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " <br/>
               <small> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "subtitle", [], "any", false, false, false, 36), "html", null, true);
                echo "</small>
            </td>
            <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer mon produit\">
                </a>
                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41), "html", null, true);
                echo "
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
                <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/add.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter mon produit\">
                </a>
            </td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
            <td>
                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
                </a>
            </td>
        </tr>
            ";
                // line 54
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
    </table>
        <hr>
    <div class=\" validation text-center d-flex flex-column mb-5 pb-5\">
      <div class=\"p-2\" ><b>nombre de produits</b> ";
            // line 60
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["cart"] ?? null)), "html", null, true);
            echo " <br/></div>
        <div class=\"p-2\" > <b>total de mon panier</b> ";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
            echo " €</div>
        <div class=\"p-2\" > <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Valider mon panier</a></div>
        <div class=\"p-2\" > <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" type=\"btn\" class=\"btn text-white validate mt-3 pt-5\">Continuer mes achats</a></div>
    </div>
    ";
        } else {
            // line 66
            echo "    <hr>
    <p class=\"empty\">Votre panier est vide</p>
    ";
        }
        // line 69
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 69,  188 => 66,  182 => 63,  178 => 62,  174 => 61,  170 => 60,  164 => 56,  158 => 55,  156 => 54,  149 => 50,  145 => 49,  140 => 47,  136 => 46,  130 => 43,  126 => 42,  122 => 41,  117 => 39,  113 => 38,  108 => 36,  104 => 35,  95 => 31,  91 => 29,  86 => 28,  84 => 27,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/cart/index.html.twig");
    }
}
