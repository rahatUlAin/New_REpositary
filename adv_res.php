<!doctype html>
<?php   //session_start();
    require_once "database.php";?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Advisor Requests</title>
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
        
        /* ******* step 3: box sizing */

        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }

        @media only screen and (min-width: 600px) {

            /* For tablets: */
            .col-m-0 {
                width: 0%;
            }

            .col-m-1 {
                width: 8.33%;
            }

            .col-m-2 {
                width: 16.66%;
            }

            .col-m-3 {
                width: 25%;
            }

            .col-m-4 {
                width: 33.33%;
            }

            .col-m-5 {
                width: 41.66%;
            }

            .col-m-6 {
                width: 50%;
            }

            .col-m-7 {
                width: 58.33%;
            }

            .col-m-8 {
                width: 66.66%;
            }

            .col-m-9 {
                width: 75%;
            }

            .col-m-10 {
                width: 83.33%;
            }

            .col-m-11 {
                width: 91.66%;
            }

            .col-m-12 {
                width: 100%;
            }
        }

        @media only screen and (min-width: 768px) {

            /* For desktop: */
            .col-1 {
                width: 8.33%;
            }

            .col-2 {
                width: 16.66%;
            }

            .col-3 {
                width: 25%;
            }

            .col-4 {
                width: 33.33%;
            }

            .col-5 {
                width: 41.66%;
            }

            .col-6 {
                width: 50%;
            }

            .col-7 {
                width: 58.33%;
            }

            .col-8 {
                width: 66.66%;
            }

            .col-9 {
                width: 75%;
            }

            .col-10 {
                width: 83.33%;
            }

            .col-11 {
                width: 91.66%;
            }

            .col-12 {
                width: 100%;
            }

        }

        /* ******* step 4: clear both */
        [class*="col-"] {
            float: left;
            padding: 5px;
        }

        /* ******* step 5: clear both */
        .row::after {
            content: "";
            clear: both;
            display: block;
        }

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
            <!--            9698-->
            <a><span style="font-size:14px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9658;</span></a>
            <a href="index.php" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a>
            <a href="adv_manage.php">Manage Requests</a>
            <a href="#">My Reservations</a>


            <a class="rightuser"><span style="text-decoration: none">&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $_SESSION['email'] ?><span class="glyphicon glyphicon-user"></span> </span></a>
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
    <div style="background-color:white;" class="containers">
     
<h3 style='color: #01477A'>Reservation Requests</h3>

<div class="tab">

  <p style="font-size: 18px"> Your Requests </p>
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

$sql1 = "SELECT * FROM reservation join society on reservation.creator_email=society.adv_email where reservation.adv_email='rain.bese16seecs@seecs.edu.pk'";

$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $approved1 = "Approved";
        echo "
            <tr>
              <td>Rahat Ul Ain</td>
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
