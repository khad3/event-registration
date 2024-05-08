
<?php 

    include 'db.php';


if(isset($_POST['verify'])) {
     
    $verification = $_POST['code'];

    $sql_stat = "SELECT verification_code FROM registration_tbl WHERE verification_code = '$verification'";

    $sql_executes = mysqli_query($db, $sql_stat);



    if(mysqli_num_rows($sql_executes) > 0){

      $sql_statement = "UPDATE registration_tbl
                        SET verification_status = 1
                        WHERE verification_code ";


    $sql_execute = mysqli_query($db , $sql_statement);

     //for successfull insert the data
     echo '<script language = "javascript">
                    alert("Verify successfully!");
                    window.location="login.php";
                </script>';




    } else {

       
            echo "Error: ". mysqli_error($db);
        
               //for successfull insert the data
     echo '<script language="javascript">
     alert("Wrong verification code!"); 
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
    <link rel = "stylesheet" href = "css/verification.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Verification</title>
</head>
<body>
    
<br>
<br>
<br>
<br>
<br>
    <form method = "POST">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <div class="card">
                        <div class="card-body">

                            <center>
                                <h2>Verification</h2>

                            </center>

                            <!-- hr -->
                            <div class="row">  
                                <div class="col">
                                    <hr>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">

                                    <center><input type = "text" name = "code" value = "" placeholder = "           input code"></center>

                                </div>
                            </div>

                                   <!---for button --->
                                   <center>
                                <br>
                                <input type = "submit" name = "verify"  class="btn btn-primary" value = "Verify email" >

                                </center>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>


</body>
</html>