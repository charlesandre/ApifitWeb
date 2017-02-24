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
        $__internal_50ca7f29a8c9df80e3873aa6ac94e4112ba7b43b0a5e46e6d2038e79c4731dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ca7f29a8c9df80e3873aa6ac94e4112ba7b43b0a5e46e6d2038e79c4731dd5->enter($__internal_50ca7f29a8c9df80e3873aa6ac94e4112ba7b43b0a5e46e6d2038e79c4731dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_8a948d7d2a36fd68cc5b503eb9d3726b6f69395aec6809e5dc82ae01b2bb399f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a948d7d2a36fd68cc5b503eb9d3726b6f69395aec6809e5dc82ae01b2bb399f->enter($__internal_8a948d7d2a36fd68cc5b503eb9d3726b6f69395aec6809e5dc82ae01b2bb399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ca7f29a8c9df80e3873aa6ac94e4112ba7b43b0a5e46e6d2038e79c4731dd5->leave($__internal_50ca7f29a8c9df80e3873aa6ac94e4112ba7b43b0a5e46e6d2038e79c4731dd5_prof);

        
        $__internal_8a948d7d2a36fd68cc5b503eb9d3726b6f69395aec6809e5dc82ae01b2bb399f->leave($__internal_8a948d7d2a36fd68cc5b503eb9d3726b6f69395aec6809e5dc82ae01b2bb399f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_027e4675cf647e26568cb3b4cb2e3d0466233be9d159fa8866a3e7618bffbd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027e4675cf647e26568cb3b4cb2e3d0466233be9d159fa8866a3e7618bffbd2c->enter($__internal_027e4675cf647e26568cb3b4cb2e3d0466233be9d159fa8866a3e7618bffbd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b6c45bf974095758de702c5d8e7051500e0d9cc64fe454cff3eff8ddcdf4fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6c45bf974095758de702c5d8e7051500e0d9cc64fe454cff3eff8ddcdf4fe9->enter($__internal_4b6c45bf974095758de702c5d8e7051500e0d9cc64fe454cff3eff8ddcdf4fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\" style=\"padding-top:20px\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Connexion</div>
                <div class=\"panel-body\">
                    <form class=\"\" role=\"form\" method=\"POST\" action=\"";
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
                            <label for=\"email\" class=\"col-md-4 control-label\">Adresse E-Mail :</label>

                            <div class=\"\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Mot de passe :</label>

                            <div class=\"\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Se connecter
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
        
        $__internal_4b6c45bf974095758de702c5d8e7051500e0d9cc64fe454cff3eff8ddcdf4fe9->leave($__internal_4b6c45bf974095758de702c5d8e7051500e0d9cc64fe454cff3eff8ddcdf4fe9_prof);

        
        $__internal_027e4675cf647e26568cb3b4cb2e3d0466233be9d159fa8866a3e7618bffbd2c->leave($__internal_027e4675cf647e26568cb3b4cb2e3d0466233be9d159fa8866a3e7618bffbd2c_prof);

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
<div class=\"container\" style=\"padding-top:20px\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Connexion</div>
                <div class=\"panel-body\">
                    <form class=\"\" role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                {{ error.messageKey|trans(error.messageData) }}
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-4 control-label\">Adresse E-Mail :</label>

                            <div class=\"\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Mot de passe :</label>

                            <div class=\"\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Se connecter
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
", "auth/login.html.twig", "/Users/Samuel/Documents/workspace/Web/API/app/Resources/views/auth/login.html.twig");
    }
}