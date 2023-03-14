<?php
var_dump($_POST);
    // Récupération du title :
    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    }
    // Récupération du artist :
    if (isset($_POST['artist_id']) && $_POST['artist_id'] != "") {
        $artist = $_POST['artist_id'];
    }
    else {
        $artist = Null;
    }
    // Récupération du year :
    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else {
        $year = Null;
    }
    // Récupération du genre :
    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else {
        $genre = Null;
    }
    // Récupération du label :
    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else {
        $label = Null;
    }
    // Récupération du price :
    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else {
        $price = Null;
    }
    var_dump($_FILES);
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
                move_uploaded_file($_FILES["disc_picture"]["tmp_name"], "jaquettes/".$_FILES["disc_picture"]["name"]); 
            }   else {
                // Le type n'est pas autorisé, donc ERREUR
                echo "Type de fichier non autorisé";    
                exit;
        }  
    }


    if ($title == Null || $artist == Null || $year == Null || $genre == null || $label == Null || $price == Null) {
        header("Location: disc_new.php");
        exit;
    }

    require "db.php"; 
    $db = connexionBase();


    try {
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :year, :disc_picture, :label, :genre, :price, :artist_id);");

        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":disc_picture", $picture, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_STR);
        $requete->bindValue(":artist_id", $artist, PDO::PARAM_INT);

        $requete->execute();

        $requete->closeCursor();
    }

    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_ajout.php)");
    }

    header("Location: index.php");

    exit;
?>