<?php

/* NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig */
class __TwigTemplate_8a0059292fa26edbd25cdf1c62444c823bb1e416027be5648e304670e621ee77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig", 1);
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
        $__internal_65210e787289c3e89b2b9756f856d6d73b5d7d3d7d9a5404dff5c03f4abe8f55 = $this->env->getExtension("native_profiler");
        $__internal_65210e787289c3e89b2b9756f856d6d73b5d7d3d7d9a5404dff5c03f4abe8f55->enter($__internal_65210e787289c3e89b2b9756f856d6d73b5d7d3d7d9a5404dff5c03f4abe8f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65210e787289c3e89b2b9756f856d6d73b5d7d3d7d9a5404dff5c03f4abe8f55->leave($__internal_65210e787289c3e89b2b9756f856d6d73b5d7d3d7d9a5404dff5c03f4abe8f55_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8abe8d07d2e4f951dea2c577070c3f58db99bbef019fb310ac978139f28e7161 = $this->env->getExtension("native_profiler");
        $__internal_8abe8d07d2e4f951dea2c577070c3f58db99bbef019fb310ac978139f28e7161->enter($__internal_8abe8d07d2e4f951dea2c577070c3f58db99bbef019fb310ac978139f28e7161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_8abe8d07d2e4f951dea2c577070c3f58db99bbef019fb310ac978139f28e7161->leave($__internal_8abe8d07d2e4f951dea2c577070c3f58db99bbef019fb310ac978139f28e7161_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c4019999e3cc1ddeb161030080a4c52b5d7e775c9806ae4c201468bcb04cfb37 = $this->env->getExtension("native_profiler");
        $__internal_c4019999e3cc1ddeb161030080a4c52b5d7e775c9806ae4c201468bcb04cfb37->enter($__internal_c4019999e3cc1ddeb161030080a4c52b5d7e775c9806ae4c201468bcb04cfb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_c4019999e3cc1ddeb161030080a4c52b5d7e775c9806ae4c201468bcb04cfb37->leave($__internal_c4019999e3cc1ddeb161030080a4c52b5d7e775c9806ae4c201468bcb04cfb37_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_53a552ad63e69ed9a1e3711a48c0a611cbe7e14e24e60a818ee87675d448a2be = $this->env->getExtension("native_profiler");
        $__internal_53a552ad63e69ed9a1e3711a48c0a611cbe7e14e24e60a818ee87675d448a2be->enter($__internal_53a552ad63e69ed9a1e3711a48c0a611cbe7e14e24e60a818ee87675d448a2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "
        <div class='zoneEdition'> 

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
    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_53a552ad63e69ed9a1e3711a48c0a611cbe7e14e24e60a818ee87675d448a2be->leave($__internal_53a552ad63e69ed9a1e3711a48c0a611cbe7e14e24e60a818ee87675d448a2be_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  73 => 12,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Avancement projet*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Avancement projet{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         <div class='zoneEdition'> */
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
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
