<?php

/* NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig */
class __TwigTemplate_0e72aa3f8d4d43cfbc8de327203ed18bc3e41564ca981ee6183da6675ae318f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig", 1);
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
        $__internal_cbe444288988bd9aa4fba1016b00f3685834bf81ed9f772dbd5de3b8e828c757 = $this->env->getExtension("native_profiler");
        $__internal_cbe444288988bd9aa4fba1016b00f3685834bf81ed9f772dbd5de3b8e828c757->enter($__internal_cbe444288988bd9aa4fba1016b00f3685834bf81ed9f772dbd5de3b8e828c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe444288988bd9aa4fba1016b00f3685834bf81ed9f772dbd5de3b8e828c757->leave($__internal_cbe444288988bd9aa4fba1016b00f3685834bf81ed9f772dbd5de3b8e828c757_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5cb2c3701f838cccfa3457e3c799089f7616c967487d9aee758c6147d242a68f = $this->env->getExtension("native_profiler");
        $__internal_5cb2c3701f838cccfa3457e3c799089f7616c967487d9aee758c6147d242a68f->enter($__internal_5cb2c3701f838cccfa3457e3c799089f7616c967487d9aee758c6147d242a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration serveurs
";
        
        $__internal_5cb2c3701f838cccfa3457e3c799089f7616c967487d9aee758c6147d242a68f->leave($__internal_5cb2c3701f838cccfa3457e3c799089f7616c967487d9aee758c6147d242a68f_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4225c78ef3af1a431c22b897ddff5957f3b8859926485b3ee4e93364a711d412 = $this->env->getExtension("native_profiler");
        $__internal_4225c78ef3af1a431c22b897ddff5957f3b8859926485b3ee4e93364a711d412->enter($__internal_4225c78ef3af1a431c22b897ddff5957f3b8859926485b3ee4e93364a711d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration serveurs";
        
        $__internal_4225c78ef3af1a431c22b897ddff5957f3b8859926485b3ee4e93364a711d412->leave($__internal_4225c78ef3af1a431c22b897ddff5957f3b8859926485b3ee4e93364a711d412_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_771bf03405621f778f67267f6b8239ffee4a325e9d9edae103841af21220b076 = $this->env->getExtension("native_profiler");
        $__internal_771bf03405621f778f67267f6b8239ffee4a325e9d9edae103841af21220b076->enter($__internal_771bf03405621f778f67267f6b8239ffee4a325e9d9edae103841af21220b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur Y:\\ avec le contenu du champ \"Lien vers le serveur\"";
        
        $__internal_771bf03405621f778f67267f6b8239ffee4a325e9d9edae103841af21220b076->leave($__internal_771bf03405621f778f67267f6b8239ffee4a325e9d9edae103841af21220b076_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9762364fa7583d682a9b26ec9c6cf2fef47582a3d8d2efae5b41eb018f2eb457 = $this->env->getExtension("native_profiler");
        $__internal_9762364fa7583d682a9b26ec9c6cf2fef47582a3d8d2efae5b41eb018f2eb457->enter($__internal_9762364fa7583d682a9b26ec9c6cf2fef47582a3d8d2efae5b41eb018f2eb457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Lien vers le serveur :"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 47
            echo "
                <tr>
                    <td> <p> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "lien", array()), "html", null, true);
            echo " </p>
                    </td>

                    <td> <a href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_serveur", array("id" => $this->getAttribute($context["serveur"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionServeurImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Delete-32.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </table>

    </div>

";
        
        $__internal_9762364fa7583d682a9b26ec9c6cf2fef47582a3d8d2efae5b41eb018f2eb457->leave($__internal_9762364fa7583d682a9b26ec9c6cf2fef47582a3d8d2efae5b41eb018f2eb457_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig";
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
/*     Administration serveurs*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration serveurs{% endblock %}*/
/* {% block sousMessageAccueil %}Le script connecte un lecteur Y:\ avec le contenu du champ "Lien vers le serveur"{% endblock %}*/
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
/*                 {{ form_label(form.lien, "Lien vers le serveur :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
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
/*             {% for serveur in serveurs %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ serveur.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ serveur.lien }} </p>*/
/*                     </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_suppression_serveur', {'id': serveur.id}) }}'> <img class="suppressionServeurImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Delete-32.png') }}'> </a> </td>*/
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