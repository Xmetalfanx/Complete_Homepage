<?php

	$sectionTitle = 'Software Section - ';

	include $sitePath . '/techHQ/modules/variables/icons.php';
	include $sitePath . '/modules/tech/baseTechHeader.tpl';
?>


<body onload="softwareData()">
 
  <?php include $sitePath . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div id="mainBody" class="row">
		<div class="col-xs-12 col-md-2">
			<?php include $sitePath . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="col-xs-12 col-md-10">

		</div>
	</div>

<!-- Call to my software.js file here --> 
<script src="/scripts/lazyload.js"> </script>
<script src="/techHQ/scripts/software.js"></script>

<!-- include baseTechFooter -->
<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
