<?php

/* NoxIntranetCommunicationBundle:Externe:communicationExterne.html.twig */
class __TwigTemplate_6c0882b6035d6c04a94f3fc2beb84fbd24a78af965c3ffb05a5b1741b4444fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Externe:communicationExterne.html.twig", 1);
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
        $__internal_0c0821c0b6022e34d27f0e6f30c8a90c6c944479765e26967802d93cdc82886d = $this->env->getExtension("native_profiler");
        $__internal_0c0821c0b6022e34d27f0e6f30c8a90c6c944479765e26967802d93cdc82886d->enter($__internal_0c0821c0b6022e34d27f0e6f30c8a90c6c944479765e26967802d93cdc82886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Externe:communicationExterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0821c0b6022e34d27f0e6f30c8a90c6c944479765e26967802d93cdc82886d->leave($__internal_0c0821c0b6022e34d27f0e6f30c8a90c6c944479765e26967802d93cdc82886d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d4ee394f710b03c71db913ab2b894719a55aa34504873b6637f9f8a5a2671f22 = $this->env->getExtension("native_profiler");
        $__internal_d4ee394f710b03c71db913ab2b894719a55aa34504873b6637f9f8a5a2671f22->enter($__internal_d4ee394f710b03c71db913ab2b894719a55aa34504873b6637f9f8a5a2671f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication externe
";
        
        $__internal_d4ee394f710b03c71db913ab2b894719a55aa34504873b6637f9f8a5a2671f22->leave($__internal_d4ee394f710b03c71db913ab2b894719a55aa34504873b6637f9f8a5a2671f22_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_03a5239adbbc975c85aee14f4cce99ba62d5587e0bebfc1ac814d3f212ba0c7b = $this->env->getExtension("native_profiler");
        $__internal_03a5239adbbc975c85aee14f4cce99ba62d5587e0bebfc1ac814d3f212ba0c7b->enter($__internal_03a5239adbbc975c85aee14f4cce99ba62d5587e0bebfc1ac814d3f212ba0c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication externe";
        
        $__internal_03a5239adbbc975c85aee14f4cce99ba62d5587e0bebfc1ac814d3f212ba0c7b->leave($__internal_03a5239adbbc975c85aee14f4cce99ba62d5587e0bebfc1ac814d3f212ba0c7b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3538b37b6bac4ab511a8b18cdb7543b23390a6e1cba69b01e8ab602be6a57a44 = $this->env->getExtension("native_profiler");
        $__internal_3538b37b6bac4ab511a8b18cdb7543b23390a6e1cba69b01e8ab602be6a57a44->enter($__internal_3538b37b6bac4ab511a8b18cdb7543b23390a6e1cba69b01e8ab602be6a57a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport',this);\"> 
        <h4> Supports <img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id=\"sousMenuSupport\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelleLecture', 'Plaquette Institutionnelle');\"> Plaquettes institutionnelle </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpointLecture', 'Présentation Powerpoint');\"> Présentation Powerpoint </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetierLecture', 'Fiches Métier');\" > Fiches Métier </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffreLecture', 'Dossier type appel d\\'offre');\"> Dossier type appel d'offre </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVTypeLecture', 'CV Type');\"> CV Type </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersTypeLecture', 'Courriers Type');\"> Courriers Type </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEnteteLecture', 'Papier à entête');\"> Papier à entête </h5>
        </div>
    </div>

    <!-- A ajouter
    <div class=\"sousMessageAcceuil\" id='menuVideoInstitutionnelle' onclick=\"showSubMenu('#sousMenuVideoInstitutionnelle',this);\"> 
        <h4> Vidéo institutionnelle <img src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>
    
    <div id=\"sousMenuVideoInstitutionnelle\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Vidéo Institutionnelle </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Survol drone polygone Riviera </h5>
        </div>

    </div>
    -->

    <div class=\"sousMessageAcceuil\"> 
        <h4> NoxLetters </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresseLecture', 'Nox dans la presse');\"> Nox dans la presse </h4>
    </div>

    <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux',this);\"> 
        <h4> Nox sur les réseaux sociaux <img src='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
    </div>
    
    <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Facebook </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> LinkedIn </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Viadeo </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Youtube </h5>
        </div>

    </div>

    <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages',this);\"> 
        <h4> Banques d'images <img src='";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
    </div>
    
    <div id=\"sousMenuBanqueImages\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');\"> Logo Nox </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');\"> Celles du site internet </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');\"> Celles des supports </h5>
        </div>

    </div>

";
        
        $__internal_3538b37b6bac4ab511a8b18cdb7543b23390a6e1cba69b01e8ab602be6a57a44->leave($__internal_3538b37b6bac4ab511a8b18cdb7543b23390a6e1cba69b01e8ab602be6a57a44_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Externe:communicationExterne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 97,  143 => 73,  113 => 48,  72 => 12,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Communication externe*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication externe{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil" id='menuSupport' onclick="showSubMenu('#sousMenuSupport',this);"> */
/*         <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id="sousMenuSupport" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelleLecture', 'Plaquette Institutionnelle');"> Plaquettes institutionnelle </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpointLecture', 'Présentation Powerpoint');"> Présentation Powerpoint </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetierLecture', 'Fiches Métier');" > Fiches Métier </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffreLecture', 'Dossier type appel d\'offre');"> Dossier type appel d'offre </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVTypeLecture', 'CV Type');"> CV Type </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersTypeLecture', 'Courriers Type');"> Courriers Type </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEnteteLecture', 'Papier à entête');"> Papier à entête </h5>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- A ajouter*/
/*     <div class="sousMessageAcceuil" id='menuVideoInstitutionnelle' onclick="showSubMenu('#sousMenuVideoInstitutionnelle',this);"> */
/*         <h4> Vidéo institutionnelle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuVideoInstitutionnelle" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Vidéo Institutionnelle </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Survol drone polygone Riviera </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/*     -->*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4> NoxLetters </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresseLecture', 'Nox dans la presse');"> Nox dans la presse </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuReseauxSociaux' onclick="showSubMenu('#sousMenuReseauxSociaux',this);"> */
/*         <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuReseauxSociaux" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Facebook </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> LinkedIn </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Viadeo </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Youtube </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuBanqueImages' onclick="showSubMenu('#sousMenuBanqueImages',this);"> */
/*         <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuBanqueImages" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');"> Logo Nox </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');"> Celles du site internet </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');"> Celles des supports </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
