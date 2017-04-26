<?php
        $title = 'Distribution Section - Arch Linux';

        $name = 'Arch Linux ';
        $family = 'Arch';
        $icon = '<img src="../../graphics/icons/arch.png" width="90" height="84"  alt="Arch Linux Icon"/>';
        $homepage = '<span class="Info"><a href="http://www.archlinux.org/" target="_blank">http://www.archlinux.org/</a></span> ';
        $download = '<a href="http://www.archlinux.org/download/" target="_blank">http://www.archlinux.org/download/</a> ';
        $version = 'Mid 2014 ';
        $forum = '<a href="http://bbs.archlinux.org/" target="_blank">http://bbs.archlinux.org/</a> ';
        $distroWatch = 'http://distrowatch.com/arch ';
        $DE = ' Cinnamon, Enlightenment, GNOME, KDE, LXDE, MATE, Xfce';
        $distroSshot = ' ';
        $target  = 'Moderate to Advanced Users';
        $type = 'Rolling Release';
        $software = 'Bleeding Edge';
		$YTPlaylist = '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJeLcpMeVcMwbODBKBj8wqVm">Arch Review Playlist</a>    ';
		$TweakPL = '<a href=" https://www.youtube.com/playlist?list=PL67B5FFD9848E5DD6  ">Midfingr\'s Arch install Playlist </a>   ';


        $recommend = 'Yes';
        $newbRecommend = 'Basically "No", just because I wouldn\'t recommend an Arch based Distro to any new user';


        $mm 			= ' ';
        $kaddy 			= ' ';
        $dasGregor 		= ' ';
        $RLZ        	= ' ';        // Run Level Zero
        $JLT     		= ' ';                         // Jeff Linux Turner
        $IG         	= ' ';                         // InfinitelyGalactic
        $tos 			= ' ';
        $spatry 		= ' ';
        $quidsup 		= ' ';
        $OhHeyItsLou 	= ' ';
        $midFingr 		= ' ';
        $UrAvgLinuxUser = ' ';


        $EXP = &$archExp;
        $experience = <<<EXP
             I have been been using Arch as one of my main distros and one of my favorites for about 2 years now

EXP;

        $description = <<<DES

         Arch Linux is a very custmizable distro that a user can build from the ground up and install any Desktop Environment
         they choose and have tons of control over their system

DES;


$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
