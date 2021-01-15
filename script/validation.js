

// Validimi i formes tek Ballina respektivisht tek section Apliko Tani ne index.html
$("#validimi").submit(function() {
    var emriApliko = $("#emriApliko").val();
    var mbiemriApliko = $("#mbiemriApliko").val();
    var moshaApliko = $("#moshaApliko").val();
    var datelindjaApliko = $("#datelindjaApliko").val();
    var emailiApliko = $("#emailiApliko").val();
    var nrKontaktuesApliko = $("#nrKontaktuesApliko").val();
    var error = false;

    if(emriApliko == "") {
        $("#emriMessage").html("<span class='error'>Ju lutem plotesoni emrin</span>");
        error = true;
    }
    else {
        $("#emriMessage").html("");
        error = false;
    }
    if(mbiemriApliko == "") {
        $("#mbiemriMessage").html("<span class='error'>Ju lutem plotesoni mbiemrin</span>");
        error = true;
    }
    else {
        $("#mbiemriMessage").html("");
        error = false;
    }
    if(moshaApliko == "") {
        $("#moshaMessage").html("<span class='error'>Ju lutem plotesoni moshen</span>");
        error = true;
    }
    else {
        $("#moshaMessage").html("");
        error = false;
    }
    if(emailiApliko == "") {
        $("#emailiMessage").html("<span class='error'>Ju lutem plotesoni emailin</span>");
        error = true;
    }
    else {
        $("#emailiMessage").html("");
        error = false;
    }
    if(nrKontaktuesApliko == "") {
        $("#nrKontaktuesMessage").html("<span class='error'>Ju lutem plotesoni numrin kontaktues</span>");
        error = true;
    }
    else {
        $("#nrKontaktuesMessage").html("");
        error = false;
    }
    if (error) {
        return false;
    }
    else {
        return true;
    }
});

// Validimi i formes tek Kontakti ne contact.html
$("#validimiForma").submit(function () {
    var emri = $("#emri").val();
    var email = $("#email").val();
    var komenti = $("#komenti").val();
    var errors = false;
    if (emri == "") {
        $("#emriMesazhi").html("<span class='errors'>Ju lutem plotesoni emrin</span>");
        errors = true;
    }
    else {
        $("#emriMesazhi").html("");
        errors = false;
    }
    if (email == "") {
        $("#emailMesazhi").html("<span class='errors'>Ju lutem plotesoni email-in</span>");
        errors = true;
    } else {
        $("#emailMesazhi").html("");
        errors = false;
    }
    if (komenti == "") {
        $("#komentiMesazhi").html("<span class='errors'>Ju lutem plotesoni komentin</span>");
        errors = true;
    }
    else {
        $("#komentiMesazhi").html("");
        errors = false;
    }
    if (errors) {
        return false;
    }
    else {
        return true;
    }
});