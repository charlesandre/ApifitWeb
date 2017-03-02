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
        $__internal_2dfa5a7a214663ba27ff83d6609177679b83a811cc1cb3c5b7895942a85792fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dfa5a7a214663ba27ff83d6609177679b83a811cc1cb3c5b7895942a85792fb->enter($__internal_2dfa5a7a214663ba27ff83d6609177679b83a811cc1cb3c5b7895942a85792fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_98fa4a0f49127a876f0bdc0103dd6951e4bd4c13a9c9ff7d638d2f51a6a32e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fa4a0f49127a876f0bdc0103dd6951e4bd4c13a9c9ff7d638d2f51a6a32e28->enter($__internal_98fa4a0f49127a876f0bdc0103dd6951e4bd4c13a9c9ff7d638d2f51a6a32e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dfa5a7a214663ba27ff83d6609177679b83a811cc1cb3c5b7895942a85792fb->leave($__internal_2dfa5a7a214663ba27ff83d6609177679b83a811cc1cb3c5b7895942a85792fb_prof);

        
        $__internal_98fa4a0f49127a876f0bdc0103dd6951e4bd4c13a9c9ff7d638d2f51a6a32e28->leave($__internal_98fa4a0f49127a876f0bdc0103dd6951e4bd4c13a9c9ff7d638d2f51a6a32e28_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb17bdda3a4c1b703f8d3fa6c5e35ed155bddeaabe94d64f7109b6af105e9335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb17bdda3a4c1b703f8d3fa6c5e35ed155bddeaabe94d64f7109b6af105e9335->enter($__internal_fb17bdda3a4c1b703f8d3fa6c5e35ed155bddeaabe94d64f7109b6af105e9335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b0f9f27a9f91de2c333692b9b0d495608dc3f3ca730db60ee6eca42bb14b1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0f9f27a9f91de2c333692b9b0d495608dc3f3ca730db60ee6eca42bb14b1b6->enter($__internal_1b0f9f27a9f91de2c333692b9b0d495608dc3f3ca730db60ee6eca42bb14b1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 4
            echo "<div class=\"col-md-12\">
    <div class=\"col-md-3\">
        <img src=\"images/logo-apifit.png\" alt=\"logo\" id=\"logo\"></img>
    </div>
    <div class=\"col-md-6\">
        <div class=\"brique bienvenue\">
            <h3> Bonjour ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " </h3>
            <h3> Voici votre tableau de bord </h3>
            <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure");
            echo "\"> Configurer mon profil </a>
        </div>
    </div>

                    <!-- SEARCH BAR   -->
    <div class=\"col-md-3\">
<!--
      <div class=\"searchbar\">
        \t<div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"custom-search-input\">
                        <div class=\"input-group col-md-12\">
                          <form action=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
            echo "\">
                              <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Rechercher..\" />
                              <span class=\"input-group-btn\">

                            </span>
                          </form>
                        </div>
                    </div>
                </div>
        \t</div>
        </div>
    </div> -->
    ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formsearch"]) ? $context["formsearch"] : $this->getContext($context, "formsearch")), 'form_start');
            echo "

    ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formsearch"]) ? $context["formsearch"] : $this->getContext($context, "formsearch")), 'form_end');
            echo "

</div>

                                <!-- LEFT COLUMN -->

<div class=\"col-md-4\">
    <div class=\"brique col-md-12\">
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastdata"]) ? $context["lastdata"] : $this->getContext($context, "lastdata")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 47
                echo "            <img src=\"images/Avatar/";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ".png\" class=\"img-circle\" alt=\"icon-profil\" id=\"pp\">
            <li><h3>Level : ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "level", array()), "html", null, true);
                echo "</h3></li>
            <li><h4>Taille : ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "height", array()), "html", null, true);
                echo " cm</h4></li>
            <li><h4>Poids : ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "weight", array()), "html", null, true);
                echo " kg </h4></li>
            <li><h4 id=\"imc\">IMC : ";
                // line 51
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), 2, "common"), "html", null, true);
                echo "</h4></li>
                <script>
                    var imc= ";
                // line 53
                echo twig_escape_filter($this->env, ($this->getAttribute($context["data"], "weight", array()) / (($this->getAttribute($context["data"], "height", array()) / 100) * ($this->getAttribute($context["data"], "height", array()) / 100))), "html", null, true);
                echo ";
                    if(imc>25) document.getElementById('imc').className=\"red\";
                    else if(imc<18) document.getElementById('imc').className=\"red\";
                    else document.getElementById('imc').className=\"green\";
                </script>
            <li><h4>Stride Length Running : ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtRunning", array()), "html", null, true);
                echo "</h4></li>
            <li><h4>Stride Length Walking : ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "strideLenghtWalking", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </div>

    <div class=\"brique friends col-md-12\">
        <h3>Vos Amis</h3>
        <div class=\"scroll\">
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 67
                echo "                          <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-default btn-lg btn-block\"><img src=\"images/Avatar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "id", array()), "html", null, true);
                echo ".png\" class=\"img-circle\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "lastname", array()), "html", null, true);
                echo "\" id=\"miniature\"></img>
                          ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "lastname", array()), "html", null, true);
                echo "</button></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </div>
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
        // line 98
        echo "

      <!-- si on est pas identifié -->
      ";
        // line 101
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 102
            echo "      <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
      ";
        }
        // line 104
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
        
        $__internal_1b0f9f27a9f91de2c333692b9b0d495608dc3f3ca730db60ee6eca42bb14b1b6->leave($__internal_1b0f9f27a9f91de2c333692b9b0d495608dc3f3ca730db60ee6eca42bb14b1b6_prof);

        
        $__internal_fb17bdda3a4c1b703f8d3fa6c5e35ed155bddeaabe94d64f7109b6af105e9335->leave($__internal_fb17bdda3a4c1b703f8d3fa6c5e35ed155bddeaabe94d64f7109b6af105e9335_prof);

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
        return array (  229 => 104,  225 => 102,  223 => 101,  218 => 98,  188 => 70,  178 => 68,  167 => 67,  163 => 66,  156 => 61,  148 => 59,  144 => 58,  136 => 53,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  114 => 47,  110 => 46,  99 => 38,  94 => 36,  79 => 24,  64 => 12,  59 => 10,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"col-md-12\">
    <div class=\"col-md-3\">
        <img src=\"images/logo-apifit.png\" alt=\"logo\" id=\"logo\"></img>
    </div>
    <div class=\"col-md-6\">
        <div class=\"brique bienvenue\">
            <h3> Bonjour {{app.user.name}} </h3>
            <h3> Voici votre tableau de bord </h3>
            <a href=\"{{ path('configure')}}\"> Configurer mon profil </a>
        </div>
    </div>

                    <!-- SEARCH BAR   -->
    <div class=\"col-md-3\">
<!--
      <div class=\"searchbar\">
        \t<div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"custom-search-input\">
                        <div class=\"input-group col-md-12\">
                          <form action=\"{{ path('search')}}\">
                              <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Rechercher..\" />
                              <span class=\"input-group-btn\">

                            </span>
                          </form>
                        </div>
                    </div>
                </div>
        \t</div>
        </div>
    </div> -->
    {{ form_start(formsearch) }}

    {{ form_end(formsearch) }}

</div>

                                <!-- LEFT COLUMN -->

<div class=\"col-md-4\">
    <div class=\"brique col-md-12\">
        {% for data in lastdata %}
            <img src=\"images/Avatar/{{id}}.png\" class=\"img-circle\" alt=\"icon-profil\" id=\"pp\">
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

    <div class=\"brique friends col-md-12\">
        <h3>Vos Amis</h3>
        <div class=\"scroll\">
            {% for users in friends %}
                          <a href=\"/{{users.id}}\"><button class=\"btn btn-default btn-lg btn-block\"><img src=\"images/Avatar/{{users.id}}.png\" class=\"img-circle\" alt=\"{{ users.name }} {{ users.lastname}}\" id=\"miniature\"></img>
                          {{ users.name }} {{ users.lastname}}</button></a>
            {% endfor %}
        </div>
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
