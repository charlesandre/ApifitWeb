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
        $__internal_5c5a1110b1c606eee32f87180940ea5bc0c2378b1857fe7842aae4eaf02ed706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5a1110b1c606eee32f87180940ea5bc0c2378b1857fe7842aae4eaf02ed706->enter($__internal_5c5a1110b1c606eee32f87180940ea5bc0c2378b1857fe7842aae4eaf02ed706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c1e27bf304d8da2e1c00b7e02bffc1c65471a3322df21597de388ff9612108b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e27bf304d8da2e1c00b7e02bffc1c65471a3322df21597de388ff9612108b7->enter($__internal_c1e27bf304d8da2e1c00b7e02bffc1c65471a3322df21597de388ff9612108b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5a1110b1c606eee32f87180940ea5bc0c2378b1857fe7842aae4eaf02ed706->leave($__internal_5c5a1110b1c606eee32f87180940ea5bc0c2378b1857fe7842aae4eaf02ed706_prof);

        
        $__internal_c1e27bf304d8da2e1c00b7e02bffc1c65471a3322df21597de388ff9612108b7->leave($__internal_c1e27bf304d8da2e1c00b7e02bffc1c65471a3322df21597de388ff9612108b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31be9a71f04afb3b9f0eb74c551e93830b23f1a0a24fce50d5269ce4e5080b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31be9a71f04afb3b9f0eb74c551e93830b23f1a0a24fce50d5269ce4e5080b1e->enter($__internal_31be9a71f04afb3b9f0eb74c551e93830b23f1a0a24fce50d5269ce4e5080b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13134bf34dfc17fa85b9db608288572cc24165eb88b576776454ed409b2e860d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13134bf34dfc17fa85b9db608288572cc24165eb88b576776454ed409b2e860d->enter($__internal_13134bf34dfc17fa85b9db608288572cc24165eb88b576776454ed409b2e860d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13134bf34dfc17fa85b9db608288572cc24165eb88b576776454ed409b2e860d->leave($__internal_13134bf34dfc17fa85b9db608288572cc24165eb88b576776454ed409b2e860d_prof);

        
        $__internal_31be9a71f04afb3b9f0eb74c551e93830b23f1a0a24fce50d5269ce4e5080b1e->leave($__internal_31be9a71f04afb3b9f0eb74c551e93830b23f1a0a24fce50d5269ce4e5080b1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8db3c2060683baf431dc60101c18ccd9e07a557d436182f96b639dcf3c86d7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db3c2060683baf431dc60101c18ccd9e07a557d436182f96b639dcf3c86d7f4->enter($__internal_8db3c2060683baf431dc60101c18ccd9e07a557d436182f96b639dcf3c86d7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08a4e3c4647ea3b6b8283276dd0c04e894e046f401681957479c1d7f95abe669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a4e3c4647ea3b6b8283276dd0c04e894e046f401681957479c1d7f95abe669->enter($__internal_08a4e3c4647ea3b6b8283276dd0c04e894e046f401681957479c1d7f95abe669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08a4e3c4647ea3b6b8283276dd0c04e894e046f401681957479c1d7f95abe669->leave($__internal_08a4e3c4647ea3b6b8283276dd0c04e894e046f401681957479c1d7f95abe669_prof);

        
        $__internal_8db3c2060683baf431dc60101c18ccd9e07a557d436182f96b639dcf3c86d7f4->leave($__internal_8db3c2060683baf431dc60101c18ccd9e07a557d436182f96b639dcf3c86d7f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efc42b362da6225e60ce6c1b26e0f9d02556c0028d21351cd6d0318479a444ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc42b362da6225e60ce6c1b26e0f9d02556c0028d21351cd6d0318479a444ff->enter($__internal_efc42b362da6225e60ce6c1b26e0f9d02556c0028d21351cd6d0318479a444ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bdd3f7b97d0a118e083a9f8b26711c781248e60b6a81ff45a6b2184a7b7cd5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd3f7b97d0a118e083a9f8b26711c781248e60b6a81ff45a6b2184a7b7cd5c6->enter($__internal_bdd3f7b97d0a118e083a9f8b26711c781248e60b6a81ff45a6b2184a7b7cd5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bdd3f7b97d0a118e083a9f8b26711c781248e60b6a81ff45a6b2184a7b7cd5c6->leave($__internal_bdd3f7b97d0a118e083a9f8b26711c781248e60b6a81ff45a6b2184a7b7cd5c6_prof);

        
        $__internal_efc42b362da6225e60ce6c1b26e0f9d02556c0028d21351cd6d0318479a444ff->leave($__internal_efc42b362da6225e60ce6c1b26e0f9d02556c0028d21351cd6d0318479a444ff_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
