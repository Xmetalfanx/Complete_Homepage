<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    $sitePath = '/home/xmetalx1/public_html';
    $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
<body onload="getTICData()">
    
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

    <div class="row">
        <div class="col-xs-12 col-md-2">
            <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="TICSection" class="col-xs-12 col-md-10">
        
        </div>

    </div>

    <script src="http://xmetal.x10.mx/linuxHQ/scripts/ticSection.js"></script>


    <?php $path = getenv('DOCUMENT_ROOT'); include $path . "/modules/footer.tpl"; ?>