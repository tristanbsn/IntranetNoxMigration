<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig */
class __TwigTemplate_0537a535386aa341c3ea8c69cea835bbe77f888a6326201cec7107de7bd9ac08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig", 1);
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
        $__internal_ea1937f7f1b9e04e0c9cb3860addaf912bdeab8602dcb8eea434e9bfdf093752 = $this->env->getExtension("native_profiler");
        $__internal_ea1937f7f1b9e04e0c9cb3860addaf912bdeab8602dcb8eea434e9bfdf093752->enter($__internal_ea1937f7f1b9e04e0c9cb3860addaf912bdeab8602dcb8eea434e9bfdf093752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1937f7f1b9e04e0c9cb3860addaf912bdeab8602dcb8eea434e9bfdf093752->leave($__internal_ea1937f7f1b9e04e0c9cb3860addaf912bdeab8602dcb8eea434e9bfdf093752_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7e8738988f7e1c3e61a7386ae382c2be7701a32884301ff081ea90e724b5b791 = $this->env->getExtension("native_profiler");
        $__internal_7e8738988f7e1c3e61a7386ae382c2be7701a32884301ff081ea90e724b5b791->enter($__internal_7e8738988f7e1c3e61a7386ae382c2be7701a32884301ff081ea90e724b5b791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Parcourirs les suivis terminés ";
        
        $__internal_7e8738988f7e1c3e61a7386ae382c2be7701a32884301ff081ea90e724b5b791->leave($__internal_7e8738988f7e1c3e61a7386ae382c2be7701a32884301ff081ea90e724b5b791_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2d42a09a6a4f29460d65ccb42125e9408ebf64ab428f1d8ddfab905ade3f2cb7 = $this->env->getExtension("native_profiler");
        $__internal_2d42a09a6a4f29460d65ccb42125e9408ebf64ab428f1d8ddfab905ade3f2cb7->enter($__internal_2d42a09a6a4f29460d65ccb42125e9408ebf64ab428f1d8ddfab905ade3f2cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Parcourirs les suivis terminés";
        
        $__internal_2d42a09a6a4f29460d65ccb42125e9408ebf64ab428f1d8ddfab905ade3f2cb7->leave($__internal_2d42a09a6a4f29460d65ccb42125e9408ebf64ab428f1d8ddfab905ade3f2cb7_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6322d805a932cf9f42ead08eff6783276a2153cfbfe269814cb3bf5e0241cd5a = $this->env->getExtension("native_profiler");
        $__internal_6322d805a932cf9f42ead08eff6783276a2153cfbfe269814cb3bf5e0241cd5a->enter($__internal_6322d805a932cf9f42ead08eff6783276a2153cfbfe269814cb3bf5e0241cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSelectionAgence'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'form_start', array("attr" => array("class" => "formulaireSelectionAgence")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'errors');
        echo "

        <fieldset>

            <legend><span>Agence</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionAgence"), "label" => "Selection de l'agence :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionAgence")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'form_end');
        echo "

    </div>


    <div id='DivFormulaireParcourSuiviEnCours'>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireParcourSuiviEnCours")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivi", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutProfil", "size" => 15)));
        echo "
            </p>

            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Consulter", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

    <script>

    </script>

";
        
        $__internal_6322d805a932cf9f42ead08eff6783276a2153cfbfe269814cb3bf5e0241cd5a->leave($__internal_6322d805a932cf9f42ead08eff6783276a2153cfbfe269814cb3bf5e0241cd5a_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  138 => 45,  132 => 42,  126 => 39,  122 => 38,  112 => 31,  108 => 30,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Parcourirs les suivis terminés {% endblock %}*/
/* */
/* {% block messageAccueil %}Parcourirs les suivis terminés{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSelectionAgence'>*/
/* */
/*         {{ form_start(formAgence, {'attr': {'class': 'formulaireSelectionAgence'}}) }}*/
/*         {{ form_errors(formAgence) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Agence</legend>*/
/* */
/*             {{ form_label(formAgence.Agences, "Selection de l'agence :", {'label_attr': {'class': 'labelFormulaireSelectionAgence'}}) }}*/
/*             {{ form_errors(formAgence.Agences) }}*/
/*             {{ form_widget(formAgence.Agences, {'attr': {'class': 'selectFormulaireSelectionAgence'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAgence) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div id='DivFormulaireParcourSuiviEnCours'>*/
/*         {{ form_start(form, {'attr': {'class': 'formulaireParcourSuiviEnCours'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Selection du suivi</legend>*/
/* */
/*             <p>*/
/*                 {{ form_errors(form.Suivi) }}*/
/*                 {{ form_widget(form.Suivi, {'attr': {'class': 'selectFormulaireAdministrationAjoutProfil', 'size': 15}}) }}*/
/*             </p>*/
/* */
/*             {{ form_widget(form._token) }}*/
/* */
/*             <p>*/
/*                 {{ form_widget(form.Consulter, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
