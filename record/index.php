<?php 
    include("header.php");
?>

<?php
    if(isset($_GET['page']) && $_GET['page']=='disc_index.php')
    {
        include("disc_index.php");
    } else if(isset($_GET['page']) && $_GET['page']=='/disc/disc_detail.php?id=<?= $disc->disc_id ?>')
    {
        include("/disc/disc_detail.php?id=<?= $disc->disc_id ?>");
    }
?>

<?php 
    include("footer.php");
?>