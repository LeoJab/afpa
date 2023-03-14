<?php
/*echo "Nom: " . $_REQUEST["nom"] . "<br>";
echo "Prenom: " . $_REQUEST["prenom"] . "<br>";
echo "Sexe: " . $_REQUEST["sexe"] . "<br>";
echo "Date de naissance: " . $_REQUEST["ddn"] . "<br>";
echo "Code postal: " . $_REQUEST["cp"] . "<br>";
echo "Adresse: " . $_REQUEST["adresse"] . "<br>";
echo "Ville: " . $_REQUEST["ville"] . "<br>";
echo "Email: " . $_REQUEST["email"] . "<br>";
echo "Choix question: " . $_REQUEST["choix"] . "<br>";
echo "Question: " . $_REQUEST["question"] . "<br>";*/
?>


<?php
    /*$phpFileUploadErrors = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );

    if (sizeof($_FILES["fichier"]["error"]) > 0) {
        $error = (sizeof($_FILES["fichier"]["error"]) > 0) == $phpFileUploadErrors;
        echo $error;
    }*/
    
    var_dump($_FILES);
?>