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
        <a><span style="font-size:14px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9658;</span></a>
            <a href="advisor_home.html" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a>
            <a href="adv_manage.php">Manage Requests</a>
            <a href="adv_res.php">My Reservations</a>

      
            <a class="rightuser"><span style="text-decoration: none">&nbsp; &nbsp;&nbsp;&nbsp; <?php echo $_SESSION['email'] ?><span class="glyphicon glyphicon-user"></span> </span></a>
            <a href="logout.php" class="right"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>

    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <ul style="list-style-type: none">

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Classes <span class="caret"></span></a>
               <!--  <ul class="dropdown-menu width">
                    <li><a href="#">CR-1</a></li>
                    <li><a href="#">CR-2</a></li>
                    <li><a href="#">CR-3</a></li>
                </ul> -->
                <?php echo
                "<ul class='dropdown-menu width'>
                    <li><a href='room.php?ID=".'CR 1'."'>CR-1</a></li>
                    <li><a <a href='room.php?ID=".'CR 2'."'>CR-2</a></li>
                    <li><a href='room.php?ID=".'CR 3'."'>CR-3</a></li>
                    <li><a <a href='room.php?ID=".'CR 4'."'>CR-4</a></li>
                    <li><a href='room.php?ID=".'CR 5'."'>CR-5</a></li>
                    <li><a <a href='room.php?ID=".'CR 6'."'>CR-6</a></li>
                    <li><a href='room.php?ID=".'CR 7'."'>CR-7</a></li>
                    <li><a <a href='room.php?ID=".'CR 8'."'>CR-8</a></li>
                    
                </ul>";
                ?>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Conference Rooms<span class="caret"></span></a>
               <!--  <ul class="dropdown-menu width">
                    <li><a href="#">Faculty block</a></li>
                    <li><a href="#">Innovation Hub</a></li> 
                </ul> -->
                <?php echo
                "<ul class='dropdown-menu width'>
                    <li><a href='room.php?ID=".'Faculty Block'."'>Faculty Block</a></li>
                    <li><a <a href='room.php?ID=".'Innovation Hub'."'>Innovation Hub</a></li>
                    
                </ul>";
                ?>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seminar Hall <span class="caret"></span></a>
                <!-- <ul class="dropdown-menu width">
                    <li><a href="#">SEECS</a></li>
                    <li><a href="#">IAEC</a></li>
                </ul> -->
                <?php echo
                "<ul class='dropdown-menu width'>
                    <li><a href='room.php?ID=".'SEECS Seminar Hall'."'>SEECS</a></li>
                    <li><a <a href='room.php?ID=".'IAEC Seminar Hall'."'>IAEC</a></li>
        
                </ul>";
                ?>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Labs <span class="caret"></span></a>
            <?php echo
                "<ul class='dropdown-menu width'>
                    <li><a href='room.php?ID=".'Farabi LAB'."'>Farabi</a></li>
                    <li><a <a href='room.php?ID=".'Sherazi LAB'."'>Sherazi</a></li>
                    <li><a <a href='room.php?ID=".'Turing LAB'."'>Turing</a></li>
                    <li><a <a href='room.php?ID=".'Babbage LAB'."'>Babbage</a></li>
                </ul>";
                ?>
            </li>
        </ul>
    </div>
    <br />
<div class="media" >
    <div class="media-left media-top">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBnenRGETpi7vFqJ2nSzqnyoKwxJQAoyCCVuUYkViLe8K8IFCa" class="media-object" style="width:100px">
    </div>
    <div class="media-body">
      <h2 class="media-heading" style="color:#01477A" ><b>Faculty Advisor</b></h2>
      
      

  </div>
  </div>
  <hr>
  

    <div style="background-color:white;" class="containers">
        <h2 align="center"> Cater Requests</h2>
<h3 style="color: #01477A">Respond to Requests</h3>

<div class="tab">
  <p style="font-size: 18px"> Pending Requests </p>
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
$adv_email=$_SESSION['email'];
$sql1 = "SELECT * FROM reservation join user on reservation.creator_email=user.email where adv_email='rain.bese16seecs@seecs.edu.pk'  and app_by_adv=0";
$result1 = $conn->query($sql1);
function approved($record){
    if($record['app_by_adv'] == 0){
        return "Not Approved";
    }
    else{
        return "Approved";
    }
}

if ($result1->num_rows > 0) {
    $count=0;
    while($row1 = $result1->fetch_assoc() ) {
        $count++;
        $approved1 = approved($row1);



    if (isset($_POST['submit'])) {
         if(isset($_POST["radio".$count.""])){
        $selected_radio =$_POST["radio".$count.""];
        
         

         if ($selected_radio == 'accepted') {
                $sql2 = "UPDATE reservation SET app_by_adv=1 where id=$row1[id]";
        $conn->query($sql2);
        $approved1="Approved";
          }else if ($selected_radio == 'rejected') {
                $sql3 = "DELETE FROM reservation where id=$row1[id]";
                
        $conn->query($sql3);
        $approved1="Not Approved";
          }
        }
    }

       
        echo "<button class='accordion'>Request ".$count."</button>
 <div class='panel'>
          <div style='overflow-x:auto;'>
          <br>
          <table>
            <tr>
              <th>Name Of Student</th>
              <th>Society Name</th>
              <th>From</th>
              <th>TO</th>
              <th>Reason</th>
              <th>Status</th>
              
            </tr>
            <tr>
              <td>$row1[name]</td>
              <td>$row1[society]</td>
              <td>$row1[begin]</td>
              <td>$row1[end]</td>
              <td>$row1[reason]</td>
              <td>".$approved1."</td>
              
            </tr>
            
            </table>
            <div class='container'>
 <h3  style='color: #01477A' align='left'>Respond to Request</h3>
  <form action='adv_manage.php' method='post'>
    <label class='radio-inline'>
      <input type='radio' name='radio".$count."' value='accepted' checked>Accept Request
    </label>
    <label class='radio-inline'>
      <input type='radio' name='radio".$count."' value='rejected'>Reject Request
    </label>
      <input type='submit' name='submit' class='btn btn-info btn-lg'  >
    
  </form>
</div>
</div>
</div>";
   }   
    

  }
  
    

$conn->close();
?>
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



</body>
</html>


