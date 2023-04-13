<?php
include("header.php");
?>

<?php
if(isset($_GET['page']) && $_GET['page']=='acceuil') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/acceuil.php");
} else if(isset($_GET["page"]) && $_GET["page"]=='categorie') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/categorie.php");
} else if(isset($_GET['page']) && $_GET['page']=='plat') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include("CONTENT/thedistrict/plat.php");
} else if(isset($_GET['page']) && $_GET['page']=='contact') {
    include("CONTENT/thedistrict/contact.php");
} else if(isset($_GET['page']) && $_GET['page']=='connexion') {
    include("CONTENT/thedistrict/connexion.php");
} else if(isset($_GET['page']) && $_GET['page']=='inscription') {
    include("CONTENT/thedistrict/inscription.php");
} else

// ERREURS
if(isset($_GET['page']) && $_GET['page']=='erreur_champ') {
    include("CONTENT/erreur/erreur_champ.php");
} else if(isset($_GET['page']) && $_GET['page']=='erreur_email') {
    include("CONTENT/erreur/erreur_email.php");
} else if(isset($_GET['page']) && $_GET['page']=='erreur_mdp') {
    include("CONTENT/erreur/erreur_mdp.php");
} else

// PLATS
if(isset($_GET['page']) && $_GET['page'] == 'Burger') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Burger.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Pasta') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Pasta.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Pizza') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Pizza.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Salade') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Salade.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Sandwich') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Sandwich.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Veggie') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Veggie.php');
} else if(isset($_GET['page']) && $_GET['page'] == 'Wraps') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Wraps.php');
} else 

//RECHERCHE PLAT
if(isset($_GET['recherche']) && $_GET['recherche'] == 'Burger' || $_GET['recherche'] == 'burger') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Burger.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Pasta' || $_GET['recherche'] == 'pasta') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Pasta.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Pizza' || $_GET['recherche'] == 'pizza') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Pizza.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Salade' || $_GET['recherche'] == 'salade') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Salade.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Sandwich' || $_GET['recherche'] == 'sandwich') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Sandwich.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Veggie' || $_GET['recherche'] == 'veggie') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Veggie.php');
} else if(isset($_GET['recherche']) && $_GET['recherche'] == 'Wraps' || $_GET['recherche'] == 'wraps') {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/interface_plat.php");
    include('CONTENT/plat/Wraps.php');
} else {
    include("CONTENT/thedistrict/banniere.php");
    include("CONTENT/thedistrict/plat_introuvable.php");
}
?>

<?php
include("footer.php");
?>