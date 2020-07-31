<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if ($exact_id > 0) {
	echo "<style>
	.logo {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:red;
		float:none;
		text-align:center;
		width:4em;
		height:1.05em;
		display:block;
		margin-left:auto;
		margin-right:auto;
		margin-top:auto;
		margin-bottom:auto;
		text-decoration:none;
	}
	</style>";
	echo "<style>
	.lock {
		font-family:Monaco,courier,arial,helvetica;
		color:aqua;
		font-weight:bold;
		font-size:10px;
		background-color:red;
		text-align:right;
	}
	</style>";
	echo"<a class=\"lock\" href=\"copyright.php\" target=\"_top\">copyright</a>";
}
else {
	echo "<div class=\"lock\"><a href=\"copyright.php\" target=\"_top\">copyright</a></div";	
}
?>