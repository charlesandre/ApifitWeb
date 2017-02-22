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
        $__internal_f29b9f54c8554563b534d523173f058b9a489ca966833a08b795a1f3c0ea2f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29b9f54c8554563b534d523173f058b9a489ca966833a08b795a1f3c0ea2f7d->enter($__internal_f29b9f54c8554563b534d523173f058b9a489ca966833a08b795a1f3c0ea2f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b8e5491df340b16b7cc485850bcd7e5cc9936dafc461c070c6d6525409b47f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e5491df340b16b7cc485850bcd7e5cc9936dafc461c070c6d6525409b47f16->enter($__internal_b8e5491df340b16b7cc485850bcd7e5cc9936dafc461c070c6d6525409b47f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29b9f54c8554563b534d523173f058b9a489ca966833a08b795a1f3c0ea2f7d->leave($__internal_f29b9f54c8554563b534d523173f058b9a489ca966833a08b795a1f3c0ea2f7d_prof);

        
        $__internal_b8e5491df340b16b7cc485850bcd7e5cc9936dafc461c070c6d6525409b47f16->leave($__internal_b8e5491df340b16b7cc485850bcd7e5cc9936dafc461c070c6d6525409b47f16_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cad58b519c89c3ce5a7b0069f22af3ffb318c1fa03f53f466cb07925cc9732c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cad58b519c89c3ce5a7b0069f22af3ffb318c1fa03f53f466cb07925cc9732c->enter($__internal_2cad58b519c89c3ce5a7b0069f22af3ffb318c1fa03f53f466cb07925cc9732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e73a062fb2a3db33bde61669d57b91f9a688199ade1abe9b269947e8ec4342ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73a062fb2a3db33bde61669d57b91f9a688199ade1abe9b269947e8ec4342ed->enter($__internal_e73a062fb2a3db33bde61669d57b91f9a688199ade1abe9b269947e8ec4342ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">Tableau de bord</div>




<!-- si on est authentifié -->
                ";
        // line 13
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 14
            echo "                <h1> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " </h1>
                <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure");
            echo "\"> Configurer mon profil </a>
                <!-- gros du travail ici -->
                ";
        }
        // line 18
        echo "            </div>










<!-- si on est pas identifié -->
            ";
        // line 30
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 31
            echo "              <a href=\"/login\" class=\"btn btn-info\"> Vous devez vous connecter pour accéder à votre compte.>></a>
            ";
        }
        // line 33
        echo "        </div>
    </div>
</div>
";
        
        $__internal_e73a062fb2a3db33bde61669d57b91f9a688199ade1abe9b269947e8ec4342ed->leave($__internal_e73a062fb2a3db33bde61669d57b91f9a688199ade1abe9b269947e8ec4342ed_prof);

        
        $__internal_2cad58b519c89c3ce5a7b0069f22af3ffb318c1fa03f53f466cb07925cc9732c->leave($__internal_2cad58b519c89c3ce5a7b0069f22af3ffb318c1fa03f53f466cb07925cc9732c_prof);

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
        return array (  94 => 33,  90 => 31,  88 => 30,  74 => 18,  68 => 15,  63 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">Tableau de bord</div>




<!-- si on est authentifié -->
                {% if app.user != null %}
                <h1> Bonjour {{app.user.name}} </h1>
                <a href=\"{{ path('configure')}}\"> Configurer mon profil </a>
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
{% endblock %}
", "default/index.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/default/index.html.twig");
    }
}
