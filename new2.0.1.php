<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<br>";
echo "<style>
.topics5 {
	font-family:Monaco,courier,arial,helvetica;
	color:white;
	font-weight:bold;
	font-size:15px;
	background-color:indigo;
	clear:both;
	text-align:center;
	margin-left:2em;	
	margin-top:3em;
	width:500px;
	height:200px;
}
</style>";
echo "<style>
.topics6 {
	font-family:Monaco,courier,arial,helvetica;
	color:white;
	font-weight:bold;
	font-size:20px;
	background-color:indigo;
	float:left;
	text-align:center;
	margin-left:5em;
}
</style>";
echo "<form class=\"topics5\" method=\"post\" action=\"new2.php\" target=\"_top\">
<label style=\"font-family:Lucida Handwriting,Monaco,courier,arial,helvetica;font-size:20px;\">surfacing...</label>
<code><textarea style=\"margin-right:4px;width:450;height:150;background-color:black;font-size:18px;font-family:Lucida Handwriting,Monaco,courier,arial,helvetica;color:white;\" name=\"surfacing\"></textarea></code><br>
<br>
<br>
<br>
<input class=\"topics6\" name=\"clear\" type=\"submit\" value=\"clear\" formaction=\"shot3.php\" target=\"_top\">
<input class=\"topics6\" name=\"keep\" type=\"submit\" value=\"keep\" formaction=\"forshot3.php\" target=\"_top\">
<br>
</form>";
?>