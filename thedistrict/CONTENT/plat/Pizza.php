<?php
include("db.php");
$db = connexionBase();
//Plat
$requete3 = $db->query("SELECT * FROM plat where active = 'yes' and id_categorie = 4");
$MyPlatAllActive = $requete3->fetchAll(PDO::FETCH_OBJ);
$requete3->closeCursor();
?>

<div id="fond_plat">
    <h2 class="titre_categorie_plat">TOUS LES PLATS</h2>
    <div id="plat">
        <?php foreach($MyPlatAllActive as $plat_act): ?>
            <div>
            <a href="index.php?page=commander&id=<?= $plat_act->id ?>&prix=<?= $plat_act->prix ?>">
                <table class="table_plat card_plat">
                    <thead>
                        <tr>
                            <td><img class="image_plat card_plat" src="/ASSET/img/images_the_district/food/<?= $plat_act->image ?>" alt="nourriture"></td>
                        </tr>
                        <tr class="libelle_plat">
                            <td><?= $plat_act->libelle ?></td>
                        </tr>
                    </thead>
                    <tbody class="plat_description">
                        <tr>
                            <td class="desc_plat"><?= $plat_act->description ?></td>
                            <tr class="plat_prix_icon">
                                <td><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffc453;"></i></td>
                                <td class="prix_plat"><?= $plat_act->prix ?>€</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </a>
            </div>
        <?php endforeach ?>
    </div>
</div>