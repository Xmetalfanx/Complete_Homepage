<?php

		$sitePath = "/home/xmetalx1/public_html";

		$YosThemeName = '<a href="http://www.sundman.ca/themes/yosembiance/" target="_blank"> Yosembiance Theme</a>';
    $YosThemeSShot = '<img src="#" alt="Noobslab Arc-Theme screenshot" /> <br />
                  Image courtesy of <a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html"
                  target="_blank">  </a> ';

    $YosThemeGHHome = '<a href="https://github.com/bsundman/Yosembiance" target="_blank">Yosembiance Theme on Github</a>';
    $YosThemeNSHome = '<a href="http://www.noobslab.com/2016/03/ambiance-radiance-colors-theme-suite.html" target="_blank">Yosembiance Theme on Noobslab</a>';
    $YosThemeGLHome = '<a href="https://www.gnome-look.org/content/show.php/Yosembiance?content=167293" target="_blank"> Yosembiance Theme on Gnome-look</a>';
    $YosThemeUsage = 'GTK3';


		$TICSShot = &$YosThemeSShot;
		$TICName = &$YosThemeName;
		$GHHome = &$YosThemeGHHome;
		$NSHome = &$YosThemeNSHome;
		$TICUsage = &$YosThemeUsage;

		include $sitePath . "/linuxHQ/modules/variables/varIncludes.php";
		include $sitePath . "/templates/linux/baseLinuxTIC.tpl";

		$title = 'Theme/Icon/Cursor Section - Arc-Theme ';




?>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
