<?php
    /* SESSION */
    if($_SESSION['email'] != "admin@admin.fr" || NULL){
        include("CONTENT/erreur/page_introuvable.php");
    } else


    /* REQUETE */
    require "db.php";
    $db = connexionBase();

    /* LES PLATS LES PLUS VENDUS */
    $requete = $db->query("SELECT plat.libelle AS 'Nom_Plat', count(commande.quantite) AS 'Quantite' from commande join plat on commande.id_plat = plat.id group by plat.libelle ORDER BY Quantite DESC LIMIT 20");
    $PlatsPlusVendus = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete->closeCursor();

    /* LE PLAT LE PLUS REMUNERATEUR */
    $requete = $db->query("SELECT plat.libelle AS 'Nom_Plat', SUM(total) AS 'Total' from commande join plat on commande.id_plat = plat.id group by commande.id_plat order by SUM(total) DESC LIMIT 10");
    $PlatsPlusRemu = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete->closeCursor();

    /* CHIFFRE D'AFFAIRE CLIENT*/
    $requete = $db->query("SELECT nom_client AS 'Nom_Prenom', total AS 'Total' from commande order by total DESC LIMIT 10");
    $ChiffreAffaireClient = $requete->fetchAll(PDO::FETCH_ASSOC);
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
            <a class="a_cate_admin" href="#"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="#"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="#"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin select" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats">
        <div id="">
            <h2 id="titre_statistique">Statistiques</h2>
            <div id="statistique">
                <!-- LE PLAT LE PLUS REMUNERATEUR -->
                <div class="div_stats">
                    <h3 class="titre_stats">Plat les plus rémunérateurs</h3>
                    <table class="table_stats">
                        <thead>
                            <tr>
                                <th class="th_stats">Nom du Plat</th>
                                <th class="th_stats">Rémunération</th>
                            </tr>
                        </thead>
                        <?php foreach($PlatsPlusRemu as $plat): ?>
                            <tbody>
                                <tr>
                                    <td class="td_stats"><?= $plat['Nom_Plat'] ?></td>
                                    <td class="td_stats"><?= $plat['Total'] ?>€</td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- LES PLATS LES PLUS VENDUS -->
                <div class="div_stats">
                    <h3 class="titre_stats">Plats les plus vendus</h3>
                    <table class="table_stats">
                        <thead>
                            <tr>
                                <th class="th_stats">Nom du Plat</th>
                                <th class="th_stats">Quantité vendu</th>
                            </tr>
                        </thead>
                        <?php foreach($PlatsPlusVendus as $plat): ?>
                            <tbody>
                                <tr>
                                    <td class="td_stats"><?= $plat['Nom_Plat'] ?></td>
                                    <td class="td_stats"><?= $plat['Quantite'] ?></td>
                                </tr>                    
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- CHIFFRE D'AFFAIRE CLIENT -->
                <div class="div_stats">
                    <h3 class="titre_stats">Chiffre d'affaire par client</h3>
                    <table class="table_stats">
                        <thead>
                            <tr>
                                <th class="th_stats">Nom du Client</th>
                                <th class="th_stats">Revenus</th>
                            </tr>
                        </thead>
                        <?php foreach($ChiffreAffaireClient as $client): ?>
                            <tbody>
                                <tr>
                                    <td class="td_stats"><?= $client['Nom_Prenom'] ?></td>
                                    <td class="td_stats"><?= $client['Total'] ?>€</td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>