<?php

	$sectionTitle= 'Web Browser Section - ';
	include $path . '/modules/tech/baseTechHead.tpl';

?>

<body onload="browserData()" >
  <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php include $path . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>


<script src="http://xmetal.x10.mx/techHQ/scripts/browsers.js"></script>

<script src="/scripts/lazysizes.min.js"> </script>

<!-- include baseTechFooter -->
<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
