<?php
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
echo "<div class=\"forlogindiv\">
<form name=\"click\" method=\"post\" action=\"new1.3.0.1.php\" target=\"_top\">
<label style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">enter PRIVATE email:</label>
<br>
<br>
<input style=\"width:255px;\" name=\"email\" type=\"email\" required>
<br>
<br>
<br>
<label style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:12px;\">enter POEM password:</label>
<br>
<br>
<input style=\"width:255px;height:50px;\" name=\"poem\" type=\"password\" required>
<br>
<br>
<br>
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;\" name=\"register\" type=\"submit\" value=\"REGISTER\" formAction=\"forshot2.2.1.php\" target=\"_top\">
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