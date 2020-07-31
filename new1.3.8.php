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
$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
$dyn_select_1 = "select arec_id from dyncould.arec_account_details where (private_account_email='$email')";
$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
$account_fetch_1 = pg_fetch_row($dyn_result_1);
$arec_id_1 = $account_fetch_1[0];
//getting question_1 using arec_id.
$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
$dyn_select_2 = "select question_1 from dyncould.arec_smart where arec_id='$arec_id_1'";
$dyn_result_2 = pg_query($dyn_connect_2, $dyn_select_2);
$account_fetch_2 = pg_fetch_row($dyn_result_2);
$question_1_2 = $account_fetch_2[0];
echo "<div class=\"forlogindiv\">"; 
echo "<p style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:15px;\">re-enter new password:</p>";
echo "<form method=\"post\" action=\"new1.3.8.php\" target=\"_top\">
<input style=\"width:255px;\" name=\"poem2\" type=\"password\" required>
<br>
<p style=\"margin-top:1em;color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:15px;\">$question_1_2</p>
<input style=\"width:255px;\" name=\"answer2\" type=\"text\" required>
<br>
<br>
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;margin-left:3px;\" name=\"cancel\" type=\"submit\" value=\"CANCEL\" formAction=\"shot2.1.04.php\" target=\"_top\">
<input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;margin-left:10px;\" name=\"pccontinue\" type=\"submit\" value=\"CONTINUE\" formAction=\"forshot2.1.06.php\" target=\"_top\">
<br>
<br>
<br>
<a class=\"support\" href=\"shot2.2.4.php\" target=\"_top\">support</a>
</div>
</form>";
echo "<img style=\"margin-left:17em;\" src=\"floors.gif\"></img>";
?>