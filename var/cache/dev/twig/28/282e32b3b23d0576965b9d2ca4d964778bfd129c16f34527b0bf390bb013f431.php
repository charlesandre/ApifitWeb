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
        $__internal_8fadc3bfafbaed276cc4c2353d75879df5ef4aa9fadcc2ed488251c61efd0436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fadc3bfafbaed276cc4c2353d75879df5ef4aa9fadcc2ed488251c61efd0436->enter($__internal_8fadc3bfafbaed276cc4c2353d75879df5ef4aa9fadcc2ed488251c61efd0436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_59dcf2787c211f69db639234fd55b509883c504c6a22f51a78e4b85afeb0ac88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dcf2787c211f69db639234fd55b509883c504c6a22f51a78e4b85afeb0ac88->enter($__internal_59dcf2787c211f69db639234fd55b509883c504c6a22f51a78e4b85afeb0ac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fadc3bfafbaed276cc4c2353d75879df5ef4aa9fadcc2ed488251c61efd0436->leave($__internal_8fadc3bfafbaed276cc4c2353d75879df5ef4aa9fadcc2ed488251c61efd0436_prof);

        
        $__internal_59dcf2787c211f69db639234fd55b509883c504c6a22f51a78e4b85afeb0ac88->leave($__internal_59dcf2787c211f69db639234fd55b509883c504c6a22f51a78e4b85afeb0ac88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90b7a7fd0f942273be63fb59d285e92e7364fbab73be670291e4c5491a33fb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b7a7fd0f942273be63fb59d285e92e7364fbab73be670291e4c5491a33fb77->enter($__internal_90b7a7fd0f942273be63fb59d285e92e7364fbab73be670291e4c5491a33fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7f991444d5fd8ac057c6daa7f22e66ba77e40ccac8c4d8d1e127fcde21a6435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f991444d5fd8ac057c6daa7f22e66ba77e40ccac8c4d8d1e127fcde21a6435->enter($__internal_b7f991444d5fd8ac057c6daa7f22e66ba77e40ccac8c4d8d1e127fcde21a6435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b7f991444d5fd8ac057c6daa7f22e66ba77e40ccac8c4d8d1e127fcde21a6435->leave($__internal_b7f991444d5fd8ac057c6daa7f22e66ba77e40ccac8c4d8d1e127fcde21a6435_prof);

        
        $__internal_90b7a7fd0f942273be63fb59d285e92e7364fbab73be670291e4c5491a33fb77->leave($__internal_90b7a7fd0f942273be63fb59d285e92e7364fbab73be670291e4c5491a33fb77_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a053e26ff209059bd353ff1bb1435d387abd7cccf61a41749e0ef175764bacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a053e26ff209059bd353ff1bb1435d387abd7cccf61a41749e0ef175764bacb->enter($__internal_3a053e26ff209059bd353ff1bb1435d387abd7cccf61a41749e0ef175764bacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4df6401ddb9b9b423d5f5c32fcc8f14d46b5c00dfc597a741d8bdee2cf7cff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df6401ddb9b9b423d5f5c32fcc8f14d46b5c00dfc597a741d8bdee2cf7cff8e->enter($__internal_4df6401ddb9b9b423d5f5c32fcc8f14d46b5c00dfc597a741d8bdee2cf7cff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4df6401ddb9b9b423d5f5c32fcc8f14d46b5c00dfc597a741d8bdee2cf7cff8e->leave($__internal_4df6401ddb9b9b423d5f5c32fcc8f14d46b5c00dfc597a741d8bdee2cf7cff8e_prof);

        
        $__internal_3a053e26ff209059bd353ff1bb1435d387abd7cccf61a41749e0ef175764bacb->leave($__internal_3a053e26ff209059bd353ff1bb1435d387abd7cccf61a41749e0ef175764bacb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ad4b8441e35838bd449e1dc53a7ced72907a6b25834870abf8d47b099c015e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ad4b8441e35838bd449e1dc53a7ced72907a6b25834870abf8d47b099c015e->enter($__internal_b7ad4b8441e35838bd449e1dc53a7ced72907a6b25834870abf8d47b099c015e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb3117611d78b82156ecb85951e49d1f36d592104a7c08310403a7ebd6b8c2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3117611d78b82156ecb85951e49d1f36d592104a7c08310403a7ebd6b8c2f6->enter($__internal_fb3117611d78b82156ecb85951e49d1f36d592104a7c08310403a7ebd6b8c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fb3117611d78b82156ecb85951e49d1f36d592104a7c08310403a7ebd6b8c2f6->leave($__internal_fb3117611d78b82156ecb85951e49d1f36d592104a7c08310403a7ebd6b8c2f6_prof);

        
        $__internal_b7ad4b8441e35838bd449e1dc53a7ced72907a6b25834870abf8d47b099c015e->leave($__internal_b7ad4b8441e35838bd449e1dc53a7ced72907a6b25834870abf8d47b099c015e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
