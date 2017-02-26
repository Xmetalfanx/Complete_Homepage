<?php
	$name = 'Lubuntu';
  $family = 'Ubuntu';
  $icon = '<img src="./linuxHQ/graphics/icons/lubuntu.png" width="90" height="91"  alt="Ubuntu Icon"/>';
  $homepage = '<a href="http://www.lubuntu.org/">Lubuntu Homepage</a> ' ;
	$download = '<a href="http://ubuntuforums.org/tags.php?tag=lubuntu">Lubuntu Forum</a> ';
	$version = '14.04 LTS, 16.04 LTS ';
	$forum = '<a href="http://ubuntuforums.org/">http://ubuntuforums.org/</a> ' ;
	$distroWatch = ' ';
	$DE = 'LXDE';
	$distroSshot = '';
	$similar = 'Lubuntu';

       $description = <<<DES

DES;

  $EXP = &$ubuntuExp;

	$recommend = 'No ';
	$newbRecommend = 'No ' ;

  // Multi-lines
  $myComments = ' ';
  $experience = '9.04, 9.10, (I left when they switched to Unity, though I have given Unity a chance), 14.04....
  I do not hate Unity as much as I use to, though it is still not close to my favorite &quot;Desktop&quot; and still seems sluggish to me ' ;
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

  $title = 'Distribution Section - Ubuntu';


	$sitePath = "/home/xmetalx1/public_html";

	include $sitePath . '/linuxHQ/modules/distros.php';
	include $sitePath . '/linuxHQ/modules/sshots.php';
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	?>
