<?php
require "db.php";
$db = ConnexionBase();

$requete1 = $db->query("SELECT * FROM categorie where active = 'yes' order by libelle limit 5");
$MyCategorie = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM plat order by id limit 3");
$MyPlat = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();
?>

<div id="categorie_acceuil">
    <div class="titre_cate_acceuil card_cate_accueil">
        <h1>Catégories</h1>
        <p>Retrouvez toutes les catégories en cliquant sur le bouton ci-dessous</p>
        <a href="index.php?page=categorie">CATÉGORIES</a>
    </div>

    <?php foreach($MyCategorie as $categorie): ?>
        <a class="lien_categorie_accceuil" href="index.php?page=<?= $categorie->libelle ?>">
            <table class="table_categorie_acceuil card_cate_accueil">
                <thead>
                    <tr>
                        <td><img src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="libelle_categorie_acceuil"><?= $categorie->libelle ?></td>
                    </tr>
                </tbody>
            </table>
        </a>
    <?php endforeach; ?>
</div>

<h2 id="titre_plat_acceuil">Plats</h2>

<div id="plat_acceuil">
    <?php foreach($MyPlat as $plat): ?>
        <a class="lien_plat_accceuil" href="index.php?page=plat">
            <table class="table_plat_acceuil">
                <thead>
                    <tr>
                        <td><img class="image_plat_acceuil" src="/ASSET/img/images_the_district/food/<?= $plat->image ?>" alt="image_plat"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="libelle_plat_acceuil"><?= $plat->libelle ?></td>
                    </tr>
                </tbody>
            </table>
        </a>
    <?php endforeach; ?>
</div>