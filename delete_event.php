<?php 


    include 'db.php';

    $id = $_GET['id'];

    $sql = "DELETE  FROM add_event_tbl WHERE add_event_ID = '$id'";

    $execute = mysqli_query($db , $sql);

    if($execute){
        
         //for successfull insert the data
         echo '<script language="javascript">
         alert("Deleted Event Successfully!");
        window.location = "admin_view_event.php"; 
        </script>';

    } else{

        echo '<script language="javascript">
        alert("Deleted Event Unsuccessfully!");
       window.location = "admin_view_event.php"; 
       </script>';

    }

    $url = 'banner.jpg';



?>
<style>
    body{
        background-image:     linear-gradient(
  to right, 
  white,white
  

  
);

animation:slidebg 2s linear infinite;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>registration</title>
</head>
<body>
    <h1>deleted</h1>
</body>
</head>
</html>