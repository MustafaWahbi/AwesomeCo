<?php

/* base.html.twig */
class __TwigTemplate_f878981b3f9153cab44b5dea345d112eb79e37971a3c5518c25a0053b7eb11cf extends Twig_Template
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
        $__internal_468e90d00a9d7fc637f56899bea052154cc6de0562d84ef1b3e54769e79bd3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468e90d00a9d7fc637f56899bea052154cc6de0562d84ef1b3e54769e79bd3df->enter($__internal_468e90d00a9d7fc637f56899bea052154cc6de0562d84ef1b3e54769e79bd3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 17
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 41
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 44
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>";
        
        $__internal_468e90d00a9d7fc637f56899bea052154cc6de0562d84ef1b3e54769e79bd3df->leave($__internal_468e90d00a9d7fc637f56899bea052154cc6de0562d84ef1b3e54769e79bd3df_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_406fed086b81983ff16402f5d06602c4755dd5f38737651595b82d93c2e80d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406fed086b81983ff16402f5d06602c4755dd5f38737651595b82d93c2e80d07->enter($__internal_406fed086b81983ff16402f5d06602c4755dd5f38737651595b82d93c2e80d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reporting System";
        
        $__internal_406fed086b81983ff16402f5d06602c4755dd5f38737651595b82d93c2e80d07->leave($__internal_406fed086b81983ff16402f5d06602c4755dd5f38737651595b82d93c2e80d07_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13f321c41f65ba3b62b43d1890d990c1beba1eb827ed6296a18e7e352a9d5b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f321c41f65ba3b62b43d1890d990c1beba1eb827ed6296a18e7e352a9d5b4e->enter($__internal_13f321c41f65ba3b62b43d1890d990c1beba1eb827ed6296a18e7e352a9d5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        
        $__internal_13f321c41f65ba3b62b43d1890d990c1beba1eb827ed6296a18e7e352a9d5b4e->leave($__internal_13f321c41f65ba3b62b43d1890d990c1beba1eb827ed6296a18e7e352a9d5b4e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c97251a6ae8b83a9ca3a2d5b389546536a10902ecb741d11a1df086ade841e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c97251a6ae8b83a9ca3a2d5b389546536a10902ecb741d11a1df086ade841e5->enter($__internal_1c97251a6ae8b83a9ca3a2d5b389546536a10902ecb741d11a1df086ade841e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c97251a6ae8b83a9ca3a2d5b389546536a10902ecb741d11a1df086ade841e5->leave($__internal_1c97251a6ae8b83a9ca3a2d5b389546536a10902ecb741d11a1df086ade841e5_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79c3b56768dba68768bd91a5571f0136d194df3617b4b325a38df04de471b902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c3b56768dba68768bd91a5571f0136d194df3617b4b325a38df04de471b902->enter($__internal_79c3b56768dba68768bd91a5571f0136d194df3617b4b325a38df04de471b902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79c3b56768dba68768bd91a5571f0136d194df3617b4b325a38df04de471b902->leave($__internal_79c3b56768dba68768bd91a5571f0136d194df3617b4b325a38df04de471b902_prof);

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
        return array (  158 => 53,  147 => 46,  140 => 18,  134 => 17,  122 => 8,  114 => 54,  112 => 53,  104 => 47,  101 => 46,  92 => 44,  87 => 43,  78 => 41,  74 => 40,  49 => 19,  46 => 17,  35 => 8,  26 => 1,);
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
</html>", "base.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\base.html.twig");
    }
}
