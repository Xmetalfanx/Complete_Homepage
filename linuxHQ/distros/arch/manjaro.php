<?php

    include $sitePath . ('/linuxHQ/modules/sshots.php');

    $distroSshot = '<a href="/linuxHQ/screenshots/archbased/manjaro-090p1-kde.jpg">
  	<img src="/linuxHQ/screenshots/archbased/manjaro-090p1-kde_small.jpg" alt="Manjaro KDE screenshot" />	</a>'  . '<a href="/linuxHQ/screenshots/archbased/manjaro-090p1-xfce.jpg"><img src="/linuxHQ/screenshots/archbased/manjaro-090p1-xfce.jpg" alt=" Manjaro XFCE  " /> </a>';


    $title = 'Distribution Section -  Manjaro';


    $localName = 'manjaro';


    $sitePath = "/home/xmetalx1/public_html";

    include $sitePath . "/templates/linux/baseLinuxDistro.tpl";


?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
