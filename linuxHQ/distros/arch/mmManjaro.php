<?php

		$title = 'Distribution Section -  Matthew Moore\'s Manjaro';

    $icon = '<img src="../../graphics/icons/manjaro.png" width="90" height="85"  alt="Manjaro by MM Icon"/>';

		$YTPlaylist = '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJcy08E10KjszvKf-gSmLcag">Manjaro Review Playlist</a>  ';

    $recommend = ' ';
    $newbRecommend = ' ';

  $EXP = &$manjaroExp;
	$experience = <<<EXP

	<p>.89 and .8.10</p>
	<p>mainly in XFCE</p>

EXP;

	$otherComments = <<<COM

	  <p>This is a customized version of Manjaro XFCE Edition which contains addition software, tweaks
	  and customizations, as well as other items Matthew Moore decides to add to a default install of
	  Manjaro XFCE.</p>
	  <p>On a personal note, I find that its easy to do many of these additions/tweaks, myself ..
	  .though for me, using this distribution, is like using Manjaro that has already had the
	  customizations I personally like to do, ALREADY DONE.</p>
	  <p>This is one of my favorites, to be honest.</p>
        include $sitePath . '/linuxHQ/modules/distros.php';
        include $sitePath . '/linuxHQ/modules/sshots.php';
COM;

        $mm                = ' ';
        $kaddy             = ' ';
        $dasGregor         = ' ';
        $RLZ               = ' ';        // Run Level Zero
        $JLT               = ' ';                        // Jeff Linux Turner
        $IG                = ' ';                       // InfinitelyGalactic
        $tos               = ' ';
        $spatry            = ' ';
        $quidsup           = ' ';
        $OhHeyItsLou       = ' ';
        $midFingr          = ' ';
        $UrAvgLinuxUser    = ' ';


      $sitePath = "/home/xmetalx1/public_html";
      include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

        ?>



	<?php include $sitePath . "/modules/footer.tpl"; ?>
