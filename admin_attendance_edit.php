
<?php

    include 'db.php';

    $id = $_GET['id'];

    $select_all = "SELECT * FROM user_join_event WHERE user_ID = '$id'";

    $result = mysqli_query($db, $select_all);

    while($rows = mysqli_fetch_assoc($result)) { 

        $event_name = $rows['event_name'];
        $feu_ID = $rows['feu_id'];
        $first_name = $rows['first_name'];
        $last_name = $rows['last_name'];
        $course = $rows['course'];
        $attendance = $rows['attendance'];


    }
    
    if(isset($_POST['edit'])) {

        $event_name = $_POST['event_name'];
        $feu_ID = $_POST['feu_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $course = $_POST['course'];
        $attendance = $_POST['attendance'];


        $update = "UPDATE user_join_event 
                    SET event_name = '$event_name' ,
                        feu_id = '$feu_ID' ,
                        first_name = '$first_name' ,
                        last_name = '$last_name' ,
                        course = '$course' ,
                        attendance = '$attendance'
                        WHERE user_ID = '$id' ";

        $execute = mysqli_query($db , $update);
        
        if($execute){ 

            //for successfull insert the data
         echo '<script language="javascript">
         alert("Edit Details Successfully!");
        window.location = "dashboard_admin_attendance.php"; 
        </script>';


        } else {

            echo '<script language="javascript">
            alert("Edit Details Unsuccessfully!");
           window.location = "dashboard_admin_attendance.php"; 
           </script>';


        }


    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/add-event.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Edit attendance</title>
</head>
<body>

<br>
    <br>
    <form method = "POST"> 

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <!--- Header ---->
                        <center><h2> Edit Attendance </h2></center>

                        <!-- for hr --->
                        <div class="row">
                            <div class="col">

                                <hr>


                            </div>
                        </div>

                        <!-- User details FEU ID , COURSE , NAME , LASTNAME ,  --->
                        <div class="row">
                            <div class="col-md-5">
                                <label for = "id">EVENT NAME : </label><br> 
                                <input type = "text" name = "event_name" value = "<?php echo $event_name;?>"> 

                            </div>

                        </div>
          
                        <div class="row">
                            <div class="col-md-7">

                                <label for = "id">STUDENT ID : </label><br>
                                <input type = "text" name = "feu_id" value = "<?php echo $feu_ID;?>" placeholder = "" required maxlength = "9">

                            </div>

                            <div class="col-md-5">

                                <label for = "Course">Course : </label><br>
                                        <select class="form-select" aria-label="Default select example" name = "course" required>

                                                <option value = "<?php echo $course;?>"></option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Business Administration">Business Administration</option>
                                                <option value="Education">Education</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Information Technology">Information Technology</option>
                                                <option value="Psychology">Psychology</option>
                                                <option value="Medtech">Medtech</option>

                                        </select>
                                      
                                  </div> <!---col  End tag for course  --->
                               


                            

                        </div> <!-- END TAG FOR ROW 1-->

                        <!-- for hr --->
                        <div class="row">
                            <div class="col">

                                <hr>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">

                            <label for = "fname">First name : </label><br>
                            <input type = "text" name = "first_name" value = "<?php echo $first_name;?>" placeholder = "" required>



                            </div>

                            <div class="col-md-5">

                            <label for = "lname">Last name : </label><br>
                            <input type = "text" name = "last_name" value = "<?php echo $last_name;?>" placeholder = "" required><br>



                            </div>

                        </div> <!-- END TAG FOR ROW 2-->


                        <div class="row">
                            <div class="col-md-5">
                                <label for = "status">Status : </label><br>
                                <select class="form-select" aria-label="Default select example" name = "attendance">

                                    <option value = "<?php echo $event_name;?>"></option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                    <option value="Late">Late</option>


                                </select>
                            </div>


                        </div>

                        <!---for button --->
                              <center>
                                <br>
                                <br>
                                <input type = "submit" name = "edit"  class="btn btn-success" value = "Edit details" >
                               
                                </center>



                     </div>
                </div>
            </div>
        </div>




    </form>
    

    
</body>
</html>