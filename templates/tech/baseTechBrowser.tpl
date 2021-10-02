<?php

	$sectionTitle= 'Web Browser Section - ';
  include($siteRoot . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserData()">

      <?php include $siteRoot . '/modules/tech/techHQNavMenus.tpl'; ?>

      <div class="main-section--right-wide">
        <div class="sidebar">
          <?php include $siteRoot . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
        </div>

        <div id="browserSection" class="primary-content">

        </div>
       <!-- include baseTechFooter -->
        <?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>

      </div>


    <script type="application/javascript" src="/techHQ/scripts/browsers-min.js"></script>



