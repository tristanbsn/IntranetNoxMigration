<?php

/* @NoxIntranetAdministration/Administration/administrationUserDB.html.twig */
class __TwigTemplate_a1e82b97c55f7749162fc819267fb88f1f86ffa55bd9b47c7b81d19816b5ecda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/Administration/administrationUserDB.html.twig", 1);
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
        $__internal_9bf5dbd81a928c810da328ae766c6f69baf5d5ce08a30bda4e531264595053bc = $this->env->getExtension("native_profiler");
        $__internal_9bf5dbd81a928c810da328ae766c6f69baf5d5ce08a30bda4e531264595053bc->enter($__internal_9bf5dbd81a928c810da328ae766c6f69baf5d5ce08a30bda4e531264595053bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/Administration/administrationUserDB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf5dbd81a928c810da328ae766c6f69baf5d5ce08a30bda4e531264595053bc->leave($__internal_9bf5dbd81a928c810da328ae766c6f69baf5d5ce08a30bda4e531264595053bc_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d3e197cefd5cd16fe30885c67ff0f0170eb85258bf1e8d9835aca24e24a44575 = $this->env->getExtension("native_profiler");
        $__internal_d3e197cefd5cd16fe30885c67ff0f0170eb85258bf1e8d9835aca24e24a44575->enter($__internal_d3e197cefd5cd16fe30885c67ff0f0170eb85258bf1e8d9835aca24e24a44575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration DB
";
        
        $__internal_d3e197cefd5cd16fe30885c67ff0f0170eb85258bf1e8d9835aca24e24a44575->leave($__internal_d3e197cefd5cd16fe30885c67ff0f0170eb85258bf1e8d9835aca24e24a44575_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c4d46953428db26d7174972a48f64fa91814b11a031a3303cea4a40d6d139843 = $this->env->getExtension("native_profiler");
        $__internal_c4d46953428db26d7174972a48f64fa91814b11a031a3303cea4a40d6d139843->enter($__internal_c4d46953428db26d7174972a48f64fa91814b11a031a3303cea4a40d6d139843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration base de données utilisateurs";
        
        $__internal_c4d46953428db26d7174972a48f64fa91814b11a031a3303cea4a40d6d139843->leave($__internal_c4d46953428db26d7174972a48f64fa91814b11a031a3303cea4a40d6d139843_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_dcbdb69cafdae6758a84eb4e9f21decd582fd57fba50701b54302dde3b96578e = $this->env->getExtension("native_profiler");
        $__internal_dcbdb69cafdae6758a84eb4e9f21decd582fd57fba50701b54302dde3b96578e->enter($__internal_dcbdb69cafdae6758a84eb4e9f21decd582fd57fba50701b54302dde3b96578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        ";
        // line 13
        if ((array_key_exists("confirmation", $context) && ((isset($context["confirmation"]) ? $context["confirmation"] : $this->getContext($context, "confirmation")) == true))) {
            // line 14
            echo "
            <p> Voulez-vous mettre à jours la base de donnée utilisateur ? </p>
            
            <!-- Confirmer -->
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("nox_intranet_user_updateDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Confirmer</figcaption>
                </figure>
            </a>

            <!-- Annuler -->
            <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Annuler</figcaption>
                </figure>
            </a>

        ";
        } elseif ((        // line 41
array_key_exists("confirmationRestauration", $context) && ((isset($context["confirmationRestauration"]) ? $context["confirmationRestauration"] : $this->getContext($context, "confirmationRestauration")) == true))) {
            // line 42
            echo "            
            <p> Voulez-vous restaurer la base de donnée utilisateur ? </p>
            
            <!-- Confirmer -->
            <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("nox_intranet_restaurationBDDConfirmation");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Confirmer</figcaption>
                </figure>
            </a>

            <!-- Annuler -->
            <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Annuler</figcaption>
                </figure>
            </a>

        ";
        } else {
            // line 70
            echo "
            <!-- Mise à jour base de données utilisateurs -->
            <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("nox_intranet_user_verifupdateDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Mise à jour</figcaption>
                </figure>
            </a>

            <!-- Restauration des bases de données -->
            <a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("nox_intranet_restaurationBDD");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Restauration BDD</figcaption>
                </figure>
            </a>

            <!-- Sauvegarde des bases de données -->
            <a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("nox_intranet_sauvegardeBDD");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Sauvegarde BDD</figcaption>
                </figure>
            </a>

        ";
        }
        // line 108
        echo "
    </div>

    ";
        // line 111
        if ((array_key_exists("ajout", $context) && ((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")) == true))) {
            // line 112
            echo "
        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["outputs"]) ? $context["outputs"] : $this->getContext($context, "outputs")));
            foreach ($context['_seq'] as $context["_key"] => $context["output"]) {
                // line 114
                echo "
            ";
                // line 115
                echo $context["output"];
                echo " 

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['output'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
    ";
        }
        // line 120
        echo "

";
        
        $__internal_dcbdb69cafdae6758a84eb4e9f21decd582fd57fba50701b54302dde3b96578e->leave($__internal_dcbdb69cafdae6758a84eb4e9f21decd582fd57fba50701b54302dde3b96578e_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/Administration/administrationUserDB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 120,  286 => 118,  277 => 115,  274 => 114,  270 => 113,  267 => 112,  265 => 111,  260 => 108,  250 => 101,  246 => 100,  242 => 99,  236 => 96,  226 => 89,  222 => 88,  218 => 87,  212 => 84,  202 => 77,  198 => 76,  194 => 75,  188 => 72,  184 => 70,  174 => 63,  170 => 62,  166 => 61,  160 => 58,  150 => 51,  146 => 50,  142 => 49,  136 => 46,  130 => 42,  128 => 41,  119 => 35,  115 => 34,  111 => 33,  105 => 30,  95 => 23,  91 => 22,  87 => 21,  81 => 18,  75 => 14,  73 => 13,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration DB*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration base de données utilisateurs{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         {% if confirmation is defined and confirmation == true %}*/
/* */
/*             <p> Voulez-vous mettre à jours la base de donnée utilisateur ? </p>*/
/*             */
/*             <!-- Confirmer -->*/
/*             <a href="{{ path('nox_intranet_user_updateDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Confirmer</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Annuler -->*/
/*             <a href="{{ path('nox_intranet_administration_userDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Annuler</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% elseif confirmationRestauration is defined and confirmationRestauration == true %}*/
/*             */
/*             <p> Voulez-vous restaurer la base de donnée utilisateur ? </p>*/
/*             */
/*             <!-- Confirmer -->*/
/*             <a href="{{ path('nox_intranet_restaurationBDDConfirmation') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Confirmer</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Annuler -->*/
/*             <a href="{{ path('nox_intranet_administration_userDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Annuler</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% else %}*/
/* */
/*             <!-- Mise à jour base de données utilisateurs -->*/
/*             <a href="{{ path('nox_intranet_user_verifupdateDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Mise à jour</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Restauration des bases de données -->*/
/*             <a href="{{ path('nox_intranet_restaurationBDD') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Find-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Find-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Find-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Restauration BDD</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Sauvegarde des bases de données -->*/
/*             <a href="{{ path('nox_intranet_sauvegardeBDD') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Copy-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Copy-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Copy-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Sauvegarde BDD</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% if ajout is defined and ajout == true %}*/
/* */
/*         {% for output in outputs %}*/
/* */
/*             {{ output|raw }} */
/* */
/*         {% endfor %}*/
/* */
/*     {% endif %}*/
/* */
/* */
/* {% endblock %}*/