<?php

	$pageTitle = 'Debian';

	$localdistroName = 'debian';

	$sectionVar = "distro";


	$download = '<a href="http://www.debian.org/distrib/ftplist" target="_blank">http://www.debian.org/distrib/ftplist</a> <br />
      <a href="http://www.debian.org/CD/" target="_blank">Debian on CD</a> ';


	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
