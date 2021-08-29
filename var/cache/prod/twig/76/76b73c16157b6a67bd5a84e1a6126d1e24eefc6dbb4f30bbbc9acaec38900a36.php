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

/* product/girl/productsGirl.html.twig */
class __TwigTemplate_7ba7e6601bf58dfc8427592cf3dc3fd6cfdf1edb1d9246dd6c0038ea391524a9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/girl/productsGirl.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Filles";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <!--Accordion wrapper-->
        <div class=\"accordion md-accordion col-md-3 mt-5 \" id=\"accordionEx\" role=\"tablist\"
             aria-multiselectable=\"true\">

            <!-- Accordion card -->
            <div class=\"card\">

                <!-- Card header -->
                <div class=\"card-header bg-white\" role=\"tab\" id=\"headingOne1\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseOne1\" aria-expanded=\"false\"
                       aria-controls=\"collapseOne1\">
                        <h5 class=\"mb-0 text-black-50\">
                            FILTRE <i class=\"fas fa-angle-down rotate-icon float-right\"></i>
                        </h5>
                    </a>
                </div>
                <div id=\"collapseOne1\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                     data-parent=\"#accordionEx\">
                    <div class=\"card-body\">
        <aside>
            ";
        // line 31
        $this->loadTemplate("product/girl/_filterGirl.html.twig", "product/girl/productsGirl.html.twig", 31)->display(twig_to_array(["form2" => ($context["form2"] ?? null)]));
        // line 32
        echo "        </aside>
                    </div>
                </div>

            </div>
            <!-- Accordion card -->
        </div>


        <div class=\"col-md-9 d-flex flex-wrap\">

            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsGirl"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                <div class=\"col-md-3 \">
                    ";
            // line 45
            $this->loadTemplate("/product/single_product.html.twig", "product/girl/productsGirl.html.twig", 45)->display(twig_to_array(["product" => $context["product"]]));
            // line 46
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
</div>



    ";
    }

    public function getTemplateName()
    {
        return "product/girl/productsGirl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  106 => 46,  104 => 45,  101 => 44,  97 => 43,  84 => 32,  82 => 31,  58 => 9,  54 => 8,  47 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/girl/productsGirl.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/girl/productsGirl.html.twig");
    }
}
