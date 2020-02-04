<!DOCTYPE html>
<?php   //session_start();
    require_once "database.php";?>

<html>
<head>
<link rel="icon" href="http://ipwire.com/wp-content/uploads/2018/05/NUST-Logo.jpg" type="image/png" sizes="16x16">
<title></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
    <!--    <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">-->

    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="http://ipwire.com/wp-content/uploads/2018/05/NUST-Logo.jpg" />
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
   
    <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/caterRequests.css">
    <!--===============================================================================================-->
<style>
.footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
</style>
</head>
<body>
 <div class="background"></div>
    <div class="backgroundoverlay">
        <div class="logoimg"  href="#">
            <img src="http://www.seecs.nust.edu.pk/Resources/images/logo.png">
        </div>
 <div class="backgroundHeading" > Room Reservation Portal</div>
    </div>
    <div style="clear: both;"></div>
    <div class="row">

        <div class="topnav" id="myTopnav">
        
            <a href="index.php" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a><!--*this maybe shows the approved requests-->
          
            <a href="coor_manage.php">Manage Requests</a>
        

            <a class="rightuser"><span style="text-decoration: none">&nbsp; &nbsp;&nbsp;&nbsp; <?php echo $_SESSION['email'] ?><span class="glyphicon glyphicon-user"></span> </span></a>
            <a href="logout.php" class="right"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>


    <div style="background-color:white;" class="containers">
     
<h3 style='color: #01477A'>Reservation Requests</h3>

<div class="tab">

<table>
            <tr>
              <th>Name</th>
              <th>Society Name</th>
              <th>Date</th>
              <th>From</th>
              <th>TO</th>
              <th>Reason</th>
              <th>Status</th>
              
            </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM reservation join user on reservation.creator_email=user.email";
$result1 = $conn->query($sql1);
function approved($record){
    if($record['app_by_adv'] && $record['app_by_coor']){
        return "Approved";
    }
    else{
        return "Pending";
    }
}


if ($result1->num_rows > 0) {
    $count=0;
    while($row1 = $result1->fetch_assoc() ) {
        $count++;
        $approved1 = approved($row1);
        echo "
          
            <tr>
              <td>$row1[name]</td>
              <td>$row1[society]</td>
              <td>$row1[date]</td>
              <td>$row1[begin]</td>
              <td>$row1[end]</td>
              <td>$row1[reason]</td>
              <td>".$approved1."</td>
              
            </tr>
            
                    
        ";
        }
    }
    else {
    echo "0 results";
}

$conn->close();
?>
</table>

</div>

</div>
</div>
     <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
</div>
</div>
</div>

    




    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap-3.3.7.js"></script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }

    </script>


    <script>
        var dt = new Date();
        document.getElementById("date").innerHTML = dt.toLocaleDateString();

    </script>
    <script>
        var dt = new Date();
        document.getElementById("time").innerHTML = dt.toLocaleTimeString();

    </script>


    <script>
        var nav = false;

        function openNav() {
            if (!nav) {
                document.getElementById("mySidenav").style.width = "250px";
                nav = true;
            } else {
                closeNav();
                nav = false;
            }
        }


        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>







    <div class="footer">
        <a onclick="topFunction()">home</a>
    </div>
</body>


</html>
