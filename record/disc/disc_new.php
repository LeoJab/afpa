<?php
include "db.php";

$db = connexionBase();

$requete = $db->query("SELECT * FROM artist group by artist_name");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

$requete->closeCursor();

//var_dump($tableau);
?>

<body>
    <div class="container-fluid background_new">

        <h1>Ajouter un vinyle</h1>

        <form class="col-6 form-group" action ="script_disc_ajout.php" method="post" enctype='multipart/form-data'>

            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Enter title">

            <label class="form-label" for="artist_id">Artist</label>
            <select class="form-select" name="artist_id" id="artist_id">
                <?php foreach($tableau as $artist): ?>
                    <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                <?php endforeach; ?>
            </select>

            <label class="form-label" for="year">Year</label>
            <input class="form-control" type="text" name="year" id="year" placeholder="Enter year">

            <label class="form-label" for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre" placeholder="Enter genre(Rock, Pop, Prog ...)">

            <label class="form-label" for="label">Label</label>
            <input class="form-control" type="text" name="label" id="label" placeholder="Enter label (EMI, Warner, PolyGram, Univers sale ...)">

            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price">

            <label class="form-label" for="disc_picture">Picture</label>
            <input class="form-control" type="file" name="disc_picture">

            <br>

            <input class="btn bouton mx-2" type="submit" value="Ajouter">
            <a class="btn bouton mx-2" href="index.php?page=disc">Retour</a>

        </form>
    </div>
</body>
</html>