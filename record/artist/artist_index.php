﻿<?php
require "db.php";
$db = ConnexionBase();
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body class="container-fluid">
    <div class="background_artist_index">
        <div class="mb-3 titre_artist">
            <h1>Liste des Artistes:</h1>
            <?php if($_SESSION == NULL){ ?>
                    
            <?php } else{ ?>
                <a class="btn align-self-center bouton mb-3" href="index.php?page=artist_new">Ajouter</a>
            <?php } ?>
            
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