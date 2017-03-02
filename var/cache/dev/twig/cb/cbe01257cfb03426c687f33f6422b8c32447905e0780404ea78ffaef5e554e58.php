<?php

/* default/configure.html.twig */
class __TwigTemplate_d949539ad2ad9926eb1c6037a464ac942764767a8c6ec5aec5935e81d3b81f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/configure.html.twig", 2);
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
        $__internal_32a86f1759efd55188a9496aa38f9b1cd9cacbbf286d1c50840e615d187c58d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a86f1759efd55188a9496aa38f9b1cd9cacbbf286d1c50840e615d187c58d6->enter($__internal_32a86f1759efd55188a9496aa38f9b1cd9cacbbf286d1c50840e615d187c58d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $__internal_0ff9711de29cc3d31bd4b26470a26297cda3383208f089ceadcc8d1dc3fa1c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff9711de29cc3d31bd4b26470a26297cda3383208f089ceadcc8d1dc3fa1c60->enter($__internal_0ff9711de29cc3d31bd4b26470a26297cda3383208f089ceadcc8d1dc3fa1c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a86f1759efd55188a9496aa38f9b1cd9cacbbf286d1c50840e615d187c58d6->leave($__internal_32a86f1759efd55188a9496aa38f9b1cd9cacbbf286d1c50840e615d187c58d6_prof);

        
        $__internal_0ff9711de29cc3d31bd4b26470a26297cda3383208f089ceadcc8d1dc3fa1c60->leave($__internal_0ff9711de29cc3d31bd4b26470a26297cda3383208f089ceadcc8d1dc3fa1c60_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_13e50572a624d58051bace80f8045188bf1d99af9542ea25072aff52a48c975e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e50572a624d58051bace80f8045188bf1d99af9542ea25072aff52a48c975e->enter($__internal_13e50572a624d58051bace80f8045188bf1d99af9542ea25072aff52a48c975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b50daa39d8dff7f79da5dc6fcda7220ba78aa7916dafe2d60922a14a5764b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b50daa39d8dff7f79da5dc6fcda7220ba78aa7916dafe2d60922a14a5764b55->enter($__internal_1b50daa39d8dff7f79da5dc6fcda7220ba78aa7916dafe2d60922a14a5764b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <body>
    <div class=\"brique\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">
            Votre montre actuelle  :
            ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array()) != null)) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array())), "html", null, true);
            echo "
            ";
        }
        // line 15
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array()) == null)) {
            // line 16
            echo "                Aucune
            ";
        }
        // line 18
        echo "        </p>
   </div>
   <div class=\"col-md-2\"></div>
   <div class=col-md-8>
      <div class=\"brique col-md-5 centrer\" style=\"padding:0\">
  \t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fitbit");
        echo "\"><button><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fitbit_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Fitbit\"> <br> Je possède une montre Fitbit.</button></a>
      </div>
      <div class=\"brique col-md-5 centrer\" style=\"padding:0\">
  \t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jawbone");
        echo "\"><button><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jawbone_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Jawbone\"> <br> Je possède une montre Jawbone.</button></a>
      </div>
    </div>
    <div class=\"col-md-2\"></div>

  </body>

";
        
        $__internal_1b50daa39d8dff7f79da5dc6fcda7220ba78aa7916dafe2d60922a14a5764b55->leave($__internal_1b50daa39d8dff7f79da5dc6fcda7220ba78aa7916dafe2d60922a14a5764b55_prof);

        
        $__internal_13e50572a624d58051bace80f8045188bf1d99af9542ea25072aff52a48c975e->leave($__internal_13e50572a624d58051bace80f8045188bf1d99af9542ea25072aff52a48c975e_prof);

    }

    public function getTemplateName()
    {
        return "default/configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  80 => 23,  73 => 18,  69 => 16,  66 => 15,  60 => 13,  58 => 12,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}

  <body>
    <div class=\"brique\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">
            Votre montre actuelle  :
            {% if(app.user.api != null)%}
                {{app.user.api |title }}
            {% endif %}
            {% if(app.user.api == null)%}
                Aucune
            {% endif %}
        </p>
   </div>
   <div class=\"col-md-2\"></div>
   <div class=col-md-8>
      <div class=\"brique col-md-5 centrer\" style=\"padding:0\">
  \t\t<a href=\"{{path('fitbit')}}\"><button><img  src=\"{{ asset('images/fitbit_logo.png') }}\" width=200 alt=\"Fitbit\"> <br> Je possède une montre Fitbit.</button></a>
      </div>
      <div class=\"brique col-md-5 centrer\" style=\"padding:0\">
  \t\t<a href=\"{{path('jawbone')}}\"><button><img  src=\"{{ asset('images/jawbone_logo.png') }}\" width=200 alt=\"Jawbone\"> <br> Je possède une montre Jawbone.</button></a>
      </div>
    </div>
    <div class=\"col-md-2\"></div>

  </body>

{% endblock %}
", "default/configure.html.twig", "/Users/Charles/WEB/ApifitWeb/app/Resources/views/default/configure.html.twig");
    }
}
