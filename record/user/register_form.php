<body>
    
    <form class="login col-2" action="/user/register_script.php" method="post" enctype='multipart/form-data'>
        <label class="form-label" for="nom">Nom</label>
        <input class="form-control" name="nom" type="text" autocomplete="off" placeholder="Nom">

        <label class="form-label" for="prenom">Prénom</label>
        <input class="form-control" name="prenom" type="text" autocomplete="off" placeholder="Prenom">

        <label class="form-label" for="pseudo">Pseudo</label>
        <input class="form-control" name="pseudo" type="text" autocomplete="off" placeholder="Pseudo">

        <label class="form-label" for="email">Adresse E-mail</label>
        <input class="form-control" name="email" type="email" autocomplete="off" placeholder="nom.prenom@email.fr">

        <label class="form-label" for="mdp">Mot de passe</label>
        <input class="form-control" name='mdp' type="password" autocomplete="off">

        <label class="form-label" for="mdpc">Confirmation mot de passe</label>
        <input class="form-control" name='mdpc' type="password" autocomplete="off">

        <input class="btn bouton mt-3" name="inscription" type="submit" value="Inscription">
    </form>