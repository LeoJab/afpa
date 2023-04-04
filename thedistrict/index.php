<?php
include("header.php");
?>

<?php
if(isset($_GET['page']) && $_GET['page']=='acceuil') {
    include("acceuil.php");
}
?>

<?php
include("footer.php");
?>