<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3e90a1e9845e1b9ee1eed361c52246709e49b108dcfbeaa091537a371ad92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3e90a1e9845e1b9ee1eed361c52246709e49b108dcfbeaa091537a371ad92c->enter($__internal_cb3e90a1e9845e1b9ee1eed361c52246709e49b108dcfbeaa091537a371ad92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e5195970ae91a98a65bc67e2454cd588e279c4fdb26400fbc9b5d942271f7b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5195970ae91a98a65bc67e2454cd588e279c4fdb26400fbc9b5d942271f7b68->enter($__internal_e5195970ae91a98a65bc67e2454cd588e279c4fdb26400fbc9b5d942271f7b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cb3e90a1e9845e1b9ee1eed361c52246709e49b108dcfbeaa091537a371ad92c->leave($__internal_cb3e90a1e9845e1b9ee1eed361c52246709e49b108dcfbeaa091537a371ad92c_prof);

        
        $__internal_e5195970ae91a98a65bc67e2454cd588e279c4fdb26400fbc9b5d942271f7b68->leave($__internal_e5195970ae91a98a65bc67e2454cd588e279c4fdb26400fbc9b5d942271f7b68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19ace5200969727f96b4c35b1b02f80dcc5175d7f26a2a0356cb1b6504960c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ace5200969727f96b4c35b1b02f80dcc5175d7f26a2a0356cb1b6504960c78->enter($__internal_19ace5200969727f96b4c35b1b02f80dcc5175d7f26a2a0356cb1b6504960c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df27b9b033030fe7e9aaa7cc891a99bec116e7223c80d1e01ca3e057b2542b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df27b9b033030fe7e9aaa7cc891a99bec116e7223c80d1e01ca3e057b2542b7b->enter($__internal_df27b9b033030fe7e9aaa7cc891a99bec116e7223c80d1e01ca3e057b2542b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_df27b9b033030fe7e9aaa7cc891a99bec116e7223c80d1e01ca3e057b2542b7b->leave($__internal_df27b9b033030fe7e9aaa7cc891a99bec116e7223c80d1e01ca3e057b2542b7b_prof);

        
        $__internal_19ace5200969727f96b4c35b1b02f80dcc5175d7f26a2a0356cb1b6504960c78->leave($__internal_19ace5200969727f96b4c35b1b02f80dcc5175d7f26a2a0356cb1b6504960c78_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b93a6924af8d541ffd304ee4e84d2fc6ff1c277974a0afbb09f19a867833a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b93a6924af8d541ffd304ee4e84d2fc6ff1c277974a0afbb09f19a867833a7d->enter($__internal_9b93a6924af8d541ffd304ee4e84d2fc6ff1c277974a0afbb09f19a867833a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b32771813f941fcbce088e6ebace5ad0637d96bf5a7b0eec5fd229beac4af4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b32771813f941fcbce088e6ebace5ad0637d96bf5a7b0eec5fd229beac4af4c->enter($__internal_7b32771813f941fcbce088e6ebace5ad0637d96bf5a7b0eec5fd229beac4af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7b32771813f941fcbce088e6ebace5ad0637d96bf5a7b0eec5fd229beac4af4c->leave($__internal_7b32771813f941fcbce088e6ebace5ad0637d96bf5a7b0eec5fd229beac4af4c_prof);

        
        $__internal_9b93a6924af8d541ffd304ee4e84d2fc6ff1c277974a0afbb09f19a867833a7d->leave($__internal_9b93a6924af8d541ffd304ee4e84d2fc6ff1c277974a0afbb09f19a867833a7d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0262d1bb2733c4182077eddfea84d8a281a7324a4b4e1538983f8d6dff0ac3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0262d1bb2733c4182077eddfea84d8a281a7324a4b4e1538983f8d6dff0ac3c9->enter($__internal_0262d1bb2733c4182077eddfea84d8a281a7324a4b4e1538983f8d6dff0ac3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9094048954c8db06a7a3a2a6ed84edd1524cd0626cdab376822a96c6be367d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9094048954c8db06a7a3a2a6ed84edd1524cd0626cdab376822a96c6be367d5->enter($__internal_d9094048954c8db06a7a3a2a6ed84edd1524cd0626cdab376822a96c6be367d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9094048954c8db06a7a3a2a6ed84edd1524cd0626cdab376822a96c6be367d5->leave($__internal_d9094048954c8db06a7a3a2a6ed84edd1524cd0626cdab376822a96c6be367d5_prof);

        
        $__internal_0262d1bb2733c4182077eddfea84d8a281a7324a4b4e1538983f8d6dff0ac3c9->leave($__internal_0262d1bb2733c4182077eddfea84d8a281a7324a4b4e1538983f8d6dff0ac3c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/projetCV/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
