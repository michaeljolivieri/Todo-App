<?php

/* index.html.twig */
class __TwigTemplate_c60359701115f635c2529f509905ca181602d6b2ed510808a697ee837d26d82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_656eb89bce9da5156b7ba28471e3ab4f75f0d3fedf4b1e63bcb4ede9c57147b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656eb89bce9da5156b7ba28471e3ab4f75f0d3fedf4b1e63bcb4ede9c57147b9->enter($__internal_656eb89bce9da5156b7ba28471e3ab4f75f0d3fedf4b1e63bcb4ede9c57147b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_8fafa91ef38455088d750a9562eba17e5a425d6d9b6dacb08c9da0af977b756a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fafa91ef38455088d750a9562eba17e5a425d6d9b6dacb08c9da0af977b756a->enter($__internal_8fafa91ef38455088d750a9562eba17e5a425d6d9b6dacb08c9da0af977b756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656eb89bce9da5156b7ba28471e3ab4f75f0d3fedf4b1e63bcb4ede9c57147b9->leave($__internal_656eb89bce9da5156b7ba28471e3ab4f75f0d3fedf4b1e63bcb4ede9c57147b9_prof);

        
        $__internal_8fafa91ef38455088d750a9562eba17e5a425d6d9b6dacb08c9da0af977b756a->leave($__internal_8fafa91ef38455088d750a9562eba17e5a425d6d9b6dacb08c9da0af977b756a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26953cf0253be19eaaf0e973b4374258195ce2a3f0df29e2dc5ebb92e69eb81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26953cf0253be19eaaf0e973b4374258195ce2a3f0df29e2dc5ebb92e69eb81->enter($__internal_c26953cf0253be19eaaf0e973b4374258195ce2a3f0df29e2dc5ebb92e69eb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adfed2d3693d349214c027506eab95e1f38529993a03e32990f553ac036505a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfed2d3693d349214c027506eab95e1f38529993a03e32990f553ac036505a8->enter($__internal_adfed2d3693d349214c027506eab95e1f38529993a03e32990f553ac036505a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "            <tr>
                <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/todo/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                    <a href=\"/todo/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                    <a href=\"/todo/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_adfed2d3693d349214c027506eab95e1f38529993a03e32990f553ac036505a8->leave($__internal_adfed2d3693d349214c027506eab95e1f38529993a03e32990f553ac036505a8_prof);

        
        $__internal_c26953cf0253be19eaaf0e973b4374258195ce2a3f0df29e2dc5ebb92e69eb81->leave($__internal_c26953cf0253be19eaaf0e973b4374258195ce2a3f0df29e2dc5ebb92e69eb81_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  90 => 23,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for todo in todos %}
            <tr>
                <th scope=\"row\">{{todo.id}}</th>
                <td>{{todo.name}}</td>
                <td>{{todo.dueDate|date('F j, Y, g:i a')}}</td>
                <td>
                    <a href=\"/todo/details/{{todo.id}}\" class=\"btn btn-success\">View</a>
                    <a href=\"/todo/edit/{{todo.id}}\" class=\"btn btn-primary\">Edit</a>
                    <a href=\"/todo/delete/{{todo.id}}\" class=\"btn btn-danger\">Delete</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "index.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/app/Resources/views/index.html.twig");
    }
}
