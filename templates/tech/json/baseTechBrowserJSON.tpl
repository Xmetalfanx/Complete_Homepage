<?php

	$sectionTitle= 'Web Browser Section - ';
	include $siteRoot . '/modules/tech/baseTechHead.tpl';

?>

<body onload="browserData()" >
  <?php include $siteRoot . '/modules/tech/techHQNavMenus.tpl'; ?>

  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php include $siteRoot . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>


<script src="http://xmetal.x10.mx/techHQ/scripts/browsers-min.js"></script>


<!-- include baseTechFooter -->
<?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>
