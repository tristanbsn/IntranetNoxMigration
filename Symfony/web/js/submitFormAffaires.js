$(window).load(function () {

//    $('form fieldset legend').delay(500).css('text-align', 'left');
//    $('form fieldset legend').delay(500).css('padding', '0% 0.5% 0% 0.5%');

    $('.selectFormulaireSelectionAgence').change(function () {
        $('.formulaireSelectionAgence').submit();
    });

    $('.selectFormulaireSelectionDossier').change(function () {
        $('.formulaireSelectionDossier').submit();
//        $(document).ready(function () {
//            $(this).scrollTop(300);
//        });
    });

    if ($('.selectFormulaireSelectionDossier').val() !== '' && $('.selectFormulaireSelectionDossier').val() !== undefined) {
        $('#DivFormulaireAAModele').toggle();
        $('#contenu').scrollTop($('#contenu')[0].scrollHeight);
    }

    $('#formSelectionSuivi_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('#formSelectionSuivi_Suivi option:selected').text() + " ?");
    });

    $('#formSelectionVersion_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('#formSelectionVersion_Suivi option:selected').text() + " ? Cela supprimera également toutes les liaison et suivis basés sur ce modèle.");
    });

    $('.selectFormulaireSelectionVersionSuivi').change(function () {
        $('.formulaireSelectionVersionSuivi').submit();
    });

    $('#formSuppresionProfil_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le profil ' + $('#formSuppresionProfil_Nom option:selected').text() + ' ? Cela supprimera également les modèles, champs et suivis associées.');
    });

    $('#formSuppressionChamp_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le champ ' + $('#formSuppressionChamp_Nom option:selected').text() + ' ? Cela supprimera également les modèles et suivis associées.');
    });

    $('#formCloturationSuivi_Cloturer').click(function () {
        return confirm('Voulez-vous vraiment cloturer le suivi ? Vous ne pourrez plus l\'éditer');
    });

    $('#formSelectionVersionSuivi_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer cette version du suivi ? Vous ne pourez pas la récupérer.');
    });

    $('.formulaireRemplissageSuivi select').each(function () {
        if ($(this).val() === '') {
            $(this).next().next().show();
            $(this).next().next().next().attr('required', 'required');
            $(this).next().next().next().show();
            $(this).next().next().next().next().show();
        } else {
            $(this).next().next().hide();
            $(this).next().next().next().val('');
            $(this).next().next().next().removeAttr('required');
            $(this).next().next().next().hide();
            $(this).next().next().next().next().hide();
        }
    });

    $('.formulaireRemplissageSuivi select').change(function () {
        if ($(this).val() === '') {
            $(this).next().next().show();
            $(this).next().next().next().attr('required', 'required');
            $(this).next().next().next().show();
            $(this).next().next().next().next().show();
        } else {
            $(this).next().next().hide();
            $(this).next().next().next().val('');
            $(this).next().next().next().removeAttr('required');
            $(this).next().next().next().hide();
            $(this).next().next().next().next().hide();
        }
    });

    toggleCheckboxAjoutDonnees();

    $('#formAjoutChamp_Type').change(function () {
        toggleCheckboxAjoutDonnees();
    });

    $('#formSuppresionPositionChamp_Supprimer').click(function () {
        return confirm('Attention, si vous modifiez ce modèle toutes les données des suivis associés seront supprimées !');
    });

    resizeFormLabelAndData($('.labelFormulaireRemplissageSuivi'), $('.champFormulaireRemplissageSuivi'), $('.formulaireRemplissageSuivi p'));
    resizeFormLabelAndData($('.labelFormulaireRemplissageSuiviCloture'), $('.champFormulaireRemplissageSuiviCloture'), $('.formulaireRemplissageSuiviCloture p'));

    $(window).resize(function () {
        if ($('.formulaireRemplissageSuivi').length) {
            location.reload();
        }
    });

    if ($('#formCloturationSuivi_Cloturer').attr('disabled') === "disabled") {
        $('#formCloturationSuivi_Cloturer').wrap("<span class='tooltipButtonAACloturer'></span>");
        $('.tooltipButtonAACloturer').prepend("<span class='tooltipButtonAACloturerText'>Le suivi doit contenir au moins une sauvegarde pour être clôturé.</span>");
    }

    if ($('#formDonneesSuivi_Generate').attr('disabled') === "disabled") {
        $('#formDonneesSuivi_Generate').wrap("<span class='tooltipButtonAAGenerate'></span>");
        $('.tooltipButtonAAGenerate').prepend("<span class='tooltipButtonAAGenerateText'>Sauvegardez le suivi pour pouvoir générer un fichier Excel.</span>");
    }
});

function toggleCheckboxAjoutDonnees() {
    if ($('#formAjoutChamp_Type option:selected').text() === 'Données') {
        $('label[for="formAjoutChamp_AjoutDonnees"]').show();
        $('#formAjoutChamp_AjoutDonnees').show();
        $('#formAjoutChamp_AjoutDonnees').attr('requierd', 'required');
    } else {
        $('label[for="formAjoutChamp_AjoutDonnees"]').hide();
        $('#formAjoutChamp_AjoutDonnees').hide();
        $('#formAjoutChamp_AjoutDonnees').removeAttr('requieed');
    }
}

function getMaxChildWidth(sel) {
    max = 0;
    sel.each(function () {
        c_width = ($(this).width());
        if (c_width > max) {
            max = c_width;
        }
    });
    return max;
}

function resizeFormLabelAndData(label, data, formParagraph) {
    label.width(getMaxChildWidth(label));
    data.width((formParagraph.width() - label.width()) * 0.9);
}
