<?php

	 $the_title = '- Browser Section ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";

?>
	
<?php 

	echo "Download Related Addons: "; 
	include $sitePath . '/techHQ/modules/database/browserDownloadAddons.php'; 

?>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
