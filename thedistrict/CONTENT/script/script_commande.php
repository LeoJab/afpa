<?php
$id_plat = (isset($_GET['id_plat']) && $_GET['id_plat'] != "") ? $_GET['id_plat'] : NULL;
$quantite = (isset($_POST['quantite']) && $_POST['quantite'] != "") ? $_POST['quantite'] : NULL;
$prix = (isset($_GET['prix']) && $_GET['prix'] != "") ? $_GET['prix'] : NULL;
$total = $prix * $quantite;
$date_commande = date_format(new DateTime(), 'Y-m-d H:i:s');
$etat = "En préparation";
$nom_client = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : NULL;
$telephone_client = (isset($_POST['numero']) && $_POST['numero'] != "") ? $_POST['numero'] : NULL;
$email_client = (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : NULL;
$adresse_client = (isset($_POST['adresse']) && $_POST['adresse'] != "") ? $_POST['adresse'] : NULL;

if($quantite == NULL || $nom_client == NULL || $telephone_client == NULL || $email_client == NULL || $adresse_client == NULL) {
    header('Location: /index.php?page=plat');
    exit;
}

require "../../db.php";
$db = connexionBase();

$requete = $db->query("SELECT * FROM plat where id = $id_plat");
$plat = $requete3->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

try {
    $requete = $db->prepare("INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) VALUES (:id_plat, :quantite, :total, :date_commande, :etat, :nom_client, :telephone_client, :email_client, :adresse_client)");

    $requete->bindValue(":id_plat", $id_plat, PDO::PARAM_INT);
    $requete->bindValue(":quantite", $quantite, PDO::PARAM_INT);
    $requete->bindValue(":total", $total, PDO::PARAM_STR);
    $requete->bindValue(":date_commande", $date_commande, PDO::PARAM_STR);
    $requete->bindValue(":etat", $etat, PDO::PARAM_STR);
    $requete->bindValue(":nom_client", $nom_client, PDO::PARAM_STR);
    $requete->bindValue(":telephone_client", $telephone_client, PDO::PARAM_STR);
    $requete->bindValue(":email_client", $email_client, PDO::PARAM_STR);
    $requete->bindValue(":adresse_client", $adresse_client, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();

    $from = 'thedistrict@gmail.com';
    $to = $email_client;
    $x = mail($to,
                'Votre commande The District',
                "Merci ". $nom_client ." d'avoir commander chez The District pour un total de " . $total . "€ /n",
                'From: ' . $from);
    var_dump($x); // true means successfull.
} catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_commande.php)");
}

header("Location: /index.php?page=plat");
exit;;