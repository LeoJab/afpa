<?php
    include("header.php");
?>


<?php
    if(isset($_GET['page']) && $_GET['page']=='acceuil')
    {
        include("acceuil.php");
    }
    else if(isset($_GET['page']) && $_GET['page']=='tableau')
    {
        include("tableau.php");
    } 
    else if(isset($_GET['page']) && $_GET['page']=='contact')
    {
        include("contact.php");
    }
?>


<?php
    include("footer.php");
?>