<?php

$localName = 'ubuntu';


	$distroSshot = '<a href="/linuxHQ/screenshots/ubuntu/ubuntu.jpg">
			<img src="/linuxHQ/screenshots/ubuntu/ubuntu.jpg" alt="ubuntu screenshot" />	</a>';

   $description = <<<DES
    Ubuntu is one of the most popular versions of Linux and sometimes distribution that sparks strong opinions (for and against it).  Some like the Ubuntu default &amp;Unity &amp; desktop, while others do not.  Lucky for all user there are respins of Ubuntu that include the Gnome, KDE, LXDE, and XFCE Desktops

DES;

  $title = 'Distribution Section - Ubuntu';


	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	?>
	<?php include $sitePath . "/modules/footer.tpl"; ?>
