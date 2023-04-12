<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/ASSET/css/style.css" rel="stylesheet">
    <script src="/ASSET/js/main.js"></script>
    <title>The District</title>
</head>

<header id="background_header">
    <div id="header">
        <h1 id="titre_header">The District</h1>

        <div id="menu_nav">
            <ul id="ul_header">
                <li class="bouton_header"> <a class="a_header" href="index.php?page=acceuil">Accueil</a> </li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=categorie">Catégories</a></li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=plat">Plats</a></li>
                <li class="bouton_header"> <a class="a_header" href="index.php?page=contact">Contact</a></li>
            </ul>
        </div>

        <div id="login_register">
                <a class="log a_header_log" href="#">Connexion</a>
                <a class="log a_header_log" href="#">Inscription</a>
        </div>

        <div id="icon_nav_responsive">
            <button id="btn_icon_nav_responsive" onclick="header_responsive()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/></svg></button>
        </div>

        <div id="icon_nav_reponsive_tab_ver">
            <button id="btn_icon_nav_responsive_tab_ver" onclick="header_responsive_tab_ver()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg></button>
        </div>
    </div>
</header>

<nav>
    <div id="nav_responsive_header_id" class="nav_responsive_header_none">
        <ul id="responsive_ul_header">
            <li class="responsive_bouton_header"> <a class="responsive_a_header" href="index.php?page=acceuil"><svg class="icon_nav_responsive" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/></svg>Accueil</a> </li>
            <li class="responsive_bouton_header"> <a class="responsive_a_header" href="index.php?page=categorie"><svg class="icon_nav_responsive" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16"><path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/></svg>Catégories</a></li>
            <li class="responsive_bouton_header"> <a class="responsive_a_header" href="index.php?page=plat"><svg class="icon_nav_responsive" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pass" viewBox="0 0 16 16"><path d="M5.5 5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z"/><path d="M8 2a2 2 0 0 0 2-2h2.5A1.5 1.5 0 0 1 14 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-13A1.5 1.5 0 0 1 3.5 0H6a2 2 0 0 0 2 2Zm0 1a3.001 3.001 0 0 1-2.83-2H3.5a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-1.67A3.001 3.001 0 0 1 8 3Z"/></svg>Plats</a></li>
            <li class="responsive_bouton_header"> <a class="responsive_a_header" href="index.php?page=contact"><svg class="icon_nav_responsive" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16"><path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/><path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/></svg>Contact</a></li>
        </ul>

        <div id="responsive_login_register">
            <a class="responsive_log" href="#">Connexion</a>
            <a class="responsive_log" href="#">Inscription</a>
        </div>
    </div>

    <div id="nav_responsive_tab_ver_header_id" class="nav_responsive_tab_ver_header_none">
        <div id="responsive_login_register_tab_ver">
            <a class="responsive_log" href="#">Connexion</a>
            <a class="responsive_log" href="#">Inscription</a>
        </div>
    </div>
</nav>

<body id="background_body">