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
        $__internal_ad9420cb0ab348e6a5b38810b81ab4c4c20513929370e9277fff87b6debd3025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9420cb0ab348e6a5b38810b81ab4c4c20513929370e9277fff87b6debd3025->enter($__internal_ad9420cb0ab348e6a5b38810b81ab4c4c20513929370e9277fff87b6debd3025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ece9e74030fa829abeda6a8b99c80e5679932d247e1e89024ba0475da1550e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ece9e74030fa829abeda6a8b99c80e5679932d247e1e89024ba0475da1550e8->enter($__internal_3ece9e74030fa829abeda6a8b99c80e5679932d247e1e89024ba0475da1550e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9420cb0ab348e6a5b38810b81ab4c4c20513929370e9277fff87b6debd3025->leave($__internal_ad9420cb0ab348e6a5b38810b81ab4c4c20513929370e9277fff87b6debd3025_prof);

        
        $__internal_3ece9e74030fa829abeda6a8b99c80e5679932d247e1e89024ba0475da1550e8->leave($__internal_3ece9e74030fa829abeda6a8b99c80e5679932d247e1e89024ba0475da1550e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18eda349238467a951cf52fb1af2a3b9567d4bdd35997ce3b58cabe5bc8233bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18eda349238467a951cf52fb1af2a3b9567d4bdd35997ce3b58cabe5bc8233bf->enter($__internal_18eda349238467a951cf52fb1af2a3b9567d4bdd35997ce3b58cabe5bc8233bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55a7dda69c72beea3652dbf23e5ec49e17d64e6190ee5e63c354eb1541e4f426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a7dda69c72beea3652dbf23e5ec49e17d64e6190ee5e63c354eb1541e4f426->enter($__internal_55a7dda69c72beea3652dbf23e5ec49e17d64e6190ee5e63c354eb1541e4f426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55a7dda69c72beea3652dbf23e5ec49e17d64e6190ee5e63c354eb1541e4f426->leave($__internal_55a7dda69c72beea3652dbf23e5ec49e17d64e6190ee5e63c354eb1541e4f426_prof);

        
        $__internal_18eda349238467a951cf52fb1af2a3b9567d4bdd35997ce3b58cabe5bc8233bf->leave($__internal_18eda349238467a951cf52fb1af2a3b9567d4bdd35997ce3b58cabe5bc8233bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b6920f98e43bd738373a63a6f15e0dff9b1bd4d43115192c2813820ac5e09e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6920f98e43bd738373a63a6f15e0dff9b1bd4d43115192c2813820ac5e09e6->enter($__internal_8b6920f98e43bd738373a63a6f15e0dff9b1bd4d43115192c2813820ac5e09e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7b6e7a4495ccbd7cec311a4afe1193513d1a1edb7efdfab66d36e320c535036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b6e7a4495ccbd7cec311a4afe1193513d1a1edb7efdfab66d36e320c535036->enter($__internal_a7b6e7a4495ccbd7cec311a4afe1193513d1a1edb7efdfab66d36e320c535036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7b6e7a4495ccbd7cec311a4afe1193513d1a1edb7efdfab66d36e320c535036->leave($__internal_a7b6e7a4495ccbd7cec311a4afe1193513d1a1edb7efdfab66d36e320c535036_prof);

        
        $__internal_8b6920f98e43bd738373a63a6f15e0dff9b1bd4d43115192c2813820ac5e09e6->leave($__internal_8b6920f98e43bd738373a63a6f15e0dff9b1bd4d43115192c2813820ac5e09e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e930f22b474e0d3aecb713c2c913be67cf92bc71b251f7487845e2994f21392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e930f22b474e0d3aecb713c2c913be67cf92bc71b251f7487845e2994f21392e->enter($__internal_e930f22b474e0d3aecb713c2c913be67cf92bc71b251f7487845e2994f21392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb0476d34a8d8051060c0ead33c7801d43fdfa2a97829c90d0d2cce9c6d68f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0476d34a8d8051060c0ead33c7801d43fdfa2a97829c90d0d2cce9c6d68f1c->enter($__internal_eb0476d34a8d8051060c0ead33c7801d43fdfa2a97829c90d0d2cce9c6d68f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb0476d34a8d8051060c0ead33c7801d43fdfa2a97829c90d0d2cce9c6d68f1c->leave($__internal_eb0476d34a8d8051060c0ead33c7801d43fdfa2a97829c90d0d2cce9c6d68f1c_prof);

        
        $__internal_e930f22b474e0d3aecb713c2c913be67cf92bc71b251f7487845e2994f21392e->leave($__internal_e930f22b474e0d3aecb713c2c913be67cf92bc71b251f7487845e2994f21392e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
