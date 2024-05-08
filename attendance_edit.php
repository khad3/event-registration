
 <!-- UPDATE BUTTON--->
 <?php 
 
            include 'db.php';

            $id = $_GET['id'];

            $select = "SELECT feu_id , first_name , last_name , course FROM user_join_event WHERE user_ID = '$id' ";

            $results = mysqli_query($db , $select);

            while($rows = mysqli_fetch_assoc($results)){
                
                $feu_id = $rows['feu_id'];
                $firstname = $rows['first_name'];
                $lastname = $rows['last_name'];
                $course = $rows['course'];

            }

            // Assuming you are using POST method to submit the form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $feu_id = $_POST['student_ID'];
              

                if (is_numeric($feu_id) && strlen($feu_id) == 9) {

                    $firstname = $_POST['first_name'];
                    $lastname = $_POST['last_name'];
                    $course = $_POST['course'];

                $update = "UPDATE user_join_event 
                            SET feu_id = '$feu_id' , 
                                first_name = '$firstname' , 
                                last_name = '$lastname' , 
                                course = '$course'
                                WHERE user_ID = '$id' ";

                $execute = mysqli_query($db , $update);

                if($execute){ 

                    echo '<script language = "javascript">
                    alert("Update details Successfully!");
                    window.location="dashboard_user_attendance.php";
                </script>';

                } else{
                    echo '<script language = "javascript">
                    alert("Update details Unuccessfully!");
                </script>';
                }

            } else {

                //kapag mali
        echo '<script language = "javascript">
        alert("Invalid student ID. Please enter a numeric value with a maximum of 9 digits.");
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
    <link rel = "stylesheet" href = "css/dashboard_user_attendance.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Edit Attendance details</title>
 </head>
 <body>
    <br>
    <br>
    <form method = "POST">
       <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <!---HEADER --->
                        <div class="row">
                            <div class="col-md-8">

                                <h2>Edit Attendance</h2>

                            </div>
                        </div> <!----- END FOR HEADER --->

                        <div class="row">
                            <div class="col">

                                <hr>

                            </div>
                        </div>

                        <!-- FIRST ROW --->
                        <div class="row">
                            <div class="col-md-8">

                                <label for = "">STUDENT ID : </label>
                                <input type = "text" name = "student_ID" value = "<?php echo $feu_id; ?>" placeholder = "" maxlength = "9"><br>



                            </div>
                        </div> <!----- END FOR FIRST ROW --->
                        <br>

                        <div class="row">
                            <div class="col-md-5">

                                <label for = "firstname">FIRST NAME : </label>
                                <input type = "text" name = "first_name" value = "<?php echo $firstname; ?>" placeholder = "">


                            </div>

                            <div class="col-md-5">

                                <label for = "LASTname">LAST NAME : </label>
                                <input type = "text" name = "last_name" value = "<?php echo $lastname; ?>" placeholder = "">


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">

                            <label for = "Course">Course : </label><br>
                                        <select class="form-select" aria-label="Default select example" name = "course">

                                                <option selected = "selected"><?php echo $course; ?></option>
                                                

                                        </select>

                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col">

                                <hr>

                            </div>
                        </div>
                        <br>
                          <!-- FOR BUTTON ---->
                          <center><input type="submit" class="btn btn-success" name = "submit" value = "Update"></button></center>


                    </div>
                </div>
            </div>
        </div>
       </div>
    </form>
    
    
 </body>
 </html>