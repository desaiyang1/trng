<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if ($exact_id > 0) {
	//display top menus for left iframe
	echo "<style>
	.topbars {
		margin-left:3px;
	}
	</style>";
	echo "<form method=\"post\" action=\"new2.1.4.php\" target=\"_top\">
	<input type=\"submit\" name\"finishedsurfaces\" value=\"finished surfaces\" formaction=\"shot7.1.php\" target=\"_top\">
	<input class=\"topbars\" type=\"submit\" name\"surfacing\" value=\"surfacing\" formaction=\"shot3.php\" target=\"_top\">
	<input class=\"topbars\" type=\"submit\" name=\"showmydoc\" value=\"show my doc\" formaction=\"shot3.6.php\" target=\"_top\">
	<input class=\"topbars\" type=\"submit\" name=\"search\" value=\"search\" formaction=\"shot3.6.php\" target=\"_top\">
	</form>";	
}
?>