<?php

/* create.html.twig */
class __TwigTemplate_07b81c67a7596f3a80c73c6d38d0b9542381309747d3b2887dc6507835b58d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "create.html.twig", 1);
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
        $__internal_f530bccd8575f2bca78fcce505e83e66dbabb5981caeef3246d057078c0b99c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f530bccd8575f2bca78fcce505e83e66dbabb5981caeef3246d057078c0b99c4->enter($__internal_f530bccd8575f2bca78fcce505e83e66dbabb5981caeef3246d057078c0b99c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create.html.twig"));

        $__internal_aa870925386d9cbcaed9d5c9bc2ef52e10243e708ca3d9c787e63f6b82035b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa870925386d9cbcaed9d5c9bc2ef52e10243e708ca3d9c787e63f6b82035b78->enter($__internal_aa870925386d9cbcaed9d5c9bc2ef52e10243e708ca3d9c787e63f6b82035b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f530bccd8575f2bca78fcce505e83e66dbabb5981caeef3246d057078c0b99c4->leave($__internal_f530bccd8575f2bca78fcce505e83e66dbabb5981caeef3246d057078c0b99c4_prof);

        
        $__internal_aa870925386d9cbcaed9d5c9bc2ef52e10243e708ca3d9c787e63f6b82035b78->leave($__internal_aa870925386d9cbcaed9d5c9bc2ef52e10243e708ca3d9c787e63f6b82035b78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_774641edb908ecd3afc96f5854a86daa580fb35322cc058d3e4651d7a450b8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774641edb908ecd3afc96f5854a86daa580fb35322cc058d3e4651d7a450b8f4->enter($__internal_774641edb908ecd3afc96f5854a86daa580fb35322cc058d3e4651d7a450b8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_680a4dca1c6bd56b2b0c2559c6ca06a3e91cbe573966371d3bb68ec8a6bdf1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a4dca1c6bd56b2b0c2559c6ca06a3e91cbe573966371d3bb68ec8a6bdf1b8->enter($__internal_680a4dca1c6bd56b2b0c2559c6ca06a3e91cbe573966371d3bb68ec8a6bdf1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add Todo</h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_680a4dca1c6bd56b2b0c2559c6ca06a3e91cbe573966371d3bb68ec8a6bdf1b8->leave($__internal_680a4dca1c6bd56b2b0c2559c6ca06a3e91cbe573966371d3bb68ec8a6bdf1b8_prof);

        
        $__internal_774641edb908ecd3afc96f5854a86daa580fb35322cc058d3e4651d7a450b8f4->leave($__internal_774641edb908ecd3afc96f5854a86daa580fb35322cc058d3e4651d7a450b8f4_prof);

    }

    public function getTemplateName()
    {
        return "create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"page-header\">Add Todo</h2>
    {{form_start(form)}}
    {{form_widget(form)}}
    {{form_end(form)}}
{% endblock %}", "create.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/app/Resources/views/create.html.twig");
    }
}
