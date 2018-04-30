<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_1606e2f57368cc23c235a4889b813698ce6a654234280d4b6fade4a388dd2a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb821abb835fa83806e22ecdda7026691bbb9c5e6516eede5d694a889eb79f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb821abb835fa83806e22ecdda7026691bbb9c5e6516eede5d694a889eb79f9f->enter($__internal_fb821abb835fa83806e22ecdda7026691bbb9c5e6516eede5d694a889eb79f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 114
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 120
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 125
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 138
        $this->displayBlock('date_widget', $context, $blocks);
        // line 152
        $this->displayBlock('time_widget', $context, $blocks);
        // line 163
        $this->displayBlock('number_widget', $context, $blocks);
        // line 169
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 174
        $this->displayBlock('money_widget', $context, $blocks);
        // line 178
        $this->displayBlock('url_widget', $context, $blocks);
        // line 183
        $this->displayBlock('search_widget', $context, $blocks);
        // line 188
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 193
        $this->displayBlock('password_widget', $context, $blocks);
        // line 198
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 203
        $this->displayBlock('email_widget', $context, $blocks);
        // line 208
        $this->displayBlock('button_widget', $context, $blocks);
        // line 222
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 227
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 234
        $this->displayBlock('form_label', $context, $blocks);
        // line 269
        $this->displayBlock('button_label', $context, $blocks);
        // line 273
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 281
        $this->displayBlock('form_row', $context, $blocks);
        // line 289
        $this->displayBlock('button_row', $context, $blocks);
        // line 295
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 301
        $this->displayBlock('form', $context, $blocks);
        // line 307
        $this->displayBlock('form_start', $context, $blocks);
        // line 321
        $this->displayBlock('form_end', $context, $blocks);
        // line 328
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 332
        $this->displayBlock('form_errors', $context, $blocks);
        // line 342
        $this->displayBlock('form_rest', $context, $blocks);
        // line 349
        echo "
";
        // line 352
        $this->displayBlock('form_rows', $context, $blocks);
        // line 358
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 375
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 403
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_fb821abb835fa83806e22ecdda7026691bbb9c5e6516eede5d694a889eb79f9f->leave($__internal_fb821abb835fa83806e22ecdda7026691bbb9c5e6516eede5d694a889eb79f9f_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_aa46cc6c1d19fc948ac272daf7f2be06c62d1c6bac0e6f7b164a785e1b82057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa46cc6c1d19fc948ac272daf7f2be06c62d1c6bac0e6f7b164a785e1b82057b->enter($__internal_aa46cc6c1d19fc948ac272daf7f2be06c62d1c6bac0e6f7b164a785e1b82057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_aa46cc6c1d19fc948ac272daf7f2be06c62d1c6bac0e6f7b164a785e1b82057b->leave($__internal_aa46cc6c1d19fc948ac272daf7f2be06c62d1c6bac0e6f7b164a785e1b82057b_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d14176121613904a974a779fdad58f72e3cb1c18038b749b927404f89ad6350d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14176121613904a974a779fdad58f72e3cb1c18038b749b927404f89ad6350d->enter($__internal_d14176121613904a974a779fdad58f72e3cb1c18038b749b927404f89ad6350d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
  ";
        // line 38
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 38)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_d14176121613904a974a779fdad58f72e3cb1c18038b749b927404f89ad6350d->leave($__internal_d14176121613904a974a779fdad58f72e3cb1c18038b749b927404f89ad6350d_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b10039b165a5005d1fde79f4feef5985f52f82fee2c827579424e958ccc9f3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10039b165a5005d1fde79f4feef5985f52f82fee2c827579424e958ccc9f3e1->enter($__internal_b10039b165a5005d1fde79f4feef5985f52f82fee2c827579424e958ccc9f3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_b10039b165a5005d1fde79f4feef5985f52f82fee2c827579424e958ccc9f3e1->leave($__internal_b10039b165a5005d1fde79f4feef5985f52f82fee2c827579424e958ccc9f3e1_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f7deb8f6976e06fc75125e1be72134fe16285fb182774af6329d3b3cf0242d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7deb8f6976e06fc75125e1be72134fe16285fb182774af6329d3b3cf0242d86->enter($__internal_f7deb8f6976e06fc75125e1be72134fe16285fb182774af6329d3b3cf0242d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_f7deb8f6976e06fc75125e1be72134fe16285fb182774af6329d3b3cf0242d86->leave($__internal_f7deb8f6976e06fc75125e1be72134fe16285fb182774af6329d3b3cf0242d86_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_29912857a726b39693e0e06025c0176a9fe5ef21d4a1ecbe919692d8d4506d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29912857a726b39693e0e06025c0176a9fe5ef21d4a1ecbe919692d8d4506d2a->enter($__internal_29912857a726b39693e0e06025c0176a9fe5ef21d4a1ecbe919692d8d4506d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
  ";
        // line 60
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 60)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_29912857a726b39693e0e06025c0176a9fe5ef21d4a1ecbe919692d8d4506d2a->leave($__internal_29912857a726b39693e0e06025c0176a9fe5ef21d4a1ecbe919692d8d4506d2a_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_5788cb2c8be6b8e4ea2c2c42a224338ca39fe35f48cf786d9a0ed877e106ae32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5788cb2c8be6b8e4ea2c2c42a224338ca39fe35f48cf786d9a0ed877e106ae32->enter($__internal_5788cb2c8be6b8e4ea2c2c42a224338ca39fe35f48cf786d9a0ed877e106ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_5788cb2c8be6b8e4ea2c2c42a224338ca39fe35f48cf786d9a0ed877e106ae32->leave($__internal_5788cb2c8be6b8e4ea2c2c42a224338ca39fe35f48cf786d9a0ed877e106ae32_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cf06bbdc1d02450c2f52b34892e7b8b4d6317c34b45db05c766ed4bac71cbe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf06bbdc1d02450c2f52b34892e7b8b4d6317c34b45db05c766ed4bac71cbe4f->enter($__internal_cf06bbdc1d02450c2f52b34892e7b8b4d6317c34b45db05c766ed4bac71cbe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_cf06bbdc1d02450c2f52b34892e7b8b4d6317c34b45db05c766ed4bac71cbe4f->leave($__internal_cf06bbdc1d02450c2f52b34892e7b8b4d6317c34b45db05c766ed4bac71cbe4f_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d8efed553058f82a62679146507f9247fdf32df58cedb71a60c3656c59a731df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8efed553058f82a62679146507f9247fdf32df58cedb71a60c3656c59a731df->enter($__internal_d8efed553058f82a62679146507f9247fdf32df58cedb71a60c3656c59a731df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_d8efed553058f82a62679146507f9247fdf32df58cedb71a60c3656c59a731df->leave($__internal_d8efed553058f82a62679146507f9247fdf32df58cedb71a60c3656c59a731df_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_8ca990fe6075e360d3f2d8ba3d8cbb8b28539d20f944100d8e7407143c826958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca990fe6075e360d3f2d8ba3d8cbb8b28539d20f944100d8e7407143c826958->enter($__internal_8ca990fe6075e360d3f2d8ba3d8cbb8b28539d20f944100d8e7407143c826958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8ca990fe6075e360d3f2d8ba3d8cbb8b28539d20f944100d8e7407143c826958->leave($__internal_8ca990fe6075e360d3f2d8ba3d8cbb8b28539d20f944100d8e7407143c826958_prof);

    }

    // line 114
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b5a5237f3c601272af8c45ab3dcec14dfcfa743d350d1031c7a0d5a8b3000220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a5237f3c601272af8c45ab3dcec14dfcfa743d350d1031c7a0d5a8b3000220->enter($__internal_b5a5237f3c601272af8c45ab3dcec14dfcfa743d350d1031c7a0d5a8b3000220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 115
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 116
        echo "<input type=\"checkbox\"
         ";
        // line 117
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_b5a5237f3c601272af8c45ab3dcec14dfcfa743d350d1031c7a0d5a8b3000220->leave($__internal_b5a5237f3c601272af8c45ab3dcec14dfcfa743d350d1031c7a0d5a8b3000220_prof);

    }

    // line 120
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e33d2d4a902cdab7ba54631b183881493287ab435316b09e3518aed75964f2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33d2d4a902cdab7ba54631b183881493287ab435316b09e3518aed75964f2ea->enter($__internal_e33d2d4a902cdab7ba54631b183881493287ab435316b09e3518aed75964f2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 121
        echo "<input
    type=\"radio\" ";
        // line 122
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_e33d2d4a902cdab7ba54631b183881493287ab435316b09e3518aed75964f2ea->leave($__internal_e33d2d4a902cdab7ba54631b183881493287ab435316b09e3518aed75964f2ea_prof);

    }

    // line 125
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f22a1e390fb1905c7d74967ab35ecc31139282a1131f9a569156d4b5de60630d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22a1e390fb1905c7d74967ab35ecc31139282a1131f9a569156d4b5de60630d->enter($__internal_f22a1e390fb1905c7d74967ab35ecc31139282a1131f9a569156d4b5de60630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 126
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 127
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 129
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 134
            echo "</div>";
        }
        
        $__internal_f22a1e390fb1905c7d74967ab35ecc31139282a1131f9a569156d4b5de60630d->leave($__internal_f22a1e390fb1905c7d74967ab35ecc31139282a1131f9a569156d4b5de60630d_prof);

    }

    // line 138
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_cd9b236627807209871e4a84b91a0529d55b09cc60d140ca97d50348ecf7b225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9b236627807209871e4a84b91a0529d55b09cc60d140ca97d50348ecf7b225->enter($__internal_cd9b236627807209871e4a84b91a0529d55b09cc60d140ca97d50348ecf7b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 139
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 140
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 144
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 145
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 148
            echo "</div>";
        }
        
        $__internal_cd9b236627807209871e4a84b91a0529d55b09cc60d140ca97d50348ecf7b225->leave($__internal_cd9b236627807209871e4a84b91a0529d55b09cc60d140ca97d50348ecf7b225_prof);

    }

    // line 152
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3172b21e7759de7a53da40e86b80661995a3dd67a96fa5729c00b932fce12b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3172b21e7759de7a53da40e86b80661995a3dd67a96fa5729c00b932fce12b53->enter($__internal_3172b21e7759de7a53da40e86b80661995a3dd67a96fa5729c00b932fce12b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 153
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 154
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 156
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 157
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 159
            echo "    </div>";
        }
        
        $__internal_3172b21e7759de7a53da40e86b80661995a3dd67a96fa5729c00b932fce12b53->leave($__internal_3172b21e7759de7a53da40e86b80661995a3dd67a96fa5729c00b932fce12b53_prof);

    }

    // line 163
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a2c0b5038506650e75b25cf230aeece644a510e17272bc343d125523bb0a64b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c0b5038506650e75b25cf230aeece644a510e17272bc343d125523bb0a64b9->enter($__internal_a2c0b5038506650e75b25cf230aeece644a510e17272bc343d125523bb0a64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a2c0b5038506650e75b25cf230aeece644a510e17272bc343d125523bb0a64b9->leave($__internal_a2c0b5038506650e75b25cf230aeece644a510e17272bc343d125523bb0a64b9_prof);

    }

    // line 169
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_4fabe8d37e7569d436bd140085b28c1ff97a900c0227111c57f1f749e0e827c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fabe8d37e7569d436bd140085b28c1ff97a900c0227111c57f1f749e0e827c5->enter($__internal_4fabe8d37e7569d436bd140085b28c1ff97a900c0227111c57f1f749e0e827c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4fabe8d37e7569d436bd140085b28c1ff97a900c0227111c57f1f749e0e827c5->leave($__internal_4fabe8d37e7569d436bd140085b28c1ff97a900c0227111c57f1f749e0e827c5_prof);

    }

    // line 174
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_dea5e811535c1a2adffa94b2ac84b3b2cb6244b594bfdc32a132627f9f285f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea5e811535c1a2adffa94b2ac84b3b2cb6244b594bfdc32a132627f9f285f84->enter($__internal_dea5e811535c1a2adffa94b2ac84b3b2cb6244b594bfdc32a132627f9f285f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 175
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_dea5e811535c1a2adffa94b2ac84b3b2cb6244b594bfdc32a132627f9f285f84->leave($__internal_dea5e811535c1a2adffa94b2ac84b3b2cb6244b594bfdc32a132627f9f285f84_prof);

    }

    // line 178
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_f5ad5630cf1ac0b76ad84b771e06263d0683f336af3e0ecc42206cfa48b5ff4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ad5630cf1ac0b76ad84b771e06263d0683f336af3e0ecc42206cfa48b5ff4f->enter($__internal_f5ad5630cf1ac0b76ad84b771e06263d0683f336af3e0ecc42206cfa48b5ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f5ad5630cf1ac0b76ad84b771e06263d0683f336af3e0ecc42206cfa48b5ff4f->leave($__internal_f5ad5630cf1ac0b76ad84b771e06263d0683f336af3e0ecc42206cfa48b5ff4f_prof);

    }

    // line 183
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_2fd1bd237071299af3c3b997dfe035b68567f033f9ff1ee3a8eaa18360f65be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd1bd237071299af3c3b997dfe035b68567f033f9ff1ee3a8eaa18360f65be6->enter($__internal_2fd1bd237071299af3c3b997dfe035b68567f033f9ff1ee3a8eaa18360f65be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2fd1bd237071299af3c3b997dfe035b68567f033f9ff1ee3a8eaa18360f65be6->leave($__internal_2fd1bd237071299af3c3b997dfe035b68567f033f9ff1ee3a8eaa18360f65be6_prof);

    }

    // line 188
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fbf7f4217f6c70cc391c3c2bed66507b7cc5ac07bce4011c29ed635df2837a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf7f4217f6c70cc391c3c2bed66507b7cc5ac07bce4011c29ed635df2837a32->enter($__internal_fbf7f4217f6c70cc391c3c2bed66507b7cc5ac07bce4011c29ed635df2837a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_fbf7f4217f6c70cc391c3c2bed66507b7cc5ac07bce4011c29ed635df2837a32->leave($__internal_fbf7f4217f6c70cc391c3c2bed66507b7cc5ac07bce4011c29ed635df2837a32_prof);

    }

    // line 193
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_e7c9c1510fe2c03dcdca81ee04decb384a8afcdfd09021ec9cea1865f3d6f4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c9c1510fe2c03dcdca81ee04decb384a8afcdfd09021ec9cea1865f3d6f4f3->enter($__internal_e7c9c1510fe2c03dcdca81ee04decb384a8afcdfd09021ec9cea1865f3d6f4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e7c9c1510fe2c03dcdca81ee04decb384a8afcdfd09021ec9cea1865f3d6f4f3->leave($__internal_e7c9c1510fe2c03dcdca81ee04decb384a8afcdfd09021ec9cea1865f3d6f4f3_prof);

    }

    // line 198
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_ce15a44f8b5486d569d134cb9029293f3dc4bc84cee155b38311ae0504a3b56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce15a44f8b5486d569d134cb9029293f3dc4bc84cee155b38311ae0504a3b56f->enter($__internal_ce15a44f8b5486d569d134cb9029293f3dc4bc84cee155b38311ae0504a3b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ce15a44f8b5486d569d134cb9029293f3dc4bc84cee155b38311ae0504a3b56f->leave($__internal_ce15a44f8b5486d569d134cb9029293f3dc4bc84cee155b38311ae0504a3b56f_prof);

    }

    // line 203
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_b4a847d39a5928c05afe0e896a3d033613b7f4149bf258f382fe8ee677816deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a847d39a5928c05afe0e896a3d033613b7f4149bf258f382fe8ee677816deb->enter($__internal_b4a847d39a5928c05afe0e896a3d033613b7f4149bf258f382fe8ee677816deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b4a847d39a5928c05afe0e896a3d033613b7f4149bf258f382fe8ee677816deb->leave($__internal_b4a847d39a5928c05afe0e896a3d033613b7f4149bf258f382fe8ee677816deb_prof);

    }

    // line 208
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_dac6ca231847a73f7116d7770bef9be0e1982b3a57149569df6f831d8a24da14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac6ca231847a73f7116d7770bef9be0e1982b3a57149569df6f831d8a24da14->enter($__internal_dac6ca231847a73f7116d7770bef9be0e1982b3a57149569df6f831d8a24da14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 209
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 210
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 211
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 213
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 216
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 219
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_dac6ca231847a73f7116d7770bef9be0e1982b3a57149569df6f831d8a24da14->leave($__internal_dac6ca231847a73f7116d7770bef9be0e1982b3a57149569df6f831d8a24da14_prof);

    }

    // line 222
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_98144ef75b5a6636dc13589d8836e68371208c1c174bffb87024ff875344fb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98144ef75b5a6636dc13589d8836e68371208c1c174bffb87024ff875344fb85->enter($__internal_98144ef75b5a6636dc13589d8836e68371208c1c174bffb87024ff875344fb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 223
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 224
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_98144ef75b5a6636dc13589d8836e68371208c1c174bffb87024ff875344fb85->leave($__internal_98144ef75b5a6636dc13589d8836e68371208c1c174bffb87024ff875344fb85_prof);

    }

    // line 227
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_92fe69ad974e24f2461e16251104287a8a327a8d4409bd1e395973cc08fdd45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fe69ad974e24f2461e16251104287a8a327a8d4409bd1e395973cc08fdd45d->enter($__internal_92fe69ad974e24f2461e16251104287a8a327a8d4409bd1e395973cc08fdd45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 228
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 229
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_92fe69ad974e24f2461e16251104287a8a327a8d4409bd1e395973cc08fdd45d->leave($__internal_92fe69ad974e24f2461e16251104287a8a327a8d4409bd1e395973cc08fdd45d_prof);

    }

    // line 234
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_80f31de1b9319bf675ca4b2730ad013f0f9c062e6cd8398705885021ab7061bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f31de1b9319bf675ca4b2730ad013f0f9c062e6cd8398705885021ab7061bc->enter($__internal_80f31de1b9319bf675ca4b2730ad013f0f9c062e6cd8398705885021ab7061bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 235
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 236
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 237
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 239
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 240
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 242
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 243
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 244
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 245
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 246
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 249
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 252
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "
      ";
            // line 253
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 254
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 255
                echo "        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           title=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 258
            echo "
      ";
            // line 259
            if ($this->getAttribute(($context["label_attr"] ?? null), "popover", array(), "array", true, true)) {
                // line 260
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover_placement", array(), "array")) : ("top"));
                // line 261
                echo "        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           data-content=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover", array(), "array"), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 264
            echo "    </label>";
        }
        
        $__internal_80f31de1b9319bf675ca4b2730ad013f0f9c062e6cd8398705885021ab7061bc->leave($__internal_80f31de1b9319bf675ca4b2730ad013f0f9c062e6cd8398705885021ab7061bc_prof);

    }

    // line 269
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_2f1e2be3be2c53e9e14718ff1311a62cbe55d98653160cf532ea3288ab1051d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1e2be3be2c53e9e14718ff1311a62cbe55d98653160cf532ea3288ab1051d2->enter($__internal_2f1e2be3be2c53e9e14718ff1311a62cbe55d98653160cf532ea3288ab1051d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_2f1e2be3be2c53e9e14718ff1311a62cbe55d98653160cf532ea3288ab1051d2->leave($__internal_2f1e2be3be2c53e9e14718ff1311a62cbe55d98653160cf532ea3288ab1051d2_prof);

    }

    // line 273
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_23633d20bb13ac9d53547ed1fecb7763c731e354075b57b348ca98b6d4172de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23633d20bb13ac9d53547ed1fecb7763c731e354075b57b348ca98b6d4172de5->enter($__internal_23633d20bb13ac9d53547ed1fecb7763c731e354075b57b348ca98b6d4172de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 278
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_23633d20bb13ac9d53547ed1fecb7763c731e354075b57b348ca98b6d4172de5->leave($__internal_23633d20bb13ac9d53547ed1fecb7763c731e354075b57b348ca98b6d4172de5_prof);

    }

    // line 281
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aa9a73737d0ca14dd8b070e1316c9e3f07b79ebc17cc2a9cf3d0faa8f9d1b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a73737d0ca14dd8b070e1316c9e3f07b79ebc17cc2a9cf3d0faa8f9d1b9b0->enter($__internal_aa9a73737d0ca14dd8b070e1316c9e3f07b79ebc17cc2a9cf3d0faa8f9d1b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 282
        echo "<div>";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 286
        echo "</div>";
        
        $__internal_aa9a73737d0ca14dd8b070e1316c9e3f07b79ebc17cc2a9cf3d0faa8f9d1b9b0->leave($__internal_aa9a73737d0ca14dd8b070e1316c9e3f07b79ebc17cc2a9cf3d0faa8f9d1b9b0_prof);

    }

    // line 289
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3d591b5d380e3880ae71d25e71a62e7abcef898da8be50f32087fc5e6038c54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d591b5d380e3880ae71d25e71a62e7abcef898da8be50f32087fc5e6038c54e->enter($__internal_3d591b5d380e3880ae71d25e71a62e7abcef898da8be50f32087fc5e6038c54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 290
        echo "<div>";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 292
        echo "</div>";
        
        $__internal_3d591b5d380e3880ae71d25e71a62e7abcef898da8be50f32087fc5e6038c54e->leave($__internal_3d591b5d380e3880ae71d25e71a62e7abcef898da8be50f32087fc5e6038c54e_prof);

    }

    // line 295
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_dc8444c2bcfdac979aca9ee1b0d465766620cac1475fe31c656a458977371360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8444c2bcfdac979aca9ee1b0d465766620cac1475fe31c656a458977371360->enter($__internal_dc8444c2bcfdac979aca9ee1b0d465766620cac1475fe31c656a458977371360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_dc8444c2bcfdac979aca9ee1b0d465766620cac1475fe31c656a458977371360->leave($__internal_dc8444c2bcfdac979aca9ee1b0d465766620cac1475fe31c656a458977371360_prof);

    }

    // line 301
    public function block_form($context, array $blocks = array())
    {
        $__internal_63e841ca5e2484cece44ad8c0aa9410b3078e8612bd49cec24e7455c78c743ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e841ca5e2484cece44ad8c0aa9410b3078e8612bd49cec24e7455c78c743ca->enter($__internal_63e841ca5e2484cece44ad8c0aa9410b3078e8612bd49cec24e7455c78c743ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 302
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 304
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_63e841ca5e2484cece44ad8c0aa9410b3078e8612bd49cec24e7455c78c743ca->leave($__internal_63e841ca5e2484cece44ad8c0aa9410b3078e8612bd49cec24e7455c78c743ca_prof);

    }

    // line 307
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_584b052765d3577d2e1c859321e4058119a086ff56f9ff16e1c3f9afc80ef054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584b052765d3577d2e1c859321e4058119a086ff56f9ff16e1c3f9afc80ef054->enter($__internal_584b052765d3577d2e1c859321e4058119a086ff56f9ff16e1c3f9afc80ef054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 308
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 309
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 310
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 312
            $context["form_method"] = "POST";
        }
        // line 314
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 315
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 316
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 317
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_584b052765d3577d2e1c859321e4058119a086ff56f9ff16e1c3f9afc80ef054->leave($__internal_584b052765d3577d2e1c859321e4058119a086ff56f9ff16e1c3f9afc80ef054_prof);

    }

    // line 321
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_4f99a9784625c40a1dc9e32f78ed639023f636e9fd7cf39466e1935e81d7a9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f99a9784625c40a1dc9e32f78ed639023f636e9fd7cf39466e1935e81d7a9d6->enter($__internal_4f99a9784625c40a1dc9e32f78ed639023f636e9fd7cf39466e1935e81d7a9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 322
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 323
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 325
        echo "</form>";
        
        $__internal_4f99a9784625c40a1dc9e32f78ed639023f636e9fd7cf39466e1935e81d7a9d6->leave($__internal_4f99a9784625c40a1dc9e32f78ed639023f636e9fd7cf39466e1935e81d7a9d6_prof);

    }

    // line 328
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_926a9019775548318db8aa9d7e16a1a5e4fd771e337b9037fcd04463b72b2fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926a9019775548318db8aa9d7e16a1a5e4fd771e337b9037fcd04463b72b2fd1->enter($__internal_926a9019775548318db8aa9d7e16a1a5e4fd771e337b9037fcd04463b72b2fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 329
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_926a9019775548318db8aa9d7e16a1a5e4fd771e337b9037fcd04463b72b2fd1->leave($__internal_926a9019775548318db8aa9d7e16a1a5e4fd771e337b9037fcd04463b72b2fd1_prof);

    }

    // line 332
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_02423ec105b549ab2df052709cb1a2347db6302f59782e353c907572c6ab2160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02423ec105b549ab2df052709cb1a2347db6302f59782e353c907572c6ab2160->enter($__internal_02423ec105b549ab2df052709cb1a2347db6302f59782e353c907572c6ab2160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 333
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 334
            echo "<ul>";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 336
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "</ul>";
        }
        
        $__internal_02423ec105b549ab2df052709cb1a2347db6302f59782e353c907572c6ab2160->leave($__internal_02423ec105b549ab2df052709cb1a2347db6302f59782e353c907572c6ab2160_prof);

    }

    // line 342
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_88b53c4697e8562c02bd7c02e53c8fa96b6180391b3a9e2b80da0cdbba460acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b53c4697e8562c02bd7c02e53c8fa96b6180391b3a9e2b80da0cdbba460acb->enter($__internal_88b53c4697e8562c02bd7c02e53c8fa96b6180391b3a9e2b80da0cdbba460acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 344
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 345
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_88b53c4697e8562c02bd7c02e53c8fa96b6180391b3a9e2b80da0cdbba460acb->leave($__internal_88b53c4697e8562c02bd7c02e53c8fa96b6180391b3a9e2b80da0cdbba460acb_prof);

    }

    // line 352
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_0878911468622f8c7b5c17de11d32e7b2d0baa3bd261ed822d3ad326f6181867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0878911468622f8c7b5c17de11d32e7b2d0baa3bd261ed822d3ad326f6181867->enter($__internal_0878911468622f8c7b5c17de11d32e7b2d0baa3bd261ed822d3ad326f6181867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 354
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0878911468622f8c7b5c17de11d32e7b2d0baa3bd261ed822d3ad326f6181867->leave($__internal_0878911468622f8c7b5c17de11d32e7b2d0baa3bd261ed822d3ad326f6181867_prof);

    }

    // line 358
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_33f22d0fdd4044ad08e5dc418ea5b7ad25d3b85b4fe4e8acca09939c339b9203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f22d0fdd4044ad08e5dc418ea5b7ad25d3b85b4fe4e8acca09939c339b9203->enter($__internal_33f22d0fdd4044ad08e5dc418ea5b7ad25d3b85b4fe4e8acca09939c339b9203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 359
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 360
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 361
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 362
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 364
            echo " ";
            // line 365
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 367
$context["attrvalue"] === true)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 369
$context["attrvalue"] === false)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_33f22d0fdd4044ad08e5dc418ea5b7ad25d3b85b4fe4e8acca09939c339b9203->leave($__internal_33f22d0fdd4044ad08e5dc418ea5b7ad25d3b85b4fe4e8acca09939c339b9203_prof);

    }

    // line 375
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_59a03f22007bd92d22460884791fb8c8b430498dc1aa56bde905a62194d86448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a03f22007bd92d22460884791fb8c8b430498dc1aa56bde905a62194d86448->enter($__internal_59a03f22007bd92d22460884791fb8c8b430498dc1aa56bde905a62194d86448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 376
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 378
            echo " ";
            // line 379
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 380
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 381
$context["attrvalue"] === true)) {
                // line 382
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 383
$context["attrvalue"] === false)) {
                // line 384
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_59a03f22007bd92d22460884791fb8c8b430498dc1aa56bde905a62194d86448->leave($__internal_59a03f22007bd92d22460884791fb8c8b430498dc1aa56bde905a62194d86448_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_25e61a7c724c6d95bd080825a3a8516d6b3a69ed7b6765048377ca6e29255b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e61a7c724c6d95bd080825a3a8516d6b3a69ed7b6765048377ca6e29255b9c->enter($__internal_25e61a7c724c6d95bd080825a3a8516d6b3a69ed7b6765048377ca6e29255b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 392
            echo " ";
            // line 393
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 394
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 395
$context["attrvalue"] === true)) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 397
$context["attrvalue"] === false)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_25e61a7c724c6d95bd080825a3a8516d6b3a69ed7b6765048377ca6e29255b9c->leave($__internal_25e61a7c724c6d95bd080825a3a8516d6b3a69ed7b6765048377ca6e29255b9c_prof);

    }

    // line 403
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_68b3490ffe325b258fb7f3940f69d67490eed3172d4429b8da5a54c8bdabcb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b3490ffe325b258fb7f3940f69d67490eed3172d4429b8da5a54c8bdabcb89->enter($__internal_68b3490ffe325b258fb7f3940f69d67490eed3172d4429b8da5a54c8bdabcb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 405
            echo " ";
            // line 406
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 407
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 408
$context["attrvalue"] === true)) {
                // line 409
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 410
$context["attrvalue"] === false)) {
                // line 411
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_68b3490ffe325b258fb7f3940f69d67490eed3172d4429b8da5a54c8bdabcb89->leave($__internal_68b3490ffe325b258fb7f3940f69d67490eed3172d4429b8da5a54c8bdabcb89_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1335 => 411,  1333 => 410,  1328 => 409,  1326 => 408,  1321 => 407,  1319 => 406,  1317 => 405,  1313 => 404,  1307 => 403,  1292 => 398,  1290 => 397,  1285 => 396,  1283 => 395,  1278 => 394,  1276 => 393,  1274 => 392,  1270 => 391,  1261 => 390,  1255 => 389,  1240 => 384,  1238 => 383,  1233 => 382,  1231 => 381,  1226 => 380,  1224 => 379,  1222 => 378,  1218 => 377,  1212 => 376,  1206 => 375,  1191 => 370,  1189 => 369,  1184 => 368,  1182 => 367,  1177 => 366,  1175 => 365,  1173 => 364,  1169 => 363,  1165 => 362,  1161 => 361,  1157 => 360,  1151 => 359,  1145 => 358,  1134 => 354,  1130 => 353,  1124 => 352,  1112 => 345,  1110 => 344,  1106 => 343,  1100 => 342,  1092 => 338,  1084 => 336,  1080 => 335,  1078 => 334,  1076 => 333,  1070 => 332,  1061 => 329,  1055 => 328,  1048 => 325,  1045 => 323,  1043 => 322,  1037 => 321,  1027 => 317,  1025 => 316,  1004 => 315,  999 => 314,  996 => 312,  993 => 310,  991 => 309,  989 => 308,  983 => 307,  976 => 304,  974 => 303,  972 => 302,  966 => 301,  959 => 296,  953 => 295,  946 => 292,  944 => 291,  942 => 290,  936 => 289,  929 => 286,  927 => 285,  925 => 284,  923 => 283,  921 => 282,  915 => 281,  908 => 278,  902 => 273,  891 => 269,  883 => 264,  878 => 262,  873 => 261,  870 => 260,  868 => 259,  865 => 258,  860 => 256,  855 => 255,  852 => 254,  850 => 253,  832 => 252,  828 => 249,  825 => 246,  824 => 245,  823 => 244,  821 => 243,  818 => 242,  815 => 240,  812 => 239,  809 => 237,  807 => 236,  805 => 235,  799 => 234,  792 => 229,  790 => 228,  784 => 227,  777 => 224,  775 => 223,  769 => 222,  756 => 219,  752 => 216,  749 => 213,  748 => 212,  747 => 211,  745 => 210,  743 => 209,  737 => 208,  730 => 205,  728 => 204,  722 => 203,  715 => 200,  713 => 199,  707 => 198,  700 => 195,  698 => 194,  692 => 193,  684 => 190,  682 => 189,  676 => 188,  669 => 185,  667 => 184,  661 => 183,  654 => 180,  652 => 179,  646 => 178,  639 => 175,  633 => 174,  626 => 171,  624 => 170,  618 => 169,  611 => 166,  609 => 165,  603 => 163,  595 => 159,  585 => 158,  580 => 157,  578 => 156,  575 => 154,  573 => 153,  567 => 152,  559 => 148,  557 => 146,  556 => 145,  555 => 144,  554 => 143,  550 => 142,  547 => 140,  545 => 139,  539 => 138,  531 => 134,  529 => 133,  527 => 132,  525 => 131,  523 => 130,  519 => 129,  516 => 127,  514 => 126,  508 => 125,  491 => 122,  488 => 121,  482 => 120,  455 => 117,  452 => 116,  450 => 115,  444 => 114,  411 => 109,  408 => 107,  406 => 106,  404 => 105,  399 => 104,  397 => 103,  380 => 102,  374 => 101,  367 => 98,  365 => 97,  363 => 96,  357 => 93,  355 => 92,  353 => 91,  351 => 90,  349 => 89,  341 => 87,  338 => 86,  336 => 85,  329 => 84,  326 => 82,  324 => 81,  318 => 80,  311 => 77,  305 => 75,  303 => 74,  299 => 73,  295 => 72,  289 => 71,  281 => 67,  278 => 65,  276 => 64,  270 => 63,  263 => 60,  256 => 59,  250 => 58,  243 => 55,  240 => 53,  238 => 52,  232 => 51,  225 => 48,  223 => 47,  221 => 46,  218 => 44,  216 => 43,  212 => 42,  206 => 41,  199 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 403,  150 => 389,  148 => 375,  146 => 358,  144 => 352,  141 => 349,  139 => 342,  137 => 332,  135 => 328,  133 => 321,  131 => 307,  129 => 301,  127 => 295,  125 => 289,  123 => 281,  121 => 273,  119 => 269,  117 => 234,  115 => 227,  113 => 222,  111 => 208,  109 => 203,  107 => 198,  105 => 193,  103 => 188,  101 => 183,  99 => 178,  97 => 174,  95 => 169,  93 => 163,  91 => 152,  89 => 138,  87 => 125,  85 => 120,  83 => 114,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{# Widgets #}

{%- block form_widget -%}
  {% if compound %}
    {{- block('form_widget_compound') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {%- set type = type|default('text') -%}
  <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
  {% include \"PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
      {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
  </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
  {% if prototype is defined %}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
  {% endif %}
  {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
  <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
  {% if expanded %}
    {{- block('choice_widget_expanded') -}}
  {% else %}
    {{- block('choice_widget_collapsed') -}}
  {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      {{- form_widget(child) -}}
      {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
  </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
    {%- endif -%}
    {%- if preferred_choices|length > 0 -%}
      {% set options = preferred_choices %}
      {{- block('choice_widget_options') -}}
      {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">{{ separator }}</option>
      {%- endif -%}
    {%- endif -%}
    {%- set options = choices -%}
    {{- block('choice_widget_options') -}}
  </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date) -}}
      {{- form_widget(form.time) -}}
    </div>
  {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw -}}
    </div>
  {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
    <div {{ block('widget_container_attributes') }}>
      {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
    </div>
  {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
  {# type=\"number\" doesn't work with floats #}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
  {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
  {%- set type = type|default('search') -%}
  {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
  {%- set type = type|default('hidden') -%}
  {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
        '%name%': name,
        '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}
      {% if label_attr['tooltip'] is defined %}
        {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
           title=\"{{ label_attr['tooltip'] }}\"></i>
      {% endif %}

      {% if label_attr['popover'] is defined %}
        {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"{{ placement }}\"
           data-content=\"{{ label_attr['popover'] }}\"></span>
      {% endif %}
    </label>

  {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
  <div>
    {{- form_label(form) -}}
    {{- form_errors(form) -}}
    {{- form_widget(form) -}}
  </div>
{%- endblock form_row -%}

{%- block button_row -%}
  <div>
    {{- form_widget(form) -}}
  </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
  {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
  {{ form_start(form) }}
  {{- form_widget(form) -}}
  {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
  {%- if errors|length > 0 -%}
    <ul>
      {%- for error in errors -%}
        <li>{{ error.message }}</li>
      {%- endfor -%}
    </ul>
  {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
  {% for child in form -%}
    {% if not child.rendered %}
      {{- form_row(child) -}}
    {% endif %}
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
