<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
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
        $__internal_d6adc9f3e443b1bbb5148d70f96d1f7472e82c459dd8f716668e34234d9c939e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6adc9f3e443b1bbb5148d70f96d1f7472e82c459dd8f716668e34234d9c939e->enter($__internal_d6adc9f3e443b1bbb5148d70f96d1f7472e82c459dd8f716668e34234d9c939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e5fab661aca17e1e8ce5475278cf62793c9dc0a75462d2abc240e7c949e32c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fab661aca17e1e8ce5475278cf62793c9dc0a75462d2abc240e7c949e32c47->enter($__internal_e5fab661aca17e1e8ce5475278cf62793c9dc0a75462d2abc240e7c949e32c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6adc9f3e443b1bbb5148d70f96d1f7472e82c459dd8f716668e34234d9c939e->leave($__internal_d6adc9f3e443b1bbb5148d70f96d1f7472e82c459dd8f716668e34234d9c939e_prof);

        
        $__internal_e5fab661aca17e1e8ce5475278cf62793c9dc0a75462d2abc240e7c949e32c47->leave($__internal_e5fab661aca17e1e8ce5475278cf62793c9dc0a75462d2abc240e7c949e32c47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84a5a0494f4ad6a1c0c50776f58a8bc43f9834f63b6d17b143a9831741ca5198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a5a0494f4ad6a1c0c50776f58a8bc43f9834f63b6d17b143a9831741ca5198->enter($__internal_84a5a0494f4ad6a1c0c50776f58a8bc43f9834f63b6d17b143a9831741ca5198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1632d82e04b1baad4168edeca8142bfb816a84826873cc48d9f9b9e9dfb26af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1632d82e04b1baad4168edeca8142bfb816a84826873cc48d9f9b9e9dfb26af8->enter($__internal_1632d82e04b1baad4168edeca8142bfb816a84826873cc48d9f9b9e9dfb26af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1632d82e04b1baad4168edeca8142bfb816a84826873cc48d9f9b9e9dfb26af8->leave($__internal_1632d82e04b1baad4168edeca8142bfb816a84826873cc48d9f9b9e9dfb26af8_prof);

        
        $__internal_84a5a0494f4ad6a1c0c50776f58a8bc43f9834f63b6d17b143a9831741ca5198->leave($__internal_84a5a0494f4ad6a1c0c50776f58a8bc43f9834f63b6d17b143a9831741ca5198_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20245ba9bd8077e7c0831ce1fe82f9e4c1c63c033fba7f22bad915cd27d28658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20245ba9bd8077e7c0831ce1fe82f9e4c1c63c033fba7f22bad915cd27d28658->enter($__internal_20245ba9bd8077e7c0831ce1fe82f9e4c1c63c033fba7f22bad915cd27d28658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ed0767a791655a29b18d61100e814bb4c4033e090a1284e0184ea4b683814c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed0767a791655a29b18d61100e814bb4c4033e090a1284e0184ea4b683814c8->enter($__internal_1ed0767a791655a29b18d61100e814bb4c4033e090a1284e0184ea4b683814c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ed0767a791655a29b18d61100e814bb4c4033e090a1284e0184ea4b683814c8->leave($__internal_1ed0767a791655a29b18d61100e814bb4c4033e090a1284e0184ea4b683814c8_prof);

        
        $__internal_20245ba9bd8077e7c0831ce1fe82f9e4c1c63c033fba7f22bad915cd27d28658->leave($__internal_20245ba9bd8077e7c0831ce1fe82f9e4c1c63c033fba7f22bad915cd27d28658_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_705c2d443b53cefbcd13a14e362cb93c660128fa1a67e9111b262422580de2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705c2d443b53cefbcd13a14e362cb93c660128fa1a67e9111b262422580de2de->enter($__internal_705c2d443b53cefbcd13a14e362cb93c660128fa1a67e9111b262422580de2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb72f8bc07a0237d79d764c1a45b00dfb540080a31c1f339b80b9b7a8d753334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb72f8bc07a0237d79d764c1a45b00dfb540080a31c1f339b80b9b7a8d753334->enter($__internal_cb72f8bc07a0237d79d764c1a45b00dfb540080a31c1f339b80b9b7a8d753334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cb72f8bc07a0237d79d764c1a45b00dfb540080a31c1f339b80b9b7a8d753334->leave($__internal_cb72f8bc07a0237d79d764c1a45b00dfb540080a31c1f339b80b9b7a8d753334_prof);

        
        $__internal_705c2d443b53cefbcd13a14e362cb93c660128fa1a67e9111b262422580de2de->leave($__internal_705c2d443b53cefbcd13a14e362cb93c660128fa1a67e9111b262422580de2de_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
