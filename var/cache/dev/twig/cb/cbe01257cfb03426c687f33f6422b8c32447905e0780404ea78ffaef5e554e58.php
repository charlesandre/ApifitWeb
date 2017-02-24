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
        $__internal_e51853e41bf19a5bc49082908ab19b9cd2f4fd6e1ed875de92fa13fa8bf566dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51853e41bf19a5bc49082908ab19b9cd2f4fd6e1ed875de92fa13fa8bf566dd->enter($__internal_e51853e41bf19a5bc49082908ab19b9cd2f4fd6e1ed875de92fa13fa8bf566dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $__internal_5ee09d2e02abfb050deb22b80d47c11fa26eeebef972301cf63c8527165be118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee09d2e02abfb050deb22b80d47c11fa26eeebef972301cf63c8527165be118->enter($__internal_5ee09d2e02abfb050deb22b80d47c11fa26eeebef972301cf63c8527165be118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51853e41bf19a5bc49082908ab19b9cd2f4fd6e1ed875de92fa13fa8bf566dd->leave($__internal_e51853e41bf19a5bc49082908ab19b9cd2f4fd6e1ed875de92fa13fa8bf566dd_prof);

        
        $__internal_5ee09d2e02abfb050deb22b80d47c11fa26eeebef972301cf63c8527165be118->leave($__internal_5ee09d2e02abfb050deb22b80d47c11fa26eeebef972301cf63c8527165be118_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_eefc112083053ef1ac83e696f55ce6cba4fd1c96c688f43d156ff876282c40b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefc112083053ef1ac83e696f55ce6cba4fd1c96c688f43d156ff876282c40b0->enter($__internal_eefc112083053ef1ac83e696f55ce6cba4fd1c96c688f43d156ff876282c40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9186ea9e109ddfdaddc5271c1d86832d00f2fd842e21d51beca7d8367ecee6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9186ea9e109ddfdaddc5271c1d86832d00f2fd842e21d51beca7d8367ecee6a0->enter($__internal_9186ea9e109ddfdaddc5271c1d86832d00f2fd842e21d51beca7d8367ecee6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <body>
    <div style=\"background-color:#e7e7e7; padding:20px; border-bottom: 1px solid #777777\">
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
   <div class=\"container\" style=\"margin:auto; margin-top:10px\">
      <div style=\"border:1px solid #e7e7e7; margin:auto; padding:10px; display:inline-block;\">
  \t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fitbit");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fitbit_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Fitbit\"> Je possède une montre Fitbit.</a>
      </div>
      <div class=row style=\"border:1px solid #e7e7e7; margin: 10px auto auto auto; padding:10px;display:inline-block;\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jawbone");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jawbone_logo.png"), "html", null, true);
        echo "\" width=200 alt=Jawbone> Je possède une montre Jawbone</a>
      </div>
    </div>
  </body>

";
        
        $__internal_9186ea9e109ddfdaddc5271c1d86832d00f2fd842e21d51beca7d8367ecee6a0->leave($__internal_9186ea9e109ddfdaddc5271c1d86832d00f2fd842e21d51beca7d8367ecee6a0_prof);

        
        $__internal_eefc112083053ef1ac83e696f55ce6cba4fd1c96c688f43d156ff876282c40b0->leave($__internal_eefc112083053ef1ac83e696f55ce6cba4fd1c96c688f43d156ff876282c40b0_prof);

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
        return array (  87 => 25,  79 => 22,  73 => 18,  69 => 16,  66 => 15,  60 => 13,  58 => 12,  49 => 5,  40 => 4,  11 => 2,);
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
", "default/configure.html.twig", "/Users/Samuel/Documents/workspace/Web/API/app/Resources/views/default/configure.html.twig");
    }
}
