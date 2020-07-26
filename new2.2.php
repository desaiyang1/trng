<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<pre style=\"font-family:Monaco,courier,arial,helvetica;font-size:12px;color:purple;\">your notes ... ...</pre>";
echo "<br>";
echo "<a href=\"shot3.php\" target=\"_top\"><img src=\"records.gif\"></img></a>";
?>