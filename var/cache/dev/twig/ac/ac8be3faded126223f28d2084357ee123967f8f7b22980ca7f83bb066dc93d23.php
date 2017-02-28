<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_58668a75447ba991dbe2c3c1b507a77462ceddd3a020ad76838a985c507a470b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58668a75447ba991dbe2c3c1b507a77462ceddd3a020ad76838a985c507a470b->enter($__internal_58668a75447ba991dbe2c3c1b507a77462ceddd3a020ad76838a985c507a470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fa6d1a1c373f14b072f33f4068397e51e6115f5b27bf69b22a2b69016b1a1463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6d1a1c373f14b072f33f4068397e51e6115f5b27bf69b22a2b69016b1a1463->enter($__internal_fa6d1a1c373f14b072f33f4068397e51e6115f5b27bf69b22a2b69016b1a1463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58668a75447ba991dbe2c3c1b507a77462ceddd3a020ad76838a985c507a470b->leave($__internal_58668a75447ba991dbe2c3c1b507a77462ceddd3a020ad76838a985c507a470b_prof);

        
        $__internal_fa6d1a1c373f14b072f33f4068397e51e6115f5b27bf69b22a2b69016b1a1463->leave($__internal_fa6d1a1c373f14b072f33f4068397e51e6115f5b27bf69b22a2b69016b1a1463_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3a4412c51cf22db5325fc19b654a57270ccebb90f4a129fb0f81d7d5244116b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a4412c51cf22db5325fc19b654a57270ccebb90f4a129fb0f81d7d5244116b->enter($__internal_c3a4412c51cf22db5325fc19b654a57270ccebb90f4a129fb0f81d7d5244116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc7769971383b8227a433ef6a8ddbf418d92e7fade91dc312234f4bf405f0112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7769971383b8227a433ef6a8ddbf418d92e7fade91dc312234f4bf405f0112->enter($__internal_dc7769971383b8227a433ef6a8ddbf418d92e7fade91dc312234f4bf405f0112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc7769971383b8227a433ef6a8ddbf418d92e7fade91dc312234f4bf405f0112->leave($__internal_dc7769971383b8227a433ef6a8ddbf418d92e7fade91dc312234f4bf405f0112_prof);

        
        $__internal_c3a4412c51cf22db5325fc19b654a57270ccebb90f4a129fb0f81d7d5244116b->leave($__internal_c3a4412c51cf22db5325fc19b654a57270ccebb90f4a129fb0f81d7d5244116b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7deab6aa31978425bfffb7717a5dbcd7dfb0da8a88779b73a0511bf8c6d17a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7deab6aa31978425bfffb7717a5dbcd7dfb0da8a88779b73a0511bf8c6d17a08->enter($__internal_7deab6aa31978425bfffb7717a5dbcd7dfb0da8a88779b73a0511bf8c6d17a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c49487435d4b7b10c5a08f139ebcc579662fe0b06171271d2435bc3d5050e713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49487435d4b7b10c5a08f139ebcc579662fe0b06171271d2435bc3d5050e713->enter($__internal_c49487435d4b7b10c5a08f139ebcc579662fe0b06171271d2435bc3d5050e713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c49487435d4b7b10c5a08f139ebcc579662fe0b06171271d2435bc3d5050e713->leave($__internal_c49487435d4b7b10c5a08f139ebcc579662fe0b06171271d2435bc3d5050e713_prof);

        
        $__internal_7deab6aa31978425bfffb7717a5dbcd7dfb0da8a88779b73a0511bf8c6d17a08->leave($__internal_7deab6aa31978425bfffb7717a5dbcd7dfb0da8a88779b73a0511bf8c6d17a08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34820ef5dad84eb44320a7374f15701dfa07622cbc9c9679d8186199580ee3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34820ef5dad84eb44320a7374f15701dfa07622cbc9c9679d8186199580ee3d5->enter($__internal_34820ef5dad84eb44320a7374f15701dfa07622cbc9c9679d8186199580ee3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bf20e387cf6ba8108a74c4e07d5b149c0a1bd628718365988c5c8057bf3ddb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf20e387cf6ba8108a74c4e07d5b149c0a1bd628718365988c5c8057bf3ddb3->enter($__internal_9bf20e387cf6ba8108a74c4e07d5b149c0a1bd628718365988c5c8057bf3ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9bf20e387cf6ba8108a74c4e07d5b149c0a1bd628718365988c5c8057bf3ddb3->leave($__internal_9bf20e387cf6ba8108a74c4e07d5b149c0a1bd628718365988c5c8057bf3ddb3_prof);

        
        $__internal_34820ef5dad84eb44320a7374f15701dfa07622cbc9c9679d8186199580ee3d5->leave($__internal_34820ef5dad84eb44320a7374f15701dfa07622cbc9c9679d8186199580ee3d5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
