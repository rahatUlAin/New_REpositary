<?php
    require_once "database.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login Portal</title>
	<style>
	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:lavender; 

}

.clear {clear: left;}

.background {
  
  background-image:url("http://www.nust.edu.pk/AboutUs/NUST-at-Glance/PublishingImages/NUST%20at%20a%20glance.jpg");
  height: 130px;
  width:100%; 
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  opacity: 0.5;
  position:absolute;
}

.backgroundoverlay{
  height: 130px;
  width:100%;
  z-index:1;
  position:relative;
}

.logoimg{
   height:110px;
  width:170px;
  position: relative;
  display:block;

}

.logoimg a:hover {
  box-shadow: 3px;

  
}

.logoimg img{
 height:100%;
  width:100%;
 }


.topnav {
  overflow: hidden;
  background-color: #01477A;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://ipwire.com/wp-content/uploads/2018/05/NUST-Logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
 <div class="background"></div>
    <div class="backgroundoverlay">
        <div class="logoimg"  href="#">
            <img src="http://www.seecs.nust.edu.pk/Resources/images/logo.png">
        </div>
    <div class="backgroundHeading" > Room Reservation Portal</div>
    </div>

<div class="clear"></div>

<div class="topnav">
<a href="login.php" class="active">&nbsp;&nbsp;<span class="glyphicon glyphicon-home" aria-hidden="true" style="margin:3px;"></span>Home</a> 
  <a href="about.php">About</a>
</div>
	<div>
		<div class="container-login10" style="margin-top: 50px;margin-left:25%">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr-OYtOQkBVM3aUPvTDiuZybERuzDbnUgEAMyRSTSYxpvpkojA);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				
					<center>
					<div style="padding: 10%">
						<button class="login100-form-btn" onclick="window.location = '<?php echo $loginURL ?>';">
							Login with Domian Account
						</button>
					</div>
					</center>
					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>