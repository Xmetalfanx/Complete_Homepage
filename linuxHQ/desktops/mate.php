<?php
   include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');
   include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/homepage.php');


   $deName = 'Mate';
    $deSShot = $mintMateOff . $mintMate1 . $mintMate2;
    $deFeatured = '<ul>
										<li> ' . $Fedora . ' Mate + Compiz </li>
										<li>' . $mintHP . ' Mate</li>
										<li> Linux Mint Mate (Debian Edition), </li>
										 <li>' . $ubuntuMateHP . ' </li>
									</ul>';

    $deReq = ' ';
    $deClass = ' Light to Medium Weight';

// installs
			$installUbuntu = 'sudo apt-get install mate-desktop-environment';
		$installMint =	'sudo apt-get install mint-meta-mate';
		$installDebian = ' ';
		$installArch = 'pacman -Syy mate mate-extra';
		$installFedora = 'yum install @mate-desktop';
		$installSuse = ' <a href="http://en.opensuse.org/Portal:MATE" target="_blank">Suse Mate Portal</a> ';
		$installPCLOS = 'sudo apt-get install task-mate ';
		$instalGentoo = ' emerge -av mate';

		$title = 'DE/WM Section - Mate ';

?>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
