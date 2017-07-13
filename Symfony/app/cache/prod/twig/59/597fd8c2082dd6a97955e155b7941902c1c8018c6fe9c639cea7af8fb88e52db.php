<?php

/* NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig */
class __TwigTemplate_4298eff46db34d797e485c158eacc1136b9e1fc7f38892382f30e13aab0a7e18 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Communication ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Communication";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuExterne' class='menu'>
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxLetters", "dossier" => "NOX Letters", "config" => "noxLetters")), "html", null, true);
        echo "'> <h4> NoxLetters </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Nox dans la presse </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/PlaquettesInstitutionnelle", "dossier" => "Plaquettes institutionnelle", "config" => "plaquettesInstitutionnelle")), "html", null, true);
        echo "'> <h4> Plaquettes institutionnelles </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux', this);\"> 
            <h4> Nox sur les réseaux sociaux <img src='";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/Facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/LinkedIn.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/Viadeo.jpg"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/YouTube.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Youtube </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/logoNox", "dossier" => "Logo Nox", "config" => "logoNox")), "html", null, true);
        echo "'> <h5> Logo Nox </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDuSiteInternet", "dossier" => "Celles du site internet", "config" => "cellesDuSiteInternet")), "html", null, true);
        echo "'> <h5> Celles du site internet </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDesSupports", "dossier" => "Celles des supports", "config" => "cellesDesSupports")), "html", null, true);
        echo "'> <h5> Celles des supports </h5> </a>
            </div>

        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Trombinoscope", "dossier" => "Trombinoscope", "config" => "trombinoscope")), "html", null, true);
        echo "'><h4> Trombinoscope </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeStrategique", "dossier" => "Organigramme stratégique", "config" => "organigrammeStrategique")), "html", null, true);
        echo "'> <h5> Organigramme stratégique </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeFonctionnel", "dossier" => "Organigramme fonctionnel", "config" => "organigrammeFonctionnel")), "html", null, true);
        echo "'> <h5> Organigramme fonctionnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeAgence", "dossier" => "Organigramme agence", "config" => "organigrammeAgence")), "html", null, true);
        echo "'> <h5> Organigramme agence </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammesSocietes", "dossier" => "Organigrammes sociétés", "config" => "organigrammesSocietes")), "html", null, true);
        echo "'> <h5> Organigrammes sociétés </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/AnnuaireAgences", "dossier" => "Annuaire Agences", "config" => "annuaireAgences")), "html", null, true);
        echo "'> <h4> Annuaire Agences </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/NoxNews", "dossier" => "NOX News", "config" => "noxNews")), "html", null, true);
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/LeMoniteur", "dossier" => "Le moniteur", "config" => "leMoniteur")), "html", null, true);
        echo "'> <h4> Le moniteur </h4> </a>
        </div>

        <!--
        <div class=\"sousMessageAcceuil\">
            <a href='";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CE", "dossier" => "CE", "config" => "CE")), "html", null, true);
        echo "'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CHSCT", "dossier" => "CHSCT", "config" => "CHSCT")), "html", null, true);
        echo "'> <h4> CHSCT </h4> </a>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/MailingInterne", "dossier" => "Mailing Interne", "config" => "mailingInterne")), "html", null, true);
        echo "'><h4> Mailing Interne </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuVieDeLentreprise' onclick=\"showSubMenu('#sousMenuVieDeLentreprise', this);\"> 
            <h4> Vie de l'entreprise <img src='";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuVieDeLentreprise\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NotePersonnel", "dossier" => "Note au personnel", "config" => "notePersonnel")), "html", null, true);
        echo "'> <h5> Notes au personnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/PosteAPourvoir", "dossier" => "Poste à pourvoir", "config" => "posteAPourvoir")), "html", null, true);
        echo "'> <h5> Postes à pourvoir </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NominationOrganisation", "dossier" => "Nomination &#47; Organisation", "config" => "nominationOrganisation")), "html", null, true);
        echo "'> <h5> Nominations / organisation </h5> </a>
            </div>

        </div>

    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/NoxALaConquete", "dossier" => "NOX à la conquête", "config" => "noxALaConquete")), "html", null, true);
        echo "'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/ilYAForcementPlusSimple", "dossier" => "Il y a forcément plus simple", "config" => "ilYAForcementPlusSimple")), "html", null, true);
        echo "'> <h4> Il y a forcément plus simple </h4> </a>
        </div>


        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/noxFournisseurDeTalents", "dossier" => "NOX fournisseur de talents", "config" => "noxFournisseurDeTalents")), "html", null, true);
        echo "'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/nos5Valeurs", "dossier" => "Nos 5 valeurs", "config" => "nos5Valeurs")), "html", null, true);
        echo "'> <h4> Nos 5 valeurs </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/BuildYourFuture", "dossier" => "Build your future", "config" => "buildYourFuture")), "html", null, true);
        echo "'> <h4> Build your future </h4> </a>
        </div>

    </div>
    <!-- Fin Marketing -->

    <!-- SI -->
    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "SI/NewsSI", "dossier" => "News SI", "config" => "newsSI")), "html", null, true);
        echo "'> <h4> News SI </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_communication_bim");
        echo "'> <h4> BIM </h4> </a>
        </div>
    </div>
    <!-- Fin SI -->

    <!-- BIM -->
    <div class=\"surMessageAcceuil\" id='menuBIM' onclick=\"showSubMenu2('#sousMenuBIM', this);\"> 
        <h4> BIM <img src='";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuBIM' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Communication", "dossier" => "Communication", "config" => "bimCommunication", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Communication </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Formation", "dossier" => "Formation", "config" => "bimFormation", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Formation </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Notices", "dossier" => "Notices", "config" => "bimNotices", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Notices </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Protocole", "dossier" => "Protocole", "config" => "bimProtocole", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Protocole </h4> </a>
        </div>
    </div>

    <!-- Fin BIM -->

</div>

";
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
        return array (  470 => 274,  464 => 271,  458 => 268,  452 => 265,  442 => 260,  432 => 253,  426 => 250,  416 => 245,  405 => 237,  398 => 233,  391 => 229,  383 => 224,  376 => 220,  365 => 214,  352 => 204,  345 => 200,  338 => 196,  327 => 190,  320 => 186,  312 => 181,  305 => 177,  297 => 172,  290 => 168,  283 => 164,  274 => 158,  267 => 154,  260 => 150,  253 => 146,  242 => 140,  235 => 136,  225 => 131,  213 => 122,  206 => 118,  199 => 114,  188 => 108,  179 => 102,  172 => 98,  165 => 94,  158 => 90,  147 => 84,  140 => 80,  133 => 76,  126 => 72,  104 => 55,  62 => 18,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\CommunicationBundle/Resources/views/Accueil/accueilCommunication.html.twig");
    }
}