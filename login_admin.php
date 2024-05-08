
<?php
// include the database connection


class adminLogin {
    public function loginAdmin() {
        include 'db.php'; // make $db available within this method

        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // SQL injection vulnerability alert: Consider using prepared statements instead of interpolating variables directly into the query string
            $sql_statement = "SELECT * FROM admin_tbl WHERE username = '$username' AND password = '$password'";
            $sql_execute = mysqli_query($db, $sql_statement);

            if($sql_execute) {
                // You should fetch data from the result set and check if any rows are returned
                if(mysqli_num_rows($sql_execute) > 0) {
                   
                    echo '<script language = "javascript">
                    alert("Login Successfully!");
                    window.location="homepage_admin.php";
                </script>';
                    exit; // Stop execution after redirection
                } else {
                    echo '<script language="javascript">alert("Hi '.$username.', check your credentials!");</script>';
                }
            } else {
                echo '<script language="javascript">alert("Error in SQL query: '.mysqli_error($db).'");</script>';
            }
        }
    }
}

// Instantiate the adminLogin class
$adminLogin = new adminLogin();

// Call the loginAdmin method
$adminLogin->loginAdmin();

?>

<style>
    body {

background-image:     linear-gradient(
  to right, 
  gold,
  green
);
animation:slidebg 2s linear infinite;

}   
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/login.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Administrator</title>
</head>
<body>
    
<br>
<br>
<br>
<form method="POST" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <center>
                            <!--- HEADER ---->
                            <!--- 1ST ROW ---->
                            <div class="row">
                                <div class="col">
                                    
                                    <h1> Administrator </h1>

                                   
                                    


                                </div>


                            </div> <!-- END FOR HEADER ---->


                            <!---- FOR HR ---->
                            <div class="row">
                                <div class="col">
                                    <hr>

                                </div>


                            </div> <!-- END FOR HR ---->

                            <!--- 2ND ROW----->
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="username" class="username-text">Username : </label>
                                    <input type="text" name="username" value="" placeholder="" class="username">
                                </div>
                            </div>  <!-- END FOR 2nd row ---->

                            <!--- 3RD ROW----->
                            <div class="row">
                                <div class="col-md-8">
                                   
                                <label for="password" class="password-text">Password : </label>
                                    <input type="password" name="password" value="" placeholder="" autocomplete="current-password" id="id_password" class="password">

                                      <!--- FOR IMG ----->
                                      <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png" width="10px" height="10px" style="display: inline; margin-left: -9.5%; vertical-align: middle; width:35px; height:32px; margin-top:-5px;" id="togglePassword">
                                   <br /><br><!-- END FOR IMG--->
                                 
                             
                                </div>
                            </div>  <!-- END FOR 3RD row ---->
                             
                            
                              <!-- FOR BUTTON ---->
                              <center><input type="submit" name="login" value="Login" class="btn btn-success"></center>


                        


                             <!---- FOR HR ---->
                             <div class="row">
                                <div class="col">
                                    <hr>
                                    

                                </div>
                           </div>

                                <div class="row">
                                     <div class="col">
                                    
                                        <!---<a href="registration.php" class="registration">CREATE NEW ACCOUNT</a> --->

                                </div>
                           


                     
                        </div>




                    </div>




                </div>


            </div>



        </div>



    </form>

    <script>


        const togglePassword =  document.querySelector('#togglePassword');
 
        const password = document.querySelector('#id_password');
 
        togglePassword.addEventListener('click', function (e) {
 
            // Toggle the type attribute 
            const type = password.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
 
            // Toggle the eye slash icon 
            if (togglePassword.src.match(
                "https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png")) {
                togglePassword.src =
                "https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png";
            } else {
                togglePassword.src =
                "https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png";
            }
        }); 


        </script>


</body>
</html>
