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

/* account/index.html.twig */
class __TwigTemplate_62e3bce1591188c1ee56f2960fc2ef8dd018356aeda018092983911b7b6f39b3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MON COMPTE";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container-fluid text-center mt-5 mb-5\">
        <div class=\"title_sign\">
            <h1 class=\"mb-3\">MON COMPTE</h1>
        </div>
        <div class=\"intro mt-auto mb-5\">
        <p><span>Bienvenue ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "firstname", [], "any", false, false, false, 11), "html", null, true);
        echo ".</span></p>
        <p><span>C'est dans cet espace que vous allez pouvoir gérer toutes vos infos personelles.</span></p>
        <hr>
        </div>

        <p><span><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
        echo "\"  style=\"color:#a9bf7a;\"> Modifier mon mot de passe</a></span></p>
        <p><span> <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address");
        echo "\"  style=\"color:#a9bf7a;\"> Modifier mes adresses</a></span></p>
        <p><span><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\"  style=\"color:#a9bf7a;\"> Mes commandes</a></span></p>

        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "           <p> Vous êtes un administrateur? <a href=\"/admin\"  style=\"color:#f0cabd;\"> accéder au backoffice</a></p>
        ";
        }
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  88 => 21,  86 => 20,  81 => 18,  77 => 17,  73 => 16,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/templates/account/index.html.twig");
    }
}
