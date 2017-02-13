<?php

/* AppBundle:oauth:connected.html.twig */
class __TwigTemplate_ae46e839ba9bca0ff0704e65a324ce7cba886fa6767bf2510aa9c8531c6b8972 extends Twig_Template
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
        // line 2
        echo "
<h1> hi </h2>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:oauth:connected.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:oauth:connected.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/php/api-symfony/src/AppBundle/Resources/views/oauth/connected.html.twig");
    }
}
