<?php

/* auth/login.html.twig */
class __TwigTemplate_707c54cce2c023e07571bc2c28f8a63bb42b79eb0d7f9cbf1bac6f7ce856fcb0 extends Twig_Template
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
        $__internal_ceec71c20503dbae214826d48b6002abef846ba1035cab1c8c52840aa5dd1956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceec71c20503dbae214826d48b6002abef846ba1035cab1c8c52840aa5dd1956->enter($__internal_ceec71c20503dbae214826d48b6002abef846ba1035cab1c8c52840aa5dd1956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_de0c25ab80c45d0443a6f9b21b0bf5afa996f45591e94eab2176e6e07c60800c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0c25ab80c45d0443a6f9b21b0bf5afa996f45591e94eab2176e6e07c60800c->enter($__internal_de0c25ab80c45d0443a6f9b21b0bf5afa996f45591e94eab2176e6e07c60800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceec71c20503dbae214826d48b6002abef846ba1035cab1c8c52840aa5dd1956->leave($__internal_ceec71c20503dbae214826d48b6002abef846ba1035cab1c8c52840aa5dd1956_prof);

        
        $__internal_de0c25ab80c45d0443a6f9b21b0bf5afa996f45591e94eab2176e6e07c60800c->leave($__internal_de0c25ab80c45d0443a6f9b21b0bf5afa996f45591e94eab2176e6e07c60800c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c671a6e74f99a0ee8ca213ace0efdfdd2499a0000c0d3fdd40565dfd9c060e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c671a6e74f99a0ee8ca213ace0efdfdd2499a0000c0d3fdd40565dfd9c060e57->enter($__internal_c671a6e74f99a0ee8ca213ace0efdfdd2499a0000c0d3fdd40565dfd9c060e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c68a459f6498debe7a68aea859980725d2d4fe3aef8052d8cc0d953daf95908b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68a459f6498debe7a68aea859980725d2d4fe3aef8052d8cc0d953daf95908b->enter($__internal_c68a459f6498debe7a68aea859980725d2d4fe3aef8052d8cc0d953daf95908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c68a459f6498debe7a68aea859980725d2d4fe3aef8052d8cc0d953daf95908b->leave($__internal_c68a459f6498debe7a68aea859980725d2d4fe3aef8052d8cc0d953daf95908b_prof);

        
        $__internal_c671a6e74f99a0ee8ca213ace0efdfdd2499a0000c0d3fdd40565dfd9c060e57->leave($__internal_c671a6e74f99a0ee8ca213ace0efdfdd2499a0000c0d3fdd40565dfd9c060e57_prof);

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
", "auth/login.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\auth\\login.html.twig");
    }
}
