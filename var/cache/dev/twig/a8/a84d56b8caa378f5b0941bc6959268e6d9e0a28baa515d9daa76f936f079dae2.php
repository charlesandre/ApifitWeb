<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8ca0aafdc67dbf576a74cf6cf576d672136b4f1cf22ba8cccc0975aeb20045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8ca0aafdc67dbf576a74cf6cf576d672136b4f1cf22ba8cccc0975aeb20045->enter($__internal_8d8ca0aafdc67dbf576a74cf6cf576d672136b4f1cf22ba8cccc0975aeb20045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_150cc990776218db82c55d35b35b5efc1fce7606a3ad47a32483200b8ac0ec26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150cc990776218db82c55d35b35b5efc1fce7606a3ad47a32483200b8ac0ec26->enter($__internal_150cc990776218db82c55d35b35b5efc1fce7606a3ad47a32483200b8ac0ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link rel=\"favicon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-apifit.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/large_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/middle_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/small_screen.css"), "html", null, true);
        echo "\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\" type=\"text/javascript\"></script>
</head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_8d8ca0aafdc67dbf576a74cf6cf576d672136b4f1cf22ba8cccc0975aeb20045->leave($__internal_8d8ca0aafdc67dbf576a74cf6cf576d672136b4f1cf22ba8cccc0975aeb20045_prof);

        
        $__internal_150cc990776218db82c55d35b35b5efc1fce7606a3ad47a32483200b8ac0ec26->leave($__internal_150cc990776218db82c55d35b35b5efc1fce7606a3ad47a32483200b8ac0ec26_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_5457aa82d6a4b98161375ec2eb0eeb25292f9db66f20c53997e7f8714c8c919c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5457aa82d6a4b98161375ec2eb0eeb25292f9db66f20c53997e7f8714c8c919c->enter($__internal_5457aa82d6a4b98161375ec2eb0eeb25292f9db66f20c53997e7f8714c8c919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e4748491fab136fafe61e70f35e14a196f117cbe87590f8ad4ae5e80a9b86c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4748491fab136fafe61e70f35e14a196f117cbe87590f8ad4ae5e80a9b86c4->enter($__internal_7e4748491fab136fafe61e70f35e14a196f117cbe87590f8ad4ae5e80a9b86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e4748491fab136fafe61e70f35e14a196f117cbe87590f8ad4ae5e80a9b86c4->leave($__internal_7e4748491fab136fafe61e70f35e14a196f117cbe87590f8ad4ae5e80a9b86c4_prof);

        
        $__internal_5457aa82d6a4b98161375ec2eb0eeb25292f9db66f20c53997e7f8714c8c919c->leave($__internal_5457aa82d6a4b98161375ec2eb0eeb25292f9db66f20c53997e7f8714c8c919c_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_824e54d5f5c9b636d3dc9a9526d446c2f761e9c5bfc3293fef19e0bff9e37f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824e54d5f5c9b636d3dc9a9526d446c2f761e9c5bfc3293fef19e0bff9e37f23->enter($__internal_824e54d5f5c9b636d3dc9a9526d446c2f761e9c5bfc3293fef19e0bff9e37f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_211a02feba46a6162df1602e75a5440101cc5184cae62687941b86a71a9ad95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211a02feba46a6162df1602e75a5440101cc5184cae62687941b86a71a9ad95d->enter($__internal_211a02feba46a6162df1602e75a5440101cc5184cae62687941b86a71a9ad95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_211a02feba46a6162df1602e75a5440101cc5184cae62687941b86a71a9ad95d->leave($__internal_211a02feba46a6162df1602e75a5440101cc5184cae62687941b86a71a9ad95d_prof);

        
        $__internal_824e54d5f5c9b636d3dc9a9526d446c2f761e9c5bfc3293fef19e0bff9e37f23->leave($__internal_824e54d5f5c9b636d3dc9a9526d446c2f761e9c5bfc3293fef19e0bff9e37f23_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  82 => 19,  70 => 21,  67 => 20,  65 => 19,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"{{ asset('bootstrap/bootstrap.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link rel=\"favicon\" href=\"{{ asset('images/logo-apifit.png') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/large_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"{{ asset('css/middle_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"{{ asset('css/small_screen.css') }}\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\" type=\"text/javascript\"></script>
</head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/base.html.twig");
    }
}
