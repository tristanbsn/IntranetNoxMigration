<?php

/* NoxIntranetRessourcesBundle:Liens:liens.html.twig */
class __TwigTemplate_bacb27f22282ee04708ccbf5f208a1332b8c235bf143056ab3c7431cb89ce471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Liens:liens.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24419dda84e48ab58519f8d08e5bc7de4dfd209cdf9fcbc88bcc70c1f7625c24 = $this->env->getExtension("native_profiler");
        $__internal_24419dda84e48ab58519f8d08e5bc7de4dfd209cdf9fcbc88bcc70c1f7625c24->enter($__internal_24419dda84e48ab58519f8d08e5bc7de4dfd209cdf9fcbc88bcc70c1f7625c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Liens:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24419dda84e48ab58519f8d08e5bc7de4dfd209cdf9fcbc88bcc70c1f7625c24->leave($__internal_24419dda84e48ab58519f8d08e5bc7de4dfd209cdf9fcbc88bcc70c1f7625c24_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d8e428014d65e1cbf35615162d5a13065d070c74e2aaeb72b242338b4e785056 = $this->env->getExtension("native_profiler");
        $__internal_d8e428014d65e1cbf35615162d5a13065d070c74e2aaeb72b242338b4e785056->enter($__internal_d8e428014d65e1cbf35615162d5a13065d070c74e2aaeb72b242338b4e785056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Liens
";
        
        $__internal_d8e428014d65e1cbf35615162d5a13065d070c74e2aaeb72b242338b4e785056->leave($__internal_d8e428014d65e1cbf35615162d5a13065d070c74e2aaeb72b242338b4e785056_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_77e5e25796aa77299ddcbe4487097506de0a741877732cde3be7bfa418059970 = $this->env->getExtension("native_profiler");
        $__internal_77e5e25796aa77299ddcbe4487097506de0a741877732cde3be7bfa418059970->enter($__internal_77e5e25796aa77299ddcbe4487097506de0a741877732cde3be7bfa418059970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Liens";
        
        $__internal_77e5e25796aa77299ddcbe4487097506de0a741877732cde3be7bfa418059970->leave($__internal_77e5e25796aa77299ddcbe4487097506de0a741877732cde3be7bfa418059970_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c6d71445c7a26f8a88b84666d3b3aa42a070f3c25de2a04bdb1274ce4948c84d = $this->env->getExtension("native_profiler");
        $__internal_c6d71445c7a26f8a88b84666d3b3aa42a070f3c25de2a04bdb1274ce4948c84d->enter($__internal_c6d71445c7a26f8a88b84666d3b3aa42a070f3c25de2a04bdb1274ce4948c84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_LIENS")) {
            echo " 

        <div class='zoneEdition' id=\"zoneEditionLiens\">

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

            ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
            echo "

            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

            ";
            // line 22
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

            ";
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
            echo "

            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        </div>

    ";
        }
        // line 32
        echo "
    <div class='zoneTexte' id=\"zoneTexteLiens\">
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_c6d71445c7a26f8a88b84666d3b3aa42a070f3c25de2a04bdb1274ce4948c84d->leave($__internal_c6d71445c7a26f8a88b84666d3b3aa42a070f3c25de2a04bdb1274ce4948c84d_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Liens:liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Liens*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Liens{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_LIENS') %} */
/* */
/*         <div class='zoneEdition' id="zoneEditionLiens">*/
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.text) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div class='zoneTexte' id="zoneTexteLiens">*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
