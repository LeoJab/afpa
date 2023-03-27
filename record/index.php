<?php 
    include("header.php");
?>

<?php
    //Disc
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
        include("disc/disc_index.php");
    }

    //Artist
    if(isset($_GET['page']) && $_GET['page']=='artist')
    {
        include("artist/artist_index.php");
    } else if(isset($_GET['page']) && $_GET['page']=='artist_detail')
    {
        include("artist/artist_detail.php");
    } else if(isset($_GET['page']) && $_GET['page']=='artist_new')
    {
        include("artist/artist_new.php");
    } else if(isset($_GET['page']) && $_GET['page']=='artist_form')
    {
        include("artist/artist_form.php");
    } else if(isset($_GET['page']) && $_GET['page']=='artist_delete')
    {
        include("artist/artist_index.php");
    }

    //Login
    if(isset($_GET['page']) && $_GET['page']=='login')
    {
        include("user/login_form.php");
    } else if(isset($_GET['page']) && $_GET['page']=='register')
    {
        include("user/register_form.php");
    }
?>

<?php 
    include("footer.php");
?>