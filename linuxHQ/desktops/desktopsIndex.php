
<?php

		$title = 'Linux Desktop (AKA Version) Section';

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/templates/linux/blankTemplates/baseLinuxDEBlank.tpl";

?>


<div id="LinuxSection">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><a href="https://solus-project.com/budgie/">Budgie</a></h4>
      <div class="card-text hidden-xs hidden-sm">
        <div class="screenshots">
					<?php echo $budgieSS1 . $budgieSS2 . $budgieSS3; ?>
				</div>

        <div class="font-weight-bold">Distros that feature:</div>Solus (Main distro), Budgie Remix (Budgie on Ubuntu base)
        <div class="font-weight-bold">CPU speed:</div>
        <div class="font-weight-bold">Memory for Comfortable USE:</div>
        <div class="font-weight-bold">My Comments:</div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<a href="http://developer.linuxmint.com/">Cinnamon</a></h4>

			<div class="card-text hidden-xs hidden-sm">
        <div class="screenshots"><?php echo $mintCinSS1 . $fedoraCinnSS1; ?></div>
        <div class="font-weight-bold">Distros that feature:</div>
				<?php echo "Linux Mint" . $fedoraHOME . "Arch"; ?>
      </div>

			<div class="linuxContainer">Requirenments
        <div class="font-weight-bold">CPU speed:</div>512MB
        <div class="font-weight-bold">Memory:</div>1GHz
        <div class="font-weight-bold">My Comments:</div>I would say a MINIMUM OF maybe in the 1.8GHz+ for the processor (guessing there) ... and at least 2GB of RAM for COMFORTABLE usage, myself
      </div>
    </div>
  </div>

	<div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<a href="https://www.gnome.org/">Gnomeshell/Gnome 3</a></h4>
      <div class="card-text">
        <div class="screenshots"><?php echo $fedoraGnome_SS1 . $suseGnome_SS1; ?></div>

				<div class="linuxContainer">
          <div class="font-weight-bold">Distros that Feature:</div><?php echo $archHOME . $fedoraHOME . $suseHOME; ?>
        </div>

				<div class="linuxContainer">
          <div class="font-weight-bold">CPU speed:</div>768MB
          <div class="font-weight-bold">Memory for Comfortable USE:</div>400MHz
          <div class="font-weight-bold">My Comments:</div>There is NO WAY I can respectfully agree with this...  My 2.2Ghz dualcore, 4GB Toshiba from 2009, would be an indicator OF THE MINIMUM I would even think of .. these specs have to be an UN-updated spec for Gnome2 but not Gnome3/Gnomeshell .. see "Mate" for the so called continuation of Gnome2, below
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><a href="http://lxde.org/">LXDE/LXQT</a></h4>
      <div class="card-text">
        <div class="screenshots"><?php	echo $lxleSS1; ?></div>

				<div class="linuxContainer">
          <div class="font-weight-bold">Distros that Feature:</div><?php echo $lubuntuHOME . $LXLEHOME . $PepperMintHOME . $archHOME; ?>
        </div>

				<div class="linuxContainer">
          <div class="font-weight-bold">CPU speed:</div>128MB
          <div class="font-weight-bold">Memory:</div>266MHz
          <div class="font-weight-bold">My Comments:</div>I am not 100% sure on these recommendations, though if there is one option listed for "lower end specs" that may be fine  with specs like these... LXDE/LXQT (note to self: put in link to explain LXDE-vs-LXQT here) would be the option that works good on lower end hardware.
        </div>
      </div>
    </div>
  </div>

	<div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<a href="http://xmetal.x10.mx/linuxHQ/desktops/mate.php" target="_blank">Mate</a></h4>

			<div class="card-text">
        <p>Updated DE that some &#39;consider&#39; a continuation of &#39;Gnome 2&#39; and it’s look and feel</p>
        <div class="screenshots">
					<?php echo $mintMateSS1 . $mintMateSS2; ?>
				</div>
        <div >
					<a href="http://mate-desktop.org/" target="_blank">Mate Homepage</a>

					<div class="linuxContainer">
            <div class="font-weight-bold">Distros that Feature:</div><?php echo $UMateHome . $fedoraHOME . $mintHOME; ?>
          </div>

					<div class="linuxContainer">
            <div class="font-weight-bold">CPU speed:</div>512MB<br />
            <div class="font-weight-bold">Memory:</div>800MHz<br />
            <div class="font-weight-bold">My Comments:</div>I am not sure what I would say for "Comfortable" usage daily, though I have the Ubuntu Mate Pi2 version here, and while not perfect at times ... consider the cost of the Pi2 + accessories (for an example) ... it is REALLY not too bad
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<a href="/linuxHQ/desktops/KDE.php">Plasma 5 (aka &apos;KDE 5&apos;)</a></h4>
      <div class="card-text">

				<div class="screenshots">
					<?php echo $antergosKDE1 . $manjaroKDE5 . $kaosKDE_SS1; ?></div>
          <div class="font-weight-bold">
						<a href="https://www.kde.org/workspaces/plasmadesktop/" target="_blank"></a>Plasma 5 (aka &apos;KDE 5&apos;)
            <div class="linuxContainer">
							<span class="title">Distros that feature:</span>
							<?php echo $antergosHOME, $archHOME, $suseHOME , $fedoraHOME , $kubuntuHOME , $mintHOME; ?></div>
            <div class="linuxContainer">
							<span class="font-weight-bold">CPU speed:</span>1GHz<br />
							<span class="font-weight-bold">Memory:</span>615MB <br />
							<span class="font-weight-bold">My Comments:</span>I am not sure if these are KDE4 or Plasma 5 specs listed above though I would say at LEAST 2GB of RAM and 1.7GHZ+ for the processor.</div>
          </div>

      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><a href="http://www.xfce.org/">XFCE</a></h4>
      <div class="card-text">
        <div class="screenshots"><?php echo $manjaroXFCE1 . $xubuntuSS1; ?></div>
          <div class="linuxContainer">
            <div class="font-weight-bold">
              Distros that feature:
              <?php $mintHOME . $xubuntuHOME . $fedoraHOME . $suseHOME; ?>
            </div>
          </div>

          <div class="linuxContainer">
            <div class="font-weight-bold">CPU speed:</div>192 MB
            <div class="font-weight-bold">Memory for Comfortable USE:</div>300Mhz
            <span class="title">My Comments:</span>I'd say it may run at those specs above, though my thinking is at least 512MB of RAM to 768MB MINIMUM and maybe oh ...  1GHz for "regular" usage of what you'd probably want to do
          </div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <div class="card-text">
		  <a href="https://renewablepcs.wordpress.com/about-linux/kde-gnome-or-xfce/?_utm_source=1-2-2" target="_blank">
			  GOOD SITE with default app info and spec information about Desktop Envirnoments.. much of the info the specs (not counting my thoughts) are from this site ... all credit goes to this website, linked here</a></div>
    </div>
  </div>
</div>

</div>

<?php include $sitePath . "/modules/footer.tpl"; ?>
