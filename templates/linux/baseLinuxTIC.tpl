<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    $path = getenv('DOCUMENT_ROOT'); 
    include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
<body onload="getTICData()">
    <div class="flexContainer">

    <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

        <div class="mainSection">
            <div class="col-xs-12 col-md-3 col-xl-2">
                <?php include $path . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
            </div>

            <div id="TICSection" class="col-xs-12 col-md-9 col-xl-10">
            
            </div>

        </div>

        <script src="/linuxHQ/scripts/ticSection.js"></script>


<?php include $path . "/modules/footer.tpl"; ?>