<?php 


    include 'db.php';

    $id = $_GET['id'];

    $sql = "DELETE  FROM user_join_event WHERE user_ID = '$id'";

    $execute = mysqli_query($db , $sql);

    if($execute){
        
         //for successfull insert the data
         echo '<script language="javascript">
         alert("Deleted Event Successfully!");
        window.location = "dashboard_admin_attendance.php"; 
        </script>';

    } else{

        echo '<script language="javascript">
        alert("Deleted Event Unsuccessfully!");
       window.location = "dashboard_admin_attendance.php"; 
       </script>';

    }





?>