<?php

/* reports/generalReports.html.twig */
class __TwigTemplate_9ab69d4f6799b2f72070c57743ec728221e50d4c1dcd17624d435ce74f41e954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/generalReports.html.twig", 1);
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
        $__internal_2d24bdf43d48f3d6d2f9e4b1fd2b714c0d5328ce790859b6d10d816d7b1ff6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d24bdf43d48f3d6d2f9e4b1fd2b714c0d5328ce790859b6d10d816d7b1ff6cb->enter($__internal_2d24bdf43d48f3d6d2f9e4b1fd2b714c0d5328ce790859b6d10d816d7b1ff6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/generalReports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d24bdf43d48f3d6d2f9e4b1fd2b714c0d5328ce790859b6d10d816d7b1ff6cb->leave($__internal_2d24bdf43d48f3d6d2f9e4b1fd2b714c0d5328ce790859b6d10d816d7b1ff6cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0adae482b11399614fa55ebd4c6ac18311241bcb5a31317e9cca5eaae30f65b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adae482b11399614fa55ebd4c6ac18311241bcb5a31317e9cca5eaae30f65b6->enter($__internal_0adae482b11399614fa55ebd4c6ac18311241bcb5a31317e9cca5eaae30f65b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <table class=\"table table-striped\">
   <thead>
   <h2>General reports</h2>
   <a href=\"/addGeneralReport\" class=\"btn btn-primary\">Add general report</a>
   <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th> <th>Report type</th><th>Report date</th><th></th> </tr>
   </thead>
   <tbody>
   ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? $this->getContext($context, "reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 13
            echo "      <tr>
         <th scope=\"row\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "</th>
         <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "name", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "priority", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "description", array()), "html", null, true);
            echo "</td>
         <td>
             ";
            // line 19
            if (($this->getAttribute($context["report"], "type", array()) == "G")) {
                // line 20
                echo "                General
             ";
            } else {
                // line 22
                echo "                Site
             ";
            }
            // line 24
            echo "
         </td>
         <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
         <td>
            <a href=\"/editGeneralReport/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
             ";
            // line 31
            echo "         </td>
      </tr>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
   ";
        // line 37
        echo "   </tbody>
   </table>";
        
        $__internal_0adae482b11399614fa55ebd4c6ac18311241bcb5a31317e9cca5eaae30f65b6->leave($__internal_0adae482b11399614fa55ebd4c6ac18311241bcb5a31317e9cca5eaae30f65b6_prof);

    }

    public function getTemplateName()
    {
        return "reports/generalReports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  106 => 35,  97 => 31,  93 => 28,  88 => 26,  84 => 24,  80 => 22,  76 => 20,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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

   <table class=\"table table-striped\">
   <thead>
   <h2>General reports</h2>
   <a href=\"/addGeneralReport\" class=\"btn btn-primary\">Add general report</a>
   <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th> <th>Report type</th><th>Report date</th><th></th> </tr>
   </thead>
   <tbody>
   {% for report in reports %}
      <tr>
         <th scope=\"row\">{{ report.id }}</th>
         <td>{{ report.name }}</td>
         <td>{{ report.priority }}</td>
         <td>{{ report.description }}</td>
         <td>
             {% if  report.type == 'G' %}
                General
             {% else %}
                Site
             {% endif %}

         </td>
         <td>{{ report.createdAt|date('F j, Y, g:i a') }}</td>
         <td>
            <a href=\"/editGeneralReport/{{ report.id }}\" class=\"btn btn-success\">Edit</a>
             {#<a href=\"/todo/details/1\" class=\"btn btn-success\">View</a>
            <a href=\"/todo/delete/1\" class=\"btn btn-danger\">Delete</a>#}
         </td>
      </tr>

   {% endfor %}

   {#{% endfor %}#}
   </tbody>
   </table>{% endblock %}
", "reports/generalReports.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\generalReports.html.twig");
    }
}
