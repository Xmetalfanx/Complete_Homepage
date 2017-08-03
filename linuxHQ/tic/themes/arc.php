<?php

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/linuxHQ/modules/variables/varIncludes.php";

		include $sitePath . "/templates/linux/baseLinuxTIC.tpl";

		$title = 'Theme/Icon/Cursor Section - Arc-Theme ';




				$ArcThemeName = 'Arc-Theme';
				$ArcThemeSShot = '<img src="/linuxHQ/tic/screenshots/arc/arc1.jpg" alt="Noobslab Arc-Theme screenshot" /> <br />
									Image courtesy of <a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html"
									target="_blank"> Noobslab </a> ';


				$ArcThemeGHHome = '<a href="https://github.com/horst3180/Arc-theme"
															 target="_blank">Arc Theme</a>';
				$ArcThemeNSHome = '<a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html" target="_blank">Arch Theme on Noobslab</a>';
				$ArcThemeUsage = 'GTK2,  GTK3, Gnome-shell';







		$TICSShot = $ArcThemeSShot;
		$TICName = $ArcThemeName;
		$GHHome = $ArcThemeGHHome;
		$NSHome = $ArcThemeNSHome;


		$TICUsage = $ArcThemeUsage;
?>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
