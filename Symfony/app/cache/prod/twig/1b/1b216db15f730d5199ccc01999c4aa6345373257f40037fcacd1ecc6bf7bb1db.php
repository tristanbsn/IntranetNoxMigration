<?php

/* @NoxIntranetPointage/Pointage/pointage.html.twig */
class __TwigTemplate_84aeaec57e8b98a6469413813fc858d03017a253ba64bdec15f85fb146dfa420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@NoxIntranetPointage/Pointage/pointage.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Pointage ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Pointage";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/MODE OP' feuille de pointage.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Aide</a>|<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main du pointage collaborateur.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Notice de remplissage collaborateurs</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div id='loadingContent' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 100; background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/pointageLoading.svg"), "html", null, true);
        echo "); background-size: contain; background-repeat: no-repeat; background-position: center center;'></div>

    <div id='pointageSavingNotification' style='display: none; position: fixed; z-index: 500; background-color: rgba(41,154,11, 0.7); border: 1px outset white; border-radius: 10px; padding: 0.5%;'><p style='display: inline-block; margin: 0; font-size: 0.8vw; color: white;'>Sauvegarde en cours <img src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "' style='vertical-align: middle; height: 2em;'></p></div>

    <div id=\"pointageAlert\"><div id=\"pointageAlertText\"></div></div>

    <p style=\"width: 80%; margin: auto; margin-bottom: 1em; text-align: center; font-size: calc(11px + 0.1vw); color: red\">Attention : le pointage est régulièrement mis à jour ce qui peux provoquer des bugs d'affichage et de saisi des données. Le cas échéant, appuyez sur CTRL+F5 pour rafraichir la cache du navigateur.</p> 

    <div id=\"pointageStatusDiv\">
        <div id=\"pointageStatusLabelGeneralContainer\">
            <div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Collaborateur</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Assistant(e) agence</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>DA/Manager</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Assistant(e) RH/DRH</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Validé</p></div><!--
            --></div>
        <div id=\"pointageStatus\">
            <div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=0></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=1></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=2></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=3></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=4></div></div>
            <div class='pointageStatusLine'><div></div></div>
        </div>
    </div>

    <div id='tableFeuillePointageDivContainer'>
        <table id=\"tableFeuillePointage\">

            <div id=\"floatingHeaderContainer\">
                <div id=\"floatingHeader\">
                    <div>
                        <div>&nbsp;</div><br />
                        <div>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
        echo "</div>
                    </div>
                    <div>
                        <div>TOTAL</div><br />
                        <div>%</div>
                    </div>
                    <div>
                        <div>MOD</div><br />
                        <div>h</div>
                    </div>
                    <div>
                        <div>Absences</div><br />
                        <div style=\"width: auto;\" id=\"floatingHeaderMatin\">Matin</div><div style=\"width: auto;\" id=\"floatingHeaderAM\">Après-midi</div>
                    </div>
                    <div>
                        <div>Titres repas</div><br />
                        <div>Nombre</div>
                    </div>
                    <div>
                        <div>Forfaits déplacement</div><br />
                        <div>Montant</div>
                    </div>
                    <div>
                        <div>Primes panier</div><br />
                        <div>Nombre</div>
                    </div>
                    <div style='float: right;'>
                        <div style='height: 100%;'>Commentaires</div>
                    </div>
                </div>
            </div>

            <div id=\"floatingVerticalHeaderContainer\">
                <div id=\"floatingVerticalHeader\">
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "</div>
                </div>
            </div>

            <div id='floatingHeaderCross'>";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "</div>

            <tr>
                <td style=\"border: solid 1px black;\">
                    <select id='pointage_month_selector' style=\"width: 100%;\">
                        ";
        // line 89
        $context["months"] = array(1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre");
        // line 90
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["months"]) ? $context["months"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["month"]) {
            // line 91
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($context["index"] == (isset($context["currentMonth"]) ? $context["currentMonth"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "</option>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    </select>
                </td>
                <td id='operationnel' style=\"color: white; border-width: 1px;\" colspan=\"2\"><p id=\"getLastMonthAffairesButton\" style=\"margin: 0; margin-right: 1em; display: inline-block; cursor: pointer; vertical-align: middle;\"><button type=\"button\" onclick=\"importLastMonthAffaires();\" title=\"Importer les affaires du pointage du mois précédent.\">Import affaires m-1</button></p>OPERATIONNEL<p id=\"addProject\" style=\"margin: 0; margin-left: 1em; display: inline-block; cursor: pointer; vertical-align: middle;\"><button type=\"button\" title=\"Ajouter une nouvelle affaire au pointage.\">+ Affaire</button></p></td>
                <td style=\"border-width: 1px;\"></td>
                <td style=\"color: white; border-width: 1px;\" colspan=\"5\">RESSOURCES HUMAINES</td>
                <td style=\"border: none; border-bottom: solid 1px black;\" >
                    <a href=\"#\" onclick=\"ajaxExportToExcell();\">Imprimer</a>
                    |
                    <a href=\"#\" onclick=\"ajaxDownloadCSV();\">Export CSV</a>
                </td>
            </tr>
            <tr>
                <td style=\"border: solid 1px black;\">
                    <select id='pointage_year_selector' style=\"width: 100%;\">
                        <option value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+2 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+2 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+3 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+3 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+4 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+4 year"), "Y"), "html", null, true);
        echo "</option>
                    </select>
                </td>
                <td class='project' style='border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true></td>
                <td style='border-width: 1px;'>TOTAL</td>
                <td style='border-width: 1px;' >MOD</td>
                <td style='border-width: 1px;' colspan=\"2\">Absences</td>
                <td style='border-width: 1px;' >Titres repas</td>
                <td style='border-width: 1px;' >Forfaits déplacement</td>
                <td style='border-width: 1px;' >Primes panier</td>
                <td style='border-width: 1px;' rowspan=\"2\" id='feuillePointageCommentaires'>Commentaires</td>
            </tr>
            <tr>
                <td style=\"background: rgb(217,217,217); border-width: 1px;\">";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "</td>
                <td class='project' style='border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px;'>%</td>
                <td style='border-width: 1px;'>%</td>
                <td style='border-width: 1px;' >h</td>
                <td style='border-width: 1px;' id='feuillePointageMatin'>Matin</td>
                <td style='border-width: 1px;' id='feuillePointageAM'>Après-midi</td>
                <td style='border-width: 1px;'>Nombre</td>
                <td style='border-width: 1px;'>Montant</td>
                <td style='border-width: 1px;'>Nombre</td>
            </tr>
            ";
        // line 134
        $context["frenchDays"] = array("Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche");
        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monthDates"]) ? $context["monthDates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 136
            echo "                <tr>
                    <td class='dayDateCell' style=\"";
            // line 137
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frenchDays"]) ? $context["frenchDays"] : null), twig_date_format_filter($this->env, $context["date"], "l"), array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
            echo "</td>
                    <td class=\"projectPercentageCell project\" ";
            // line 138
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);\" ";
            } else {
                echo " contenteditable='true' ";
            }
            echo "></td>
                    <td class=\"dailyTotalPercentageCell\" style=\"";
            // line 139
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">
                        ";
            // line 140
            if ((((twig_date_format_filter($this->env, $context["date"], "l") != "Saturday") && (twig_date_format_filter($this->env, $context["date"], "l") != "Sunday")) && !twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                // line 141
                echo "                            0.00
                        ";
            }
            // line 143
            echo "                    </td>
                    <td class='dailyHoursMod' ";
            // line 144
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166); border-left-width: 1px; border-right-width: 1px;\" ";
            } else {
                echo " contenteditable='true' style=\"border-left-width: 1px; border-right-width: 1px;\" ";
            }
            echo "></td>
                    <td class='abscenceMatinSelector' style=\"";
            // line 145
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px;\">
                        <select>
                            ";
            // line 147
            if (((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday"))) {
                // line 148
                echo "                                <option value=''></option>
                                <option value='AT'>AT</option>
                                <option value='MT'>MT</option>
                                <option value='PA'>PA</option>
                                <option value='MA'>MA</option>
                            ";
            } else {
                // line 154
                echo "                                <option value=''></option>
                                <option value='AA'>AA</option>
                                <option value='TJ'>TJ</option>
                                <option value='AT'>AT</option>
                                <option value='MT'>MT</option>
                                <option value='PA'>PA</option>
                                <option value='CS'>CS</option>
                                <option value='CP'>CP</option>
                                <option value='AV'>AV</option>
                                <option value='RT'>RT</option>
                                <option value='MA'>MA</option>
                                <option value='PM'>PM</option>
                                <option value='RE'>RE</option>
                                <option value='Autre'>Autre</option>
                            ";
            }
            // line 169
            echo "                        </select>
                    </td>
                    <td class='abscenceAMSelector' style=\"";
            // line 171
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-right-width: 1px;\">
                        <select>
                            ";
            // line 173
            if (((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday"))) {
                // line 174
                echo "                                <option value=''></option>
                                <option value='AT'>AT</option>
                                <option value='MT'>MT</option>
                                <option value='PA'>PA</option>
                                <option value='MA'>MA</option>
                            ";
            } else {
                // line 180
                echo "                                <option value=''></option>
                                <option value='AA'>AA</option>
                                <option value='TJ'>TJ</option>
                                <option value='AT'>AT</option>
                                <option value='MT'>MT</option>
                                <option value='PA'>PA</option>
                                <option value='CS'>CS</option>
                                <option value='CP'>CP</option>
                                <option value='AV'>AV</option>
                                <option value='RT'>RT</option>
                                <option value='MA'>MA</option>
                                <option value='PM'>PM</option>
                                <option value='RE'>RE</option>
                                <option value='Autre'>Autre</option>
                            ";
            }
            // line 195
            echo "                        </select>
                    </td>
                    <td class='titreRepasNumberSelector' style=\"";
            // line 197
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">
                        ";
            // line 198
            if ((((twig_date_format_filter($this->env, $context["date"], "l") != "Saturday") && (twig_date_format_filter($this->env, $context["date"], "l") != "Sunday")) && !twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                // line 199
                echo "                            <select>
                                <option value='' selected='selected'></option>
                                <option value='1'>1</option>
                            </select>
                        ";
            }
            // line 204
            echo "                    </td>
                    <td class='forfaitsDeplacementMontant' ";
            // line 205
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);  border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            } else {
                echo " style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            }
            echo "></td>
                    <td class='primesPanierNumber' ";
            // line 206
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);  border-left-width: 1px; border-right-width: 1px;\" ";
            } else {
                echo " style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            }
            echo "></td>
                    <td class='comments' style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true></td>
                </tr>        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "            <tr>
                <td style='border: none;'></td>
                <td style=\"border: none;\"></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td id='titreRepasTotalNumber' style=\"border-width: 2px; border-top: none; border-right-width: 1px; border-left-width: 1px;\">0</td>
                <td id='ForfaitDeplacementTotalMontant' style=\"border-width: 2px; border-top: none; border-left-width: 1px; border-right-width: 1px;\">0</td>
                <td id='PrimesPanierTotalNumber' style=\"border-width: 2px; border-top: none; border-left-width: 1px; border-right-width: 1px\">0</td>
                <td style='border: none; border-left: solid 1px black;'></td>    
            </tr>
            <tr>
                <td style='border: none;'></td>
                <td class='monthlyTotalPercentageCell' style='border: none;'></td>
                <td style='border: none;'></td>
                <td id='monthlyTotalHoursMod' style='border-bottom: none;'>0</td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>    
                <td style='border: none;'></td>    
            </tr>
            <tr>
                <td style='border: none;'></td>
                <td class='monthlyTotalCell' style='border: none; color: white;'></td>
                <td style='border: none;'></td>
                <td style='border-bottom: none;'>hmod</td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>    
                <td style='border: none;'></td>    
            </tr>
        </table>
        <div id='ajaxSearchAffairesDiv' style='position: absolute; top: 0; left: 0; background-color: white; border: 1px solid rgb(165, 172, 178); font-size: 0.8vw; display: none;'>
        </div>
        <div id='projectDeleteMenu'>
            <img src='";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Delete-24.png"), "html", null, true);
        echo "' alt='Supprimer projet'><p>Supprimer cette affaire</p>
        </div>
    </div>

    <div id='tableFeuillePointageTypesAbscencesDivContainer'>
        <table id='tableFeuillePointageTypesAbscences'>
            <tr>
                <td colspan=3 style='border-width: 2px;'>Types d'absences</td>
            </tr>
            <tr>
                <td style='border-top-width: 2px; border-left-width: 2px; border-bottom-width: 2px;'>Nombre</td>
                <td style='border-top-width: 2px; border-bottom-width: 2px;'>Code absence</td>
                <td style='border-top-width: 2px; border-right-width: 2px; border-bottom-width: 2px;'>Type absence</td>
            </tr>
            ";
        // line 264
        $context["typesAbscences"] = array("AA" => "Absences autorisées payées", "TJ" => "Accident trajet", "AT" => "Accident travail", "MT" => "Congé de maternité", "PA" => "Congé de paternité", "CS" => "Congé sans solde", "CP" => "Congés payés", "AV" => "Evènement familial", "RT" => "RTT", "MA" => "Maladie", "PM" => "Maladie professionnelle", "RE" => "Récupération (non indiquée au bulletin)", "Autre" => "A préciser en commentaire");
        // line 268
        echo "
            ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesAbscences"]) ? $context["typesAbscences"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["code"] => $context["type"]) {
            // line 270
            echo "                <tr>
                    <td class='nbAbscences' style='border-left-width: 2px; ";
            // line 271
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " border-bottom-width: 2px; ";
            }
            echo "'>0</td>
                    <td  ";
            // line 272
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " style='border-bottom-width: 2px;' ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "</td>
                    <td style='border-right-width: 2px; ";
            // line 273
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " border-bottom-width: 2px; ";
            }
            echo "'>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "        </table>

        <table id='tableFeuillePointageTitreTransport'>
            <tr>
                <td colspan='3' style='border-width: 2px;'>Titre de transport</td>
            </tr>
            <tr>
                <td style='border-width: 2px;'>Montant total</td>
                <td style='border-width: 2px;'>Prise en charge employeur 50%*</td>
                <td style='border-width: 2px;'>Justificatif</td>
            </tr>
            <tr>
                <td id='titreTransportMontant' style='border-width: 2px;' contenteditable=true></td>
                <td id='titreTransportTotalMontant' style='border-width: 2px;'>0.00</td>
                <td id='titreTransportJustificatif' style='border-width: 2px;'>
                    <form id='sendTransportJustificatifForm' enctype='multipart/form-data' style='display: none;'>           
                        <input name='file' type='file' accept=\".pdf, application/pdf\">
                        <button type='submit'>Submit</button>
                    </form>
                    <button type='button' id='sendTransportJustificatifFormButton' class='boutonFormulaire'>Envoyer un justificatif</button>
                    <button type='button' id='uploadLoaderButton' style=\"background-image: url('";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "'); \">Envoyer un justificatif</button>
                    <div id='deleteJustificatifButton'>Justificatif envoyé &#10004;<span id='downloadJustificatifButtonSpan'>Voir</span><span id='deleteJustificatifButtonSpan' onclick='ajaxDeleteJustificatifTransport();'>Supprimer</span></div>
                </td>
            </tr>
        </table>

        <div id=\"divJustificatifs\">
            <button id=\"addJustificatifButton\" class=\"boutonFormulaire\" onclick=\"addJustificatifFile();\">Ajouter/voir justificatif(s)</button>
        </div>

        <div id=\"divRegularisation\">
            <p>Régularisation</p>
            <div id=\"divRegularisationText\" contenteditable=\"true\"></div>
        </div>

        <table id='tableFeuillePointageSignature' style=\"display: none;\">
            <tr>
                <td style='border-width: 2px;'>Signature collaborateur</td>
                <td id='signatureCollaborateur' colspan=2 style='border-width: 2px;' contenteditable=true></td>
            </tr>
            <tr>
                <td rowspan=2 style='border-width: 2px;'>Signature supérieur hiérarchique</td>
                <td style='border-width: 2px; width: 50%; border-right: none;'>Nom et prénom:</td>
                <td style='border-width: 2px; width: 50%; border-left: none;' contenteditable=true></td>
            </tr>
            <tr>
                <td colspan=2 style='border-width: 2px; height: 2vw;' contenteditable=true></td>
            </tr>
        </table>

        ";
        // line 326
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 327
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <div>
            ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Valider", array()), 'widget', array("label" => "Valider la feuille de pointage", "attr" => array("class" => "boutonCompilation")));
        echo "
        </div>
        ";
        // line 331
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

    <script>
        \$(window).load(function () {
            IECheck();
            getNewDate();
            displayDailyProjectsTotalPercentage();
            dispayMonthlyTotalHoursMod();
            displayMonthlyTotalTitresRepas();
            displayMonthlyTotalForfaitsDeplacement();
            displayMonthlyTotalPrimesPanier();
            displayTotalAbscences();
            displayTotalTitreTransport();
            onePerkOnly();
            getGXAffaires();
            showAffaireName();
            addProjectColumn();
            deleteProjectColumn();
            ajaxGetData();
            fixedHorizontalHeader();
            fixedVerticalHeader();
            nextLineOnEnter();
            cloneAbsenceAMToPM();
            ajaxUploadJustificatifTransport();
            copyMultipleCell();
            saveCSV();
            ajaxSaveData();
            // Affiche une fenêtre de confirmation lors de la validation du pointage.
            \$('#form_Valider').click(function (event) {
                event.preventDefault();
                // Si un montant de titre de transport est renseigné sans justificatif...
                if (\$('#titreTransportMontant').text() !== '' && \$('#deleteJustificatifButton').css('display') === 'none') {
                    // On affiche une fenêtre indiquant qu'il n'y a pas de justificatif de transport.
                    \$(\"#pointageAlertText\").text(\"Vous avez indiqué un montant de titre de transport sans ajouter de justificatif, voulez-vous valider la feuille de pointage quand même ?\");
                    \$(\"#pointageAlert\").dialog({
                        resizable: false,
                        height: \"auto\",
                        width: \"30%\",
                        modal: true,
                        draggable: false,
                        dialogClass: \"pointage-alert-content-class\",
                        title: \"Pas de justificatif de transport\",
                        buttons: {
                            // Si l'utilisateur valide...
                            \"Valider\": function () {
                                // On affiche une fenêtre de confirmation de validation.
                                \$(this).dialog(\"close\");
                                \$('#pointageAlertText').text('Confirmer la validation de la feuille de pointage ? Celle-ci ne sera plus modifiable.');
                                \$(\"#pointageAlert\").dialog({
                                    resizable: false,
                                    height: \"auto\",
                                    width: \"30%\",
                                    modal: true,
                                    draggable: false,
                                    dialogClass: \"pointage-alert-content-class\",
                                    title: \"Confirmer la validation ?\",
                                    buttons: {
                                        // Si l'utilisateur valide...
                                        \"Valider\": function () {
                                            ajaxPointageAssistanteAgenceValidation(\$('#form_month').val(), \$('#form_year').val());
                                            // On envoi le formulaire.
                                            \$(this).dialog(\"close\");
                                            \$(\"form[name='form']\").submit();
                                        },
                                        \"Annuler\": function () {
                                            \$(this).dialog(\"close\");
                                        }
                                    }
                                });
                                \$('.ui-dialog :button').blur();
                            },
                            // Si l'utilisateur annule, on ferme la fenêtre.
                            \"Annuler\": function () {
                                \$(this).dialog(\"close\");
                            }
                        }
                    });
                    \$('.ui-dialog :button').blur();
                }
                // Sinon...
                else {
                    // On affiche une fenêtre de confirmation de validation.
                    \$('#pointageAlertText').text('Confirmer la validation de la feuille de pointage ? Celle-ci ne sera plus modifiable.');
                    \$(\"#pointageAlert\").dialog({
                        resizable: false,
                        height: \"auto\",
                        width: \"30%\",
                        modal: true,
                        draggable: false,
                        dialogClass: \"pointage-alert-content-class\",
                        title: \"Confirmer la validation ?\",
                        buttons: {
                            \"Valider\": function () {
                                ajaxPointageAssistanteAgenceValidation(\$('#form_month').val(), \$('#form_year').val());
                                \$(this).dialog(\"close\");
                                \$(\"form[name='form']\").submit();
                            },
                            \"Annuler\": function () {
                                \$(this).dialog(\"close\");
                            }
                        }
                    });
                    \$('.ui-dialog :button').blur();
                }
            });
        });

        // Affiche un écran de chargement lors de l'exéction de requettes ajax lourdes.
        \$(document).ajaxSend(function (event, request, settings) {
            var ajaxUrl = settings.url.substr(settings.url.lastIndexOf('/') + 1); // Retourne une URL relative.
            if (ajaxUrl === \"pointage-ajax-set-date\" || ajaxUrl === \"pointage-ajax-get-data\" || ajaxUrl === \"pointage-ajax-get-status\") {
                \$('#loadingContent').show();
            }
            if (ajaxUrl === \"pointage-ajax-save-data\" || ajaxUrl === \"ajax-save-regularisation\") {
                savingNotification();
                \$('#pointageSavingNotification').finish().css('display', 'inline-block');
            }
        });

        // Cache l'écran de chargement et la notification de sauvegarde quand les requêtes ajax de chargement de la page et de sauvegarde sont terminées.
        \$(document).ajaxComplete(function () {
            if (\$.active <= 1) {
                \$('#loadingContent').hide();
                \$('#pointageSavingNotification').finish().delay(2000).fadeOut();
            }
        });

        // Met à jours les cellules des valeurs totals.
        function tableEventHandler() {
            displayDailyProjectsTotalPercentage();
            function displayDailyProjectsTotalPercentage() {
                // Colore en rouge les cellules dont le contenu n'est pas un nombre.
                function checkCellContentValidity(cell) {
                    if (isNaN(parseFloat(\$(cell).text(), 10)) || parseFloat(\$(cell).text()) > 100) {
                        if (\$(cell).text() !== '') {
                            \$(cell).css('background-color', 'red');
                        } else {
                            if (\$(cell).attr('contenteditable') === 'true') {
                                \$(cell).css('background-color', 'white');
                            } else {
                                \$(cell).css('background-color', 'rgb(166,166,166)');
                            }
                        }
                    } else {
                        \$(cell).css('background-color', 'white');
                    }
                }

                // Affiche la valeur total des cellules d'une même ligne ou 'Erreur' si celle-ci n'est pas valide.
                function checkTotalValue(cell, total) {
                    if (\$(cell).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (isNaN(total) || total > 100) {
                            \$(cell).text('Erreur');
                            \$(cell).css('background', 'red');
                        } else {
                            \$(cell).text(total.toFixed(2));
                            \$(cell).css('background', 'white');
                        }
                    }
                }

                \$('.dailyTotalPercentageCell').each(function () {
                    var total = 0;
                    \$(this).siblings('.projectPercentageCell[contenteditable=true]').each(function () {
                        checkCellContentValidity(this);
                        if (\$(this).text() !== '') {
                            total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                        }
                    });
                    checkTotalValue(this, total);
                });
            }

            dispayMonthlyTotalHoursMod();
            function dispayMonthlyTotalHoursMod() {
                var total = 0;
                var error = false;
                \$('.dailyHoursMod').each(function () {
                    if (\$(this).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (\$(this).text() !== '') {
                            if (Math.floor(\$(this).text()) == \$(this).text() && \$.isNumeric(\$(this).text())) {
                                \$(this).css('background-color', 'white');
                                total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                            } else {
                                \$(this).css('background-color', 'red');
                                error = true;
                            }
                        } else {
                            \$(this).css('background-color', 'white');
                        }
                    }
                });
                if (error) {
                    \$('#monthlyTotalHoursMod').css('background-color', 'red');
                    \$('#monthlyTotalHoursMod').text('Erreur');
                } else {
                    \$('#monthlyTotalHoursMod').css('background-color', 'white');
                    \$('#monthlyTotalHoursMod').text(total.toFixed(2));
                }
            }

            displayMonthlyTotalTitresRepas();
            function displayMonthlyTotalTitresRepas() {
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            }

            displayMonthlyTotalForfaitsDeplacement();
            function displayMonthlyTotalForfaitsDeplacement() {
                var total = 0;
                \$('.forfaitsDeplacementMontant').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#ForfaitDeplacementTotalMontant').text(total.toFixed(2));
            }

            displayMonthlyTotalPrimesPanier();
            function displayMonthlyTotalPrimesPanier() {
                var total = 0;
                \$('.primesPanierNumber').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#PrimesPanierTotalNumber').text(total.toFixed(2));
            }

            displayTotalAbscences();
            function displayTotalAbscences() {
                // Calcule le total de chaque type d'abscences et affiche la valeur dans la cellule correspondante.
                function getAbscencesCount(nbAbscencesCell) {
                    var codeAbsences = \$(nbAbscencesCell).next().text();
                    var total = 0;
                    \$('.abscenceMatinSelector').each(function () {
                        if (codeAbsences === \$(this).find('select option:selected').val()) {
                            total = parseFloat(total, 10) + parseFloat(0.5, 10);
                        }
                    });
                    \$('.abscenceAMSelector').each(function () {
                        if (codeAbsences === \$(this).find('select option:selected').val()) {
                            total = parseFloat(total, 10) + parseFloat(0.5, 10);
                        }
                    });
                    \$(nbAbscencesCell).text(total);
                }

                \$('.nbAbscences').each(function () {
                    getAbscencesCount(this);
                });
            }

            displayTotalTitreTransport();
            function displayTotalTitreTransport() {
                var total = 0;
                if (\$('#titreTransportMontant').text() !== '') {
                    total = parseFloat(\$('#titreTransportMontant').text(), 10) / 2;
                }
                \$('#titreTransportTotalMontant').text(total.toFixed(2));
            }

            onePerkOnly();
            function onePerkOnly() {
                // Lors d'un changement sur les selecteur de titre repas.
                \$('.titreRepasNumberSelector select').each(function () {
                    // Si la valeur du sélécteur est à '1'.
                    if (\$(this).val() === '1') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').val('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').val('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });
                \$('.abscenceMatinSelector select').each(function () {
                    if (\$(this).val() !== '') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                        \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });
                \$('.abscenceAMSelector select').each(function () {
                    if (\$(this).val() !== '') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                        \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });
                // Lorsqu'on écris dans une case de forfait déplacement.
                \$('.forfaitsDeplacementMontant').each(function () {
                    // Si la case n'est pas vide.
                    if (\$(this).text() !== '') {
                        \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                        \$(this).siblings('.abscenceAMSelector').find('select').val('');
                        \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                        \$(this).siblings('.primesPanierNumber').text('');
                        \$(this).siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });
                // Lorsqu'on écris dans une case de prime panier.
                \$('.primesPanierNumber').each(function () {
                    // Si la case n'est pas vide.
                    if (\$(this).text() !== '') {
                        \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                        \$(this).siblings('.abscenceAMSelector').find('select').val('');
                        \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                        \$(this).siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    }
                });
            }
        }

        // Affiche les jours du moi en fonction du mois et de l'année séléctionées.
        function getNewDate() {
            \$('#tableFeuillePointage').on('change', '#pointage_month_selector, #pointage_year_selector', function () {
                \$('#form_month').val(\$('#pointage_month_selector').val());
                \$('#form_year').val(\$('#pointage_year_selector').val());
                deleteProjectColumn();
                resetCellsValues();
                ajaxGetNewDate();
            });
            // Supprime les colonnes existantes de projets suplémentaires et rétablie le colspan de \"Operationnel\" à 2.
            function deleteProjectColumn() {
                var firstColumnIndex = \$('#tableFeuillePointage tr:nth-child(2) .project').first().index() + 2;
                var lastColumnIndex = \$('#tableFeuillePointage tr:nth-child(2) .project').last().index() + 1;
                \$('#tableFeuillePointage tr:nth-child(n+2) td:nth-child(n+' + firstColumnIndex + '):nth-child(-n+' + lastColumnIndex + ')').remove();
                \$('#operationnel').attr('colspan', 2);
            }

            // Remet à zero les valeurs de cellules.
            function resetCellsValues() {
                \$('[contenteditable]').text('');
                \$('.project').first().text(\"Nouvelle Affaire\");
                \$('.dailyTotalPercentageCell, .monthlyTotalCell, #ForfaitDeplacementTotalMontant, #PrimesPanierTotalNumber, #titreTransportTotalMontant').text(0.00);
                \$('#monthlyTotalHoursMod, #titreRepasTotalNumber, .nbAbscences').text(0);
                \$('select:not(#pointage_month_selector, #pointage_year_selector)').val('');
            }

            // Récupère les jours en fonction du moi et de l'année.
            function ajaxGetNewDate() {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '";
        // line 690
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_set_date");
        echo "',
                    data: {month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val()},
                    success: function (response) {

                        // Ajout/supprime des lignes en fonction du nombre de jours du mois.
                        if (\$('.dayDateCell').length !== response.length) {
                            var difference = response.length - \$('.dayDateCell').length;
                            if (difference > 0) {
                                for (var i = 0; i < difference; i++) {
                                    var lastTr = \$('.dayDateCell').last().parent('tr');
                                    lastTr.after(lastTr.clone());
                                }
                            } else if (difference < 0) {
                                for (var i = 0; i < Math.abs(difference); i++) {
                                    var lastTr = \$('.dayDateCell').last().parent('tr');
                                    lastTr.remove();
                                }
                            }
                        }

                        // Pour chaque ligne, remplace la date et remplis les cellules avec les valeurs sauvegardées.
                        \$('.dayDateCell').each(function (index) {
                            \$(this).transition({
                                rotateX: '360deg'
                            }, function () {
                                \$(this).css('transform', '');
                            });
                            if (response[index]['date'] === undefined) {
                                \$(this).html('');
                                \$(this).parent('tr').find('td').css('background', 'white');
                            } else {
                                \$(this).html(response[index]['date']);
                                if (response[index]['date'].indexOf('Samedi') >= 0 || response[index]['date'].indexOf('Dimanche') >= 0 || response[index]['ferie'] === true) {
                                    \$(this).parent('tr').find('td').css('background', 'rgb(166,166,166)');
                                    \$(this).next('td').attr('contenteditable', false);
                                    \$(this).siblings('.dailyHoursMod').attr('contenteditable', false);
                                    \$(this).siblings('.dailyTotalPercentageCell').html('');
                                    \$(this).siblings('.abscenceMatinSelector').html(\"<select><option value=''></option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='MA'>MA</option></select>\");
                                    \$(this).siblings('.abscenceAMSelector').html(\"<select><option value=''></option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='MA'>MA</option></select>\");
                                    \$(this).siblings('.titreRepasNumberSelector').html('');
                                    \$(this).siblings('.forfaitsDeplacementMontant').attr('contenteditable', true);
                                    \$(this).siblings('.primesPanierNumber').attr('contenteditable', false);
                                    \$(this).siblings('.comments').attr('contenteditable', true);
                                    \$(this).siblings('.comments').css('background', 'white');
                                } else {
                                    \$(this).parent('tr').find('td').css('background', 'white');
                                    \$(this).next('td').attr('contenteditable', true);
                                    \$(this).siblings('.dailyHoursMod').attr('contenteditable', true);
                                    \$(this).siblings('.abscenceMatinSelector').html(\"<select><option value=''></option><option value='AA'>AA</option><option value='TJ'>TJ</option><option value='AT'>AT</option><option value='MT'>MT</option> <option value='PA'>PA</option> <option value='CS'>CS</option><option value='CP'>CP</option> <option value='AV'>AV</option> <option value='RT'>RT</option> <option value='MA'>MA</option> <option value='PM'>PM</option> <option value='RE'>RE</option> <option value='Autre'>Autre</option></select>\");
                                    \$(this).siblings('.abscenceAMSelector').html(\"<select><option value=''></option><option value='AA'>AA</option><option value='TJ'>TJ</option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='CS'>CS</option><option value='CP'>CP</option><option value='AV'>AV</option><option value='RT'>RT</option><option value='MA'>MA</option><option value='PM'>PM</option><option value='RE'>RE</option><option value='Autre'>Autre</option></select>\");
                                    \$(this).siblings('.titreRepasNumberSelector').html(\"<select><option value=''></option><option value='1'>1</option></select>\");
                                    \$(this).siblings('.forfaitsDeplacementMontant').attr('contenteditable', true);
                                    \$(this).siblings('.primesPanierNumber').attr('contenteditable', true);
                                    \$(this).siblings('.comments').attr('contenteditable', true);
                                }
                            }
                        });
                        ajaxGetData();
                    }
                });
            }
        }

        // Calcule et affiche le pourcentage total de chaque ligne de projets et vérifie la validité des donnnées.
        function displayDailyProjectsTotalPercentage() {

            // Colore en rouge les cellules dont le contenu n'est pas un nombre.
            function checkCellContentValidity(cell) {
                if (isNaN(parseFloat(\$(cell).text(), 10)) || parseFloat(\$(cell).text(), 10) > 100) {
                    if (\$(cell).text() !== '') {
                        \$(cell).css('background', 'red');
                    } else {
                        \$(cell).css('background', 'white');
                    }

                } else {
                    \$(cell).css('background', 'white');
                }
            }

            // Affiche la valeur total des cellules d'une même ligne ou 'Erreur' si celle-ci n'est pas valide.
            function checkTotalValue(cell, total) {
                if (\$(cell).css('background-color') !== 'rgb(166, 166, 166)') {
                    if (isNaN(total) || total > 100) {
                        \$(cell).text('Erreur');
                        \$(cell).css('background', 'red');
                    } else {
                        \$(cell).text(total.toFixed(2));
                        \$(cell).css('background', 'white');
                    }
                }
            }

            \$('#tableFeuillePointage').on('blur keyup paste input', '.projectPercentageCell', function () {
                \$('.dailyTotalPercentageCell').each(function () {
                    var total = 0;
                    \$(this).siblings('.projectPercentageCell[contenteditable=true]').each(function () {
                        checkCellContentValidity(this);
                        if (\$(this).text() !== '') {
                            total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                        }
                    });
                    checkTotalValue(this, total);
                });
            });
        }

        // Calcule et affiche le nombre d'heure total pour le mois courant.
        function dispayMonthlyTotalHoursMod() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.dailyHoursMod', function () {
                var total = 0;
                var error = false;
                \$('.dailyHoursMod').each(function () {
                    if (\$(this).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (\$(this).text() !== '') {
                            if (Math.floor(\$(this).text()) == \$(this).text() && \$.isNumeric(\$(this).text())) {
                                \$(this).css('background-color', 'white');
                                total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                            } else {
                                \$(this).css('background-color', 'red');
                                error = true;
                            }
                        } else {
                            \$(this).css('background-color', 'white');
                        }
                    }
                });
                if (error) {
                    \$('#monthlyTotalHoursMod').css('background-color', 'red');
                    \$('#monthlyTotalHoursMod').text('Erreur');
                } else {
                    \$('#monthlyTotalHoursMod').css('background-color', 'white');
                    \$('#monthlyTotalHoursMod').text(total.toFixed(2));
                }
            });
        }

        // Calcule et affiche le nombre total de titres repas pour le mois courant.
        function displayMonthlyTotalTitresRepas() {
            \$('#tableFeuillePointage').on('change', '.titreRepasNumberSelector select', function () {
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });
        }

        // Calcule et affiche le montant total du forfaits de déplacement pour le mois courant.
        function displayMonthlyTotalForfaitsDeplacement() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.forfaitsDeplacementMontant', function () {
                var total = 0;
                \$('.forfaitsDeplacementMontant').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#ForfaitDeplacementTotalMontant').text(total.toFixed(2));
            });
        }

        // Calcule et affiche le montant total des primes de panier pour le mois courant.
        function displayMonthlyTotalPrimesPanier() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.primesPanierNumber', function () {
                var total = 0;
                \$('.primesPanierNumber').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#PrimesPanierTotalNumber').text(total.toFixed(2));
            });
        }

        // Calcule et affiche le nombre total de chaque type d'abscences.
        function displayTotalAbscences() {
            // Calcule le total de chaque type d'abscences et affiche la valeur dans la cellule correspondante.
            function getAbscencesCount(nbAbscencesCell) {
                var codeAbsences = \$(nbAbscencesCell).next().text();
                var total = 0;
                \$('.abscenceMatinSelector').each(function () {
                    if (codeAbsences === \$(this).find('select option:selected').val()) {
                        total = parseFloat(total, 10) + parseFloat(0.5, 10);
                    }
                });
                \$('.abscenceAMSelector').each(function () {
                    if (codeAbsences === \$(this).find('select option:selected').val()) {
                        total = parseFloat(total, 10) + parseFloat(0.5, 10);
                    }
                });
                \$(nbAbscencesCell).text(total);
            }

            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select, .abscenceAMSelector select', function () {
                \$('.nbAbscences').each(function () {
                    getAbscencesCount(this);
                });
            });
        }

        // Calcule le montant de remboursement des titres de tranport.
        function displayTotalTitreTransport() {
            \$('#tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', '#titreTransportMontant', function () {
                var total = 0;
                if (\$('#titreTransportMontant').text() !== '') {
                    total = parseFloat(\$('#titreTransportMontant').text(), 10) / 2;
                }
                \$('#titreTransportTotalMontant').text(total.toFixed(2));
            });
        }

        // Vérifie qu'une seule option est renseignée parmis les titres repas, la prime panier ou le forfait déplacement pour chaque jours.
        function onePerkOnly() {
            // Lors d'un changement sur les selecteur de titre repas.
            \$('#tableFeuillePointage').on('change', '.titreRepasNumberSelector select', function () {
                // Si la valeur du sélécteur est à '1'.
                if (\$(this).val() === '1') {
                    // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et efface leur valeurs.
                    \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').val('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').val('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                }
                // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines.        
                else {
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                }
            });

            // Lorsqu'on écris dans une case de forfait déplacement.
            \$('#tableFeuillePointage').on('keyup', '.forfaitsDeplacementMontant', function () {
                // Si la case n'est pas vide.
                if (\$(this).text() !== '' && \$(this).siblings('.dayDateCell').css('background-color') !== 'rgb(166, 166, 166)') {
                    \$(this).css('background-color', 'white');
                    //\$(this).siblings('.abscenceMatinSelector').find('select').val('');
                    //\$(this).siblings('.abscenceAMSelector').find('select').val('');
                    \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                    \$(this).siblings('.primesPanierNumber').text('');
                    \$(this).siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                }
                // Si la case est vide.
                else if (\$(this).siblings('.dayDateCell').css('background-color') !== 'rgb(166, 166, 166)') {
                    \$(this).siblings('.primesPanierNumber').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });

            // Lorsqu'on écris dans une case de prime panier.
            \$('#tableFeuillePointage').on('keyup', '.primesPanierNumber', function () {
                // Si la case n'est pas vide.
                if (\$(this).text() !== '') {
                    \$(this).css('background-color', 'white');
                    \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                    \$(this).siblings('.abscenceAMSelector').find('select').val('');
                    \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                    \$(this).siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                }
                // Si la case est vide.
                else {
                    \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });

            // Lorsqu'on séléctionne une absence...
            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select', function () {
                if (\$(this).val() !== '' || \$(this).parent('.abscenceMatinSelector').siblings('.abscenceAMSelector').find('select').val() !== '') {
                    \$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').text('');
                    //\$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                } else if (\$(this).parent('td').css('background-color') !== 'rgb(166, 166, 166)') {
                    \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });
            \$('#tableFeuillePointage').on('change', '.abscenceAMSelector select', function () {
                if (\$(this).val() !== '' || \$(this).parent('.abscenceAMSelector').siblings('.abscenceMatinSelector').find('select').val() !== '') {
                    \$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').text('');
                    //\$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                } else if (\$(this).parent('td').css('background-color') !== 'rgb(166, 166, 166)') {
                    \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });
        }

        // Lis le contenu des cellules du tableau et renvoie le résultat sous forme de chaine pour sauvegarde en base de données.
        function ajaxSaveData() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            // Détecte l'édition de texte des cellules et sauvegarde les changement en base de donnée.
            \$('#tableFeuillePointage, #tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', 'td[contenteditable=true]:not(tr:nth-child(2) .project)', function () {
                // Permet d'ajouter un temps d'attente avant de lancer la sauvegarde.
                delay(function () {
                    var data = {};
                    data['contenteditable'] = [];
                    data['select'] = [];
                    data['project'] = [];
                    data['projectName'] = [];
                    data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(2) .project').length;
                    \$('td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu)').each(function (index) {
                        data['contenteditable'][index] = \$(this).text();
                    });
                    \$('select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                        data['select'][index] = \$(this).val();
                    });
                    \$('.project[contenteditable=true]').each(function (index) {
                        data['project'][index] = \$(this).text();
                    });
                    \$('#tableFeuillePointage tr:nth-child(2) .project').each(function (index) {
                        data['projectName'][index] = \$(this).text();
                    });
                    var serializedData = JSON.stringify(data);
                    console.log(\"Sauvegarde cellule texte: \" + \"";
        // line 1056
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\");
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 1059
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                        data: {user: '";
        // line 1060
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData, signatureCollaborateur: \$('#signatureCollaborateur').text()}
                    });
                }, 1500);
            });
            // Détecte l'édition de texte des selects et sauvegarde les changement en base de donnée.
            \$('#tableFeuillePointage').on('change', 'select:not(#pointage_month_selector, #pointage_year_selector)', function () {
                var data = {};
                data['contenteditable'] = [];
                data['select'] = [];
                data['project'] = [];
                data['projectName'] = [];
                data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(2) .project').length;
                \$('td[contenteditable=true]:not(#signatureCollaborateur, .project)').each(function (index) {
                    data['contenteditable'][index] = \$(this).text();
                });
                \$('select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                    data['select'][index] = \$(this).val();
                });
                \$('.project[contenteditable=true]').each(function (index) {
                    data['project'][index] = \$(this).text();
                });
                \$('#tableFeuillePointage tr:nth-child(3) .project').each(function (index) {
                    data['projectName'][index] = \$(this).text();
                });
                var serializedData = JSON.stringify(data);
                console.log(\"Sauvegarde sélecteur: \" + \"";
        // line 1085
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\");
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 1088
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                    data: {user: '";
        // line 1089
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData}
                });
            });
            // Détecte l'édition de texte de la case \"Régularisation et sauvegarde les changements en base de donnée.
            \$('#tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', '#divRegularisation #divRegularisationText', function () {
                // On récupére le texte de la case.
                var regularisationText = \$(this).text();
                // Permet d'ajouter un temps d'attente avant de lancer la sauvegarde.
                delay(function () {
                    console.log(\"Sauvegarde régularisation: \" + '";
        // line 1098
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "');
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 1101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_regularisation");
        echo "',
                        data: {user: '";
        // line 1102
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), regularisationText: regularisationText}
                    });
                }, 1500);
            });
        }

        // Récupère les données du tableau en base de données et les injectes dans les cellules.
        function ajaxGetData() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 1112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_data");
        echo "',
                data: {month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), username: '";
        // line 1113
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "'},
                success: function (response) {
                    // Si il existe des données correspondant au mois et à l'année.
                    if (response !== 'null') {
                        var data = JSON.parse(response);
                        // Ajoute un td après chaque td du dernier projet.
                        function addTd() {
                            var total = \$('#tableFeuillePointage').find('tr').length;
                            \$('#tableFeuillePointage').find('tr').each(function (index) {
                                if (index === 1) {
                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true>Nouvelle Affaire></td>\");
                                } else if (index === 2) {
                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;'>%</td>\");
                                } else if (index === total - 2) {
                                    //\$('.monthlyTotalPercentageCell').last().css('background-color', 'orange');
                                    \$('.monthlyTotalPercentageCell').last().after(\"<td class='monthlyTotalPercentageCell' style='border: 1px solid black; opacity: 0;'></td>\");
                                } else if (index === total - 1) {
                                    \$('.monthlyTotalCell').last().after(\"<td class='monthlyTotalCell' style='border: none; color:white;'>0.00</td>\");
                                    //\$('.monthlyTotalCell').last().css('background-color', 'orange');
                                } else if (index === total - 3) {
                                    \$('#titreRepasTotalNumber').before(\"<td style='border: none;'></td>\");
                                } else if (index > 1 && index < total - 3) {
                                    var background = \$(this).find('.project').last().css('background-color');
                                    var contenteditable = \$(this).find('.project').last().attr('contenteditable');
                                    \$(this).find('.project').last().after(\"<td class='projectPercentageCell project'></td>\");
                                    \$(this).find('.project').last().css('background-color', background);
                                    \$(this).find('.project').last().attr('contenteditable', contenteditable);
                                }
                            });
                        }

                        // Incrémente le colspan du header des projets de 1.
                        function setColSpan() {
                            var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                            \$('#operationnel').attr('colspan', colspan + 1);
                        }

                        if (data['nbProject'] !== undefined) {
                            for (var i = 0; i < data['nbProject'] - 1; i++) {
                                addTd();
                                setColSpan();
                            }
                        }

                        if (data['contenteditable'] !== undefined) {
                            \$('td[contenteditable=true]:not(#signatureCollaborateur, .project)').each(function (index) {
                                \$(this).text(data['contenteditable'][index]);
                            });
                        }

                        if (data['select'] !== undefined) {
                            \$('select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                                \$(this).val(data['select'][index]);
                            });
                        }

                        if (data['project'] !== undefined) {
                            \$('.project[contenteditable=true]').each(function (index) {
                                \$(this).text(data['project'][index]);
                            });
                        }

                        if (data['justificatifTransport'] !== undefined) {
                            // On cache le bouton d'upload, on attribut l'id du justificatif au bouton de suppression, on attribut le lien de téléchargement du fichier au bouton d'affichage et on l'affiche.
                            \$('#sendTransportJustificatifFormButton').hide();
                            \$('#deleteJustificatifButtonSpan').attr('idjustificatif', data['justificatifTransport']);
                            \$('#downloadJustificatifButtonSpan').attr('onclick', \"window.location = '\" + '";
        // line 1179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_download_justificatif_transport");
        echo "/' + data['justificatifTransport'] + \"';\");
                            \$('#deleteJustificatifButton').show();
                        }

                        // Si il existe un texte de régularisation...
                        if (data['regularisation'] !== undefined) {
                            \$('#divRegularisationText').text(data['regularisation']); // On l'assigne à la case de régularisation.
                        }
                    }
                    // Si il n'y a pas de données pour ce mois et cette année.
                    else {
                        // On récupére les valeurs du mois précédent et de l'année séléctionnés.
                        var month = \$('#pointage_month_selector option:selected').val() - 1;
                        var year = \$('#pointage_year_selector option:selected').val();
                        // Si le mois de janvier est séléctionné, on retourne le mois de décembre de l'année précedente.
                        if (month === 0) {
                            month = 12;
                            year = year - 1;
                        }

                        \$.ajax({
                            type: 'POST',
                            url: '";
        // line 1201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_data");
        echo "',
                            data: {month: month, year: year},
                            success: function (response) {
                                if (response !== 'null') {
                                    var data = JSON.parse(response);
                                    // Si il existe des affaires sur le mois précédent.
                                    if (data['projectName'] !== undefined) {
                                        // Ajoute un td après chaque td du dernier projet.
                                        function addTd() {
                                            var total = \$('#tableFeuillePointage').find('tr').length;
                                            \$('#tableFeuillePointage').find('tr').each(function (index) {
                                                if (index === 1) {
                                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true>Nouvelle Affaire></td>\");
                                                } else if (index === 2) {
                                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;'>%</td>\");
                                                } else if (index === total - 2) {
                                                    \$('.monthlyTotalPercentageCell').last().after(\"<td class='monthlyTotalPercentageCell' style='border: 1px solid black; opacity: 0;'></td>\");
                                                } else if (index === total - 1) {
                                                    \$('.monthlyTotalCell').last().after(\"<td class='monthlyTotalCell' style='border: none; color:white;'>0.00</td>\");
                                                } else if (index === total - 3) {
                                                    \$('#titreRepasTotalNumber').before(\"<td style='border: none;'></td>\");
                                                } else if (index > 1 && index < total - 3) {
                                                    var background = \$(this).find('.project').last().css('background-color');
                                                    var contenteditable = \$(this).find('.project').last().attr('contenteditable');
                                                    \$(this).find('.project').last().after(\"<td class='projectPercentageCell project'></td>\");
                                                    \$(this).find('.project').last().css('background-color', background);
                                                    \$(this).find('.project').last().attr('contenteditable', contenteditable);
                                                }
                                            });
                                        }
                                        // Incrémente le colspan du header des projets de 1.
                                        function setColSpan() {
                                            var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                                            \$('#operationnel').attr('colspan', colspan + 1);
                                        }

                                        // On ajout les colonnes nécessaire.
                                        if (data['nbProject'] !== undefined) {
                                            for (var i = 0; i < data['nbProject'] - 1; i++) {
                                                addTd();
                                                setColSpan();
                                            }
                                        }

                                        // On place les nom d'affaire sur les colonnes.
                                        \$('#tableFeuillePointage tr:nth-child(2) .project').each(function (index) {
                                            \$(this).text(data['projectName'][index]);
                                        });
                                    }
                                }
                            }
                        });
                    }
                    ajaxGetPointageStatus();
                    deleteProjectColumn();
                    tableEventHandler();
                }
            });
        }

        // Ajout une nouvelle colonne de projet au tableau.
        function addProjectColumn() {
            \$('#addProject').click(function () {
                addTd();
                setColSpan();
            });
            // Ajoute un td après chaque td du dernier projet.
            function addTd() {
                var total = \$('#tableFeuillePointage').find('tr').length;
                \$('#tableFeuillePointage').find('tr').each(function (index) {
                    if (index === 1) {
                        \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true></td>\");
                    } else if (index === 2) {
                        \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;'>%</td>\");
                    } else if (index === total - 2) {
                        \$('.monthlyTotalPercentageCell').last().after(\"<td class='monthlyTotalPercentageCell' style='border: 1px solid black; opacity: 0;'></td>\");
                    } else if (index === total - 1) {
                        \$('.monthlyTotalCell').last().after(\"<td class='monthlyTotalCell' style='border: none; color:white;'>0.00</td>\");
                    } else if (index === total - 3) {
                        \$('#titreRepasTotalNumber').before(\"<td style='border: none;'></td>\");
                    } else if (index > 1 && index < total - 3) {
                        var background = \$(this).find('.project').last().css('background-color');
                        var contenteditable = \$(this).find('.project').last().attr('contenteditable');
                        \$(this).find('.project').last().after(\"<td class='projectPercentageCell project'></td>\");
                        \$(this).find('.project').last().css('background-color', background);
                        \$(this).find('.project').last().attr('contenteditable', contenteditable);
                    }
                });
            }

            // Incrémente le colspan du header des projets de 1.
            function setColSpan() {
                var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                \$('#operationnel').attr('colspan', colspan + 1);
            }
        }

        // Supprime une colonne de projet au tableau.
        function deleteProjectColumn() {
            // Lors d'un clic droit sur une cellule de nom d'affaire.
            \$('#tableFeuillePointage').on('contextmenu', 'tr:nth-child(2) .project', function (e) {
                // Si la feuille est déjà valider...
                if (!\$('#form_Valider').is(\":visible\")) {
                    // On quitte la fonction.
                    return false;
                }

                var projectCellule = \$(this);
                // On supprime le trigger de clique déjà existant.
                \$('#projectDeleteMenu').unbind('click');
                // On bloque l'apparition du menu contextuel.
                e.preventDefault();
                // On récupére les coordonnées du pointeur de la souris.
                var cursorY = 1.01 * e.pageY;
                var cursorX = 1.01 * e.pageX;
                // Si le nombre d'affaire est supérieur à 1.
                if (\$('#tableFeuillePointage tr:nth-child(2) .project').length > 1) {
                    // On positione et fait apparaître le menu de suppression.
                    \$('#projectDeleteMenu').css('top', cursorY);
                    \$('#projectDeleteMenu').css('left', cursorX);
                    \$('#projectDeleteMenu').css('display', 'inline-block');
                    // Lors du clic sur le menu de suppression.
                    \$('#projectDeleteMenu').click(function () {
                        \$('#projectDeleteMenu').hide();
                        deleteTd(projectCellule);
                        setColSpan();
                        ajaxSaveColumnDelete();
                    });
                }

                // Si on clique en dehors de la fenêtre de suppression, elle disparaît.
                \$(document).mouseup(function (e) {
                    var container = \$('#projectDeleteMenu');
                    // if the target of the click isn't the container... nor a descendant of the container...
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.hide();
                    }

                });
            });
            // Supprime les td de la colonne.
            function deleteTd(column) {
                var cellIndex = \$(column).index() - 1;
                \$('#tableFeuillePointage tr').each(function () {
                    \$(this).find('.project').eq(cellIndex).remove();
                });
                \$('#tableFeuillePointage tr:nth-last-child(3) td').eq(cellIndex).remove();
                \$('.monthlyTotalPercentageCell').eq(\$(column).index() - 1).remove();
                \$('.monthlyTotalCell').eq(\$(column).index() - 1).remove();
            }

            // Désincrémente le colspan du header des projets de 1.
            function setColSpan() {
                var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                \$('#operationnel').attr('colspan', colspan - 1);
            }

            // Lis le contenu des cellules du tableau et renvoie le résultat sous forme de chaine pour sauvegarde en base de données.
            function ajaxSaveColumnDelete() {
                \$(document).unbind('mouseup');
                var data = {};
                data['contenteditable'] = [];
                data['select'] = [];
                data['project'] = [];
                data['projectName'] = [];
                data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(3) .project').length;
                \$('td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu)').each(function (index) {
                    data['contenteditable'][index] = \$(this).text();
                });
                \$('select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                    data['select'][index] = \$(this).val();
                });
                \$('.project[contenteditable=true]').each(function (index) {
                    data['project'][index] = \$(this).text();
                });
                \$('#tableFeuillePointage tr:nth-child(2) .project').each(function (index) {
                    data['projectName'][index] = \$(this).text();
                });
                var serializedData = JSON.stringify(data);
                console.log(\"Sauvegarde suppression colonne: \" + \"";
        // line 1380
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\");
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 1383
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                    data: {user: \"";
        // line 1384
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\", month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData, signatureCollaborateur: \$('#signatureCollaborateur').text()}
                });
            }
        }

        // Vérifie le status de la feuille de pointage, colore la barre d'avancement en conséquence et vérouille la feuille si nécessaire.
        function ajaxGetPointageStatus() {
            \$('td[contenteditable=true]').css('cursor', 'initial');
            \$('td[contenteditable=true]').removeAttr('onkeydown');
            \$('select:not(#pointage_month_selector, #pointage_year_selector)').removeAttr('disabled');
            \$('#addProject').show();
            \$('#getLastMonthAffairesButton').show();
            \$('#form_Valider').show();
            \$('#sendTransportJustificatifFormButton, #uploadLoaderButton').removeAttr('disabled');
            \$('#deleteJustificatifButtonSpan').show();
            \$('.pointageStatusLine div').width('10%');
            \$(\".pointageStatusCircle\").css('background-color', 'lightgrey');
            \$(\".pointageStatusCircle\").filter(function () {
                return  \$(this).attr(\"step\") <= 0;
            }).css('background-color', 'green');
            \$.ajax({
                type: 'POST',
                url: '";
        // line 1406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_status");
        echo "',
                data: {username: '";
        // line 1407
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val()},
                success: function (response) {
                    var width = null;
                    var cercleNb = null;
                    switch (response) {
                        case '0':
                            width = 10;
                            cercleNb = 0;
                            break;
                        case '1':
                            width = 30;
                            cercleNb = 1;
                            break;
                        case '2':
                            width = 30;
                            cercleNb = 1;
                            break;
                        case '3':
                            width = 50;
                            cercleNb = 2;
                            break;
                        case '4':
                            width = 70;
                            cercleNb = 3;
                            break;
                        case '5':
                            width = 100;
                            cercleNb = 4;
                            break;
                    }

                    \$('.pointageStatusLine div').width(width + '%');
                    \$(\".pointageStatusCircle\").filter(function () {
                        return  \$(this).attr(\"step\") <= cercleNb;
                    }).css('background-color', 'green');
                    // Si le pointage a déjà été validé...            
                    if (response !== '0' && response !== '') {
                        // On désactive tous les éléments éditables.
                        \$('td[contenteditable=true], #divRegularisationText').css('cursor', 'default');
                        \$('td[contenteditable=true], #divRegularisationText').attr('onkeydown', \"return false\");
                        \$('td[contenteditable=true], #divRegularisationText').on('mousedown', function (e) {
                            e.preventDefault();
                        });
                        \$('select:not(#pointage_month_selector, #pointage_year_selector)').attr('disabled', 'disabled');
                        \$('#addProject').hide();
                        \$('#getLastMonthAffairesButton').hide();
                        \$('#form_Valider').hide();
                        \$('#sendTransportJustificatifFormButton, #uploadLoaderButton').attr('disabled', 'disabled');
                        \$('#deleteJustificatifButtonSpan').hide();
                    }
                }
            });
        }

        // Vérifie si le navigateur utilisé est Internet Explorer et affiche un message d'erreur dans ce cas.
        function IECheck() {
            var ms_ie = false;
            var ua = window.navigator.userAgent;
            var old_ie = ua.indexOf('MSIE ');
            var new_ie = ua.indexOf('Trident/');
            if ((old_ie > -1) || (new_ie > -1)) {
                ms_ie = true;
            }

            if (ms_ie) {
                // On affiche une fenêtre indiquant qu'il n'y a pas de justificatif de transport.
                \$(\"#pointageAlertText\").text('Le module de pointage n\\'est pas compatible avec Internet Explorer, veuillez utiliser Google Chrome à la place.');
                \$(\"#pointageAlert\").dialog({
                    resizable: false,
                    height: \"auto\",
                    width: \"30%\",
                    modal: true,
                    draggable: false,
                    dialogClass: \"pointage-alert-content-class\",
                    title: \"Problème de compatibilité\",
                    buttons: {
                        \"OK\": function () {
                            \$(this).dialog(\"close\");
                            window.location = \"";
        // line 1485
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_accueil");
        echo "\";
                        }
                    }
                });
                \$('.ui-dialog :button').blur();
            }
        }

        // Renvoi les affaires dont le numéro contient la chaine \"search\".
        function getGXAffaires() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Initialisation de la variable de stockage des requêtes ajax.
            var searchRequest = null;

            // Pour toutes action dans une cellule titre d'affaire.
            \$('#tableFeuillePointage').on('keyup paste', 'tr:nth-child(2) .project', function () {
                // Si une requête est déjà en cours on l'annule.
                if (searchRequest !== null) {
                    searchRequest.abort();
                    searchRequest = null;
                }

                \$('#ajaxSearchAffairesDiv').hide(); // On cache la div des résultats de recherche.

                var search = \$(this).text().trim().toUpperCase(); // La chaine de caractères recherchée.
                var celluleProject = \$(this); // La cellule dans laquelle on effectu la recherche.

                console.log(search);

                // Supprime les paragraphes de résultats existants.
                \$('#ajaxSearchAffairesDiv').empty();
                // Fixe la largeur minimale de la 'div' des résultats a 1.1 fois la taille de la cellule.
                var minWidth = celluleProject.outerWidth() * 1.1;
                \$('#ajaxSearchAffairesDiv').css('min-width', minWidth);
                // Cherche la chaine saisi dans le fichier csv des affaires et ajoute une balise 'p' par résultats.
                if (search !== '') {
                    delay(function () {
                        searchRequest = \$.ajax({
                            url: '";
        // line 1531
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_search_gx_affaire");
        echo "',
                            data: {searchString: search},
                            success: function (results) {
                                // Supprime les éventuels event de blur déjà existant.
                                celluleProject.unbind('blur');
                                // On initialise le tableau qui contiendras les affaires.
                                var numsAffaires = [];
                                // Tableau des résultats de la recherche.
                                var resultsArray = JSON.parse(results);

                                // Pour chaque lignes...
                                \$.each(resultsArray, function (index, value) {
                                    numsAffaires.push(value['numero']); // On ajoute le numéro de l'affaire dans le tableau des numéros d'affaires.

                                    if (value['numero'].trim() !== search.trim()) {
                                        // On injecte un paragraphe avec le nom et le numéro de l'affaire et on incrémente le compteur de résultat positif.
                                        \$('#ajaxSearchAffairesDiv').append(\"<p class='ajaxSearchAffairesDivResults' data-numaffaire='\" + value['numero'] + \"' style='background-color: white; text-align: center; margin: 0; padding: 0.5vw 0.5vw 0.5vw 0.5vw;'>\" + value['numero'] + (('nom' in value) ? \" \" + value['nom'] : '') + \"</p>\");
                                    }
                                });
                                // Effet visuel au passage de la souris sur les résultats.
                                \$('.ajaxSearchAffairesDivResults').hover(function () {
                                    \$(this).css('background-color', 'rgb(217, 217, 217)');
                                }, function () {
                                    \$(this).css('background-color', 'white');
                                });
                                // Lors du clique sur un résultat on remplace le contenu de la recherche par le résultat.
                                \$('.ajaxSearchAffairesDivResults').mousedown(function () {
                                    celluleProject.text(\$(this).data('numaffaire'));
                                });
                                // Positione la 'div' contenant les résultats sous la cellules focus.
                                \$('#ajaxSearchAffairesDiv').css('top', celluleProject.offset().top + celluleProject.outerHeight() - \$('#tableFeuillePointageDivContainer').offset().top);
                                \$('#ajaxSearchAffairesDiv').css('left', celluleProject.offset().left - \$('#tableFeuillePointageDivContainer').offset().left);

                                // Affiche la 'div' des résultats si elle n'est pas vide.
                                if (resultsArray.length > 0 && \$('#ajaxSearchAffairesDiv').children().length > 0) {
                                    \$('#ajaxSearchAffairesDiv').show();
                                }

                                // Cache la div des résultats lors du blur du champ de recherche et vide la cellule si le contenu n'est pas un numéro d'affaire existant.
                                celluleProject.blur(function () {
                                    \$('#ajaxSearchAffairesDiv').empty();
                                    \$('#ajaxSearchAffairesDiv').hide();

                                    if (\$.inArray(celluleProject.text(), numsAffaires) === -1) {
                                        celluleProject.text('');
                                    }

                                    \$('td[contenteditable=true]:not(tr:nth-child(2) .project)').trigger('keyup');
                                });
                            }
                        });
                    }, 1000);
                }
            });
        }

        // Affiche le nom de l'affaire correspondant au numéro survollé par la souris.
        function showAffaireName() {
            // Lorsqu'on passe la souris sur une cellule de numéro d'affaire.
            \$('#tableFeuillePointage tr:nth-child(2), #floatingHeader').on('mouseover', '.project, .floatingHeaderNumAffaireCell', function () {

                // On supprime les eventuels event de mouseout existants pour ne pas surcharger la mémoire.
                \$('#tableFeuillePointage tr:nth-child(2), #floatingHeader').unbind('mouseout');

                //On supprime la tooltip.
                \$('#tooltipAffaire').remove();
                var celluleAffaire = \$(this); // Récupére la cellule d'affaire courante.
                var top = celluleAffaire.offset().top; // Récupére la position verticale de la cellule de l'affaire.
                var left = celluleAffaire.offset().left; // Récupére la position horizontale de la cellule de l'affaire.
                var numAffaire = celluleAffaire.text(); // Récupére le numéro d'affaire.

                \$.ajax({
                    url: '";
        // line 1603
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_nom_affaire");
        echo "',
                    type: 'POST',
                    data: {numAffaire: numAffaire},
                    success: function (nomAffaire) {
                        // Si l'affaire n'existe pas, on quitte la fonction.
                        if (nomAffaire === 'NULL') {
                            return false;
                        }

                        // Code html de la tooltip.
                        var tooltip = '';
                        tooltip += \"<div id='tooltipAffaire' style='display: inline-block; padding: 0%; position: absolute; background-color: rgba(31, 78, 121, 0.8); border-radius: 6px; z-index: 3;'>\";
                        tooltip += \"<p style='text-align: center; color: white; font-size: 0.8vw; margin-left: 5%; margin-right: 5%;'>\";
                        if (nomAffaire) {
                            tooltip += nomAffaire;
                            tooltip += \"<br />\";
                        }
                        tooltip += \"(Cliquez-droit sur l'affaire pour la supprimer.)\";
                        tooltip += \"</p>\";
                        tooltip += '</div>';
                        // Si la souris est toujours sur la cellules une fois la génération du code HTML terminée, on fait apparaître et on positionne la tooltip.
                        if (celluleAffaire.is(':hover')) {
                            \$('body').append(tooltip);
                            \$('#tooltipAffaire').css('top', top - \$('#tooltipAffaire').outerHeight() - 5);
                            \$('#tooltipAffaire').css('left', left - (\$('#tooltipAffaire').outerWidth() - celluleAffaire.outerWidth()) / 2);
                        }
                    }
                }).done(function () {
                    \$('#tableFeuillePointage tr:nth-child(2), #floatingHeader').on('mouseout', '.project, .floatingHeaderNumAffaireCell', function () {
                        //On supprime la tooltip.
                        \$('#tooltipAffaire').remove();
                    });
                });
            });
        }

        // Retourne la largeur des barres de scrolling.
        function getScrollbarWidth() {
            var outer = document.createElement(\"div\");
            outer.style.visibility = \"hidden\";
            outer.style.width = \"100px\";
            outer.style.msOverflowStyle = \"scrollbar\"; // needed for WinJS apps

            document.body.appendChild(outer);
            var widthNoScroll = outer.offsetWidth;
            // force scrollbars
            outer.style.overflow = \"scroll\";
            // add innerdiv
            var inner = document.createElement(\"div\");
            inner.style.width = \"100%\";
            outer.appendChild(inner);
            var widthWithScroll = inner.offsetWidth;
            // remove divs
            outer.parentNode.removeChild(outer);
            return widthNoScroll - widthWithScroll;
        }

        // Affiche un header flotant horizontal lorsque le header du tableau n'est plus entiérement visible.
        function fixedHorizontalHeader() {
            // Lors d'un scroll dans le container du tableau ou sur la div de contenu.
            \$('#tableFeuillePointageDivContainer, #contenu').scroll(function () {

                // Initialisation des variables de positionnement.
                var tableFeuillePointageTop = \$('#tableFeuillePointage').offset().top; // Top de table de la feuille de pointage.
                var divTableFeuillePointageContainerTop = \$('#tableFeuillePointageDivContainer').offset().top; // Top du container de la feuille de pointage.
                var sectionPrincipalTop = \$('#section_principal').offset().top; // Top de la section principal.

                // Si le tableau est entiérement visible mais que son header n'est pas entiérement visible.
                if (divTableFeuillePointageContainerTop >= sectionPrincipalTop && tableFeuillePointageTop < divTableFeuillePointageContainerTop) {

                    // Si le header flotant est invisible.
                    if (!\$('#floatingHeader').is(':visible')) {
                        \$('.floatingHeaderNumGX').remove(); // On supprime les cellules de numéros d'affaires du header flotant.

                        // On ajoute les cellules de numéros d'affaires au header flotant.
                        \$('#tableFeuillePointageDivContainer tr:nth-child(2) td:nth-child(n+2):nth-last-child(n+8)').each(function (index) {
                            \$('#floatingHeader > div:nth-child(' + (index + 1) + ')').after(\"<div class='floatingHeaderNumGX'><div class='floatingHeaderNumAffaireCell'>\" + \$(this).text() + \"</div><br /><div>%</div></div>\");
                        });
                        // Pour chaque container de header on récupére la largeur et on l'attribut aux cellules du header flotant.
                        var tableHeader = \$('#tableFeuillePointageDivContainer tr:nth-child(2)');
                        tableHeader.children().each(function (index) {
                            \$('#floatingHeader').children().eq(index).width(\$(this).outerWidth());
                        });
                        // On récupére la largeur des cellules d'absences du matin et de l'après midi et on l'attribut aux cellules correspondantes du header flotant.
                        \$('#floatingHeaderMatin').width(\$('#feuillePointageMatin').innerWidth());
                        \$('#floatingHeaderAM').width(\$('#feuillePointageAM').innerWidth());
                        // Lorsqu'on scroll horizontalement les tableau, le header flotant subit le même scroll.
                        \$('#tableFeuillePointageDivContainer').on('scroll', function () {
                            \$('#floatingHeaderContainer').scrollLeft(\$(this).scrollLeft());
                        });
                        \$('#floatingHeaderContainer').hide(); // On cache le header flotant pour préparer l'animation d'apparition.
                    }

                    // On règle sa position et sa taille.
                    \$('#floatingHeaderContainer').css('top', divTableFeuillePointageContainerTop); // En haut du container de la table.
                    \$('#floatingHeaderContainer').css('left', \$('#tableFeuillePointageDivContainer').offset().left); // A gauche du container de la table.
                    \$('#floatingHeaderContainer').css('width', \$('#tableFeuillePointageDivContainer').innerWidth() - getScrollbarWidth()); // La taille du container moins celle de la scrollbar.
                    \$('#floatingHeader').css('width', \$('#tableFeuillePointage').innerWidth());
                    \$('#floatingHeaderContainer').fadeIn(0); // On affiche le header flotant.

                    \$('#floatingHeader > div:last-child').height(\$('#floatingHeader > div:first-child').height()); // On attribut la même hauteur à la dernière cellule que pour les autres.
                    \$('#floatingHeader > div:last-child div').css('line-height', \$('#floatingHeader > div:last-child div').height() + 'px'); // On centre verticallement le texte de la dernière cellule.
                }
                // Si le tableau n'est pas entiérement visible ou le header est entiérement visible.        
                else {
                    \$('#floatingHeaderContainer').hide(); // On cache le header flotant.
                }

                // On affiche la croix si besoin.
                toggleFloatingHeaderCross();
            });
        }

        // Affiche un header flotant vertical lorsque le header du tableau n'est plus entiérement visible.
        function fixedVerticalHeader() {
            // Lors d'un scroll dans le container du tableau ou sur la div de contenu.
            \$('#tableFeuillePointageDivContainer, #contenu').scroll(function () {

                console.log('scroll !');
                // Initialisation des variables de positionnement.
                var tableFeuillePointageLeft = \$('#tableFeuillePointage').offset().left; // Left de la table de la feuille de pointage.
                var tableFeuillePointageContainerLeft = \$('#tableFeuillePointageDivContainer').offset().left; // Left du container de la feuille de pointage.
                var sectionPrincipalTop = \$('#section_principal').offset().top; // Top de la section principal.
                var divTableFeuillePointageContainerTop = \$('#tableFeuillePointageDivContainer').offset().top; // Top du container de la feuille de pointage.

                // Si le header vertical n'est pas entiérement visible.
                if (tableFeuillePointageLeft < tableFeuillePointageContainerLeft && divTableFeuillePointageContainerTop >= sectionPrincipalTop) {

                    console.log('invisible !');
                    // Si le header flotant vertical n'est pas visible.
                    if (!\$('#floatingVerticalHeaderContainer').is(':visible')) {
                        \$('.floatingVerticalHeaderDate').remove(); // On supprime les cellules de date du header vertical flotant.

                        // Pour chaque cellule de date on inject une div contenant la même date dans le header flotant.
                        \$('.dayDateCell').each(function () {
                            \$('#floatingVerticalHeader').append(\"<div class='floatingVerticalHeaderDate'>\" + \$(this).text() + \"</div>\");
                        });
                        // On attribut la bonne hauteur à chaque div du header flotant.
                        \$('#tableFeuillePointage tr td:first-child').each(function (index) {
                            \$('#floatingVerticalHeader').find('div').eq(index).height(\$(this).height());
                        });
                        // On attribut la bonne largeur à chaque div du header flotant.
                        \$('#floatingVerticalHeader div').width(\$('.dayDateCell').width());
                        // Lorsqu'on scroll horizontalement les tableau, le header flotant subit le même scroll.
                        \$('#tableFeuillePointageDivContainer').on('scroll', function () {
                            \$('#floatingVerticalHeaderContainer').scrollTop(\$(this).scrollTop());
                        });
                        \$('#floatingVerticalHeaderContainer').hide(); // On cache le header flotant pour préparer l'animation d'apparition.
                    }

                    // On règle sa position et sa taille.
                    \$('#floatingVerticalHeaderContainer').css('top', \$('#tableFeuillePointageDivContainer').offset().top); // En haut du container de la table.
                    \$('#floatingVerticalHeaderContainer').css('left', tableFeuillePointageContainerLeft); // A gauche du container de la table.
                    \$('#floatingVerticalHeaderContainer').height(\$('#tableFeuillePointageDivContainer').height() - getScrollbarWidth());
                    \$('#floatingVerticalHeader').height(\$('#tableFeuillePointage').height());
                    \$('#floatingVerticalHeaderContainer').fadeIn(0); // On affiche le header flotant.
                }
                // Si le header vertical est entiérement visible.
                else {
                    \$('#floatingVerticalHeaderContainer').hide(); // On cache le header flotant.
                }

                // On affiche la croix si besoin.
                toggleFloatingHeaderCross();
            });
        }

        // Affiche/Cache la croix des headers flotants.
        function toggleFloatingHeaderCross() {
            // Si les headers flotants vertical et horizontal sont visibles en même temps.
            if (\$('#floatingHeaderContainer').css('display') !== 'none' && \$('#floatingVerticalHeaderContainer').css('display') !== 'none') {
                // On régle la taille et la position de la croix et on l'affiche.
                \$('#floatingHeaderCross').width(\$('#floatingVerticalHeaderContainer').width() - 4);
                \$('#floatingHeaderCross').height(\$('#floatingHeaderContainer').height() - 4);
                \$('#floatingHeaderCross').css('top', \$('#tableFeuillePointageDivContainer').offset().top);
                \$('#floatingHeaderCross').css('left', \$('#tableFeuillePointageDivContainer').offset().left);
                \$('#floatingHeaderCross').css('line-height', \$('#floatingHeaderContainer').height() - 4 + 'px');
                \$('#floatingHeaderCross').show();
            }
            // Si les headers flotants vertical et horizontal ne sont pas visibles en même temps.
            else {
                // On cache la croix.
                \$('#floatingHeaderCross').hide();
            }
        }

        // Affiche une fenêtre de notification de sauvegarde qui suit la souris.
        function savingNotification() {
            // Lorsque la souris bouge.
            \$(document).mousemove(function (event) {
                \$('#pointageSavingNotification').css('left', event.pageX + 20);
                \$('#pointageSavingNotification').css('top', event.pageY);
            });
        }

        // Passe à la cellule éditable de la ligne suivante lors de l'appui sur la touche 'Entrée'.
        function nextLineOnEnter() {
            // Lorsque une touche est pressé dans une cellule éditable...
            \$(\"#tableFeuillePointage\").on('keypress', \"td[contenteditable='true']\", function (e) {
                // Si la touche à pour code 13 (touche 'Entrée')...
                if (e.keyCode === 13) {
                    e.preventDefault(); // On bloque l'action par défaut (retour à la ligne).
                    var currentCell = \$(this); // La cellule courante.
                    var nextLineTr = currentCell.parent('tr').next('tr'); // La prochaine ligne du tableau.
                    var nextLineCell = nextLineTr.find(\"td\").eq(currentCell.index()); // La cellule de la prochaine ligne du tableau dont la position est identique à la cellule courante.
                    var nextLineCellIsEditable = false; // Vrais si 'nextLineCell' est éditable (initialisé sur faux).

                    // Tant que 'nextLineCell' existe et que 'nextLineCellIsEditable' est faux.
                    while (nextLineCell.length && !nextLineCellIsEditable) {
                        // Si nextLineCell n'est pas une cellule éditable.
                        if (nextLineCell.attr('contentEditable') !== 'true') {
                            nextLineTr = nextLineCell.parent('tr').next('tr'); // On récupère la ligne suivante.
                            nextLineCell = nextLineTr.find(\"td\").eq(nextLineCell.index()); // On récupère la cellule de la ligne suivante.
                        }
                        // Si nextLineCell est une cellule éditable.
                        else {
                            nextLineCellIsEditable = true; // On passe nextLineCellIsEditable sur vrais.
                            nextLineCell.focus(); // On focus la cellule.
                        }
                    }

                }
            });
        }

        // Définie la valeur de l'absence PM sur la même que l'absence AM lorsque l'absence AM est modifiée.
        function cloneAbsenceAMToPM() {
            // Lorsque l'on change la valeur d'un sélécteur d'AM...
            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select', function () {
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').val(\$(this).val()); // On change la valeur du sélecteur PM associé.
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').trigger('change'); // On simule un changement manuel du sélecteur PM pour déclancher la sauvegarde.
            });
        }

        // Permet d'uploader un justificatif de transport.
        function ajaxUploadJustificatifTransport() {
            // Lors du clic sur le bouton d'envoi de fichier.
            \$('#sendTransportJustificatifFormButton').click(function () {
                // Lorsqu'un fichier est séléctionné...
                \$(\"#sendTransportJustificatifForm input[type='file']\").change(function () {
                    // Si le fichier est de type PDF...
                    if (\$(this)[0].files[0].type === 'application/pdf') {
                        \$('#sendTransportJustificatifForm').submit(); // On valide le formulaire.
                    }
                    // Si le fichier n'est pas de type PDF...
                    else {
                        alert('Le fichier doit être de type PDF !'); // On affiche un message d'erreur.
                    }
                });
                // On simule un clic sur le input de fichier du formulaire.
                \$(\"#sendTransportJustificatifForm input[type='file']\").click();
            });
            // Lors de la validation du formulaire d'upload du fichier justificatif de transport.
            \$('#sendTransportJustificatifForm').on('submit', function (e) {
                e.preventDefault(); // On bloque l'envoi du formulaire.

                // On cache le bouton d'envoie et on affiche celui de chargement du transfert.
                \$('#sendTransportJustificatifFormButton').hide();
                \$('#uploadLoaderButton').show();
                var formData = new FormData(\$('#sendTransportJustificatifForm')[0]); // Variable contenant les données du formulaire.
                // Requette ajax pour uploader le fichier en base de données.
                \$.ajax({
                    url: '";
        // line 1865
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_upload_justificatif_transport_file");
        echo "',
                    type: 'POST',
                    // Form data
                    data: formData,
                    //Options to tell jQuery not to process data or worry about content-type.
                    contentType: false,
                    processData: false,
                    success: function (justificatifId) {
                        // Requette ajax pour associée le justificatif en base de donnée au tableau de pointage courant.
                        \$.ajax({
                            url: '";
        // line 1875
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_set_justificatif_transport_to_pointage");
        echo "',
                            data: {collaborateur: '";
        // line 1876
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector').val(), year: \$('#pointage_year_selector').val(), justificatifTransportFileId: justificatifId},
                            success: function () {
                                // On cache le bouton d'upload, on attribut l'id du justificatif au bouton de suppression et on l'affiche.
                                \$('#uploadLoaderButton').hide();
                                \$('#deleteJustificatifButtonSpan').attr('idjustificatif', justificatifId);
                                \$('#downloadJustificatifButtonSpan').attr('onclick', \"window.location = '\" + '";
        // line 1881
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_download_justificatif_transport");
        echo "/' + justificatifId + \"';\");
                                \$('#deleteJustificatifButton').show();
                            }
                        });
                    }
                });
            });
        }

        // Permet de supprimer le justificatif de transport associé au pointage.
        function ajaxDeleteJustificatifTransport() {
            var IdJustificatif = \$('#deleteJustificatifButtonSpan').attr('idjustificatif'); // L'id du justificatif à supprimer.

            // Requette ajax pour uploader le fichier en base de données.
            \$.ajax({
                url: '";
        // line 1896
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_delete_justificatif_transport");
        echo "',
                data: {IdJustificatif: IdJustificatif},
                success: function () {
                    // On cache le bouton de suppression du justificatif et on affiche celui d'upload.
                    \$('#deleteJustificatifButton').hide();
                    \$('#sendTransportJustificatifFormButton').show();
                }
            });
        }

        // Permet de télécharger le justificatif de transport d'un pointage.
        function ajaxDownloadJustificatifTransport() {
            var IdJustificatif = \$('#deleteJustificatifButtonSpan').attr('idjustificatif'); // L'id du justificatif à télécharger.

            // Requette ajax pour uploader le fichier en base de données.
            \$.ajax({
                url: '";
        // line 1912
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_delete_justificatif_transport");
        echo "',
                data: {IdJustificatif: IdJustificatif},
                success: function () {
                    // On cache le bouton de suppression du justificatif et on affiche celui d'upload.
                    \$('#deleteJustificatifButton').hide();
                    \$('#sendTransportJustificatifFormButton').show();
                }
            });
        }

        // Permet de séléctionner est copié plusieurs cellules de projet simultanément.
        function copyMultipleCell() {
            var mouseIdDown = false; // Variable indiquant si le bouton de la souris est actuellement pressé (faux par défaut).
            var lastSelectedCell = null; // Variable contenant la dernière cellule à avoir été séléctionnée.
            var currentSelectedCells = []; // Tableau contenant les cellules en cours de séléction.
            var copyCells = []; // Tableau contenant les valeurs des cellules en cours de copie.
            var originLine = null; // Index de la ligne de la première cellule séléctionnée.
            var originColumn = null; // Index de la colonne de la première cellule séléctionnée.

            /* 
             * Initialise la séléction des cellules lorsque le bouton gauche de la souris est pressé.
             */
            // Lorsqu'un bouton de la souris est pressé dans une cellule de projet...
            \$('#tableFeuillePointage').on('mousedown', \".projectPercentageCell[contenteditable='true']\", function (e) {
                // Si le bouton pressé est le gauche...
                if (e.which === 1) {

                    lastSelectedCell = null; // On efface la dernière cellule séléctionnée.
                    currentSelectedCells = []; // On vide le tableau des cellules en cours de séléction.
                    \$('.maxCellSquareDiv').remove(); // On efface le carré bleu de la cellules maximum.
                    \$('.projectPercentageCellMovingDashedBorder').remove(); // On efface les pointillé mobile de copie.

                    // On redonne la couleur d'origine au bord des cellules.            
                    \$(\".projectPercentageCell[contenteditable='true']\").css({
                        'border': '1px solid black'
                    });
                    mouseIdDown = true; // On sauvegarde l'état du bouton.
                    var currentCell = \$(this); // On récupére la cellule courante.

                    // On met à jours les variables d'index des cellules.
                    originLine = currentCell.parent('tr').index();
                    originColumn = currentCell.index();
                    lastSelectedCell = currentCell; // On met à jour la dernière cellule séléctionnée.
                    currentSelectedCells.push(currentCell); // On ajoute la cellule courante au tableau des cellules en cours de séléction.

                    // On colore les bords de la cellule en bleu.       
                    currentCell.css({
                        'border': '2px solid blue'
                    });
                }
            });
            /*
             * Permet de détecter le relachement du bouton gauche de la souris.
             */
            // Lorsque le bouton de la souris est relaché...
            \$('body').on('mouseup', function (e) {
                // Si le bouton relaché est le gauche...
                if (e.which === 1) {
                    mouseIdDown = false; // On sauvegarde l'état du bouton.

                    // On efface les variables d'index de la première colonne séléctionnée.
                    originLine = null;
                    originColumn = null;
                }
            });
            /*
             * Permet la séléction multiple de cellule au survol de la souris.
             */
            // Lorsqu'une cellule de projet et survolée...
            \$('#tableFeuillePointage').on('mouseover', '.projectPercentageCell', function () {
                // Si la souris est enfoncé et la cellule survolé est éditable...
                if (mouseIdDown && \$(this).attr('contenteditable') === 'true') {

                    // On récupére les index de la ligne et de la colonne de la cellule courante.
                    var currentLine = \$(this).parent('tr').index();
                    var currentColumn = \$(this).index();
                    // On met à jours le tableau des cellules en cours de séléction.
                    currentSelectedCells = [];
                    for (var line = Math.min(originLine, currentLine); line <= Math.max(originLine, currentLine); line++) {
                        for (var column = Math.min(originColumn, currentColumn); column <= Math.max(originColumn, currentColumn); column++) {
                            var cell = \$('#tableFeuillePointage').find('tr').eq(line).find('td').eq(column);
                            // Si la cellules est éditable...
                            if (cell.attr('contenteditable') === 'true') {
                                currentSelectedCells.push(cell); // On l'ajoute au tableau des cellules en cours de séléction.
                            }
                        }
                    }

                    lastSelectedCell = \$(this); // On remplace la dernière cellule séléctionnée par la celules courante.
                    \$(\".projectPercentageCell[contenteditable='true']\").css('border', '1px solid black'); // On redonne leur bordure d'origine à toutes les cellules éditable de projet.
                    \$(\".projectPercentageCell[contenteditable='true']\").css('background-color', 'white'); // On redonne le background d'origine à toutes les cellules éditablede projet.

                    // On initialise des varibles qui contiendront les index de position de la cellule la plus éloignée de l'origine du tableau.
                    var maxCellLine = 0;
                    var maxColumnLine = 0;
                    // Pour chaques cellules en cours de séléction...
                    \$.each(currentSelectedCells, function (index, currentCell) {
                        // On récupère les index de la ligne et de la colonne de la cellule courante.
                        var currentCellLine = currentCell.parent('tr').index();
                        var currentCellColumn = currentCell.index();
                        // On change les bordures de la cellules si nescessaire.
                        currentCell.css('border-top', currentCellLine === Math.min(originLine, currentLine) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-bottom', currentCellLine === Math.max(originLine, currentLine) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-left', currentCellColumn === Math.min(originColumn, currentColumn) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-right', currentCellColumn === Math.max(originColumn, currentColumn) ? '2px solid blue' : '1px solid black');
                        // On met à jours les variables d'index maximum si besoin.
                        maxCellLine = currentCellLine > maxCellLine ? currentCellLine : maxCellLine;
                        maxColumnLine = currentCellColumn > maxColumnLine ? currentCellColumn : maxColumnLine;
                    });
                    // On fait apparaître un carré bleu sur le bord de la cellule la plus excentrée.
                    \$('.maxCellSquareDiv').remove(); // On efface le carré bleu de la cellules maximum.
                    var maxCell = \$('#tableFeuillePointage').find('tr').eq(maxCellLine).find('td').eq(maxColumnLine); // On récupére la cellule la plus excentrée.
                    maxCell.append(\"<div class='maxCellSquareDiv' style='display: inline-block; position: absolute; top: calc(100% - 3px); left: calc(100% - 3px); background-color: blue; outline: 1px solid white; width: 6px; height: 6px;'><div>\");
                }
            });
            /* 
             * Permet de copier plusieurs cellules simultanément.
             */
            // Lors d'une copie au d'une ou plusieurs cellules de projets...
            \$('#tableFeuillePointage').on('copy cut', '.projectPercentageCell', function (e) {
                e.preventDefault(); // On bloque l'action par défaut.
                copyCells = []; // On vide le tableau des éléments précédement copiés.

                // Pour chaques cellules en cours de séléction...
                \$.each(currentSelectedCells, function () {

                    // On insert le contenu des cellules et leurs positions dans le tableau de copie.
                    var cellText = (\$(this).contents().filter(function () {
                        return this.nodeType === 3;
                    })[0]) === undefined ? '' : \$(this).contents().filter(function () {
                        return this.nodeType === 3;
                    })[0].nodeValue;
                    var cell = {value: cellText, line: \$(this).parent('tr').index(), column: \$(this).index()};
                    copyCells.push(cell);
                    // Si l'event est un 'coupé'...
                    if (e.type === 'cut') {
                        \$(this).contents().filter(function () {
                            return this.nodeType === 3;
                        })[0].nodeValue = ''; // On efface la valeur de la cellule.
                    }

                    if (\$(this).css('border-top-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-top', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderTop'><i></i></div>\");
                    }
                    if (\$(this).css('border-bottom-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-bottom', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderBottom'><i></i></div>\");
                    }
                    if (\$(this).css('border-left-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-left', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderLeft'><i></i></div>\");
                    }
                    if (\$(this).css('border-right-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-right', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderRight'><i></i></div>\");
                    }
                });
            });
            /*
             * Permet de coller plusieurs cellules simultanément en conservant leurs position.
             */
            // Lorsqu'on colle dans une cellule de projet cellules de projets...
            \$('#tableFeuillePointage').on('paste', '.projectPercentageCell', function (e) {
                e.preventDefault(); // On bloque l'action par défaut.

                // On récupére les coordonnées de la première cellule de destination.
                var pastLineIndex = \$(this).parent('tr').index();
                var pastColumnIndex = \$(this).index();
                // On calcule la différence avec les coordonnée de la première cellule d'origine.
                var lineDifference = pastLineIndex - copyCells[0].line;
                var columnDifference = pastColumnIndex - copyCells[0].column;
                // Pour chaque cellules à collé...
                \$.each(copyCells, function (index, cell) {
                    // On déduit la cellule dans laquelle sera collé le texte.
                    var destinationLine = \$('#tableFeuillePointage').find('tr').eq(cell.line + lineDifference);
                    var destinationCell = destinationLine.find('td').eq(cell.column + columnDifference);
                    // Si la cellule de destination est éditable...
                    if (destinationCell.attr('contenteditable') === 'true') {
                        destinationCell.css('border', '1px solid black'); // On donne les bordures de base à la cellule.
                        destinationCell.text(cell.value); // On colle le texte dans la cellule.
                    }
                });
            });
        }

        // Exporte le fichier en Excel et lance son téléchargement.
        function ajaxExportToExcell() {
            /* Permet de transformer un valeur de couleur de type rgb en héxadécimal. */
            function hexc(colorval) {
                var parts = colorval.match(/^rgb\\((\\d+),\\s*(\\d+),\\s*(\\d+)\\)\$/);
                if (parts !== null) {
                    delete(parts[0]);
                    for (var i = 1; i <= 3; ++i) {
                        parts[i] = parseInt(parts[i]).toString(16);
                        if (parts[i].length == 1)
                            parts[i] = '0' + parts[i];
                    }
                    var color = parts.join('');
                    return color;
                }
            }

            /* Initialisation des variables et tableau de variables. */
            var tableTD = \$('#tableFeuillePointage').find('td'); // Les cellules du tableau.
            var tableContent = []; // Tableau contentant les valeurs des cellules et leurs positions.
            var lineWithColspan = []; // Tableau contenant les lignes du tableau dont certaines cellules sont mergées.
            var cellWithColspan = []; // Tableau contenant les cellules qui ont un merging horizontal.
            var cellWithRowspan = []; // Tableau contenant les cellules qui ont un merging vertical.

            // Pour chaque cellules du tableau...
            tableTD.each(function (index, value) {
                var cellLine = \$(this).parent('tr').index(); // L'index de la ligne de la cellule.
                var cellColumn = \$(this).index(); // L'index de la colonne de la cellule.
                // Le texte brut (non html) de la cellule si il existe.
                var cellText = (\$(this).contents().filter(function () {
                    return this.nodeType === 3;
                })[0]) === undefined ? '' : \$(this).contents().filter(function () {
                    return this.nodeType === 3;
                })[0].nodeValue;
                var cellContant = \$(this).has('select').length ? \$(this).find('select').val() : \$.trim(cellText); // Le contenu de la cellule (texte ou valeur de l'input).
                var cellColor = hexc(\$(this).css('backgroundColor')); // La couleur de fond de la cellule en hexadecimal.
                var cellHasBorder = (\$(this).css('border-left-style') !== 'none' || \$(this).css('border-right-style') !== 'none' || \$(this).css('border-top-style') !== 'none' || \$(this).css('border-bottom-style') !== 'none') ? true : false; // Indique si la cellule possède des bordures.
                var cellTextColor = hexc(\$(this).css('color')); // La couleur du texte de la cellule en hexadecimal.

                // Pour chaque ligne du tableau ayant des cellules mergées...
                \$.each(lineWithColspan, function (index, value) {
                    // Si la ligne est la même que celle de la cellule courante...
                    if (value.lineIndex === cellLine) {
                        // On augmente l'index de la columne de la cellule courante du nombre de cellules qui sont mergées.
                        cellColumn = parseInt(cellColumn, 10) + parseInt(value.colspan, 10) - parseInt(1, 10);
                    }
                });
                // On ajoute la cellule au tableau des cellules.
                var cell = {line: cellLine, column: cellColumn, contant: cellContant, color: cellColor, border: cellHasBorder, textColor: cellTextColor};
                tableContent.push(cell);
                // Si la cellule est mergé horizontalement avec une autre cellule...
                if (\$(this).attr('colspan') !== undefined) {
                    lineWithColspan.push({lineIndex: cellLine, colspan: \$(this).attr('colspan')}); // On ajoute la ligne au tableau des lignes ayant des cellules mergées.
                    cellWithColspan.push({line: cellLine, column: cellColumn, colspan: \$(this).attr('colspan') - 1}); // On ajoute la cellule au tableau des cellules mergées horizontalement.
                }
                // Si la cellules est mergé verticalement avec une autre cellule...
                if (\$(this).attr('rowspan') !== undefined) {
                    cellWithRowspan.push({line: cellLine, column: cellColumn, rowspan: \$(this).attr('rowspan') - 1}); // On ajoute la cellule au tableau des cellules mergées verticalement.
                }
            });
            // On envoie les différents tableau avec une requête Ajax pour la génération du fichier Excel.
            \$.ajax({
                url: '";
        // line 2160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_export_to_excel");
        echo "',
                type: 'POST',
                data: {tableContent: JSON.stringify(tableContent), cellWithColspan: cellWithColspan, cellWithRowspan: cellWithRowspan},
                success: function (response) {
                    var fileInfo = JSON.parse(response);
                    console.log(fileInfo);
                    window.location = fileInfo.fileUrl; // On redirige vers le téléchargement du fichier Excel.
                    \$.ajax({
                        url: '";
        // line 2168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_delete_excel_file");
        echo "',
                        type: 'POST',
                        data: {filename: fileInfo.filename}
                    });
                }
            });
        }

        // Ouvre une fenêtre d'ajout/consultation des fichiers justificatifs associés au pointage.
        function addJustificatifFile(pointageId) {
            // On récupére les variables du pointage courant.
            var month = \$('#pointage_month_selector option:selected').val();
            var year = \$('#pointage_year_selector option:selected').val();
            var username = '";
        // line 2181
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "';
            // On génére l'URL de la fênetre.
            var urlTemplate = '";
        // line 2183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_add_justificatif_file", array("month" => "MONTH", "year" => "YEAR", "username" => "USERNAME")), "html", null, true);
        echo "';
            var url = urlTemplate.replace('MONTH', month).replace('YEAR', year).replace('USERNAME', username);
            // On ouvre la fênetre.
            window.open(url, '_blank', 'height=350, width=500, top=30, left=30');
        }

        // Permet de générer et télécharger un export CSV du pointage.
        function ajaxDownloadCSV() {
            // On récupére le tableau du pointage.
            var pointageTable = \$('#tableFeuillePointage');
            // Initialisation du tableau qui contiendras les données d'affaires.
            var affaires = [];
            // On récupére les lignes du tableau.
            var dayCells = pointageTable.find(\".dayDateCell\");
            // Pour chaques jours...
            dayCells.each(function () {
                // On récupére la date date.
                var date = \$(this).text() + \" \" + \$('#pointage_month_selector').find('option:selected').text();
                // On récupére les cellules d'affaires.
                var affairesCells = \$(this).siblings('.projectPercentageCell');
                // On récupére les cellules d'affaires.
                var comments = \$(this).siblings('.comments').first().text();
                // Pour chaques cellules d'affaires...
                affairesCells.each(function () {
                    // On crée un objet d'affaire.
                    var affaire = {};
                    // On ajoute la date, le numéro d'affaire et la valeur à l'objet d'affaire.
                    affaire.date = date;
                    affaire.numAffaire = \$('tr:nth-child(2)').find('td').eq(\$(this).index()).text();
                    affaire.value = \$(this).text();
                    affaire.comments = comments;
                    // On ajoute l'objet au tableau des données.
                    affaires.push(affaire);
                });
            });
            // On transforme les données d'affaires en format JSON.
            var jsonData = JSON.stringify(affaires);
            // Requette Ajax pour générer un fichier CSV et le télécharger.
            \$.ajax({
                url: '";
        // line 2222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_download_csv");
        echo "',
                type: 'POST',
                data: {tableData: jsonData, firstname: '";
        // line 2224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
        echo "', lastname: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
        echo "'},
                success: function (response) {
                    window.location.href = response; // On redirige vers le lien de téléchargement.
                }
            });
        }

        // Sauvegarde un export CSV du pointage.
        function saveCSV() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            // Lors d'une action sur les cellules de pourcentage d'affaire...
            \$('#tableFeuillePointage').on('keyup paste change', \".projectPercentageCell, .comments, td[contenteditable='true'], select\", function () {
                delay(function () {
                    // On récupére le tableau du pointage.
                    var pointageTable = \$('#tableFeuillePointage');
                    // Initialisation du tableau qui contiendras les données d'affaires.
                    var affaires = [];
                    // On récupére les lignes du tableau.
                    var dayCells = pointageTable.find(\".dayDateCell\");
                    // Pour chaques jours...
                    dayCells.each(function () {
                        // On récupére la date.
                        var date = \$(this).text() + \" \" + \$('#pointage_month_selector').find('option:selected').text();
                        // On récupére le commentaire.
                        var comments = \$(this).siblings('.comments').first().text();
                        // On récupére les cellules d'affaires.
                        var affairesCells = \$(this).siblings('.projectPercentageCell');
                        // On récupére la valeur de modulation
                        var modulation = \$(this).siblings('.dailyHoursMod').first().text();
                        // On récupére les valeurs d'absences.
                        var absences = {matin: \$(this).siblings('.abscenceMatinSelector').first().find('select').val(), am: \$(this).siblings('.abscenceAMSelector').first().find('select').val()};
                        // On récupére les valeurs de titre repas.
                        var titre_repas = \$(this).siblings('.titreRepasNumberSelector').first().find('select').val();
                        // On récupére les valeurs de forfait déplacement.
                        var forfait_deplacement = \$(this).siblings('.forfaitsDeplacementMontant').first().text();
                        // On récupére les valeurs de primes panier.
                        var prime_panier = \$(this).siblings('.primesPanierNumber').first().text();
                        // Pour chaques cellules d'affaires...
                        affairesCells.each(function () {
                            // On crée un objet d'affaire.
                            var affaire = {};
                            // On ajoute la date, le numéro d'affaire et la valeur à l'objet d'affaire.
                            affaire.date = date;
                            affaire.numAffaire = \$('tr:nth-child(2)').find('td').eq(\$(this).index()).text();
                            affaire.value = \$(this).text();
                            affaire.comments = comments;
                            affaire.modulation = modulation;
                            affaire.absences = absences;
                            affaire.titre_repas = titre_repas;
                            affaire.forfait_deplacement = forfait_deplacement;
                            affaire.prime_panier = prime_panier;
                            // On ajoute l'objet au tableau des données.
                            affaires.push(affaire);
                        });
                    });
                    // On transforme les données d'affaires en format JSON.
                    var jsonData = JSON.stringify(affaires);
                    // Requette Ajax pour générer un fichier CSV et le télécharger.
                    \$.ajax({
                        url: '";
        // line 2290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_csv");
        echo "',
                        type: 'POST',
                        data: {tableData: jsonData, username: '";
        // line 2292
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "', month: \$('#pointage_month_selector').val(), year: \$('#pointage_year_selector').val()}
                    });
                }, 1500);
            });
        }

        // Valide la feuille de pointage d'un collaborateur et sauvegarde les données d'absence, de titres repas, de forfaits déplacement, de primes panier et de titre de transport.
        function ajaxPointageAssistanteAgenceValidation(month, year) {
            // Retourne les absences du mois.
            function getAbsences() {

                var absences = {'matin': getAbscenceMatin(), 'am': getAbscenceAM()};
                // Retourne les absences du matin par dates et les commentaires.
                function getAbscenceMatin() {
                    var absencesMatin = [];
                    \$('.abscenceMatinSelector').each(function () {
                        var jour = \$(this).siblings('.dayDateCell').text().slice(-2);
                        var mois = month;
                        if (mois < 10) {
                            var mois = '0' + mois;
                        }
                        var annee = year;
                        var absenceMatin = {};
                        absenceMatin['valeur'] = \$(this).children('select').val();
                        absenceMatin['date'] = jour + '-' + mois + '-' + annee;
                        absenceMatin['commentaires'] = \$(this).siblings('.comments').text();
                        absencesMatin.push(absenceMatin);
                    });
                    return absencesMatin;
                }

                // Retourne les absences de l'après-midi par dates.
                function getAbscenceAM() {
                    var absencesAM = [];
                    \$('.abscenceAMSelector').each(function () {
                        var jour = \$(this).siblings('.dayDateCell').text().slice(-2);
                        var mois = month;
                        if (mois < 10) {
                            var mois = '0' + mois;
                        }
                        var annee = year;
                        var absenceAM = {};
                        absenceAM['valeur'] = \$(this).children('select').val();
                        absenceAM['date'] = jour + '-' + mois + '-' + annee;
                        absencesAM.push(absenceAM);
                    });
                    return absencesAM;
                }

                return JSON.stringify(absences);
            }

            //Retourne le nombre total de titre repas du mois.
            function getTitresRepas() {
                return \$('#titreRepasTotalNumber').text();
            }

            //Retourne le nombre total de forfaits déplacement du mois.
            function getForfaitsDeplacement() {
                return \$('#ForfaitDeplacementTotalMontant').text();
            }

            //Retourne le nombre total de primes panier du mois.
            function getPrimesPanier() {
                return \$('#PrimesPanierTotalNumber').text();
            }

            //Retourne le nombre total de titre de transport du mois.
            function getTitreTransport() {
                return \$('#titreTransportTotalMontant').text();
            }

            // Retourne les valeurs des forfaits déplacement associées à leur date.
            function getForfaitsDeplacementDetails() {
                var forfaitsDeplacementDetails = [];
                \$('.forfaitsDeplacementMontant').each(function () {
                    var day = \$(this).siblings('.dayDateCell').text().slice(-2);
                    console.log(day);
                    var value = \$(this).text();
                    var forfaitDeplacementDetail = {};
                    forfaitDeplacementDetail['day'] = new Date(year, month - 1, day);
                    forfaitDeplacementDetail['value'] = value;
                    forfaitsDeplacementDetails.push(forfaitDeplacementDetail);
                });
                return JSON.stringify(forfaitsDeplacementDetails);
            }

            // Retourne les valeurs de modulation associées à leur date.
            function getMods() {
                var mods = [];
                \$('.dailyHoursMod').each(function () {
                    var day = \$(this).siblings('.dayDateCell').text().slice(-2);
                    var value = \$(this).text();
                    var mod = {};
                    mod['day'] = new Date(year, month - 1, day);
                    mod['value'] = value;
                    mods.push(mod);
                });
                return JSON.stringify(mods);
            }

            function getRegularisation() {
                return \$('#divRegularisationText').text();
            }

            var pointageData = {
                absences: getAbsences(),
                titresRepas: getTitresRepas(),
                forfaitsDeplacement: getForfaitsDeplacement(),
                primesPanier: getPrimesPanier(),
                titreTransport: getTitreTransport(),
                forfaitsDeplacementDetails: getForfaitsDeplacementDetails(),
                mods: getMods(),
                regularisation: getRegularisation()
            };
            \$('#form_pointageData').val(JSON.stringify(pointageData));
            console.log(\"ajaxPointageAssistanteAgenceValidation: \" + \$(\"#form_Pointage\").val());
            /*\$.ajax({
             type: 'POST',
             async: false,
             url: '";
        // line 2412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_assistante_agence_validation");
        echo "',
             data: {username: user, month: month, year: year, absences: getAbsences(), titresRepas: getTitresRepas(), forfaitsDeplacement: getForfaitsDeplacement(), primesPanier: getPrimesPanier(), titreTransport: getTitreTransport(), forfaitsDeplacementDetails: getForfaitsDeplacementDetails(), mods: getMods(), regularisation: getRegularisation()},
             success: function () {
             location.reload();
             }
             });*/
        }

        /**
         * 
         * Récupére les numéros d'affaires du pointage du mois précédent et ajoute des colonnes avec ces numéros.
         * 
         * @returns null
         */
        function importLastMonthAffaires() {
            var lastMonth = \$('#pointage_month_selector').val() === \"1\" ? \"12\" : \$('#pointage_month_selector').val() - 1;
            var year = \$('#pointage_month_selector').val() === \"1\" ? \$('#pointage_year_selector').val() - 1 : \$('#pointage_year_selector').val();
            \$.ajax({
                url: \"";
        // line 2430
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_last_month_affaires");
        echo "\",
                type: \"POST\",
                data: {user: \"";
        // line 2432
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\", month: lastMonth, year: year},
                success: function (affaires) {
                    var affairesArray = JSON.parse(affaires);
                    \$.each(affairesArray, function (index, affaire) {
                        // Si le numéro d'affaire n'est pas vide, on ajoute un colonne avec le numéro d'affaire.
                        if (\$.trim(affaire) !== '') {
                            \$('#addProject').trigger('click');
                            \$('tr:nth-child(2) .project').last().text(affaire);
                        }
                    });
                }
            });
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/pointage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2822 => 2432,  2817 => 2430,  2796 => 2412,  2673 => 2292,  2668 => 2290,  2597 => 2224,  2592 => 2222,  2550 => 2183,  2545 => 2181,  2529 => 2168,  2518 => 2160,  2267 => 1912,  2248 => 1896,  2230 => 1881,  2222 => 1876,  2218 => 1875,  2205 => 1865,  1940 => 1603,  1865 => 1531,  1816 => 1485,  1735 => 1407,  1731 => 1406,  1706 => 1384,  1702 => 1383,  1696 => 1380,  1514 => 1201,  1489 => 1179,  1420 => 1113,  1416 => 1112,  1403 => 1102,  1399 => 1101,  1393 => 1098,  1381 => 1089,  1377 => 1088,  1371 => 1085,  1343 => 1060,  1339 => 1059,  1333 => 1056,  964 => 690,  602 => 331,  597 => 329,  592 => 327,  588 => 326,  555 => 296,  533 => 276,  512 => 273,  504 => 272,  498 => 271,  495 => 270,  478 => 269,  475 => 268,  473 => 264,  456 => 250,  414 => 210,  400 => 206,  392 => 205,  389 => 204,  382 => 199,  380 => 198,  374 => 197,  370 => 195,  353 => 180,  345 => 174,  343 => 173,  336 => 171,  332 => 169,  315 => 154,  307 => 148,  305 => 147,  298 => 145,  290 => 144,  287 => 143,  283 => 141,  281 => 140,  275 => 139,  267 => 138,  257 => 137,  254 => 136,  249 => 135,  247 => 134,  234 => 124,  216 => 111,  210 => 110,  204 => 109,  198 => 108,  192 => 107,  176 => 93,  161 => 91,  156 => 90,  154 => 89,  146 => 84,  139 => 80,  98 => 44,  64 => 13,  59 => 11,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/pointage.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\pointage.html.twig");
    }
}