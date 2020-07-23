<?php
//file:new1.2.1.php
//author:g
//this file is used to display a submit button on the right most segment of the header in gain.php. this is also 10% x 10% dimension. no dbcode yet.file is simple - uses html form and coded to take data (this case, just a click on button called "lock" - user input). when clicked the html form code takes the http flow using post method to another file called areclock.php and output of this click is shown in the top which means it takes the entire webpage and changes the content instead of just a part of the web page.
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<style>
.forlock {
	font-family:Monaco,courier,arial,helvetica;
	color:red;
	font-size:20px;
	text-align:center;
}
</style>";
echo "<form method=\"post\" action=\"new1.2.1.php\" target=\"_top\">
<input class=\"forlock\" type=\"submit\" name=\"lock\" value=\"lock\" formaction=\"areclock.php\" target=\"_top\">
</form>";
?>