$('document').ready(function() {
    $("#frm_rechercher_lutteur").hide();
    $("#text_select_ancien_lutteur").click(function (e) { 
        $(".info_personne").slideUp(); //masque le frm de saisie
        $("#text_select_ancien_lutteur").slideUp(); 
        $("#frm_add_new_arbitre_text").slideDown();
        $("#frm_rechercher_lutteur").slideDown();
        return false;
    });
    $("#frm_add_new_arbitre_text").click(function (e) {
        $("#frm_add_new_arbitre_text").slideUp();
        $("#frm_rechercher_lutteur").slideUp();
        $(".info_personne").slideDown();
        $("#text_select_ancien_lutteur").slideDown();
        return false;
    });
    $("#frm_rechercher_lutteur").submit(function (e) { 

        let url = $("#base").val() +'lutteur/getSurnom';
        let surnom = $("#surnom_lutteur").val();
        let q = "Rechercher";
        $.post(url, {surnom : surnom , q},
            function (data, textStatus, jqXHR) {
                html = "";
                $.each(data, function (indexInArray, valueOfElement) { 
                    html += "<option value='"+valueOfElement.idPersonne+"'>"+valueOfElement.prenom +" "+valueOfElement.nom+" <cite class='text-muted'>"+valueOfElement.description+"</cite></option>"
                });
                $("#idPersonne").html(html);
                $("#liste_lutteurs").slideDown();
            },
            "json"
        );
        return false;
    });

})