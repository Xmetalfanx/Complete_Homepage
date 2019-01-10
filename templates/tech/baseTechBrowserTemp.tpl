<?php

	$sectionTitle= 'Web Browser Section - ';

	include $sitePath . '/modules/tech/baseTechHeader.tpl';
	include $sitePath . '/techHQ/modules/techderequest.php';

?>
<body>
  <?php include $sitePath . '/modules/tech/techHQNavMenus.tpl'; ?>
  
  <div id="mainBody" class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php include $sitePath . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>




	<!-- include baseTechFooter -->
	<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
