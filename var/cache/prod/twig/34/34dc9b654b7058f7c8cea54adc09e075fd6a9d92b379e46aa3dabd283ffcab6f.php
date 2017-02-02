<?php

/* default/addreq.html.twig */
class __TwigTemplate_f5a7295d5c1023b19e2b95b7ffb963fe356aa09a6cdd0110272004da862cc45c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_table.html.twig", "default/addreq.html.twig", 1);
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
        $__internal_95be6ccb200c636cfdabcfb1acf1baff767e6427fe146449b50cffd3bcff55ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95be6ccb200c636cfdabcfb1acf1baff767e6427fe146449b50cffd3bcff55ce->enter($__internal_95be6ccb200c636cfdabcfb1acf1baff767e6427fe146449b50cffd3bcff55ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addreq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95be6ccb200c636cfdabcfb1acf1baff767e6427fe146449b50cffd3bcff55ce->leave($__internal_95be6ccb200c636cfdabcfb1acf1baff767e6427fe146449b50cffd3bcff55ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_decf4dc50ffb8806e338ad8170dbff8865b5c0f18465b420d0d43eab8f9ab7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decf4dc50ffb8806e338ad8170dbff8865b5c0f18465b420d0d43eab8f9ab7c1->enter($__internal_decf4dc50ffb8806e338ad8170dbff8865b5c0f18465b420d0d43eab8f9ab7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_decf4dc50ffb8806e338ad8170dbff8865b5c0f18465b420d0d43eab8f9ab7c1->leave($__internal_decf4dc50ffb8806e338ad8170dbff8865b5c0f18465b420d0d43eab8f9ab7c1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f025e808af9a0b30b86f68b48f0b048e554d3b87af78dfdfdb3c9ff9690491ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f025e808af9a0b30b86f68b48f0b048e554d3b87af78dfdfdb3c9ff9690491ae->enter($__internal_f025e808af9a0b30b86f68b48f0b048e554d3b87af78dfdfdb3c9ff9690491ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "<style>

</style>
";
        
        $__internal_f025e808af9a0b30b86f68b48f0b048e554d3b87af78dfdfdb3c9ff9690491ae->leave($__internal_f025e808af9a0b30b86f68b48f0b048e554d3b87af78dfdfdb3c9ff9690491ae_prof);

    }

    public function getTemplateName()
    {
        return "default/addreq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  49 => 6,  45 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endblock %}

{% block stylesheets %}
<style>

</style>
{% endblock %}


", "default/addreq.html.twig", "/home/admin/web/mgp.dimenty.lv/public_html/app/Resources/views/default/addreq.html.twig");
    }
}
