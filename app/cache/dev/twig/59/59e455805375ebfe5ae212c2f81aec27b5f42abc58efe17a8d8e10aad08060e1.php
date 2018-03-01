<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_af901a35f7253962804e804a35f6c651a6e32077e94814bb50648b4703d95ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a958236cdd847d82b6d67e710d276fd98f7bc6cf8c45e8beb5cfb457f6ff2472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a958236cdd847d82b6d67e710d276fd98f7bc6cf8c45e8beb5cfb457f6ff2472->enter($__internal_a958236cdd847d82b6d67e710d276fd98f7bc6cf8c45e8beb5cfb457f6ff2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a958236cdd847d82b6d67e710d276fd98f7bc6cf8c45e8beb5cfb457f6ff2472->leave($__internal_a958236cdd847d82b6d67e710d276fd98f7bc6cf8c45e8beb5cfb457f6ff2472_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72b73cacadcb13a4b486eabeea2c130c2e81fc4813a2d2e98c4441a3bd7f2eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b73cacadcb13a4b486eabeea2c130c2e81fc4813a2d2e98c4441a3bd7f2eb2->enter($__internal_72b73cacadcb13a4b486eabeea2c130c2e81fc4813a2d2e98c4441a3bd7f2eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72b73cacadcb13a4b486eabeea2c130c2e81fc4813a2d2e98c4441a3bd7f2eb2->leave($__internal_72b73cacadcb13a4b486eabeea2c130c2e81fc4813a2d2e98c4441a3bd7f2eb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0370509a81ff2a7019eef3a3f2eb96f6aa7233d28b430fba105be5ecc5ea9293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0370509a81ff2a7019eef3a3f2eb96f6aa7233d28b430fba105be5ecc5ea9293->enter($__internal_0370509a81ff2a7019eef3a3f2eb96f6aa7233d28b430fba105be5ecc5ea9293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0370509a81ff2a7019eef3a3f2eb96f6aa7233d28b430fba105be5ecc5ea9293->leave($__internal_0370509a81ff2a7019eef3a3f2eb96f6aa7233d28b430fba105be5ecc5ea9293_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cb9ccb9e17bb457f9ea7db01c3618506d72c7c6d33148d2b68062fcae278be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb9ccb9e17bb457f9ea7db01c3618506d72c7c6d33148d2b68062fcae278be3->enter($__internal_8cb9ccb9e17bb457f9ea7db01c3618506d72c7c6d33148d2b68062fcae278be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8cb9ccb9e17bb457f9ea7db01c3618506d72c7c6d33148d2b68062fcae278be3->leave($__internal_8cb9ccb9e17bb457f9ea7db01c3618506d72c7c6d33148d2b68062fcae278be3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
