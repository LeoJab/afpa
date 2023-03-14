const filtre_chiffre = new RegExp(/^[0-9]*$/);

//------------ Exercice 1 ------------

var age_1_1 = [];
var saisi_1_1 = true;
var age_20 = 0;
var age_40 = 0;
var age_20_40 = 0;
var age_100 = 0;

function js_1_1()
{
    document.getElementById("age").innerHTML = "";
    var i = 1;

    while(saisi_1_1 == true)
    {
        age_1_1[i] = parseInt(window.prompt("Entrez votre âge (Tapez 0 pour quitter)"));

        if(age_1_1[i] == 0)
        {
            age_1_1.pop;
            saisi_1_1 = false;
        }

        if(age_1_1[i] >= 100)
        {
            saisi_1_1 = false;
        }
        //console.log(age_1_1[i]);

        i++;
    }

    for(i = 0; i < age_1_1.length; i++)
    {
        if (age_1_1[i] == 0) {
            age_1_1.pop;
        } else if(age_1_1[i] < 20) {
            age_20++;
        } else if (age_1_1[i] > 40) {
            age_40++;
        } else if (age_1_1[i] >= 20) {
            age_20_40++;
        } else if (age_1_1[i] <= 40) {
            age_20_40++;
        } else if (age_1_1[i] = 100) {
            age_100++;
            saisi_1_1 = false;
        }
    }

    document.getElementById("moins_20").innerHTML += "Nombre de personne de moins de 20 ans:  " + age_20;
    document.getElementById("plus_40").innerHTML += "Nombre de personne de plus de 40 ans:  " + age_40;
    document.getElementById("entre_20_40").innerHTML += "Nombre de personne qui ont entre 20 ans et 40 ans:  " + age_20_40;
    document.getElementById("100").innerHTML += "Personne centenaire:  " + age_100;
}

//------------ Exercice 2 ------------

function js_2_1()
{
    var n_1_2 = parseInt(document.getElementById("n_1_2").value);
    var m_1_2 = 1;
    var t_1_2 = 0;

    document.getElementById("resultat_1_2").innerHTML = "";
    document.getElementById("er_multi").innerHTML = "";
    let verif_n_1_2 = filtre_chiffre.test(n_1_2);

    if(verif_n_1_2 == false) {
        document.getElementById("er_multi").innerHTML = "Entrez un chiffre ou un nombre.";
        return;
    }

    for(i = 0; i < 10; i++)
    {
        t_1_2 = n_1_2 * m_1_2;

        document.getElementById("resultat_1_2").innerHTML += m_1_2 + " * " + n_1_2 + " = " + t_1_2 + "<br>";

        m_1_2++;
    }
}

//------------ Exercice 3 ------------

var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
document.getElementById("tb_prm").innerHTML = tab;

function js_3_1()
{
    var prm = (document.getElementById("t_1_3").value).toLowerCase();
    document.getElementById("error_1_3").innerHTML = "";

    /**if (prm === "Audrey") {
        tab.splice(0, 1, '" "');
    } else if (prm === "Aurélien") {
        tab.splice(1, 1, '" "');
    } else if (prm === "Flavien") {
        tab.splice(2, 1, '" "');
    } else if (prm === "Jérémy") {
        tab.splice(3, 1, '" "');
    } else if (prm === "Laurent") {
        tab.splice(4, 1, '" "');
    } else if (prm === "Melik") {
        tab.splice(5, 1, '" "');
    } else if (prm === "Nouara") {
        tab.splice(6, 1, '" "');
    } else if (prm === "Salem") {
        tab.splice(7, 1, '" "');
    } else if (prm === "Samuel") {
        tab.splice(8, 1, '" "');
    } else if (prm === "Stéphane") {
        tab.splice(9, 1, '" "');
    } else {
        document.getElementById("error_1_3").innerHTML = "Le prenom n'est pas présent dans la liste";
    }**/

    switch(prm){
        case("audrey"):
            tab.splice(0, 1, '" "');
            break;
        case("aurélien"):
            tab.splice(1, 1, '" "');
            break;
        case("flavien"):
            tab.splice(2, 1, '" "');
            break;
        case("jérémy"):
            tab.splice(3, 1, '" "');
            break;
        case("laurent"):
            tab.splice(4, 1, '" "');
            break;
        case("melik"):
            tab.splice(5, 1, '" "');
            break;
        case("nouara"):
            tab.splice(6, 1, '" "');
            break;
        case("salem"):
            tab.splice(7, 1, '" "');
            break;
        case("samuel"):
            tab.splice(8, 1, '" "');
            break
        case("stéphane"):
            tab.splice(9, 1, '" "');
            break;
        default:
            document.getElementById("error_1_3").innerHTML = "Le prenom n'est pas présent dans la liste";
            break;
    }

    document.getElementById("tb_prm").innerHTML = tab;
}

//------------ Exercice 4 ------------

function js_4_1()
{
    var pu = parseInt(document.getElementById("pu_1_4").value);
    var qtecom = parseInt(document.getElementById("qte_1_4").value);
    var rem = 0;
    var port = 6;
    var tot = pu * qtecom;
    var totr = 0;

    document.getElementById("resultat_1_4").innerHTML = "";
    document.getElementById("er_prix").innerHTML = "";
    document.getElementById("er_quantité").innerHTML = "";

    if(pu == 0){
        document.getElementById("er_prix").innerHTML = "Non valide.";
        return;
    } else if(qtecom == 0) {
        document.getElementById("er_quantité").innerHTML = "Non valide.";
        return;
    }
    
        if(tot > 200) {
        rem = (tot / 100) * 10;
        totr = tot - rem;
        rem = rem.toFixed(2) + "€(10%)";
    } else if(tot >= 100 || tot >= 200) {
        rem = (tot / 100) * 5;
        totr = tot - rem;
        rem = rem.toFixed(2) + "€(5%)";
    } else {
        totr = tot;
        rem = 0;
    }
    //console.log(rem);
    //console.log(totr);

    if(totr < 500) {
        port = ((totr / 100) * 2);
        
        if(port < 6){
            port = 6;
        }

        totr = totr + port;
    } else {
        port = 0;
    }

    document.getElementById("resultat_1_4").innerHTML = "Prix total est de " + tot.toFixed(2) + "€ avec une remise de " + rem + " et " + port.toFixed(2) + "€ de frais de port," + "<br>" + "le prix final est de " + totr.toFixed(2) + "€";
    //console.log(totr);
    //console.log(port);
}