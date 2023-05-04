<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        header('Location: index.php?page=acceuil');
        exit;
    } else


    /* REQUETE */
    require "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM plat");
    $plat = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete->closeCursor();
?>
<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin select" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin" href="index.php?admin=commande"><li class="li_admin">Commandes</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats">
        <h1>Plats</h1>
        <table class="admin_table_plat">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>image</th>
                    <th>libelle</th>
                    <th>description</th>
                    <th>prix</th>
                    <th>active</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($plat as $plat): ?>
                    <tr>
                        <td><?= $plat["id"] ?></td>
                        <td><img src="ASSET/img/images_the_district/food/<?= $plat["image"] ?>" alt="<?= $plat["image"] ?>"></td>
                        <td><?= $plat["libelle"] ?></td>
                        <td><?= $plat["description"] ?></td>
                        <td><?= $plat["prix"] ?></td>
                        <td><?= $plat["active"] ?></td>
                        <div class="btn_admin_uti">
                            <td class=""><a class="btn_modifier_uti" href="#"><i class="fa-solid fa-pen" style="color: #2b2c34;"></i></a></td>
                            <td class=""><a class="btn_delete_uti" href="#"><i class="fa-solid fa-x" style="color: #2b2c34;"></i></a></td>
                        </div>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>