<?php
    require "/../../db.php";
    $db = connexionBase();
    $email = $_SESSION['email'];
    $requete = $db->prepare('SELECT * from utilisateur where email=?');
    $requete->execute(array($email));
    $info_utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<div id="fond_banniere_recherche">
    <div id="banniere_recherche_solo">
        <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
        
    </div>
</div>

<div>
    <h1>Votre Compte</h1>
    <div>
        <?php foreach($info_utilisateur as $utili): ?>

        <?php endforeach; ?>
    </div>
</div>