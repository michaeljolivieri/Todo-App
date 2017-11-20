<?php

/* details.html.twig */
class __TwigTemplate_faf59cfb672bd47f2720ac46463a97089b2158a554912a2f85dd523666c18a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "details.html.twig", 1);
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
        $__internal_78012c60ce4639996141e8f3194bc2f39642afd7acab33c6bfd4e6118b6e1fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78012c60ce4639996141e8f3194bc2f39642afd7acab33c6bfd4e6118b6e1fa2->enter($__internal_78012c60ce4639996141e8f3194bc2f39642afd7acab33c6bfd4e6118b6e1fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "details.html.twig"));

        $__internal_e485785bd95963bcc65be0c12c540f18cf5e29b22fca760c0aff3ea3d79e374e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e485785bd95963bcc65be0c12c540f18cf5e29b22fca760c0aff3ea3d79e374e->enter($__internal_e485785bd95963bcc65be0c12c540f18cf5e29b22fca760c0aff3ea3d79e374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78012c60ce4639996141e8f3194bc2f39642afd7acab33c6bfd4e6118b6e1fa2->leave($__internal_78012c60ce4639996141e8f3194bc2f39642afd7acab33c6bfd4e6118b6e1fa2_prof);

        
        $__internal_e485785bd95963bcc65be0c12c540f18cf5e29b22fca760c0aff3ea3d79e374e->leave($__internal_e485785bd95963bcc65be0c12c540f18cf5e29b22fca760c0aff3ea3d79e374e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e1e03ca7bcef4fcd2a8a8ec5a6cb3099ca78b40ac6d4d4e7f169ece596c01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e1e03ca7bcef4fcd2a8a8ec5a6cb3099ca78b40ac6d4d4e7f169ece596c01f->enter($__internal_e5e1e03ca7bcef4fcd2a8a8ec5a6cb3099ca78b40ac6d4d4e7f169ece596c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d05996d2207aa92e73ab6d2df64b94cffa013a16c20b0f7e487d431c93e35950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05996d2207aa92e73ab6d2df64b94cffa013a16c20b0f7e487d431c93e35950->enter($__internal_d05996d2207aa92e73ab6d2df64b94cffa013a16c20b0f7e487d431c93e35950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/\">Back To Todos</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
    <p>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
    </p>
    ";
        
        $__internal_d05996d2207aa92e73ab6d2df64b94cffa013a16c20b0f7e487d431c93e35950->leave($__internal_d05996d2207aa92e73ab6d2df64b94cffa013a16c20b0f7e487d431c93e35950_prof);

        
        $__internal_e5e1e03ca7bcef4fcd2a8a8ec5a6cb3099ca78b40ac6d4d4e7f169ece596c01f->leave($__internal_e5e1e03ca7bcef4fcd2a8a8ec5a6cb3099ca78b40ac6d4d4e7f169ece596c01f_prof);

    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <a class=\"btn btn-default\" href=\"/\">Back To Todos</a>
    <hr>
    <h2 class=\"page-header\">{{todo.name}}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{todo.category}}</li>
        <li class=\"list-group-item\">Priority: {{todo.priority}}</li>
        <li class=\"list-group-item\">Due: <strong>{{todo.dueDate|date('F j, Y, g:i a')}}</strong></li>
    </ul>
    <p>
        {{todo.description}}
    </p>
    {% endblock %}", "details.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/app/Resources/views/details.html.twig");
    }
}
