<?php

/* @NoxIntranetUser/MatriceCompetence/matriceCompetence.html.twig */
class __TwigTemplate_3d8b321b8d01012fbb99183b2b36b833725b055988be3f11af3ddeed56593d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetUser/MatriceCompetence/matriceCompetence.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        #matriceCompetenceTable_Div {
            width: 100%;
            margin: auto;
            margin-bottom: 2em;
            height: 500px;
            overflow-x: hidden;
            overflow-y: auto;
            height: 100%;
        }

        #competenceTable, #infosSalariesTable {
            table-layout: fixed;
        }

        #matriceCompetenceTable {
            margin: auto;
            border-collapse: collapse;
            width: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #matriceCompetenceTable, #matriceCompetenceTable tr, #matriceCompetenceTable th, #matriceCompetenceTable td {
            border: 1px solid black;
            text-align: center;
            font-size: calc(9px + 0.2vw);
            background-color: transparent;
        }

        #matriceCompetenceTable td {
            padding: 0.5em;
        }

        #matriceCompetenceTable th {
            background-color: rgba(31,78,121,0.8);
            color: white;
        }

        #matriceCompetenceTable th.header {
            padding-right: 1.5em;
            background-image: url('";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.tablesorter/themes/blue/bg.gif"), "html", null, true);
        echo "'); 
            background-repeat: no-repeat;
            background-position: center right;
            cursor: pointer;
        }

        #matriceCompetenceTable th.headerSortUp { 
            background-image: url('";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.tablesorter/themes/blue/asc.gif"), "html", null, true);
        echo "'); 
        } 

        #matriceCompetenceTable th.headerSortDown { 
            background-image: url('";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.tablesorter/themes/blue/desc.gif"), "html", null, true);
        echo "'); 
        }

        #matriceCompetenceTable td {
            background-color: rgba(255,255,255,0.8);
        }

        .categorie_selection_section {
            display: inline-block;
            box-sizing: border-box;
            width: calc(100% / 3);
            font-size: calc(11px + 0.2vw);
            vertical-align: top;
            padding: 1em;
        }

        .competences_ul {
            margin: 0;
            padding-left: 1em;
            font-size: calc(11px + 0.2vw);
            list-style-type: none;
        }

        .categorie_selection_title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: calc(12px + 0.2vw);
        }

        #categorie_selection_div {
            width: 60%;
            margin: auto;
            font-size: 0;
            background-color: rgba(255,255,255, 0.6);
            border: 2px solid #1F4E79;
        }

        .competences_li label {
            font-size: calc(11px + 0.2vw);
        }

        #categorie_selection_foldbar {
            background-color: rgba(31,78,121,0.8);
        }

        .categorie_selection_foldbar_indicator {
            display: inline-block;
            width: 50%;
            box-sizing: border-box;
            text-align: right;
            font-size: calc(12px + 0.2vw);
            padding: 0.25em 1em 0.25em 0.25em;
            margin: 0;
            color: white;
        }

        #categorie_selection_foldbar_text {
            display: inline-block;
            width: 50%;
            box-sizing: border-box;
            font-size: calc(12px + 0.2vw);
            padding: 0.25em 0.25em 0.25em 2em;
            margin: 0;
            color: white;
        }

        #categorie_selection_box {
            height: 250px;
            overflow-y: auto;
            border-top: 2px solid #1F4E79;
        }

        .competence_td {
            font-size: 0;
        }

        .competence_container {
            display: inline-block;
            padding: 0.25em 0.10em;
        }

        .competence_principale_div, .competence_secondaire_div {
            display: inline-block;
            padding: 0.25em;
            margin: 0.1em;
            font-size: calc(11px + 0.2vw);
            border-radius: 5px;
            text-transform: capitalize;
        }

        .competence_principale_div {
            background-color: #1f4e79;
            color: white;
        }

        .competence_secondaire_div {
            background-color: #5d9bd5;
            color: white;
        }

        #matriceCompetence_Container {
            position: relative;
            height: 500px;
            width: 100%;
            margin-top: 2em;
        }

        .fixedHeaderCell {
            position: absolute;
            top: 0;
            font-size: calc(9px + 0.2vw);
            cursor: pointer;
        }

        #header-background {
            background-color: rgba(31,78,121,0.8);;
            height: 30px;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;   
        }

        #matriceCompetenceTable thead tr th {
            font-size: 0;
            padding: 0;
        }

        #selected_competence_text {
            margin: 0;
            padding: 0.5em;
            background-color: rgba(255,255,255,0.8);
            border-top: 1px solid #1F4E79;
            font-size: calc(11px + 0.2vw);   
        }

        #select_deselect_competences {
            margin: 0;
            padding: 0.5em;
            padding-bottom: 0;
            font-size: calc(11px + 0.2vw);   
            cursor: pointer;
        }

        #select_deselect_competences span:hover {
            text-decoration: underline;
        }

        #recherche_avance_div {
            width: 70%;
            margin: auto;
            background-color: rgba(31,78,121,0.8);
        }

        #recherche_avance_form {
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding: 0.1em;
            border: none;
            text-align: center;
            font-size: calc(9px + 0.2vw);
        }

        #recherche_avance_form p {
            display: inline-block;
            padding: 0 0.5em;
        }

        #recherche_avance_form label {
            color: white;
        }

        #recherche_avance_form input, #recherche_avance_form select {
            font-size: calc(9px + 0.2vw);
        }

        #recherche_avance_form input[type='radio'] {
            vertical-align: middle;
            margin: 0em;
        }

        label[for='match_all'], label[for='match_any'] {
            margin: 0 1em;
        }

        .select2-container .select2-selection--multiple {
            min-height: 0;
        }

        #loading_tr td {
            background-image: url(\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetuser/images/loading.gif"), "html", null, true);
        echo "\");
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 5em;
        }
    </style>
    <!-- Fin CSS -->
";
    }

    // line 259
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Matrice de compétences";
    }

    // line 261
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Matrice de compétences";
    }

    // line 263
    public function block_contenu($context, array $blocks = array())
    {
        // line 264
        echo "    <!-- Script -->
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.tablesorter/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Initialisation de la fonction de trie Jquery.
            /*\$(\"#matriceCompetenceTable\").tablesorter({
             sortList: [[1, 0]],
             headers: {
             6: {sorter: false}
             }
             });*/

            // Initialisation des sélécteurs de dates et de compétences. 
            \$(\"#Competence_Principale, #Competences_Secondaires\").select2({
                placeholder: \"Choisir une compétence...\",
                allowClear: true
            });
            initDatepicker();

            // Initialisation du header fixe et mise à jour lors du recadrage de la fenêtre.
            initFixedHeader();
            \$(window).resize(function () {
                initFixedHeader();
            });

            // Initialisation de l'édition des matrices collaborateurs.
            openEditionPopUp();

            // Initialisation de la recheche dans la matrice.
            ajaxSearchInMatrice();

            // Simulation d'une recherche pour afficher les résultats complet.
            \$(\"#recherche_avance_form input\").first().trigger('input');
        });

        // Fixe le header du tableau des compétences.
        function initFixedHeader() {
            // Taille maximum des cellules du header.
            var maxHeight = 0;
            \$('.fixedHeaderCell').each(function () {
                if (\$(this).height() > maxHeight) {
                    maxHeight = \$(this).height();
                }
            });
            maxHeight = maxHeight + 0.4 * maxHeight;
            // Attribution de la taille et positionnement du fond du header.
            \$('#header-background').height(maxHeight);
            \$('#matriceCompetence_Container').css('padding-top', maxHeight + \"px\");
            // Centrage des texte du header.
            \$('.fixedHeaderCell').each(function () {
                var marginTop = (maxHeight - \$(this).height()) / 2;
                var marginLeft = (\$(this).parent(\"th\").width() - \$(this).width() + 2) / 2;
                \$(this).css({
                    'margin-top': marginTop,
                    'margin-bottom': marginTop,
                    'margin-left': marginLeft,
                    'margin-right': marginLeft
                });
            });
        }

        // Ouvre une pop-up permettant l'édition de la matrice de compétence du collaborateur.
        function openEditionPopUp() {
            // Liste des collaborateurs autorisés à éditer la matrice.
            var authorized_users = JSON.parse('";
        // line 329
        echo (isset($context["authorizedEditors"]) ? $context["authorizedEditors"] : null);
        echo "');

            // Template du lien d'édition de matrice collaborateur.
            var path_template = \"";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_matrice_competence_edition_collaborateur", array("userId" => "USER_ID"));
        echo "\";

            // Lors d'un double-clique sur une ligne du tableau de matrice de compétence...
            \$(\"#matriceCompetenceTable\").on(\"dblclick\", \".matrice_collaborateur_tr\", function () {
                // Si le collaborateur courant fait partie de la liste des collaborateurs authorisé...
                if (\$.inArray(\"";
        // line 337
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "\", authorized_users) > -1) {
                    // Récupération de l'id du collaborateur et génération du lien d'édition de sa matrice.
                    var user_id = \$(this).data('user-id');
                    var path = path_template.replace(\"USER_ID\", user_id);

                    // Ouverture de la pop-up d'édition.
                    \$(\"#matrice_edition_popup\").dialog({
                        open: function (event, ui) {
                            \$('#matrice_edition_popup_content').load(path);
                        },
                        resizable: false,
                        height: \$(window).height() * 0.6,
                        width: \$(window).width() / 2,
                        modal: true,
                        draggable: false,
                        dialogClass: \"pointage-alert-content-class\",
                        title: \"Edition compétence collaborateur\",
                        buttons: {
                            // Si l'utilisateur valide...
                            \"Valider\": function () {
                                // On envoie le formulaire de modification de matrice collaborateur.
                                \$(\"form[name='formMatriceCollaborateurEdition']\").submit();

                                // Ecoute des requêtes ajax.
                                \$(document).ajaxComplete(function (event, xhr, settings) {
                                    // Si une requête de sauvegarde de la matrice de compétence a été effectué...
                                    if (settings.hasOwnProperty('headers') && settings.headers.name === \"save_matrice_competence\" && xhr.readyState === 4) {
                                        // On ferme la pop-up d'édition.
                                        \$(\"#matrice_edition_popup\").dialog(\"close\");
                                    }
                                });
                            },
                            // Si l'utilisateur annule, on ferme la fenêtre.
                            \"Annuler\": function () {
                                \$(\"#matrice_edition_popup\").dialog(\"close\");
                            }
                        },
                        close: function (event, ui) {
                            // On appel la fonction de mise à jour de l'affichage du tableau.
                            updateMatriceView(user_id);
                        }
                    });
                    \$('.ui-dialog :button').blur();
                }
                // Sinon...
                else {
                    // On affiche un message d'erreur.
                    alert(\"Vous n'êtes pas autorisé à éditer la matrice de compétence.\");
                }
            });
        }

        // Met à jour l'affichage tu tableau avec les dernières mise à jours du collaborateur passé en paramêtre.
        function updateMatriceView(userId) {
            \$.ajax({
                url: '";
        // line 392
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_matrice_collaborateur_get_matrice_collaborateur");
        echo "',
                type: \"POST\",
                data: {userId: userId},
                success: function (matrice) {
                    // Donnée de la matrice du collaborateur.
                    var matriceObject = JSON.parse(matrice);

                    // Ligne du tableau associé au collaborateur.
                    var tr = \$(\"#matriceCompetenceTable tbody tr[data-user-id='\" + matriceObject.user.id + \"']\");

                    // Mise à jour de l'affichage.
                    tr.find('.date_naissance').text(matriceObject.date_naissance);
                    tr.find('.date_anciennete').text(matriceObject.date_anciennete);
                    tr.find('.statut').text(matriceObject.statut);
                    tr.find('.poste').text(matriceObject.poste);
                    tr.find('.competence_principale_container').html(\"\");
                    if (matriceObject.competence_principale !== null) {
                        tr.find('.competence_principale_container').append(\"<div class='competence_principale_div'>\" + matriceObject.competence_principale.toLowerCase() + \"</div>\");
                    } else {
                        tr.find('.competence_principale_container').append(\"<div class='competence_principale_div'>Aucune</div>\");
                    }
                    tr.find('.competences_secondaires_container').html(\"\");
                    if (matriceObject.competences_secondaires !== null) {
                        \$.each(matriceObject.competences_secondaires, function (index, competence) {
                            tr.find('.competences_secondaires_container').append(\"<div class='competence_secondaire_div'>\" + competence.toLowerCase() + \"</div> \");
                        });
                    } else {
                        tr.find('.competences_secondaires_container').append(\"<div class='competence_secondaire_div'>Aucune</div>\");
                    }

                    // Redimensionnement du header.
                    initFixedHeader();
                }
            });
        }

        // Ajoute un widget de séléction de date au input de date.
        function initDatepicker() {
            // On change le type des input de date pour désactiver le datepicker par défaut de chrome.
            \$(\"input[type='date']\").attr('type', 'text');

            // Initialisation des datepicker.
            \$('.datepicker').datepicker({
                yearRange: \"-100:+0\",
                changeMonth: true,
                changeYear: true
            });
            \$('.datepicker').on('change', function () {
                \$(this).trigger('input');
            });

            // On passe les datepicker en français.
            \$.datepicker.regional.fr = {
                closeText: \"Fermer\",
                prevText: \"Précédent\",
                nextText: \"Suivant\",
                currentText: \"Aujourd'hui\",
                monthNames: [\"janvier\", \"février\", \"mars\", \"avril\", \"mai\", \"juin\",
                    \"juillet\", \"août\", \"septembre\", \"octobre\", \"novembre\", \"décembre\"],
                monthNamesShort: [\"janv.\", \"févr.\", \"mars\", \"avr.\", \"mai\", \"juin\",
                    \"juil.\", \"août\", \"sept.\", \"oct.\", \"nov.\", \"déc.\"],
                dayNames: [\"dimanche\", \"lundi\", \"mardi\", \"mercredi\", \"jeudi\", \"vendredi\", \"samedi\"],
                dayNamesShort: [\"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\"],
                dayNamesMin: [\"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\"],
                weekHeader: \"Sem.\",
                dateFormat: \"dd/mm/yy\",
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: \"\"};
            \$.datepicker.setDefaults(\$.datepicker.regional.fr);
        }

        // Lance une recherche des matrices correspondantes aux paramêtres d'entrés.
        function ajaxSearchInMatrice() {
            // Variable de fonction de retardement entre les frappes.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Requête ajax de recherche dans la matrice de compétence.
            function ajaxSearch() {
                // Au bout de 500ms d'inactivité...
                delay(function () {
                    // On cache la ligne d'absence de résultat, on efface les résultats précédent et on affiche la ligne de chargement.
                    \$('#no_results_tr').hide();
                    \$(\".matrice_collaborateur_tr\").remove();
                    \$(\"#loading_tr\").show();

                    // Requête ajax de recherche des matrices.
                    \$.ajax({
                        url: \"";
        // line 487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_ajax_search_in_matrice");
        echo "\",
                        type: \"POST\",
                        data: \$(\"#recherche_avance_form\").serialize(),
                        success: function (matrice_json) {
                            // Conversion du résultat en object javascript.
                            var matriceList = JSON.parse(matrice_json);

                            // Si le résultat contient des matrices...
                            if (matriceList.length > 0) {
                                // Initialisation du code HTML qui sera ajouté au tableau.
                                var stringHTML = \"\";

                                // Pour chaques matrice...
                                \$.each(matriceList, function (index, matrice) {
                                    // HTML de la compétences principales.
                                    var competence_principale_container = \$(\"<span class='competence_container competence_principale_container'></span>\")
                                            .append(\"<span class='competence_principale_div'>\" + (matrice.competence_principale !== null ? matrice.competence_principale.toLowerCase() : \"Aucune\") + \"</span>\");

                                    // HTML des compétences secondaires.
                                    var competences_secondaires_container = \$(\"<span class='competence_container competences_secondaires_container'></span>\");
                                    if (matrice.competences_secondaires !== null && matrice.competences_secondaires.length > 0) {
                                        \$.each(matrice.competences_secondaires, function (index, competence) {
                                            competences_secondaires_container.append(\"<span class='competence_secondaire_div'>\" + competence.toLowerCase() + \"</span>\");
                                        });
                                    } else {
                                        competences_secondaires_container.append(\"<span class='competence_secondaire_div'>Aucune</span>\");
                                    }

                                    // HTML de la cellule des compétences.
                                    var competencesTd = \$(\"<td></td>\")
                                            .append(competence_principale_container)
                                            .append(\"<hr>\")
                                            .append(competences_secondaires_container);

                                    // HTML de la nouvelle ligne du tableau.
                                    var newTr = \$(\"<tr class='matrice_collaborateur_tr' data-user-id='\" + matrice.user.id + \"'></tr>\")
                                            .append(\"<td>\" + matrice.societe + \"<hr>\" + matrice.etablissement + \"</td>\")
                                            .append(\"<td>\" + matrice.nom + \"<br>\" + matrice.prenom + \"</td>\")
                                            .append(\"<td>\" + matrice.date_naissance + \"</td>\")
                                            .append(\"<td>\" + matrice.date_anciennete + \"</td>\")
                                            .append(\"<td>\" + matrice.statut + \"</td>\")
                                            .append(\"<td>\" + matrice.poste + \"</td>\")
                                            .append(competencesTd);

                                    // On cache la ligne de chargement.
                                    \$(\"#loading_tr\").hide();

                                    // Ajout de la ligne au code HTML.
                                    stringHTML += newTr.prop(\"outerHTML\");


                                });

                                // Ajout du code HTML au tableau.
                                \$(\"#matriceCompetenceTable tbody\").append(stringHTML);

                                // On réinitialise la taille du header.
                                initFixedHeader();
                            }
                            // Si le résultat ne contient pas de matrice.
                            else {
                                // On cache la ligne de chargement et on réinitialise la taille du header.
                                \$(\"#loading_tr\").hide();

                                // On affiche la ligne d'absence de résultat.
                                \$('#no_results_tr').show();

                                // On réinitialise la taille du header.
                                initFixedHeader();
                            }
                        }
                    });
                }, 500);
            }

            // Lorsqu'on séléctionne une valeur sur un sélécteur...
            \$(\"#recherche_avance_form select\").on(\"change\", function () {
                ajaxSearch(); // On lance la recherche.
            });

            // Lorsqu'on on écris dans les champs de recherche...
            \$(\"#recherche_avance_form input\").on(\"input\", function () {
                ajaxSearch(); // On lance la recherche.
            });

            // Lorsqu'on on écris dans les champs de recherche...
            \$(\"#recherche_avance_form input[type='radio']\").on(\"change\", function () {
                ajaxSearch(); // On lance la recherche.
            });
        }

    </script>
    <!-- Fin script -->

    <!-- Recherche avancée -->
    <div id=\"recherche_avance_div\">
        <form id=\"recherche_avance_form\">
            <p>
                <label>Résultat de recherche :</label>
                <label for=\"match_all\"><input id=\"match_all\" type=\"radio\" name=\"search_match_type\" value=\"all\" checked=\"checked\"> valide toutes les conditions</label>
                <label for=\"match_any\"><input id=\"match_any\" type=\"radio\" name=\"search_match_type\" value=\"any\"> valide une des conditions</label>
            </p><br />
            <p>
                <label for=\"Societe\">Société : </label>
                <select id=\"Societe\" name=\"societe\">
                    <option value=\"\">Choisir une société...</option>
                    ";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["societes"]) ? $context["societes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 594
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["societe"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["societe"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        echo "                </select>
            </p>
            <p>
                <label for=\"Etablissement\">Etablissement : </label>
                <select id=\"Etablissement\" name=\"etablissement\">
                    <option value=\"\">Choisir un établissement...</option>
                    ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etablissements"]) ? $context["etablissements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 603
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["etablissement"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["etablissement"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        echo "                </select>
            </p>
            <p>
                <label for=\"Nom\">Nom : </label>
                <input type=\"text\" id=\"Nom\" name=\"nom\">
            </p>
            <p>
                <label for=\"Prenom\">Prénom : </label>
                <input type=\"text\" id=\"Prenom\" name=\"prenom\">
            </p>
            <p>
                <label for=\"Statut\">Statut : </label>
                <input type=\"text\" id=\"Statut\" name=\"statut\">
            </p>
            <p>
                <label for=\"Poste\">Poste : </label>
                <input type=\"text\" id=\"Poste\" name=\"poste\">
            </p>
            <p>
                <label for=\"Date_Naissance\">Date de naissance : </label>
                <input type=\"date\" id=\"Date_Naissance\" name=\"dateNaissance\" class=\"datepicker\">
            </p>
            <p>
                <label for=\"Date_Anciennete\">Date d'ancienneté : </label>
                <input type=\"date\" id=\"Date_Anciennete\" name=\"dateAnciennete\" class=\"datepicker\">
            </p>
            <p>
                <label for=\"Competence_Principale\">Compétence principale : </label>
                <select id=\"Competence_Principale\" name=\"competencePrincipale\">
                    <option value=\"\">dqdzz</option>
                    ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competencesArray"]) ? $context["competencesArray"] : null));
        foreach ($context['_seq'] as $context["nom_categorie"] => $context["liste_competences"]) {
            // line 636
            echo "                        <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["nom_categorie"], "html", null, true);
            echo "\">
                            ";
            // line 637
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["liste_competences"]);
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 638
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["competence"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["competence"]), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            echo "                        </optgroup>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nom_categorie'], $context['liste_competences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "                </select>
            </p>
            <p>
                <label for=\"Competences_Secondaires\">Compétences secondaires : </label>
                <select id=\"Competences_Secondaires\" name=\"competencesSecondaires[]\" multiple=\"multiple\" >
                    ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competencesArray"]) ? $context["competencesArray"] : null));
        foreach ($context['_seq'] as $context["nom_categorie"] => $context["liste_competences"]) {
            // line 648
            echo "                        <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["nom_categorie"], "html", null, true);
            echo "\">
                            ";
            // line 649
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["liste_competences"]);
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 650
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["competence"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["competence"]), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 652
            echo "                        </optgroup>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nom_categorie'], $context['liste_competences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        echo "                </select>
            </p>
            <p style=\"display: block;\">
                <input type=\"reset\" id=\"Reset\" name=\"Reset\" value=\"Remise à zéro\" onclick=\"\$('#Competence_Principale, #Competences_Secondaires').val('').trigger('change');
                        \$('#recherche_avance_form input').first().trigger('input');\">
            </p>
        </form>
    </div>
    <!-- Fin de la recherche avancée -->

    <!-- Pop-up d'édition de la matrice -->
    <div id=\"matrice_edition_popup\">
        <div id=\"matrice_edition_popup_content\">
        </div>
    </div>
    <!-- Fin de la pop-up d'édition de la matrice -->

    <!-- Table des compétences -->
    <div id=\"matriceCompetence_Container\">
        <div id=\"header-background\"></div>
        <div id=\"matriceCompetenceTable_Div\">
            <table id='matriceCompetenceTable'>
                <thead>
                    <tr>
                        <th><div class=\"fixedHeaderCell\">Société<hr>Etablissement</div></th>     
                        <th><div class=\"fixedHeaderCell\">NOM<br />Prénom</div></th>
                        <th><div class=\"fixedHeaderCell\">Date<br /> de<br /> naissance</div></th>
                        <th><div class=\"fixedHeaderCell\">Date<br /> d'ancienneté</div></th>
                        <th><div class=\"fixedHeaderCell\">Statut</div></th>
                        <th><div class=\"fixedHeaderCell\">Poste</div></th>
                        <th><div class=\"fixedHeaderCell\">Compétence principale<hr>Compétences secondaires</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id=\"no_results_tr\" style=\"display: none;\">
                        <td colspan=\"7\">Aucun résultat...</td>
                    </tr>
                    <tr id=\"loading_tr\" style=\"display: none;\">
                        <td colspan=\"7\"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Fin de la table des compétences -->
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/MatriceCompetence/matriceCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 654,  805 => 652,  794 => 650,  790 => 649,  785 => 648,  781 => 647,  774 => 642,  767 => 640,  756 => 638,  752 => 637,  747 => 636,  743 => 635,  711 => 605,  700 => 603,  696 => 602,  688 => 596,  677 => 594,  673 => 593,  564 => 487,  466 => 392,  408 => 337,  400 => 332,  394 => 329,  328 => 266,  324 => 265,  321 => 264,  318 => 263,  312 => 261,  306 => 259,  293 => 249,  99 => 58,  92 => 54,  82 => 47,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetUser/MatriceCompetence/matriceCompetence.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle\\Resources\\views\\MatriceCompetence\\matriceCompetence.html.twig");
    }
}