<?php

	$sectionTitle= 'Web Browser Section - ';
  include($rootDir . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserAddonData()">
    <?php include $rootDir . '/modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include $rootDir . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>

      <!-- include baseTechFooter -->
      <?php include $rootDir . '/modules/tech/baseTechFooter.tpl'; ?>

    </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons-min.js"></script>



