<?php

/* @NoxIntranetAdministration/AdministrationArchives/accueilarchives.html.twig */
class __TwigTemplate_5a78275b25771f3c21c466b532a2b126e63cae0b3a11613dbd752628deb932a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationArchives/accueilarchives.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d309deecd9bc41f4a285160805e707a48a3943669e9d46dd1fcd755e126a159b = $this->env->getExtension("native_profiler");
        $__internal_d309deecd9bc41f4a285160805e707a48a3943669e9d46dd1fcd755e126a159b->enter($__internal_d309deecd9bc41f4a285160805e707a48a3943669e9d46dd1fcd755e126a159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationArchives/accueilarchives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d309deecd9bc41f4a285160805e707a48a3943669e9d46dd1fcd755e126a159b->leave($__internal_d309deecd9bc41f4a285160805e707a48a3943669e9d46dd1fcd755e126a159b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_44fc7db5065d0f1ec6bce49d336f6164df38c8c98b7dd62c298e8011d046d053 = $this->env->getExtension("native_profiler");
        $__internal_44fc7db5065d0f1ec6bce49d336f6164df38c8c98b7dd62c298e8011d046d053->enter($__internal_44fc7db5065d0f1ec6bce49d336f6164df38c8c98b7dd62c298e8011d046d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration archives
";
        
        $__internal_44fc7db5065d0f1ec6bce49d336f6164df38c8c98b7dd62c298e8011d046d053->leave($__internal_44fc7db5065d0f1ec6bce49d336f6164df38c8c98b7dd62c298e8011d046d053_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_7713cbb28405c8d4fbe3073ddfb662b7fb5447467fb5ab2080a7bcd96cb87775 = $this->env->getExtension("native_profiler");
        $__internal_7713cbb28405c8d4fbe3073ddfb662b7fb5447467fb5ab2080a7bcd96cb87775->enter($__internal_7713cbb28405c8d4fbe3073ddfb662b7fb5447467fb5ab2080a7bcd96cb87775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration archives";
        
        $__internal_7713cbb28405c8d4fbe3073ddfb662b7fb5447467fb5ab2080a7bcd96cb87775->leave($__internal_7713cbb28405c8d4fbe3073ddfb662b7fb5447467fb5ab2080a7bcd96cb87775_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_671f6e9ccac0b43d2ec8a2951737f7507bba73b5c220c3d5751a6e1486fc0a6f = $this->env->getExtension("native_profiler");
        $__internal_671f6e9ccac0b43d2ec8a2951737f7507bba73b5c220c3d5751a6e1486fc0a6f->enter($__internal_671f6e9ccac0b43d2ec8a2951737f7507bba73b5c220c3d5751a6e1486fc0a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur R:\\ avec le contenu du champ \"Lien vers l'archive\"";
        
        $__internal_671f6e9ccac0b43d2ec8a2951737f7507bba73b5c220c3d5751a6e1486fc0a6f->leave($__internal_671f6e9ccac0b43d2ec8a2951737f7507bba73b5c220c3d5751a6e1486fc0a6f_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cca723962aefacc97c6b3bbdc91785473ec9c1cb734620d5a03d7e85af2ef6ae = $this->env->getExtension("native_profiler");
        $__internal_cca723962aefacc97c6b3bbdc91785473ec9c1cb734620d5a03d7e85af2ef6ae->enter($__internal_cca723962aefacc97c6b3bbdc91785473ec9c1cb734620d5a03d7e85af2ef6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 11
        echo "
    <div id=\"divAdministrationAdmin\">

        <div id=\"creationAdmin\">
            <div id=\"creationAdminDiv\">

                ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireArchive")));
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Agence :"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: Bron")));
        echo "

                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Lien vers l'archive :"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: \\\\192.168.35.210\\share\\arch_agence\\Bron")));
        echo "


                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireArchive", "class" => "boutonFormulaire")));
        echo "

                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>

        <table>

            <tr>
                <td> Agence </td>
                <td> Lien </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archives"]) ? $context["archives"] : $this->getContext($context, "archives")));
        foreach ($context['_seq'] as $context["_key"] => $context["archive"]) {
            // line 47
            echo "
                <tr>
                    <td> <p> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["archive"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["archive"], "lien", array()), "html", null, true);
            echo " </p>
                    </td>

                    <td> <a href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_archive", array("id" => $this->getAttribute($context["archive"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionArchiveImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </table>

    </div>

";
        
        $__internal_cca723962aefacc97c6b3bbdc91785473ec9c1cb734620d5a03d7e85af2ef6ae->leave($__internal_cca723962aefacc97c6b3bbdc91785473ec9c1cb734620d5a03d7e85af2ef6ae_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationArchives/accueilarchives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 59,  171 => 55,  165 => 52,  159 => 49,  155 => 47,  151 => 46,  135 => 33,  130 => 31,  125 => 29,  119 => 26,  115 => 25,  111 => 24,  106 => 22,  102 => 21,  98 => 20,  93 => 18,  89 => 17,  81 => 11,  75 => 10,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration archives{% endblock %}*/
/* {% block sousMessageAccueil %}Le script connecte un lecteur R:\ avec le contenu du champ "Lien vers l'archive"{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <div id="creationAdmin">*/
/*             <div id="creationAdminDiv">*/
/* */
/*                 {{ form_start(form, {'attr': {'class': 'formulaireArchive'}}) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_label(form.agence, "Agence :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
/*                 {{ form_errors(form.agence) }}*/
/*                 {{ form_widget(form.agence, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: Bron'}}) }}*/
/* */
/*                 {{ form_label(form.lien, "Lien vers l'archive :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
/*                 {{ form_errors(form.lien) }}*/
/*                 {{ form_widget(form.lien, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: \\\\192.168.35.210\\share\\arch_agence\\Bron'}}) }}*/
/* */
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 {{ form_widget(form.ajouter, {'attr': {'class': 'submitFormulaireArchive', 'class': 'boutonFormulaire' }}) }}*/
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
/*                 <td> Lien </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for archive in archives %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ archive.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ archive.lien }} </p>*/
/*                     </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_suppression_archive', {'id': archive.id}) }}'> <img class="suppressionArchiveImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Delete-48.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */