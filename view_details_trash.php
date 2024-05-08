<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recyle View Details</title>
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel="stylesheet" href="css/view_details.css"> <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
      <style>
        .at{
            text-align: center;
color:white;   
 font-size:40px;
        }
    </style>
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
                            $sql_statement = "SELECT * FROM event_archive_tbl WHERE archive_ID = '$id'";
                            $sql_execute = mysqli_query($db , $sql_statement);
                            while($rows = mysqli_fetch_assoc($sql_execute)){

                                $id = $rows['archive_ID'];
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
                            <td><?php echo '<a href="trash_event.php"><button class="btn btn-primary">Return</button></a>'?></td>
                        </tr>
                        <?php 
                            } 
                        ?>
                    </tbody>
                </table>
    
    


</body>
</html>
