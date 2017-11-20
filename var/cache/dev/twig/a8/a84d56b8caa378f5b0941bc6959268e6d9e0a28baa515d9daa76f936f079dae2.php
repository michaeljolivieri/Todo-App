<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1e9467da3cc2503384354f3c5541084103e848459ada8d34f9aa6c085c4820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1e9467da3cc2503384354f3c5541084103e848459ada8d34f9aa6c085c4820->enter($__internal_1c1e9467da3cc2503384354f3c5541084103e848459ada8d34f9aa6c085c4820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ff8778413146e7da44df142d5affdce01f581f06eee5be8a474f6abbae7d3453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8778413146e7da44df142d5affdce01f581f06eee5be8a474f6abbae7d3453->enter($__internal_ff8778413146e7da44df142d5affdce01f581f06eee5be8a474f6abbae7d3453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"app/Resources/css/style.css\" type=\"text/css\" media=\"screen\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">TodoList</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/todo/create\">Add Todo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        
        <div class=\"row\"> 
            <div class=\"col-md-12\">
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </div>
        </div>        

    </div><!-- /.container -->
    
    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "  </body>
</html>
";
        
        $__internal_1c1e9467da3cc2503384354f3c5541084103e848459ada8d34f9aa6c085c4820->leave($__internal_1c1e9467da3cc2503384354f3c5541084103e848459ada8d34f9aa6c085c4820_prof);

        
        $__internal_ff8778413146e7da44df142d5affdce01f581f06eee5be8a474f6abbae7d3453->leave($__internal_ff8778413146e7da44df142d5affdce01f581f06eee5be8a474f6abbae7d3453_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_d28a7884c57e89dd454763a794cacee2ecf30dcbbbd1a6cb00d95ae965d75676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28a7884c57e89dd454763a794cacee2ecf30dcbbbd1a6cb00d95ae965d75676->enter($__internal_d28a7884c57e89dd454763a794cacee2ecf30dcbbbd1a6cb00d95ae965d75676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6efa23e5cc8a801b6b111ad97237075b86bd4b52e31cf5771f3560af625f5c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efa23e5cc8a801b6b111ad97237075b86bd4b52e31cf5771f3560af625f5c9a->enter($__internal_6efa23e5cc8a801b6b111ad97237075b86bd4b52e31cf5771f3560af625f5c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6efa23e5cc8a801b6b111ad97237075b86bd4b52e31cf5771f3560af625f5c9a->leave($__internal_6efa23e5cc8a801b6b111ad97237075b86bd4b52e31cf5771f3560af625f5c9a_prof);

        
        $__internal_d28a7884c57e89dd454763a794cacee2ecf30dcbbbd1a6cb00d95ae965d75676->leave($__internal_d28a7884c57e89dd454763a794cacee2ecf30dcbbbd1a6cb00d95ae965d75676_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0da2cf92212db9aceba4988c704af7bac15c3eb7622d9b40db1f61af236d6adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da2cf92212db9aceba4988c704af7bac15c3eb7622d9b40db1f61af236d6adc->enter($__internal_0da2cf92212db9aceba4988c704af7bac15c3eb7622d9b40db1f61af236d6adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_857d1d9a6a77d827774305b07e2bdbb7d60d5913c43790af88ebc563593b272c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857d1d9a6a77d827774305b07e2bdbb7d60d5913c43790af88ebc563593b272c->enter($__internal_857d1d9a6a77d827774305b07e2bdbb7d60d5913c43790af88ebc563593b272c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_857d1d9a6a77d827774305b07e2bdbb7d60d5913c43790af88ebc563593b272c->leave($__internal_857d1d9a6a77d827774305b07e2bdbb7d60d5913c43790af88ebc563593b272c_prof);

        
        $__internal_0da2cf92212db9aceba4988c704af7bac15c3eb7622d9b40db1f61af236d6adc->leave($__internal_0da2cf92212db9aceba4988c704af7bac15c3eb7622d9b40db1f61af236d6adc_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_223710f2f1c81e9bbf07d1316680e193e0c70bc4e1f28854c28fe958107c16fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223710f2f1c81e9bbf07d1316680e193e0c70bc4e1f28854c28fe958107c16fe->enter($__internal_223710f2f1c81e9bbf07d1316680e193e0c70bc4e1f28854c28fe958107c16fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4f2543ca7bd1cbd50e480e57992e8d3e976882abe6b9602b3242387698b85cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f2543ca7bd1cbd50e480e57992e8d3e976882abe6b9602b3242387698b85cb->enter($__internal_d4f2543ca7bd1cbd50e480e57992e8d3e976882abe6b9602b3242387698b85cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4f2543ca7bd1cbd50e480e57992e8d3e976882abe6b9602b3242387698b85cb->leave($__internal_d4f2543ca7bd1cbd50e480e57992e8d3e976882abe6b9602b3242387698b85cb_prof);

        
        $__internal_223710f2f1c81e9bbf07d1316680e193e0c70bc4e1f28854c28fe958107c16fe->leave($__internal_223710f2f1c81e9bbf07d1316680e193e0c70bc4e1f28854c28fe958107c16fe_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0cf6d64423298f1c850e1bb6cca82b3cfa89fba9e982c536955ab5685cb3de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cf6d64423298f1c850e1bb6cca82b3cfa89fba9e982c536955ab5685cb3de7->enter($__internal_b0cf6d64423298f1c850e1bb6cca82b3cfa89fba9e982c536955ab5685cb3de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_015b584f2043988925f82231e242b9cbcfe40149cfa6bde529e0476f681c4779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015b584f2043988925f82231e242b9cbcfe40149cfa6bde529e0476f681c4779->enter($__internal_015b584f2043988925f82231e242b9cbcfe40149cfa6bde529e0476f681c4779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_015b584f2043988925f82231e242b9cbcfe40149cfa6bde529e0476f681c4779->leave($__internal_015b584f2043988925f82231e242b9cbcfe40149cfa6bde529e0476f681c4779_prof);

        
        $__internal_b0cf6d64423298f1c850e1bb6cca82b3cfa89fba9e982c536955ab5685cb3de7->leave($__internal_b0cf6d64423298f1c850e1bb6cca82b3cfa89fba9e982c536955ab5685cb3de7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  145 => 49,  128 => 18,  110 => 12,  98 => 56,  96 => 55,  89 => 50,  87 => 49,  53 => 19,  51 => 18,  42 => 12,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"app/Resources/css/style.css\" type=\"text/css\" media=\"screen\">

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">TodoList</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/todo/create\">Add Todo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        
        <div class=\"row\"> 
            <div class=\"col-md-12\">
                {% block body %}{% endblock %}
            </div>
        </div>        

    </div><!-- /.container -->
    
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/MichaelOlivieri/CODE/projectSymfony/Todo-List/app/Resources/views/base.html.twig");
    }
}
