<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ffa48960d0c3c240c5eb5b02d9ab9834699b5147f9b9545452613f19f0c1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ffa48960d0c3c240c5eb5b02d9ab9834699b5147f9b9545452613f19f0c1b4->enter($__internal_a4ffa48960d0c3c240c5eb5b02d9ab9834699b5147f9b9545452613f19f0c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2ef47358a618cc19b2e691dfa5fb11559477461d56b6fef92f2cac47671b8954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef47358a618cc19b2e691dfa5fb11559477461d56b6fef92f2cac47671b8954->enter($__internal_2ef47358a618cc19b2e691dfa5fb11559477461d56b6fef92f2cac47671b8954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ffa48960d0c3c240c5eb5b02d9ab9834699b5147f9b9545452613f19f0c1b4->leave($__internal_a4ffa48960d0c3c240c5eb5b02d9ab9834699b5147f9b9545452613f19f0c1b4_prof);

        
        $__internal_2ef47358a618cc19b2e691dfa5fb11559477461d56b6fef92f2cac47671b8954->leave($__internal_2ef47358a618cc19b2e691dfa5fb11559477461d56b6fef92f2cac47671b8954_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dffd44edb5c915f0171a6b399fbff0feca0f5bf4e3a20e7505ef6ce967af4ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffd44edb5c915f0171a6b399fbff0feca0f5bf4e3a20e7505ef6ce967af4ddf->enter($__internal_dffd44edb5c915f0171a6b399fbff0feca0f5bf4e3a20e7505ef6ce967af4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ba5e18fcd4ce3e79a4b28906344f8685a4508b27bea32c5b8500fb071e02ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba5e18fcd4ce3e79a4b28906344f8685a4508b27bea32c5b8500fb071e02ee2->enter($__internal_7ba5e18fcd4ce3e79a4b28906344f8685a4508b27bea32c5b8500fb071e02ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7ba5e18fcd4ce3e79a4b28906344f8685a4508b27bea32c5b8500fb071e02ee2->leave($__internal_7ba5e18fcd4ce3e79a4b28906344f8685a4508b27bea32c5b8500fb071e02ee2_prof);

        
        $__internal_dffd44edb5c915f0171a6b399fbff0feca0f5bf4e3a20e7505ef6ce967af4ddf->leave($__internal_dffd44edb5c915f0171a6b399fbff0feca0f5bf4e3a20e7505ef6ce967af4ddf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/projetCV/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
