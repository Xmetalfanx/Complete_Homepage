 <?php
    $title = 'Distribution Section - ArchBang';

    $name = 'ArchBang';
    $family = 'Arch';
    $icon = '<img src="../../graphics/icons/archbang.png" width="90" height="89"  alt="Archbang Icon"/>';
    $homepage = ' <span class="Info"><a href="http://www.archbang.org/" target="_blank">http://www.archbang.org/</a></span> ';
    $download = '<span class="Info"><a href="http://sourceforge.net/projects/archbang/files/" target="_blank">http://sourceforge.net/projects/archbang/files/</a></span> ';
    $version = ' ';
    $forum = '<span class="Info"><a href="http://bbs.archbang.org/">http://bbs.archbang.org/</a></span> ';
    $distroWatch = ' <a href="http://distrowatch.com/archbang" target="_blank">http://distrowatch.com/archbang</a> ';
    $DE = 'Openbox ';
    $distroSshot = ' ';
    $target = 'Moderate to Advanced Users';
    $type = 'Rolling Release';
    $software = 'Bleeding Edge';
    $similar = 'Like the Arch family version of Chrunchbang ';


    $recommend = '';
    $recComments = ' ';

    $newbRecommend = ' ';
		$newbRecComments = ' Basically &quot;No&quot;, just because I wouldn\'t recommend an Arch based Distro to any new user ';

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



	$experience = <<<EXP

		Running a version from early 2014 for a few weeks

EXP;

   $description = <<<DES
       Archbang is an Arch Spin with the $DE Desktop preinstalled and preconfigured.  Archbang is geared for Arch users and users who want
       a desktop experienece that puts speed and eviencie above so called flash.

DES;


	$otherComments = <<<COM

	Only reason I removed it, was to get my hands dirty installing &quot;stock Arch Linux &quot; from scratch ...
	and if you do that (which I did) and add Openbox to Arch ... you (basically) have Arch Bang

COM;



$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
