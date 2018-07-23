<?php

/* lucky/number.html.twig */
class __TwigTemplate_1fde25c8d67725b1e99e0a7dbb0cf7adf0912e726d67c04c646bd0dcb68c8d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8358e15c4753d25cd7c9fe0fec4943870d21a44431c66eb73ea54011a05f8d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8358e15c4753d25cd7c9fe0fec4943870d21a44431c66eb73ea54011a05f8d97->enter($__internal_8358e15c4753d25cd7c9fe0fec4943870d21a44431c66eb73ea54011a05f8d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_d031efa7fb43765fa28494c8a3f7afa3d9f367d22de7f17575a26007f605d184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d031efa7fb43765fa28494c8a3f7afa3d9f367d22de7f17575a26007f605d184->enter($__internal_d031efa7fb43765fa28494c8a3f7afa3d9f367d22de7f17575a26007f605d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8358e15c4753d25cd7c9fe0fec4943870d21a44431c66eb73ea54011a05f8d97->leave($__internal_8358e15c4753d25cd7c9fe0fec4943870d21a44431c66eb73ea54011a05f8d97_prof);

        
        $__internal_d031efa7fb43765fa28494c8a3f7afa3d9f367d22de7f17575a26007f605d184->leave($__internal_d031efa7fb43765fa28494c8a3f7afa3d9f367d22de7f17575a26007f605d184_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2dbb943560703c688c3defab276913d18bc3be63f28ad4831612b4af4599d68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbb943560703c688c3defab276913d18bc3be63f28ad4831612b4af4599d68f->enter($__internal_2dbb943560703c688c3defab276913d18bc3be63f28ad4831612b4af4599d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b5d206821c33720748dd20807f3180809530ac0123ad30d8eaf4bef5421d94f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d206821c33720748dd20807f3180809530ac0123ad30d8eaf4bef5421d94f9->enter($__internal_b5d206821c33720748dd20807f3180809530ac0123ad30d8eaf4bef5421d94f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "<div class=\"container\">
\t<div class=\"row\">


<script class=\"col-xs-12\">
window.onload = function () {

var chart = new CanvasJS.Chart(\"chartContainer\", {
\tanimationEnabled: true,
\ttitle:{
\t\t\t\thorizontalAlign: \"left\"
\t},
\tdata: [{
\t\ttype: \"doughnut\",
\t\tstartAngle: 60,
\t\t//innerRadius: 60,
\t\tindexLabelFontSize: 17,
\t\tdataPoints: [
\t\t\t{ y: 20, label: \"Html5\" },
\t\t\t{ y: 20, label: \"CSS\" },
\t\t\t{ y: 20, label: \"javascript\" },
\t\t\t{ y: 20, label: \"PHP\"},
\t\t\t{ y: 20, label: \"jquery\"},
\t\t\t{ y: 20, label: \"Sql\"}
\t\t]
\t}]
});
chart.render();
}
</script>
</div>

</div>
";
        
        $__internal_b5d206821c33720748dd20807f3180809530ac0123ad30d8eaf4bef5421d94f9->leave($__internal_b5d206821c33720748dd20807f3180809530ac0123ad30d8eaf4bef5421d94f9_prof);

        
        $__internal_2dbb943560703c688c3defab276913d18bc3be63f28ad4831612b4af4599d68f->leave($__internal_2dbb943560703c688c3defab276913d18bc3be63f28ad4831612b4af4599d68f_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a3053caffc708b49104ba167550a466519bf0148d06421efcf8974311d0c9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3053caffc708b49104ba167550a466519bf0148d06421efcf8974311d0c9d4->enter($__internal_4a3053caffc708b49104ba167550a466519bf0148d06421efcf8974311d0c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8984a5981742c85fbfe51507cdfcf5e981f0d147e7b48b0b3eff5db0b312900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8984a5981742c85fbfe51507cdfcf5e981f0d147e7b48b0b3eff5db0b312900->enter($__internal_c8984a5981742c85fbfe51507cdfcf5e981f0d147e7b48b0b3eff5db0b312900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "\t<section id=\"gris\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t   <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t   </button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#vg\">Diplômes</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a id=\"pj\" class=\"nav-link disabled\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projets");
        echo "\">Projets</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#ci\">Centres d'Intérêts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#lw\">Languages Web</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"red\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exp");
        echo "\">Expérience professionnelle</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#atr\">Autres</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#cnct\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</section>

    <section class=\"bck_un\" id=\"banniere_cv\" >
         <div class=\"text-center col-xs-12\">
            <h1>Curriculum Vitae</h1>
\t\t\t\t<img id=\"logo\" src=\"../img/alexis.png\" alt=\"\">
            <h2 id=\"Nom\">Alexis GAULON</h2>
         </div>
    </section>

    <section id=\"vg\">
        <div class=\"container\">
            <div class=\"row\">
                 <h2 class=\"text-center col-12\">Diplômes obtenus</h2>

                    <div class=\"col-xs-12 col-md-4\">
                     <img class=\"image\" src=\"../img/bdc.png\" alt=\"\">
                     <p> Brevet des collèges au collège Bernard de Ventadour à Limoges.</p>
                    </div>

\t                    <div class=\"col-xs-12 col-md-4\">
\t                        <img class=\"image\" src=\"../img/bep.png\" alt=\"\">
\t                        <p>BEP Systèmes Electroniques et Numériques (SEN) option AudioVisuel Professionnel (AVP) au Lycée professionnel Maryse Bastié.</p>
\t                    </div>

                    <div class=\"col-xs-12 col-md-4\">
                        <img class=\"image\" src=\"../img/bacc.png\" alt=\"\">
                        <p>Baccalauréat Systèmes Electroniques et Numériques (SEN) option AudioVisuel Professionnel (AVP) au Lycée professionnel Maryse Bastié.</p>
                    </div>
            </div>
        </div>
    </section>

\t<section>
        <div class=\"bck_qua\"></div>
    </section>


    <section id=\"ci\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"text-center\">Centres d'interêts</h2>
                </div>

\t                <div class=\"col-xs-12 col-md-4\">
\t                    <iframe class=\"image\" src=\"//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/XFISLimoges/?ref=br_rs\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowTransparency=\"true\"></iframe>
\t                    <p>Patinage freestyle dans l'association \"XFIS Limoges\", caméraman et monteur.</p>
\t                </div>

\t                <div class=\"col-xs-12 col-md-4\">
\t                    <img class=\"image\" src=\"../img/goku.gif\" alt=\"\">
\t                    <p class=\"text-center\">Jeux Vidéos.</p>
\t                </div>

                <div class=\"col-xs-12 col-md-4\">
                    <img class=\"image\" src=\"../img/guitare.gif\" alt=\"\">
                    <p class=\"text-center\">Guitare électrique.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
       <div class=\"bck_trois\">
       </div>
    </section>

    <section id=\"lw\">
        <div class=\"container\">
            <h2 class=\"text-center col-12\">Languages Web</h2>
            <div id=\"chartContainer\" style=\"height: 370px; width: 100%;\"></div>
        </div>
    </section>




    <section>
        <div class=\"bck_cin\"></div>
    </section>

    <section id=\"atr\">
        <div class=\"container\">
            <h2 class=\"text-center\">Autres</h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 \">
                    <img class=\"image\" src=\"../img/BO.png\" alt=\"\">
                    <p>Hablilitation électrique B0</p>
                </div>

                <div class=\"col-xs-12 col-md-6 \">
                    <img class=\"image text-center\" src=\"../img/sst.png\" alt=\"\">
                    <p>Certificat de Sauveteur Secouriste du Travail (SST)</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"bck_six\"></div>
    </section>

    <section id=\"cnct\">
        <div id=\"contact\">
\t\t\t<div class=\"top\">
                <h2 class=\"text-center\">Contact</h2>
\t\t\t</div>
\t\t\t     <div class=\"container\">
                    <div class=\"wrapper\">
\t\t\t\t\t\t";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 186, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->getSourceContext()); })()), "nom", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->getSourceContext()); })()), "nom", array()), 'widget', array("attr" => array("class" => "form_control col-12")));
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), "ville", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->getSourceContext()); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control col-12")));
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t                                ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 203, $this->getSourceContext()); })()), "telephone", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->getSourceContext()); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form_control col-12")));
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->getSourceContext()); })()), "message", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 212, $this->getSourceContext()); })()), "message", array()), 'widget', array("attr" => array("class" => "form_control col-12")));
        echo "
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t                                ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 217, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t                            </div>

\t\t\t\t\t\t    ";
        // line 220
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 220, $this->getSourceContext()); })()), 'form_end');
        echo "

\t\t\t\t\t\t";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 222, $this->getSourceContext()); })()), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 223
            echo "                               <div class=\"flash-success\">
                                   ";
            // line 224
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                               </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "
                </div>
\t\t</div>
    </section>

 ";
        
        $__internal_c8984a5981742c85fbfe51507cdfcf5e981f0d147e7b48b0b3eff5db0b312900->leave($__internal_c8984a5981742c85fbfe51507cdfcf5e981f0d147e7b48b0b3eff5db0b312900_prof);

        
        $__internal_4a3053caffc708b49104ba167550a466519bf0148d06421efcf8974311d0c9d4->leave($__internal_4a3053caffc708b49104ba167550a466519bf0148d06421efcf8974311d0c9d4_prof);

    }

    // line 234
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9271d032f7a4ebe26cf74bbe8ec6fcfb0996e56fddcca1b37c751fd10bdac116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9271d032f7a4ebe26cf74bbe8ec6fcfb0996e56fddcca1b37c751fd10bdac116->enter($__internal_9271d032f7a4ebe26cf74bbe8ec6fcfb0996e56fddcca1b37c751fd10bdac116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e824a3c3dc3f6b00ac344780d71e006eb2d3e436445c5cccd08a763f1f6a2d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e824a3c3dc3f6b00ac344780d71e006eb2d3e436445c5cccd08a763f1f6a2d1e->enter($__internal_e824a3c3dc3f6b00ac344780d71e006eb2d3e436445c5cccd08a763f1f6a2d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 235
        echo "\t<section id=\"ftr\">
\t    <div id=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t    <p>Autres contacts</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t   <a href=\"https://www.facebook.com/?stype=lo&jlou=AfcoAdQ821Dr8XLb0NE0LE8apRLOXOD265I0HszeSDa08A0cQiGNbUZxhfXB3s7zVHTHtni-n1NN-2JjdqYiPG1k2ZBxglv1lHMlgqWT4Qx__g&smuh=56393&lh=Ac-goIaTJ0hubsQB\"> <i class=\"fab fa-facebook fa-2x\"></i></a>
\t\t\t\t  \t</div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t  <a href=\"https://twitter.com/?lang=fr\"> <i class=\"fab fa-twitter-square fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t    <div class=\"col-2\">
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/?hl=fr\"> <i class=\"fab fa-instagram fa-2x\"></i></a>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<a href=\"https://fr.linkedin.com/\"><i class=\"fab fa-linkedin-in fa-2x\"></i></a>
\t\t\t\t    </div>
\t            </div>
\t\t\t</div>
\t    </div>
\t</section>


";
        
        $__internal_e824a3c3dc3f6b00ac344780d71e006eb2d3e436445c5cccd08a763f1f6a2d1e->leave($__internal_e824a3c3dc3f6b00ac344780d71e006eb2d3e436445c5cccd08a763f1f6a2d1e_prof);

        
        $__internal_9271d032f7a4ebe26cf74bbe8ec6fcfb0996e56fddcca1b37c751fd10bdac116->leave($__internal_9271d032f7a4ebe26cf74bbe8ec6fcfb0996e56fddcca1b37c751fd10bdac116_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 235,  356 => 234,  341 => 227,  332 => 224,  329 => 223,  325 => 222,  320 => 220,  314 => 217,  306 => 212,  301 => 210,  293 => 205,  288 => 203,  280 => 198,  275 => 196,  267 => 191,  262 => 189,  256 => 186,  130 => 63,  118 => 54,  103 => 41,  94 => 40,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
<div class=\"container\">
\t<div class=\"row\">


<script class=\"col-xs-12\">
window.onload = function () {

var chart = new CanvasJS.Chart(\"chartContainer\", {
\tanimationEnabled: true,
\ttitle:{
\t\t\t\thorizontalAlign: \"left\"
\t},
\tdata: [{
\t\ttype: \"doughnut\",
\t\tstartAngle: 60,
\t\t//innerRadius: 60,
\t\tindexLabelFontSize: 17,
\t\tdataPoints: [
\t\t\t{ y: 20, label: \"Html5\" },
\t\t\t{ y: 20, label: \"CSS\" },
\t\t\t{ y: 20, label: \"javascript\" },
\t\t\t{ y: 20, label: \"PHP\"},
\t\t\t{ y: 20, label: \"jquery\"},
\t\t\t{ y: 20, label: \"Sql\"}
\t\t]
\t}]
});
chart.render();
}
</script>
</div>

</div>
{% endblock %}


{% block body %}
\t<section id=\"gris\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t   <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t   </button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#vg\">Diplômes</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a id=\"pj\" class=\"nav-link disabled\" href=\"{{ path ('projets') }}\">Projets</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#ci\">Centres d'Intérêts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#lw\">Languages Web</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"red\" href=\"{{ path ('exp') }}\">Expérience professionnelle</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#atr\">Autres</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#cnct\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</section>

    <section class=\"bck_un\" id=\"banniere_cv\" >
         <div class=\"text-center col-xs-12\">
            <h1>Curriculum Vitae</h1>
\t\t\t\t<img id=\"logo\" src=\"../img/alexis.png\" alt=\"\">
            <h2 id=\"Nom\">Alexis GAULON</h2>
         </div>
    </section>

    <section id=\"vg\">
        <div class=\"container\">
            <div class=\"row\">
                 <h2 class=\"text-center col-12\">Diplômes obtenus</h2>

                    <div class=\"col-xs-12 col-md-4\">
                     <img class=\"image\" src=\"../img/bdc.png\" alt=\"\">
                     <p> Brevet des collèges au collège Bernard de Ventadour à Limoges.</p>
                    </div>

\t                    <div class=\"col-xs-12 col-md-4\">
\t                        <img class=\"image\" src=\"../img/bep.png\" alt=\"\">
\t                        <p>BEP Systèmes Electroniques et Numériques (SEN) option AudioVisuel Professionnel (AVP) au Lycée professionnel Maryse Bastié.</p>
\t                    </div>

                    <div class=\"col-xs-12 col-md-4\">
                        <img class=\"image\" src=\"../img/bacc.png\" alt=\"\">
                        <p>Baccalauréat Systèmes Electroniques et Numériques (SEN) option AudioVisuel Professionnel (AVP) au Lycée professionnel Maryse Bastié.</p>
                    </div>
            </div>
        </div>
    </section>

\t<section>
        <div class=\"bck_qua\"></div>
    </section>


    <section id=\"ci\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"text-center\">Centres d'interêts</h2>
                </div>

\t                <div class=\"col-xs-12 col-md-4\">
\t                    <iframe class=\"image\" src=\"//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/XFISLimoges/?ref=br_rs\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowTransparency=\"true\"></iframe>
\t                    <p>Patinage freestyle dans l'association \"XFIS Limoges\", caméraman et monteur.</p>
\t                </div>

\t                <div class=\"col-xs-12 col-md-4\">
\t                    <img class=\"image\" src=\"../img/goku.gif\" alt=\"\">
\t                    <p class=\"text-center\">Jeux Vidéos.</p>
\t                </div>

                <div class=\"col-xs-12 col-md-4\">
                    <img class=\"image\" src=\"../img/guitare.gif\" alt=\"\">
                    <p class=\"text-center\">Guitare électrique.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
       <div class=\"bck_trois\">
       </div>
    </section>

    <section id=\"lw\">
        <div class=\"container\">
            <h2 class=\"text-center col-12\">Languages Web</h2>
            <div id=\"chartContainer\" style=\"height: 370px; width: 100%;\"></div>
        </div>
    </section>




    <section>
        <div class=\"bck_cin\"></div>
    </section>

    <section id=\"atr\">
        <div class=\"container\">
            <h2 class=\"text-center\">Autres</h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 \">
                    <img class=\"image\" src=\"../img/BO.png\" alt=\"\">
                    <p>Hablilitation électrique B0</p>
                </div>

                <div class=\"col-xs-12 col-md-6 \">
                    <img class=\"image text-center\" src=\"../img/sst.png\" alt=\"\">
                    <p>Certificat de Sauveteur Secouriste du Travail (SST)</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"bck_six\"></div>
    </section>

    <section id=\"cnct\">
        <div id=\"contact\">
\t\t\t<div class=\"top\">
                <h2 class=\"text-center\">Contact</h2>
\t\t\t</div>
\t\t\t     <div class=\"container\">
                    <div class=\"wrapper\">
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t                            {{ form_label(form.nom, null,{'attr': {'class': 'col-form-label'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom, {'attr': {'class': 'form_control col-12'}}) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.ville, null,{'attr': {'class': 'col-form-label'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.ville, {'attr': {'class': 'form-control col-12'}}) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t                                {{ form_label(form.telephone, null,{'attr': {'class': 'col-form-label'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.telephone, {'attr': {'class': 'form_control col-12'}}) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_label(form.message, null,{'attr': {'class': 'col-form-label'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.message, {'attr': {'class': 'form_control col-12'}}) }}
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t                                {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
\t                            </div>

\t\t\t\t\t\t    {{ form_end(form) }}

\t\t\t\t\t\t{% for message in app.flashes('success') %}
                               <div class=\"flash-success\">
                                   {{ message }}
                               </div>
                           {% endfor %}

                </div>
\t\t</div>
    </section>

 {% endblock %}

{% block footer %}
\t<section id=\"ftr\">
\t    <div id=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t    <p>Autres contacts</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t   <a href=\"https://www.facebook.com/?stype=lo&jlou=AfcoAdQ821Dr8XLb0NE0LE8apRLOXOD265I0HszeSDa08A0cQiGNbUZxhfXB3s7zVHTHtni-n1NN-2JjdqYiPG1k2ZBxglv1lHMlgqWT4Qx__g&smuh=56393&lh=Ac-goIaTJ0hubsQB\"> <i class=\"fab fa-facebook fa-2x\"></i></a>
\t\t\t\t  \t</div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t  <a href=\"https://twitter.com/?lang=fr\"> <i class=\"fab fa-twitter-square fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t    <div class=\"col-2\">
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/?hl=fr\"> <i class=\"fab fa-instagram fa-2x\"></i></a>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<a href=\"https://fr.linkedin.com/\"><i class=\"fab fa-linkedin-in fa-2x\"></i></a>
\t\t\t\t    </div>
\t            </div>
\t\t\t</div>
\t    </div>
\t</section>


{% endblock %}
", "lucky/number.html.twig", "/var/www/projetCV/templates/lucky/number.html.twig");
    }
}
