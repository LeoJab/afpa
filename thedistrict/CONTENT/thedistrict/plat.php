<?php
include("db.php");
$db = connexionBase();
//Plat
$requete3 = $db->query("SELECT * FROM plat where active = 'yes'");
$MyPlatAllActive = $requete3->fetchAll(PDO::FETCH_OBJ);
$requete3->closeCursor();
?>

<div id="fond_plat">
    <h2 class="titre_categorie_plat">TOUS LES PLATS</h2>
    <div id="plat">
        <?php foreach($MyPlatAllActive as $plat_act): ?>
            <div>
            <table class="table_plat card_plat">
                <thead>
                    <tr>
                        <td><img class="image_plat card_plat" src="/ASSET/img/images_the_district/food/<?= $plat_act->image ?>" alt="nourriture"></td>
                    </tr>
                </thead>
                <tbody class="tbody_all_plat">
                    <tr>
                        <td class="libelle_plat"><?= $plat_act->libelle ?></td>
                    </tr>
                    <tr class="plat_description">
                        <td class="desc_plat"><?= $plat_act->description ?></td>
                        <tr class="plat_prix_icon">
                            <td class="prix_plat"><?= $plat_act->prix ?>€</td>
                            <td><svg class="icon_shop" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16"><path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/></svg></td>
                        </tr>
                    </tr>
                </tbody>
            </table>
            </div>
        <?php endforeach ?>
    </div>
</div>