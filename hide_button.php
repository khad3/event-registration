<?php 
include 'db.php';

$id = $_GET['id'];
$select = "SELECT * FROM add_event_tbl WHERE add_event_ID = '$id'";
$execte = mysqli_query($db , $select);

$success = true; // Assume success initially

while($rows = mysqli_fetch_array($execte)) {

    $event_id = $rows['add_event_ID'];
    $event_name = $rows['event_name'];
    $event_schedule = $rows['event_schedule'];
    $course = $rows['course'];
    $picture = $rows['picture_upload'];
    $event_description = $rows['event_description'];
    $status = $rows['status'];
    $fee = $rows['fee'];
    $event_time = $rows['event_time'];
    $event_duration = $rows['event_duration'];
    $registration_id = $rows['registration_ID'];

    $insert_archive_tbl = "INSERT INTO event_archive_tbl VALUES('$event_id' , '$event_name' , '$event_schedule' ,  '$course' , '$picture' , '$event_description' , '$status' , '$fee' , '$event_time' , ' $event_duration' , '$registration_id')";
    $insert_execute = mysqli_query($db , $insert_archive_tbl);

    $delete_archive_tbl = "DELETE FROM add_event_tbl WHERE add_event_ID = '$event_id'";
    $delete_execute = mysqli_query($db , $delete_archive_tbl);

    // Check if any of the queries failed
    if (!$insert_execute || !$delete_execute) {
        $success = false; // Set success to false if any query fails
        break; // Exit the loop, no need to process further
    }
}

if($success) {
    echo '<script language = "javascript">
                alert("Archive Successful!");
                window.location="user_view_event.php";
            </script>';
} else {
    echo '<script language = "javascript">
    alert("Archive Unsuccessful!");
    window.location="user_view_event.php";
</script>';
}
?>
