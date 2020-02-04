<?php
	require_once "config.php";
	
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];
	 if(isset($_SESSION['email'])){
    	$email=$_SESSION['email'];
     	if(!substr_compare($email, '@seecs.edu.pk', strlen($email)-strlen( '@seecs.edu.pk'), strlen( '@seecs.edu.pk')) === 0){
    		echo "<script type='text/javascript'>alert('Not in Domain');</script>";
         	header('Location: logout.php');
        	exit();
         }
     }
	header('Location: index.php');
	exit();
?>