<?php
	$name = 'KDE Neon';
  $family = 'Ubuntu';
  $icon = '<img src="/linuxHQ/graphics/icons/kubuntu.png" width="90" height="91"  alt="Ubuntu Icon"/>';
  $homepage = '<a href="https://neon.kde.org"> (KDE)Neon Homepage</a> ' ;
	$download = '<a href="https://neon.kde.org/download">Neon Downloads</a> ';
	$version = 'User Edition (more bleeding edge), User LTS (Long Term Support ) Edition ';
	$forum = '<a href="https://forum.kde.org">Neon\'s Forums</a> ' ;
	$distroWatch = '<a href="http://distrowatch.com/table.php?distribution=kdeneon">Neon</a>';
	$DE = 'KDE';
	$distroSshot = '';
	$similar = ' Linux Mint KDE edition OR Ubuntu with kde-standard/kde-full installed OR Netrunner (Ubuntu based .. .not the rolling release)';

  $description = <<<DES

DES;

  $EXP = &$ubuntuExp;

	$recommend = 'Yes ';
	$newbRecommend = 'Yes ' ;

  // Multi-lines
  $myComments = ' ';
  $experience = ' ' ;
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

  $title = 'Distribution Section - Kubuntu';

	$sitePath = "/home/xmetalx1/public_html";

	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
