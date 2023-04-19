<?php
session_start();

if(isset($_POST["inscription"])){

    require "../../db.php";
    $db = connexionbase();

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["numero"]) && !empty($_POST["mdp"]) && !empty($_POST["mdpc"])){
        $email = htmlspecialchars($_POST["email"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $numero = htmlspecialchars($_POST["numero"]);
        $mdp = ($_POST["mdp"]);
        $mdpc = ($_POST["mdpc"]);

        $requete1 = $db->prepare('SELECT * FROM utilisateur where email = ?');
        $requete1->execute(array($email));
        $requete1->closeCursor();

        if($requete1->rowCount() == 0) {
            if($mdp == $mdpc) {
                $mdp = sha1($_POST["mdp"]);

                $requete2 = $db->prepare('INSERT INTO utilisateur(email, nom, prenom, numero, password) VALUES(?, ?, ?, ?, ?)');
                $requete2->execute(array($email, $nom, $prenom, $numero, $mdp));
                $requete2->closeCursor();

                $requete3 = $db->prepare('SELECT * FROM utilisateur where email = ?');
                $requete3->execute(array($email));
                $requete3->closeCursor();

                if($requete3->rowCount() > 0){
                    $_SESSION["nom"] = $nom;
                    $_SESSION["prenom"] = $prenom;
                    $_SESSION["email"] = $email;
                    $_SESSION['numero'] = $numero;
                    $_SESSION["id"] = $requete3->fetch()['id'];

                    header('Location: /../../index.php?page=acceuil');
                    exit;
                }
            } else {
                /* ERREUR MDP */
                header('Location: /../../index.php?page=erreur_mdp');
                exit;
            }
        } else {
            /* ERREUR EMAIL */
            header('Location: /../../index.php?page=erreur_email');
            exit;
        }
    } else {
        /* ERREUR CHAMP */
        header('Location: /../../index.php?page=erreur_champ');
        exit;
    }
}
?>