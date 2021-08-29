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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_9affbb3484c527b9c0fce2b8a40eab02d92b20c444599bebf3949e271d58184f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_a9df0f72c03b2ca4df28286a4ebebc5f89eb9e7f30d07c94e8bb57615b2ad73d"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 19
        $context["has_batch_actions"] = (twig_length_filter($this->env, ($context["batch_actions"] ?? null)) > 0);
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => "index"], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [0 => "index"], "method", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
($context["__internal_a9df0f72c03b2ca4df28286a4ebebc5f89eb9e7f30d07c94e8bb57615b2ad73d"] ?? null))));
        $___internal_8c12c12281d7f1ba98b1e4c568846d320babbd6185535931f2700d9ffe6fed9a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_8c12c12281d7f1ba98b1e4c568846d320babbd6185535931f2700d9ffe6fed9a_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
            // line 22
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 23
            $this->displayBlock('filters', $context, $blocks);
            // line 36
            echo "        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('global_actions', $context, $blocks);
        // line 46
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 23
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24), "filters", [], "array", true, true, false, 24)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["filters"] ?? null) : null), [])) : ([])));
        // line 25
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 26), "includeReferrer", [], "method", false, false, false, 26), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 27), "translationParameters", [], "any", false, false, false, 27), "EasyAdminBundle"), "html", null, true);
        if (($context["applied_filters"] ?? null)) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 28
        echo "                    </a>
                    ";
        // line 29
        if (($context["applied_filters"] ?? null)) {
            // line 30
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 34
        echo "                </div>
            ";
    }

    // line 39
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        <div class=\"global-actions\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 42
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 42), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    ";
    }

    // line 46
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 48
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 50
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 50), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </div>
        ";
        }
        // line 54
        echo "    ";
    }

    // line 57
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "get", [0 => "sort"], "method", false, false, false, 59)));
        // line 60
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "get", [0 => "sort"], "method", false, false, false, 60));
        // line 61
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 62
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, ($context["entities"] ?? null)) != 0);
        // line 63
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 63), "isSearchEnabled", [], "any", false, false, false, 63);
        // line 64
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, ($context["filters"] ?? null)) > 0);
        // line 65
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, ($context["entities"] ?? null));
        // line 66
        echo "
    <table class=\"table datagrid ";
        // line 67
        echo ((twig_test_empty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 68
        if ((($context["num_results"] ?? null) > 0)) {
            // line 69
            echo "            <thead>
        ";
            // line 70
            $this->displayBlock('table_head', $context, $blocks);
            // line 103
            echo "        </thead>
        ";
        }
        // line 105
        echo "
        <tbody>
        ";
        // line 107
        $this->displayBlock('table_body', $context, $blocks);
        // line 186
        echo "        </tbody>
    </table>

    ";
        // line 189
        if ((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) {
            // line 190
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 191
            $this->displayBlock('paginator', $context, $blocks);
            // line 194
            echo "        </div>
    ";
        }
        // line 196
        echo "
    ";
        // line 197
        $this->displayBlock('delete_form', $context, $blocks);
        // line 200
        echo "
    ";
        // line 201
        if (($context["has_filters"] ?? null)) {
            // line 202
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 204
        echo "
    ";
        // line 205
        if (($context["has_batch_actions"] ?? null)) {
            // line 206
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
    }

    // line 70
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "            <tr>
                ";
        // line 72
        if (($context["has_batch_actions"] ?? null)) {
            // line 73
            echo "                    <th>
                        <div class=\"form-check\">
                            <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                        </div>
                    </th>
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 81
        echo "                ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 82
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 82) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 82)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 82)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 83
            echo "                    ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 83), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 83)], "method", false, false, false, 83);
            // line 84
            echo "                    ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 84), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 84)], "method", false, false, false, 84) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 85
            echo "                    ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 86
            echo "
                    <th class=\"";
            // line 87
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 87)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 87), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["class"] ?? null)) && is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = "field-") && ('' === $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b || 0 === strpos($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 87), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 87), "textDirection", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                        ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 88)) {
                // line 89
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 89) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 89), "html", null, true);
                echo "\">
                                ";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 90);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 93
                echo "                            <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 93);
                echo "</span>
                        ";
            }
            // line 95
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                <th ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 98), "showEntityActionsAsDropdown", [], "any", false, false, false, 98)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 98), "textDirection", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
                    <span class=\"sr-only\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 99), "translationParameters", [], "any", false, false, false, 99), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </th>
            </tr>
        ";
    }

    // line 107
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 109
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 109)) {
                // line 110
                echo "                    ";
                $context["some_results_are_hidden"] = true;
                // line 111
                echo "                ";
            } else {
                // line 112
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 112), "html", null, true);
                echo "\">
                        ";
                // line 113
                if (($context["has_batch_actions"] ?? null)) {
                    // line 114
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 116), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 120
                echo "
                        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 122
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 122), "html_attr");
                    echo "\" class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 122), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 122), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 122), "textDirection", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">
                                ";
                    // line 123
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 123), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "
                        ";
                // line 127
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 154
                echo "                    </tr>

                ";
            }
            // line 157
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 158
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 14));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 159
                echo "                    <tr class=\"empty-row\">
                        <td><span></span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                    </tr>

                    ";
                // line 168
                if ((3 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168))) {
                    // line 169
                    echo "                        <tr class=\"no-results\">
                            <td colspan=\"100\">
                                ";
                    // line 171
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 171), "translationParameters", [], "any", false, false, false, 171), "EasyAdminBundle"), "html", null, true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 175
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
            ";
        // line 178
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 179
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 180
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 180)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 185
        echo "        ";
    }

    // line 127
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 128), "showEntityActionsAsDropdown", [], "any", false, false, false, 128)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 129), "count", [], "any", false, false, false, 129) > 0)) {
            // line 130
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 130), "showEntityActionsAsDropdown", [], "any", false, false, false, 130)) {
                // line 131
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 134
                echo "                                                ";
                // line 135
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 142
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 142), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 142), "showEntityActionsAsDropdown", [], "any", false, false, false, 142)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 147
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 148
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 148), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 148), "showEntityActionsAsDropdown", [], "any", false, false, false, 148)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                                    ";
            }
            // line 151
            echo "                                ";
        }
        // line 152
        echo "                            </td>
                        ";
    }

    // line 191
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 192));
        echo "
            ";
    }

    // line 197
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 198,  684 => 197,  677 => 192,  673 => 191,  668 => 152,  665 => 151,  662 => 150,  653 => 148,  648 => 147,  643 => 144,  634 => 142,  630 => 141,  622 => 135,  620 => 134,  616 => 131,  613 => 130,  611 => 129,  606 => 128,  602 => 127,  598 => 185,  591 => 181,  587 => 180,  584 => 179,  582 => 178,  579 => 177,  573 => 176,  559 => 175,  552 => 171,  548 => 169,  546 => 168,  535 => 159,  517 => 158,  504 => 157,  499 => 154,  497 => 127,  494 => 126,  485 => 123,  472 => 122,  468 => 121,  465 => 120,  458 => 116,  454 => 114,  452 => 113,  447 => 112,  444 => 111,  441 => 110,  438 => 109,  419 => 108,  415 => 107,  407 => 99,  399 => 98,  396 => 97,  389 => 95,  383 => 93,  375 => 90,  370 => 89,  368 => 88,  356 => 87,  353 => 86,  350 => 85,  347 => 84,  344 => 83,  339 => 82,  336 => 81,  334 => 80,  331 => 79,  323 => 73,  321 => 72,  318 => 71,  314 => 70,  306 => 206,  304 => 205,  301 => 204,  295 => 202,  293 => 201,  290 => 200,  288 => 197,  285 => 196,  281 => 194,  279 => 191,  276 => 190,  274 => 189,  269 => 186,  267 => 107,  263 => 105,  259 => 103,  257 => 70,  254 => 69,  252 => 68,  248 => 67,  245 => 66,  242 => 65,  239 => 64,  236 => 63,  233 => 62,  230 => 61,  227 => 60,  224 => 59,  222 => 58,  218 => 57,  214 => 54,  210 => 52,  201 => 50,  197 => 49,  194 => 48,  191 => 47,  187 => 46,  182 => 44,  173 => 42,  169 => 41,  166 => 40,  162 => 39,  157 => 34,  149 => 30,  147 => 29,  144 => 28,  137 => 27,  131 => 26,  128 => 25,  125 => 24,  121 => 23,  116 => 46,  114 => 39,  111 => 38,  107 => 36,  105 => 23,  102 => 22,  99 => 21,  95 => 20,  91 => 11,  88 => 5,  87 => 15,  86 => 14,  84 => 13,  82 => 12,  80 => 11,  76 => 10,  69 => 8,  62 => 7,  58 => 4,  56 => 19,  54 => 5,  47 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/cedricdebroux/Documents/norris_transport_it /Projects/tiny_and_pretty_symfony/Tiny_and_Pretty/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
