<?php
$libelle = (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : NULL;
$active = (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : NULL;

if ($_FILES["picture"]["error"] > 0) {
    echo "Erreur !";
}   else {
        // On met les types autorisés dans un tableau (ici pour une image)
        $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff", "image/jpg");

        // On extrait le type du fichier via l'extension FILE_INFO 
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
        finfo_close($finfo);

        if (in_array($mimetype, $aMimeTypes)){
            move_uploaded_file($_FILES["picture"]["tmp_name"], "../../ASSET/img/images_the_district/category/".$_FILES["picture"]["name"]); 
            $picture = $_FILES["picture"]["name"];
        }   else {
            // Le type n'est pas autorisé, donc ERREUR
            echo "Type de fichier non autorisé";    
            exit;
    }  
}

if($libelle == NULL || $active == NULL) {
    header('Location: /index.php?admin=add_categorie');
    exit;
}

require "../../db.php";
$db = connexionBase();

try {
    $requete = $db->prepare("INSERT INTO categorie (libelle, image, active) VALUES (:libelle, :image, :active)");

    $requete->bindValue(":libelle", $libelle, PDO::PARAM_STR);
    $requete->bindValue(":image", $picture, PDO::PARAM_STR);
    $requete->bindValue(":active", $active, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();
} catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_add_cate.php)");
}

header("Location: /index.php?admin=categorie");

exit;