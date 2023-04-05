<?php
include("header.php");
?>

<?php
if(isset($_GET['page']) && $_GET['page']=='acceuil') {
    include("acceuil.php");
} else if(isset($_GET["page"]) && $_GET["page"]=='categorie') {
    include("categorie.php");
} else if(isset($_GET['page']) && $_GET['page']=='plat') {
    include("plat.php");
}


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
} 
?>

<?php
include("footer.php");
?>