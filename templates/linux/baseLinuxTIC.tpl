<?php
    $sectionTitle = 'Linux Themes/Icon/ Section - ';

    include $siteRoot . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getTICData()">

    <?php include $siteRoot . '/modules/linux/linuxNavMenu.tpl'; ?>

      <div class="main-section main-section--right-wide">
        <div class="sidebar">
            <?php include $siteRoot . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="ticsection" class="primary-content">

        </div>
      </div>

    <script src="/linuxHQ/scripts/ticSection-min.js"></script>

<?php include $siteRoot . "/modules/footer.tpl"; ?>
