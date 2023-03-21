<?php 
    include("header.php");
?>

<?php
    if(isset($_GET['page']) && $_GET['page']=='disc')
    {
        include("disc/disc_index.php");
    } else if(isset($_GET['page']) && $_GET['page']=='disc_detail')
    {
        include("disc/disc_detail.php");
    } else if(isset($_GET['page']) && $_GET['page']=='disc_new')
    {
        include("disc/disc_new.php");
    } else if(isset($_GET['page']) && $_GET['page']=='disc_form')
    {
        include("disc/disc_form.php");
    } else if(isset($_GET['page']) && $_GET['page']=='disc_delete')
    {
        include("index.php?page=disc");
    }
?>

<?php 
    include("footer.php");
?>