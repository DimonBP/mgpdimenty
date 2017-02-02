<?php

/* base.html.twig */
class __TwigTemplate_8b74c6fb849160059f5db7d58b7369497df1f52ed6d5a7c7fe92b369e294b50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3513c404acaabb1adf9a6d204bf8a452ac367535f07347e060dbecf8cb61bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3513c404acaabb1adf9a6d204bf8a452ac367535f07347e060dbecf8cb61bfb->enter($__internal_b3513c404acaabb1adf9a6d204bf8a452ac367535f07347e060dbecf8cb61bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b3513c404acaabb1adf9a6d204bf8a452ac367535f07347e060dbecf8cb61bfb->leave($__internal_b3513c404acaabb1adf9a6d204bf8a452ac367535f07347e060dbecf8cb61bfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1105d6b24519653fb2aa3da3092b361512bca6e4da84d7758db21f3df81dbbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1105d6b24519653fb2aa3da3092b361512bca6e4da84d7758db21f3df81dbbf5->enter($__internal_1105d6b24519653fb2aa3da3092b361512bca6e4da84d7758db21f3df81dbbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1105d6b24519653fb2aa3da3092b361512bca6e4da84d7758db21f3df81dbbf5->leave($__internal_1105d6b24519653fb2aa3da3092b361512bca6e4da84d7758db21f3df81dbbf5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17d701402f427df683aa0a3cbb3272e9af31c0a1d683275f238e745eac1e6e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d701402f427df683aa0a3cbb3272e9af31c0a1d683275f238e745eac1e6e5f->enter($__internal_17d701402f427df683aa0a3cbb3272e9af31c0a1d683275f238e745eac1e6e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17d701402f427df683aa0a3cbb3272e9af31c0a1d683275f238e745eac1e6e5f->leave($__internal_17d701402f427df683aa0a3cbb3272e9af31c0a1d683275f238e745eac1e6e5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_054691178e238af53bfec8b10f720b8dd8f4272cce83aa6495751a4f8b52676e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054691178e238af53bfec8b10f720b8dd8f4272cce83aa6495751a4f8b52676e->enter($__internal_054691178e238af53bfec8b10f720b8dd8f4272cce83aa6495751a4f8b52676e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_054691178e238af53bfec8b10f720b8dd8f4272cce83aa6495751a4f8b52676e->leave($__internal_054691178e238af53bfec8b10f720b8dd8f4272cce83aa6495751a4f8b52676e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b120efeba903d71abfab85bd80392ff289a28b3e168e3ad81e5d57dbdb4df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b120efeba903d71abfab85bd80392ff289a28b3e168e3ad81e5d57dbdb4df53->enter($__internal_4b120efeba903d71abfab85bd80392ff289a28b3e168e3ad81e5d57dbdb4df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b120efeba903d71abfab85bd80392ff289a28b3e168e3ad81e5d57dbdb4df53->leave($__internal_4b120efeba903d71abfab85bd80392ff289a28b3e168e3ad81e5d57dbdb4df53_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/admin/web/mgp.dimenty.lv/public_html/app/Resources/views/base.html.twig");
    }
}
