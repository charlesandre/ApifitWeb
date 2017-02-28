<?php

/* form/bootstrap.html.twig */
class __TwigTemplate_112a2d156797f1f51d5c682d80ef4d16f42a45f7fdc9dc7501d13221b0a69eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form/bootstrap.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf4eabf5c5cc4300f9a44a78dfc1e97f83578490721b37a2e57d4590cd22d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf4eabf5c5cc4300f9a44a78dfc1e97f83578490721b37a2e57d4590cd22d88->enter($__internal_5bf4eabf5c5cc4300f9a44a78dfc1e97f83578490721b37a2e57d4590cd22d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap.html.twig"));

        $__internal_2e08bb135c3aebe70a18c254091d25e11939835b8098715c6bf3d831ae19f51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e08bb135c3aebe70a18c254091d25e11939835b8098715c6bf3d831ae19f51f->enter($__internal_2e08bb135c3aebe70a18c254091d25e11939835b8098715c6bf3d831ae19f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5bf4eabf5c5cc4300f9a44a78dfc1e97f83578490721b37a2e57d4590cd22d88->leave($__internal_5bf4eabf5c5cc4300f9a44a78dfc1e97f83578490721b37a2e57d4590cd22d88_prof);

        
        $__internal_2e08bb135c3aebe70a18c254091d25e11939835b8098715c6bf3d831ae19f51f->leave($__internal_2e08bb135c3aebe70a18c254091d25e11939835b8098715c6bf3d831ae19f51f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_06af1e43546b21e92ce193484a640181883114fc7c40ab281be6667468564731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06af1e43546b21e92ce193484a640181883114fc7c40ab281be6667468564731->enter($__internal_06af1e43546b21e92ce193484a640181883114fc7c40ab281be6667468564731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2021b0af7e17b8f07a5218cf1dd7d4c57477c3a806813d0863df98697dd4c7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2021b0af7e17b8f07a5218cf1dd7d4c57477c3a806813d0863df98697dd4c7ce->enter($__internal_2021b0af7e17b8f07a5218cf1dd7d4c57477c3a806813d0863df98697dd4c7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2021b0af7e17b8f07a5218cf1dd7d4c57477c3a806813d0863df98697dd4c7ce->leave($__internal_2021b0af7e17b8f07a5218cf1dd7d4c57477c3a806813d0863df98697dd4c7ce_prof);

        
        $__internal_06af1e43546b21e92ce193484a640181883114fc7c40ab281be6667468564731->leave($__internal_06af1e43546b21e92ce193484a640181883114fc7c40ab281be6667468564731_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_98edcd04fc8dddd97f08db3c8c65b9cb0142b5512661b0c5cabcc4a934057bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98edcd04fc8dddd97f08db3c8c65b9cb0142b5512661b0c5cabcc4a934057bcf->enter($__internal_98edcd04fc8dddd97f08db3c8c65b9cb0142b5512661b0c5cabcc4a934057bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fa435e6d1902d30d6dd7223cf071b255f452a784f27b743e63747a8989509ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa435e6d1902d30d6dd7223cf071b255f452a784f27b743e63747a8989509ca0->enter($__internal_fa435e6d1902d30d6dd7223cf071b255f452a784f27b743e63747a8989509ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fa435e6d1902d30d6dd7223cf071b255f452a784f27b743e63747a8989509ca0->leave($__internal_fa435e6d1902d30d6dd7223cf071b255f452a784f27b743e63747a8989509ca0_prof);

        
        $__internal_98edcd04fc8dddd97f08db3c8c65b9cb0142b5512661b0c5cabcc4a934057bcf->leave($__internal_98edcd04fc8dddd97f08db3c8c65b9cb0142b5512661b0c5cabcc4a934057bcf_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2197711a7c37c82ef008c59c20de8436730321aa4f14f15c7de4517af64d7837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2197711a7c37c82ef008c59c20de8436730321aa4f14f15c7de4517af64d7837->enter($__internal_2197711a7c37c82ef008c59c20de8436730321aa4f14f15c7de4517af64d7837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_684eaa0fba34ade978f82dde430951e79ab3a2269cb292cb9ad3a62061f65f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684eaa0fba34ade978f82dde430951e79ab3a2269cb292cb9ad3a62061f65f07->enter($__internal_684eaa0fba34ade978f82dde430951e79ab3a2269cb292cb9ad3a62061f65f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_684eaa0fba34ade978f82dde430951e79ab3a2269cb292cb9ad3a62061f65f07->leave($__internal_684eaa0fba34ade978f82dde430951e79ab3a2269cb292cb9ad3a62061f65f07_prof);

        
        $__internal_2197711a7c37c82ef008c59c20de8436730321aa4f14f15c7de4517af64d7837->leave($__internal_2197711a7c37c82ef008c59c20de8436730321aa4f14f15c7de4517af64d7837_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_535233f3f3bc0829a63ad427dffef3e62727321a4ed059b437b5917b870dde20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535233f3f3bc0829a63ad427dffef3e62727321a4ed059b437b5917b870dde20->enter($__internal_535233f3f3bc0829a63ad427dffef3e62727321a4ed059b437b5917b870dde20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9cd0f256ab4883ac75c74459b8226b0cb54b26052a04419eea8ac9634627ff60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd0f256ab4883ac75c74459b8226b0cb54b26052a04419eea8ac9634627ff60->enter($__internal_9cd0f256ab4883ac75c74459b8226b0cb54b26052a04419eea8ac9634627ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a57851fad91d087a6ac03fa8faeaaca26bc83ea462c888d1689c06d6eff88e95 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_ed68d247b0fc33cacf7d021ad77c14e7c54c3cda1a3b0ae3c2e63cf0a84b651d = "{{") && ('' === $__internal_ed68d247b0fc33cacf7d021ad77c14e7c54c3cda1a3b0ae3c2e63cf0a84b651d || 0 === strpos($__internal_a57851fad91d087a6ac03fa8faeaaca26bc83ea462c888d1689c06d6eff88e95, $__internal_ed68d247b0fc33cacf7d021ad77c14e7c54c3cda1a3b0ae3c2e63cf0a84b651d)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_9cd0f256ab4883ac75c74459b8226b0cb54b26052a04419eea8ac9634627ff60->leave($__internal_9cd0f256ab4883ac75c74459b8226b0cb54b26052a04419eea8ac9634627ff60_prof);

        
        $__internal_535233f3f3bc0829a63ad427dffef3e62727321a4ed059b437b5917b870dde20->leave($__internal_535233f3f3bc0829a63ad427dffef3e62727321a4ed059b437b5917b870dde20_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6793d5d9c2ff8179dd9b918d5392e683f8f22e73b0a521fff92ba98bac20ae67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6793d5d9c2ff8179dd9b918d5392e683f8f22e73b0a521fff92ba98bac20ae67->enter($__internal_6793d5d9c2ff8179dd9b918d5392e683f8f22e73b0a521fff92ba98bac20ae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9c2f3ec0958886311840d5f409a85d78753c19e3aeb938a12b159156496fb920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2f3ec0958886311840d5f409a85d78753c19e3aeb938a12b159156496fb920->enter($__internal_9c2f3ec0958886311840d5f409a85d78753c19e3aeb938a12b159156496fb920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9c2f3ec0958886311840d5f409a85d78753c19e3aeb938a12b159156496fb920->leave($__internal_9c2f3ec0958886311840d5f409a85d78753c19e3aeb938a12b159156496fb920_prof);

        
        $__internal_6793d5d9c2ff8179dd9b918d5392e683f8f22e73b0a521fff92ba98bac20ae67->leave($__internal_6793d5d9c2ff8179dd9b918d5392e683f8f22e73b0a521fff92ba98bac20ae67_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_345ed7538e5944ac62ca915e1ce3ca38e44bc7138deb813cb078860ba0972371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345ed7538e5944ac62ca915e1ce3ca38e44bc7138deb813cb078860ba0972371->enter($__internal_345ed7538e5944ac62ca915e1ce3ca38e44bc7138deb813cb078860ba0972371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2aca0d597044ccad8dbe0628c5a34d5c10e829da5b2dbccd1c01e7d6681a4bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aca0d597044ccad8dbe0628c5a34d5c10e829da5b2dbccd1c01e7d6681a4bfb->enter($__internal_2aca0d597044ccad8dbe0628c5a34d5c10e829da5b2dbccd1c01e7d6681a4bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_2aca0d597044ccad8dbe0628c5a34d5c10e829da5b2dbccd1c01e7d6681a4bfb->leave($__internal_2aca0d597044ccad8dbe0628c5a34d5c10e829da5b2dbccd1c01e7d6681a4bfb_prof);

        
        $__internal_345ed7538e5944ac62ca915e1ce3ca38e44bc7138deb813cb078860ba0972371->leave($__internal_345ed7538e5944ac62ca915e1ce3ca38e44bc7138deb813cb078860ba0972371_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2f9738f287bc53ac21217f5ea1d1acc159d57d549bb25318fc0a653e0811e180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9738f287bc53ac21217f5ea1d1acc159d57d549bb25318fc0a653e0811e180->enter($__internal_2f9738f287bc53ac21217f5ea1d1acc159d57d549bb25318fc0a653e0811e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9f4fd9590844bf332dc9bd5f64e905912c3acb36c7dd2c3cab40c269ccde63da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4fd9590844bf332dc9bd5f64e905912c3acb36c7dd2c3cab40c269ccde63da->enter($__internal_9f4fd9590844bf332dc9bd5f64e905912c3acb36c7dd2c3cab40c269ccde63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9f4fd9590844bf332dc9bd5f64e905912c3acb36c7dd2c3cab40c269ccde63da->leave($__internal_9f4fd9590844bf332dc9bd5f64e905912c3acb36c7dd2c3cab40c269ccde63da_prof);

        
        $__internal_2f9738f287bc53ac21217f5ea1d1acc159d57d549bb25318fc0a653e0811e180->leave($__internal_2f9738f287bc53ac21217f5ea1d1acc159d57d549bb25318fc0a653e0811e180_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a72d83b0a6185860fa9e9db57b264c5844c2114fcbd23b44a0a0c21000be86c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72d83b0a6185860fa9e9db57b264c5844c2114fcbd23b44a0a0c21000be86c6->enter($__internal_a72d83b0a6185860fa9e9db57b264c5844c2114fcbd23b44a0a0c21000be86c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_10b38945e91df0fd357f307893412795e93ae58fd1ac748b6677e4a0491721b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b38945e91df0fd357f307893412795e93ae58fd1ac748b6677e4a0491721b2->enter($__internal_10b38945e91df0fd357f307893412795e93ae58fd1ac748b6677e4a0491721b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_10b38945e91df0fd357f307893412795e93ae58fd1ac748b6677e4a0491721b2->leave($__internal_10b38945e91df0fd357f307893412795e93ae58fd1ac748b6677e4a0491721b2_prof);

        
        $__internal_a72d83b0a6185860fa9e9db57b264c5844c2114fcbd23b44a0a0c21000be86c6->leave($__internal_a72d83b0a6185860fa9e9db57b264c5844c2114fcbd23b44a0a0c21000be86c6_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3cfc0ceaaf5699d4ce3767caaa9e903891de9d3efe7645fc34b557f338696539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfc0ceaaf5699d4ce3767caaa9e903891de9d3efe7645fc34b557f338696539->enter($__internal_3cfc0ceaaf5699d4ce3767caaa9e903891de9d3efe7645fc34b557f338696539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b7b7b355792ab841a255452a8b12dd76b8549fb6dc2d8fcffcfd287d10b66bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b7b355792ab841a255452a8b12dd76b8549fb6dc2d8fcffcfd287d10b66bc7->enter($__internal_b7b7b355792ab841a255452a8b12dd76b8549fb6dc2d8fcffcfd287d10b66bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_b7b7b355792ab841a255452a8b12dd76b8549fb6dc2d8fcffcfd287d10b66bc7->leave($__internal_b7b7b355792ab841a255452a8b12dd76b8549fb6dc2d8fcffcfd287d10b66bc7_prof);

        
        $__internal_3cfc0ceaaf5699d4ce3767caaa9e903891de9d3efe7645fc34b557f338696539->leave($__internal_3cfc0ceaaf5699d4ce3767caaa9e903891de9d3efe7645fc34b557f338696539_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_25f43bcacaad05f5c50b7c0aaf2cff39805bcb2b21d540c355761beb4f22d3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f43bcacaad05f5c50b7c0aaf2cff39805bcb2b21d540c355761beb4f22d3a3->enter($__internal_25f43bcacaad05f5c50b7c0aaf2cff39805bcb2b21d540c355761beb4f22d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_edb5a066e70c314d7d4c9bfee3ab36fc36504767301473845696f88136c26e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb5a066e70c314d7d4c9bfee3ab36fc36504767301473845696f88136c26e98->enter($__internal_edb5a066e70c314d7d4c9bfee3ab36fc36504767301473845696f88136c26e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_edb5a066e70c314d7d4c9bfee3ab36fc36504767301473845696f88136c26e98->leave($__internal_edb5a066e70c314d7d4c9bfee3ab36fc36504767301473845696f88136c26e98_prof);

        
        $__internal_25f43bcacaad05f5c50b7c0aaf2cff39805bcb2b21d540c355761beb4f22d3a3->leave($__internal_25f43bcacaad05f5c50b7c0aaf2cff39805bcb2b21d540c355761beb4f22d3a3_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2550cda68f38219c097e16a3fc4973c72f6bcba7aff7dd3e3fa0366d33fc2946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2550cda68f38219c097e16a3fc4973c72f6bcba7aff7dd3e3fa0366d33fc2946->enter($__internal_2550cda68f38219c097e16a3fc4973c72f6bcba7aff7dd3e3fa0366d33fc2946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_317d9dcf02449e99d0a41b59a5c3bdba008550fce556152a3ad718333ec05d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317d9dcf02449e99d0a41b59a5c3bdba008550fce556152a3ad718333ec05d13->enter($__internal_317d9dcf02449e99d0a41b59a5c3bdba008550fce556152a3ad718333ec05d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_317d9dcf02449e99d0a41b59a5c3bdba008550fce556152a3ad718333ec05d13->leave($__internal_317d9dcf02449e99d0a41b59a5c3bdba008550fce556152a3ad718333ec05d13_prof);

        
        $__internal_2550cda68f38219c097e16a3fc4973c72f6bcba7aff7dd3e3fa0366d33fc2946->leave($__internal_2550cda68f38219c097e16a3fc4973c72f6bcba7aff7dd3e3fa0366d33fc2946_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c1a92833896103dc1580ceb52ada485f29f5d6dbc7f9fd5fba4c79d39e5f5111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a92833896103dc1580ceb52ada485f29f5d6dbc7f9fd5fba4c79d39e5f5111->enter($__internal_c1a92833896103dc1580ceb52ada485f29f5d6dbc7f9fd5fba4c79d39e5f5111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6d95d5556f97bab59ed58d54d061a45d80e847a779321a837273cfeb2f199aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d95d5556f97bab59ed58d54d061a45d80e847a779321a837273cfeb2f199aff->enter($__internal_6d95d5556f97bab59ed58d54d061a45d80e847a779321a837273cfeb2f199aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_6d95d5556f97bab59ed58d54d061a45d80e847a779321a837273cfeb2f199aff->leave($__internal_6d95d5556f97bab59ed58d54d061a45d80e847a779321a837273cfeb2f199aff_prof);

        
        $__internal_c1a92833896103dc1580ceb52ada485f29f5d6dbc7f9fd5fba4c79d39e5f5111->leave($__internal_c1a92833896103dc1580ceb52ada485f29f5d6dbc7f9fd5fba4c79d39e5f5111_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_eace4b8eb5137df650f45b724bd0e8190a0d457c46ec7c5a5a1f20e804f0a59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eace4b8eb5137df650f45b724bd0e8190a0d457c46ec7c5a5a1f20e804f0a59e->enter($__internal_eace4b8eb5137df650f45b724bd0e8190a0d457c46ec7c5a5a1f20e804f0a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_912ef574ea076bcd873df53a3f0823693c5d94b5440d8f8be5c0b0ad8074e992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912ef574ea076bcd873df53a3f0823693c5d94b5440d8f8be5c0b0ad8074e992->enter($__internal_912ef574ea076bcd873df53a3f0823693c5d94b5440d8f8be5c0b0ad8074e992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_912ef574ea076bcd873df53a3f0823693c5d94b5440d8f8be5c0b0ad8074e992->leave($__internal_912ef574ea076bcd873df53a3f0823693c5d94b5440d8f8be5c0b0ad8074e992_prof);

        
        $__internal_eace4b8eb5137df650f45b724bd0e8190a0d457c46ec7c5a5a1f20e804f0a59e->leave($__internal_eace4b8eb5137df650f45b724bd0e8190a0d457c46ec7c5a5a1f20e804f0a59e_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b67fd998a1cae3981bcf379acd35a8d1ddb3edf376dbfc1ace1a5ed590e30648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67fd998a1cae3981bcf379acd35a8d1ddb3edf376dbfc1ace1a5ed590e30648->enter($__internal_b67fd998a1cae3981bcf379acd35a8d1ddb3edf376dbfc1ace1a5ed590e30648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_281255bcc75b2602d77721837a5d1c0c1e4a558d833ed7a572b4ca09792a7de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281255bcc75b2602d77721837a5d1c0c1e4a558d833ed7a572b4ca09792a7de3->enter($__internal_281255bcc75b2602d77721837a5d1c0c1e4a558d833ed7a572b4ca09792a7de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_281255bcc75b2602d77721837a5d1c0c1e4a558d833ed7a572b4ca09792a7de3->leave($__internal_281255bcc75b2602d77721837a5d1c0c1e4a558d833ed7a572b4ca09792a7de3_prof);

        
        $__internal_b67fd998a1cae3981bcf379acd35a8d1ddb3edf376dbfc1ace1a5ed590e30648->leave($__internal_b67fd998a1cae3981bcf379acd35a8d1ddb3edf376dbfc1ace1a5ed590e30648_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0f57d4fd29baaaa04b003593c44997e0339bbeeb8889ec4de5ff81bb7eaa4d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f57d4fd29baaaa04b003593c44997e0339bbeeb8889ec4de5ff81bb7eaa4d24->enter($__internal_0f57d4fd29baaaa04b003593c44997e0339bbeeb8889ec4de5ff81bb7eaa4d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_88710ec49788b6f39555827022a1a4e0a6e8a3ed0166e75d37d9ad137a269247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88710ec49788b6f39555827022a1a4e0a6e8a3ed0166e75d37d9ad137a269247->enter($__internal_88710ec49788b6f39555827022a1a4e0a6e8a3ed0166e75d37d9ad137a269247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_88710ec49788b6f39555827022a1a4e0a6e8a3ed0166e75d37d9ad137a269247->leave($__internal_88710ec49788b6f39555827022a1a4e0a6e8a3ed0166e75d37d9ad137a269247_prof);

        
        $__internal_0f57d4fd29baaaa04b003593c44997e0339bbeeb8889ec4de5ff81bb7eaa4d24->leave($__internal_0f57d4fd29baaaa04b003593c44997e0339bbeeb8889ec4de5ff81bb7eaa4d24_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_54d73bd27a2358891c57d1f2086f3d0fdf7eb820bb5b852ad18dd212010343c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d73bd27a2358891c57d1f2086f3d0fdf7eb820bb5b852ad18dd212010343c3->enter($__internal_54d73bd27a2358891c57d1f2086f3d0fdf7eb820bb5b852ad18dd212010343c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d6cc3eb4970f088be63ce825842884a072f4d817eed696374071f265a3cf28e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cc3eb4970f088be63ce825842884a072f4d817eed696374071f265a3cf28e0->enter($__internal_d6cc3eb4970f088be63ce825842884a072f4d817eed696374071f265a3cf28e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d6cc3eb4970f088be63ce825842884a072f4d817eed696374071f265a3cf28e0->leave($__internal_d6cc3eb4970f088be63ce825842884a072f4d817eed696374071f265a3cf28e0_prof);

        
        $__internal_54d73bd27a2358891c57d1f2086f3d0fdf7eb820bb5b852ad18dd212010343c3->leave($__internal_54d73bd27a2358891c57d1f2086f3d0fdf7eb820bb5b852ad18dd212010343c3_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b56e61739beff2c3e5407c78b05cf2ca9e52d6501bc73dad877c2439974631d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56e61739beff2c3e5407c78b05cf2ca9e52d6501bc73dad877c2439974631d8->enter($__internal_b56e61739beff2c3e5407c78b05cf2ca9e52d6501bc73dad877c2439974631d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c0eec6f60d1a4b4a33913603d89bcdb9f54281e60cf03c95a7e63f0acb0595d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eec6f60d1a4b4a33913603d89bcdb9f54281e60cf03c95a7e63f0acb0595d9->enter($__internal_c0eec6f60d1a4b4a33913603d89bcdb9f54281e60cf03c95a7e63f0acb0595d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c0eec6f60d1a4b4a33913603d89bcdb9f54281e60cf03c95a7e63f0acb0595d9->leave($__internal_c0eec6f60d1a4b4a33913603d89bcdb9f54281e60cf03c95a7e63f0acb0595d9_prof);

        
        $__internal_b56e61739beff2c3e5407c78b05cf2ca9e52d6501bc73dad877c2439974631d8->leave($__internal_b56e61739beff2c3e5407c78b05cf2ca9e52d6501bc73dad877c2439974631d8_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_960e7c7306b5733f906a05296337945e0812d517e9c7933d98690f7b8b63b1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960e7c7306b5733f906a05296337945e0812d517e9c7933d98690f7b8b63b1cd->enter($__internal_960e7c7306b5733f906a05296337945e0812d517e9c7933d98690f7b8b63b1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9cac15dfbba2e12973bc2528a211d5b33675e11cd39136e0b94dc87ed3c62011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cac15dfbba2e12973bc2528a211d5b33675e11cd39136e0b94dc87ed3c62011->enter($__internal_9cac15dfbba2e12973bc2528a211d5b33675e11cd39136e0b94dc87ed3c62011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_9cac15dfbba2e12973bc2528a211d5b33675e11cd39136e0b94dc87ed3c62011->leave($__internal_9cac15dfbba2e12973bc2528a211d5b33675e11cd39136e0b94dc87ed3c62011_prof);

        
        $__internal_960e7c7306b5733f906a05296337945e0812d517e9c7933d98690f7b8b63b1cd->leave($__internal_960e7c7306b5733f906a05296337945e0812d517e9c7933d98690f7b8b63b1cd_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0e9b3152f932ce8c6ca7dbf20666e41e173e17f0c83790115eace214a040d54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9b3152f932ce8c6ca7dbf20666e41e173e17f0c83790115eace214a040d54c->enter($__internal_0e9b3152f932ce8c6ca7dbf20666e41e173e17f0c83790115eace214a040d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ce622bd636f4fb0aead4a437ffdde9c54edc49415c67e1a007f026074d87d9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce622bd636f4fb0aead4a437ffdde9c54edc49415c67e1a007f026074d87d9b6->enter($__internal_ce622bd636f4fb0aead4a437ffdde9c54edc49415c67e1a007f026074d87d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_ce622bd636f4fb0aead4a437ffdde9c54edc49415c67e1a007f026074d87d9b6->leave($__internal_ce622bd636f4fb0aead4a437ffdde9c54edc49415c67e1a007f026074d87d9b6_prof);

        
        $__internal_0e9b3152f932ce8c6ca7dbf20666e41e173e17f0c83790115eace214a040d54c->leave($__internal_0e9b3152f932ce8c6ca7dbf20666e41e173e17f0c83790115eace214a040d54c_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8e20cbb6bb139017b701a95e9a8312b59071f0c1b70c1103bb6dc9873e6622f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e20cbb6bb139017b701a95e9a8312b59071f0c1b70c1103bb6dc9873e6622f9->enter($__internal_8e20cbb6bb139017b701a95e9a8312b59071f0c1b70c1103bb6dc9873e6622f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e25a2650cd4c50ff6db6e162a2051190e3a89270b65b78c07c72167a79454c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25a2650cd4c50ff6db6e162a2051190e3a89270b65b78c07c72167a79454c42->enter($__internal_e25a2650cd4c50ff6db6e162a2051190e3a89270b65b78c07c72167a79454c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_e25a2650cd4c50ff6db6e162a2051190e3a89270b65b78c07c72167a79454c42->leave($__internal_e25a2650cd4c50ff6db6e162a2051190e3a89270b65b78c07c72167a79454c42_prof);

        
        $__internal_8e20cbb6bb139017b701a95e9a8312b59071f0c1b70c1103bb6dc9873e6622f9->leave($__internal_8e20cbb6bb139017b701a95e9a8312b59071f0c1b70c1103bb6dc9873e6622f9_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_391e60a67a6968facaacf7c821b2dbc3c685a8cddb18b8becb43590edcef9c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391e60a67a6968facaacf7c821b2dbc3c685a8cddb18b8becb43590edcef9c83->enter($__internal_391e60a67a6968facaacf7c821b2dbc3c685a8cddb18b8becb43590edcef9c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9550e9c5a8a64830f0b3ff91356fd07edd48d31c511252e3bfe26d2fe75ae754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9550e9c5a8a64830f0b3ff91356fd07edd48d31c511252e3bfe26d2fe75ae754->enter($__internal_9550e9c5a8a64830f0b3ff91356fd07edd48d31c511252e3bfe26d2fe75ae754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9550e9c5a8a64830f0b3ff91356fd07edd48d31c511252e3bfe26d2fe75ae754->leave($__internal_9550e9c5a8a64830f0b3ff91356fd07edd48d31c511252e3bfe26d2fe75ae754_prof);

        
        $__internal_391e60a67a6968facaacf7c821b2dbc3c685a8cddb18b8becb43590edcef9c83->leave($__internal_391e60a67a6968facaacf7c821b2dbc3c685a8cddb18b8becb43590edcef9c83_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_87f3de29397f6f00963271a3b17fdbedd7f7d2508c41df02f820ff78291b6993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f3de29397f6f00963271a3b17fdbedd7f7d2508c41df02f820ff78291b6993->enter($__internal_87f3de29397f6f00963271a3b17fdbedd7f7d2508c41df02f820ff78291b6993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d13c85794ba8e8b54e7bb7099041d9a219624b3bbf9957ace1c59b775e22ff06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13c85794ba8e8b54e7bb7099041d9a219624b3bbf9957ace1c59b775e22ff06->enter($__internal_d13c85794ba8e8b54e7bb7099041d9a219624b3bbf9957ace1c59b775e22ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d13c85794ba8e8b54e7bb7099041d9a219624b3bbf9957ace1c59b775e22ff06->leave($__internal_d13c85794ba8e8b54e7bb7099041d9a219624b3bbf9957ace1c59b775e22ff06_prof);

        
        $__internal_87f3de29397f6f00963271a3b17fdbedd7f7d2508c41df02f820ff78291b6993->leave($__internal_87f3de29397f6f00963271a3b17fdbedd7f7d2508c41df02f820ff78291b6993_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_90655c020152bb86a9be04bb7c1e40241034352db029d335ba99a09865f1b941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90655c020152bb86a9be04bb7c1e40241034352db029d335ba99a09865f1b941->enter($__internal_90655c020152bb86a9be04bb7c1e40241034352db029d335ba99a09865f1b941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a04d40acf40af1d2bef21a41b3ad2db44d8381410e73bd237bd5f43d919f9b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04d40acf40af1d2bef21a41b3ad2db44d8381410e73bd237bd5f43d919f9b99->enter($__internal_a04d40acf40af1d2bef21a41b3ad2db44d8381410e73bd237bd5f43d919f9b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a04d40acf40af1d2bef21a41b3ad2db44d8381410e73bd237bd5f43d919f9b99->leave($__internal_a04d40acf40af1d2bef21a41b3ad2db44d8381410e73bd237bd5f43d919f9b99_prof);

        
        $__internal_90655c020152bb86a9be04bb7c1e40241034352db029d335ba99a09865f1b941->leave($__internal_90655c020152bb86a9be04bb7c1e40241034352db029d335ba99a09865f1b941_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ab6e0d0110e4c1ddd1487d634e724e91f78839b8dc7a324ce0b5afe5d144d288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6e0d0110e4c1ddd1487d634e724e91f78839b8dc7a324ce0b5afe5d144d288->enter($__internal_ab6e0d0110e4c1ddd1487d634e724e91f78839b8dc7a324ce0b5afe5d144d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_473666dd12a3a4e549975755a966f3112014a3c734dcf6d09041508b89c03f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473666dd12a3a4e549975755a966f3112014a3c734dcf6d09041508b89c03f70->enter($__internal_473666dd12a3a4e549975755a966f3112014a3c734dcf6d09041508b89c03f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_473666dd12a3a4e549975755a966f3112014a3c734dcf6d09041508b89c03f70->leave($__internal_473666dd12a3a4e549975755a966f3112014a3c734dcf6d09041508b89c03f70_prof);

        
        $__internal_ab6e0d0110e4c1ddd1487d634e724e91f78839b8dc7a324ce0b5afe5d144d288->leave($__internal_ab6e0d0110e4c1ddd1487d634e724e91f78839b8dc7a324ce0b5afe5d144d288_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8fbf8c421f2fcd09d6394186a860f3cd54553a880e78fb9446f8337b2ac32e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbf8c421f2fcd09d6394186a860f3cd54553a880e78fb9446f8337b2ac32e2c->enter($__internal_8fbf8c421f2fcd09d6394186a860f3cd54553a880e78fb9446f8337b2ac32e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_85026e17f13345e5b5cd759cd0f57e8bf1b72500215678f245baf90764a43b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85026e17f13345e5b5cd759cd0f57e8bf1b72500215678f245baf90764a43b47->enter($__internal_85026e17f13345e5b5cd759cd0f57e8bf1b72500215678f245baf90764a43b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_85026e17f13345e5b5cd759cd0f57e8bf1b72500215678f245baf90764a43b47->leave($__internal_85026e17f13345e5b5cd759cd0f57e8bf1b72500215678f245baf90764a43b47_prof);

        
        $__internal_8fbf8c421f2fcd09d6394186a860f3cd54553a880e78fb9446f8337b2ac32e2c->leave($__internal_8fbf8c421f2fcd09d6394186a860f3cd54553a880e78fb9446f8337b2ac32e2c_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_27de7c3010056a5f86ea51c850c3ee379859a8f9a30172d7c5a51c21ad0afa81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27de7c3010056a5f86ea51c850c3ee379859a8f9a30172d7c5a51c21ad0afa81->enter($__internal_27de7c3010056a5f86ea51c850c3ee379859a8f9a30172d7c5a51c21ad0afa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6e8246c25d5e94a80eb2826964ddb2cb53dd9515fbd317ebc106d155ae943aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8246c25d5e94a80eb2826964ddb2cb53dd9515fbd317ebc106d155ae943aaa->enter($__internal_6e8246c25d5e94a80eb2826964ddb2cb53dd9515fbd317ebc106d155ae943aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_6e8246c25d5e94a80eb2826964ddb2cb53dd9515fbd317ebc106d155ae943aaa->leave($__internal_6e8246c25d5e94a80eb2826964ddb2cb53dd9515fbd317ebc106d155ae943aaa_prof);

        
        $__internal_27de7c3010056a5f86ea51c850c3ee379859a8f9a30172d7c5a51c21ad0afa81->leave($__internal_27de7c3010056a5f86ea51c850c3ee379859a8f9a30172d7c5a51c21ad0afa81_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b074f22b888071b1f8ee8d408a980b547af3f86a6cd801fadbb386ee43a20ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b074f22b888071b1f8ee8d408a980b547af3f86a6cd801fadbb386ee43a20ac4->enter($__internal_b074f22b888071b1f8ee8d408a980b547af3f86a6cd801fadbb386ee43a20ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_464092e0d8c063a6a00106bf5850e1be6b9a9a40879fe047c29d6327aa19a499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464092e0d8c063a6a00106bf5850e1be6b9a9a40879fe047c29d6327aa19a499->enter($__internal_464092e0d8c063a6a00106bf5850e1be6b9a9a40879fe047c29d6327aa19a499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_464092e0d8c063a6a00106bf5850e1be6b9a9a40879fe047c29d6327aa19a499->leave($__internal_464092e0d8c063a6a00106bf5850e1be6b9a9a40879fe047c29d6327aa19a499_prof);

        
        $__internal_b074f22b888071b1f8ee8d408a980b547af3f86a6cd801fadbb386ee43a20ac4->leave($__internal_b074f22b888071b1f8ee8d408a980b547af3f86a6cd801fadbb386ee43a20ac4_prof);

    }

    public function getTemplateName()
    {
        return "form/bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "form/bootstrap.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\Form\\bootstrap.html.twig");
    }
}
