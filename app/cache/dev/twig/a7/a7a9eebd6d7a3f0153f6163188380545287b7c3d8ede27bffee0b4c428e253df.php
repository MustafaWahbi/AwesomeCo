<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe820fb762fdc2eefab6907cc2907fb5ff64c9200b8262349168f95d6b37182a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5174b0d2bf8698e2086026c8c101bd1b2103855904cafada07936cae5889be27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5174b0d2bf8698e2086026c8c101bd1b2103855904cafada07936cae5889be27->enter($__internal_5174b0d2bf8698e2086026c8c101bd1b2103855904cafada07936cae5889be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5174b0d2bf8698e2086026c8c101bd1b2103855904cafada07936cae5889be27->leave($__internal_5174b0d2bf8698e2086026c8c101bd1b2103855904cafada07936cae5889be27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cdfd739fb9b5e0a92b955018d60716e0cfb356fc2b32674ad12906f58529be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdfd739fb9b5e0a92b955018d60716e0cfb356fc2b32674ad12906f58529be0->enter($__internal_5cdfd739fb9b5e0a92b955018d60716e0cfb356fc2b32674ad12906f58529be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cdfd739fb9b5e0a92b955018d60716e0cfb356fc2b32674ad12906f58529be0->leave($__internal_5cdfd739fb9b5e0a92b955018d60716e0cfb356fc2b32674ad12906f58529be0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a087b95308f81bfc71e70856b20677bde6304c2efd3b8a50a446d89a9b7676d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a087b95308f81bfc71e70856b20677bde6304c2efd3b8a50a446d89a9b7676d4->enter($__internal_a087b95308f81bfc71e70856b20677bde6304c2efd3b8a50a446d89a9b7676d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a087b95308f81bfc71e70856b20677bde6304c2efd3b8a50a446d89a9b7676d4->leave($__internal_a087b95308f81bfc71e70856b20677bde6304c2efd3b8a50a446d89a9b7676d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0d6a019a3ae024e5abf9f2b8a3d4b7ce5d0490492edc3b4f0d35f9fe68aa0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d6a019a3ae024e5abf9f2b8a3d4b7ce5d0490492edc3b4f0d35f9fe68aa0ee->enter($__internal_f0d6a019a3ae024e5abf9f2b8a3d4b7ce5d0490492edc3b4f0d35f9fe68aa0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0d6a019a3ae024e5abf9f2b8a3d4b7ce5d0490492edc3b4f0d35f9fe68aa0ee->leave($__internal_f0d6a019a3ae024e5abf9f2b8a3d4b7ce5d0490492edc3b4f0d35f9fe68aa0ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
