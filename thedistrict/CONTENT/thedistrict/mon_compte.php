<?php
    require "db.php";
    $db = connexionBase();
    $email = $_SESSION['email'];
    $requete = $db->prepare('SELECT nom, prenom, email, numero from utilisateur where email="'. $email .'";');
    $requete->execute();
    $info_utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    $requete = $db->prepare('SELECT plat.image, plat.libelle, commande.quantite, commande.total, date_format(commande.date_commande, "%d %b %Y") AS "date_commande" from commande join plat on commande.id_plat = plat.id where commande.email_client ="'. $email .'";');
    $requete->execute();
    $vos_commande = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<div id="information">
    <h1 id="titre_compte">Votre Compte</h1>
    <div id="information_compte">
        <?php foreach($info_utilisateur as $utilisateur): ?>
            <label class="label_compte" for="nom">Votre nom</label>
            <input class="input_compte" type="text" name="nom" value="<?= $utilisateur->nom ?>" disabled="disabled">
            <label class="label_compte" for="prenom">Votre prenom</label>
            <input class="input_compte" type="text" name="prenom" value="<?= $utilisateur->prenom ?>" disabled="disabled">
            <label class="label_compte" for="email">Votre e-mail</label>
            <input class="input_compte" type="text" name="email" value="<?= $utilisateur->email ?>" disabled="disabled">
            <label class="label_compte" for="numero">Votre Numéro</label>
            <input class="input_compte" type="text" name="numero" value="<?= $utilisateur->numero ?>" disabled="disabled">
        <?php endforeach; ?>
    </div>
    <a id="btn_modif_compte" href="#">Modifier vos informations</a>
</div>

<h1 id="titre_vos_commandes">Vos Commandes</h1>

<div id="vos_commandes">
    <?php foreach($vos_commande as $commande): ?>
        <table class="table_vos_commandes">
            <thead class="td_img_vos_commandes">
                <tr class="td_img_vos_commandes">
                    <td class="td_img_vos_commandes"><img class="img_vos_commandes" src="/ASSET/img/images_the_district/food/<?= $commande->image ?>" alt="plat"></td>
                </tr>
            </thead>
            <tbody class="tbody_vos_commandes">
                <tr class="tr_vos_commandes">
                    <td class="td_vos_commandes vos_commandes_libelle"><?= $commande->libelle ?></td>
                    <td class="td_vos_commandes">Le <?= $commande->date_commande ?></td>
                    <td class="td_vos_commandes">Quantité: <?= $commande->quantite ?></td>
                    <td class="td_vos_commandes">Prix total: <?= $commande->total ?>€</td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>