<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        include("CONTENT/erreur/page_introuvable.php");
    } else

    require "db.php";
    $db = connexionBase();
    $id = $_GET['id'];
    $requete = $db->query("SELECT * FROM categorie where id = $id");
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
    <div>
        <h1>Ajouter une categorie</h1>
        <form action="CONTENT/script/script_modif_cate.php?id=<?= $id ?>" method="post" enctype='multipart/form-data'>
            <?php foreach($categorie as $categorie): ?>
                <img src="ASSET/img/images_the_district/category/<?= $categorie["image"] ?>" alt="<?= $categorie["image"] ?>">
                
                <input type="text" name="libelle" value="<?= $categorie['libelle'] ?>">
                
                <select name="active" value="<?= $categorie['active'] ?>">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <input type="file" name="picture" value="<?= $categorie["image"] ?>">

                <input type="submit" value="Modifier">
            <?php endforeach; ?>
        </form>
    </div>