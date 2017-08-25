<?php

   $deName = 'Mate';
    $deSShot = $mintMateOff . $mintMate1 . $mintMate2;
    $deFeatured = '<ul>
										<li> ' . $Fedora . ' Mate + Compiz </li>
										<li>' . $mintHP . ' Mate</li>
										<li> Linux Mint Mate (Debian Edition), </li>
										 <li>' . $ubuntuMateHP . ' </li>
									</ul>';


		$installFedora = 'yum install @mate-desktop';
		$installSuse = ' <a href="http://en.opensuse.org/Portal:MATE" target="_blank">Suse Mate Portal</a> ';
	
		$title = 'DE/WM Section - Mate ';

		$sitePath = "/home/xmetalx1/public_html";
  	include $sitePath . "/templates/linux/baseLinuxDE.tpl";

?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
