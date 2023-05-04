<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        header('Location: index.php?page=acceuil');
        exit;
    } else


    /* REQUETE */
    require "db.php";
    $db = connexionBase();

?>
<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin select" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin" href="index.php?admin=commande"><li class="li_admin">Commandes</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats">
        
    </div>
</div>