<?php

/* reports/listReports.html.twig */
class __TwigTemplate_2e061af1248cb4aba5bb8655ac7be1bf31ce5d0633e08bde8efcf430b5cdb2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/listReports.html.twig", 1);
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
        $__internal_0b417ffe613338e215fab7497f0ad48038fd433feb0ea9f65a660346fb623cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b417ffe613338e215fab7497f0ad48038fd433feb0ea9f65a660346fb623cf8->enter($__internal_0b417ffe613338e215fab7497f0ad48038fd433feb0ea9f65a660346fb623cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/listReports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b417ffe613338e215fab7497f0ad48038fd433feb0ea9f65a660346fb623cf8->leave($__internal_0b417ffe613338e215fab7497f0ad48038fd433feb0ea9f65a660346fb623cf8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ceeee7a322b3265cfca3d8a3488659cd336d67497eab63573bf004159af5c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceeee7a322b3265cfca3d8a3488659cd336d67497eab63573bf004159af5c5e->enter($__internal_1ceeee7a322b3265cfca3d8a3488659cd336d67497eab63573bf004159af5c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <table class=\"table table-striped\">
   <thead>
   <h2>Latest reports</h2>
   <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th> <th>Report type</th><th>Report date</th><th></th> </tr>
   </thead>
   <tbody>
   ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? $this->getContext($context, "reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 12
            echo "      <tr>
         <th scope=\"row\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "</th>
         <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "name", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "priority", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "description", array()), "html", null, true);
            echo "</td>
         <td>
             ";
            // line 18
            if (($this->getAttribute($context["report"], "type", array()) == "G")) {
                // line 19
                echo "                General
             ";
            } else {
                // line 21
                echo "                 Site
             ";
            }
            // line 23
            echo "
         </td>
         <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
         <td>
            <a href=\"/report/edit/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
             ";
            // line 30
            echo "         </td>
      </tr>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
   ";
        // line 36
        echo "   </tbody>
   </table>";
        
        $__internal_1ceeee7a322b3265cfca3d8a3488659cd336d67497eab63573bf004159af5c5e->leave($__internal_1ceeee7a322b3265cfca3d8a3488659cd336d67497eab63573bf004159af5c5e_prof);

    }

    public function getTemplateName()
    {
        return "reports/listReports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  105 => 34,  96 => 30,  92 => 27,  87 => 25,  83 => 23,  79 => 21,  75 => 19,  73 => 18,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
   <h2>Latest reports</h2>
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
            <a href=\"/report/edit/{{ report.id }}\" class=\"btn btn-success\">Edit</a>
             {#<a href=\"/todo/details/1\" class=\"btn btn-success\">View</a>
            <a href=\"/todo/delete/1\" class=\"btn btn-danger\">Delete</a>#}
         </td>
      </tr>

   {% endfor %}

   {#{% endfor %}#}
   </tbody>
   </table>{% endblock %}
", "reports/listReports.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\listReports.html.twig");
    }
}
