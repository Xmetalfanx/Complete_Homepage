<?php

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	$pageTitle = 'Debian';
	echo '<script type="text/javascript">';
		echo 'var localDistroName = "debian"; ';
	echo '</script>';


	$download = '<a href="http://www.debian.org/distrib/ftplist" target="_blank">http://www.debian.org/distrib/ftplist</a> <br />
      <a href="http://www.debian.org/CD/" target="_blank">Debian on CD</a> ';

?>