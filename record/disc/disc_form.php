<?php
    require "db.php";
    $db = ConnexionBase();
    $requete = $db->prepare("SELECT * FROM artist natural join disc WHERE disc_id=?");
    $requete->execute(array($_GET["id"]));
    $DiscModification = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();

    $requete1 = $db->prepare("SELECT * from artist");
    $requete1->execute();
    $myartist = $requete1->fetchAll(PDO::FETCH_OBJ);
    $requete1->closeCursor();
?>

    <body class="container-fluid">
        <div class="background_form">
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
                    <input class="btn bouton mx-2" type="submit" value="Modifier">
                    <a class="btn bouton mx-2" href="index.php?page=disc_detail&id=<?= $DiscModification->disc_id ?>">Retour</a>
                </div>
            </form>
        </div>