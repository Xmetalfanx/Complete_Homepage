<?php

    include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');
    include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/homepage.php');


    $deName = 'KDE';
    $deSShot = $manjaroKDE5 . $suseKDE1 . $antergosKDE1 . $kaosKDE1;
    $deFeatured =  '<ul> 
											<li>' . $mintHP  . '</li>
											<li> '. $fedoraHP . '</li>
											<li>' . $suseHP . '</li>
											
											<li>Kubuntu </li>';
    
    $deReq = ' ';
    $deClass = 'Heavyweight';
    	
    	
    	// installs
	$installUbuntu = 'sudo apt-get install kde-standard OR sudo apt-get install kde-full';
$installMint =	' sudo apt-get install mint-meta-kde';
$installDebian = ' ';
$installArch = ' sudo pacman -S kde OR <br />sudo pacman -S kde-meta<br /> see <a href="https://wiki.archlinux.org/index.php/KDE_Packages " >
								KDE package for the differences</a>';
$installFedora = 'yum install @kde-desktop ';
$installSuse = 'zypper install -t pattern kde4 kde4_basis ';
$installPCLOS = 'sudo apt-get install task-kde4 ';
$installGentoo = ' ';

$title = 'DE/WM Section - KDE4 ';

?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNDE.php"); ?>
