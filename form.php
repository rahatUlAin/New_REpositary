<!doctype html>
<?php   //session_start();
    require "database.php";?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
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
    <!--===============================================================================================-->
    <style>
        .logoimg {
            height: 110px;
            width: 170px;
            position: relative;
            display: block;

        }

        .logoimg a:hover {
            box-shadow: 3px;


        }

        .logoimg img {
            height: 100%;
            width: 100%;
        }

        .rightuser {
            position: absolute;
            right: 110px;
            font-size: 16px;
            color: white;
            padding: 14px 16px;
        }

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
        
 
.datediv{
  border:2px solid black;
  float: right;
  font-weight:bold;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #01477A;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #003256;
}

.containers {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.col1-25 {
    float: right;
    width: 25%;
    margin-top: 6px;
}
.row1:after {
  align-self: left;
    content: "";
    display: table;
   
}
.button
{
  width: 100px;
  text-align: left;
  margin:0 auto;

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

    </style>
</head>

<body>
    <div class="background"></div>
    <div class="backgroundoverlay">
        <div class="logoimg" style="float:left; display: inline-block" href="#">
            <img src="http://www.seecs.nust.edu.pk/Resources/images/logo.png">
        </div>

    </div>
    <div style="clear: both;"></div>
    <div class="row">

        <div class="topnav" id="myTopnav">
            <!--            9698-->
            <a><span style="font-size:14px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9658;</span></a>
            <a href="index.php" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a>
            <a href="st_req.php">Reservations</a>
            <a href="contact.php">Contact</a>

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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "reservation";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//if reserve was clicked

if (isset($_POST['reserve'])){
    
    $name=$_POST['name'];
    $room=$_POST['room'];
    $society=$_POST['society'];
    $reason=$_POST['reason'];
    $date=$_POST['date'];
    $to=$_POST['to'];
    $from=$_POST['from'];
    
    
    $query="INSERT INTO `reservation` (`room`,`society`,`reason`,`date`,`begin`,`end`) VALUES (:room,:society,:reason,:datee,:to,:fromm)";
    $args = [
            ':room' => $room,
            ':society' => $society,
            ':reason' => $reason,
            ':datee' => $date,
            ':to' => $to,
            ':fromm' => $from];
    
    //insert the new record into the database
    $res = $db->prepare($query);
    $res->execute($args);
            
   

// if (isset($_POST['reserve'])){
    
//     $name=$_POST['name'];
//     $room=$_POST['room'];
//     $society=$_POST['society'];
//     $reason=$_POST['reason'];
//     $date=$_POST['date'];
//     $to=$_POST['to'];
//     $from=$_POST['from'];


//     $conn->query("INSERT INTO reservation (room,society,reason,`date`,`begin`,`end`,adv_email) VALUES ($room,$society,$reason,$date,$to,$from)");
   

// } 

}

?>
    <div class="container">


        <!-- Modal -->


        <div class="containers" >
            <h1 align="center">Reservation Request Form</h1>
            <form name="res_form" action="form.php" method="post">
                <div class="row">
                    <div class="col-25">

                        <label for="fname">Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="name" placeholder="Enter name" required="required">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-25">
                        <label for="Room">Room:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="room" name="room" required="required">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="Room">Society Name:</label>
                    </div>
                    <div class="col-75">
                        <select id="Society" name="society" required="required">
                            <option value="IEEE">IEEE</option>
                            <option value="SGA">SGA</option>
                            <option value="YES">YES</option>
                            <option value="CSP">CSP</option>
                            <option value="ACM">ACM</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="subject">Reason</label>
                    </div>
                    <div class="col-75">
                        <textarea id="reason" name="reason" placeholder="Write something.." style="height:100px" required="required"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="From" >Date:</label>
                    </div>
                    <div class="col-75">
                        <div id="myForm" float="left">
                            <input type="date" name="date" id="date" required="required">
                        </div>

                <div class="row">
                    <div class="col-25">
                        <label for="From">From:</label>
                    </div>
                    <div class="col-75">
                        <div id="myForm" float="left">
                            <input type="time" name="from" id="myDate" required="required">
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="To">TO:</label>
                    </div>
                    <div class="col-75">
                        <div id="myForm" float="left">
                            <input type="time" name="to" id="myDate" required="required">
                        </div>

                    </div>
                </div>
                <!-- <script type="text/javascript">
                    function conf() {
                        var con = confirm("Do you really want to reserve?");
                    }

                </script> -->

                <div class="row">
                    
                    <input type="submit" name="reserve" value="Request" style="margin:0% 45% 5% 0%;">
                    

                </div>

            </form>

        </div>
    </div>


    <!--
    <script src="/js/imageMapResizer.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $("map").imageMapResize();
        });

    </script>
-->



    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap-3.3.7.js"></script>



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

    </script>




    <div class="footer">
        <a href="/index.php">home</a>
    </div>
</body>


</html>
