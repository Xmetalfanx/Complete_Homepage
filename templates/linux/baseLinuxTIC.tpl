<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    include $rootDir . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getTICData()">

    <?php include $rootDir . '/modules/linux/linuxNavMenu.tpl'; ?>

      <div class="main-section main-section--right-wide">
        <div class="sidebar">
            <?php include $rootDir . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="ticsection" class="primary-content">

        </div>
      </div>

    <script src="/linuxHQ/scripts/ticSection-min.js"></script>

<?php include $rootDir . "/modules/footer.tpl"; ?>
