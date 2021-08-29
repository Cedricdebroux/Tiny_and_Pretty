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

/* order/add.html.twig */
class __TwigTemplate_d8d91debee30d6dc501ecf8e870aecbd0e4a5c0deae6d41dddbafd9853330f87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script src=\"https://js.stripe.com/v3/\"></script>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "      <div class=\"container-fluid\">
         <div class=\"row\">
              <div class=\"col-md-6\">
                 <div class=\"title_order\">
 <h1>RÉCAPITULATIF</h1>
                </div>
            <div class=\"text_order\">
    <p>Vérifiez vos infos</p>
    <hr>
            </div>


            <strong>Mon adresse</strong>   <br/>

            <div class=\"form-check mt-4\">
                ";
        // line 26
        echo ($context["delivery"] ?? null);
        echo "
            </div>


            <hr>
           <strong>Mon transporteur</strong>   <br/>
            <div class=\"form-check\">
                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "
                ";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 35), 2, ",", "."), "html", null, true);
        echo "  €
            </div>
        </div>

        <div class=\"col-md-6\">

            <div class=\" recap mb-5\">
                <b>Récapitulatif de ma commande</b>
            </div>


            <div class=\"order-summary\">
                ";
        // line 47
        $context["total"] = null;
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 49
            echo "                    <div class=\"row ";
            if (($context["key"] > 0)) {
                echo " mt-2 ";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "illustration", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "\" height=\"75px\"><br/>

                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo " <br/>
                            <small>
                                ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "subtitle", [], "any", false, false, false, 57), "html", null, true);
            echo " <br/>
                                x ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                             ";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 61)) / 100), 2, ",", "."), "html", null, true);
            echo " €

                        </div>
                    </div>
                    ";
            // line 65
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 65), "price", [], "any", false, false, false, 65) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65)));
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
            <hr>
             <div class=\" recap mb-5\">
        <p> <span> <strong> Sous-total:</strong> ";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " €</span></p>
         <p> <span><strong> Livraison:</strong>";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 71), 2, ",", "."), "html", null, true);
        echo " €</span></p>
           <p><span><strong> Total:</strong> ";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 72)), 2, ",", "."), "html", null, true);
        echo " €</span></p>
            </div>

            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | ";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 75)), 2, ",", "."), "html", null, true);
        echo " € </a>
        </div>
    </div>

";
    }

    // line 81
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "    <script type=\"text/javascript\">

        let stripe = Stripe(\"pk_test_51J1QeFBed74eFDWvv6bGMmlv7EmLWNvL6FCTLwQJ0umzJ8LPm5thA9h6gLJ99FbSEnglWHZDnpVTtQ9QhpqrnkRR002H79SPgk\");

        let checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function () {

            fetch(\"/commandes/create-session/";
        // line 90
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {

                method: \"POST\",

            })

                .then(function (response) {

                    return response.json();

                })

                .then(function (session) {
                    if (session.error === 'order') {
                        window.location.replace('";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
                    } else {
                        return stripe.redirectToCheckout({sessionId: session.id});
                    }
                })

                .then(function (result) {

                    // If redirectToCheckout fails due to a browser or network

                    // error, you should display the localized error message to your

                    // customer using error.message.

                    if (result.error) {

                        alert(result.error.message);

                    }

                })

                .catch(function (error) {

                    console.error(\"Error:\", error);

                });

        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 104,  216 => 90,  206 => 82,  202 => 81,  193 => 75,  187 => 72,  183 => 71,  179 => 70,  174 => 67,  168 => 66,  166 => 65,  159 => 61,  153 => 58,  149 => 57,  144 => 55,  135 => 51,  127 => 49,  122 => 48,  120 => 47,  105 => 35,  101 => 34,  97 => 33,  87 => 26,  70 => 11,  66 => 10,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/order/add.html.twig");
    }
}
