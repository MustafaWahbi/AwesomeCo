<?php

/* reports/approvalPage.html.twig */
class __TwigTemplate_ece4e460f8144ec8bd1ec2d0f9c3f687b811fd3e8a25e1520266503fbcf693fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/approvalPage.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/approvalPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-title\">Approval page</h2>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#General\" role=\"tab\" data-toggle=\"tab\">General</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#Site\" role=\"tab\" data-toggle=\"tab\">Site</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#Rejected\" role=\"tab\" data-toggle=\"tab\">Rejected</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane  in active\" id=\"General\" >
            <h3>General reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th><th>Status</th> <th>Report priority</th><th>Description</th><th>Cause</th><th>Created date</th><th></th> </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["general_reports"]) || array_key_exists("general_reports", $context) ? $context["general_reports"] : (function () { throw new Twig_Error_Runtime('Variable "general_reports" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["general_report"]) {
            // line 27
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "name", array()), "html", null, true);
            echo "</td>

                            ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["general_report"], "ParentId", array()) == 0)) {
                // line 32
                echo "                                <td class=\"bg-success\">New Report</td>
                            ";
            } else {
                // line 34
                echo "                                <td class=\"bg-info\">Update</td>
                            ";
            }
            // line 36
            echo "
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "cause", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "id", array()), "html", null, true);
            echo "/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "id", array()), "html", null, true);
            echo "/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["general_report"], "id", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>



                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['general_report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                ";
        // line 60
        echo "                </tbody>
            </table>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane \" id=\"Site\">
            <h3>Site reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th><th>Status</th> <th>Report priority</th><th>Description</th><th>Latitude</th><th>Longitude</th><th>Created date</th><th></th> </tr>
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["site_reports"]) || array_key_exists("site_reports", $context) ? $context["site_reports"] : (function () { throw new Twig_Error_Runtime('Variable "site_reports" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site_report"]) {
            // line 71
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "name", array()), "html", null, true);
            echo "</td>
                            ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["site_report"], "ParentId", array()) == 0)) {
                // line 75
                echo "                        <td class=\"bg-success\">New Report</td>
                        ";
            } else {
                // line 77
                echo "                            <td class=\"bg-info\">Update</td>
                        ";
            }
            // line 79
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "latitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "longitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "id", array()), "html", null, true);
            echo "/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "id", array()), "html", null, true);
            echo "/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site_report"], "id", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>



                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site_report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
                ";
        // line 103
        echo "                </tbody>
            </table>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane \" id=\"Rejected\">
            <h3>Rejected reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th> <th>Report type</th><th>Report date</th> </tr>
                </thead>
                <tbody>
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rejected_reports"]) || array_key_exists("rejected_reports", $context) ? $context["rejected_reports"] : (function () { throw new Twig_Error_Runtime('Variable "rejected_reports" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rejected_report"]) {
            // line 114
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rejected_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rejected_report"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rejected_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rejected_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["rejected_report"], "type", array()) == "G")) {
                // line 121
                echo "                                General
                            ";
            } else {
                // line 123
                echo "                                Site
                            ";
            }
            // line 125
            echo "
                        </td>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rejected_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>

                    </tr>



                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rejected_report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
                ";
        // line 136
        echo "                </tbody>
            </table>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reports/approvalPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 136,  298 => 134,  285 => 127,  281 => 125,  277 => 123,  273 => 121,  271 => 120,  266 => 118,  262 => 117,  258 => 116,  254 => 115,  251 => 114,  247 => 113,  235 => 103,  232 => 101,  217 => 92,  213 => 91,  209 => 90,  199 => 83,  195 => 82,  191 => 81,  187 => 80,  182 => 79,  178 => 77,  174 => 75,  172 => 74,  168 => 73,  164 => 72,  161 => 71,  157 => 70,  145 => 60,  142 => 58,  127 => 49,  123 => 48,  119 => 47,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  94 => 36,  90 => 34,  86 => 32,  84 => 31,  79 => 29,  75 => 28,  72 => 27,  68 => 26,  44 => 4,  38 => 3,  15 => 1,);
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
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#Rejected\" role=\"tab\" data-toggle=\"tab\">Rejected</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane  in active\" id=\"General\" >
            <h3>General reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th><th>Status</th> <th>Report priority</th><th>Description</th><th>Cause</th><th>Created date</th><th></th> </tr>
                </thead>
                <tbody>
                {% for general_report in general_reports %}
                    <tr>
                        <th scope=\"row\">{{ general_report.id }}</th>
                        <td>{{ general_report.name }}</td>

                            {% if general_report.ParentId == 0 %}
                                <td class=\"bg-success\">New Report</td>
                            {% else %}
                                <td class=\"bg-info\">Update</td>
                            {% endif %}

                        <td>{{ general_report.priority }}</td>
                        <td>{{ general_report.description }}</td>
                        <td>{{ general_report.cause }}</td>
                        <td>{{ general_report.createdAt|date('F j, Y, g:i a') }}</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/{{ general_report.id }}/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/{{ general_report.id }}/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/{{ general_report.id }}\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>



                {% endfor %}

                {#{% endfor %}#}
                </tbody>
            </table>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane \" id=\"Site\">
            <h3>Site reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th><th>Status</th> <th>Report priority</th><th>Description</th><th>Latitude</th><th>Longitude</th><th>Created date</th><th></th> </tr>
                </thead>
                <tbody>
                {% for site_report in site_reports %}
                    <tr>
                        <th scope=\"row\">{{ site_report.id }}</th>
                        <td>{{ site_report.name }}</td>
                            {% if site_report.ParentId == 0 %}
                        <td class=\"bg-success\">New Report</td>
                        {% else %}
                            <td class=\"bg-info\">Update</td>
                        {% endif %}
                        <td>{{ site_report.priority }}</td>
                        <td>{{ site_report.description }}</td>
                        <td>{{ site_report.latitude }}</td>
                        <td>{{ site_report.longitude }}</td>
                        <td>{{ site_report.createdAt|date('F j, Y, g:i a') }}</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/{{ site_report.id }}/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/{{ site_report.id }}/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/{{ site_report.id }}\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>



                {% endfor %}

                {#{% endfor %}#}
                </tbody>
            </table>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane \" id=\"Rejected\">
            <h3>Rejected reports</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr> <th>#</th> <th>Name</th> <th>Report priority</th><th>Description</th> <th>Report type</th><th>Report date</th> </tr>
                </thead>
                <tbody>
                {% for rejected_report in rejected_reports %}
                    <tr>
                        <th scope=\"row\">{{ rejected_report.id }}</th>
                        <td>{{ rejected_report.name }}</td>
                        <td>{{ rejected_report.priority }}</td>
                        <td>{{ rejected_report.description }}</td>
                        <td>
                            {% if  rejected_report.type == 'G' %}
                                General
                            {% else %}
                                Site
                            {% endif %}

                        </td>
                        <td>{{ rejected_report.createdAt|date('F j, Y, g:i a') }}</td>

                    </tr>



                {% endfor %}

                {#{% endfor %}#}
                </tbody>
            </table>
        </div>
    </div>




{% endblock %}
", "reports/approvalPage.html.twig", "D:\\task\\AwesomeCo\\app\\Resources\\views\\reports\\approvalPage.html.twig");
    }
}
