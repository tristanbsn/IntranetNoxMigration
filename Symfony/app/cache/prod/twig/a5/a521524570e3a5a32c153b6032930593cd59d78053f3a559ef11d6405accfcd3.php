<?php

/* @NoxIntranetAdministration/AdministrationImprimantes/administrationimprimantes.html.twig */
class __TwigTemplate_6caf466f278e547ca9545f3b5ba8f9fa3ed5c4af1c011f2f1519736c96434762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationImprimantes/administrationimprimantes.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo "    Administration imprimantes
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration imprimantes";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div id=\"divAdministrationAdmin\">

        <div id=\"creationAdmin\">
            <div id=\"creationAdminDiv\">

                ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireImprimante")));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Agence :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: Bron")));
        echo "


                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Nom de l'imprimante :"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "textFormulaireImprimante", "placeholder" => "ex: IMP-ANG-SS")));
        echo "

                <br />

                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Type :"));
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget', array("attr" => array("class" => "radioFormulaireImprimante")));
        echo "

                <br />

                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomReseau", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Nom imprimante réseau :"));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomReseau", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomReseau", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Ip :"));
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ip", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                <br />
                
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cheminPilote", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Chemin pilote :"));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cheminPilote", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cheminPilote", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLPR", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "File d'attente LPR :"));
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLPR", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileLPR", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireImprimante", "class" => "boutonFormulaire")));
        echo "

                ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

            </div>
        </div>

        <table>

            <tr>
                <td> Agence </td>
                <td> Nom </td>
                <td> Type </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imprimantes"]) ? $context["imprimantes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprimante"]) {
            // line 73
            echo "
                <tr>
                    <td> <p> ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "nom", array()), "html", null, true);
            echo " </p>
                    </td>
                    
                    <td> <p> ";
            // line 81
            if (($this->getAttribute($context["imprimante"], "type", array()) == "imp")) {
                echo " Imprimante ";
            } else {
                echo " Traceur ";
            }
            echo " </p> </td>

                    <td> <a href='";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_imprimantes_suppression", array("id" => $this->getAttribute($context["imprimante"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionImprimanteImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprimante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        </table>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationImprimantes/administrationimprimantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 87,  218 => 83,  209 => 81,  203 => 78,  197 => 75,  193 => 73,  189 => 72,  172 => 58,  167 => 56,  162 => 54,  157 => 52,  153 => 51,  149 => 50,  144 => 48,  140 => 47,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  116 => 38,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  72 => 21,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration imprimantes*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration imprimantes{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <div id="creationAdmin">*/
/*             <div id="creationAdminDiv">*/
/* */
/*                 {{ form_start(form, {'attr': {'class': 'formulaireImprimante'}}) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_label(form.agence, "Agence :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.agence) }}*/
/*                 {{ form_widget(form.agence, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: Bron'}}) }}*/
/* */
/* */
/*                 {{ form_label(form.nom, "Nom de l'imprimante :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.nom) }}*/
/*                 {{ form_widget(form.nom, {'attr': {'class': 'textFormulaireImprimante', 'placeholder': 'ex: IMP-ANG-SS'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.type, "Type :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.type) }}*/
/*                 {{ form_widget(form.type, {'attr': {'class': 'radioFormulaireImprimante'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.nomReseau, "Nom imprimante réseau :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur' }}) }}*/
/*                 {{ form_errors(form.nomReseau) }}*/
/*                 {{ form_widget(form.nomReseau, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 {{ form_label(form.ip, "Ip :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.ip) }}*/
/*                 {{ form_widget(form.ip, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 <br />*/
/*                 */
/*                 {{ form_label(form.cheminPilote, "Chemin pilote :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.cheminPilote) }}*/
/*                 {{ form_widget(form.cheminPilote, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 {{ form_label(form.fileLPR, "File d'attente LPR :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.fileLPR) }}*/
/*                 {{ form_widget(form.fileLPR, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 {{ form_widget(form.ajouter, {'attr': {'class': 'submitFormulaireImprimante', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*                 {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Agence </td>*/
/*                 <td> Nom </td>*/
/*                 <td> Type </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for imprimante in imprimantes %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ imprimante.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ imprimante.nom }} </p>*/
/*                     </td>*/
/*                     */
/*                     <td> <p> {% if imprimante.type == 'imp' %} Imprimante {% else %} Traceur {% endif %} </p> </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_administration_imprimantes_suppression', {'id': imprimante.id}) }}'> <img class="suppressionImprimanteImg" src='{{ asset('bundles/noxintranetadministration/images/Delete-48.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */