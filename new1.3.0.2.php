<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<style>
.loginform {
	margin-top:3em;
	margin-left:15em;	
	color:black;
	font-family:Monaco,courier,arial,helvetica;
	font-weight:bold;
	text-align:center;
	align:middle;
}
</style>";
//css for div holding the login form
echo "<style>
.forlogindiv {
	background-color:white;
	align:middle;
	width:25em;
	height:16em;
	margin-top:4em;
	margin-left:2em;
	margin-right:auto;
	margin-bottom:auto;
}
</style>";
echo "<div class=\"forlogindiv\">
<form method=\"post\" action=\"new1.3.0.2.php\" target=\"_top\">
<label style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">check your PRIVATE email:</label>
<br>
<br>
<label style=\"margin-top:1em;color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">enter the code you see in your email account:</label>
<input style=\"width:255px;\" name=\"verify\" type=\"text\" required>
<br>
<br>
<label style=\"margin-top:1em;color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">enter mobile phone number:</label>
<input style=\"width:255px;\" name=\"phone\" type=\"text\" required>
<br>
<p style=\"margin-top:1em;color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\"> enter you personal question and answer for future changes to your account such as password, address, etc: </p>
<label style=\"margin-top:1em;color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">question:</label>
<br>
<input style=\"width:255px;\" name=\"question\" type=\"text\" required>
<br>
<label style=\"margin-top:1em;color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">answer:</label>
<br>
<input style=\"width:255px;\" name=\"answer\" type=\"text\" required>
<br>
<br>
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;\" name=\"welcome\" type=\"submit\" value=\"WELCOME\" formAction=\"forshot2.4.php\" target=\"_top\">
</form>";
echo "<style>
.registerNEW {
	color:black;
	font-family:Monaco,courier,arial,helvetica;
	font-weight:bold;
	align:middle;
	font-size:9px;
}
</style>";
echo "</div>";
echo "<img style=\"margin-left:17em;\" src=\"floors.gif\"></img>";
?>