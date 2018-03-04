<?php

/* reports/addGeneralReport.html.twig */
class __TwigTemplate_b94780a45f0c9316205c35715656b517774fd8f876eb54bfd1fba43a6ff7e164 extends Twig_Template
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
        $__internal_677b635a0d865149fba329c333e2d17dab710eb6737b43aa3464514073de8a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677b635a0d865149fba329c333e2d17dab710eb6737b43aa3464514073de8a71->enter($__internal_677b635a0d865149fba329c333e2d17dab710eb6737b43aa3464514073de8a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/addGeneralReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_677b635a0d865149fba329c333e2d17dab710eb6737b43aa3464514073de8a71->leave($__internal_677b635a0d865149fba329c333e2d17dab710eb6737b43aa3464514073de8a71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89705bb592cae81d824fe0ac8b0bb3474838178a49c64feb418ca7d6ebc78007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89705bb592cae81d824fe0ac8b0bb3474838178a49c64feb418ca7d6ebc78007->enter($__internal_89705bb592cae81d824fe0ac8b0bb3474838178a49c64feb418ca7d6ebc78007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89705bb592cae81d824fe0ac8b0bb3474838178a49c64feb418ca7d6ebc78007->leave($__internal_89705bb592cae81d824fe0ac8b0bb3474838178a49c64feb418ca7d6ebc78007_prof);

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
