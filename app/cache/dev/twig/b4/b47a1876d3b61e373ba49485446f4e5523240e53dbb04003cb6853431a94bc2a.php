<?php

/* reports/addGeneralReport.html.twig */
class __TwigTemplate_73a7da079c2ba06b4996026545410197ee86f6067985130a261a1ed81db7b9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/addGeneralReport.html.twig", 1);
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
        $__internal_775915fbf6485d19e1b27208961d86ef2adcedbb88a76e2fdf8b2dd15fb2acc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775915fbf6485d19e1b27208961d86ef2adcedbb88a76e2fdf8b2dd15fb2acc8->enter($__internal_775915fbf6485d19e1b27208961d86ef2adcedbb88a76e2fdf8b2dd15fb2acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/addGeneralReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_775915fbf6485d19e1b27208961d86ef2adcedbb88a76e2fdf8b2dd15fb2acc8->leave($__internal_775915fbf6485d19e1b27208961d86ef2adcedbb88a76e2fdf8b2dd15fb2acc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d8ae8b71fe4e52016c88f55e42cb8dbe96cdcdc392f557d7717358be83a4950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8ae8b71fe4e52016c88f55e42cb8dbe96cdcdc392f557d7717358be83a4950->enter($__internal_2d8ae8b71fe4e52016c88f55e42cb8dbe96cdcdc392f557d7717358be83a4950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-header\">Add General report</h2>
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
        
        $__internal_2d8ae8b71fe4e52016c88f55e42cb8dbe96cdcdc392f557d7717358be83a4950->leave($__internal_2d8ae8b71fe4e52016c88f55e42cb8dbe96cdcdc392f557d7717358be83a4950_prof);

    }

    public function getTemplateName()
    {
        return "reports/addGeneralReport.html.twig";
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
   <h2 class=\"page-header\">Add General report</h2>
   {{ form_start(form) }}
   {{ form_widget(form) }}
   {{ form_end(form) }}
{% endblock %}


", "reports/addGeneralReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\addGeneralReport.html.twig");
    }
}
