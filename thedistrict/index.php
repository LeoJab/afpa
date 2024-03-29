<?php
include("header.php");
?>

<?php
if(isset($_GET['page']) && $_GET['page']=='acceuil') {
    include("CONTENT/thedistrict/acceuil.php");
} else if(isset($_GET["page"]) && $_GET["page"]=='categorie') {
    include("CONTENT/thedistrict/categorie.php");
} else if(isset($_GET['page']) && $_GET['page']=='plat') {
    include("CONTENT/thedistrict/plat.php");
} else if(isset($_GET['page']) && $_GET['page']=='commander') {
    include("CONTENT/thedistrict/commander.php");
} else if(isset($_GET['page']) && $_GET['page']=='contact') {
    include("CONTENT/thedistrict/contact.php");
} else if(isset($_GET['page']) && $_GET['page']=='connexion') {
    include("CONTENT/thedistrict/connexion.php");
} else if(isset($_GET['page']) && $_GET['page']=='inscription') {
    include("CONTENT/thedistrict/inscription.php");
} else if(isset($_GET['page']) && $_GET['page']=='compte') {
    include("CONTENT/thedistrict/mon_compte.php");
} else if(isset($_GET['page']) && $_GET['page']=='admin') {
    include("CONTENT/admin/accueil.php");
} else if(isset($_GET['page']) && $_GET['page']=='deconnexion') {
    include("CONTENT/script/script_deconnexion.php");
} else if(isset($_GET['page']) && $_GET['page']=='mentions_legales') {
    include("CONTENT/thedistrict/mentions_legales.php");
} else if(isset($_GET['page']) && $_GET['page']=='politique') {
    include("CONTENT/thedistrict/politique_confidentialite.php");
} else if(isset($_GET['page']) && $_GET['page']=='cgv') {
    include("CONTENT/thedistrict/cgv.php");
} else

// ADMIN
if(isset($_GET['admin']) && $_GET['admin']=='stats') {
    include("CONTENT/admin/stats.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='utilisateur') {
    include("CONTENT/admin/utilisateurs.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='categorie') {
    include("CONTENT/admin/categorie.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='plat') {
    include("CONTENT/admin/plat.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='accueil') {
    include("CONTENT/admin/accueil.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='commande') {
    include("CONTENT/admin/commande.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='add_categorie') {
    include("CONTENT/admin/add_categorie.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='add_plat') {
    include("CONTENT/admin/add_plat.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='modif_categorie') {
    include("CONTENT/admin/modif_categorie.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='modif_plat') {
    include("CONTENT/admin/modif_plat.php");
} else if(isset($_GET['admin']) && $_GET['admin']=='modif_uti') {
    include("CONTENT/admin/modif_uti.php");
} else

// ERREURS
if(isset($_GET['page']) && $_GET['page']=='erreur_champ') {
    include("CONTENT/erreur/erreur_champ.php");
} else if(isset($_GET['page']) && $_GET['page']=='erreur_email') {
    include("CONTENT/erreur/erreur_email.php");
} else if(isset($_GET['page']) && $_GET['page']=='erreur_mdp') {
    include("CONTENT/erreur/erreur_mdp.php");
} else if(isset($_GET['page']) && $_GET['page']=='erreur_connexion') {
    include("CONTENT/erreur/erreur_connexion.php");
} else

// PLATS
if(isset($_GET['page']) && $_GET['page'] == 'Burger') {
    include('CONTENT/plat/Burger.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Pasta') {
    include('CONTENT/plat/Pasta.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Pizza') {
    include('CONTENT/plat/Pizza.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Salade') {
    include('CONTENT/plat/Salade.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Sandwich') {
    include('CONTENT/plat/Sandwich.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Veggie') {
    include('CONTENT/plat/Veggie.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Wraps') {
    include('CONTENT/plat/Wraps.php');
} else 

//RECHERCHE PLAT
if(isset($_GET['recherche']) && $_GET['recherche'] == 'Burger' || $_GET['recherche'] == 'burger') {
    include('CONTENT/plat/Burger.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Pasta' || $_GET['recherche'] == 'pasta') {
    include('CONTENT/plat/Pasta.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Pizza' || $_GET['recherche'] == 'pizza') {
    include('CONTENT/plat/Pizza.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Salade' || $_GET['recherche'] == 'salade') {
    include('CONTENT/plat/Salade.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Sandwich' || $_GET['recherche'] == 'sandwich') {
    include('CONTENT/plat/Sandwich.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Veggie' || $_GET['recherche'] == 'veggie') {
    include('CONTENT/plat/Veggie.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Wraps' || $_GET['recherche'] == 'wraps') {
    include('CONTENT/plat/Wraps.php');
} else {
    include("CONTENT/thedistrict/acceuil.php");
}
?>

<?php
include("footer.php");
?>