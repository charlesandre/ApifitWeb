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
        $__internal_835d25a0fc5d82ec7fbf8a1fb1fafb7bdec991da86b12df54b50ece8f19bac05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835d25a0fc5d82ec7fbf8a1fb1fafb7bdec991da86b12df54b50ece8f19bac05->enter($__internal_835d25a0fc5d82ec7fbf8a1fb1fafb7bdec991da86b12df54b50ece8f19bac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $__internal_e707566ce9bfece65b4b2fb23accb5e1ea27cb37c2bc8c4104a971366f654716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e707566ce9bfece65b4b2fb23accb5e1ea27cb37c2bc8c4104a971366f654716->enter($__internal_e707566ce9bfece65b4b2fb23accb5e1ea27cb37c2bc8c4104a971366f654716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835d25a0fc5d82ec7fbf8a1fb1fafb7bdec991da86b12df54b50ece8f19bac05->leave($__internal_835d25a0fc5d82ec7fbf8a1fb1fafb7bdec991da86b12df54b50ece8f19bac05_prof);

        
        $__internal_e707566ce9bfece65b4b2fb23accb5e1ea27cb37c2bc8c4104a971366f654716->leave($__internal_e707566ce9bfece65b4b2fb23accb5e1ea27cb37c2bc8c4104a971366f654716_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_03206ee3151778ea95526a74865213e577fbf1752dfea98f11dea1fdc79ccdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03206ee3151778ea95526a74865213e577fbf1752dfea98f11dea1fdc79ccdb7->enter($__internal_03206ee3151778ea95526a74865213e577fbf1752dfea98f11dea1fdc79ccdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_719a9c2bcc1bf4dbec95d016dc3bff57dbfdd01a2e5ca741f8cbc7c994002d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719a9c2bcc1bf4dbec95d016dc3bff57dbfdd01a2e5ca741f8cbc7c994002d16->enter($__internal_719a9c2bcc1bf4dbec95d016dc3bff57dbfdd01a2e5ca741f8cbc7c994002d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <body>
    <div style=\"background-color:#e7e7e7; padding:20px; border-bottom: 1px solid #777777\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">Username : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "</p>
   </div>
   <div class=\"container\" style=\"margin:auto; margin-top:10px\">
      <div style=\"border:1px solid #e7e7e7; margin:auto; padding:10px; display:inline-block;\">
  \t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fitbit");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fitbit_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Fitbit\"> Je possède une montre Fitbit.</a>
      </div>
      <div class=row style=\"border:1px solid #e7e7e7; margin: 10px auto auto auto; padding:10px;display:inline-block;\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jawbone");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jawbone_logo.png"), "html", null, true);
        echo "\" width=200 alt=Jawbone> Je possède une montre Jawbone</a>
      </div>
    </div>
  </body>

";
        
        $__internal_719a9c2bcc1bf4dbec95d016dc3bff57dbfdd01a2e5ca741f8cbc7c994002d16->leave($__internal_719a9c2bcc1bf4dbec95d016dc3bff57dbfdd01a2e5ca741f8cbc7c994002d16_prof);

        
        $__internal_03206ee3151778ea95526a74865213e577fbf1752dfea98f11dea1fdc79ccdb7->leave($__internal_03206ee3151778ea95526a74865213e577fbf1752dfea98f11dea1fdc79ccdb7_prof);

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
        return array (  71 => 17,  63 => 14,  56 => 10,  49 => 5,  40 => 4,  11 => 2,);
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
    <div style=\"background-color:#e7e7e7; padding:20px; border-bottom: 1px solid #777777\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">Username : {{ app.user.name }}</p>
   </div>
   <div class=\"container\" style=\"margin:auto; margin-top:10px\">
      <div style=\"border:1px solid #e7e7e7; margin:auto; padding:10px; display:inline-block;\">
  \t\t<a href=\"{{path('fitbit')}}\"><img  src=\"{{ asset('images/fitbit_logo.png') }}\" width=200 alt=\"Fitbit\"> Je possède une montre Fitbit.</a>
      </div>
      <div class=row style=\"border:1px solid #e7e7e7; margin: 10px auto auto auto; padding:10px;display:inline-block;\">
        <a href=\"{{path('jawbone')}}\"><img  src=\"{{ asset('images/jawbone_logo.png') }}\" width=200 alt=Jawbone> Je possède une montre Jawbone</a>
      </div>
    </div>
  </body>

{% endblock %}
", "default/configure.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/default/configure.html.twig");
    }
}
