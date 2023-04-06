<?php
require "db.php";
$db = ConnexionBase();

//Catégories
$requete1 = $db->query("SELECT * FROM categorie where active = 'yes' order by libelle ");
$MyCategorieActive = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM categorie where active = 'no' order by libelle ");
$MyCategorieNoActive = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();
?>

<div id="select_cate_plat">
    <h2 id="titre_select_cate_plat">Choisissez une Catégorie</h2>
    <ul id="list_cate_plat">
        <?php foreach($MyCategorieActive as $categorie_act): ?>
            <button class="btn_cate_plat_act"><li><a class="a_cate_plat" href="index.php?page=<?= $categorie_act->libelle ?>"><?= $categorie_act->libelle ?></a></li></button>
        <?php endforeach; ?>

        <?php foreach($MyCategorieNoActive as $categorie_no_act): ?>
            <button class="btn_cate_plat_no_act" disabled="disabled"><li class="a_cate_plat"><?= $categorie_no_act->libelle ?></li></button>
        <?php endforeach; ?>
    </ul>
</div>