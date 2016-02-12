<?php

/* layout.html.twig */
class __TwigTemplate_303dba3b8dd315a1770c8d0abcdfcca4ae1b706d3c25f59ac39816e68f12828a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        <script src=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/js.cookie.js"), "html", null, true);
        echo "></script>
        <script type=\"text/javascript\">
            function changementSkin(\$skin) {
                if (\$skin === 'normal') {
                    Cookies.set(\"skin\", \"normal\");
                    location.reload();
                } else if (\$skin === 'bammez') {
                    Cookies.set(\"skin\", \"bammez\");
                    location.reload();
                }
            }
        </script>

        ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == null)) {
            // line 25
            echo "            ";
            $context["skin"] = "normal";
            // line 26
            echo "        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == "normal")) {
            // line 27
            echo "            ";
            $context["skin"] = "normal";
            // line 28
            echo "        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == "bammez")) {
            // line 29
            echo "            ";
            $context["skin"] = "bammez";
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if (((isset($context["skin"]) ? $context["skin"] : null) == "normal")) {
            // line 33
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "fc3b92b_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("css/fc3b92b_style_1.css");
                // line 34
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            } else {
                // asset "fc3b92b"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b") : $this->env->getExtension('asset')->getAssetUrl("css/fc3b92b.css");
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 36
            echo "        ";
        } else {
            echo " 
            ";
            // line 37
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "9cd9840_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cd9840_0") : $this->env->getExtension('asset')->getAssetUrl("css/9cd9840_style_bammez_1.css");
                // line 38
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            } else {
                // asset "9cd9840"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cd9840") : $this->env->getExtension('asset')->getAssetUrl("css/9cd9840.css");
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 40
            echo "        ";
        }
        // line 41
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }
        </style>
    </head>

    <body onload=\"";
        // line 51
        if (((isset($context["skin"]) ? $context["skin"] : null) == "normal")) {
            echo "menuAnimation();";
        } else {
            echo "menuAnimationBammez();";
        }
        echo "\">

        <header>

            <div id =\"bandeau\">  
                ";
        // line 56
        if (((isset($context["skin"]) ? $context["skin"] : null) == "normal")) {
            // line 57
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        } else {
            // line 58
            echo " 
                    <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau_bammez.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        }
        // line 61
        echo "            </div>

            ";
        // line 63
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"bar_menu\">

            <div id=\"selectionSkinBouton\" >
                <span></span>
                <p>Couleurs : </p>
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/CarreBleuClair.png"), "html", null, true);
        echo "\" onclick=\"changementSkin('bammez');\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/CarreBleuFonce.png"), "html", null, true);
        echo "\" onclick=\"changementSkin('normal');\">
            </div>

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            ";
        // line 90
        if (((isset($context["skin"]) ? $context["skin"] : null) == "normal")) {
            // line 91
            echo "                                <img src =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoGoogle.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        } else {
            // line 92
            echo " 
                                <img src =\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        }
        // line 95
        echo "
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this);\"> Rechercher </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 104
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 105
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 107
            echo "                    <p> Publication </p>
                ";
        }
        // line 109
        echo "            </div>
        </div>

        <div id =\"section_principal\">


            <div id=\"contenu\">

                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 119
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo " 

                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 124
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 125
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 130
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 131
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                ";
        // line 132
        $this->displayBlock('textEncart', $context, $blocks);
        // line 133
        echo "            </div>

            ";
        // line 135
        $this->displayBlock('contenu', $context, $blocks);
        // line 138
        echo "
        </div>
    </div>

    <script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "></script>   
    <!-- <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/communicationMenu.js"), "html", null, true);
        echo "></script> -->
    <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "></script>  
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "></script>
</body>
</html>";
    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 130
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 131
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 132
    public function block_textEncart($context, array $blocks = array())
    {
    }

    // line 135
    public function block_contenu($context, array $blocks = array())
    {
        // line 136
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 136,  436 => 135,  431 => 132,  425 => 131,  419 => 130,  414 => 7,  407 => 159,  403 => 158,  399 => 157,  395 => 156,  391 => 155,  387 => 154,  383 => 153,  379 => 152,  375 => 151,  371 => 150,  367 => 149,  363 => 148,  359 => 147,  355 => 146,  351 => 145,  347 => 144,  343 => 143,  339 => 142,  333 => 138,  331 => 135,  327 => 133,  325 => 132,  321 => 131,  317 => 130,  312 => 127,  303 => 125,  300 => 124,  296 => 123,  292 => 121,  283 => 119,  280 => 118,  276 => 117,  266 => 109,  262 => 107,  256 => 105,  254 => 104,  243 => 95,  238 => 93,  235 => 92,  229 => 91,  227 => 90,  220 => 86,  215 => 84,  210 => 82,  205 => 80,  195 => 73,  191 => 72,  179 => 63,  175 => 61,  170 => 59,  167 => 58,  161 => 57,  159 => 56,  147 => 51,  139 => 46,  132 => 42,  129 => 41,  126 => 40,  112 => 38,  108 => 37,  103 => 36,  89 => 34,  84 => 33,  82 => 32,  79 => 31,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  64 => 26,  61 => 25,  59 => 24,  43 => 11,  39 => 10,  36 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title> Groupe-Nox / {% block titrePage %}{% endblock %}</title>*/
/*         {# app/Resources/views/layout.html.twig #}*/
/* */
/*         <script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>*/
/*         <script src={{ asset('./js/js.cookie.js') }}></script>*/
/*         <script type="text/javascript">*/
/*             function changementSkin($skin) {*/
/*                 if ($skin === 'normal') {*/
/*                     Cookies.set("skin", "normal");*/
/*                     location.reload();*/
/*                 } else if ($skin === 'bammez') {*/
/*                     Cookies.set("skin", "bammez");*/
/*                     location.reload();*/
/*                 }*/
/*             }*/
/*         </script>*/
/* */
/*         {% if app.request.cookies.get('skin') == null %}*/
/*             {% set skin = 'normal' %}*/
/*         {% elseif app.request.cookies.get('skin') == 'normal' %}*/
/*             {% set skin = 'normal' %}*/
/*         {% elseif app.request.cookies.get('skin') == 'bammez' %}*/
/*             {% set skin = 'bammez' %}*/
/*         {% endif %}*/
/* */
/*         {% if skin == 'normal' %}*/
/*             {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*             {% endstylesheets %}*/
/*         {% else %} */
/*             {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style_bammez.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*             {% endstylesheets %}*/
/*         {% endif %}*/
/* */
/*         <link rel="icon" type="image/png" href="{{ asset('bundles/noxintranetcommunication/images/favicon.ico') }}" />*/
/*         <style type="text/css">*/
/*             @font-face {*/
/*                 font-family: 'NoxFont'; */
/*                 src:    url({{asset('fonts/MuseoSans_100.otf')}}) format('opentype');*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body onload="{% if skin == 'normal' %}menuAnimation();{% else %}menuAnimationBammez();{% endif %}">*/
/* */
/*         <header>*/
/* */
/*             <div id ="bandeau">  */
/*                 {% if skin == 'normal' %}*/
/*                     <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*                 {% else %} */
/*                     <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau_bammez.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {{ include('NoxIntranetUserBundle:Security:ADlogin.html.twig') }}*/
/* */
/*         </header>*/
/* */
/*         <div id="bar_menu">*/
/* */
/*             <div id="selectionSkinBouton" >*/
/*                 <span></span>*/
/*                 <p>Couleurs : </p>*/
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/CarreBleuClair.png') }}" onclick="changementSkin('bammez');">*/
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/CarreBleuFonce.png') }}" onclick="changementSkin('normal');">*/
/*             </div>*/
/* */
/*             <div id="div_menu">*/
/* */
/*                 <ul id="menu">*/
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_accueil') }}" class="liens"> Accueil </a> </li> */
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_communication') }}" class="liens"> Communication </a> </li> */
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_ressources') }}" class="liens"> Ressources </a> </li> */
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_support_si') }}" class="liens" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> */
/* */
/*                     <li id="google_search"> */
/*                         <form id="google_form">*/
/*                             {% if skin == 'normal' %}*/
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoGoogle.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% else %} */
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% endif %}*/
/* */
/*                             <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                             <button id="search" onclick="googleSearch(this);"> Rechercher </button>*/
/*                         </form>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div id="administrationBouton" >*/
/*                 {% if app.user != null and (is_granted('ROLE_ADMIN') or is_granted('ROLE_REFERENCES') or is_granted('ROLE_COMPETENCES') or is_granted('ROLE_COMMUNICATION') or is_granted('ROLE_PROCEDURES') or is_granted('ROLE_FAQ') or is_granted('ROLE_CE') or is_granted('ROLE_CHSCT') or is_granted('ROLE_LIENS') or is_granted('ROLE_QUALITE')) %}*/
/*                     <p> <a href="{{ path('nox_intranet_administration') }}"> Administration </a> </p>*/
/*                 {% elseif is_granted('ROLE_PUBLICATEUR') %}*/
/*                     <p> Publication </p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id ="section_principal">*/
/* */
/* */
/*             <div id="contenu">*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                     <p class="flashbag"> */
/*                         {{ flashMessage }}*/
/*                     </p>*/
/*                 {% endfor %} */
/* */
/*                 {% for flashMessage in app.session.flashbag.get('noticeErreur') %}*/
/*                     <p class="flashbagErreur"> */
/*                         {{ flashMessage }}*/
/*                     </p>*/
/*                 {% endfor %} */
/* */
/*                 <div class="messageAcceuil"> */
/*                     <h2> {% block messageAccueil %} {% endblock %} </h2>*/
/*                     <h3> {% block sousMessageAccueil %} {% endblock %} </h3>*/
/*                 {% block textEncart %}{% endblock %}*/
/*             </div>*/
/* */
/*             {% block contenu %}*/
/* */
/*             {% endblock %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script src={{ asset('./js/jquery-ui.min.js') }}></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script src={{ asset('./js/googleSearch.js') }}></script>*/
/*     <script src={{ asset('./js/menuAnimation.js') }}></script>*/
/*     <script src={{ asset('./js/positionement.js') }}></script>*/
/*     <script src={{ asset('./js/checkboxClick.js') }}></script>   */
/*     <!-- <script src={{ asset('./js/communicationMenu.js') }}></script> -->*/
/*     <script src={{ asset('./js/textareaLogiciel.js') }}></script>  */
/*     <script src="{{ asset('./js/gestionFichiersPopup.js') }}"></script>*/
/*     <script src={{ asset('./js/texteEncartActions.js') }}></script>*/
/*     <script src={{ asset('./js/popupDownloadArchive.js') }}></script>*/
/*     <script src={{ asset('./js/texteActions.js') }}></script>*/
/*     <script src={{ asset('./js/menuAdministrationCommunication.js') }}></script>*/
/*     <script src={{ asset('./js/formImprimanteScript.js') }}></script>*/
/*     <script src={{ asset('./js/editionLiens.js') }}></script>*/
/*     <script src={{ asset('./js/jscroller2-1.61.js') }}></script>*/
/*     <script src={{ asset('./js/submitFormAffaires.js') }}></script>*/
/* </body>*/
/* </html>*/