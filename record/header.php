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
                <li class="nav_item nav_item_header"> <a href="index.php?page=acceuil">Acceuil</a> </li>
                <li class="nav_item nav_item_header"> <a href="index.php?page=disc">Vinyle</a> </li>
                <li class="nav_item nav_item_header"> <a href="index.php?page=artist">Artist</a> </li>
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