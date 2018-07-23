<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
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
        $__internal_38d86dab710351baec4809478bb70e17bfc895978d3ed8eb83c68be70a2635e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d86dab710351baec4809478bb70e17bfc895978d3ed8eb83c68be70a2635e5->enter($__internal_38d86dab710351baec4809478bb70e17bfc895978d3ed8eb83c68be70a2635e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8104401ef57ba1af7eed2d00a2a24f9b6e2b51bd82df7b916e0c49cd0f47153e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8104401ef57ba1af7eed2d00a2a24f9b6e2b51bd82df7b916e0c49cd0f47153e->enter($__internal_8104401ef57ba1af7eed2d00a2a24f9b6e2b51bd82df7b916e0c49cd0f47153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d86dab710351baec4809478bb70e17bfc895978d3ed8eb83c68be70a2635e5->leave($__internal_38d86dab710351baec4809478bb70e17bfc895978d3ed8eb83c68be70a2635e5_prof);

        
        $__internal_8104401ef57ba1af7eed2d00a2a24f9b6e2b51bd82df7b916e0c49cd0f47153e->leave($__internal_8104401ef57ba1af7eed2d00a2a24f9b6e2b51bd82df7b916e0c49cd0f47153e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6aea4600952c02df535583761bd299e395854e6b9ef6d7d6e4713adca085795b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aea4600952c02df535583761bd299e395854e6b9ef6d7d6e4713adca085795b->enter($__internal_6aea4600952c02df535583761bd299e395854e6b9ef6d7d6e4713adca085795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17c3aca7cf103e9bae7cc530ab34787a027ad40b1175c41920fbdb17ad60c6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c3aca7cf103e9bae7cc530ab34787a027ad40b1175c41920fbdb17ad60c6fc->enter($__internal_17c3aca7cf103e9bae7cc530ab34787a027ad40b1175c41920fbdb17ad60c6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17c3aca7cf103e9bae7cc530ab34787a027ad40b1175c41920fbdb17ad60c6fc->leave($__internal_17c3aca7cf103e9bae7cc530ab34787a027ad40b1175c41920fbdb17ad60c6fc_prof);

        
        $__internal_6aea4600952c02df535583761bd299e395854e6b9ef6d7d6e4713adca085795b->leave($__internal_6aea4600952c02df535583761bd299e395854e6b9ef6d7d6e4713adca085795b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_006b02e6425615021260ece75eded025ab840882079860fb7c0bae120d2d1ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006b02e6425615021260ece75eded025ab840882079860fb7c0bae120d2d1ccf->enter($__internal_006b02e6425615021260ece75eded025ab840882079860fb7c0bae120d2d1ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ba47ad63400fd86d3a76b70cdba1a3af27adfa83c9c5029f87aed82e6531273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba47ad63400fd86d3a76b70cdba1a3af27adfa83c9c5029f87aed82e6531273->enter($__internal_0ba47ad63400fd86d3a76b70cdba1a3af27adfa83c9c5029f87aed82e6531273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ba47ad63400fd86d3a76b70cdba1a3af27adfa83c9c5029f87aed82e6531273->leave($__internal_0ba47ad63400fd86d3a76b70cdba1a3af27adfa83c9c5029f87aed82e6531273_prof);

        
        $__internal_006b02e6425615021260ece75eded025ab840882079860fb7c0bae120d2d1ccf->leave($__internal_006b02e6425615021260ece75eded025ab840882079860fb7c0bae120d2d1ccf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a8bc1f3544727b27cdc7f2b1bbe748c70d15cf936559a4f9d2b0cc73a59d28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8bc1f3544727b27cdc7f2b1bbe748c70d15cf936559a4f9d2b0cc73a59d28c->enter($__internal_2a8bc1f3544727b27cdc7f2b1bbe748c70d15cf936559a4f9d2b0cc73a59d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc4e22e125dd5f64304a2cf5e68da2d5e12c1b82b5c4e299cf9d8e020e8e68bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4e22e125dd5f64304a2cf5e68da2d5e12c1b82b5c4e299cf9d8e020e8e68bd->enter($__internal_cc4e22e125dd5f64304a2cf5e68da2d5e12c1b82b5c4e299cf9d8e020e8e68bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cc4e22e125dd5f64304a2cf5e68da2d5e12c1b82b5c4e299cf9d8e020e8e68bd->leave($__internal_cc4e22e125dd5f64304a2cf5e68da2d5e12c1b82b5c4e299cf9d8e020e8e68bd_prof);

        
        $__internal_2a8bc1f3544727b27cdc7f2b1bbe748c70d15cf936559a4f9d2b0cc73a59d28c->leave($__internal_2a8bc1f3544727b27cdc7f2b1bbe748c70d15cf936559a4f9d2b0cc73a59d28c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/projetCV/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
