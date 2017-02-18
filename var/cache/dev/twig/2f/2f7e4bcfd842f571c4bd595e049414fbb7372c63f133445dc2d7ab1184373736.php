<?php

/* default/register.html.twig */
class __TwigTemplate_64a0e2b159d3873a2b7c5f60db03265d15f9ffa8ea60fb0e77014eb3527434b3 extends Twig_Template
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
        $__internal_f1ecef9069fe0089e7b5220e8c18b665396b2694dee196a6cb2191c1942c3836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ecef9069fe0089e7b5220e8c18b665396b2694dee196a6cb2191c1942c3836->enter($__internal_f1ecef9069fe0089e7b5220e8c18b665396b2694dee196a6cb2191c1942c3836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $__internal_b6d21fb9d71ab8fe95075abca1e3a92a203a6ce64f8c911e1ca35feb4e264299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d21fb9d71ab8fe95075abca1e3a92a203a6ce64f8c911e1ca35feb4e264299->enter($__internal_b6d21fb9d71ab8fe95075abca1e3a92a203a6ce64f8c911e1ca35feb4e264299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<Link rel=\"SHORTCUT ICON\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/logo-apifit.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/default.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/large_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/middle_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/css/small_screen.css"), "html", null, true);
        echo "\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-messages.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/angular-password.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/js/ControllerIndex.js"), "html", null, true);
        echo "\"></script>
\t</head>

  <body>
    <div style=\"background-color:#e7e7e7; padding:20px\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
   </div>
   <div class=\"row container\" style=\"margin:auto\">
      <div class=col-lg-6>
        <button  class=\"btn btn-primary\"><img  src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/fitbit_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Fitbit\"></button>
      </div>
      <div class=col-lg-6>
        <button  class=\"btn btn-primary\"><img  src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("www/images/jawbone_logo.png"), "html", null, true);
        echo "\" width=200 alt=Jawbone></button>
      </div>
    </div>
  </body>
";
        
        $__internal_f1ecef9069fe0089e7b5220e8c18b665396b2694dee196a6cb2191c1942c3836->leave($__internal_f1ecef9069fe0089e7b5220e8c18b665396b2694dee196a6cb2191c1942c3836_prof);

        
        $__internal_b6d21fb9d71ab8fe95075abca1e3a92a203a6ce64f8c911e1ca35feb4e264299->leave($__internal_b6d21fb9d71ab8fe95075abca1e3a92a203a6ce64f8c911e1ca35feb4e264299_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 30,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
\t<link href=\"{{ asset('www/bootstrap/bootstrap.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<Link rel=\"SHORTCUT ICON\" href=\"{{ asset('www/images/logo-apifit.png') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('www/css/default.css') }}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('www/css/large_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"{{ asset('www/css/middle_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"{{ asset('www/css/small_screen.css') }}\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"{{ asset('www/js/angular-route.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/angular-messages.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/angular-password.min.js')}}\"></script>
\t\t<script src=\"{{ asset('www/js/ControllerIndex.js')}}\"></script>
\t</head>

  <body>
    <div style=\"background-color:#e7e7e7; padding:20px\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
   </div>
   <div class=\"row container\" style=\"margin:auto\">
      <div class=col-lg-6>
        <button  class=\"btn btn-primary\"><img  src=\"{{ asset('www/images/fitbit_logo.png') }}\" width=200 alt=\"Fitbit\"></button>
      </div>
      <div class=col-lg-6>
        <button  class=\"btn btn-primary\"><img  src=\"{{ asset('www/images/jawbone_logo.png') }}\" width=200 alt=Jawbone></button>
      </div>
    </div>
  </body>
", "default/register.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/app/Resources/views/default/register.html.twig");
    }
}
