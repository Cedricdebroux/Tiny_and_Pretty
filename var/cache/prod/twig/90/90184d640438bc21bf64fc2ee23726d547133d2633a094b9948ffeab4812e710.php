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

/* product/boys/productsBoys.html.twig */
class __TwigTemplate_709a014c7e15a4477f29234c4c7d9441eac82e91f6c5b284b584e8e406773ed4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/boys/productsBoys.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Garçons";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"container-fluid\">
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
                    <!-- Card body -->
                    <div id=\"collapseOne1\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                         data-parent=\"#accordionEx\">
                        <div class=\"card-body\">
                            <aside class=\"\">
                                ";
        // line 31
        $this->loadTemplate("/product/boys/_filterBoy.html.twig", "product/boys/productsBoys.html.twig", 31)->display(twig_to_array(["form" => ($context["form"] ?? null)]));
        // line 32
        echo "                            </aside>
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->
            </div>


            <div class=\"col-md-9 d-flex flex-wrap\">

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsBoys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                    <div class=\"col-md-3 \">
                        ";
            // line 45
            $this->loadTemplate("/product/single_product.html.twig", "product/boys/productsBoys.html.twig", 45)->display(twig_to_array(["product" => $context["product"]]));
            // line 46
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "product/boys/productsBoys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  107 => 46,  105 => 45,  102 => 44,  98 => 43,  85 => 32,  83 => 31,  58 => 8,  54 => 7,  47 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/boys/productsBoys.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/boys/productsBoys.html.twig");
    }
}
