<!doctype html>
<?php

	//session_start();
	require_once "database.php";
	if(isset($_SESSION['email'])){
    	$email=$_SESSION['email'];
		$domain="@seecs.edu.pk";
    	if(substr_compare($email,$domain , strlen($email)-strlen( $domain), strlen( $domain)) === 0){
    		$query="SELECT * FROM user WHERE email like :emailAdd";
    		$qadv="SELECT * FROM society WHERE adv_email like :emailAdd";
	        $args = [
	            ':emailAdd' => $email];
	        $res= $db->prepare($query);
	        $res->execute($args);
	        $result = $res->fetch(PDO::FETCH_ASSOC);
	        $resource= $db->prepare($qadv);
	        $resource->execute($args);
	        $results = $resource->fetch(PDO::FETCH_ASSOC);
	    	if($result['is_coor']){
	    		$_SESSION['is_coor']=1;

	    		}
	    	if($results['adv_email']){
	    		$_SESSION['is_adv']=1;

	    		}	
	    	}
	    	
	    
    	else{
    		echo "<script type='text/javascript'>alert('Not in Domain');window.location = 'logout.php';</script>";
        	//header('Location: logout.php');
        	//exit();
        }
    }
    
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
    <script src=https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js> </script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
            <a href="st_req.php">Reservations</a>
            <a href="contact.php">Contact</a>

            <a class="rightuser"><span style="text-decoration: none">&nbsp; &nbsp;&nbsp;&nbsp; <?php echo $_SESSION['email'] ?><span class="glyphicon glyphicon-user"></span> </span></a>
            <a href="<?php  echo 'logout.php';?>" class="right"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
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


    <div class="row">

        <div class="col-2 col-m-0"></div>
        <div class="col-5 col-m-9">

            <div class="slideshow-container">

                <div class="mySlides">

                    <img src="images/map.png" id="map-1" alt="" style="width:  694px; max-width: 100%; height: auto;" usemap="#map">
                    
                    <?php
                    
                    echo "<map name=\"map\">";
					echo "<area shape='poly' coords='163, 202, 230, 261, 183, 297, 118, 243' href='room.php?ID=".'DSP LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"632, 106, 678, 144, 636, 181, 589, 141\" href='room.php?ID=".'CR 3'."'/>";
					echo "<area shape=\"poly\" coords=\"570, 50, 620, 89, 573, 126, 528, 85\" href='room.php?ID=".'CR 4'."'/>";
					echo "<area shape=\"poly\" coords=\"588, 146, 633, 187, 586, 222, 540, 182\" href='room.php?ID=".'CR 2'."'/>";
					echo "<area shape=\"poly\" coords=\"522, 90, 568, 131, 527, 169, 482, 129\" href='room.php?ID=".'CR 5'."'/>";
					echo "<area shape=\"poly\" coords=\"513, 206, 557, 249, 491, 299, 445, 259\" href='room.php?ID=".'CR 1'."'/>";
					echo "<area shape=\"poly\" coords=\"415, 183, 462, 223, 435, 247, 388, 205\" href='room.php?ID=".'CR 7'."'/>";
					echo "<area shape=\"poly\" coords=\"451, 153, 497, 194, 466, 220, 417, 179\" href='room.php?ID=".'CR 6'."'/>";
					echo "<area shape=\"poly\" coords=\"45, 101, 136, 179, 93, 220, 0, 137\" href='room.php?ID=".'EMS LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"227, 152, 290, 207, 244, 244, 183, 192\" href='room.php?ID=".'Digital Embedded LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"155, 163, 199, 123, 113, 45, 66, 85\" href='room.php?ID=".'Control System LAB'."'/>";
					echo "</map>";
                    ?>
                </div>
                <div class="mySlides">
                    <img src="images/map2.png" id="map-2" alt="" style="width: 643px; max-width: 100%; height: auto;" usemap="#map2">
					<?php
					echo "<map name=\"map2\">\n";
					echo "<area shape=\"poly\" coords=\"347, 224, 374, 198, 406, 244, 376, 268\" href='room.php?ID=".'CR 8'."'/>";
					echo "<area shape=\"poly\" coords=\"414, 164, 444, 210, 410, 240, 378, 194\" href='room.php?ID=".'CR 9'."'/>";
					echo "<area shape=\"poly\" coords=\"390, 287, 416, 258, 452, 302, 417, 329\" href='room.php?ID=".'CR 11'."'/>";
					echo "<area shape=\"poly\" coords=\"453, 229, 483, 273, 454, 301, 419, 255\" href='room.php?ID=".'CR 10'."'/>";
					echo "<area shape=\"poly\" coords=\"574, 122, 608, 173, 565, 209, 530, 160\" href='room.php?ID=".'CR 13'."'/>";
					echo "<area shape=\"poly\" coords=\"530, 168, 561, 211, 511, 251, 480, 205\" href='room.php?ID=".'CR 12'."'/>";
					echo "<area shape=\"poly\" coords=\"445, 145, 473, 188, 515, 149, 486, 107\" href='room.php?ID=".'CR 15'."'/>";
					echo "<area shape=\"poly\" coords=\"540, 63, 568, 109, 521, 146, 492, 101\" href='room.php?ID=".'CR 14'."'/>";
					echo "<area shape=\"poly\" coords=\"103, 79, 129, 120, 185, 73, 154, 31\" href='room.php?ID=".'Babbage LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"89, 92, 148, 181, 96, 222, 36, 128\" href='room.php?ID=".'gpl LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"231, 155, 272, 215, 220, 260, 181, 198\" href='room.php?ID=".'Sherazi LAB'."'/>";
					echo "<area shape=\"poly\" coords=\"164, 209, 206, 274, 151, 317, 112, 252\" href='room.php?ID=".'Farabi LAB'."'/>";
					echo "</map>";

					?>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

        <div class="col-4 col-m-12">

            <!-- <div class="card text-center pop" id="cr12">
                <div class="card-header" id="Wiget" style="background-color: #000000;color: white">
                    Availability
                </div>
                <div class="card-body">
                    <h2 class="card-title">
                        <div class="notice notice-success"><strong>Available</strong></div>
                    </h2>
                    <p class="card-text">Will be occupied in 1 hour</p>

                    <h5>CR 12</h5>
                    <p><span id="date"></span></p>
                    <p><span id="time"></span></p>
                    <a href="room.html" class="btn btn-primary" style="background-color: dimgray;border-color:dimgrey ;padding: 0.5em 5em; ">Reserve</a>
                </div> -->

            </div>
        </div>
        <div class="col-1 col-m-0"></div>


    </div>



    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="/js/imageMapResizer.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $("map").imageMapResize();
        });

    </script>



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

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap-3.3.7.js"></script>

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
