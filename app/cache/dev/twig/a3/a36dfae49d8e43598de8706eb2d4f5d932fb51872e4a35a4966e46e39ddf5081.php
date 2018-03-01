<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f95cac227cd18f955d0840b01a17346b4f37fb04251a2531011a3e7a16e9a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80038e269c125597f549ab5da145a7cfabec6cea29f1817e9d81a2c9a0336bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80038e269c125597f549ab5da145a7cfabec6cea29f1817e9d81a2c9a0336bcc->enter($__internal_80038e269c125597f549ab5da145a7cfabec6cea29f1817e9d81a2c9a0336bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80038e269c125597f549ab5da145a7cfabec6cea29f1817e9d81a2c9a0336bcc->leave($__internal_80038e269c125597f549ab5da145a7cfabec6cea29f1817e9d81a2c9a0336bcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75939988570c19b170d8ad12fa05b88b015807849145f6c09c6eb4ee02c0b0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75939988570c19b170d8ad12fa05b88b015807849145f6c09c6eb4ee02c0b0fe->enter($__internal_75939988570c19b170d8ad12fa05b88b015807849145f6c09c6eb4ee02c0b0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75939988570c19b170d8ad12fa05b88b015807849145f6c09c6eb4ee02c0b0fe->leave($__internal_75939988570c19b170d8ad12fa05b88b015807849145f6c09c6eb4ee02c0b0fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_deceb8359bedf5e547620d9b3f624ec652a582d25b4f6ff8fb15e6f6638c9d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deceb8359bedf5e547620d9b3f624ec652a582d25b4f6ff8fb15e6f6638c9d97->enter($__internal_deceb8359bedf5e547620d9b3f624ec652a582d25b4f6ff8fb15e6f6638c9d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_deceb8359bedf5e547620d9b3f624ec652a582d25b4f6ff8fb15e6f6638c9d97->leave($__internal_deceb8359bedf5e547620d9b3f624ec652a582d25b4f6ff8fb15e6f6638c9d97_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eba73e2b40462cb1a2e6b7f9e81ea2d1cc2eb37b0ab6b5ed2ead07ab659bfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eba73e2b40462cb1a2e6b7f9e81ea2d1cc2eb37b0ab6b5ed2ead07ab659bfd2->enter($__internal_8eba73e2b40462cb1a2e6b7f9e81ea2d1cc2eb37b0ab6b5ed2ead07ab659bfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8eba73e2b40462cb1a2e6b7f9e81ea2d1cc2eb37b0ab6b5ed2ead07ab659bfd2->leave($__internal_8eba73e2b40462cb1a2e6b7f9e81ea2d1cc2eb37b0ab6b5ed2ead07ab659bfd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
