<!-- Note to Self: div Home IS needed ... i GOOFED .... the title tag should be a link to MY PAGE on the DE while the Home DIV tag is a link to the Desktop's Homepage 



<?php

		$title = 'Linux Desktop (AKA Version) Section';

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . '/templates/linux/massLinuxIncludes.tpl';
		include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>

<div class="panel panel-default">
		<div class="panel-heading">
				<a href="https://solus-project.com/budgie/">Budgie</a>
		</div>
		<div class="panel-body">

						<div class="DEs hidden-xs hidden-sm">
							<?php
									echo $budgie1 . $budgie3 . $budgie3;
							?>
						</div>

						<!-- Plan, so I dont forget: desktopInfo contains both panels, dePanel will be the same for both panels
						AND DEFeatures and DESpecs SHOULD be removable -->
						<div id="desktopInfo">
							<div class="dePanel">
				          <span class="title">Distros that feature:</span> Solus (Main distro),
				              Budgie Remix (Budgie on Ubuntu base)
							</div>

							<div class="dePanel">
				            <p><span class="title">CPU speed:</span>		</p>
				            <p><span class="title">Memory for Comfortable USE: </span> <p>
				            <p><span class="title">My Comments: </span>		</p>
						</div>

						</div>
		  </div> <!-- Ends panel body -->
</div>


<div class="panel panel-default">
		<div class="panel-heading">
			<a href="http://developer.linuxmint.com/">Cinnamon</a>
		</div>
		<div class="panel-body">
			<div class="DEs hidden-xs hidden-sm">
				<?php
						 echo $mintCin1;
						 echo $fedoraCinn1;
				?>
			</div>

				<!-- Plan, so I dont forget: desktopInfo contains both panels, dePanel will be the same for both panels
						 AND DEFeatures and DESpecs SHOULD be removable -->
					<div id="desktopInfo">
							<div class="dePanel">
								<span class="title">Distros that feature:</span> Linux Mint . $fedoraHOME . Arch
							</div>

							<div class="dePanel">
								<p><span class="title">CPU speed:</span> 512MB	</p>
								<p><span class="title">Memory: </span> 1GHz <p>
								<p><span class="title">My Comments: </span> I would say a MINIMUM OF maybe in
									the 1.8GHz+ for the processor (guessing there) ... and at least 2GB of RAM
									 for COMFORTABLE usage, myself
								</p>
							</div>
				</div>
		  </div> <!-- Ends panel body -->
</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="https://www.gnome.org/">Gnomeshell/Gnome 3</a></h3>
  </div>
  <div class="panel-body">
			<div class="DEs">
				<?php
						echo $fedoraGnome1 . $suseGnome1;
				?>
			</div>
			<div class="home"></div>
			<div class="dePanel">
					<span class="title">Distros that feature:</span>
							$archHOME . $fedoraHOME . $suseHOME
			</div>
			<div class="dePanel">
					<p><span class="title">CPU speed:</span> 768MB	</p>
					<p><span class="title">Memory for Comfortable USE: </span> 400MHz <p>
					<p><span class="title">My Comments: </span> There is NO WAY I can respectfully
							 Agree with this...  My 2.2Ghz dualcore, 4GB Toshiba from 2009, would be an
							  indicator OF THE MINIMUM I would even think of .. these specs have to be an
								UN-updated spec for Gnome2 but not Gnome3/Gnomeshell .. see "Mate" for the
								so called continuation of Gnome2, below
					</p>
			</div>
  </div>

</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">

		<div id="DESection">
					<div class="DEName"><a href="http://lxde.org/">LXDE/LXQT</a></div>
					<div class="DEs">
						<?php
								echo $lxleSShot1;
					  ?>
					</div>
					<div id="desktopInfo">
							<div class="dePanel">
								<span class="title">Distros that Feature: </span> Lubuntu, LXLE, PepperMint , $archHOME
							</div>
							<div class="dePanel">
								<p><span class="title">CPU speed:</span> 128MB		</p>
								<p><span class="title">Memory: </span> 266MHz<p>
								<p><span class="title">My Comments: </span>	I am not 100% sure on these
									recommendations, though if there is one option listed for "lower end specs"
									that may be fine  with specs like these... LXDE/LXQT (note to self: put in
									 link to explain LXDE-vs-LXQT here)	would be the option that works good on
									 lower end hardware.
								</p>
							</div>
						</div>
		</div>
  </div>

</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">


		<div id="DESection">
					<div class="DEName">
						<a href="http://xmetal.x10.mx/linuxHQ/desktops/mate.php" target="_blank">Mate</a>
					</div>

							<p>Updated DE that some &#39;consider&#39; a continuation of &#39;Gnome 2&#39;
							and it’s look and feel</p>

					<div class="DEs">
						<?php
								echo $mintMate1 . $mintMate2;
					  ?>
					</div>
					<div class="home">
						<a href="http://mate-desktop.org/" target="_blank">Mate Homepage </a>
					</div>

					<div id="desktopInfo">

					<div class="dePanel">
						<span class="title">Distros that Feature:</span>
						<?php echo  $UMateHome . $fedoraHOME . $mintHOME;		?>
					</div>

					<div class="dePanel">
							<p><span class="title">CPU speed:</span> 512MB	</p>
							<p><span class="title">Memory: </span> 800MHz<p>
							<p><span class="title">My Comments: </span>	I am not sure what I would say
								for "Comfortable" usage daily, though I have the Ubuntu Mate Pi2 version
								here, and while not perfect at times ... consider the cost of the Pi2 +
							accessories (for an example) ... it is REALLY not too bad
							</p>
					</div>
				</div>
		</div>




  </div>

</div>





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">
		<div class="DEName">
					<a href="/linuxHQ/desktops/KDE.php">Plasma 5
						(aka &#39;KDE 5&#39;)</a>
					</div>

					<div class="DEs">
						<?php
								echo $antergosKDE1 . $manjaroKDE5 . $kaosKDE1;
						 ?>

					</div>
					<div class="home">
						<span class="title">
								<a href="https://www.kde.org/workspaces/plasmadesktop/" target="_blank">
									Plasma 5 (aka &#39;KDE 5&#39;)</a>
						</span>
					</div>
					<div id="desktopInfo">

					<div class="dePanel">
						<span class="title">Distros that feature:</span>
						<!-- (Below) doesn't look right to me -->
							 Antergos, $archHOME, $suseHOME , $fedoraHOME , Kubuntu , $mintHOME
					</div>


					<div class="dePanel">

							<p><span class="title">CPU speed:</span>  1GHz	</p>
							<p><span class="title">Memory: </span> 615MB<p>
							<p><span class="title">My Comments: </span>	I am not sure if these are KDE4 or
							   Plasma 5 specs listed above though I would say at LEAST 2GB of RAM and 1.7GHZ+
							   for the processor.	</p>
					</div>
				</div>

  </div>

</div>



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="http://www.xfce.org/">XFCE</a></h3>
  </div>
  <div class="panel-body">

		<div class="DEs">
			<?php
					echo $manjaroXFCE1 . $xubuntu1;
			?>

		</div>
			<div id="desktopInfo">
					<div class="dePanel">
							<span class="title">Distros that feature:</span> $mintHOME , Xubuntu . $fedoraHOME . $suseHOME
					</div>

					<div class="dePanel">
							<p>CPU speed:192 MB</p>
							<p>Memory for Comfortable USE: 300Mhz <p>

							<p>My Comments: I'd say it may run at those specs above, though my thinking
								is at least 512MB of RAM to 768MB MINIMUM and maybe oh ...  1GHz for "regular"
								usage of what you'd probably want to do		</p>
					</div>
				</div>
  </div>



<div class="panel panel-default">
  <div class="panel-body">
		<a href="https://renewablepcs.wordpress.com/about-linux/kde-gnome-or-xfce/?_utm_source=1-2-2" target="_blank">
		GOOD SITE with default app info and spec information about Desktop Envirnoments.. much of the info the specs (not counting my thoughts)
		are from this site ... all credit goes to this website, linked here</a>
  </div>
</div>


<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
