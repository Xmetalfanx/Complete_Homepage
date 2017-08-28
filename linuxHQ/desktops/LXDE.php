<?php

    $localdename = 'lxde';

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDE.tpl";

    $deName = '<a href="http://lxde.org/" target="_blank">LXDE</a>';
    $deFeatured = 'Lubuntu, LXLE';


    // installs
	$installUbuntu = '  apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras';
	$installMint =	'apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras  ';


$title = 'DE/WM Section - LXDE ';


?>
<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
