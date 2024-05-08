<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
<link rel = "stylesheet" href = "css/user_view_event.css" > <!--this link for css----->
<link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
<link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
<link rel = "stylesheet" href = "js/modal.js">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <link rel = "shortcut icon" href = "https://upload.wikimedia.org/wikipedia/en/thumb/7/72/FEU_Tamaraws_official_logo.svg/800px-FEU_Tamaraws_official_logo.svg.png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href=" css/view_details.css">
    <title>View Event</title>
    <style>
        .at{
            text-align: center;
color:white;   
 font-size:40px;
        }
    </style>
</head>
<body> 

    <div class="wrapper">
        <div class="sidebar">
        <a href = "homepage_user.php"><img src="feu.png" style="margin-left:65px; "></a>
<br><br><br>
                <P class="at">Attendance</p>
            
                <ul>

                    <li><a href = "user_view_event.php" ><i class="fas fa-home"></i> View Event</a></li><br>
                    <li><a href = "dashboard_user_attendance.php" ><i class="fas fa-users"></i> List of Attendee</a></li><br>
                    <li><a href = "trash_event.php"><i class="fa-solid fa-recycle"></i> Recyle Event</a></li><br>
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
                                <!-- user_view_event ---->
<table class="table table-striped" >
<!-- HEADER ---->
<thead>
<tr>
<th scope>EVENT NO.</th>
<th scope>EVENT IMAGE</th>
<th scope>EVENT NAME</th>
<th scope>COURSE</th>
<th scope>ACTION</th>
</tr>
</thead> 

<!------->
<tbody>
<!-- HERE WE CAN USE WHILE LOOP FOR THE 
DISPLAYING THE RECORDS IN OUR DATABASE then use the Php for the call our records---->

<?php 
//include the database here
include 'db.php';

$sql_statement = "SELECT add_event_ID, picture_upload, event_name , course FROM add_event_tbl";
//let's execute the sql statment
$sql_execute = mysqli_query($db , $sql_statement);
//let's take the data from database
while($rows = mysqli_fetch_assoc($sql_execute)) {
  
  $event_ID = $rows['add_event_ID'];
  $retrieve_image = $rows['picture_upload'];
  $event_name = $rows['event_name'];
  $course = $rows['course'];

//  Displaying the output
  echo "<tr>";
  echo "<td>  $event_ID  </td>";
  echo "<td>  <img src = 'img/".$retrieve_image."' height = 500 width = 500  </td>";
  echo "<td>  $event_name </td>";
  echo "<td>  $course </td>";
  echo "<td><a href='view_details.php?id=".$event_ID."' target=''><button class='btn btn-primary'>View Details</button></a> 
         | <a href='user_join_event.php?id=".$event_ID."'><button class='btn btn-success'>Attendance</button></a> 
         | <a href='hide_button.php?id=".$event_ID."'><button class='btn btn-danger'>Not interested</button></a></td>";
  echo "</tr>";
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            $('table').DataTable({
                dom: 'Bfrtip',
                buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
            });
        });
</script>
    
</body>
</html>