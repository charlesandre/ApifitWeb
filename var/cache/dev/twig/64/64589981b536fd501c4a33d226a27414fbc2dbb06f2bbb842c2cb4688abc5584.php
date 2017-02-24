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
        $__internal_5e2871294751e2aa70793b55eaadb8f50a4209823caf9ec3969c1484ddd33d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2871294751e2aa70793b55eaadb8f50a4209823caf9ec3969c1484ddd33d25->enter($__internal_5e2871294751e2aa70793b55eaadb8f50a4209823caf9ec3969c1484ddd33d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_cd2f97d84c1ea8ca7c41456f3f5a45a159c6db7a519c614dcbefd2bd930a729f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2f97d84c1ea8ca7c41456f3f5a45a159c6db7a519c614dcbefd2bd930a729f->enter($__internal_cd2f97d84c1ea8ca7c41456f3f5a45a159c6db7a519c614dcbefd2bd930a729f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2871294751e2aa70793b55eaadb8f50a4209823caf9ec3969c1484ddd33d25->leave($__internal_5e2871294751e2aa70793b55eaadb8f50a4209823caf9ec3969c1484ddd33d25_prof);

        
        $__internal_cd2f97d84c1ea8ca7c41456f3f5a45a159c6db7a519c614dcbefd2bd930a729f->leave($__internal_cd2f97d84c1ea8ca7c41456f3f5a45a159c6db7a519c614dcbefd2bd930a729f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffedf4ec769102284f12e1cfd0f15c81524dafe4084f2cbf6b5acf7c1df8866e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffedf4ec769102284f12e1cfd0f15c81524dafe4084f2cbf6b5acf7c1df8866e->enter($__internal_ffedf4ec769102284f12e1cfd0f15c81524dafe4084f2cbf6b5acf7c1df8866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_223be9ccaae2c3ec5ae0307138895f59aded4a567caadc783b927c098449c04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223be9ccaae2c3ec5ae0307138895f59aded4a567caadc783b927c098449c04e->enter($__internal_223be9ccaae2c3ec5ae0307138895f59aded4a567caadc783b927c098449c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\">Configurer mon profil</a>
        <br>
        <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Se déconnecter</a>
        <hr>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastdata"]) ? $context["lastdata"] : $this->getContext($context, "lastdata")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 17
                echo "          <li><h3>Level : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "level", array()), "html", null, true);
                echo "</h3></li>
          <li><h4>Taille : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "height", array()), "html", null, true);
                echo " cm</h4></li>
          <li><h4>Poids : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "weight", array()), "html", null, true);
                echo " kg </h4></li>
          <li><h4>Stride Length Running : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtRunning", array()), "html", null, true);
                echo "</h4></li>
          <li><h4>Stride Length Walking : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtWalking", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
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
        // line 35
        echo "      </div>
      <!-- si on est pas identifié -->
      ";
        // line 37
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 38
            echo "      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      ";
        }
        // line 40
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
        
        $__internal_223be9ccaae2c3ec5ae0307138895f59aded4a567caadc783b927c098449c04e->leave($__internal_223be9ccaae2c3ec5ae0307138895f59aded4a567caadc783b927c098449c04e_prof);

        
        $__internal_ffedf4ec769102284f12e1cfd0f15c81524dafe4084f2cbf6b5acf7c1df8866e->leave($__internal_ffedf4ec769102284f12e1cfd0f15c81524dafe4084f2cbf6b5acf7c1df8866e_prof);

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
        return array (  130 => 40,  126 => 38,  124 => 37,  120 => 35,  106 => 23,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  81 => 17,  77 => 16,  72 => 14,  67 => 12,  60 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
        <a href=\"{{ path('configure')}}\">Configurer mon profil</a>
        <br>
        <a href=\"{{ path('logout')}}\">Se déconnecter</a>
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
", "default/index.html.twig", "/Users/Samuel/Documents/workspace/Web/API/app/Resources/views/default/index.html.twig");
    }
}
