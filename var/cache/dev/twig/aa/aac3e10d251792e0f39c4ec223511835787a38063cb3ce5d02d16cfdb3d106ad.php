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
        $__internal_7ed91edf16a9db2ea38f2ad1042fe896c410c1fdca876dc2ff2ff78056fa6e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed91edf16a9db2ea38f2ad1042fe896c410c1fdca876dc2ff2ff78056fa6e0d->enter($__internal_7ed91edf16a9db2ea38f2ad1042fe896c410c1fdca876dc2ff2ff78056fa6e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_62d796be3c1a89102e65e0e3a2e4fce8f45b6e3b61d5d14d2d508aa8696a2f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d796be3c1a89102e65e0e3a2e4fce8f45b6e3b61d5d14d2d508aa8696a2f64->enter($__internal_62d796be3c1a89102e65e0e3a2e4fce8f45b6e3b61d5d14d2d508aa8696a2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed91edf16a9db2ea38f2ad1042fe896c410c1fdca876dc2ff2ff78056fa6e0d->leave($__internal_7ed91edf16a9db2ea38f2ad1042fe896c410c1fdca876dc2ff2ff78056fa6e0d_prof);

        
        $__internal_62d796be3c1a89102e65e0e3a2e4fce8f45b6e3b61d5d14d2d508aa8696a2f64->leave($__internal_62d796be3c1a89102e65e0e3a2e4fce8f45b6e3b61d5d14d2d508aa8696a2f64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f85345978d22545116343a5c455f5caa91443d08f56c091b7c22dc17f61db053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85345978d22545116343a5c455f5caa91443d08f56c091b7c22dc17f61db053->enter($__internal_f85345978d22545116343a5c455f5caa91443d08f56c091b7c22dc17f61db053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b516a03fd9dc3e6b434682909ef9f51ab8990d80c301d7190ba94c2e1db4925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b516a03fd9dc3e6b434682909ef9f51ab8990d80c301d7190ba94c2e1db4925->enter($__internal_7b516a03fd9dc3e6b434682909ef9f51ab8990d80c301d7190ba94c2e1db4925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b516a03fd9dc3e6b434682909ef9f51ab8990d80c301d7190ba94c2e1db4925->leave($__internal_7b516a03fd9dc3e6b434682909ef9f51ab8990d80c301d7190ba94c2e1db4925_prof);

        
        $__internal_f85345978d22545116343a5c455f5caa91443d08f56c091b7c22dc17f61db053->leave($__internal_f85345978d22545116343a5c455f5caa91443d08f56c091b7c22dc17f61db053_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6891185b922d9dd0d380574f08f759d7dfb8610b80d8384e999f92b9f39b598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6891185b922d9dd0d380574f08f759d7dfb8610b80d8384e999f92b9f39b598->enter($__internal_c6891185b922d9dd0d380574f08f759d7dfb8610b80d8384e999f92b9f39b598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cbfc91f31e1755ec7e63251658fba38b2d28c5c96a84386db874eb420456a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbfc91f31e1755ec7e63251658fba38b2d28c5c96a84386db874eb420456a9b->enter($__internal_2cbfc91f31e1755ec7e63251658fba38b2d28c5c96a84386db874eb420456a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2cbfc91f31e1755ec7e63251658fba38b2d28c5c96a84386db874eb420456a9b->leave($__internal_2cbfc91f31e1755ec7e63251658fba38b2d28c5c96a84386db874eb420456a9b_prof);

        
        $__internal_c6891185b922d9dd0d380574f08f759d7dfb8610b80d8384e999f92b9f39b598->leave($__internal_c6891185b922d9dd0d380574f08f759d7dfb8610b80d8384e999f92b9f39b598_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7054aa747c770f4843f3255162d319f2834d4fc30cb92c84797e1ff39ae741b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7054aa747c770f4843f3255162d319f2834d4fc30cb92c84797e1ff39ae741b8->enter($__internal_7054aa747c770f4843f3255162d319f2834d4fc30cb92c84797e1ff39ae741b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45dbb5bd535490942c622ab2ca0f8a1ab54caaee313b162dae0f516b09753e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dbb5bd535490942c622ab2ca0f8a1ab54caaee313b162dae0f516b09753e4f->enter($__internal_45dbb5bd535490942c622ab2ca0f8a1ab54caaee313b162dae0f516b09753e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_45dbb5bd535490942c622ab2ca0f8a1ab54caaee313b162dae0f516b09753e4f->leave($__internal_45dbb5bd535490942c622ab2ca0f8a1ab54caaee313b162dae0f516b09753e4f_prof);

        
        $__internal_7054aa747c770f4843f3255162d319f2834d4fc30cb92c84797e1ff39ae741b8->leave($__internal_7054aa747c770f4843f3255162d319f2834d4fc30cb92c84797e1ff39ae741b8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
