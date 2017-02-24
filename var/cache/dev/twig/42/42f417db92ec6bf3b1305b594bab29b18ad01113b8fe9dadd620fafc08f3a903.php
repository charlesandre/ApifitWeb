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
        $__internal_e92ca1fa820ad9c2705088fdbd484d63a45f2ae298d0dbdda7cf8bd1f4ec022c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92ca1fa820ad9c2705088fdbd484d63a45f2ae298d0dbdda7cf8bd1f4ec022c->enter($__internal_e92ca1fa820ad9c2705088fdbd484d63a45f2ae298d0dbdda7cf8bd1f4ec022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23ce716be162383d006ec56351048693d0c7718e70b099fe8e7c96b57dbeb731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ce716be162383d006ec56351048693d0c7718e70b099fe8e7c96b57dbeb731->enter($__internal_23ce716be162383d006ec56351048693d0c7718e70b099fe8e7c96b57dbeb731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92ca1fa820ad9c2705088fdbd484d63a45f2ae298d0dbdda7cf8bd1f4ec022c->leave($__internal_e92ca1fa820ad9c2705088fdbd484d63a45f2ae298d0dbdda7cf8bd1f4ec022c_prof);

        
        $__internal_23ce716be162383d006ec56351048693d0c7718e70b099fe8e7c96b57dbeb731->leave($__internal_23ce716be162383d006ec56351048693d0c7718e70b099fe8e7c96b57dbeb731_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ead47a40de56fedfffab4407fa8bd5f60f55b89a8e101c3a82441f08c90e502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ead47a40de56fedfffab4407fa8bd5f60f55b89a8e101c3a82441f08c90e502->enter($__internal_6ead47a40de56fedfffab4407fa8bd5f60f55b89a8e101c3a82441f08c90e502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4db4a371f5e878bb0e0e1f99fdc1f83bab5adc178bcbfd08eb202e318f3f86d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db4a371f5e878bb0e0e1f99fdc1f83bab5adc178bcbfd08eb202e318f3f86d3->enter($__internal_4db4a371f5e878bb0e0e1f99fdc1f83bab5adc178bcbfd08eb202e318f3f86d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4db4a371f5e878bb0e0e1f99fdc1f83bab5adc178bcbfd08eb202e318f3f86d3->leave($__internal_4db4a371f5e878bb0e0e1f99fdc1f83bab5adc178bcbfd08eb202e318f3f86d3_prof);

        
        $__internal_6ead47a40de56fedfffab4407fa8bd5f60f55b89a8e101c3a82441f08c90e502->leave($__internal_6ead47a40de56fedfffab4407fa8bd5f60f55b89a8e101c3a82441f08c90e502_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5df832241243cee89866140a312bdc39a42cf863c679949d79283dafb0f0c365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df832241243cee89866140a312bdc39a42cf863c679949d79283dafb0f0c365->enter($__internal_5df832241243cee89866140a312bdc39a42cf863c679949d79283dafb0f0c365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_190e9d962aee5f3cf3cabab1597166322acf0a4d07fa401cabd859a58d7e3538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190e9d962aee5f3cf3cabab1597166322acf0a4d07fa401cabd859a58d7e3538->enter($__internal_190e9d962aee5f3cf3cabab1597166322acf0a4d07fa401cabd859a58d7e3538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_190e9d962aee5f3cf3cabab1597166322acf0a4d07fa401cabd859a58d7e3538->leave($__internal_190e9d962aee5f3cf3cabab1597166322acf0a4d07fa401cabd859a58d7e3538_prof);

        
        $__internal_5df832241243cee89866140a312bdc39a42cf863c679949d79283dafb0f0c365->leave($__internal_5df832241243cee89866140a312bdc39a42cf863c679949d79283dafb0f0c365_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_368e58fd06001740e5d535668cf9176a854eb8a376a86c9851da1a3cc1c97dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368e58fd06001740e5d535668cf9176a854eb8a376a86c9851da1a3cc1c97dc6->enter($__internal_368e58fd06001740e5d535668cf9176a854eb8a376a86c9851da1a3cc1c97dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a473b77cf8a8e1647f413a1357019c3acffe4baba85cb70eeeb3184e484f97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a473b77cf8a8e1647f413a1357019c3acffe4baba85cb70eeeb3184e484f97a->enter($__internal_9a473b77cf8a8e1647f413a1357019c3acffe4baba85cb70eeeb3184e484f97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a473b77cf8a8e1647f413a1357019c3acffe4baba85cb70eeeb3184e484f97a->leave($__internal_9a473b77cf8a8e1647f413a1357019c3acffe4baba85cb70eeeb3184e484f97a_prof);

        
        $__internal_368e58fd06001740e5d535668cf9176a854eb8a376a86c9851da1a3cc1c97dc6->leave($__internal_368e58fd06001740e5d535668cf9176a854eb8a376a86c9851da1a3cc1c97dc6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Samuel/Documents/workspace/Web/API/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
