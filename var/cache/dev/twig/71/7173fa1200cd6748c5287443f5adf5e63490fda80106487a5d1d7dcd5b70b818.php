<?php

/* default/configure.html.twig */
class __TwigTemplate_6154faa71de9dd2148ebbaae3dea75c7930a363b924bfb082b15a39efb82ad91 extends Twig_Template
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
        $__internal_dd028a3afa2c47d66609c66e9eef4db61f60c875d8e2ee2ea9dc25cfe14cf022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd028a3afa2c47d66609c66e9eef4db61f60c875d8e2ee2ea9dc25cfe14cf022->enter($__internal_dd028a3afa2c47d66609c66e9eef4db61f60c875d8e2ee2ea9dc25cfe14cf022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $__internal_0daa5dbe5363b0953b792e3add4414cbfcf30f1e53230cb72c432ff54dfeeb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0daa5dbe5363b0953b792e3add4414cbfcf30f1e53230cb72c432ff54dfeeb9a->enter($__internal_0daa5dbe5363b0953b792e3add4414cbfcf30f1e53230cb72c432ff54dfeeb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd028a3afa2c47d66609c66e9eef4db61f60c875d8e2ee2ea9dc25cfe14cf022->leave($__internal_dd028a3afa2c47d66609c66e9eef4db61f60c875d8e2ee2ea9dc25cfe14cf022_prof);

        
        $__internal_0daa5dbe5363b0953b792e3add4414cbfcf30f1e53230cb72c432ff54dfeeb9a->leave($__internal_0daa5dbe5363b0953b792e3add4414cbfcf30f1e53230cb72c432ff54dfeeb9a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_952d6ab6b471a226cf55701d5fb210d26bcaa901e239ebfdb0d470b6ea6c0c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952d6ab6b471a226cf55701d5fb210d26bcaa901e239ebfdb0d470b6ea6c0c7e->enter($__internal_952d6ab6b471a226cf55701d5fb210d26bcaa901e239ebfdb0d470b6ea6c0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36261232046e8a6a368d79d68b13cfa0000b6e5d7a819a5d102506bac5100cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36261232046e8a6a368d79d68b13cfa0000b6e5d7a819a5d102506bac5100cc9->enter($__internal_36261232046e8a6a368d79d68b13cfa0000b6e5d7a819a5d102506bac5100cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36261232046e8a6a368d79d68b13cfa0000b6e5d7a819a5d102506bac5100cc9->leave($__internal_36261232046e8a6a368d79d68b13cfa0000b6e5d7a819a5d102506bac5100cc9_prof);

        
        $__internal_952d6ab6b471a226cf55701d5fb210d26bcaa901e239ebfdb0d470b6ea6c0c7e->leave($__internal_952d6ab6b471a226cf55701d5fb210d26bcaa901e239ebfdb0d470b6ea6c0c7e_prof);

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
", "default/configure.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\default\\configure.html.twig");
    }
}
