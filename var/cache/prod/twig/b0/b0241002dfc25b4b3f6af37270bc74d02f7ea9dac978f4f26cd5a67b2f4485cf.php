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

/* /product/baby/_filterBaby.html.twig */
class __TwigTemplate_534c9d06509ab1d8e7036d4a424e4315ff215f2e415179de333c53efe86b050e extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form3"] ?? null), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form3"] ?? null), "bebe", [], "any", false, false, false, 2), 'row');
        echo "
<h4>Bébé</h4>
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form3"] ?? null), "babies", [], "any", false, false, false, 4), 'row');
        echo "


<h4>Prix</h4>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form3"] ?? null), "min", [], "any", false, false, false, 10), 'row');
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form3"] ?? null), "max", [], "any", false, false, false, 13), 'row');
        echo "
    </div>
</div>

<button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form3"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "/product/baby/_filterBaby.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  61 => 13,  55 => 10,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/product/baby/_filterBaby.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/product/baby/_filterBaby.html.twig");
    }
}
