<?php

include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');
include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/homepage.php');


    $deName = 'Openbox';
    $deSShot = '';
    $deFeatured = 'Archbang, Crunchbang';
	$deClass = 'Lightweight'; 

   // installs
    $installUbuntu = 'sudo apt-get install openbox';
    $installMint =	'sudo apt-get install openbox';
    $installDebian = ' ';
    $installArch = 'sudo pacman -S openbox ';
    $installFedora = 'yum install openbox ';
    $installSuse = 'zypper install openbox ';
    $installPCLOS = '';
    $installGentoo = ' ';

    $title = 'DE/WM Section - KDE4 ';


?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNDE.php"); ?>
