<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>Vinyle.com</title>
    </head>

    <header class="background_header">
        <h1><a id="titre" href="index.php?page=acceuil">Vinyle.com</a> </h1>
        
        <nav>
            <ul>
                <li class="nav_item nav_item_header"> <a class="a_header" href="index.php?page=acceuil"> <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16"> <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/> </svg> Acceuil</a> </li>
                <li class="nav_item nav_item_header"> <a class="a_header" href="index.php?page=disc"> <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="30" height="30" fill="currentColor" class="bi bi-vinyl" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0z"/> <path d="M9 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </svg>Vinyle</a> </li>
                <li class="nav_item nav_item_header"> <a class="a_header" href="index.php?page=artist"> <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="30" height="30" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16"> <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> </svg>Artist</a> </li>
            </ul>
        </nav>

        <?php if($_SESSION == NULL){ ?>
            <div class="login_register">
                <a class="btn bouton" href="index.php?page=login">Connexion</a>
                <a class="btn bouton" href="index.php?page=register">Inscription</a>
            </div>
            <?php } else{ ?>
                <div class="login_register">
                    <p class="btn bouton m-0"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"> <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/> </svg> 
                        <?php echo $_SESSION['pseudo'] ?></p>
                    <a class="btn bouton" href="/user/deconnexion_script.php">Deconnexion</a>
                <?php } ?>
                </div>
    </header>