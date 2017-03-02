<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24ffcd4856a442db1c9e1c3c8e9092944f6c9c8995be015c4a29872fb2b14ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24ffcd4856a442db1c9e1c3c8e9092944f6c9c8995be015c4a29872fb2b14ae->enter($__internal_e24ffcd4856a442db1c9e1c3c8e9092944f6c9c8995be015c4a29872fb2b14ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_456c077be9231a82f25396f6d655d482b9f806da63c09e08258e7b65b557fa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456c077be9231a82f25396f6d655d482b9f806da63c09e08258e7b65b557fa98->enter($__internal_456c077be9231a82f25396f6d655d482b9f806da63c09e08258e7b65b557fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e24ffcd4856a442db1c9e1c3c8e9092944f6c9c8995be015c4a29872fb2b14ae->leave($__internal_e24ffcd4856a442db1c9e1c3c8e9092944f6c9c8995be015c4a29872fb2b14ae_prof);

        
        $__internal_456c077be9231a82f25396f6d655d482b9f806da63c09e08258e7b65b557fa98->leave($__internal_456c077be9231a82f25396f6d655d482b9f806da63c09e08258e7b65b557fa98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3df19b68f9240947a17f30833780bc13ec8814ec8b6e650daa24b438bee76ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df19b68f9240947a17f30833780bc13ec8814ec8b6e650daa24b438bee76ee7->enter($__internal_3df19b68f9240947a17f30833780bc13ec8814ec8b6e650daa24b438bee76ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c6fc9c9521e778c9e8c432a82f2df13f4aea212ca5a90a1dbbcae5cd9e6cd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6fc9c9521e778c9e8c432a82f2df13f4aea212ca5a90a1dbbcae5cd9e6cd9d->enter($__internal_7c6fc9c9521e778c9e8c432a82f2df13f4aea212ca5a90a1dbbcae5cd9e6cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c6fc9c9521e778c9e8c432a82f2df13f4aea212ca5a90a1dbbcae5cd9e6cd9d->leave($__internal_7c6fc9c9521e778c9e8c432a82f2df13f4aea212ca5a90a1dbbcae5cd9e6cd9d_prof);

        
        $__internal_3df19b68f9240947a17f30833780bc13ec8814ec8b6e650daa24b438bee76ee7->leave($__internal_3df19b68f9240947a17f30833780bc13ec8814ec8b6e650daa24b438bee76ee7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f83eb25f429bdcf1b7c2e2b463672048ed00f0b6faf7cebac361184aff70fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f83eb25f429bdcf1b7c2e2b463672048ed00f0b6faf7cebac361184aff70fe6->enter($__internal_8f83eb25f429bdcf1b7c2e2b463672048ed00f0b6faf7cebac361184aff70fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6dc05e683706a27d01ca712ebbee4458d66b8c34f7d6edfe407c5cc5bdb87729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc05e683706a27d01ca712ebbee4458d66b8c34f7d6edfe407c5cc5bdb87729->enter($__internal_6dc05e683706a27d01ca712ebbee4458d66b8c34f7d6edfe407c5cc5bdb87729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6dc05e683706a27d01ca712ebbee4458d66b8c34f7d6edfe407c5cc5bdb87729->leave($__internal_6dc05e683706a27d01ca712ebbee4458d66b8c34f7d6edfe407c5cc5bdb87729_prof);

        
        $__internal_8f83eb25f429bdcf1b7c2e2b463672048ed00f0b6faf7cebac361184aff70fe6->leave($__internal_8f83eb25f429bdcf1b7c2e2b463672048ed00f0b6faf7cebac361184aff70fe6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c9ad1d441aa9c6e6bbfa9ac212c6f2c3bdbb5f85e35937f69fd2e03f079e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c9ad1d441aa9c6e6bbfa9ac212c6f2c3bdbb5f85e35937f69fd2e03f079e2f->enter($__internal_33c9ad1d441aa9c6e6bbfa9ac212c6f2c3bdbb5f85e35937f69fd2e03f079e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3909e0df688fb3ce1f55048e471a57409f38345470df32f99ad8e377bd98d880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3909e0df688fb3ce1f55048e471a57409f38345470df32f99ad8e377bd98d880->enter($__internal_3909e0df688fb3ce1f55048e471a57409f38345470df32f99ad8e377bd98d880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3909e0df688fb3ce1f55048e471a57409f38345470df32f99ad8e377bd98d880->leave($__internal_3909e0df688fb3ce1f55048e471a57409f38345470df32f99ad8e377bd98d880_prof);

        
        $__internal_33c9ad1d441aa9c6e6bbfa9ac212c6f2c3bdbb5f85e35937f69fd2e03f079e2f->leave($__internal_33c9ad1d441aa9c6e6bbfa9ac212c6f2c3bdbb5f85e35937f69fd2e03f079e2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
