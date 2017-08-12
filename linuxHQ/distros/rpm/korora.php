<?php

$localName = 'korora';



 $description = <<<DES
     Korora is an easy to use Linux distribution based on Fedora that has RPM Fusion repositories (a well known source
     for addition software in Fedora) configured and Codecs �working out of the box�.  Another plus is that some spins (different
     Desktops that is) of Korora seem to come with Numix Icons which are thought of by many to be the best looking icon sets
     out for Linux.

DES;


  // Multi-lines
  $myComments = 'Korora is a Fedora respin that contains many of the common &quot;tweaks&quot;/Additions that are done to fully customize Fedora... all &quot;out of the box&quot; and done for the user ';

  $title = 'Distribution Section - Korora';

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
