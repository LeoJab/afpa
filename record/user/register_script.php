<?php
session_start();

if(isset($_POST["inscription"])){

    require "../db.php"; 
    $db = connexionBase();

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["mdp"]) && !empty($_POST["mdpc"])){
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = ($_POST["mdp"]);
        $mdpc = ($_POST["mdpc"]);

        $verif_email = $db->prepare('SELECT email FROM login');
        $verif_email->execute();
        $verif_email->closeCursor();

        if($email != $verif_email){
            if($mdp == $mdpc){
                $mdp = sha1($_POST["mdp"]);

                $requete2 = $db->prepare('INSERT INTO login(nom, prenom, pseudo, email, mdp) VALUES (?, ?, ?, ?, ?)');
                $requete2->execute(array($nom, $prenom, $pseudo, $email, $mdp));
                $requete2->closeCursor();

                $requete3 = $db->prepare('SELECT * FROM login where nom = ? and prenom = ? and pseudo = ? and email = ?');
                $requete3->execute(array($nom, $prenom, $pseudo, $email));
                $requete3->closeCursor();
                if($requete3->rowCount() > 0) {
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['pseudo'] = $pseudo;
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $requete3->fetch()['id'];

                    header("Location: /index.php?page=disc");
                    exit;
                }
            }else{
                echo "Confirmation du mot de passe incorrect";
            }
        }else{
            echo "Adresse email deja enregistré";
        }
    }else{
        echo "Veuillez compléter tous les champs";
    }
}
?>