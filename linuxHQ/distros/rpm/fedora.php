<?php

$localName = 'fedora';



		$download = '  <a href="http://fedoraproject.org/get-fedora.html" target="_blank">http://fedoraproject.org/get-fedora.html</a><br>
      <a href="http://torrent.fedoraproject.org/" target="_blank">http://torrent.fedoraproject.org/</a><br>
      <a href="http://mirrors.fedoraproject.org/publiclist" target="_blank">http://mirrors.fedoraproject.org/publiclist</a> ' ;


		$distroSshot = '<a href="/linuxHQ/screenshots/DE/fedoraGnome1.jpg">
				<img src="/linuxHQ/screenshots/DE/fedoraGnome1.jpg" alt="Fedora Gnome Screenshot"/>	</a>' . '<a href=" https://spins.fedoraproject.org/cinnamon/ " target="_blank">
						<img src="/linuxHQ/screenshots/rpm/fedoraCinn1.jpg" alt="Fedora Cinnamon Screenshot"/>	</a>';


  $title = 'Distribution Section -Fedora ';

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
