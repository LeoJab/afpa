<?php
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

<body class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h1>Liste des disques (<?= count($tableau) ?>)</h1>
        <a class="btn btn-primary align-self-center detail" href="/disc/disc_new.php">Ajouter</a>
    </div>

    <div class="row">
        <?php foreach ($tableau as $disc): ?>
            <table class="col-6 d-flex mb-3 vinyle">
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
                        <td class=""><a class="btn btn-primary detail" href="index.php?page=/disc/disc_detail.php?id=<?= $disc->disc_id ?>">Détail</a></td>
                    </tr>
                </tbody>
            </table>
        <?php endforeach; ?>
    </div>