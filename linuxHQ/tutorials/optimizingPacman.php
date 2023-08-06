<?php

	$pageTitle = 'Adding PPAs to any Ubuntu Based Distro';

	switch ($_SERVER['HTTP_HOST']) {
		case 'xmetal.x10.mx':
			$siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
			break;
		case 'xmetal.awardspace.us':
			$siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
			break;
		default:
			$siteRoot = 'local.domain';
			break;
	  }
	
	
	include $siteRoot . "/templates/linux/open/baseLinuxTutorBlank.tpl";

?>



<h2>Optimizing Pacman Mirrors</h2>
<h2>References</h2>
<ul>
  <li><a href="https://www.archlinux.org/mirrorlist/">Pacman Mirrorlist Generator</a></li>
  <li> <a href="https://wiki.archlinux.org/index.php/Reflector">Reflector</a>- Reflector can be used to grab the latest mirrorlist and sort them by speed, also making sure they are up-to-date</li>
  <li> <a href="https://wiki.manjaro.org/index.php/Rankmirrors_to_Set_the_Fastest_Download_Server">RankMirrors to setup the Fastest Download Server in Manjaro</a></li>
</ul>
<hr>
<h3>STEP 1 - BACKUP your mirrorlist first</h3>
<p>In case something goes wrong, you can simply restore the original list … though there ARE OTHER ways around the issue of a goofup.  Here is an example.</p>
<h4>To backup</h4><kbd>sudo&nbsp;cp&nbsp;/etc/pacman.d/mirrorlist&nbsp;mirrorlist.backup</kbd>
<h4>To restore</h4><kbd>sudo&nbsp;cp&nbsp;/etc/pacman.d/mirrorlist.backup&nbsp;mirrorlist</kbd>
<hr>
<h3>Reflector - Examples for Arch</h3>
<ul>
  <li>Filter the first 10 mirrors, sort them by download rate and save the results to /etc/pacman.d/mirrorlist:<kbd>&nbsp;reflector&nbsp;--verbose&nbsp;-l&nbsp;10&nbsp;--sort&nbsp;rate&nbsp;--save&nbsp;/etc/pacman.d/mirrorlist`</kbd></li>
  <li>Rate the 100 most recently synchronized HTTP servers, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:</p><kbd>&nbsp;reflector&nbsp;-l&nbsp;100&nbsp;-p&nbsp;http&nbsp;--sort&nbsp;rate&nbsp;--save&nbsp;/etc/pacman.d/mirrorlist</kbd></li>
  <li>Rate the 50 most recently synchronized HTTP servers located in the US, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:<kbd>reflector --country 'United States' -l 50 -p http --sort rate --save /etc/pacman.d/mirrorlist</kbd></li>
</ul>
<hr>
<h3>Manjaro</h3>
<ul>
  <li>Update the Mirrorlist<kbd>&nbsp;sudo&nbsp;pacman-mirrors&nbsp;-g</kbd></li>
  <li>
    <ul> 
      <li>Syncing your Pacman Database</li>
      <li>The Pacman database has a list of installable packages and by syncing this database, you assure yourself that your system has the newest list of packages available TO DOWNLOAD</li>
    </ul><kbd>sudo&nbsp;pacman&nbsp;-Syy</kbd>
  </li>
  <p><em>Updating via pacman is planned for an entirely other section, by the way</p>
</ul>


<?php require $siteRoot ."/modules/footer.tpl"; ?>
