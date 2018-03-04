<?php

/* base.html.twig */
class __TwigTemplate_89e27be4707ca34be7d1f0b146ec5bc351ffed6ded199add92caa07c3e4d78a8 extends Twig_Template
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
        $__internal_ae5623a54524726a9e227377a12e5bbf2890fbdfd4d1d5636d6e9b548ee3c59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5623a54524726a9e227377a12e5bbf2890fbdfd4d1d5636d6e9b548ee3c59c->enter($__internal_ae5623a54524726a9e227377a12e5bbf2890fbdfd4d1d5636d6e9b548ee3c59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    

    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>


    ";
        // line 19
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 43
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>";
        
        $__internal_ae5623a54524726a9e227377a12e5bbf2890fbdfd4d1d5636d6e9b548ee3c59c->leave($__internal_ae5623a54524726a9e227377a12e5bbf2890fbdfd4d1d5636d6e9b548ee3c59c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_50ad1352c6c6990b4c03c7c1c5981c83061ec0fbf99b92b9682c3c55c579e181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ad1352c6c6990b4c03c7c1c5981c83061ec0fbf99b92b9682c3c55c579e181->enter($__internal_50ad1352c6c6990b4c03c7c1c5981c83061ec0fbf99b92b9682c3c55c579e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reporting System";
        
        $__internal_50ad1352c6c6990b4c03c7c1c5981c83061ec0fbf99b92b9682c3c55c579e181->leave($__internal_50ad1352c6c6990b4c03c7c1c5981c83061ec0fbf99b92b9682c3c55c579e181_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58b1669c9fb2c74a6d07d081280e954bca3c78ccfc6580cf8ee54b5702c0da26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b1669c9fb2c74a6d07d081280e954bca3c78ccfc6580cf8ee54b5702c0da26->enter($__internal_58b1669c9fb2c74a6d07d081280e954bca3c78ccfc6580cf8ee54b5702c0da26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        
        $__internal_58b1669c9fb2c74a6d07d081280e954bca3c78ccfc6580cf8ee54b5702c0da26->leave($__internal_58b1669c9fb2c74a6d07d081280e954bca3c78ccfc6580cf8ee54b5702c0da26_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9dbb6b4a58d244234ef8aeee0ab560399fa3f68cc7aa98b8da95681e877844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9dbb6b4a58d244234ef8aeee0ab560399fa3f68cc7aa98b8da95681e877844->enter($__internal_bb9dbb6b4a58d244234ef8aeee0ab560399fa3f68cc7aa98b8da95681e877844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb9dbb6b4a58d244234ef8aeee0ab560399fa3f68cc7aa98b8da95681e877844->leave($__internal_bb9dbb6b4a58d244234ef8aeee0ab560399fa3f68cc7aa98b8da95681e877844_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_967dfbe09d4f1923fe396ffc6a1354db484077131902deaada29fe65c43ee996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967dfbe09d4f1923fe396ffc6a1354db484077131902deaada29fe65c43ee996->enter($__internal_967dfbe09d4f1923fe396ffc6a1354db484077131902deaada29fe65c43ee996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_967dfbe09d4f1923fe396ffc6a1354db484077131902deaada29fe65c43ee996->leave($__internal_967dfbe09d4f1923fe396ffc6a1354db484077131902deaada29fe65c43ee996_prof);

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
        return array (  160 => 55,  149 => 48,  142 => 20,  136 => 19,  124 => 8,  116 => 56,  114 => 55,  106 => 49,  103 => 48,  94 => 46,  89 => 45,  80 => 43,  76 => 42,  51 => 21,  48 => 19,  35 => 8,  26 => 1,);
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
</html>", "base.html.twig", "D:\\task\\AwesomeCo\\app\\Resources\\views\\base.html.twig");
    }
}
