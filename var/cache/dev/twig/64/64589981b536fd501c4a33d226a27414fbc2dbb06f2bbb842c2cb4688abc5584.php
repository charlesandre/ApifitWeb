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
        $__internal_c6dbed6df000fa4ab865c651fd9d7d3350688268eb71f3828813ae3475e13666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6dbed6df000fa4ab865c651fd9d7d3350688268eb71f3828813ae3475e13666->enter($__internal_c6dbed6df000fa4ab865c651fd9d7d3350688268eb71f3828813ae3475e13666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c3ea251cbd1f7d1ed14627ceac9e4cf6bbaff30499eb9643551685ef8bd38236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ea251cbd1f7d1ed14627ceac9e4cf6bbaff30499eb9643551685ef8bd38236->enter($__internal_c3ea251cbd1f7d1ed14627ceac9e4cf6bbaff30499eb9643551685ef8bd38236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6dbed6df000fa4ab865c651fd9d7d3350688268eb71f3828813ae3475e13666->leave($__internal_c6dbed6df000fa4ab865c651fd9d7d3350688268eb71f3828813ae3475e13666_prof);

        
        $__internal_c3ea251cbd1f7d1ed14627ceac9e4cf6bbaff30499eb9643551685ef8bd38236->leave($__internal_c3ea251cbd1f7d1ed14627ceac9e4cf6bbaff30499eb9643551685ef8bd38236_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbf1296f90e03ca99abd2c0c4b98d536be65a6879ab03a6ac7ab689d3d1295d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf1296f90e03ca99abd2c0c4b98d536be65a6879ab03a6ac7ab689d3d1295d8->enter($__internal_cbf1296f90e03ca99abd2c0c4b98d536be65a6879ab03a6ac7ab689d3d1295d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c193666143f31c900cb43372d6d3ae57a5d415035b4ffc08d6c6cabc0d1ea274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c193666143f31c900cb43372d6d3ae57a5d415035b4ffc08d6c6cabc0d1ea274->enter($__internal_c193666143f31c900cb43372d6d3ae57a5d415035b4ffc08d6c6cabc0d1ea274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 4
            echo "<img src=\"images/logo-apifit.png\" alt=\"logo\" id=\"logo\"></img>
<div class=\"brique bienvenue\">
    <h3> Bonjour ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " </h3>
    <h3> Voici votre tableau de bord </h3>
    <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure");
            echo "\"> Configurer mon profil </a>
</div>

                                <!-- LEFT COLUMN -->

<div class=\"col-md-4\">
    <div class=\"brique col-md-12\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastdata"]) ? $context["lastdata"] : $this->getContext($context, "lastdata")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 16
                echo "            <img src=\"images/Avatar/";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ".png\" alt=\"icon-profil\" id=\"pp\">
            <li><h3>Level : ";
                // line 17
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
            <li><h4 id=\"imc\">IMC : ";
                // line 20
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), 2, "common"), "html", null, true);
                echo "</h4></li>
                <script>
                    var imc= ";
                // line 22
                echo twig_escape_filter($this->env, ($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), "html", null, true);
                echo ";
                    if(imc>25) document.getElementById('imc').className=\"red\";
                    else if(imc<18) document.getElementById('imc').className=\"red\";
                    else document.getElementById('imc').className=\"green\";
                </script>
            <li><h4>Stride Length Running : ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtRunning", array()), "html", null, true);
                echo "</h4></li>
            <li><h4>Stride Length Walking : ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtWalking", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>

    <div class=\"brique col-md-12\">
        <h3>Vos Amis</h3>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 35
                echo "
            <table class=\"\">
              <tr>
                  <td><a href=\"/";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "id", array()), "html", null, true);
                echo "\"><img src=\"images/Avatar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "id", array()), "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "lastname", array()), "html", null, true);
                echo "\" id=\"miniature\"></img></a>
                  <a href=\"/";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "lastname", array()), "html", null, true);
                echo "</a></td>
                  <br>
              </tr>
            </table>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </div>
</div>

<div class=\"col-md-1\"></div>

                                <!-- RIGHT COLUMN -->
<div class=\"col-md-6\">


    <div class=\"brique col-md-12\">

            <h3>Courbe d'évolution</h3>
            <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
            <hr>
    </div>

    <div class=\"brique col-md-6\">
        <h3>Votre Entraînement</h3>
    </div>

    <div class=\"brique col-md-5\">
        <h3>Vos Défis</h3>
    </div>
</div>


";
        }
        // line 72
        echo "

      <!-- si on est pas identifié -->
      ";
        // line 75
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 76
            echo "      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      ";
        }
        // line 78
        echo "
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
        
        $__internal_c193666143f31c900cb43372d6d3ae57a5d415035b4ffc08d6c6cabc0d1ea274->leave($__internal_c193666143f31c900cb43372d6d3ae57a5d415035b4ffc08d6c6cabc0d1ea274_prof);

        
        $__internal_cbf1296f90e03ca99abd2c0c4b98d536be65a6879ab03a6ac7ab689d3d1295d8->leave($__internal_cbf1296f90e03ca99abd2c0c4b98d536be65a6879ab03a6ac7ab689d3d1295d8_prof);

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
        return array (  197 => 78,  193 => 76,  191 => 75,  186 => 72,  157 => 45,  141 => 39,  131 => 38,  126 => 35,  122 => 34,  116 => 30,  108 => 28,  104 => 27,  96 => 22,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  74 => 16,  70 => 15,  60 => 8,  55 => 6,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% if app.user != null %}
<img src=\"images/logo-apifit.png\" alt=\"logo\" id=\"logo\"></img>
<div class=\"brique bienvenue\">
    <h3> Bonjour {{app.user.name}} </h3>
    <h3> Voici votre tableau de bord </h3>
    <a href=\"{{ path('configure')}}\"> Configurer mon profil </a>
</div>

                                <!-- LEFT COLUMN -->

<div class=\"col-md-4\">
    <div class=\"brique col-md-12\">
        {% for data in lastdata %}
            <img src=\"images/Avatar/{{id}}.png\" alt=\"icon-profil\" id=\"pp\">
            <li><h3>Level : {{ data.level }}</h3></li>
            <li><h4>Taille : {{ data.height }} cm</h4></li>
            <li><h4>Poids : {{ data.weight }} kg </h4></li>
            <li><h4 id=\"imc\">IMC : {{ (data.weight/((data.height/100)*(data.height/100)))| round(2, 'common') }}</h4></li>
                <script>
                    var imc= {{ (data.weight/((data.height/100)*(data.height/100)))}};
                    if(imc>25) document.getElementById('imc').className=\"red\";
                    else if(imc<18) document.getElementById('imc').className=\"red\";
                    else document.getElementById('imc').className=\"green\";
                </script>
            <li><h4>Stride Length Running : {{ data.strideLenghtRunning }}</h4></li>
            <li><h4>Stride Length Walking : {{ data.strideLenghtWalking }}</li>
        {% endfor %}
    </div>

    <div class=\"brique col-md-12\">
        <h3>Vos Amis</h3>
        {% for users in friends %}

            <table class=\"\">
              <tr>
                  <td><a href=\"/{{users.id}}\"><img src=\"images/Avatar/{{users.id}}.png\" alt=\"{{ users.name }} {{ users.lastname}}\" id=\"miniature\"></img></a>
                  <a href=\"/{{users.id}}\">{{ users.name }} {{ users.lastname}}</a></td>
                  <br>
              </tr>
            </table>

        {% endfor %}
    </div>
</div>

<div class=\"col-md-1\"></div>

                                <!-- RIGHT COLUMN -->
<div class=\"col-md-6\">


    <div class=\"brique col-md-12\">

            <h3>Courbe d'évolution</h3>
            <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
            <hr>
    </div>

    <div class=\"brique col-md-6\">
        <h3>Votre Entraînement</h3>
    </div>

    <div class=\"brique col-md-5\">
        <h3>Vos Défis</h3>
    </div>
</div>


{% endif %}


      <!-- si on est pas identifié -->
      {% if app.user == null %}
      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      {% endif %}

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
", "default/index.html.twig", "/Users/Charles/WEB/ApifitWeb/app/Resources/views/default/index.html.twig");
    }
}
