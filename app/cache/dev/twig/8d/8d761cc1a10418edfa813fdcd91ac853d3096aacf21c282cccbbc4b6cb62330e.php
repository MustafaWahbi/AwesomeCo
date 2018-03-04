<?php

/* reports/approvalPage.html.twig */
class __TwigTemplate_cc89c81855841d492ad99c4b4dd3d1adff1606a82d3df5f8a118fdf9d532d8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_28921dbf09b2266a73fe7c5389070d1f07bc5765b657353ddb7b408c12656e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28921dbf09b2266a73fe7c5389070d1f07bc5765b657353ddb7b408c12656e7b->enter($__internal_28921dbf09b2266a73fe7c5389070d1f07bc5765b657353ddb7b408c12656e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/approvalPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28921dbf09b2266a73fe7c5389070d1f07bc5765b657353ddb7b408c12656e7b->leave($__internal_28921dbf09b2266a73fe7c5389070d1f07bc5765b657353ddb7b408c12656e7b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3606d7ebd06c883c898724d048963792e1b65ae4f4fc25af4b1ddc772d4dce2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3606d7ebd06c883c898724d048963792e1b65ae4f4fc25af4b1ddc772d4dce2f->enter($__internal_3606d7ebd06c883c898724d048963792e1b65ae4f4fc25af4b1ddc772d4dce2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["general_reports"] ?? $this->getContext($context, "general_reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["general_report"]) {
            // line 27
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "name", array()), "html", null, true);
            echo "</td>

                            ";
            // line 31
            if (($this->getAttribute($context["general_report"], "ParentId", array()) == 0)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "cause", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["general_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
            echo "/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
            echo "/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["general_report"], "id", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["site_reports"] ?? $this->getContext($context, "site_reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["site_report"]) {
            // line 71
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "name", array()), "html", null, true);
            echo "</td>
                            ";
            // line 74
            if (($this->getAttribute($context["site_report"], "ParentId", array()) == 0)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "latitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "longitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["site_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Action
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
            echo "/1\">Approve</a>
                                    <a class=\"dropdown-item\" href=\"/approveForm/";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
            echo "/2\">Reject</a>
                                    <a class=\"dropdown-item btn btn-danger\" href=\"/delete/";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_report"], "id", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rejected_reports"] ?? $this->getContext($context, "rejected_reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rejected_report"]) {
            // line 114
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["rejected_report"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["rejected_report"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["rejected_report"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["rejected_report"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 120
            if (($this->getAttribute($context["rejected_report"], "type", array()) == "G")) {
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rejected_report"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
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
        
        $__internal_3606d7ebd06c883c898724d048963792e1b65ae4f4fc25af4b1ddc772d4dce2f->leave($__internal_3606d7ebd06c883c898724d048963792e1b65ae4f4fc25af4b1ddc772d4dce2f_prof);

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
        return array (  297 => 136,  294 => 134,  281 => 127,  277 => 125,  273 => 123,  269 => 121,  267 => 120,  262 => 118,  258 => 117,  254 => 116,  250 => 115,  247 => 114,  243 => 113,  231 => 103,  228 => 101,  213 => 92,  209 => 91,  205 => 90,  195 => 83,  191 => 82,  187 => 81,  183 => 80,  178 => 79,  174 => 77,  170 => 75,  168 => 74,  164 => 73,  160 => 72,  157 => 71,  153 => 70,  141 => 60,  138 => 58,  123 => 49,  119 => 48,  115 => 47,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  90 => 36,  86 => 34,  82 => 32,  80 => 31,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
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
", "reports/approvalPage.html.twig", "C:\\xampp\\htdocs\\new\\Reports\\app\\Resources\\views\\reports\\approvalPage.html.twig");
    }
}
