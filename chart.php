<?php 


    include 'db.php';
    $select = "SELECT COUNT(course) as course_total , course FROM user_join_event GROUP BY course";
    $execute = mysqli_query($db , $select);

    

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- https://developers.google.com/chart/interactive/docs/gallery/piechart -->
      <!--Load the AJAX API-->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['course' , 'course_total'],

            <?php 
            
                while($rows = mysqli_fetch_array($execute)) {

                    echo "['".$rows["course"]."' , ".$rows["course_total"]."],";

                }

            
            ?>

        

        ]);

        var option = {

            title: 'Total students per course',
            chartArea: {width: '50%'},
            
            vAxis: {

                minValue: 0,
                title: 'Total number of students'

            }, 
            hAxis: {

                title: 'Course'

            },

            is3D:true 

        };
        var chart = new google.visualization.ColumnChart(document.getElementById('column'));
        chart.draw(data , option);


      }
      </script>

      


    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/chart.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <link rel = "shortcut icon" href = "https://upload.wikimedia.org/wikipedia/en/thumb/7/72/FEU_Tamaraws_official_logo.svg/800px-FEU_Tamaraws_official_logo.svg.png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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



      </style>

</head>


    


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
                
                
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <!------- FOR admin-vew-event content ---->
                            
                              
                                <div  id="column" style="width: 800px; height: 500px;"></div>
                                





                            </div>
                        </div>


                    </div>


                </div>


        </div>




    </div>





  
    
</body>
</html>
