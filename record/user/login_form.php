<?php

?>

<body>
    
    <form class="login col-2 background_login" action="/user/login_script.php" method="post" enctype='multipart/form-data'>
        <label class="form-label" for="email_pseudo">Email ou Pseudo</label>
        <input class="form-control" name="email_pseudo" type="text" autocomplete="off">

        <label class="form-label" for="mdp">Mot de passe</label>
        <input class="form-control" name='mdp' type="password" autocomplete="off">

        <input class="btn bouton mt-3" name="connexion" type="submit" value="Connexion">
        <a class="btn bouton mt-3" href="index.php?page=register">S'inscrire</a>
    </form>