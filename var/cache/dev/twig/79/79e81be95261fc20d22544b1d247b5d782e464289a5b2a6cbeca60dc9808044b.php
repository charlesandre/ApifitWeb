<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_0abd2e9301214c51280bef10846917c657b23004761f79cc13eeed6a145febf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abd2e9301214c51280bef10846917c657b23004761f79cc13eeed6a145febf1->enter($__internal_0abd2e9301214c51280bef10846917c657b23004761f79cc13eeed6a145febf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d7667a65d5e916c2fb2cd32772a8e6528118820b77892fe007cbf9c6c2ab86c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7667a65d5e916c2fb2cd32772a8e6528118820b77892fe007cbf9c6c2ab86c4->enter($__internal_d7667a65d5e916c2fb2cd32772a8e6528118820b77892fe007cbf9c6c2ab86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0abd2e9301214c51280bef10846917c657b23004761f79cc13eeed6a145febf1->leave($__internal_0abd2e9301214c51280bef10846917c657b23004761f79cc13eeed6a145febf1_prof);

        
        $__internal_d7667a65d5e916c2fb2cd32772a8e6528118820b77892fe007cbf9c6c2ab86c4->leave($__internal_d7667a65d5e916c2fb2cd32772a8e6528118820b77892fe007cbf9c6c2ab86c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b35e6d6927fd1c33ba7d9bb5ea8ddca49deed524ef8fd1fae8f89b78cd0e392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35e6d6927fd1c33ba7d9bb5ea8ddca49deed524ef8fd1fae8f89b78cd0e392e->enter($__internal_b35e6d6927fd1c33ba7d9bb5ea8ddca49deed524ef8fd1fae8f89b78cd0e392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37e8dbd7a3184b83163c3712a2155d43fda2a2f02158049459b91724a95a6306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e8dbd7a3184b83163c3712a2155d43fda2a2f02158049459b91724a95a6306->enter($__internal_37e8dbd7a3184b83163c3712a2155d43fda2a2f02158049459b91724a95a6306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37e8dbd7a3184b83163c3712a2155d43fda2a2f02158049459b91724a95a6306->leave($__internal_37e8dbd7a3184b83163c3712a2155d43fda2a2f02158049459b91724a95a6306_prof);

        
        $__internal_b35e6d6927fd1c33ba7d9bb5ea8ddca49deed524ef8fd1fae8f89b78cd0e392e->leave($__internal_b35e6d6927fd1c33ba7d9bb5ea8ddca49deed524ef8fd1fae8f89b78cd0e392e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_33367a3f098bc6e24cb4c223f76f696f68a7eda57808b34f4e8edc6dbe4af73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33367a3f098bc6e24cb4c223f76f696f68a7eda57808b34f4e8edc6dbe4af73d->enter($__internal_33367a3f098bc6e24cb4c223f76f696f68a7eda57808b34f4e8edc6dbe4af73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63d1e4b833990fd826e60b7740596db2539b66e7871796a878c41992de141b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d1e4b833990fd826e60b7740596db2539b66e7871796a878c41992de141b32->enter($__internal_63d1e4b833990fd826e60b7740596db2539b66e7871796a878c41992de141b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63d1e4b833990fd826e60b7740596db2539b66e7871796a878c41992de141b32->leave($__internal_63d1e4b833990fd826e60b7740596db2539b66e7871796a878c41992de141b32_prof);

        
        $__internal_33367a3f098bc6e24cb4c223f76f696f68a7eda57808b34f4e8edc6dbe4af73d->leave($__internal_33367a3f098bc6e24cb4c223f76f696f68a7eda57808b34f4e8edc6dbe4af73d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a1b0e808a95e4751f8efffbb9261a0a7ceee9594a3a3dfcf898ddcda4618ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a1b0e808a95e4751f8efffbb9261a0a7ceee9594a3a3dfcf898ddcda4618ca->enter($__internal_05a1b0e808a95e4751f8efffbb9261a0a7ceee9594a3a3dfcf898ddcda4618ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46c8bb593a636e2ec47c31b954f8ea49ca1e43f2143e5fc811c668827d93545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46c8bb593a636e2ec47c31b954f8ea49ca1e43f2143e5fc811c668827d93545->enter($__internal_a46c8bb593a636e2ec47c31b954f8ea49ca1e43f2143e5fc811c668827d93545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a46c8bb593a636e2ec47c31b954f8ea49ca1e43f2143e5fc811c668827d93545->leave($__internal_a46c8bb593a636e2ec47c31b954f8ea49ca1e43f2143e5fc811c668827d93545_prof);

        
        $__internal_05a1b0e808a95e4751f8efffbb9261a0a7ceee9594a3a3dfcf898ddcda4618ca->leave($__internal_05a1b0e808a95e4751f8efffbb9261a0a7ceee9594a3a3dfcf898ddcda4618ca_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
