<?php
require "db.php";
$db = ConnexionBase();
$requete = $db->query("SELECT * FROM artist order by artist_name");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body class="container-fluid">
    <div class="background_artist_index">
        <div class="mb-3 titre_artist">
            <h1>Liste des Artistes:</h1>
            <a class="btn align-self-center bouton mb-3" href="index.php?page=artist_new">Ajouter</a>
        </div>

        <table>
            <?php foreach ($tableau as $artist): ?>
                <tr>
                    <td class="text_artist"><?= $artist->artist_name ?></td>
                    <td class="btn bouton text_artist"><a href="index.php?page=artist_detail&id=<?= $artist->artist_id ?>">Détail</a></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>