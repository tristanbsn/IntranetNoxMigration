<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig */
class __TwigTemplate_2d450b1fc2a22438d0d7eed63504cbe0ebf43345682f2162848a250dc9d46309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig", 1);
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
        $__internal_9c673dde14585dfab7efc7ed53791d930588da6665565ca60d9c00be01a16a5c = $this->env->getExtension("native_profiler");
        $__internal_9c673dde14585dfab7efc7ed53791d930588da6665565ca60d9c00be01a16a5c->enter($__internal_9c673dde14585dfab7efc7ed53791d930588da6665565ca60d9c00be01a16a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c673dde14585dfab7efc7ed53791d930588da6665565ca60d9c00be01a16a5c->leave($__internal_9c673dde14585dfab7efc7ed53791d930588da6665565ca60d9c00be01a16a5c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7e05d79d663487de2f45866708792f22bb06432dda4ebcf705b0fb07fe768b9f = $this->env->getExtension("native_profiler");
        $__internal_7e05d79d663487de2f45866708792f22bb06432dda4ebcf705b0fb07fe768b9f->enter($__internal_7e05d79d663487de2f45866708792f22bb06432dda4ebcf705b0fb07fe768b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_7e05d79d663487de2f45866708792f22bb06432dda4ebcf705b0fb07fe768b9f->leave($__internal_7e05d79d663487de2f45866708792f22bb06432dda4ebcf705b0fb07fe768b9f_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3fa5c51e25099e6417e7cb6239fc001c92155e687132bb7beb7a992f7e82109f = $this->env->getExtension("native_profiler");
        $__internal_3fa5c51e25099e6417e7cb6239fc001c92155e687132bb7beb7a992f7e82109f->enter($__internal_3fa5c51e25099e6417e7cb6239fc001c92155e687132bb7beb7a992f7e82109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_3fa5c51e25099e6417e7cb6239fc001c92155e687132bb7beb7a992f7e82109f->leave($__internal_3fa5c51e25099e6417e7cb6239fc001c92155e687132bb7beb7a992f7e82109f_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e29266756b35d15465217bc1fe6152229fb91d65993a080351e66beb71231f4c = $this->env->getExtension("native_profiler");
        $__internal_e29266756b35d15465217bc1fe6152229fb91d65993a080351e66beb71231f4c->enter($__internal_e29266756b35d15465217bc1fe6152229fb91d65993a080351e66beb71231f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class=\"sousMessageAcceuil\">
        <h4> Profils : </h4>
    </div>

    <div id='DivFormulaireAjoutProfil'>

        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un profil</span></legend>

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil")));
        echo "

            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSuppressionProfil'>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionProfil")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'errors');
        echo "

        <fieldset>

            <legend><span>Supprimer un profil</span></legend>

            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionProfil")));
        echo "

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_end');
        echo "

    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Feuilles de suivis : </h4>
    </div>

    <div class='DivAjoutFeuilleSuivi'>
        <form class='formulaireAjoutFeuilleSuivi'>
            <fieldset>
                <legend><span> Gestionnaire de feuilles de suivis </span></legend>
                <p> <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/feuillesSuivis', 'Gestionnaire de fichiers - Feuilles de suivis');\"> Ajout/Supression de feuilles de suivis </a> </p>
            </fieldset>
        </form>
    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Champs : </h4>
    </div>

    <div class='DivFormulaireAjoutFormulaire'>

        ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'form_start', array("attr" => array("class" => "formulaireAjoutFormulaire")));
        echo "
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un champ</span></legend>

            <p>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFormulaire"), "label" => "Nom :"));
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Nom", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutFormulaire")));
        echo "

                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFormulaire"), "label" => "Type de champ :"));
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutFormulaire")));
        echo "

                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "_token", array()), 'widget');
        echo "

                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionFormulaire'>

        ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionFormulaire")));
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'errors');
        echo "

        <fieldset>

            <legend><span>Supprimer un Champ</span></legend>

            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionFormulaire"), "label" => "Nom :"));
        echo "
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'errors');
        echo "
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionFormulaire")));
        echo "

            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "_token", array()), 'widget');
        echo "

            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionFormulaire", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 126
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'form_end');
        echo "

    </div>

";
        
        $__internal_e29266756b35d15465217bc1fe6152229fb91d65993a080351e66beb71231f4c->leave($__internal_e29266756b35d15465217bc1fe6152229fb91d65993a080351e66beb71231f4c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 126,  281 => 122,  276 => 120,  271 => 118,  267 => 117,  263 => 116,  254 => 110,  250 => 109,  241 => 103,  233 => 98,  228 => 96,  223 => 94,  219 => 93,  215 => 92,  210 => 90,  206 => 89,  202 => 88,  192 => 81,  188 => 80,  160 => 55,  153 => 51,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  122 => 38,  113 => 32,  106 => 28,  101 => 26,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Administration assistant d'affaires {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration assistant d'affaires{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Profils : </h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutProfil'>*/
/* */
/*         {{ form_start(formAjoutProfil, {'attr': {'class': 'formulaireAdministrationAjoutProfil'}}) }}*/
/*         {{ form_errors(formAjoutProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un profil</span></legend>*/
/* */
/*             {{ form_label(formAjoutProfil.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutProfil'}}) }}*/
/*             {{ form_errors(formAjoutProfil.Nom) }}*/
/*             {{ form_widget(formAjoutProfil.Nom, {'attr': {'class': 'textFormulaireAdministrationAjoutProfil'}}) }}*/
/* */
/*             {{ form_widget(formAjoutProfil._token) }}*/
/* */
/*             {{ form_widget(formAjoutProfil.Ajouter, {'attr': {'class': 'submitFormulaireAdministrationAjoutProfil', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutProfil) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireSuppressionProfil'>*/
/* */
/*         {{ form_start(formSuppresionProfil, {'attr': {'class': 'formulaireAdministrationSuppressionProfil'}}) }}*/
/*         {{ form_errors(formSuppresionProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Supprimer un profil</span></legend>*/
/* */
/*             {{ form_label(formSuppresionProfil.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationSuppressionProfil'}}) }}*/
/*             {{ form_errors(formSuppresionProfil.Nom) }}*/
/*             {{ form_widget(formSuppresionProfil.Nom, {'attr': {'class': 'selectFormulaireAdministrationSuppressionProfil'}}) }}*/
/* */
/*             {{ form_widget(formSuppresionProfil._token) }}*/
/* */
/*             {{ form_widget(formSuppresionProfil.Supprimer, {'attr': {'class': 'submitFormulaireAdministrationSuppressionProfil', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppresionProfil) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Feuilles de suivis : </h4>*/
/*     </div>*/
/* */
/*     <div class='DivAjoutFeuilleSuivi'>*/
/*         <form class='formulaireAjoutFeuilleSuivi'>*/
/*             <fieldset>*/
/*                 <legend><span> Gestionnaire de feuilles de suivis </span></legend>*/
/*                 <p> <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/feuillesSuivis', 'Gestionnaire de fichiers - Feuilles de suivis');"> Ajout/Supression de feuilles de suivis </a> </p>*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Champs : </h4>*/
/*     </div>*/
/* */
/*     <div class='DivFormulaireAjoutFormulaire'>*/
/* */
/*         {{ form_start(formAjoutFormulaire, {'attr': {'class': 'formulaireAjoutFormulaire'}}) }}*/
/*         {{ form_errors(formAjoutFormulaire) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un champ</span></legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutFormulaire.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAjoutFormulaire'}}) }}*/
/*                 {{ form_errors(formAjoutFormulaire.Nom) }}*/
/*                 {{ form_widget(formAjoutFormulaire.Nom, {'attr': {'class': 'textFormulaireAjoutFormulaire'}}) }}*/
/* */
/*                 {{ form_label(formAjoutFormulaire.Type, "Type de champ :", {'label_attr': {'class': 'labelFormulaireAjoutFormulaire'}}) }}*/
/*                 {{ form_errors(formAjoutFormulaire.Type) }}*/
/*                 {{ form_widget(formAjoutFormulaire.Type, {'attr': {'class': 'selectFormulaireAjoutFormulaire'}}) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire._token) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire.Ajouter, {'attr': {'class': 'submitFormulaireAjoutFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutFormulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionFormulaire'>*/
/* */
/*         {{ form_start(formSuppressionFormulaire, {'attr': {'class': 'formulaireAdministrationSuppressionFormulaire'}}) }}*/
/*         {{ form_errors(formSuppressionFormulaire) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Supprimer un Champ</span></legend>*/
/* */
/*             {{ form_label(formSuppressionFormulaire.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/*             {{ form_errors(formSuppressionFormulaire.Nom) }}*/
/*             {{ form_widget(formSuppressionFormulaire.Nom, {'attr': {'class': 'selectFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/* */
/*             {{ form_widget(formSuppressionFormulaire._token) }}*/
/* */
/*             {{ form_widget(formSuppressionFormulaire.Supprimer, {'attr': {'class': 'submitFormulaireAdministrationSuppressionFormulaire', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppressionFormulaire) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */