<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/ASSET/css/style.css" rel="stylesheet">
    <title>The District</title>
</head>

<header id="background_header">

<img class="image_header" src="/ASSET/img/images_the_district/fosyyyy.jpg" alt="image_plat">
<h1 class="titre_header">The District</h1>
<form id="bouton_barre_recherche">
    <button id="icon_recherche" type="submit"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #000000;"></i></button>
    <input id="barre_recherche" name="recherche" type="search" placeholder="Rechercher.." aria-label="Search" autocomplete="off">
</form>
<div class="rs">
    <a href="#"><button><i class="fa-brands fa-facebook fa-2xl" style="color: #212226;"></i></button></a>
    <a href="#"><button><i class="fa-brands fa-twitter fa-2xl" style="color: #212226;"></i></button></a>
    <a href="#"><button><i class="fa-brands fa-tiktok fa-2xl" style="color: #212226;"></i></button></a>
    <a href="#"><button><i class="fa-brands fa-instagram fa-2xl" style="color: #212226;"></i></button></a>
</div>

    <div id="header">
        <img class="logo" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="logo">

        <div id="menu_nav">
            <ul id="ul_header">
                <li class="bouton_header"> <a class="a_header active" href="index.php?page=acceuil">ACCUEIL</a> </li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=categorie">CATÉGORIES</a></li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=plat">PLATS</a></li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=contact">CONTACT</a></li>
            </ul>
        </div>

        <?php if($_SESSION == NULL){ ?>
            <div id="login_register">
                    <a class="log a_header_log connexion" href="index.php?page=connexion">CONNEXION</a>
                    <a class="log a_header_log inscription" href="index.php?page=inscription">INSCRIPTION</a>
            </div>
        <?php } else{?>
            <div id="log_connecte">
                <button class="icon_user"><i class="fa-solid fa-user fa-xl" style="color: #000000;"></i></button>
            </div>
        <?php } ?>
    </div>

    <div>
        <div class="none menu_nav_uti">
            <a class="a_header compte" href="index.php?page=mon_compte">Mon compte</a>
            <?php if($_SESSION["email"] === "admin@admin.fr"){ ?>
                <a class="a_header compte" href="index.php?page=admin">Administrateur</a>
            <?php } ?>
            <a class="a_header deconnexion" href="index.php?page=deconnexion">Deconnexion</a>
        </div>
    </div>
</header>

<script src="/ASSET/js/main.js"></script>

<body>