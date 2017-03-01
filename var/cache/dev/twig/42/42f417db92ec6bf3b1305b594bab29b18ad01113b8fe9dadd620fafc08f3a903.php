<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ad7e2c90058cffb1f34ab3ac21d31cb4d09458f6d950def505110d3698e78528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7e2c90058cffb1f34ab3ac21d31cb4d09458f6d950def505110d3698e78528->enter($__internal_ad7e2c90058cffb1f34ab3ac21d31cb4d09458f6d950def505110d3698e78528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3710badf39acae30d384b2e3b9e7b7c3a9b4e71130251e4b96faea7f06b5a286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3710badf39acae30d384b2e3b9e7b7c3a9b4e71130251e4b96faea7f06b5a286->enter($__internal_3710badf39acae30d384b2e3b9e7b7c3a9b4e71130251e4b96faea7f06b5a286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7e2c90058cffb1f34ab3ac21d31cb4d09458f6d950def505110d3698e78528->leave($__internal_ad7e2c90058cffb1f34ab3ac21d31cb4d09458f6d950def505110d3698e78528_prof);

        
        $__internal_3710badf39acae30d384b2e3b9e7b7c3a9b4e71130251e4b96faea7f06b5a286->leave($__internal_3710badf39acae30d384b2e3b9e7b7c3a9b4e71130251e4b96faea7f06b5a286_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0384ed1610632e63dfc6cf7f0d348898a28a982fa860990f5e4528691662c700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0384ed1610632e63dfc6cf7f0d348898a28a982fa860990f5e4528691662c700->enter($__internal_0384ed1610632e63dfc6cf7f0d348898a28a982fa860990f5e4528691662c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8ecc7d4144d04924d0b396935dde9624f9d14887d6a43f193e30b5ce0423dcb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecc7d4144d04924d0b396935dde9624f9d14887d6a43f193e30b5ce0423dcb0->enter($__internal_8ecc7d4144d04924d0b396935dde9624f9d14887d6a43f193e30b5ce0423dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ecc7d4144d04924d0b396935dde9624f9d14887d6a43f193e30b5ce0423dcb0->leave($__internal_8ecc7d4144d04924d0b396935dde9624f9d14887d6a43f193e30b5ce0423dcb0_prof);

        
        $__internal_0384ed1610632e63dfc6cf7f0d348898a28a982fa860990f5e4528691662c700->leave($__internal_0384ed1610632e63dfc6cf7f0d348898a28a982fa860990f5e4528691662c700_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e5639e09232e9d342954084d19624d220a727b09e872823cd68e29e78c5e775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5639e09232e9d342954084d19624d220a727b09e872823cd68e29e78c5e775->enter($__internal_7e5639e09232e9d342954084d19624d220a727b09e872823cd68e29e78c5e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9563953b90bd6f3bc85d6795e5c2e52a40e94256e5e69e2082048f908acce358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9563953b90bd6f3bc85d6795e5c2e52a40e94256e5e69e2082048f908acce358->enter($__internal_9563953b90bd6f3bc85d6795e5c2e52a40e94256e5e69e2082048f908acce358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9563953b90bd6f3bc85d6795e5c2e52a40e94256e5e69e2082048f908acce358->leave($__internal_9563953b90bd6f3bc85d6795e5c2e52a40e94256e5e69e2082048f908acce358_prof);

        
        $__internal_7e5639e09232e9d342954084d19624d220a727b09e872823cd68e29e78c5e775->leave($__internal_7e5639e09232e9d342954084d19624d220a727b09e872823cd68e29e78c5e775_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1697cad26bb016cf01e531a56bb20787116f630fdd90d0f079b004d6a7c61a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1697cad26bb016cf01e531a56bb20787116f630fdd90d0f079b004d6a7c61a6->enter($__internal_f1697cad26bb016cf01e531a56bb20787116f630fdd90d0f079b004d6a7c61a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d39425d355800cb742a405a9e2589150e7902b0de6ac8dd0d3795169a9408a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39425d355800cb742a405a9e2589150e7902b0de6ac8dd0d3795169a9408a5a->enter($__internal_d39425d355800cb742a405a9e2589150e7902b0de6ac8dd0d3795169a9408a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d39425d355800cb742a405a9e2589150e7902b0de6ac8dd0d3795169a9408a5a->leave($__internal_d39425d355800cb742a405a9e2589150e7902b0de6ac8dd0d3795169a9408a5a_prof);

        
        $__internal_f1697cad26bb016cf01e531a56bb20787116f630fdd90d0f079b004d6a7c61a6->leave($__internal_f1697cad26bb016cf01e531a56bb20787116f630fdd90d0f079b004d6a7c61a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
