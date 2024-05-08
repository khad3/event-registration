<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View more details </title>
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel="stylesheet" href="css/view_details.css"> <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
  
</head>
<body>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope>EVENT NO.</th>
                            <th scope>EVENT NAME</th>
                            <th scope>EVENT SCHEDULE</th>
                            <th scope>EVENT DESCRIPTION</th>
                            <th scope>EVENT TIME</th>
                            <th scope>EVENT DURATION</th>
                            <th scope>EVENT STATUS</th>
                            <th scope>EVENT FEE</th>
                            <th scope>ACTION</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                            include 'db.php';
                            $id = $_GET['id'];
                            $sql_statement = "SELECT add_event_ID, event_name , event_schedule, event_description, event_time, event_duration, status , fee FROM add_event_tbl WHERE add_event_ID = '$id'";
                            $sql_execute = mysqli_query($db , $sql_statement);
                            while($rows = mysqli_fetch_assoc($sql_execute)){

                                $id = $rows['add_event_ID'];
                                $event_name =  $rows['event_name'];
                                $event_schedule = $rows['event_schedule'];
                                $event_description = $rows['event_description'];
                                $event_time = $rows['event_time'];
                                $event_duration =  $rows['event_duration'];
                                $event_status  =  $rows['status'];
                                $event_fee = $rows['fee'];

                        


                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $event_name; ?></td>
                            <td><?php echo $event_schedule; ?></td>
                            <td><?php echo $event_description; ?></td>
                            <td><?php echo $event_time; ?></td>
                            <td><?php echo $event_duration; ?></td>
                            <td><?php echo $event_status; ?></td>
                            <td><?php echo $event_fee; ?></td>
                            <td><?php echo ' <a href="admin_view_event.php?remind = '.$id.'"><button class="btn btn-warning"> Return </button></a> | <a href="admin_edit_event.php?id='.$id.'"><button class="btn btn-primary">Edit </button></a>'?></td>
                        </tr>
                        <?php 
                            } 
                        ?>
                    </tbody>
                </table>
    
    


</body>
</html>
