<?php

/* auth/login.html.twig */
class __TwigTemplate_9deb74827fda8d7dae256c3b391d31681915d42a5b2245f06aaf74f797c79e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb9dd7588e308b12d94b76f091f7e4d4f63d0ea0c7bdb9280f07e32280ce8f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9dd7588e308b12d94b76f091f7e4d4f63d0ea0c7bdb9280f07e32280ce8f0d->enter($__internal_eb9dd7588e308b12d94b76f091f7e4d4f63d0ea0c7bdb9280f07e32280ce8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_de474339add2e45e5e5829c829efc36dbadce06adde1945fb4ae9c1872d501ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de474339add2e45e5e5829c829efc36dbadce06adde1945fb4ae9c1872d501ef->enter($__internal_de474339add2e45e5e5829c829efc36dbadce06adde1945fb4ae9c1872d501ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9dd7588e308b12d94b76f091f7e4d4f63d0ea0c7bdb9280f07e32280ce8f0d->leave($__internal_eb9dd7588e308b12d94b76f091f7e4d4f63d0ea0c7bdb9280f07e32280ce8f0d_prof);

        
        $__internal_de474339add2e45e5e5829c829efc36dbadce06adde1945fb4ae9c1872d501ef->leave($__internal_de474339add2e45e5e5829c829efc36dbadce06adde1945fb4ae9c1872d501ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fac135d1c612b688f86d23555f8a3902901a734d1560613a9745a88589a36ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fac135d1c612b688f86d23555f8a3902901a734d1560613a9745a88589a36ec->enter($__internal_7fac135d1c612b688f86d23555f8a3902901a734d1560613a9745a88589a36ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0161237e33868358a22475ddda70b82205e1dba47a65181cbb0534be8702223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0161237e33868358a22475ddda70b82205e1dba47a65181cbb0534be8702223->enter($__internal_d0161237e33868358a22475ddda70b82205e1dba47a65181cbb0534be8702223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Login</div>
                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
                        ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 18
        echo "
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>

                            <div class=\"col-md-6\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>

                            <div class=\"col-md-6\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d0161237e33868358a22475ddda70b82205e1dba47a65181cbb0534be8702223->leave($__internal_d0161237e33868358a22475ddda70b82205e1dba47a65181cbb0534be8702223_prof);

        
        $__internal_7fac135d1c612b688f86d23555f8a3902901a734d1560613a9745a88589a36ec->leave($__internal_7fac135d1c612b688f86d23555f8a3902901a734d1560613a9745a88589a36ec_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  72 => 18,  66 => 15,  63 => 14,  61 => 13,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Login</div>
                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                {{ error.messageKey|trans(error.messageData) }}
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>

                            <div class=\"col-md-6\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>

                            <div class=\"col-md-6\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "auth/login.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/auth/login.html.twig");
    }
}
