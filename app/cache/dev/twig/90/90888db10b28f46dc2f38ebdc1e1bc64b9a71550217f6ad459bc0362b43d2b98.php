<?php

/* reports/addGeneralReport.html.twig */
class __TwigTemplate_0d8ea57a26c6e92e537a466f565ef8af227734c0319cecae79d696fed31dd925 extends Twig_Template
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
        $__internal_5323a2d0ee2a733f62866f565e4f645f6b805cd1d57db012b6c620f965064a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5323a2d0ee2a733f62866f565e4f645f6b805cd1d57db012b6c620f965064a46->enter($__internal_5323a2d0ee2a733f62866f565e4f645f6b805cd1d57db012b6c620f965064a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/addGeneralReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5323a2d0ee2a733f62866f565e4f645f6b805cd1d57db012b6c620f965064a46->leave($__internal_5323a2d0ee2a733f62866f565e4f645f6b805cd1d57db012b6c620f965064a46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_751ad35319ea3b7368067bd951ff5b4a907523a5b293293755784745e1dda7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751ad35319ea3b7368067bd951ff5b4a907523a5b293293755784745e1dda7b5->enter($__internal_751ad35319ea3b7368067bd951ff5b4a907523a5b293293755784745e1dda7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_751ad35319ea3b7368067bd951ff5b4a907523a5b293293755784745e1dda7b5->leave($__internal_751ad35319ea3b7368067bd951ff5b4a907523a5b293293755784745e1dda7b5_prof);

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


", "reports/addGeneralReport.html.twig", "D:\\task\\AwesomeCo\\app\\Resources\\views\\reports\\addGeneralReport.html.twig");
    }
}
