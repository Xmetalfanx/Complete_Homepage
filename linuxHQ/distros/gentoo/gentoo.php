<?php

		$title = 'Distribution Section -  Gentoo';


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

    $EXP = &$soyldExp;
		$experience = <<<EOD

		The Theme (while different looking overall) has a Vanilla XFCE Theme look to it ...XFCE CAN BE EASILY themed,
		though my only &quot;issue&quot; is, I wish they themed it a little better out of the box, for new users

EOD;

		$otherComments = <<<COM

COM;


			$description = <<<DES


DES;


$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
