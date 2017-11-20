<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdf2dba0b3feefe222acc4593c3c587e47babd68759c6bc53e0183bb858eda4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf2dba0b3feefe222acc4593c3c587e47babd68759c6bc53e0183bb858eda4e->enter($__internal_bdf2dba0b3feefe222acc4593c3c587e47babd68759c6bc53e0183bb858eda4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c16206c31014e5e513ad74c75360aaa00156be60f37547222feb8bfdf052ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16206c31014e5e513ad74c75360aaa00156be60f37547222feb8bfdf052ec5b->enter($__internal_c16206c31014e5e513ad74c75360aaa00156be60f37547222feb8bfdf052ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf2dba0b3feefe222acc4593c3c587e47babd68759c6bc53e0183bb858eda4e->leave($__internal_bdf2dba0b3feefe222acc4593c3c587e47babd68759c6bc53e0183bb858eda4e_prof);

        
        $__internal_c16206c31014e5e513ad74c75360aaa00156be60f37547222feb8bfdf052ec5b->leave($__internal_c16206c31014e5e513ad74c75360aaa00156be60f37547222feb8bfdf052ec5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0da495049c9facc267246a6c7e3e5b3165c3cd342ddf7b0189577106d1354450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da495049c9facc267246a6c7e3e5b3165c3cd342ddf7b0189577106d1354450->enter($__internal_0da495049c9facc267246a6c7e3e5b3165c3cd342ddf7b0189577106d1354450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f150a123c1efa2df31d9824272e91ff3b95a2290d7d3b167ff1555973c7b53a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f150a123c1efa2df31d9824272e91ff3b95a2290d7d3b167ff1555973c7b53a1->enter($__internal_f150a123c1efa2df31d9824272e91ff3b95a2290d7d3b167ff1555973c7b53a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f150a123c1efa2df31d9824272e91ff3b95a2290d7d3b167ff1555973c7b53a1->leave($__internal_f150a123c1efa2df31d9824272e91ff3b95a2290d7d3b167ff1555973c7b53a1_prof);

        
        $__internal_0da495049c9facc267246a6c7e3e5b3165c3cd342ddf7b0189577106d1354450->leave($__internal_0da495049c9facc267246a6c7e3e5b3165c3cd342ddf7b0189577106d1354450_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cface5a690027e2f4c7b87f7cdde3b1eae6e9178fc79cb97aa5a417dbcc81a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cface5a690027e2f4c7b87f7cdde3b1eae6e9178fc79cb97aa5a417dbcc81a44->enter($__internal_cface5a690027e2f4c7b87f7cdde3b1eae6e9178fc79cb97aa5a417dbcc81a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b11c66505ab611a272346a75d32adc28d37b7af4a75d4701a68306bbb354b0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11c66505ab611a272346a75d32adc28d37b7af4a75d4701a68306bbb354b0a6->enter($__internal_b11c66505ab611a272346a75d32adc28d37b7af4a75d4701a68306bbb354b0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b11c66505ab611a272346a75d32adc28d37b7af4a75d4701a68306bbb354b0a6->leave($__internal_b11c66505ab611a272346a75d32adc28d37b7af4a75d4701a68306bbb354b0a6_prof);

        
        $__internal_cface5a690027e2f4c7b87f7cdde3b1eae6e9178fc79cb97aa5a417dbcc81a44->leave($__internal_cface5a690027e2f4c7b87f7cdde3b1eae6e9178fc79cb97aa5a417dbcc81a44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1379e647fdf1b28e3488b003649759b53c3ca07184e8668052469e1f66a308f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1379e647fdf1b28e3488b003649759b53c3ca07184e8668052469e1f66a308f7->enter($__internal_1379e647fdf1b28e3488b003649759b53c3ca07184e8668052469e1f66a308f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c43017aa8bd9cb2dddbe476610ec55d25daa4e3d1325c815ad8a2f7fef796dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c43017aa8bd9cb2dddbe476610ec55d25daa4e3d1325c815ad8a2f7fef796dc->enter($__internal_3c43017aa8bd9cb2dddbe476610ec55d25daa4e3d1325c815ad8a2f7fef796dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c43017aa8bd9cb2dddbe476610ec55d25daa4e3d1325c815ad8a2f7fef796dc->leave($__internal_3c43017aa8bd9cb2dddbe476610ec55d25daa4e3d1325c815ad8a2f7fef796dc_prof);

        
        $__internal_1379e647fdf1b28e3488b003649759b53c3ca07184e8668052469e1f66a308f7->leave($__internal_1379e647fdf1b28e3488b003649759b53c3ca07184e8668052469e1f66a308f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
