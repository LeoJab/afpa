<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        include("CONTENT/erreur/page_introuvable.php");
    } else


    /* REQUETE */
    require "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM categorie");
    $categorie = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete->closeCursor();
?>
<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin select" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin" href="index.php?admin=commande"><li class="li_admin">Commandes</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats" class="admin_cate">
        <h1>Categories</h1>
        <a class="ajout_cate" href="index.php?admin=add_categorie">Ajouter</a>
        <table class="table_cate">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>image</th>
                    <th>libelle</th>
                    <th>active</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($categorie as $cate): ?>
                <tr>
                    <td><?= $cate["id"] ?></td>
                    <td><img src="ASSET/img/images_the_district/category/<?= $cate["image"] ?>" alt="<?= $cate["image"] ?>"></td>
                    <td><?= $cate["libelle"] ?></td>
                    <td><?= $cate["active"] ?></td>
                    <div class="btn_admin_cate">
                        <td class=""><a class="btn_modifier_cate" href="index.php?admin=modif_categorie&id=<?= $cate["id"] ?>"><i class="fa-solid fa-pen" style="color: #2b2c34;"></i></a></td>
                        <td class=""><a class="btn_delete_cate" href="/CONTENT/script/script_supp_cate.php?id=<?= $cate["id"] ?>"><i class="fa-solid fa-x" style="color: #2b2c34;"></i></a></td>
                    </div>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>