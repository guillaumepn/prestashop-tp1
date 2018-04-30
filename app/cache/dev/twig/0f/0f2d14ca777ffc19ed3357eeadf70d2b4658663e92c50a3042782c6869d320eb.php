<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2761fad7fabaa6fe85493074df7ca9819ff7de3306c59a016d0cc1e6988f942 extends Twig_Template
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
        $__internal_ffd7dcad47acca049289dca63e1bb2dddd33aeb76d1c19ba9198c75bf187449a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd7dcad47acca049289dca63e1bb2dddd33aeb76d1c19ba9198c75bf187449a->enter($__internal_ffd7dcad47acca049289dca63e1bb2dddd33aeb76d1c19ba9198c75bf187449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd7dcad47acca049289dca63e1bb2dddd33aeb76d1c19ba9198c75bf187449a->leave($__internal_ffd7dcad47acca049289dca63e1bb2dddd33aeb76d1c19ba9198c75bf187449a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12a90102b1a7bb60ba039c3399fbdc697f315a65407387da4c7ddcac4b285a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a90102b1a7bb60ba039c3399fbdc697f315a65407387da4c7ddcac4b285a84->enter($__internal_12a90102b1a7bb60ba039c3399fbdc697f315a65407387da4c7ddcac4b285a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12a90102b1a7bb60ba039c3399fbdc697f315a65407387da4c7ddcac4b285a84->leave($__internal_12a90102b1a7bb60ba039c3399fbdc697f315a65407387da4c7ddcac4b285a84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e260dd785711573b231bd9c9aaf07bfbfb6e8ae546f34e1597778cbad6147fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e260dd785711573b231bd9c9aaf07bfbfb6e8ae546f34e1597778cbad6147fb9->enter($__internal_e260dd785711573b231bd9c9aaf07bfbfb6e8ae546f34e1597778cbad6147fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e260dd785711573b231bd9c9aaf07bfbfb6e8ae546f34e1597778cbad6147fb9->leave($__internal_e260dd785711573b231bd9c9aaf07bfbfb6e8ae546f34e1597778cbad6147fb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d24c6491588af0b307789a185db6a7db6dbc9d2fba0e1e31ac8524a21d0b84a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24c6491588af0b307789a185db6a7db6dbc9d2fba0e1e31ac8524a21d0b84a7->enter($__internal_d24c6491588af0b307789a185db6a7db6dbc9d2fba0e1e31ac8524a21d0b84a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d24c6491588af0b307789a185db6a7db6dbc9d2fba0e1e31ac8524a21d0b84a7->leave($__internal_d24c6491588af0b307789a185db6a7db6dbc9d2fba0e1e31ac8524a21d0b84a7_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
