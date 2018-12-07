<?php

	$sectionTitle = "Destop Envirnoments - ";
	$pageTitle = 'Gnome Shell ';

	echo '<script type="text/javascript">';
		echo 'var localDEName = "gnomeshell"; ';
	echo '</script>';

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>