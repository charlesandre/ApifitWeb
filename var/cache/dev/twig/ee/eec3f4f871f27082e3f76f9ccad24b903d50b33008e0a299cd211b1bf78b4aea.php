<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
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
        $__internal_ac3388ef72bae8923adae1a58d2cd8029af0782e0d79137ad6ecfc091c50decc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3388ef72bae8923adae1a58d2cd8029af0782e0d79137ad6ecfc091c50decc->enter($__internal_ac3388ef72bae8923adae1a58d2cd8029af0782e0d79137ad6ecfc091c50decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_660bd621ea3540f9c0d500c96be3bd7be77e56063347cc259f5d9aad62a91170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660bd621ea3540f9c0d500c96be3bd7be77e56063347cc259f5d9aad62a91170->enter($__internal_660bd621ea3540f9c0d500c96be3bd7be77e56063347cc259f5d9aad62a91170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ac3388ef72bae8923adae1a58d2cd8029af0782e0d79137ad6ecfc091c50decc->leave($__internal_ac3388ef72bae8923adae1a58d2cd8029af0782e0d79137ad6ecfc091c50decc_prof);

        
        $__internal_660bd621ea3540f9c0d500c96be3bd7be77e56063347cc259f5d9aad62a91170->leave($__internal_660bd621ea3540f9c0d500c96be3bd7be77e56063347cc259f5d9aad62a91170_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cd03c905d0f7f17e3da49b0fbc0f3927d7c1f79a21f7a11e154f2230ab5684f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd03c905d0f7f17e3da49b0fbc0f3927d7c1f79a21f7a11e154f2230ab5684f->enter($__internal_5cd03c905d0f7f17e3da49b0fbc0f3927d7c1f79a21f7a11e154f2230ab5684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af7961067214adcc659d0af56e847afe90d62d28df80838b8118cea3bcd8e28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7961067214adcc659d0af56e847afe90d62d28df80838b8118cea3bcd8e28d->enter($__internal_af7961067214adcc659d0af56e847afe90d62d28df80838b8118cea3bcd8e28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af7961067214adcc659d0af56e847afe90d62d28df80838b8118cea3bcd8e28d->leave($__internal_af7961067214adcc659d0af56e847afe90d62d28df80838b8118cea3bcd8e28d_prof);

        
        $__internal_5cd03c905d0f7f17e3da49b0fbc0f3927d7c1f79a21f7a11e154f2230ab5684f->leave($__internal_5cd03c905d0f7f17e3da49b0fbc0f3927d7c1f79a21f7a11e154f2230ab5684f_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9e68458a678b4f484eb69438225327b920666e934da85c403b3a212afc23071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e68458a678b4f484eb69438225327b920666e934da85c403b3a212afc23071->enter($__internal_e9e68458a678b4f484eb69438225327b920666e934da85c403b3a212afc23071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c409794d921dccfea14263dc378be8f51b12cffc64c787453e9a753b23224bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c409794d921dccfea14263dc378be8f51b12cffc64c787453e9a753b23224bf->enter($__internal_7c409794d921dccfea14263dc378be8f51b12cffc64c787453e9a753b23224bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c409794d921dccfea14263dc378be8f51b12cffc64c787453e9a753b23224bf->leave($__internal_7c409794d921dccfea14263dc378be8f51b12cffc64c787453e9a753b23224bf_prof);

        
        $__internal_e9e68458a678b4f484eb69438225327b920666e934da85c403b3a212afc23071->leave($__internal_e9e68458a678b4f484eb69438225327b920666e934da85c403b3a212afc23071_prof);

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
", "base.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\base.html.twig");
    }
}
