<?php

    $deName = 'Cinnamon';

    $deSShot = '$mintCinnSS1';

    $deFeatured = '<ul>
						<li> . $mintMP .  </li>
						<li> .  $kororaMP . </li>
						<li> Linux Mint Cinnamon (Debian Edition) </li>
            </ul>';

    $deReq = '<ul>
  					<li> 1GB Recommended (Xmetal Comment: 2GB Minimum ... maybe even 4GB
  							for comfortable use) </li>
  					<li> Graphics card capable of 800×600 resolution (1024×768 recommended). </li>
  					<li> ?? HDD Space </li>
          	</ul>';

	// installs
	$installUbuntu = '(from <a href="http://sourcedigit.com/11091-install-cinnamon-ppa-ubuntu-14-04/" target="_blank">
		  how to install Cinnamon on Ubuntu 14.04 LTS	- Noobslab Link 1</a>) <br /><br />


			(from <a href="http://www.noobslab.com/2014/06/cinnamon-desktop-is-available-for.html" target="_blank">
			how to install Cinnamon on Ubuntu 14.04 LTS	- Noobslab Link 2</a>) <br /><br />';

		$installMint =	'sudo apt-get cinnamon';
		$installFedora = ' yum install @cinnamon-desktop';
	

		$title = 'DE/WM Section - Cinnamon ';

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>
