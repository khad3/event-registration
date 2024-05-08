<?php 


    include 'db.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM event_archive_tbl WHERE archive_ID = '$id'";

    $execute = mysqli_query($db , $sql);

    if($execute){
        
         //for successfull insert the data
         echo '<script language="javascript">
         alert("Deleted Event Permanently!");
        window.location = "trash_event.php"; 
        </script>';

    } else{

        echo '<script language="javascript">
        alert("Deleted Event Unsuccessfully!");
       window.location = "trash_event.php"; 
       </script>';

    }





?>