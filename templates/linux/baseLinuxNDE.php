# Include CumlativeInclude.php line here
<?php

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/massLinuxIncludes.tpl";
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

	  <div id="mainBody">
        <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxNDesktopEnvCol1.php'); ?>
        <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxNDEContent.php'); ?>
    </div>
