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

<div id="fond_banniere_recherche">
    <div id="banniere_recherche">
        <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
        <form id="bouton_barre_recherche">
            <label id="label_recherche" for="recherche">Rechercher un plat ou une catégorie</label>
            <div class="d-flex">
                <input id="barre_recherche" name="recherche" type="search" placeholder="Rechercher" aria-label="Search">
                <button id="bouton_recherche" type="submit">Rechercher</button>
            </div>
        </form>
    </div>
</div>

<h1 id="titre_accueil">Accueil</h1>

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