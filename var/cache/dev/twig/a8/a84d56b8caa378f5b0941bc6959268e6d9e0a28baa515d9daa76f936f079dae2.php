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
        $__internal_2833d5097da915bef363d071caa5b4cf8058e81b07cf76f7d63cc5a81ccfe6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2833d5097da915bef363d071caa5b4cf8058e81b07cf76f7d63cc5a81ccfe6ee->enter($__internal_2833d5097da915bef363d071caa5b4cf8058e81b07cf76f7d63cc5a81ccfe6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1ca238c77b6121bb8c04c664e417fdc0edf8393a10b7bc81e7ec56bde87fdf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca238c77b6121bb8c04c664e417fdc0edf8393a10b7bc81e7ec56bde87fdf23->enter($__internal_1ca238c77b6121bb8c04c664e417fdc0edf8393a10b7bc81e7ec56bde87fdf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2833d5097da915bef363d071caa5b4cf8058e81b07cf76f7d63cc5a81ccfe6ee->leave($__internal_2833d5097da915bef363d071caa5b4cf8058e81b07cf76f7d63cc5a81ccfe6ee_prof);

        
        $__internal_1ca238c77b6121bb8c04c664e417fdc0edf8393a10b7bc81e7ec56bde87fdf23->leave($__internal_1ca238c77b6121bb8c04c664e417fdc0edf8393a10b7bc81e7ec56bde87fdf23_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_b20456b5c8ae4d87d4e119f6f5f3b7ebf88441e3dcabac3bdb7bbf748c31fcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20456b5c8ae4d87d4e119f6f5f3b7ebf88441e3dcabac3bdb7bbf748c31fcf6->enter($__internal_b20456b5c8ae4d87d4e119f6f5f3b7ebf88441e3dcabac3bdb7bbf748c31fcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72746f16c42004ae419b9e04680a5bfe6f87975d0a85470e71c77356cb1db618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72746f16c42004ae419b9e04680a5bfe6f87975d0a85470e71c77356cb1db618->enter($__internal_72746f16c42004ae419b9e04680a5bfe6f87975d0a85470e71c77356cb1db618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72746f16c42004ae419b9e04680a5bfe6f87975d0a85470e71c77356cb1db618->leave($__internal_72746f16c42004ae419b9e04680a5bfe6f87975d0a85470e71c77356cb1db618_prof);

        
        $__internal_b20456b5c8ae4d87d4e119f6f5f3b7ebf88441e3dcabac3bdb7bbf748c31fcf6->leave($__internal_b20456b5c8ae4d87d4e119f6f5f3b7ebf88441e3dcabac3bdb7bbf748c31fcf6_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dd6e760d1f624fd8efaf544be0baa32081c3468c92e59b9d54ff18e009eab39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd6e760d1f624fd8efaf544be0baa32081c3468c92e59b9d54ff18e009eab39->enter($__internal_0dd6e760d1f624fd8efaf544be0baa32081c3468c92e59b9d54ff18e009eab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9725c6cf00efd4b04cf30885f3536736f064973f4632c4406ceea3730b31a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9725c6cf00efd4b04cf30885f3536736f064973f4632c4406ceea3730b31a11->enter($__internal_e9725c6cf00efd4b04cf30885f3536736f064973f4632c4406ceea3730b31a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9725c6cf00efd4b04cf30885f3536736f064973f4632c4406ceea3730b31a11->leave($__internal_e9725c6cf00efd4b04cf30885f3536736f064973f4632c4406ceea3730b31a11_prof);

        
        $__internal_0dd6e760d1f624fd8efaf544be0baa32081c3468c92e59b9d54ff18e009eab39->leave($__internal_0dd6e760d1f624fd8efaf544be0baa32081c3468c92e59b9d54ff18e009eab39_prof);

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
