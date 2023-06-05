<?php
include "db.php";
$db = ConnexionBase();

$requete1 = $db->query("SELECT * FROM categorie where active = 'yes' order by libelle limit 5");
$MyCategorie = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM plat order by id limit 4");
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
                        <th><img src="/ASSET/img/images_the_district/category/<?= $categorie->image ?>" alt="image_plat"></th>
                    </tr>
                </thead>
                <tbody class="tbody_cate_accueil">
                    <tr>
                        <td class="libelle_categorie_acceuil"><?= $categorie->libelle ?></td>
                        <td class="barre_liebelle_accueil"></td>
                    </tr>
                </tbody>
            </table>
        </a>
    <?php endforeach; ?>
</div>

<div class="horaire">
    <div class="img_horaire"></div>
    <div class="jour_heure">
        <h2>Horaire</h2>
        <div class="list_horaire">
            <ul class="jours">
                <li>Lundi</li>
                <li>Mardi</li>
                <li>Mercredi</li>
                <li>Jeudi</li>
                <li>Vendredi</li>
                <li>Samedi</li>
                <li>Dimanche</li>
            </ul>
            <ul class="heure">
                <li>12h-14h, 19h-22h</li>
                <li>12h-14h, 19h-22h</li>
                <li>12h-14h, 19h-22h</li>
                <li>12h-14h, 19h-22h</li>
                <li>12h-14h, 19h-22h</li>
                <li>fermé, 19h-22h</li>
                <li>fermé, fermé</li>
            </ul>
        </div>
    </div>
</div>

<div class="fond_plat_acc">
    <div id="plat_acceuil">
        <?php foreach($MyPlat as $plat): ?>
            <a class="lien_plat_acceuil" href="index.php?page=plat">
                <table class="table_plat_acceuil card_plat_acceuil">
                    <thead>
                        <tr>
                            <th><img class="image_plat_acceuil" src="/ASSET/img/images_the_district/food/<?= $plat->image ?>" alt="image_plat"></th>
                        </tr>
                    </thead>
                    <tbody class="tbody_plat_acc">
                        <tr>
                            <td class="libelle_plat_acc"><?= $plat->libelle ?></td>
                            <td class="fond_libelle"></td>
                        </tr>
                    </tbody>
                </table>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="titre_plat_acc">
        <h1>Plats</h1>
        <p>Retrouvez tous nos plas disponibles en cliquant sur le bouton ci-dessous</p>
        <a href="index.php?page=plat">PLATS</a>
    </div>
</div>

<div class="info_acc">
    <div class="card_info">
        <div>
            <i class="fa-solid fa-location-dot fa-2xl" style="color: #212226;"></i>
            <h6>Où nous trouver ?</h6>
        </div>
        <p>34 Rue Beaurepaire 75010 Paris</p>
    </div>
    <div class="card_info">
        <div>
            <i class="fa-solid fa-phone fa-2xl" style="color: #212226;"></i>
            <h6>Nous contacter</h6>
        </div>
        <p>09 56 84 75 25</p>
    </div>
    <div class="card_info">
        <div>
            <i class="fa-solid fa-envelope fa-2xl" style="color: #212226;"></i>
            <h6>Notre mail</h6>
        </div>
        <p>thedistrict@gmail.com</p>
    </div>
</div>