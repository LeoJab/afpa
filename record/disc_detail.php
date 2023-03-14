<?php

    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM disc natural join artist WHERE disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $DiscDetails = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>PDO - Détail</title>
    </head>
    
    <body class="container-fluid">
        <h2>Details</h2>

        <div class="row justify-content-start">
            <div class="col-5">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_title ?>" disabled="disabled">

                <label class="form-label" for="artist_id">Year</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_year ?>" disabled="disabled">

                <label class="form-label" for="year">Label</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_label ?>" disabled="disabled">
            </div>
            <div class="col-5">
                <label class="form-label" for="genre">Artist</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->artist_name ?>" disabled="disabled">

                <label class="form-label" for="label">Genre</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_genre ?>" disabled="disabled">

                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_price ?>" disabled="disabled">
            </div>
        </div>
        <img class="img-responsive jaquette_details mt-3" src="/jaquettes/<?= $DiscDetails->disc_picture ?>">

        <div class="align-content-end mt-2">
            <a class="btn btn-primary" href="disc_form.php?id=<?= $DiscDetails->disc_id ?>">Modifier</a> 
            <a class="btn btn-primary" href="">Supprimer</a>
            <a class="btn btn-primary" href="index.php">Retour</a>
        </div>
    </body>

</html>