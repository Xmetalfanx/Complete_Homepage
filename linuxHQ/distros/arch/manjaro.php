<?php

include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');


        $name = 'Manjaro';
        $family = 'Arch';
        $icon = '<img src="../../graphics/icons/manjaro.png" width="90" height="85" alt="Manjaro Icon" />';
        $homepage = '<a href="https://manjaro.github.io">https://manjaro.github.io</a> ';
        $download = '<a href="http://manjaro.org/get-manjaro/">http://manjaro.org/get-manjaro/</a> ';
        $version = '15';
        $forum = '<a href="http://forum.manjaro.org/">http://forum.manjaro.org/</a> ';
        $distroWatch = '<a href="http://distrowatch.com/manjaro">http://distrowatch.com/manjaro</a> ';
        $DE = ' ';
        $distroSshot = '<a href="/linuxHQ/screenshots/archbased/manjaro-090p1-kde.jpg">
      								<img src="/linuxHQ/screenshots/archbased/manjaro-090p1-kde_small.jpg" alt="Manjaro KDE screenshot" />	</a>'  . '<a href="/linuxHQ/screenshots/archbased/manjaro-090p1-xfce.jpg"><img src="/linuxHQ/screenshots/archbased/manjaro-090p1-xfce.jpg" alt=" Manjaro XFCE  " /> </a>';
		    $similar = '(with the same DE..) Antergos';

        $target = 'Any User';
        $type = 'Rolling Release';
        $software = 'Slightly Older than, Bleeding Edge';
        $YTPlaylist = '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJcTUd-HPh9CxBvHkrsDGOes" target="_blank">Manjaro Review Playlist </a> ';
        $TweakPL = '<a href="https://www.youtube.com/playlist?list=PLrh2y86lvcJdWswQb8L7CODT56wt-j17x "  target="_blank">Manjaro Tweak Playlist </a>   ';

        $recommend = 'Yes';
        $recComments = ' ';


        $newbRecommend = 'Yes';
        $newbRecComments = ' ';


  $EXP = &$manjaroExp;
  $experience = <<<EXP


  <p>.89 and .8.10</p>
  <p>mainly in XFCE, though I have (say for a few hours each, played with LXDE, KDE, Gnome(Shell),
  Pantheon (aka elementary OS's DE... never got it to fully work correctly), and some LXQT</p>
  <br />

EXP;

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



      $title = 'Distribution Section -  Manjaro';


      $sitePath = "/home/xmetalx1/public_html";

      include $sitePath . "/templates/linux/baseLinuxDistro.tpl";


?>
