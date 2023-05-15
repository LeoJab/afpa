<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        include("CONTENT/erreur/page_introuvable.php");
    } else
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
        <form action="CONTENT/script/script_add_cate.php" method="post" enctype='multipart/form-data'>
            <input type="text" name="libelle" placeholder="Libelle..">
            
            <select name="active">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <input type="file" name="picture">

            <input type="submit" value="Ajouter">
        </form>
    </div>