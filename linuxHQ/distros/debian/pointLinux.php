<?php

			$title = 'Distribution Section -  Point Linux'

			$icon = '<img src="../../graphics/icons/point.png" width="90" height="78"  alt="Point Linux Icon"/>'

			$distroSshot = '<a href="http://pointlinux.org/screenshots.html" target="_blank">http://pointlinux.org/screenshots.html</a> '

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

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
