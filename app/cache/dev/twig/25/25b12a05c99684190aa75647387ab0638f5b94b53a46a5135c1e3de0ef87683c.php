<?php

/* reports/editSiteReport.html.twig */
class __TwigTemplate_d6ad99144e02baa091b82c1447ebc7d81a91cda5a81abb574b7e22eb90a04fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/editSiteReport.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6462cda8a85b548a17a5e4f81c8286f08a4f1d5b427745dc02f7c2f58c392f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6462cda8a85b548a17a5e4f81c8286f08a4f1d5b427745dc02f7c2f58c392f31->enter($__internal_6462cda8a85b548a17a5e4f81c8286f08a4f1d5b427745dc02f7c2f58c392f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/editSiteReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6462cda8a85b548a17a5e4f81c8286f08a4f1d5b427745dc02f7c2f58c392f31->leave($__internal_6462cda8a85b548a17a5e4f81c8286f08a4f1d5b427745dc02f7c2f58c392f31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9894dc2f6be34ae18e8abbd8a80f02c89e39cf1c2e7af19f0ef60d3bfcba803e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9894dc2f6be34ae18e8abbd8a80f02c89e39cf1c2e7af19f0ef60d3bfcba803e->enter($__internal_9894dc2f6be34ae18e8abbd8a80f02c89e39cf1c2e7af19f0ef60d3bfcba803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-header\">Edit Site report</h2>
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9894dc2f6be34ae18e8abbd8a80f02c89e39cf1c2e7af19f0ef60d3bfcba803e->leave($__internal_9894dc2f6be34ae18e8abbd8a80f02c89e39cf1c2e7af19f0ef60d3bfcba803e_prof);

    }

    public function getTemplateName()
    {
        return "reports/editSiteReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
   <h2 class=\"page-header\">Edit Site report</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}


", "reports/editSiteReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\editSiteReport.html.twig");
    }
}
