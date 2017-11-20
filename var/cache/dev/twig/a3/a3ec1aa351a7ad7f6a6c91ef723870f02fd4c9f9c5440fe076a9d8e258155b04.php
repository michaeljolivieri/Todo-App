<?php

/* edit.html.twig */
class __TwigTemplate_f45a854e642f4a9bc061ead4d1e9efe707f8774dff964959133224d81aeac2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "edit.html.twig", 1);
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
        $__internal_68902031b6e2a3e16c598e507ea265f08608992e46b886fd904d9ff8bbb57e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68902031b6e2a3e16c598e507ea265f08608992e46b886fd904d9ff8bbb57e5c->enter($__internal_68902031b6e2a3e16c598e507ea265f08608992e46b886fd904d9ff8bbb57e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit.html.twig"));

        $__internal_94e7060ae5d9997f6483c5a37b53365f5fdaa88890b9089c1c9299b8babfbfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e7060ae5d9997f6483c5a37b53365f5fdaa88890b9089c1c9299b8babfbfa0->enter($__internal_94e7060ae5d9997f6483c5a37b53365f5fdaa88890b9089c1c9299b8babfbfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68902031b6e2a3e16c598e507ea265f08608992e46b886fd904d9ff8bbb57e5c->leave($__internal_68902031b6e2a3e16c598e507ea265f08608992e46b886fd904d9ff8bbb57e5c_prof);

        
        $__internal_94e7060ae5d9997f6483c5a37b53365f5fdaa88890b9089c1c9299b8babfbfa0->leave($__internal_94e7060ae5d9997f6483c5a37b53365f5fdaa88890b9089c1c9299b8babfbfa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c750205b141804579678297d872ec5f45313b6325746ee7c0982e9acb63ba19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c750205b141804579678297d872ec5f45313b6325746ee7c0982e9acb63ba19f->enter($__internal_c750205b141804579678297d872ec5f45313b6325746ee7c0982e9acb63ba19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9d8ac84108aee35f16d40886fe7cc7b56a080b1fa8892f25c65859c27f07f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d8ac84108aee35f16d40886fe7cc7b56a080b1fa8892f25c65859c27f07f3d->enter($__internal_b9d8ac84108aee35f16d40886fe7cc7b56a080b1fa8892f25c65859c27f07f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=page-header>Edit Todos</h2>
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
        
        $__internal_b9d8ac84108aee35f16d40886fe7cc7b56a080b1fa8892f25c65859c27f07f3d->leave($__internal_b9d8ac84108aee35f16d40886fe7cc7b56a080b1fa8892f25c65859c27f07f3d_prof);

        
        $__internal_c750205b141804579678297d872ec5f45313b6325746ee7c0982e9acb63ba19f->leave($__internal_c750205b141804579678297d872ec5f45313b6325746ee7c0982e9acb63ba19f_prof);

    }

    public function getTemplateName()
    {
        return "edit.html.twig";
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
<h2 class=page-header>Edit Todos</h2>
{{form_start(form)}}
{{form_widget(form)}}
{{form_end(form)}}
{% endblock %}", "edit.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/app/Resources/views/edit.html.twig");
    }
}
