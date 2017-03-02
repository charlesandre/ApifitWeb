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
        $__internal_b585c7a4f06ca1a163a9c75ef9785e045e7b0978559005a4577b8f85ff7652ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b585c7a4f06ca1a163a9c75ef9785e045e7b0978559005a4577b8f85ff7652ba->enter($__internal_b585c7a4f06ca1a163a9c75ef9785e045e7b0978559005a4577b8f85ff7652ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7c65a28400e5f184207060a56e784aa7b6734d87e03fafcfc29885c941cc5393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c65a28400e5f184207060a56e784aa7b6734d87e03fafcfc29885c941cc5393->enter($__internal_7c65a28400e5f184207060a56e784aa7b6734d87e03fafcfc29885c941cc5393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b585c7a4f06ca1a163a9c75ef9785e045e7b0978559005a4577b8f85ff7652ba->leave($__internal_b585c7a4f06ca1a163a9c75ef9785e045e7b0978559005a4577b8f85ff7652ba_prof);

        
        $__internal_7c65a28400e5f184207060a56e784aa7b6734d87e03fafcfc29885c941cc5393->leave($__internal_7c65a28400e5f184207060a56e784aa7b6734d87e03fafcfc29885c941cc5393_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_b56200196063d7c3ac409b9187618b6ef39aa807be74e60c0b1d9d330df4a814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56200196063d7c3ac409b9187618b6ef39aa807be74e60c0b1d9d330df4a814->enter($__internal_b56200196063d7c3ac409b9187618b6ef39aa807be74e60c0b1d9d330df4a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3a0aedd41d737e8eaf97bb98d2e9e1c53893f44b822ec668ff828f50fde0287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a0aedd41d737e8eaf97bb98d2e9e1c53893f44b822ec668ff828f50fde0287->enter($__internal_a3a0aedd41d737e8eaf97bb98d2e9e1c53893f44b822ec668ff828f50fde0287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3a0aedd41d737e8eaf97bb98d2e9e1c53893f44b822ec668ff828f50fde0287->leave($__internal_a3a0aedd41d737e8eaf97bb98d2e9e1c53893f44b822ec668ff828f50fde0287_prof);

        
        $__internal_b56200196063d7c3ac409b9187618b6ef39aa807be74e60c0b1d9d330df4a814->leave($__internal_b56200196063d7c3ac409b9187618b6ef39aa807be74e60c0b1d9d330df4a814_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23dfbda5e652e8e82c96e389f7b1ba41a8488bc02dc6fbcd7f486c223a5f899d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dfbda5e652e8e82c96e389f7b1ba41a8488bc02dc6fbcd7f486c223a5f899d->enter($__internal_23dfbda5e652e8e82c96e389f7b1ba41a8488bc02dc6fbcd7f486c223a5f899d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c901190526466db2fc33535934e619808817ecbc27e4803b3283f884619d898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c901190526466db2fc33535934e619808817ecbc27e4803b3283f884619d898->enter($__internal_3c901190526466db2fc33535934e619808817ecbc27e4803b3283f884619d898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3c901190526466db2fc33535934e619808817ecbc27e4803b3283f884619d898->leave($__internal_3c901190526466db2fc33535934e619808817ecbc27e4803b3283f884619d898_prof);

        
        $__internal_23dfbda5e652e8e82c96e389f7b1ba41a8488bc02dc6fbcd7f486c223a5f899d->leave($__internal_23dfbda5e652e8e82c96e389f7b1ba41a8488bc02dc6fbcd7f486c223a5f899d_prof);

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
