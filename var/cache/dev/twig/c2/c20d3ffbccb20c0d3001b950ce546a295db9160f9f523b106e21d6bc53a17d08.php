<?php

/* base.html.twig */
class __TwigTemplate_7131e8cc1616b114a4c8b1ca94d59192c38d0ddc533142ef9506fadcd143ba7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57d33673ca50631aae7bcf6de053727221e07ff44483a3b9a8c9a2d5131908c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d33673ca50631aae7bcf6de053727221e07ff44483a3b9a8c9a2d5131908c4->enter($__internal_57d33673ca50631aae7bcf6de053727221e07ff44483a3b9a8c9a2d5131908c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3a5b581cc64b76d1b4973c0d7cdd5b02c6430b4ead9b53c9c1d15388a6d38839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5b581cc64b76d1b4973c0d7cdd5b02c6430b4ead9b53c9c1d15388a6d38839->enter($__internal_3a5b581cc64b76d1b4973c0d7cdd5b02c6430b4ead9b53c9c1d15388a6d38839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">


        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tinycircleslider"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://canvasjs.com/assets/script/canvasjs.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("anim.js"), "html", null, true);
        echo "\">


    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_57d33673ca50631aae7bcf6de053727221e07ff44483a3b9a8c9a2d5131908c4->leave($__internal_57d33673ca50631aae7bcf6de053727221e07ff44483a3b9a8c9a2d5131908c4_prof);

        
        $__internal_3a5b581cc64b76d1b4973c0d7cdd5b02c6430b4ead9b53c9c1d15388a6d38839->leave($__internal_3a5b581cc64b76d1b4973c0d7cdd5b02c6430b4ead9b53c9c1d15388a6d38839_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_089fe33f3ea9a08420760fcc7ad838d3ad2f7c8cd62a5e8914ce435fdbf51667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089fe33f3ea9a08420760fcc7ad838d3ad2f7c8cd62a5e8914ce435fdbf51667->enter($__internal_089fe33f3ea9a08420760fcc7ad838d3ad2f7c8cd62a5e8914ce435fdbf51667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbeee474b9678b5ec3fab208e392904ab89fe36351b0d7ebf1404ea54628c87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeee474b9678b5ec3fab208e392904ab89fe36351b0d7ebf1404ea54628c87a->enter($__internal_dbeee474b9678b5ec3fab208e392904ab89fe36351b0d7ebf1404ea54628c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello World!";
        
        $__internal_dbeee474b9678b5ec3fab208e392904ab89fe36351b0d7ebf1404ea54628c87a->leave($__internal_dbeee474b9678b5ec3fab208e392904ab89fe36351b0d7ebf1404ea54628c87a_prof);

        
        $__internal_089fe33f3ea9a08420760fcc7ad838d3ad2f7c8cd62a5e8914ce435fdbf51667->leave($__internal_089fe33f3ea9a08420760fcc7ad838d3ad2f7c8cd62a5e8914ce435fdbf51667_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_d05ca4ac023c6fa5c2d08e5884a3d07df09dac23068cb8448d23e56feef57a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05ca4ac023c6fa5c2d08e5884a3d07df09dac23068cb8448d23e56feef57a2b->enter($__internal_d05ca4ac023c6fa5c2d08e5884a3d07df09dac23068cb8448d23e56feef57a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9fb118d2d3c365d3eb077635ef225e49f7cd2b286df9100daeabd8f2062b3182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb118d2d3c365d3eb077635ef225e49f7cd2b286df9100daeabd8f2062b3182->enter($__internal_9fb118d2d3c365d3eb077635ef225e49f7cd2b286df9100daeabd8f2062b3182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9fb118d2d3c365d3eb077635ef225e49f7cd2b286df9100daeabd8f2062b3182->leave($__internal_9fb118d2d3c365d3eb077635ef225e49f7cd2b286df9100daeabd8f2062b3182_prof);

        
        $__internal_d05ca4ac023c6fa5c2d08e5884a3d07df09dac23068cb8448d23e56feef57a2b->leave($__internal_d05ca4ac023c6fa5c2d08e5884a3d07df09dac23068cb8448d23e56feef57a2b_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f61bfa5526d4873743bf07460ceac9fc27ffd753524649c6008e17631804ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f61bfa5526d4873743bf07460ceac9fc27ffd753524649c6008e17631804ff->enter($__internal_00f61bfa5526d4873743bf07460ceac9fc27ffd753524649c6008e17631804ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b435e3d3ca98030718f1fbb2e27f09c167f5af2413c8b8be021d27253cc8c6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b435e3d3ca98030718f1fbb2e27f09c167f5af2413c8b8be021d27253cc8c6c0->enter($__internal_b435e3d3ca98030718f1fbb2e27f09c167f5af2413c8b8be021d27253cc8c6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_b435e3d3ca98030718f1fbb2e27f09c167f5af2413c8b8be021d27253cc8c6c0->leave($__internal_b435e3d3ca98030718f1fbb2e27f09c167f5af2413c8b8be021d27253cc8c6c0_prof);

        
        $__internal_00f61bfa5526d4873743bf07460ceac9fc27ffd753524649c6008e17631804ff->leave($__internal_00f61bfa5526d4873743bf07460ceac9fc27ffd753524649c6008e17631804ff_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab65545e6556126f2c0f352793301ad1e6fd088263a189f54e756e1e1df0be9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab65545e6556126f2c0f352793301ad1e6fd088263a189f54e756e1e1df0be9c->enter($__internal_ab65545e6556126f2c0f352793301ad1e6fd088263a189f54e756e1e1df0be9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_241bbbb38755aa55afa66b36c0ec3e798765af5d7819901dbd19d0aaa98a3389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241bbbb38755aa55afa66b36c0ec3e798765af5d7819901dbd19d0aaa98a3389->enter($__internal_241bbbb38755aa55afa66b36c0ec3e798765af5d7819901dbd19d0aaa98a3389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <script defer src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://use.fontawesome.com/releases/v5.0.7/js/all.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_241bbbb38755aa55afa66b36c0ec3e798765af5d7819901dbd19d0aaa98a3389->leave($__internal_241bbbb38755aa55afa66b36c0ec3e798765af5d7819901dbd19d0aaa98a3389_prof);

        
        $__internal_ab65545e6556126f2c0f352793301ad1e6fd088263a189f54e756e1e1df0be9c->leave($__internal_ab65545e6556126f2c0f352793301ad1e6fd088263a189f54e756e1e1df0be9c_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f51655e6ba856c561bfe6b2f5f4848bfe4af8dc1aa1864deab2df68306b2e89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51655e6ba856c561bfe6b2f5f4848bfe4af8dc1aa1864deab2df68306b2e89e->enter($__internal_f51655e6ba856c561bfe6b2f5f4848bfe4af8dc1aa1864deab2df68306b2e89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7da118fa10736d49f3f8b7b071b73631495d9c04e49d3e973e0d468794098618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da118fa10736d49f3f8b7b071b73631495d9c04e49d3e973e0d468794098618->enter($__internal_7da118fa10736d49f3f8b7b071b73631495d9c04e49d3e973e0d468794098618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7da118fa10736d49f3f8b7b071b73631495d9c04e49d3e973e0d468794098618->leave($__internal_7da118fa10736d49f3f8b7b071b73631495d9c04e49d3e973e0d468794098618_prof);

        
        $__internal_f51655e6ba856c561bfe6b2f5f4848bfe4af8dc1aa1864deab2df68306b2e89e->leave($__internal_f51655e6ba856c561bfe6b2f5f4848bfe4af8dc1aa1864deab2df68306b2e89e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 20,  142 => 19,  124 => 18,  107 => 17,  89 => 7,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  66 => 17,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">


        <title>{% block title %}Hello World!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('tinycircleslider')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('style.css')}}\">
        <script src=\"{{ asset('https://canvasjs.com/assets/script/canvasjs.min.js')}}\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('anim.js')}}\">


    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %} {% endblock %}
        {% block javascripts %} <script defer src=\"{{ asset('https://use.fontawesome.com/releases/v5.0.7/js/all.js')}}\"></script>{% endblock %}
        {% block footer %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/projetCV/templates/base.html.twig");
    }
}
