<?php

		$title = 'Distribution Section -  Sabayon Linux';

		$name = 'Sabayon Linux';
		$family = 'Gentoo ';
		$icon = '<img src="" width="90" height="94"  alt="Sabayon Icon"/> ';
		$homepage = '   <a href="http://www.sabayon.org/" target="_blank">Sabayon Linux Homepage</a> ';
		$download = '	<a href="http://www.sabayon.org/download" target="_blank">Sabayon Linux forum/</a> ';
		$version = '14.12.1 ';
		$forum = '<a href="http://forum.sabayon.org/ " target="_blank">Sabayon Linux Forum</a>';
		$distroWatch = '<a href="http://distrowatch.com/table.php?distribution=sabayon" target="_blank">Calculate Distrowatch Page</a> ';
		$DE = 'XFCE, KDE  ';
		$distroSshot = ' ';

		$recommend = ' ';
		$newbRecommend = ' ';

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

    $EXP = '';
		$experience = <<<EOD


EOD;

		$otherComments = <<<COM

COM;


			$description = <<<DES


DES;



$sitePath = "/home/xmetalx1/public_html";

include $sitePath . '/linuxHQ/modules/distros.php';
include $sitePath . '/linuxHQ/modules/sshots.php';
include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
