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

.clear{
	float:left;
}



.table a
{
    display:block;
   
}

a{
	color:black;
	text-decoration:none;
}

a:hover
{
    color:red;
    font-weight: bold;
   
}

#submitbutton
{
	border-top:		2px solid #a3ceda;
	border-left:		2px solid #a3ceda;
	border-right:		2px solid #4f6267;
	border-bottom:		2px solid #4f6267;
	padding:		10px 20px !important;
	font-size:		14px !important;
	background-color:	white;
	font-weight:		bold;
	color:			black;
}

input::-webkit-calendar-picker-indicator {
              opacity: 100;
           }

table.greyGridTable {
  border: 2px solid #FFFFFF;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
  text-decoration:none;
}
tr:nth-child(odd) {
    background-color: #dddddd;

}

tr:nth-child(even) {
    background-color: #f7f4f4;
}
th{
	background-color: #dddddd;
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
            <a href="#home" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a>
            <a href="advisor_managerequests.html">Manage Requests</a>
            <a href="#">My Reservations</a>


            <a class="rightuser"><span style="text-decoration: none">&nbsp; &nbsp;&nbsp;&nbsp; <?php echo $_SESSION['email'] ?><span class="glyphicon glyphicon-user"></span> </span></a>
            <a href="logout.php" class="right"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>








    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <ul style="list-style-type: none">

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Classes <span class="caret"></span></a>
                <ul class="dropdown-menu width">
                    <li><a href="#">CR-1</a></li>
                    <li><a href="#">CR-2</a></li>
                    <li><a href="#">CR-3</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Conference Rooms<span class="caret"></span></a>
                <ul class="dropdown-menu width">
                    <li><a href="#">Faculty block</a></li>
                    <li><a href="#">Innovation Hub</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seminar Hall <span class="caret"></span></a>
                <ul class="dropdown-menu width">
                    <li><a href="#">SEECS</a></li>
                    <li><a href="#">IAEC</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Labs <span class="caret"></span></a>
                <ul class="dropdown-menu width">
                    <li><a href="#">Farabi</a></li>
                    <li><a href="#">Sherazi</a></li>
                    <li><a href="#">Turing</a></li>
                    <li><a href="#">Babbage</a></li>

                </ul>
            </li>
        </ul>
    </div>
    <br />


    <div class="row">

        <div class="col-1 col-m-0"></div>
        <div class="col-9 col-m-9">

            <div style="float:right">
                <button type="submit" style="padding-right: 4px;padding-left: 4px;margin-left:5px; background-color: white;border:2px solid black;">
                    <p style="padding:1px;color: #01477A; font-weight:bold;"><a href="#">Search</a></p>
                </button>
            </div>


            <div class="datediv">
                <input type="date" id="myDate" value="2018-10-31">
            </div>

            <div style="padding: 2px;float: right; ">
                <p style="color: black;">Select a date:&nbsp;&nbsp;</p>
            </div>

            <br />

            <div class="clear"></div>

            <div>
                <center>
                    <table class="greyGridTable">

                        <tr>
                            <th>Time Slot</th>
                            <th>Reservation Status</th>
                            <th> </th>
                        </tr>

                        <tr>
                            <td><a href="advisor_form.html">&nbsp; 09:00 - 10:00</a></td>
                            <td>Available</td>
                            <td><a href="advisor_form.html"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="advisor_form.html">&nbsp; 10:00 - 11:00</a></td>
                            <td>Available</td>
                            <td><a href="advisor_form.html"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 11:00 - 12:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 12:00 - 13:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 13:00 - 14:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 14:00 - 15:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 15:00 - 16:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 16:00 - 17:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 17:00 - 18:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 18:00 - 19:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>
                        <tr>
                            <td><a href="#">&nbsp; 19:00 - 20:00</a></td>
                            <td>Available</td>
                            <td><a href="#"><i style="font-size:18px" class="fa">&#xf274;</i></a></td>
                        </tr>

                    </table>
                </center>
            </div>




        </div>

        <div class="col-2 col-m-0">


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
        <a href="/rahatheader.html">home</a>
    </div>
</body>


</html>
