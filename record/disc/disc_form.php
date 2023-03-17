<?php
    require "../db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM artist natural join disc WHERE disc_id=?");
    $requete->execute(array($_GET["id"]));
    $DiscModification = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();

    $requete1 = $db->prepare("SELECT * from artist");
    $requete1->execute();
    $myartist = $requete1->fetchAll(PDO::FETCH_OBJ);
    $requete1->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <title>Modification</title>
</head>

    <body class="container-fluid">
        <h2>Modifier un Vinyle</h2>
        <form class="form-group" action ="script_disc_modif.php?id=<?= $DiscModification->disc_id ?>" method="post" enctype='multipart/form-data'>
            
            <div class="col-8">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" value="<?php echo $DiscModification->disc_title ?>">

                <label class="form-label" for="artist_id">Artist</label>
                <select class="form-select" name="artist_id">
                    <?php foreach($myartist as $artist): 
                        if($artist->artist_id == $DiscModification->artist_id){ ?>
                            <option value="<?= $artist->artist_id ?>" selected="selected"><?= $artist->artist_name ?></option>
                        <?php } else{ ?>                        
                        <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                    <?php } endforeach; ?>
                </select>

                <label class="form-label" for="artist_id">Year</label>
                <input class="form-control" type="text" name="year" value="<?php echo $DiscModification->disc_year ?>">

                <label class="form-label" for="label">Genre</label>
                <input class="form-control" type="text" name="genre" value="<?php echo $DiscModification->disc_genre ?>">

                <label class="form-label" for="year">Label</label>
                <input class="form-control" type="text" name="label" value="<?php echo $DiscModification->disc_label ?>">

                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="text" name="price" value="<?php echo $DiscModification->disc_price ?>">

                <label class="form-label" for="disc_picture">Picture</label>
                <input class="form-control" type="file" name="disc_picture">
            </div>
            
            <img class="img-responsive jaquette_index mt-3" src="../jaquettes/<?= $DiscModification->disc_picture ?>">

            <div class="align-content-end mt-2">
                <input class="btn btn-primary" type="submit" value="Modifier">
                <a class="btn btn-primary" href="disc_detail.php?id=<?= $DiscModification->disc_id ?>">Retour</a>
            </div>
        </form>
    </body>
</html>