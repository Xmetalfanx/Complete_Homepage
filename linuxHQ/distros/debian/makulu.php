<?php

	$title = 'Distribution Section - Makulu';

	$name = 'Makulu';
	$family = 'Ubuntu AND/OR Debian (Testing)';
	$icon = '<img src="../../graphics/icons/makulu.png" width="90" height="67"  alt="Makulu Icon"/> ';
	$homepage = '<a href="http://www.makululinux.com/" target="_blank">http://www.makululinux.com/</a> ';
	$download = '<a href="http://www.makululinux.com/download.htm" target="_blank">http://www.makululinux.com/download.htm</a> ';
	$version = '6.0 OR 7.0 (depends on DE ISO)';
	$forum = ' <a href="http://www.makululinux.com/apps/forums/">http://www.makululinux.com/apps/forums/</a>';
	$distroWatch = '<a href="http://distrowatch.com/makulu" target="_blank">&lt; Coming Soon&gt;</a>';
	$DE = 'XFCE';
	$distroSshot = '<a href="http://www.makululinux.com/apps/photos/">http://www.makululinux.com/apps/photos/</a> ';

  $YTPlaylist =   '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJfUVDJsAyJ2EObf_sSPrclh" target="_blank">
                        Makuku Youtobe Playlist </a>';


	$recommend = 'No';
	$newbRecommend = 'No';


  $EXP = &$makuluExp;
	$experience = <<<EXP

	 'version 5.x and briefly with 6.x'
     <span class="boldUnderline">Comments</span>: Even after a few different trys, on different hardware, I had permissions
        (couldn't do aything under either Root or my user account... I have been taking to people and Makulu did this to them too ...
        issue starts AFTER install, and you do the first update. .... before the update it is fine ... after the first update ...
        its completely broken
        </blockquote>

EXP;

	$otherComments = <<<COM

COM;

	$newUserComments = <<<NUC

		Even after a few different trys, on different hardware, I had permissions (couldn't do aything under either Root or my user account...
		I have been taking to people and Makulu did this to them too ... issue starts AFTER install, and you do the first update. ....
		before the update it is fine ... after the first update ... its completely broken

NUC;

		$mm 						= ' ';
		$kaddy 					= ' ';
		$dasGregor 			= ' ';
		$RLZ						= ' ' ;		// Run Level Zero
		$JLT 	 					= ' '; 				// Jeff Linux Turner
		$IG		 					= ' '; 				// InfinitelyGalactic
		$tos 						= ' ';
		$spatry 				= ' ';
		$quidsup 				= ' ';
		$OhHeyItsLou 		= ' ';
		$midFingr 			= ' ';
		$UrAvgLinuxUser = ' ';


		$sitePath = "/home/xmetalx1/public_html";

		include $sitePath . '/linuxHQ/modules/distros.php';
		include $sitePath . '/linuxHQ/modules/sshots.php';
		include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
