<?php

/* reports/editGeneralReport.html.twig */
class __TwigTemplate_0f985eeebb54594bbb5581bebff75d51fa384a292e5565114d5ec8851e59c1e5 extends Twig_Template
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
        $__internal_033bec7bf07f6530335081c1f6f7109dc6df2fc845a0f4488b2b2b4514677948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033bec7bf07f6530335081c1f6f7109dc6df2fc845a0f4488b2b2b4514677948->enter($__internal_033bec7bf07f6530335081c1f6f7109dc6df2fc845a0f4488b2b2b4514677948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/editGeneralReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_033bec7bf07f6530335081c1f6f7109dc6df2fc845a0f4488b2b2b4514677948->leave($__internal_033bec7bf07f6530335081c1f6f7109dc6df2fc845a0f4488b2b2b4514677948_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d813735f549e27aa5562713e55b858d42ad4d8748a3f7b3e08757d6319471cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d813735f549e27aa5562713e55b858d42ad4d8748a3f7b3e08757d6319471cd0->enter($__internal_d813735f549e27aa5562713e55b858d42ad4d8748a3f7b3e08757d6319471cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d813735f549e27aa5562713e55b858d42ad4d8748a3f7b3e08757d6319471cd0->leave($__internal_d813735f549e27aa5562713e55b858d42ad4d8748a3f7b3e08757d6319471cd0_prof);

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


", "reports/editGeneralReport.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\editGeneralReport.html.twig");
    }
}
