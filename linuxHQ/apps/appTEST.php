<?php

	$title = 'App Section - ';
	$content =<<<EOD

			 <div id="AppSection">
			 <p> EVERYTHING BELOW THIS POINT IS JUST ME TESTING THINGS .... THIS IS NOT GOING TO  BE ON THE MAIN PAGE </p>

			<p>Note to self: add software boutique info here </p>


			 <h1>Libre Office (Main PPA - not nightly builds or pre-releases)</h1>
				<h2>Latest Version: <a href="https://www.libreoffice.org/download/libreoffice-fresh/">5.14</a></h2>

						<h3>Ubuntu Base</h3>
						<h4>For: <a href="https://launchpad.net/~libreoffice/+archive/ubuntu/ppa?field.series_filter=trusty">14.04/ (5.1.4-0ubuntu1~trusty1)</a> or
			 		    	<a href="https://launchpad.net/~libreoffice/+archive/ubuntu/ppa?field.series_filter=xenial">16.04 (5.1.4-0ubuntu1~xenial1)</a>
						</h4>

			 <h5><code>sudo add-apt-repository ppa:libreoffice/ppa</code></h5>


			 <h3>Arch-based</h3>
			 	<h5><code>sudo pacman -S libreoffice</code></h5>

			 <h3><a href="https://www.libreoffice.org/download/flatpak/">LibreOffice Flatpak</a></h3>

			 <h1>mintUpdater - for distros based on 14.04 OTHER THAN Linux Mint</h1>
				 <h2 id="latest-version-">Latest Version:</h2>
					<h3 id="ubuntu-base">Ubuntu-based</h3>
						<h4 id="for-14-04-only">For: 14.04 only</h4>
							<h5><code>sudo add-apt-repository ppa:ferramroberto/lffl</code></h5>



			 <h1>WPS Office</h1>
			 <h2>Latest Version: (Date: 2016-06-24) : 10.1.0.5672 Alpha 21</h2>
			 <ul>
			 		<li><strong>Note: this is still a pr-release version, though I have not had any issues in my brief tests</strong></li>
			 </ul>

			 <h3 id="ubuntu-based">Ubuntu based</h3>
			 <h4>Go to <a href="http://wps-community.org/downloads">WPS for Linux Download page</a></h4>
			 <p>Get the package needed. <em>NOTE: I am not covering how to compile WPS Office from source here</em> and install via the correct method for your distro.</p>

			 <h3 id="arch-based">Arch-based</h3>


			 </div>
EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNAPPBlank.php"); ?>
