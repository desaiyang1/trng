<?php
session_start();
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
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
//leftframe
echo "<iframe id=\"leftside\"
    title=\"leftside\"
    width=\"48%\"
    height=\"85%\"
	frameborder=\"0\"
	src=\"new1.4.php\"
	scrolling=\"no\">
</iframe>";
echo "<iframe id=\"rightside\"
    title=\"rightside\"
    width=\"48%\"
    height=\"85%\"
	frameborder=\"0\"
	src=\"new1.3.0.1.1.php\"
	scrolling=\"no\">
</iframe>";
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
?>
