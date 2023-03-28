<?php

    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionBase();

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
 
    <body class="container-fluid ">
        <div class="background_disc_detail">
            <h2>Details</h2>

            <div class="row justify-content-start">
                <div class="col-5">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" type="text" name="title" value="<?php echo $DiscDetails->disc_title ?>" disabled="disabled">

                    <label class="form-label" for="year">Year</label>
                    <input class="form-control" type="text" name="year" value="<?php echo $DiscDetails->disc_year ?>" disabled="disabled">

                    <label class="form-label" for="year">Label</label>
                    <input class="form-control" type="text" name="label" value="<?php echo $DiscDetails->disc_label ?>" disabled="disabled">
                </div>
                <div class="col-5">
                    <label class="form-label" for="genre">Artist</label>
                    <input class="form-control" type="text" name="artist" value="<?php echo $DiscDetails->artist_name ?>" disabled="disabled">

                    <label class="form-label" for="label">Genre</label>
                    <input class="form-control" type="text" name="genre" value="<?php echo $DiscDetails->disc_genre ?>" disabled="disabled">

                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" type="text" name="price" value="<?php echo $DiscDetails->disc_price ?>" disabled="disabled">
                </div>
            </div>
            
            <img class="img-responsive jaquette_details mt-3" src="../jaquettes/<?= $DiscDetails->disc_picture ?>">

            <div class="mt-2">
                <?php if($_SESSION == NULL){ ?>
                    <a class="btn bouton" href="index.php?page=disc">Retour</a>
                <?php } else{ ?>
                    <a class="btn bouton" href="index.php?page=disc_form&id=<?= $DiscDetails->disc_id ?>">Modifier</a> 
                    <a class="btn bouton" href="/disc/script_disc_delete.php?id=<?= $DiscDetails->disc_id ?>" onclick="return confirm('Êtes-vous sûr de supprimer <?php echo $DiscDetails->disc_title ?> de <?php echo $DiscDetails->artist_name ?> ? ')">Supprimer</a>
                    <a class="btn bouton" href="index.php?page=disc">Retour</a>
                <?php } ?>
            </div>

            <div>
                <a class="btn bouton mt-2" href="index.php?page=artist_detail&id=<?= $DiscDetails->artist_id ?>">Voir les autres vinyles de l'artiste</a>
            </div>
        </div>