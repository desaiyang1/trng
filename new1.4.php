<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<style>
	.arecstyles1 {
		font-family:Lucida Handwriting,Monaco,courier,arial,helvetica;
		color:indigo;
		font-size:9px;
		word-wrap:break-word;
	}
	</style>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p class=\"arecstyles1\">there got to be more than that. aREC is a single user mode. YOUR PRIVACY IS IMPORTANT at aREC.</p>";
echo "<img style=\"width:60%;height:auto;\" src=\"records.gif\"></img>";
//echo "<img src=\"lock.gif\"></img>";
?>