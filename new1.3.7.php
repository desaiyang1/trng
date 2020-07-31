<?php
session_start(); 	
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
$logsid = $_SESSION['logsid'];
echo "<br>";
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
echo "<style>
.support {
	color:black;
	font-family:Monaco,courier,arial,helvetica;
	font-weight:bold;
	align:middle;
	font-size:9px;
}
</style>";
//main code 
echo "<div class=\"forlogindiv\">";
echo "<p style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:15px;\">enter new password:</p>";
echo "<form method=\"post\" action=\"new1.3.7.php\" target=\"_top\">
<input style=\"width:255px;\" name=\"poem1\" type=\"password\" required>
<p style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:15px;\">verify street address:</p>
<input style=\"width:255px;height:50px;\" name=\"street1\" type=\"text\" required>
<br>
<br>
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;margin-left:3px;\" name=\"cancel\" type=\"submit\" value=\"CANCEL\" formAction=\"shot2.1.04.php\" target=\"_top\">
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;margin-left:10px;\" name=\"pccontinue\" type=\"submit\" value=\"CONTINUE\" formAction=\"forshot2.1.05.php\" target=\"_top\">
<br>
<br>
<br>
<a class=\"support\" href=\"shot2.2.4.php\" target=\"_top\">support</a>
</div>
</form>";
echo "</div>";
echo "<img style=\"margin-left:17em;\" src=\"floors.gif\"></img>";
?>