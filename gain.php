<?php
//gain.php
//author:g
//gain.php is the first page in trng website. gain.php consists of 6 iframes.
//------------------------------------------------------------------------------
//WIDTH(10%)	|(80%)						|(10%)
//HEIGHT(10%)	|(10%)						|(10%)
//logo 		|main menus					|lock
//(new1.php)	|(new1.1.php)					|(new1.2.1.php)
//iframe 1	|iframe 2					|iframe 3
//--------------|-----------------------------------------------|----------------
//MAIN CONTENT LEFT		 | MAIN CONTENT RIGHT			|
//WIDTH(48%) HEIGHT(75%)	 | WIDTH(48%) HEIGHT(75%)		|
//				 |					|
//				 |					|
//				 |					|
//iframe number 4 (new1.4.php)	 | iframe number 5 (new1.3.php)		|
//				 |					|
//				 |					|
//				 |					|
//-------------------------------------------------------------------------------				
//iframe number 6
//footer (5% x 5%)
//(footer.php)
//-------------------------------------------------------------------------------

session_start();
//header
echo "<header>
<iframe id=\"iframe1\"
    title=\"iframe1\"
    width=\"10%\"
    height=\"10%\"	
    frameborder=\"0\"
    src=\"new1.php\"
    scrolling=\"no\">
</iframe>";
//remember width 10% 
//iframe in html is the tag to reserver a block of browser segment to show personalized data to the user.
echo "<iframe id=\"iframe2\"
    title=\"iframe2\"
    width=\"80%\"
    height=\"10%\"
    frameborder=\"0\"
    src=\"new1.1.php\"
    scrolling=\"no\">
</iframe>";
echo "<iframe id=\"iframe3\"
    title=\"iframe3\"
    width=\"10%\"
    height=\"10%\"
    frameborder=\"0\"
    src=\"new1.2.1.php\"
    scrolling=\"no\">
</iframe>
</header>";
//leftframe - main content
echo "<iframe id=\"iframe4\"
    title=\"iframe4\"
    width=\"48%\"
    height=\"85%\"
    frameborder=\"0\"
    src=\"new1.4.php\"
    scrolling=\"no\">
</iframe>";
//rightframe - main content
echo "<iframe id=\"iframe5\"
    title=\"iframe5\"
    width=\"48%\"
    height=\"85%\"
    frameborder=\"0\"
    src=\"new1.3.php\"
    scrolling=\"no\">
</iframe>";
//footer
echo "<footer>
<iframe id=\"iframe6\"
    title=\"iframe6\"
    width=\"100%\"
    height=\"5%\"
    frameborder=\"0\"
    src=\"footer.php\"
    scrolling=\"no\">
</iframe>
</footer>";
?>