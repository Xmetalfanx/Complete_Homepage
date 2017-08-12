<?php

	$title = 'Distribution Section -  Debian';

	$icon = '<img src="../../graphics/icons/debian.png" width="93" height="114"  alt="Debian Icon"/> ';

	$download = '<a href="http://www.debian.org/distrib/ftplist" target="_blank">http://www.debian.org/distrib/ftplist</a> <br />
      <a href="http://www.debian.org/CD/" target="_blank">Debian on CD</a> ';


	$distroSshot = '<a href="/linuxHQ/screenshots/debian/debian.jpg">
							<img src="/linuxHQ/screenshots/debian/debian-small.jpg" /></a>';

	$YTPlaylist = '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJeeTlI3BEHVMxYbKYy74ABJ" target="_blank">Debian Review Playlist</a>    ';
		$TweakPL = ' ';


  $EXP = &$debianExp;

	$recommend = ' ';
	$newbRecommend = ' ';

	$mm			= ' ';
	$kaddy			= ' ';
	$dasGregor		 = ' ';
	$RLZ			 = ' ' ;		// Run Level Zero
	$JLT 			 = ' ' ;				// Jeff Linux Turner
	$IG				= ' ' ;				// InfinitelyGalactic
	$tos				= ' ';
	$spatry			= ' ';
	$quidsup			= ' ';
	$OhHeyItsLou		 = ' ';
	$midFingr		= ' ';
	$UrAvgLinuxUser	 = ' ';


	$sitePath = "/home/xmetalx1/public_html";

	include $sitePath . '/linuxHQ/modules/distros.php';
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	?>
	<?php include $sitePath . "/modules/footer.tpl"; ?>
