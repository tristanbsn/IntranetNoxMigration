<?php

/* NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig */
class __TwigTemplate_8412099ba0554766dcdd9a4c9e65084b9289ebf8bc9941c9b641c184fef6668a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig", 1);
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
        $__internal_68d866b2bf4515b8153c26247425c8c2407c574eaa274a89d67718a0eb7cadce = $this->env->getExtension("native_profiler");
        $__internal_68d866b2bf4515b8153c26247425c8c2407c574eaa274a89d67718a0eb7cadce->enter($__internal_68d866b2bf4515b8153c26247425c8c2407c574eaa274a89d67718a0eb7cadce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d866b2bf4515b8153c26247425c8c2407c574eaa274a89d67718a0eb7cadce->leave($__internal_68d866b2bf4515b8153c26247425c8c2407c574eaa274a89d67718a0eb7cadce_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_dc1bf79875bdab0c591cafecb54dc2e547ed002951a2cadfd3f40993ada1c974 = $this->env->getExtension("native_profiler");
        $__internal_dc1bf79875bdab0c591cafecb54dc2e547ed002951a2cadfd3f40993ada1c974->enter($__internal_dc1bf79875bdab0c591cafecb54dc2e547ed002951a2cadfd3f40993ada1c974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Communication ";
        
        $__internal_dc1bf79875bdab0c591cafecb54dc2e547ed002951a2cadfd3f40993ada1c974->leave($__internal_dc1bf79875bdab0c591cafecb54dc2e547ed002951a2cadfd3f40993ada1c974_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a5d5667149901b4f92b328feffc2180133b0ac3b60ca97f6a64f625abd5d4673 = $this->env->getExtension("native_profiler");
        $__internal_a5d5667149901b4f92b328feffc2180133b0ac3b60ca97f6a64f625abd5d4673->enter($__internal_a5d5667149901b4f92b328feffc2180133b0ac3b60ca97f6a64f625abd5d4673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication";
        
        $__internal_a5d5667149901b4f92b328feffc2180133b0ac3b60ca97f6a64f625abd5d4673->leave($__internal_a5d5667149901b4f92b328feffc2180133b0ac3b60ca97f6a64f625abd5d4673_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f10186e79980491a2730bf9ab1175d7c67697a70824ed03f0ce2ee8be6f6f2ee = $this->env->getExtension("native_profiler");
        $__internal_f10186e79980491a2730bf9ab1175d7c67697a70824ed03f0ce2ee8be6f6f2ee->enter($__internal_f10186e79980491a2730bf9ab1175d7c67697a70824ed03f0ce2ee8be6f6f2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuExterne' class='menu'>
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='";
        // line 18
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
        -->

        <!-- Video Institutionnelle (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuVideoInstitutionnelle' onclick=\"showSubMenu('#sousMenuVideoInstitutionnelle', this);\"> 
            <h4> Vidéo institutionnelle <img src='";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
        </div>

        <div id=\"sousMenuVideoInstitutionnelle\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/watch?v=b3RqpsYbx04' target='_blank'> <h5> Vidéo Institutionnelle </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/watch?v=CtlxttbjFsI' target='_blank'> <h5> Survol drone polygone Riviera </h5> </a>
            </div>

        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxLetters", "dossier" => "NOX Letters", "config" => "noxLetters")), "html", null, true);
        echo "'> <h4> NoxLetters </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Nox dans la presse </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux', this);\"> 
            <h4> Nox sur les réseaux sociaux <img src='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/LinkedIn.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Viadeo.jpg"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/YouTube.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Youtube </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            ";
        // line 109
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 
                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNox', 'Logo Nox');\"> Logo Nox </h5>
                </div>

                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternet', 'Celles du site internet');\"> Celles du site internet </h5>
                </div>

                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupports', 'Celles des supports');\"> Celles des supports </h5>
                </div>
            ";
        } else {
            // line 122
            echo "                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');\"> Logo Nox </h5>
                </div>

                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');\"> Celles du site internet </h5>
                </div>

                <div class=\"sousSousMessageAcceuil\"> 
                    <h5 onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');\"> Celles des supports </h5>
                </div>
            ";
        }
        // line 134
        echo "
        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Trombinoscope", "dossier" => "Trombinoscope", "config" => "trombinoscope")), "html", null, true);
        echo "'><h4> Trombinoscope </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeStrategique", "dossier" => "Organigramme Stratégique", "config" => "organigrammeStrategique")), "html", null, true);
        echo "'> <h5> Organigramme Stratégique </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeFonctionnel", "dossier" => "Organigramme Fonctionnel", "config" => "organigrammeFonctionnel")), "html", null, true);
        echo "'> <h5> Organigramme Fonctionnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeAgence", "dossier" => "Organigramme Agence", "config" => "organigrammeAgence")), "html", null, true);
        echo "'> <h5> Organigramme Agence </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/AnnuaireAgences", "dossier" => "Annuaire Agences", "config" => "annuaireAgences")), "html", null, true);
        echo "'> <h4> Annuaire Agences </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/NoxNews", "dossier" => "NOX News", "config" => "noxNews")), "html", null, true);
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <!--
        <div class=\"sousMessageAcceuil\">
            <a href='";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CE", "dossier" => "CE", "config" => "CE")), "html", null, true);
        echo "'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CHSCT", "dossier" => "CHSCT", "config" => "CHSCT")), "html", null, true);
        echo "'> <h4> CHSCT </h4> </a>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/MailingInterne", "dossier" => "Mailing Interne", "config" => "mailingInterne")), "html", null, true);
        echo "'><h4> Mailing Interne </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuVieDeLentreprise' onclick=\"showSubMenu('#sousMenuVieDeLentreprise', this);\"> 
            <h4> Vie de l'entreprise <img src='";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuVieDeLentreprise\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NotePersonnel", "dossier" => "Note au personnel", "config" => "notePersonnel")), "html", null, true);
        echo "'> <h5> Note au personnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/OrganigrammesSocietes", "dossier" => "Organigrammes sociétés", "config" => "organigrammesSocietes")), "html", null, true);
        echo "'> <h5> Organigrammes sociétés </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/OrganigrammesHierarchique", "dossier" => "Organigrammes hiérarchique", "config" => "organigrammesHierarchique")), "html", null, true);
        echo "'> <h5> Organigrammes Hiérarchique </h5> </a>
            </div>

        </div>

    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/NoxALaConquete", "dossier" => "NOX à la conquête", "config" => "noxALaConquete")), "html", null, true);
        echo "'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/IlYAForcementPlusSimple", "dossier" => "Il y a forcément plus simple", "config" => "ilYAForcementPlusSimple")), "html", null, true);
        echo "'> <h4> Il y a forcément plus simple </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/NoxFournisseurDeTalents", "dossier" => "NOX fournisseur de talents", "config" => "noxFournisseurDeTalents")), "html", null, true);
        echo "'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/Nos5Valeurs", "dossier" => "Nos 5 valeurs", "config" => "nos5Valeurs")), "html", null, true);
        echo "'> <h4> Nos 5 valeurs </h4> </a>
        </div>
    </div>
    <!-- Fin Marketing -->

    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <!-- SI -->
    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "SI/NewsSI", "dossier" => "News SI", "config" => "newsSI")), "html", null, true);
        echo "'> <h4>  News SI </h4> </a>
        </div>
    </div>
    <!-- FIn SI -->

</div>

";
        
        $__internal_f10186e79980491a2730bf9ab1175d7c67697a70824ed03f0ce2ee8be6f6f2ee->leave($__internal_f10186e79980491a2730bf9ab1175d7c67697a70824ed03f0ce2ee8be6f6f2ee_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 245,  417 => 239,  408 => 233,  401 => 229,  394 => 225,  387 => 221,  377 => 216,  364 => 206,  357 => 202,  350 => 198,  339 => 192,  332 => 188,  324 => 183,  317 => 179,  309 => 174,  302 => 170,  293 => 164,  286 => 160,  279 => 156,  268 => 150,  261 => 146,  251 => 141,  242 => 134,  228 => 122,  212 => 109,  202 => 104,  193 => 98,  186 => 94,  179 => 90,  172 => 86,  161 => 80,  154 => 76,  147 => 72,  125 => 55,  83 => 18,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Communication {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- Externe -->*/
/*     <div class="surMessageAcceuil" id='menuExterne' onclick="showSubMenu2('#sousMenuExterne', this);"> */
/*         <h4> Externe <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/* */
/*     <div id='sousMenuExterne' class='menu'>*/
/*         <!-- Support (a ajouter)*/
/*         <div class="sousMessageAcceuil" id='menuSupport' onclick="showSubMenu('#sousMenuSupport', this);"> */
/*             <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuSupport" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelleLecture', 'Plaquette Institutionnelle');"> Plaquettes institutionnelle </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpointLecture', 'Présentation Powerpoint');"> Présentation Powerpoint </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetierLecture', 'Fiches Métier');" > Fiches Métier </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffreLecture', 'Dossier type appel d\'offre');"> Dossier type appel d'offre </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVTypeLecture', 'CV Type');"> CV Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersTypeLecture', 'Courriers Type');"> Courriers Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEnteteLecture', 'Papier à entête');"> Papier à entête </h5>*/
/*             </div>*/
/*         </div>*/
/*         -->*/
/* */
/*         <!-- Video Institutionnelle (a ajouter)*/
/*         <div class="sousMessageAcceuil" id='menuVideoInstitutionnelle' onclick="showSubMenu('#sousMenuVideoInstitutionnelle', this);"> */
/*             <h4> Vidéo institutionnelle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuVideoInstitutionnelle" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/watch?v=b3RqpsYbx04' target='_blank'> <h5> Vidéo Institutionnelle </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/watch?v=CtlxttbjFsI' target='_blank'> <h5> Survol drone polygone Riviera </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/*         -->*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxLetters', 'dossier': 'NOX Letters', 'config': 'noxLetters' }) }}'> <h4> NoxLetters </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Nox dans la presse </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuReseauxSociaux' onclick="showSubMenu('#sousMenuReseauxSociaux', this);"> */
/*             <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuReseauxSociaux" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/Facebook.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Facebook </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/LinkedIn.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> LinkedIn </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/Viadeo.jpg') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Viadeo </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/YouTube.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Youtube </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuBanqueImages' onclick="showSubMenu('#sousMenuBanqueImages', this);"> */
/*             <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuBanqueImages" class='sousMenu'>*/
/* */
/*             {% if is_granted('ROLE_COMMUNICATION') %} */
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNox', 'Logo Nox');"> Logo Nox </h5>*/
/*                 </div>*/
/* */
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternet', 'Celles du site internet');"> Celles du site internet </h5>*/
/*                 </div>*/
/* */
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupports', 'Celles des supports');"> Celles des supports </h5>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');"> Logo Nox </h5>*/
/*                 </div>*/
/* */
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');"> Celles du site internet </h5>*/
/*                 </div>*/
/* */
/*                 <div class="sousSousMessageAcceuil"> */
/*                     <h5 onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');"> Celles des supports </h5>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- Fin Externe -->*/
/* */
/*     <!-- Interne -->*/
/*     <div class="surMessageAcceuil" id='menuInterne' onclick="showSubMenu2('#sousMenuInterne', this);"> */
/*         <h4> Interne <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuInterne' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Trombinoscope', 'dossier': 'Trombinoscope', 'config': 'trombinoscope' }) }}'><h4> Trombinoscope </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes', this);"> */
/*             <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeStrategique', 'dossier': 'Organigramme Stratégique', 'config': 'organigrammeStrategique' }) }}'> <h5> Organigramme Stratégique </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeFonctionnel', 'dossier': 'Organigramme Fonctionnel', 'config': 'organigrammeFonctionnel' }) }}'> <h5> Organigramme Fonctionnel </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeAgence', 'dossier': 'Organigramme Agence', 'config': 'organigrammeAgence' }) }}'> <h5> Organigramme Agence </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/AnnuaireAgences', 'dossier': 'Annuaire Agences', 'config': 'annuaireAgences' }) }}'> <h4> Annuaire Agences </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/NoxNews', 'dossier': 'NOX News', 'config': 'noxNews' }) }}'> <h4> NoxNews </h4> </a>*/
/*         </div>*/
/* */
/*         <!--*/
/*         <div class="sousMessageAcceuil">*/
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CE', 'dossier': 'CE', 'config': 'CE' }) }}'> <h4> CE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CHSCT', 'dossier': 'CHSCT', 'config': 'CHSCT' }) }}'> <h4> CHSCT </h4> </a>*/
/*         </div>*/
/*         -->*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/MailingInterne', 'dossier': 'Mailing Interne', 'config': 'mailingInterne' }) }}'><h4> Mailing Interne </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuVieDeLentreprise' onclick="showSubMenu('#sousMenuVieDeLentreprise', this);"> */
/*             <h4> Vie de l'entreprise <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuVieDeLentreprise" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/NotePersonnel', 'dossier': 'Note au personnel', 'config': 'notePersonnel' }) }}'> <h5> Note au personnel </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/OrganigrammesSocietes', 'dossier': 'Organigrammes sociétés', 'config': 'organigrammesSocietes' }) }}'> <h5> Organigrammes sociétés </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/OrganigrammesHierarchique', 'dossier': 'Organigrammes hiérarchique', 'config': 'organigrammesHierarchique' }) }}'> <h5> Organigrammes Hiérarchique </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- Fin Interne -->*/
/* */
/*     <!-- Marketing -->*/
/*     <div class="surMessageAcceuil" id='menuMarketing' onclick="showSubMenu2('#sousMenuMarketing', this);"> */
/*         <h4> Marketing <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuMarketing' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/NoxALaConquete', 'dossier': 'NOX à la conquête', 'config': 'noxALaConquete' }) }}'> <h4> NOX à la conquête </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/IlYAForcementPlusSimple', 'dossier': 'Il y a forcément plus simple', 'config': 'ilYAForcementPlusSimple' }) }}'> <h4> Il y a forcément plus simple </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/NoxFournisseurDeTalents', 'dossier': 'NOX fournisseur de talents', 'config': 'noxFournisseurDeTalents' }) }}'> <h4> NOX fournisseur de talents </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/Nos5Valeurs', 'dossier': 'Nos 5 valeurs', 'config': 'nos5Valeurs' }) }}'> <h4> Nos 5 valeurs </h4> </a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Fin Marketing -->*/
/* */
/*     <div class="surMessageAcceuil" id='menuSI' onclick="showSubMenu2('#sousMenuSI', this);"> */
/*         <h4> SI <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <!-- SI -->*/
/*     <div id='sousMenuSI' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'SI/NewsSI', 'dossier': 'News SI', 'config': 'newsSI' }) }}'> <h4>  News SI </h4> </a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- FIn SI -->*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
