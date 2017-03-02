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
        $__internal_8a5acb98171b69dafea27f8bf735e7b3aefb50e455d2f667e91e64df941907ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5acb98171b69dafea27f8bf735e7b3aefb50e455d2f667e91e64df941907ed->enter($__internal_8a5acb98171b69dafea27f8bf735e7b3aefb50e455d2f667e91e64df941907ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap.html.twig"));

        $__internal_f39b93acbaf38f37bef8897f54faafbd54030f1eee399ef87f04ac1b39ff3cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39b93acbaf38f37bef8897f54faafbd54030f1eee399ef87f04ac1b39ff3cfb->enter($__internal_f39b93acbaf38f37bef8897f54faafbd54030f1eee399ef87f04ac1b39ff3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap.html.twig"));

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
        
        $__internal_8a5acb98171b69dafea27f8bf735e7b3aefb50e455d2f667e91e64df941907ed->leave($__internal_8a5acb98171b69dafea27f8bf735e7b3aefb50e455d2f667e91e64df941907ed_prof);

        
        $__internal_f39b93acbaf38f37bef8897f54faafbd54030f1eee399ef87f04ac1b39ff3cfb->leave($__internal_f39b93acbaf38f37bef8897f54faafbd54030f1eee399ef87f04ac1b39ff3cfb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_658cbff631ee37f603b5c4437333be99c33c7da71b81abc5604fbe4269c241c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658cbff631ee37f603b5c4437333be99c33c7da71b81abc5604fbe4269c241c2->enter($__internal_658cbff631ee37f603b5c4437333be99c33c7da71b81abc5604fbe4269c241c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ef316f5ce0740e97fdb335db1c6b0e43c274cae2b16ed80a7198dcb16b7d0577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef316f5ce0740e97fdb335db1c6b0e43c274cae2b16ed80a7198dcb16b7d0577->enter($__internal_ef316f5ce0740e97fdb335db1c6b0e43c274cae2b16ed80a7198dcb16b7d0577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ef316f5ce0740e97fdb335db1c6b0e43c274cae2b16ed80a7198dcb16b7d0577->leave($__internal_ef316f5ce0740e97fdb335db1c6b0e43c274cae2b16ed80a7198dcb16b7d0577_prof);

        
        $__internal_658cbff631ee37f603b5c4437333be99c33c7da71b81abc5604fbe4269c241c2->leave($__internal_658cbff631ee37f603b5c4437333be99c33c7da71b81abc5604fbe4269c241c2_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_db1d86ac10520891923754a850ce8aeff3f0d4aae33a6f8936ae5b16a2724b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1d86ac10520891923754a850ce8aeff3f0d4aae33a6f8936ae5b16a2724b28->enter($__internal_db1d86ac10520891923754a850ce8aeff3f0d4aae33a6f8936ae5b16a2724b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5f9dc4a889d3fb838e17cced129385bed474d62a20506ed5be7b1e2ec8416b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9dc4a889d3fb838e17cced129385bed474d62a20506ed5be7b1e2ec8416b89->enter($__internal_5f9dc4a889d3fb838e17cced129385bed474d62a20506ed5be7b1e2ec8416b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5f9dc4a889d3fb838e17cced129385bed474d62a20506ed5be7b1e2ec8416b89->leave($__internal_5f9dc4a889d3fb838e17cced129385bed474d62a20506ed5be7b1e2ec8416b89_prof);

        
        $__internal_db1d86ac10520891923754a850ce8aeff3f0d4aae33a6f8936ae5b16a2724b28->leave($__internal_db1d86ac10520891923754a850ce8aeff3f0d4aae33a6f8936ae5b16a2724b28_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e5c46ca7b312c23b227be2cccc9aec66b7eb897f8cee9df4670a6cecfaf31c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c46ca7b312c23b227be2cccc9aec66b7eb897f8cee9df4670a6cecfaf31c3b->enter($__internal_e5c46ca7b312c23b227be2cccc9aec66b7eb897f8cee9df4670a6cecfaf31c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c1f263c9162bc46028507b284829c39d976e5d0909af24c7dbfeb0d923f801cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f263c9162bc46028507b284829c39d976e5d0909af24c7dbfeb0d923f801cd->enter($__internal_c1f263c9162bc46028507b284829c39d976e5d0909af24c7dbfeb0d923f801cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c1f263c9162bc46028507b284829c39d976e5d0909af24c7dbfeb0d923f801cd->leave($__internal_c1f263c9162bc46028507b284829c39d976e5d0909af24c7dbfeb0d923f801cd_prof);

        
        $__internal_e5c46ca7b312c23b227be2cccc9aec66b7eb897f8cee9df4670a6cecfaf31c3b->leave($__internal_e5c46ca7b312c23b227be2cccc9aec66b7eb897f8cee9df4670a6cecfaf31c3b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_49b1a27a57eee9960a7728402c68087f8ec6d779d1027c7c411593fb3490c513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b1a27a57eee9960a7728402c68087f8ec6d779d1027c7c411593fb3490c513->enter($__internal_49b1a27a57eee9960a7728402c68087f8ec6d779d1027c7c411593fb3490c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_97e333e6490f755b15c2d163fd2953a6790e72886e96d7e22a823f016bdb9cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e333e6490f755b15c2d163fd2953a6790e72886e96d7e22a823f016bdb9cc9->enter($__internal_97e333e6490f755b15c2d163fd2953a6790e72886e96d7e22a823f016bdb9cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4560403f3093c828424e2efead7a5f0d8c145c11d430fc7c9603c6545393d970 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_362f598f5ea3a79c46ddd3ab876cfdefa35a2e10901ff7dd71368e7838bd51a6 = "{{") && ('' === $__internal_362f598f5ea3a79c46ddd3ab876cfdefa35a2e10901ff7dd71368e7838bd51a6 || 0 === strpos($__internal_4560403f3093c828424e2efead7a5f0d8c145c11d430fc7c9603c6545393d970, $__internal_362f598f5ea3a79c46ddd3ab876cfdefa35a2e10901ff7dd71368e7838bd51a6)));
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
        
        $__internal_97e333e6490f755b15c2d163fd2953a6790e72886e96d7e22a823f016bdb9cc9->leave($__internal_97e333e6490f755b15c2d163fd2953a6790e72886e96d7e22a823f016bdb9cc9_prof);

        
        $__internal_49b1a27a57eee9960a7728402c68087f8ec6d779d1027c7c411593fb3490c513->leave($__internal_49b1a27a57eee9960a7728402c68087f8ec6d779d1027c7c411593fb3490c513_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ef81e2ab47e315068ae36167513460ca3b30b743787f76906d1e8d040868ea8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef81e2ab47e315068ae36167513460ca3b30b743787f76906d1e8d040868ea8f->enter($__internal_ef81e2ab47e315068ae36167513460ca3b30b743787f76906d1e8d040868ea8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6512fce92636882b7d7a85ae9f47abcf44d6d798f34b4552c13dad31ef69cea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6512fce92636882b7d7a85ae9f47abcf44d6d798f34b4552c13dad31ef69cea6->enter($__internal_6512fce92636882b7d7a85ae9f47abcf44d6d798f34b4552c13dad31ef69cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6512fce92636882b7d7a85ae9f47abcf44d6d798f34b4552c13dad31ef69cea6->leave($__internal_6512fce92636882b7d7a85ae9f47abcf44d6d798f34b4552c13dad31ef69cea6_prof);

        
        $__internal_ef81e2ab47e315068ae36167513460ca3b30b743787f76906d1e8d040868ea8f->leave($__internal_ef81e2ab47e315068ae36167513460ca3b30b743787f76906d1e8d040868ea8f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d36d8b959edabf936d685fffa21126625c6ee3ca72d5a89384b60bb8dc7a2c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36d8b959edabf936d685fffa21126625c6ee3ca72d5a89384b60bb8dc7a2c96->enter($__internal_d36d8b959edabf936d685fffa21126625c6ee3ca72d5a89384b60bb8dc7a2c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ac632cad2a29048a15cb2afebc0f46d85e7fe171b7a4eb1de784b76dcd50e3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac632cad2a29048a15cb2afebc0f46d85e7fe171b7a4eb1de784b76dcd50e3fd->enter($__internal_ac632cad2a29048a15cb2afebc0f46d85e7fe171b7a4eb1de784b76dcd50e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_ac632cad2a29048a15cb2afebc0f46d85e7fe171b7a4eb1de784b76dcd50e3fd->leave($__internal_ac632cad2a29048a15cb2afebc0f46d85e7fe171b7a4eb1de784b76dcd50e3fd_prof);

        
        $__internal_d36d8b959edabf936d685fffa21126625c6ee3ca72d5a89384b60bb8dc7a2c96->leave($__internal_d36d8b959edabf936d685fffa21126625c6ee3ca72d5a89384b60bb8dc7a2c96_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ea4de6882c7faff78e7f0b2ad461335b70b4a6496519e7ae3dcd9650a54b2824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4de6882c7faff78e7f0b2ad461335b70b4a6496519e7ae3dcd9650a54b2824->enter($__internal_ea4de6882c7faff78e7f0b2ad461335b70b4a6496519e7ae3dcd9650a54b2824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1694cc169a4a8833ba1fd3812dc35643d282b34f8f188162f3b84e05008d3ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1694cc169a4a8833ba1fd3812dc35643d282b34f8f188162f3b84e05008d3ba7->enter($__internal_1694cc169a4a8833ba1fd3812dc35643d282b34f8f188162f3b84e05008d3ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1694cc169a4a8833ba1fd3812dc35643d282b34f8f188162f3b84e05008d3ba7->leave($__internal_1694cc169a4a8833ba1fd3812dc35643d282b34f8f188162f3b84e05008d3ba7_prof);

        
        $__internal_ea4de6882c7faff78e7f0b2ad461335b70b4a6496519e7ae3dcd9650a54b2824->leave($__internal_ea4de6882c7faff78e7f0b2ad461335b70b4a6496519e7ae3dcd9650a54b2824_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4d4abc7fe71fb16083d92ef9c76b14b4e6193e603a5b5020361e7cae22c7fdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4abc7fe71fb16083d92ef9c76b14b4e6193e603a5b5020361e7cae22c7fdb6->enter($__internal_4d4abc7fe71fb16083d92ef9c76b14b4e6193e603a5b5020361e7cae22c7fdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_98a8307445510853133f406ac5e1bc920461f85d66c5c21bb21b3220cec06efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a8307445510853133f406ac5e1bc920461f85d66c5c21bb21b3220cec06efc->enter($__internal_98a8307445510853133f406ac5e1bc920461f85d66c5c21bb21b3220cec06efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_98a8307445510853133f406ac5e1bc920461f85d66c5c21bb21b3220cec06efc->leave($__internal_98a8307445510853133f406ac5e1bc920461f85d66c5c21bb21b3220cec06efc_prof);

        
        $__internal_4d4abc7fe71fb16083d92ef9c76b14b4e6193e603a5b5020361e7cae22c7fdb6->leave($__internal_4d4abc7fe71fb16083d92ef9c76b14b4e6193e603a5b5020361e7cae22c7fdb6_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_86bfcae77f22579555de000f5c523f546aae92bec1a94fb5d2074d468f6aee0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86bfcae77f22579555de000f5c523f546aae92bec1a94fb5d2074d468f6aee0a->enter($__internal_86bfcae77f22579555de000f5c523f546aae92bec1a94fb5d2074d468f6aee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6dd2a75cb8b0e76e58708ec9c97ad0c6a62522d9285fdc2484e3f746f0361836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd2a75cb8b0e76e58708ec9c97ad0c6a62522d9285fdc2484e3f746f0361836->enter($__internal_6dd2a75cb8b0e76e58708ec9c97ad0c6a62522d9285fdc2484e3f746f0361836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_6dd2a75cb8b0e76e58708ec9c97ad0c6a62522d9285fdc2484e3f746f0361836->leave($__internal_6dd2a75cb8b0e76e58708ec9c97ad0c6a62522d9285fdc2484e3f746f0361836_prof);

        
        $__internal_86bfcae77f22579555de000f5c523f546aae92bec1a94fb5d2074d468f6aee0a->leave($__internal_86bfcae77f22579555de000f5c523f546aae92bec1a94fb5d2074d468f6aee0a_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_61f6a725ba78f7d5dfc021d76d413a31c9aed3b64af9f6190d9304fb5ebe323c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f6a725ba78f7d5dfc021d76d413a31c9aed3b64af9f6190d9304fb5ebe323c->enter($__internal_61f6a725ba78f7d5dfc021d76d413a31c9aed3b64af9f6190d9304fb5ebe323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b00d8620bb57dd0722a51c19b87bc1dec2237d8e486193fe5056a6a6c97cc60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00d8620bb57dd0722a51c19b87bc1dec2237d8e486193fe5056a6a6c97cc60a->enter($__internal_b00d8620bb57dd0722a51c19b87bc1dec2237d8e486193fe5056a6a6c97cc60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b00d8620bb57dd0722a51c19b87bc1dec2237d8e486193fe5056a6a6c97cc60a->leave($__internal_b00d8620bb57dd0722a51c19b87bc1dec2237d8e486193fe5056a6a6c97cc60a_prof);

        
        $__internal_61f6a725ba78f7d5dfc021d76d413a31c9aed3b64af9f6190d9304fb5ebe323c->leave($__internal_61f6a725ba78f7d5dfc021d76d413a31c9aed3b64af9f6190d9304fb5ebe323c_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a62d692007d1e97892620ced987b9022f690664527b24f4d147b4d8d535d7504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62d692007d1e97892620ced987b9022f690664527b24f4d147b4d8d535d7504->enter($__internal_a62d692007d1e97892620ced987b9022f690664527b24f4d147b4d8d535d7504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_adf9502e1354e928ed886a028ba70d3acee0647211590d7adf2655546cb6db75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf9502e1354e928ed886a028ba70d3acee0647211590d7adf2655546cb6db75->enter($__internal_adf9502e1354e928ed886a028ba70d3acee0647211590d7adf2655546cb6db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_adf9502e1354e928ed886a028ba70d3acee0647211590d7adf2655546cb6db75->leave($__internal_adf9502e1354e928ed886a028ba70d3acee0647211590d7adf2655546cb6db75_prof);

        
        $__internal_a62d692007d1e97892620ced987b9022f690664527b24f4d147b4d8d535d7504->leave($__internal_a62d692007d1e97892620ced987b9022f690664527b24f4d147b4d8d535d7504_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f1a346c6b947eb4abde457894749f6755f14dc4bdbbd4c1e1d5b1df508e11393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a346c6b947eb4abde457894749f6755f14dc4bdbbd4c1e1d5b1df508e11393->enter($__internal_f1a346c6b947eb4abde457894749f6755f14dc4bdbbd4c1e1d5b1df508e11393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1b146657b0cc4ff8d8976d7bd9a71fb775dbf61fb67717d7ea9d2782ff280ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b146657b0cc4ff8d8976d7bd9a71fb775dbf61fb67717d7ea9d2782ff280ba2->enter($__internal_1b146657b0cc4ff8d8976d7bd9a71fb775dbf61fb67717d7ea9d2782ff280ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1b146657b0cc4ff8d8976d7bd9a71fb775dbf61fb67717d7ea9d2782ff280ba2->leave($__internal_1b146657b0cc4ff8d8976d7bd9a71fb775dbf61fb67717d7ea9d2782ff280ba2_prof);

        
        $__internal_f1a346c6b947eb4abde457894749f6755f14dc4bdbbd4c1e1d5b1df508e11393->leave($__internal_f1a346c6b947eb4abde457894749f6755f14dc4bdbbd4c1e1d5b1df508e11393_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8bf05e1154472d45a97e51dcb904166dd35194010f7d63e96e2002b82ec5392c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf05e1154472d45a97e51dcb904166dd35194010f7d63e96e2002b82ec5392c->enter($__internal_8bf05e1154472d45a97e51dcb904166dd35194010f7d63e96e2002b82ec5392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b693006335f983b947a2361ce0a6f48d7078307bdb0ddb5f7ba7b74a1a5ed395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b693006335f983b947a2361ce0a6f48d7078307bdb0ddb5f7ba7b74a1a5ed395->enter($__internal_b693006335f983b947a2361ce0a6f48d7078307bdb0ddb5f7ba7b74a1a5ed395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b693006335f983b947a2361ce0a6f48d7078307bdb0ddb5f7ba7b74a1a5ed395->leave($__internal_b693006335f983b947a2361ce0a6f48d7078307bdb0ddb5f7ba7b74a1a5ed395_prof);

        
        $__internal_8bf05e1154472d45a97e51dcb904166dd35194010f7d63e96e2002b82ec5392c->leave($__internal_8bf05e1154472d45a97e51dcb904166dd35194010f7d63e96e2002b82ec5392c_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_68ba80aa3b4a3573eaf0eba12dbc1d6470616b3033763509af08779436a2b782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ba80aa3b4a3573eaf0eba12dbc1d6470616b3033763509af08779436a2b782->enter($__internal_68ba80aa3b4a3573eaf0eba12dbc1d6470616b3033763509af08779436a2b782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8ea1752326b05d4939ef9dd79c9933b282dfb11a4a954ac54e18c79ae58d2b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea1752326b05d4939ef9dd79c9933b282dfb11a4a954ac54e18c79ae58d2b7f->enter($__internal_8ea1752326b05d4939ef9dd79c9933b282dfb11a4a954ac54e18c79ae58d2b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8ea1752326b05d4939ef9dd79c9933b282dfb11a4a954ac54e18c79ae58d2b7f->leave($__internal_8ea1752326b05d4939ef9dd79c9933b282dfb11a4a954ac54e18c79ae58d2b7f_prof);

        
        $__internal_68ba80aa3b4a3573eaf0eba12dbc1d6470616b3033763509af08779436a2b782->leave($__internal_68ba80aa3b4a3573eaf0eba12dbc1d6470616b3033763509af08779436a2b782_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_751b8377dd81cc5cf08b32fe388e41496055db14d4179dff14414c23deb9a907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751b8377dd81cc5cf08b32fe388e41496055db14d4179dff14414c23deb9a907->enter($__internal_751b8377dd81cc5cf08b32fe388e41496055db14d4179dff14414c23deb9a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_712ba23e404a58b8c5dec08174edfdaedecdd82c8d601823154c298c54228844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712ba23e404a58b8c5dec08174edfdaedecdd82c8d601823154c298c54228844->enter($__internal_712ba23e404a58b8c5dec08174edfdaedecdd82c8d601823154c298c54228844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_712ba23e404a58b8c5dec08174edfdaedecdd82c8d601823154c298c54228844->leave($__internal_712ba23e404a58b8c5dec08174edfdaedecdd82c8d601823154c298c54228844_prof);

        
        $__internal_751b8377dd81cc5cf08b32fe388e41496055db14d4179dff14414c23deb9a907->leave($__internal_751b8377dd81cc5cf08b32fe388e41496055db14d4179dff14414c23deb9a907_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_08f0e58d06491afae4a63444e248364235b676a7e54333fbee1b198f4104b9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f0e58d06491afae4a63444e248364235b676a7e54333fbee1b198f4104b9f8->enter($__internal_08f0e58d06491afae4a63444e248364235b676a7e54333fbee1b198f4104b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_93fade310b9980d06381f4ee2a1f1b904040ca7f5e3452df18916034308bdabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fade310b9980d06381f4ee2a1f1b904040ca7f5e3452df18916034308bdabd->enter($__internal_93fade310b9980d06381f4ee2a1f1b904040ca7f5e3452df18916034308bdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_93fade310b9980d06381f4ee2a1f1b904040ca7f5e3452df18916034308bdabd->leave($__internal_93fade310b9980d06381f4ee2a1f1b904040ca7f5e3452df18916034308bdabd_prof);

        
        $__internal_08f0e58d06491afae4a63444e248364235b676a7e54333fbee1b198f4104b9f8->leave($__internal_08f0e58d06491afae4a63444e248364235b676a7e54333fbee1b198f4104b9f8_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5d98333e6b5edba1f0944ff79982d782e7c0d936381da15243a92cab3c78101b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d98333e6b5edba1f0944ff79982d782e7c0d936381da15243a92cab3c78101b->enter($__internal_5d98333e6b5edba1f0944ff79982d782e7c0d936381da15243a92cab3c78101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c7c63c76d86d66a396baf0616e91506396dcf9ac1c44e6fee15aa6d82736df3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c63c76d86d66a396baf0616e91506396dcf9ac1c44e6fee15aa6d82736df3e->enter($__internal_c7c63c76d86d66a396baf0616e91506396dcf9ac1c44e6fee15aa6d82736df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c7c63c76d86d66a396baf0616e91506396dcf9ac1c44e6fee15aa6d82736df3e->leave($__internal_c7c63c76d86d66a396baf0616e91506396dcf9ac1c44e6fee15aa6d82736df3e_prof);

        
        $__internal_5d98333e6b5edba1f0944ff79982d782e7c0d936381da15243a92cab3c78101b->leave($__internal_5d98333e6b5edba1f0944ff79982d782e7c0d936381da15243a92cab3c78101b_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9327d36b8ca983975aa72c4506dd00ad94f7b634ad71a1ae87ca79d3737669c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9327d36b8ca983975aa72c4506dd00ad94f7b634ad71a1ae87ca79d3737669c5->enter($__internal_9327d36b8ca983975aa72c4506dd00ad94f7b634ad71a1ae87ca79d3737669c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_84beccf5f00b61107457ad3175dd3683d732e2f5cc519b3a1f8bf87a5da4461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84beccf5f00b61107457ad3175dd3683d732e2f5cc519b3a1f8bf87a5da4461a->enter($__internal_84beccf5f00b61107457ad3175dd3683d732e2f5cc519b3a1f8bf87a5da4461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_84beccf5f00b61107457ad3175dd3683d732e2f5cc519b3a1f8bf87a5da4461a->leave($__internal_84beccf5f00b61107457ad3175dd3683d732e2f5cc519b3a1f8bf87a5da4461a_prof);

        
        $__internal_9327d36b8ca983975aa72c4506dd00ad94f7b634ad71a1ae87ca79d3737669c5->leave($__internal_9327d36b8ca983975aa72c4506dd00ad94f7b634ad71a1ae87ca79d3737669c5_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6f2186bc8f65a5ba7f74a561e1f2c28d2dc5274b56b3a17ff2125790116c6cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2186bc8f65a5ba7f74a561e1f2c28d2dc5274b56b3a17ff2125790116c6cd4->enter($__internal_6f2186bc8f65a5ba7f74a561e1f2c28d2dc5274b56b3a17ff2125790116c6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_511a8e4b7fd9264644401faeed7066295ec9b465a5f9ae0f112cc753958ab913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511a8e4b7fd9264644401faeed7066295ec9b465a5f9ae0f112cc753958ab913->enter($__internal_511a8e4b7fd9264644401faeed7066295ec9b465a5f9ae0f112cc753958ab913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_511a8e4b7fd9264644401faeed7066295ec9b465a5f9ae0f112cc753958ab913->leave($__internal_511a8e4b7fd9264644401faeed7066295ec9b465a5f9ae0f112cc753958ab913_prof);

        
        $__internal_6f2186bc8f65a5ba7f74a561e1f2c28d2dc5274b56b3a17ff2125790116c6cd4->leave($__internal_6f2186bc8f65a5ba7f74a561e1f2c28d2dc5274b56b3a17ff2125790116c6cd4_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_11315cde78dccf3fa1994a38affe79c0540d5b2213fe11f5445f36ba63500820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11315cde78dccf3fa1994a38affe79c0540d5b2213fe11f5445f36ba63500820->enter($__internal_11315cde78dccf3fa1994a38affe79c0540d5b2213fe11f5445f36ba63500820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_49689129e4811b5adf2d2773cd9e0dadd95b006c4fd0cd441e7698e281f1c5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49689129e4811b5adf2d2773cd9e0dadd95b006c4fd0cd441e7698e281f1c5fe->enter($__internal_49689129e4811b5adf2d2773cd9e0dadd95b006c4fd0cd441e7698e281f1c5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_49689129e4811b5adf2d2773cd9e0dadd95b006c4fd0cd441e7698e281f1c5fe->leave($__internal_49689129e4811b5adf2d2773cd9e0dadd95b006c4fd0cd441e7698e281f1c5fe_prof);

        
        $__internal_11315cde78dccf3fa1994a38affe79c0540d5b2213fe11f5445f36ba63500820->leave($__internal_11315cde78dccf3fa1994a38affe79c0540d5b2213fe11f5445f36ba63500820_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8dce010983109cecb9a573b1fdba735406c6cc5260c680f4f1bce9a99c20df26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dce010983109cecb9a573b1fdba735406c6cc5260c680f4f1bce9a99c20df26->enter($__internal_8dce010983109cecb9a573b1fdba735406c6cc5260c680f4f1bce9a99c20df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0baf0d5292692996e45622bc8dadae9f3c9af0857d8713abdd0df3d613d04bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baf0d5292692996e45622bc8dadae9f3c9af0857d8713abdd0df3d613d04bb6->enter($__internal_0baf0d5292692996e45622bc8dadae9f3c9af0857d8713abdd0df3d613d04bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0baf0d5292692996e45622bc8dadae9f3c9af0857d8713abdd0df3d613d04bb6->leave($__internal_0baf0d5292692996e45622bc8dadae9f3c9af0857d8713abdd0df3d613d04bb6_prof);

        
        $__internal_8dce010983109cecb9a573b1fdba735406c6cc5260c680f4f1bce9a99c20df26->leave($__internal_8dce010983109cecb9a573b1fdba735406c6cc5260c680f4f1bce9a99c20df26_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_75edc9fc631b0052e37121b77350bab18c5a2f4cfc90a6f4abe40d8617713c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75edc9fc631b0052e37121b77350bab18c5a2f4cfc90a6f4abe40d8617713c3b->enter($__internal_75edc9fc631b0052e37121b77350bab18c5a2f4cfc90a6f4abe40d8617713c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f26ac7ce2c0bdf8beaaf664576e7cf0659767aa179198982a5f1f91adea259bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26ac7ce2c0bdf8beaaf664576e7cf0659767aa179198982a5f1f91adea259bf->enter($__internal_f26ac7ce2c0bdf8beaaf664576e7cf0659767aa179198982a5f1f91adea259bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f26ac7ce2c0bdf8beaaf664576e7cf0659767aa179198982a5f1f91adea259bf->leave($__internal_f26ac7ce2c0bdf8beaaf664576e7cf0659767aa179198982a5f1f91adea259bf_prof);

        
        $__internal_75edc9fc631b0052e37121b77350bab18c5a2f4cfc90a6f4abe40d8617713c3b->leave($__internal_75edc9fc631b0052e37121b77350bab18c5a2f4cfc90a6f4abe40d8617713c3b_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_97eb60110648b1e36433af46c9366365dcd00461fc46be5709ad6ad6f1f03679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97eb60110648b1e36433af46c9366365dcd00461fc46be5709ad6ad6f1f03679->enter($__internal_97eb60110648b1e36433af46c9366365dcd00461fc46be5709ad6ad6f1f03679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9a097d8fa8eb9e6175de6817a7147dda82accbb27f87476ed5317f360d79c4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a097d8fa8eb9e6175de6817a7147dda82accbb27f87476ed5317f360d79c4c1->enter($__internal_9a097d8fa8eb9e6175de6817a7147dda82accbb27f87476ed5317f360d79c4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9a097d8fa8eb9e6175de6817a7147dda82accbb27f87476ed5317f360d79c4c1->leave($__internal_9a097d8fa8eb9e6175de6817a7147dda82accbb27f87476ed5317f360d79c4c1_prof);

        
        $__internal_97eb60110648b1e36433af46c9366365dcd00461fc46be5709ad6ad6f1f03679->leave($__internal_97eb60110648b1e36433af46c9366365dcd00461fc46be5709ad6ad6f1f03679_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_91487e749ddadce3243cec4b3881f872bf0743436ce7c728d003fa9c3017d3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91487e749ddadce3243cec4b3881f872bf0743436ce7c728d003fa9c3017d3bf->enter($__internal_91487e749ddadce3243cec4b3881f872bf0743436ce7c728d003fa9c3017d3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6afd07f0773772157902be04eae9b6c9e019ba8a22b27dc72dbb91f633b9fb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afd07f0773772157902be04eae9b6c9e019ba8a22b27dc72dbb91f633b9fb04->enter($__internal_6afd07f0773772157902be04eae9b6c9e019ba8a22b27dc72dbb91f633b9fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6afd07f0773772157902be04eae9b6c9e019ba8a22b27dc72dbb91f633b9fb04->leave($__internal_6afd07f0773772157902be04eae9b6c9e019ba8a22b27dc72dbb91f633b9fb04_prof);

        
        $__internal_91487e749ddadce3243cec4b3881f872bf0743436ce7c728d003fa9c3017d3bf->leave($__internal_91487e749ddadce3243cec4b3881f872bf0743436ce7c728d003fa9c3017d3bf_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_29dd3f1d1276810a48ff6237a99bfe0c78e2ceca4f8ea2bdf349c000d93fe665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dd3f1d1276810a48ff6237a99bfe0c78e2ceca4f8ea2bdf349c000d93fe665->enter($__internal_29dd3f1d1276810a48ff6237a99bfe0c78e2ceca4f8ea2bdf349c000d93fe665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6064a273d3bb92238c62b3dccf553950b2d79c8487dfc1f78177d565f2d5c8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6064a273d3bb92238c62b3dccf553950b2d79c8487dfc1f78177d565f2d5c8e5->enter($__internal_6064a273d3bb92238c62b3dccf553950b2d79c8487dfc1f78177d565f2d5c8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_6064a273d3bb92238c62b3dccf553950b2d79c8487dfc1f78177d565f2d5c8e5->leave($__internal_6064a273d3bb92238c62b3dccf553950b2d79c8487dfc1f78177d565f2d5c8e5_prof);

        
        $__internal_29dd3f1d1276810a48ff6237a99bfe0c78e2ceca4f8ea2bdf349c000d93fe665->leave($__internal_29dd3f1d1276810a48ff6237a99bfe0c78e2ceca4f8ea2bdf349c000d93fe665_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_05c1593ed31a062ed76ce8808311084fd82d2529bda71680f2363a7ddb2a3c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c1593ed31a062ed76ce8808311084fd82d2529bda71680f2363a7ddb2a3c37->enter($__internal_05c1593ed31a062ed76ce8808311084fd82d2529bda71680f2363a7ddb2a3c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c354248de85dd374e13c1c651a72ac828da1eb5ddbd98128cdd9d5b97093b1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c354248de85dd374e13c1c651a72ac828da1eb5ddbd98128cdd9d5b97093b1be->enter($__internal_c354248de85dd374e13c1c651a72ac828da1eb5ddbd98128cdd9d5b97093b1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_c354248de85dd374e13c1c651a72ac828da1eb5ddbd98128cdd9d5b97093b1be->leave($__internal_c354248de85dd374e13c1c651a72ac828da1eb5ddbd98128cdd9d5b97093b1be_prof);

        
        $__internal_05c1593ed31a062ed76ce8808311084fd82d2529bda71680f2363a7ddb2a3c37->leave($__internal_05c1593ed31a062ed76ce8808311084fd82d2529bda71680f2363a7ddb2a3c37_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bcb2365d9fb03ed4fe954cf41f7a5b66430e28a8b38194b2cbce95b31c52eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb2365d9fb03ed4fe954cf41f7a5b66430e28a8b38194b2cbce95b31c52eb61->enter($__internal_bcb2365d9fb03ed4fe954cf41f7a5b66430e28a8b38194b2cbce95b31c52eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bdc3c5992875009538b287356760c33f583036aad0a93b7698120f83f4e8d604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc3c5992875009538b287356760c33f583036aad0a93b7698120f83f4e8d604->enter($__internal_bdc3c5992875009538b287356760c33f583036aad0a93b7698120f83f4e8d604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_bdc3c5992875009538b287356760c33f583036aad0a93b7698120f83f4e8d604->leave($__internal_bdc3c5992875009538b287356760c33f583036aad0a93b7698120f83f4e8d604_prof);

        
        $__internal_bcb2365d9fb03ed4fe954cf41f7a5b66430e28a8b38194b2cbce95b31c52eb61->leave($__internal_bcb2365d9fb03ed4fe954cf41f7a5b66430e28a8b38194b2cbce95b31c52eb61_prof);

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
