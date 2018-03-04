<?php

/* reports/editGeneralReport.html.twig */
class __TwigTemplate_dc2fe03c5f46cb95aa70e5b2f5b1996db060b509c2156418d2ecfa2a0ab62b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/editGeneralReport.html.twig", 1);
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
        $__internal_ece6a525859fb3ded9f036f8a5294d7255f705bd9e5b7921103606581077f4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece6a525859fb3ded9f036f8a5294d7255f705bd9e5b7921103606581077f4cf->enter($__internal_ece6a525859fb3ded9f036f8a5294d7255f705bd9e5b7921103606581077f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/editGeneralReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ece6a525859fb3ded9f036f8a5294d7255f705bd9e5b7921103606581077f4cf->leave($__internal_ece6a525859fb3ded9f036f8a5294d7255f705bd9e5b7921103606581077f4cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e3b4fe9ba8b91874d550a14a2e8bff6b5482f1d3137e5b027d8dd0defe59a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e3b4fe9ba8b91874d550a14a2e8bff6b5482f1d3137e5b027d8dd0defe59a1->enter($__internal_17e3b4fe9ba8b91874d550a14a2e8bff6b5482f1d3137e5b027d8dd0defe59a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-header\">Edit general report</h2>
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
        
        $__internal_17e3b4fe9ba8b91874d550a14a2e8bff6b5482f1d3137e5b027d8dd0defe59a1->leave($__internal_17e3b4fe9ba8b91874d550a14a2e8bff6b5482f1d3137e5b027d8dd0defe59a1_prof);

    }

    public function getTemplateName()
    {
        return "reports/editGeneralReport.html.twig";
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
   <h2 class=\"page-header\">Edit general report</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}


", "reports/editGeneralReport.html.twig", "D:\\task\\AwesomeCo\\app\\Resources\\views\\reports\\editGeneralReport.html.twig");
    }
}
