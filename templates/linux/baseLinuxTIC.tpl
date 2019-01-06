<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    $sitePath = '/home/xmetalx1/public_html';
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>
<body onload="getTICData()">
    
  <?php include $sitePath . '/modules/linux/linuxNavMenu.tpl'; ?>

    <div class="row">
        <div class="col-xs-12 col-md-2">
            <?php include $sitePath . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="TICSection" class="col-xs-12 col-md-10">
        
        </div>

    </div>

    <script src="http://xmetal.x10.mx/linuxHQ/scripts/ticSection.js"></script>
    <script src="/scripts/lazyload.js"> </script>


    <?php include $sitePath . "/modules/footer.tpl"; ?>