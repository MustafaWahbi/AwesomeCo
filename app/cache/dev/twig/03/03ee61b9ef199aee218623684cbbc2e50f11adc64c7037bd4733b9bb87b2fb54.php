<?php

/* reports/editReport.html.twig */
class __TwigTemplate_448c7bc42766a8427c94fdd3f4a7056494a6eca726511f34102ff875118e6fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/editReport.html.twig", 1);
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
        $__internal_99177abf451aff94cfc5442a6788aa4c17d599eb4f458ecb2a4ff9c410cd9a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99177abf451aff94cfc5442a6788aa4c17d599eb4f458ecb2a4ff9c410cd9a90->enter($__internal_99177abf451aff94cfc5442a6788aa4c17d599eb4f458ecb2a4ff9c410cd9a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/editReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99177abf451aff94cfc5442a6788aa4c17d599eb4f458ecb2a4ff9c410cd9a90->leave($__internal_99177abf451aff94cfc5442a6788aa4c17d599eb4f458ecb2a4ff9c410cd9a90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e0b6c6e4b584a809f211a0d909b77147cd89c8d0c632e7a01917df03218c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0b6c6e4b584a809f211a0d909b77147cd89c8d0c632e7a01917df03218c1d3->enter($__internal_0e0b6c6e4b584a809f211a0d909b77147cd89c8d0c632e7a01917df03218c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   Edit view
";
        
        $__internal_0e0b6c6e4b584a809f211a0d909b77147cd89c8d0c632e7a01917df03218c1d3->leave($__internal_0e0b6c6e4b584a809f211a0d909b77147cd89c8d0c632e7a01917df03218c1d3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6eaed46c791b826e4bf9b284f2decbb3d7f6e32cea248ff46c21ef0d8608fb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaed46c791b826e4bf9b284f2decbb3d7f6e32cea248ff46c21ef0d8608fb0d->enter($__internal_6eaed46c791b826e4bf9b284f2decbb3d7f6e32cea248ff46c21ef0d8608fb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_6eaed46c791b826e4bf9b284f2decbb3d7f6e32cea248ff46c21ef0d8608fb0d->leave($__internal_6eaed46c791b826e4bf9b284f2decbb3d7f6e32cea248ff46c21ef0d8608fb0d_prof);

    }

    public function getTemplateName()
    {
        return "reports/editReport.html.twig";
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
   Edit view
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "reports/editReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\editReport.html.twig");
    }
}
