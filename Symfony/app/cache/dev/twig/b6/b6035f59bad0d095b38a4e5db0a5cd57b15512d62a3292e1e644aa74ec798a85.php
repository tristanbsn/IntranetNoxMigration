<?php

/* ::layout.html.twig */
class __TwigTemplate_95f8178a4610fb843c72e02e4b396b1b2a3d4d77bd979723f59efaf2e80315d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'style' => array($this, 'block_style'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3521bb7f3c595497d5c03c0629d8f58e80aacc53c0ac71dbdb5edeb869a1227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3521bb7f3c595497d5c03c0629d8f58e80aacc53c0ac71dbdb5edeb869a1227->enter($__internal_d3521bb7f3c595497d5c03c0629d8f58e80aacc53c0ac71dbdb5edeb869a1227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"utf-8\" />
        <title> Groupe-Nox / ";
        // line 7
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/js.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc3b92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fc3b92b_style_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "fc3b92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc3b92b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fc3b92b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/Symfony/web/favicon.ico\" />

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }

            #alert {
                background-image: url(";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/AccueilIntranetBackground.png"), "html", null, true);
        echo ");
                background-position: center; 
                background-repeat: no-repeat;
                background-size: 100%;
            }


        </style>
        ";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 38
        echo "    </head>

    <body onload=\"menuAnimation();\">

        <header>

            <div style=\"border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;\"> <a style=\"cursor: pointer; font-size: 0.85vw;\" onclick=\"\$(function () {
                        \$('#dialog').dialog({width: 970, height: 600});
                    });\"> Plan du site <br /><img style=\"width: 10%;\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/Map-32.png"), "html", null, true);
        echo "\" alt=\"Accès au plan de l'intranet\" onmousedown=\"return false;\"> </a> 
            </div><!-- 
            
            --><div id =\"bandeau\">  
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
        echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            ";
        // line 53
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none; text-align: center;\">
            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/PlanIntranet.png"), "html", null, true);
        echo "\" alt=\"Plan de l'intranet\" style=\"width: 100%; vertical-align: middle; text-align: center;\">
        </div>

        <div id=\"bar_menu\">

            <div id=\"EmailHelpdesk\">
                <a href=\"mailto:helpdesk@groupe-nox.com\"> Une question ? </a>
            </div><!--
    
            --><div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
        echo "\" alt=\"Logo Recherche\" onmousedown=\"return false;\">
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this)
                                            ;\"> Rechercher 
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 92
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && (((((((((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FAQ")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CE")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LIENS")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_QUALITE")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RH")))) {
            // line 93
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PUBLICATEUR")) {
            // line 95
            echo "                    <p> Publication </p>
                ";
        }
        // line 97
        echo "            </div>
        </div>

        <div id=\"section_principal\" style=\"background-image: url('";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fond2.png"), "html", null, true);
        echo "');\">

            <div id=\"contenu\">

                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 105
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 106
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo " 

                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 111
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 112
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 117
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 118
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    <span>";
        // line 119
        $this->displayBlock('textEncart', $context, $blocks);
        echo "</span>
                </div>

                ";
        // line 122
        $this->displayBlock('contenu', $context, $blocks);
        // line 125
        echo "
            </div>  

        </div>

        <footer> 
            <div>
                <p> @Copyright ";
        // line 132
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo " - <a href=\"http://groupe-nox.com/\" target=\"_blank\">GROUPE NOX</a> - IT Dpt, All rights reserved - ";
        echo twig_escape_filter($this->env, (isset($context["intranet_version"]) ? $context["intranet_version"] : $this->getContext($context, "intranet_version")), "html", null, true);
        echo " </p> 
            </div>
        </footer>

        <script>

            function footerAlign() {
                \$('footer').css('display', 'block');
                \$('footer').css('height', 'auto');
                var footerHeight = \$('footer').outerHeight();

                \$('footer').css('height', footerHeight);


            }

            function resizeContenu() {
                \$('#contenu').height(\$('footer').offset().top - \$('header').height() - \$('#bar_menu').height() - \$('footer').height() / 5);
            }


            function centerContent()
            {
                var container = \$('footer div');
                var content = \$('footer div p');
                content.css(\"left\", (container.width() - content.width()) / 2);
                content.css(\"top\", (container.height() - content.height()) / 2);
            }

            \$(window).load(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

            \$(window).resize(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

        </script>

        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "\"></script>   
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "\"></script>  
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/tableHeadFixer.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
        
        $__internal_d3521bb7f3c595497d5c03c0629d8f58e80aacc53c0ac71dbdb5edeb869a1227->leave($__internal_d3521bb7f3c595497d5c03c0629d8f58e80aacc53c0ac71dbdb5edeb869a1227_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ab292b7ae8e2b36f090094b206ca9b10ca92244ee2eb7a1110c134d475eaa367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab292b7ae8e2b36f090094b206ca9b10ca92244ee2eb7a1110c134d475eaa367->enter($__internal_ab292b7ae8e2b36f090094b206ca9b10ca92244ee2eb7a1110c134d475eaa367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_ab292b7ae8e2b36f090094b206ca9b10ca92244ee2eb7a1110c134d475eaa367->leave($__internal_ab292b7ae8e2b36f090094b206ca9b10ca92244ee2eb7a1110c134d475eaa367_prof);

    }

    // line 36
    public function block_style($context, array $blocks = array())
    {
        $__internal_a633c84e3f80d046499e6a8c8f56a24f01810786cc6c091f34bb6aebe2e0c759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a633c84e3f80d046499e6a8c8f56a24f01810786cc6c091f34bb6aebe2e0c759->enter($__internal_a633c84e3f80d046499e6a8c8f56a24f01810786cc6c091f34bb6aebe2e0c759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 37
        echo "        ";
        
        $__internal_a633c84e3f80d046499e6a8c8f56a24f01810786cc6c091f34bb6aebe2e0c759->leave($__internal_a633c84e3f80d046499e6a8c8f56a24f01810786cc6c091f34bb6aebe2e0c759_prof);

    }

    // line 117
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_7141183e3599ab91be85c467bdb52feecc3687879c64fd8361d58f0d0a2ecc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7141183e3599ab91be85c467bdb52feecc3687879c64fd8361d58f0d0a2ecc13->enter($__internal_7141183e3599ab91be85c467bdb52feecc3687879c64fd8361d58f0d0a2ecc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_7141183e3599ab91be85c467bdb52feecc3687879c64fd8361d58f0d0a2ecc13->leave($__internal_7141183e3599ab91be85c467bdb52feecc3687879c64fd8361d58f0d0a2ecc13_prof);

    }

    // line 118
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_7c431e72c6594c9c0fcb33fbb6e982f6e19a77c3e9c134a22d48a0d002935c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c431e72c6594c9c0fcb33fbb6e982f6e19a77c3e9c134a22d48a0d002935c49->enter($__internal_7c431e72c6594c9c0fcb33fbb6e982f6e19a77c3e9c134a22d48a0d002935c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_7c431e72c6594c9c0fcb33fbb6e982f6e19a77c3e9c134a22d48a0d002935c49->leave($__internal_7c431e72c6594c9c0fcb33fbb6e982f6e19a77c3e9c134a22d48a0d002935c49_prof);

    }

    // line 119
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_deae1acdc120629b6159bbd0479fdb5130c5d8850bad6a12b275a4e3cdc9e6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deae1acdc120629b6159bbd0479fdb5130c5d8850bad6a12b275a4e3cdc9e6b0->enter($__internal_deae1acdc120629b6159bbd0479fdb5130c5d8850bad6a12b275a4e3cdc9e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_deae1acdc120629b6159bbd0479fdb5130c5d8850bad6a12b275a4e3cdc9e6b0->leave($__internal_deae1acdc120629b6159bbd0479fdb5130c5d8850bad6a12b275a4e3cdc9e6b0_prof);

    }

    // line 122
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2de0aa79a72b35e6aadf4504d52bfe45f5907458bdd662cae2e1d808361ca53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de0aa79a72b35e6aadf4504d52bfe45f5907458bdd662cae2e1d808361ca53b->enter($__internal_2de0aa79a72b35e6aadf4504d52bfe45f5907458bdd662cae2e1d808361ca53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 123
        echo "
                ";
        
        $__internal_2de0aa79a72b35e6aadf4504d52bfe45f5907458bdd662cae2e1d808361ca53b->leave($__internal_2de0aa79a72b35e6aadf4504d52bfe45f5907458bdd662cae2e1d808361ca53b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 123,  481 => 122,  470 => 119,  458 => 118,  446 => 117,  439 => 37,  433 => 36,  422 => 7,  410 => 195,  406 => 194,  402 => 193,  398 => 192,  394 => 191,  390 => 190,  386 => 189,  382 => 188,  378 => 187,  374 => 186,  370 => 185,  366 => 184,  362 => 183,  358 => 182,  354 => 181,  350 => 180,  346 => 179,  342 => 178,  338 => 177,  334 => 176,  330 => 175,  282 => 132,  273 => 125,  271 => 122,  265 => 119,  261 => 118,  257 => 117,  252 => 114,  243 => 112,  240 => 111,  236 => 110,  232 => 108,  223 => 106,  220 => 105,  216 => 104,  209 => 100,  204 => 97,  200 => 95,  194 => 93,  192 => 92,  178 => 81,  171 => 77,  166 => 75,  161 => 73,  156 => 71,  140 => 58,  132 => 53,  126 => 50,  119 => 46,  109 => 38,  107 => 36,  96 => 28,  89 => 24,  82 => 20,  77 => 18,  74 => 17,  60 => 15,  56 => 14,  51 => 12,  47 => 11,  43 => 10,  40 => 9,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"utf-8\" />
        <title> Groupe-Nox / {% block titrePage %}{% endblock %}</title>
        {# app/Resources/views/layout.html.twig #}

        <script src=\"{{ asset('./js/jquery-2.2.0.min.js') }}\"></script>
        <script src=\"{{ asset('./js/js.cookie.js') }}\"></script>
        <script src=\"{{ asset('./js/texteActions.js') }}\"></script>

        {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ app.request.getSchemeAndHttpHost() }}/Symfony/web/favicon.ico\" />

        <link href=\"{{ asset('js/jquery-ui/jquery-ui.min.css') }}\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url({{asset('fonts/MuseoSans_100.otf')}}) format('opentype');
            }

            #alert {
                background-image: url({{ asset('bundles/noxintranetaccueil/images/AccueilIntranetBackground.png') }});
                background-position: center; 
                background-repeat: no-repeat;
                background-size: 100%;
            }


        </style>
        {% block style %}
        {% endblock %}
    </head>

    <body onload=\"menuAnimation();\">

        <header>

            <div style=\"border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;\"> <a style=\"cursor: pointer; font-size: 0.85vw;\" onclick=\"\$(function () {
                        \$('#dialog').dialog({width: 970, height: 600});
                    });\"> Plan du site <br /><img style=\"width: 10%;\" src=\"{{ asset('bundles/noxintranetaccueil/images/Map-32.png') }}\" alt=\"Accès au plan de l'intranet\" onmousedown=\"return false;\"> </a> 
            </div><!-- 
            
            --><div id =\"bandeau\">  
                <img src=\"{{ asset('bundles/noxintranetcommunication/images/bandeau.png') }}\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            {{ include('NoxIntranetUserBundle:Security:ADlogin.html.twig') }}

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none; text-align: center;\">
            <img src=\"{{ asset('bundles/noxintranetaccueil/images/PlanIntranet.png') }}\" alt=\"Plan de l'intranet\" style=\"width: 100%; vertical-align: middle; text-align: center;\">
        </div>

        <div id=\"bar_menu\">

            <div id=\"EmailHelpdesk\">
                <a href=\"mailto:helpdesk@groupe-nox.com\"> Une question ? </a>
            </div><!--
    
            --><div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"{{ path('nox_intranet_accueil') }}\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"{{ path('nox_intranet_communication') }}\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"{{ path('nox_intranet_ressources') }}\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"{{ path('nox_intranet_support_si') }}\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}\" alt=\"Logo Recherche\" onmousedown=\"return false;\">
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this)
                                            ;\"> Rechercher 
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                {% if app.user != null and (is_granted('ROLE_ADMIN') or is_granted('ROLE_REFERENCES') or is_granted('ROLE_COMPETENCES') or is_granted('ROLE_COMMUNICATION') or is_granted('ROLE_PROCEDURES') or is_granted('ROLE_FAQ') or is_granted('ROLE_CE') or is_granted('ROLE_CHSCT') or is_granted('ROLE_LIENS') or is_granted('ROLE_QUALITE') or is_granted('ROLE_RH')) %}
                    <p> <a href=\"{{ path('nox_intranet_administration') }}\"> Administration </a> </p>
                {% elseif is_granted('ROLE_PUBLICATEUR') %}
                    <p> Publication </p>
                {% endif %}
            </div>
        </div>

        <div id=\"section_principal\" style=\"background-image: url('{{ asset('images/fond2.png')}}');\">

            <div id=\"contenu\">

                {% for flashMessage in app.session.flashbag.get('notice') %}
                    <p class=\"flashbag\"> 
                        {{ flashMessage }}
                    </p>
                {% endfor %} 

                {% for flashMessage in app.session.flashbag.get('noticeErreur') %}
                    <p class=\"flashbagErreur\"> 
                        {{ flashMessage }}
                    </p>
                {% endfor %} 

                <div class=\"messageAcceuil\"> 
                    <h2> {% block messageAccueil %} {% endblock %} </h2>
                    <h3> {% block sousMessageAccueil %} {% endblock %} </h3>
                    <span>{% block textEncart %}{% endblock %}</span>
                </div>

                {% block contenu %}

                {% endblock %}

            </div>  

        </div>

        <footer> 
            <div>
                <p> @Copyright {{ date('Y')|date('Y') }} - <a href=\"http://groupe-nox.com/\" target=\"_blank\">GROUPE NOX</a> - IT Dpt, All rights reserved - {{ intranet_version }} </p> 
            </div>
        </footer>

        <script>

            function footerAlign() {
                \$('footer').css('display', 'block');
                \$('footer').css('height', 'auto');
                var footerHeight = \$('footer').outerHeight();

                \$('footer').css('height', footerHeight);


            }

            function resizeContenu() {
                \$('#contenu').height(\$('footer').offset().top - \$('header').height() - \$('#bar_menu').height() - \$('footer').height() / 5);
            }


            function centerContent()
            {
                var container = \$('footer div');
                var content = \$('footer div p');
                content.css(\"left\", (container.width() - content.width()) / 2);
                content.css(\"top\", (container.height() - content.height()) / 2);
            }

            \$(window).load(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

            \$(window).resize(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

        </script>

        <script src=\"{{ asset('./js/affichageImageResizing.js') }}\"></script>
        <script src=\"{{ asset('./js/jquery-ui/jquery-ui.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
        <script src=\"{{ asset('./js/googleSearch.js') }}\"></script>
        <script src=\"{{ asset('./js/menuAnimation.js') }}\"></script>
        <script src=\"{{ asset('./js/positionement.js') }}\"></script>
        <script src=\"{{ asset('./js/checkboxClick.js') }}\"></script>   
        <script src=\"{{ asset('./js/textareaLogiciel.js') }}\"></script>  
        <script src=\"{{ asset('./js/gestionFichiersPopup.js') }}\"></script>
        <script src=\"{{ asset('./js/texteEncartActions.js') }}\"></script>
        <script src=\"{{ asset('./js/popupDownloadArchive.js') }}\"></script>
        <script src=\"{{ asset('./js/menuAdministrationCommunication.js') }}\"></script>
        <script src=\"{{ asset('./js/formImprimanteScript.js') }}\"></script>
        <script src=\"{{ asset('./js/editionLiens.js') }}\"></script>
        <script src=\"{{ asset('./js/jscroller2-1.61.js') }}\"></script>
        <script src=\"{{ asset('./js/submitFormAffaires.js') }}\"></script>
        <script src=\"{{ asset('./js/tableurEdition.js') }}\"></script>
        <script src=\"{{ asset('./js/suiviRecherche.js') }}\"></script>
        <script src=\"{{ asset('./js/jquery.transit.min.js') }}\"></script>
        <script src=\"{{ asset('./js/tableHeadFixer.js') }}\"></script>

    </body>

</html>", "::layout.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}