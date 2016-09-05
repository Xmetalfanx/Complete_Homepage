<?php
    include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');

    $deName = '<a href="http://www.xfce.org/" target="_blank">XFCE</a>';
    $deSShot =  $manjaroXFCE1;
    $deFeatured =  $mintHP . 'Manjaro XFCE, Manjaro by MM, Manjaro COL Edition, Xubuntu, SoyldX, Uberstudent';
     $deReq = ' ';
	 $deClass = 'Lightweight';



	// installs
	$installUbuntu = 'sudo apt-get install xfce4 xfce4-goodies';
$installMint =	'sudo apt-get install mint-meta-xfce xfce4-goodies'; 
$installDebian = ' ';
$installArch = 'sudo pacman -S xfce4 xfce-goodies ';
$installFedora = ' ';
$installSuse = ' ';
$installPCLOS = ' ';
$installGentoo = 'yum install @xfce-desktop ';

$title = 'DE/WM Section - XFCE ';

?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNDE.php"); ?>
