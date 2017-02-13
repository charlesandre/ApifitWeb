<?php

/* :lucky:number.html.twig */
class __TwigTemplate_5ef7f2307e6611245e08b77104d062e122b56ae57d4c46f7c7c3612d5d58d0e9 extends Twig_Template
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
        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : null), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":lucky:number.html.twig", "/Users/Samuel/Documents/workspace/Web/api-source/php/api-symfony/app/Resources/views/lucky/number.html.twig");
    }
}
