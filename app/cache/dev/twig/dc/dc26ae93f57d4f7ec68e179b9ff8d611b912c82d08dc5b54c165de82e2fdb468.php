<?php

/* base.html.twig */
class __TwigTemplate_040b175a0981ef2aff576a2b5b8a9176201938130ef378735e186d7296608916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54cd6acd8036d074b152458a7f95e0715f81ebf4da6dfc6a3dc63556e4626253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cd6acd8036d074b152458a7f95e0715f81ebf4da6dfc6a3dc63556e4626253->enter($__internal_54cd6acd8036d074b152458a7f95e0715f81ebf4da6dfc6a3dc63556e4626253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo " <!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/test.css"), "html", null, true);
        echo "\" />


    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>


    ";
        // line 21
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>
<nav class=\"navbar \" >
    <a class=\"navbar-brand\" >Awesome co.</a>
<ul class=\"nav\">

    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/\">Reports List</a>
    </li>

    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/approvalPage\">Approval page</a>
    </li>
</ul>
</nav>

<div role=\"main\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\"><br><br>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</body>
</html>";
        
        $__internal_54cd6acd8036d074b152458a7f95e0715f81ebf4da6dfc6a3dc63556e4626253->leave($__internal_54cd6acd8036d074b152458a7f95e0715f81ebf4da6dfc6a3dc63556e4626253_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8e70089d62768891a92a20b4ce4938b6e53c96d31289ba5f2fecd833a2bbc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e70089d62768891a92a20b4ce4938b6e53c96d31289ba5f2fecd833a2bbc62->enter($__internal_d8e70089d62768891a92a20b4ce4938b6e53c96d31289ba5f2fecd833a2bbc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reporting System";
        
        $__internal_d8e70089d62768891a92a20b4ce4938b6e53c96d31289ba5f2fecd833a2bbc62->leave($__internal_d8e70089d62768891a92a20b4ce4938b6e53c96d31289ba5f2fecd833a2bbc62_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d44f3837857abd630d535029b00c817d3d23867ed6db4115497714021b0a8999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44f3837857abd630d535029b00c817d3d23867ed6db4115497714021b0a8999->enter($__internal_d44f3837857abd630d535029b00c817d3d23867ed6db4115497714021b0a8999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    ";
        
        $__internal_d44f3837857abd630d535029b00c817d3d23867ed6db4115497714021b0a8999->leave($__internal_d44f3837857abd630d535029b00c817d3d23867ed6db4115497714021b0a8999_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_9265b2be01d94e7a9d4e20f7d21dbe83fc73cf58006011bcade7ea9b839635da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9265b2be01d94e7a9d4e20f7d21dbe83fc73cf58006011bcade7ea9b839635da->enter($__internal_9265b2be01d94e7a9d4e20f7d21dbe83fc73cf58006011bcade7ea9b839635da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9265b2be01d94e7a9d4e20f7d21dbe83fc73cf58006011bcade7ea9b839635da->leave($__internal_9265b2be01d94e7a9d4e20f7d21dbe83fc73cf58006011bcade7ea9b839635da_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8b202bc5887b70f6dc8def938787e5b70ff49218375879263f229e4a774b40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b202bc5887b70f6dc8def938787e5b70ff49218375879263f229e4a774b40d->enter($__internal_d8b202bc5887b70f6dc8def938787e5b70ff49218375879263f229e4a774b40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8b202bc5887b70f6dc8def938787e5b70ff49218375879263f229e4a774b40d->leave($__internal_d8b202bc5887b70f6dc8def938787e5b70ff49218375879263f229e4a774b40d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  154 => 50,  147 => 22,  141 => 21,  129 => 8,  121 => 58,  119 => 57,  111 => 51,  108 => 50,  99 => 48,  94 => 47,  85 => 45,  81 => 44,  56 => 23,  53 => 21,  42 => 12,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>{% block title %}Reporting System{% endblock %}</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/test.css') }}\" />


    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>


    {#<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />#}
    {% block stylesheets %}
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>
<body>
<nav class=\"navbar \" >
    <a class=\"navbar-brand\" >Awesome co.</a>
<ul class=\"nav\">

    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/\">Reports List</a>
    </li>

    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/approvalPage\">Approval page</a>
    </li>
</ul>
</nav>

<div role=\"main\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\"><br><br>
            {% for flash_message in app.session.flashbag.get('notice') %}
                <div class=\"alert alert-success\">{{ flash_message }}</div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">{{ flash_message }}</div>
            {% endfor %}
            {% block body %}{% endblock %}
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\base.html.twig");
    }
}
