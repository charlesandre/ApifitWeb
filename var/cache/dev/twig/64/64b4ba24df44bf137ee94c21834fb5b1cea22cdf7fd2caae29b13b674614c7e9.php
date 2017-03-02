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
        $__internal_a08f35183f9ad9efa8025f2f775a2fdf54ca4a4d8eea0b2b52c1baa8737923dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08f35183f9ad9efa8025f2f775a2fdf54ca4a4d8eea0b2b52c1baa8737923dc->enter($__internal_a08f35183f9ad9efa8025f2f775a2fdf54ca4a4d8eea0b2b52c1baa8737923dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85c3fe67f9301b0339e635ed9036bcbac77ede32b5c2c4bf209b7081fb049fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c3fe67f9301b0339e635ed9036bcbac77ede32b5c2c4bf209b7081fb049fbc->enter($__internal_85c3fe67f9301b0339e635ed9036bcbac77ede32b5c2c4bf209b7081fb049fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a08f35183f9ad9efa8025f2f775a2fdf54ca4a4d8eea0b2b52c1baa8737923dc->leave($__internal_a08f35183f9ad9efa8025f2f775a2fdf54ca4a4d8eea0b2b52c1baa8737923dc_prof);

        
        $__internal_85c3fe67f9301b0339e635ed9036bcbac77ede32b5c2c4bf209b7081fb049fbc->leave($__internal_85c3fe67f9301b0339e635ed9036bcbac77ede32b5c2c4bf209b7081fb049fbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6c5fad179bbefc2bb280504955ca7b49f243ba87c221b3e396ea321c4fec766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c5fad179bbefc2bb280504955ca7b49f243ba87c221b3e396ea321c4fec766->enter($__internal_c6c5fad179bbefc2bb280504955ca7b49f243ba87c221b3e396ea321c4fec766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51758f4a8f43d2adc72b101171e234018328ee3fa45f7c339b60791940303525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51758f4a8f43d2adc72b101171e234018328ee3fa45f7c339b60791940303525->enter($__internal_51758f4a8f43d2adc72b101171e234018328ee3fa45f7c339b60791940303525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_51758f4a8f43d2adc72b101171e234018328ee3fa45f7c339b60791940303525->leave($__internal_51758f4a8f43d2adc72b101171e234018328ee3fa45f7c339b60791940303525_prof);

        
        $__internal_c6c5fad179bbefc2bb280504955ca7b49f243ba87c221b3e396ea321c4fec766->leave($__internal_c6c5fad179bbefc2bb280504955ca7b49f243ba87c221b3e396ea321c4fec766_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ee8e90cdddf87acece8b628ecab92868fb39d9068632c1638fcbb67c67eeaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee8e90cdddf87acece8b628ecab92868fb39d9068632c1638fcbb67c67eeaa2->enter($__internal_1ee8e90cdddf87acece8b628ecab92868fb39d9068632c1638fcbb67c67eeaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15cca75956b8b81d952b6dcabe361f01ef4227920d939e9458fe83f6a359cc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cca75956b8b81d952b6dcabe361f01ef4227920d939e9458fe83f6a359cc4d->enter($__internal_15cca75956b8b81d952b6dcabe361f01ef4227920d939e9458fe83f6a359cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_15cca75956b8b81d952b6dcabe361f01ef4227920d939e9458fe83f6a359cc4d->leave($__internal_15cca75956b8b81d952b6dcabe361f01ef4227920d939e9458fe83f6a359cc4d_prof);

        
        $__internal_1ee8e90cdddf87acece8b628ecab92868fb39d9068632c1638fcbb67c67eeaa2->leave($__internal_1ee8e90cdddf87acece8b628ecab92868fb39d9068632c1638fcbb67c67eeaa2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_722617f2411fdf358fb0a524e8acb78f99dcc60d36ad9d7ac8bee807f1d710d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722617f2411fdf358fb0a524e8acb78f99dcc60d36ad9d7ac8bee807f1d710d2->enter($__internal_722617f2411fdf358fb0a524e8acb78f99dcc60d36ad9d7ac8bee807f1d710d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b24b69495b05e2f3fe50ef4ec2ba89bc6e7852b11356a543adf0e56ccf66c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b24b69495b05e2f3fe50ef4ec2ba89bc6e7852b11356a543adf0e56ccf66c6e->enter($__internal_6b24b69495b05e2f3fe50ef4ec2ba89bc6e7852b11356a543adf0e56ccf66c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6b24b69495b05e2f3fe50ef4ec2ba89bc6e7852b11356a543adf0e56ccf66c6e->leave($__internal_6b24b69495b05e2f3fe50ef4ec2ba89bc6e7852b11356a543adf0e56ccf66c6e_prof);

        
        $__internal_722617f2411fdf358fb0a524e8acb78f99dcc60d36ad9d7ac8bee807f1d710d2->leave($__internal_722617f2411fdf358fb0a524e8acb78f99dcc60d36ad9d7ac8bee807f1d710d2_prof);

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
