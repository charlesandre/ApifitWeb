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
        $__internal_2ea9dc6e795d00eb4633f4a3e15c6f3ea880007ccbfa92ed1411a03a969499cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea9dc6e795d00eb4633f4a3e15c6f3ea880007ccbfa92ed1411a03a969499cd->enter($__internal_2ea9dc6e795d00eb4633f4a3e15c6f3ea880007ccbfa92ed1411a03a969499cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d537737f8eee2e6998e4fccd23c9aea1f5c613ad9ccb53dea3c318d7a5dc76c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d537737f8eee2e6998e4fccd23c9aea1f5c613ad9ccb53dea3c318d7a5dc76c0->enter($__internal_d537737f8eee2e6998e4fccd23c9aea1f5c613ad9ccb53dea3c318d7a5dc76c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea9dc6e795d00eb4633f4a3e15c6f3ea880007ccbfa92ed1411a03a969499cd->leave($__internal_2ea9dc6e795d00eb4633f4a3e15c6f3ea880007ccbfa92ed1411a03a969499cd_prof);

        
        $__internal_d537737f8eee2e6998e4fccd23c9aea1f5c613ad9ccb53dea3c318d7a5dc76c0->leave($__internal_d537737f8eee2e6998e4fccd23c9aea1f5c613ad9ccb53dea3c318d7a5dc76c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49af3f32a295eb9288bd2c278534209d14fc41393d66cc2c533db9daa6a70a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49af3f32a295eb9288bd2c278534209d14fc41393d66cc2c533db9daa6a70a10->enter($__internal_49af3f32a295eb9288bd2c278534209d14fc41393d66cc2c533db9daa6a70a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db81969f89b27c63006cf5bd26b601b0e1723af2925f2c656814818edb9b9708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db81969f89b27c63006cf5bd26b601b0e1723af2925f2c656814818edb9b9708->enter($__internal_db81969f89b27c63006cf5bd26b601b0e1723af2925f2c656814818edb9b9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db81969f89b27c63006cf5bd26b601b0e1723af2925f2c656814818edb9b9708->leave($__internal_db81969f89b27c63006cf5bd26b601b0e1723af2925f2c656814818edb9b9708_prof);

        
        $__internal_49af3f32a295eb9288bd2c278534209d14fc41393d66cc2c533db9daa6a70a10->leave($__internal_49af3f32a295eb9288bd2c278534209d14fc41393d66cc2c533db9daa6a70a10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee6c906172994b700fbac2759a8e0c1b7a659b5f5d33885252aafc482507508d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6c906172994b700fbac2759a8e0c1b7a659b5f5d33885252aafc482507508d->enter($__internal_ee6c906172994b700fbac2759a8e0c1b7a659b5f5d33885252aafc482507508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_479be35c4b9c471330544162eada420c646950dd8e0e6f00493ef75a079c0d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479be35c4b9c471330544162eada420c646950dd8e0e6f00493ef75a079c0d06->enter($__internal_479be35c4b9c471330544162eada420c646950dd8e0e6f00493ef75a079c0d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_479be35c4b9c471330544162eada420c646950dd8e0e6f00493ef75a079c0d06->leave($__internal_479be35c4b9c471330544162eada420c646950dd8e0e6f00493ef75a079c0d06_prof);

        
        $__internal_ee6c906172994b700fbac2759a8e0c1b7a659b5f5d33885252aafc482507508d->leave($__internal_ee6c906172994b700fbac2759a8e0c1b7a659b5f5d33885252aafc482507508d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e169c94d203b6ee8b92da1d4c1b5631b47ee47e0ad31fdba4ce358f02491240d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e169c94d203b6ee8b92da1d4c1b5631b47ee47e0ad31fdba4ce358f02491240d->enter($__internal_e169c94d203b6ee8b92da1d4c1b5631b47ee47e0ad31fdba4ce358f02491240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c52c0b11394cf1de2fe9189df232907df3c5ebed6baafac66c2645c1653cbd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52c0b11394cf1de2fe9189df232907df3c5ebed6baafac66c2645c1653cbd59->enter($__internal_c52c0b11394cf1de2fe9189df232907df3c5ebed6baafac66c2645c1653cbd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c52c0b11394cf1de2fe9189df232907df3c5ebed6baafac66c2645c1653cbd59->leave($__internal_c52c0b11394cf1de2fe9189df232907df3c5ebed6baafac66c2645c1653cbd59_prof);

        
        $__internal_e169c94d203b6ee8b92da1d4c1b5631b47ee47e0ad31fdba4ce358f02491240d->leave($__internal_e169c94d203b6ee8b92da1d4c1b5631b47ee47e0ad31fdba4ce358f02491240d_prof);

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
