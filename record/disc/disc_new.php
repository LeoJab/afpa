<?php
include "../db.php";

$db = connexionBase();

$requete = $db->query("SELECT * FROM artist group by artist_name");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

$requete->closeCursor();

//var_dump($tableau);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <title>PDO - Ajout</title>
</head>
<body>
    <div class="container-fluid">

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

            <input class="btn btn-primary" type="submit" value="Ajouter">
            <a class="btn btn-primary" href="../index.php">Retour</a>

        </form>
    </div>
</body>
</html>