<?php

/* reports/approvalForm.html.twig */
class __TwigTemplate_98b2246dd1b8e034722995bf020985bfccf28508124e4c7fe497061bc934d345 extends Twig_Template
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
        $__internal_3eb4c9034b503a8775bae73dce62ea86d0bf2d78d62afb89af74dd27e098cc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb4c9034b503a8775bae73dce62ea86d0bf2d78d62afb89af74dd27e098cc8d->enter($__internal_3eb4c9034b503a8775bae73dce62ea86d0bf2d78d62afb89af74dd27e098cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/approvalForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb4c9034b503a8775bae73dce62ea86d0bf2d78d62afb89af74dd27e098cc8d->leave($__internal_3eb4c9034b503a8775bae73dce62ea86d0bf2d78d62afb89af74dd27e098cc8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcabdd06f9e5c44df16493b33ffeca12f5a26d796ce96a7904c789fcc9c3ce4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcabdd06f9e5c44df16493b33ffeca12f5a26d796ce96a7904c789fcc9c3ce4d->enter($__internal_dcabdd06f9e5c44df16493b33ffeca12f5a26d796ce96a7904c789fcc9c3ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dcabdd06f9e5c44df16493b33ffeca12f5a26d796ce96a7904c789fcc9c3ce4d->leave($__internal_dcabdd06f9e5c44df16493b33ffeca12f5a26d796ce96a7904c789fcc9c3ce4d_prof);

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


", "reports/approvalForm.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\approvalForm.html.twig");
    }
}
