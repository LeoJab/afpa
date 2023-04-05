<?php
require "db.php";
$db = ConnexionBase();

$requete1 = $db->query("SELECT * FROM categorie where active = 'yes' order by libelle ");
$MyCategorieActive = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM categorie where active = 'no' order by libelle ");
$MyCategorieNoActive = $requete2->fetchAll(PDO::FETCH_OBJ);
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

<div>
    <h1 id="titre_cate_act">Catégories Disponnibles (<?= count($MyCategorieActive) ?>):</h1>

    <div id="cate_act">
        <?php foreach($MyCategorieActive as $categorie): ?>
            <a class="lien_cate_act" href="index.php?page=<?= $categorie->libelle ?>">
            <table class="table_cate_act">
                <thead>
                    <tr>
                        <td><img class="image_cate_act" src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="libelle_cate_act"><?= $categorie->libelle ?></td>
                    </tr>
                </tbody>
            </table>
            </a>
        <?php endforeach; ?>
    </div>

    <h1 id="titre_cate_no_act">Catégorie(s) Non Disponnible(s) (<?= count($MyCategorieNoActive) ?>):</h1>
    <div id="cate_no_act">
        <?php foreach($MyCategorieNoActive as $categorie): ?>
            <table class="table_cate_no_act">
                <thead>
                    <tr>
                        <td><img class="image_cate_no_act" src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="libelle_cate_no_act"><?= $categorie->libelle ?></td>
                    </tr>
                </tbody>
            </table>
        <?php endforeach; ?>
    </div>

</div>