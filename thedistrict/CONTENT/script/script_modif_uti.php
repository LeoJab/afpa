<?php
    $id = (isset($_GET['id']) && $_GET['id'] != "") ? $_GET['id'] : NULL;
    $nom = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : NULL;
    $prenom = (isset($_POST['prenom']) && $_POST['prenom'] != "") ? $_POST['prenom'] : NULL;
    $email = (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : NULL;
    $numero = (isset($_POST['numero']) && $_POST['numero'] != "") ? $_POST['numero'] : NULL;

    if($id == NULL){
        header('Location: ../../index.php?admin=utilisateur');
    } elseif($nom == NULL || $prenom == NULL || $email == NULL || $numero == NULL){
        header('Location: ../../index.php?admin=modif_uti&id='.$id);
        exit;
    }

    require "../../db.php";
    $db = connexionBase();

    try {
        $requete = $db->prepare("UPDATE utilisateur set nom = :nom, prenom = :prenom, email = :email, numero = :numero where id = :id");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":email", $email, PDO::PARAM_STR);
        $requete->bindValue(":numero", $numero, PDO::PARAM_STR);
        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script");
    }

    header('Location: ../../index.php?admin=utilisateur');
    exit;