<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_735b7e594b580016a363ff8b14e55fbcfb7992945a7f43f614ff223cd65f488d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_530fb77e860780339e3c300a2aaec74f8db9f64bfcaa03f38d17cd5c27b50957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530fb77e860780339e3c300a2aaec74f8db9f64bfcaa03f38d17cd5c27b50957->enter($__internal_530fb77e860780339e3c300a2aaec74f8db9f64bfcaa03f38d17cd5c27b50957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_8b5a43936f6458de7c0f8000f43b2d1803af465c401fd36f90b598cd1aa8fdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a43936f6458de7c0f8000f43b2d1803af465c401fd36f90b598cd1aa8fdb4->enter($__internal_8b5a43936f6458de7c0f8000f43b2d1803af465c401fd36f90b598cd1aa8fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_530fb77e860780339e3c300a2aaec74f8db9f64bfcaa03f38d17cd5c27b50957->leave($__internal_530fb77e860780339e3c300a2aaec74f8db9f64bfcaa03f38d17cd5c27b50957_prof);

        
        $__internal_8b5a43936f6458de7c0f8000f43b2d1803af465c401fd36f90b598cd1aa8fdb4->leave($__internal_8b5a43936f6458de7c0f8000f43b2d1803af465c401fd36f90b598cd1aa8fdb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
