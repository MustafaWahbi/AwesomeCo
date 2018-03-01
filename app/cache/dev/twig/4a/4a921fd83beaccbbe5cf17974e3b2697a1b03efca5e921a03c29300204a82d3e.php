<?php

/* reports/list_of_Reports.html.twig */
class __TwigTemplate_a574272448946bfc7ccc79ecdac423ad32d3ce8794d4842efb4132ab28df2f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/list_of_Reports.html.twig", 1);
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
        $__internal_6505d2e0409f8f2de0700d417daefb68e85b5730443cdd37b762894cc69b7872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6505d2e0409f8f2de0700d417daefb68e85b5730443cdd37b762894cc69b7872->enter($__internal_6505d2e0409f8f2de0700d417daefb68e85b5730443cdd37b762894cc69b7872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/list_of_Reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6505d2e0409f8f2de0700d417daefb68e85b5730443cdd37b762894cc69b7872->leave($__internal_6505d2e0409f8f2de0700d417daefb68e85b5730443cdd37b762894cc69b7872_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee463f3de2363c7e706690f08e574a1fa83ae5eb420754bd75a87b4ce974b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee463f3de2363c7e706690f08e574a1fa83ae5eb420754bd75a87b4ce974b19->enter($__internal_5ee463f3de2363c7e706690f08e574a1fa83ae5eb420754bd75a87b4ce974b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h2 class=\"page-title\">Approval page</h2>
   <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li class=\"nav-item\">
         <a class=\"nav-link active\" href=\"#General\" role=\"tab\" data-toggle=\"tab\">General</a>
      </li>
      <li class=\"nav-item\">
         <a class=\"nav-link\" href=\"#Site\" role=\"tab\" data-toggle=\"tab\">Site</a>
      </li>

   </ul>

   <!-- Tab panes -->
   <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane  in active\" id=\"General\" >
         <h3>General reports</h3><a href=\"/addGeneralReport\" class=\"btn btn-primary\">Add general report</a>
         <table class=\"table table-striped\">
            <thead>
            <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th><th>Cause</th><th>Justification</th><th>Report date</th><th></th> </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["general_reports"] ?? $this->getContext($context, "general_reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["general_report"]) {
            // line 25
            echo "               <tr>
                  <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
            echo "</th>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "priority", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "description", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "cause", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "justification", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["general_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                  <td>
                     <a href=\"/editGeneralReport/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
                  </td>
               </tr>



            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['general_report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 43
        echo "            </tbody>
         </table>
      </div>
      <div role=\"tabpanel\" class=\"tab-pane \" id=\"Site\">
         <h3>Site reports</h3><a href=\"/addSiteReport\" class=\"btn btn-primary\">Add site report</a>
         <table class=\"table table-striped\">
            <thead>
            <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th><th>Latitude</th><th>Longitude</th><th>Justification</th><th>Report date</th><th></th> </tr>
            </thead>
            <tbody>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["site_reports"] ?? $this->getContext($context, "site_reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["site_report"]) {
            // line 54
            echo "               <tr>
                  <th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
            echo "</th>
                  <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "priority", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "description", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "latitude", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "longitude", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "justification", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["site_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                  <td>
                     <a href=\"/editSiteReport/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
                  </td>
               </tr>



            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site_report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
            ";
        // line 73
        echo "            </tbody>
         </table>
      </div>
   </div>




";
        
        $__internal_5ee463f3de2363c7e706690f08e574a1fa83ae5eb420754bd75a87b4ce974b19->leave($__internal_5ee463f3de2363c7e706690f08e574a1fa83ae5eb420754bd75a87b4ce974b19_prof);

    }

    public function getTemplateName()
    {
        return "reports/list_of_Reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  179 => 71,  166 => 64,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  130 => 54,  126 => 53,  114 => 43,  111 => 41,  98 => 34,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
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
   <h2 class=\"page-title\">Approval page</h2>
   <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li class=\"nav-item\">
         <a class=\"nav-link active\" href=\"#General\" role=\"tab\" data-toggle=\"tab\">General</a>
      </li>
      <li class=\"nav-item\">
         <a class=\"nav-link\" href=\"#Site\" role=\"tab\" data-toggle=\"tab\">Site</a>
      </li>

   </ul>

   <!-- Tab panes -->
   <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane  in active\" id=\"General\" >
         <h3>General reports</h3><a href=\"/addGeneralReport\" class=\"btn btn-primary\">Add general report</a>
         <table class=\"table table-striped\">
            <thead>
            <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th><th>Cause</th><th>Justification</th><th>Report date</th><th></th> </tr>
            </thead>
            <tbody>
            {% for general_report in general_reports %}
               <tr>
                  <th scope=\"row\">{{ general_report.id }}</th>
                  <td>{{ general_report.name }}</td>
                  <td>{{ general_report.priority }}</td>
                  <td>{{ general_report.description }}</td>
                  <td>{{ general_report.cause }}</td>
                  <td>{{ general_report.justification }}</td>
                  <td>{{ general_report.createdAt|date('F j, Y, g:i a') }}</td>
                  <td>
                     <a href=\"/editGeneralReport/{{ general_report.id }}\" class=\"btn btn-success\">Edit</a>
                  </td>
               </tr>



            {% endfor %}

            {#{% endfor %}#}
            </tbody>
         </table>
      </div>
      <div role=\"tabpanel\" class=\"tab-pane \" id=\"Site\">
         <h3>Site reports</h3><a href=\"/addSiteReport\" class=\"btn btn-primary\">Add site report</a>
         <table class=\"table table-striped\">
            <thead>
            <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th><th>Latitude</th><th>Longitude</th><th>Justification</th><th>Report date</th><th></th> </tr>
            </thead>
            <tbody>
            {% for site_report in site_reports %}
               <tr>
                  <th scope=\"row\">{{ site_report.id }}</th>
                  <td>{{ site_report.name }}</td>
                  <td>{{ site_report.priority }}</td>
                  <td>{{ site_report.description }}</td>
                  <td>{{ site_report.latitude }}</td>
                  <td>{{ site_report.longitude }}</td>
                  <td>{{ site_report.justification }}</td>
                  <td>{{ site_report.createdAt|date('F j, Y, g:i a') }}</td>
                  <td>
                     <a href=\"/editSiteReport/{{ site_report.id }}\" class=\"btn btn-success\">Edit</a>
                  </td>
               </tr>



            {% endfor %}

            {#{% endfor %}#}
            </tbody>
         </table>
      </div>
   </div>




{% endblock %}
", "reports/list_of_Reports.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\list_of_Reports.html.twig");
    }
}
