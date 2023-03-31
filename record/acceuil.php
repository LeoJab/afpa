<?php
require "db.php";
$db = ConnexionBase();

$requete1 = $db->query("SELECT * FROM disc natural join artist GROUP BY disc_title limit 6");
$vinyle = $requete1->fetchAll(PDO::FETCH_OBJ);
$requete1->closeCursor();

$requete2 = $db->query("SELECT * FROM artist limit 6");
$artist = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();
?>

<body>
    <div class="body_acceuil">
        <h2 id="titre_acceuil">Acceuil</h2>

        <div class="acceuil_vinyle">
            <?php foreach ($vinyle as $disc): ?>
                <table class="vinyle_acceuil">
                    <thead>
                        <tr>
                            <td><img class="img-responsive jaquette_index" src="jaquettes/<?= $disc->disc_picture ?>"></td>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="tr_vinyle_acceuil">
                            <td><h6 class="m-0 fw-bold fs-5"><?= $disc->disc_title ?></h6></td>
                            <td><strong><?= $disc->artist_name ?></strong></td>
                            <td><p class="m-0"><strong>Label: </strong><?= $disc->disc_label ?></p></td>
                            <td><p class="m-0"><strong>Year: </strong><?= $disc->disc_year ?></p></td>
                            <td><p class="m-0"><strong>Genre: </strong><?= $disc->disc_genre ?></p></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
        <div id="bouton_liste_vinyle">
            <a class="btn bouton bouton_vinyle_acceuil" href="index.php?pahe=disc">Voir la liste de tous les vinyles</a>
        </div>
    </div>

</body>