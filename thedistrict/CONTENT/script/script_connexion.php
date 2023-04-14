<?php
session_start();

if(isset($_POST['connexion'])){
    if(!empty($_POST['email']) && !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        require "../../db.php"; 
        $db = connexionBase();

        $requete_user = $db->prepare('SELECT * FROM utilisateur where email = ? and password = ?');
        $requete_user->execute(array($email, $mdp));

        if($requete_user->rowCount() > 0){
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $requete_user->fetch()['id'];
            
            header("Location: /../../index.php?page=acceuil");
            exit;
        } else{
            /* ERREUR EMAIL */
            header("Location: /../../index.php?page=erreur_connexion");
            exit;
        }
    } else{
        /* ERREUR CHAMP */
        header("Location: /../../index.php?page=erreur_champ");
        exit;
    }
}
?>