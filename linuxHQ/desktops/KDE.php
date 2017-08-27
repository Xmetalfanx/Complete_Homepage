<?php

    $localdename = "plasma5";

    // Old Info
    $deName = 'KDE';
    $deFeatured =  '<ul>
											<li>' . $mintHP  . '</li>
											<li> '. $fedoraHP . '</li>
											<li>' . $suseHP . '</li>

											<li>Kubuntu </li>';


    	// installs
	$installUbuntu = 'sudo apt-get install kde-standard OR sudo apt-get install kde-full';

  $installMint =	' sudo apt-get install mint-meta-kde';
  $installDebian = ' ';

  $installArch = ' sudo pacman -S kde OR <br />sudo pacman -S kde-meta<br /> see <a href="https://wiki.archlinux.org/index.php/KDE_Packages " >
  	KDE package for the differences</a>';


  $installFedora = 'yum install @kde-desktop ';

  $installSuse = 'zypper install -t pattern kde4 kde4_basis ';

$title = 'DE/WM Section - KDE4 ';

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>
