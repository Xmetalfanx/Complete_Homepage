<?php

			$title = 'Distribution Section -  Point Linux'

			$name = 'Point Linux'
			$family = 'Debian'
			$icon = '<img src="../../graphics/icons/point.png" width="90" height="78"  alt="Point Linux Icon"/>'
			$homepage = ' <a href="http://pointlinux.org/" target="_blank">http://pointlinux.org/</a> '
			$download = '	<a href="http://pointlinux.org/download.html" target="_blank">http://pointlinux.org/download.html</a> '
			$version = 'May 2014 '
			$forum = '<a href="http://forums.pointlinux.org/" target="_blank">http://forums.pointlinux.org/</a> '
			$distroWatch = '<a href="http://distrowatch.com/point" target="_blank">http://distrowatch.com/point</a> '
			$DE = 'Mate  '
			$distroSshot = '<a href="http://pointlinux.org/screenshots.html" target="_blank">http://pointlinux.org/screenshots.html</a> '
			$similar = 'Debian with Mate installed ';


			$recommend = ' '
			$newbRecommend = ' '

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

       $EXP = &$pointLinuxExp;


       $otherComments = <<<COM

        Nice Debian based distro though the issue I do have with it is that if
        I am not mistaken Mate is in (or can be easily added to Debian....
        The other downside is one of my favorite Debian based distros, Linux Mint Debian Edition,
        having an offical Mate version, so  (no Pun) ... &quot;I dont see the Point in Point Linux&quot;

COM;


      $description = <<<DES
        Point Linux is a preconfigued Debian based distrobution that uses the Mate Desktop OR Gnomeshell in
        newer versions.

DES;


$sitePath = "/home/xmetalx1/public_html";

include $sitePath . '/linuxHQ/modules/distros.php';
include $sitePath . '/linuxHQ/modules/sshots.php';
include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
