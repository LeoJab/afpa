<?php
    require "db.php";
    $db = connexionBase();
    $id = $_GET["id"];
    $requete = $db->prepare('SELECT * from utilisateur where id=?');
    $requete->execute(array($id));
    $info_utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin select" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin" href="index.php?admin=commande"><li class="li_admin">Commandes</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_modif_uti">
        <h2>Information Utilisateur</h2>
        <form action="/CONTENT/script/script_modif_uti.php?id=<?= $id ?>"  method="post" enctype='multipart/form-data'>
            <div id="div_form_modif_uti">
                <?php foreach($info_utilisateur as $utilisateur): ?>
                    <label class="label_admin_compte" for="nom">Nom</label>
                    <input class="input_admin_compte" type="text" name="nom" value="<?= $utilisateur->nom ?>">
                    <label class="label_admin_compte" for="prenom">Prenom</label>
                    <input class="input_admin_compte" type="text" name="prenom" value="<?= $utilisateur->prenom ?>">
                    <label class="label_admin_compte" for="email">E-mail</label>
                    <input class="input_admin_compte" type="text" name="email" value="<?= $utilisateur->email ?>">
                    <label class="label_admin_compte" for="numero">Numéro</label>
                    <input class="input_admin_compte" type="text" name="numero" value="<?= $utilisateur->numero ?>">
                <?php endforeach; ?>
            </div>
            <input type="submit" value="Modifier">
        </form>
        <a href="index.php?admin=utilisateur"> <i class="fa-solid fa-arrow-left fa-xl" style="color: #212226;"></i> Retour</a>
    </div>
</div>