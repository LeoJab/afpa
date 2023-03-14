const filtre_lettre = new RegExp(/^[A-Za-zéàùôâêèëäöïî-]*$/);
const filtre_chiffre = new RegExp(/^[0-9]*$/);
const filtre_email = new RegExp(/^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/);

const error_chiffre = "Votre réponse doit contenir uniquement des lettres";
const error_lettre = "Votre réponse doit contenir uniquement des chiffres";
const error_vide = "Ce champ est obligatoire.";

function js_submit_contact()
{
    //--------------- NOM ---------------
    document.getElementById("er_nom").innerHTML = "";
    var nom = document.getElementById("nom").value;
    let verif_nom = filtre_lettre.test(nom);

    if(nom == "") {
        document.getElementById("er_nom").innerHTML = error_vide;
    }
    if(verif_nom == false) {
        document.getElementById("nom").value = "";
        document.getElementById("er_nom").innerHTML = error_chiffre;
    }

    //--------------- PRENOM ---------------
    document.getElementById("er_prenom").innerHTML = "";
    var prenom = document.getElementById("prenom").value;
    let verif_prenom = filtre_lettre.test(prenom);

    if(prenom == "") {
        document.getElementById("er_prenom").innerHTML = error_vide;
    }
    if(verif_prenom == false) {
        document.getElementById("prenom").value = "";
        document.getElementById("er_prenom").innerHTML = error_chiffre;
    }

    //--------------- SEXE ---------------
    document.getElementById("er_sexe").innerHTML = "";
    var sexe;

    if(document.getElementById("sexe1").checked) {
        sexe = document.getElementById("sexe1").value;
    } else if(document.getElementById("sexe2").checked) {
        sexe = document.getElementById("sexe2").value;
    } else if(sexe == null) {
        document.getElementById("er_sexe").innerHTML = error_vide;
    }

    //--------------- DATE DE NAISSANCE ---------------
    document.getElementById("er_ddn").innerHTML = "";
    var ddn = document.getElementById("date").value;

    if(ddn == "") {
        document.getElementById("er_ddn").innerHTML = error_vide;
    }

    //--------------- CODE POSTAL ---------------
    document.getElementById("er_cp").innerHTML = "";
    var cp = document.getElementById("cp").value;
    let max = 5;
    let verif_cp = filtre_chiffre.test(cp);

    if(cp.length != max) {
        document.getElementById("er_cp").innerText = "Votre code postal doit contenir 5 chiffres";
    }
    if(cp == "") {
        document.getElementById("er_cp").innerHTML = error_vide;
    }
    if(verif_cp == false) {
        document.getElementById("cp").value = "";
        document.getElementById("er_cp").innerHTML = error_lettre;
    }

    //--------------- ADRESSE ---------------
    var adresse = document.getElementById("adresse").value;

    //--------------- VILLE ---------------
    var ville = document.getElementById("ville").value;
    let verif_ville = filtre_lettre.test(ville);

    if(verif_ville == false) {
        document.getElementById("ville").value = "";
        document.getElementById("er_ville").innerHTML = error_chiffre;
    }

    //--------------- EMAIL ---------------
    document.getElementById("email").innerHTML = "";
    var email = document.getElementById("email").value;
    let verif_email = filtre_email.test(email);
    console.log(email, verif_email)

    if(email == ""){
        document.getElementById("er_email").innerHTML = error_vide;
    }
    if(verif_email == false){
        document.getElementById("email").value = "";
        document.getElementById("er_email").innerHTML = "Votre adresse email n'est pas correct";
    }

    //--------------- SUJET ---------------
    document.getElementById("er_sujet").innerHTML = "";
    var sujet = document.getElementById("choix").value;
    var cb = document.getElementById("choix_base").value;

    if(sujet == cb){
        document.getElementById("er_sujet").innerHTML = error_vide;
    }

    //--------------- QUESTION ---------------
    document.getElementById("er_question").innerHTML = "";
    var question = document.getElementById("question").value;

    if(question == "") {
        document.getElementById("er_question").innerHTML = error_vide;
    }

    //--------------- CONFIRMATION FORMULAIRE ---------------
    document.getElementById("er_confirm").innerHTML = "";
    var confirm;

    if(document.getElementById("confirmation_formulaire").checked) {
        confirm = document.getElementById("confirmation_formulaire").value;
    }else if(confirm == null) {
        document.getElementById("er_confirm").innerHTML = error_vide;
    }
}