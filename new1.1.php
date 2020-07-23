<?php
//file:new1.1.php
//author:g
//this file is for main menus - class, todos, trng, issues
//used in gain.php 
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if ($exact_id > 0) {
	echo "<style>
	.topics1 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:indigo;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics2 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:orange;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics3 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:yellow;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics4 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:gold;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics5 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:purple;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<div class=\"topics1\">
	<a href=\"shot2.php\" style=\"color:white;\" target=\"_top\">class</a>
	</div>";
	echo "<div class=\"topics2\">
	<a href=\"shot4.php\" style=\"color:white\" target=\"_top\">todos</a>
	</div>";
	echo "<div class=\"topics3\">
	<a href=\"shot6.0.1.php\" style=\"color:white\" target=\"_top\">trng</a>
	</div>";
	echo "<div class=\"topics4\">
	<a href=\"shot12.php\" style=\"color:white\" target=\"_top\">issues</a>
	</div>";
	echo "<div class=\"topics5\">
	<a href=\"shot13.php\" style=\"color:white\" target=\"_top\">about</a>
	</div>";
}
else {	
	echo "<style>
	.topics1 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:indigo;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics2 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:orange;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics3 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:yellow;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics4 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:gold;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<style>
	.topics5 {
		font-family:Monaco,courier,arial,helvetica;
		color:white;
		font-weight:bold;
		font-size:30px;
		background-color:purple;
		float:left;
		text-align:center;
		text-align:middle;
		margin-right:2px;
		width:6em;
		height:2em;
	}
	</style>";
	echo "<div class=\"topics1\">
	<a href=\"noshot2.php\" style=\"color:white;\" target=\"_top\">class</a>
	</div>";
	echo "<div class=\"topics2\">
	<a href=\"noshot4.php\" style=\"color:white\" target=\"_top\">todos</a>
	</div>";
	echo "<div class=\"topics3\">
	<a href=\"noshot6.php\" style=\"color:white\" target=\"_top\">trng</a>
	</div>";
	echo "<div class=\"topics4\">
	<a href=\"noshot12.php\" style=\"color:white\" target=\"_top\">issues</a>
	</div>";
	echo "<div class=\"topics5\">
	<a href=\"noshot13.php\" style=\"color:white\" target=\"_top\">about</a>
	</div>";	
}
?>