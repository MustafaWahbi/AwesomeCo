<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76b353a5fa3339b5f6f1fe9117424b286c62fb4212a9ccd24548dc06fa2597b6 extends Twig_Template
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
        $__internal_a9b9c6ed9ce5ce34cff33d2210c1ad53d42d43b5f5a280be05e52ef554833e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b9c6ed9ce5ce34cff33d2210c1ad53d42d43b5f5a280be05e52ef554833e91->enter($__internal_a9b9c6ed9ce5ce34cff33d2210c1ad53d42d43b5f5a280be05e52ef554833e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b9c6ed9ce5ce34cff33d2210c1ad53d42d43b5f5a280be05e52ef554833e91->leave($__internal_a9b9c6ed9ce5ce34cff33d2210c1ad53d42d43b5f5a280be05e52ef554833e91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09cdb008af581c132bf60f8ec7e61ab10b2447f3870d8702f03522ab5631c3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cdb008af581c132bf60f8ec7e61ab10b2447f3870d8702f03522ab5631c3fb->enter($__internal_09cdb008af581c132bf60f8ec7e61ab10b2447f3870d8702f03522ab5631c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09cdb008af581c132bf60f8ec7e61ab10b2447f3870d8702f03522ab5631c3fb->leave($__internal_09cdb008af581c132bf60f8ec7e61ab10b2447f3870d8702f03522ab5631c3fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37f0610c3278af0b27df154c95c4bb8eb0eba70a2d21850f222eab3fe0e92c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f0610c3278af0b27df154c95c4bb8eb0eba70a2d21850f222eab3fe0e92c45->enter($__internal_37f0610c3278af0b27df154c95c4bb8eb0eba70a2d21850f222eab3fe0e92c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37f0610c3278af0b27df154c95c4bb8eb0eba70a2d21850f222eab3fe0e92c45->leave($__internal_37f0610c3278af0b27df154c95c4bb8eb0eba70a2d21850f222eab3fe0e92c45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e375777cc3473fe2f917c468f21036e32c4746ed0d53a733e64e8bad5efbb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e375777cc3473fe2f917c468f21036e32c4746ed0d53a733e64e8bad5efbb4d->enter($__internal_1e375777cc3473fe2f917c468f21036e32c4746ed0d53a733e64e8bad5efbb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e375777cc3473fe2f917c468f21036e32c4746ed0d53a733e64e8bad5efbb4d->leave($__internal_1e375777cc3473fe2f917c468f21036e32c4746ed0d53a733e64e8bad5efbb4d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\task\\AwesomeCo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
