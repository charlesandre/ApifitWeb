<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb367a5cb5c91d00304e50fd0cb186ad7a19a12f28a91bfe7ef772b9d902b444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb367a5cb5c91d00304e50fd0cb186ad7a19a12f28a91bfe7ef772b9d902b444->enter($__internal_cb367a5cb5c91d00304e50fd0cb186ad7a19a12f28a91bfe7ef772b9d902b444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_00486794f2476698a4b252feaf3f3a426383b60711199caa2369c2da20841b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00486794f2476698a4b252feaf3f3a426383b60711199caa2369c2da20841b7c->enter($__internal_00486794f2476698a4b252feaf3f3a426383b60711199caa2369c2da20841b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb367a5cb5c91d00304e50fd0cb186ad7a19a12f28a91bfe7ef772b9d902b444->leave($__internal_cb367a5cb5c91d00304e50fd0cb186ad7a19a12f28a91bfe7ef772b9d902b444_prof);

        
        $__internal_00486794f2476698a4b252feaf3f3a426383b60711199caa2369c2da20841b7c->leave($__internal_00486794f2476698a4b252feaf3f3a426383b60711199caa2369c2da20841b7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58379d2d6a1e4c80fad1af7584257c9e3a28c281c38bb6bbc3fcde1b70deaa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58379d2d6a1e4c80fad1af7584257c9e3a28c281c38bb6bbc3fcde1b70deaa71->enter($__internal_58379d2d6a1e4c80fad1af7584257c9e3a28c281c38bb6bbc3fcde1b70deaa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7e331ed47b05914009acd2e45108d5393c40d1b9c2b02c62dc65ee9e496ad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e331ed47b05914009acd2e45108d5393c40d1b9c2b02c62dc65ee9e496ad57->enter($__internal_d7e331ed47b05914009acd2e45108d5393c40d1b9c2b02c62dc65ee9e496ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d7e331ed47b05914009acd2e45108d5393c40d1b9c2b02c62dc65ee9e496ad57->leave($__internal_d7e331ed47b05914009acd2e45108d5393c40d1b9c2b02c62dc65ee9e496ad57_prof);

        
        $__internal_58379d2d6a1e4c80fad1af7584257c9e3a28c281c38bb6bbc3fcde1b70deaa71->leave($__internal_58379d2d6a1e4c80fad1af7584257c9e3a28c281c38bb6bbc3fcde1b70deaa71_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_26ce845c670fc05a0079c7efd73b29a7bddab8f19ef3e8aedff415471fa1b310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ce845c670fc05a0079c7efd73b29a7bddab8f19ef3e8aedff415471fa1b310->enter($__internal_26ce845c670fc05a0079c7efd73b29a7bddab8f19ef3e8aedff415471fa1b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1d521b1abb3530615302c90c439da8dbaa9ac60c50aa90cf5a371b49d97eac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d521b1abb3530615302c90c439da8dbaa9ac60c50aa90cf5a371b49d97eac6->enter($__internal_e1d521b1abb3530615302c90c439da8dbaa9ac60c50aa90cf5a371b49d97eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1d521b1abb3530615302c90c439da8dbaa9ac60c50aa90cf5a371b49d97eac6->leave($__internal_e1d521b1abb3530615302c90c439da8dbaa9ac60c50aa90cf5a371b49d97eac6_prof);

        
        $__internal_26ce845c670fc05a0079c7efd73b29a7bddab8f19ef3e8aedff415471fa1b310->leave($__internal_26ce845c670fc05a0079c7efd73b29a7bddab8f19ef3e8aedff415471fa1b310_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75ebb5e1ab915877ce018dc16a89ec878ae19ad8310e4f89871eba5f4a663c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ebb5e1ab915877ce018dc16a89ec878ae19ad8310e4f89871eba5f4a663c17->enter($__internal_75ebb5e1ab915877ce018dc16a89ec878ae19ad8310e4f89871eba5f4a663c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_995cb8dc1cd4e9225f80b6a1abd6e5c49c7d2214687467063eaead8700b179bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995cb8dc1cd4e9225f80b6a1abd6e5c49c7d2214687467063eaead8700b179bb->enter($__internal_995cb8dc1cd4e9225f80b6a1abd6e5c49c7d2214687467063eaead8700b179bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_995cb8dc1cd4e9225f80b6a1abd6e5c49c7d2214687467063eaead8700b179bb->leave($__internal_995cb8dc1cd4e9225f80b6a1abd6e5c49c7d2214687467063eaead8700b179bb_prof);

        
        $__internal_75ebb5e1ab915877ce018dc16a89ec878ae19ad8310e4f89871eba5f4a663c17->leave($__internal_75ebb5e1ab915877ce018dc16a89ec878ae19ad8310e4f89871eba5f4a663c17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
