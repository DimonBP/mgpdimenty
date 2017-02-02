<?php

/* default/table.html.twig */
class __TwigTemplate_33eaf073c58654b2f19b6d9d5e1b023139202d2a1b9b6330bb07e6c0c0b37fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_table.html.twig", "default/table.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3242b5833e388739e72d66fa93476ac43207a264ae0a04082eacb357e3f03a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3242b5833e388739e72d66fa93476ac43207a264ae0a04082eacb357e3f03a8->enter($__internal_c3242b5833e388739e72d66fa93476ac43207a264ae0a04082eacb357e3f03a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3242b5833e388739e72d66fa93476ac43207a264ae0a04082eacb357e3f03a8->leave($__internal_c3242b5833e388739e72d66fa93476ac43207a264ae0a04082eacb357e3f03a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfe483d2d22a2d9e6a7dddc2f4f87d88e59f8dfba6fb791e16372e16a7f6413f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe483d2d22a2d9e6a7dddc2f4f87d88e59f8dfba6fb791e16372e16a7f6413f->enter($__internal_dfe483d2d22a2d9e6a7dddc2f4f87d88e59f8dfba6fb791e16372e16a7f6413f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t\t<div id=\"page-wrapper\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Text</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Functions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table_rows"] ?? $this->getContext($context, "table_rows")));
        foreach ($context['_seq'] as $context["_key"] => $context["table_row"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t<tr class=''>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["table_row"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["table_row"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["table_row"], "text", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href='/updatereq/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["table_row"], "id", array()), "html", null, true);
            echo "'><i title='Mainīt' class='fa fa-file-text-o fa-fw'></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_dfe483d2d22a2d9e6a7dddc2f4f87d88e59f8dfba6fb791e16372e16a7f6413f->leave($__internal_dfe483d2d22a2d9e6a7dddc2f4f87d88e59f8dfba6fb791e16372e16a7f6413f_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_919cb98c701cde9c3553a50eba7115a6765112723e96c9495c97327d51032bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919cb98c701cde9c3553a50eba7115a6765112723e96c9495c97327d51032bad->enter($__internal_919cb98c701cde9c3553a50eba7115a6765112723e96c9495c97327d51032bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
        echo "<style>

</style>
";
        
        $__internal_919cb98c701cde9c3553a50eba7115a6765112723e96c9495c97327d51032bad->leave($__internal_919cb98c701cde9c3553a50eba7115a6765112723e96c9495c97327d51032bad_prof);

    }

    public function getTemplateName()
    {
        return "default/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  103 => 39,  89 => 30,  78 => 25,  73 => 23,  69 => 22,  65 => 21,  62 => 20,  58 => 19,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base_table.html.twig' %}

{% block body %}
\t\t\t<div id=\"page-wrapper\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Text</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Functions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for table_row in table_rows %}
\t\t\t\t\t\t\t\t\t\t<tr class=''>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ table_row.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ table_row.date|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ table_row.text }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href='/updatereq/{{ table_row.id }}'><i title='Mainīt' class='fa fa-file-text-o fa-fw'></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
{% endblock %}

{% block stylesheets %}
<style>

</style>
{% endblock %}


", "default/table.html.twig", "/home/admin/web/mgp.dimenty.lv/public_html/app/Resources/views/default/table.html.twig");
    }
}
