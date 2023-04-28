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

<div>
    <div class="fond_cate_act">
        <h1 id="titre_cate_act">Catégories Disponnibles</h1>

        <div id="cate_act">
            <?php foreach($MyCategorieActive as $categorie): ?>
                <a class="lien_cate_act card_cate_act" href="index.php?page=<?= $categorie->libelle ?>">
                <table class="table_cate_act card_cate_act">
                    <thead>
                        <tr>
                            <td><img class="image_cate_act card_cate_act" src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
                        </tr>
                    </thead>
                    <tbody class="tbody_cate_act card_cate_act">
                        <tr>
                            <td class="libelle_cate_act"><?= $categorie->libelle ?></td>
                            <td class="line_cate_act"></td>
                        </tr>
                    </tbody>
                </table>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="img_mid_cate">
        <h1>The District</h1>
    </div>
    
    <div class="fond_cate_no_act">
        <h1 id="titre_cate_no_act">Catégorie(s) Non Disponnible(s)</h1>
        <div id="cate_no_act">
            <?php foreach($MyCategorieNoActive as $categorie): ?>
                <div class="limite_cate_no_act card_cate_act">
                    <table class="table_cate_no_act card_cate_act">
                        <thead>
                            <tr>
                                <td><img class="image_cate_no_act card_cate_act" src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></td>
                            </tr>
                        </thead>
                        <tbody class="tbody_cate_no_act card_cate_act">
                            <tr>
                                <td class="libelle_cate_no_act"><?= $categorie->libelle ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>