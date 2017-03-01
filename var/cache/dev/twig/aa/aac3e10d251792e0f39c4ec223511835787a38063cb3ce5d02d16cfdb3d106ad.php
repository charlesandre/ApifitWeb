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
        $__internal_011d2a6cd53efe0f29213d96cd0d5a41aa6823bdbc6e19b989fad9d51823baaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011d2a6cd53efe0f29213d96cd0d5a41aa6823bdbc6e19b989fad9d51823baaa->enter($__internal_011d2a6cd53efe0f29213d96cd0d5a41aa6823bdbc6e19b989fad9d51823baaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_32ca353d4360752e489e119916e381dbd40f1952ed3c0d86781404de28136a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ca353d4360752e489e119916e381dbd40f1952ed3c0d86781404de28136a57->enter($__internal_32ca353d4360752e489e119916e381dbd40f1952ed3c0d86781404de28136a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011d2a6cd53efe0f29213d96cd0d5a41aa6823bdbc6e19b989fad9d51823baaa->leave($__internal_011d2a6cd53efe0f29213d96cd0d5a41aa6823bdbc6e19b989fad9d51823baaa_prof);

        
        $__internal_32ca353d4360752e489e119916e381dbd40f1952ed3c0d86781404de28136a57->leave($__internal_32ca353d4360752e489e119916e381dbd40f1952ed3c0d86781404de28136a57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3e82e06fe63bde18284c5d7d9a378e816a4d072c9b0446b812047dc6e6a83ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e82e06fe63bde18284c5d7d9a378e816a4d072c9b0446b812047dc6e6a83ed->enter($__internal_e3e82e06fe63bde18284c5d7d9a378e816a4d072c9b0446b812047dc6e6a83ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbbc04d8cb815afa6be1cd1c20bb4713cce00be37b9e4319245a90997c46810c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbc04d8cb815afa6be1cd1c20bb4713cce00be37b9e4319245a90997c46810c->enter($__internal_fbbc04d8cb815afa6be1cd1c20bb4713cce00be37b9e4319245a90997c46810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fbbc04d8cb815afa6be1cd1c20bb4713cce00be37b9e4319245a90997c46810c->leave($__internal_fbbc04d8cb815afa6be1cd1c20bb4713cce00be37b9e4319245a90997c46810c_prof);

        
        $__internal_e3e82e06fe63bde18284c5d7d9a378e816a4d072c9b0446b812047dc6e6a83ed->leave($__internal_e3e82e06fe63bde18284c5d7d9a378e816a4d072c9b0446b812047dc6e6a83ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_335719032337f9c9960ab157059f6b0b38d9c393949e239de70e30fe9aa75ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335719032337f9c9960ab157059f6b0b38d9c393949e239de70e30fe9aa75ef4->enter($__internal_335719032337f9c9960ab157059f6b0b38d9c393949e239de70e30fe9aa75ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c87bc9ed6912740d9714b3687b78358037b6d5853be1e5b5b81495e14fc55549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87bc9ed6912740d9714b3687b78358037b6d5853be1e5b5b81495e14fc55549->enter($__internal_c87bc9ed6912740d9714b3687b78358037b6d5853be1e5b5b81495e14fc55549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c87bc9ed6912740d9714b3687b78358037b6d5853be1e5b5b81495e14fc55549->leave($__internal_c87bc9ed6912740d9714b3687b78358037b6d5853be1e5b5b81495e14fc55549_prof);

        
        $__internal_335719032337f9c9960ab157059f6b0b38d9c393949e239de70e30fe9aa75ef4->leave($__internal_335719032337f9c9960ab157059f6b0b38d9c393949e239de70e30fe9aa75ef4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c589b8daabf86cfdd88a5727d74ff8b90f90c08b20ef3abf6ed2ff782efba88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c589b8daabf86cfdd88a5727d74ff8b90f90c08b20ef3abf6ed2ff782efba88b->enter($__internal_c589b8daabf86cfdd88a5727d74ff8b90f90c08b20ef3abf6ed2ff782efba88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a618336e1eb4db941c8d7fdcf2ea559b2bde48aa7770be86fbbb416df69b8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a618336e1eb4db941c8d7fdcf2ea559b2bde48aa7770be86fbbb416df69b8bc->enter($__internal_6a618336e1eb4db941c8d7fdcf2ea559b2bde48aa7770be86fbbb416df69b8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6a618336e1eb4db941c8d7fdcf2ea559b2bde48aa7770be86fbbb416df69b8bc->leave($__internal_6a618336e1eb4db941c8d7fdcf2ea559b2bde48aa7770be86fbbb416df69b8bc_prof);

        
        $__internal_c589b8daabf86cfdd88a5727d74ff8b90f90c08b20ef3abf6ed2ff782efba88b->leave($__internal_c589b8daabf86cfdd88a5727d74ff8b90f90c08b20ef3abf6ed2ff782efba88b_prof);

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
