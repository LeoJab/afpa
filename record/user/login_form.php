<?php

?>

<body>
    
    <form class="login col-2" action="/user/login_script.php" method="post" enctype='multipart/form-data'>
        <label class="form-label" for="pseudo">Pseudo</label>
        <input class="form-control" name="pseudo" type="text" autocomplete="off">

        <label class="form-label" for="mdp">Mot de passe</label>
        <input class="form-control" name='mdp' type="password" autocomplete="off">

        <input class="btn bouton mt-3" name="connexion" type="submit" value="Connexion">
    </form>