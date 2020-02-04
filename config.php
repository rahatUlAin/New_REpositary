<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("153231444624-t69obookdurt00l3dlf38fjhvjitb7ih.apps.googleusercontent.com");
	$gClient->setClientSecret("1YLQsEji8Lva9DxSFVSvyOcc");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	define("BASE_URL","/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");
	define("DB_HOST","localhost");
	define("DB_NAME","reservation");
	define("DB_PORT","3306"); // default: 3306
	define("DB_USER","root"); // default: root
	define("DB_PASS","");	  //
	date_default_timezone_set('Asia/Karachi');
		?>
