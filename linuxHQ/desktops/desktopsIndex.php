<!-- Note to Self: div Home IS needed ... i GOOFED .... the title tag should be a link to MY PAGE on the DE while the Home DIV tag is a link to the Desktop's Homepage -->
<?php

		$title = 'Linux Desktop (AKA Version) Section';

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . '/templates/linux/massLinuxIncludes.tpl';
		include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>


<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="https://solus-project.com/budgie/">Budgie</a></h4>
    <div class="card-text">
      <div class="DEs hidden-xs hidden-sm"><?php echo $budgie1 . $budgie3 . $budgie3; ?>
        <!-- Plan, so I dont forget: desktopInfo contains both panels, dePanel will be the same for both panels AND DEFeatures and DESpecs SHOULD be removable -->-->
        <div class="dePanel"><span class="title">Distros that feature:</span>Solus (Main distro), Budgie Remix (Budgie on Ubuntu base)</div>
        <div class="dePanel"><span class="title">CPU speed:</span><span class="title">Memory for Comfortable USE:</span><span class="title">My Comments:</span></div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="http://developer.linuxmint.com/">Cinnamon</a></h4>
    <div class="card-text">
      <div class="DEs hidden-xs hidden-sm"><?php echo $mintCin1 . $fedoraCinn1; ?>
        <!-- Plan, so I dont forget: desktopInfo contains both panels, dePanel will be the same for both panels AND DEFeatures and DESpecs SHOULD be removable-->
      </div>
      <div class="dePanel"><span class="title">Distros that feature:</span><?php echo "Linux Mint" . $fedoraHOME . "Arch"; ?></div>
      <div class="dePanel"><span class="title">CPU speed:</span>512MB<span class="title">Memory:</span>1GHz<span class="title">My Comments:</span>I would say a MINIMUM OF maybe in the 1.8GHz+ for the processor (guessing there) ... and at least 2GB of RAM for COMFORTABLE usage, myself</div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="https://www.gnome.org/">Gnomeshell/Gnome 3</a></h4>
    <div class="card-text">
      <div class="DEs"><?php echo $fedoraGnome1 . $suseGnome1; ?>
        <div class="dePanel"><span class="title">Distros that Feature:</span><?php echo $archHOME . $fedoraHOME . $suseHOME ?></div>
        <div class="dePanel"><span class="title">CPU speed:</span>768MB<span class="title">Memory for Comfortable USE:</span>400MHz<span class="title">My Comments:</span>There is NO WAY I can respectfully agree with this...  My 2.2Ghz dualcore, 4GB Toshiba from 2009, would be an indicator OF THE MINIMUM I would even think of .. these specs have to be an UN-updated spec for Gnome2 but not Gnome3/Gnomeshell .. see "Mate" for the so called continuation of Gnome2, below</div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="http://lxde.org/">LXDE/LXQT</a></h4>
    <div class="card-text">
      <div class="DEs"><?php	echo $lxleSShot1; ?>
        <div class="dePanel"><span class="title">Distros that Feature:</span><?php echo Lubuntu . LXLE . PepperMint . $archHOME; ?></div>
        <div class="dePanel"><span class="title">CPU speed:</span>128MB<span class="title">Memory:</span>266MHz<span class="title">My Comments:</span>I am not 100% sure on these recommendations, though if there is one option listed for "lower end specs" that may be fine  with specs like these... LXDE/LXQT (note to self: put in link to explain LXDE-vs-LXQT here) would be the option that works good on lower end hardware.</div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="http://xmetal.x10.mx/linuxHQ/desktops/mate.php" target="_blank">Mate</a></h4>
    <div class="card-text">
      <p>Updated DE that some &#39;consider&#39; a continuation of &#39;Gnome 2&#39; and it’s look and feel</p>
      <div class="DEs"><?php echo $mintMate1 . $mintMate2; ?></div>
      <div class="home"><a href="http://mate-desktop.org/" target="_blank">Mate Homepage</a>
        <div class="dePanel"><span class="title">Distros that Feature:</span><?php echo $UMateHome . $fedoraHOME . $mintHOME; ?></div>
        <div class="dePanel"><span class="title">CPU speed:</span>512MB<span class="title">Memory:</span>800MHz<span class="title">My Comments:</span>I am not sure what I would say for "Comfortable" usage daily, though I have the Ubuntu Mate Pi2 version here, and while not perfect at times ... consider the cost of the Pi2 + accessories (for an example) ... it is REALLY not too bad</div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="/linuxHQ/desktops/KDE.php">Plasma 5 (aka &apos;KDE 5&apos;)</a></h4>
    <div class="card-text"></div>
    <div class="DEs"><?php echo $antergosKDE1 . $manjaroKDE5 . $kaosKDE1; ?>
      <div class="home"><span class="title">Home<a href="https://www.kde.org/workspaces/plasmadesktop/" target="_blank"></a>Plasma 5 (aka &apos;KDE 5&apos;)
          <div class="dePanel"><span class="title">Distros that feature:</span><?php echo Antergos, $archHOME, $suseHOME , $fedoraHOME , Kubuntu , $mintHOME; ?></div>
          <div class="dePanel"><span class="title">CPU speed:</span>1GHz<span class="title">Memory:</span>615MB<span class="title">My Comments:</span>I am not sure if these are KDE4 or Plasma 5 specs listed above though I would say at LEAST 2GB of RAM and 1.7GHZ+ for the processor.</div></span></div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="http://www.xfce.org/">XFCE</a></h4>
    <div class="card-text">
      <div class="DEs"><?php echo $manjaroXFCE1 . $xubuntu1; ?>
        <div class="dePanel"><span class="title">
            Distros that feature:
            <?php $mintHOME . Xubuntu . $fedoraHOME . $suseHOME; ?></span></div>
        <div class="dePanel"><span class="title">CPU speed:</span>192 MB<span class="title">Memory for Comfortable USE:</span>300Mhz<span class="title">My Comments:</span>I'd say it may run at those specs above, though my thinking is at least 512MB of RAM to 768MB MINIMUM and maybe oh ...  1GHz for "regular" usage of what you'd probably want to do</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <div class="card-text"><a href="https://renewablepcs.wordpress.com/about-linux/kde-gnome-or-xfce/?_utm_source=1-2-2" target="_blank">GOOD SITE with default app info and spec information about Desktop Envirnoments.. much of the info the specs (not counting my thoughts) are from this site ... all credit goes to this website, linked here</a></div>
    </div>
  </div>
</div>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
