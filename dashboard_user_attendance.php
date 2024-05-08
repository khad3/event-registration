

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel="stylesheet" href="css../view_details.css">
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
 
    <title>Dashboard attendance</title>
 
</head>
<body>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
 <!--this link for css----->
<link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
<link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
<link rel = "stylesheet" href = "js/modal.js">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel = "shortcut icon" href = "https://upload.wikimedia.org/wikipedia/en/thumb/7/72/FEU_Tamaraws_official_logo.svg/800px-FEU_Tamaraws_official_logo.svg.png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
        .at{
            text-align: center;
color:white;   
 font-size:40px;
        }
        </style>
    <title>Homepage</title>
</head>

<body> 


    <div class="wrapper">
        <div class="sidebar">
        <a href = "homepage_user.php"><img src="feu.png" style="margin-left:65px; "></a>
<br><br>
   <P class="at">Attendance</p>
                
                <ul>

                    <li><a href = "user_view_event.php" ><i class="fas fa-home"></i> View Event</a></li><br>
                    <li><a href = "dashboard_user_attendance.php" ><i class="fas fa-users"></i> List of Attendee</a></li><br>
                    <li><a href = "trash_event.php"><i class="fa-solid fa-recycle"></i> Recyle Event</a></li><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <li><a href = "logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li><br>
                    
                   


                </ul>

        </div>

        <div class="main-content">
            <div class="header"></div> <!---Welcome--->
                <div class="info">

                       


                </div>

                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <!------- FOR dashboard_user ---->
                              

 <!-- dito makikita yung lahat ng umattend sa event--->
 <table class="table table-striped" >

<thead>
    <tr>
        <th>No.</th>
        <th>EVENT NAME </th>
        <th>STUDENT ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>COURSE</th>
        <th>ATTENDANCE</th>
        <!--<th>ACTION</th>-->



    </tr>
</thead>

<tbody>

    <?php 

        //include the database 
        include 'db.php';

        $sql_statement = "SELECT user_ID , event_name , feu_ID , first_name , last_name , course , attendance FROM user_join_event";

        $sql_execute = mysqli_query($db , $sql_statement);

        while($rows = mysqli_fetch_assoc($sql_execute)) {

            $user_ID = $rows['user_ID'];
            $event_name = $rows['event_name'];
            $feu_ID = $rows['feu_ID'];
            $first_name = $rows['first_name'];
            $last_name = $rows['last_name'];
            $course = $rows['course'];
            $attendance = $rows['attendance'];

        
         
    ?>
    <tr>

        <td><?php echo $user_ID;?></td>
        <td><?php echo $event_name;?></td>
        <td><?php echo $feu_ID;?></td>
        <td><?php echo $first_name;?></td>
        <td><?php echo $last_name;?></td>
        <td><?php echo $course;?></td>
        <td><?php echo $attendance;?></td>

        
        
        <td><?php //echo '<a href = "attendance_edit.php?id='.$user_ID.'"><button class="btn btn-primary">  EDIT </button></a>'?></td>
        

     

    </tr>

  
    <?php 
    
        }
    
    ?>


</tbody>






</table>

</div>






                            </div>
                        </div>


                    </div>


                </div>


        </div>




    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
</body>
</html>