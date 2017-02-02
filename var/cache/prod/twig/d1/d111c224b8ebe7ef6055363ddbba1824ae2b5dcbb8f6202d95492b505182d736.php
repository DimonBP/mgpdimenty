<?php

/* base_table.html.twig */
class __TwigTemplate_ba630cb0dc5bc6c5860689373ab4064b50212ebe66ef604b1306b4b1f156f1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a8ceaa40b4cff13551d5cab50b567066634d3418a2fa1b0ae65eee1c47db958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8ceaa40b4cff13551d5cab50b567066634d3418a2fa1b0ae65eee1c47db958->enter($__internal_0a8ceaa40b4cff13551d5cab50b567066634d3418a2fa1b0ae65eee1c47db958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_table.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_0a8ceaa40b4cff13551d5cab50b567066634d3418a2fa1b0ae65eee1c47db958->leave($__internal_0a8ceaa40b4cff13551d5cab50b567066634d3418a2fa1b0ae65eee1c47db958_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28b7e97fb17c672dbb2c1349547068cccf9bfddca370d8c71c423dc48024a592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b7e97fb17c672dbb2c1349547068cccf9bfddca370d8c71c423dc48024a592->enter($__internal_28b7e97fb17c672dbb2c1349547068cccf9bfddca370d8c71c423dc48024a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28b7e97fb17c672dbb2c1349547068cccf9bfddca370d8c71c423dc48024a592->leave($__internal_28b7e97fb17c672dbb2c1349547068cccf9bfddca370d8c71c423dc48024a592_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d093332b1648a3b3117a29e3190e07b7a71ebc8b37f03b462d2f4fad24f39e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d093332b1648a3b3117a29e3190e07b7a71ebc8b37f03b462d2f4fad24f39e27->enter($__internal_d093332b1648a3b3117a29e3190e07b7a71ebc8b37f03b462d2f4fad24f39e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t\t";
        
        $__internal_d093332b1648a3b3117a29e3190e07b7a71ebc8b37f03b462d2f4fad24f39e27->leave($__internal_d093332b1648a3b3117a29e3190e07b7a71ebc8b37f03b462d2f4fad24f39e27_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0db2edf348b5de57bf15ea5529b2dd7f4b3428e94d47e2b784d5124695fc48f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db2edf348b5de57bf15ea5529b2dd7f4b3428e94d47e2b784d5124695fc48f0->enter($__internal_0db2edf348b5de57bf15ea5529b2dd7f4b3428e94d47e2b784d5124695fc48f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "\t\t\t<script src=\"../vendor/jquery/jquery.min.js\"></script>
\t\t\t<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>
\t\t\t<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables/js/jquery.dataTables.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables-plugins/dataTables.bootstrap.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables-responsive/dataTables.responsive.js\"></script>
\t\t\t<script>
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#dataTables').DataTable({
\t\t\t\t\tresponsive: true
\t\t\t\t});
\t\t\t});
\t\t\t</script>
\t\t";
        
        $__internal_0db2edf348b5de57bf15ea5529b2dd7f4b3428e94d47e2b784d5124695fc48f0->leave($__internal_0db2edf348b5de57bf15ea5529b2dd7f4b3428e94d47e2b784d5124695fc48f0_prof);

    }

    public function getTemplateName()
    {
        return "base_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  85 => 16,  78 => 15,  72 => 14,  60 => 5,  51 => 31,  48 => 16,  46 => 14,  40 => 11,  31 => 5,  25 => 1,);
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
\t\t<link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/datatables-plugins/dataTables.bootstrap.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/datatables-responsive/dataTables.responsive.css\" rel=\"stylesheet\">
\t\t<link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
\t\t{% endblock %}
        {% block javascripts %}
\t\t\t<script src=\"../vendor/jquery/jquery.min.js\"></script>
\t\t\t<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>
\t\t\t<script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables/js/jquery.dataTables.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables-plugins/dataTables.bootstrap.min.js\"></script>
\t\t\t<script src=\"../vendor/datatables-responsive/dataTables.responsive.js\"></script>
\t\t\t<script>
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#dataTables').DataTable({
\t\t\t\t\tresponsive: true
\t\t\t\t});
\t\t\t});
\t\t\t</script>
\t\t{% endblock %}
    </body>
</html>
", "base_table.html.twig", "/home/admin/web/mgp.dimenty.lv/public_html/app/Resources/views/base_table.html.twig");
    }
}
