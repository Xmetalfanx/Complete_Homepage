<?php

		$sitePath = "/home/xmetalx1/public_html";

		include $sitePath . "/linuxHQ/modules/variables/varIncludes.php";
		include $sitePath . "/templates/linux/baseLinuxTIC.tpl";

		$title = 'Theme/Icon/Cursor Section - Ambiance Theme ';



		$AmbThemeName = '<a href="http://www.ravefinity.com/p/download-ambiance-radiance-colors.html" target="_blank">Ambiance-Theme</a>';
		$AmbThemeSShot = '<img src="/linuxHQ/tic/screenshots/arc/arc1.jpg" alt="Noobslab Arc-Theme screenshot" /> <br />
								  Image courtesy of <a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html"
								  target="_blank"> Noobslab </a> ';

		$AmbThemeGHHome = '';
		$AmbThemeNSHome = '<a href="http://www.noobslab.com/2016/03/ambiance-radiance-colors-theme-suite.html" target="_blank">Ambience Theme on Noobslab</a>';
		$AmbThemeUsage = '';






		$TICSShot = $$AmbThemeSShot;
		$TICName = &$AmbThemeName;
		$GHHome = $$AmbThemeGHHome;
		$NSHome = $AmbThemeNSHome;


		$TICUsage = $AmbThemeUsage;
?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
