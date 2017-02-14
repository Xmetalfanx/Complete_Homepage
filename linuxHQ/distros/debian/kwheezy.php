<?php

		$title = 'Distribution Section - KWheezy';

	$name = 'KWheezy';
	$family = 'Debian';
	$icon = '<img src="../../graphics/icons/kwheezy.png" width="90" height="95"  alt="KWheezy Icon"/>';
	$homepage = '<a href="http://www.kwheezy.com/" target="_blank">http://www.kwheezy.com/</a>';
	$download = '<a href="http://www.kwheezy.com/en/downloads/" target="_blank">http://www.kwheezy.com/en/downloads/</a>';
	$version = '1.5 (March 2014)';
	$forum = '<a href="http://www.kwheezy.com/forums/">http://www.kwheezy.com/forums/</a>';
	$distroWatch = '<a href="http://distrowatch.com/kwheezy" target="_blank">http://distrowatch.com/kwheezy</a>';
	$DE = 'KDE';
	$distroSshot = '<a href="http://wiki.rosalab.ru/en/index.php/ROSA_Release">http://www.kwheezy.com/en/tour/</a>';
	$similar = 'Debian with KDE OR SolydK';


	$recommend = ' ';
	$newbRecommend = ' ';

	$mm 					= ' ';
	$kaddy 					= ' ';
	$dasGregor 				= ' ';
	$RLZ					= ' ' ;		// Run Level Zero
	$JLT 	 				= ' '; 				// Jeff Linux Turner
	$IG		 				= ' '; 				// InfinitelyGalactic
	$tos 					= ' ';
	$spatry 				= ' ';
	$quidsup 				= ' ';
	$OhHeyItsLou 			= ' ';
	$midFingr 				= ' ';
	$UrAvgLinuxUser 		= ' ';

	$EXP = &$kwheezyExp;
  $experience = <<<EOD
	None

EOD;

	$otherComments = <<<COM

COM;



$sitePath = "/home/xmetalx1/public_html";

include $sitePath . '/linuxHQ/modules/distros.php';
include $sitePath . '/linuxHQ/modules/sshots.php';
include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
