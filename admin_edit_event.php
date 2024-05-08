<?php 

    include 'db.php';

    $id = $_GET['id'];
    $select_all = "SELECT * FROM add_event_tbl";

    $execute = mysqli_query($db , $select_all);

    while($rows = mysqli_fetch_assoc($execute)) {

        $event_name = $rows['event_name'];
        $event_schedule = $rows['event_schedule'];
        $event_time = $rows['event_time'];
        $event_duration = $rows['event_duration'];
        $event_fee = $rows['fee'];
        $image_text = $rows['event_description'];
        $course = $rows['course'];
        $event_status = $rows['status'];


    }

    if(isset($_POST['edit_event'])) { 

        $event_name = $_POST['event_name'];
        $event_schedule = $_POST['event_schedule'];
        $event_time = $_POST['event_time'];
        $event_duration = $_POST['event_duration'];
       
         //GET TEXT OR DESCIPTION OF IMAGE
         $image_text = mysqli_real_escape_string($db , $_POST['image_text']);
   

        $event_fee = $_POST['fee'];
        
        $course = $_POST['dropdown'];
        $event_status = $_POST['status'];

        $update = "UPDATE add_event_tbl
                    SET event_name = '$event_name' ,
                        event_schedule = '$event_schedule' ,
                        event_time = '$event_time' ,
                        event_duration = '$event_duration' ,
                        fee = '$event_fee' ,
                        event_description = '$image_text' ,
                        course = '$course' ,
                        status = '$event_status' 
                        

                        WHERE add_event_ID = '$id'";
                        

        $sql_execute = mysqli_query($db , $update);

    if($sql_execute) {
        //for successfull insert the data
        echo '<script language="javascript">
        alert("Edit Event Successfully!");
       window.location = "admin_view_event.php"; 
       </script>';

       //dont forget palitan ang php file sigure naka viiew dito bali kapag nakapag 
       //add automatic pupunta sa may makikita yung mga event
       
    } else{
        //failure message
        echo "Error: " . mysqli_error($db);
    }


    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/registration.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <title>Edit Event</title>
</head>
<body>
    
<br>
<br>
    <form method = "POST">

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <!--HEADER -->
                            <center><h2>Edit Event</h2></center>

                             <!-- FOR FIRST HR LINE ----->
                             <div class="row">
                                     <div class="col">
                                         <center><hr></center>
                                     </div>
                                </div> <!-- END FOR HR TAG---->

                                <!-- Body ng event -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for = "h1">Event name : </label>
                                        <input type = "text" name = "event_name" value = "<?php echo $event_name;?>" placeholder = "">

                                    </div><!---End tag for event name --->
                                         <!----Event schedule--->
                               
                                    <div class="col-md-6">
                                        <label for = "h1">Event schedule : </label><br>
                                        <input type = "date" name = "event_schedule" value = "<?php echo $event_schedule;?>" placeholder = "">

                                    </div><!---End tag for event schedule  --->


                                  
                                </div> <!-- First row ---->

                               <!-- 2nd row ---->
                               <!--- ask for course ---->
                               <div class="row">      
                                  <div class="col-md-6">
                                    <div class = "text">
                                        <br>
                                        <label for = "Course">Course : </label><br>
                                        <select class="form-select" aria-label="Default select example" name = "dropdown">

                                                <option value = "selected"><?php echo $course; ?></option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Business Administration">Business Administration</option>
                                                <option value="Education">Education</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Information Technology">Information Technology</option>
                                                <option value="Psychology">Psychology</option>
                                                <option value="Medtech">Medtech</option>

                                        </select>
                                      </div>
                                  </div> <!---col  End tag for course  --->

                              



                               </div> <!---2nd row End tag for course  --->
                                
                               <!-- 3rd row---->
                               <div class="row">
                                    <div class="col-md-8">

                                        <br>
                                        <label for = "">Event description : </label><br>
                                        <textarea name = "image_text" cols = "50" rows = "5" value = "">
                                         <?php echo $image_text;?>

                                        </textarea>

                                    </div><!---col  End tag for description  --->
                                </div> <!---3rd row End tag for description  --->

                                <div class="row">
                                    <div class="col-md-6">

                                    <label for = "">Time : </label><br>
                                    <input type = "text" name = "event_time" value = "<?php echo $event_time;?>" placeholder = "">

                                    </div>

                                    <div class="col-md-6">

                                        <label for  = "">Event duration (HOURS) : </label><br>
                                        <input type = "number" name = "event_duration" value = "<?php echo $event_duration;?>" placeholder = "">

                                    </div>

                                </div>



                                <!-- 4th row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <br>
                                       <label for = "status">Status : </label><br>
                                       <input type = "radio" name = "status" value = "Required"> Required 
                                       <input type = "radio" name = "status" value = "Fee"> Entrance Fee  
                                       <input type = "radio" name = "status" value = "Optional"> Optional <br>
                                        <label for = "howmuch">How much? : </label>
                                       <input type = "text" name = "fee" value = "<?php echo $event_fee;?>" placeholder = "">

                                    </div>
                                </div>
                            

                                <!---for button --->
                                <center>
                                <br>
                                <input type = "submit" name = "edit_event"  class="btn btn-success" value = "Edit Event" >

                                </center>


                             <!--- HR -->
                             <div class="row">
                                <div class="col">
                                    <br>
                                    
                                    <center><hr></center>

                                </div>
                            </div> <!--- END FOR HR TAG---->




                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>


</body>
</html>