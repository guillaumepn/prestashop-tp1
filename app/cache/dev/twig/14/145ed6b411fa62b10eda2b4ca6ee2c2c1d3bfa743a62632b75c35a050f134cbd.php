<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_c1033f64ea2086925f72665ac3a5c99a5e9db8ec8f3d40e1ae06f85874374035 extends Twig_Template
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
        $__internal_3aabd8440f16fcdce4cfeafca5f34e3068fdb5cb963f818ff39c72d96494580c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aabd8440f16fcdce4cfeafca5f34e3068fdb5cb963f818ff39c72d96494580c->enter($__internal_3aabd8440f16fcdce4cfeafca5f34e3068fdb5cb963f818ff39c72d96494580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        
        $__internal_3aabd8440f16fcdce4cfeafca5f34e3068fdb5cb963f818ff39c72d96494580c->leave($__internal_3aabd8440f16fcdce4cfeafca5f34e3068fdb5cb963f818ff39c72d96494580c_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2bdfc344893bdfcbc3c079455eb00714273ff5d79887d73a0ed053f1dca25e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2bdfc344893bdfcbc3c079455eb00714273ff5d79887d73a0ed053f1dca25e11->enter($__internal_2bdfc344893bdfcbc3c079455eb00714273ff5d79887d73a0ed053f1dca25e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_2bdfc344893bdfcbc3c079455eb00714273ff5d79887d73a0ed053f1dca25e11->leave($__internal_2bdfc344893bdfcbc3c079455eb00714273ff5d79887d73a0ed053f1dca25e11_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b423962b88d9d916c201ed97db8d4e24e9ae91a21f357426d4d9ae04ff5716d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b423962b88d9d916c201ed97db8d4e24e9ae91a21f357426d4d9ae04ff5716d0->enter($__internal_b423962b88d9d916c201ed97db8d4e24e9ae91a21f357426d4d9ae04ff5716d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_b423962b88d9d916c201ed97db8d4e24e9ae91a21f357426d4d9ae04ff5716d0->leave($__internal_b423962b88d9d916c201ed97db8d4e24e9ae91a21f357426d4d9ae04ff5716d0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_95bdad633f6674b34c7161b27fd457be9c0e8caa11d78082b2b438dc9a0f357f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_95bdad633f6674b34c7161b27fd457be9c0e8caa11d78082b2b438dc9a0f357f->enter($__internal_95bdad633f6674b34c7161b27fd457be9c0e8caa11d78082b2b438dc9a0f357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_95bdad633f6674b34c7161b27fd457be9c0e8caa11d78082b2b438dc9a0f357f->leave($__internal_95bdad633f6674b34c7161b27fd457be9c0e8caa11d78082b2b438dc9a0f357f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4fbb588dca587adc3092754908eea04df64aad0d3d86066b139aa4f5fbf8654d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4fbb588dca587adc3092754908eea04df64aad0d3d86066b139aa4f5fbf8654d->enter($__internal_4fbb588dca587adc3092754908eea04df64aad0d3d86066b139aa4f5fbf8654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_4fbb588dca587adc3092754908eea04df64aad0d3d86066b139aa4f5fbf8654d->leave($__internal_4fbb588dca587adc3092754908eea04df64aad0d3d86066b139aa4f5fbf8654d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53e337d1c460539a9d8a2c5a8aac29c2e9f851fc5b6d01a832715e0e3a450c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_53e337d1c460539a9d8a2c5a8aac29c2e9f851fc5b6d01a832715e0e3a450c51->enter($__internal_53e337d1c460539a9d8a2c5a8aac29c2e9f851fc5b6d01a832715e0e3a450c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_53e337d1c460539a9d8a2c5a8aac29c2e9f851fc5b6d01a832715e0e3a450c51->leave($__internal_53e337d1c460539a9d8a2c5a8aac29c2e9f851fc5b6d01a832715e0e3a450c51_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_849d760c83bef0be9b05121cb35e776b2bf74d1ff89a1ae610c439aa1a0f5514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_849d760c83bef0be9b05121cb35e776b2bf74d1ff89a1ae610c439aa1a0f5514->enter($__internal_849d760c83bef0be9b05121cb35e776b2bf74d1ff89a1ae610c439aa1a0f5514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "\"
    data-content=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
";
            
            $__internal_849d760c83bef0be9b05121cb35e776b2bf74d1ff89a1ae610c439aa1a0f5514->leave($__internal_849d760c83bef0be9b05121cb35e776b2bf74d1ff89a1ae610c439aa1a0f5514_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 60,  267 => 59,  262 => 57,  259 => 56,  243 => 55,  221 => 50,  217 => 48,  202 => 47,  180 => 42,  176 => 40,  161 => 39,  140 => 35,  133 => 34,  116 => 33,  95 => 30,  80 => 29,  59 => 26,  42 => 25,  34 => 54,  31 => 46,  28 => 38,  25 => 32,  22 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help) %}
<label class=\"form-control-label\">
  {{ label }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"{{ label }}\"
    data-content=\"{{ help }}\">
  </span>
</label>
{% endmacro %}
", "PrestaShopBundle:Admin:macros.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
