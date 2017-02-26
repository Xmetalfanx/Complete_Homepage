<?php
	$name = 'Xubuntu';
  $family = 'Xubuntu';
  $icon = '<img src="/linuxHQ/graphics/icons/xubuntu.png"   alt="Xubuntu Icon"/>';
  $homepage = '<a href="http://www.ubuntu.com/">http://www.ubuntu.com/</a> ' ;
	$download = '<a href="http://xubuntu.org/getxubuntu/">Xubuntu Download Page</a> ';
	$version = '14.04 LTS, 16.04 LTS';
	$forum = '<a href="http://ubuntuforums.org/">Ubuntu Forums</a> ' ;
	$distroWatch = ' ';
	$DE = 'XFCE';
	$distroSshot = '';
	$similar = 'SolydX, Linux Mint if you add XFCE, Linux Lite ';

       $description = <<<DES

DES;

  $EXP = &$ubuntuExp;

	$recommend = 'No ';
	$newbRecommend = 'No ' ;

  // Multi-lines
  $myComments = ' ';
  $experience = '9.04, 9.10,, 14.04....
   ' ;
  $recComments = ' ' ;
  $newbRecComments = ' ';

	$mm = ' ' ;
	$kaddy = ' ' ;
	$dasGregor = ' ' ;
	$RLZ	 = ' ' 	;	// Run Level Zero
	$JLT 	 = ' ' 	;			// Jeff Linux Turner
	$IG		 = ' ' 	;			// InfinitelyGalactic
	$tos = ' ' ;
	$spatry = ' ' ;
	$quidsup = ' ' ;
	$OhHeyItsLou = ' ' ;
	$midFingr = ' ' ;
	$UrAvgLinuxUser = ' ';

  $title = 'Distribution Section - Xubuntu';


	$sitePath = "/home/xmetalx1/public_html";

	include $sitePath . '/linuxHQ/modules/distros.php';
	include $sitePath . '/linuxHQ/modules/sshots.php';
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	?>
