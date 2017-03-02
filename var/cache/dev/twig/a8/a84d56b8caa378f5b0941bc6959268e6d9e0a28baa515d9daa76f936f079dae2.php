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
        $__internal_e59530d29dbad5e0684e1b12ece8c53c413734685342c504b492a08b59511b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59530d29dbad5e0684e1b12ece8c53c413734685342c504b492a08b59511b22->enter($__internal_e59530d29dbad5e0684e1b12ece8c53c413734685342c504b492a08b59511b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b3640be9cc0e8a3153b17ac5075f93a91a3c0c335acb22e8a7758ed998b83ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3640be9cc0e8a3153b17ac5075f93a91a3c0c335acb22e8a7758ed998b83ecd->enter($__internal_b3640be9cc0e8a3153b17ac5075f93a91a3c0c335acb22e8a7758ed998b83ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e59530d29dbad5e0684e1b12ece8c53c413734685342c504b492a08b59511b22->leave($__internal_e59530d29dbad5e0684e1b12ece8c53c413734685342c504b492a08b59511b22_prof);

        
        $__internal_b3640be9cc0e8a3153b17ac5075f93a91a3c0c335acb22e8a7758ed998b83ecd->leave($__internal_b3640be9cc0e8a3153b17ac5075f93a91a3c0c335acb22e8a7758ed998b83ecd_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c1ee91a5d553bfeb486d8cecfaf10afb0c54519dd1859249a927517e305dfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1ee91a5d553bfeb486d8cecfaf10afb0c54519dd1859249a927517e305dfdc->enter($__internal_1c1ee91a5d553bfeb486d8cecfaf10afb0c54519dd1859249a927517e305dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eae4206be1a1d5c8179ccab70a865a3c715fefd12724de3fdd689fc2fc8371ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae4206be1a1d5c8179ccab70a865a3c715fefd12724de3fdd689fc2fc8371ef->enter($__internal_eae4206be1a1d5c8179ccab70a865a3c715fefd12724de3fdd689fc2fc8371ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eae4206be1a1d5c8179ccab70a865a3c715fefd12724de3fdd689fc2fc8371ef->leave($__internal_eae4206be1a1d5c8179ccab70a865a3c715fefd12724de3fdd689fc2fc8371ef_prof);

        
        $__internal_1c1ee91a5d553bfeb486d8cecfaf10afb0c54519dd1859249a927517e305dfdc->leave($__internal_1c1ee91a5d553bfeb486d8cecfaf10afb0c54519dd1859249a927517e305dfdc_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed9a1530659149584f4ec93138318a12a1aab7aed5f27df92610246b80860afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9a1530659149584f4ec93138318a12a1aab7aed5f27df92610246b80860afe->enter($__internal_ed9a1530659149584f4ec93138318a12a1aab7aed5f27df92610246b80860afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74323b2bcb342de7ca68d20baea85f5eb0a9c1a5e92cb6df994521666c011adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74323b2bcb342de7ca68d20baea85f5eb0a9c1a5e92cb6df994521666c011adc->enter($__internal_74323b2bcb342de7ca68d20baea85f5eb0a9c1a5e92cb6df994521666c011adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74323b2bcb342de7ca68d20baea85f5eb0a9c1a5e92cb6df994521666c011adc->leave($__internal_74323b2bcb342de7ca68d20baea85f5eb0a9c1a5e92cb6df994521666c011adc_prof);

        
        $__internal_ed9a1530659149584f4ec93138318a12a1aab7aed5f27df92610246b80860afe->leave($__internal_ed9a1530659149584f4ec93138318a12a1aab7aed5f27df92610246b80860afe_prof);

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
", "base.html.twig", "/Users/Charles/WEB/ApifitWeb/app/Resources/views/base.html.twig");
    }
}
