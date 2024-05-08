<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css"> <!--this link for bootstrap----->
    <link rel = "stylesheet" href = "css/homepage_admin.css" > <!--this link for css----->
    <link rel = "stylesheet" href = "js/bootstrap.min.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/js.js">  <!--this link for js----->
    <link rel = "stylesheet" href = "js/modal.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" css/homepage_admin.css">
    <link rel = "shortcut icon" href = "https://upload.wikimedia.org/wikipedia/en/thumb/7/72/FEU_Tamaraws_official_logo.svg/800px-FEU_Tamaraws_official_logo.svg.png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Homepage admin</title>

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
        /* Style for the marquee container */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            box-sizing: border-box;
            border: 0px solid #ccc;
            padding: 10px;
            width: 80%; /* Adjust width as needed */
            margin: 0 auto; /* Center the marquee horizontally */
        }

        /* Style for the marquee text */
        .marquee-text {
            display: inline-block;
            padding-right: 100%; /* Move the text off-screen to the right */
            animation: marqueeAnimation 10s linear infinite; /* Adjust duration as needed */
        }

        /* Keyframes for the marquee animation */
        @keyframes marqueeAnimation {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }


    </style>
</head>
<body> 

    <div class="wrapper">
        <div class="sidebar">
        <img src="feu.png" style="margin-left:65px; ">
<br><br>

                <h2>Admin </h2>
                
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
           
            <div class="marquee-container">
        <div class="marquee-text">
            <h1 style="color: #333; font-family: 'Arial', sans-serif;">W   E   L    C   O      M     E         A D M I N</h1>
        </div>
    </div>
       
                <div class="info">

                


                </div>
                
                
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <!------- FOR user-vew-event content ---->
                            
                              





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