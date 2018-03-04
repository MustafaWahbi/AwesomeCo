<?php

/* reports/approvalForm.html.twig */
class __TwigTemplate_6217c8614e233e63c6aaccd93786f9d1acc31027b880147077b4add151820db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/approvalForm.html.twig", 1);
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
        $__internal_869f2ae8b6182415fd12d5b5a600539c2e592bc8aa019fa17464cc86eeff25cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869f2ae8b6182415fd12d5b5a600539c2e592bc8aa019fa17464cc86eeff25cc->enter($__internal_869f2ae8b6182415fd12d5b5a600539c2e592bc8aa019fa17464cc86eeff25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/approvalForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869f2ae8b6182415fd12d5b5a600539c2e592bc8aa019fa17464cc86eeff25cc->leave($__internal_869f2ae8b6182415fd12d5b5a600539c2e592bc8aa019fa17464cc86eeff25cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f28e3d8b673de524801b48d6fc12153d8340482d774b2f9094e8c00c81eb21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f28e3d8b673de524801b48d6fc12153d8340482d774b2f9094e8c00c81eb21d->enter($__internal_7f28e3d8b673de524801b48d6fc12153d8340482d774b2f9094e8c00c81eb21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-header\">Approval form</h2>
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
        
        $__internal_7f28e3d8b673de524801b48d6fc12153d8340482d774b2f9094e8c00c81eb21d->leave($__internal_7f28e3d8b673de524801b48d6fc12153d8340482d774b2f9094e8c00c81eb21d_prof);

    }

    public function getTemplateName()
    {
        return "reports/approvalForm.html.twig";
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
   <h2 class=\"page-header\">Approval form</h2>
   {{ form_start(form) }}
   {{ form_widget(form) }}
   {{ form_end(form) }}
{% endblock %}


", "reports/approvalForm.html.twig", "D:\\task\\AwesomeCo\\app\\Resources\\views\\reports\\approvalForm.html.twig");
    }
}
