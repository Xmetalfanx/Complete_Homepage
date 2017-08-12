<?php

	$icon = '<img src="../../graphics/icons/korora.png" width="90" height="90"  alt="Korora Icon"/>';

 $description = <<<DES
     Korora is an easy to use Linux distribution based on Fedora that has RPM Fusion repositories (a well known source
     for addition software in Fedora) configured and Codecs �working out of the box�.  Another plus is that some spins (different
     Desktops that is) of Korora seem to come with Numix Icons which are thought of by many to be the best looking icon sets
     out for Linux.

DES;


	$recommend = 'Yes ';
	$newbRecommend = ' ' ;

  // Multi-lines
  $myComments = 'Korora is a Fedora respin that contains many of the common &quot;tweaks&quot;/Additions that are done to fully customize
								Fedora... all &quot;out of the box&quot; and done for the user ';


  $EXP = &$kororaExp;
  $experience = ' ' ;
  $recComments = ' ' ;
  $newbRecComments = ' '   ;

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


  $title = 'Distribution Section - Korora';


	$sitePath = "/home/xmetalx1/public_html";


	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
