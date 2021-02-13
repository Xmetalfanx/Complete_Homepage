<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    $path = getenv('DOCUMENT_ROOT');
    include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
<body onload="getTICData()">

    <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

      <div class="main-section main-section--right-wide">
        <div class="sidebar">
            <?php include $path . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="ticsection" class="primary-content">

        </div>
      </div>

    <script src="/linuxHQ/scripts/ticSection.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>
