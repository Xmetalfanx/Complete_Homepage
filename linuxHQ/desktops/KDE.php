<?php

    $localdename = "plasma5";

    // Old Info
    $deName = 'KDE';
    $deFeatured =  '<ul>
											<li>' . $mintHP  . '</li>
											<li> '. $fedoraHP . '</li>
											<li>' . $suseHP . '</li>';


    // installs
	$installUbuntu = 'sudo apt-get install kde-standard OR sudo apt-get install kde-full';

  $installMint =	'sudo apt-get install mint-meta-kde';

  $installFedora = 'yum install @kde-desktop ';



$title = 'DE/WM Section - KDE4 ';

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>
