<?php

		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/linuxHQ/modules/variables/varIncludes.php";

		include $sitePath . "/templates/linux/baseLinuxTIC.tpl";

		$title = 'Theme/Icon/Cursor Section - Arc-Theme ';



	  $PaperThemeName = '<a href="https://snwh.org/paper" target="_blank"> Paper GTK Theme</a>';
		$PaperThemeSShot = '<img src="#" alt="Noobslab Arc-Theme screenshot" /> <br />
								  Image courtesy of <a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html"
								  target="_blank"> </a> ';

		$PaperThemeGHHome = '<a href="https://github.com/snwh/paper-gtk-theme" target="_blank">Paper Theme on Github</a>';
		$PaperThemeNSHome = '<a href="http://www.noobslab.com/2015/11/material-design-suite-offers-theme-and.html" target="_blank">Paper GTK Theme on Noobslab</a>';

		$PaperThemeUsage = '';

		$TICSShot = $PaperThemeSShot;
		$TICName = $PaperThemeName;
		$GHHome = $PaperThemeGHHome;
		$NSHome = $PaperThemeNSHome;


		$TICUsage = $PaperThemeUsage;
?>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
