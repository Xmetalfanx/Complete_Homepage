<?php

    $localdename = "plasma5";

    // Old Info
  
    $deFeatured =  '<ul>
											<li>' . $mintHP  . '</li>
											<li> '. $fedoraHP . '</li>
											<li>' . $suseHP . '</li>';


    // installs
	$installUbuntu = 'sudo apt-get install kde-standard OR sudo apt-get install kde-full';

  $installMint =	'sudo apt-get install mint-meta-kde';

  $installFedora = 'dnf install @kde-desktop ';

  $pageTitle = 'KDE /Plasma 5';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>
