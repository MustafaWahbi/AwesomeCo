<?php

/* reports/list.html.twig */
class __TwigTemplate_7f173a87b1bd58f1ca1b9d1be7d53d97f0ec56002c0cbb3c79f384321245d421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323cc5de5e43f6c8440640aa5cc6f9fca76006d886591f0a20fc634dc9ee4b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323cc5de5e43f6c8440640aa5cc6f9fca76006d886591f0a20fc634dc9ee4b24->enter($__internal_323cc5de5e43f6c8440640aa5cc6f9fca76006d886591f0a20fc634dc9ee4b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323cc5de5e43f6c8440640aa5cc6f9fca76006d886591f0a20fc634dc9ee4b24->leave($__internal_323cc5de5e43f6c8440640aa5cc6f9fca76006d886591f0a20fc634dc9ee4b24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f49714e77a963697b8eb187dca5cc117016b6ce7694edf13b7c33f885f7159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f49714e77a963697b8eb187dca5cc117016b6ce7694edf13b7c33f885f7159c->enter($__internal_3f49714e77a963697b8eb187dca5cc117016b6ce7694edf13b7c33f885f7159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   List view
";
        
        $__internal_3f49714e77a963697b8eb187dca5cc117016b6ce7694edf13b7c33f885f7159c->leave($__internal_3f49714e77a963697b8eb187dca5cc117016b6ce7694edf13b7c33f885f7159c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdedf9cf50961e3bd33087e41c359a53d46e46b7d0ec2343613c01227149b5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdedf9cf50961e3bd33087e41c359a53d46e46b7d0ec2343613c01227149b5a0->enter($__internal_bdedf9cf50961e3bd33087e41c359a53d46e46b7d0ec2343613c01227149b5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_bdedf9cf50961e3bd33087e41c359a53d46e46b7d0ec2343613c01227149b5a0->leave($__internal_bdedf9cf50961e3bd33087e41c359a53d46e46b7d0ec2343613c01227149b5a0_prof);

    }

    public function getTemplateName()
    {
        return "reports/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
   List view
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "reports/list.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\list.html.twig");
    }
}
