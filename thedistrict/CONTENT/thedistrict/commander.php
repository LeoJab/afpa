<?php
require "db.php";
$db = connexionBase();
$id = $_GET['id'];
$prix = $_GET['prix'];
$requete = $db->query("SELECT * FROM plat where id = $id");
$plat = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<div class="commander">
    <h1>Commander</h1>
    <div class="commander_head">
        <?php foreach($plat as $plat): ?>
            <img src="/ASSET/img/images_the_district/food/<?= $plat->image ?>" alt="">
            <div>
                <h2><?= $plat->libelle ?></h2>
                <h4><?= $plat->description ?></h4>
                <h4><?= $plat->prix ?>€</h4>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="commander_body">
        <form action="CONTENT/script/script_commande.php?id_plat=<?= $id ?>&prix=<?= $prix ?>" method="post" enctype='multipart/form-data'>
            <input type="text" name="nom" placeholder="Votre Nom..">
            <input type="text" name="email" placeholder="Votre Email..">
            <input type="text" name="numero" placeholder="Votre Numero..">
            <input type="text" name="adresse" placeholder="Votre Adresse..">
            <input type="text" name="quantite" placeholder="Quantité..">

            <input type="submit" value="Commander">
        </form>
    </div>
</div>