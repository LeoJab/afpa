<?php
require "db.php";
$db = connexionBase();

// Livrée
$requete = $db->query("SELECT commande.id as 'id', libelle, quantite, total, date_commande, nom_client, telephone_client, email_client, adresse_client 
                        from commande
                        inner join plat on id_plat = plat.id 
                        where etat = 'Livrée'
                        ORDER BY date_commande DESC");
$cmdLivree = $requete->fetchAll(PDO::FETCH_ASSOC);
$requete->closeCursor();
// En cours de livraison
$requete = $db->query("SELECT commande.id as 'id', libelle, quantite, total, date_commande, nom_client, telephone_client, email_client, adresse_client 
                        from commande
                        inner join plat on id_plat = plat.id 
                        where etat = 'En cours de livraison'
                        ORDER BY date_commande DESC");
$cmdLivraison = $requete->fetchAll(PDO::FETCH_ASSOC);
$requete->closeCursor();
// En préparation
$requete = $db->query("SELECT commande.id as 'id', libelle, quantite, total, date_commande, nom_client, telephone_client, email_client, adresse_client 
                        from commande
                        inner join plat on id_plat = plat.id 
                        where etat = 'En préparation'
                        ORDER BY date_commande DESC");
$cmdPreparation = $requete->fetchAll(PDO::FETCH_ASSOC);
$requete->closeCursor();
// Annulée
$requete = $db->query("SELECT commande.id as 'id', libelle, quantite, total, date_commande, nom_client, telephone_client, email_client, adresse_client 
                        from commande
                        inner join plat on id_plat = plat.id 
                        where etat = 'Annulée'
                        ORDER BY date_commande DESC");
$cmdAnnulee = $requete->fetchAll(PDO::FETCH_ASSOC);
$requete->closeCursor();
?>

<div id="page_admin">
    <div id="menu_admin">
        <ul id="ul_admin">
            <a class="a_cate_admin" href="index.php?admin=accueil"><li class="li_admin">Accueil</li></a>
            <a class="a_cate_admin" href="index.php?admin=plat"><li class="li_admin">Plats</li></a>
            <a class="a_cate_admin" href="index.php?admin=categorie"><li class="li_admin">Catégories</li></a>
            <a class="a_cate_admin" href="index.php?admin=utilisateur"><li class="li_admin">Utilisateurs</li></a>
            <a class="a_cate_admin select" href="index.php?admin=commande"><li class="li_admin">Commandes</li></a>
            <a class="a_cate_admin" href="index.php?admin=stats"><li class="li_admin">Statistiques</li></a>
        </ul>
    </div>

    <div id="page_stats">
    <h2>Commande en préparation</h2>
        <div class="cmd">
            <?php foreach($cmdPreparation as $cmd): ?>
                <table class="table_cmd">
                    <thead>
                        <tr>
                            <th class="num_cmd">Commande n°<?= $cmd["id"] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cmd_info">Information Commande</td>
                            <td><?= $cmd['libelle'] ?></td>
                            <td><?= $cmd['quantite'] ?></td>
                            <td><?= $cmd['total'] ?>€</td>
                            <td><?= $cmd['date_commande'] ?></td>
                            <td class="cmd_info">Information Client</td>
                            <td><?= $cmd['nom_client'] ?></td>
                            <td><?= $cmd['telephone_client'] ?></td>
                            <td><?= $cmd['email_client'] ?></td>
                            <td><?= $cmd['adresse_client'] ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>

        <h2>Commande en livraison</h2>
        <div class="cmd">
            <?php foreach($cmdLivraison as $cmd): ?>
                <table class="table_cmd">
                    <thead>
                        <tr>
                            <th class="num_cmd">Commande n°<?= $cmd["id"] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cmd_info">Information Commande</td>
                            <td><?= $cmd['libelle'] ?></td>
                            <td><?= $cmd['quantite'] ?></td>
                            <td><?= $cmd['total'] ?>€</td>
                            <td><?= $cmd['date_commande'] ?></td>
                            <td class="cmd_info">Information Client</td>
                            <td><?= $cmd['nom_client'] ?></td>
                            <td><?= $cmd['telephone_client'] ?></td>
                            <td><?= $cmd['email_client'] ?></td>
                            <td><?= $cmd['adresse_client'] ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>

        <h2>Commande livrée</h2>
        <div class="cmd">
            <?php foreach($cmdLivree as $cmd): ?>
                <table class="table_cmd">
                    <thead>
                        <tr>
                            <th class="num_cmd">Commande n°<?= $cmd["id"] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cmd_info">Information Commande</td>
                            <td><?= $cmd['libelle'] ?></td>
                            <td><?= $cmd['quantite'] ?></td>
                            <td><?= $cmd['total'] ?>€</td>
                            <td><?= $cmd['date_commande'] ?></td>
                            <td class="cmd_info">Information Client</td>
                            <td><?= $cmd['nom_client'] ?></td>
                            <td><?= $cmd['telephone_client'] ?></td>
                            <td><?= $cmd['email_client'] ?></td>
                            <td><?= $cmd['adresse_client'] ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>

        <h2>Commande annulée</h2>
        <div class="cmd">
            <?php foreach($cmdAnnulee as $cmd): ?>
                <table class="table_cmd">
                    <thead>
                        <tr>
                            <th class="num_cmd">Commande n°<?= $cmd["id"] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cmd_info">Information Commande</td>
                            <td><?= $cmd['libelle'] ?></td>
                            <td><?= $cmd['quantite'] ?></td>
                            <td><?= $cmd['total'] ?>€</td>
                            <td><?= $cmd['date_commande'] ?></td>
                            <td class="cmd_info">Information Client</td>
                            <td><?= $cmd['nom_client'] ?></td>
                            <td><?= $cmd['telephone_client'] ?></td>
                            <td><?= $cmd['email_client'] ?></td>
                            <td><?= $cmd['adresse_client'] ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>