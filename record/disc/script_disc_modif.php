<?php
    $id = (isset($_GET['id']) && $_GET['id'] != "") ? $_GET['id'] : Null;
    $title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
    $artist_id = (isset($_POST['artist_id']) && $_POST['artist_id'] != "") ? $_POST['artist_id'] : Null;
    $year = (isset($_POST['year']) && $_POST['year'] != "") ? $_POST['year'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $price = (isset($_POST['price']) && $_POST['price'] != "") ? $_POST['price'] : Null;
    $picture = (isset($_POST['disc_picture']) && $_POST['disc_picture'] != "") ? $_POST['disc_picture'] : null;
    
    if ($_FILES["disc_picture"]["error"] > 0) {
        echo "Erreur !";
    }   else {
            // On met les types autorisés dans un tableau (ici pour une image)
            $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff", "image/jpg");

            // On extrait le type du fichier via l'extension FILE_INFO 
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = finfo_file($finfo, $_FILES["disc_picture"]["tmp_name"]);
            finfo_close($finfo);

            if (in_array($mimetype, $aMimeTypes)){
                move_uploaded_file($_FILES["disc_picture"]["tmp_name"], "../jaquettes/".$_FILES["disc_picture"]["name"]);
                $picture = $_FILES["disc_picture"]["name"];
            }   else {
                // Le type n'est pas autorisé, donc ERREUR
                echo "Type de fichier non autorisé";    
                exit;
        }  
    }
    
    /*var_dump($id);
    var_dump($title);
    var_dump($artist_id);
    var_dump($year);
    var_dump($genre);
    var_dump($label);
    var_dump($price);*/
    
    if ($id == Null) {
        header("Location: ../index.php");
    }
    elseif ($title == Null || $artist_id == Null || $year == Null || $genre == Null || $label == Null || $price == Null) {
        header("Location: disc_details.php?id=".$id);
        exit;
    }

    require "../db.php"; 
    $db = connexionBase();

    try {
        $requete = $db->prepare("UPDATE disc SET disc_title = :title, artist_id = :artist_id, disc_year = :year, disc_picture = :disc_picture, disc_label = :label, disc_genre= :genre, disc_price = :price WHERE disc_id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":artist_id", $artist_id, PDO::PARAM_INT);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_STR);
        $requete->bindValue(":disc_picture", $picture, PDO::PARAM_STR);
        
        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_modif.php)");
    }

    header("Location:/index.php?page=disc");
    exit;
?>