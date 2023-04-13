<div id="fond_banniere_recherche">
    <div id="banniere_recherche_solo">
        <img id="logo_acceuil" src="/ASSET/img/images_the_district/the_district_brand/logo_transparent.png" alt="banniere">
        
    </div>
</div>

<div id="div_form_inscr">
    <h1 id="titre_inscription">Inscription</h1>

    <div>
        <form id="form_inscr" action="../CONTENT/script/script_inscription.php" methode="post" enctype='multipart/form-data'>
            <div id="nom_prenom">
                <input class="input_demi_inscr" name="nom" type="text" placeholder="Nom">
                <input class="input_demi_inscr" name="prenom" type="text" placeholder="Prenom">
            </div>
            <input class="input_full_inscr" name="email" type="email" placeholder="Email">
            <input class="input_full_inscr" name="numero" type="text" placeholder="Numéro de téléphone">
            <div id="mdp_cmdp">
                <input class="input_demi_inscr" name="mdp" type="password" placeholder="Mot de passe">
                <input class="input_demi_inscr" name="mdpc" type="password" placeholder="Confirmation de votre mot de passe">
            </div>
            <input id="btn_inscr" name="inscription" type="submit" value="S'inscrire">
        </form>
    </div>
</div>