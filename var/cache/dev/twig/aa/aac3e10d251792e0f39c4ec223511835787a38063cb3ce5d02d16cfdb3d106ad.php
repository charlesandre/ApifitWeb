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
        $__internal_5991009edf04c5bb0f4473abd2b4a1674f1a2cd1d7ed894fa171f0de4466d035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5991009edf04c5bb0f4473abd2b4a1674f1a2cd1d7ed894fa171f0de4466d035->enter($__internal_5991009edf04c5bb0f4473abd2b4a1674f1a2cd1d7ed894fa171f0de4466d035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_464094e28347d5e98e478c8eea9b6124f316e91250f0bccd53fba58fa663ea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464094e28347d5e98e478c8eea9b6124f316e91250f0bccd53fba58fa663ea72->enter($__internal_464094e28347d5e98e478c8eea9b6124f316e91250f0bccd53fba58fa663ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5991009edf04c5bb0f4473abd2b4a1674f1a2cd1d7ed894fa171f0de4466d035->leave($__internal_5991009edf04c5bb0f4473abd2b4a1674f1a2cd1d7ed894fa171f0de4466d035_prof);

        
        $__internal_464094e28347d5e98e478c8eea9b6124f316e91250f0bccd53fba58fa663ea72->leave($__internal_464094e28347d5e98e478c8eea9b6124f316e91250f0bccd53fba58fa663ea72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_243b2a38c143e71de0641ab383dea1d34bf370f32cc9a32c1cdf781bb07cce5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243b2a38c143e71de0641ab383dea1d34bf370f32cc9a32c1cdf781bb07cce5b->enter($__internal_243b2a38c143e71de0641ab383dea1d34bf370f32cc9a32c1cdf781bb07cce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64209f678b59648e5cefa96f05b5b53a45e12701bf43a5418e745b3419f53d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64209f678b59648e5cefa96f05b5b53a45e12701bf43a5418e745b3419f53d59->enter($__internal_64209f678b59648e5cefa96f05b5b53a45e12701bf43a5418e745b3419f53d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_64209f678b59648e5cefa96f05b5b53a45e12701bf43a5418e745b3419f53d59->leave($__internal_64209f678b59648e5cefa96f05b5b53a45e12701bf43a5418e745b3419f53d59_prof);

        
        $__internal_243b2a38c143e71de0641ab383dea1d34bf370f32cc9a32c1cdf781bb07cce5b->leave($__internal_243b2a38c143e71de0641ab383dea1d34bf370f32cc9a32c1cdf781bb07cce5b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bebf2fbc427efba4d38045600de2628fe44069885647562708004b69d6cc5e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebf2fbc427efba4d38045600de2628fe44069885647562708004b69d6cc5e08->enter($__internal_bebf2fbc427efba4d38045600de2628fe44069885647562708004b69d6cc5e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b103239f951958ca3bfe3fdedae4865137eab5656e8547cd329ab55119369102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b103239f951958ca3bfe3fdedae4865137eab5656e8547cd329ab55119369102->enter($__internal_b103239f951958ca3bfe3fdedae4865137eab5656e8547cd329ab55119369102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b103239f951958ca3bfe3fdedae4865137eab5656e8547cd329ab55119369102->leave($__internal_b103239f951958ca3bfe3fdedae4865137eab5656e8547cd329ab55119369102_prof);

        
        $__internal_bebf2fbc427efba4d38045600de2628fe44069885647562708004b69d6cc5e08->leave($__internal_bebf2fbc427efba4d38045600de2628fe44069885647562708004b69d6cc5e08_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3efebb55bea537c9fdef64715599daf710c8bca2d7ffce2702cc7f8ad51ab913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efebb55bea537c9fdef64715599daf710c8bca2d7ffce2702cc7f8ad51ab913->enter($__internal_3efebb55bea537c9fdef64715599daf710c8bca2d7ffce2702cc7f8ad51ab913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d88184ccce3c20b4ef2272fd06ead55e3dc7314bbd6d1c7dd6783054354a935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d88184ccce3c20b4ef2272fd06ead55e3dc7314bbd6d1c7dd6783054354a935->enter($__internal_8d88184ccce3c20b4ef2272fd06ead55e3dc7314bbd6d1c7dd6783054354a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8d88184ccce3c20b4ef2272fd06ead55e3dc7314bbd6d1c7dd6783054354a935->leave($__internal_8d88184ccce3c20b4ef2272fd06ead55e3dc7314bbd6d1c7dd6783054354a935_prof);

        
        $__internal_3efebb55bea537c9fdef64715599daf710c8bca2d7ffce2702cc7f8ad51ab913->leave($__internal_3efebb55bea537c9fdef64715599daf710c8bca2d7ffce2702cc7f8ad51ab913_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
