﻿<?php
session_start();
if(isset($_POST['connexion'])){
    if(!empty($_POST['pseudo']) or !empty($_POST['email']) || !empty($_POST['mdp'])){
        $pseudo = $_POST['pseudo'];
        $mdp = sha1($_POST['mdp']);

        require "../db.php"; 
        $db = connexionBase();

        $requete_user = $db->prepare('SELECT * FROM login where pseudo = ? or email = ? and mdp = ?');
        $requete_user->execute(array($pseudo, $email, $mdp));

        if($requete_user->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $requete_user->fetch()['id'];
            
            header("Location: /index.php?page=disc");
            exit;
        } else{
            echo "Pseudo ou Mot de passe incorrect";
        }
    } else{
        echo "Veuillez compléter tous les champs";
    }
}
?>