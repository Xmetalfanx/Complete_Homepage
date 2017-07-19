<?php

    $title = 'Distribution Section -  Antergos';

    $name = 'Antergos (formerly Cinnarch)';
    $family = 'Arch';
    $icon = '<img src="/linuxHQ/graphics/icons/antergos.png" width="90" height="90"  alt="Antergos Icon"/>';
    $homepage = ' <?php echo $antergosHOME; ?> ';
    $download = '<a href="http://www.antergos.com/try-it/" target="_blank">http://www.antergos.com/try-it/</a> ';
    $version = 'May 2014 ';
    $forum = '<span class="Info"> <a href="http://forum.antergos.com/">http://forum.antergos.com/</a></span> ';
    $distroWatch = '<a href="http://distrowatch.com/antergos" target="_blank">http://distrowatch.com/antergos</a> ';
    $DE = 'Gnome(Shell), KDE ';
    $distroSshot = '<a href="/linuxHQ/screenshots/archbased/antergosKDE1.jpg">
  						 <img src="/linuxHQ/screenshots/archbased/antergosKDE1.jpg" alt=" Antergos KDE " /> </a>';
    $similar = ' (with the same DE) Manjaro';

    $target = 'Any User';
    $type = 'Rolling Release';
    $software = 'Bleeding Edge';

    $recommend = 'Yes';
    $newbRecommend = 'No';

    $EXP = &$antergosExp;

    $experience = <<<EXP

    Downloaded in June 2014, and have only tried the KDE edition. This may be the BEST (and I am not a KDE fan) I have ever seen KDE ..
    It has been on my older &quot;2007-ish&quot; desktop for a few months now and though I do not use that computer everyday, It is being
    updated often and Antergos has not broken yet

EXP;

	$otherComments = <<<COM

COM;

        $mm 			        = ' ';
        $kaddy 			       = ' ';
        $dasGregor 		      = ' ';
        $RLZ        	      = ' ';        // Run Level Zero
        $JLT     		        = ' ';                         // Jeff Linux Turner
        $IG         	      = ' ';                         // InfinitelyGalactic
        $tos 			           = ' ';
        $spatry 		           = ' ';
        $quidsup 		        = ' ';
        $OhHeyItsLou          	= ' ';
        $midFingr 		        = ' ';
        $UrAvgLinuxUser  = ' ';


       $description = <<<DES
        Antergos which is formerly known as Cinnarch, is an Arch Spin that gives you the choice of many Desktops and is a great choice for
        a pre-configured Arch System that is completely compatible with the Arch User Repository (AUR).

DES;


$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . '/modules/footer.tpl'; ?>
