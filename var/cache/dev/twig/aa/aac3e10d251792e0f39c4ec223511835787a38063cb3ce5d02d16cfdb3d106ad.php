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
        $__internal_44f5096ac77a947d6581f2b6b3f93322cd11788b120e74b14151c4a25b3569d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f5096ac77a947d6581f2b6b3f93322cd11788b120e74b14151c4a25b3569d8->enter($__internal_44f5096ac77a947d6581f2b6b3f93322cd11788b120e74b14151c4a25b3569d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a43dd56bb11db145ede128b3ac2ec587d7852014716cf16ba5829dac66133ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a43dd56bb11db145ede128b3ac2ec587d7852014716cf16ba5829dac66133ff->enter($__internal_2a43dd56bb11db145ede128b3ac2ec587d7852014716cf16ba5829dac66133ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f5096ac77a947d6581f2b6b3f93322cd11788b120e74b14151c4a25b3569d8->leave($__internal_44f5096ac77a947d6581f2b6b3f93322cd11788b120e74b14151c4a25b3569d8_prof);

        
        $__internal_2a43dd56bb11db145ede128b3ac2ec587d7852014716cf16ba5829dac66133ff->leave($__internal_2a43dd56bb11db145ede128b3ac2ec587d7852014716cf16ba5829dac66133ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d07298e4ced11f5efee296e972b544795634917b4e30ef0bdd11aab4623f2eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07298e4ced11f5efee296e972b544795634917b4e30ef0bdd11aab4623f2eed->enter($__internal_d07298e4ced11f5efee296e972b544795634917b4e30ef0bdd11aab4623f2eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff1023ebc60adb9f060b677689e370ec8034c6f6862bbed075792198218d5d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1023ebc60adb9f060b677689e370ec8034c6f6862bbed075792198218d5d29->enter($__internal_ff1023ebc60adb9f060b677689e370ec8034c6f6862bbed075792198218d5d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff1023ebc60adb9f060b677689e370ec8034c6f6862bbed075792198218d5d29->leave($__internal_ff1023ebc60adb9f060b677689e370ec8034c6f6862bbed075792198218d5d29_prof);

        
        $__internal_d07298e4ced11f5efee296e972b544795634917b4e30ef0bdd11aab4623f2eed->leave($__internal_d07298e4ced11f5efee296e972b544795634917b4e30ef0bdd11aab4623f2eed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ce823cf030de0076b871b1435c9c232dca25b6bb7f4ffed251c2a76e72502c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce823cf030de0076b871b1435c9c232dca25b6bb7f4ffed251c2a76e72502c3->enter($__internal_4ce823cf030de0076b871b1435c9c232dca25b6bb7f4ffed251c2a76e72502c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_182d76998d9e2776fe92ce3e262b238407128a08f1c003c92a310af3c7ecf7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182d76998d9e2776fe92ce3e262b238407128a08f1c003c92a310af3c7ecf7cd->enter($__internal_182d76998d9e2776fe92ce3e262b238407128a08f1c003c92a310af3c7ecf7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_182d76998d9e2776fe92ce3e262b238407128a08f1c003c92a310af3c7ecf7cd->leave($__internal_182d76998d9e2776fe92ce3e262b238407128a08f1c003c92a310af3c7ecf7cd_prof);

        
        $__internal_4ce823cf030de0076b871b1435c9c232dca25b6bb7f4ffed251c2a76e72502c3->leave($__internal_4ce823cf030de0076b871b1435c9c232dca25b6bb7f4ffed251c2a76e72502c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ac841ed29661c0a109dd3384e20d9152c79c96a7a45da2a8e99b96990e45763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac841ed29661c0a109dd3384e20d9152c79c96a7a45da2a8e99b96990e45763->enter($__internal_2ac841ed29661c0a109dd3384e20d9152c79c96a7a45da2a8e99b96990e45763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eeea1f840bdf57579c7f32fb099704ae8b1c7e7415a1a9b0a43db0c408466420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeea1f840bdf57579c7f32fb099704ae8b1c7e7415a1a9b0a43db0c408466420->enter($__internal_eeea1f840bdf57579c7f32fb099704ae8b1c7e7415a1a9b0a43db0c408466420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eeea1f840bdf57579c7f32fb099704ae8b1c7e7415a1a9b0a43db0c408466420->leave($__internal_eeea1f840bdf57579c7f32fb099704ae8b1c7e7415a1a9b0a43db0c408466420_prof);

        
        $__internal_2ac841ed29661c0a109dd3384e20d9152c79c96a7a45da2a8e99b96990e45763->leave($__internal_2ac841ed29661c0a109dd3384e20d9152c79c96a7a45da2a8e99b96990e45763_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Samuel/Documents/workspace/Web/API/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
