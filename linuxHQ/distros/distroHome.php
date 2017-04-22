<?php

		$title = 'Linux Distribution (AKA Version) Section';
	  $sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/templates/linux/blankTemplates/baseLinuxDistroBlank.tpl";
?>


<h1>Top Linux Distributions for new users</h1>
<div id="linuxSection">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<img src="/linuxHQ/graphics/icons/mint.png" alt="Linux Mint Icon"/><?php echo $mintHP; ?></h4>
      <div class="card-text">
        <div class="screenshots"> <?php echo $mintCin1; ?></div>
        <div class="distroHome"><? echo $mintHOME; ?></div>
        <div class="dwHome"><?php echo $mintDW; ?></div>
        <div class="specs"></div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><?php echo $ubuntuMateHP; ?></h4>
      <div class="card-text">
        <div class="screenshots">  <?php echo $UMateSS1; ?></div>
        <div class="distroHome"><?php echo $UMateHOME;  ?></div>
        <div class="dwHome"><?php echo UMateDW; ?></div>
        <div class="specs">
          <p>Minimum Requirements</p>
          <ul>
            <li>Pentium III 750 megahertz</li>
            <li>512 megabytes (MB) of RAM</li>
            <li>8 gigabytes (GB) of available space on the hard disk</li>
          </ul>
          <p>Recommended</p>
          <ul>
            <li>Core 2 Duo 1.6 gigahertz</li>
            <li>2 gigabytes (GB) RAM</li>
            <li>16 gigabytes (GB) of available space on the hard disk</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">a(href='http://xmetal.x10.mx/linuxHQ/distros/ubuntu/xubuntu.php', target='_blank') Xubuntu</h4>
      <div class="card-text">
        <div class="screenshot"><?php echo $xubuntu1; ?></div>
        <div class="distroHome"><?php echo $xubuntuHOME; ?></div>
        <div class="dwHome"><?php echo xubuntuDW; ?></div>
        <div class="specs"></div>
      </div>
    </div>
  </div>
  <div id="linuxSection">
    <div class="name"><a href="/linuxHQ/distros/ubuntu/linuxLite.php" target="_blank">Linux Lite</a> <?php echo $lliteSS1; ?></div>
    <div class="distroHome"><a href="http://www.linuxliteos.com/" target="_blank">Linux Lite Homepage</a></div>
    <div class="dwHome"><?php echo $lliteDW; ?></div>
    <div class="specs">
      <ul>
        <li>
          <p>MINIMUM RECOMMENDED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 700MHz processor</li>
            <li>RAM: 512mb ram</li>
            <li>RESOLUTION: VGA screen 1024x768 resolution</li>
          </ul>
        </li>
        <li>
          <p>PREFERRED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 1.5GHz processor</li>
            <li>RAM: 1024mb ram</li>
            <li>RESOLUTION: VGA, DVI or HDMI screen 1366x768</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"> a(href='http://xmetal.x10.mx/linuxHQ/distros/ubuntu/lubuntu.php', target='_blank') Lubuntu</h4>
      <div class="card-text">
        <div class="screenshot">  <?php echo $lubuntu1; ?></div>
        <div class="distroHome"><a href="http://lubuntu.net/" target="_blank">Lubuntu Homepage</a></div>
        <div class="dwHome"><?php echo lubuntuDW; ?></div><a href="http://distrowatch.com/table.php?distribution=lubuntu" target="_blank">Lubuntu on Distrowatch</a>
        <div class="specs">
          <ul>
            <li>
              <p>Requirements</p>
              <ul>
                <li>Memory (RAM): 1 GB of RAM.</li>
                <li>Processor (CPU): The minimum specification for CPU is Pentium 4 or Pentium M or AMD K8.</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><?php echo $eOSHP; ?></h4>
      <div class="card-text">
        <div class="screenshot">  <?php echo $eosSShot1; ?></div>
        <div class="diections/featuredstroHome"><a href="http://elementary.io/" target="_blank">ElementaryOS Homepage</a></div>
        <div class="dwHome"><?php echo $elementaryDW; ?></div>
        <div class="specs">
          <ul>
            <li>Intel i3 or comparable dual-core 64-bit processor</li>
            <li>1 GB of system memory (RAM)</li>
            <li>15 GB of disk space</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>
<?php include $sitePath . "/modules/footer.tpl"; ?>
