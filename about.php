<!doctype html>
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
            <a href="login.php" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a>
            <a href="#about">About</a>
            
            <a href="login.php" class="right"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>




    <div class="row">
        <div class="col-3 col-m-0"></div>
        <div class="col-6 col-m-12">

   <div class="card text-center ">
                <div class="card-header" id="Wiget" style="background-color: #ddd;color: #000">
                    Room Reservation Portal For Social Bodies
                </div>
                <div class="card-body">
                    <h2 class="card-title">&nbsp;
                    </h2>
                    <p class="card-text">This Portal is for social Bodies to solve their problems. National University of Sciences and Technology, Pakistan has been ranked 51st on the list of fastest growing universities under the age of 50 (2019). With such an immense honor under our name, we wish to put our university on the top of the list. Being a student of NUST, we have firsthand experience of all the difficulties the students face during their campus lives. So this portal provide solutions and services for online booking. This online portal for a campus room reservation  reliefs students and faculty by automating the procedure. The portal is a secure and efficient way of booking halls and rooms. </p>

                </div>

            </div>
        </div>
                <div class="col-3 col-m-0"></div>

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
