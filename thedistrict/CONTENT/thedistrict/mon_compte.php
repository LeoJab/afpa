<?php
    require "db.php";
    $db = connexionBase();
    $email = $_SESSION['email'];
    $requete = $db->prepare('SELECT nom, prenom, email, numero from utilisateur where email="'. $email .'";');
    $requete->execute();
    $info_utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    $requete = $db->prepare('SELECT plat.image, plat.libelle, commande.quantite, commande.total, commande.date_commande from commande join plat on commande.id_plat = plat.id where commande.email_client ="'. $email .'";');
    $requete->execute();
    $vos_commande = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<div id="fond_banniere_recherche">
    <div id="banniere_recherche_solo">
        <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
        
    </div>
</div>

<div id="information">
    <h1 id="titre_compte">Votre Compte</h1>
    <div id="information_compte">
        <?php foreach($info_utilisateur as $utilisateur): ?>
            <label class="label_compte" for="nom">Votre nom</label>
            <input class="input_compte" type="text" name="nom" value="<?= $utilisateur->nom ?>" disabled="disabled">
            <label class="label_compte" for="prenom">Votre prenom</label>
            <input class="input_compte" type="text" name="prenom" value="<?= $utilisateur->prenom ?>" disabled="disabled">
            <label class="label_compte" for="email">Votre e-mail</label>
            <input class="input_compte" type="text" name="email" value="<?= $utilisateur->email ?>" disabled="disabled">
            <label class="label_compte" for="numero">Votre Numéro</label>
            <input class="input_compte" type="text" name="numero" value="<?= $utilisateur->numero ?>" disabled="disabled">
        <?php endforeach; ?>
    </div>
    <a id="btn_modif_compte" href="#">Modifier vos informations</a>
</div>

<div id="vos_commandes">
    <h1 id="titre_vos_commandes">Vos Commandes</h1>

</div>