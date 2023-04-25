<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr"){
        header('Location: index.php?page=acceuil');
        exit;
    } else


    /* REQUETE */
    require "db.php";
    $db = connexionBase();

    /* TOUS LES UTILISATEURS */
    $requete = $db->query("SELECT * FROM utilisateur");
    $AllUtilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete->closeCursor();
?>

    <div id="fond_banniere_recherche">
        <div id="banniere_recherche_solo">
            <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
            
        </div>
    </div>

<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin select" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats">
        <h1>Utilisateurs</h1>

        <table id="table_admin_uti">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Numero</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody_admin_uti">
                <?php foreach($AllUtilisateurs as $utilisateurs): ?>
                        <tr class="tr_admin_uti">
                            <td class="td_admin_uti"><?= $utilisateurs["nom"] ?></td>
                            <td class="td_admin_uti"><?= $utilisateurs["prenom"] ?></td>
                            <td class="td_admin_uti"><?= $utilisateurs["numero"] ?></td>
                            <td class="td_admin_uti"><?= $utilisateurs["email"] ?></td>
                            <div class="btn_admin_uti">
                                <td class=""><a class="btn_modifier_uti" href="index.php?admin=modif_uti&id=<?= $utilisateurs["id"] ?>"><i class="fa-solid fa-pen" style="color: #2b2c34;"></i></a></td>
                                <td class=""><a class="btn_delete_uti" href="index.php?page=#"><i class="fa-solid fa-x" style="color: #2b2c34;"></i></a></td>
                            </div>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>