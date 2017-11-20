<?php

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_023cd0c13c89f1f7c8d3cc4fa0d7229d046f6486b13e098d6e1ac4eb033bf1b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03b9698f4c4a2a60222288efbdf66660b6dada2a7c025b358a8d49bc6e553469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b9698f4c4a2a60222288efbdf66660b6dada2a7c025b358a8d49bc6e553469->enter($__internal_03b9698f4c4a2a60222288efbdf66660b6dada2a7c025b358a8d49bc6e553469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        $__internal_ce1ce02e289912d44482764e8e25418ae8cc91f3bb8cc11f96feef574cbc40c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1ce02e289912d44482764e8e25418ae8cc91f3bb8cc11f96feef574cbc40c7->enter($__internal_ce1ce02e289912d44482764e8e25418ae8cc91f3bb8cc11f96feef574cbc40c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_03b9698f4c4a2a60222288efbdf66660b6dada2a7c025b358a8d49bc6e553469->leave($__internal_03b9698f4c4a2a60222288efbdf66660b6dada2a7c025b358a8d49bc6e553469_prof);

        
        $__internal_ce1ce02e289912d44482764e8e25418ae8cc91f3bb8cc11f96feef574cbc40c7->leave($__internal_ce1ce02e289912d44482764e8e25418ae8cc91f3bb8cc11f96feef574cbc40c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@WebProfiler/Profiler/table.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/table.html.twig");
    }
}
