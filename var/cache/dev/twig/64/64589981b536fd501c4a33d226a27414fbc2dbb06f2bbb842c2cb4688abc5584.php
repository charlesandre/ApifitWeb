<?php

/* default/index.html.twig */
class __TwigTemplate_5668d978bca4ce4a0005ace3c7f393a2e19dc7df8534fe6e506485595bf6d259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b5d252bb44e6d3f1180e18d1203c5060b0db44f16cf5497332ccdee8a3027ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d252bb44e6d3f1180e18d1203c5060b0db44f16cf5497332ccdee8a3027ffb->enter($__internal_b5d252bb44e6d3f1180e18d1203c5060b0db44f16cf5497332ccdee8a3027ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_65587f7f1ca24dcef204f89c14aa82eb09d01978b31031c09c9df0ceabf8ae52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65587f7f1ca24dcef204f89c14aa82eb09d01978b31031c09c9df0ceabf8ae52->enter($__internal_65587f7f1ca24dcef204f89c14aa82eb09d01978b31031c09c9df0ceabf8ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d252bb44e6d3f1180e18d1203c5060b0db44f16cf5497332ccdee8a3027ffb->leave($__internal_b5d252bb44e6d3f1180e18d1203c5060b0db44f16cf5497332ccdee8a3027ffb_prof);

        
        $__internal_65587f7f1ca24dcef204f89c14aa82eb09d01978b31031c09c9df0ceabf8ae52->leave($__internal_65587f7f1ca24dcef204f89c14aa82eb09d01978b31031c09c9df0ceabf8ae52_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_52d3c25f5a544e9ae6821358392c93708af36f8377242d3336c7eada8a1d7ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d3c25f5a544e9ae6821358392c93708af36f8377242d3336c7eada8a1d7ee0->enter($__internal_52d3c25f5a544e9ae6821358392c93708af36f8377242d3336c7eada8a1d7ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_911e6b6a3237de08e59887fd034e9cb7b44a24fc7e36fdbe6edb683d06df209b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911e6b6a3237de08e59887fd034e9cb7b44a24fc7e36fdbe6edb683d06df209b->enter($__internal_911e6b6a3237de08e59887fd034e9cb7b44a24fc7e36fdbe6edb683d06df209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\" style=\"padding-top:20px\">
  <div class=\"row\">
    <div class=\"col-md-10 col-md-offset-1\">
      <div class=\"panel panel-success\">
        <div class=\"panel-heading\" >Tableau de bord</div>
        <!-- si on est authentifié -->
        <div class=\"\" style=\"padding:20px\">
        ";
        // line 10
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 11
            echo "        <h1> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " (ID : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo ")</h1>
        <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure");
            echo "\"> Configurer mon profil </a>
        <hr>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastdata"]) ? $context["lastdata"] : $this->getContext($context, "lastdata")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "          <li><h3>Level : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "level", array()), "html", null, true);
                echo "</h3></li>
          <li><h4>Taille : ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "height", array()), "html", null, true);
                echo " cm</h4></li>
          <li><h4>Poids : ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "weight", array()), "html", null, true);
                echo " kg </h4></li>
          <li><h4>Stride Length Running : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtRunning", array()), "html", null, true);
                echo "</h4></li>
          <li><h4>Stride Length Walking : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtWalking", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        <hr>
        <h3>Courbe d'évolution</h3>
        <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
        <hr>
        <h3>Votre Entraînement</h3>
        <hr>
        <h3>Vos Défis</h3>
        <hr>
        <h3>Vos Amis</h3>

        <!-- gros du travail ici -->
        ";
        }
        // line 33
        echo "      </div>
      <!-- si on est pas identifié -->
      ";
        // line 35
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 36
            echo "      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      ";
        }
        // line 38
        echo "    </div>
  </div>
 </div>
</div>
<script>
var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [\"Red\", \"Blue\", \"Yellow\", \"Green\", \"Purple\", \"Orange\"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
";
        
        $__internal_911e6b6a3237de08e59887fd034e9cb7b44a24fc7e36fdbe6edb683d06df209b->leave($__internal_911e6b6a3237de08e59887fd034e9cb7b44a24fc7e36fdbe6edb683d06df209b_prof);

        
        $__internal_52d3c25f5a544e9ae6821358392c93708af36f8377242d3336c7eada8a1d7ee0->leave($__internal_52d3c25f5a544e9ae6821358392c93708af36f8377242d3336c7eada8a1d7ee0_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  121 => 36,  119 => 35,  115 => 33,  101 => 21,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  76 => 15,  72 => 14,  67 => 12,  60 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"container\" style=\"padding-top:20px\">
  <div class=\"row\">
    <div class=\"col-md-10 col-md-offset-1\">
      <div class=\"panel panel-success\">
        <div class=\"panel-heading\" >Tableau de bord</div>
        <!-- si on est authentifié -->
        <div class=\"\" style=\"padding:20px\">
        {% if app.user != null %}
        <h1> Bonjour {{app.user.name}} (ID : {{id}})</h1>
        <a href=\"{{ path('configure')}}\"> Configurer mon profil </a>
        <hr>
        {% for data in lastdata %}
          <li><h3>Level : {{ data.level }}</h3></li>
          <li><h4>Taille : {{ data.height }} cm</h4></li>
          <li><h4>Poids : {{ data.weight }} kg </h4></li>
          <li><h4>Stride Length Running : {{ data.strideLenghtRunning }}</h4></li>
          <li><h4>Stride Length Walking : {{ data.strideLenghtWalking }}</li>
        {% endfor %}
        <hr>
        <h3>Courbe d'évolution</h3>
        <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
        <hr>
        <h3>Votre Entraînement</h3>
        <hr>
        <h3>Vos Défis</h3>
        <hr>
        <h3>Vos Amis</h3>

        <!-- gros du travail ici -->
        {% endif %}
      </div>
      <!-- si on est pas identifié -->
      {% if app.user == null %}
      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      {% endif %}
    </div>
  </div>
 </div>
</div>
<script>
var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [\"Red\", \"Blue\", \"Yellow\", \"Green\", \"Purple\", \"Orange\"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
{% endblock %}
", "default/index.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/default/index.html.twig");
    }
}
