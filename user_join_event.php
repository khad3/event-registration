
<?php

    //include the database 
    include 'db.php';

    $id = $_GET['id'];

    $sts = "SELECT event_name FROM add_event_tbl WHERE add_event_ID = '$id'";

    $execute = mysqli_query($db , $sts);

    while($rows = mysqli_fetch_assoc($execute)) { 

        $event_name = $rows['event_name'];


    }

    //for join button
    if(isset($_POST['join'])) {
        //i validate yung student id if nag existed
        $feu_email = $_POST['feu_id'];

        $sql_sts = "SELECT feu_id FROM user_join_event WHERE feu_id = '$feu_email'";

        $execute = mysqli_query($db , $sql_sts);
        //check if the email if is exist
        if(mysqli_num_rows($execute) > 0) {

            echo '<script language="javascript">
            alert("'.$feu_email.' , Student ID already is exist ");
           </script>';


        } else {

        // Assuming you are using POST method to submit the form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $feu_email = $_POST['feu_id'];

         // Validate that the input is numeric and less than or equal to 9 characters
        if (is_numeric($feu_email) && strlen($feu_email) <= 9) {
       
        $event_no = $_POST['event_name'];
        $course = $_POST['dropdown'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $attendance = $_POST['attendance'];

            

        $sql_statement = "INSERT INTO user_join_event(event_name , feu_id , course , first_name , last_name , attendance) VALUES('$event_no' , '$feu_email' , '$course' , '$first_name' , '$last_name' , '$attendance')";

        $sql_execute = mysqli_query($db , $sql_statement);

        if($sql_execute) {

            echo '<script language = "javascript">
					alert("Join successfully!");
					window.location = "dashboard_user_attendance.php";  
					</script>';
     
           //DAPAT MY HEADER SIYA DITO PAPUNTA SA MAKIKITA NIYA SINO SINO NAKSALI SA EVENT

        } else {

            echo '<script language="javascript">
            alert("Error in SQL query: '.mysqli_error($db).'");
           </script>';

        }
    } else {
        //kapag mali
        echo '<script language = "javascript">
				alert("Invalid student ID. Please enter a numeric value with a maximum of 9 digits.");
				</script>';
        
    }
}
       

    }

   
}
    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/user_join_event.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Join Event </title>
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
                        <center><h2> Attendance </h2></center>

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

                          
                            
                            
                        
                           
                        <?php
session_start(); // Start the session
include 'db.php'; // Include the file with the database connection

// Check if the session variable is set and not empty
if (isset($_SESSION['usernames']) && !empty($_SESSION['usernames'])) {
    $username = $_SESSION['usernames'];

    // Use a prepared statement to query the database
    $sql = "SELECT student_id , course  FROM registration_tbl WHERE username = ?";
    $stmt = mysqli_prepare($db, $sql);

    if ($stmt) {
        // Bind the parameter and execute the statement
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        // Get the result of the query
        $sql_result = mysqli_stmt_get_result($stmt);

        // Check if there are rows returned from the query
        if (mysqli_num_rows($sql_result) > 0) {
            // Fetch the student_id from the result
            $row = mysqli_fetch_assoc($sql_result);
            $feu_id = $row['student_id'];
            $course = $row['course'];
           
           // echo "Student ID found: " . $feu_id; // Debug statement
        } else {
            // No matching rows found
            echo "No student ID found for the username: " . $username;
        }
    } else {
        // Error preparing the statement
        echo "Error preparing SQL statement: " . mysqli_error($db);
    }
} else {
    // Session variable not set or empty
    echo "Session variable 'usernames' not set or invalid.";
}
?>

                            


                                <label for = "id">STUDENT ID : </label><br>
                                <input type = "text" name = "feu_id" value = "<?php echo $feu_id;?>" placeholder = "" required maxlength = "9">

                            </div>

                            <div class="col-md-5">

                                <label for = "Course">Course : </label><br>
                                        <select class="form-select" aria-label="Default select example" name = "dropdown" required>

                                                <option value = ""><?php echo $course;?></option>
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
                            <input type = "text" name = "first_name" value = "" placeholder = "" required>



                            </div>

                            <div class="col-md-5">

                            <label for = "lname">Last name : </label><br>
                            <input type = "text" name = "last_name" value = "" placeholder = "" required><br>



                            </div>

                        </div> <!-- END TAG FOR ROW 2-->


                        <div class="row">
                            <div class="col-md-5">
                                <label for = "status">Status : </label><br>
                                <select class="form-select" aria-label="Default select example" name = "attendance">

                                    <option selected>Choose status</option>
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
                                <input type = "submit" name = "join"  class="btn btn-success" value = "Attend" >
                               
                                </center>



                     </div>
                </div>
            </div>
        </div>




    </form>
    
</body>
</html>