<?php

$localName = 'opensuse';



	$download 	= '<a href="http://software.opensuse.org/" target="_blank">http://software.opensuse.org/</a><br>
    <a href="http://mirrors.opensuse.org/list/all.html" target="_blank">http://mirrors.opensuse.org/list/all.html</a> ' ;

	$distroSshot = '<a href="/linuxHQ/screenshots/rpm/suseKDE1.jpg">
			<img src="/linuxHQ/screenshots/rpm/suseKDE1-small.jpg" alt="OpenSuse KDE" /> </a> ' . '<a href="/linuxHQ/screenshots/DE/suseGnome1.jpg">
				<img src="/linuxHQ/screenshots/DE/suseGnome1.jpg" alt="OpenSuse Gnome Screenshot"/>
														</a> ';


  $title = 'Distribution Section - OpenSUSE ';

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

	?>
	<?php include $sitePath . "/modules/footer.tpl"; ?>
