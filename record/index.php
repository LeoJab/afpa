﻿<?php
// on importe le contenu du fichier "db.php"
include "db.php";
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();

// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->query("SELECT * FROM disc natural join artist GROUP BY disc_title order by disc_id");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();

//var_dump($tableau);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>PDO - Liste</title>
</head>
<body class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h1>Liste des disques (<?= count($tableau) ?>)</h1>
        <a class="btn btn-primary align-self-center" href="/disc/disc_new.php">Ajouter</a>
    </div>

    <div class="row">
        <?php foreach ($tableau as $disc): ?>
            <table class="col-6 d-flex mb-3">
                <thead>
                    <tr>
                        <td><img class="img-responsive jaquette_index" src="jaquettes/<?= $disc->disc_picture ?>"></td>
                    </tr>
                </thead>
                <tbody class="mx-3">
                    <tr class="row">
                        <td><h6 class="m-0 fw-bold fs-5"><?= $disc->disc_title ?></h6></td>
                        <td><strong><?= $disc->artist_name ?></strong></td>
                        <td><p class="m-0"><strong>Label: </strong><?= $disc->disc_label ?></p></td>
                        <td><p class="m-0"><strong>Year: </strong><?= $disc->disc_year ?></p></td>
                        <td><p class="m-0"><strong>Genre: </strong><?= $disc->disc_genre ?></p></td>
                    </tr>
                    <tr class="d-flex align-self-end mt-auto">
                        <td class=""><a class="btn btn-primary" href="/disc/disc_detail.php?id=<?= $disc->disc_id ?>">Détail</a></td>
                    </tr>
                </tbody>
            </table>
        <?php endforeach; ?>
    </div>

</body>
</html>