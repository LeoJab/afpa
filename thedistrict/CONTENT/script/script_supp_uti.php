<?php
    if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0);

    require "../../db.php"; 
    $db = ConnexionBase();

    try {
        $requete = $db->prepare("DELETE FROM utilisateur WHERE id = ?");
        $requete->execute(array($_GET["id"]));
        $requete->execute();
        $requete->closeCursor();
    }
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script");
    }
    header("Location: /index.php?admin=utilisateur");
    exit;
?>