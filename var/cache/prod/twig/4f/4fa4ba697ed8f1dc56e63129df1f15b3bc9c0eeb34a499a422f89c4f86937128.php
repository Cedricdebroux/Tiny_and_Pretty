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

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_235d0c8b491750361f15a84b67bd22521488bbeaa8f6335fff7ad728e5c2d399 extends Template
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
        $context["__internal_88b38364273414abd7c387049d71b26a8d811ff5b2010f3182699964b437cf69"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 1), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 2)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 2), "started", [], "any", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if ((twig_length_filter($this->env, ($context["flash_messages"] ?? null)) > 0)) {
                // line 6
                echo "        <div id=\"flash-messages\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flash_messages"] ?? null));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 8
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 9
                        echo "                    <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo " alert-dismissible fade show\" role=\"alert\">
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        ";
                        // line 11
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                         // line 1
($context["__internal_88b38364273414abd7c387049d71b26a8d811ff5b2010f3182699964b437cf69"] ?? null));
                        // line 11
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  78 => 14,  70 => 11,  68 => 1,  67 => 11,  61 => 9,  56 => 8,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/flash_messages.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/vendor/easycorp/easyadmin-bundle/src/Resources/views/flash_messages.html.twig");
    }
}
