<?php

/* default/index.html.twig */
class __TwigTemplate_17e8ca90a8d3211782ad0ef0b7d01588ad18d2b49824fa73fc4a2a156f043427 extends Twig_Template
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
        $__internal_db1f9f311436f4cc2de722a9ce3562b44250b087f97e47b820d18af1360e514b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1f9f311436f4cc2de722a9ce3562b44250b087f97e47b820d18af1360e514b->enter($__internal_db1f9f311436f4cc2de722a9ce3562b44250b087f97e47b820d18af1360e514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_978f4d85107e75c06f99d8a622387e6c53c28ea1e600c7671b897b0b461f7a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978f4d85107e75c06f99d8a622387e6c53c28ea1e600c7671b897b0b461f7a0d->enter($__internal_978f4d85107e75c06f99d8a622387e6c53c28ea1e600c7671b897b0b461f7a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1f9f311436f4cc2de722a9ce3562b44250b087f97e47b820d18af1360e514b->leave($__internal_db1f9f311436f4cc2de722a9ce3562b44250b087f97e47b820d18af1360e514b_prof);

        
        $__internal_978f4d85107e75c06f99d8a622387e6c53c28ea1e600c7671b897b0b461f7a0d->leave($__internal_978f4d85107e75c06f99d8a622387e6c53c28ea1e600c7671b897b0b461f7a0d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_841d420ce6015bcf1ea4a391de62936d031b4bf4affbcad3c6d373b56abc1edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841d420ce6015bcf1ea4a391de62936d031b4bf4affbcad3c6d373b56abc1edf->enter($__internal_841d420ce6015bcf1ea4a391de62936d031b4bf4affbcad3c6d373b56abc1edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c5bec8f5846ae8fb95c38ae1d21d6d82b6769b8e361b0268b33fc674f6e74d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5bec8f5846ae8fb95c38ae1d21d6d82b6769b8e361b0268b33fc674f6e74d9->enter($__internal_7c5bec8f5846ae8fb95c38ae1d21d6d82b6769b8e361b0268b33fc674f6e74d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 4
            echo "<div class=\"brique bienvenue\">
    <h1> Bonjour ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " (ID : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo ")</h1>
    <h3> Voici votre tableau de bord </h3>
    <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure");
            echo "\"> Configurer mon profil </a>
</div>

                                <!-- LEFT COLUMN -->

<div class=\"col-md-4\">
    <div class=\"brique col-md-12\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastdata"]) ? $context["lastdata"] : $this->getContext($context, "lastdata")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "            <img src=\"images/Avatar/";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ".png\" alt=\"icon-profil\" id=\"pp\">
            <li><h3>Level : ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "level", array()), "html", null, true);
                echo "</h3></li>
            <li><h4>Taille : ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "height", array()), "html", null, true);
                echo " cm</h4></li>
            <li><h4>Poids : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "weight", array()), "html", null, true);
                echo " kg </h4></li>
            <li><h4 id=\"imc\">IMC : ";
                // line 19
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), 2, "common"), "html", null, true);
                echo "</h4></li>
                <script>
                    var imc= ";
                // line 21
                echo twig_escape_filter($this->env, ($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), "html", null, true);
                echo ";
                    if(imc>25) document.getElementById('imc').className=\"red\";
                    else if(imc<18) document.getElementById('imc').className=\"red\";
                    else document.getElementById('imc').className=\"green\";
                </script>
            <li><h4>Stride Length Running : ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtRunning", array()), "html", null, true);
                echo "</h4></li>
            <li><h4>Stride Length Walking : ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtWalking", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>

    <div class=\"brique col-md-12\">
        <h3>Vos Amis</h3>
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


";
        }
        // line 60
        echo "

      <!-- si on est pas identifié -->
      ";
        // line 63
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 64
            echo "      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      ";
        }
        // line 66
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
        
        $__internal_7c5bec8f5846ae8fb95c38ae1d21d6d82b6769b8e361b0268b33fc674f6e74d9->leave($__internal_7c5bec8f5846ae8fb95c38ae1d21d6d82b6769b8e361b0268b33fc674f6e74d9_prof);

        
        $__internal_841d420ce6015bcf1ea4a391de62936d031b4bf4affbcad3c6d373b56abc1edf->leave($__internal_841d420ce6015bcf1ea4a391de62936d031b4bf4affbcad3c6d373b56abc1edf_prof);

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
        return array (  161 => 66,  157 => 64,  155 => 63,  150 => 60,  117 => 29,  109 => 27,  105 => 26,  97 => 21,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  71 => 14,  61 => 7,  54 => 5,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"brique bienvenue\">
    <h1> Bonjour {{app.user.name}} (ID : {{id}})</h1>
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
", "default/index.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\default\\index.html.twig");
    }
}
