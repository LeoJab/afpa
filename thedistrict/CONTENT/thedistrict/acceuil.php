<?php
require "db.php";
$db = ConnexionBase();

$requete1 = $db->query("SELECT * FROM categorie where active = 'yes' order by libelle");
$MyCategorie = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM plat order by id limit 4");
$MyPlat = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();
?>

<h1 id="titre_acceuil">Accueil</h1>

<h2 id="titre_categorie_acceuil">Catégories</h2>

<div id="categorie_acceuil">
    <?php foreach($MyCategorie as $categorie): ?>
        <a class="lien_categorie_accceuil" href="index.php?page=<?= $categorie->libelle ?>">
            <table class="table_categorie_acceuil">
                <thead>
                    <tr>
                        <td><img class="image_categorie_acceuil" src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
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