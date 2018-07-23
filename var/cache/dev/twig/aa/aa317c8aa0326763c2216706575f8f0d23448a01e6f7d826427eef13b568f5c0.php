<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b47749b29235a7dc368529a1535a0b543487b5eaff85a67af30716e43a2700ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47749b29235a7dc368529a1535a0b543487b5eaff85a67af30716e43a2700ae->enter($__internal_b47749b29235a7dc368529a1535a0b543487b5eaff85a67af30716e43a2700ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5ffa9f4c85a28867bdf2fcb6a86fc5c02d8f910571723dae13440136a5a13ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffa9f4c85a28867bdf2fcb6a86fc5c02d8f910571723dae13440136a5a13ff7->enter($__internal_5ffa9f4c85a28867bdf2fcb6a86fc5c02d8f910571723dae13440136a5a13ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47749b29235a7dc368529a1535a0b543487b5eaff85a67af30716e43a2700ae->leave($__internal_b47749b29235a7dc368529a1535a0b543487b5eaff85a67af30716e43a2700ae_prof);

        
        $__internal_5ffa9f4c85a28867bdf2fcb6a86fc5c02d8f910571723dae13440136a5a13ff7->leave($__internal_5ffa9f4c85a28867bdf2fcb6a86fc5c02d8f910571723dae13440136a5a13ff7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_506d9e244be3e4783f982111d86fb88f01647f9acef5dafb8636b8204e687695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506d9e244be3e4783f982111d86fb88f01647f9acef5dafb8636b8204e687695->enter($__internal_506d9e244be3e4783f982111d86fb88f01647f9acef5dafb8636b8204e687695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f6a97abc898c98c603744a6c1bc76aa1325638c5a7375e4d3e442aa85a6355c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6a97abc898c98c603744a6c1bc76aa1325638c5a7375e4d3e442aa85a6355c->enter($__internal_1f6a97abc898c98c603744a6c1bc76aa1325638c5a7375e4d3e442aa85a6355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1f6a97abc898c98c603744a6c1bc76aa1325638c5a7375e4d3e442aa85a6355c->leave($__internal_1f6a97abc898c98c603744a6c1bc76aa1325638c5a7375e4d3e442aa85a6355c_prof);

        
        $__internal_506d9e244be3e4783f982111d86fb88f01647f9acef5dafb8636b8204e687695->leave($__internal_506d9e244be3e4783f982111d86fb88f01647f9acef5dafb8636b8204e687695_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61899953b865957d98e4fe4ebf054dbf3d951a456ab9514b05762890cd6bd6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61899953b865957d98e4fe4ebf054dbf3d951a456ab9514b05762890cd6bd6dc->enter($__internal_61899953b865957d98e4fe4ebf054dbf3d951a456ab9514b05762890cd6bd6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_99c902656c8f01f783a5cf5950215d6d47ea99b3139b058e7f4c700dc62b0767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c902656c8f01f783a5cf5950215d6d47ea99b3139b058e7f4c700dc62b0767->enter($__internal_99c902656c8f01f783a5cf5950215d6d47ea99b3139b058e7f4c700dc62b0767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_99c902656c8f01f783a5cf5950215d6d47ea99b3139b058e7f4c700dc62b0767->leave($__internal_99c902656c8f01f783a5cf5950215d6d47ea99b3139b058e7f4c700dc62b0767_prof);

        
        $__internal_61899953b865957d98e4fe4ebf054dbf3d951a456ab9514b05762890cd6bd6dc->leave($__internal_61899953b865957d98e4fe4ebf054dbf3d951a456ab9514b05762890cd6bd6dc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_deaba3142b880f65019d0c322ca07f092b4b9bf7f501c0304b4c4668388b65ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deaba3142b880f65019d0c322ca07f092b4b9bf7f501c0304b4c4668388b65ae->enter($__internal_deaba3142b880f65019d0c322ca07f092b4b9bf7f501c0304b4c4668388b65ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a421a593fa02de2ac2aa51372330507f7f26562c73c9923878674e1adacb5a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a421a593fa02de2ac2aa51372330507f7f26562c73c9923878674e1adacb5a18->enter($__internal_a421a593fa02de2ac2aa51372330507f7f26562c73c9923878674e1adacb5a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a421a593fa02de2ac2aa51372330507f7f26562c73c9923878674e1adacb5a18->leave($__internal_a421a593fa02de2ac2aa51372330507f7f26562c73c9923878674e1adacb5a18_prof);

        
        $__internal_deaba3142b880f65019d0c322ca07f092b4b9bf7f501c0304b4c4668388b65ae->leave($__internal_deaba3142b880f65019d0c322ca07f092b4b9bf7f501c0304b4c4668388b65ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/projetCV/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
