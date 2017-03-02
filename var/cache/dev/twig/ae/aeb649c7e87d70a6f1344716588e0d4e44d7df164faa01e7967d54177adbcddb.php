<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_469bb03d78ae0ef4647fb4225132c5a3d32d7400988420ca5e95cd9d628e3bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6463471920f5ff013a8a40f98b5541f20553b0693236756416c8ef13610f02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6463471920f5ff013a8a40f98b5541f20553b0693236756416c8ef13610f02d->enter($__internal_a6463471920f5ff013a8a40f98b5541f20553b0693236756416c8ef13610f02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0e0069fb64d3e6630b09b1aef173898399716c9b00babe042b6fd1bfb46e9118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0069fb64d3e6630b09b1aef173898399716c9b00babe042b6fd1bfb46e9118->enter($__internal_0e0069fb64d3e6630b09b1aef173898399716c9b00babe042b6fd1bfb46e9118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6463471920f5ff013a8a40f98b5541f20553b0693236756416c8ef13610f02d->leave($__internal_a6463471920f5ff013a8a40f98b5541f20553b0693236756416c8ef13610f02d_prof);

        
        $__internal_0e0069fb64d3e6630b09b1aef173898399716c9b00babe042b6fd1bfb46e9118->leave($__internal_0e0069fb64d3e6630b09b1aef173898399716c9b00babe042b6fd1bfb46e9118_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d867b739f4b0e8b08c6ccd7f1f5b934c24ed3b29e19cd46f4f4bfae60d7ea72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d867b739f4b0e8b08c6ccd7f1f5b934c24ed3b29e19cd46f4f4bfae60d7ea72->enter($__internal_6d867b739f4b0e8b08c6ccd7f1f5b934c24ed3b29e19cd46f4f4bfae60d7ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd6b996a4815d67050ada9849849fd844d6e7737f3800f89d606dc5f76e607f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6b996a4815d67050ada9849849fd844d6e7737f3800f89d606dc5f76e607f1->enter($__internal_dd6b996a4815d67050ada9849849fd844d6e7737f3800f89d606dc5f76e607f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_dd6b996a4815d67050ada9849849fd844d6e7737f3800f89d606dc5f76e607f1->leave($__internal_dd6b996a4815d67050ada9849849fd844d6e7737f3800f89d606dc5f76e607f1_prof);

        
        $__internal_6d867b739f4b0e8b08c6ccd7f1f5b934c24ed3b29e19cd46f4f4bfae60d7ea72->leave($__internal_6d867b739f4b0e8b08c6ccd7f1f5b934c24ed3b29e19cd46f4f4bfae60d7ea72_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
