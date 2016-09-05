<?php

include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');

    $deName = '<a href="http://lxde.org/" target="_blank">LXDE</a>';
    $deSShot = $lxleSShot1;
    $deFeatured = 'Lubuntu, LXLE';
    $deClass = 'Lightweight';
   
   
    // installs
	$installUbuntu = '  apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras';
	$installMint =	'apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras  ';
	$installDebian = ' ';
	$installArch = ' sudo pacman -S lxde ';
	$installFedora = 'yum install lxde ';
	$installSuse = '<a href="https://en.opensuse.org/LXDE_repositories" >LXDE Repos for Suse</a>   ';
	$installPCLOS = ' ';
	$installGentoo = '  ';

$title = 'DE/WM Section - LXDE ';
	

?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNDE.php"); ?>
