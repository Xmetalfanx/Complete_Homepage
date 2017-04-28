<?php

    $deName = 'Cinnamon';
    $deSShot = $mintCin1 . $fedoraCinn1;
    $deFeatured = '<ul>
											<li>' . $mintHP . '</li>
											<li>'. $kororaHP . '</li>
											<li> Linux Mint Cinnamon (Debian Edition) </li> </ul>';


    $deReq = '
						<ul>
							<li> 1GB Recommended (Xmetal Comment: 2GB Minimum ... maybe even 4GB
							for comfortable use) </li>
							<li> Graphics card capable of 800×600 resolution (1024×768 recommended). </li>
							<li> ?? HDD Space </li>
		</ul>
		';

		// installs
		$installUbuntu = '

					(from <a href="http://sourcedigit.com/11091-install-cinnamon-ppa-ubuntu-14-04/" target="_blank">
														how to install Cinnamon on Ubuntu 14.04 LTS	- Noobslab Link 1</a>) <br /><br />


											(from <a href="http://www.noobslab.com/2014/06/cinnamon-desktop-is-available-for.html" target="_blank">
											how to install Cinnamon on Ubuntu 14.04 LTS	- Noobslab Link 2</a>) <br /><br />';




		$installMint =	'sudo apt-get cinnamon';
		$installDebian = ' ';
		$installArch = 'sudo pacman -S cinnamon';
		$installFedora = ' yum install @cinnamon-desktop';
		$installSuse = '<a href="https://en.opensuse.org/Portal:Cinnamon" target="_blank"> Install Cinnamon on OpenSuse </a> ';
		$installPCLOS = 'sudo apt-get task-cinnamon ';
		$installGentoo = ' ';

		$title = 'DE/WM Section - Cinnamon ';


				$sitePath = "/home/xmetalx1/public_html";
				include $sitePath . "/templates/linux/baseLinuxDE.tpl";

		?>
