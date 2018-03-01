<?php

/* reports/addSiteReport.html.twig */
class __TwigTemplate_9d480847630bfcffd069abba1bc17306f20cf2c00af36c10256600593b170b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/addSiteReport.html.twig", 1);
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
        $__internal_50ed3ffe8c1c8bf4031591e951ba1782209953cff60ddec1d561e47277ee0653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ed3ffe8c1c8bf4031591e951ba1782209953cff60ddec1d561e47277ee0653->enter($__internal_50ed3ffe8c1c8bf4031591e951ba1782209953cff60ddec1d561e47277ee0653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/addSiteReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ed3ffe8c1c8bf4031591e951ba1782209953cff60ddec1d561e47277ee0653->leave($__internal_50ed3ffe8c1c8bf4031591e951ba1782209953cff60ddec1d561e47277ee0653_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9deac27d902151f18df45dabef99d585cc2b895f08db65c7b1aadb9485b6fe2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9deac27d902151f18df45dabef99d585cc2b895f08db65c7b1aadb9485b6fe2c->enter($__internal_9deac27d902151f18df45dabef99d585cc2b895f08db65c7b1aadb9485b6fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-header\">Add Site report</h2>
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
        
        $__internal_9deac27d902151f18df45dabef99d585cc2b895f08db65c7b1aadb9485b6fe2c->leave($__internal_9deac27d902151f18df45dabef99d585cc2b895f08db65c7b1aadb9485b6fe2c_prof);

    }

    public function getTemplateName()
    {
        return "reports/addSiteReport.html.twig";
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
   <h2 class=\"page-header\">Add Site report</h2>
   {{ form_start(form) }}
   {{ form_widget(form) }}
   {{ form_end(form) }}
{% endblock %}


", "reports/addSiteReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\addSiteReport.html.twig");
    }
}
