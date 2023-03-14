<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="/ASSET/JS/javascript.js"></script>
    <title>Acceuil</title>

</head>

<body>
    <div class="container-fluid m-0 p-0">
        <header class="row">
            <img id="logo" class="w-25 col-6 m-1" src="/image/jarditou_html_zip/images/jarditou_logo.jpg" title="logo_jarditou" alt="logo_jarditou">
            <h1 id="titre" class="col-6 text-center align-self-center">Tout le Jardin</h1>
        </header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-body-tertiary shadow">
            <a class="px-3 navbar-brand" href="#">Jarditou.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu_haut" aria-controls="menu_haut" aria-expanded="false" aria-label="Menu Haut">
                <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse justify-content-between" id="menu_haut">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-1 mx-3 mx-md-0"> <a class="nav-link active" href="index.php?page=acceuil">Acceuil</a> </li>
                    <li class="nav-item px-1 mx-3 mx-md-0"> <a class="nav-link" href="index.php?page=tableau">Tableau</a> </li>
                    <li class="nav-item px-1 mx-3 mx-md-0"> <a class="nav-link" href="index.php?page=contact">Contact</a> </li>
                </ul>
                <form class="d-flex px-5">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>


        <section>
            <img id="pub" class="img-fluid w-100" src="/image/jarditou_html_zip/images/promotion.jpg" title="pub" alt="pub">
        </section>
