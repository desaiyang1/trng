<?php
//file: new1.php
//author: g
//notes: this file shows the logo using html, css, and php. there are no database code in this file. session_start is used to keep the session active until the user logs out. email, exact_id, schema are session variables that will be created when the user enters username and password which will be explained in the next upcoming steps of this project.so you will understand why I need all these in session and how these session variables are created.
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if ($exact_id > 0) {		// in future this will be updated to have more checks.
	echo "<style>
	.logo {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:20px;
		background-color:red;
		float:none;
		text-align:center;
		width:8.30em;
		height:1.30em;
		text-decoration:none;
	}
	</style>";
	//note - file used nolock.php
	echo"<a class=\"logo\" href=\"nolock.php\" target=\"_top\">dynCOULD</a>";
}
else {			//if the user is  not logged in the below code will be displayed.
	echo "<style>
	.logo {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:20px;
		background-color:red;
		float:none;
		text-align:center;
		width:8.30em;
		height:1.30em;
		text-decoration:none;
	}
	</style>";
	//note - file used gain.php
	echo"<a class=\"logo\" href=\"gain.php\" target=\"_top\">dynCOULD</a>";				
}
?>