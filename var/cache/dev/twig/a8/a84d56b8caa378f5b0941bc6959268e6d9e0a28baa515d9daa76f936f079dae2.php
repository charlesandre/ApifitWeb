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
        $__internal_be83838595df8f9185d04a67b2b58a86be083bc070c9021e99f579a7f1798031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be83838595df8f9185d04a67b2b58a86be083bc070c9021e99f579a7f1798031->enter($__internal_be83838595df8f9185d04a67b2b58a86be083bc070c9021e99f579a7f1798031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_12cf647085dd7a14ff426db8594f19dca55e0f8b3c1b220d895bda21e97f67a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cf647085dd7a14ff426db8594f19dca55e0f8b3c1b220d895bda21e97f67a3->enter($__internal_12cf647085dd7a14ff426db8594f19dca55e0f8b3c1b220d895bda21e97f67a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_be83838595df8f9185d04a67b2b58a86be083bc070c9021e99f579a7f1798031->leave($__internal_be83838595df8f9185d04a67b2b58a86be083bc070c9021e99f579a7f1798031_prof);

        
        $__internal_12cf647085dd7a14ff426db8594f19dca55e0f8b3c1b220d895bda21e97f67a3->leave($__internal_12cf647085dd7a14ff426db8594f19dca55e0f8b3c1b220d895bda21e97f67a3_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_281ef9830401da94007e3cf62e4f3397cea5a55adb0b71cca0a5f0528190f12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281ef9830401da94007e3cf62e4f3397cea5a55adb0b71cca0a5f0528190f12d->enter($__internal_281ef9830401da94007e3cf62e4f3397cea5a55adb0b71cca0a5f0528190f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02764c4cbdb0ec039f9bb3ddfa1c097637be64a4c70d8eb5a47d62e06b9e8fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02764c4cbdb0ec039f9bb3ddfa1c097637be64a4c70d8eb5a47d62e06b9e8fd0->enter($__internal_02764c4cbdb0ec039f9bb3ddfa1c097637be64a4c70d8eb5a47d62e06b9e8fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02764c4cbdb0ec039f9bb3ddfa1c097637be64a4c70d8eb5a47d62e06b9e8fd0->leave($__internal_02764c4cbdb0ec039f9bb3ddfa1c097637be64a4c70d8eb5a47d62e06b9e8fd0_prof);

        
        $__internal_281ef9830401da94007e3cf62e4f3397cea5a55adb0b71cca0a5f0528190f12d->leave($__internal_281ef9830401da94007e3cf62e4f3397cea5a55adb0b71cca0a5f0528190f12d_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11a9db97f1cd8310c567710c4314278f660cc6e24bb957a8deeaa408abb67d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a9db97f1cd8310c567710c4314278f660cc6e24bb957a8deeaa408abb67d7a->enter($__internal_11a9db97f1cd8310c567710c4314278f660cc6e24bb957a8deeaa408abb67d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8d1e572df9780ea96976f54b20527bea90b7e28752a90c91f7d5815a396189f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1e572df9780ea96976f54b20527bea90b7e28752a90c91f7d5815a396189f9->enter($__internal_8d1e572df9780ea96976f54b20527bea90b7e28752a90c91f7d5815a396189f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d1e572df9780ea96976f54b20527bea90b7e28752a90c91f7d5815a396189f9->leave($__internal_8d1e572df9780ea96976f54b20527bea90b7e28752a90c91f7d5815a396189f9_prof);

        
        $__internal_11a9db97f1cd8310c567710c4314278f660cc6e24bb957a8deeaa408abb67d7a->leave($__internal_11a9db97f1cd8310c567710c4314278f660cc6e24bb957a8deeaa408abb67d7a_prof);

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
", "base.html.twig", "/Users/Samuel/Documents/workspace/Web/API/app/Resources/views/base.html.twig");
    }
}
