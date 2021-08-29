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

/* product/toy/productsToys.html.twig */
class __TwigTemplate_0ede6a7638bd9981bf9acca35a055e09355138382643df98fc0a39b31373e40d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/toy/productsToys.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos produits!";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 12
        $this->loadTemplate("product/toy/_filterToy.html.twig", "product/toy/productsToys.html.twig", 12)->display(twig_to_array(["form4" => ($context["form4"] ?? null)]));
        // line 13
        echo "            </div>


            <div class=\"col-9\">

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsToy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "                        ";
            $this->loadTemplate("/product/single_product.html.twig", "product/toy/productsToys.html.twig", 19)->display(twig_to_array(["product" => $context["product"]]));
            // line 20
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/toy/productsToys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  79 => 20,  76 => 19,  72 => 18,  65 => 13,  63 => 12,  58 => 9,  54 => 8,  47 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/toy/productsToys.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/toy/productsToys.html.twig");
    }
}
