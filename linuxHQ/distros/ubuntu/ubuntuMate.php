<?php

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	$distroSshot = '<a href="/linuxHQ/screenshots/ubuntubased/umate1.jpg">
			<img src="/linuxHQ/screenshots/ubuntubased/umate1.png" alt="Ubuntu Mate Screenshot"/></a>';
	$pageTitle = 'Ubuntu Mate';

	echo '<script type="text/javascript">';
		echo 'var localDistroName = "umate"; ';
	echo '</script>';

?>