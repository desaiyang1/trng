<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if ($exact_id > 0) {	
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
	.forpaying {
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
	echo "<style>
	.surface {
		color:black;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
	}
	</style>";
	echo "<style>
	.fnshdsurface {
		color:black;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.namelabel {
		color:black;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.nameinput {
		background-color:black;
		color:aqua;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		width:255px;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.namelabel {
		color:black;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.cardnumber {
		background-color:black;
		color:aqua;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		width:255px;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.cardexpiration {
		background-color:black;
		color:aqua;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		width:255px;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.securitycode {
		background-color:black;
		color:aqua;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		width:255px;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.addressinput {
		background-color:black;
		color:aqua;
		font-family:Monaco,courier,arial,helvetica;
		font-weight:bold;
		font-size:13px;
		text-decoration:none;
		width:255px;
		height:50px;
		margin-left:5px;
	}
	</style>";
	echo "<style>
	.fortabledefinition {
		font-family:Monaco,courier,arial,helvetica;
		color:black;
		font-weight:bold;
		font-size:13px;
		width:265px;
	}
	</style>";
	echo "<style>
	.fortabledefinition1 {
		font-family:Monaco,courier,arial,helvetica;
		color:black;
		font-weight:bold;
		font-size:13px;
		width:265px;
		height:50px;
	}
	</style>";
	//main code
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select * from private_accounts where private_account_email='$email'";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_rows = pg_fetch_row($dyn_result_1);
	echo "<form method=\"post\" action=\"new1.3.3.php\" target=\"_top\">
	<div class=\"forpaying\">
	<p style=\"color:green;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:14px;\">cost $330.00</p>
	<p style=\"color:crimson;font-family:Monaco,courier,arial,helvetica;font-weight:bold;font-size:15px;\">your private ACCOUNT details ... </p>
	<table><tr>
	<td class=\"fortabledefinition\"><label class=\"namelabel\" name=\"name\">your name</label></td>
	<td class=\"fortabledefinition\"><input class=\"nameinput\" type=\"text\" name=\"yourname\" required></td>
	</tr></table>
	<table><tr>
	<td class=\"fortabledefinition\"><label class=\"paylabel\" name=\"name\">payment card details</label></td>
	</tr></table>
	<table><tr>
	<td class=\"fortabledefinition\"><label class=\"namelabel\" name=\"number\">card number</label></td>
	<td class=\"fortabledefinition\"><input class=\"cardnumber\" type=\"text\" name=\"cardnumber\" required></td>
	</tr></table>
	<table><tr>
	<td class=\"fortabledefinition\"><label class=\"namelabel\" name=\"expiration\">expiration date</label></td>
	<td class=\"fortabledefinition\"><input class=\"cardexpiration\" type=\"text\" name=\"cardexpiration\" required></td>
	</tr></table>
	<table><tr>
	<td class=\"fortabledefinition\"><label class=\"namelabel\" name=\"security code\">security code</label></td>
	<td class=\"fortabledefinition\"><input class=\"securitycode\" type=\"text\" name=\"securitycode\" required></td>
	</tr></table>
	<table><tr>
	<td class=\"fortabledefinition1\"><label class=\"namelabel\" name=\"address\">address</label></td>
	<td class=\"fortabledefinition1\"><input class=\"addressinput\" type=\"text\" name=\"address\" required></td>
	</tr></table>
	<table><tr>
	<td><input style=\"background-color:darkgreen;color:ghostwhite;text-shadow:white 1px 1px;font-family:Monaco,courier,arial,helvetica;font-size:11px;font-weight:bold;text-align:center;align:middle;\" name=\"pay\" type=\"submit\" value=\"PAY\" formAction=\"forshot2.1.0.3.php\" target=\"_top\"></td>
	</tr></table>
	<br>
	<a class=\"support\" href=\"shot2.2.4.php\" target=\"_top\">support</a>
	</div>
	</form>";
	echo "<img style=\"margin-left:17em;\" src=\"floors.gif\"></img>";
}
?>
