<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd7909858424cda3ce84c9ecd596037e5ff77b1d5cf846b1b55e7c18d21e550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd7909858424cda3ce84c9ecd596037e5ff77b1d5cf846b1b55e7c18d21e550->enter($__internal_2fd7909858424cda3ce84c9ecd596037e5ff77b1d5cf846b1b55e7c18d21e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a609112d7177b9a66537b74894b7efcbfec48f38a7f241d912e8584d9af04314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a609112d7177b9a66537b74894b7efcbfec48f38a7f241d912e8584d9af04314->enter($__internal_a609112d7177b9a66537b74894b7efcbfec48f38a7f241d912e8584d9af04314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd7909858424cda3ce84c9ecd596037e5ff77b1d5cf846b1b55e7c18d21e550->leave($__internal_2fd7909858424cda3ce84c9ecd596037e5ff77b1d5cf846b1b55e7c18d21e550_prof);

        
        $__internal_a609112d7177b9a66537b74894b7efcbfec48f38a7f241d912e8584d9af04314->leave($__internal_a609112d7177b9a66537b74894b7efcbfec48f38a7f241d912e8584d9af04314_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67ec0bd63703f7312030d785abdace1ec8ba60ed43b891b763400510d387944a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ec0bd63703f7312030d785abdace1ec8ba60ed43b891b763400510d387944a->enter($__internal_67ec0bd63703f7312030d785abdace1ec8ba60ed43b891b763400510d387944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70691b37f0aa7b2efe6d102fd0406bc347492a8517fc92d16cd44cf8b11b960c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70691b37f0aa7b2efe6d102fd0406bc347492a8517fc92d16cd44cf8b11b960c->enter($__internal_70691b37f0aa7b2efe6d102fd0406bc347492a8517fc92d16cd44cf8b11b960c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_70691b37f0aa7b2efe6d102fd0406bc347492a8517fc92d16cd44cf8b11b960c->leave($__internal_70691b37f0aa7b2efe6d102fd0406bc347492a8517fc92d16cd44cf8b11b960c_prof);

        
        $__internal_67ec0bd63703f7312030d785abdace1ec8ba60ed43b891b763400510d387944a->leave($__internal_67ec0bd63703f7312030d785abdace1ec8ba60ed43b891b763400510d387944a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cd7d52ebfabcf399f19fad52e6a11871512dd0e5ce5c63f8487b93c13a61f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd7d52ebfabcf399f19fad52e6a11871512dd0e5ce5c63f8487b93c13a61f45->enter($__internal_3cd7d52ebfabcf399f19fad52e6a11871512dd0e5ce5c63f8487b93c13a61f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39445cd972f2ad38495383d19265e5732acd3540e1ba727fe72d2d01bcdff5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39445cd972f2ad38495383d19265e5732acd3540e1ba727fe72d2d01bcdff5f1->enter($__internal_39445cd972f2ad38495383d19265e5732acd3540e1ba727fe72d2d01bcdff5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_39445cd972f2ad38495383d19265e5732acd3540e1ba727fe72d2d01bcdff5f1->leave($__internal_39445cd972f2ad38495383d19265e5732acd3540e1ba727fe72d2d01bcdff5f1_prof);

        
        $__internal_3cd7d52ebfabcf399f19fad52e6a11871512dd0e5ce5c63f8487b93c13a61f45->leave($__internal_3cd7d52ebfabcf399f19fad52e6a11871512dd0e5ce5c63f8487b93c13a61f45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dea5c94ea5af70c05bea264f3d68cd945a54c8df053263274bb4116dcf9fb436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea5c94ea5af70c05bea264f3d68cd945a54c8df053263274bb4116dcf9fb436->enter($__internal_dea5c94ea5af70c05bea264f3d68cd945a54c8df053263274bb4116dcf9fb436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed9d467a31147d01ccfbf425c77f85265285a66f4d49ad782ede2d91f451109b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d467a31147d01ccfbf425c77f85265285a66f4d49ad782ede2d91f451109b->enter($__internal_ed9d467a31147d01ccfbf425c77f85265285a66f4d49ad782ede2d91f451109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ed9d467a31147d01ccfbf425c77f85265285a66f4d49ad782ede2d91f451109b->leave($__internal_ed9d467a31147d01ccfbf425c77f85265285a66f4d49ad782ede2d91f451109b_prof);

        
        $__internal_dea5c94ea5af70c05bea264f3d68cd945a54c8df053263274bb4116dcf9fb436->leave($__internal_dea5c94ea5af70c05bea264f3d68cd945a54c8df053263274bb4116dcf9fb436_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
