<?php

/* projet.html.twig */
class __TwigTemplate_c357ef0fdf518dde5a515fe7f3155797b264ae1dbc0735d09125e917dc80dc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a545f3b9a9ac52e305eaa65dae2f460a3de20b2244c8db2a71be1532cb37931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a545f3b9a9ac52e305eaa65dae2f460a3de20b2244c8db2a71be1532cb37931->enter($__internal_2a545f3b9a9ac52e305eaa65dae2f460a3de20b2244c8db2a71be1532cb37931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet.html.twig"));

        $__internal_3934f88a44d1ac08948bf35298bdf79bdb8f04fd54b3359228ad91c275366b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3934f88a44d1ac08948bf35298bdf79bdb8f04fd54b3359228ad91c275366b85->enter($__internal_3934f88a44d1ac08948bf35298bdf79bdb8f04fd54b3359228ad91c275366b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a545f3b9a9ac52e305eaa65dae2f460a3de20b2244c8db2a71be1532cb37931->leave($__internal_2a545f3b9a9ac52e305eaa65dae2f460a3de20b2244c8db2a71be1532cb37931_prof);

        
        $__internal_3934f88a44d1ac08948bf35298bdf79bdb8f04fd54b3359228ad91c275366b85->leave($__internal_3934f88a44d1ac08948bf35298bdf79bdb8f04fd54b3359228ad91c275366b85_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_163d6a043795fb2c9a395f23a5fdaa9ef871ac4d20b5d31cca1fe281ce0eea21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163d6a043795fb2c9a395f23a5fdaa9ef871ac4d20b5d31cca1fe281ce0eea21->enter($__internal_163d6a043795fb2c9a395f23a5fdaa9ef871ac4d20b5d31cca1fe281ce0eea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9b95eee5c107323b59bef9de345879c4c52574ec9f83de849e53345d85f768a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b95eee5c107323b59bef9de345879c4c52574ec9f83de849e53345d85f768a3->enter($__internal_9b95eee5c107323b59bef9de345879c4c52574ec9f83de849e53345d85f768a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9b95eee5c107323b59bef9de345879c4c52574ec9f83de849e53345d85f768a3->leave($__internal_9b95eee5c107323b59bef9de345879c4c52574ec9f83de849e53345d85f768a3_prof);

        
        $__internal_163d6a043795fb2c9a395f23a5fdaa9ef871ac4d20b5d31cca1fe281ce0eea21->leave($__internal_163d6a043795fb2c9a395f23a5fdaa9ef871ac4d20b5d31cca1fe281ce0eea21_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a2e5fb50b559fae2af5343704b12b030eb87fcc6cb65930f225a61e78ca3178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2e5fb50b559fae2af5343704b12b030eb87fcc6cb65930f225a61e78ca3178->enter($__internal_8a2e5fb50b559fae2af5343704b12b030eb87fcc6cb65930f225a61e78ca3178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25d831f5ee97ddeb3505117a0c901304c9bcc99a4a9cd9549289c1774dca5cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d831f5ee97ddeb3505117a0c901304c9bcc99a4a9cd9549289c1774dca5cf7->enter($__internal_25d831f5ee97ddeb3505117a0c901304c9bcc99a4a9cd9549289c1774dca5cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<section >
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"text-center col-12\">Projets</h2>
                <div class=\"col-xs-12 col-md-6\">
                  <a href=\"#\"> <img class=\"image\" src=\"../img/explofiles.png\" alt=\"\"></a>
                    <p>Explofiles :</p>
                  <p>Explorateur de fichiers</p>
                </div>
                 <div class=\"col-xs-12 col-md-6\">
                    <a  href=\"#\"><img class=\"image\" src=\"../img/axis.png\" alt=\"\"></a>
                        <p>exoWordpress :</p>
                    <p>Template à reproduire sur Wordpress</p>
                 </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/blog.png\" alt=\"\"></a>
                        <p>Blog :</p>
                    <p>Blog avec une base de donnée pour pouvoir ajouter un thème,du texte, etc... </p>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/transfert.jpg\" alt=\"\"></a>
                        <p>exoWetransfert</p>
                        <p>Permet de tranférer des fichiers, de l'enregistrer avec une limitation de taille de fichiers qui varie selon si on est connecté ou pas.</p>
                    <p>Utilisation d'une base de données.</p>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/meme.png\" alt=\"\"></a>
                        <p>MêmeGénérator</p>
                        <p>Permet de mettre une phrase comique sur une image, et de la sauvegarder.</p>
                </div>
        </div>
    </div>
</section>

";
        
        $__internal_25d831f5ee97ddeb3505117a0c901304c9bcc99a4a9cd9549289c1774dca5cf7->leave($__internal_25d831f5ee97ddeb3505117a0c901304c9bcc99a4a9cd9549289c1774dca5cf7_prof);

        
        $__internal_8a2e5fb50b559fae2af5343704b12b030eb87fcc6cb65930f225a61e78ca3178->leave($__internal_8a2e5fb50b559fae2af5343704b12b030eb87fcc6cb65930f225a61e78ca3178_prof);

    }

    public function getTemplateName()
    {
        return "projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
{% endblock %}

{% block body %}

<section >
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"text-center col-12\">Projets</h2>
                <div class=\"col-xs-12 col-md-6\">
                  <a href=\"#\"> <img class=\"image\" src=\"../img/explofiles.png\" alt=\"\"></a>
                    <p>Explofiles :</p>
                  <p>Explorateur de fichiers</p>
                </div>
                 <div class=\"col-xs-12 col-md-6\">
                    <a  href=\"#\"><img class=\"image\" src=\"../img/axis.png\" alt=\"\"></a>
                        <p>exoWordpress :</p>
                    <p>Template à reproduire sur Wordpress</p>
                 </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/blog.png\" alt=\"\"></a>
                        <p>Blog :</p>
                    <p>Blog avec une base de donnée pour pouvoir ajouter un thème,du texte, etc... </p>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/transfert.jpg\" alt=\"\"></a>
                        <p>exoWetransfert</p>
                        <p>Permet de tranférer des fichiers, de l'enregistrer avec une limitation de taille de fichiers qui varie selon si on est connecté ou pas.</p>
                    <p>Utilisation d'une base de données.</p>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <a href=\"#\"><img class=\"image\" src=\"../img/meme.png\" alt=\"\"></a>
                        <p>MêmeGénérator</p>
                        <p>Permet de mettre une phrase comique sur une image, et de la sauvegarder.</p>
                </div>
        </div>
    </div>
</section>

{% endblock %}
", "projet.html.twig", "/var/www/projetCV/templates/projet.html.twig");
    }
}
