<?php
//adding comments may be useful too .. :)
//author: g
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
$dyn_connect_11 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
$dyn_select_11 = "select * from $d.surface";
$dyn_result_11 = pg_query($dyn_connect_11, $dyn_select_11);
$anyrecords = pg_affected_rows($dyn_result_11);
if (empty($anyrecords)) {
	include 'shot2.php';
}
else {
	//header
	echo "<header>
	<iframe id=\"logo\"
		title=\"logo\"
		width=\"10%\"
		height=\"10%\"	
		frameborder=\"0\"
		src=\"new1.php\"
		scrolling=\"no\">
	</iframe>";
	echo "<iframe id=\"navigation\"
		title=\"navigation\"
		width=\"80%\"
		height=\"10%\"
		frameborder=\"0\"
		src=\"new1.1.php\"
		scrolling=\"no\">
	</iframe>";
	echo "<iframe id=\"photo\"
		title=\"photo\"
		width=\"10%\"
		height=\"10%\"
		frameborder=\"0\"
		src=\"new1.2.1.php\"
		scrolling=\"no\">
	</iframe>
	</header>";
	//
	//topmenus left and right iframes below header
	echo "<article>
	<iframe id=\"lefttopmenus\"
		title=\"menusleft\"
		width=\"48%\"
		height=\"5%\"
		frameborder=\"0\"
		src=\"blank.php\"
		scrolling=\"no\">
	</iframe>
	<iframe id=\"righttopmenus\"
		title=\"menusleft\"
		width=\"48%\"
		height=\"5%\"
		frameborder=\"0\"
		src=\"new2.1.4.php\"
		scrolling=\"no\">
	</iframe>
	</article>";
	//topmenus left and right iframes below header
	//
	//leftframe
	echo "<iframe id=\"leftside\"
		title=\"leftside\"
		width=\"48%\"
		height=\"75%\"
		frameborder=\"0\"
		src=\"new2.0.1.php\"
		scrolling=\"no\">
	</iframe>";
	//rightframe
	echo "<iframe id=\"rightside\"
		title=\"rightside\"
		width=\"50%\"
		height=\"75%\"
		frameborder=\"0\"
		src=\"new2.1.php\"
		overflow-x=\"hidden\"
		overflow-y=\"scroll\"
		scrolling=\"yes\">
	</iframe>";
	//article
	echo "<article>
	<iframe id=\"photo\"
		title=\"photo\"
		width=\"48%\"
		height=\"5%\"
		frameborder=\"0\"
		src=\"blank.php\"
		scrolling=\"no\">
	</iframe>
	<iframe id=\"photo\"
		title=\"photo\"
		width=\"48%\"
		height=\"5%\"
		frameborder=\"0\"
		src=\"new1.12.php\"
		scrolling=\"no\">
	</iframe>
	</article>";
	//footer
	echo "<footer>
	<iframe id=\"footer\"
		title=\"footer\"
		width=\"100%\"
		height=\"5%\"
		frameborder=\"0\"
		src=\"footer.php\"
		scrolling=\"no\">
	</iframe>
	</footer>";
}
?>
