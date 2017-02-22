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
        $__internal_6d68b9bb019bb4228516648c2f626b0347716af13d959372977cfa4ba8fd5dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d68b9bb019bb4228516648c2f626b0347716af13d959372977cfa4ba8fd5dc7->enter($__internal_6d68b9bb019bb4228516648c2f626b0347716af13d959372977cfa4ba8fd5dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1700e848c1d6e3b4e856b11932aabb3e42feb465137c3abfdd6b56a69921a891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1700e848c1d6e3b4e856b11932aabb3e42feb465137c3abfdd6b56a69921a891->enter($__internal_1700e848c1d6e3b4e856b11932aabb3e42feb465137c3abfdd6b56a69921a891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
</head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_6d68b9bb019bb4228516648c2f626b0347716af13d959372977cfa4ba8fd5dc7->leave($__internal_6d68b9bb019bb4228516648c2f626b0347716af13d959372977cfa4ba8fd5dc7_prof);

        
        $__internal_1700e848c1d6e3b4e856b11932aabb3e42feb465137c3abfdd6b56a69921a891->leave($__internal_1700e848c1d6e3b4e856b11932aabb3e42feb465137c3abfdd6b56a69921a891_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d91be4ff947782c961038340e70297d05c8b578c9127c3b93a1cff828e8adf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d91be4ff947782c961038340e70297d05c8b578c9127c3b93a1cff828e8adf0->enter($__internal_3d91be4ff947782c961038340e70297d05c8b578c9127c3b93a1cff828e8adf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d65c4dec5f1d64c0edd7becd70e8c384124fbb01f778df9504cca4b563929b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d65c4dec5f1d64c0edd7becd70e8c384124fbb01f778df9504cca4b563929b9->enter($__internal_6d65c4dec5f1d64c0edd7becd70e8c384124fbb01f778df9504cca4b563929b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d65c4dec5f1d64c0edd7becd70e8c384124fbb01f778df9504cca4b563929b9->leave($__internal_6d65c4dec5f1d64c0edd7becd70e8c384124fbb01f778df9504cca4b563929b9_prof);

        
        $__internal_3d91be4ff947782c961038340e70297d05c8b578c9127c3b93a1cff828e8adf0->leave($__internal_3d91be4ff947782c961038340e70297d05c8b578c9127c3b93a1cff828e8adf0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76ab1ca4f2e06cff533bbabf14e3ee19f339e2346200baf08a888ae27322c864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ab1ca4f2e06cff533bbabf14e3ee19f339e2346200baf08a888ae27322c864->enter($__internal_76ab1ca4f2e06cff533bbabf14e3ee19f339e2346200baf08a888ae27322c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca9ae0594a82dd12cd422dfa1fee2cc5336168389e7473e290b11d682975c22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9ae0594a82dd12cd422dfa1fee2cc5336168389e7473e290b11d682975c22e->enter($__internal_ca9ae0594a82dd12cd422dfa1fee2cc5336168389e7473e290b11d682975c22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca9ae0594a82dd12cd422dfa1fee2cc5336168389e7473e290b11d682975c22e->leave($__internal_ca9ae0594a82dd12cd422dfa1fee2cc5336168389e7473e290b11d682975c22e_prof);

        
        $__internal_76ab1ca4f2e06cff533bbabf14e3ee19f339e2346200baf08a888ae27322c864->leave($__internal_76ab1ca4f2e06cff533bbabf14e3ee19f339e2346200baf08a888ae27322c864_prof);

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
        return array (  98 => 19,  81 => 18,  69 => 20,  66 => 19,  64 => 18,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 4,  27 => 1,);
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
</head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Samuel/Documents/workspace/Web/API2/my_project_name/app/Resources/views/base.html.twig");
    }
}
