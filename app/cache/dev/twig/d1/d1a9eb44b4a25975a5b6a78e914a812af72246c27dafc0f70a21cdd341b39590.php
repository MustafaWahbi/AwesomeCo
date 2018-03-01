<?php

/* reports/addReport.html.twig */
class __TwigTemplate_a611b0a1e76d436c1b96e2a541c2531077e7d97164a22b72e7d82967b0d993d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/addReport.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c2e807288bc50fa2c07a33066b71a51112d2d83cfce19455b4b573dc3f11d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c2e807288bc50fa2c07a33066b71a51112d2d83cfce19455b4b573dc3f11d7->enter($__internal_51c2e807288bc50fa2c07a33066b71a51112d2d83cfce19455b4b573dc3f11d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/addReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c2e807288bc50fa2c07a33066b71a51112d2d83cfce19455b4b573dc3f11d7->leave($__internal_51c2e807288bc50fa2c07a33066b71a51112d2d83cfce19455b4b573dc3f11d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b537afe66d542ee93121b753227a6eaf3d595fa8476b4dc0dcf4b1a4220c59cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b537afe66d542ee93121b753227a6eaf3d595fa8476b4dc0dcf4b1a4220c59cd->enter($__internal_b537afe66d542ee93121b753227a6eaf3d595fa8476b4dc0dcf4b1a4220c59cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   add view
";
        
        $__internal_b537afe66d542ee93121b753227a6eaf3d595fa8476b4dc0dcf4b1a4220c59cd->leave($__internal_b537afe66d542ee93121b753227a6eaf3d595fa8476b4dc0dcf4b1a4220c59cd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c7c3082d9a4e44bad9ddef4505aa379f62d14a3718c43e6a536d5030f67038a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7c3082d9a4e44bad9ddef4505aa379f62d14a3718c43e6a536d5030f67038a->enter($__internal_1c7c3082d9a4e44bad9ddef4505aa379f62d14a3718c43e6a536d5030f67038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_1c7c3082d9a4e44bad9ddef4505aa379f62d14a3718c43e6a536d5030f67038a->leave($__internal_1c7c3082d9a4e44bad9ddef4505aa379f62d14a3718c43e6a536d5030f67038a_prof);

    }

    public function getTemplateName()
    {
        return "reports/addReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   add view
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "reports/addReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\addReport.html.twig");
    }
}
