<?php
//new1.3.php
//author:g
//file for login and register. upload in dyncould/trng cloud storage to see you own website changes. please contact dynCOULD contact if your environment is having any issues.
session_start();
echo "<br>";
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
//main code
echo "<div class=\"forlogindiv\">";
echo "<p style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">
	private ACCOUNT login </p>";
echo "<form method=\"post\" action=\"new1.3.php\" target=\"_top\">
<label style=\"color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:13px;\"> id:</label>
<input style=\"width:255px;margin-left:31px;\" name=\"email\" type=\"text\" required>
<br>
<br>
<label style=\"color:black;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:13px;\"> secret:</label>
<input style=\"width:255px;height:50px;\" name=\"poem\" type=\"password\" required>
<br>
<br>
<br>
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;\" name=\"login\" type=\"submit\" value=\"LOGIN\" formAction=\"forshot2.1.php\" target=\"_top\">
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
echo "<a class=\"registerNEW\" href=\"shot2.2.php\" target=\"_top\">register NEW</a>";
echo "</div>";
echo "<img style=\"margin-left:17em;\" src=\"floors.gif\"></img>";
$newvariable 
?>