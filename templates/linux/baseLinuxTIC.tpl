<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';
    $sitePath = '/home/xmetalx1/public_html';

    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<body>
    <?php include $sitePath . '/modules/linux/linuxNavMenu.tpl'; ?>
    <div id="mainBody" class="row col-12">
        <div class="col-xs-12 col-md-2">
            <?php include $sitePath . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div class="col-xs-12 col-md-10">
            <?php include $sitePath . '/linuxHQ/modules/TICMainSection.tpl'; ?>
        </div>

        </div>

    <?php include $sitePath . "/modules/footer.tpl"; ?>
