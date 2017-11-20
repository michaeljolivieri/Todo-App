<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed4bffb566e66de04b976223a3cc05e331dc0b32d64b50cb7995269cdabc8ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4bffb566e66de04b976223a3cc05e331dc0b32d64b50cb7995269cdabc8ac2->enter($__internal_ed4bffb566e66de04b976223a3cc05e331dc0b32d64b50cb7995269cdabc8ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79a806162c84bdf5aa4071d4f1c9ef98f1f7324c93d1e7a46ead17a2a6a2e212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a806162c84bdf5aa4071d4f1c9ef98f1f7324c93d1e7a46ead17a2a6a2e212->enter($__internal_79a806162c84bdf5aa4071d4f1c9ef98f1f7324c93d1e7a46ead17a2a6a2e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed4bffb566e66de04b976223a3cc05e331dc0b32d64b50cb7995269cdabc8ac2->leave($__internal_ed4bffb566e66de04b976223a3cc05e331dc0b32d64b50cb7995269cdabc8ac2_prof);

        
        $__internal_79a806162c84bdf5aa4071d4f1c9ef98f1f7324c93d1e7a46ead17a2a6a2e212->leave($__internal_79a806162c84bdf5aa4071d4f1c9ef98f1f7324c93d1e7a46ead17a2a6a2e212_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_754612b5a04c329f75d3664debf59effb7f9ba90db89e6eeeeb06a84fdf77403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754612b5a04c329f75d3664debf59effb7f9ba90db89e6eeeeb06a84fdf77403->enter($__internal_754612b5a04c329f75d3664debf59effb7f9ba90db89e6eeeeb06a84fdf77403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a38c39de1fa772d5a017b7933ee5f929fe27b270b7341b17d1c0679df19d320d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38c39de1fa772d5a017b7933ee5f929fe27b270b7341b17d1c0679df19d320d->enter($__internal_a38c39de1fa772d5a017b7933ee5f929fe27b270b7341b17d1c0679df19d320d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a38c39de1fa772d5a017b7933ee5f929fe27b270b7341b17d1c0679df19d320d->leave($__internal_a38c39de1fa772d5a017b7933ee5f929fe27b270b7341b17d1c0679df19d320d_prof);

        
        $__internal_754612b5a04c329f75d3664debf59effb7f9ba90db89e6eeeeb06a84fdf77403->leave($__internal_754612b5a04c329f75d3664debf59effb7f9ba90db89e6eeeeb06a84fdf77403_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_95400b7f8dd3721ca292956a6fe5a4bb2c43a0b1413ca2497d2cd16c605f9f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95400b7f8dd3721ca292956a6fe5a4bb2c43a0b1413ca2497d2cd16c605f9f6a->enter($__internal_95400b7f8dd3721ca292956a6fe5a4bb2c43a0b1413ca2497d2cd16c605f9f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8921e216776a91209c9ba339aecc4be6487e412907b55180a8286eb81b2430af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8921e216776a91209c9ba339aecc4be6487e412907b55180a8286eb81b2430af->enter($__internal_8921e216776a91209c9ba339aecc4be6487e412907b55180a8286eb81b2430af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8921e216776a91209c9ba339aecc4be6487e412907b55180a8286eb81b2430af->leave($__internal_8921e216776a91209c9ba339aecc4be6487e412907b55180a8286eb81b2430af_prof);

        
        $__internal_95400b7f8dd3721ca292956a6fe5a4bb2c43a0b1413ca2497d2cd16c605f9f6a->leave($__internal_95400b7f8dd3721ca292956a6fe5a4bb2c43a0b1413ca2497d2cd16c605f9f6a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_34973415e859d1adeb7fe55391c15fe8face2c03fed88c50c62c4e63731d4a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34973415e859d1adeb7fe55391c15fe8face2c03fed88c50c62c4e63731d4a32->enter($__internal_34973415e859d1adeb7fe55391c15fe8face2c03fed88c50c62c4e63731d4a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_135b48d4010140a536549d01f4de5a0229e51c32da9a76a8a82ebd49b3d5cadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135b48d4010140a536549d01f4de5a0229e51c32da9a76a8a82ebd49b3d5cadd->enter($__internal_135b48d4010140a536549d01f4de5a0229e51c32da9a76a8a82ebd49b3d5cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_135b48d4010140a536549d01f4de5a0229e51c32da9a76a8a82ebd49b3d5cadd->leave($__internal_135b48d4010140a536549d01f4de5a0229e51c32da9a76a8a82ebd49b3d5cadd_prof);

        
        $__internal_34973415e859d1adeb7fe55391c15fe8face2c03fed88c50c62c4e63731d4a32->leave($__internal_34973415e859d1adeb7fe55391c15fe8face2c03fed88c50c62c4e63731d4a32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
