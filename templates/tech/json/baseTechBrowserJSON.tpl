<?php

	$sectionTitle= 'Web Browser Section - ';
	$path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechHeader.tpl';

?>

<body onload="browserData()" >
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/techHQNavMenus.tpl'; ?>
  
  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>


<script src="http://xmetal.x10.mx/techHQ/scripts/browsers.js"></script>

<script src="/scripts/lazyload.js"> </script>

	<!-- include baseTechFooter -->
	<?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechFooter.tpl'; ?>
