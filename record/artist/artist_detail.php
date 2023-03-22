<?php
    require "db.php";
    $db = connexionBase();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc natural join artist WHERE artist_id=?");
    $requete->execute(array($id));
    $myDisc = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    $requete->execute(array($id));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

    <body>
        <div class="background_artist_detail">
            <h2> <?php echo $myArtist->artist_name ?> </h2>
            <p>Site Internet : <a href="<?= $myArtist->artist_url ?>"><?php echo $myArtist->artist_url ?></a></p>

            <div class="mt-2">
                <a class="btn bouton" href="artist_form.php?id=<?= $myArtist->artist_id ?>">Modifier</a>
                <a class="btn bouton" href="script_artist_delete.php?id=<?= $myArtist->artist_id ?>">Supprimer</a>
            </div>
        </div>

        <div class="background_artist_detail mt-2">
            <h4>Liste de vinyle de l'artiste:</h4>
            <div class="row">
                <?php foreach($myDisc as $disc_artist): ?>
                    <table class="d-flex col vinyle">
                        <thead>
                            <td><img class="img-responsive jaquette_index" src="jaquettes/<?= $disc_artist->disc_picture ?>"></td>
                        </thead>
                        <tbody class="mx-3">
                            <tr class="row">
                                <td><p class="m-0 fw-bold fs-5"><?= $disc_artist->disc_title ?></p></td>
                                <td class="mt-4"><a class="btn bouton" href="index.php?page=disc_detail&id=<?= $disc_artist->disc_id ?>">Détail</a></td>
                            </tr>
                        </tbody>
                    </table>
                <?php endforeach; ?>
            </div>
            <a class="btn bouton mt-2" href="index.php?page=artist">Revenir à la liste des artistes</a>
        </div>