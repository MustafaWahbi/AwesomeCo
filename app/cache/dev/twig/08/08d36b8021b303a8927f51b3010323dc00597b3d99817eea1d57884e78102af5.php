<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a1a98867e1c2516586218ea96ff2ee8b7f30439524dfd6c4a6cdec576fb0748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c2b9d3edc34c0b8349d21d53d800fb69151775f407748c01564890ed4ae803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c2b9d3edc34c0b8349d21d53d800fb69151775f407748c01564890ed4ae803->enter($__internal_36c2b9d3edc34c0b8349d21d53d800fb69151775f407748c01564890ed4ae803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c2b9d3edc34c0b8349d21d53d800fb69151775f407748c01564890ed4ae803->leave($__internal_36c2b9d3edc34c0b8349d21d53d800fb69151775f407748c01564890ed4ae803_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_732bb0e2033cfc1077eecb8ae4359c914da235a377418d648f8097d8e00acc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732bb0e2033cfc1077eecb8ae4359c914da235a377418d648f8097d8e00acc5f->enter($__internal_732bb0e2033cfc1077eecb8ae4359c914da235a377418d648f8097d8e00acc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_732bb0e2033cfc1077eecb8ae4359c914da235a377418d648f8097d8e00acc5f->leave($__internal_732bb0e2033cfc1077eecb8ae4359c914da235a377418d648f8097d8e00acc5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2290c2528349f0f3af89c8a908d41eacaf43a159a5a2952baeb42c0cb80433f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2290c2528349f0f3af89c8a908d41eacaf43a159a5a2952baeb42c0cb80433f9->enter($__internal_2290c2528349f0f3af89c8a908d41eacaf43a159a5a2952baeb42c0cb80433f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2290c2528349f0f3af89c8a908d41eacaf43a159a5a2952baeb42c0cb80433f9->leave($__internal_2290c2528349f0f3af89c8a908d41eacaf43a159a5a2952baeb42c0cb80433f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6ae85ca24050d8df2da259d8422bee3d5f3e13c180d19352d43e0770ce134c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ae85ca24050d8df2da259d8422bee3d5f3e13c180d19352d43e0770ce134c3->enter($__internal_a6ae85ca24050d8df2da259d8422bee3d5f3e13c180d19352d43e0770ce134c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a6ae85ca24050d8df2da259d8422bee3d5f3e13c180d19352d43e0770ce134c3->leave($__internal_a6ae85ca24050d8df2da259d8422bee3d5f3e13c180d19352d43e0770ce134c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
