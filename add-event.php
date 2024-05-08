

<?php 


    //include the database
    include 'db.php';

    if(isset($_POST['Add_event'])) {

        //kuhanin lahat ang mga input type 
        $event_name = $_POST['event_name'];
        $event_schedule = $_POST['event_schedule'];
        $course = $_POST['dropdown'];

        //GET IMAGE INPUT
        $image_upload = $_FILES['image_upload']['name'];
        //GET TEXT OR DESCIPTION OF IMAGE
        $image_text = mysqli_real_escape_string($db , $_POST['image_text']);
        //image file directory 
        $target = "img/".basename($image_upload);

        $event_time = $_POST['time'];
        $event_duration = $_POST['event_duration'];
        $status = $_POST['status'];
        $fee = $_POST['fee'];

        
        

        //make the sql statement 
        $sql_statement = "INSERT INTO add_event_tbl(event_name, event_schedule , course , picture_upload , event_description, event_time, event_duration , status , fee , registration_ID) 
                            VALUES ('$event_name' , '$event_schedule' , '$course' , '$image_upload' , '$image_text','$event_time', '$event_duration', '$status' , '$fee', 1  )";

       $sql_execute = mysqli_query($db , $sql_statement);


        if(move_uploaded_file($_FILES['image_upload']['tmp_name'], $target)) {

         
                echo '<style>background-color:green;</style><script language = "javascript">
                    alert("Added successfully");
                    window.location="admin_view_event.php";
                </script>';
                //dashboard ng admin dito 

        }

        //if success 
        if($sql_execute) {
            //for successfull insert the data
            echo '<script language="javascript">
            alert("Successfully added event!");
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
    <link rel = "stylesheet" href = "style/add_event.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/modal.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" css/homepage_admin.css">
    <link rel = "shortcut icon" href = "https://upload.wikimedia.org/wikipedia/en/thumb/7/72/FEU_Tamaraws_official_logo.svg/800px-FEU_Tamaraws_official_logo.svg.png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Add Event</title>

    <style>

* {

margin: 0;
padding: 0;
box-sizing: border-box;
list-style: none;
text-decoration: none;
font-family:Garamond;


}


    body {

background-image:     linear-gradient(
  to right, 
  gold,
  green
);
animation:slidebg 2s linear infinite;


}

.wrapper {

display: flex;
position: relative;


}

.wrapper .sidebar{

position: fixed;
width: 200px;
height: 100%;
background: green;
padding:30px 0;

}

.wrapper .sidebar h1{

color:antiquewhite;
text-transform: uppercase;
text-align: center;
margin-bottom: 30px;
font-size: large;
padding: 10%;

}

.wrapper .sidebar ul li{

padding: 15px;
border-bottom: 1px solid rgba(0,0,0,0.05 );
border-top: 1px solid rgba(255, 255,255,0.05);


}

.wrapper .sidebar ul li a {

color: antiquewhite;
display: block;

}

.wrapper .sidebar ul li a .fas {

width:25px;

}

.wrapper .sidebar ul li:hover{

background:  gold;

}

.wrapper .sidebar ul li:hover a {

color: rgba(26, 25, 25, 0.582);


}

.wrapper .main-content{

width: 100%;
margin-left:200px;

}

.wrapper .main-content .header {

padding: 20px;
background:  #aeebf3;
color: #202020;
border-bottom: 1px solid #31e7ff;
text-align: right;


}

.wrapper .main-content .info {

margin:20px;
color: #021b1f;
line-height: 25px;


}


.card2{

    background-image:     linear-gradient(
  to right, 
  white,white
  

  
);

animation:slidebg 2s linear infinite;
}



    </style>
    
</head>
<body> 

    <div class="wrapper">
        <div class="sidebar">
        <img src="feu.png" style="margin-left:65px; ">
<br><br>
                <h1>Admin </h1>
                
                <ul>
                    <li><a href = "chart.php" ><i class="fa-solid fa-chart-simple"></i> View Reports</a></li><br>
                    <li><a href = "admin_view_event.php" ><i class="fas fa-home"></i> View Event</a></li><br>
                    <li><a href = "add-event.php" ><i class="fa-solid fa-plus"></i> Add Event</a></li><br>
                    <li><a href = "dashboard_admin_attendance.php" ><i class="fas fa-users"></i> List of Attendee</a></li><br>
                    <br>
                    <br>
                    <br>
                    <li><a href = "logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li><br>

                    
                   


                </ul>

        </div>

        

        <div class="main-content">
            <br>
           
       
                <div class="info">

                


                </div>
                
                
          
                                <!------- FOR add--event content ---->

                                <br>
                                <br>
    <form method = "POST" enctype = "multipart/form-data">
        <div class="container">
           <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card2">
                        <div class="card-body">
                                <!--- Header ---->
                           <center>     <h1>New event</h1></center>

                                
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
                                        <input type = "text" name = "event_name" value = "" placeholder = "">

                                    </div><!---End tag for event name --->
                                         <!----Event schedule--->
                               
                                    <div class="col-md-6">
                                        <label for = "h1">Event schedule : </label><br>
                                        <input type = "date" name = "event_schedule" value = "" placeholder = "">

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

                                                <option selected>Choose course</option>
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
                                <!--- ask for picture-->
                                <div class="col-md-6">
                                    <br>
                                    <label for = "picture">Picture upload : </label>
                                    <input type = "file" name = "image_upload" value = "" placeholder = "">


                                </div>



                               </div> <!---2nd row End tag for course  --->
                                
                               <!-- 3rd row---->
                               <div class="row">
                                    <div class="col-md-8">

                                        <br>
                                        <label for = "">Event description : </label><br>
                                        <textarea name = "image_text" cols = "50" rows = "5">


                    

                                        </textarea>

                                    </div><!---col  End tag for description  --->
                                </div> <!---3rd row End tag for description  --->

                                <div class="row">
                                    <div class="col-md-6">

                                    <label for = "">Time : </label><br>
                                    <input type = "text" name = "time" value = "" placeholder = "">

                                    </div>

                                    <div class="col-md-6">

                                        <label for  = "">Event duration (HOURS) : </label><br>
                                        <input type = "number" name = "event_duration" value = "" placeholder = "">

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
                                       <input type = "text" name = "fee" value = "" placeholder = "">

                                    </div>
                                </div>
                            

                                <!---for button --->
                                <center>
                                <br>
                                <input type = "submit" name = "Add_event"  class="btn btn-primary" value = "Add Event" >

                               


                             <!--- HR -->
                             <div class="row">
                                <div class="col">
                                    <br>
                                    
                                    <center><hr></center>

                                </div>
                            </div> <!--- END FOR HR TAG---->
                            </center>

                        </div>
                    </div>
                </div>
           </div>
        </div>
    </form>






                            </div>
                        </div>


                    </div>


                </div>


        </div>




    </div>





  
    
</body>
</html>