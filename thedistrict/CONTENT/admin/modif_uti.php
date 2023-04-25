<?php
    require "db.php";
    $db = connexionBase();
    $id = $_GET["id"];
    $requete = $db->prepare('SELECT * from utilisateur where id=?');
    $requete->execute(array($id));
    $info_utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<div id="fond_banniere_recherche">
    <div id="banniere_recherche_solo">
        <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
        
    </div>
</div>

<div id="">
    <form action="/CONTENT/script/script_modif.php?id=<?= $id ?>">
        <div id="">
            <?php foreach($info_utilisateur as $utilisateur): ?>
                <label class="label_admin_compte" for="nom">Nom</label>
                <input class="input_admin_compte" type="text" name="nom" value="<?= $utilisateur->nom ?>">
                <label class="label_admin_compte" for="prenom">Prenom</label>
                <input class="input_admin_compte" type="text" name="prenom" value="<?= $utilisateur->prenom ?>">
                <label class="label_admin_compte" for="email">E-mail</label>
                <input class="input_admin_compte" type="text" name="email" value="<?= $utilisateur->email ?>">
                <label class="label_admin_compte" for="numero">Numéro</label>
                <input class="input_admin_compte" type="text" name="numero" value="<?= $utilisateur->numero ?>">
            <?php endforeach; ?>
        </div>
        <input type="submit" value="Modifier">
        <a href="index.php?admin=utilisateur">Retour</a>
    </form>
</div>