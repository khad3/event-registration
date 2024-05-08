<?php 

    session_start();

    session_destroy();

    echo '<script language="javascript">
    alert("Successfully Logout");
    window.location = "landingpage.php"; 
    </script>';


?>