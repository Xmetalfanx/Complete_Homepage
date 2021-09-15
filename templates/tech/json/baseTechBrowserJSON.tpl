<?php

	$sectionTitle= 'Web Browser Section - ';
	include $rootDir . '/modules/tech/baseTechHead.tpl';

?>

<body onload="browserData()" >
  <?php include $rootDir . '/modules/tech/techHQNavMenus.tpl'; ?>

  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php include $rootDir . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>


<script src="http://xmetal.x10.mx/techHQ/scripts/browsers-min.js"></script>


<!-- include baseTechFooter -->
<?php include $rootDir . '/modules/tech/baseTechFooter.tpl'; ?>
